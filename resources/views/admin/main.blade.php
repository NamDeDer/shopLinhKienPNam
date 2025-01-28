<!DOCTYPE html>
<html>

<head>
  @include('admin.head')
</head>

<body class="">
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
