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
    <script language="javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script language="javascript" src="{{ asset('js/slick.min.js') }}"></script>
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
	</script>
</body>
</html>