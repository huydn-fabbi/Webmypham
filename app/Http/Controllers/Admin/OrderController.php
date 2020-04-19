<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\orderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends BaseController
{   
    public function __construct()
    {
        $name = "Đơn Hàng";
        view()->share('name', $name);
    }

    public function getList(Request $request)
    {   
        $query = Order::select('*', 'orders.status as status_format', 'users.name')->join('users', 'users.user_id', '=', 'orders.user_id');
        $filters = [
            'orders.order_id' => [
                'where' => '=',
                'value' => null,
            ],
            'orders.date_order' => [
                'where' => 'like',
                'value' => null,
            ],
            'orders.status' => [
                'where' => '=',
                'value' => null,
            ],
            'users.name' => [
                'where' => 'like',
                'value' => null,
            ]
        ];
        $filters['orders.order_id']['value'] = $request->id ?? '';
        $filters['orders.date_order']['value'] = $request->date_order ?? '';
        $filters['orders.status']['value'] = $request->status ?? '';
        $filters['users.name']['value'] = $request->name ?? '';

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

        $orders = $query->paginate(10);

        return view('admin.pages.order', compact('orders'));
    }

    public function postEdit($id)
    {   
        $item = Order::findOrFail($id);
        $item->update(['status' => 2]);

        return redirect(route('listOrder', $id))->with('message', 'Cập nhật đơn hàng thành công!');
    }

    public function getListDetail($id) 
    {
        $orderDetail = orderDetail::where('order_id', $id)->select('*', 'products.product_name', 'products.price', 'products.promotion_id')
        ->join('products', 'products.product_id', '=', 'order_details.product_id')
        ->paginate(10);

        return view('admin.pages.orderDetail', compact('orderDetail'));
    }
}
