<?php

class NewsController extends Controller {
    
	public function getDangTin()
	{
		$user_id = Sentry::getUser();
		$thongtinlienhe = User::where('id','=',$user_id->id)->first();
        $store = Store::where('user_id',$user_id->id)->first();
        
		// echo '<pre>';
		// print_r($thongtinlienhe->toArray());die();
		return View::make('frontend.news.add',compact('thongtinlienhe','store'));
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
                   $data['image'] = 'images/dangtin/' . $newname;
                   $image[] = $data['image'];
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
                   $data['image'] = 'images/dangtin/' . $newname;
                    $image[] = $data['image'];
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
                   $data['image'] = 'images/dangtin/' . $newname;
                    $image[] = $data['image'];
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
                   $data['image'] = 'images/dangtin/' . $newname;
                    $image[] = $data['image'];
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
                   $data['image'] = 'images/dangtin/' . $newname;
                    $image[] = $data['image'];
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
                   $data['image'] = 'images/dangtin/' . $newname;
                    $image[] = $data['image'];
                }
            }

            $data['image'] = json_encode($image);

            // echo '<pre>';
            // print_r($image);die();

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
        $cat = Category::where('id',$news->cat_id)->first();
		$images = json_decode($news->image);

		// echo '<pre>';
		// print_r($images);die();

		if( ! $news)
		{
			return View::make('frontend.notfound');
		} else {
			$news->luotxem += 1;
			$news->save();
			return View::make('frontend.news.show', compact('news','images','cat'));
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

        $images = array();

        foreach ($news as $key => $value) {
            $images[] = json_decode($value->image);
        }

        //$images = json_decode($news->image);

        // echo '<pre>';
        // print_r($news->toArray());die();
		
		return View::make('frontend.news.list', compact('news','images'));
	}
    public function getTuyenDung(){
        return View::make('frontend.recruit.add');
    }
    public function postTuyenDung(){

        $data = Input::all();
        $validator = new App\DTT\Forms\TuyenDungForm;
        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $data['tencty'] = Input::get('tencty');
            //$data['luotxem']= 0;
            $user = Sentry::getUser();
            $data['user_id'] = $user->id;
            $data['diachi'] = Input::get('diachi');
            $data['linhvuc'] = Input::get('linhvuc');
            $data['vitrituyendung'] = Input::get('vitrituyendung');
            $data['noilamviec'] = Input::get('noilamviec');
            $data['mucluong'] = Input::get('mucluong');
            $data['hannophoso'] = Input::get('hannophoso');
            $data['noidungchitiet'] = Input::get('noidungchitiet');

            $data['nguoidangtin'] = Input::get('nguoidangtin');
            $data['email'] = Input::get('email');
            $data['sodienthoai'] = Input::get('sodienthoai');
            $data['chucvu'] = Input::get('chucvu');

            //$file = array();

            if (Input::hasfile('logo')) {
                $file =Input::file('logo');
                $destinationPath = public_path().'/images/tuyendung/';
                $filename = $file->getClientOriginalName();

                $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),
                    0, 10);
                $newname = $randomString . '.' . pathinfo($filename, PATHINFO_EXTENSION);

                //var_dump($newname);die();

                if ($file->move($destinationPath, $newname)) {
                   $data['logo'] = 'images/tuyendung/' . $newname;
                }
            }else{
                $data['logo'] = '';
            }

            // echo '<pre>';
            // print_r($data['logo']);die();

           // $data['logo'] =  $logo;

            $tuyendung = Tuyendung::create($data);
            if($tuyendung)
            {
                return Redirect::to('/');
            } else {
                return Redirect::back()->withInput()->withErrors('Có lỗi khi đăng tin.');
            }
        }
    }
    public function getTinTuyenDung($id){
        $tuyendung = Tuyendung::where('id',$id)->first();
        return View::make('frontend.recruit.show',compact('tuyendung'));
    }
}