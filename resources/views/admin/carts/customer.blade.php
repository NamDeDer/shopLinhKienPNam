@extends('admin.main')

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">

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
                                    {{-- <a href="/admin/product/add" class="btn btn-danger"><i class="fa fa-plus mr5">Thêm mới</i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Ngày Đặt Hàng</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $key => $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td>
                                <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{$customer->id}}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-danger btn-sm" onclick="removeRow({{$customer->id}}, '/admin/customers/destroy')" href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $customers->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection