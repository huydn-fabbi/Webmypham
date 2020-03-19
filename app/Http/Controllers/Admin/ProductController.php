<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends BaseController
{   
    public function __construct()
    {
        $name = "Sản Phẩm";
        view()->share('name', $name);
    }

    public function getList()
    {   
        $products = Product::select('*', 'product_type', 'product_type as product_type_format')->paginate(10);

        return view('admin.pages.product.list', compact('products'));
    }

    public function getAdd()
    {
        return view('admin.pages.product.add');
    }

    public function getEdit($id)
    {   
        $product = Product::findOrFail($id);

        return view('admin.pages.product.edit', compact('product'));
    }
}
