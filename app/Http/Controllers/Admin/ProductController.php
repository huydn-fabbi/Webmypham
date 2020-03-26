<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ImagePath;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class ProductController extends BaseController
{   
    public function __construct()
    {
        $name = "Sản Phẩm";
        view()->share('name', $name);
    }

    public function getList(Request $request)
    {   
        $query = Product::select('*', 'product_type', 'product_type as product_type_format');
        $filters = [
            'products.product_name' => [
                'where' => 'like',
                'value' => null,
            ],
            'products.product_id' => [
                'where' => '=',
                'value' => null,
            ],
            'products.category_id' => [
                'where' => '=',
                'value' => null,
            ],
            'products.brand_id' => [
                'where' => '=',
                'value' => null,
            ],
            'products.product_type' => [
                'where' => '=',
                'value' => null,
            ],
        ];
        $filters['products.product_name']['value'] = $request->name ?? '';
        $filters['products.product_id']['value'] = $request->id ?? '';
        $filters['products.category_id']['value'] = $request->category ?? '';
        $filters['products.brand_id']['value'] = $request->brand ?? '';
        $filters['products.product_type']['value'] = $request->type ?? '';

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

        $categories = Category::select('categories.*')->get();
        $brands = Brand::select('brands.*')->get();
        $products = $query->paginate(10);

        return view('admin.pages.product.list', compact('products', 'categories', 'brands'));
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
        $images = $request->file('images');
        $data = $request->all();
        $product = Product::create($data);
        
        foreach($images as $image) {
            $imagePath = Storage::disk('uploads')->put('products' . '/' . $product->product_id, $image);
            ImagePath::create([
                'product_id' => $product->product_id,
                'image_type' => 1,
                'file_name' => $product->product_name,
                'image_url' => '/uploads' . '/' . $imagePath,
            ]);
        }

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
        $images = ImagePath::where('product_id', $id)->get();

        foreach($images as $image) {
            unlink(substr($image->image_url, 1));
            $image->delete();
        }
        $item->delete();

        return redirect(route('listProduct'))->with('message', 'Xóa thành công!');
    }
}
