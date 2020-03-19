@extends('member.layouts.master')
@section('content')
  <!-- ##### Welcome Area Start ##### -->
  <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="hero-content">
              <h6>asoss</h6>
              <h2>New Collection</h2>
              <a href="#" class="btn essence-btn">view collection</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Welcome Area End ##### -->

  <!-- ##### Top Catagory Area Start ##### -->
  <div class="top_catagory_area section-padding-80 clearfix">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Single Catagory -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
              <div class="catagory-content">
                  <a href="#">Clothing</a>
              </div>
          </div>
        </div>
        <!-- Single Catagory -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
              <div class="catagory-content">
                  <a href="#">Shoes</a>
              </div>
          </div>
        </div>
        <!-- Single Catagory -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
              <div class="catagory-content">
                  <a href="#">Accessories</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Top Catagory Area End ##### -->

  <!-- ##### CTA Area Start ##### -->
  <div class="cta-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg-5.jpg);">
            <div class="h-100 d-flex align-items-center justify-content-end">
              <div class="cta--text">
                <h6>-60%</h6>
                <h2>Global Sale</h2>
                <a href="#" class="btn essence-btn">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### CTA Area End ##### -->

  <!-- ##### New Arrivals Area Start ##### -->
  <section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="section-heading text-center">
                <h2>SẢN PHẨM NỔI BẬT</h2>
            </div>
        </div>
      </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach ($hotProduct as $hp)
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img style="width:200px; height:230px;" src="{{ $hp->image_paths[0]->image_url }}" alt="">
                                <!-- Hover Thumb -->
                                <img style="width:200px; height:230px;" class="hover-img" src="{{ $hp->image_paths[1]->image_url }}" alt="">

                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{ $hp->category_name }}</span>
                                <a href="{{ route('product', $hp->product_id) }}">
                                    <h6>{{ $hp->product_name }}</h6>
                                </a>
                                <p class="product-price">{{ $hp->price }} VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a style="width: 45px" href="#" class="btn essence-btn">Thêm Giỏ Hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
      </div>
  </section>
  <!-- ##### New Arrivals Area End ##### -->
<section class="new_arrivals_area section-padding-80 clearfix">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <div class="section-heading text-center">
              <h2>SẢN PHẨM MỚI</h2>
          </div>
      </div>
    </div>
  </div>
  <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach ($newProduct as $np)
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img style="width:200px; height:230px;" src="{{ $np->image_paths[0]->image_url }}" alt="">
                                <!-- Hover Thumb -->
                                <img style="width:200px; height:230px;" class="hover-img" src="{{ $np->image_paths[1]->image_url }}" alt="">

                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{ $np->category_name }}</span>
                                <a href="{{ route('product', $np->product_id) }}">
                                    <h6>{{ $np->product_name }}</h6>
                                </a>
                                <p class="product-price">{{ $np->price }} VND</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Thêm Giỏ Hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
      </div>
      </section>
  <!-- ##### Brands Area Start ##### -->
  <div class="brands-area d-flex align-items-center justify-content-between">
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="img/core-img/brand1.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="img/core-img/brand2.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="img/core-img/brand3.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="img/core-img/brand4.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="img/core-img/brand5.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="img/core-img/brand6.png" alt="">
    </div>
  </div>
@endsection