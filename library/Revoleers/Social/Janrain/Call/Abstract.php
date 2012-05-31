<?php

abstract class Revoleers_Social_Janrain_Call_Abstract
{
	/*
	 * The URI to which to make the Janrain API Call
	 */
	protected $_uri = '';
	
	/*
	 * The API Key for the Jainrain library (see www.jainrain.com to obtain API Key)
	 */
	protected $_apiKey;
	
	public function getApiKey()
	{
		if ($this->_apiKey == null) {
			$config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
			
			if (!isset($config->janrain)) {
				throw new Exception('Janrain section must be specified in your configs/application.ini file');
			}
			
			if (!isset($config->janrain->key)) {
				throw new Exception('Janrain API Key must be specified in your configs/application.ini file');
			}
			$this->_apiKey = $config->janrain->key;
		}
		
		return $this->_apiKey;
	}
}