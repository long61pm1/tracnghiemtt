@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-10">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thêm Câu Hỏi</h3>
            </div>
            <div class="panel-body">
                @foreach($edit_cau_hoi as $key => $edit_value)
                <form action="{{URL::to('/update-cau-hoi/'.$edit_value->question_id)}}" method="POST" role="form">
                    <div class="form-group">
                        {{csrf_field()}}
                        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
                            <label for="">Câu Hỏi</label>
                            <textarea name="question_title" class="form-control" rows="3"
                                      style="resize: none">{{$edit_value->question_title}}</textarea></br >
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
                            <label for="">Bài</label>
                            <select name="question_number" id="inputKhoi" class="form-control" required="required">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></br >
                            <label for="">Đáp Án A</label>
                            <input type="text" class="form-control" name="question_A" value="{{$edit_value->question_A}}"><br/>
                            <label for="">Đáp Án B</label>
                            <input type="text" class="form-control" name="question_B" value="{{$edit_value->question_B}}"><br/>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
                            <label for="">Đáp Án C</label>
                            <input type="text" class="form-control" name="question_C" value="{{$edit_value->question_C}}"><br/>
                            <label for="">Đáp Án D</label>
                            <input type="text" class="form-control" name="question_D" value="{{$edit_value->question_D}}"><br/>
                            <label for="">Đ.Án Đúng</label>
                            <input type="text" class="form-control" name="question_true" value="{{$edit_value->question_true}}"></br >
                        </div>
                        <button type="submit" class="btn btn-max btn-primary" name="save_question">Sửa</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
