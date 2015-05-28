
<?php
	/**
	* 
	*/
	class AdminAuthController extends \BaseController 
	{
			public function getIndex(){
			return View::make('backend.dashboard');
		}

		
	}
?>