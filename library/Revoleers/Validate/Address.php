<?php
class Revoleers_Validate_Address extends Zend_Validate_Abstract
{
    const MSG_INVALID_ADDRESS = 'notValidAddress';
    const MSG_DOUBLE_SPACE = 'doubleSpace';
 
    protected $_messageTemplates = array(
        self::MSG_INVALID_ADDRESS => "Must contain only a-z, A-Z, 0 to 9, single quote, period, dash, # or space characters.",
        self::MSG_DOUBLE_SPACE => "Must not have two or more spaces together."
        );
 
    public function isValid($value)
    {
        $this->_setValue($value);
 		$isValid = true;
	    if (!Zend_Validate::is($value, 'Regex', array('/^[\sA-Za-z0-9-#\'.]*$/'))) {
            $this->_error(self::MSG_INVALID_ADDRESS);
            $isValid = false;
		}
		if (strstr($value,'  ')) {
            $this->_error(self::MSG_DOUBLE_SPACE);
            $isValid = false;
		}
        return $isValid;
    }
}