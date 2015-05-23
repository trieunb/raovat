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
		return $user;
	}
}
