<?php

error_reporting(1);

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

define('BASE_PATH', realpath(dirname(__FILE__) . '/../../'));
define('APPLICATION_PATH', realpath(dirname(__FILE__) . "/../"));
define('MANUTENCAO_PATH', APPLICATION_PATH. "/scripts/manutencao");
define('LIBRARY_PATH', BASE_PATH. '/library');
define('LOCAL_PATH', BASE_PATH . '/local');
define('TMP_PATH', BASE_PATH . '/tmp');
define('PUBLIC_PATH', BASE_PATH. '/public');
define('CONFIG_PATH',LOCAL_PATH . "/configs");
define('SESSION_PATH', TMP_PATH . '/session');
define('DEBUG_MODE',true);
//Define SYSADMIN
define('CO_USUARIO',1);

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    LIBRARY_PATH,    
    APPLICATION_PATH . '/models',
    LIBRARY_PATH . "/PEAR", //Library PEAR
    get_include_path(),
)));


if(!is_dir(TMP_PATH.'/session')){
    mkdir(TMP_PATH.'/session');
}

ini_set('session.save_path',SESSION_PATH);
ini_set('session.gc_maxlifetime', 864000);  

require_once 'Zend/Loader/Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();        
$autoloader->registerNamespace('Base_');

require_once 'Propel/lib/Propel.php';
Propel::disableInstancePooling();
Propel::init(CONFIG_PATH . '/base-conf.php');

//guarda objeto de PDO para Transacoes
$pdo = Propel::getConnection();

$config = new Zend_Config_Ini(CONFIG_PATH . '/constante.ini','production');

$aPai = $config->toArray();
foreach($aPai as $keyPai => $valuePai)
    foreach($config->$keyPai as $key => $value)            
        define($key,$value);
