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



Route::get('question','UserController@getQuestion');
Route::post('question','UserController@postQuestion');
// Route::get('info','UserController@getInfo');

Route::resource('user','UserController');
Route::get('user/info')->name('user.info');
Route::post('user/info','UserController@postInfo');
