@extends('admin.main')

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <form role="form" id="form" action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="menu">Tiêu đề</label>
                            <input type="text" name="name" value="{{ $slider->name }}" class="form-control"  placeholder="Nhập tiêu đề">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="menu">Đường dẫn</label>
                            <input type="text" name="url" value="{{ $slider->url }}" class="form-control"  placeholder="Nhập đường dẫn">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="menu">Ảnh Sản Phẩm</label>
                    <input type="file"  class="form-control" id="upload">
                    <div id="image_show">
                        <a href="{{$slider->thumb}}"></a>
                            <img src="{{$slider->thumb}}" width="100px" alt="">
                    </div>
                    <input type="hidden" name="thumb" id="thumb" value="{{$slider->thumb}}">
                </div>
                <div class="form-group">
                    <label for="menu">Sắp xếp</label>
                    <input type="text" name="sort_by" value="{{$slider->sort_by}}" class="form-control"  placeholder="Nhập tên sản phẩm">
                </div>
                
                <div class="form-group">
                    <label>Kích Hoạt</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        {{ $slider->active == 1 ? 'checked' : '' }}
                        >
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" 
                        {{ $slider->active == 0 ? 'checked' : '' }}
                        >
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>
                </div>
    
            </div>
    
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection