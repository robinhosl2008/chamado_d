<?php
class Manutencao_AmbienteController extends Zend_Controller_Action {
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

			$porAmbiente = $this->_request->getParam('porAmbiente');
			$oPorAmbiente = $this->_request->getParam('oPorAmbiente');
			if(!empty($oPorAmbiente)){
				$porAmbiente = $oPorAmbiente;
			}

			$paginaAtual = $this->_request->getParam('pg',1);
			$coluna = $this->_request->getParam('coluna');
			$ordem = $this->_request->getParam('ordem','desc');

			// Referente à seleção de linhas no resultado.
			$numLinhasUrl = $this->_request->getParam('num_linhas',15);
			$numLinhasSelect = $this->_request->getParam('num_linhas_select');
			if($numLinhasSelect == ""){
				$numLinhasSelect = $numLinhasUrl;
			}
			$this->view->numLinhasSelect = $numLinhasSelect;

//			if($tipoBusca == 0) {
//				$ambitentes = AmbienteQuery::create()->paginate($paginaAtual, $numLinhasSelect);
//			}else{
//				$ambitentes = AmbienteQuery::create()
//					->filterByNoAmbiente("%$porAmbiente%")
//					->setIgnoreCase("%$porAmbiente%")
//					->paginate($paginaAtual, $numLinhasSelect);
//			}

			// Inicia a query.
			$query = AmbienteQuery::create();

			// Referente ao filtro.
			if(!empty($tipoBusca)) {
				$query->filterByNoAmbiente("%$porAmbiente%")->setIgnoreCase("%$porAmbiente%");
			}
			switch($coluna) {
				case 1:
					$query->orderByNoAmbiente($ordem);
					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($oTarefa);

//			echo "<pre>";
//			foreach($oTarefa as $tarefa){
//				print_r($tarefa);
//			}
//			exit;

			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/ambiente/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porAmbiente/$porAmbiente/coluna/$coluna/ordem/$ordem");

			$this->view->ordem = $ordem;
			$this->view->aOrdem = $ordem;
			$this->view->coluna = $coluna;
			$this->view->aColuna = $coluna;
			$this->view->pg = $paginaAtual;
			$this->view->aObjAmbiente = $oTarefa;
			$this->view->oTotal = $oTotal;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porAmbiente = $porAmbiente;
		}catch (Exception $e){
			echo $e->getMessage();
		}
	}
	
	
	public function validarAction(){
		$this->_helper->viewRenderer->setNoRender();
		$this->_helper->layout->disableLayout();
                
		$no_ambiente = trim($this->_request->getParam('no_ambiente'));

        $amb = AmbienteQuery::create()
            ->filterByNoAmbiente($no_ambiente)
            ->setIgnoreCase(true)
            ->findOne();

        if(!$amb){
            print 'true';
        }else{
            print 'false';
        }
	}
	
	public function adicionarAction() {
		try {
			$co_ambiente = $this->_request->getParam('co_ambiente');
			$num_linhas = $this->_request->getParam('num_linhas');
			$tipoBusca = $this->_request->getParam('tipoBusca');
			$porAmbiente = $this->_request->getParam('porAmbiente');
			$coluna = $this->_request->getParam('coluna');
			$ordem = $this->_request->getParam('ordem');
			$pg = $this->_request->getParam('pg');

//			echo "num_linhas: ".$num_linhas; echo "<br />";
//			echo "tipoBusca: ".$tipoBusca; echo "<br />";
//			echo "porAmbiente: ".$porAmbiente; echo "<br />";
//			echo "coluna: ".$coluna; echo "<br />";
//			echo "ordem: ".$ordem; echo "<br />";
//			echo "pg: ".$pg; echo "<br />";

			$this->view->num_linhas = $num_linhas;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->porAmbiente = $porAmbiente;
			$this->view->coluna = $coluna;
			$this->view->ordem = $ordem;
			$this->view->pg = $pg;



			$no_amb = AmbienteQuery::create()->filterByCoAmbiente($co_ambiente)->findOne();
			if (!empty($no_amb)) {
				$this->view->no_amb = $no_amb->getNoAmbiente();
			}

			if ($this->_request->isPost()) {
				try {
					if ($co_ambiente) {
						$oAmbiente = AmbienteQuery::create()->filterByCoAmbiente($co_ambiente)->findOne();
					} else {
						$oAmbiente = new Ambiente();
					}

					$oAmbiente->setNoAmbiente(trim($this->_request->getParam('no_ambiente')));

					$oAmbiente->save();

					$this->_helper->mensagem('mensagem_success', "Ambiente cadastrada com sucesso.");
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'ambiente', 'manutencao');


				} catch (Exception $e) {
					$this->_helper->mensagem('mensagem_warning', "Erro ao cadastrar." . $e->getMessage());
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'ambiente', 'manutencao');
				}

			} else {
				if ($co_ambiente) {
					$this->view->aObjAmbiente = AmbienteQuery::create()->filterByCoAmbiente($co_ambiente)->findOne();
				} else {
					$this->view->aObjAmbiente = new Ambiente();
				}
			}
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
	
		$co_ambiente = $this->_request->getParam('co_ambiente');
		$oAmbiente = AmbienteQuery::create()->filterByCoAmbiente($co_ambiente)->findOne(); 
		
		try {
			$oAmbiente->delete();
			$this->_helper->mensagem('mensagem_warning','Ambiente excluído com sucesso!');
		
		}catch (Exception $e) {
			$this->_helper->mensagem('mensagem_warning','Não foi possivel excluir o Ambiente!');
		}
		$this->_helper->_redirector->gotoSimpleAndExit('listar', 'ambiente','manutencao');
	}
}	