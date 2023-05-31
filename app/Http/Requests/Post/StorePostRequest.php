<?php

namespace App\Http\Requests\Post;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'author_id' => [
                'required',
                'numeric',
            ],
            'title' => [
                'required',
                'string',
                'filled',
                'max:255',
            ],
            'context' => [
                'required',
                'string',
                'filled',
            ],
            'slug' => [
                'string',
                'max:255',
                'nullable',
            ],
            'cover_image_path' => [
                // 'required',
                'file',
                'image',
                'max:50',
            ],
            'tag' => [
                'required',
                'string',
                'max:255',
            ],
            'series_id' => [
                // 'required',
                'numeric',
                'nullable',
            ],
            'allowed_comment' => [
                'required',
                'numeric',
                // CONSTANT ON, OFF
                Rule::in(['0', '1']),
            ],
        ];
    }
}
