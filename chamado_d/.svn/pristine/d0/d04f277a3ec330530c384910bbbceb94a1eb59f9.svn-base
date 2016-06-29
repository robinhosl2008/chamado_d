<?php


/**
 *  
 */

class Base_Config_Form extends Base_Config {
    
    public function __construct(string $filename = null) {
    
        $this->_filename = CONFIG_PATH . "/forms.yaml";
        
        if ($filename) {
            $this->_filename = $filename;
        }
        
        $this->openFileConfig();
        
    }
    
    
    /**
     * getFields() - Recupera campos de um formulário específico
     * 
     * @param string $idFormulario Rewcu
     */
    public function getFields($idFormulario) {
       
        if (! $this->_config[$idFormulario]) {
            
            throw new ErrorException("Formulário não identificado ($idFormulario)");
            
        }
        
        return $this->_config[$idFormulario]['fields'];
        
    }
    
    public function getProperties($idFormulario) {
        
        if (! $this->_config[$idFormulario]) {
            
            throw new Base_Exception("Formulário não identificado ($idFormulario)");
            
        }
        
        if (! $this->_config[$idFormulario]['properties']) {
            
            throw new Base_Exception("Propriedade do formulario nao identificado");
            
        }
        
        return $this->_config[$idFormulario]['properties'];
        
    }
    
}