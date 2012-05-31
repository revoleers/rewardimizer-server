<?php

class Revoleers_Controller_Plugin_ViewSetup extends Zend_Controller_Plugin_Abstract
{
	public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request)
	{
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
		$viewRenderer->init();
		if (!$request->isXmlHttpRequest()) {
			// set up variables that the view may want to know
			$viewRenderer->view->module = $request->getModuleName();
			$viewRenderer->view->controller = $request->getControllerName();
			$viewRenderer->view->action = $request->getActionName();
		}
    }
} 