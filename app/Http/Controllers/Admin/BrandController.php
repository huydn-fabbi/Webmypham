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

    public function getList(Request $request)
    {   
        $query = Brand::select('*');
        $filters = [
            'brands.brand_name' => [
                'where' => 'like',
                'value' => null,
            ],
            'brands.brand_id' => [
                'where' => '=',
                'value' => null,
            ],
        ];
        $filters['brands.brand_name']['value'] = $request->name ?? '';
        $filters['brands.brand_id']['value'] = $request->id ?? '';

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

        $brands = $query->paginate(5);

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
