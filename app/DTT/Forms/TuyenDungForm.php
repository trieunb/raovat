<?php 
namespace App\DTT\Forms;
class TuyenDungForm extends FormValidator {

	protected $rules = array(
		'tencty'	=>	'required|min:4|max:255',
		
		);
	protected $messages = array(
		'tencty.required'	=>	'Tiêu đề không được trống.',
		
		);
}