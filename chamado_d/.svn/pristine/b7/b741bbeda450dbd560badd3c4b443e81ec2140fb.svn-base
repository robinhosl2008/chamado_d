<?php

class Desenvolvimento_IndexController extends Base_Controller_Action {
    
    public function indexAction() {
       
    }
    
    public function relatorioProfissionalAction(){
        
        $co_unidade         = $this->_request->getParam('co_unidade');        
        $codigo_relatorio   = $this->_request->getParam('codigo_relatorio');       
        $is_csv   = $this->_request->getParam('is_csv');       
         
        $this->view->co_unidade       = $co_unidade;
        $this->view->codigo_relatorio = $codigo_relatorio;
        
        $dt_ini               = $this->_request->getParam('dt_ini');
        $dt_fim               = $this->_request->getParam('dt_fim');
        $co_especialidade     = $this->_request->getParam('co_especialidade');
        $co_tipo_profissional = $this->_request->getParam('co_tipo_profissional');
        
        $co_sexo              = $this->_request->getParam('co_sexo');
        $co_unit              = $this->_request->getParam('co_unit');
        $co_ativo_inativo              = $this->_request->getParam('co_ativo_inativo');

        
        $this->view->dt_ini = $dt_ini;
        $this->view->dt_fim = $dt_fim;
        $this->view->co_especialidade       = $co_especialidade;
        $this->view->co_tipo_profissional   = $co_tipo_profissional;
        $this->view->co_sexo = $co_sexo;
        $this->view->co_unit = $co_unit;
        $this->view->co_ativo_inativo = $co_ativo_inativo;
        
     
        /**
        *Pega relatorio e suas informaçoes 
        */
        #$aQuery = Base_Util_Relatorio::getQuery($codigo_relatorio);
        #$this->view->nome_relatorio = $aQuery['nome'];
        #$querysql = $aQuery['query'];
        #$querysql_totalizadora = $aQuery['query_totalizadora'];
        
        $aConexao = Base_Util_Relatorio::getConexao($co_unidade);
        
        if ($this->_request->isPost()) {
           
            try{
                
                $params = array ('username'=>$aConexao['usuario'],'password'=>$aConexao['senha'],'dbname'=>$aConexao['conexao'],'charset'=>$aConexao['charset']);
                $db=Zend_Db::factory('Oracle', $params);
                       
                
                if($co_ativo_inativo  != ""  || $co_tipo_profissional != "" || $co_especialidade != ""){
                    $where = " WHERE ";

                    if($co_ativo_inativo != ""){                    
                            if($co_ativo_inativo == "ATIVO"){
                                $where .= " sys009.sys009_enabled = 'T' ";
                            }
                            if($co_ativo_inativo == "INATIVO"){
                                $where .= " sys009.sys009_enabled = 'F' ";
                            }
                    }
                    if($co_ativo_inativo != "" && $co_tipo_profissional != ""){
                        $where .= " and ";
                    }
                    if($co_tipo_profissional != ""){                    
                        $where .= "  sys008.sys008_professional_type_id = $co_tipo_profissional ";                  
                    }

                    if($co_especialidade != ""){                       
                       # $where .= " and sys012.sys012_physician_spec_id = $co_especialidade ";                  
                    }
                }
                $querysql = str_replace("#FILTRO#", $where, $querysql);
                
             
                $querysql_totalizadora = str_replace("#FILTRO#", $where, $querysql_totalizadora);
                
                $result = $db->query($querysql);
                $this->view->aResult = $result->fetchAll();
                
       
                /**
                 *Grava query no log 
                 */                
                if(SYSTEM_DEBUG){
                    Base_Util_FileLog::write("Query: cadastro.profissional / Codigo Unidade ($co_unidade) / Codigo Reletorio ($codigo_relatorio) " . $querysql);
                }
                
                $db=Zend_Db::factory('Oracle', $params);
                $resultTotal = $db->query($querysql_totalizadora);
                $aResultTotal = $resultTotal->fetch();
                 /**
                 *Grava query no log 
                 */                
                if(SYSTEM_DEBUG){
                    Base_Util_FileLog::write("Query: cadastro.profissional / Codigo Unidade ($co_unidade) / Codigo Reletorio ($codigo_relatorio) " . $querysql_totalizadora);
                }
                $this->view->TOTAL = $aResultTotal['TOTAL'];
                
                $is_csv = true;
                
                if($is_csv){
                    
                    $aHeader = array('Nome','Sexo','Telefone','Telefone','Endereço','Número','Complemento',
                            'CEP','Nacionalidade','Num. Conselho','Conselho','CPF','Tipo Profissional','CNS',
                            'Especialidade','Ocupação','Usuário','Grupo de Acesso','Residente','Status');

                    Base_Util_Relatorio::getCsv("cadastro.profissional.$codigo_relatorio",$this->view->aResult,$aHeader);
                }
              
                
            }  catch (Exception $e){
                echo "<br> Erro: " . $e->getMessage();
            }
        }
    }    
}