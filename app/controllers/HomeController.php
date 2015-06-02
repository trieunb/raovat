<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$news = News::orderBy('id', 'desc')->paginate(10);

		$images = array();

        foreach ($news as $key => $value) {
            $images[] = json_decode($value->image);
        }
		
		return View::make('frontend.index',compact('news','images'));
	}
	public function showWelcome()
	{
		return View::make('hello');
	}
	public function notfound()
	{
		return View::make('frontend.notfound');
	}

}
