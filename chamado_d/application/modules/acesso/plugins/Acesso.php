<?php

/**
 * Plugin para Registrar em Log o acesso do Usuário no sistema.
 */
class Acesso_Plugin_Acesso extends Zend_Controller_Plugin_Abstract {
    
    public function preDispatch(Zend_Controller_Request_Abstract $request) {
        
        $url = $request->getModuleName() . "/" . $request->getControllerName() . "/" . $request->getActionName();
        
        $pdo = Propel::getConnection();
        
        $pdo->beginTransaction();
        
        try {
            
            $oLogAcesso = new LogAcesso();
            
            $oLogAcesso->setDsUrl($url);
            
            $oLogAcesso->setDsUri($_SERVER['REQUEST_URI']);
            $oLogAcesso->setDsMethod($_SERVER['REQUEST_METHOD']);
            $oLogAcesso->setNuIp($_SERVER['REMOTE_ADDR']);
            $oLogAcesso->setDsUserAgent($_SERVER['HTTP_USER_AGENT']);
            $oLogAcesso->setDsHttpReferer($_SERVER['HTTP_REFERER']);
            
            if (CO_USUARIO > 0) {
                $oLogAcesso->setCoUsuario(CO_USUARIO);
            }
        
            $oLogAcesso->save($pdo);
            
            $pdo->commit();
            
        } catch (Exception $e) {
            $pdo->rollBack();
            Base_Util_Sislog::write("Não foi possível gravar log de acesso >> " . $e->getMessage());
        }
        
        
    }
    
}