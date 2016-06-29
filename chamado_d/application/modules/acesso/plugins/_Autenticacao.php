<?php

class Acesso_Plugin_Autenticacao extends Zend_Controller_Plugin_Abstract {
    
    public function preDispatch(Zend_Controller_Request_Abstract $request) {
    
        //Objeto de Redirecionamento
        $oRedirector = new Zend_Controller_Action_Helper_Redirector();
        $oAuth = Zend_Auth::getInstance();
            
        $isSemAutenticao = false;
        
        //Pega informações de request
        $action		= $request->getActionName();
        $module		= $request->getModuleName();
        $controller	= $request->getControllerName();
        $auth		= Zend_Auth::getInstance();
        $front 		= Zend_Controller_Front::getInstance();
        $baseUrl	= $front->getBaseUrl();			
        $urlPedida      = base64_encode($request->getRequestUri());	
        //Sessao
        $app = new Zend_Session_Namespace('app');

        Base_Util_FileLog::write("Acessando -> Module: $module/$controller/$action URL: " . $_SERVER['REQUEST_URI'] . " IP ACESSO: "  . $_SERVER['REMOTE_ADDR']);
        
        //Verifica se usuarios esta autenticado e se o controle é difretente de login
        if ($module == 'consulta' && Operador::getNivelAcesso() == Operador::NIVEL_ACESSO_NAO_AUTENTICADO){
            Base_Util_FileLog::write("Acesso negado Module: $module/$controller/$action URL: " . $_SERVER['REQUEST_URI'] . " IP ACESSO: "  . $_SERVER['REMOTE_ADDR']);
            $oRedirector->gotoSimpleAndExit('acesso-negado', 'index', 'default');
        }
        /**
         *Nivel de Autenticacao DIRECAO 
         */
        if (Operador::getNivelAcesso() == Operador::NIVEL_ACESSO_DIRECAO) { 
            if($module == 'consulta' && ($controller != "indicador" && $controller != "index")){
               $oRedirector->gotoSimpleAndExit('acesso-negado', 'index', 'default');
            }
        }
        
    }
    
}