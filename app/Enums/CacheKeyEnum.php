<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CacheKeyEnum extends Enum
{
    public const CONFIG             =   "config_";
    public const ONE_HOUR           =   60 * 60;
    public const ONE_DAY            =   self::ONE_HOUR * 24;
    public const ONE_WEEK           =   self::ONE_DAY * 7;
    public const ONE_MONTH          =   self::ONE_WEEK * 30;
}
