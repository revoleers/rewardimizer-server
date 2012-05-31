<?php

class Revoleers_Controller_Action_Helper_Acl extends Zend_Controller_Action_Helper_Abstract
{
    public function preDispatch()
    {
        $controller = $this->getActionController();
        $request = $controller->getRequest();

        if (!isset($controller->_aclDef)
            || !is_array($controller->_aclDef)
        ) {
            return;
        }

        $role = 'guest';
        if (Zend_Auth::getInstance()->hasIdentity()) {
        	$user = Zend_Auth::getInstance()->getIdentity();
        	($user->user_admin === true) ? $role = 'admin' : $role = 'user';  
        }
        
        /** Check if the controller/action can be accessed by the current user */
        if (!$this->getAcl($controller, $request)->isAllowed($role, $request->getControllerName(), $request->getActionName())) {
            /** Redirect to access denied page */
            $controller->denyAccess($request);
        }
    }
    
    protected function getAcl($controller, $request) {
        if (null === $controller->_acl) {
            $controller->_acl = new Revoleers_Acl($controller->_aclDef, $request->getControllerName());
        }        
        return $controller->_acl;
    }
}