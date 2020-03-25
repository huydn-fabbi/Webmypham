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

    public function getList(Request $request)
    {   
        $query = Category::select('*');
        $filters = [
            'categories.category_name' => [
                'where' => 'like',
                'value' => null,
            ],
            'categories.category_id' => [
                'where' => '=',
                'value' => null,
            ],
        ];
        $filters['categories.category_name']['value'] = $request->name ?? '';
        $filters['categories.category_id']['value'] = $request->id ?? '';

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

        $categories = $query->paginate(5);

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

    public function postAdd(Request $request) 
    {
        $data = $request->all();
        Category::create($data);

        return redirect(route('listCat'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $data = $request->all();
        $item = Category::findOrFail($id);
        $item->update($data);

        return redirect(route('editCat', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = Category::findOrFail($id);
        $item->delete();

        return redirect(route('listCat'))->with('message', 'Xóa thành công!');
    }
}
