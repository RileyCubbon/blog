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
//后台路由开始
Route::get('/admins/login', 'Admin\LoginController@showLoginForm')->name('admins.login');
Route::post('/admins/login', 'Admin\LoginController@login')->name('admins.auth');
Route::group([ 'namespace' => 'Admin', 'middleware' => 'auth:admin', 'prefix' => 'admins' ], function () {
    Route::get('/logout', 'LoginController@logout')->name('admins.logout');
    Route::get('/', 'IndexController@index')->name('admins.index');
    Route::get('/home', 'IndexController@home')->name('admins.home');
    Route::resource('/categories', 'CategoriesController', [
        'only' => [ 'index', 'store', 'destroy', 'update' ],
    ]);
    Route::resource('/articles', 'ArticlesController', [ 'except' => [ 'show' ] ]);
    Route::post('/articles/uploads', 'ArticlesController@uploads');
    Route::post('/articles/search', 'ArticlesController@search')->name('articles.search');
});

//前台路由开始
Route::group([ 'namespace' => 'Home' ], function () {
    Route::get('/', 'IndexController@index')->name('index');
    
});