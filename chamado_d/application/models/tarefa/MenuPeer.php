<?php



/**
 * Skeleton subclass for performing query and update operations on the 'menu' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.report
 */
class MenuPeer extends BaseMenuPeer {

     public static function getMenu($url="") {
        $fileLog = New Base_Util_FileLog();

        if ($url == "") {
            throw new Excpetion("Url vazia.");
        }
        
        $oMenu = MenuQuery::create()->filterByDsUrl($url)->findOne(); 
        if($oMenu){
            return $oMenu->getCoMenu();
        }else{
            return 1;
        }
     }
    /**
     * gerarMenu: Gera o menu de acordo com as permissões do Usuário Autenticado 
     * @return string
     */
    public static function getHtmlMenu() {
        $fileLog = New Base_Util_FileLog();

        if (!defined("CO_PERFIL")) {
            throw new Excpetion("CO_PERFIL não foi definido no Bootstrap.");
        }
        if(IS_LOGADO){
            

            $oAcl = Zend_Registry::get('acl');

            $request = Zend_Controller_Front::getInstance()->getRequest();

            $aObjMenu = MenuQuery::create()
                    ->filterByStAtivo(true)
                    ->orderByNuOrdem()
                    ->find();

            

            $moduloSelecionado = $request->getModuleName();
            $actionSelecionado = $request->getActionName();

            if ($moduloSelecionado == "default") {
                $moduloSelecionado = "default";
            }

            $aMenu = array();

            $htmlMenu = '';


            if (count($aObjMenu) > 0 && $oAcl->hasRole(CO_PERFIL)) {
                foreach ($aObjMenu as $objMenu) {
                    
                    
                    $fileLog->write("PERFIL:" . CO_PERFIL . " - " .
                            $oAcl->has($objMenu->getDsUrl()) . " - " . 
                            $oAcl->isAllowed(CO_PERFIL, $objMenu->getDsUrl())
                            .  " - MENU " . $objMenu->getNoModulo() . " - " 
                            . $objMenu->getDsUrl());
                    
                    if ($oAcl->has($objMenu->getDsUrl()) && 
                            $oAcl->isAllowed(CO_PERFIL, $objMenu->getDsUrl())) {
                        
                            if(!$objMenu->getStNaoExibir()){
                                $aMenuSub[$objMenu->getNoModulo()][] = array(
                                    "label" => $objMenu->getNoExibicao(),
                                    "title" => $objMenu->getDsTooltip(),
                                    "uri" => $objMenu->getDsUrl(),
                                );
                            }
                                $aMenu[$objMenu->getNoModulo()]['label'] = $objMenu->getModulo()->getNoExibicao();
                                $aMenu[$objMenu->getNoModulo()]['ordem'] = $objMenu->getModulo()->getNuOrdem();
                                $aMenu[$objMenu->getNoModulo()]['icon'] = $objMenu->getModulo()->getNoIcon();
                            
                    }
                }

                /*
                 * Lista de Modulos do Sistemas
                 */

                $htmlMenu .= "<ul class='nav'>";
                
                foreach ($aMenu as $modulo => $menu) {
                    if(is_array($aMenuSub[$modulo])){
                        $classeLi = 'dropdown'; 
                        $classeA = 'dropdown-toggle'; 
                        $dataToggle = 'data-toggle="dropdown"';
                    }else{
                        $classeLi = ''; 
                        $classeA = ''; 
                        $dataToggle = '';
                    }
                    if (strtolower($moduloSelecionado) == strtolower($modulo)) {
                        $classeSel = 'active';
                    }else{
                        $classeSel = '';
                    }
                    
                    $htmlMenu .= "<li class='$classeSel $classeLi' id='li1' >";
                    $htmlMenu .= "<a href='/".strtolower($modulo)."/index' $dataToggle class='$classeA'>";
                    $htmlMenu .= "<i class='icon ".$menu['icon']."'></i> <span>". ucfirst(strtolower($menu['label']))."</span>";
                    $htmlMenu .= "</a>";
                    
            
                    if(is_array($aMenuSub[$modulo])){
                        $htmlMenu .= "<ul class=\"dropdown-menu\">";
                        foreach ($aMenuSub[$modulo] as $aSubmenu) {
                            $htmlMenu .= "<li>";
                            $htmlMenu .= "<a href='". strtolower($aSubmenu['uri'])."'>";
                            $htmlMenu .= ucfirst(strtolower($aSubmenu['label']));  
                            $htmlMenu .= "</a>";
                            $htmlMenu .= "</li>\n";
                        }
                        $htmlMenu .= "</ul>"; 
                    }
                    $htmlMenu .= "</li>\n";
                    $aba++;
                     
                }
            }
            
                  
            $htmlMenu .= '</li>';
            $htmlMenu .= '<li>';
            $htmlMenu .= '<a href="/chamado/index/sobre" title="Sobre"><i class="icon-leaf"></i> Sobre </a>';
            $htmlMenu .= '</li>';
            /*$htmlMenu .= '<li>';
            $htmlMenu .= '<a href="#contato" title="Contato"><i class="icon-envelope"></i> Contato </a>';
            $htmlMenu .= '</li>';*/

            $htmlMenu .= "</ul>";

            return $htmlMenu;
        
        }
    }
    
      public static function getHtmlMenux() {
        $request = Zend_Controller_Front::getInstance()->getRequest();

        $modulo = $request->getModuleName();
        $action = $request->getActionName();
        $controller = $request->getControllerName();

        $strMenu = '<ul class="nav">';

        $strMenu .="<li style='display:none;'>";
        $strMenu .= "<div>";
        $strMenu .= "<div>";
        $strMenu .= "<ul>";
        $strMenu .= "</ul>";
        $strMenu .= "</div>";
        $strMenu .= "</div>";
        $strMenu .= "</li>";

        $strMenu .= '<li id="li1" class="active">';
        $strMenu .= '<a href="/" title="Principal"><i class="icon-home"></i> Principal </a>';
        if ($modulo == "default") {
            $strMenu .= '<div id="aba1"  class="on">';
            $strMenu .= '<div class="navAzulbg submenu">';
            $strMenu .= '<ul>';
            //                        $strMenu .= '<li><a href="/" title="Principal">Principal</a> </li>';
            $strMenu .= '</ul>';
            $strMenu .= '</div>';
            $strMenu .= '</div>';
        }
        $strMenu .= '</li>';
        $strMenu .= '<li>';
        $strMenu .= '<a href="#sobre" title="Sobre"><i class="icon-leaf"></i> Sobre </a>';
        $strMenu .= '</li>';
        $strMenu .= '<li>';
        $strMenu .= '<a href="#contato" title="Contato"><i class="icon-envelope"></i> Contato </a>';
        $strMenu .= '</li>';

        if (Operador::getNivelAcesso() != Operador::NIVEL_ACESSO_NAO_AUTENTICADO) {

            $strMenu .= '<li id="li2" class="active dropdown">'; 
            $strMenu .= '<a href="/consulta" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-book"></i> Consultas <b class="caret"></b></a>';

                $strMenu .= '<ul class="dropdown-menu">';

                if (Operador::getNivelAcesso() == Operador::NIVEL_ACESSO_DIRECAO) {
                    $strMenu .= '<li><a href="/consulta/indicador" title="">Indicadores</a> </li>';
                } else {
                    $strMenu .= '<li><a href="/consulta/cadastro" title="">Cadastro</a> </li>';
                    $strMenu .= '<li><a href="/consulta/internacao" title="">Internação</a> </li>';
                    $strMenu .= '<li><a href="/consulta/cirurgia" title="">Cirurgia</a> </li>';
                    $strMenu .= '<li class="divider"></li>';
                    $strMenu .= '<li class="nav-header">Destaque</li>';
                    $strMenu .= '<li><a href="/consulta/ambulatorio" title="">Informações Ambulatoriais</a> </li>';
                    $strMenu .= '<li><a href="/consulta/indicador" title="">Indicadores</a> </li>';
                    $strMenu .= '<li><a href="/consulta/custo" title="">Custos</a> </li>';
                }

                $strMenu .= '</ul>';

            $strMenu .= '</li>';
        }

        $strMenu .= '</ul>';


        echo $strMenu;
    }

} // MenuPeer
