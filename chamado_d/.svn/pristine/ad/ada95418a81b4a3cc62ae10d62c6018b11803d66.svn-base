<?php

class Base_Plugins_Autenticador extends Zend_Controller_Plugin_Abstract {

    public function routeShutdown(Zend_Controller_Request_Abstract $request) {

        //Objeto de Redirecionamento
        $oRedirector = new Zend_Controller_Action_Helper_Redirector();
        $oAuth = Zend_Auth::getInstance();
        
        $fileLog = New Base_Util_FileLog();
        
        $aRecursoSemAutenticao = array(
            '/acesso/login/*',
            '/acesso/usuario/*',    
            '/usuario/login/*',
            '/default/error/*',
            '/default/index/acesso-negado',
            '/default/index/index',
            '/consulta/cadastro/tipo-profissional',
            '/manutencao/rotina/aviso-fechamento-tarefa'
        );
        //Criar perfil do sistema para acesso a servicos
        
        $this->aRecurso = array (
                '/*/*/*',
                '/' . $request->getModuleName() . '/*/*',
                '/' . $request->getModuleName() . '/' . $request->getControllerName() . '/*',
                '/' . $request->getModuleName() . '/'. $request->getControllerName() . '/'. $request->getActionName()
        );
        
        
        $isSemAutenticao = false;
        
        foreach($this->aRecurso as $recurso) {
            if (in_array($recurso,$aRecursoSemAutenticao)) {
                $isSemAutenticao = true;
            }
        }
       
       
        if (! $isSemAutenticao) {
            if (! $oAuth->hasIdentity()) {
                $oRedirector->gotoSimpleAndExit('index', 'login', 'acesso');
            } else {
              
                $oAcl = Zend_Registry::get('acl');
                
                //Verifica se Perfil está cadastrado nas regras de acesso
                if (! $oAcl->hasRole(CO_PERFIL)) {                    
                    $bPermissaoRecurso = false;
                } else {
                                
                    $bPermissaoRecurso = false;
                     
                    foreach($this->aRecurso as $recurso) {
                        $fileLog->write("USUARIO - " .CO_USUARIO . " - " . CO_PERFIL . " - " . $recurso . " - Export " . var_export($oAcl->has($recurso),true));
                        if ($oAcl->has($recurso)) {
                            if ($oAcl->isAllowed(CO_PERFIL, $recurso)) {
                                $fileLog->write("TRUE - >>> USUARIO - " .CO_USUARIO . " - " . $recurso);
                                $bPermissaoRecurso = true;
                            }
                        }
                    }
                }
                
                if (! $bPermissaoRecurso) {
                    $fileLog->write("Erro de acesso negado Request: " . $request->getModuleName() . "/" . $request->getControllerName() . "/" . $request->getActionName());
                    $oRedirector->gotoSimpleAndExit('acesso-negado', 'index', 'default');
                }
                
            }    
        } 
        
    }

}

?>
