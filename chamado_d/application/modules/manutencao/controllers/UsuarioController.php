<?php

class Manutencao_UsuarioController extends Zend_Controller_Action {

    public function init() {
        $this->_log = Zend_Registry::get('log');
        $this->_pdo = Zend_Registry::get('pdo');
        $this->_fileLog = New Base_Util_FileLog();
        $this->view->request = $this->_request;
        define('LIMITE_SENHA_USUARIO', 8);
    }

    public function indexAction() {
    	
    	
    	 
    }	
    
    public function alterarSenhaAction(){
    	$senha_atual = $this->_request->getParam('senha_atual');
    	$senha_nova = $this->_request->getParam('senha_nova');
    	$senha_nova_confir = $this->_request->getParam('senha_nova_confir');
    	
    	 if($this->_request->isPost()){
   			if($this->validarSenhaAtual(CO_USUARIO,$senha_atual)){
    			if($senha_nova != $senha_atual){
    				if($this->validarSenhaNova($senha_nova, $senha_nova_confir)){
    					try {
    						$usuario = UsuarioQuery::create()->filterByCoUsuario(CO_USUARIO)->findOne();
    						if($usuario){
    							$usuario->setDsPassword($senha_nova);
    							$usuario->save();
    							$this->sair();
    						}	
    					} catch (Exception $e) {
						Base_Util_FileLog::write("Erro ao tentar alterar a senha: " . $e->getMessage());
    						$this->_helper->mensagem('mensagem_warning','Erro ao tentar alterar a senha!');
    					}
       				}else{
    					$this->_helper->mensagem('mensagem_warning','A Nova Senha é diferente da Senha de Confirmação!');
    				}
    			}else{
    				$this->_helper->mensagem('mensagem_warning','A Nova Senha não pode ser igual Senha Atual!');
    			}
    		}else{
    			$this->_helper->mensagem('mensagem_warning','Senha atual inválida!');
    		}
    	} 
    }
    
    public function meusDadosAction(){
    	$oUsuario =  UsuarioQuery::create()->filterByCoUsuario(CO_USUARIO)->findOne();
    	if($this->_request->isPost()){
    		try {
    			$oUsuario->setDsEmail($this->_request->getParam('ds_email'));
    			$oUsuario->setNuCelular($this->_request->getParam('nu_celular'));
    			$oUsuario->setNuTelefone($this->_request->getParam('nu_tel'));
    			
    			$oUsuario->save();
    			$this->_helper->mensagem('mensagem_success',"Dados atualizados com sucesso!");
    			$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','index');
    			
    		} catch (Exception $e) {
    			$this->_helper->mensagem('mensagem_warning','Erro ao atualizar os Dados!');
    		}
    	}else{
    		
    		$this->view->aObjUsuario = $oUsuario;
    		$this->view->aObjOrgao = OrgaoQuery::create()
    							->useRlUsuarioOrgaoQuery()
    								->filterByCoUsuario(CO_USUARIO)
    								->filterByStRlUsuarioOrgao(true)
    							->endUse()
    							->find();
    	}
    	
    	
    }
    
    public function  listarAction() {
		try {
			$paginaAtual = $this->_request->getParam('pg',1);
			$aPaginaAtual = $this->_request->getParam('oPg');
			if($aPaginaAtual != ""){
				$paginaAtual = $aPaginaAtual;
			}

			$coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
			$ordem = $this->_request->getParam('ordem', "desc"); // Ordem selecionada pelo usuário.
			$paginacao = $this->_request->getParam('pagination'); // Determina se a ordenação deve ser alterada ou não.
//			$oPaginacao = $this->_request->getParam('oPagination');
//			if($oPaginacao == '0'){
//				echo $oPaginacao;
//			}

			$pag_ordem = $this->_request->getParam('pag_ordem'); // Variável que conserva a ordem anterior.

			$tipoBusca = $this->_request->getParam('tipoBusca');
			$oTipoBusca = $this->_request->getParam('oTipoBusca');
			if(!empty($oTipoBusca)){
				$tipoBusca = $oTipoBusca;
			}

			$porNome = $this->_request->getParam('porNome');
			$oPorNome = $this->_request->getParam('oPorNome');
			if(!empty($oPorNome)){
				$porNome = $oPorNome;
			}

			$porPerfil = $this->_request->getParam('porPerfil');
			$oPorPerfil = $this->_request->getParam('oPorPerfil');
			if(!empty($oPorPerfil)){
				$porPerfil = $oPorPerfil;
			}

			$porStatus = $this->_request->getParam('porStatus');
			$oPorStatus = $this->_request->getParam('oPorStatus');
			if(!empty($oPorStatus)){
				$porStatus = $oPorStatus;
			}
//
//			echo "status: ".$porStatus; echo "<br />";
//			echo "oStatus: ".$oPorStatus; echo "<br />";

			// Referente à seleção de linhas no resultado.
			$numLinhasUrl = $this->_request->getParam('num_linhas',15);
			$numLinhasSelect = $this->_request->getParam('num_linhas_select');
			if($numLinhasSelect == ""){
				$numLinhasSelect = $numLinhasUrl;
			}

			//$result = UsuarioPeer::getUsuarios($this->_pdo, $tipoBusca, $porNome, $porPerfil, $porStatus, $numLinhasSelect, $paginaAtual);


			// Inicia a query.
			$query = UsuarioQuery::create();
//echo CO_PERFIL_ADMINISTRADOR;
			// Se tem perfil ADM multi unidades ou ADM unidade.
			if(CO_PERFIL == CO_PERFIL_ADM_UNIDADE || CO_PERFIL == CO_PERFIL_MULTI_UNIDADES) {
				$query->useRlUsuarioOrgaoQuery()
						->filterByCoOrgao(CO_USUARIO_ORGAO)
					->endUse();
				$query->where('usuario.co_perfil <> 1');
			}

			// Referente ao filtro.
			switch($tipoBusca){
				case 1:
					$query->filterByNoUsuario("%$porNome%")->setIgnoreCase("%$porNome%");
					break;
				case 2:
					$query->filterByCoPerfil($porPerfil);
					break;
				case 3:
					$query->filterByStUsuario($porStatus);
					break;
			}

			// Realiza a troca da ordem.
			if($paginacao != '0'){
				if($ordem == "asc"){
					$ordem = "desc";
				}else{
					$ordem = "asc";
				}
			}else{
				$ordem = $pag_ordem;
			}
			$pag_ordem = $ordem;

			switch($coluna){
				case 1:
					$query->orderByNoUsuario($ordem);
					break;
				case 2:
					$query->orderByDsLogin($ordem);
					break;
				case 3:
					$query->orderByDsEmail($ordem);
					break;
				case 4:
					$query->orderByCoPerfil($ordem);
					break;
				case 5:
					$query->orderByDtUltimoLogin($ordem);
					break;
				case 6:
					$query->orderByStUsuario($ordem);
					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($oTarefa);
//echo "<pre>";
//			print_r($oTarefa);
//			exit;
			$this->view->ordem = $ordem;
			$this->view->pag_ordem = $pag_ordem;
			$this->view->coluna = $coluna;
			$this->view->nr_chamado_asc_desc = $ordem;
			$this->view->paginacao = $paginacao;
			$this->view->pg = $paginaAtual;

			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/usuario/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porNome/$porNome/porPerfil/$porPerfil/porStatus/$porStatus/coluna/$coluna/pagination/0/pag_ordem/$pag_ordem");
			$this->view->perfis = PerfilQuery::create()->filterByStPerfil('true')->orderByNoPerfil()->find();
			$this->view->numLinhasSelect = $numLinhasSelect;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porPerfil = $porPerfil;
			$this->view->porStatus = $porStatus;
			$this->view->aObjUsuario = $oTarefa;
			$this->view->oTotal = $oTotal;
		} catch (Exception $e) {
			echo $e;
		}
    }
    
    public function validarLoginAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	$no_login = trim($this->_request->getParam('ds_login'));
    	$co_usuario = $this->_request->getParam('co_usuario');
    	if(!empty($no_login)){
    		 $usuario = UsuarioQuery::create()->filterByDsLogin($no_login)->setIgnoreCase(true)->findOne();
    		if(!$usuario){
    			print 'true';
    		}elseif($usuario && $usuario->getCoUsuario() == $co_usuario){
    			print 'true';
    		}else{
    			print 'false';
    		}
    			
    	}
    }
    
    public function adicionarAction() {
    	$this->view->oPerfils =  PerfilQuery::create()->orderByDsPerfil()->find();
    	$this->view->oOrgao = OrgaoQuery::create()->orderByNoOrgao()->find();

		$numLinhas = $this->_request->getParam('num_linhas');
		$tipoBusca = $this->_request->getParam('tipoBusca');
		$porNome = $this->_request->getParam('porNome');
		$porPerfil = $this->_request->getParam('porPerfil');
		$porStatus = $this->_request->getParam('porStatus');
		$pg = $this->_request->getParam('pg');
		$pag_ordem = $this->_request->getParam('pag_ordem');
		$ordem = $this->_request->getParam('ordem');
		$coluna = $this->_request->getParam('coluna');
		$pagination = 'false';

		$this->view->num_linhas = $numLinhas;
		$this->view->tipoBusca = $tipoBusca;
		$this->view->porNome = $porNome;
		$this->view->porPerfil = $porPerfil;
		$this->view->porStatus = $porStatus;
		$this->view->pg = $pg;
		$this->view->pag_ordem = $pag_ordem;
		$this->view->pagination = $pagination;
		$this->view->coluna = $coluna;
		$this->view->ordem = $ordem;

//		echo "numLinhas: ".$numLinhas; echo "<br />";
//		echo "tipoBusca: ".$tipoBusca; echo "<br />";
//		echo "porNome: ".$porNome; echo "<br />";
//		echo "porPerfil: ".$porPerfil; echo "<br />";
//		echo "porStatus: ".$porStatus; echo "<br />";
//		echo "pg: ".$pg; echo "<br />";
//		echo "pag_ordem: ".$pag_ordem; echo "<br />";
//		echo "ordem: ".$ordem; echo "<br />";
//		echo "coluna: ".$coluna; echo "<br />";
//		echo "pagination: ".$pagination; echo "<br />";

    	if(CO_PERFIL == CO_PERFIL_ADMINISTRADOR){
    		$this->view->aObjOrgao = OrgaoQuery::create()->orderByNoOrgao()->find();
    	
    	}elseif(CO_PERFIL == CO_PERFIL_ADM_UNIDADE){
    		//Listar os Orgões do Usuario
            //$this->view->aObjOrgao
            $this->view->aObjOrgao = OrgaoQuery::create()
                ->filterByCoOrgao(CO_USUARIO_ORGAO)
                ->find();
    	}
        //$this->_helper->mensagem('mensagem_warning',"O órgão no qual esse usuário está alocado não foi selecionado.");
        //$this->_helper->_redirector->gotoSimpleAndExit('adicionar', 'usuario','manutencao');
    	$co_usuario  = $this->_request->getParam('co_usuario');
    	
		if ($this->_request->isPost()) {
    	    try{
                $co_usuario  = $this->_request->getParam('co_usuario');

                $orgoes = $this->_request->getParam('orgoes');
                if (empty($orgoes)) {
                    $this->_helper->mensagem('mensagem_warning',"O órgão no qual esse usuário está alocado não foi selecionado.");
                    $this->_helper->_redirector->gotoSimpleAndExit('adicionar', 'usuario','manutencao');
                }

                if($co_usuario){
                    $oUsuario =  UsuarioQuery::create()
                    ->filterByCoUsuario($co_usuario)
                    ->findOne();
                }else{
                    $oUsuario = new Usuario();
                }


                $oUsuario->setNoUsuario($this->_request->getParam('no_usuario'));
                $oUsuario->setNuCpf(ereg_replace('[^0-9]', '', $this->_request->getParam('nu_cpf')));
                $oUsuario->setDsLogin($this->_request->getParam('ds_login'));
                $oUsuario->setDsPassword($this->_request->getParam('ds_password'));
                $oUsuario->setDsEmail($this->_request->getParam('ds_email'));
                $oUsuario->setCoPerfil($this->_request->getParam('perfil'));
                $oUsuario->setNuCelular($this->_request->getParam('nu_celular'));
                $oUsuario->setNuTelefone($this->_request->getParam('nu_tel'));

                $this->salvarUsuarioOrgao($oUsuario,$orgoes);
                $oUsuario->save();

                $this->_helper->mensagem('mensagem_success',"Usuário cadastrada com sucesso.");
                $this->_helper->_redirector->gotoSimpleAndExit('listar', 'usuario','manutencao');

    	  	}  catch (Exception $e){
            	$this->_helper->mensagem('mensagem_warning',"Erro ao cadastrar." . $e->getMessage());
            	$this->_helper->_redirector->gotoSimpleAndExit('adicionar', 'usuario','manutencao');
            }
    	 }else{
    	 	if($co_usuario){
    	 		$this->view->aObjUsuario = UsuarioQuery::create()
    	 		->filterByCoUsuario($co_usuario)
    	 		->findOne();
    	 		
    	 		$this->view->aObjUsuarioOrgao = RlUsuarioOrgaoQuery::create()
    	 			->filterByStRlUsuarioOrgao(true)
    	 			->filterByCoUsuario($co_usuario)
    	 			->find();
    	 		
    	 	}else{
    	 		$this->view->aObjUsuario = new Usuario();
    	 		$this->view->aObjUsuarioOrgao = new RlOrgaoProjeto();
    	 	}
    	 }
    }
    
    public function excluirAction() {
    
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();

        $co_usuario = $this->_request->getParam('co_usuario');

        $objUsuario = UsuarioQuery::create()
            ->filterByCoUsuario($co_usuario)
            ->findOne();

    	if (is_object($objUsuario)) {
    		try {
                if ($objUsuario->getStUsuario() == 'true') {
                    $objUsuario->setStUsuario('false');
                    $objUsuario->save();
                    $this->_helper->mensagem('mensagem_success','Usuário desativado com sucesso!');
                } else {
                    $objUsuario->setStUsuario('true');
                    $objUsuario->save();
                    $this->_helper->mensagem('mensagem_success','Usuário ativado com sucesso!');
                }
    		} catch (Exception $e) {
    			$this->_helper->mensagem('mensagem_warning','Não foi possivel excluir o usuário!');
    		}
    	} else {
    		$this->_helper->mensagem('mensagem_warning','Não foi possivel excluir o usuário!');
    	}
    	$this->_helper->_redirector->gotoSimpleAndExit('listar', 'usuario','manutencao');
    }
    
    public function salvarUsuarioOrgao($usuario, $co_orgoes){
    	$co_usuario = $usuario->getCoUsuario();
    	
    	if($co_usuario){
 			$objUsuarioOrgao = RlUsuarioOrgaoQuery::create()->filterByCoUsuario($co_usuario)->find();
 			
 			if(sizeof($objUsuarioOrgao) && empty($co_orgoes)){
 				foreach ($objUsuarioOrgao as $usuOrgao){
 					$usuOrgao->setDtFimRl(date('Y-m-d H:i:s'));
 					$usuOrgao->setStRlUsuarioOrgao(false);
 					$usuOrgao->save();
 				}
 			
 			} else if (sizeof($objUsuarioOrgao) && !empty($co_orgoes)){
 				foreach ($objUsuarioOrgao as $usuOrgao){
 					
 					if(in_array($usuOrgao->getCoOrgao(), $co_orgoes) && $usuOrgao->getStRlUsuarioOrgao()){
 						$chave = array_search($usuOrgao->getCoOrgao(), $co_orgoes);
 						unset($co_orgoes[$chave]);
 					
 					} elseif (in_array($usuOrgao->getCoOrgao(), $co_orgoes) && !$usuOrgao->getStRlUsuarioOrgao()){
 						$chave = array_search($usuOrgao->getCoOrgao(), $co_orgoes);
 						unset($co_orgoes[$chave]);

 						$usuOrgao->setDtInicioRl(date('Y-m-d H:i:s'));
 						$usuOrgao->setStRlUsuarioOrgao(true);
 						$usuOrgao->save();
 						
 					}else {
 						$usuOrgao->setDtFimRl(date('Y-m-d H:i:s'));
 						$usuOrgao->setStRlUsuarioOrgao(false);
 						$usuOrgao->save();
 					}		
 				}
 			} 
 				
    	}
    	
    	
     	if($co_orgoes != null){
    		foreach ($co_orgoes as $co_orgao){
    			$objUsuarioOrgao = new RlUsuarioOrgao();
    			$objUsuarioOrgao->setUsuario($usuario);
    	
    			$objOrgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne();
    			if($objOrgao != null){
    				$objUsuarioOrgao->setOrgao($objOrgao);
    				
    				$objUsuarioOrgao->setStRlUsuarioOrgao(true);
    				$objUsuarioOrgao->setDtInicioRl(date('Y-m-d H:i:s'));
    				$objUsuarioOrgao->save();
    				
    			}
    		}
    	}
    }
    
    public function editarAction() {
        $this->adicionarAction();
    }
    
    
    
    public function sair() {
    	Zend_Auth::getInstance()->clearIdentity();
    	$_SESSION = array();
    	$this->_helper->mensagem('mensagem_success',"Senha alterada com sucesso.");
    	$this->_redirect('/');
    }
    
    public function validarSenhaNova($senhaNova, $senhaNovaConf){
    	if($senhaNova == $senhaNovaConf && !empty($senhaNova) && !empty($senhaNovaConf)){
    		return true;
    	} else{
    		return false;
    	}
    }
    
    public function validarSenhaAtual($co_usuario, $senha){
    	if(!empty($senha)){
    		try {
    			$usuario = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
    			if(sizeof($usuario) && strtolower($usuario->getDsPassword()) == $senha){
    				return true;
    			}else{
    				return false;
    			}
    		} catch (Exception $e) {
    			$this->_helper->mensagem('mensagem_warning', "Erro ao validar a Senha :".$e);
    		}
    	}else{
    		return false;
    	}
    }
    
   
    
}
