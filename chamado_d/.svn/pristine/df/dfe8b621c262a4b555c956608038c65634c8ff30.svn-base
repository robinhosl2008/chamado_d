<?php


class Base_Util_Db {
    public static function getDb($co_unidade = "",$co_conexao=""){
        
        
            $EasConexao = EasConexaoQuery::create();
                 
            if($co_unidade == ""){
                 $EasConexao->filterByCoCnes(CO_UNIDADE);
            }else{
                 $EasConexao->filterByCoCnes($co_unidade);
            }
            
            if($co_conexao == ""){
              $EasConexao->filterByStPrincipal(true);
            }else{
              $EasConexao->filterByCoConexao($co_conexao);
            }
            
            $oEasConexao = $EasConexao->findOne();
        
        $usuario = $oEasConexao->getNoUsuario();
        $password = $oEasConexao->getDsSenha();
        $ds_dsn = trim($oEasConexao->getDsDsn());
        $charset = $oEasConexao->getNoCharset();
   
        $params = array ('username'=>$usuario,
                        'password'=>$password,
                        'dbname'=>$ds_dsn,
                        'charset'=>$charset);
        
        $db=Zend_Db::factory('Oracle', $params);
                
        return $db;
    }
    
}

