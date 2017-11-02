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
    return view('home.index.index');
});
Route::get('/article',function () {
    return view('home.article.info');
});
Route::get('/layer',function () {
    return view('home.users.info');
});
Route::get('/search',function () {
    return view('home.index.search');
});
Route::get('/link',function () {
    return view('home.link.link');
});
Route::get('/board',function () {
    return view('home.board.board');
});
Route::get('/login',function () {
    return view('admin.auth.login');
});
Route::get('/register',function () {
    return view('home.auth.register');
});
Route::get('/message',function () {
    return view('home.users.message');
});

Route::group(['namespace'=>'Admin'],function () {
    Route::get('admins','IndexController@index');
    Route::get('admins/home','IndexController@home')->name('admins.home');
    Route::get('admins/users','IndexController@users')->name('admins.users');
    Route::get('admins/users/info','IndexController@userInfo')->name('admins.user.info');
    Route::get('admins/category','IndexController@category')->name('admins.category');
    Route::get('admins/article/create','IndexController@articleCreate')->name('admins.article.create');
    Route::get('admins/articles','IndexController@articles')->name('admins.articles');
    Route::get('admins/notification','IndexController@notification')->name('admins.notification');
    Route::get('admins/board','IndexController@board')->name('admins.board');
    Route::get('admins/board','IndexController@board')->name('admins.board');
});
