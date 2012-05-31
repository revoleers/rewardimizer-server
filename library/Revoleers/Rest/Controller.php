<?php

class Revoleers_Rest_Controller extends Zend_Rest_Controller
{
	public $_dependencies = array('doctrine', 'log');
	public $_acl;
	
	protected $_form;
    protected $_model;
    protected $_submodel;
	
	protected $_params = array();
    protected $_orderBy = null;
    protected $_offset = null;
    protected $_limit = null;
	
	// list objects
    public function indexAction()
    {
    	$this->view->objs = $this->_model->fetchList($this->_params, $this->_orderBy, $this->_limit, $this->_offset);
    	
        $this->_response->setHttpResponseCode(200);
    }
 
    // view object by id
    public function getAction()
    {
        $request = $this->getRequest();
        
        $id = $request->getParam('id');
        if ($id) {
            $obj = $this->_model->fetch($id);      
            $this->view->obj = $obj;
            
            if (null === $obj) {
                throw new Exception("Object not found");
            }       
        } else {
        	// throw error, id not found
        }
                
        $this->_response->setHttpResponseCode(200);
    }
 
    // create object
    public function postAction()
    {
        $request = $this->getRequest();
        
        $id = $request->getParam('id');
        if ($id) {
            $obj = $this->_model->fetch($id);      
            $this->view->obj = $obj;
            
            if (null === $obj) {
                throw new Exception("Object not found");
            }       
        } else {
            // throw error, id not found
        }
        
        if ($request->isPost()) {
            if ($this->_form->isValid($request->getPost())) {
                $this->_model->save($this->_form->getValues());
                if ($this->_controller === null) {
                    $this->_controller = $request->getControllerName();
                }
                $this->_helper->redirector($this->_action, $this->_controller, $this->_module, $this->_params);
            } else {
                $this->view->err = "Please correct errors in the fields below.";
            }
        } else {
        	// throw error, not post
        }
        
        $this->_response->setHttpResponseCode(201);
    }
 
    // update object
    public function putAction()
    {
        $request = $this->getRequest();
        
        $id = $request->getParam('id');
        if ($id) {
            $obj = $this->_model->fetch($id);      
            $this->view->obj = $obj;
            
            if (null === $obj) {
                throw new Exception("Object not found");
            }       
        } else {
            // throw error, id not found
        }
        
        if ($request->isPut()) {
            if ($this->_form->isValid($request->getPut())) {
                $this->_model->save($this->_form->getValues());
                if ($this->_controller === null) {
                    $this->_controller = $request->getControllerName();
                }
                $this->_helper->redirector($this->_action, $this->_controller, $this->_module, $this->_params);
            } else {
                $this->view->err = "Please correct errors in the fields below.";
            }
        } else {
            // throw error, not put
        }        
        
        $this->_response->setHttpResponseCode(201);
    }
 
    // delete object
    public function deleteAction()
    {
        $request = $this->getRequest();        
        $id = $request->getParam('id');
        if ($id) {
        	if ($request->isPut()) {
                $result = $this->_model->delete($id);
        	} else {
        		// throw error, not delete
        	}       
        } else {
            // throw error, id not found
        }        
        
        $this->_response->setHttpResponseCode(200);
    }
    
    /**
	* The head action handles HEAD requests; it should respond with an
	* identical response to the one that would correspond to a GET request,
	* but without the response body.
	*/
    public function headAction()
    {
        $this->_forward('get');
    }

    /**
	* The options action handles OPTIONS requests; it should respond with
	* the HTTP methods that the server supports for specified URL.
	*/
    public function optionsAction()
    {
        $class = new ReflectionObject($this);
        $methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);

        $actions = array();

        foreach ($methods as &$method) {
            $name = strtoupper($method->name);

            if (substr($name, -6) == 'ACTION' && $name != 'INDEXACTION') {
                $actions[$name] = str_replace('ACTION', null, $name);
            }
        }

        $this->_response->setBody(null);
        $this->_response->setHeader('Allow', implode(', ', $actions));
        $this->_response->setHttpResponseCode(200);
    }
    
    protected function _log($logMessage, $logType = Zend_Log::INFO)
    {
        if (isset($this->log)) {
            $this->log->log($logMessage, $logType);
        }
    }
    
    protected function _prepareErrMessage($ex)
    {
        return array('An unexpected error occurred: ' . $ex->getMessage());
    }

    protected $_bootstrap;
    protected function initBootstrap() {
        if (!$this->_bootstrap) {
            // from outside a controller, use Zend_Controller_Front::getInstance()->getParam('bootstrap');
            $this->_bootstrap = $this->getInvokeArg('bootstrap');
        }
        return $this->_bootstrap;
    }
    
    /**
     * Deny Access Function
     * Redirects to errorPage, this can be called from an action using the action helper
     *
     * @param request
     *
     * @return void
     **/
    public function denyAccess($request)
    {
        if (!isset($_SESSION["Zend_Auth"]["storage"]->user_id)) {
            // If session has expired, save previous request in the session and send user to login page.
            
        } else {
            // Otherwise tell user they are not authorized.
        }
    }
    
    protected function _getForm($action)
    {
        throw new Exception("_getForm must be implemented in your Controller");
    }
    
    protected function _getModel($action, $clean = false)
    {
        throw new Exception("_getModel must be implemented in your Controller");
    }
}