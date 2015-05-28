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
}
