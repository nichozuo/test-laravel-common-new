<?php

namespace App\Enums;

use LaravelCommonNew\App\Traits\EnumTrait;

/**
 * @intro 你好类型
 */
enum HelloTypeEnum: string
{
    use EnumTrait;

    case Label = 'Value';
}
