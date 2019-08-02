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


Route::group(['middleware'=>'locale'],function(){

	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/change-lang{lang}',function($lang){
		\Session::put('language', $lang);
		return redirect()->back();
	})->name('lang');

});

Route::group(['prefix'=>'backend','namespace'=>'Backend'],function(){
	require_once 'backend/dashboard.php';
});