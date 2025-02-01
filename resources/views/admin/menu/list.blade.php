@extends('admin.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="ibox">
        <div class="ibox-content">
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">

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
                                    <a href="/admin/menus/add" class="btn btn-danger"><i class="fa fa-plus mr5">Thêm mới</i></a>
                                </div>
                            </div>
                        </div>
                    </div>

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
        </div>
    </div>
</div>
@endsection