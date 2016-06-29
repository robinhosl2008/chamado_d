<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// Define Path Library
define('BASE_PATH', realpath(dirname(__FILE__) . '/../'));
define('LIBRARY_PATH', realpath(dirname(__FILE__) . '/../library'));
define('COMPONENT_PATH', realpath(dirname(__FILE__) . '/../component'));
define('LOCAL_PATH', realpath(dirname(__FILE__) . '/../local'));
define('CONFIG_PATH', realpath(dirname(__FILE__) . '/../local/configs'));
define('TMP_PATH', realpath(dirname(__FILE__) . '/../tmp'));
define('LOG_PATH', TMP_PATH . '/logs');
define('MODULE_PATH', realpath(dirname(__FILE__) . '/../application/modules'));
define('PUBLIC_PATH', realpath(dirname(__FILE__) . '/../public'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    LIBRARY_PATH,    
    LIBRARY_PATH . "/PEAR", //Library PEAR
    MODULE_PATH,
    COMPONENT_PATH,
    get_include_path(),
)));

/** Zend_Application */
ini_set("memory_limit","1024M");
 
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    LOCAL_PATH . '/configs/application.ini'
);

$application->bootstrap()->run();

//print " >> " . (microtime(true) - TS_INI) . " segundos...";