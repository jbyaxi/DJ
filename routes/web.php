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

Route::resource('User','UserController');

Route::GET('/create',function(){
	return view('create');
});

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'],'/random',function(){
	return view('random');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
