<?php


/**
 * Mensagem - Exibe Mensagem do Helper FlashMessenger na view
 * 
 * @package Base_View
 * @subpackage Helper
 * @author Márcio Moreira <marcio@marciomoreira.net>
 * @version $Id
 *   
 */

class Base_View_Helper_Mensagem extends Zend_View_Helper_Abstract {

    /**
     * Valor padrão para tipo de mensagem 
     */
    const DEFAULT_MSG = 'mensagem_info';

    /**
     * Tipos de Mensagens
     * @var array
     */
    protected $_messageKeys = array(
        'mensagem_info',
        'mensagem_error',
        'mensagem_success',
        'mensagem_warning',
        'mensagem_notice'
    );
    
    /**
     * Objeto Zend_Controller_Action_Helper_FlashMessenger
     * @var Zend_Controller_Action_Helper_FlashMessenger
     */
    protected $_flashMessenger = null;

    /**
     * Exibe mensagens do objeto Zend_Controller_Action_Helper_FlashMessenger
     * @param array $messages
     * @return void 
     */
    public function mensagem($messages = null) {
        
        if ($messages !== null) {
            return $this->_renderInjectedMessages($messages);
        }
        $this->_flashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger');

        foreach ($this->_messageKeys as $messageKey) {
            $messages = $this->_getMessages($messageKey);
            
            if ($messages) {
                
                echo $this->_renderMessage($messages, $messageKey);
                
            }
            unset($messages);
        }
    }

    protected function _renderInjectedMessages($messages) {
        if (!is_array($messages)) {
            return $this->_renderMessage((string) $messages, self::DEFAULT_MSG);
        }

        $return = '';
        foreach ($messages as $messageKey => $message) {
            $return .= $this->_renderMessage($message, $messageKey . '_message');
        }
        return $return;
    }

    protected function _getMessages($messageKey) {
        $result = array();
        $this->_flashMessenger->setNamespace($messageKey);

        if ($this->_flashMessenger->hasMessages()) {
            $result = $this->_flashMessenger->getMessages();            
        }
        
        // check view object
        if (isset($this->view->$messageKey)) {
            array_push($result, $this->view->$messageKey);
        }

        //add any messages from this request
        if ($this->_flashMessenger->hasCurrentMessages()) {
            $result = array_merge($result, $this->_flashMessenger->getCurrentMessages());
            //we don?t need to display them twice.
            $this->_flashMessenger->clearCurrentMessages();
        }
        return $result;
    }

    protected function _renderMessage($message, $name) {
        if (!is_array($message)) {
            $message = array($message);
        }        
        return "<ul class='system_messages'><li class='$name li_clean'><span class='ico'></span><strong class='system_title'>" . implode("</strong></li><li class='$name li_clean'><strong class='system_title'><span class='ico'></span>",$message) . "</strong></li></ul>";

    }

}