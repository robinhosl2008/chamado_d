<?php



/**
 * Skeleton subclass for representing a row from the 'perfil' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.report
 */
class Perfil extends BasePerfil {
    public function getDsPerfilCrop($tamanho =15 ) {
        return Base_Util_String::crop(parent::getDsPerfil(), $tamanho);
    }
} // Perfil
