<img src="/template/assets/images/thegioididong/background/header-right.png" width="360" height="360" class="header-right">
<img src="/template/assets/images/thegioididong/background/header-left.png" width="360" height="360" class="header-left">
<img src="/template/assets/images/thegioididong/background/bg-right.png" width="360" height="400" class="label-right">
<img src="/template/assets/images/thegioididong/background/bg-left.png" width="360" height="400" class="label-left">



{{-- <div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div> --}}
<header class="header navbar-area ">
    @php
        $menusHtml = \App\Helpers\Helper::menus($menus);

        //kiểm tra xem product trong cart có null ko
        if(is_null(Session::get('carts'))) { $productQuantity = 0; } 
        else $productQuantity = count(Session::get('carts'));  
        $sumPrice = 0;               

    @endphp

    <div class="topbar">
        <a href="">
            <img src="/template/assets/images/hero/topbar_header.png" alt="">
        </a>
    </div>


    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">

                    <a class="navbar-brand" href="/">
                        <img src="/template/assets/images/logo/logo.svg" alt="Logo">
                    </a>

                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">

                    <div class="main-menu-search">

                        <div class="navbar-search search-style-5">
                            <div class="search-select">
                                <div class="select-position">
                                    <select id="select1">
                                        <option selected>Tất cả</option>
                                        <option value="1">option 01</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-input">
                                <input type="text" placeholder="Bạn tìm thứ gì...">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Hotline:
                                <span>0337 665 327</span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div class="wishlist user-dropdown">
                                <a href="javascript:void(0)" class="user-icon" data-bs-target="#submenu-1">
                                    <i class="lni lni-user"></i>
                                    <span class="total-items">0</span>
                                </a>
                            </div>
                            <div class="cart-items">
                                <a href="/carts" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">
                                        {{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}
                                    </span>
                                </a>
                                
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }} Sản phẩm</span>
                                        <a href="/carts">Xem giỏ hàng</a>
                                    </div>
                                    <ul class="shopping-list">
                                        @if($productQuantity)
                                            @foreach($products as $key => $product)
                                                @php
                                                    $sumPrice += (($product->price_sale)* (Session::get('carts')[$product->id] ?? 0));
                                                @endphp
                                                <li>
                                                    <a href="/carts/delete/{{ $product->id }}" class="remove" title="Xóa sản phẩm này">
                                                        <i class="lni lni-close"></i>
                                                    </a>
                                                    <div class="cart-img-head">
                                                        <a class="cart-img" href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                            <img src="{{ $product->thumb }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h4>
                                                            <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                                {{ $product->name }}
                                                            </a>
                                                        </h4>
                                                        <p class="quantity">
                                                            {{ Session::get('carts')[$product->id] ?? 0 }}x - 
                                                            <span class="amount">{{ number_format($product->price_sale) }} <u>đ</u></span>
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Tổng tiền</span>
                                            <span class="total-amount">{{ number_format($sumPrice) }} <u>đ</u></span>
                                        </div>
                                        <div class="button">
                                            <a href="/carts" class="btn animate">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">

                    <div class="mega-category-menu">
                        <span class="cat-button"><i class="lni lni-menu"></i>Danh mục</span>
                        <ul class="sub-category">
                            {{-- <li><a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>
                                <ul class="inner-sub-category">
                                    <li><a href="product-grids.html"></a></li>
                                    <li><a href="product-grids.html">Camcorders</a></li>
                                    <li><a href="product-grids.html">Camera Drones</a></li>
                                    <li><a href="product-grids.html">Smart Watches</a></li>
                                    <li><a href="product-grids.html">Headphones</a></li>
                                    <li><a href="product-grids.html">MP3 Players</a></li>
                                    <li><a href="product-grids.html">Microphones</a></li>
                                    <li><a href="product-grids.html">Chargers</a></li>
                                    <li><a href="product-grids.html">Batteries</a></li>
                                    <li><a href="product-grids.html">Cables & Adapters</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                    </div>


                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="/" class="active" aria-label="Toggle navigation">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    {!! $menusHtml  !!}
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="nav-social">
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>