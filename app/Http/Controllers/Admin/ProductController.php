<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

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
        $categories = Category::select('categories.*')->get();
        $brands = Brand::select('brands.*')->get();
        $promotions = Promotion::select('promotions.*')->get();

        return view('admin.pages.product.add', compact('categories', 'brands', 'promotions'));
    }

    public function getEdit($id)
    {   
        $product = Product::findOrFail($id);
        $categories = Category::select('categories.*')->get();
        $brands = Brand::select('brands.*')->get();
        $promotions = Promotion::select('promotions.*')->get();

        return view('admin.pages.product.edit', compact('product', 'categories', 'brands', 'promotions'));
    }

    public function postAdd(Request $request) 
    {   
        $data = $request->all();
        Product::create($data);

        return redirect(route('listProduct'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $data = $request->all();
        $item = Product::findOrFail($id);
        $item->update($data);

        return redirect(route('editProduct', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect(route('listProduct'))->with('message', 'Xóa thành công!');
    }
}
