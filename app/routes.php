<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
//Route::get('/danhmuc','UserController@index');

Route::group(array('before'=>'sentry.logged'), function() {
	Route::controller('auth','AuthController');
});

Route::group(array('before'=>'sentry.auth'), function() {
	Route::controller('thanh-vien','UserController');
	Route::get('rao-vat/dang-tin', 'NewsController@getDangTin');
	Route::post('rao-vat/dang-tin', 'NewsController@postDangTin');

});
Route::get('rao-vat/xem-tin/{id}', 'NewsController@getXemTin');
Route::get('/trang-khong-tim-thay', 'HomeController@notfound');
Route::get('/danh-muc/{id?}', 'NewsController@getDanhMuc');

Route::group(['prefix'=>'admin'],function(){

	

	Route::group(['before'=>'sentry.admin.auth'], function() {

		Route::get('/login','AdminController@getLogin');
		Route::post('/login','AdminController@getLogin');
		
	});

Route::group(array('before'=>'sentry.admin'),function(){

		Route::controller('/','AdminAuthController');

	});
	
});


