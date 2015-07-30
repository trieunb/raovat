<?php
use Drivers\Curl\Payment;
class UserController extends \BaseController {

	public function getDangXuat()
	{
		Sentry::logout();
		return Redirect::to('/');
	}
	public function getThongTinTaiKhoan()
	{
        // $date = date_create(date('Y-m-d'));
        // date_add($date, date_interval_create_from_date_string('10 days'));
        // echo date_format($date, 'Y-m-d');

		$user = Sentry::getUser();

        $store = Store::where('user_id',$user->id)->first();
		// $admin = Sentry::findGroupByName('Admins');
		$news = News::where('user_id',$user->id)->get();
        $tuyendung = $tuyendung = Tuyendung::where('user_id',$user->id)->orderBy('id','desc')->get();
		$images = array();
			foreach ($news as $key => $value) {
            $images[] = json_decode($value->image);
        }
		
        
		//var_dump($news);die();
		return View::make('users.thongtintaikhoan',compact('user','news','images','tuyendung','store'));
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
        $editdt->noidung = Input::get('noidung');
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

        $img_arr = array();
        $images = json_decode($delete->image);
        foreach ($images as $key => $value) {
           $img_arr[] = public_path().'/'.$value;
           
              File::delete($img_arr);
           
        }

       //var_dump($img_arr[0]);die();
        
		$delete->delete();
		return  Redirect::to('thanh-vien/thong-tin-tai-khoan');
	}

    public function getDeleteTuyenDung($id){
        $tuyendung = Tuyendung::where('id',$id)->first();
        $images = $tuyendung->logo;
       
        $fileimage = public_path().'/'.$images;
        //var_dump($fileimage);die();
        if (File::exists($fileimage)) {
            File::delete($fileimage);
        } 
      
        $tuyendung->delete();
        return Redirect::to('thanh-vien/thong-tin-tai-khoan');
    }

    public function getEditTuyenDung($id){
        $user = Sentry::getUser();

        // $admin = Sentry::findGroupByName('Admins');
        $tuyendung = Tuyendung::find($id);
        

        return View::make('users.edit_tuyendung',compact('user','tuyendung'));
    }

    public function postEditTuyenDung($id){
        $edittd = Tuyendung::where('id',$id)->first();

            $edittd->tencty = Input::get('tencty');
            $edittd->diachi = Input::get('diachi');
            $edittd->linhvuc = Input::get('linhvuc');
            $edittd->vitrituyendung = Input::get('vitrituyendung');
            $edittd->noilamviec = Input::get('noilamviec');
            $edittd->mucluong = Input::get('mucluong');
            $edittd->hannophoso = Input::get('hannophoso');
            $edittd->noidungchitiet = Input::get('noidungchitiet');

            $edittd->nguoidangtin = Input::get('nguoidangtin');
            $edittd->email = Input::get('email');
            $edittd->sodienthoai = Input::get('sodienthoai');
            $edittd->chucvu = Input::get('chucvu');

            //$file = array();

            if (Input::hasfile('logo')) {
                $file =Input::file('logo');
                $destinationPath = public_path().'/images/tuyendung/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                if ($file->move($destinationPath, $newname)) {
                   $edittd->logo = 'images/tuyendung/' . $newname;
                }
            }else{
                $edittd->logo = '';
            }

            // echo '<pre>';
            // print_r($data['logo']);die();

           // $data['logo'] =  $logo;

            $edittd->save();
            //var_dump($editdt);die();
            Session::flash('success','updated');
            return Redirect::to('thanh-vien/thong-tin-tai-khoan');
    }

	public function getGianHang()
	{
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		return View::make('users.storemanager', compact('store'));
	}

    public function getNangCapTaiKhoan(){
        $user = Sentry::getUser();

        $store = Store::where('user_id',$user->id)->first();
        Payment::show();
        return View::make('users.napthecao',compact('store'));
    }
    public function postNangCapTaiKhoan(){
        @unlink(public_path() . '/cookies/'.Session::get("cookie").'.png');
        $user = Sentry::getUser();
        $rs = Payment::make(Input::get('seri'), Input::get('pwd'), Input::get('cardtype'), Input::get('captcha'));
        $json = json_decode($rs);
        if($json->has)
        {//napj thanh cong, cong tien cho user
            $user->amount += $json->amount;
            $user->save();
            return Redirect::back()->withInput()->withSuccess('Nạp thẻ mệnh giá <strong>'.number_format($json->amount, 0, ",", ".").'</strong> đ thành công. Bạn có <strong>'.number_format($user->amount, 0, ",", ".").'</strong> đ trong tài khoản.');
        } else {
            return Redirect::back()->withInput()->withError($json->message);
        }
       

    }

    public function postVipToRaovat(){

        $user = Sentry::getUser();
        $raovat = News::find($user->id);
        $user_vip = User::find($user->id);
        if(date('Y-m-d') <= $raovat->vip_to ){
            return Redirect::back();
        }else{
            if($user_vip->amount >= 20000){

                $date = date_create(date('Y-m-d'));
                date_add($date, date_interval_create_from_date_string('10 days'));
                
                $raovat->vip_to = date_format($date, 'Y-m-d');
                $raovat->save();

                $user_vip->amount = $user_vip->amount - 20000;
                $user_vip->save();

            }else{
                return View::back()->with('message','Tài khoản không đủ tiền tiêu vặt, vui lòng nộp them tiền!');
            }
        }
        
    }

    public function postVipToTuyenDung(){

        $user = Sentry::getUser();
        $tuyendung = Tuyendung::find($user->id);
        $user_vip = User::find($user->id);
        if(date('Y-m-d') <= $tuyendung->vip_to ){
            return Redirect::back()->with('message','Tin vip!');
        }else{
            if($user->amount >= 20000){
                
                $date = date_create(date('Y-m-d'));
                date_add($date, date_interval_create_from_date_string('10 days'));
                
                $tuyendung->vip_to = date_format($date, 'Y-m-d');
                $tuyendung->save();
                
                $user_vip->amount = $user_vip->amount - 20000;
                $user_vip->save();

            }else{
                return View::back()->with('message','Tài khoản không đủ tiền tiêu vặt, vui lòng nộp them tiền!');
            }
        }
    }
}
