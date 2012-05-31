<?php

abstract class Revoleers_Social_Janrain_Provider_Abstract
{
	protected $_response;
    protected $_profile;
	protected $_userid;
	protected $_name;
	protected $_firstname;
	protected $_lastname;
	protected $_fullname;
	protected $_email;
    protected $_identifier;
	
    
    public function __construct($response)
    {
    	if (!$response) {
    		throw new Exception("Response cannot be null");
    	}
    	$this->_response = Zend_Json::decode($response->getBody());
    }
    
    public function getUserId()
    {
        $this->_userid = '';
        return $this->_userid;
    }
    
    public function getProfile()
    {
        if ($this->_profile === null) {
            $this->_profile = $this->_response['profile'];
        }
        
        return $this->_profile;
    }
    
    public function getName()
    {
    	if ($this->_name === null) {
    		$this->getProfile();    		
            if ($this->_profile !== null) {
            	$this->_name = $this->_profile['name'];
            }
    	}
    	
    	return $this->_name;
    }
    
    public function getFirstName()
    {
    	if ($this->_firstname === null) {
    		$this->getName();
            if ($this->_name !== null) {
                $this->_firstname = $this->_name['givenName'];
            }
        }
        
        return $this->_firstname;
    }
    
    public function getLastName()
    {
        if ($this->_lastname === null) {
            $this->getName();
            if ($this->_profile !== null) {
                $this->_lastname = $this->_name['familyName'];
            }
        }
        
        return $this->_lastname;
    }
    
    public function getFullName()
    {
    	if ($this->_fullname === null) {
    		$this->getName();
    		if ($this->_profile !== null) {
    			$this->_fullname = $this->_name['formatted'];
    		}
    	}
    }
    
    public function getEmail()
    {
        if ($this->_email === null) {
            $this->getProfile();
            if ($this->_profile !== null) {
                $this->_email = $this->_profile['email'];
            }
        }
        
        return $this->_email;
    }
    
    public function getIdentifier()
    {
        if ($this->_identifier === null) {
            $this->getProfile();
            if ($this->_profile !== null) {
                $this->_identifier = $this->_profile['identifier'];
            }
        }
        
        return $this->_identifier;
    }
}