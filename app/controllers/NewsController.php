<?php

class NewsController extends Controller {
	public function getDangTin()
	{
		$user_id = Sentry::getUser();
		$thongtinlienhe = User::where('id','=',$user_id->id)->first();
		// echo '<pre>';
		// print_r($thongtinlienhe->toArray());die();
		return View::make('frontend.news.add',compact('thongtinlienhe'));
	}
	public function postDangTin()
	{
		$data = Input::all();
		$validator = new App\DTT\Forms\NewsAddForm;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$data['ngaydang'] = date('Y-m-d H:i:s');
			$data['luotxem']= 0;
			$user = Sentry::getUser();
			$data['user_id'] = $user->id;
			$data['noidung'] = strip_tags($data['noidung'], '<b><i><u><font><br>');
			$data['loaitin'] = Input::get('loaitin');
			$data['gia'] = Input::get('gia');

			$data['quytrinhvanchuyen'] = Input::get('quytrinhvanchuyen');
			$data['name'] = Input::get('name');
			$data['email'] = Input::get('email');
			$data['phone'] = Input::get('phone');
			$data['address'] = Input::get('address');
			// $image = array(
			// 		'image1'=>Input::get('image1'),
			// 		'image2'=>Input::get('image2'),
			// 		'image3'=>Input::get('image3')
			// 	);
			//$image = Input::get('image1').'-'.Input::get('image2').'-'.Input::get('image3');

			//$data['image'] = $image;

			if (Input::hasfile('image1')||Input::hasfile('image2')||Input::hasfile('image3')) {
                $file = array(
                		'image1'=>Input::file('image1'),
						'image2'=>Input::file('image2'),
						'image3'=>Input::file('image3')
                	);
                $destinationPath = 'images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $data['image'] = $destinationPath . $newname;
                }
            }

			$news = News::create($data);
			if($news)
			{
				return Redirect::to('rao-vat/xem-tin/' . $news->id);
			} else {
				return Redirect::back()->withInput()->withErrors('Có lỗi khi đăng tin.');
			}
		}
	}
	public function getXemTin($id = false)
	{
		if( ! $id) return Redirect::to('/');
		$news = News::find($id);
		if( ! $news)
		{
			return View::make('frontend.notfound');
		} else {
			$news->luotxem += 1;
			$news->save();
			return View::make('frontend.news.show', compact('news'));
		}
	}
	public function getDanhMuc($id = false)
	{
		View::share('cat_id', $id);
		if($id === false) {
			$news = News::orderBy('id', 'desc')->paginate(10);
		} else {
			$cate = Category::find($id);
			if( ! $cate) return Response::make('Trang không tìm thấy.', 404);
			$news = News::where('cat_id', $id)->orderBy('id', 'desc')->paginate(10);
		}
		
		return View::make('frontend.news.list', compact('news'));
	}
}