<?php



/**
 * Skeleton subclass for representing a row from the 'tarefa' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarefa
 */
class Tarefa extends BaseTarefa {

    public function getNoUsuario(){
        if($this->getUsuarioTarefas()->count()){
            $oUsuarioTarefa = $this->getUsuarioTarefas();
            return $oUsuarioTarefa[0]->getUsuario()->getNoUsuario();
        }
    }
    public function getUsuarioTarefa(){
        $aUsuario = array();
        
        if($this->getUsuarioTarefas()->count()){            
            foreach($this->getUsuarioTarefas() as $oUsuario){
                $aUsuario[] = $oUsuario->getUsuario()->getNoUsuario();
            }
        }
        return $aUsuario;
       
    }
    
    public function getUsuarioTarefaFechada(){
        
        if($this->getUsuario()){
            return $this->getUsuario()->getNoUsuario();
        }
       
    }
    public function getNoController(){
        
        if($this->getController()){
            return $this->getController()->getNoController();
        }
       
    }
    public function getProjeto(){
        if($this->getRlProjetoVersaoAmb()->getProjeto()){
            return $this->getRlProjetoVersaoAmb()->getProjeto();
        }
    }
	
    public function getDescricao(){
    	if($this->getTbDescricaoChamados()->count()){
    		$oDescricaoChamado = $this->getTbDescricaoChamados();
    		return $oDescricaoChamado[0]->getDsChamado();
    	}
    	
    }
    
    
}
