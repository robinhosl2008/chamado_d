<?php

class PerfilPeer extends BasePerfilPeer {

    private static $_idvalor = array("CoPerfil","NoPerfil");
    
    public static function getLista($criteria = null) {
        
        if (! $criteria instanceof Criteria)
            $criteria = new Criteria();
        
        return self::doSelect($criteria);
        
        
    }
    
    public static function __toArray($criteria = null) {
        
        $aObjeto = self::getLista($criteria);
        
        $aValor = array();
        
        foreach($aObjeto as $objeto) {
            
            $metodoid    = "get" . self::$_idvalor[0];
            $metodovalor = "get" . self::$_idvalor[1];
            
            if (! (method_exists($objeto, $metodoid) || method_exists($objeto, $metodovalor))) 
                throw new Exception("Não foi possível recupera IdValor de " . __CLASS__);
            
            $id     = $objeto->$metodoid();
            $valor  = $objeto->$metodovalor();
            
            $aValor[$id] = $valor;
            
        }
        
        return $aValor;
        
    }
    
    public static function setIdValor(array $idValor) {
        
        if (is_array($idValor))
            $this->_idvalor = $idValor;
        
    }
    
    public function getIdValor() {
        
        return $this->_idvalor;
        
    }
} // PerfilPeer
