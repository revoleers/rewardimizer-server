<?php

class Revoleers_Controller_Action_Helper_Logger extends Zend_Controller_Action_Helper_Abstract
{
    public function preDispatch()
    {
        $controller = $this->getActionController();
        
        if ($this->getBootstrap()->hasResource('Log')) {
        	$request = $controller->getRequest();
        	$logger = $this->getBootstrap()->getResource('Log');
            $logger->log("module: " . $request->getModuleName() . ", controller: " . $request->getControllerName() . ", action: " . $request->getActionName(),
                                Zend_Log::DEBUG);             
        }
    }
 
    public function getBootstrap()
    {
        return $this->getFrontController()->getParam('bootstrap');
    }
}