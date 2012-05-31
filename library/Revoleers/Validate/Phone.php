<?php
class Revoleers_Validate_Phone extends Zend_Validate_Abstract
{
    const MSG_INVALID_PHONE = 'notValidPhone';
 
    protected $_messageTemplates = array(
        self::MSG_INVALID_PHONE => "Must contain only 0 to 9, space, or these characters . - ( ).",
        );
 
    public function isValid($value)
    {
        $this->_setValue($value);
 		$isValid = true;
	    if (!Zend_Validate::is($value, 'Regex', array('/^[0-9-\.,\(\)]*$/'))) {
            $this->_error(self::MSG_INVALID_PHONE);
            $isValid = false;
		}
        return $isValid;
    }
}