<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends BaseController
{   
    public function __construct()
    {
        $name = "Nhân Viên";
        view()->share('name', $name);
    }

    public function getList(Request $request)
    {   
        $query = User::where('member_type', 2)->select('*');
        $filters = [
            'users.name' => [
                'where' => 'like',
                'value' => null,
            ],
            'users.user_id' => [
                'where' => '=',
                'value' => null,
            ],
        ];
        $filters['users.name']['value'] = $request->name ?? '';
        $filters['users.user_id']['value'] = $request->id ?? '';

        foreach ($filters as $key => $where) {
            if (!$where['value']) {
                continue;
            }
            if ($where['where'] == 'like') {
                $query = $query->where($key, 'like', '%' . $where['value'] . '%');
            } elseif ($where['where'] == '=') {
                $query = $query->where($key, '=', $where['value']);
            }
        }

        $users = $query->paginate(10);

        return view('admin.pages.employee.list', compact('users'));
    }

    public function getAdd()
    {
        return view('admin.pages.employee.add');
    }

    public function getEdit($id)
    {   
        $user = User::findOrFail($id);

        return view('admin.pages.employee.edit', compact('user'));
    }

    public function postAdd(Request $request) 
    {
        $formData = $request->all();
        $arr = [
            'member_type' => 2,
            'password' => bcrypt('123456')
        ];
        $data = array_merge($formData, $arr);
        User::create($data);

        return redirect(route('listEmployee'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $data = $request->all();
        $item = User::findOrFail($id);
        $item->update($data);

        return redirect(route('editEmployee', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect(route('listEmployee'))->with('message', 'Xóa thành công!');
    }
}
