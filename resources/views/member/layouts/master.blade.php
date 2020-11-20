<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebSite" lang="vi">
<head>
    <title>NEM</title>
    <meta charset="UTF-8">
    <meta name="robots" content="INDEX,FOLLOW">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/page.0.1.1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script language="javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
</head>
<body>
    @include('member.layouts.header')
    @yield('content')
    <script>
        function ratio(){
            $('.p1x1').each(function(){
                var width = $(this).innerWidth();
                $(this).css('height',width +"px");
            });
            $('.p16x9').each(function(){
                var width = $(this).innerWidth();
                $(this).css('height',(width*9)/16 +"px");
            });
        }
        $(document).ready(function(){
            ratio();
        });
        $(window).bind('resize , load',function(){
            ratio();
        });
    </script>
    @include('member.layouts.footer')
    <div class="move_control">
		<a href="#top" class="scroll_top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.mycart.js') }}"></script>
    <script language="javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
	<script>
        $("a[href='#top']").click(function() {
            $("html, body").animate({ scrollTop: 0 },"fast");
            return false;
        });
        $(window).scroll(function(){
            var scroll=$(window).scrollTop();
            if(scroll>=100){
                $(".scroll_top").addClass("show2");
                $(".scroll_bot").addClass("show2")}else{$(".scroll_top").removeClass("show2")
            }
        });
        function addCart(id) {
            $.ajax({
                url: '/cart/add/' + id,
                type: 'GET',
            }).done(function(response) {
                renderCart(response);
                alertify.success('Đã thêm vào giỏ hàng');
            })
        }
        $("#change-item").on("click", ".si-close i", function() {
            console.log($(this).data("id"));
            $.ajax({
                url: '/cart/delete/' + $(this).data("id"),
                type: 'GET',
            }).done(function(response) {
                renderCart(response);
                alertify.error('Đã xóa khỏi giỏ hàng');
            })
        })
        function renderCart(response) {
            $("#change-item").empty();
            $("#change-item").html(response);
            $("#total-quantity").text($("#quantity").val());
        }
        var proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });

        function renderCartList(response) {
            $("#list-cart").empty();
            $("#list-cart").html(response);
            $("#total-quantity").text($("#quantity").val());
            var proQty = $('.pro-qty');
            proQty.prepend('<span class="dec qtybtn">-</span>');
            proQty.append('<span class="inc qtybtn">+</span>');
            proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
        }

        function deleteItem(id) {
            $.ajax({
                url: '/cart/delete-item-list/' + id,
                type: 'GET',
            }).done(function(response) {
                renderCartList(response);
                alertify.error('Đã xóa khỏi giỏ hàng');
            })
        }

        function saveItem(id) {
           console.log( $("#quantity-item-" + id).val());
            $.ajax({
                url: '/cart/update/' + id + '/' + $("#quantity-item-" + id).val(),
                type: 'GET',
            }).done(function(response) {
                renderCartList(response);
                alertify.success('Đã cập nhật giỏ hàng');
            })
        }
	</script>
</body>
</html>
