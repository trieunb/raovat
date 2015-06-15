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
		 $admin = Sentry::findGroupByName('Admins');
		return $user;
	}
	public function getGianHang()
	{
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		return View::make('users.storemanager', compact('store'));
	}
}
