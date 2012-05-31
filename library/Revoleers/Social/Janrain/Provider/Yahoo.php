<?php

class Revoleers_Social_Janrain_Provider_Yahoo extends Revoleers_Social_Janrain_Provider_Abstract implements Revoleers_Social_Janrain_Provider_Interface
{
    public function getFirstName()
    {
    	if ($this->_firstname === null) {
    		$this->getFullName();
    		if ($this->_fullname !== null) {
    			$parser = new Revoleers_Util_Search_Parser($this->_fullname);
    			$this->_firstname = $parser->getFirst();
    		}
    	}
    	
    	return $this->_firstname;
    }
    
    public function getLastName()
    {
        if ($this->_lastname === null) {
            $this->getFullName();
            if ($this->_fullname !== null) {
                $parser = new Revoleers_Util_Search_Parser($this->_fullname);
                $this->_lastname = $parser->getLast();
            }
        }
        
        return $this->_lastname;
    }
    
}