<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckDataRenderExperience extends FormRequest
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
            'experience.title' => [
                'required',
                'string',
                'max:100',
                'min:5',
            ],
            'experience.company_name' => [
                'required',
                'string',
                'max:100',
                'min:5',
            ],
            'experience.location' => [
                'required',
                'string',
                'min:5',
            ],
            'experience.employment_type' => [
                'required',
                'string',
                'min:5',
            ],
            'experience.start_date' => [
                'required',
                'date',
            ],
            'experience.end_date' => [
                'required',
                'date',
                'after:experience.start_date',
            ],

        ];
    }
}
