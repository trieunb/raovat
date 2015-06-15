<?php

class StoreProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /storeproduct
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /storeproduct/create
	 *
	 * @return Response
	 */
	public function create($slug)
	{
		//
		$store = Store::where('store_slug', $slug)->where('user_id', $GLOBALS['user']->id)->first();
		if( ! $store) return Response::make('Không tìm thấy gian hàng', 404);
		return View::make('stores.admin.add_product', compact('store'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /storeproduct
	 *
	 * @return Response
	 */
	public function store($slug)
	{
		//
		$store = Store::where('store_slug', $slug)->where('user_id', $GLOBALS['user']->id)->first();
		if( ! $store) return Response::make('Không tìm thấy gian hàng', 404);
		$validator = new App\DTT\Forms\StoreProductImage;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
		$params = Input::all();
		$params['store_id'] = $store->id;
		unset($params['_token']);
		unset($params['_wysihtml5_mode']);
		$product = Product::firstOrCreate($params);
		if(Input::hasFile('image'))
		{
			$file = Input::file('image');
			$name = \Str::random(11).".".$file->getClientOriginalExtension();
			$file->move(Config::get('app.upload_dir').$slug, $name);
		}
		$product->image = $name;
		$product->save();
		echo $store->store_url('admin/san-pham');
		return Redirect::to($store->store_url('admin'))->withSuccess('Thêm sản phẩm <strong>'.$product->title.'</strong> thành công.');
	}

	/**
	 * Display the specified resource.
	 * GET /storeproduct/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /storeproduct/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug, $id)
	{
		//
		$store = Store::where('store_slug', $slug)->where('user_id', $GLOBALS['user']->id)->first();
		if( ! $store) return Response::make('Không tìm thấy gian hàng', 404);
		$product = Product::where('id', $id)->where('store_id', $store->id)->first();
		if( ! $product) return Response::make('Không tìm thấy sản phẩm', 404);
		return View::make('stores.admin.edit_product', compact('store', 'product'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /storeproduct/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, $id)
	{
		//
		$store = Store::where('store_slug', $slug)->where('user_id', $GLOBALS['user']->id)->first();
		if( ! $store) return Response::make('Không tìm thấy gian hàng', 404);
		$validator = new App\DTT\Forms\StoreProductImage;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
		if(Input::hasFile('image'))
		{
			$file = Input::file('image');
			$name = \Str::random(11).".".$file->getClientOriginalExtension();
			$file->move(Config::get('app.upload_dir').$slug, $name);
		}
		$data = Input::all();
		if(isset($name)) {
			$data['image'] = $name;
		} else {
			unset($data['image']);
		}
		unset($data['_method']);
		unset($data['_wysihtml5_mode']);
		unset($data['_token']);
		$product = Product::where('id', $id)->update($data);
		return Redirect::to($store->store_url('admin'))->withSuccess('Cập nhật sản phẩm thành công.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /storeproduct/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug, $id)
	{
		//
		$store = Store::where('store_slug', $slug)->where('user_id', $GLOBALS['user']->id)->first();
		$product = Product::where('store_id', $store->id)->where('id', $id)->first();
		if($product) {
			$name = $product->title;
			$product->delete();
			return Redirect::back()->with('success', 'Xóa sản phẩm <strong>'.$name.'</strong> thành công.');
		} else {
			return Redirect::back()->withErrors('Không tìm thấy sản phẩm.');
		}
		
	}

}