@extends('member.layouts.master')
@section('content')
    @if (count($products) > 0)
    <div class="content_for_layout">
		<div class="breadcrumb mb40">
			<div class="container">
				<ul class="fixf">
					<li><a href="">Trang chủ</a></li>
					<li><a href="">Tìm kiếm</a></li>
					<li><a href="">Resulf: {{$keyword}}</a></li>
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
															<img src="{{ $pr->image_url }}" alt="">
														</a>
														<a href="{{ route('product', $pr->product_id) }}" class="view_detail btn"><i class="fa fa-search" aria-hidden="true"></i>Xem chi tiết</a>
														<a onclick="addCart({{$pr->product_id}});" class="view_cart btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
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
