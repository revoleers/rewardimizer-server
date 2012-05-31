<?php
class Revoleers_Validate_ZipCodes extends Zend_Validate_Abstract
{

    const MSG_INVALID_ZIPCODE = 'notValidZipCode';
 
    protected $_messageTemplates = array(
        self::MSG_INVALID_ZIPCODE => "Please enter one or more coma separated zipd codes.",
        );
	
        
    public function isValid($value)
    {
        $this->_setValue($value);
 		$isValid = true;
		if (strlen($value) == 0 )
			return $isValid;

		if (! strpos($value, ","))
    	{
    		if (! $this->isValidZipCode($value)) {
            	$this->_error(self::MSG_INVALID_ZIPCODE);
            	return false;
    		}
		}
				
		$splitZips = explode(",", $value);
			
 		foreach ($splitZips as $zip)
 		{
 			$zip = trim($zip);
 		    if (! $this->isValidZipCode($zip)) {
            	$this->_error(self::MSG_INVALID_ZIPCODE);
            	$isValid = false;
    		} 			
 		}
			
 		return $isValid;
    }
    
	private function isValidZipCode($value)
	{	
		return preg_match("/(^\d{5}(-\d{4})?$)|(^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$)/", $value);
	}
    
    
}