@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-10">
        <div class="col-lg-8">
            <div class="alert">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa Tài Khoản User</h3>
                    </div>
                    <div class="panel-body overflow">
                        @foreach($edit_user_account as $key => $edit_value)
                            <form action="{{URL::to('/update-user-account/'.$edit_value->user_id)}}" method="post" role="form">
                                {{csrf_field()}}
                                <div class="form-group" style="margin-top: 4%">
                                    <label for="">Tên</label>
                                    <input type="text" value="{{$edit_value->user_name}}" class="form-control" name="user_name" placeholder="Nhập tên user"><br/>
                                    <label for="">Tài khoản</label>
                                    <input type="text" value="{{$edit_value->user_username}}" class="form-control" name="user_username"
                                           placeholder="Nhập tài khoản user"><br/>
                                    <label for="">Mật khẩu</label>
                                    <input type="password" value="{{$edit_value->user_password}}" class="form-control" style="border: 1px solid #ccc; margin: unset;color: #0b0b0b;width: 100%; text-align: left" name="admin_password"
                                           placeholder="Nhập mật khẩu user"><br/>
                                    <label for="">Số điện thoại</label>
                                    <input type="text" value="{{$edit_value->user_phone}}" class="form-control" name="user_phone"
                                           placeholder="Nhập số điện thoại user"><br/>
                                </div>
                                <button type="submit" class="btn btn-primary btn-max" style="width: 40%; margin-left: 30%; margin-top: 5%" name="add_user">Sửa</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
