<?php
/**
 * Description of Operador
 *
 * @author michaelis
 */
class Operador {

    const NIVEL_ACESSO_NAO_AUTENTICADO = 0;
    const NIVEL_ACESSO_ADMINISTRADOR = 1;
    const NIVEL_ACESSO_DGH = 2;
    const NIVEL_ACESSO_GESTOR_LOCAL = 3;
    const NIVEL_ACESSO_DIRECAO = 4;

    public static function login($usuario, $senha) {
        /*
        lista provisória de operadores
        estrutura:
        nome, senha, nivel de acesso, hospital relacionado
        */
        $operadores = array(
                array("admin", "admin" , Operador::NIVEL_ACESSO_ADMINISTRADOR, ""),
                array("direcao", "direcao" , Operador::NIVEL_ACESSO_DIRECAO, ""),
                array("dgh","dgh", Operador::NIVEL_ACESSO_DGH , "dgh"),
                array("hfl", "hfl" , Operador::NIVEL_ACESSO_GESTOR_LOCAL, "hfl"),
                array("hfi", "hfi" , Operador::NIVEL_ACESSO_GESTOR_LOCAL, "hfi"),
                array("hfse", "hfse" , Operador::NIVEL_ACESSO_GESTOR_LOCAL, "hfse"),
                array("hfb", "hfb" , Operador::NIVEL_ACESSO_GESTOR_LOCAL, "hfb"),
                array("hfcf", "hfcf" , Operador::NIVEL_ACESSO_GESTOR_LOCAL, "hfcf"),
                array("hfa", "hfa" , Operador::NIVEL_ACESSO_GESTOR_LOCAL, "hfa")
        );

        $operQnt = 0;
        foreach ($operadores as $opr) {
            if (($opr[0] == $usuario) && ($opr[1] == $senha)) {
                $_SESSION['usuario'] = $opr[0];
                $_SESSION['nivel_acesso'] = $opr[2];
                $_SESSION['hospital'] = $opr[3];
                $operQnt++;
            }
        }
        
        if($operQnt == 0){
            return false;
        }else{
            return true;
        }
    }

    public static function logout() {
        unset($_SESSION['usuario']);
        unset($_SESSION['nivel_acesso']);
        unset($_SESSION['hospital']);
    }

    public static function getNivelAcesso() {
        return isset($_SESSION['nivel_acesso'])?$_SESSION['nivel_acesso']:Operador::NIVEL_ACESSO_NAO_AUTENTICADO;
    }

    public static function getUsuario() {
        return isset($_SESSION['usuario'])?$_SESSION['usuario']:'';
    }

    public static function getHospital() {
        return isset($_SESSION['hospital'])?$_SESSION['hospital']:'';
    }


}
?>
