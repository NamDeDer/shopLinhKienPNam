@extends('admin.main')

@section('content')
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-b-md">
                            <a href="#" class="btn btn-danger btn-xs pull-right">Xóa đơn hàng</a>
                            <h2>Thông tin khách hàng</h2>
                        </div>
                        <dl class="dl-horizontal">
                            <dt>Trạng thái:</dt>
                            <dd><span class="label label-primary">Đã giao</span></dd>
                        </dl>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <dl class="dl-horizontal">

                            <dt>Tên khách hàng:</dt>
                            <dd>{{ $customer->name }}</dd>
                            <dt>Số điện thoại:</dt>
                            <dd>{{ $customer->phone }}</dd>
                            <dt>Địa chỉ:</dt>
                            <dd>{{ $customer->address }}</dd>
                            <dt>Email:</dt>
                            <dd><a href="#" class="text-navy">{{ $customer->email }}</a></dd>
                            <dt>Ghi chú:</dt>
                            <dd>{{ $customer->content }}</dd>
                        </dl>
                    </div>
                    <div class="col-lg-7" id="cluster_info">
                        <dl class="dl-horizontal">

                            <dt>Cập nhật mới nhất:</dt>
                            <dd>{{ $customer->updated_at }}</dd>
                            <dt>Ngày tạo đơn:</dt>
                            <dd>{{ $customer->created_at }}</dd>
                        </dl>
                    </div>
                </div>
                <div class="row">
                    @php $total = 0; @endphp

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
                                    {{-- <a href="" class="btn btn-danger"><i class="fa fa-plus mr5">Thêm mới</i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content">

                                        <div class="table-responsive">
                                            <table
                                                class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Ảnh</th>
                                                        <th>Sản phẩm</th>
                                                        <th>Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($carts as $key => $cart)
                                                        @php
                                                            $price = $cart->price * $cart->quantity;
                                                            $total += $price;
                                                        @endphp
                                                        <tr class="gradeX">
                                                            <td>
                                                                <div class="">
                                                                    <img src="{{ $cart->product->thumb }}" alt="IMG"
                                                                        style="width: 100px">
                                                                </div>
                                                            </td>
                                                            <td>{{ $cart->product->name }}</td>
                                                            <td>{{ number_format($cart->price, 0, '', '.') }}</td>
                                                            <td>{{ $cart->quantity }}</td>
                                                            <td>{{ number_format($price, 0, '', '.') }}</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="4" class="text-right">Tổng Tiền</td>
                                                        <td>{{ number_format($total, 0, '', '.') }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
@endsection
