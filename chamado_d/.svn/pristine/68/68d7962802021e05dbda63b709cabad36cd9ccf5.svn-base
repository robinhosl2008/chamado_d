<?php

/**
controller@no_controller=perfil|no_label=Perfil|co_identificacao=C55|ds_controller=Manutenção de Perfis de Usuários do Sistema@
*/
class Usuario_PerfilController extends Zend_Controller_Action {

    public function init()
    {
        /* Initialize action controller here */
    	$this->_log                 = Zend_Registry::get('log');
        $this->_pdo                 = Zend_Registry::get('pdo');
        #$this->_objMensagem         = new VisualHospub_Util_Mensagem();
        #$this->_redirect            = new Zend_Controller_Action_Helper_Redirector();        
        #$this->_flashMessenger      = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger'); 
        
        #$this->showMessages();
        
    }
    
    private function showMessages() {
        
        if($this->_flashMessenger->setNamespace('msgRedirect')->hasMessages()){    		
            $aMsgResult = array();           
	    foreach ($this->_flashMessenger->getMessages() as $aMsg)
               $aMsgResult['msg'] = $aMsg;
            foreach($aMsgResult['msg'] as $aResul){
                $txtMensagem .= $this->_objMensagem->msg($aResul['tipo'],'',$aResul['msg'],'default') . "<br>";
                $this->view->$aResul['view'] = $txtMensagem;
            }
    	}
    }
    
    /**
    * action@no_action=index|no_label=Listar|co_identificacao=C56.A1|ds_action=Exibe a Listagem de Perfis cadastrados no sistema.@
    */
    public function indexAction() {
        $this->view->aObjPerfil = PerfilQuery::create()->find();
    }

    /***
     * Action Adicionar - Formulário de Cadastro de Usuário
     * 
     * action@no_action=adicionar|no_label=Adicionar|co_identificacao=C56.A2|ds_action=Inclusão de Perfil@
     */    
    public function adicionarAction() {
       
        $this->view->objForm = new Base_Util_Form('adicionar-perfil.xml','form-perfil');
        
        if ($this->_request->isPost()) {
            
            try {
                //Recupera Parametros
                $co_perfil  = $this->_request->getParam('co_perfil');
                $no_perfil  = $this->_request->getParam('no_perfil');
                $ds_perfil  = $this->_request->getParam('ds_perfil');
                $st_perfil  = $this->_request->getParam('st_perfil');
                
                if (! empty($co_perfil)) {
                    $objPerfil = PerfilPeer::retrieveByPK($co_perfil);
                    $this->view->objForm->addObjeto($objPerfil);
                } else
                    $objPerfil = new Perfil();
                
                
                $this->view->objForm->addForm($this->_request->getParams());
                
                //Verifica se tipo de operacao
                if (empty($co_perfil)) {
                    
                    $aObjPerfilQuery = PerfilQuery::create()->findByNoPerfil($no_perfil);
                                        
                } else {                    
                    
                    $aObjPerfilQuery = PerfilQuery::create()->filterByCoPerfil($co_perfil, Criteria::NOT_EQUAL)->findByNoPerfil($no_perfil);
                    
                }
                
                
                $aError = $this->view->objForm->getErrors();
                
                //Validacoes 
                //Verifica se existe Perfil com o Nome
                if (count($aObjPerfilQuery) > 0) {
                    $aError[] = "Nome do Perfil já existe";
                    //Apagar valor do formulário
                    $this->view->objForm->clear('no_perfil');
                }
                
                if (count($aError) > 0) {
                    
                    $msgError = implode("<br />",$aError); 
                    
                    $this->_flashMessenger->setNamespace('msgRedirect');
                    $this->_flashMessenger->addMessage(array(array('msg'=>$msgError ,'tipo'=>'error','view'=> 'error')));
                    
                    $this->showMessages();
                    
                    return;
                }
                
                
                $objPerfil->setNoPerfil($no_perfil);
                $objPerfil->setDsPerfil($ds_perfil);
                $objPerfil->setStPerfil((! empty($st_perfil)));
                
                $objPerfil->save();
                
                
                $this->_flashMessenger->addMessage(array(array('msg'=>'Perfil registrado com sucesso!' ,'tipo'=>'success','view'=> 'sucesso')));                
                $this->_redirect->direct('index');
                
            } catch(Exception $e) {
                
                
                $this->_log->err($e->getTraceAsString());
                
                $this->_flashMessenger->addMessage(array(array('msg'=>'Não foi possível registrar o perfil!' ,'tipo'=>'error','view'=> 'error')));
                
                
            }
            
        } else {
            
            $co_perfil = $this->_request->getParam('co_perfil');
            
            //Carrega Perfil para edição
            if (! empty($co_perfil)) {
                
                $objPerfil = PerfilPeer::retrieveByPK($co_perfil);
                
                if (! is_object($objPerfil)) {
                    
                    $this->_flashMessenger->setNamespace('msgRedirect');
                    $this->_flashMessenger->addMessage(array(array('msg'=>'Perfil não encontrado!' ,'tipo'=>'attention','view'=> 'atencao')));

                    $this->_redirect->direct('index');

                }

                $this->view->objForm->addObjeto($objPerfil);
                
            }
            
        }
        
        
    }
    
     /***
     * action@no_action=editar|no_label=Editar|co_identificacao=C56.A3|ds_action=Edição de Perfil@
     */    
    public function editarAction() {
        $this->adicionarAction();
    }
    
    /**
     action@no_action=excluir|co_identificacao=C56.A4|no_label=Excluir|ds_action=Exclusão de Perfil@
    */
    public function excluirAction() {
        
        $co_perfil = $this->_request->getParam('co_perfil');
        
        if (! empty($co_perfil)) {
            
            try {
            
                                
                $objPerfil = PerfilPeer::retrieveByPK($co_perfil);
                
                if (! is_object($objPerfil))
                    throw new Exception("Não foi possível encontrar perfil com co_perfil = $co_perfil ");
                
                $objPerfil->delete();
                
                $this->_flashMessenger->addMessage(array(array('msg'=>'Perfil Removido com sucesso' ,'tipo'=>'success','view'=> 'sucesso')));
                
                                
            } catch(Exception $e) {
                
                                
                $this->_log->err($e->getTraceAsString());
                
                $this->_flashMessenger->addMessage(array(array('msg'=>'Não foi possível remover o perfil!' ,'tipo'=>'error','view'=> 'error')));
                
            }
            
        }
        
        $this->_redirect->direct('index');
        
        
    }
    
}