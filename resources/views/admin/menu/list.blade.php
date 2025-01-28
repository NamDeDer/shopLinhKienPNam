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
                    <th>Tên</th>
                    <th>Trạng Thái</th>
                    <th>Cập Nhật</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                    {!! \App\Helpers\Helper::menu($menus) !!}
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $menus->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection