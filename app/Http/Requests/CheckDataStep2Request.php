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
            ],
            'p_about' => [
                // 'required',
                'string',
            ],
            'p_company_func' => [
                // 'required',
            ],
            'p_address' => [
                // 'required',
                'string',
                'max:100'
            ],
            'p_phone' => [
                // 'required',
                'numeric',
                // 'digits_between:10,11',
            ],
        ];
    }

    // public function messages()
    // {
    //     dd(2);
    //     return [
    //         'p_name.required' => 'tao test message',
    //     ];
    // }
}
