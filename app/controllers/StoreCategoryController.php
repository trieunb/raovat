<?php

class StoreCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /storecategory
	 *
	 * @return Response
	 */
	public function index($slug)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$categories = StoreCategory::where('store_id', $store->id)->with('product')->orderBy('id', 'desc')->paginate(10);
		return View::make('stores.admin.category_index', compact('store', 'categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /storecategory/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		return View::make('stores.admin.category_add', compact('store'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /storecategory
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$param = Input::all();
		$param['store_id'] = $store->id;
		unset($param['_token']);
		$cat = StoreCategory::create($param);
		if($cat) return Redirect::to($store->store_url('admin/category'))->withSuccess('Thêm mới danh mục thành công.');
		return Redirect::to($store->store_url('admin/category'))->withErrors('Có lỗi khi thêm.');
	}

	/**
	 * Display the specified resource.
	 * GET /storecategory/{id}
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
	 * GET /storecategory/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug, $id)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$cat = StoreCategory::find($id);
		if( ! $cat) return Response::make('Không tìm thấy category.', 404);
		return View::make('stores.admin.category_edit', compact('store', 'cat'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /storecategory/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, $id)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$param = Input::all();
		unset($param['_token']);
		unset($param['_method']);
		$cat = StoreCategory::where('id', $id)->where('store_id', $store->id)->update($param);
		return Redirect::to($store->store_url('admin/category'))->withSuccess('Cập nhật tên danh mục thành công.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /storecategory/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug, $id)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$cat = StoreCategory::where('id', $id)->where('store_id', $store->id)->first();
		if($cat->product->count() != 0) return Redirect::back()->withErrors('Hãy xóa hết sản phẩm trong danh mục này trước khi xóa danh mục.');
		else {
			StoreCategory::destroy($id);
			return Redirect::back()->withSuccess('Xóa danh mục thành công.');
		}
	}

}