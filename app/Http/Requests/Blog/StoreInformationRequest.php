<?php

namespace App\Http\Requests\Blog;

use App\Enums\PatternLinkEnum;
use Illuminate\Foundation\Http\FormRequest;

class StoreInformationRequest extends FormRequest
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
            'username' => [
                'required',
                'filled',
                'string',
                'max:255',
            ],
            'aboutme' => [
                'string',
                'max:255',
            ],
            'company_func' => [
                'string',
            ],
            'address' => [
                'string',
                'max:255',
            ],
            'phone_number' => [
                'numeric',
                'digits_between:7,11',
            ],
            'tech_stack' => [
                'string',
            ],
            'education' => [
                'string',
            ],
            'layout_id' => [
                'string',
            ],
            'your_website' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
            ],
            'x_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::X_URL . '/i',

            ],
            'linked_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::LINKED_URL . '/i',
            ],
            'youtube_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::YOUTUBE_URL . '/i',
            ],
            'github_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::GITHUB_URL . '/i',
            ],
            'daily_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::DAILY_URL . '/i',
            ],
            'pmaker' => [
                'string',
                'max:50',
            ],
        ];
    }
}
