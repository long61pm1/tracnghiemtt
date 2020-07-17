<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('user_login');
    }

    public function user_dashboard(Request $request){
        $user_username = $request->user_username;
        $user_password = md5($request->user_password);

        $result = DB::table('tbl_user')->where('user_username',$user_username)->where('user_password',$user_password)->first();
        if ($result){
            Session::put('user_id',$result->user_id);
            Session::put('user_username',$result->user_username);
            Session::put('user_name',$result->user_name);
            return Redirect::to('/home');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/');
        }
    }
    public function logout(){
        Session::put('user_id',null);
        Session::put('user_username',null);
        Session::put('user_name',null);
        return Redirect::to('/');
    }
}
