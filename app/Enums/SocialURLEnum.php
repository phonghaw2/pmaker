<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SocialURLEnum extends Enum
{
    const FACEBOOK = 'https://www.facebook.com/';
    const YOUTUBE = 'https://www.youtube.com/';
    const TWITTER = 'https://twitter.com/';
}
