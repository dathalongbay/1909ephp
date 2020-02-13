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
 * echo ra 1 câu thông báo đơn giản
 */
Route::get('/demo1', function () {
    echo "route demo1 laravel";
});

/**
 * trả về view
 */
Route::get('/demo2', function () {
    // trả về view hiển thi
    return view('demo2');
});

/**
 * Route dẫn vào trong controller
 * Demo3Controller@index =>
 * gọi vào trong Demo3Controller
 * và vào trong method index của Demo3Controller
 */
Route::get('/demo3', 'Demo3Controller@index');


Route::get('/demo5', 'Demo5Controller@homepage');


