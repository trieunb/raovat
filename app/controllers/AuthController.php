<?php

class AuthController extends \BaseController {

	public function login()
	{
		return View::make('users.login');
	}
	public function doLogin()
	{
		$validator = new App\DTT\Forms\UserLoginForm;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$credentials = Input::all();
			unset($credentials['_token']);
			$remember = empty($credentials['remember'])?false:true;
			unset($credentials['remember']);
			try
			{
				$user = Sentry::getUser();
				var_dump($user); die();
				$user = Sentry::authenticate($credentials, $remember);
				return Redirect::route('home');
			}
			catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
			{
				$error = 'Login field is required.';
			}
			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
			{
				$error = 'Password field is required.';
			}
			catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
			{
				$error = 'Sai tên đăng nhập hoặc mật khẩu.';
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				$error = 'Sai tên đăng nhập hoặc mật khẩu.';
			}
			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
			{
				$error = 'Tài khoản của bạn đang bị khóa.';
			}

			// The following is only required if the throttling is enabled
			catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
			{
				$error = 'Tài khoản của bạn đang bị khóa.';
			}
			catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
			{
				$error = 'Tài khoản của bạn đang bị khóa.';
			}
			return Redirect::back()->withInput()->withErrors($error);
		}
	}

	public function getLogout(){

		Sentry::logout();
		return Redirect::to('users.login');
	}
	public function register()
	{
		return View::make('users.register');
	}
	public function doRegister()
	{
		$validator = new App\DTT\Forms\UserRegisterForm;
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$request = Input::all();
			unset($request['_token']);
			unset($request['password_confirmation']);
			unset($request['agree']);
			$request['activated'] = true;
			try
			{
				// Create the user
				$user = Sentry::createUser($request);
				$group = Sentry::findGroupById(3);
				$user->addGroup($group);
				return Redirect::back()->with('success', 'Tạo tài khoản thành công. Vui lòng đăng nhập.');
			}
			catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
			{
				$error = 'Login field is required.';
			}
			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
			{
				$error = 'Password field is required.';
			}
			catch (Cartalyst\Sentry\Users\UserExistsException $e)
			{
				$error = 'User with this login already exists.';
			}
			catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
			{
				$error = 'Group was not found.';
			}
			return Redirect::back()->withInput()->withErrors($error);
		}
	}

	public function getDangtin(){
		return View::make('users.dangtin');
	}

	/**
	 * Display a listing of the resource.
	 * GET /auth
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /auth/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /auth
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /auth/{id}
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
	 * GET /auth/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /auth/{id}
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
	 * DELETE /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}