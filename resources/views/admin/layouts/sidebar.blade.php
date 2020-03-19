<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    MỸ HẠNH
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listCat') }}">
                        <i class="pe-7s-server"></i>
                        <p>Quản lý danh mục</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listCat') }}">
                        <i class="pe-7s-ribbon"></i>
                        <p>Quản lý nhãn hàng</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listCat') }}">
                        <i class="pe-7s-diamond"></i>
                        <p>Quản lý khuyến mãi</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listCat') }}">
                        <i class="pe-7s-plugin"></i>
                        <p>Quản lý sản phẩm</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listCat') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Quản lý bài viết</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listCat') }}">
                        <i class="pe-7s-users"></i>
                        <p>Quản lý người dùng</p>
                    </a>
                </li>
                @if(Auth::user()->member_type == 1)
                    <li>
                        <a href="{{ route('listCat') }}">
                            <i class="pe-7s-user"></i>
                            <p>Quản lý nhân viên</p>
                        </a>
                    </li>
                @endif
            </ul>
    	</div>
    </div>