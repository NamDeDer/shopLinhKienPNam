@extends('admin.main')

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="ibox">
        <div class="ibox-content">
            <div class="row">   

                <div class="filter-wrapper">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="perpage">
                            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                <select name="perpage" id="" class="form-control input-sm perpage filter mr10">
                                    @for ($i = 20; $i <= 200; $i+=20)
                                        <option value="{{$i}}">{{$i}} bản ghi</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="action">
                            <div class="uk-flex uk-flex-middle">
                                <select name="user_catalogue_id" class="form-control mr10" id="">
                                    <option value="0" selected="selected">Chọn nhóm thành viên</option>
                                    <option value="1">Quản trị viên</option>
                                </select>
                                <div class="uk-search uk-flex uk-flex-middle mr10" >
                                    <div class="input-group">
                                        <input 
                                        type="text" 
                                        value="" name="keyword" 
                                        placeholder="Nhập từ khóa muốn tìm kiếm..." 
                                        class="form-control"
                                        >
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary mb0 btn-sm" type="submit" name="search" value="search">Tìm kiếm</button>
                                        </span>
                                    </div>
                                </div>
                                <a href="/admin/product/add" class="btn btn-danger"><i class="fa fa-plus mr5">Thêm mới</i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hình Ảnh</th>
                            <th>Danh Mục</th>
                            <th>Giá Gốc</th>
                            <th>Giá Giảm</th>
                            <th>Trạng Thái</th>
                            <th>Cập Nhật</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                    <img src="{{ $product->thumb }}" 
                                         alt="Thumbnail" 
                                         width="100px" 
                                         style="object-fit: cover;"
                                    >
                                </td>
                                <td>{{$product->menu->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->price_sale}}</td>
                                <td>{!! \App\Helpers\Helper::active($product->active) !!}</td>
                                <td>{{$product->updated_at}}</td>
                                <td>
                                <a class="btn btn-primary btn-sm" href="/admin/product/edit/{{$product->id}}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm" onclick="removeRow({{$product->id}}, '/admin/product/destroy')" href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>    
    
</div>
@endsection