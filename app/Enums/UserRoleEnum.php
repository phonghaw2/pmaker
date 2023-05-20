<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRoleEnum extends Enum
{
    const FRIEND        =   0;
    const DEVELOPER     =   1;
    const BUSINESS      =   2;
    const BLOGGER       =   3;


     // ROLE
    const ADMIN = 99;
}
