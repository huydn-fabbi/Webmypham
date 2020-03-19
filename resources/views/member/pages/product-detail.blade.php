@extends('member.layouts.master')
@section('content')
<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

<!-- Single Product Thumb -->
<div class="single_product_thumb clearfix">
    <div class="product_thumbnail_slides owl-carousel">
        @foreach ($product->image_paths as $image)
        <img style="width: 100%; height: 500px" src="{{ $image->image_url }}" alt="">
        @endforeach
    </div>
</div>

<!-- Single Product Description -->
<div class="single_product_desc clearfix">
    <span>{{ $product->category_name }}</span>
    <a href="cart.html">
        <h2>{{ $product->product_name }}</h2>
    </a>
    <p class="product-price"><span class="old-price">{{ $product->price }} VND</span>{{ ($product->price) - (($product->price * $product->discount) / 100) }} VND</p>
    <p class="product-desc">{{ $product->description }}</p>
    <p style="margin-top: 4px" class="product-desc">{{ $product->content }}</p>

    <!-- Form -->
    <form class="cart-form clearfix" method="post">
        <!-- Select Box -->
        <!-- <div class="select-box d-flex mt-50 mb-30">
            <select name="select" id="productSize" class="mr-5">
                <option value="value">Size: XL</option>
                <option value="value">Size: X</option>
                <option value="value">Size: M</option>
                <option value="value">Size: S</option>
            </select>
            <select name="select" id="productColor">
                <option value="value">Color: Black</option>
                <option value="value">Color: White</option>
                <option value="value">Color: Red</option>
                <option value="value">Color: Purple</option>
            </select>
        </div> -->
        <!-- Cart & Favourite Box -->
        <div class="cart-fav-box d-flex align-items-center">
            <!-- Cart -->
            <button type="submit" name="addtocart" value="5" class="btn essence-btn">Thêm Giỏ Hàng</button>
        </div>
    </form>
</div>
</section>
<!-- ##### Single Product Details Area End ##### -->
@endsection