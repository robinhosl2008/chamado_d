<?php

/**
controller@no_controller=permissao|no_label=Nível de Acesso|co_identificacao=C57|ds_controller=Manutenção de Níveis de Acesso (Permissões) de Perfis/Usuário@
 */
class Usuario_PermissaoController extends Zend_Controller_Action {
    
    public function init() {
        
        $this->_log                 = Zend_Registry::get('log');
        #$this->_objMensagem         = new Base_Util_Mensagem();
       # $this->_redirect            = new Zend_Controller_Action_Helper_Redirector();        
       # $this->_flashMessenger      = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger'); 
        
    }
    
    /**
     action@no_action=index|no_label=Listar|co_identificacao=C57.A1|ds_action=Exibe Listagem de Perfis do Sistema@
    */
    public function indexAction() {
     
        
        $this->view->aObjPerfil = PerfilQuery::create()
                                    ->findByStPerfil(true);
        
    }
    
    /**
     action@no_action=lista|no_label=Listar|co_identificacao=C57.A2|ds_action=Exibe Listagem de Permissões para Perfil@
    */
    public function listaAction() {
        
        
        $co_perfil = $this->_request->getParam('co_perfil');
        
        $this->view->co_perfil = (int) $co_perfil;
        
        $aPermissao = array();
        
        $aObjPermissao = PermissaoQuery::create()
                ->joinRecurso()
                ->useRecursoQuery()
                ->orderByDsRecurso()
                ->endUse()
                ->filterByCoPerfil($co_perfil)
                ->find();
              
    
        $this->view->aLista = $aObjPermissao;
        
    }
    
    /**
     action@no_action=allow|no_label=Permitir Acesso|co_identificacao=C57.A3|ds_action=Permite acesso de um action/grupo action para um Perfil@
    */
    public function allowAction() {

        /** Desabilita Layout **/
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        
        $logFile = new VisualHospub_Util_FileLog();
        
        try {
            
            $co_action = (int) $this->_request->getParam('co_action');
            $co_grupo  = (int) $this->_request->getParam('co_grupo');
            $co_perfil = (int) $this->_request->getParam('co_perfil');
        
                   
            
            $objPermissao = new HpPermissao();
            
            $objPermissao->setCoPerfil($co_perfil);
            
            //Verifica se é permissão em cima de um action ou de grupo
            
            if (! empty($co_action)) {
                
                $objAction = HpActionQuery::create()->findOneByCoAction($co_action);
                
                $objPermissao->setHpAction($objAction);
                $objPermissao->setCoController($objAction->getCoController());
                $objPermissao->setNoModulo($objAction->getHpController()->getNoModulo());
                $objPermissao->save();
            } 
            
            if (! empty($co_grupo)) {
                
                $objGrupoAction = HpGrupoActionQuery::create()->findOneByCoGrupoAction($co_grupo);
                
                $objPermissao->setCoGrupoAction($co_grupo);
                $objPermissao->setCoController($objGrupoAction->getCoController());
                //$objPermissao->setNoModulo($objGrupoAction->getCo());
                $objPermissao->save();
                
            }
            
            
            
            
            
            $this->_redirect->direct('lista','permissao','usuario', array('co_perfil' => $co_perfil));
            
            
        } catch(Exception $e) {
                        
            
        }
        
    }
    
    /**
     action@no_action=disallow|co_identificacao=C57.A4|no_label=Negar Acesso|ds_action=Nega Acesso de um action/grupo action para um perfil@
    */
    public function disallowAction() {
        
        /** Desabilita Layout **/
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        
        $logFile = new VisualHospub_Util_FileLog();
        
        try {
            
            $co_action = (int) $this->_request->getParam('co_action');
            $co_grupo  = (int) $this->_request->getParam('co_grupo');
            $co_perfil = (int) $this->_request->getParam('co_perfil');
        
                   
                        
            //Verifica se é permissão em cima de um action ou de grupo
            
            if (! empty($co_action)) {
                
                
                $objAction = HpActionQuery::create()->findOneByCoAction($co_action);
                
                $objPermissao = HpPermissaoQuery::create()
                                ->filterByCoAction($co_action)
                                ->filterByCoController($objAction->getCoController())
                                ->filterByNoModulo($objAction->getHpController()->getNoModulo())
                                ->filterByCoPerfil($co_perfil)
                                ->findOne();

                if (! is_object($objPermissao))
                    throw new ErrorException("Não foi possível carregar permissao - [Action: {$co_action} Controller: {$objGrupoAction->getCoController()} Modulo: {$objGrupoAction->getHpController()->getCoModulo()} Perfil: {$co_perfil}]", 0, LOG_WARNING);
                
            } 
            
            if (! empty($co_grupo)) {
                
                $objGrupoAction = HpGrupoActionQuery::create()->findOneByCoGrupoAction($co_grupo);
                
                $objPermissao = HpPermissaoQuery::create()
                                ->filterByCoGrupoAction($objGrupoAction->getCoGrupoAction())
                                ->filterByCoController($objGrupoAction->getCoController())
                                ->filterByNoModulo($objGrupoAction->getHpController()->getNoModulo())
                                ->filterByCoPerfil($co_perfil)
                                ->findOne();

                if (! is_object($objPermissao))
                    throw new ErrorException("Não foi possível carregar permissao - [GrupoAction: {$co_grupo} Controller: {$objGrupoAction->getCoController()} Modulo: {$objGrupoAction->getHpController()->getCoModulo()} Perfil: {$co_perfil}]", 0, LOG_WARNING);

                
            }
            
            $objPermissao->delete();
            
            
            
            $this->_redirect->direct('lista','permissao','usuario', array('co_perfil' => $co_perfil));
            
            
        } catch(Exception $e) {
            
            
            
            throw new ErrorException("Não foi possível desabilitar permissao " . $e->getMessage() , 0, LOG_WARNING);
            
        }
        
    }
    
    /**
     action@no_action=allow-controller|co_identificacao=C57.A5|no_label=Permitir Acesso a um Controller|ds_action=Permite Acesso a um Controller para um Perfil@
    */
    public function allowControllerAction() {
        
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        
        $logFile = new VisualHospub_Util_FileLog();
        
        try {
            
            $co_controller = (int) $this->_request->getParam('co_controller');            
            $co_perfil     = (int) $this->_request->getParam('co_perfil');
            
            
            //Recupera as Actions referentes ao Controllers $co_controllers
            $aObjAction = HpActionQuery::create()->filterByStAction(1)->findByCoController($co_controller);
            
            
            
            
            
            //Navega nas actions para inserir na tabela de permissoes
            foreach($aObjAction as $objAction) {
                
                $co_action = $objAction->getCoAction();
                $no_modulo = $objAction->getHpController()->getNoModulo();
                
                //Verifica se o action já tem permissao
                $qtdPermissao  = HpPermissaoQuery::create()
                                ->filterByCoAction($co_action)
                                ->filterByCoController($co_controller)
                                ->filterByNoModulo($no_modulo)
                                ->filterByCoPerfil($co_perfil)
                                ->find()->count();
                
                //Nao tem permissao insere
                
                if ($qtdPermissao == 0) {
                
                    $objPermissao = new HpPermissao();
                    
                    $objPermissao->setCoAction($co_action);
                    $objPermissao->setCoController($co_controller);
                    $objPermissao->setNoModulo($no_modulo);
                    $objPermissao->setCoPerfil($co_perfil);
                    
                    $objPermissao->save();
                    
                }
                
            }
            
            
            
            $this->_redirect->direct('lista','permissao','usuario', array('co_perfil' => $co_perfil));
            
            
        } catch(Exception $e) {
            
            
            
            throw new ErrorException("Não foi possível desabilitar permissao " . $e->getMessage() , 0, LOG_WARNING);
            
        }
        
    }
    
    /**
     action@no_action=disallow-controller|co_identificacao=C57.A6|no_label=Negar Acesso a um Controller|ds_action=Nega Acesso a um Controller para um Perfil@
    */
    public function disallowControllerAction() {
        
        /** Desabilita Layout **/
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        
        $logFile = new VisualHospub_Util_FileLog();
        
        try {
            
            
            
            $co_controller = (int) $this->_request->getParam('co_controller');            
            $co_perfil     = (int) $this->_request->getParam('co_perfil');

            
            
            //Recupera as Permissoes referentes ao controllers $co_controller
            
            
            $aObjPermissao = HpPermissaoQuery::create()
                             ->filterByCoController($co_controller)
                             ->findByCoPerfil($co_perfil);
            
            
            //Remove permissao
            foreach($aObjPermissao as $objPermissao) 
                $objPermissao->delete();
            
            
            
            
            $this->_redirect->direct('lista','permissao','usuario', array('co_perfil' => $co_perfil));
            
        } catch(Exception $e) {
            
            
            
            throw new ErrorException("Não foi possível desabilitar permissao " . $e->getMessage() , 0, LOG_WARNING);
            
        }
        
        
    }
    
    
    
}