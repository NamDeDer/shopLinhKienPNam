<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Admin</title>

<link href="/template/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="/template/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="/template/admin/css/animate.css" rel="stylesheet">
{{-- @if(isset($config['css']) && is_array($config['css']))
    @foreach ($config['css'] as $key => $val)
        {!!'<link rel="stylesheet href="'.$val.'"></script>'!!}
    @endforeach
@endif --}}
<link href="/template/admin/css/style.css" rel="stylesheet">
<link href="/template/admin/css/customize.css" rel="stylesheet">
<link href="/template/admin/css/plugins/switchery/switchery.css" rel="stylesheet">

<script src="/template/admin/js/plugins/switchery/switchery.js"></script>

<!-- MetisMenu CSS -->
<link href="/template/admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">


@yield('head')