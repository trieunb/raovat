<?php 

namespace App\DTT\Forms;
use Validator, Input;
use Illuminate\Support\Contracts\MessageProviderInterface;
class FormValidator extends \Validator implements FormValidatorInterface, MessageProviderInterface {

	protected $validator;

	protected $rules = array();

	protected $messages = array();

	public function __construct($data = array())
	{
		return $this->validator = Validator::make($data?:Input::all(), $this->getRules(), $this->getMessages() );
	}

	protected function getRules()
	{
		return $this->rules;
	}
	protected function getMessages()
	{
		return $this->messages;
	}
	public function passes()
	{
		return $this->validator->passes();
	}
	public function fails()
	{
		return $this->validator->fails();
	}
	public function getMessageBag()
	{
		return $this->validator->messages();
	}
	public function getValidator()
	{
		return $this->validator();
	}


}