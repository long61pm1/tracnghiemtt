@extends('admin_layout')
@section('admin_content')

<div class="col-lg-10">
    <div style="text-align: center">
        <?php
        use Illuminate\Support\Facades\Session;
        $message = Session::get('message');
        if ($message){
            echo'<span style="width: 100%; color: red;font-size: 18px;text-align: center;font-weight: bold">',$message,'</span>';
            Session::put('message',null);
        }
        ?>
    </div>
    <div class="col-lg-8">
        <div class="alert">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Quản Lý Thông Tin Admin</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-fixed">
                        <thead>
                        <tr>
                            <th class="col-lg-1">ID</th>
                            <th class="col-lg-3">Tài Khoản</th>
                            <th class="col-lg-3">Mật Khẩu</th>
                            <th class="col-lg-3">Tên</th>
                            <th class="col-lg-2">Số điện thoại</th>
{{--                            <th class="col-lg-2">chức năng</th>--}}
                        </tr>
                        </thead>
                        <tbody class="scrollbar">
                        @foreach($all_admin_account as $key => $ad_acc)
                        <tr>
                            <td class="col-lg-1"> {{ $ad_acc->admin_id }}</td>
                            <!-- ID Admin -->
                            <td class="col-lg-3">{{ $ad_acc->admin_username }}</td>
                            <!-- Tài khoản admin -->
                            <td class="col-lg-3">******</td>
                            <!-- Mật khẩu không hiện-->
                            <td class="col-lg-3">{{ $ad_acc->admin_name }}</td>
                            <!-- Tên Admin -->
                            <td class="col-lg-2">{{ $ad_acc->admin_phone }}</td>
{{--                            <td class="col-lg-2">--}}
{{--                                <a class="btn btn-info" data-toggle="modal" href="{{URL::to('/edit-admin-account/'.$ad_acc->admin_id)}}">Sửa</a>--}}
{{--                                <a onclick="return confirm('bạn có chắc chắn muốn xóa tài khoản này không?')" class="btn btn-danger" data-toggle="modal" href="{{URL::to('/delete-admin-account/'.$ad_acc->admin_id)}}">xóa</a></td>--}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Kết thúc quản lý admin -->
    <div class="col-lg-4">
        <div class="alert">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Thêm Tài Khoản Admin</h3>
                </div>
                <div class="panel-body overflow">
                    <form action="{{URL::to('/save-admin-account')}}" method="post" role="form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" class="form-control" name="admin_name" placeholder="Nhập tên admin"><br/>
                            <label for="">Tài khoản</label>
                            <input type="text" class="form-control" name="admin_username" placeholder="Nhập tài khoản admin"><br/>
                            <label for="">Mật khẩu</label>
                            <input type="text" class="form-control" name="admin_password"
                                   placeholder="Nhập mật khẩu admin"><br/>
                            <label for="">Số điện thoại</label>
                            <input type="text" class="form-control" name="admin_phone"
                                   placeholder="Nhập số điện thoại admin"><br/>
                        </div>
                        <button type="submit" class="btn btn-primary btn-max" name="add_admin">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
