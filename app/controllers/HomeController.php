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

		$tuyendung = Tuyendung::all();

		if (isset($_GET['keyword'])) {

			$keyword = $_GET['keyword'];

			$news = News::where('tieude','like',"%$keyword%")
							->with('category')
							->paginate(10);
		}else{
			$news = News::orderBy('id', 'desc')
					->with('category')
					->paginate(10);
		}


		// echo '<pre>';
		// print_r($news->toArray());die();

		$images = array();

        foreach ($news as $key => $value) {
            $images[] = json_decode($value->image);
        }
		
		return View::make('frontend.index',compact('news','images','tuyendung'));
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
