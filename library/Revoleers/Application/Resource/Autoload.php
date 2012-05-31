<?php

class Revoleers_Application_Resource_Autoload extends Zend_Application_Resource_ResourceAbstract
{
    public function init()
    {
    	// Fetch the global Zend Autoloader
        $autoloader = Zend_Loader_Autoloader::getInstance();
        
        require_once 'Doctrine/Common/ClassLoader.php';
        $doctrineAutoloader = array(new \Doctrine\Common\ClassLoader('Doctrine'), 'loadClass');
        $autoloader->pushAutoloader($doctrineAutoloader, 'Doctrine');        
        
        $doctrineAutoloader = array(new \Doctrine\Common\ClassLoader('Symfony', 'Doctrine'), 'loadClass');
        $autoloader->pushAutoloader($doctrineAutoloader, 'Symfony');               
        
        $doctrineAutoloader = array(new \Doctrine\Common\ClassLoader('Entities', APPLICATION_PATH), 'loadClass');
        $autoloader->pushAutoloader($doctrineAutoloader, 'Entities');        
    }
}