<?php

namespace App\Http\Requests;

use App\Enums\TemplateEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CheckDataStep3Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // block
        if(FacadesRequest::ip() == '127.1.1.1'){
            return false;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (FacadesRequest::isMethod('get')) {
            return [];
        }

        $rules = [
            'p_type' => [
                'required',
                'string',
                Rule::in([TemplateEnum::PORTFOLIO, TemplateEnum::BLOG]),
            ],
            'education' => [
                'required',
                'string',
                'max:500',
                'min:10',
            ],
        ];

        // Rule::when method doesn't work
        if (Request::input('p_type') == TemplateEnum::PORTFOLIO) {
            $rules['skill_stack'] = [
                'required',
                'string',
                'max:255',
                'min:5',
            ];
        } else {
            $rules['tech_stack'] = [
                'required',
                'string',
                'max:255',
                'min:5',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        if (FacadesRequest::isMethod('get')) {
            return [];
        }
        return [
            'required' => 'The field is required.',
            'max' => 'The field must not be greater than :max characters.',
            'min' => 'The field must be at least :min characters.',
        ];
    }
}
