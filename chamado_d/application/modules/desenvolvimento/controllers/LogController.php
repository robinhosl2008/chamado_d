<?php

class Desenvolvimento_LogController extends Base_Controller_Action {
    
    public function indexAction() {
        
        $dh  = opendir(LOG_PATH);
        while (false !== ($filename = readdir($dh))) {
            if($filename != "." && $filename != ".."){
                $files[] = $filename;
            }
        }

        $this->view->aListFile = $files;
    }
    public function visualizarAction() {        
        
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        
      
        $arquivo = $this->_request->getParam('arquivo');
             
        if(is_file(LOG_PATH . "/" . $arquivo)){
            echo str_replace("\n","<br>",file_get_contents(LOG_PATH . "/" . $arquivo));
        }
   
        
    }
    
    
}