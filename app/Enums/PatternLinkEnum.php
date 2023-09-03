<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PatternLinkEnum extends Enum
{
    const X = '(http|https):\/\/twitter\.com\/(.+)|(http|https):\/\/www\.twitter\.com\/(.+)';
    const GITHUB = '(http|https):\/\/github\.com\/(.+)|(http|https):\/\/www\.github\.com\/(.+)';
    const PROFILE_MAKER = '(http|https):\/\/hashnode\.com\/(.+)|(http|https):\/\/www\.hashnode\.com\/(.+)';
    const YOUTUBE = '(http|https):\/\/youtube\.com\/channel\/(.+)|(http|https):\/\/www\.youtube\.com\/channel\/(.+)|(http|https):\/\/youtube\.com\/c\/(.+)|(http|https):\/\/www\.youtube\.com\/c\/(.+)|(http|https):\/\/youtube\.com\/@([a-zA-Z0-9._-]+)|(http|https):\/\/www\.youtube\.com\/@([a-zA-Z0-9._-]+)';
    const DAILY = '(http|https):\/\/app\.daily\.dev\/(.+)';
    const LINKED = '(http|https):\/\/linkedin\.com\/in\/(.+)|(http|https):\/\/www\.linkedin\.com\/in/(.+)|(http|https):\/\/linkedin\.com\/company\/(.+)|(http|https):\/\/www\.linkedin\.com\/company/(.+)';
}
