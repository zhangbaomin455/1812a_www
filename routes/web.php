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
   //echo '<pre>';print_r($_SERVER);echo '</pre>';
    return view('welcome');
});
Route::get('/user/add','UserController@add');
Route::get('/test/redis','UserController@redisTest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
