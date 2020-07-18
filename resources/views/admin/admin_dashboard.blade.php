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
                        <h3 class="panel-title">Thông Tin Cá Nhân</h3>
                    </div>
                    <div class="panel-body overflow scrollbar">
                        <div class="col-lg-6">
                            <img src="{{asset('public/admin/img/'.Session::get('admin_avatar'))}}" alt="Avatar" height="200" id="profiles-avatar">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" id="file" onchange="update_avatar()">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <img src="{{asset('public/admin/img/loading.gif')}}" width="50" height="50" class="valid-img hidden"
                                         id="avatar_uploading">
                                </div>
                            </div>
                            <span class="help">Ảnh JPG,PNG nhỏ hơn 2mb</span>
                        </div>
                        <div class="col-lg-6">
                            <form action="" id="upload_profiles">
                                <div class="col l4 s12">
                                    <div class="input-field">
                                        <label for="username" class="active">Tên Truy Cập</label>
                                        <input type="text" name="username" id="profiles-username" value="?????" readonly>
                                    </div>
                                </div>
                                <div class="col l4 s12">
                                    <div class="input-field">
                                        <input type="text" name="name" id="profiles-name" value="?????" required>
                                        <label for="name" class="active">Tên</label>
                                    </div>
                                    <div class="input-field">
                                        <label for="password" class="active">Mật Khẩu</label>
                                        <input type="password" style="border: #0b0b0b 1px solid;" name="password" id="profiles-password" required>
                                    </div>
                                    <div class="input-field">
                                        <button type="submit" class="btn" style="width: 100%">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('public/admin/js/profiles.js')}}"></script>
@endsection
