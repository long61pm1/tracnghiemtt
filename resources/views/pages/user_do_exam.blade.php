@extends('index')
@section('user-content')
    <div class="col-lg-7" style=" height: 6000%">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Làm Bài Tập 1</h3>
            </div>
            <div class="panel-body" id="lambai">

                <form action="{{URL::to('/save-exam')}}" method="post" role="form">
                    <div class="overflow-bt scrollbar">
                        <div class="panel panel-default rlambai">
                            <?php $count = 1; ?>
                            @foreach($all_question as $key => $cau_hoi)
                                <div class="panel-body lambai">
                                    <h3 class="panel-title">
                                        Câu <?php echo $count; ?> : {{$cau_hoi->question_title}}
                                    </h3>
                                    <ul>
                                        <li>
                                            <input type="radio" name="{{$cau_hoi->question_id}}" value="A">
                                            <label>A : {{$cau_hoi->question_A}}</label>
                                            <!-- hiển thị đáp án 1 -->
                                        </li>
                                        <li>
                                            <input type="radio" name="{{$cau_hoi->question_id}}" value="B">
                                            <label>B : {{$cau_hoi->question_B}}</label>
                                            <!-- hiển thị đáp án 2 -->
                                        </li>
                                        <li>
                                            <input type="radio" name="{{$cau_hoi->question_id}}" value="C">
                                            <label>C : {{$cau_hoi->question_C}}</label>
                                            <!-- hiển thị đáp án 3 -->
                                        </li>
                                        <li>
                                            <input type="radio" name="{{$cau_hoi->question_id}}" value="D">
                                            <label>D : {{$cau_hoi->question_D}}</label>
                                            <!-- hiển thị đáp án 4 -->
                                        </li>
                                    </ul>
                                </div>
                                <?php $count++; ?>
                            @endforeach
                        </div>
                    </div>
                    <a href="{{URL::to('/home')}}" class="btn btn-success btn-nopbai">Quay lại!</a>
                    <button type="submit" name="nopbai" class="btn btn-success btn-nopbai" >Nộp Bài</button>
                </form>
            </div>
        </div>
    </div><!-- Kết thúc làm bài tập -->
@endsection
