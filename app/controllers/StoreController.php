<?php

class StoreController extends \BaseController {
	public function __construct()
	{
		$cats = StoreCategory::whereHas('store', function($q) {
			$q->where('store_slug', Request::segment(2));
		})->get();
		View::share('cats', $cats);
		$store = Store::where('store_slug', Request::segment(2))->with('option')->first();
		//var_dump($store->toArray());die();
		View::share('store', $store);
		
		$products = array();
		 foreach (Cart::content() as $key => $value) {
		 	$products[] = $value->id;
		 }
		$product_image = Product::whereIn('id', $products)->lists('image', 'id');
		View::share('product_image', $product_image);
	}

	/**
	 * Display a listing of the resource.
	 * GET /store
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /store/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('stores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /store
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = new App\DTT\Forms\StoreCreate;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$store = Store::where('user_id', $GLOBALS['user']->id)->count();
			if($store == 1) return Redirect::back()->withInput()->withErrors('Bạn chỉ được tạo 1 gian hàng.');
			$store = Store::create(['store_slug'=>Input::get('store_slug'), 'tengianhang'=>Input::get('store_name'), 'user_id'=>$GLOBALS['user']->id]);
			File::makeDirectory(Config::get('app.upload_dir') . Input::get('store_slug'), 777);
			StoreOption::insert([
				['store_id'	=>	$store->id, 'option_key'=>'title', 'option_value'=>Input::get('store_name')],
				['store_id'	=>	$store->id, 'option_key'=>'logo', 'option_value'=>''],
				['store_id'	=>	$store->id, 'option_key'=>'thongtinthanhtoan', 'option_value'=>''],
				['store_id'	=>	$store->id, 'option_key'=>'diachi', 'option_value'=>'Cần Thơ'],
				['store_id'	=>	$store->id, 'option_key'=>'dienthoai', 'option_value'=>'0988.888.888'],
				['store_id'	=>	$store->id, 'option_key'=>'email', 'option_value'=>'admin@cantho.info.vn'],
				['store_id'	=>	$store->id, 'option_key'=>'facebook', 'option_value'=>''],
				['store_id'	=>	$store->id, 'option_key'=>'twitter', 'option_value'=>''],
				['store_id'	=>	$store->id, 'option_key'=>'youtube', 'option_value'=>'']
				]);
			return Redirect::to('gian-hang/'.Input::get('store_slug'));
		}
	}

	/**
	 * Display the specified resource.
	 * GET /store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug = false)
	{
		//
		if( ! $slug) return Redirect::to('/');
		$store = Store::where('store_slug', $slug)->with('option')->first();
		if( ! $store)
		{
			return Redirect::to('trang-khong-tim-thay');
		}
		$store_config = StoreOption::whereHas('store', function($q) use($store) {
			$q->where('id', $store->id);
		})->get();
		$newest = Product::where('store_id', $store->id)->orderBy('id', 'desc')->limit(10)->get();
		$random = Product::where('store_id', $store->id)->orderBy(DB::raw('RAND()'))->limit(10)->get();
		return View::make('stores.index', compact('store_config', 'store', 'newest', 'random'));
	}

	public function productInfo($slug, $id)
	{
		$product = Product::whereHas('store', function($q) use($slug) {
			$q->where('store_slug', $slug);
		})
		->where('id', $id)->first();
		if(!$product) return Response::make('San pham khong tim thay', 404);
		return View::make('stores.productinfo', compact('product'));
	}
	public function addCart($slug, $id = false)
	{
		if(Input::get('product_id')) $id = Input::get('product_id');
		$qty = (Input::get('qty')?Input::get('qty'):1);
		if($id)
		{
			$product = Product::whereHas('store', function($q) {
				$q->where('store_slug', Request::segment(2));
			})
			->where('id', $id)->first();
			if( ! $product) return Redirect::to('gian-hang/'.Request::segment(2).'/gio-hang');
			Cart::add($id, $product->title, $qty, $product->price);
			return Redirect::to('gian-hang/'.Request::segment(2).'/gio-hang');
		}
	}
	public function cart()
	{
		 
		return View::make('stores.cart');
	}
	public function delCart($slug, $rowid)
	{
		Cart::remove($rowid);
		return Redirect::back()->with('success', 'Xóa sản phẩm thành công .');
	}
	public function updateCart($slug)
	{
		if(Input::get('qty'))
		{
			foreach (Input::get('qty') as $rowId => $value) {
				if($value <= 0) Cart::remove($rowId);
				else  Cart::update($rowId, array('qty' => $value));
			}
		}
		return Redirect::back()->with('success', 'Cập nhật giỏ hàng thành công.');
	}
	public function checkout($slug)
	{
		if(Cart::count() == 0) return Redirect::to('gian-hang/'.$slug.'/gio-hang')->withErrors('Giỏ hàng của bạn trống.');
		return View::make('stores.checkout');
	}
	public function doCheckout($slug)
	{
		$store = Store::where('store_slug', $slug)->first();
		if( ! $store) return Response::make('Không tìm thấy gian hàng.', 404);
		$validator = new App\DTT\Forms\StoreCheckout;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if(count(Cart::content()) == 0) if(Cart::count() == 0) return Redirect::to('gian-hang/'.$slug.'/gio-hang')->withErrors('Giỏ hàng của bạn trống.');
			$inputs = Input::all();
			$inputs['store_id'] = $store->id;
			$inputs['order_date'] = date('Y-m-d H:i:s');
			$inputs['order_status'] = 1;
			$inputs['order_total'] = Cart::total();
			$inputs['order_number'] = strtoupper(Str::random(10));
			$order = Order::create($inputs);
			Session::set('order', $order);
			$details = array();
			foreach (Cart::content() as $key => $value) {
				$details[] = array(
					'order_id'	=>	$order->id,
					'product_id'	=>	$value->id,
					'qty'		=>	$value->qty,
					'price'	=>	$value->price
					);
			}
			$detail = OrderDetail::insert($details);
			Session::set('details', $details);
			return Redirect::to('gian-hang/'.$slug.'/thanh-toan-thanh-cong');
		}
	}
	public function success($slug)
	{
		$order = Session::get('order');
		if(count(Cart::content()) == 0) if(Cart::count() == 0) return Redirect::to('gian-hang/'.$slug.'/gio-hang')->withErrors('Giỏ hàng của bạn trống.');
		return View::make('stores.success', compact('order'));
	}
	public function productCategory($slug, $id = false)
	{
		$store = Store::where('store_slug', $slug)->first();
		if( ! $store) return Response::make('Không tìm thấy gian hàng.', 404);
		$products = Product::where('store_id', $store->id);
		if($id)
		{
			$products->where('cat_id', $id);
		}
		$products = $products->paginate(12);
		$category = StoreCategory::find($id);
		return View::make('stores.category', compact('products', 'category'));
	}

	public function storeAdminIndex()
	{
		//var_dump($GLOBALS['user']->id);die();
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		//var_dump($store->id);die();
		$products = Product::where('store_id', $store->id)->with('category')->orderBy('id', 'desc')->paginate(12);
		
		return View::make('stores.admin.index', compact('store', 'products'));
	}
	public function search()
	{
		$keyword = Input::get('s');
		$store = Store::where('user_id', $GLOBALS['user']->id)->first();
		$products = Product::where('store_id', $store->id)->with('category')->where('title', 'LIKE', "%$keyword%")->orderBy('id', 'desc')->paginate(12);
		$products->appends(['s'=>$keyword]);
		return View::make('stores.search', compact('store', 'products', 'keyword'));
	}
	public function contact()
	{

		return View::make('stores.contact');
	}
	public function thanks()
	{
		return View::make('stores.thanks');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /store/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		return $id;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}