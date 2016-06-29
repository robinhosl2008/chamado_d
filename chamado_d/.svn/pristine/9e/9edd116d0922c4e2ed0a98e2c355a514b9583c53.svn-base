<?php



/**
 * Skeleton subclass for performing query and update operations on the 'tarefa' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarefa
 */
class TarefaPeer extends BaseTarefaPeer {

    public static function getFiltroRodapeMeusChamadosAdm(
        $pdo,
        $co_usuario,
        $filtro,
        $num_por_pagina,
        $paginaAtual,
        $nrTarefa=null,
        $titulo=null,
        $novadata=null,
        $pr_chamado=null,
        $buscaStatus=null,
        $co_usuario_aberto=null,
        $orgao=null,
        $status=null,
        $pagination=null,
        $ordem=null,
        $pag_ordem=null)
    {
        if(explode(']',$titulo)){
            $no_resumo = explode(']',$titulo);
        }

        $select = "select DISTINCT t.*, tb_dc.ds_chamado, us.no_usuario, n.no_nivel,
                    cat.no_categoria, p.no_projeto, o.no_orgao from tarefa t


                    INNER JOIN ht_tarefa ht on ht.co_tarefa = t.co_tarefa
                    INNER JOIN usuario us on us.co_usuario = t.co_usuario_aberto
                    INNER JOIN rl_projeto_versao_amb rl_pva on rl_pva.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                    INNER JOIN projeto p on p.co_projeto = rl_pva.co_projeto
                    INNER JOIN nivel n on n.co_nivel = t.co_nivel
                    INNER JOIN categoria cat on cat.co_categoria = t.co_categoria
                    INNER JOIN tb_descricao_chamado tb_dc on tb_dc.dt_cadastro = t.dt_inicio
                    INNER JOIN orgao o on o.co_orgao = t.co_orgao


                    WHERE t.co_usuario_atualizacao = " . $co_usuario;
        if ($filtro != 'T') {
            $select .= " AND t.co_status = " . $filtro;
        }elseif(!empty($status) && $status != 'T'){
            $select .= " AND t.co_status = " . $status;
        }

        if($nrTarefa){
            $select .= " AND t.nr_tarefa = $nrTarefa";
        }

        if($titulo){
            $select .= " AND t.no_resumo LIKE '%".trim($no_resumo[1])."%'";
        }

        if($novadata){
            $select .= " AND t.dt_inicio between '$novadata 00:00:00' and '$novadata 23:59:59'";
        }

        if($pr_chamado){
            $select .= " AND t.co_prioridade = $pr_chamado";
        }

        if($buscaStatus){
            $select .= " AND t.co_status = $buscaStatus";
        }

        if($co_usuario_aberto){
            $select .= " AND t.co_usuario_aberto = $co_usuario_aberto";
        }

        if($orgao){
            $select .= " AND t.co_orgao = $orgao";
        }

        $select .= " ORDER BY co_prioridade DESC ";

        $stmt = $pdo->query($select);
        $dados = $stmt->fetchAll();

        return $dados;
    }

    public static function getMeusChamadosAdm(
        $pdo,
        $co_usuario,
        $filtro,
        $num_por_pagina,
        $paginaAtual,
        $nrTarefa=null,
        $titulo=null,
        $novadata=null,
        $pr_chamado=null,
        $buscaStatus=null,
        $co_usuario_aberto=null,
        $orgao=null,
        $status=null,
        $ordem=null,
        $pag_ordem=null)
    {
        if(explode(']',$titulo)){
            $no_resumo = explode(']',$titulo);
        }

        $select = "select DISTINCT t.*, tb_dc.ds_chamado, us.no_usuario, n.no_nivel,
                    cat.no_categoria, p.no_projeto, o.no_orgao from tarefa t


                    INNER JOIN ht_tarefa ht on ht.co_tarefa = t.co_tarefa
                    INNER JOIN usuario us on us.co_usuario = t.co_usuario_aberto
                    INNER JOIN rl_projeto_versao_amb rl_pva on rl_pva.co_seq_proj_ver_amb = t.co_seq_proj_ver_amb
                    INNER JOIN projeto p on p.co_projeto = rl_pva.co_projeto
                    INNER JOIN nivel n on n.co_nivel = t.co_nivel
                    INNER JOIN categoria cat on cat.co_categoria = t.co_categoria
                    INNER JOIN tb_descricao_chamado tb_dc on tb_dc.dt_cadastro = t.dt_inicio
                    INNER JOIN orgao o on o.co_orgao = t.co_orgao


                    WHERE t.co_usuario_atualizacao = " . $co_usuario;
        if ($filtro != 'T') {
            $select .= " AND t.co_status = " . $filtro;
        }elseif(!empty($status) && $status != 'T'){
            $select .= " AND t.co_status = " . $status;
        }

        if($nrTarefa){
            $select .= " AND t.nr_tarefa = $nrTarefa";
        }

        if($titulo){
            $select .= " AND t.no_resumo LIKE '%".trim($no_resumo[1])."%'";
        }

        if($novadata){
            $select .= " AND t.dt_inicio between '$novadata 00:00:00' and '$novadata 23:59:59'";
        }

        if($pr_chamado){
            $select .= " AND t.co_prioridade = $pr_chamado";
        }

        if($buscaStatus){
            $select .= " AND t.co_status = $buscaStatus";
        }

        if($co_usuario_aberto){
            $select .= " AND t.co_usuario_aberto = $co_usuario_aberto";
        }

        if($orgao){
            $select .= " AND t.co_orgao = $orgao";
        }

        $select .= " ORDER BY co_status ASC ";

        $stmt = $pdo->query($select);
        $dados = $stmt->fetchAll();

        $oTarefa = Zend_Paginator::factory($dados);
        $oTarefa->setItemCountPerPage($num_por_pagina);
        $oTarefa->setCurrentPageNumber($paginaAtual);

        $oTotal = $oTarefa->getAdapter()->count();

        return array(0=>$oTarefa, 1=>$oTotal);
    }

} // TarefaPeer
