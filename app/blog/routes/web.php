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
Route::get('/cache', function () {
    echo Cache::get('key');
});
Route::get('/user', 'UserController@index');

Route::get('/pay/{userID}/{productID}', 'UserController@pay');

Route::resource('photos', 'PhotoController');//资源型路由，通过单行代码实现CURD

Route::resource('pbar', 'Pbar\PbarController');//资源型路由，通过单行代码实现CURD