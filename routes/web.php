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

/*frontend*/
// Route::get('alo', function() {
//     $st = App\Models\Student::find(3);
//     $st->password = bcrypt(12345678);
//     $st->save();
// });

Route::get('login-student','StudentController@login_student')->name('login_student');
Route::post('login-check','StudentController@check_login')->name('check_login_student');

Route::get('logout-student','StudentController@logout')->name('logout_student');

Route::group(['prefix'=>'/','middleware'=>'check_login'],function() {
    Route::get('/','StudentController@dashboard_student')->name('dashboard_student');
    Route::get('bang-diem','StudentController@bangdiem')->name('bangdiem');

});

Route::get('trangchu-tintuc','PostController@home_post')->name('home_post');
Route::get('gioithieu','PostController@recommend')->name('gioithieu');
Route::get('lienhe','PostController@contact')->name('lienhe');
Route::get('bai-viet-chi-tiet/{id}','PostController@post_detail')->name('post_detail');
Route::get('tin-tuc/{id}','PostController@post')->name('post');
/*end frontend*/

/*back-end*/
Route::get('login','AdminController@login')->name('login');
Route::get('logout','AdminController@log_out')->name('log_out');
Route::post('check-login','AdminController@check_login')->name('check_login');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');

    // category
    Route::get('category-post','CategoryController@list_category_post')->name('list_category_post');
    Route::get('add-category-post','CategoryController@add_post_view')->name('add_post_view');
    Route::post('them-danhmuc','CategoryController@save_post')->name('save_post');
    Route::get('xoa-danh-muc/{id}','CategoryController@delete_category_post')->name('delete_category_post');
    Route::get('edit-category-post/{id}','CategoryController@edit_post_view')->name('edit_category_view');
    Route::post('edit-danhmuc/{id}','CategoryController@save_edit_post')->name('save_edit_post');

    // Post
    Route::get('post','PostController@list_post')->name('list_post');
    Route::get('add_post','PostController@add_post')->name('add_post');
    Route::post('add_post_data','PostController@insert_post')->name('insert_post');
    Route::get('xoa-bai-viet/{id}','PostController@delete_post')->name('delete_post');
     Route::get('edit-post/{id}','PostController@edit_post')->name('edit_post_view');
    Route::post('save-edit-post{id}','PostController@save_edit_post')->name('save_edit_post');

    //admin
    Route::get('list-admin','AdminController@list_admin')->name('list_admin');

    //sinhvien
     Route::get('list-student','StudentController@list_student')->name('list_student');
     Route::get('add_student','StudentController@add_student_view')->name('add_student_view');
     Route::post('save-student','StudentController@save_student')->name('save_student');
      Route::get('xoa-sinhvien/{id}','StudentController@delete_student')->name('delete_student');
       Route::get('edit-student/{id}','StudentController@edit_student')->name('edit_student');
    Route::post('save-edit-student{id}','StudentController@save_edit_student')->name('save_edit_student');

    //score
    Route::get('list-score','scoreController@list_score')->name('list_score');
    Route::get('add-score','scoreController@add_score_view')->name('add_score_view');
    Route::post('save-post','scoreController@save_score')->name('save_score');
    Route::get('delete-score/{id}','scoreController@delete_score')->name('delete_score');


});

/*end back end*/

