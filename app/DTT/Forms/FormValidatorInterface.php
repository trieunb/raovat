<?php 

namespace App\DTT\Forms;

interface FormValidatorInterface {

	public function fails();

	public function passes();
}