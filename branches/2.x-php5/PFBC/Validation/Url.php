<?php
namespace PFBC\Validation;

class Url extends \PFBC\Validation {
	protected $message = "Error: %element% must contain a url (e.g., http://www.google.com).";

	public function isValid($value) {
		if($this->isNotApplicable($value) || filter_var($value, FILTER_VALIDATE_URL))
			return true;
		return false;	
	}
}
