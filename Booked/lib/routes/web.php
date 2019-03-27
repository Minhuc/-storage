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

Route::group(['namespace'=>'admin'],function(){
	Route::group(['prefix'=>'admin/login'],function(){
		Route::get('/','loginController@getLogin');
		Route::post('/','loginController@postLogin');
	});
});