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

    public function do_exam($number_id)
    {
        $all_question = DB::table('tbl_cau_hoi')->where('question_number',$number_id)->get();
        $manager_question = view('pages.user_do_exam')->with('all_question',$all_question);
        Session::put('question_number',$number_id);
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
            Session::put('user_avatar', $result->user_avatar);
            Session::put('score_1', $result->score_1);
            Session::put('score_2', $result->score_2);
            Session::put('score_3', $result->score_3);
            Session::put('score_4', $result->score_4);
            Session::put('score_5', $result->score_5);
            Session::put('score_6', $result->score_6);
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
        Session::put('user_avatar', null);
        Session::put('score_1', null);
        Session::put('score_2', null);
        Session::put('score_3', null);
        Session::put('score_4', null);
        Session::put('score_5', null);
        Session::put('score_6', null);
        return Redirect::to('/');
    }

    public function save_exam(Request $request){
        $result = DB::table('tbl_cau_hoi')->where('question_number', Session::get('question_number'))->get();
//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
        $score = 0;
        $data = array();
        for ($i=1;$i<=10;$i++){
            $string = 'cau'.$i;
            $answer = 'da_'.$request->$string;
            foreach ($result as $key=>$cau_hoi){
                if ($cau_hoi->question_id == $request->$string){
                    if ($cau_hoi->question_true == $request->$answer){
                        $score++;
                    }
                }
            }
        }
        $data['score_'.Session::get('question_number')] = $score;
        DB::table('tbl_user')->where('user_id',Session::get('user_id'))->update($data);
        Session::put('message','Số điểm bạn đạt được là: '.$score.' điểm');
        Session::put('score_'.Session::get('question_number'), $score);
        return Redirect::to('/home');
//        echo $score;
//        echo Session::get('user_id');
//        return $request;
//        return Session::get('question_number');
    }
}
