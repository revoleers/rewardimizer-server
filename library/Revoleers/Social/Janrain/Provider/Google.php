<?php

class Revoleers_Social_Janrain_Provider_Google extends Revoleers_Social_Janrain_Provider_Abstract implements Revoleers_Social_Janrain_Provider_Interface
{
	CONST USERID = 'googleUserId';
	
	public function getUserId()
	{
        if ($this->_userid === null) {
            $this->_userid = $this->_profile[self::USERID];
        }
    }
}