
<?php
	/**
	* 
	*/
	class AdminAuthController extends \BaseController 
	{
		public function getIndex(){
			return View::make('backend.dashboard');
		}

		public function getThanhVien(){
			
			return View::make('backend.thanhvien');
		}

		
	}
?>