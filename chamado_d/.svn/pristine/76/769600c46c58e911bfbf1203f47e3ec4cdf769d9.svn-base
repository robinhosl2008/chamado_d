<?php

class Base_Controller_Action extends Zend_Controller_Action {

    protected function showMessages() {

        if (! $this->_flashMessenger) {
            $this->_flashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger');
        }

        if ($this->_flashMessenger->setNamespace('msgRedirect')->hasMessages()) {
            $aMsgResult = array();
            foreach ($this->_flashMessenger->getMessages() as $aMsg) {
                $aMsgResult[] = $aMsg;
            }

            foreach ($aMsgResult as $Key => $aResul) {
                $txtMensagem .= $this->_objMensagem->msg($aResul[$Key]['tipo'], '', $aResul[$Key]['msg'], 'default');
                $this->view->$aResul[$Key]['view'] = $txtMensagem;
            }
        }
    }

}
