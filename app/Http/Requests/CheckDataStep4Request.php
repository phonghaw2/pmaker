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
        foreach ($platform as $name) {
            if (!isset($pattern_link_ary[strtoupper($name)])) continue;
            $rules[$name] = [
                'nullable',
                'max:250',
                'regex:/' . $pattern_link_ary[strtoupper($name)]->value . '/i',
            ];
            // Rule: image of platform
            $rules['image_' . $name] = [
                'required_with:' . $name,
                'nullable',
                'max:250'
            ];
        }

        return $rules;
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
