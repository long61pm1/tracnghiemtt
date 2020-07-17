<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class UserController extends Controller
{
    public function manager_user(){
        $all_user_account = DB::table('tbl_user')->get();
        $manager_user = view('admin.admin_manager_user')->with('all_user_account',$all_user_account);
        return view('admin_layout')->with('admin.admin_manager_user',$manager_user);
    }
    public function save_user_account(Request $request){
        $data = array();
        $data['user_username'] = $request->user_username;
        $data['user_password'] = md5($request->user_password);
        $data['user_name'] = $request->user_name;
        $data['user_phone'] = $request->user_phone;
        $data['score_1'] = "0";
        $data['score_2'] = "0";
        $data['score_3'] = "0";
        $data['score_4'] = "0";
        $data['score_5'] = "0";
        $data['score_6'] = "0";
        $data['user_avatar'] = "ava_default.jpg";

        DB::table('tbl_user')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('admin-manager-user');
    }
    public function delete_user_account($user_id){
        DB::table('tbl_user')->where('user_id',$user_id)->delete();
        Session::put('message','Xóa user thành công');
        return Redirect::to('admin-manager-user');
    }
    public function edit_user_account($user_id){
        $edit_user_account = DB::table('tbl_user')->where('user_id',$user_id)->get();
        $manager_user_account = view('admin.edit_user_account')->with('edit_user_account',$edit_user_account);
        return view('admin_layout')->with('admin.edit_user_account',$manager_user_account);
    }
    public function update_user_account(Request $request, $user_id){
        $data = array();
        $data['user_username'] = $request->user_username;
        $data['user_password'] = md5($request->user_password);
        $data['user_name'] = $request->user_name;
        $data['user_phone'] = $request->user_phone;
        DB::table('tbl_user')->where('user_id',$user_id)->update($data);
        Session::put('message','Cập nhật tài khoản thành công');
        return Redirect::to('admin-manager-user');
    }
}
