<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//User
Route::get('/', 'HomeController@login');
Route::get('/home', 'HomeController@index');
Route::post('/user-dashboard', 'HomeController@user_dashboard');
Route::post('/nop-bai', 'HomeController@nop_bai');
Route::get('/user-logout','HomeController@logout');
Route::get('/do-exam','HomeController@do_exam');

//admin
Route::get('/admin','AdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/admin_dashboard','AdminController@show_dashboard');
Route::get('/admin-logout','AdminController@logout');

Route::get('/admin-manager','AdminController@show_manager');
Route::post('/save-admin-account','AdminController@save_admin_account');
Route::post('/update-admin-account/{admin_id}','AdminController@update_admin_account');
Route::get('/edit-admin-account/{admin_id}','AdminController@edit_admin_account');
Route::get('/delete-admin-account/{admin_id}','AdminController@delete_admin_account');

//question
Route::get('/admin-manager-question','QuestionController@manager_question');
Route::post('/add-question','QuestionController@add_question');
Route::get('/delete-cau-hoi/{question_id}','QuestionController@delete_question');
Route::post('/update-cau-hoi/{question_id}','QuestionController@update_question');
Route::get('/edit-cau-hoi/{question_id}','QuestionController@edit_question');


