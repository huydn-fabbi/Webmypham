@extends('member.layouts.master')
@section('content')
    @if (count($products) > 0)
    <div class="content_for_layout">
		<div class="breadcrumb mb40">
			<div class="container">
				<ul class="fixf">
					<li><a href="">Trang chủ</a></li>
					@if ($products[0]->category_name && !$products[0]->brand_name)
					<li><a href="">Danh mục</a></li>
					<li><a href="">{{ $products[0]->category_name }}</a></li>
					@endif
					@if ($products[0]->brand_name && !$products[0]->category_name)
					<li><a href="">Nhãn Hàng</a></li>
					<li><a href="">{{ $products[0]->brand_name }}</a></li>
					@endif
					@if ($products[0]->brand_name && $products[0]->category_name)
					<li><a href="">Tìm kiếm</a></li>
					<li><a href="">Resulf: {{$keyword}}</a></li>
					@endif
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="block_left t-off m-off plr10">
					<div class="wrapper_widget mb10">
						<div class="widget_head">
							<h3><a href="">Danh Mục</a></h3>
						</div>
						<div class="widget_body">
							<ul class="mega_lv0">
								@foreach ($categories as $ca)
									<li><a href="{{ route('category', $ca->category_id) }}">{{$ca->category_name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>	
					<div class="wrapper_widget mb10">
						<div class="widget_head">
							<h3><a href="">Nhãn Hàng</a></h3>
						</div>
						<div class="widget_body">
							<ul class="mega_lv0">
								@foreach ($brands as $br)
									<li><a href="{{ route('brand', $br->brand_id) }}">{{$br->brand_name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>					
				</div>	
				<div class="block_right plr10">
					<div class="block_group_cate fixf mb20">
						<div class="wrapper_form mb20">
							<div class="row">
								<div class="filter span6 plr10">
									Lọc theo
									<select class="sear_filter" name="filter_prd">
										<option value="md">Mặc định</option>
										<option value="cdt">Giá từ cao đến thấp</option>
										<option value="tdc">Giá từ thấp đến cao</option>
									</select>
								</div>
								<div class="number_prd span6 plr10">
									Số sản phẩm trên 1 trang
									<select class="sear_quantity" name="quantity_prd">
										<option value="60">6</option>
										<option value="90">9</option>
										<option value="100">12</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="clear"></div>
						<!-- <div class="fixf mb40"> -->
							<div class="body fixf">
								<div class="row">
									<div class="group_prd">
										@foreach($products as $pr)
											<div class="wrapper_prd plr10 mb40">
												<div class="item_prd">
													<div class="image">
														<a class="p1x1" href="" title="">
															<img src="{{ $pr->image_paths[0]->image_url }}" alt="">
														</a>
														<a href="{{ route('product', $pr->product_id) }}" class="view_detail btn"><i class="fa fa-search" aria-hidden="true"></i>Xem chi tiết</a>
														<a href="" class="view_cart btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
													</div>
													<div class="info">
														<h4>
															<a href="" title="">{{$pr->product_name}}</a>
														</h4>
														<div class="price">
															<span>{{$pr->price}} VND</span>
														</div>
													</div>
												</div>
											</div>	
										@endforeach							
									</div>
								</div>
							</div>
						<!-- </div> -->
					</div>
					<div class="clear"></div>
					<div class="product_fav fixf mb40">
						<div class="head_panel fixf mb20">
							<h3>
								<a href="">Sản phẩm nổi bật</a>
							</h3>
						</div>
						<div class="body fixf">
							<div class="row">
								<div class="group_prd">
									@foreach ($hotProduct as $hp)
										<div class="wrapper_prd plr10 mb20">
											<div class="item_prd">
												<div class="image">
													<a href="{{ route('product', $hp->product_id) }}" class="p1x1"><img src="{{ $hp->image_paths[0]->image_url }}" alt=""></a>
												</div>
												<div class="info">
													<h4>
														<a href="{{ route('product', $hp->product_id) }}">{{ $hp->product_name }}</a>
													</h4>
												</div>
											</div>
										</div>	
									@endforeach						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @else
    <div class="content_for_layout">
		<div class="breadcrumb mb40">
			<div class="container">
				<ul class="fixf">
					<li><a href="">Trang chủ</a></li>
					<li><a href="">Tìm Kiếm</a></li>
					<li>Không tìm thấy sản phẩm</li>
				</ul>
			</div>
		</div>
		<div class="container">
		</div>
    </div>
    @endif
@endsection
