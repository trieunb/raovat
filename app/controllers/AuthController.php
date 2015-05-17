<?php

class AuthController extends \BaseController {

	public function getLogin()
	{
		return View::make('users.login');
	}
	public function postLogin()
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
				// $user = Sentry::getUser();
				// var_dump($user); die();
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


	public function getRegister()
	{
		return View::make('users.register');
	}

	public function postRegister()
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

	public function getLogout(){

		Sentry::logout();
		return Redirect::to('user/login');

	}

	public function getDangtin(){

		return View::make('users.dangtin');

	}


}