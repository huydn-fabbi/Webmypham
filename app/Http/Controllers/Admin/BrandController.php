<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use Illuminate\Http\Request;

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

    public function postAdd(Request $request) 
    {
        $data = $request->all();
        Brand::create($data);

        return redirect(route('listBrand'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $data = $request->all();
        $item = Brand::findOrFail($id);
        $item->update($data);

        return redirect(route('editBrand', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = Brand::findOrFail($id);
        $item->delete();

        return redirect(route('listBrand'))->with('message', 'Xóa thành công!');
    }
}
