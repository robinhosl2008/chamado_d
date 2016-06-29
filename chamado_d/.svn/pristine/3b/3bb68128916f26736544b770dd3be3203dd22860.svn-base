<?php

class Base_Plugins_Log extends Zend_Controller_Plugin_Abstract {

    public function preDispatch(Zend_Controller_Request_Abstract $request) {

        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        $viewRenderer->initView();
        $view = $viewRenderer->view;
        $front = Zend_Controller_Front::getInstance();

        /* Initialize action controller here */
        $action = $request->getActionName();
        $controller = $request->getControllerName();
        $module = $request->getModuleName();

        $view->baseUrl = "/" . $module . "/" . $controller;
        $view->controller = $controller;
        $view->module = $module;
        $view->action = $action;
        
        $oLog = new Base_Util_FileLog();
        Zend_Registry::set('log', $oLog);


    }
        

}
