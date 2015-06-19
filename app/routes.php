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
	Route::get('gian-hang/tao-moi', 'StoreController@create');
	Route::post('gian-hang/tao-moi', 'StoreController@store');
	Route::get('gian-hang/{slug?}/admin', 'StoreController@storeAdminIndex');
	Route::group(['prefix'=>'gian-hang/{slug?}/admin'], function(){
		Route::resource('san-pham', 'StoreProductController');
		Route::resource('category', 'StoreCategoryController');
		Route::resource('orders', 'StoreOrderController');
		Route::controller('settings', 'StoreSettingController');
	});
	

});
Route::get('gian-hang/{slug?}', 'StoreController@show');

Route::get('gian-hang/{slug?}/san-pham/{id}', 'StoreController@productInfo');
Route::get('gian-hang/{slug?}/danh-muc/{id?}', 'StoreController@productCategory');
Route::get('gian-hang/{slug?}/xoa-san-pham/{rowid}', 'StoreController@delCart');
Route::post('gian-hang/{slug?}/gio-hang/update', 'StoreController@updateCart');
Route::get('gian-hang/{slug?}/thanh-toan', 'StoreController@checkout');
Route::post('gian-hang/{slug?}/thanh-toan', 'StoreController@doCheckout');
Route::get('gian-hang/{slug?}/thanh-toan-thanh-cong', 'StoreController@success');
Route::get('gian-hang/{slug?}/tim-kiem', 'StoreController@search');
Route::get('gian-hang/{slug?}/lien-he', 'StoreController@contact');
Route::match(['GET', 'POST'], 'gian-hang/{slug?}/lien-he/thanks', 'StoreController@thanks');

Route::match(['GET', 'POST'], 'gian-hang/{slug?}/add-cart/{id?}', 'StoreController@addCart');
Route::get('gian-hang/{slug?}/gio-hang', 'StoreController@cart');
Route::get('rao-vat/xem-tin/{id}', 'NewsController@getXemTin');
Route::get('/trang-khong-tim-thay', 'HomeController@notfound');
Route::get('/danh-muc/{id?}', 'NewsController@getDanhMuc');


Route::group(['prefix'=>'admin'],function(){

	

	Route::group(['before'=>'sentry.admin.auth'], function() {

		Route::get('/login','AdminController@getLogin');
		Route::post('/login','AdminController@postLogin');
		//Route::controller('/','AdminController');
		
	});

	Route::group(array('before'=>'sentry.admin'),function(){

			Route::controller('/','AdminAuthController');
		});
		
});


