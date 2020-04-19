<?php

declare(strict_types=1);

namespace App\Http\Controllers\Member;

use App\Models\Blog;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\orderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends BaseController
{
    public function __construct()
    {
        $category = Category::all();
        view()->share('category', $category);
        $brand = Brand::all();
        view()->share('brand', $brand);
    }

    public function getHome()
    {   
        $hotProduct = Product::select(
            'products.*',
            'categories.category_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->where('product_type', 3)
            ->with('image_paths')
            ->limit(6)->get();
        $hotProduct->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });
        
        $newProduct = Product::select(
            'products.*',
            'categories.category_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->where('product_type', 2)
            ->with('image_paths')
            ->limit(6)->get();
        $newProduct->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        $productCategory1 = Product::where('products.category_id', 1)->select(
            '*',
            'categories.category_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->with('image_paths')->limit(10)->get();
        $productCategory1->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        $productCategory2 = Product::where('products.category_id', 2)->select(
            '*',
            'categories.category_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->with('image_paths')->limit(10)->get();
        $productCategory2->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        $productCategory3 = Product::where('products.category_id', 3)->select(
            '*',
            'categories.category_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->with('image_paths')->limit(10)->get();
        $productCategory3->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        $blogs = Blog::limit(10)->get();

        return view('member.pages.home', compact('hotProduct', 'newProduct', 'productCategory1', 'productCategory2', 'productCategory3', 'blogs'));
    }

    public function getProductPageByCategory($id)
    {   
        $products = Product::select(
            'products.*', 
            'categories.category_name',
            'promotions.discount',
            'promotions.discount as discount_number')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('promotions', 'promotions.promotion_id', '=', 'products.promotion_id')
            ->where('products.category_id', $id)
            ->with('image_paths')->get();
        $brands = Brand::select('brands.*')->get();
        $categories = Category::select('categories.*')->get();
        $products->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });
        $hotProduct = Product::select(
            'products.*',
            'categories.category_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->where('product_type', 3)
            ->where('products.category_id', $id)
            ->with('image_paths')
            ->limit(4)
            ->get();
        $hotProduct->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        return view('member.pages.products', compact('products', 'brands', 'categories', 'hotProduct'));
    }

    public function getProductPageByBrand($id)
    {   
        $products = Product::select(
            'products.*', 
            'brands.brand_name',
            'promotions.discount',
            'promotions.discount as discount_number')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->join('promotions', 'promotions.promotion_id', '=', 'products.promotion_id')
            ->where('products.brand_id', $id)
            ->with('image_paths')->get();
        $brands = Brand::select('brands.*')->get();
        $categories = Category::select('categories.*')->get();
        $products->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });
        $hotProduct = Product::select(
            'products.*',
            'brands.brand_name')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->where('product_type', 3)
            ->where('products.brand_id', $id)
            ->with('image_paths')
            ->limit(4)
            ->get();
        $hotProduct->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });
        
        return view('member.pages.products', compact('products', 'brands', 'categories', 'hotProduct'));
    }

    public function getProductDetail($id)
    {
        $product = Product::select('products.*','categories.category_id', 'categories.category_name', 'brands.brand_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')->where('products.product_id', $id)->with('image_paths')->first();
        $brands = Brand::select('brands.*')->get();
        $categories = Category::select('categories.*')->get();
        $category_id = $product->category_id;
        $sameProduct = Product::where('category_id', $category_id)->where('product_id', '!=', $id)->select('products.*')->with('image_paths')->limit(4)->get();
        $sameProduct->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        
        return view('member.pages.product-detail', compact('product', 'brands', 'categories', 'sameProduct'));
    }

    public function getSearch(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::select(
            'products.*', 
            'categories.category_name',
            'brands.brand_name',
            'promotions.discount',
            'promotions.discount as discount_number')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('promotions', 'promotions.promotion_id', '=', 'products.promotion_id')
            ->where('product_name', 'like', '%' . $keyword . '%')
            ->with('image_paths')->get();
        $products->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });
            $brands = Brand::select('brands.*')->get();
            $categories = Category::select('categories.*')->get();
            $productCount = $products->count();

        return view('member.pages.search', compact('products', 'brands', 'categories', 'productCount', 'keyword')); 
    }

    public function getLogin()
    {
        return view('member.pages.login');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
    		$user = Auth::user();
            if($user->member_type == 3)
            {   
                return redirect(route('home'));      
            } else 
            {
                return redirect(route('listCat'));
            }
        } else 
        { 
    		return redirect(route('login'))->with('message', 'Login fail!');
    	}
    }

    public function getLogout()
    {
        Auth::logout();

    	return redirect(route('home'));
    }

    public function getSignup()
    {
        return view('member.pages.register');
    }

    public function postSignup(Request $request)
    {   
        $formData = $request->all();

        User::create([
            'member_type' => 3,
            'name' => $formData['name'],
            'email' => $formData['email'],
            'password' => bcrypt($formData['password']),
        ]);
        
        return redirect('login')->with('message', 'Đăng ký thành công');
    }

    public function postOrder(Request $request)
    {   
        if (Auth::check())
        {
            $user = Auth::user();
            $data = [
                'user_id' => $user->user_id,
                'date_order' => date('Y-m-d H:i:s'),
                'total' => Session('cart')->totalPrice,
                'payment' => 'cash',
                'note' => $request->note,
                'status' => 1
            ];
            $order = Order::create($data);
            if (count(Session('cart')->products) > 0)
            {
                foreach (Session('cart')->products as $product => $cart)
                {   
                    $detal = [
                        'order_id' => $order->order_id,
                        'product_id' => $cart['productInfo']->product_id,
                        'quanity' => $cart['quantity'],
                        'unit_price' => $cart['productInfo']->price * $cart['quantity']
                    ];
                    orderDetail::create( $detal);
                }
            }
            $request->session()->forget('cart');
            
            return redirect(route('complete'));
        }
    }

    public function getComplete()
    {
        return view('member.pages.complete');
    }

    public function getBlogDetail($id)
    {
        $blog = Blog::where('blogs.blog_id', $id)->select('blogs.*', 'users.name')->join('users', 'users.user_id', '=', 'blogs.user_id')->first();
        $user_id = $blog->user_id;
        $sameUser = Blog::where('user_id', $user_id)->select('*')->limit(4)->get();

        return view('member.pages.blog-detail', compact('blog', 'sameUser'));
    }

    public function getBlog()
    {
        $blogs = Blog::get();

        return view('member.pages.blog', compact('blogs'));
    }
}
