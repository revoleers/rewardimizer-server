<?php

class Revoleers_Util_User
{
	/**
	 * 
	 * Return true is user is logged in, false if not
	 */
	public static function isAuthenticated()
	{
		return Zend_Auth::getInstance()->hasIdentity();
	}
	
    /**
     * 
     * retrieve user id from session and fetch user from model
     * 
     * @param Doctrine\ORM\EntityManager $em
     * @param Zend_Log $logger
     */
    public static function getUser($em, $logger)
    {
    	
    	include_once 'user/models/User.php';
    	$userModel = new User_Model_User($em, $logger);
    	$userobj =  Zend_Auth::getInstance()->getIdentity();
    	$user = $userModel->fetch($userobj->user_id);
    	
        return $user;
    }
    
    /**
     * Return the user Id for current login user or null 
     * if no identity is available.
     * 
     * @return int
     */
    public static function getUserId()
    {
        $user = Zend_Auth::getInstance()->getIdentity();
        return is_null($user) ? null : $user->user_id;
    }
    
    /**
     * Return the Display Name (e.g. 'John Smith') for current login user or null
     * if no identity is available.
     * 
     * @return int
     */
    public static function getUserDisplayName()
    {
        $user = Zend_Auth::getInstance()->getIdentity();
        return is_null($user) ? null : $user->user_firstname . ' ' . $user->user_lastname;
    }
    
    /**
     * Return the Backplane URL for current login user or null
     * if no identity is available.
     * 
     * @return int
     */
    public static function getBackplane()
    {
        $user = Zend_Auth::getInstance()->getIdentity();
        return is_null($user) ? null : $user->backplane;
    }
    
    /**
     * Return the profile Id for current login user or null 
     * if no identity is available.
     * 
     * @return int
     */
    public static function getProfileId()
    {
        $user = Zend_Auth::getInstance()->getIdentity();
        return is_null($user) ? null : $user->profile_id;
    }
    
    public static function getUserUrl()
    {
    	$user = Zend_Auth::getInstance()->getIdentity();
        return is_null($user) ? null : Revoleers_Util_HttpPath::getServerUrl() . '/profile/profile/view-public/' . $user->profile_id;
    }
    
    public static function getRole()
    {
    	$role = 'guest';
        if (Zend_Auth::getInstance()->hasIdentity()) {
        	$user = Zend_Auth::getInstance()->getIdentity();
        	($user->user_admin === true) ? $role = 'admin' : $role = 'user';  
        }
        
        return $role;
    }
    
    public static function generatePassword($length=9, $strength=0)
    {
	    $vowels = 'aeuy';
	    $consonants = 'bdghjmnpqrstvz';
	    if ($strength & 1) {
	        $consonants .= 'BDGHJLMNPQRSTVWXZ';
	    }
	    if ($strength & 2) {
	        $vowels .= "AEUY";
	    }
	    if ($strength & 4) {
	        $consonants .= '23456789';
	    }
	    if ($strength & 8) {
	        $consonants .= '@#$%';
	    }
	 
	    $password = '';
	    $alt = time() % 2;
	    for ($i = 0; $i < $length; $i++) {
	        if ($alt == 1) {
	            $password .= $consonants[(rand() % strlen($consonants))];
	            $alt = 0;
	        } else {
	            $password .= $vowels[(rand() % strlen($vowels))];
	            $alt = 1;
	        }
	    }
	    return $password;
	}
    
}