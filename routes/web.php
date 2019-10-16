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
Route::get('/logout', 'AdminController@logout');//logout

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin/admin_login');
});
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_signup', 'AdminController@admin_signup');
Route::post('/admin_save', 'AdminController@admin_save');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
//add student
Route::get('/addstudent','AddstudentsController@addstudent');
Route::post('/save_student','AddstudentsController@save_student');
//all student

Route::get('/allstudent','AllstudentsController@allstudent');

Route::get('student_delete/{student_id}','AllstudentsController@student_delete');
Route::get('/tutionfees','TutionController@tutionfees');

Route::get('studentView/{student_id}','AllstudentsController@studentView');

Route::get('studentEdit/{student_id}','AllstudentsController@studentEdit');
Route::post('update_student/{student_id}','AllstudentsController@studentUpdate');


Route::get('/bba','BBAController@bba');
Route::get('/cse','CSEController@cse');
Route::get('/eee','EEEController@eee');
Route::get('/geb','GEBController@geb');
Route::get('/mba','MBAController@mba');
Route::get('/result','ResultController@result');
Route::get('/allteachers','TeacherController@allTeacher');
Route::get('/addteachers','TeacherController@addTeacher');
Route::post('/save_teacher','TeacherController@saveteacher');
Route::get('/teacherView/{teachers_id}','TeacherController@teacherView');
Route::get('/teacherEdit/{teachers_id}','TeacherController@teacherEdit');
Route::post('/teacher_update/{teachers_id}','TeacherController@teacherUpdate');
Route::get('/teacher_delete/{teachers_id}','TeacherController@teacherDelete');


Route::get('/adminview/{admin_id}','AdminController@adminview');

Route::get('settings','AdminController@settings');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
