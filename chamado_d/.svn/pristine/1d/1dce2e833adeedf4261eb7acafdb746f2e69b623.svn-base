<?php



/**
 * Skeleton subclass for performing query and update operations on the 'orgao' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarefa
 */
class OrgaoPeer extends BaseOrgaoPeer {

    public static function getRelatorioOrgao(){

    }

    public static function getOrgao($pdo, $tipo_busca, $por_orgao, $por_sigla, $numLinhasSelect, $paginaAtual){

        $select = "SELECT o.* FROM orgao o ";

        switch($tipo_busca){
            case 1:
                $select .= "WHERE o.no_orgao ILIKE '%$por_orgao%' ";
            break;
            case 2:
                $select .= "WHERE o.sg_orgao ILIKE '%$por_sigla%' ";
            break;
        }

        //$select .= " ORDER BY o.no_orgao";

        $stmt = $pdo->query($select);
        $dados = $stmt->fetchAll();

        $orgaos = Zend_Paginator::factory($dados);
        $orgaos->setItemCountPerPage($numLinhasSelect);
        $orgaos->setCurrentPageNumber($paginaAtual);

        $oTotal = $orgaos->getAdapter()->count();

        return array(0 => $orgaos, 1 => $oTotal);
    }
} // OrgaoPeer
