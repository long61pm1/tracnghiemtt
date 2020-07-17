<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- 2.0 Title -->
    <title>User Login</title>
    <link rel="icon" href="{{asset('public/login/img/logo.png')}}" type="image/x-icon">
    <link rel="SHORTCUT ICON" href="{{asset('public/login/img/logo.png')}}" type="image/x-icon">
    <!-- 3.0 CSS IMPORT -->
    <!-- CSS IMPORT FOR PLUGIN -->
    <link rel="stylesheet" href="{{asset('public/login/Bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/Font/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/css/simple-line-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/css/loader.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/css/magnific-popup.css')}}" type="text/css">
    <!-- CSS IMPORT FOR FONT -->
    <link rel="stylesheet" href="{{asset('public/login/Font/css/nexa-font.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/Font/css/JosefinSans-font.css')}}" type="text/css">

    <!-- CSS IMPORT FOR MAIN STYLE AND COLOR SCHEME -->
    <link rel="stylesheet" href="{{asset('public/login/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/login/css/color-scheme.css')}}" type="text/css">

    <!--<link rel="stylesheet" href="/styles/loading.css?v=2.7" type="text/css">-->
    <!--<link rel="stylesheet" href="./VAB InternetBanking Login_files/onScreenKeyboard.css">-->
    <!-- support HTML5 elements and media queries for IE9 -->
    <style type="text/css">
        #mynews {
            opacity: 1 !important;
            overflow: visible !important
        }
    </style>
</head>
<body>
<div class="bg-container-slideshow" style="position: fixed; z-index: -1; background: none;">
    <div class="backstretch"
         style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 926px; width: 1918px; z-index: -999998; position: absolute;">
        <img src="{{asset('public/login/img/bg.jpg')}}"
             style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1918px; height: 1198.75px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -136.375px;">
    </div>
</div>
<!-- end background container -->

<!-- canvas -->
<canvas id="bg-canvas" width="1918" height="975"></canvas>
<!-- end canvas -->

<!-- 6.0 section nav -->
<div class="section-nav">
</div>

<!-- 7.0 countdown page -->
<div class="countdown">
    <!-- countdown container -->
    <div class="countdown-container" id="lwt-countdown">
    </div>
    <!-- end countdown container -->
</div>

<!-- contact form -->
<form id="form1" name="form1" class="form-horizontal" action="{{URL::to('/user-dashboard')}}" method="post">
    <div class="page-container">
        <!-- 8.1 home section -->
        <div class="home-section">
            <!-- 8.1.1 logo -->
            <div class="logo">
                <img class="animated fadeInDown logo_custom" src="{{asset('public/login/img/logo.png')}}" alt="logo">
            </div>
            <!-- end logo -->

            <!-- 8.1.2 Form login -->
            <div class="fullpage-section">
                <!-- content container -->
                <div
                    class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12  content-container">
                    <h3 class="small-title">Ứng dụng làm trắc nghiệm</h3>
                    <h2 class="title-with-border">Đăng nhập quyền <span class="highlight">User</span></h2>
                    <!-- content -->
                    <div class="content">
                        <p class="desc">
                            Vui lòng nhập tên đăng nhập và mật khẩu để sử dụng.
                        </p>
                    <?php
                    use Illuminate\Support\Facades\Session;
                    $message = Session::get('message');
                    if ($message){
                        echo'<span style="width: 100%; color: red;font-size: 18px;text-align: center;font-weight: bold">',$message,'</span>';
                        Session::put('message',null);
                    }
                    ?>
                    {{csrf_field()}}
                    <!-- 8.3.2.1 contact form container -->
                        <div class="contact-form-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="contact-notif col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="errsession" style="color:red;"></div>
                            </div>
                            <!-- end notif container -->

                            <!-- left side -->
                            <div id="frmlogin" class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-xs-12">
                                <div class="form-row">
                                    <input id="username" name="user_username" class="contact-name load-virtual-keyboard"
                                           placeholder="Tên đăng nhập" type="text" value="" maxlength="50"
                                           autocomplete="new-password">
                                </div>
                                <div class="form-row">
                                    <input id="password" name="user_password" class="contact-email load-virtual-keyboard"
                                           placeholder="Mật khẩu" type="password" value="" maxlength="50"
                                           autocomplete="new-password">
                                </div>

                                <div id="keyboard-draggable" class="visible-sm visible-md visible-lg ">
                                    <div name="keyboard" class="keyboard" style="margin-top: 20px;"></div>
                                </div>
                            </div>
                            <!-- end left side -->

                            <!-- submit button -->
                            <div class="form-row col-lg-8 col-md-8 col-xs-12 p-t">
                                <button id="btnsubmit" name="submit" class="button-regular" data-text="Đăng nhập">Đăng
                                    Nhập
                                </button>
                            </div>
                            <!-- end contact form -->
                        </div>
                        <!-- end contact form container -->
                    </div>
                    <!-- end content -->
                </div>
                <!-- end content container -->
            </div>
            <!-- end form login -->
            <!-- 8.1.4 Coppy right -->
            <div class="footer m-b-0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!--<div class="navbar-brand size-small"></div>-->
                        <small class="footer-copyright">© 2020 Công Ty TNHH Long DC. <i class="fa fa-phone p-l"></i>
                            1900 1008</small>
                    </div>
                    <ul class="nav navbar-nav navbar-right p-r">
                        <li><a href="https://www.facebook.com/longmolo" class="text-link" target="_blank">Liên hệ</a>
                        </li>
                        <li>
                            <a href="#" class="text-link" alt="" title="Tin tức">Tin tức</a>
                        </li>
                        <li><a href="#" class="text-link">Hướng dẫn sử dụng</a></li>
                        <li><a href="#" class="text-link">Điều kiện &amp; điều khoản</a></li>
                    </ul>
                </div>
            </div>
            <!-- end coppyright -->
        </div>
        <!-- end home section -->

    </div>
</form>
<!--------------- tuyết rơi------------------->
<style>
    /* customizable snowflake styling */
    .snowflake {
        color: #fff;
        font-size: 2em;
        font-family: Arial, sans-serif;
        /*text-shadow: 0 0 5px #aaaaaa;*/
    }

    @-webkit-keyframes snowflakes-fall {
        0% {
            top: -10%
        }
        100% {
            top: 100%
        }
    }

    @-webkit-keyframes snowflakes-shake {
        0%, 100% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
        50% {
            -webkit-transform: translateX(80px);
            transform: translateX(80px)
        }
    }

    @keyframes snowflakes-fall {
        0% {
            top: -10%
        }
        100% {
            top: 100%
        }
    }

    @keyframes snowflakes-shake {
        0%, 100% {
            transform: translateX(0)
        }
        50% {
            transform: translateX(80px)
        }
    }

    .snowflake {
        position: fixed;
        top: -10%;
        z-index: 9999;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        -webkit-animation-name: snowflakes-fall, snowflakes-shake;
        -webkit-animation-duration: 10s, 3s;
        -webkit-animation-timing-function: linear, ease-in-out;
        -webkit-animation-iteration-count: infinite, infinite;
        -webkit-animation-play-state: running, running;
        animation-name: snowflakes-fall, snowflakes-shake;
        animation-duration: 10s, 3s;
        animation-timing-function: linear, ease-in-out;
        animation-iteration-count: infinite, infinite;
        animation-play-state: running, running
    }

    .snowflake:nth-of-type(0) {
        left: 1%;
        -webkit-animation-delay: 0s, 0s;
        animation-delay: 0s, 0s
    }

    .snowflake:nth-of-type(1) {
        left: 10%;
        -webkit-animation-delay: 1s, 1s;
        animation-delay: 1s, 1s
    }

    .snowflake:nth-of-type(2) {
        left: 20%;
        -webkit-animation-delay: 6s, .5s;
        animation-delay: 6s, .5s
    }

    .snowflake:nth-of-type(3) {
        left: 30%;
        -webkit-animation-delay: 4s, 2s;
        animation-delay: 4s, 2s
    }

    .snowflake:nth-of-type(4) {
        left: 40%;
        -webkit-animation-delay: 2s, 2s;
        animation-delay: 2s, 2s
    }

    .snowflake:nth-of-type(5) {
        left: 50%;
        -webkit-animation-delay: 8s, 3s;
        animation-delay: 8s, 3s
    }

    .snowflake:nth-of-type(6) {
        left: 60%;
        -webkit-animation-delay: 6s, 2s;
        animation-delay: 6s, 2s
    }

    .snowflake:nth-of-type(7) {
        left: 70%;
        -webkit-animation-delay: 2.5s, 1s;
        animation-delay: 2.5s, 1s
    }

    .snowflake:nth-of-type(8) {
        left: 80%;
        -webkit-animation-delay: 1s, 0s;
        animation-delay: 1s, 0s
    }

    .snowflake:nth-of-type(9) {
        left: 90%;
        -webkit-animation-delay: 3s, 1.5s;
        animation-delay: 3s, 1.5s
    }

    .snowflake:nth-of-type(10) {
        left: 25%;
        -webkit-animation-delay: 2s, 0s;
        animation-delay: 2s, 0s
    }

    .snowflake:nth-of-type(11) {
        left: 65%;
        -webkit-animation-delay: 4s, 2.5s;
        animation-delay: 4s, 2.5s
    }
</style>
<!--------------- tuyết rơi------------------->
<style>
    /* customizable snowflake styling */
    .snowflake {
        color: #fff;
        font-size: 2em;
        font-family: Arial, sans-serif;
        /*text-shadow: 0 0 5px #aaaaaa;*/
    }

    @-webkit-keyframes snowflakes-fall {
        0% {
            top: -10%
        }
        100% {
            top: 100%
        }
    }

    @-webkit-keyframes snowflakes-shake {
        0%, 100% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
        50% {
            -webkit-transform: translateX(80px);
            transform: translateX(80px)
        }
    }

    @keyframes snowflakes-fall {
        0% {
            top: -10%
        }
        100% {
            top: 100%
        }
    }

    @keyframes snowflakes-shake {
        0%, 100% {
            transform: translateX(0)
        }
        50% {
            transform: translateX(80px)
        }
    }

    .snowflake {
        position: fixed;
        top: -10%;
        z-index: 9999;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        -webkit-animation-name: snowflakes-fall, snowflakes-shake;
        -webkit-animation-duration: 10s, 3s;
        -webkit-animation-timing-function: linear, ease-in-out;
        -webkit-animation-iteration-count: infinite, infinite;
        -webkit-animation-play-state: running, running;
        animation-name: snowflakes-fall, snowflakes-shake;
        animation-duration: 10s, 3s;
        animation-timing-function: linear, ease-in-out;
        animation-iteration-count: infinite, infinite;
        animation-play-state: running, running
    }

    .snowflake:nth-of-type(0) {
        left: 1%;
        -webkit-animation-delay: 0s, 0s;
        animation-delay: 0s, 0s
    }

    .snowflake:nth-of-type(1) {
        left: 10%;
        -webkit-animation-delay: 1s, 1s;
        animation-delay: 1s, 1s
    }

    .snowflake:nth-of-type(2) {
        left: 20%;
        -webkit-animation-delay: 6s, .5s;
        animation-delay: 6s, .5s
    }

    .snowflake:nth-of-type(3) {
        left: 30%;
        -webkit-animation-delay: 4s, 2s;
        animation-delay: 4s, 2s
    }

    .snowflake:nth-of-type(4) {
        left: 40%;
        -webkit-animation-delay: 2s, 2s;
        animation-delay: 2s, 2s
    }

    .snowflake:nth-of-type(5) {
        left: 50%;
        -webkit-animation-delay: 8s, 3s;
        animation-delay: 8s, 3s
    }

    .snowflake:nth-of-type(6) {
        left: 60%;
        -webkit-animation-delay: 6s, 2s;
        animation-delay: 6s, 2s
    }

    .snowflake:nth-of-type(7) {
        left: 70%;
        -webkit-animation-delay: 2.5s, 1s;
        animation-delay: 2.5s, 1s
    }

    .snowflake:nth-of-type(8) {
        left: 80%;
        -webkit-animation-delay: 1s, 0s;
        animation-delay: 1s, 0s
    }

    .snowflake:nth-of-type(9) {
        left: 90%;
        -webkit-animation-delay: 3s, 1.5s;
        animation-delay: 3s, 1.5s
    }

    .snowflake:nth-of-type(10) {
        left: 25%;
        -webkit-animation-delay: 2s, 0s;
        animation-delay: 2s, 0s
    }

    .snowflake:nth-of-type(11) {
        left: 65%;
        -webkit-animation-delay: 4s, 2.5s;
        animation-delay: 4s, 2.5s
    }
</style>
<div class="snowflakes" aria-hidden="true">
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
    <div class="snowflake">
        ❅
    </div>
    <div class="snowflake">
        ❆
    </div>
</div>
<!------------- end tuyết rơi  --------------->
<!-- end page container -->


<!-- 9.0  JavaScript Import -->
<!-- jquery -->
<script type="text/javascript" src="{{asset('public/login/js/jquery.js')}}"></script>
<!-- bootstrap -->
<script type="text/javascript" src="{{asset('public/login/Bootstrap/js/bootstrap.min.js')}}"></script>
<!-- countdown -->
<script type="text/javascript" src="{{asset('public/login/js/jquery.lwtCountdown-1.0.js')}}"></script>
<!-- backstretch -->
<script type="text/javascript" src="{{asset('public/login/js/jquery.backstretch.min.js')}}"></script>
<!-- constellation (star-effect) -->
<script type="text/javascript" src="{{asset('public/login/js/constellation.js')}}"></script>

<script type="text/javascript" src="{{asset('public/login/js/jquery.magnific-popup.min.js')}}"></script>
<!-- owl carousel -->

<!-- main js -->
<script type="text/javascript" src="{{asset('public/login/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('public/login/js/common.js')}}"></script>

</body>
</html>
