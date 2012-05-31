<?php
// Set the initial include_path. You may need to change this to ensure that 
// Zend Framework is in the include_path; additionally, for performance 
// reasons, it's best to move this to your web server configuration or php.ini 
// for production.
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/../library'),
    get_include_path(),
)));

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

/** Zend_Application */
require_once 'Zend/Application.php';  

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV, 
    APPLICATION_PATH . '/configs/application.ini'
);

try {
	$application->bootstrap()->run();
} catch (Exception $exception) {
	echo '<html><body><center>'
	. 'An exception occured while bootstrapping the application.';
	if (defined('APPLICATION_ENV') && APPLICATION_ENV != 'production') {
		echo '<br /><br />' . $exception->getMessage() . '<br />'
		. '<div align="left">Stack Trace:'
		. '<pre>' . $exception->getTraceAsString() . '</pre></div>';
	}
	echo '</center></body></html>';
	exit(1);
}