<?php



/**
 * Skeleton subclass for performing query and update operations on the 'modulo' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.report
 */
class ModuloPeer extends BaseModuloPeer {

    public static function getModulos($pdo, $tipoBusca=null, $porNome=null, $porProjeto=null, $numLinhasSelect, $paginaAtual){
        $select = "SELECT tbmp.*, p.no_projeto FROM tb_modulo_projeto tbmp
                  INNER JOIN projeto p ON p.co_projeto = tbmp.co_projeto";

        switch ($tipoBusca) {
            case 1:
                $select .= " WHERE tbmp.no_modulo ILIKE '%$porNome%' ";
                break;
            case 2:
                $select .= " WHERE tbmp.co_projeto = $porProjeto ";
                break;
        }

        $stmt = $pdo->query($select);
        $dados = $stmt->fetchAll();

        $modulos = Zend_Paginator::factory($dados);
        $modulos->setItemCountPerPage($numLinhasSelect);
        $modulos->setCurrentPageNumber($paginaAtual);

        $oTotal = $modulos->getAdapter()->count();

        return array(0 => $modulos, 1 => $oTotal);
    }
} // ModuloPeer
