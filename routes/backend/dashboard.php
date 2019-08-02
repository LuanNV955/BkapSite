<?php 
	Route::get('/','DashboardController@index')->name('backend.index');
	Route::get('/style/{style}', 'DashboardController@style')->name('backend.style');
	Route::resource('post', 'PostController');

	Route::resource('category', 'CategoryController');

	Route::resource('banner', 'BannerController');
	
	Route::get('/customer','DashboardController@index')->name('backend.customer');
 ?>