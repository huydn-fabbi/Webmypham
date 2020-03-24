<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{   
    public function __construct()
    {
        $name = "Người Dùng";
        view()->share('name', $name);
    }

    public function getList()
    {   
        $users = User::paginate(10);

        return view('admin.pages.user.list', compact('users'));
    }

    public function getAdd()
    {
        return view('admin.pages.user.add');
    }

    public function getEdit($id)
    {   
        $user = User::findOrFail($id);

        return view('admin.pages.user.edit', compact('user'));
    }

    public function postAdd(Request $request) 
    {
        $formData = $request->all();
        $arr = [
            'member_type' => 3,
            'password' => bcrypt('123456')
        ];
        $data = array_merge($formData, $arr);
        User::create($data);

        return redirect(route('listUser'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $formData = $request->all();
        $arr = [
            'member_type' => 3,
            'password' => bcrypt('123456')
        ];
        $data = array_merge($formData, $arr);
        $item = User::findOrFail($id);
        $item->update($data);

        return redirect(route('editUser', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect(route('listUser'))->with('message', 'Xóa thành công!');
    }
}
