<?php

/**
  controller@no_controller=index|co_identificacao=C7|no_label=VisualHospub|ds_controller=Tela inicial do Visual Hospub.@
 */
class Default_IndexController extends Zend_Controller_Action {

    public function ini() {

    }

    public function indexAction() {

    }

    public function recuperacaoSenhaUsuarioAction(){

    }

    public function ajudaAction() {
	 $resultado = $this->_request->getParams();
	 $nome = $this->_request->getParam('nome');
	 #print "<pre>";
	 #echo $nome . "<br>";
	 #print_r($resultado);
	 #print "</pre>";
	 
	 $this->view->nome = $nome;
	 
	 
	 $aResultado = array('Fabio','Marcelo','Robson');
	 
	 $this->view->aResultado = $aResultado;
	 
    }
    public function acessoNegadoAction() {

    }
    
     public function unidadeAction(){
          
        $this->_helper->layout->disableLayout();
        
        $co_unidade = $this->_request->getParam('co_unidade');
        $aConexao = Base_Util_Relatorio::getConexao($co_unidade);
        
        $sqlUnit = "select sys002_unit_id,sys002_name from sys002_unit order by sys002_name";
        $params = array ('username'=>$aConexao['usuario'],'password'=>$aConexao['senha'],'dbname'=>$aConexao['conexao']);
        $db=Zend_Db::factory('Oracle', $params);
        
        $resultUnit = $db->query($sqlUnit);
        $this->view->aResult = $resultUnit->fetchAll();
        
        $no_all = $this->_request->getParam('no_all');
        $this->view->no_all = $no_all;
    }
     public function statusLeitoAction(){
          
        $this->_helper->layout->disableLayout();
        
        $co_unidade = $this->_request->getParam('co_unidade');
        $aConexao = Base_Util_Relatorio::getConexao($co_unidade);
        
        $sqlUnit = "SELECT 
DECODE (ADT010.ADT010_NEW_STATUS, 'O', 'OCUPADO','B','BLOQUEADO', 'L','LIVRE','R','RESERVADO') STATUS,
ADT010.ADT010_NEW_STATUS CO_STATUS 
FROM ADT010_BED_STATUS_CHANGE ADT010 
group by ADT010.ADT010_NEW_STATUS 
ORDER BY 2";
        $params = array ('username'=>$aConexao['usuario'],'password'=>$aConexao['senha'],'dbname'=>$aConexao['conexao']);
        $db=Zend_Db::factory('Oracle', $params);
        
        $resultUnit = $db->query($sqlUnit);
        $this->view->aResult = $resultUnit->fetchAll();
    }
    
    
     public function downloadCsvAction(){
          
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        
        $no_file = $this->_request->getParam('no_file');
        
        header("Content-type: text/csv");
        header("Cache-Control: no-store, no-cache");
        header('Content-Disposition: attachment; filename="'.PATH_RELATORIO_SAVE  . $no_file . "." . Zend_Session::getId() . ".csv".'"');
                
    }
    
    public function robsonAction()
    {
        $this->_helper->viewRenderer->setNoRender(true);
    }
}      