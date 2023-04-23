<?php

use App\Rules\CheckBadWordText;

if (!function_exists('getAndCacheBadWordList')) {
    function getAndCacheBadWordList()
    {
        return cache()->remember(
            'bad_word_list',
            86400 * 30,
            function () {
                $list = CheckBadWordText::validate('en');
                return collect(explode("\n", $list));
            }
        );
    }
}

