<?php



/**
 * Skeleton subclass for representing a row from the 'controller' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarefa
 */
class Controller extends BaseController {
    public function getNoControllerModulo(){
        if($this->getModuloGerencia()){
            return $this->getNoController() . " - Módulo: " . $this->getModuloGerencia()->getNoModulo();
        }
    }
} // Controller
