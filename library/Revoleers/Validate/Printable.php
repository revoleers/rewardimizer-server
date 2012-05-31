<?php
class Revoleers_Validate_Printable extends Zend_Validate_Abstract
{
    const MSG_INVALID_PRINTABLE = 'notValidPrintable';
    protected $_messageTemplates = array(
        self::MSG_INVALID_PRINTABLE => "Must contain only printable characters and spaces.",
        );
 
    public function isValid($value)
    {
        $this->_setValue($value);
 		$isValid = true;
	    if (!Zend_Validate::is($value, 'Regex', array('/^[\x20-\x7e\x0a\x0d]*$/'))) {
            $this->_error(self::MSG_INVALID_PRINTABLE);
            $isValid = false;
		}
        return $isValid;
    }
}