@extends('admin.main')


@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <form role="form" id="form" action="" method="post">
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input 
                    type="text" 
                    placeholder="Nhập tên danh mục" 
                    class="form-control" 
                    id="menu" 
                    name="name">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select 
                        name="parent_id" 
                        id="" 
                        class="form-control">
                        <option value="0">Danh mục cha</option>
                        @foreach ($menus as $menu)
                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea 
                        name="description" 
                        id="" 
                        class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Mô tả chi tiết</label>
                    <textarea 
                        name="content" 
                        id="content" 
                        class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Kích hoạt</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="active" name="active" checked="" value="1">
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="no_active" name="active" value="0">
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>
                </div>

                <div>
                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Thêm</strong></button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    CKEDITOR.replace('content');
</script> 
@endsection