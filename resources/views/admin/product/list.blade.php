@extends('admin.main')

@section('content')
<ol class="breadcrumb">
    <li>
        <a href="{{route('admin')}}">Dashboard</a>
    </li>
    <li class="active">
        <strong>{{$title}}</strong>
    </li>
</ol>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
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
@endsection