@extends('member.layouts.master')
@section('content')
    @if (count($products) > 0)
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        @if ($products[0]->category_name && !$products[0]->brand_name)
                        <h2>{{$products[0]->category_name}}</h2>
                        @endif
                        @if ($products[0]->brand_name && !$products[0]->category_name)
                        <h2>{{$products[0]->brand_name}}</h2>
                        @endif
                        @if ($products[0]->brand_name && $products[0]->category_name)
                        <h2>Resulf: {{$keyword}}</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <h6 style="cursor: pointer" class="widget-title mb-30">Catagories</h6>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            @foreach ($categories as $ca)
                                            <li><a href="{{ route('category', $ca->category_id) }}">{{$ca->category_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <h6 style="cursor: pointer" class="widget-title mb-30">Brands</h6>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            @foreach ($brands as $br)
                                            <li><a href="{{ route('brand', $br->brand_id) }}">{{$br->brand_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>{{ $productCount }}</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($products as $pr)
                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img style="width:200px; height:230px;" src="{{ $pr->image_paths[0]->image_url }}" alt="">
                                        <!-- Hover Thumb -->
                                        <img style="width:200px; height:230px;" class="hover-img" src="{{ $pr->image_paths[1]->image_url }}" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-{{ $pr->discount }}</span>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        @if($pr->category_name && !$pr->brand_name)
                                            <span>{{$pr->category_name}}</span>
                                        @endif
                                        @if($pr->brand_name && !$pr->category_name)
                                            <span>{{$pr->brand_name}}</span>
                                        @endif
                                        @if($pr->category_name && $pr->brand_name)
                                        <span>{{$pr->category_name}}</span>
                                        @endif
                                        <a href="{{ route('product', $pr->product_id) }}">
                                            <h6>{{$pr->product_name}}</h6>
                                        </a>
                                        <p class="product-price"><span class="old-price">{{$pr->price}} VND</span>{{ ($pr->price) - (($pr->price * $pr->discount_number) / 100) }} VND</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
    @else
    <div class="breadcumb_area bg-img" style="background-image: url({{asset('img/bg-img/breadcumb.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>No result</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection