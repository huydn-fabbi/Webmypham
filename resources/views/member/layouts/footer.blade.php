<footer>
		<div class="top_ft mb60">
			<div class="container dad">
				<div class="form_email ">
					<h4 style="font-size: 25px;TEXT-ALIGN: center;font-family: cursive;">NEM</h4>
				</div>
			</div>
		</div>
		<div class="mid_ft">
			<div class="container">
				<div class="row">
					<div class="span3 span-t6 span-m12 plr10 mb20">
						<h3>Theo danh mục</h3>
						<ul class="list_link">
							@foreach($category as $ca)
								<li><a href="{{ route('category', $ca->category_id) }}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ $ca->category_name }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="span3 span-t6 span-m12 plr10 mb20">
						<h3>Theo nhãn hàng</h3>
						<ul class="list_link">
							@foreach($brand as $br)
								<li><a href="{{ route('brand', $br->brand_id) }}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ $br->brand_name }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="span3 span-t6 span-m12 plr10 mb20">
						<h3>Chăm sóc khách hàng</h3>
						<ul class="list_link">
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>Giới thiệu</a></li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>Liên hệ</a></li>
						</ul>
					</div>
					<div class="span3 span-t6 span-m12 plr10 mb20">
						<h3>kết nối với NEM</h3>
						<ul class="ft_social fixf">
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </footer>
