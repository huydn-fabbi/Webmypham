@extends('member.layouts.master')
@section('content')
<div class="content_for_layout">
		<div class="slide_home arr_bx mb40">
			<a><img src="img/1.png" alt=""></a>
			<a><img src="img/1.png" alt=""></a>
			<a><img src="img/1.png" alt=""></a>
			<a><img src="img/1.png" alt=""></a>
		</div>
		<script>
		$(document).ready(function(){
		$('.slide_home').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots:true,
		autoplay: true,
		autoplaySpeed: 2000,
		});
		});
		</script>
		<div class="clear"></div>
		<div class="tab_list fixf mb60">
			<div class="container">
				<ul class="tab_uidim tab_basic nostyle mb20">
					<li class="current"><a href="#tab1">{{ $productCategory1[0]['category_name'] }}</a></li>
					<li><a href="#tab2">{{ $productCategory2[0]['category_name'] }}</a></li>
					<li><a href="#tab3">{{ $productCategory3[0]['category_name'] }}</a></li>
				</ul>
				<div class="block_prd" id="tab1">
					<div class="row">
						@foreach($productCategory1 as $item)
							<div class="wrapper_prd plr10 mb40">
								<div class="item_prd">
									<div class="image">
										<a class="p1x1" href="" title="">
											@if($item->promotion_id != null)
												<span class="product-sale">-{{ $item->promotion->discount }}%</span>
											@endif
											<img src="{{ $item->image_url }}" alt="">
										</a>
										<a href="{{ route('product', $item->product_id) }}" class="view_detail btn"><i class="fa fa-search" aria-hidden="true"></i>Xem chi tiết</a>
										<a onclick="addCart({{$item->product_id}});" class="view_cart btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
									</div>
									<div class="info">
										<h4>
											<a href="" title="">{{ $item->product_name }}</a>
										</h4>
										<div class="price">
											<span>{{ $item->price }} VND</span>
										</div>
									</div>
								</div>
							</div>		
						@endforeach		
					</div>
				</div>
				<div class="block_prd" id="tab2">
					<div class="row">
						@foreach($productCategory2 as $item)
							<div class="wrapper_prd plr10 mb40">
								<div class="item_prd">
									<div class="image">
										<a class="p1x1" href="" title="">
											@if($item->promotion_id != null)
												<span class="product-sale">-{{ $item->promotion->discount }}%</span>
											@endif
											<img src="{{ $item->image_url }}" alt="">
										</a>
										<a href="{{ route('product', $item->product_id) }}" class="view_detail btn"><i class="fa fa-search" aria-hidden="true"></i>Xem chi tiết</a>
										<a onclick="addCart({{$item->product_id}});" class="view_cart btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
									</div>
									<div class="info">
										<h4>
											<a href="" title="">{{ $item->product_name }}</a>
										</h4>
										<div class="price">
											<span>{{ $item->price }} VND</span>
										</div>
									</div>
								</div>
							</div>		
						@endforeach			
					</div>
				</div>
				<div class="block_prd" id="tab3">
					<div class="row">
						@foreach($productCategory3 as $item)
							<div class="wrapper_prd plr10 mb40">
								<div class="item_prd">
									<div class="image">
										<a class="p1x1" href="" title="">
											@if($item->promotion_id != null)
												<span class="product-sale">-{{ $item->promotion->discount }}%</span>
											@endif
											<img src="{{ $item->image_url }}" alt="">
										</a>
										<a href="{{ route('product', $item->product_id) }}" class="view_detail btn"><i class="fa fa-search" aria-hidden="true"></i>Xem chi tiết</a>
										<a onclick="addCart({{$item->product_id}});" class="view_cart btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
									</div>
									<div class="info">
										<h4>
											<a href="" title="">{{ $item->product_name }}</a>
										</h4>
										<div class="price">
											<span>{{ $item->price }} VND</span>
										</div>
									</div>
								</div>
							</div>		
						@endforeach				
					</div>
				</div>	
			</div>
			<script>
			function tab_uidim(){
			$('.tab_uidim').each(function(){
			var idactive = $(this).children('li.current').children('a').attr('href');
			var a = $(this).children('li').children('a');
			$(a).each(function(){
			var id = $(this).attr('href');
			$(id).hide();
			});
			$(idactive).show();
			});
			}
			tab_uidim();
			$('.tab_uidim li a').click(function(n){
			n.preventDefault();
			$(this).parent('li').addClass('current');
			$(this).parent('li').siblings().removeClass('current');
			tab_uidim();
			ratio();
			});
			</script>
		</div>
		<div class="clear"></div>
		<div class="product_fav fixf mb40">
			<div class="container">
				<div class="head fixf mb40">
					<h3>
						<a>SẢN PHẨM NỔI BẬT</a>
					</h3>
				</div>
				<div class="body fixf">
					<div class="row">
						<div class="group_prd arr_bx">
							@foreach ($hotProduct as $hp)
								<div class="wrapper_prd plr10 mb20">
									<div class="item_prd">
										<div class="image">
											@if($hp->promotion_id != null)
												<span class="product-sale">-{{ $hp->promotion->discount }}%</span>
											@endif
											<a href="{{ route('product', $hp->product_id) }}"><img src="{{ $hp->image_url }}" alt=""></a>
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
						<script>							
                        $(document).ready(function(){
                            $('.group_prd').slick({
                                dots: false,
                                arrows:false,
                                slidesToShow: 5,
                                slidesToScroll: 1,
								responsive: [{ breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1, } },{ breakpoint: 992, settings: { slidesToShow: 4, slidesToScroll: 1, } }]
                            });
                        });		
                        </script>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="product_fav fixf mb40">
			<div class="container">
				<div class="head fixf mb40">
					<h3>
						<a>SẢN PHẨM MỚI</a>
					</h3>
				</div>
				<div class="body fixf">
					<div class="row">
						<div class="group_prd arr_bx">
							@foreach ($newProduct  as $np)
								<div class="wrapper_prd plr10 mb20">
									<div class="item_prd">
										<div class="image">
											@if($np->promotion_id != null)
												<span class="product-sale">-{{ $np->promotion->discount }}%</span>
											@endif
											<a href="{{ route('product', $np->product_id) }}"><img src="{{ $np->image_url }}" alt=""></a>
										</div>
										<div class="info">
											<h4>
												<a href="{{ route('product', $np->product_id) }}">{{ $hp->product_name }}</a>
											</h4>
										</div>
									</div>
								</div>
							@endforeach			
						</div>
						<script>							
                        $(document).ready(function(){
                            $('.group_prd').slick({
                                dots: false,
                                arrows:false,
                                slidesToShow: 5,
                                slidesToScroll: 1,
								responsive: [{ breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1, } },{ breakpoint: 992, settings: { slidesToShow: 4, slidesToScroll: 1, } }]
                            });
                        });		
                        </script>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="block_panel mb60">
			<div class="container">
				<div class="head fixf mb40">
					<h3>
						<a>Bài Viết</a>
					</h3>
				</div>
				<div class="body fixf">
					<div class="row">
						<div class="group_new1">
							@foreach($blogs as $blog)
								<div class="wrapper_new1 plr10 mb20">
									<div class="item_new">
										<div class="image">
											<a href="{{ route('blog', $blog->blog_id) }}" class="p16x9"><img src="{{ $blog->image }}" alt=""></a>
										</div>
										<div class="info">
											<h4>
												<a href="{{ route('blog', $blog->blog_id) }}">{{ $blog->title }}</a>
											</h4>
											<p class="des">{{ $blog->description }}</p>
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
@endsection