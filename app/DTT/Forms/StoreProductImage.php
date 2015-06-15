<?php 

namespace App\DTT\Forms;
class StoreProductImage extends FormValidator {

	protected $rules = array(
		'image'	=>	'mimes:jpeg,png,gif,bmp|max:2000'
		);
	protected $messages = array(
		'image.mimes'	=>	'Hình ảnh không đúng định dạng.',
			'image.max'	=>	'Dung lượng hình ảnh không quá 2M.',
		);
}