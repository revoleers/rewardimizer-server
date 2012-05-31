<?php

/*
 * This class has utility methods that will be used by multiple assertion classes
 * 
 */

class Revoleers_Acl_Assert_Base implements Zend_Acl_Assert_Interface
{
	protected $logger;
	
	public function __construct()
	{
		$bootstrap = Zend_Controller_Front::getInstance()->getParam('bootstrap');		
		$this->logger =  $bootstrap->getResource('Revoleers_Application_Resource_Log');	
	}
	
	// do not call this directly
	public function assert(Zend_Acl $acl,
							Zend_Acl_Role_Interface $role = null,
							Zend_Acl_Resource_Interface $resource = null,
							$privilege = null)
	{
		return false;
	}
	
	protected function _isSelf ($userid) {
		if (Zend_Auth::getInstance()->hasIdentity()) {
			$user = Zend_Auth::getInstance()->getIdentity();
			$sessionid = $user->user_id;
			if ($sessionid == $userid) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
}
