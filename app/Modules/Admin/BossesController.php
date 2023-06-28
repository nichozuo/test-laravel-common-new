<?php


namespace App\Modules\Admin;


use App\Models\Bosses;
use App\Modules\AdminBaseController;
use Illuminate\Http\Request;
use Exception;
use LaravelCommonNew\App\Exceptions\Err;

/**
 * @intro 老板
 */
class BossesController extends AdminBaseController
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
        return Bosses::ifWhereLike($params, 'name')
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
            'name' => 'required|string', # 名字
        ]);
        Bosses::unique($params, ['name'], '名称');
        Bosses::create($params);
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
            'name' => 'required|string', # 名字
        ]);
        Bosses::unique($params, ['name'], '名称');
        Bosses::idp($params)->update($params);
    }

    /**
     * @intro 查看
     * @param Request $request
     * @return Bosses
     * @throws Err
     */
    public function show(Request $request): Bosses
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        return Bosses::GetById($params['id']);
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
        Bosses::idp($params)->delete();
    }
}
