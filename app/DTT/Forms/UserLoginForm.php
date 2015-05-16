<?php 

namespace App\DTT\Forms;
use Lang;
class UserLoginForm extends FormValidator {

	protected $rules = array(
		'username'	=>	'required',
		'password'	=>	'required|min:3'
		);
	protected $messages = array(
		'required'	=>	':attribute không được để trống.',
		'password.min'		=>	'Password tối thiểu :min ký tự.',
		);
}