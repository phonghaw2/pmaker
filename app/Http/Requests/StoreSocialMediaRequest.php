<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialMediaRequest extends FormRequest
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
            'platform' => [
                'required',
                'string',
            ],
            'file_path' => [
                'required',
                'string',
                'filled',
                'max:25',
            ],
            'social_icon' => [
                'required',
                'file',
                'image',
                'max:50',
            ],
        ];
    }
}
