<?php

namespace App\Http\Requests;

use App\Enums\TemplateEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
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
        return false;
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
        return [
            'p_type' => [
                'required',
                'string',
                Rule::in([TemplateEnum::PORTFOLIO, TemplateEnum::BLOG]),
            ],
            'p_tech_stack' => [
                'required',
                'string',
                'max:100',
                'min:5',
            ],
            'p_education' => [
                'required',
                'string',
                'max:500',
                'min:50',
            ],
        ];
    }
}
