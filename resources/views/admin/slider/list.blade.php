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
                    <th>Tiêu đề</th>
                    <th>Link</th>
                    <th>Hình Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Cập Nhật</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $key => $slider)
                    <tr>
                        <td>{{$slider->id}}</td>
                        <td>{{$slider->name}}</td>
                        <td>{{$slider->url}}</td>
                        <td>
                            <img src="{{ $slider->thumb }}" 
                                 alt="Thumbnail" 
                                 width="100px" 
                                 style="object-fit: cover;"
                            >
                        </td>
                        <td>{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                        <td>{{$slider->updated_at}}</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="/admin/slider/edit/{{$slider->id}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" onclick="removeRow({{$slider->id}}, '/admin/slider/destroy')" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $sliders->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection