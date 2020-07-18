{{--@extends('admin_layout')--}}
{{--@section('admin_content')--}}
{{--<div class="col-lg-10">--}}
{{--    <!-- Kết thúc quản lý admin -->--}}
{{--    <div class="col-lg-8">--}}
{{--        <div class="alert">--}}
{{--            <div class="panel panel-info">--}}
{{--                <div class="panel-heading">--}}
{{--                    <h3 class="panel-title">Sửa Tài Khoản Admin</h3>--}}
{{--                </div>--}}
{{--                <div class="panel-body overflow">--}}
{{--                    @foreach($edit_admin_account as $key => $edit_value)--}}
{{--                    <form action="{{URL::to('/update-admin-account/'.$edit_value->admin_id)}}" method="post" role="form">--}}
{{--                        {{csrf_field()}}--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="">Tên</label>--}}
{{--                            <input type="text" value="{{$edit_value->admin_name}}" class="form-control" name="admin_name" placeholder="Nhập tên admin"><br/>--}}
{{--                            <label for="">Tài khoản</label>--}}
{{--                            <input type="text" value="{{$edit_value->admin_username}}" class="form-control" name="admin_username"--}}
{{--                                   placeholder="Nhập tài khoản admin"><br/>--}}
{{--                            <label for="">Mật khẩu</label>--}}
{{--                            <input type="text" class="form-control" name="admin_password"--}}
{{--                                   placeholder="Nhập mật khẩu admin"><br/>--}}
{{--                            <label for="">Số điện thoại</label>--}}
{{--                            <input type="text" value="{{$edit_value->admin_phone}}" class="form-control" name="admin_phone"--}}
{{--                                   placeholder="Nhập số điện thoại admin"><br/>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary btn-max" name="add_admin">Sửa</button>--}}
{{--                    </form>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
