<?php

class Revoleers_Social_Janrain_Provider_Facebook extends Revoleers_Social_Janrain_Provider_Abstract implements Revoleers_Social_Janrain_Provider_Interface
{
	CONST USERID = 'facebookUserId';
	
	public function getUserId() {
        if ($this->_userid === null) {
            $this->_userid = $this->_profile[self::USERID];
        }
    }
}