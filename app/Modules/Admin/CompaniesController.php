<?php


namespace App\Modules\Admin;


use App\Models\Companies;
use App\Modules\AdminBaseController;
use Illuminate\Http\Request;
use Exception;
use LaravelCommonNew\App\Exceptions\Err;

/**
 * @intro 公司
 */
class CompaniesController extends AdminBaseController
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
        return Companies::ifWhereLike($params, 'name')
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
            'bosses_id' => 'required|integer', # 所属老板
			'name' => 'required|string', # 名字
        ]);
        Companies::unique($params, ['name'], '名称');
        Companies::create($params);
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
            'bosses_id' => 'required|integer', # 所属老板
			'name' => 'required|string', # 名字
        ]);
        Companies::unique($params, ['name'], '名称');
        Companies::idp($params)->update($params);
    }

    /**
     * @intro 查看
     * @param Request $request
     * @return Companies
     * @throws Err
     */
    public function show(Request $request): Companies
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        return Companies::GetById($params['id']);
    }

    /**
     * @intro 删除
     * @param Request $request
     * @return void
     */
    public function softDelete(Request $request): void
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        Companies::idp($params)->delete();
    }

    /**
     * @intro 恢复软删除
     * @param Request $request
     * @return void
     */
    public function restore(Request $request): void
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        Companies::withTrashed()->idp($params)->restore();
    }

    /**
     * @intro 强制删除
     * @param Request $request
     * @return void
     */
    public function delete(Request $request): void
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        Companies::withTrashed()->idp($params)->forceDelete();
    }
}
