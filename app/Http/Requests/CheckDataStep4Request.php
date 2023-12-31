<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\PatternLinkEnum;
use App\Models\Social;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CheckDataStep4Request extends FormRequest
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
        if (FacadesRequest::isMethod('get')) {
            return [];
        }

        $pattern_link_ary = PatternLinkEnum::getInstances();

        $rules = [];

        $platform = Social::all()->pluck('platform')->unique();
        dd($platform);
        foreach ($platform as $name) {
            if (!isset($pattern_link_ary[strtoupper($name)])) continue;
            $rules[$name] = [
                'nullable',
                'max:250',
                'regex:/' . $pattern_link_ary[strtoupper($name)]->value . '/i',
            ];
        }

        dd($rules);
        return [
            // 'your_website' => [
            //     'string',
            //     'max:250',
            //     'active_url',
            //     'url:http,https',
            // ],
            'facebook' => [
                'nullable',
                'max:250',
                'regex:/' . PatternLinkEnum::FACEBOOK . '/i',
            ],
            'image_facebook' => [
                'required_with:facebook',
                'nullable',
                'max:250',
            ],
            'x_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::X . '/i',

            ],
            'linked_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::LINKED . '/i',
            ],
            'youtube_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::YOUTUBE . '/i',
            ],
            'github_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::GITHUB . '/i',
            ],
            'daily_link' => [
                'string',
                'max:250',
                'active_url',
                'url:http,https',
                'regex:/' . PatternLinkEnum::DAILY . '/i',
            ],
        ];
    }

    public function messages()
    {
        if (FacadesRequest::isMethod('get')) {
            return [];
        }

        return [
            'required_with' => 'Could not find image path of :values',
        ];
    }
}
