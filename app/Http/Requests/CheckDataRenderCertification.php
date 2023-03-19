<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckDataRenderCertification extends FormRequest
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
            'certification.name' => [
                'required',
                'string',
                'max:100',
                'min:5',
            ],
            'certification.organization' => [
                'required',
                'string',
                'max:100',
                'min:5',
            ],
            'certification.issue_date' => [
                'required',
                'date',
            ],
            'certification.expiration_date' => [
                'required',
                'date',
                'after:certification.issue_date',
            ],
            'certification.credential_id' => [
                'alpha_num:ascii',
                'nullable',
            ],
            'certification.credential_url' => [
                'required',
                'url',
                'max:250',
            ],
        ];
    }
}
