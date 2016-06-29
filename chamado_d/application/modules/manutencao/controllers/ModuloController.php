<?php
class Manutencao_ModuloController extends Zend_Controller_Action {
	public function init() {
		$this->_log = Zend_Registry::get('log');
		$this->_pdo = Zend_Registry::get('pdo');
		$this->_fileLog = New Base_Util_FileLog();
		$this->view->request = $this->_request;
	}
	
	public function indexAction() {
	
	}
	
	public function  listarAction(){
		try{
			// Pega as informações passadas pela view.
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

			$porProjeto = $this->_request->getParam('porProjeto');
			$oPorProjeto = $this->_request->getParam('oPorProjeto');
			if(!empty($oPorProjeto)){
				$porProjeto = $oPorProjeto;
			}

			$coluna = $this->_request->getParam('coluna');
			$aColuna = $this->_request->getParam('aColuna');
			if(!empty($aColuna)){
				$coluna = $aColuna;
			}

			$paginaAtual = $this->_request->getParam('pg',1);
			$ordem = $this->_request->getParam('ordem', 'desc');

			// Referente à seleção de linhas no resultado.
			$numLinhasUrl = $this->_request->getParam('num_linhas',15);
			$numLinhasSelect = $this->_request->getParam('num_linhas_select');
			if($numLinhasSelect == ""){
				$numLinhasSelect = $numLinhasUrl;
			}


//			if($tipoBusca != ""){
//				// Busca os módulos de acordo com o filtro informado.
//				$modulos = ModuloPeer::getModulos($this->_pdo, $tipoBusca, $porNome, $porProjeto, $numLinhasSelect, $paginaAtual);
//			}else{
//				// Busca os módulos para serem exibidos na view.
//				$modulos = ModuloPeer::getModulos($this->_pdo, $tipoBusca, $porNome, $porProjeto, $numLinhasSelect, $paginaAtual);
//			}

//			echo "ordem ".$ordem."<br />";
//			echo "coluna ".$coluna."<br />";

			// Inicia a query.
			$query = TbModuloProjetoQuery::create()->filterByStModulo(true);

			// Referente ao filtro.
			switch($tipoBusca) {
				case 1:
					$query->filterByNoModulo("%$porNome%")->setIgnoreCase("%$porNome%");
					break;
				case 2:
					$query->useProjetoQuery()
							->filterByCoProjeto($porProjeto)
						->endUse();
					break;
			}

			switch($coluna) {
				case 1:
					$query->orderByNoModulo($ordem);
					break;
				case 2:
					$query->useProjetoQuery()
							->orderByNoProjeto($ordem)
						->endUse();
					break;
				case 3:
					$query->orderByDsModulo($ordem);
					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($oTarefa);

			// Busca os projetos para serem exibidos na view.
			$projetos = ProjetoQuery::create()
				->groupByNoProjeto()
				->groupByCoProjeto()
				->orderByNoProjeto()
				->useRlOrgaoProjetoQuery()
				->filterByStOgaoProjeto(true)
				->endUse()
				->find();

			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/modulo/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porNome/$porNome/porProjeto/$porProjeto/coluna/$coluna/ordem/$ordem");
			$this->view->aObjProjeto = $projetos;
			$this->view->oTotal = $oTotal;
			$this->view->aObjModulo = $oTarefa;

			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porProjeto = $porProjeto;
			$this->view->ordem = $ordem;
			$this->view->coluna = $coluna;
			$this->view->pg = $paginaAtual;

			$this->view->numLinhasSelect = $numLinhasSelect;
		}catch (Exception $e){
			echo $e->getMessage();
		}
	}
	
	
    public function validarNoModuloAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $no_modulo = trim($this->_request->getParam('no_modulo'));
        //$co_modulo = $this->_request->getParam('co_modulo');

        $mod = TbModuloProjetoQuery::create()
                ->filterByNoModulo($no_modulo)
                //->filterByCoProjeto($projetos)
                ->setIgnoreCase(true)
                ->findOne();

        if(!$mod){
                print 'true';
        }else{
                print 'false';
        }
    }
	
	public function adicionarAction() {
		try{
			$co_usuario = Zend_Auth::getInstance()->getIdentity()->getCoUsuario();
			$co_modulo = $this->_request->getParam('co_modulo');

			$num_linhas = $this->_request->getParam('num_linhas');
			$tipoBusca = $this->_request->getParam('tipoBusca');
			$porNome = $this->_request->getParam('porNome');
			$porProjeto = $this->_request->getParam('porProjeto');
			$coluna = $this->_request->getParam('coluna');
			$ordem = $this->_request->getParam('ordem');
			$pg = $this->_request->getParam('pg');

			if (!empty($co_modulo)) {
				$no_mod = TbModuloProjetoQuery::create()->filterByCoSeqModuloProj($co_modulo)->findOne();
				$this->view->no_mod = $no_mod->getNoModulo();
			}

			if($this->_request->isPost()){
				try {
					if($co_modulo){
						$oModulo = TbModuloProjetoQuery::create()->filterByCoSeqModuloProj($co_modulo)->findOne();
					}else{
						$oModulo = new TbModuloProjeto();
					}

					$oModulo->setNoModulo(trim($this->_request->getParam('no_modulo')));
					$oModulo->setDsModulo(trim($this->_request->getParam('ds_modulo')));
					$oModulo->setCoProjeto(($this->_request->getParam('co_projeto')));
					$oModulo->setStModulo(true);
					$oModulo->save();

					/*
					echo "<pre>";
					echo $this->_request->getParam('co_projeto');
					print_r($oModulo);
					exit;
					*/

					$this->_helper->mensagem('mensagem_success',"Módulo cadastrada com sucesso.");
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'modulo','manutencao');


				} catch (Exception $e) {
					$this->_helper->mensagem('mensagem_warning',"Erro ao cadastrar." . $e->getMessage());
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'modulo','manutencao');
				}

			}else{
				try {
					$this->view->aObjProjeto = ProjetoQuery::create()
						->useRlOrgaoProjetoQuery()
							->filterByStOgaoProjeto(true)
							->endUse()
						->groupByCoProjeto()
						->groupByNoProjeto()
						->orderByNoProjeto()
						->find();
					if($co_modulo){
						$this->view->aObjModulo = TbModuloProjetoQuery::create()->filterByCoSeqModuloProj($co_modulo)->findOne();
					}else{
						$this->view->aObjModulo = new TbModuloProjeto();
					}

				} catch (Exception $e) {
					$this->_helper->mensagem('mensagem_warning',"Erro ao Consultar." . $e->getMessage());
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'modulo','manutencao');
				}

			}

			$this->view->num_linhas = $num_linhas;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porProjeto = $porProjeto;
			$this->view->coluna = $coluna;
			$this->view->ordem = $ordem;
			$this->view->pg = $pg;

		}catch (Exception $e){
			echo $e->getMessage();
		}
	}
	

	public function excluirAction() {
	
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout->disableLayout();
	
		$co_modulo = $this->_request->getParam('co_modulo');
		$oModulo = TbModuloProjetoQuery::create()->filterByCoSeqModuloProj($co_modulo)->findOne();

		try {
			$oModulo->setStModulo(false);
			$oModulo->save();
			$this->_helper->mensagem('mensagem_success','Módulo desativado com sucesso!');
		
		}catch (Exception $e) {
			$this->_helper->mensagem('mensagem_warning','Não foi possivel desativar o Módulo!');
		}
		$this->_helper->_redirector->gotoSimpleAndExit('listar', 'modulo','manutencao');
	}

	public function ativarAction() {
	
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout->disableLayout();
	
		$co_modulo = $this->_request->getParam('co_modulo');
		$oModulo = TbModuloProjetoQuery::create()->filterByCoSeqModuloProj($co_modulo)->findOne();
	
		try {
			$oModulo->setStModulo(true);
			$oModulo->save();
			$this->_helper->mensagem('mensagem_success','Módulo ativo com sucesso!');
	
		}catch (Exception $e) {
			$this->_helper->mensagem('mensagem_warning','Não foi possivel ativo o Módulo!');
		}
		$this->_helper->_redirector->gotoSimpleAndExit('listar', 'modulo','manutencao');
	}
	
	/* public function consultarambienteAction(){
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout->disableLayout();
		
		$co_projeto = $this->_request->getParam('co_projeto');
		 $a = new  RlProjetoVersaoAmb();
		
		$aObjRl = RlProjetoVersaoAmbQuery::create()->filterByCoProjeto($co_projeto)->filterByStProjVerAmb(true)->find();
		//$a->getTbModuloProjeto()->getCoSeqModuloProj();
		$tabela = "<table class=\"table table-bordered table-striped\" id=\"mt\">
				<thead> 
					<th class=\"span1\">Selecione</th> 
					<th class=\"span7\">Ambiente</th>
				 </thead>";
				foreach ($aObjRl as $rl){
					if($rl->getTbModuloProjeto()){
						$check = 'checked="checked"';
					}
					
					$tabela .= "<tr>
									<td><input name=\"ambientes[]\" type=\"checkbox\" value=\"". $rl->getAmbiente()->getCoAmbiente()."\"  ". $check ." /></td>
									<td>". $rl->getAmbiente()->getNoAmbiente()."</td>
								</tr>";
			
					} 
		if(!sizeof($aObjRl)){			
			$tabela .= "<tr><td colspan=\"2\">Projeto não possui ambiente cadastrado.</td></tr>";
		}		
		$tabela .="</table>";
		echo $tabela;
	} */
}	