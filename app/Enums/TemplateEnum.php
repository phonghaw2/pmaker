<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TemplateEnum extends Enum
{
    // Option ?
    const OptionOne     =   0;
    const OptionTwo     =   1;
    const OptionThree   =   2;

    // Type template
    const PORTFOLIO     =   1;
    const BLOG          =   2;

    // Flag
    const FLAG_EDITABLE_OFF = 0;
    const FLAG_EDITABLE_ON = 1;
}

