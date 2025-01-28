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
            <form role="form" id="form" action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="menu">Tiêu đề</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"  placeholder="Nhập tiêu đề">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="menu">Đường dẫn</label>
                            <input type="text" name="url" value="{{ old('url') }}" class="form-control"  placeholder="Nhập đường dẫn">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="menu">Ảnh Sản Phẩm</label>
                    <input type="file"  class="form-control" id="upload">
                    <div id="image_show">
    
                    </div>
                    <input type="hidden" name="thumb" id="thumb">
                </div>
                <div class="form-group">
                    <label for="menu">Sắp xếp</label>
                    <input type="text" name="sort_by" value="1" class="form-control"  placeholder="Nhập tên sản phẩm">
                </div>
                
                <div class="form-group">
                    <label>Kích Hoạt</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>
                </div>
    
            </div>
    
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm Slider</button>
            </div>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection