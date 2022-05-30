<aside class="main-sidebar">

    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="admin">
                    <i class="glyphicon glyphicon-list-alt"></i> <span>Thống kê</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ CỬA HÀNG</li>
            <li class="treeview">
                <a href="admin/content">
                    <i class="glyphicon glyphicon-comment"></i><span>Tin tức</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/product">
                    <i class="glyphicon glyphicon-tag"></i><span>Sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/category">
                    <i class="glyphicon glyphicon-list-alt"></i><span>Loại sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/producer">
                    <i class="glyphicon glyphicon-briefcase"></i><span>Nhà cung cấp</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ BÁN HÀNG</li>
            <li class="treeview">
                <a href="admin/coupon">
                    <i class="glyphicon glyphicon-barcode"></i> <span>Mã giảm giá</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/contact">
                    <i class="glyphicon glyphicon-envelope"></i> <span>Liên hệ</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/orders">
                    <i class="glyphicon glyphicon-file"></i> <span>Đơn hàng</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/customer">
                    <i class="glyphicon glyphicon-user"></i><span>Khách hàng</span>
                </a>
            </li>
            <li class="treeview">
             <a href="admin/sliders">
                <i class="glyphicon glyphicon-picture"></i> <span>Giao diện</span>
            </a>
        </li>
        <li class="header">CÀI ĐẶT</li>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-cog"></i><span>Hệ thống</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
                    <a href="admin/configuration/update">
                        <i class="glyphicon glyphicon-cog"></i> Cấu hình
                    </a>
                </li>
                <?php if($user['role'] == 1){
                echo  '<li>
                    <a href="<?php echo base_url() ?>admin/useradmin">
                        <i class="glyphicon glyphicon-user"></i> Nhân viên
                    </a>
                </li>';
                } ?>
            </ul>
        </li>
        <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Thoát</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>