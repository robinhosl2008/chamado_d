<?php
class Manutencao_OrgaoController extends Zend_Controller_Action {
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

            $porOrgao = $this->_request->getParam('porOrgao');
            $oPorOrgao = $this->_request->getParam('oPorOrgao');
            if(!empty($oPorOrgao)){
                $porOrgao = $oPorOrgao;
            }

            $porSigla = $this->_request->getParam('porSigla');
            $oPorSigla = $this->_request->getParam('oPorSigla');
            if(!empty($oPorSigla)){
                $porSigla = $oPorSigla;
            }

            $paginaAtual = $this->_request->getParam('pg',1);
            $coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
            $ordem = $this->_request->getParam('ordem', "asc"); // Ordem selecionada pelo usuário.
            $paginacao = $this->_request->getParam('pagination'); // Determina se a ordenação deve ser alterada ou não.
            $pag_ordem = $this->_request->getParam('pag_ordem'); // Variável que conserva a ordem anterior.

//echo "porSigla: ".$porSigla; echo "<br />";
//echo "porOrgao: ".$porOrgao; echo "<br />";
//echo "tipoBusca: ".$tipoBusca; echo "<br />";

            // Referente à seleção de linhas no resultado.
            $numLinhasUrl = $this->_request->getParam('num_linhas',15);
            $numLinhasSelect = $this->_request->getParam('num_linhas_select');
            if($numLinhasSelect == ""){
                $numLinhasSelect = $numLinhasUrl;
            }
            $this->view->numLinhasSelect = $numLinhasSelect;

            //$result = OrgaoPeer::getOrgao($this->_pdo, $tipoBusca, $porOrgao, $porSigla, $numLinhasSelect, $paginaAtual);

            // Inicia a query.
            $query = OrgaoQuery::create();

            // Referente ao filtro.
            switch($tipoBusca){
                case 1:
                    $query->filterByNoOrgao("%$porOrgao%")->setIgnoreCase("%$porOrgao%");
                    break;
                case 2:
                    $query->filterBySgOrgao("%$porSigla%")->setIgnoreCase("%$porSigla%");
                    break;
            }

            // Realiza a troca da ordem.
            if($paginacao != ""){
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
                    $query->orderByNoOrgao($ordem);
                    break;
                case 2:
                    $query->orderByNuTelefoneOrgao($ordem);
                    break;
                case 3:
                    $query->orderBySgOrgao($ordem);
                    break;
            }

            // Pagina o resultado e pega a quantidade de registros encontrados.
            $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
            $oTotal = count($oTarefa);

            $this->view->ordem = $ordem;
            $this->view->pag_ordem = $pag_ordem;
            $this->view->coluna = $coluna;
            $this->view->nr_chamado_asc_desc = $ordem;
            $this->view->paginacao = $paginacao;

            $this->view->oTotal = $oTotal;
            $this->view->aObjOrgao = $oTarefa;
            $this->view->tipoBusca = $tipoBusca;
            $this->view->porOrgao = $porOrgao;
            $this->view->porSigla = $porSigla;
            $this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/orgao/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porOrgao/$porOrgao/porSigla/$porSigla/coluna/$coluna/pagination//pag_ordem/$pag_ordem");
        }catch (Exception $e){
            echo $e;
        }
	}

	public function validarNoOrgaoAction(){
            
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();

        $no_orgao    = trim($this->_request->getParam('no_orgao'));


        $orgao = OrgaoQuery::create()
            ->filterByNoOrgao($no_orgao)
            ->setIgnoreCase(true)
            ->findOne();

        if($orgao == ""){
                print 'true';
        }else{
                print 'false';
        }
    }
        
	public function validarNuTelefoneOrgaoAction(){
            
            $this->_helper->viewRenderer->setNoRender();
            $this->_helper->layout->disableLayout();
            
            $co_orgao    = $this->_request->getParam('co_orgao');
            //$no_orgao    = trim($this->_request->getParam('no_orgao'));
            $nu_telefone = $this->_request->getParam('tl_orgao');
            //$sg_orgao    = trim($this->_request->getParam('sg_orgao'));
            
            if ($co_orgao) {
                $orgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne();

                if($nu_telefone != $orgao->getNuTelefoneOrgao()){
                        print 'true';
                }else{
                        print 'false';
                }
            }  else {
                $orgao = OrgaoQuery::create()->filterByNoOrgao($nu_telefone)->findOne();

                if($orgao == ""){
                        print 'true';
                }else{
                        print 'false';
                }
            }

	}
        
	public function validarSiglaOrgaoAction(){
            
            $this->_helper->viewRenderer->setNoRender();
            $this->_helper->layout->disableLayout();
            
            $co_orgao    = $this->_request->getParam('co_orgao');
            //$no_orgao    = trim($this->_request->getParam('no_orgao'));
            //$nu_telefone = $this->_request->getParam('tl_orgao');
            $sg_orgao    = trim($this->_request->getParam('sg_orgao'));
            
            if ($co_orgao) {
                $orgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne();

                if($sg_orgao != $orgao->getSgOrgao()){
                        print 'true';
                }else{
                        print 'false';
                }
            }  else {
                $orgao = OrgaoQuery::create()->filterBySgOrgao($sg_orgao)->findOne();
                
                if($sigla == ""){
                        print 'true';
                }else{
                        print 'false';
                }
            }

	}
	
	public function adicionarAction() {
        try {
            $co_orgao    = $this->_request->getParam('co_orgao');
            $no_orgao    = $this->_request->getParam('no_orgao');
            $nu_telefone = $this->_request->getParam('tl_orgao');
            $sg_orgao    = $this->_request->getParam('sg_orgao');

            $num_linhas    = $this->_request->getParam('num_linhas');
            $tipo_busca    = $this->_request->getParam('tipoBusca');
            $por_orgao    = $this->_request->getParam('porOrgao');
            $por_sigla    = $this->_request->getParam('porSigla');
            $pg    = $this->_request->getParam('pg');
            $pag_ordem    = $this->_request->getParam('pag_ordem');
            $paginacao    = $this->_request->getParam('pagination');
            $coluna    = $this->_request->getParam('coluna');
            $ordem    = $this->_request->getParam('ordem');
//
//            echo "co_orgao: ".$co_orgao; echo "<br />";
//            echo "no_orgao: ".$no_orgao; echo "<br />";
//            echo "nu_telefone: ".$nu_telefone; echo "<br />";
//            echo "sg_orgao".$sg_orgao; echo "<br />";
//
//            echo "num_linhas: ".$num_linhas; echo "<br />";
//            echo "tipoBusca: ".$tipo_busca; echo "<br />";
//            echo "porOrgao: ".$por_orgao; echo "<br />";
//            echo "porSigla: ".$por_sigla; echo "<br />";
//            echo "pg: ".$pg; echo "<br />";
//            echo "pag_ordem: ".$pag_ordem; echo "<br />";
//            echo "pagination: ".$paginacao; echo "<br />";
//            echo "coluna: ".$coluna; echo "<br />";
//            echo "ordem: ".$ordem; echo "<br />";

            if ($this->_request->isPost()) {

                if ($co_orgao) {
                        $oOrgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne();
                } else {
                        $oOrgao = new Orgao();
                }

                $oOrgao->setNoOrgao($no_orgao);
                $oOrgao->setNuTelefoneOrgao($nu_telefone);
                $oOrgao->setSgOrgao($sg_orgao);
                $oOrgao->save();

                $this->_helper->mensagem('mensagem_success',"Orgão cadastrado com sucesso.");
                $this->_helper->_redirector->gotoSimpleAndExit('listar', 'orgao','manutencao');

            } else {

                if ($co_orgao) {
                    $this->view->aObjOrgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne();
                } else {
                    $this->view->aObjOrgao = new Orgao();
                }
            }

            $this->view->numLinhasSelect = $num_linhas;
            $this->view->tipoBusca = $tipo_busca;
            $this->view->porOrgao = $por_orgao;
            $this->view->porSigla = $por_sigla;
            $this->view->pg = $pg;
            $this->view->pag_ordem = $pag_ordem;
            $this->view->coluna = $coluna;
            $this->view->ordem = $ordem;

        } catch (Exception $e) {
            $this->_helper->mensagem('mensagem_warning',"Erro ao cadastrar o novo orgão." . $e->getMessage());
            $this->_helper->_redirector->gotoSimpleAndExit('listar', 'orgao', 'manutencao');
        }
    }
	
	public function editarAction() {
		$this->adicionarAction();
	}
	
	public function excluirAction() {

            $this->_helper->viewRenderer->setNoRender();
            $this->_helper->layout->disableLayout();

            $co_orgao = $this->_request->getParam('co_orgao');
            $oOrgao = OrgaoQuery::create()->filterByCoOrgao($co_orgao)->findOne(); 

            try {
                    $oOrgao->delete();
                    $this->_helper->mensagem('mensagem_success','Orgao excluído com sucesso!');

            }catch (Exception $e) {
                    $this->_helper->mensagem('mensagem_warning','Não foi possivel excluir o orgão!'. $e->getMessage());
            }
            $this->_helper->_redirector->gotoSimpleAndExit('listar', 'orgao','manutencao');
         
         
	}
}	