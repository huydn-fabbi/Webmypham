@extends('member.layouts.master')
@section('content')
<div class="content_for_layout">
		<div class="breadcrumb mb40">
			<div class="container">
				<ul class="fixf">
					<li><a href="">Trang chủ</a></li>
					<li><a href="">Sản phẩm</a></li>
					<li><a href="">{{ $product->product_name }}</a></li>
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
						<div class="fixf mb20">
							<div class="row">
								<div class="view_image plr10 span5 span-m12">
								    <img id="prd_zoom" src="{{ $product->image_paths[0]->image_url }}" alt="" >
									<ul class="thumbnail" id="thumbnail">
                                        @foreach ($product->image_paths as $image)
                                            <li><a href="#" data-image="{{ $image->image_url }}" data-zoom-image="{{ $image->image_url }}"><img style="height: 100px" src="{{ $image->image_url }}" alt="" ></a></li>
                                        @endforeach
									</ul>																
								</div>
								<script language="javascript" src="{{ asset('js/jquery.ez-plus.js') }}"></script>
								<script language="javascript" src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
								<link rel="stylesheet" href="{{ asset('css/fancybox/jquery.fancybox.css') }}">
								<script>
									$("#prd_zoom").ezPlus({
										gallery: 'thumbnail',
										zoomType: 'lens',
										//lensShape: 'round',
										containLensZoom: false,
										constrainType: 'width',
										constrainSize: '100%',
										cursor: 'pointer',
										//lensSize: 200,
										galleryActiveClass: "active",
										imageCrossfade: false,
										loadingIcon: "img/bg/loader6.gif"
									});
									$("#prd_zoom").bind("click", function (e) {
										var ez = $('#prd_zoom').data('ezPlus');
										$.fancybox(ez.getGalleryList());
										ez.closeAll();
										return false;
									});
								</script>
								<div class="view_info plr10 span7 span-m12">
									 <h2 class="mb20 mt20">{{ $product->product_name }}</h2>
									<div class="des fixf mb20">
										<p class="price">
											<span>Giá bán: </span>{{ $product->price }} VND
										</p>
										<p>tình trạng:<b>còn hàng</b></p>
										<p>gross weigh:<b>0g</b></p>										
										<p>
                                        {{ $product->description }}
										</p>
                                        <p class="tag mb10"><i class="fa fa-tags" aria-hidden="true"></i>Danh Mục:<a href="">{{ $product->category->category_name }}</a></p>
                                        <p class="tag mb10"><i class="fa fa-tags" aria-hidden="true"></i>Nhãn Hàng:<a href="">{{ $product->brand->brand_name }}</a></p>
										<p class="share_small bor mb20">
											Chia sẻ:
											<a href="" title="">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
											<a href="" title="">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>

											<a href="" title="">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</p>
									</div>
									</p>
									<div class="group_pick_quantity fixf mb20">
										<p>Số lượng</p>
										<form class="fixf" action="" method="get">
											<div class="pick span4">
												<button  onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">-</button>
												<input type="text" name="soluong" value="1" class="input-control" id="qty" >
												<button  onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">+</button>
											</div>
											<button type="submit" class="btn btn_submit">Đặt hàng</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="fixf mb20">
							<ul class="tab_uidim tab_basic nostyle">
								<!-- <li class="current"><a href="#table1">Thành phần chính</a></li>
								<li><a href="#table2">công thức</a></li> -->
								<li class="current"><a href="#table3">Thông tin chi tiết</a></li>
							</ul>
							<!-- <div class="content_tab_basic content" id="table1">tab 1</div>
							<div class="content_tab_basic content" id="table2">tab 2</div> -->
							<div class="content_tab_basic content" id="table3">{{ $product->content }}</div>
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
						});
					</script>
						<div class="clear"></div>
						<div class="product_fav fixf mb40">
							<div class="head_panel fixf mb20">
								<h3>
									<a href="">SẢN PHẨM LIÊN QUAN</a>
								</h3>
							</div>
							<div class="body fixf">
								<div class="row">
									<div class="group_prd">
                                        @foreach ($sameProduct as $sp)
                                            <div class="wrapper_prd plr10 mb20">
                                                <div class="item_prd">
                                                    <div class="image">
                                                        <a href="{{ route('product', $sp->product_id) }}" class="p1x1"><img src="{{ $sp->image_paths[0]->image_url }}" alt=""></a>
                                                    </div>
                                                    <div class="info">
                                                        <h4>
                                                            <a href="{{ route('product', $sp->product_id) }}">{{ $sp->product_name }}</a>
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
	</div>
@endsection