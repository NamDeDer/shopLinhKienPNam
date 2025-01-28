<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title}}</title>

    <link href="/template/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/template/admin/css/animate.css" rel="stylesheet">
    <link href="/template/admin/css/style.css" rel="stylesheet">
    <link href="/template/admin/css/customize.css" rel="stylesheet">

    
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">N</h1>

            </div>
            <h3>Welcome to Admin</h3>
            @include('admin.alert');
            <form class="m-t" role="form" method="post" action="/admin/users/login/store">
              @csrf
                <div class="form-group">
                    <input 
                    type="text" 
                    name="email"
                    class="form-control" 
                    value=""
                    placeholder="Email">
                </div>
                <div class="form-group">
                    <input 
                    type="password" 
                    name="password"
                    class="form-control" 
                    placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Nhớ mật khẩu
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Đăng Nhập</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/template/admin/js/jquery-3.1.1.min.js"></script>
    <script src="/template/admin/js/bootstrap.min.js"></script>

</body>

</html>
