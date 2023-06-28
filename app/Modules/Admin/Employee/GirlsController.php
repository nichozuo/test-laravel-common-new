<?php


namespace App\Modules\Admin\Employee;


use App\Models\Girls;
use App\Modules\AdminBaseController;
use Exception;
use Illuminate\Http\Request;
use LaravelCommonNew\App\Exceptions\Err;

/**
 * @intro 女孩
 */
class GirlsController extends AdminBaseController
{
    /**
     * @intro 列表
     * @param Request $request
     * @return mixed
     * @throws Exception
    */
    public function list(Request $request): mixed
    {
        $params = $request->validate([
            'name' => 'nullable|string', # 模糊搜索：名称
        ]);
        return Girls::ifWhereLike($params, 'name')
            ->order()
            ->paginate($this->perPage());
    }

    /**
     * @intro 添加
     * @param Request $request
     * @return void
     */
    public function store(Request $request): void
    {
        $params = $request->validate([
            'type' => 'required|string', # 类型:Value1,Value2
			'name' => 'required|string', # 名字
			'phone' => 'required|string', # 手机号
        ]);
        Girls::unique($params, ['name'], '名称');
        Girls::create($params);
    }

    /**
     * @intro 修改
     * @param Request $request
     * @return void
     */
    public function update(Request $request): void
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
            'type' => 'required|string', # 类型:Value1,Value2
			'name' => 'required|string', # 名字
			'phone' => 'required|string', # 手机号
        ]);
        Girls::unique($params, ['name'], '名称');
        Girls::idp($params)->update($params);
    }

    /**
     * @intro 查看
     * @param Request $request
     * @return Girls
     * @throws Err
     */
    public function show(Request $request): Girls
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        return Girls::GetById($params['id']);
    }

    /**
     * @intro 删除
     * @param Request $request
     * @return void
     */
    public function delete(Request $request): void
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        Girls::idp($params)->delete();
    }
}
