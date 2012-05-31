<?php

class Revoleers_Social_Echo_Stream {
    var $login;
    var $secret;
    var $callbackUrl;
    var $siteUrl;
    
    var $consumer;
 
    public function __construct($callbackUrl, $siteUrl)
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
        if (!isset($config->echo->backplane->name)) {
            throw new Exception("Backplane business name must be set");
        }
        $this->login = $config->echo->backplane->name;
        $this->secret = $config->echo->backplane->password;
        
        $this->callbackUrl = $callbackUrl;
        $this->siteUrl = $siteUrl;
    }
    
    public function getConsumer()
    {
    	return $this->consumer;
    }
    
    public function setupConsumer()
    {
    	$config = array (
            'callbackUrl' => $this->callbackUrl,
            'siteUrl' => $this->siteUrl,
            'consumerKey' => $this->login,
            'consumerSecret' => $this->secret
    	);
    	
    	$this->consumer = new Zend_Oath_Consumer($config);
    	
    	return $this->consumer;
    }
}