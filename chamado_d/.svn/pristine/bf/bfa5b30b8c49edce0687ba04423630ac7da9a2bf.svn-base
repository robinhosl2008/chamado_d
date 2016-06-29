<?php
/**
controller@no_controller=error|co_identificacao=C6|no_label=Erros|ds_controller=Exibe erros do Sistema para Usuário@
*/
class Default_ErrorController extends Zend_Controller_Action {

    
    public function init() {        
        $this->_flashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger');
//        $this->_objMensagem = new VisualHospub_Util_Mensagem();
    }

    /**
      action=@no_action=error|co_identificacao=C6.A1|no_label=Erro do Sistema|ds_action=Erro do Sistema.@
     */
    public function errorAction() {
        
        define('CLASSE_PROPEL_EXCEPTION', 'PropelException');
        $aPrioridade = array(0, 1, 2, 3, 4, 5, 6, 7);

        $errors = $this->_getParam('error_handler');
        
        Base_Util_FileLog::write("URL: " . $errors->request->module.
                                        "/".$errors->request->controller.
                                        "/".$errors->request->action . 
                                        " - Msg:" . 
                                    $errors->exception->getMessage());
        
        $this->view->exception     = $errors->exception->getMessage();
        $this->view->module        = $errors->request->module;
        $this->view->controller    = $errors->request->controller;
        $this->view->action        = $errors->request->action;
        $this->view->TraceAsString = $errors->exception->getTraceAsString();

        /*
         *  EMERG   = 0;  // Emergency: system is unusable
          ALERT   = 1;  // Alert: action must be taken immediately
          CRIT    = 2;  // Critical: critical conditions
          ERR     = 3;  // Error: error conditions
          WARN    = 4;  // Warning: warning conditions
          NOTICE  = 5;  // Notice: normal but significant condition
          INFO    = 6;  // Informational: informational messages
          DEBUG   = 7;  // Debug: debug messages
         */
/*
        $aParam = array(
            'nu_linha' => $errors->exception->getLine(),
            'ds_script' => $errors->exception->getFile(),
            'ds_debug_info' => $errors->exception->getTraceAsString(),
            'ds_uri' => $errors->request->getRequestUri(),
            'nu_erro' => $errors->exception->getCode()
        );        
        
       //GERA LOGS DIVEROSS NO SISTEMA DE BANCO E DE ARQUIVO
        if (!method_exists($errors->exception, getSeverity)) {
          
            if (get_class($errors->exception) == CLASSE_PROPEL_EXCEPTION) {
                
                $this->view->exception = " ERRO NO SISTEMA EXCEPTION (" . get_class($errors->exception) . ") <br>" . $errors->exception->getMessage();
               
                Base_Util_Sislog::write("EXCEPTION (" . get_class($errors->exception) . ") " . $errors->exception->getMessage() . " LINE: " . $errors->exception->getLine() . " FILE: " . $errors->exception->getFile() ,LOG_EMERG);
                
            } else {
//                $this->_log->log($errors->exception->getMessage(), LOG_EMERG, $aParam);
                Base_Util_Sislog::write("EXCEPTION (" . get_class($errors->exception) . ") " . $errors->exception->getMessage(),LOG_EMERG);
                $this->view->exception = " ERRO NO SISTEMA EXCEPTION (" . get_class($errors->exception) . ") <br>" . $errors->exception->getMessage();
            }
        } else {
            if (in_array($errors->exception->getSeverity(), $aPrioridade)) {
                Base_Util_Sislog::write("EXCEPTION (" . get_class($errors->exception) . ") " . $errors->exception->getMessage(),$errors->exception->getSeverity());
            } else {
                Base_Util_Sislog::write("EXCEPTION (" . get_class($errors->exception) . ") " . $errors->exception->getMessage(),LOG_EMERG);
            }
        }

        
        //GERA TELA DE ERRO
        switch ($errors->type) {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                // 404 error -- controller or action not found
                $this->getResponse()->setRawHeader('HTTP/1.1 404 Not Found');
                $this->render('404');

                if (APPLICATION_ENV == "development"):
                    //$this->_helper->layout()->disableLayout();
                endif;
                // ... get some output to display...
                break;
            default:
                if ($this->_flashMessenger->setNamespace('msgErro')->hasMessages()) {
                $aMsgResult = array();
                foreach ($this->_flashMessenger->getMessages() as $aMsg)
                    $aMsgResult[] = $aMsg;
                foreach ($aMsgResult as $Key => $aResul) {
                    $txtMensagem .= $aResul[$Key]['msg'] . "<br>";
                    $this->view->$aResul[$Key]['view'] = $txtMensagem;
                }
            }
            
                $this->render('500');
                // application error; display error page, but don't change
                // status code
                break;
        }
 * 
 */
    }

  

}

