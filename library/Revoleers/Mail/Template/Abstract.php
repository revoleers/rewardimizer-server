<?php

abstract class Revoleers_Mail_Template_Abstract {
	
	protected $_obj;
	protected $_config;
    
    protected $_recipientEmail;
    protected $_recipientName;
    protected $_from;
    protected $_subject;
    protected $_bodyText;
    protected $_bodyHtml;
    protected $_senderEmail;
    protected $_senderName;
	
	public function __construct()
	{		
		$this->_config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
	}
	
	public function populate(Revoleers_Model_Abstract $model) {	
        // we are depending on there being an entity already stored in the model
        $this->_obj = $model->fetch();
        if ($this->_obj === null)
        {
            throw new Exception('No Entity found in the given model');
        }
        
	    $this->setRecipientEmail();
	    $this->setRecipientName();
	    $this->setFrom();
	    $this->setSubject();
	    $this->setBodyText();
	    $this->setBodyHtml();
	    $this->setSenderEmail();
	    $this->setSenderName();
	}
    
    public function getRecipientEmail ()
    {
        return $this->_recipientEmail;
    }
    
    public function getRecipientName ()
    {
        return $this->_recipientName;
    }
    
    public function getTo ()
    {
    	return $this->_to;
    }
    
    public function getFrom ()
    {
        return $this->_from;
    }
    
    public function getSubject ()
    {
        return $this->_subject;
    }
    
    public function getBodyText ()
    {
        return $this->_bodyText;
    }
    
    public function getBodyHtml ()
    {
        return $this->_bodyHtml;
    }
    
    public function getSenderEmail ()
    {
        return $this->_senderEmail;
    }
    
    public function getSenderName ()
    {
        return $this->_senderName;
    }
}