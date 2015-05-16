<?php 

namespace App\DTT\Forms;
class UserLoginForm extends FormValidator {

	protected $rules = array(
		'username'	=>	'required',
		'password'	=>	'required'

		);
	protected $messages = array(
		'username.required'	=>	'Username không được trống.',
		'password.required' =>	'Mật khẩu không được bỏ trống.',
		);
}