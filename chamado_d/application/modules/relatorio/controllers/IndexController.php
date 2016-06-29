<?php
/**
 * Created by PhpStorm.
 * User: robson
 * Date: 20/08/15
 * Time: 18:13
 */

class Relatorio_IndexController extends Zend_Controller_Action
{
    public function init() {
        $this->_log = Zend_Registry::get('log');
        $this->_pdo = Zend_Registry::get('pdo');
        $this->_fileLog = New Base_Util_FileLog();
        $this->view->request = $this->_request;

    }

    public function indexAction()
    {
        // Pega as informações vindas da view.
        $cod_projeto = $this->_request->getParam('cod_projeto',31);
        $cod_ambiente = $this->_request->getParam('cod_ambiente');
        $cod_orgao = $this->_request->getParam('cod_orgao');
        $anoPost = $this->_request->getParam('ano');

        // SQL para pegar os anos referentes aos relatórios existentes.
        $queryAno = "select to_char(t.dt_inicio,'YYYY') as ano,
                    count(*) as total
                    from tarefa as t
                    GROUP BY 1
                    ORDER BY 1 DESC ";
        $stmtAno = $this->_pdo->query($queryAno);
        $oAno = $stmtAno->fetchAll();

        // Pega os projetos para exibir no select na view.
        $projetos =  ProjetoQuery::create()
            ->groupByNoProjeto()
            ->groupByCoProjeto()
            ->orderByNoProjeto()
            ->useRlOrgaoProjetoQuery()
            ->filterByStOgaoProjeto(true)
            ->endUse()
            ->find();

        // Pega os órgãos onde os projetos estão instalados para exibir no select na view.
        $orgaos = OrgaoQuery::create()
            ->orderByNoOrgao()
            ->useRlOrgaoProjetoQuery()
            ->filterByCoProjeto($cod_projeto)
            ->endUse()
            ->find();

        // Usado para pegar o número da versão e exibir juntamente com o nome do ambiente.
        $sql = "select rlpva.*, a.no_ambiente, v.no_versao from rl_projeto_versao_amb AS rlpva
                  INNER JOIN ambiente as a ON a.co_ambiente = rlpva.co_ambiente
                  INNER JOIN versao AS v ON v.co_versao = rlpva.co_versao

                  WHERE rlpva.co_projeto = $cod_projeto
                  ORDER BY a.no_ambiente";

        $stmt = $this->_pdo->query($sql);
        $rlpva = $stmt->fetchAll();

        // Prepara os chamados com o status aberto.
        try {
            // SQL que pega os chamados abertos.
            $queryAberto = "select to_char(t.dt_inicio,'MM') as mes,
                to_char(t.dt_inicio,'DD') as dia,
                to_char(t.dt_inicio,'YYYY') as ano, co_projeto,
                count(*) as total from tarefa as t
                inner join rl_projeto_versao_amb as rlop on rlop.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                WHERE co_status = '1' and ";

            if($cod_orgao != "") {
                $queryAberto .= " co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $queryAberto .= " rlop.co_ambiente = '$cod_ambiente' and ";
            }

            $queryAberto .= " rlop.co_projeto = '$cod_projeto' and ";
            $queryAberto .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $queryAberto .= "GROUP BY 1,2,3,4 ORDER BY 1";

            // Prepara a query.
            $stmtAberto = $this->_pdo->query($queryAberto);

            // Pega os meses do ano selecionado e o total dos chamados abertos no mesmo
            // e separa por mês juntamente com seus totais.
            $aTotalAberto = array();
            foreach ($stmtAberto->fetchAll() as $Tarefa) {
                $aTotalAberto[(int)$Tarefa['mes']] = $Tarefa['total'];
            }

            // Prepara a lista de meses e seus totais por ano
            // para enviar para o gráfico na view.
            $strJqueryGraficoAbertoMes = "";
            for ($i = 1; $i <= 12; $i++) {
                if ($aTotalAberto[$i]) {
                    $strJqueryGraficoAbertoMes .= $aTotalAberto[$i] . ",";
                } else {
                    $strJqueryGraficoAbertoMes .= "0,";
                }
            }

            // Envia o resultado para ser exibido na view.
            $this->view->strJqueryGraficoAbertoMes = $strJqueryGraficoAbertoMes;
        }catch (Exception $e){
            echo $e->getMessage();
        }

        // Chamados com o status atribuido
        try {
            // SQL que pega os chamados atribuidos.
            $queryAtribuido = "select to_char(t.dt_inicio,'mm') as mes,
                to_char(t.dt_inicio,'YYYY') as ano, co_projeto,
                count(*) as total from tarefa as t
                inner join rl_projeto_versao_amb as rlop on rlop.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                WHERE co_status = '7' and ";

            if($cod_orgao != "") {
                $queryAtribuido .= " co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $queryAtribuido .= " rlop.co_ambiente = '$cod_ambiente' and ";
            }

            $queryAtribuido .= " rlop.co_projeto = '$cod_projeto' and ";
            $queryAtribuido .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $queryAtribuido .= "GROUP BY 1,2,3 ORDER BY 1";

            // Prepara a query para ser executada.
            $stmtAberto = $this->_pdo->query($queryAtribuido);

            // Pega os meses do ano selecionado e o total dos chamados
            // atribuidos no mesmo e separa por mês juntamente com seus totais.
            $aTotalAtribuido = array();
            foreach($stmtAberto->fetchAll() as $Tarefa){
                $aTotalAtribuido[(int) $Tarefa['mes']] = $Tarefa['total'];
            }

            // Prepara a lista de meses e seus totais por ano para
            // enviar para o gráfico na view.
            $strJqueryGraficoAtribuido = "";
            for($i=1;$i<=12;$i++) {
                if($aTotalAtribuido[$i]) {
                    $strJqueryGraficoAtribuido .= $aTotalAtribuido[$i] . ",";
                }else{
                    $strJqueryGraficoAtribuido .= "0,";
                }
            }

            // Envia o resultado para ser exibido na view.
            $this->view->strJqueryGraficoAtribuidoMes = $strJqueryGraficoAtribuido;

        }catch (Exception $e){
            echo $e->getMessage();
        }

        // Chamados com status em andamento
        try {
            // SQL que pega os chamados atribuidos.
            $queryEmAndamento = "select to_char(t.dt_inicio,'mm') as mes,
                to_char(t.dt_inicio,'YYYY') as ano, co_projeto,
                count(*) as total from tarefa as t
                inner join rl_projeto_versao_amb as rlop on rlop.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                WHERE co_status = 2 and ";

            if($cod_orgao != "") {
                $queryEmAndamento .= " co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $queryEmAndamento .= " rlop.co_ambiente = '$cod_ambiente' and ";
            }

            $queryEmAndamento .= " rlop.co_projeto = '$cod_projeto' and ";
            $queryEmAndamento .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $queryEmAndamento .= "GROUP BY 1,2,3 ORDER BY 1";

            // Prepara a query para ser executada.
            $stmtEmAndamento = $this->_pdo->query($queryEmAndamento);

            // Pega os meses do ano selecionado e o total dos chamados em
            // andamento no mesmo e separa por mês juntamente com seus totais.
            $aTotalEmAndamento = array();
            foreach($stmtEmAndamento->fetchAll() as $Tarefa){
                $aTotalEmAndamento[(int) $Tarefa['mes']] = $Tarefa['total'];
            }

            // Prepara a lista de meses e seus totais por ano para
            // enviar para o gráfico na view.
            $strJqueryGraficoEmAndamento = "";
            for($i=1;$i<=12;$i++) {
                if($aTotalEmAndamento[$i]) {
                    $strJqueryGraficoEmAndamento .= $aTotalEmAndamento[$i] . ",";
                }else{
                    $strJqueryGraficoEmAndamento .= "0,";
                }
            }

            // Envia o resultado para ser exibido na view.
            $this->view->strJqueryGraficoEmAndamentoMes = $strJqueryGraficoEmAndamento;
        }catch (Exception $e){
            echo $e->getMessage();
        }

        // Chamados com status em resolvido
        try {
            // SQL que pega os chamados resolvidos.
            $queryResolvido = "select to_char(t.dt_inicio,'mm') as mes,
                to_char(t.dt_inicio,'YYYY') as ano, co_projeto,
                count(*) as total from tarefa as t
                inner join rl_projeto_versao_amb as rlop on rlop.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                WHERE co_status = 8 and ";

            if($cod_orgao != "") {
                $queryResolvido .= " co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $queryResolvido .= " rlop.co_ambiente = '$cod_ambiente' and ";
            }

            $queryResolvido .= " rlop.co_projeto = '$cod_projeto' and ";
            $queryResolvido .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $queryResolvido .= "GROUP BY 1,2,3 ORDER BY 1";

            // Prepara a query para ser executada.
            $stmtResolvido = $this->_pdo->query($queryResolvido);

            // Pega os meses do ano selecionado e o total dos chamados resolvidos
            // no mesmo e separa por mês juntamente com seus totais.
            $aTotalResolvido = array();
            foreach($stmtResolvido->fetchAll() as $Tarefa){
                $aTotalResolvido[(int) $Tarefa['mes']] = $Tarefa['total'];
            }

            // Prepara a lista de meses e seus totais por ano para
            // enviar para o gráfico na view.
            $strJqueryGraficoResolvido = "";
            for($i=1;$i<=12;$i++) {
                if($aTotalResolvido[$i]) {
                    $strJqueryGraficoResolvido .= $aTotalResolvido[$i] . ",";
                }else{
                    $strJqueryGraficoResolvido .= "0,";
                }
            }

            // Envia o resultado para ser exibido na view.
            $this->view->strJqueryGraficoResolvidoMes = $strJqueryGraficoResolvido;
        }catch (Exception $e){
            echo $e->getMessage();
        }

        // Chamados com status em fechado
        try {
            // SQL que pega os chamados fechados.
            $queryFechado = "select to_char(t.dt_inicio,'mm') as mes,
                to_char(t.dt_inicio,'YYYY') as ano, co_projeto,
                count(*) as total from tarefa as t
                inner join rl_projeto_versao_amb as rlop on rlop.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                WHERE co_status = 5 and ";

            if($cod_orgao != "") {
                $queryFechado .= " co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $queryFechado .= " rlop.co_ambiente = '$cod_ambiente' and ";
            }

            $queryFechado .= " rlop.co_projeto = '$cod_projeto' and ";
            $queryFechado .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $queryFechado .= "GROUP BY 1,2,3 ORDER BY 1";

            // Prepara a query para ser executada.
            $stmtFechado = $this->_pdo->query($queryFechado);

            // Pega os meses do ano selecionado e o total dos chamados fechados
            // no mesmo e separa por mês juntamente com seus totais.
            $aTotalFechado = array();
            foreach($stmtFechado->fetchAll() as $Tarefa){
                $aTotalFechado[(int) $Tarefa['mes']] = $Tarefa['total'];
            }

            // Prepara a lista de meses e seus totais por ano para
            // enviar para o gráfico na view.
            $strJqueryGraficoFechado = "";
            for($i=1;$i<=12;$i++) {
                if($aTotalFechado[$i]) {
                    $strJqueryGraficoFechado .= $aTotalFechado[$i] . ",";
                }else{
                    $strJqueryGraficoFechado .= "0,";
                }
            }

            // Envia o resultado para ser exibido na view.
            $this->view->strJqueryGraficoFechadoMes = $strJqueryGraficoFechado;
        }catch (Exception $e){
            echo $e->getMessage();
        };

        // Totais
        try {
            $queryTotal = "select cast(to_char(t.dt_inicio,'mm') as int) as mes,
                to_char(t.dt_inicio,'YYYY') as ano, co_projeto,
                count(t.dt_inicio) as total from tarefa as t

                inner join rl_projeto_versao_amb as rlop on rlop.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb ";

            $queryTotal .= " where ";

            if(!empty($cod_orgao)){
                $queryTotal .= " co_orgao = '$cod_orgao' and ";
            }

            $queryTotal .= " co_projeto = '$cod_projeto' and ";
            $queryTotal .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";

            $queryTotal .= "GROUP BY 1,2,3 ORDER BY 1";

            // Prepara a query para ser executada.
            $stmtTotal = $this->_pdo->query($queryTotal);

            // Pega os meses do ano selecionado e o total.
            $totais = "";
            foreach($stmtTotal->fetchAll() as $total){
                $totais[(int) $total['mes']] = $total['total'];
            }

            // Select dos meses.
            $noMeses = array(
                "1" => "Janeiro",
                "2" => "Fevereiro",
                "3" => "Março",
                "4" => "Abril",
                "5" => "Maio",
                "6" => "Junho",
                "7" => "Julho",
                "8" => "Agosto",
                "9" => "Setembro",
                "10" => "Outubro",
                "11" => "Novembro",
                "12" => "Desembro",
            );

            // Prepara a lista de meses e seus totais por ano para
            // enviar para o gráfico na view.
            $strJqueryGraficoTotal = "";
            $somaTotais = "";
            for($i=1;$i<13;$i++) {
                if($totais[$i]) {
                    $strJqueryGraficoTotal .= "'$noMeses[$i]: $totais[$i]',";
                }else{
                    $strJqueryGraficoTotal .= "'$noMeses[$i]: 0',";
                }
                $somaTotais = $somaTotais + $totais[$i];
            }

            // Envia o resultado para ser exibido na view.
            $this->view->strJqueryGraficoTotalMes = $strJqueryGraficoTotal;
            $this->view->somaTotais = $somaTotais;
        } catch(Exception $e) {
            echo $e->getMessage();
        };


        $this->view->oAno = $oAno;
        //$this->view->oMes = $oMes;
        $this->view->anoPost = $anoPost;
        //$this->view->mesPost = $mesPost;
        $this->view->cod_projeto = $cod_projeto;
        $this->view->cod_ambiente = $cod_ambiente;
        $this->view->cod_orgao = $cod_orgao;
        $this->view->projetos = $projetos;
        $this->view->ambientes = $rlpva;
        $this->view->orgaos = $orgaos;
    }

    public function chamadoMesAction()
    {
        $cod_projeto = $this->_request->getParam('cod_projeto',31);
        $cod_ambiente = $this->_request->getParam('cod_ambiente');
        $cod_orgao = $this->_request->getParam('cod_orgao');
        $cod_status = $this->_request->getParam('status');
        $anoPost = $this->_request->getParam('ano');
        $mesPost = $this->_request->getParam('mes');

        // SQL dos anos.
        $queryAno = "select to_char(t.dt_inicio,'YYYY') as ano,
                    count(*) as total
                    from tarefa as t
                    GROUP BY 1
                    ORDER BY 1 DESC ";
        $stmtAno = $this->_pdo->query($queryAno);
        $oAno = $stmtAno->fetchAll();

        // Select dos meses.
        $noMeses = array(
            "1" => "Janeiro",
            "2" => "Fevereiro",
            "3" => "Março",
            "4" => "Abril",
            "5" => "Maio",
            "6" => "Junho",
            "7" => "Julho",
            "8" => "Agosto",
            "9" => "Setembro",
            "10" => "Outubro",
            "11" => "Novembro",
            "12" => "Desembro",
        );
        $this->view->noMeses = $noMeses;

        // Envia o nome do mês para o relatório.
        foreach($noMeses as $key => $value){
            if($key == $mesPost){
                $this->view->oMes = $value;
            }
        }

        // Quantidade de dias no mês selecionado.
        if($mesPost != 0){
            $numDias = cal_days_in_month(CAL_GREGORIAN, $mesPost, $anoPost);
            $diasNoMes = "";
            for($i=1;$i<=$numDias;$i++){
                $diasNoMes = $diasNoMes.$i.", ";
            }

            $this->view->diasNoMes = $diasNoMes;
        }else{
            $this->view->diasNoMes = 0;
        }

        // Select dos projetos.
        $projetos =  ProjetoQuery::create()
            ->groupByNoProjeto()
            ->groupByCoProjeto()
            ->orderByNoProjeto()
            ->useRlOrgaoProjetoQuery()
            ->filterByStOgaoProjeto(true)
            ->endUse()
            ->find();

        // Select dos ambientes.
        $ambientes = AmbienteQuery::create()
            ->orderByNoAmbiente()
            ->useRlProjetoVersaoAmbQuery()
            ->filterByCoProjeto($cod_projeto)
            ->endUse()
            ->find();

        // Select dos órgãos.
        $orgaos = OrgaoQuery::create()
            ->orderByNoOrgao()
            ->useRlOrgaoProjetoQuery()
            ->filterByCoProjeto($cod_projeto)
            ->endUse()
            ->find();

        // Select dos status.
        $status = StatusQuery::create()
            ->filterBySituacao('true')
            ->orderByNoStatus()
            ->find();

        // Quantidade de chamados no mês.
        try {
            // Prepara a query para pegar os chamados do mes
            $query = "select cast(to_char(t.dt_inicio,'DD') as int) as dia,
                count(*) as total
                from tarefa as t

                inner join rl_projeto_versao_amb as rlpva on rlpva.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb

                WHERE rlpva.co_projeto = '$cod_projeto' and
                cast(to_char(t.dt_inicio,'MM') as int) = '$mesPost' and";

            if(!empty($cod_orgao)) {
                $query .= " t.co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $query .= " rlpva.co_ambiente = '$cod_ambiente' and ";
            }

            if($cod_status){
                $query .= " t.co_status = '$cod_status' and ";
            }

            $query .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $query .= "GROUP BY 1 ORDER BY 1";

            // Prepara a query para ser executada.
            $stmt = $this->_pdo->query($query);

            // Prepara o total de cada dia encontrado.
            $oTotal = array();
            foreach ($stmt->fetchAll() as $Tarefa) {
                $oTotal[$Tarefa['dia']] = $Tarefa['total'];
            }

            // Prepara os dias e seus totais para cada dia do mês.
            $strJqueryGraficoMes = "";
            for ($i = 1; $i <= $numDias; $i++) {
                if ($oTotal[$i] != 0) {
                    $strJqueryGraficoMes .= $oTotal[$i] . ",";
                } else {
                    $strJqueryGraficoMes .= "0,";
                }
            }

            // Envia para a view os chamados do mes em seus respectivos dias.
            $this->view->strJqueryGraficoMes = $strJqueryGraficoMes;
        }catch (Exception $e){
            //echo $e->getMessage();
        }

        // Totais
        try {
            // Monta a query para pegar o total do mês.
            $queryTotal = "select cast(to_char(t.dt_inicio,'MM') as int) as mes,
                count(*) as total
                from tarefa as t

                inner join rl_projeto_versao_amb as rlpva on rlpva.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb";

            $queryTotal .= " where ";

            if(!empty($cod_orgao)) {
                $queryTotal .= " t.co_orgao = '$cod_orgao' and ";
            }

            if($cod_ambiente){
                $queryTotal .= " rlpva.co_ambiente = '$cod_ambiente' and ";
            }

            if($cod_status){
                $queryTotal .= " t.co_status = '$cod_status' and ";
            }

            $queryTotal .= " rlpva.co_projeto = '$cod_projeto' and ";
            $queryTotal .= " cast(to_char(t.dt_inicio,'MM') as int) = '$mesPost' and ";
            $queryTotal .= " to_char(t.dt_inicio,'YYYY') = '$anoPost' ";
            $queryTotal .= "GROUP BY 1 ORDER BY 1";

            // Prepara a query e executa.
            $stmtTotal = $this->_pdo->query($queryTotal);
            $somaTotais = $stmtTotal->fetchAll();

            // Envia o total do mês para a view.
            $this->view->totais = $somaTotais[0]['total'];
        } catch(Exception $e) {
            //echo $e->getMessage();
        };

        $this->view->status = $status;
        $this->view->oStatus = $cod_status;
        $this->view->oAno = $oAno;
        $this->view->anoPost = $anoPost;
        $this->view->mesPost = $mesPost;
        $this->view->cod_projeto = $cod_projeto;
        $this->view->cod_ambiente = $cod_ambiente;
        $this->view->cod_orgao = $cod_orgao;
        $this->view->cod_status = $cod_status;
        $this->view->projetos = $projetos;
        $this->view->ambientes = $ambientes;
        $this->view->orgaos = $orgaos;
    }

    public function chamadoOrgaoAction()
    {
        //$orgaos = OrgaoPeer::getRelatorioOrgao($this->_pdo);
        $orgaos = OrgaoQuery::create()->find();
        $tarefas = TarefaQuery::create()->find();

        $count = 0;
        $total = "";
        foreach($orgaos as $orgao){
            foreach($tarefas as $tarefa){
                if($orgao->getCoOrgao() == $tarefa->getCoOrgao()){
                    $count++;
                }
            }

            $result[] = array('sg_orgao'=>$orgao->getSgOrgao(),'no_orgao'=>$orgao->getNoOrgao(),'quantidade'=>$count);
            $total += $count;
            $count = 0;
        }

//        echo "<pre>";
//        print_r($total);
//        exit;

        $this->view->orgaos = $result;
        $this->view->total = $total;
    }

}



