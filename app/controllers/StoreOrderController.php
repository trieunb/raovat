<?php

class StoreOrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /storeorder
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$orders = Order::where('store_id', $store->id)->orderBy('id', 'desc')->paginate(10);
		return View::make('stores.admin.order_index', compact('store', 'orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /storeorder/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /storeorder
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /storeorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug, $id)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$order = Order::where('store_id', $store->id)->where('id', $id)->first();
		if( ! $order) return Response::make('Không tìm thấy đơn hàng.', 404);
		return View::make('stores.admin.order_show', compact('store', 'order'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /storeorder/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug, $id)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$order = Order::where('store_id', $store->id)->where('id', $id)->first();
		return View::make('stores.admin.order_edit', compact('store', 'order'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /storeorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, $id)
	{
		//
		$param = Input::all();
		unset($param['_method']);
		unset($param['_token']);
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$order = Order::where('store_id', $store->id)->where('id', $id)->update($param);
		return Redirect::to($store->store_url('admin/orders'))->withSuccess('Cập nhật thông tin đơn hàng thành công.');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /storeorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug, $id)
	{
		//
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$order = Order::where('store_id', $store->id)->where('id', $id)->first();
		if($order)
		{
			Order::destroy($id);
		}
		return Redirect::back()->withSuccess('Xóa đơn hàng thành công.');
	}

}