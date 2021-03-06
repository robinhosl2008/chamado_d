<?php

class Acesso_LoginController extends Zend_Controller_Action
{

    public function init()
    {
        $this->oLog = new Base_Util_FileLog();
    }

    public function indexAction()
    {
        $co_tarefa = $this->_request->getParam('co_tarefa');
        $this->view->co_tarefa = $co_tarefa;

        $o_co_tarefa = substr($co_tarefa, 4);

        if (Zend_Auth::getInstance()->getIdentity()) {

            $this->_redirect('/chamado/index/historico/co_tarefa/' . $o_co_tarefa);
        }
    }

    public function sairAction()
    {
        Zend_Auth::getInstance()->clearIdentity();

        $_SESSION = array();

        $this->_redirect('/');
    }

    public function autenticarAction()
    {

        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        if ($this->_request->isPost()) {

            $no_login = $this->_request->getParam('no_login');
            $ds_senha = $this->_request->getParam('ds_senha');
            $co_tarefa = $this->_request->getParam('co_tarefa');

            $usuario = UsuarioQuery::create()
                ->filterByDsLogin($no_login)
                ->filterByDsPassword($ds_senha)
                ->findOne();

            if (!empty($usuario)) {
                if ($usuario->getStUsuario() == false) {
                    $this->_helper->mensagem('mensagem_warning', 'Este usuário foi desativado!');

                    $this->_redirect('/acesso/login/index');
                    return false;
                }
            }

            $small_co_tarefa = substr($co_tarefa, -3);

            $auth = Zend_Auth::getInstance();

            $authAdapter = new Base_Auth_AuthAdapter($no_login, $ds_senha);

            $result = $auth->authenticate($authAdapter);

            if ($result->isValid()) {
                if (!$small_co_tarefa) {
                    $auth->getIdentity()->setDtUltimoLogin(date('Y-m-d H:i:s'));
                    $auth->getIdentity()->save();

                    $this->_redirect('/');
                } else {
                    $auth->getIdentity()->setDtUltimoLogin(date('Y-m-d H:i:s'));
                    $auth->getIdentity()->save();

                    $this->_redirect('/chamado/index/historico/tp_busca//co_tarefa/' . $small_co_tarefa . '/filtro/T/tipo_tarefa/1/num_tarefa/' . $co_tarefa . '/titulo//data//pag/index/index');
                }
                return true;
            } else {
                Zend_Auth::getInstance()->clearIdentity();
                $this->_helper->mensagem('mensagem_warning', MSG_USUARIO_SENHA_NAO_INFORMADO);

                $this->_redirect('/acesso/login/index');
                return false;
            }
        }
    }

    public function novaSenhaAction()
    {
        try{
            $solicitacao = $this->_request->getParam('solicitacao');
            $novaSenha = $this->_request->getParam('novaSenha');
            $confSenha = $this->_request->getParam('confSenha');

            if(($novaSenha != "")&&($confSenha != "")){
                if($novaSenha == $confSenha){
                    $senha_usuario = explode("_", $solicitacao, 2);
                    $senhaProvisoria = $senha_usuario[0];
                    $coUsuario = $senha_usuario[1];

                    $objUsuario = UsuarioQuery::create()
                        ->filterByCoUsuario($coUsuario)
                        ->findOne();

                    if($objUsuario->getDsPassword() == $senhaProvisoria){

                        $objUsuario->setDsPassword($novaSenha);
                        $objUsuario->save();

                        $msg = "Senha alterada com sucesso.";
                        $tipoAlerta = "success";
                        $oTipo = "Sucesso";
                    }
                }else{
                    $msg = "A senha informada para confirmação não é igual a nova senha.";
                    $tipoAlerta = "warning";
                    $oTipo = "Atenção";
                }
            }

            $this->view->sucesso = $oTipo;
            $this->view->msg = $msg;
            $this->view->oTipo = $oTipo;
            $this->view->tipoAlerta = $tipoAlerta;
            $this->view->novaSenha = $novaSenha;
            $this->view->senhaProvisoria = $senhaProvisoria;
            $this->view->solicitacao = $solicitacao;
        }catch (Exception $e){
            echo $e;
        }
    }

    /*
     * Recupera senha.
     */
    public function recuperarAction()
    {
        try {
            // Recupera o e-mail que vem da view;
            $email = $this->_request->getParam('email');

            // Verifica se o e-mail está vazio.
            if ($email != "") {
                // Se veio o e-mail, envia o mesmo para a função buscarUsuario() para buscar o usuário.
                $objUsuario = $this->buscarUsuario($email);

                // Verifica se o usuário foi encontrado no banco de dados.
                if ($objUsuario != "") {
                    // Verifica se o usuário está ativo.
                    if ($objUsuario->getStUsuario() == 1) {
                        // Se foi encontrado e está ativo, cria uma nova senha para o usuário usando a função criarNovaSenha().
                        $senha = $this->criarNovaSenha();

                        // Salva a nova senha para o usuário.
                        $this->salvaNovaSenha($objUsuario, $senha);

                        // Envia um e-mail para o usuário com o link de recuperação de senha.
                        $this->email($objUsuario, $senha);

                        $this->view->tipoAlerta = "success";
                        $this->view->msg = "Processo de recuperação de senha executado. Verifique seu e-mail para concluir a recuperação de senha!";
                    } else {
                        $this->view->tipoAlerta = "danger";
                        $this->view->msg = "Usuario encontrado, mas a recuperação de senha não está disponível para
                        o mesmo pois encontra-se desativado. Entre em contato com o seu gestor para mais detalhes.";
                    }
                }else{
                    $this->view->tipoAlerta = "warning";
                    $this->view->msg = "Usuário não encontrado, verifique o e-mail informado.";
                }
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    /*
     * Busca usuário
     */
    public function buscarUsuario($email)
    {
        try {
            // Busca pelo único usuário no banco de dados.
            $objUsuario = UsuarioQuery::create()->filterByDsEmail($email)->findOne();

            // Retorna o usuário para recuperarAction().
            return $objUsuario;
        } catch (Exception $e) {
            echo $e;
        }
    }

    /*
     * Cria nova senha.
     */
    public function criarNovaSenha()
    {
        try {
            // Esse bloco de código cria uma nova senha para o arquivo.
            mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $senha = substr($charid, 0, 20);

            // Retorna a senha para recuperarAction().
            return $senha;
        } catch (Exception $e) {
            echo $e;
        }
    }

    /*
     * Salva nova senha.
     */
    public function salvaNovaSenha($objUsuario, $senha)
    {
        try {
            // Altera a senha do usuário e salva no banco de dados.
            $objUsuario->setDsPassword("$senha");
            $objUsuario->save();
        } catch (Exception $e) {
            echo $e;
        }
    }

    /*
     * Envia e-mail.
     */
    public function email($objUsuario, $senha)
    {
        $html = "<div style='padding: 10px 10px 10px 10px; height: 600px; width: 400px; background-color: lightgreen; box-shadow: darkgreen 10px 10px 8px; text-align: center'>
            <h2>Você solicitou a recuperação de
            <br />
            senha do sistema</h2>
            <br />
            <h1>e-SUS Chamado</h1>
            <br />
            <br />
            <h4>Para concluir a recuperação de sua senha, clique no link abaixo!</h4>
            <br />
            <div style='width: 100%; padding: 10px 0px 10px 0px; background-color: yellow'>
                <h5><a href='http://suporte-esus.datasus.gov.br/acesso/login/nova-senha/solicitacao/".$senha."_".$objUsuario->getCoUsuario()."'>
                http://suporte-esus.datasus.gov.br/acesso/login/nova-senha/solicitacao/".$senha."_".$objUsuario->getCoUsuario()."</a></h5>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <div>
                <h6>E-mail do suporte e-sus: suporteesushospitalar@saude.gov.br</h6>
            </div>
            </div>";
//echo $html; exit;
        $texto = "Você solicitou a recuperação de senha do sistema e-SUS Chamado.<br /><br /><br />
                Para concluir a recuperação de sua senha, clique no link abaixo!<br /><br />
                <a href='http://suporte-esus.datasus.gov.br/acesso/login/nova-senha/solicitacao/".$senha."_".$objUsuario->getCoUsuario()."'>
                http://suporte-esus.datasus.gov.br/acesso/login/nova-senha/solicitacao/".$senha."_".$objUsuario->getCoUsuario()."</a>";
//echo $texto; exit;
        try {
            $settings = array('port'=>25);
            $transport = new Zend_Mail_Transport_Smtp(SMTP,$settings);

            $mail = new Zend_Mail('UTF-8');
            $mail->setBodyText($texto); // Conteúdo em texto
            $mail->setBodyHTML($html); // Conteúdo em HTML
            $mail->setSubject('Recuperação de senha'); // Assunto
            $mail->setFrom(EMAIL_CHAMADO, TITULO_SISTEMA); // Remetente
            $mail->addTo($objUsuario->getDsEmail(), $objUsuario->getNoUsuario()); // Destinatário
//            echo "<pre>";
//            print_r($mail);
//            exit;
            $mail->send($transport);
        } catch (Exception $e) {
            echo $e;
        }
    }
}