<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Cpanel - Trắc Nghiệm Online</title>
    <link rel="icon" href="{{asset('public/login/img/logo.png')}}" type="image/x-icon">
    <link rel="SHORTCUT ICON" href="{{asset('public/login/img/logo.png')}}" type="image/x-icon">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="public/admin/css/style.css">
</head>
<body style="overflow-x: hidden;">
<div class="col-lg-12" style="margin-top: 1%">
    <nav class="navbar navbar-default logo" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header font">
                <a class="navbar-brand" href="{{URL::to('/admin_dashboard')}}" style="color: blue !important">Admin
                    Control Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right font">
                    <li><a href="{{URL::to('/admin_dashboard')}}" style="color: blue !important">Trang Chủ</a></li>
                    <li><a href="#" style="color: blue !important">Hướng Dẫn Sử Dụng</a></li>
                    <li><a href="#" style="color: blue !important">Báo Lỗi - Góp ý</a></li>
                    <li><a href="#" style="color: blue !important">Liên Hệ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<!-- Kết thúc Header -->
<div class="col-lg-2">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Thông tin tài khoản</h3>
        </div>
        <div class="panel-body">
            <div class="col-lg-5">
                <img src="{{asset('public/admin/img/logo.png')}}" style="width: 95px;">
            </div>
            <div class="col-lg-7">
                <br/>
                <span>Tài khoản:
                <?php
                    use Illuminate\Support\Facades\Session;
                    $username = Session::get('admin_username');
                    if ($username) {
                        echo $username;
                    }
                    ?>
                </span><br/>
                <span>Tên:
                <?php
                    $name = Session::get('admin_name');
                    if ($name) {
                        echo $name;
                    }
                    ?>
                </span><br/><br/>
                <a class="" data-toggle="modal" style="color: blue !important;" href='{{URL::to('/admin-logout')}}'>Đăng
                    xuất</a>
            </div>
        </div>
    </div>
    <!-- Kết thúc thông tin cá nhân admin -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Menu</h3>
        </div>
        <div class="panel-body">
            <a class="btn btn-max btn-success" href="{{URL::to('/admin-manager')}}">Quản lý thông tin
                Admin</a><br/><br/>
            <a class="btn btn-max btn-success" href="?admin=ql_giao_vien">Quản lý Giáo Viên</a><br/><br/>
            <a class="btn btn-max btn-success" href="?admin=ql_lop">Quản lý Lớp</a><br/><br/>
            <a class="btn btn-max btn-success" href="?admin=ql_hoc_sinh">Quản lý Học Sinh</a><br/><br/>
            <a class="btn btn-max btn-success" href="{{URL::to('/admin-manager-question')}}">Quản lý Câu Hỏi</a><br/><br/>
            <a class="btn btn-max btn-success" href="?admin=admin_gui_tb">Gửi Thông Báo</a><br/><br/>
        </div>
    </div>
    <!-- Kết thúc menu -->
</div>
<!-- Kết thanh trái -->
@yield('admin_content')
