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
}
