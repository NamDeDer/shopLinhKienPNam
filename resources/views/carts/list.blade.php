@extends('main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Giỏ hàng</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="/"><i class="lni lni-home"></i> Trang chủ</a></li>
                        <li>{{ $title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <form method="post">
        @if (count($products) != 0)
        <div class="shopping-cart section">
            <div class="container">
                <div class="cart-list-head">

                    <div class="cart-list-title">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-12">
                                <p>Hình ảnh</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <p>Tên sản phẩm</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p class="text-center">Số lượng</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>Giá tiền</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>Thành tiền</p>
                            </div>
                            <div class="col-lg-1 col-md-1 col-12">
                                <p>Xóa</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $total = 0;
                    @endphp

                    @foreach ($products as $product)
                        @php
                            $price = $product->price_sale;
                            $priceEnd = $price * $carts[$product->id];
                            $total += $priceEnd;
                        @endphp

                        <div class="cart-single-list">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-1 col-12">
                                    <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                        <img src="{{ $product->thumb }}" alt="#">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <h5 class="product-name">
                                        <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                            {{ $product->name }}
                                        </a>
                                    </h5>
                                    <p class="product-des">
                                        <span><em>Danh mục:</em> {{ $product->menu->name }}</span>
                                        <span><em>Màu:</em> ???</span>
                                    </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <div class="form-group quantity">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-outline-secondary"
                                                onclick="decreaseQuantity()">-</button>
                                                <input type="number" id="quantity" class="form-control text-center"
                                                value="{{ $carts[$product->id] }}" onchange="checkQuantity(this)"
                                                name="num_product[{{ $product->id }}]">
                                            <button type="button" class="btn btn-outline-secondary"
                                                onclick="increaseQuantity()">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>{{ $product->formatted_price_sale }}</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>{{ number_format($priceEnd, 0, ',', '.') }}</p>
                                </div>
                                <div class="col-lg-1 col-md-1 col-12">
                                    <a class="remove-item" href="/carts/delete/{{ $product->id }}"
                                        onclick="removeCart({{ $product->id }})">
                                        <i class="lni lni-close"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="total-amount">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-12">
                                    <div class="left">
                                        <div class="coupon">
                                                <input name="Coupon" placeholder="Nhập mã giảm giá">
                                                <div class="button">
                                                    <button class="btn">Nhập</button>
                                                    <button type="submit" class="btn" formaction="/update-cart">Cập nhật giỏ hàng</button>
                                                    @csrf
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="right">
                                        <ul>
                                            <li>Tổng tiền<span>{{ number_format($total, 0, ',', '.') }} <u>đ</u></span>
                                            </li>
                                            <li>Phí ship<span>Miễn phí</span></li>
                                            <li class="last">Tổng tiền cần
                                                trả<span>{{ number_format($total, 0, ',', '.') }} <u>đ</u></span></li>
                                        </ul>
                                        <div class="button">
                                            <a href="{{ route('checkout') }}" class="btn">Đặt hàng</a>
                                            <a href="/" class="btn btn-alt">Tiếp tục mua</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    @else
        <div class="container" style="padding: 20px">
            <h2 class="text-center">Giỏ hàng trống</h2>
        </div>
    @endif
@endsection
