<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ Thống Trắc Nghiệm Online</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="public/admin/css/style.css">
</head>
<body style="overflow-x: hidden;">
<div class="col-lg-12" style="margin-top: 1%">
    <nav class="navbar navbar-default logo" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand font" href="?" style="color: blue !important;">Hệ Thống Trắc Nghiệm Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right font">
                    <li><a href="?" style="color: blue !important">Trang Chủ</a></li>
                    <li><a href="#" style="color: blue !important">Hướng Dẫn Sử Dụng</a></li>
                    <li><a href="#" style="color: blue !important">Ôn Lại Kiến Thức</a></li>
                    <li><a href="#" style="color: blue !important">Báo Lỗi - Góp ý</a></li>
                    <li><a href="#" style="color: blue !important">Liên Hệ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<!-- Kết thúc header -->
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
                    $username = Session::get('user_username');
                    if ($username) {
                        echo $username;
                    }
                    ?>
                </span><br/>
                <span>Tên:
                <?php
                    $name = Session::get('user_name');
                    if ($name) {
                        echo $name;
                    }
                    ?>
                </span><br/><br/>
                <a class="" data-toggle="modal" style="color: blue !important;" href='{{URL::to('/user-logout')}}'>Đăng
                    xuất</a>
            </div>
            <span><span></span>
                <!-- tên cv => ten lop -->
				</span><br/>
        </div>
    </div>
    <!-- Kết thúc thông tin cá nhân học sinh -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Bảng Điểm</h3>
        </div>
        <div class="panel-body" style="height: 300px;">
            <?php
            //vòng lặp load thông tin điểm của học sinh
            ?>
        </div>
    </div>
</div>
<!-- Kết thúc bảng điểm -->
{{--@yield('user-content')--}}
<div class="col-lg-7">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Làm Bài Tập Chương 1</h3>
        </div>
        <div class="panel-body" id="lambai">
            <form action="?nop_bai" method="POST" role="form">
                <div class="overflow-bt scrollbar">
                    <input type="hidden" name="unit" value="">
                    <input type="hidden" name="tong_so_ch" value="">
                    <?php
                    // vòng lặp load các câu hỏi ra
//                    for ($i = 0; $i < $ts_ch; $i++) {?>
                    <div class="panel panel-default rlambai">
                        <div class="panel-body lambai">
                            <h3 class="panel-title">
                                Câu
{{--                                <?=$i+1?> - #<?=$cau_hoi[$i]->id_cauhoi?> :   <?=$cau_hoi[$i]->cau_hoi?>--}}
                            <!-- $cau_hoi[$i]->id_cauhoi hiển thị id câu hỏi thứ i -->
                                <!-- $cau_hoi[$i]->cau_hoi hiển thị nội dung câu hỏi thứ i -->
                            </h3>
                            <input type="hidden" name="id_ch_<$i?>" value="id_cauhoi">
                        <!-- id_ch_<$i?> sẽ nhận giá trị id câu hỏi (<$cau_hoi[$i]->id_cauhoi?>) để truyền qua view kết qua bài làm thông qua phương thức POST-->
                            <ul>
                                <li>
                                    <input type="radio" name="da_i" value="<$cau_hoi[$i]->da_1?>">
                                    <label><$cau_hoi[$i]->da_1?></label>
                                    <!-- hiển thị đáp án 1 -->
                                </li>
                                <li>
                                    <input type="radio" name="da_<$i?>" value="<cau_ho[$i]->da_2?>">
                                    <label>$cau_hoi[$i]->da_2?></label>
                                    <!-- hiển thị đáp án 2 -->
                                </li>
                                <li>
                                    <input type="radio" name="da_<$i?>" value="<$cau_hoi[$i]->da_3?>">
                                    <label><cau_hoi[$i]->da_3?></label>
                                    <!-- hiển thị đáp án 3 -->
                                </li>
                                <li>
                                    <input type="radio" name="da_<$i?>" value="<$cau_hoi[$i]->da_4?>">
                                    <label><cau_hoi[$i]->da_4?></label>
                                    <!-- hiển thị đáp án 4 -->
                                </li>
                            <!-- da_<$i?> sẽ nhận đáp án của câu hỏi có id là id_ch_<$i?> mà học sinh trả lời để gửi qua view kết quả qua phương thức POST-->
                            </ul>
                        </div>
                    </div>
                    <?php
                    ?>
                </div>
                <button type="submit" name="nopbai" class="btn btn-success btn-nopbai" value="true">Nộp Bài</button>
                <a href="?" class="btn btn-success btn-nopbai">Quay lại!</a>
            </form>
        </div>
    </div>
</div><!-- Kết thúc làm bài tập -->
<?php


	?>
{{--<div class="col-lg-7">--}}
{{--    <div class="panel panel-danger">--}}
{{--        <div class="panel-heading">--}}
{{--            <h3 class="panel-title">Lỗi!</h3>--}}
{{--        </div>--}}
{{--        <div class="panel-body overflow-hs">--}}
{{--            Bài tập không tồn tại hoặc đã làm xong, vui lòng kiểm tra lại hoặc liên hệ giáo viên.<br /><br />--}}
{{--            <a href="?"><button type="button" class="btn btn-info">Quay Lại</button></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div><!-- Kết thúc báo lỗi bài tập -->--}}

<!-- Kết thúc Sidebar trái -->
<div class="col-lg-12">
    <nav class="navbar navbar-default navbar-static-top foot font" style=" margin-bottom: 0px !important;" role="navigation">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a>Hệ Thống Trắc Nghiệm Online<br />
                        Hoàn thành ngày 20/09/2017<br />
                        Lớp 61PM1</a>
                </li>
            </ul>
            <!-- Kết thúc thông tin phiên bản -->
            <ul class="nav navbar-nav navbar-right" style="margin-right: 15px">
                <li><a>Phát triển:<br />Đào Công Long (long143961@nuce.edu.vn)<br />55 Giải Phóng, HBT, HN<br /></a></li>
            </ul>
            <!-- Kết thúc thông tin nhóm thực hiện -->
        </div><!-- /.navbar-collapse -->
    </nav>
</div>
<!-- Kết thúc footer -->
<script type="text/javascript">
    $(document).ready(function () {
        if (!$.browser.webkit) {
            $('.table-fixed').html('<p>Trình duyệt không hỗ trợ Scrollbar. :(</p>');
        }
    });
</script>
<script src="{{asset('public/admin/js/jquery.js')}}"></script>
<script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
</body>
</html>
