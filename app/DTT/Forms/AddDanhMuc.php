<?php 

namespace App\DTT\Forms;
class AddDanhMuc extends FormValidator {

	protected $rules = array(
		'tendanhmuc'	=>	'required|min:4|max:255',
		);
	protected $messages = array(
		'tendanhmuc.required'	=>	'Tiêu đề không được trống.',
		);
}