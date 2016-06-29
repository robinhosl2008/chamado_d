<?php
class Manutencao_VersaoController extends Zend_Controller_Action {
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

			$porTipo = $this->_request->getParam('porTipo');
			$oPorTipo = $this->_request->getParam('oPorTipo');
			if(!empty($oPorTipo)){
				$porTipo = $oPorTipo;
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
			$this->view->numLinhasSelect = $numLinhasSelect;

			// Inicia a query.
			$query = VersaoQuery::create()->filterByStVersao(true);

//			echo "tipo de busca ".$tipoBusca."<br />";
//			echo "cód. projeto ".$porProjeto."<br />";

			// Referente ao filtro.
			switch($tipoBusca) {
				case 1:
				$query->filterByNoVersao("%$porNome%")->setIgnoreCase("%$porNome%");
					break;
				case 2:
				$query->useTbTipoVersaoQuery()
					->filterByCoSeqTipoVersao($porTipo)
					->endUse();
					break;
				case 3:
				$query->useProjetoQuery()
					->filterByCoProjeto($porProjeto)
					->endUse();
					break;
			}

			switch($coluna) {
				case 1:
					$query->orderByNoVersao($ordem);
					break;
				case 3:
					$query->useTbTipoVersaoQuery()
						->orderByNoTipoVersao($ordem)
					->endUse();
					break;
				case 4:
					$query->useProjetoQuery()
						->orderByNoProjeto($ordem)
					->endUse();
					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($oTarefa);

//			echo "<pre>";
//			foreach($oTarefa as $tarefa){
//				print_r($tarefa);
//			}
//			echo $ordem;
//			exit;

			$this->view->coluna = $coluna;
			$this->view->aColuna = $aColuna;
			$this->view->ordem = $ordem;
			$this->view->pg = $paginaAtual;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porTipo = $porTipo;
			$this->view->porProjeto = $porProjeto;
			$this->view->versoes = $oTarefa;
			$this->view->oTotal = $oTotal;
			$this->view->osTipos = TbTipoVersaoQuery::create()->distinct()->find();
			$this->view->osProjetos = VersaoPeer::getProjetos($this->_pdo);

			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/versao/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porNome/$porNome/porTipo/$porTipo/porProjeto/$porProjeto/coluna/$coluna/ordem/$ordem");
		}catch (Exception $e){
			echo $e->getMessage();
		}
	}
	
	
    public function validarAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $no_versao = trim($this->_request->getParam('no_versao'));

        $data = VersaoQuery::create()
        ->filterByNoVersao($no_versao)
        ->setIgnoreCase(true)
        ->findOne();

        if(!$data){
            print 'true';
        }else{
            print 'false';
        }
    }
	
	public function adicionarAction() {
		try{
			$co_versao = $this->_request->getParam('co_versao');
			$ambientes = $this->_request->getParam('ambientes');

			$num_linhas = $this->_request->getParam('num_linhas');
			$tipoBusca = $this->_request->getParam('tipoBusca');
			$porNome = $this->_request->getParam('porNome');
			$porTipo = $this->_request->getParam('porTipo');
			$porProjeto = $this->_request->getParam('porProjeto');
			$coluna = $this->_request->getParam('coluna');
			$ordem = $this->_request->getParam('ordem');
			$pg = $this->_request->getParam('pg');

			if (!empty($co_versao)) {
				$no_ver = VersaoQuery::create()->filterByCoVersao($co_versao)->findOne();
				$this->view->no_ver = $no_ver->getNoVersao();
			}

			if($this->_request->isPost()){
				if($co_versao){
					$oVersao = VersaoQuery::create()->filterByCoVersao($co_versao)->findOne();
				}else{
					$oVersao = new Versao();
				}

				$oVersao->setNoVersao(trim($this->_request->getParam('no_versao')));
				$oVersao->setDsVersao(trim($this->_request->getParam('ds_versao')));
				if(!$oVersao->getDtCadastroVersao()){
					$oVersao->setDtCadastroVersao(date('Y-m-d H:i:s'));
				}

				$oVersao->setStVersao(true);
				$oVersao->setCoSeqTipoVersao($this->_request->getParam('tipo_versao'));
				$oVersao->setCoProjeto($this->_request->getParam('projeto'));
				$oVersao->save();

				$this->salvarProjVersaoAmb($oVersao,$ambientes);

				$this->_helper->mensagem('mensagem_success',"Versão cadastrada com sucesso.");
				$this->_helper->_redirector->gotoSimpleAndExit('listar', 'versao','manutencao');

			}else{
				$this->view->aObjProjeto = ProjetoQuery::create()
					->useVersaoQuery()
						->filterByStVersao(true)
					->endUse()
					->groupByCoProjeto()
					->groupByNoProjeto()
					->orderByNoProjeto()
					->find();
				$this->view->aObjTipoVersao = TbTipoVersaoQuery::create()->filterByStTipoVersao(true)->orderByNoTipoVersao()->find();
				$this->view->aObjAmbiente = AmbienteQuery::create()->orderByNoAmbiente()->find();


				if($co_versao){
					$this->view->aObjVersao = VersaoQuery::create()->filterByCoVersao($co_versao)->findOne();
					$this->view->aRlProjVersaoAmb = RlProjetoVersaoAmbQuery::create()->filterByStProjVerAmb(true)->filterByCoVersao($co_versao)->find();
				}else{
					$this->view->aObjVersao = new Versao();
					$this->view->aRlProjVersaoAmb = new RlProjetoVersaoAmb();
				}
			}

//			echo "num_linhas ".$num_linhas."<br />";
//			echo "tipoBusca ".$tipoBusca."<br />";
//			echo "porNome ".$porNome."<br />";
//			echo "porTipo ".$porTipo."<br />";
//			echo "porProjeto ".$porProjeto."<br />";
//			echo "coluna ".$coluna."<br />";
//			echo "ordem ".$ordem."<br />";
//			echo "pg ".$pg."<br />";

			$this->view->num_linhas = $num_linhas;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porTipo = $porTipo;
			$this->view->porProjeto = $porProjeto;
			$this->view->coluna = $coluna;
			$this->view->ordem = $ordem;
			$this->view->pg = $pg;

		}catch (Exception $e){
			echo $e->getMessage();
		}
	}
	
	public function editarAction() {
		$this->adicionarAction();
	}
	
	
	public function salvarProjVersaoAmb($objVersao,$co_ambientes){
		$co_projeto = $objVersao->getCoProjeto(); 
		$co_versão = $objVersao->getCoVersao();
		
		if($co_projeto && $co_versão){
			$aRlProjetoVersaoAmb = RlProjetoVersaoAmbQuery::create()->filterByCoVersao($co_versão)->filterByCoProjeto($co_projeto)->find();
		
			if(sizeof($aRlProjetoVersaoAmb) && empty($co_ambientes)){
				foreach ($aRlProjetoVersaoAmb as $objRlProjetoVersaoAmb){
					$objRlProjetoVersaoAmb->setStProjVerAmb(false);
					$objRlProjetoVersaoAmb->save();
				}
		
			} else if (sizeof($aRlProjetoVersaoAmb) && !empty($co_ambientes)){
				foreach ($aRlProjetoVersaoAmb as $objRlProjetoVersaoAmb){
		
					if(in_array($objRlProjetoVersaoAmb->getCoAmbiente(), $co_ambientes) && $objRlProjetoVersaoAmb->getStProjVerAmb()){
						$chave = array_search($objRlProjetoVersaoAmb->getCoAmbiente(), $co_ambientes);
						unset($co_ambientes[$chave]);
		
					} elseif (in_array($objRlProjetoVersaoAmb->getCoAmbiente(), $co_ambientes) && !$objRlProjetoVersaoAmb->getStProjVerAmb()){
						$chave = array_search($objRlProjetoVersaoAmb->getCoAmbiente(), $co_ambientes);
						unset($co_ambientes[$chave]);
		
						$objRlProjetoVersaoAmb->setDtInicioRl(date('Y-m-d H:i:s'));
						$objRlProjetoVersaoAmb->setStProjVerAmb(true);
						$objRlProjetoVersaoAmb->save();
							
					}else {
						$objRlProjetoVersaoAmb->setStProjVerAmb(false);
						$objRlProjetoVersaoAmb->save();
					}
				}
			}
		}	
		 
		if($co_ambientes != null){
			foreach ($co_ambientes as $co_ambiente){
				$objRlProjetoVersaoAmb = new RlProjetoVersaoAmb();
				
				if($co_projeto && $co_versão){
					
					$objRlProjetoVersaoAmb->setCoAmbiente($co_ambiente);
					$objRlProjetoVersaoAmb->setCoVersao($co_versão);
					$objRlProjetoVersaoAmb->setCoProjeto($co_projeto);
					$objRlProjetoVersaoAmb->setDtInicioRl(date('Y-m-d H:i:s'));
					$objRlProjetoVersaoAmb->setStProjVerAmb(true);
					
					$objRlProjetoVersaoAmb->save();
				}
			}
		}
		
	}
	
	public function excluirAction() {
	
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout->disableLayout();
	
		$co_versao = $this->_request->getParam('co_versao');
		try {
			$oVersao = VersaoQuery::create()->filterByCoVersao($co_versao)->findOne();
			$oVersao->setStVersao(false);
			$oVersao->save();
			
			$this->_helper->mensagem('mensagem_warning','Versão excluído com sucesso!');
		
		}catch (Exception $e) {
			$this->_helper->mensagem('mensagem_warning','Não foi possivel excluir a Versão!');
		}
		$this->_helper->_redirector->gotoSimpleAndExit('listar', 'versao','manutencao');
	}
}	