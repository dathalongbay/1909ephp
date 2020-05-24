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

/**
 * 4 route method get của phần hiển thị
 */
Route::get('/backend/index', "Backend\BooksController@index")->name("book_index");
Route::get('/backend/create', "Backend\BooksController@create")->name("book_create");
// {id} là biến url ví dụ /backend/edit/5
Route::get('/backend/edit/{id}', "Backend\BooksController@edit");
Route::get('/backend/delete/{id}', "Backend\BooksController@delete");


/**
 * 3 router xử lý dữ liệu
 */

// lưu dữ liệu tạo mới
Route::post("/backend/create", "Backend\BooksController@store");

// lưu dữ liệu khi cập nhật
// {id} biến trong url => /backend/edit/3
Route::post("/backend/edit/{id}", "Backend\BooksController@update");

// xóa dữ liệu thật
// {id} biến trong url => /backend/delete/3
Route::post("/backend/delete/{id}", "Backend\BooksController@destroy");


/*
 * DB
 */
Route::get('/db/{action?}', 'Backend\LearndbController@index');
Route::get('/orm/{action?}', 'Backend\LearnormController@index');

Route::get('/backend/sbadmin2', "Backend\Sbadmin2Controller@index");
Route::get('/backend/sbadmin2/login', "Backend\Sbadmin2Controller@login");
Route::get('/backend/sbadmin2/register', "Backend\Sbadmin2Controller@register");
Route::get('/backend/sbadmin2/logout', "Backend\Sbadmin2Controller@logout");

Route::post('/backend/sbadmin2/login', "Backend\Sbadmin2Controller@loginTask");
Route::post('/backend/sbadmin2/register', "Backend\Sbadmin2Controller@registerTask");
