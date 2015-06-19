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
		$images = array();
		// 	foreach ($news as $key => $value) {
  //           $images[] = json_decode($value->image);
  //       }
		$images = json_decode($news->image);
		//var_dump($images);die();

		$category = Category::all();

		//View::share($images,'images');

		return View::make('users.edit_dangtin',compact('user','news','category','images'));
	}

	public function postEditDangTin($id){

		$editdt = News::where('id',$id)->first();
		$images = json_decode($editdt->image);

		$editdt->tieude = Input::get('tieude');
		$editdt->loaitin = Input::get('loaitin');
		$editdt->cat_id = Input::get('cat_id');
		$editdt->gia = Input::get('gia');
		$editdt->quytrinhvanchuyen = Input::get('quytrinhvanchuyen');
		$editdt->name = Input::get('name');
		$editdt->email = Input::get('email');
		$editdt->phone = Input::get('phone');
		$editdt->address = Input::get('address');

		if(!empty($images)){
			$editdt->image = json_encode($images);
		}else{

		$image = array();
			//$file = array();
			if (Input::hasfile('image1')) {
                $file =Input::file('image1');
                $destinationPath = public_path().'/images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $editdt->image = 'images/dangtin/' . $newname;
                   $image[] = $editdt->image;
                }
            }

            if (Input::hasfile('image2')) {
                $file =Input::file('image2');
                $destinationPath = public_path().'/images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $editdt->image = 'images/dangtin/' . $newname;
                    $image[] = $editdt->image;
                }
            }

            if (Input::hasfile('image3')) {
                $file =Input::file('image3');
                $destinationPath = public_path().'/images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $editdt->image = 'images/dangtin/' . $newname;
                    $image[] = $editdt->image;
                }
            }

            if (Input::hasfile('image4')) {
                $file =Input::file('image4');
                $destinationPath = public_path().'/images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $editdt->image = 'images/dangtin/' . $newname;
                    $image[] = $editdt->image;
                }
            }

            if (Input::hasfile('image5')) {
                $file =Input::file('image5');
                 $destinationPath = public_path().'/images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $editdt->image = 'images/dangtin/' . $newname;
                    $image[] = $editdt->image;
                }
            }

            if (Input::hasfile('image6')) {
                $file =Input::file('image6');
                 $destinationPath = public_path().'/images/dangtin/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $editdt->image = 'images/dangtin/' . $newname;
                    $image[] = $editdt->image;
                }
            }

            $editdt->image = json_encode($image);
			
			}
           // var_dump($editdt->image);die();

            $editdt->save();
            //var_dump($editdt);die();
            Session::flash('success','updated');
			return Redirect::to('thanh-vien/thong-tin-tai-khoan');


	}

	public function getDeleteDangTin($id){
		$delete = News::where('id',$id)->first();
		$delete->delete();
		return  Redirect::to('thanh-vien/thong-tin-tai-khoan');
	}

	public function getGianHang()
	{
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		return View::make('users.storemanager', compact('store'));
	}
}
