<?php
class Revoleers_Auth_Adapter_Multipath implements Zend_Auth_Adapter_Interface
{
  protected $_strategies;

  protected $_user;
  protected $_strategy;
  protected $_request;
  protected $_response;

  public function __construct()
  {
    $this->_strategies = new Zend_Loader_PluginLoader(array(
      'Revoleers_Auth_Strategy' => 'Revoleers/Auth/Strategy/',
    ));
  }

  public function shouldAuthenticate(Zend_Controller_Request_Http $request,
                                     Zend_Controller_Response_Http $response)
  {
    if (null === $this->_strategy) {
      throw new Zend_Auth_Adapter_Exception('cannot determine; must set strategy first');
    }
    $this->setRequest($request);
    $this->setResponse($response);
    return $this->_strategy->shouldAuthenticate();
  }

  public function authenticate()
  {
    if (null === $this->_user || null === $this->_strategy) {
      throw new Zend_Auth_Adapter_Exception('must provide both user and strategy');
    }
    return $this->_strategy->authenticate();
  }

  public function getForm()
  {
    if (null === $this->_strategy) {
      throw new Zend_Auth_Adapter_Exception('must provide strategy first');
    }
    return $this->_strategy->getForm();
  }

  public function getUser()
  {
    return $this->_user;
  }

  public function setUser($user)
  {
    $this->_user = $user;
    return $this;
  }

  public function getStrategy()
  {
    return $this->_strategy;
  }

  public function setStrategy($strategy)
  {
    if (!($strategy instanceof Revoleers_Auth_Strategy_Interface)) {
      $strategyClass = $this->_strategies->load(ucfirst($strategy));
      $strategy = new $strategyClass();
      $strategy->setAdapter($this);
    }
    $this->_strategy = $strategy;
    return $this;
  }

  public function getRequest()
  {
    return $this->_request;
  }

  public function setRequest(Zend_Controller_Request_Http $request)
  {
    $this->_request = $request;
    return $this;
  }

  public function getResponse()
  {
    return $this->_response;
  }

  public function setResponse(Zend_Controller_Response_Http $response)
  {
    $this->_response = $response;
    return $this;
  }
}