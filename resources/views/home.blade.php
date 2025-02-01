@extends('main')
@section('content')
    <!--Slider-->
    <section class="hero-area">{{--  --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
    
                        <div class="hero-slider">
                            @foreach ($sliders as $slider)
                            {{-- 800x500 --}}
                            <div class="single-slider"
                                style="background-image: url({{ $slider->thumb }});">
                                {{-- <div class="content">
                                    <h1
                                    style="font-family: 'Dancing Script', cursive;color:aqua"
                                    >
                                        {{ $slider->name}}
                                    </h1>
                                    <div class="button">
                                        <a href="{{$slider->url}}" class="btn">Xem ngay</a>
                                    </div>
                                </div> --}}
                            </div>
                    
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            {{-- 740x500 --}}
                            <div class="hero-small-banner"
                                style="background-image: url('/template/assets/images/thegioididong/banner/bn1.1.png');">
                                {{-- <div class="content">
                                    <h2>
                                        <span>New line required</span>
                                        iPhone 12 Pro Max
                                    </h2>
                                    <h3>$259.99</h3>
                                </div> --}}
                            </div>
    
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
    
                            <div class="hero-small-banner style2" style="background-image: url('/template/assets/images/thegioididong/banner/bn1.2.png');">
                                {{-- <div class="content">
                                    <div class="button">
                                        <a class="btn" href="product-grids.html">Shop Now</a>
                                    </div>
                                </div> --}}
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product-->
    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Sản phẩm HOT</h2>
                    </div>
                </div>
            </div> 
            <div  id="loadProduct">
                @include('products.list')
            </div>
            
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4" id="button-loadMore">
                <input type="hidden" value="1" id="page">
                <div class="button">
                    <a onclick="loadMore()" class="btn">Xem thêm sản phẩm</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection