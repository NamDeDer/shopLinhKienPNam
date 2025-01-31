<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                         </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Danh mục</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/admin/menus/add">Thêm danh mục</a></li>
                    <li class="active"><a href="/admin/menus/list">Danh sách danh mục</a></li>
                </ul>
            </li>

            <li class="">
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Sản phẩm</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/admin/product/add">Thêm sản phẩm</a></li>
                    <li class="active"><a href="/admin/product/list">Danh sách sản phẩm</a></li>
                </ul>
            </li>

            <li class="">
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Slider</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/admin/slider/add">Thêm slider</a></li>
                    <li class="active"><a href="/admin/slider/list">Danh sách slider</a></li>
                </ul>
            </li>

            <li class="">
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Đơn hàng</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="/admin/customers">Danh sách đơn hàng</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>