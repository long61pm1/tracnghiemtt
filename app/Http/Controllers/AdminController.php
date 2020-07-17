<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function  show_dashboard(){
        return view('admin.admin_dashboard');
    }
    public function dashboard(Request $request){
        $admin_username = $request->admin_username;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_username',$admin_username)->where('admin_password',$admin_password)->first();
        if ($result){
            Session::put('admin_id',$result->admin_id);
            Session::put('admin_username',$result->admin_username);
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('/admin_dashboard');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_id',null);
        Session::put('admin_username',null);
        Session::put('admin_name',null);
        return Redirect::to('/admin');
    }

    public function show_manager(){
        $all_admin_account = DB::table('tbl_admin')->get();
        $manager_admin_account = view('admin.admin_manager')->with('all_admin_account',$all_admin_account);
        return view('admin_layout')->with('admin.admin_manager',$manager_admin_account);
    }

    public function save_admin_account(Request $request){
        $data = array();
        $data['admin_username'] = $request->admin_username;
        $data['admin_password'] = md5($request->admin_password);
        $data['admin_name'] = $request->admin_name;
        $data['admin_phone'] = $request->admin_phone;

        DB::table('tbl_admin')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('admin-manager');
    }

    public function edit_admin_account($admin_id){
        $edit_admin_account = DB::table('tbl_admin')->where('admin_id',$admin_id)->get();
        $manager_admin_account = view('admin.edit_admin_account')->with('edit_admin_account',$edit_admin_account);
        return view('admin_layout')->with('admin.edit_admin_account',$manager_admin_account);
    }

    public function update_admin_account(Request $request, $admin_id){
        $data = array();
        $data['admin_username'] = $request->admin_username;
        $data['admin_password'] = md5($request->admin_password);
        $data['admin_name'] = $request->admin_name;
        $data['admin_phone'] = $request->admin_phone;
        DB::table('tbl_admin')->where('admin_id',$admin_id)->update($data);
        Session::put('message','Cập nhật tài khoản thành công');
        return Redirect::to('admin-manager');
    }

    public function delete_admin_account($admin_id){
        DB::table('tbl_admin')->where('admin_id',$admin_id)->delete();
        Session::put('message','Xóa admin thành công');
        return Redirect::to('admin-manager');
    }
}
