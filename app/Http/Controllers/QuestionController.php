<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class QuestionController extends Controller
{
    public function manager_question(){
        $all_cau_hoi = DB::table('tbl_cau_hoi')->get();
        $manager_cau_hoi = view('admin.admin_manager_question')->with('all_cau_hoi',$all_cau_hoi);
        return view('admin_layout')->with('admin.admin_manager_question',$manager_cau_hoi);
    }
    public function add_question(Request $request){
        $data = array();
        $data['question_number'] = $request->question_number;
        $data['question_title'] = $request->question_title;
        $data['question_A'] = $request->question_A;
        $data['question_B'] = $request->question_B;
        $data['question_C'] = $request->question_C;
        $data['question_D'] = $request->question_D;
        $data['question_true'] = $request->question_true;

        DB::table('tbl_cau_hoi')->insert($data);
        Session::put('message','Thêm câu hỏi thành công');
        return Redirect::to('admin-manager-question');
    }
    public function delete_question($question_id){
        DB::table('tbl_cau_hoi')->where('question_id',$question_id)->delete();
        Session::put('message','Xóa câu hỏi thành công');
        return Redirect::to('admin-manager-question');
    }
    public function edit_question($question_id){
        $edit_cau_hoi = DB::table('tbl_cau_hoi')->where('question_id',$question_id)->get();
        $manager_question = view('admin.edit_cau_hoi')->with('edit_cau_hoi',$edit_cau_hoi);
        return view('admin_layout')->with('admin.edit_cau_hoi',$manager_question);
    }
    public function update_question(Request $request, $question_id){
        $data = array();
        $data['question_number'] = $request->question_number;
        $data['question_title'] = $request->question_title;
        $data['question_A'] = $request->question_A;
        $data['question_B'] = $request->question_B;
        $data['question_C'] = $request->question_C;
        $data['question_D'] = $request->question_D;
        $data['question_true'] = $request->question_true;
        DB::table('tbl_cau_hoi')->where('question_id',$question_id)->update($data);
        Session::put('message','Cập nhật tài khoản thành công');
        return Redirect::to('admin-manager-question');
    }
}
