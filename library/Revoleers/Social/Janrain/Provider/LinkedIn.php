<?php

class Revoleers_Social_Janrain_Provider_LinkedIn extends Revoleers_Social_Janrain_Provider_Abstract implements Revoleers_Social_Janrain_Provider_Interface
{
    // LinkedIn doesn't return an email in the response
    public function getEmail()
    {
    	$this->_email = '';
        return $this->_email;
    }
}