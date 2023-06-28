<?php

namespace App\Modules\Admin;

use App\Modules\AdminBaseController;
use Illuminate\Http\Request;

/**
 * @intro 登录鉴权
 */
class AuthController extends AdminBaseController
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
