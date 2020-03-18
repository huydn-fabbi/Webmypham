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

class BrandController extends BaseController
{   
    public function __construct()
    {
        $name = "Nhãn Hàng";
        view()->share('name', $name);
    }

    public function getList()
    {   
        $brands = Brand::paginate(5);

        return view('admin.pages.brand.list', compact('brands'));
    }

    public function getAdd()
    {
        return view('admin.pages.brand.add');
    }

    public function getEdit($id)
    {   
        $brand = Brand::findOrFail($id);

        return view('admin.pages.brand.edit', compact('brand'));
    }
}
