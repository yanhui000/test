<?php

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

Route::get('/', function () {
    return view('welcome');
});

//后台
Route::any('/index','Admin\IndexController@index');//后台页面
Route::any('/index_login','Admin\LoginController@login');//后台登录



//前台
Route::any('/','Index\IndexController@index');//前台页面
Route::any('/admin_login','Index\LoginController@login');//前台登录页面



//教师管理
Route::any('/teacherAdd','Admin\TeacherController@teacherAdd');//教师添加
Route::any('/do_teacherAdd','Admin\TeacherController@do_teacherAdd');//执行添加
Route::any('/teacherList','Admin\TeacherController@teacherList');//教师展示
Route::any('/teacherDel','Admin\TeacherController@teacherDel');//教师删除
Route::any('/teacherUpdate','Admin\TeacherController@teacherUpdate');//教师修改页面
Route::any('/do_teacherUpdate','Admin\TeacherController@do_teacherUpdate');//教师修改页面