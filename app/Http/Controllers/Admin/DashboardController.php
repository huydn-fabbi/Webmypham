<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BaseController
{   
    public function __construct()
    {
        $name = "Thống Kê";
        view()->share('name', $name);
    }

    public function getHome() 
    {   
        $userCount = User::where('member_type', 3)->get()->count();
        $userBuyCount = Order::distinct()->count('user_id');
        $userContactCount = Contact::distinct()->count('email');

        $productCount = Product::get()->count();
        $categoryCount = Category::get()->count();
        $brandCount = Brand::get()->count();

        $blogCount = Blog::get()->count();

        $orderCount = Order::get()->count();
        $orderUnDoneCount = Order::where('status', 1)->get()->count();
        
        return view('admin.pages.dashboard', compact(
            'userCount', 
            'userBuyCount', 
            'userContactCount',
            'productCount', 
            'categoryCount', 
            'brandCount', 
            'blogCount',
            'orderCount',
            'orderUnDoneCount'
        ));
    }
}
