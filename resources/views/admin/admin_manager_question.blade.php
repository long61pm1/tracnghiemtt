@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-10">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Quản Lý Danh Sách Câu Hỏi</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-fixed">
                    <thead>
                    <tr>
                        <th class="col-lg-1">ID</th>
                        <th class="col-lg-1">Bài</th>
                        <th class="col-lg-3">Câu Hỏi</th>
                        <th class="col-lg-1">A</th>
                        <th class="col-lg-1">B</th>
                        <th class="col-lg-1">C</th>
                        <th class="col-lg-1">D</th>
                        <th class="col-lg-1">Đúng</th>
                        <th class="col-lg-2">chức năng</th>
                    </tr>
                    </thead>
                    <tbody class="scrollbar">
                    @foreach($all_cau_hoi as $key => $cau_hoi)
                        <tr>
                        <td class="col-lg-1">{{$cau_hoi->question_id}}</td>
                        <!-- ID câu hỏi -->
                        <td class="col-lg-1">{{$cau_hoi->question_number}}</td>
                        <!-- Tên Bài -->
                        <td class="col-lg-3">{{$cau_hoi->question_title}}</td>
                        <!-- nội dung câu hỏi -->
                        <td class="col-lg-1">{{$cau_hoi->question_A}}</td>
                        <td class="col-lg-1">{{$cau_hoi->question_B}}</td>
                        <td class="col-lg-1">{{$cau_hoi->question_C}}</td>
                        <td class="col-lg-1">{{$cau_hoi->question_D}}</td>
                        <td class="col-lg-1">{{$cau_hoi->question_true}}</td>
                        <!-- đáp án 1,2,3,4, đúng -->
                        <td class="col-lg-2">
                            <a class="btn btn-info" data-toggle="modal" href="{{URL::to('/edit-cau-hoi/'.$cau_hoi->question_id)}}">Sửa</a>
                            <a onclick="return confirm('bạn có chắc chắn muốn xóa câu này không?')" class="btn btn-danger" data-toggle="modal" href="{{URL::to('/delete-cau-hoi/'.$cau_hoi->question_id)}}">xóa</a>
                        </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thêm Câu Hỏi</h3>
            </div>
            <div class="panel-body">
                <?php
                use Illuminate\Support\Facades\Session;
                $message = Session::get('message');
                if ($message){
                    echo'<span style="width: 100%; color: red;font-size: 18px;text-align: center;font-weight: bold">',$message,'</span>';
                    Session::put('message',null);
                }
                ?>
                <form action="{{URL::to('/add-question')}}" method="POST" role="form">
                    <div class="form-group">
                        {{csrf_field()}}
                        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
                            <label for="">Câu Hỏi</label>
                            <textarea name="question_title" class="form-control" rows="9"
                                      style="resize: none"></textarea></br >
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
                            <input type="text" class="form-control" name="question_A" value=""><br/>
                            <label for="">Đáp Án B</label>
                            <input type="text" class="form-control" name="question_B" value=""><br/>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
                            <label for="">Đáp Án C</label>
                            <input type="text" class="form-control" name="question_C" value=""><br/>
                            <label for="">Đáp Án D</label>
                            <input type="text" class="form-control" name="question_D" value=""><br/>
                            <label for="">Đ.Án Đúng</label>
                            <input type="text" class="form-control" name="question_true" value=""></br >
                        </div>
                        <button type="submit" class="btn btn-max btn-primary" name="save_question">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
