<?php

declare(strict_types=1);

namespace App\Http\Controllers\Member;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Category;
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

    public function getHotProduct()
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
        
        return view('member.pages.home', compact('hotProduct'));
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
        $productCount = $products->count();
        $products->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });

        return view('member.pages.products', compact('products', 'brands', 'categories', 'productCount'));
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
        $productCount = $products->count();
        $products->map(function($value) {
            $imagePath = $value->image_paths->first();
            if (isset($imagePath)) {
                $value['image_url'] = $imagePath->image_url;
            } else {
                $value['image_url'] = '';
            }
        });
        
        return view('member.pages.products', compact('products', 'brands', 'categories', 'productCount'));
    }

    public function getProductDetail($id)
    {
        $product = Product::select('products.*', 'categories.category_name', 'brands.brand_name')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')->where('products.product_id', $id)->with('image_paths')->first();

        return view('member.pages.product-detail', compact('product'));
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
            $brands = Brand::select('brands.*')->get();
            $categories = Category::select('categories.*')->get();
            $productCount = $products->count();

        return view('member.pages.products', compact('products', 'brands', 'categories', 'productCount', 'keyword')); 
    }

    public function getLogin()
    {
        return view('member.pages.login');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {   
    		return redirect(route('home'));
        } else 
        { 
    		return redirect(route('login'))->with('message', 'Login fail!');
    	}
    }

    public function getSignup()
    {
        return view('member.pages.signup');
    }

    public function postSignup(Request $request)
    {   
        $formData = $request->all();

        User::create([
            'member_type' => 1,
            'name' => $formData['name'],
            'email' => $formData['email'],
            'password' => bcrypt($formData['password']),
            'is_archived' => '0'
        ]);

        return redirect('login')->with('message', 'Register fail!');
    }
}
