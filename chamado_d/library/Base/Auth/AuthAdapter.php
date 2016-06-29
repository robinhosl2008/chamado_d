<?php

class Base_Auth_AuthAdapter implements Zend_Auth_Adapter_Interface
{
    private $login;
    private $password;
   

    public function __construct( $login, $password )
    {
        $this->login 	= $login;
        $this->password = $password;
        
        $this->oLog = new Base_Util_FileLog();
    }

    public function authenticate() {

    	//Verifica Usuario / Senha para autenticacao
        $oUsuario = UsuarioQuery::create()
                                ->filterByDsLogin($this->login)
                                ->filterByDsPassword($this->password)
                                ->findOne();
        
        if( $oUsuario ) {
            //ACHOU NO POSTGRES CONTINUA PROCESSO DE LOGIN
            $code = Zend_Auth_Result::SUCCESS;
            $identity = $oUsuario;
            $this->oLog->write('Usuário Logado com sucesso (' . $oUsuario->getNoUsuario() . ")");
        }else{
            $this->oLog->write('Erro de autenticacao');
            $code = Zend_Auth_Result::FAILURE;
            $identity = null;
        }

        
        return new Zend_Auth_Result( $code, $identity );
    }
}