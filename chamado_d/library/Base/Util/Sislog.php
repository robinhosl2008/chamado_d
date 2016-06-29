<?php

class Base_Util_Sislog  {
    
    
    public static function write($message, $priority = null) {
        
        $logName = LOG_PATH . "/" . date("Ymd") . ".log";
        
        $oLog = Log::singleton("file", $logName);
        
        if (isset($_SERVER["SHELL"])) {
            $username .= " PHPCLI ";
        } else {
            //Verifica se usuário está logado 
            if (is_object(Zend_Auth::getInstance()->getIdentity()))
                $username .= Zend_Auth::getInstance()->getIdentity()->getNoUsername();
            else
                $username .= " - ";
        }
        
        $oLog->log("$username - $message", $priority);
        
        chmod($logName, 0777);
        
    }
    
    public static function registrarAcesso($url,$params=null) {
        
        $logName = LOG_PATH . "/acesso_" . date("Ymd") . ".log";
        
        $oLog = Log::singleton("file", $logName);
        
        if (isset($_SERVER["SHELL"])) {
            $username .= " Sem Autenticação ";
        } else {
            //Verifica se usuário está logado 
            if (is_object(Zend_Auth::getInstance()->getIdentity()))
                $username .= Zend_Auth::getInstance()->getIdentity()->getNoUsername();
            else
                $username .= " - ";
        }
        
        $oLog->log("$username - ACESSOU: $url - $params");
        
        chmod($logName, 0777);
        
    }
}
