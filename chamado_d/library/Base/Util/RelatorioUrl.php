<?
class Base_Util_RelatorioUrl {

	public static function getUrl($aObjRelatorio){
                $Url .= '<div class="quick-actions_homepage">';
                $Url .= '<ul class="quick-actions">';
             foreach($aObjRelatorio as $oRelatorio){ 
                    
                 $Url .= "<li><a href='";
                 
                 $Url .= "/" . strtolower($oRelatorio->getNoModulo() . 
                            '/' . NO_CONTROLLER . '/' . 
                            $oRelatorio->getNoAction()) . "/relatorio/" .$oRelatorio->getCoRelatorio();
                 
                 $Url .= "'>" . $oRelatorio->getNoRelatorio() . "";
               
                 $Url .= "</a>";    
                 $Url .= "</li>";
             } 
             $Url .= '</ul>';
             echo $Url;
        }
}