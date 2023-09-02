<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SortNameEnum extends Enum
{
    const OLDEST_POST_FIRST   = 1;
    const LASTEST_POST_FIRST  = 2;
}
