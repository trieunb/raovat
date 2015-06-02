<?php 

namespace App\DTT\Forms;
class StoreCreate extends FormValidator {

	protected $rules = array(
		'store_name'	=>	'required|min:4|max:255',
		'store_slug'			=>	'required|min:4|max:30|unique:gianhang,store_slug',
		);
	protected $messages = array(
		'store_name.required'	=>	'Tên gian hàng không được trống.',
		'store_name.min'	=>	'Độ dài tên gian hàng phải từ 4 đến 30 kí tự.',
		'store_name.max'	=>	'Độ dài tên gian hàng phải từ 4 đến 30 kí tự.',
		'store_slug.required'		=>	'Đường dẫn không được trống.',
		'store_slug.min'		=>	'Độ dài tên đường dẫn phải từ 4 đến 30 kí tự.',
		'store_slug.max'		=>	'Độ dài tên đường dẫn phải từ 4 đến 30 kí tự.',
		'store_slug.unique'		=>	'Đường dẫn đã tồn tại, vui lòng chọn đường dẫn khác.',
		);
}