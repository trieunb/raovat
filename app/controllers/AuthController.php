<?php

class AuthController extends \BaseController {

	public function getDangNhap()
	{
		return View::make('users.login');
	}
	public function postDangNhap()
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


	public function getDangKy()
	{
		return View::make('users.register');
	}

	public function postDangKy()
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

	public function getGoogleCallback()
	{
		// get data from input
	    $code = Input::get( 'code' );
	    $googleService = OAuth::consumer( 'Google' );
	    if ( !empty( $code ) ) {
	        $token = $googleService->requestAccessToken( $code );
	        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

	        if(@$result['id']) 
	        {
	        	$user = User::where('google_id', $result['id'])->first();
	        	if( ! $user)
	        	{
	        		$result['username'] = explode('@', $result['email']);
	        		$result['username'] = $result['username'][0];
	        		Session::put('result', $result);
	        		return Redirect::to('auth/dang-ky');
	        	} else {
	        		try
					{
					    $user = Sentry::findUserById($user->id);
					    Sentry::login($user, true);
					    return Redirect::to('/');
					}
					catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
					{
					    $error = 'Login field is required.';
					}
					catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
					{
					    $error = 'User not found.';
					}
					catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
					{
					    $error = 'User not activated.';
					}
	        		
	        		return Redirect::to('auth/dang-nhap')->withErrors($error);
	        	}
	        }
	    }
	    else {
	        $url = $googleService->getAuthorizationUri();
	        return Redirect::to( (string)$url );
	    }
	}
	public function getQuenMatKhau()
	{
		return "Quen mat khau";
	}

}