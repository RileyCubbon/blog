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
    Route::resource('/links', 'LinksController', [ 'except' => [ 'show' ] ]);
    Route::post('/articles/uploads', 'ArticlesController@uploads');
    Route::post('/articles/search', 'ArticlesController@search')->name('articles.search');
});

//前台路由开始
Route::group([ 'namespace' => 'Home' ], function () {
    Route::get('/', 'IndexController@index')->name('index');
    //用户相关路由
    Route::get('/verify/{message}', 'UsersController@verify')->name('users.verify');
    Route::get('/user/{id}', 'UsersController@show')->name('users.show');
    Route::get('/check/user', 'UsersController@check');
    //文章相关路由
    Route::put('/article/{id}', 'ArticlesController@toggle')->name('article.toggle');
    Route::get('/article/{id}', 'ArticlesController@show')->name('article.show');
    Route::get('/category/{category}', 'ArticlesController@category')->name('category.select');
    Route::group([ 'middleware' => 'auth' ], function () {
        Route::get('/user', 'UsersController@info')->name('users.info');
        Route::get('/edit/user', 'UsersController@edit')->name('users.edit');
        Route::post('/user', 'UsersController@update')->name('users.update');
    });
    //留言板路由
    Route::get('/message','MessagesController@index')->name('message.index');
    Route::post('/message','MessagesController@store')->name('message.store');
    //友情链接路由
    Route::get('/link', 'LinksController@index')->name('link.index');
});
Auth::routes();