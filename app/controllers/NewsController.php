<?php

class NewsController extends Controller {
	public function getDangTin()
	{
		return View::make('frontend.news.add');
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