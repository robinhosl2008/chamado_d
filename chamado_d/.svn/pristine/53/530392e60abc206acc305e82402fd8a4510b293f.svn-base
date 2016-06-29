<?php



/**
 * Skeleton subclass for representing a row from the 'usuario' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.report
 */
class Usuario extends BaseUsuario {

    public function getCoOrgao(){

        $aObjOrgao = OrgaoQuery::create()
            ->useRlUsuarioOrgaoQuery()
            ->filterByCoUsuario($this->getCoUsuario())
            ->filterByStRlUsuarioOrgao(true)
            ->endUse()
            ->findOne();

        return $aObjOrgao->getCoOrgao();
    }
} // Usuario
