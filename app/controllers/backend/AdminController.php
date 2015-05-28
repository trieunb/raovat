<?php
	/**
	* 
	*/
	class AdminController extends \BaseController 
	{
		

		public function getLogin()
		{
			return View::make('backend.login');
		}
		public function postLogin(){

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
					$user = Sentry::authenticate($credentials, $remember);
					
					return Redirect::to('admin');
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

		
	}
?>