<?php 

namespace App\DTT\Forms;
class UserRegisterForm extends FormValidator {

	protected $rules = array(
		'username'	=>	'required|min:4|max:50|unique:users,username',
		'password'	=>	'required|min:3|confirmed',
		'full_name'	=>	'required',
		'email'		=>	'required|email|unique:users,email',
		'phone'		=>	'min:8|max:16',
		'address'	=>	'max:255',

		);
	protected $messages = array(
		'username.required'	=>	'Username không được trống.',
		'username.min'		=>	'Độ dài username phải từ 4 tới 50 kí tự.',
		'username.unique'	=>	'Username đã tồn tại, vui lòng chọn tên khác.',
		'password.required' =>	'Mật khẩu không được bỏ trống.',
		'password.confirmed' 	=>	'Nhập lại mật khẩu không đúng.',
		'password.min'		=>	'Password quá ngắn.',
		'full_name.require'	=>	'Bạn phải nhập họ tên.',
		'email.require'		=>	'Bạn phải nhập email.',
		'email.unique'		=>	'Email đã tồn tại. Vui lòng chọn email khác.',
		'phone'				=>	'Vui lòng nhập số điện thoại hợp lệ',
		'address'			=>	'Địa chỉ quá dài.'
		);
}