@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

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
            <form role="form" id="form" action="/admin/menus/edit/{{ $menu->id }}" method="post">
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input 
                    type="text" 
                    placeholder="Nhập tên danh mục" 
                    class="form-control" 
                    id="menu"
                    value="{{$menu->name}}" 
                    name="name">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select 
                        name="parent_id" 
                        id="" 
                        class="form-control">
                        <option value="0" {{$menu->parent_id == 0 ? 'selected' : ''}}>Danh mục cha</option>
                        @foreach ($menus as $menuParent)
                            <option value="{{$menuParent->id}}" 
                                {{$menu->parent_id == $menuParent->id ? 'selected' : ''}}>
                                {{$menuParent->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea 
                        name="description" 
                        id=""
                        class="form-control">{{$menu->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Mô tả chi tiết</label>
                    <textarea 
                        name="content" 
                        id="content" 
                        class="form-control">{{$menu->content}}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Kích hoạt</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="active" name="active"value="1" {{ $menu->active == 1 ? 'checked' : '' }}>
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="no_active" name="active" value="0" {{ $menu->active == 0 ? 'checked' : '' }}>
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>
                </div>

                <div>
                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Cập nhật</strong></button>
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