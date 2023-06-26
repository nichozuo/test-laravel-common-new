<?php

namespace App\Enums;

use LaravelCommonNew\App\Traits\EnumTrait;

/**
 * @intro GirlsTypeEnum
 */
enum GirlsTypeEnum: string
{
    use EnumTrait;

    /**
     * @label Label
     * @value Value
     * @color #ff0000
     */
    case Label1 = 'Value1';

    /**
     * @label Label
     * @value Value
     * @color #ff0000
     */
    case Label2 = 'Value2';
}
