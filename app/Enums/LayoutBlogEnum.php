<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class LayoutBlogEnum extends Enum
{
    const MAGAZINE  =   0;
    const STACKED   =   1;
    const GRID      =   2;
}
