<?php
class Revoleers_Validate_Url extends Zend_Validate_Abstract
{
    const MSG_INVALID_URL = 'notValidUrl';
    const MSG_DOUBLE_SPACE = 'doubleSpace';
    
    protected $_messageTemplates = array(
        self::MSG_INVALID_URL => "Not a valid URL."
        );
 
    public function isValid($value)
    {
        $this->_setValue($value);
 		$isValid = true;
	    if (!Zend_Validate::is($value, 'Regex', array('/^[\/+a-zA-Z0-9-:\\\.,\()]*$/'))) {
            $this->_error(self::MSG_INVALID_URL);
            $isValid = false;
		}
        return $isValid;
    }
}