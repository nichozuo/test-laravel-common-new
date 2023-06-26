<?php

namespace App\Modules\Admin\AdminEmployee;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * @intro 登录
     * @skipRouter true
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
