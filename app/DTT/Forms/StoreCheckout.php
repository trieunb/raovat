<?php 

namespace App\DTT\Forms;
class StoreCheckout extends FormValidator {

	protected $rules = array(
		'billing_first'	=>	'required',
		'billing_last'			=>	'required',
		'billing_address'			=>	'required',
		'billing_email'			=>	'required',
		'billing_phone'			=>	'required',
		);
	protected $messages = array(
		'billing_first'	=>	'Họ tên người mua không được để trống.',
		'billing_last'	=>	'Họ tên người mua không được để trống.',
		'billing_address'	=>	'Địa chỉ không được để trống.',
		'billing_email'		=>	'Email không được để trống.',
		'billing_phone'		=>	'Số điện thoại không được để trống.',
		);
}