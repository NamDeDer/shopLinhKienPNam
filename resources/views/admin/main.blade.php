<!DOCTYPE html>
<html>

<head>
    @include('admin.head')
</head>

<body class="pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div id="wrapper">
        @include('admin.sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('admin.nav')
            @include('admin.alert')
            @yield('content')
            @include('admin.footer')
        </div>
    </div>
    @include('admin.script')
</body>

</html>
