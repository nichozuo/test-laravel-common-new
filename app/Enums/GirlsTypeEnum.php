<?php

namespace App\Enums;

use LaravelCommonNew\App\Traits\EnumTrait;

/**
 * @intro 女孩类型
 */
enum GirlsTypeEnum: string
{
    use EnumTrait;

    /**
     * @value Value
     * @color #ff0000
     */
    case Label1 = 'Value1';

    /**
     * @label Label
     * @color #ff0000
     */
    case Label2 = 'Value2';
}
