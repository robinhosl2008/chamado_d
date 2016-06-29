<?php
class Manutencao_TipoVersaoController extends Zend_Controller_Action {
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
			// Pega informações da view.
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

			$coluna = $this->_request->getParam('coluna');
			$aColuna = $this->_request->getParam('aColuna');
			if(!empty($aColuna)){
				$coluna = $aColuna;
			}

			$paginaAtual = $this->_request->getParam('pg',1);
			$ordem = $this->_request->getParam('ordem', 'desc');

			// Referente à quantidade de linhas a serem listadas.
			$numLinhasUrl = $this->_request->getParam('num_linhas',15);
			$numLinhasSelect = $this->_request->getParam('num_linhas_select');
			if($numLinhasSelect == ""){
				$numLinhasSelect = $numLinhasUrl;
			}
			$this->view->numLinhasSelect = $numLinhasSelect;

//			if($tipoBusca != 0 && $porNome != ""){
//				$tipoVersao = TbTipoVersaoQuery::create()
//					->filterByNoTipoVersao("%$porNome%")
//					->setIgnoreCase("%$porNome%")
//					->find();
//			}else {
//				$tipoVersao = TbTipoVersaoQuery::create()
//					->orderByNoTipoVersao()
//					->find();
//			}

			// Inicia a query.
			$query = TbTipoVersaoQuery::create()->filterByStTipoVersao(true);

			// Referente ao filtro.
			switch($tipoBusca) {
				case 1:
					$query->filterByNoTipoVersao("%$porNome%")->setIgnoreCase("%$porNome%");
					break;
			}

			switch($coluna) {
				case 1:
					$query->orderByNoTipoVersao($ordem);
					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$tipoVersao = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($tipoVersao);

			$this->view->tipoBusca = $tipoBusca;
			$this->view->porNome = $porNome;
			$this->view->coluna = $coluna;
			$this->view->ordem = $ordem;
			$this->view->pg = $paginaAtual;
			$this->view->aObjTipoVersao = $tipoVersao;
			$this->view->oTotal = $oTotal;

			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/tipo-versao/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porNome/$porNome/coluna/$coluna/ordem/$ordem");
		}catch (Exception $e){
			echo $e;
		}
	}

    public function validarNoTipoVersaoAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $no_tipo_versao = trim($this->_request->getParam('no_tipo_versao'));

        $tpVersao = TbTipoVersaoQuery::create()
            ->filterByNoTipoVersao($no_tipo_versao)
            ->setIgnoreCase(true)
            ->findOne();

        if (!$tpVersao) {
            print 'true';
        } else {
            print 'false';
        }
    }

    public function validarAction(){
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();
        
        $no_tipo_versao = trim($this->_request->getParam('no_tipo_versao'));
        $co_tipo_versao = $this->_request->getParam('co_tipo_versao');

        if (!empty($co_tipo_versao)) {
            $tpVersao = TbTipoVersaoQuery::create()
                ->filterByCoSeqTipoVersao($co_tipo_versao)
                ->filterByNoTipoVersao($no_tipo_versao)
                ->setIgnoreCase(true)
                ->findOne();

            if (!$tpVersao) {
                print 'true';
            } else {
                print 'false';
            }
        }
    }
	
	public function adicionarAction()
	{
		try {
			$co_tipo_versao = $this->_request->getParam('co_tipo_versao');

			$num_linhas = $this->_request->getParam('num_linhas');
			$tipoBusca = $this->_request->getParam('tipoBusca');
			$porNome = $this->_request->getParam('porNome');
			$porProjeto = $this->_request->getParam('porProjeto');
			$coluna = $this->_request->getParam('coluna');
			$ordem = $this->_request->getParam('ordem');
			$pg = $this->_request->getParam('pg');

			if (!empty($co_tipo_versao)) {
				$tVersao = TbTipoVersaoQuery::create()->filterByCoSeqTipoVersao($co_tipo_versao)->findOne();
				$this->view->noVersao = $tVersao->getNoTipoVersao();
			}

			if ($this->_request->isPost()) {
				try {
					if ($co_tipo_versao) {
						$oTipoVersao = TbTipoVersaoQuery::create()->filterByCoSeqTipoVersao($co_tipo_versao)->findOne();
					} else {
						$oTipoVersao = new TbTipoVersao();

					}
					$oTipoVersao->setNoTipoVersao(trim($this->_request->getParam('no_tipo_versao')));
					$oTipoVersao->setStTipoVersao(true);
					$oTipoVersao->save();

					$this->_helper->mensagem('mensagem_success', "Tipo de Versão cadastrada com sucesso.");
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'tipo-versao', 'manutencao');


				} catch (Exception $e) {
					$this->_helper->mensagem('mensagem_warning', "Erro ao cadastrar." . $e->getMessage());
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'tipo-versao', 'manutencao');
				}

			} else {
				if ($co_tipo_versao) {
					$this->view->aObjTipoVersao = TbTipoVersaoQuery::create()->filterByCoSeqTipoVersao($co_tipo_versao)->findOne();
				} else {
					$this->view->aObjTipoVersao = new TbTipoVersao();
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



	public function editarAction() {
		$this->adicionarAction();
	}
	
	public function excluirAction() {
	
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout->disableLayout();
	
		$co_tipo_versao = $this->_request->getParam('co_tipo_versao');
		$oTipoVersao = 	$oTipoVersao = TbTipoVersaoQuery::create()->filterByCoSeqTipoVersao($co_tipo_versao)->findOne();

		try {
			if(sizeof($oTipoVersao->getVersaos())){
				$oTipoVersao->setStTipoVersao(true);
				$oTipoVersao->save();
				
			}else{
				$oTipoVersao->delete();
			}
			$this->_helper->mensagem('mensagem_warning','Tipo de Versão excluído com sucesso!');

		}catch (Exception $e) {
			$this->_helper->mensagem('mensagem_warning','Não foi possivel Tipo de Versão!');
		}
		$this->_helper->_redirector->gotoSimpleAndExit('listar', 'tipo-versao','manutencao');
	}
}	