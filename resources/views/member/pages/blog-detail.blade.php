@extends('member.layouts.master')
@section('content')
<div class="content_for_layout">
		<div class="breadcrumb mb40">
			<div class="container">
				<ul class="fixf">
					<li><a href="">Trang chủ</a></li>
					<li><a href="">Bài viết</a></li>
				</ul>
			</div>
		</div>
			<div class="container">
				<div class="row">	
					<div class="block_right plr10">
						<div class="fixf mb20">
							<div class="row">
								<div class="view_image plr10 span5 span-m12">
								    <img src="{{ $blog->image }}" alt="" >																
								</div>
								<div class="view_info plr10 span7 span-m12">
									 <h2 class="mb20 mt20">{{ $blog->title }}</h2>
									<div class="des fixf mb20">
                                        <p class="tag mb10"><i class="fa fa-tags" aria-hidden="true"></i>Tác Giả:<a>{{ $blog->name }}</a></p>
										<p><b>{{ $blog->description }}</b></p>
									</div>
									</p>
								</div>
							</div>
						</div>
						<div class="fixf mb20">
							<ul class="tab_uidim tab_basic nostyle">
								<!-- <li class="current"><a href="#table1">Thành phần chính</a></li>
								<li><a href="#table2">công thức</a></li> -->
								<li class="current"><a href="#table3">Nội Dung</a></li>
							</ul>
							<!-- <div class="content_tab_basic content" id="table1">tab 1</div>
							<div class="content_tab_basic content" id="table2">tab 2</div> -->
							<div class="content_tab_basic content" id="table3">{{ $blog->content }}</div>
						</div>
						<div class="clear"></div>
						<div class="product_fav fixf mb40">
							<div class="head_panel fixf mb20">
								<h3>
									<a href="">BÀI VIẾT LIÊN QUAN</a>
								</h3>
							</div>
							<div class="body fixf">
								<div class="row">
									<div class="group_prd">
                                        @foreach ($sameUser as $su)
                                        <div class="wrapper_new1 plr10 mb20">
                                            <div class="item_new">
                                                <div class="image">
                                                    <a href="{{ route('blog', $su->blog_id) }}" class="p16x9"><img src="{{ $su->image }}" alt=""></a>
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="{{ route('blog', $su->blog_id) }}">{{ $su->title }}</a>
                                                    </h4>
                                                    <p class="des">{{ $su->description }}</p>
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