<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.user_select_level');
    }

    public function login()
    {
        return view('user_login');
    }

    public function do_exam()
    {
        $all_question = DB::table('tbl_cau_hoi')->where('question_number','1')->get();
        $manager_question = view('pages.user_do_exam')->with('all_question',$all_question);
        return view('index')->with('pages.user_do_exam',$manager_question);
    }

    public function user_dashboard(Request $request)
    {
        $user_username = $request->user_username;
        $user_password = md5($request->user_password);

        $result = DB::table('tbl_user')->where('user_username', $user_username)->where('user_password', $user_password)->first();
        if ($result) {
            Session::put('user_id', $result->user_id);
            Session::put('user_username', $result->user_username);
            Session::put('user_name', $result->user_name);
            return Redirect::to('/home');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu sai');
                return Redirect::to('/');
        }
    }

    public function logout()
    {
        Session::put('user_id', null);
        Session::put('user_username', null);
        Session::put('user_name', null);
        return Redirect::to('/');
    }

    public function save_exam(){

    }
}
