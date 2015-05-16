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
Route::get('/danhmuc','UserController@index');

Route::group(array('before'=>'sentry.logged'), function() {
	Route::get('/login',array('as'=>'users.login', 'uses'=>'AuthController@login'));
	Route::post('/login','AuthController@doLogin');
	Route::get('/register',array('as'=>'users.register', 'uses'=>'AuthController@register'));
	Route::post('/register','AuthController@doRegister');
});

Route::group(array('before'=>'sentry.auth'), function() {
	Route::get('/profile', 'UserController@profile');
});