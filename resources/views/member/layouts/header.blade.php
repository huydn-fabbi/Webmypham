<header>
        <div class="top_hdr">
			<div class="container">
				<div class="row">
					@if (Auth::guest())
						<div class="plr10 span4 span-t3 m-off">
							<ul class="choose_lang">
								<li><a style="font-size: larger;color: green;font-weight: bold;" href="{{ route('login') }}">Đăng Nhập <i class="fa fa-sign-in"></i></a></li>
								<li><a style="font-size: larger;color: green;font-weight: bold;margin-left: 18px;" href="{{ route('register') }}">Đăng Ký <i class="fa fa-user-plus"></i></a></li>
							</ul>
						</div>
					@else
						<div class="plr10 span4 span-t3 m-off">
							<ul class="choose_lang">
								<li><a style="font-size: larger;color: green;font-weight: bold;" href="">{{ Auth::user()->name }}</a></li>
								<li><a style="font-size: larger;color: green;font-weight: bold;margin-left: 18px;" href="{{ route('logout') }}">Logout <i class="fa fa-sign-out"></i></a></li>
							</ul>
						</div>
					@endif
					<div class="plr10 span4 span-t6 span-m12">
						<h1 style="margin-top: 55px;margin-left: 55px;font-weight: bold;">MỸ PHẨM MỸ HẠNH</h1>
					</div>
					<div class="plr10 span4 span-t3 m-off">
						<div class="cart_hdr m-off">
							<a href="" rel="nofollow"><i class="fa fa-shopping-cart"></i>
							<span >(0)Sản phẩm</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bot_hdr">
			<div class="container">
				<nav>
					<ul class="nav_lv0 nostyle t-off m-off">
						<li><a href="/" rel="nofollow">Trang chủ</a></li>
						<li><a href="">Sản phẩm</a></li>
						<li><a href="">thành phần</a></li>
						<li><a href="/">Làm đẹp</a></li>
						<li><a href="/">Giới thiệu</a></li>
						<li class="active"><a href="">Liên hệ</a></li>
					</ul>
					<div class="bar"><a><i class="fa fa-bars" aria-hidden="true"></i></a></div>
					<ul class="mnav nostyle">
						<li><a href="/" rel="nofollow">Trang chủ</a></li>
						<li><a href="">Sản phẩm</a></li>
						<li><a href="">thành phần</a></li>
						<li><a href="/">Làm đẹp</a></li>
						<li><a href="/">Giới thiệu</a></li>
						<li><a href="">Liên hệ</a></li>
					</ul>
					<form class="form_search" action="" method="get">
						<input type="search" name="" placeholder="Tìm kiếm ..." style="padding-left: 10px;">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					<div class="cart_hdr_tm t-off m-on">
						<a href="#" rel="nofollow">
							<i class="fa fa-shopping-cart"></i>
							<span>1</span>
						</a>
					</div>
				</nav>	
				<script>
				$(".bar>a").click(function(){	
				$(".mnav").toggleClass("dropdown");	});
				$(".hv>a").click(function(event){	event.preventDefault();	
				if($(this).parent().hasClass("dropdown")){	$(this).parent().removeClass("dropdown");
				$(this).siblings().children().removeClass("dropdown");	}else{	
				$(this).parent().addClass("dropdown");	$(this).parent().siblings().removeClass("dropdown");	
				$(this).parent().siblings().children().children().removeClass("dropdown");	}	return false;
				});	$(document).mouseup(function (e){	var container = $('.mnav , .bar');	
				if (!container.is(e.target) && container.has(e.target).length === 0){	
				$('.mnav').removeClass('dropdown');	}	
				});
				</script>				
			</div>
			<script>
			$(window).bind('resize , load',function(){
				var nav = $('.bot_hdr'),
				height = $('.top_hdr').innerHeight();
				$(window).scroll(function () {
					if ($(this).scrollTop() > height) {
						nav.addClass("f-nav");
					} else {
						nav.removeClass("f-nav");
					}
				});
			});
			</script>
		</div>
    </header>