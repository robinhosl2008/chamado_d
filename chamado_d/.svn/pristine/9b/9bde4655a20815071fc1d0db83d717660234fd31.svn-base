<?php


/**
 * Mensagem - Exibe Mensagem do Helper FlashMessenger na view
 * 
 * @package Base_View
 * @subpackage Helper
 * @author Márcio Moreira <marcio@marciomoreira.net>
 * @version $Id
 *   
 */

class Base_View_Helper_Relatorio extends Zend_View_Helper_Abstract {

    public function relatorio($co_menu = null,$tipo="combo") {
        
        $aListaRelatorio = RelatorioPeer::getListaRelatorio($co_menu);
        
        if(is_array($aListaRelatorio)){
            if($tipo == "combo"){
                $strRel = "<select name='codigo_relatorio'>";

                foreach($aListaRelatorio as $relatorio){
                    $strRel .= "<option value='".$relatorio['CoRelatorio']."'>" . $relatorio['NoRelatorio'] . "</option>";
                }

                $strRel .= "</select>";
                
            }
            
            if($tipo == "lista"){
                $strRel = "<ul>";
                foreach($aListaRelatorio as $relatorio){
                    $strRel .= "<li><a href='/".NO_MODULO."/".NO_CONTROLLER."/".$relatorio['DsAction']."/codigo_relatorio/".$relatorio['CoRelatorio']."'>". $relatorio['NoRelatorio'] . "</a></li>";
                }
                $strRel .= "</ul>";
            }
        }
        
        echo $strRel;
        
    }

}