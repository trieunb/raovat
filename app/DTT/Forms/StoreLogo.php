<?php 

namespace App\DTT\Forms;
class StoreLogo extends FormValidator {

	protected $rules = array(
		'logo'	=>	'mimes:jpeg,png,gif,bmp|max:2000'
		);
	protected $messages = array(
		'logo.mimes'	=>	'Hình ảnh không đúng định dạng.',
			'logo.max'	=>	'Dung lượng hình ảnh không quá 2M.',
		);
}