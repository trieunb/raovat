<?php 

class StoreSettingController extends Controller {
	public function getIndex($slug)
	{
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$settings = StoreOption::where('store_id', $store->id)->lists('option_value', 'option_key');
		//var_dump($store->toArray());die();
		return View::make('stores.admin.settings', compact('settings', 'store'));
	}
	public function postIndex($slug)
	{
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$settings = StoreOption::where('store_id', $store->id)->lists('option_value', 'option_key');
		$data = Input::all();
		unset($data['_token']);
		$validator = new App\DTT\Forms\StoreLogo;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
		if(Input::hasFile('logo'))
		{
			$file = Input::file('logo');
			$name = \Str::random(11).".".$file->getClientOriginalExtension();
			$file->move(Config::get('app.upload_dir').$slug, $name);
			$fname = Config::get('app.upload_dir').$slug.'/'.$settings['logo'];
			if (File::exists($fname)) {
			    File::delete($fname);
			}
			$data['logo'] = $name;
		} else {
			unset($data['logo']);
		}
		foreach ($data as $key => $value) {
			StoreOption::where('store_id', $store->id)->where('option_key', $key)->update(['option_value'=>$value]);
		}

		return Redirect::back()->withSuccess('Cập nhật thành công.');
	}
}