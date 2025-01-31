@extends('admin.main')

@section('content')
<ol class="breadcrumb">
    <li>
        <a href="{{route('admin')}}">Trang chủ</a>
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
@endsection