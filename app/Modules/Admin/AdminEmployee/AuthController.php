<?php

namespace App\Modules\Admin\AdminEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @intro 员工管理
 */
class AuthController extends Controller
{
    /**
     * @intro 登录
     * @skipAuth true
     * @param Request $request
     * @return array
     */
    public function login(Request $request): array
    {
        $params = $request->validate([
            'username' => 'required|string', # 用户名
            'password' => 'required|string', # 密码
        ]);
        return [
            $params
        ];
    }
}
