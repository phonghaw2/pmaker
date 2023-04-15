<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use PSpell\Config;

class CheckBadWordText
{
    /**
     * {@inheritdoc}
     *
     */
    public static function validate($lang)
    {
        $file_name = 'BadWordText_' . $lang . '.txt';
        $path = realpath(realpath(__DIR__ . "\\" . $file_name));
        return file_get_contents($path);
    }

    /**
     * {@inheritdoc}
     */
    public function message()
    {
        return __('Is there a bad word here!');
    }
}
