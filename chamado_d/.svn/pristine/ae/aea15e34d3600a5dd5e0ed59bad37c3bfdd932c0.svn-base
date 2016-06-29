<?php

class Base_Auth_Acl {
    
 
    public $acl;
    
    public function __construct() {
        $this->acl = new Zend_Acl();
    }
    
    /**
     * Carrega Perfis
     */
    
    public function setRoles() {
        
        
        $aObjPerfil = PerfilQuery::create()->findByStPerfil(true);
        
        foreach($aObjPerfil as $objPerfil) { 
            $this->acl->addRole(new Zend_Acl_Role($objPerfil->getCoPerfil()));
        }

    }

    /**
     * Carrega Recursos
     */
    public function setResources() {

        $aObjRecurso = RecursoQuery::create()->find();
        
        foreach($aObjRecurso as $objRecurso) {
            $this->acl->add(new Zend_Acl_Resource($objRecurso->getDsRecurso()));
        }
        
    }

    
    /**
     * Varre permissoes para Perfis e acrecenta privilegio
     */
    public function setPrivilages() {
        
        $aObjPerfil = PerfilQuery::create()->findByStPerfil(true);
        
        if (count($aObjPerfil) == 0) {
            throw new ErrorException("Nenhum Perfil registrado no sistema", 0, LOG_EMERG);
        }
        
        $aObjPermissao = PermissaoQuery::create()
                                    ->findByStPermissao(true);
        
        foreach($aObjPermissao as $objPermissao) {            
            $this->acl->allow($objPermissao->getCoPerfil(), $objPermissao->getRecurso()->getDsRecurso());
        }
     
    }

    public function setAcl() {
        Zend_Registry::set("acl",$this->acl);
    }

}