<?php

namespace App\Modules\Admin\AdminEmployee;

use App\Http\Controllers\Controller;

/**
 * @intro 员工管理
 */
class AuthController extends Controller
{
    /**
     * @intro 登录
     * @skipInRouter true
     * @skipAuth true
     * @skipWrap true
     * @method GET|POST
     * @return string
     */
    public function login(): string
    {
        return '1';
    }
}
