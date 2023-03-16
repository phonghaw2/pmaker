<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CheckDataStep2Request extends FormRequest
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
        return [
            'p_name' => [
                'required',
                'string',
                'max:100',
                'min:5',
            ],
            'p_about' => [
                'required',
                'string',
                'max:500',
                'min:50',
            ],
            'p_company_func' => [
                'required',
                'string',
                'max:150',
                'min:5',
            ],
            'p_address' => [
                'required',
                'string',
                'max:150',
                'min:5',
            ],
            'p_phone' => [
                'required',
                'numeric',
                'digits_between:7,11',
            ],
        ];
    }

    public function messages()
    {
        if (FacadesRequest::isMethod('get')) {
            return [];
        }
        return [
            'p_name.required' => 'Do you have a name?',
            'p_about.required' => 'Please introduce yourself a little bit',
            'p_company_func.required' => 'The field is required. Maybe "Freelance at home"',
            'p_address.required' => 'Please enter the address.',
            'p_phone.required' => 'The field is required.',
            'max' => 'The field must not be greater than :max characters.',
            'min' => 'The field must be at least :min characters.',
            'numeric' => 'Invalid phone number.',
            'digits_between' => 'The phone number must be between :min and :max digits.',
        ];
    }
}
