<?php

/**
 * Classe Form
 * 
 * 
 * 
 */
class Base_Util_Menu{


    public function __construct() {

    }
    public static function getHtmlMenu(){
        $request = Zend_Controller_Front::getInstance()->getRequest();
        
        $modulo =  $request->getModuleName();
        $action =  $request->getActionName();
        $controller =  $request->getControllerName();

        $strMenu ="<ul>";
        
        $strMenu .="<li style='display:none;'>";
            $strMenu .= "<div>";
                $strMenu .= "<div>";
                    $strMenu .= "<ul>";
                    $strMenu .= "</ul>";
                $strMenu .= "</div>";
            $strMenu .= "</div>";
        $strMenu .= "</li>";
        
        $strMenu .= '<li id="li1" class="navAzul menuPrincipal">';
            $strMenu .= '<a class="menu" href="/" title="Cidadão">Principal</a>';
            if($modulo == "default"){
                $strMenu .= '<div id="aba1"  class="on">';
                    $strMenu .= '<div class="navAzulbg submenu">';
                        $strMenu .= '<ul>';
    //                        $strMenu .= '<li><a href="/" title="Principal">Principal</a> </li>';
                        $strMenu .= '</ul>';
                    $strMenu .= '</div>';
                $strMenu .= '</div>';
            }
        $strMenu .= '</li>';
        
        if (IS_LOGADO) {
        
            $strMenu .= '<li id="li2" class="navVermelho menuPrincipal">';
                $strMenu .= '<a class="menu" href="/consulta" title="Consultas">Consultas</a>';
                 $strMenu .= '<div id="aba2" class="on">';
                    if($modulo == "consulta"){                   
                            $strMenu .= '<div class="navVermelhobg submenu">';
                                $strMenu .= '<ul>';

                                if (CO_PERFIL == 3) { 
                                    $strMenu .= '<li><a href="/consulta/indicador" title="">Indicadores</a> </li>';
                                }else{
                                    $strMenu .= '<li><a href="/consulta/cadastro" title="">Cadastro</a> </li>';
                                    $strMenu .= '<li><a href="/consulta/internacao" title="">Internação</a> </li>';
                                    $strMenu .= '<li><a href="/consulta/cirurgia" title="">Cirurgia</a> </li>';
                                    $strMenu .= '<li><a href="/consulta/ambulatorio" title="">Informações Ambulatoriais</a> </li>';
                                    $strMenu .= '<li><a href="/consulta/indicador" title="">Indicadores</a> </li>';
                                    $strMenu .= '<li><a href="/consulta/custo" title="">Custos</a> </li>';                            
                                }

                            $strMenu .= '</ul>';
                        $strMenu .= '</div>';
                }
                $strMenu .= '</div>';
            $strMenu .= '</li>';
        
        }
        
        $strMenu .= '</ul>';


        echo $strMenu;

    }

}