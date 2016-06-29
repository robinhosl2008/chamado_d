<?php

class Manutencao_RotinaController extends Zend_Controller_Action {

    public function ini() {

    }

    /**
     * Enviar e-mails E-mails adicionais
     */
    public function enviarEmailAdicionais($emails, $noEmail, $txt, $assunto){
        if($emails){
            $emails_adicionais = explode(";", $emails);

            $this->enviarEmail(EMAIL_CHAMADO, $noEmail, $txt, $emails_adicionais, $assunto);
        }
    }

    public function enviarEmail($remetente, $noRemetente, $conteudo, $ArrDestinatario, $assunto){
        try {
            /**
            echo $remetente; echo "<br />";
            echo $noRemetente; echo "<br />";
            echo $conteudo; echo "<br />";
            print_r($ArrDestinatario); echo "<br />";
            echo $assunto; echo "<br />";

            exit;


             * Configuração para servidor local
             * smtp.datasus.net
             */

            /* $settings = array('ssl'=>'tls',
           'port'=>25,
           'auth' => 'login',
           'username' => 'marcelo.silva',
           'password' => 'marcelo3001'); */

            /**
             * Configuração para o servidor Desenv
             */
            $settings = array('port'=>25);
            $transport = new Zend_Mail_Transport_Smtp(SMTP,$settings);

            $email_from = EMAIL_CHAMADO;
            $name_from = NOME_EMAIL.$noRemetente;

            $mail = new Zend_Mail('UTF-8');
            $mail->setReplyTo($email_from, $name_from);
            $mail->setFrom ($email_from, $name_from);

            if(is_array($ArrDestinatario)){
                foreach ($ArrDestinatario as $email){
                    $mail->addTo ($email);
                }

            }

            $mail->setSubject ($assunto);
            //$mail->setBodyText ($conteudo);
            $mail->setBodyHtml($conteudo);

            $mail->send($transport);

        }  catch (Exception $e){
            //print_r($e);
            $this->_helper->mensagem('mensagem_warning',"Erro ao enviar e-mail." . $e->getMessage());
            $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
        }

    }

    public function avisoFechamentoTarefaAction() {
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        // Pega os chamados com status 'Resolvido'.
        $tarefas = TarefaQuery::create()
            ->filterByCoStatus(8)
            ->find();

        // Cria um array com o código dos chamados, números, o código do usuário que abriu e as datas o histórico dos mesmos.
        foreach($tarefas as $tarefa){
            //echo $tarefa->getCoTarefa();
            $co_tarefas[] = $tarefa->getCoTarefa();
            $nr_tarefa[] = $tarefa->getNrTarefa();
            $co_usuario_aberto[] = $tarefa->getCoUsuarioAberto();

            $historicos = HtTarefaQuery::create()
                ->filterByCoTarefa($tarefa->getCoTarefa())
                ->find();
        }

        // Pega as datas de atualização dos chamados com status 'Resolvido'.
        foreach($historicos as $historico){
            $data_atualizacao[] = $historico->getDtAtualizacao();
        }

        // Busca os usuários que abriram os chamados.
        foreach($co_usuario_aberto as $co_usuario){
            $usuario[] = UsuarioQuery::create()
                ->filterByCoUsuario($co_usuario)
                ->find();
        }

        // Pega os e-mails dos usuários.
        foreach($usuario as $oUsuario){
            $emails[] = $oUsuario[0]->getDsEmail();
        }

        // Conta a quantidade de e-mails.
        $total_emails = count($emails);

        // Testa para saber se veio algum e-mail.
        if(!empty($emails)){
            for($i = 0; $i < $total_emails; $i++){
                $data1 = explode(' ',$data_atualizacao[$i]);
                $data2 = date('d-m-Y');

                // Usa a função explode() para separar o dia, mês e ano.
                $array1 = explode('-', $data1[0]);

                // É definida a data 1.
                $ano1 = $array1[2];
                $mes1 = $array1[1];
                $dia1 = $array1[0];

                // Usa a função explode() para separar o dia, mês e ano.
                $array2 = explode('-', $data2);

                // É definida a data 2.
                $ano2 = $array2[2];
                $mes2 = $array2[1];
                $dia2 = $array2[0];

                // Calculo timestam das duas datas.
                $timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1);
                $timestamp2 = mktime(4,12,0,$mes2,$dia2,$ano2);

                // Diminuo uma data a outra.
                $segundos_diferenca = $timestamp1 - $timestamp2;

                // Converto segundos em dias.
                $dias_diferenca = $segundos_diferenca / (60 * 60 * 24);

                // Obtenho o valor absoluto dos dias (tiro o possível sinal negativo).
                $dias_diferenca = abs($dias_diferenca);

                // Tiro os decimais aos dias de diferenca.
                $dias_diferenca = floor($dias_diferenca);

                // Testa para saber se tem mais de 3 dias com o status 'Resolvido'.
                if($dias_diferenca > 3){
                    $titulo_email = "Chamado aguardando fechamento.";
                    $txt = "O sistema de chamados identificou que existe uma demanda (".$nr_tarefa[$i].") \n
                    aberta por você com o status 'Resolvido' e está aguardando para ser finalizada.\n
                    Clique <a href=".URL_HISTORICO.$nr_tarefa[$i]." style='color: blue'><em>aqui</em></a> para visualizar.\n\n
                    Caso a demanda não tenha sido resolvida, favor devolver e informar o erro na descrição.";
                    $this->enviarEmailAdicionais($emails[$i], $titulo_email, $txt, EMAIL_CHAMADO);
                }
            }
        }
    }
}
