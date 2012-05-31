<?php

class Revoleers_Application_Resource_Pluginloadercache extends Zend_Application_Resource_ResourceAbstract
{
    public function init()
    {
        if ('production' == $this->getBootstrap()->getEnvironment()) {
        	$classFileIncCache = APPLICATION_PATH . '/../data/cache/pluginLoaderCache.php';
        	if (file_exists($classFileIncCache)) {
        		include_once $classFileIncCache;
            }
            Zend_Loader_PluginLoader::setIncludeFileCache($classFileIncCache);
        }        
    }
}