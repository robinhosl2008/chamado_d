<?php
class Manutencao_ProjetoController extends Zend_Controller_Action {
	public function init() {
		$this->_log = Zend_Registry::get('log');
		$this->_pdo = Zend_Registry::get('pdo');
		$this->_fileLog = New Base_Util_FileLog();
		$this->view->request = $this->_request;
	}
	
	public function indexAction() {
	
	}
	
	public function listarAction(){
		try {
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

			$porAmbiente = $this->_request->getParam('porAmbiente');
			$oPorAmbiente = $this->_request->getParam('oPorAmbiente');
			if(!empty($oPorAmbiente)){
				$porAmbiente = $oPorAmbiente;
			}

			$porOrgao = $this->_request->getParam('porOrgao');
			$oPorOrgao = $this->_request->getParam('oPorOrgao');
			if(!empty($oPorOrgao)){
				$porOrgao = $oPorOrgao;
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

//			switch ($tipoBusca) {
//				case 0:
//					$projetos = ProjetoQuery::create()
//					->useVersaoQuery()
//					->filterByStVersao(true)
//					->endUse()
//					->orderByNoProjeto()
//					->groupByCoProjeto()
//					->groupByNoProjeto()
//					->find();
//					break;
//				case 1:
//					$projetos = ProjetoQuery::create()
//					->filterByNoProjeto("%$porNome%")
//					->setIgnoreCase("%$porNome%")
//					->useVersaoQuery()
//					->filterByStVersao(true)
//					->endUse()
//					->orderByNoProjeto()
//					->groupByCoProjeto()
//					->groupByNoProjeto()
//					->find();
//					break;
//				case 2:
//					$projetos = ProjetoQuery::create()
//					->useRlProjetoVersaoAmbQuery()
//						->filterByCoAmbiente($porAmbiente)
//					->endUse()
//					->useVersaoQuery()
//					->filterByStVersao(true)
//					->endUse()
//					->orderByNoProjeto()
//					->groupByCoProjeto()
//					->groupByNoProjeto()
//					->find();
//					break;
//				case 3:
//					$projetos = ProjetoQuery::create()
//					->useRlOrgaoProjetoQuery()
//						->filterByCoOrgao($porOrgao)
//					->endUse()
//					->useVersaoQuery()
//					->filterByStVersao(true)
//					->endUse()
//					->orderByNoProjeto()
//					->groupByCoProjeto()
//					->groupByNoProjeto()
//					->find();
//					break;
//			}

			// Inicia a query.
			$query = ProjetoQuery::create()
					->useVersaoQuery()
						->filterByStVersao(true)
					->endUse()
					->groupByCoProjeto()
					->groupByNoProjeto();

			// Referente ao filtro.
			switch($tipoBusca) {
				case 1:
					$query->filterByNoProjeto("%$porNome%")->setIgnoreCase("%$porNome%");
					break;
				case 2:
					$query->useRlProjetoVersaoAmbQuery()
							->useAmbienteQuery()
								->filterByCoAmbiente($porAmbiente)
							->endUse()
						->endUse();
					break;
				case 3:
					$query->useRlOrgaoProjetoQuery()
							->filterByCoOrgao($porOrgao)
						->endUse();
					break;
			}

			switch($coluna) {
				case 1:
					$query->orderByNoProjeto($ordem);
					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($oTarefa);

			$this->view->ambientes = AmbienteQuery::create()->find();
			$this->view->orgaos = OrgaoQuery::create()->find();
			$this->view->aObjProjeto = $oTarefa;
			$this->view->oTotal = $oTotal;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porAmbiente = $porAmbiente;
			$this->view->porOrgao = $porOrgao;
			$this->view->coluna = $coluna;
			$this->view->ordem = $ordem;
			$this->view->numLinhasSelect = $numLinhasSelect;
			$this->view->pg = $paginaAtual;
			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/projeto/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porNome/$porNome/porAmbiente/$porAmbiente/porOrgao/$porOrgao/coluna/$coluna/ordem/$ordem");
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

    public function validarNoProjetoAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $no_projeto = trim($this->_request->getParam('no_projeto'));

        if($no_projeto){
            $proj = ProjetoQuery::create()
                ->filterByNoProjeto($no_projeto)
                ->setIgnoreCase(true)
                ->findOne();

            if(empty($proj)){
                echo 'true';
            }else{
                echo 'false';
            }
        }
    }

    public function validarAmbienteAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $ambiente = trim($this->_request->getParam('no_projeto'));

        if(!empty($ambiente)){
            echo 'true';
        }else{
            echo 'false';
        }
    }
	
	/*
    public function validarAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $no_projeto = trim($this->_request->getParam('no_projeto'));
        $tipo_versao = $this->_request->getParam('tipo_versao');
        $versao = trim($this->_request->getParam('no_versao'));
        $co_projeto = $this->_request->getParam('co_projeto');

        if (!empty($co_projeto)) {

            $proj = ProjetoQuery::create()
                ->filterByCoProjeto($co_projeto)
                ->filterByNoProjeto($no_projeto)
                ->useVersaoQuery()
                ->filterByCoSeqTipoVersao($tipo_versao)
                ->filterByNoVersao($versao)
                ->endUse()
                ->setIgnoreCase(true)
                ->findOne();

            if (empty($proj)) {
                echo 'true';
            } else {
                echo 'false';
            }
            
        } else {
        
            if(($no_projeto && $tipo_versao && $versao) != ""){
                $proj = ProjetoQuery::create()
                    ->filterByNoProjeto($no_projeto)
                    ->useVersaoQuery()
                    ->filterByCoSeqTipoVersao($tipo_versao)
                    ->filterByNoVersao($versao)
                    ->endUse()
                    ->setIgnoreCase(true)
                    ->findOne();


                if (empty($proj)) {
                    print 'true';
                } else {
                    print 'false';
                }
            }
        }
    }
	*/
	
	public function adicionarAction() {
		try{
			$co_projeto = $this->_request->getParam('co_projeto');
			$co_ambientes = $this->_request->getParam('ambientes');
			$co_versao = $this->_request->getParam('co_versao');

			$num_linhas = $this->_request->getParam('num_linhas');
			$tipoBusca = $this->_request->getParam('tipoBusca');
			$porNome = $this->_request->getParam('porNome');
			$porAmbiente = $this->_request->getParam('porAmbiente');
			$porOrgao = $this->_request->getParam('porOrgao');
			$coluna = $this->_request->getParam('coluna');
			$ordem = $this->_request->getParam('ordem');
			$pg = $this->_request->getParam('pg');


			$this->view->aObjTipoVersao = TbTipoVersaoQuery::create()->orderByNoTipoVersao()->find();
			$this->view->aObjAmbiente = AmbienteQuery::create()->orderByNoAmbiente()->find();

			if(CO_PERFIL == CO_PERFIL_ADMINISTRADOR){
				$this->view->aObjOrgao = OrgaoQuery::create()->orderByNoOrgao()->find();

			}else{
				//Listar os Orgões do Usuario
			}
	
			if($this->_request->isPost()){

				if($co_projeto){
					$oProjeto = ProjetoQuery::create()->filterByCoProjeto($co_projeto)->findOne();
					$oVersao = VersaoQuery::create()->filterByCoVersao($co_versao)->orderByDtCadastroVersao(Criteria::ASC)->findOne();

				}else{
					$oProjeto = new Projeto();
					$oVersao = new Versao();
				}
				$orgoes = $this->_request->getParam('orgoes');

				$oProjeto->setNoProjeto(trim($this->_request->getParam('no_projeto')));
				$oProjeto->save();

				$oVersao->setCoSeqTipoVersao($this->_request->getParam('tipo_versao'));
				$oVersao->setNoVersao(trim($this->_request->getParam('no_versao')));
				$oVersao->setDsVersao(trim($this->_request->getParam('ds_versao')));
				if(!$oVersao->getDtCadastroVersao()){
					$oVersao->setDtCadastroVersao(date('Y-m-d H:i:s'));
				}

				$oVersao->setProjeto($oProjeto);

				$oVersao->save();
				$this->salvarProjetoOrgao($oProjeto, $orgoes);
				$this->salvarProjVersaoAmb($oVersao, $co_ambientes);

				$this->_helper->mensagem('mensagem_success',"Projeto cadastrada com sucesso.");
				$this->_helper->_redirector->gotoSimpleAndExit('listar', 'projeto','manutencao');

			}else{

				if($co_projeto){
								/*
									$teste = ProjetoQuery::create()->filterByCoProjeto($co_projeto)->findOne();
									echo "<pre>";
									print_r($teste);
									exit;
								 *
								 */
					$this->view->aObjProjeto = ProjetoQuery::create()->filterByCoProjeto($co_projeto)->findOne();

					$aObjVersao = VersaoQuery::create()->filterByCoProjeto($co_projeto)->orderByDtCadastroVersao(Criteria::ASC)->findOne();
					$this->view->aObjVersao = $aObjVersao;
					$this->view->aObjOrgaoProj = RlOrgaoProjetoQuery::create()->filterByStOgaoProjeto(true)->filterByCoProjeto($co_projeto)->find();
					$this->view->aRlProjVersaoAmb = RlProjetoVersaoAmbQuery::create()->filterByStProjVerAmb(true)->filterByCoProjeto($co_projeto)->filterByCoVersao($aObjVersao->getCoversao())->find();
				}else{
					$this->view->aObjProjeto = new Projeto();
					$this->view->aObjVersao = new Versao();
					$this->view->aObjOrgaoProj = new RlOrgaoProjeto();
					$this->view->aRlProjVersaoAmb = new RlProjetoVersaoAmb();
				}
			}

			$this->view->num_linhas = $num_linhas;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->porAmbiente = $porAmbiente;
			$this->view->porOrgao = $porOrgao;
			$this->view->coluna = $coluna;
			$this->view->ordem = $ordem;
			$this->view->pg = $pg;

		}catch (Exception $e){
			echo $e->getMessage();
		}
	}
	
	private function salvarProjetoOrgao($oProjeto, $co_orgoes){
		$co_projeto = $oProjeto->getCoProjeto();
	
		if($co_projeto){
			$objOrgaoProj = RlOrgaoProjetoQuery::create()->filterByCoProjeto($co_projeto)->find();
			
			if(sizeof($objOrgaoProj) && empty($co_orgoes)){
				foreach ($objOrgaoProj as $orgProj){
					$orgProj->setStOgaoProjeto(false);
					$orgProj->save();
				}
			}else if(sizeof($objOrgaoProj) && !empty($co_orgoes) ){
				foreach($objOrgaoProj as $orgProj){

					if (in_array($orgProj->getCoOrgao(), $co_orgoes) && $orgProj->getStOgaoProjeto()) {
						$chave = array_search($orgProj->getCoOrgao(), $co_orgoes);
						unset($co_orgoes[$chave]);
						 
					} elseif (in_array($orgProj->getCoOrgao(), $co_orgoes) && !$orgProj->getStOgaoProjeto()){
						$chave = array_search($orgProj->getCoOrgao(), $co_orgoes);
						unset($co_orgoes[$chave]);

						$orgProj->setStOgaoProjeto(true);
						$orgProj->save();
	
					}else{
						$orgProj->setStOgaoProjeto(false);
						$orgProj->save();
					}
				}
			} 
		}
	
		if($co_orgoes != null){
			 foreach ($co_orgoes as $co_orgao){
				$objOrgaoProjeto = new RlOrgaoProjeto();
				$objOrgaoProjeto->setCoProjeto($oProjeto->getCoProjeto());
				
				$objOrgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne();
				if($objOrgao != null){
					$objOrgaoProjeto->setOrgao($objOrgao);
					$objOrgaoProjeto->setStOgaoProjeto(true);
					$objOrgaoProjeto->setDtOgaoProjeto(date('Y-m-d H:i:s'));
					print_r($objOrgaoProjeto);
					$objOrgaoProjeto->save();
				}
			}
		}
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
	
		$co_projeto = $this->_request->getParam('co_projeto');
		$oProjeto = ProjetoQuery::create()->filterByCoProjeto($co_projeto)->findOne();
		$objOrgaoProj = RlOrgaoProjetoQuery::create()->filterByCoProjeto($co_projeto)->find();
		
		try {
				
			if(sizeof($oProjeto->getVersaos()) || sizeof($objOrgaoProj)){
				foreach($oProjeto->getVersaos() as $versao){
					$versao->setStVersao(false);
					$versao->save();
				}
				
				foreach ($objOrgaoProj as $orgProj){
					$orgProj->setStOgaoProjeto(false);
					$orgProj->save();
				}
				
			}else{
				$oProjeto->delete();
			}
				
			$msg = "Projeto excluído com sucesso!";
			$this->_helper->mensagem('mensagem_warning',$msg);
	
		}catch (Exception $e) {
			$this->_helper->mensagem('mensagem_warning','Não foi possivel excluir o Projeto!');
		}
	
		$this->_helper->_redirector->gotoSimpleAndExit('listar', 'projeto','manutencao');
	}
	
	
}	