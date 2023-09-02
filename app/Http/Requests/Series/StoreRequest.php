<?php

namespace App\Http\Requests\Series;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:250',
            ],
            'slug' => [
                'required',
                'string',
                'max:250',
            ],
            'describe' => [
                'required',
                'string',
                'max:200',
            ],
            'cover' => [
                'required',
                'file',
                'image',
                // 'max:50',
            ],
            'sort' => [
                'required',
            ],
        ];
    }
}
