<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Cart;
use Session;
use App\Models\Brand;
use App\Models\Category;

class CartController extends Controller
{   
    public function __construct()
    {
        $category = Category::all();
        view()->share('category', $category);
        $brand = Brand::all();
        view()->share('brand', $brand);
    }

    public function addCart(Request $request, $id)
    {   
        $product = Product::where('product_id', $id)->with('image_paths')->first();
        $imagePath = $product->image_paths->first();

        if (isset($imagePath)) {
            $product->image_url = $imagePath->image_url;
        } else {
            $product->image_url = '';
        };

        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);

            $request->session()->put('cart', $newCart);
        }

        return view('member.pages.cart');
    }

    public function deleteCart(Request $request, $id) 
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCart($id);
        
        if (count( $newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
        } else {
            $request->session()->forget('cart');
        }

        return view('member.pages.cart');
    }

    public function listCart() 
    {
        return view('member.pages.cart-list');
    }

    public function deleteItemCart(Request $request, $id) 
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCart($id);
        
        if (count( $newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
        } else {
            $request->session()->forget('cart');
        }

        return view('member.pages.cart-ajax');
    }

    public function updateCart(Request $request, $id, $quantity)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateCart($id, $quantity);
        $request->session()->put('cart', $newCart);

        return view('member.pages.cart-ajax');
    }
}
