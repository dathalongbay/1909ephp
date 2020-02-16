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
Route::get('/backend/index', "Backend\BooksController@index");
Route::get('/backend/create', "Backend\BooksController@create");
Route::get('/backend/edit', "Backend\BooksController@edit");
Route::get('/backend/delete', "Backend\BooksController@delete");
