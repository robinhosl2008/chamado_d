<?php

class Manutencao_RelatorioController extends Base_Controller_Action {

    public function ini() {

    }

    public function indexAction() {
        $oRelatorio = RelatorioQuery::create()->find();
        $this->view->relatorio = $oRelatorio;
    }
    public function adicionarAction(){
        $form = new Manutencao_Form_Relatorio();
        
         if ($this->_request->isPost()) {
            $formData = $this->_request->getPost();
            
                if ($form->isValid($formData)) {
                        echo 'success';
                        exit;
                } else {
                        $form->populate($formData);
                }
         }

         $this->view->form = $form;
           
    }
}
