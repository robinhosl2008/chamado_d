<?php

class Base_Controller_Action_Helper_Mensagem extends Zend_Controller_Action_Helper_Abstract {
    
    protected $flashMessenger = null;
    
    public function mensagem($name='error', $message=null) {
        
        if ($name == 'error' && $message === null) {
            return $this;
        }
        
        if (!isset($this->_flashMessenger[$name])) {
            $this->_flashMessenger[$name] = $this->getActionController()
                                                 ->getHelper('FlashMessenger')
                                                 ->setNamespace($name);
        }
        if ($message !== null) {
            
            $message = $this->getActionController()->view->translate($message);
            $this->_flashMessenger[$name]->addMessage($message);
        }
        
        return $this->_flashMessenger[$name];
    }
 
    public function direct($name='error', $message=null) {
        return $this->mensagem($name,$message);
    }
    
}

?>
