@extends('index')
@section('user-content')
    <div class="col-lg-7">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Chọn Bài làm</h3>
            </div>
            <div class="panel-body" id="lambai">
                <style>
                    .wrapper {
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr;
                        grid-gap: 10px;
                        background-color: #fff;
                        color: #444;
                        height: 690px;
                    }

                    .wrapper img {
                        width: 200px; /* width of container */
                        height: 200px; /* height of container */
                        object-fit: cover;
                        border: 5px solid black;
                    }

                    .box {
                        color: #fff;
                        border-radius: 5px;
                        /*padding: 60px;*/
                        font-size: 150%;
                        margin: 10%;
                        text-align: center;
                        line-height: 600%;
                    }
                </style>
                <div class="wrapper">
                    <a href="{{URL::to('/do-exam')}}">
                        <div class="box">
                            <div style="position: absolute;left: 14%;top: 14%; font-size: 36px">Bài 1</div>
                            <<img src="{{asset('public/user/img/bg1.jpg')}}"></div>
                    </a>
                    <a href="#">
                        <div class="box">
                            <div style="position: absolute;left: 47%;top: 14%; font-size: 36px">Bài 2</div>
                            <img src="{{asset('public/user/img/bg2.jpg')}}"></div>
                    </a>
                    <a href="#">
                        <div class="box">
                            <div style="position: absolute;left: 79%;top: 14%; font-size: 36px">Bài 3</div>
                            <img src="{{asset('public/user/img/bg3.jpg')}}"></div>
                    </a>
                    <a href="#">
                        <div class="box">
                            <div style="position: absolute;left: 14%;bottom: 23%; font-size: 36px">Bài 4</div>
                            <img src="{{asset('public/user/img/bg4.jpg')}}"></div>
                    </a>
                    <a href="#">
                        <div class="box">
                            <div style="position: absolute;left: 47%;bottom: 23%; font-size: 36px">Bài 5</div>
                            <img src="{{asset('public/user/img/bg5.jpeg')}}"></div>
                    </a>
                    <a href="#">
                        <div class="box">
                            <div style="position: absolute;left: 79%;bottom: 23%; font-size: 36px">Bài 6</div>
                            <img src="{{asset('public/user/img/bg6.jpg')}}"></div>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- Kết thúc làm bài tập -->
@endsection
