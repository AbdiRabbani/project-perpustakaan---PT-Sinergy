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
    if(Auth::check()) {
    return view('dashboard.index');
    } else {
    return view('auth.login');
    }
});

Auth::routes();

Route::resource('/home', 'DashboardController');
Route::resource('/user', 'UserController');
Route::resource('/book', 'BookController');
Route::resource('/borrow', 'BorrowController');
Route::resource('/category', 'CategoryController');
