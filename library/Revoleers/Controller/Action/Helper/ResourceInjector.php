<?php

class Revoleers_Controller_Action_Helper_ResourceInjector extends Zend_Controller_Action_Helper_Abstract
{
    protected $_resources;

    public function preDispatch()
    {
        $bootstrap  = $this->getBootstrap();
        $controller = $this->getActionController();

        if (!isset($controller->_dependencies)
            || !is_array($controller->_dependencies)
        ) {
            return;
        }

        foreach ($controller->_dependencies as $name) {
            if (!$bootstrap->hasResource($name)) {
                throw new DomainException("Unable to find dependency by name '$name'");
            }
            $controller->$name = $bootstrap->getResource($name);
        }
    }
 
    public function getBootstrap()
    {
        return $this->getFrontController()->getParam('bootstrap');
    }
}