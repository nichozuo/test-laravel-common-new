<?php


namespace App\Modules\Admin;


use App\Http\Controllers\Controller;
use App\Models\Hellos;
use Illuminate\Http\Request;
use Exception;
use LaravelCommonNew\App\Exceptions\Err;

/**
 * @intro 
 */
class HellosController extends Controller
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
        return Hellos::ifWhereLike($params, 'name')
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
            'name' => 'required|string', # 
        ]);
        Hellos::unique($params, ['name'], '名称');
        Hellos::create($params);
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
            'name' => 'required|string', # 
        ]);
        Hellos::unique($params, ['name'], '名称');
        Hellos::idp($params)->update($params);
    }

    /**
     * @intro 查看
     * @param Request $request
     * @return Hellos
     * @throws Err
     */
    public function show(Request $request): Hellos
    {
        $params = $request->validate([
            'id' => 'required|integer', # id
        ]);
        return Hellos::GetById($params['id']);
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
        Hellos::idp($params)->delete();
    }
}
