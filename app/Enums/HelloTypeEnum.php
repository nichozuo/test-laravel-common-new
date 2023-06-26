<?php

namespace App\Enums;

use LaravelCommonNew\App\Traits\EnumTrait;

/**
 * @intro HelloTypeEnum
 */
enum HelloTypeEnum: string
{
    use EnumTrait;

    /**
     * @label Label
     * @value Value
     * @color #ff0000
     */
    case Label = 'Value';
}
