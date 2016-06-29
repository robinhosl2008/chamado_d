<?php



/**
 * Skeleton subclass for performing query and update operations on the 'projeto' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarefa
 */
class ProjetoPeer extends BaseProjetoPeer {

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

} // ProjetoPeer
