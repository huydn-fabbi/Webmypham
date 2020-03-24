<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromotionController extends BaseController
{   
    public function __construct()
    {
        $name = "Khuyến Mãi";
        view()->share('name', $name);
    }

    public function getList()
    {   
        $promotions = Promotion::select('*', 'discount', 'discount as discount_format')->paginate(5);

        return view('admin.pages.promotion.list', compact('promotions'));
    }

    public function getAdd()
    {
        return view('admin.pages.Promotion.add');
    }

    public function getEdit($id)
    {   
        $promotion = Promotion::findOrFail($id);

        return view('admin.pages.promotion.edit', compact('promotion'));
    }

    public function postAdd(Request $request) 
    {
        $data = $request->all();
        Promotion::create($data);

        return redirect(route('listSale'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $data = $request->all();
        $item = Promotion::findOrFail($id);
        $item->update($data);

        return redirect(route('editSale', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = Promotion::findOrFail($id);
        $item->delete();

        return redirect(route('listSale'))->with('message', 'Xóa thành công!');
    }
}
