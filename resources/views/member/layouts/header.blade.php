<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
      <!-- Classy Menu -->
      <nav class="classy-navbar" id="essenceNav">
        <!-- Logo -->
        <a class="nav-brand" href="/home"><span>Mỹ Phẩm Mỹ Hạnh</span></a>
        <!-- Navbar Toggler -->
        <div class="classy-navbar-toggler">
          <span class="navbarToggler"><span></span><span></span><span></span></span>
        </div>
        <!-- Menu -->
        <div class="classy-menu">
          <!-- close btn -->
          <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
          </div>
          <!-- Nav Start -->
          <div class="classynav">
            <ul>
              <li>
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh Mục
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 100px;">
                  @foreach($category as $ca)
                    <a class="dropdown-item" href="{{ route('category', $ca->category_id) }}">{{ $ca->category_name }}</a>
                  @endforeach
                </div>
              </li>
              <li style="margin-left:8px">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nhãn Hàng
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 100px;">
                  @foreach($brand as $br)
                    <a class="dropdown-item" href="{{ route('brand', $br->brand_id) }}">{{ $br->brand_name }}</a>
                  @endforeach
                </div>
              </li>
                <li><a href="blog.html">Bài Viết</a></li>
                <li><a href="contact.html">Liên Hệ</a></li>
            </ul>
          </div>
            <!-- Nav End -->
        </div>
      </nav>

      <!-- Header Meta Data -->
      <div class="header-meta d-flex clearfix justify-content-end">
        <!-- Search Area -->
        <div class="search-area">
          <form action="{{ route('search') }}" method="get">
              <input type="search" name="keyword" id="headerSearch" placeholder="Nhập Tìm Kiếm">
              <button style="cursor: pointer" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
        <!-- Favourite Area -->
        @if (Auth::guest())
          <div class="favourite-area">
            <a style="width: 100px" href="{{ route('login') }}"><span style="font-size:15px; position:initial">Đăng Nhập <i class="fa fa-sign-in"></i></span></a>
          </div>
          <div class="user-login-info">
            <a style="width: 100px" href="{{ route('register') }}"><span style="font-size:15px; position:initial">Đăng Ký <i class="fa fa-user-plus"></i></span></a>
          </div>
        @else
          <div class="favourite-area">
            <a href=""><span style="font-size:15px; position:initial">{{ Auth::user()->name }}</span></a>
          </div>
          <div class="user-login-info">
            <a href="{{ route('logout') }}"><span style="font-size:15px; position:initial">Logout<i class="fas fa-sign-out"></i></span></a>
          </div>
        @endif
          <!-- Cart Area -->
          <div class="cart-area">
            <a href="#" id="essenceCartBtn"><img src="{{ asset('img/core-img/bag.svg') }}" alt=""> <span>3</span></a>
          </div>
      </div>
    </div>
  </header>
      <!-- ##### Right Side Cart Area ##### -->
      <div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="{{ asset('img/core-img/bag.svg') }}" alt=""> <span>3</span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                      <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>

            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                      <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>

            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                      <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$274.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-15%</span></li>
                <li><span>total:</span> <span>$232.00</span></li>
            </ul>
            <div class="checkout-btn mt-100">
                <a href="checkout.html" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->