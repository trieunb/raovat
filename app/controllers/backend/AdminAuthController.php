
<?php
	/**
	* 
	*/
	class AdminAuthController extends \BaseController 
	{
		
		public function getIndex(){

			$user_admin = Sentry::getUser();
			return View::make('backend.dashboard',compact('user_admin'));
		}

		public function getThanhVien(){

			$user_admin = Sentry::getUser();

			$user = User::paginate(10);

			// echo '<pre>';
			// print_r($user_admin->toArray());die();
			
			return View::make('backend.thanhvien',compact('user','user_admin'));
		}

		public function getUpdateActive($id){

			$user = User::where('id','=',$id)->first();

			// echo '<pre>';
			// print_r($user->toArray());die();

			$user->activated == 1 ? $activated = 0 : $activated = 1;
			$user->activated = $activated;
			$user->save();

			return Redirect::back();
		}

		public function getDeleteUser($id){
			$user = User::where('id','=',$id)->first();
			$user->delete();
			return Redirect::back();

		}

		public function getDanhMuc(){
			$user_admin = Sentry::getUser();

			$danhmuc = Category::orderBy('created_at','desc')->paginate(5);

			$page = $danhmuc->getCurrentPage();
			//echo $page;die();
			// echo '<pre>';
			// print_r($danhmuc->toArray());die();
			
			return View::make('backend.danh_muc',compact('danhmuc','user_admin','page'));
		}

		public function getAddDanhMuc(){
			$user_admin = Sentry::getUser();
			return View::make('backend.Add_danh_muc',compact('danhmuc','user_admin','page'));
		}

		public function postAddDanhMuc(){

			$data = Input::all();
			$validator = new App\DTT\Forms\AddDanhMuc;
			if($validator->fails()){
				return Redirect::back()->withInput()->withErrors($validator);
			}
			else{
				$danhmuc = new Category;
				$danhmuc->tendanhmuc = Input::get('tendanhmuc');
				$danhmuc->save();
			}
			Session::flash('success','added');
			return Redirect::back();

		}

		public function getEditDanhMuc($id){

			$danhmuc = Category::where('id','=',$id)->first();
			$user_admin = Sentry::getUser();
			return View::make('backend.Edit_danh_muc',compact('danhmuc','user_admin'));

		}

		public function postEditDanhMuc($id){

			$danhmuc = Category::where('id','=',$id)->first();
			$danhmuc->tendanhmuc = Input::get('tendanhmuc');
			$danhmuc->save();
			Session::flash('success','updated');
			return Redirect::back();

		}

		public function getDeleteDanhMuc($id){

			$danh_muc = Category::where('id','=',$id)->first();
			$danh_muc->delete();
			return Redirect::back();

		}

		public function getTinRaoVat(){
			$user_admin = Sentry::getUser();

			$tinraovat = News::paginate(10);

			$page = $tinraovat->getCurrentPage();

			return View::make('backend.tin_rao_vat',compact('user_admin','tinraovat','page'));

		}
		public function getDeleteTinRaoVat($id){

			$tinraovat = News::where('id','=',$id)->first();
			$tinraovat->delete();
			return Redirect::back();

		}

		public function getUpdateTrangThai($id){

			$tinraovat = News::where('id','=',$id)->first();
			$tinraovat->trangthai == 1 ? $trangthai = 0 : $trangthai=1;
			$tinraovat->trangthai = $trangthai;
			$tinraovat->save();

			return Redirect::back();


		}

		public function getTinTuyenDung(){
			$user_admin = Sentry::getUser();
			$tuyendung = Tuyendung::paginate(10);
			return View::make('backend.tintuyendung',compact('user_admin','tuyendung'));
		}

		public function getTrangThaiTd($id){
			$tuyendung = Tuyendung::where('id',$id)->first();
			$tuyendung->trangthai == 1 ? $trangthai = 0 : $trangthai=1;
			$tuyendung->trangthai = $trangthai;
			$tuyendung->save();
			return Redirect::back();
		}

		public function getLogout(){
			Sentry::logout();
		return Redirect::to('/admin/login');
		}
		
	}
?>