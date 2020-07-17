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

                    .box {
                        background-color: #444;
                        color: #fff;
                        border-radius: 5px;
                        padding: 20px;
                        font-size: 150%;
                        margin: 10%;
                        text-align: center;
                        line-height: 600%;
                    }
                </style>
                <div class="wrapper">
                    <a href="{{URL::to('/do-exam')}}"><div class="box a">Bài 1</div></a>
                    <a href="#"><div class="box b">Bài 2</div></a>
                    <a href="#"><div class="box c">Bài 3</div></a>
                    <a href="#"><div class="box d">Bài 4</div></a>
                    <a href="#"><div class="box e">Bài 5</div></a>
                    <a href="#"><div class="box f">Bài 6</div></a>
                </div>
            </div>
        </div>
    </div><!-- Kết thúc làm bài tập -->
@endsection
$table->increments('user_id');
$table->string('user_username');
$table->string('user_password');
$table->string('user_name');
$table->string('user_phone');
$table->string('user_avatar');
$table->string('score_1');
$table->string('score_2');
$table->string('score_3');
$table->string('score_4');
$table->string('score_5');
$table->string('score_6');
$table->timestamps();
