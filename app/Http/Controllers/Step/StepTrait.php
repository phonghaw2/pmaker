<?php

namespace App\Http\Controllers\Step;

use Illuminate\Http\Request;

trait StepTrait
{
    public function checkDataInArray($data)
    {
        $result = [];

        $array_dump = [
            'p_next_step',
            'p_type',
            'p_name',
            'p_about',
            'p_company_func',
            'p_address',
            'p_phone',
            'p_tech_stack',
            'p_layout_id',
        ];

        foreach ($data as $key => $value) {
            if (in_array($key, $array_dump)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    public function checkStep1Data($data = [])
    {
        $array_dump = [
            'p_name',
            'p_about',
            'p_company_func',
            'p_address',
            'p_phone',
        ];
        $result = [];

        foreach ($data as $key => $value) {
            if (in_array($key, $array_dump)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    public function checkDataCertificationStep($data = [])
    {
        $result = [];
        $array_dump = [
            'user_id',
            'name',
            'organization',
            'issue_date',
            'expiration_date',
            'credential_id',
            'credential_url',
        ];
        foreach ($data as $key => $value) {
            if (in_array($key, $array_dump)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    public function checkDataExperienceStep($data = [])
    {
        $data = [

        ];
    }
}
