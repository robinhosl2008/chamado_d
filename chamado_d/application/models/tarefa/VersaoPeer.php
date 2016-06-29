<?php



/**
 * Skeleton subclass for performing query and update operations on the 'versao' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarefa
 */
class VersaoPeer extends BaseVersaoPeer {
    public static function getVersao($pdo, $tipoBusca, $porNome, $porTipo, $porProjeto, $paginaAtual, $numLinhasSelect){

//        echo "Tipo de busca: ".$tipoBusca; echo "<br />";
//        echo "Por nome: ".$porNome; echo "<br />";
//        echo "Por Tipo: ".$porTipo; echo "<br />";
//        echo "Por Projeto: ".$porProjeto; echo "<br />";

        $select = "SELECT v.*,p.no_projeto,tv.no_tipo_versao FROM versao v
                INNER JOIN projeto p ON p.co_projeto = v.co_projeto
                INNER JOIN tb_tipo_versao tv ON tv.co_seq_tipo_versao = v.co_seq_tipo_versao
                WHERE v.st_versao = TRUE ";

        switch($tipoBusca){
            case 1:
                $select .= " AND v.no_versao ILIKE '%$porNome%' ";
                break;
            case 2:
                $select .= " AND v.co_seq_tipo_versao = '$porTipo' ";
                break;
            case 3:
                $select .= " AND p.co_projeto = '$porProjeto' ";
                break;
        }

        $select .= " ORDER BY p.no_projeto";
//echo $select; exit;
        $stmt = $pdo->query($select);
        $dados = $stmt->fetchAll();

        $versoes = Zend_Paginator::factory($dados);
        $versoes->setItemCountPerPage($numLinhasSelect);
        $versoes->setCurrentPageNumber($paginaAtual);


        return $versoes;
    }

    public static function getProjetos($pdo){
        $select = "SELECT DISTINCT p.no_projeto,p.co_projeto FROM projeto p
            INNER JOIN rl_projeto_versao_amb rlpva ON p.co_projeto = rlpva.co_projeto
            INNER JOIN versao v ON p.co_projeto = v.co_projeto
            WHERE rlpva.st_proj_ver_amb = TRUE
            AND v.st_versao = TRUE
            ORDER BY p.no_projeto";

        $stmt = $pdo->query($select);
        $dados = $stmt->fetchAll();

        return $dados;
    }
} // VersaoPeer
