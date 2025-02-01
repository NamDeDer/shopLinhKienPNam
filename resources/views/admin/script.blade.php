<!-- jQuery first -->
<script src="/template/admin/js/jquery-3.1.1.min.js"></script>

<!-- Bootstrap -->
<script src="/template/admin/js/bootstrap.min.js"></script>

<!-- Other plugins -->
<script src="/template/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/template/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/template/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Custom scripts -->
<script src="/template/admin/library/library.js"></script>
<script src="/template/admin/js/main.js"></script>

<script>
    $(document).ready(function() {
        $('#side-menu').metisMenu();
    });

    $(document).ready(function () {
    $('.navbar-minimalize').click(function (e) {
        e.preventDefault();
        $("body").toggleClass("mini-navbar");
    });
});
</script>

<!-- Dynamic scripts if any -->
@if(isset($config['js']) && is_array($config['js']))
    @foreach ($config['js'] as $key => $val)
        <script src="{{ $val }}"></script>
    @endforeach
@endif

@yield('script')