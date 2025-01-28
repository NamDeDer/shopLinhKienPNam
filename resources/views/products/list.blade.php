<div class="row">
    @foreach ($products as $key=> $product)
        <div class="col-lg-2 col-md-4 col-6">                    
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