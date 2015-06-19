<?php

class UserController extends \BaseController {

	public function getDangXuat()
	{
		Sentry::logout();
		return Redirect::to('/');
	}
	public function getThongTinTaiKhoan()
	{
		$user = Sentry::getUser();

		// $admin = Sentry::findGroupByName('Admins');
		$news = News::where('user_id',$user->id)->get();
		$images = array();

        foreach ($news as $key => $value) {
            $images[] = json_decode($value->image);
        }
		//var_dump($news);die();
		return View::make('users.thongtintaikhoan',compact('user','news','images'));
	}
	public function getEditDangTin($id)
	{
		$user = Sentry::getUser();

		// $admin = Sentry::findGroupByName('Admins');
		$news = News::find($id);
		// $images = array();

  //       foreach ($news as $key => $value) {
  //           $images[] = json_decode($value->image);
  //       }
		//var_dump($news);die();
		return View::make('users.edit_dangtin',compact('user','news'));
	}

	public function getGianHang()
	{
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		return View::make('users.storemanager', compact('store'));
	}
}
