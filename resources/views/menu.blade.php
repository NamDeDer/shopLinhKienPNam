@extends('main')

@section('content')
<div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Shop Phương Nam</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class="breadcrumb-nav">
            <li><a href="/"><i class="lni lni-home"></i> Trang chủ</a></li>
            <li>{{$title}}</li>
          </ul>
        </div>
      </div>
    </div>
</div>


  <section class="product-grids section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">

          <div class="product-sidebar">

            <div class="single-widget search">
              <h3>Search Product</h3>
              <form action="#">
                <input type="text" placeholder="Search Here...">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
              </form>
            </div>


            {{-- <div class="single-widget">
              <h3>All Categories</h3>
              <ul class="list">
                <li>
                  <a href="product-grids.html">Computers & Accessories </a><span>(1138)</span>
                </li>
                <li>
                  <a href="product-grids.html">Smartphones & Tablets</a><span>(2356)</span>
                </li>
                <li>
                  <a href="product-grids.html">TV, Video & Audio</a><span>(420)</span>
                </li>
                <li>
                  <a href="product-grids.html">Cameras, Photo & Video</a><span>(874)</span>
                </li>
                <li>
                  <a href="product-grids.html">Headphones</a><span>(1239)</span>
                </li>
                <li>
                  <a href="product-grids.html">Wearable Electronics</a><span>(340)</span>
                </li>
                <li>
                  <a href="product-grids.html">Printers & Ink</a><span>(512)</span>
                </li>
              </ul>
            </div> --}}


            <div class="single-widget range">
              <h3>Phạm vi giá</h3>
              <input type="range" class="form-range" name="range" step="1" min="100" max="10000" value="10"
                onchange="rangePrimary.value=value">
              <div class="range-inner">
                <input type="text" id="rangePrimary" placeholder="100" />
              </div>
            </div>


            <div class="single-widget condition">
              <h3>Lọc theo giá</h3>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                <label class="form-check-label" for="flexCheckDefault1">
                  $50 - $100L (208)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">
                  $100L - $500 (311)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">
                  $500 - $1,000 (485)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                <label class="form-check-label" for="flexCheckDefault4">
                  $1,000 - $5,000 (213)
                </label>
              </div>
            </div>


            <div class="single-widget condition">
              <h3>Lọc theo hãng</h3>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                <label class="form-check-label" for="flexCheckDefault11">
                  Apple (254)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                <label class="form-check-label" for="flexCheckDefault22">
                  Bosh (39)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33">
                <label class="form-check-label" for="flexCheckDefault33">
                  Canon Inc. (128)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault44">
                <label class="form-check-label" for="flexCheckDefault44">
                  Dell (310)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault55">
                <label class="form-check-label" for="flexCheckDefault55">
                  Hewlett-Packard (42)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault66">
                <label class="form-check-label" for="flexCheckDefault66">
                  Hitachi (217)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77">
                <label class="form-check-label" for="flexCheckDefault77">
                  LG Electronics (310)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault88">
                <label class="form-check-label" for="flexCheckDefault88">
                  Panasonic (74)
                </label>
              </div>
            </div>

          </div>

        </div>
        <div class="col-lg-9 col-12">
          <div class="product-grids-head">
            <div class="product-grid-topbar">
              <div class="row align-items-center">
                <div class="col-lg-7 col-md-8 col-12">
                  <div class="product-sorting">
                    <label for="sorting">Sắp xếp:</label>
                    <select class="form-control" id="sorting">
                      <option>Phổ biến</option>
                      <option>Giá</option>
                      <option>Đánh giá cao</option>
                      <option>A - Z</option>
                      <option>Z - A</option>
                    </select>
                    <h3 class="total-show-product">Đang hiển thị: <span>1 - 12 sản phẩm</span></h3>
                  </div>
                </div>
                <div class="col-lg-5 col-md-4 col-12">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid"
                        type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i
                          class="lni lni-grid-alt"></i></button>
                      <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list"
                        type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i
                          class="lni lni-list"></i></button>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                  <div class="row">
                    @foreach ($products as $key=> $product)
                        <div class="col-lg-3 col-md-4 col-6">                    
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{$product->thumb}}" alt="{{$product->name}}" class="img-fluid">
                                    <div class="button">
                                        <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" class="btn"><i class="lni lni-cart"></i>Mua ngay</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    {{-- <span class="category">{{ $product->menu->name ?? 'Không có danh mục' }}</span> --}}
                                    <h4 class="title">
                                        <a href="/san-pham/{{$product->id}}-{{\Str::slug($product->name,'-')}}.html">{{$product->name}}</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star"></i></li>
                                        <span>4.0 Đánh giá</span>
                                    </ul>
                                    <div class="price">
                                        <span class="sale-price">{{$product->formatted_price_sale}}<u>đ</u></span>
                                        <span class="discount-price">{{$product->formatted_price}}<u>đ</u></span>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                <div class="row">
                  @foreach ($products as $key=> $product)
                  <div class="col-lg-12 col-md-12 col-12">
                    <div class="single-product">
                      <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-12">
                          <div class="product-image">
                            <img src="{{$product->thumb}}" alt="{{$product->name}}" class="img-fluid">
                            <div class="button">
                              <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" class="btn"><i class="lni lni-cart"></i> Mua ngay</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                          <div class="product-info">
                            {{-- <span class="category">Watches</span> --}}
                            <h4 class="title">
                              <a href="/san-pham/{{$product->id}}-{{\Str::slug($product->name,'-')}}.html">{{$product->name}}</a>
                            </h4>
                            <ul class="review">
                              <li><i class="lni lni-star-filled"></i></li>
                              <li><i class="lni lni-star-filled"></i></li>
                              <li><i class="lni lni-star-filled"></i></li>
                              <li><i class="lni lni-star-filled"></i></li>
                              <li><i class="lni lni-star"></i></li>
                              <li><span>4.0 Đánh giá</span></li>
                            </ul>
                            <div class="price">
                              <span class="sale-price">{{$product->formatted_price_sale}}<u>đ</u></span>
                              <span class="discount-price">{{$product->formatted_price}}<u>đ</u></span>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  @endforeach
                </div>
                <div class="row">
                  <div class="col-12">

                    <div class="pagination left">
                      <ul class="pagination-list">
                        <li><a href="javascript:void(0)">1</a></li>
                        <li class="active"><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection