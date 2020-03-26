<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebSite" lang="vi">  
<head>
    <title>website phân phối mỹ phẩm</title>
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
        $(function () {
            var goToCartIcon = function($addTocartBtn){
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                    top: position.top,
                    left: position.left
                }, 500 , "linear", function() {
                    $image.remove();
                });
            }

            $('.my-cart-btn').myCart({
                currencySymbol: '$',
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                classProductQuantity: 'my-product-quantity',
                classProductRemove: 'my-product-remove',
                classCheckoutCart: 'my-cart-checkout',
                affixCartIcon: true,
                showCheckoutModal: true,
                numberOfDecimals: 2,
                cartItems: [],
                clickOnAddToCart: function($addTocart){
                    goToCartIcon($addTocart);
                },
                afterAddOnCart: function(products, totalPrice, totalQuantity) {
                    console.log("afterAddOnCart", products, totalPrice, totalQuantity);
                },
                clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
                    console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
                },
                checkoutCart: function(products, totalPrice, totalQuantity) {
                    var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
                    checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
                    $.each(products, function(){
                    checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
                    });
                    alert(checkoutString)
                    console.log("checking out", products, totalPrice, totalQuantity);
                },
                getDiscountPrice: function(products, totalPrice, totalQuantity) {
                    console.log("calculating discount", products, totalPrice, totalQuantity);
                    return totalPrice * 0.5;
                }
            });
        });
	</script>
</body>
</html>