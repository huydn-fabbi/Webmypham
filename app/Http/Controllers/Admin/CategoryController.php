<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends BaseController
{   
    public function __construct()
    {
        $name = "Danh Mục";
        view()->share('name', $name);
    }

    public function getList()
    {   
        $categories = Category::paginate(5);

        return view('admin.pages.category.list', compact('categories'));
    }

    public function getAdd()
    {
        return view('admin.pages.category.add');
    }

    public function getEdit($id)
    {   
        $category = Category::findOrFail($id);

        return view('admin.pages.category.edit', compact('category'));
    }
}
