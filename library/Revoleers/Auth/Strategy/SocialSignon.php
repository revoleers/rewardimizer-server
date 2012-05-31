<?php
class Revoleers_Auth_Strategy_SocialSignon extends Revoleers_Auth_Strategy_Abstract implements Revoleers_Auth_Strategy_Interface
{
	public function getForm()
	{
		throw new Exception('getForm() method not required for Social Signon strategy');
	}
	
	public function setForm($form)
	{
		throw new Exception('setForm() method not required for Social Signon strategy');
	}
	
	public function shouldAuthenticate()
	{
		return true;
	}
	
	public function authenticate()
	{
		$session = $this->initBootstrap()->getApplication()->getOption('session');
		
		$singlesignon = $this->_adapter->getUser();		
		if (null === $singlesignon) {
			throw new Zend_Auth_Adapter_Exception('SingleSignon object cannot be null');
		}

        $userentity = $singlesignon->getUser();
        $ues = $userentity->getUseremail();
        if (count($ues) === 0) {
        	throw new Zend_Auth_Adapter_Exception('User has no email addresses');
        }
        
        $useremail = null;
        foreach ($ues as $ue) {
            if ($ue->getUseremailIsprimary() === true) {
            	$useremail = $ue;
            	continue;
            }
        }
        if ($useremail === null) {
        	throw new Zend_Auth_Adapter_Exception('User has no primary email address');
        }
    
		$user = new stdClass();
		$user->useremail_email = $useremail->getUseremailEmail();
		$user->user_id = $userentity->getUserId();
		$user->user_firstname = $userentity->getUserFirstname();
		$user->user_lastname = $userentity->getUserLastname();
		$user->user_admin = $userentity->getUserAdmin();
        $user->profile_id = $userentity->getProfile()->getProfileId();
		Zend_Session::setOptions($session);
		$auth = Zend_Auth::getInstance();
		$storage = $auth->getStorage();
		$storage->write($user);
		$user = $auth->getIdentity();
		
		return new Zend_Auth_Result(
			Zend_Auth_Result::SUCCESS,
			$user,
            array('Authentication successful')
		);
    }
}