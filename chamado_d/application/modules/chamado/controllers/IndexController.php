<?php

// use Base_Services_MeusChamadosADM as MeusChamadosADM;
/**
  controller@no_controller=index|co_identificacao=C7|no_label=VisualHospub|ds_controller=Tela inicial do Visual Hospub.@
 */

//use Services\MeusChamadosADM;

class Chamado_IndexController extends Zend_Controller_Action {

    public function ini() {
    	$this->_log = Zend_Registry::get('log');
    	$this->_pdo = Zend_Registry::get('pdo');
    	$this->_fileLog = New Base_Util_FileLog();
    	$this->view->request = $this->_request;

    }

    public function manualAction(){
        $this->_helper->layout->disableLayout();
        //$this->_helper->viewRenderer->setNoRender(true);
    }

	public function graficoUsuarioFechamentoAction() {
		$co_projeto  = $this->_request->getParam('co_projeto');
		
		try {
			$aObjProjeto =  ProjetoQuery::create()
			->join('Projeto.RlOrgaoProjeto')
			->addJoinCondition('RlOrgaoProjeto', 'RlOrgaoProjeto.CoProjeto = Projeto.CoProjeto' )
			->addJoinCondition('RlOrgaoProjeto', 'RlOrgaoProjeto.StOgaoProjeto = ?', true)
			->join('RlOrgaoProjeto.Orgao')
			->addJoinCondition('Orgao','Orgao.CoOrgao = RlOrgaoProjeto.CoOrgao')
			->join('Orgao.RlUsuarioOrgao')
			->addJoinCondition('RlUsuarioOrgao',  'RlOrgaoProjeto.CoOrgao = Orgao.CoOrgao')
			->join('RlUsuarioOrgao.Usuario')
			->addJoinCondition('Usuario',  'Usuario.CoUsuario = RlUsuarioOrgao.CoUsuario')
			->addJoinCondition('Usuario',  'Usuario.CoUsuario = ?', CO_USUARIO)
			->groupByNoProjeto()
			->groupByCoProjeto()
			->orderByNoProjeto()
			->find();

			$this->view->aObjProjeto = $aObjProjeto;
			$this->view->resultGrafico = "[]";
		
		} catch (Exception $e) {
			print_r($e);
		}
		
		if($co_projeto){
			
			$totalTarefas = TarefaQuery::create()
			->join('Tarefa.RlProjetoVersaoAmb')
				->addJoinCondition('RlProjetoVersaoAmb', 'Tarefa.CoSeqProjVerAmb = RlProjetoVersaoAmb.CoSeqProjVerAmb ')
			->join('RlProjetoVersaoAmb.Projeto')
				->addJoinCondition('Projeto','RlProjetoVersaoAmb.CoProjeto = Projeto.CoProjeto')
				->addJoinCondition('Projeto','Projeto.CoProjeto =?', $co_projeto)
			->join('Tarefa.UsuarioTarefa')
			->withColumn('count(Tarefa.CoUsuarioFechamento)', 'Total')
				->addJoinCondition('UsuarioTarefa', 'UsuarioTarefa.CoTarefa = Tarefa.CoTarefa' )
				->addJoinCondition('UsuarioTarefa', 'UsuarioTarefa.CoUsuario = Tarefa.CoUsuarioFechamento')
			->join('UsuarioTarefa.Usuario')
			
			->select(array('Usuario.NoUsuario'))
			->groupBy('Usuario.NoUsuario')
			->find();

				
			$strGrafico = "[";
			foreach($totalTarefas as $tarefa){
				$strGrafico .= "['".$tarefa['Usuario.NoUsuario'] . "','" . $tarefa['Total']."'],";
			}
			$strGrafico .= "]";
			$this->view->resultGrafico = $strGrafico;
			$this->view->objProjeto = ProjetoQuery::create()->filterByCoProjeto($co_projeto)->findOne();

		}
		
        
    }

    public function linkAction() {
        //$this->_helper->viewRenderer->setNoRender();
        //$this->_helper->layout->disableLayout();

    echo "Controller Link";

    }

    public function indexAction() {
        // Pega as PRIORIDADES e ordena de forma descendente.
        $this->view->oPrioridade = PrioridadeQuery::create()->orderByCoPrioridade('desc')->find();

        // Pega os STATUS.
        $oStatus = StatusQuery::create()->filterBySituacao(true)->orderByNoStatus()->find();

        $filtro = $this->_request->getParam('filtro', 'T'); // Filtro numérico ou não numérico.
        $paginaAtual = $this->_request->getParam('pg',1); // Página atual.
        $coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
        $ordem = $this->_request->getParam('ordem', "desc"); // Ordem selecionada pelo usuário.

        $pagination = $this->_request->getParam('pagination'); // Determina se a ordenação deve ser alterada ou não.
        $oPagination = $this->_request->getParam('oPagination'); // Determina se a ordenação deve ser alterada ou não.
        if($oPagination == false && $oPagination != null){
            $pagination = $oPagination;
        }

        $pag_ordem = $this->_request->getParam('pag_ordem'); // Variável que conserva a ordem anterior.
        $por_modulo = $this->_request->getParam('por_modulo');
        $oPor_modulo = $this->_request->getParam('oPor_modulo');
        if($oPor_modulo){
            $por_modulo = $oPor_modulo;
        }

        // Referente à seleção de linhas no resultado.
        if($this->_request->isPost()){
            $numLinhasSelect = $this->_request->getPost('num_linhas_select');
        }else{
            $numLinhasSelect = $this->_request->getParam('num_linhas',15);
        }

        if ($this->_request->isPost()) {
            $por_usuario = $this->_request->getParam('por_usuario');
            $pr_chamado = $this->_request->getParam('pri_chamado');
            $tipoBusca = $this->_request->getPost('tipo_tarefa');
            $nrTarefa = $this->_request->getPost('num_tarefa');
            $titulo = $this->_request->getPost('titulo');
            $data = $this->_request->getPost('data');
            $num_sirius = $this->_request->getPost('num_sirius');
            $buscaStatus = $this->_request->getPost('buscaStatus');

            $oData = explode("/", $data);
            $novadata = $oData[2]."-".$oData[1]."-".$oData[0];
        }  else {
            $por_usuario = $this->_request->getParam('no_usuario');
            $pr_chamado = $this->_request->getParam('pr_chamado');
            $tipoBusca = $this->_request->getParam('tipo_tarefa');
            $nrTarefa = $this->_request->getParam('num_tarefa');
            $titulo = $this->_request->getParam('titulo');
            $data = $this->_request->getParam('data');
            $num_sirius = $this->_request->getPost('num_sirius');
            $buscaStatus = $this->_request->getParam('buscaStatus');

            $novadata = $data;
        }

        if(str_replace('/','-',$novadata)){
            $novadata = str_replace('/','-',$novadata);
        }

        // Inicia a pesquisa.
        $query = TarefaQuery::create();

        // Bloco que cuida do filtro numérico ou não numérico.
        if(is_numeric($filtro)){
            $query->filterByCoStatus($filtro);
        }

        // Se tem perfil multi unidades ou solicitante.
        if(CO_PERFIL == CO_PERFIL_ADM_UNIDADE || CO_PERFIL == CO_PERFIL_MULTI_UNIDADES) {
            $query->useOrgaoQuery()
                    ->useRlUsuarioOrgaoQuery()
                        ->filterByCoUsuario(CO_USUARIO)
                        ->filterByStRlUsuarioOrgao('TRUE')
                    ->endUse()
                ->endUse();
        }elseif(CO_PERFIL == CO_PERFIL_SOLICITANTE){
            $query->filterByCoOrgao(CO_USUARIO_ORGAO);
        }

        // Bloco que cuida do filtro.
        switch($tipoBusca){

            case 1:
                $query->filterByNrTarefa($nrTarefa);
                break;

            case 2:
                $query->filterByNoResumo("%$titulo%")
                    ->setIgnoreCase("%$titulo%");
                break;

            case 3:
                $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                break;

            case 4:
                $query->filterByCoPrioridade($pr_chamado);
                break;

            case 5:
                $usuario = UsuarioQuery::create()
                    ->filterByNoUsuario("%$por_usuario%")
                    ->setIgnoreCase("%$por_usuario%")
                    ->findOne();

                $cod_usuario = $usuario->getCoUsuario();

                $query->filterByCoUsuarioAberto($cod_usuario);
                break;

            case 6:
                $query->filterByNrSirius($num_sirius);
                break;

            case 7:
                $query->filterByCoStatus($buscaStatus);
                break;

            case 8:
                $query->filterByCoSeqModuloProj($por_modulo);
                break;
        }

        // Realiza a troca da ordem.
        if($pagination == true){
            if($ordem == "asc"){
                $ordem = "desc";
            }else{
                $ordem = "asc";
            }
        }else{
            $ordem = $pag_ordem;
        }
        $pag_ordem = $ordem;

        // Bloco que cuida da ordenação.
        switch($coluna){

            case 1:
                $query->orderByNrTarefa($ordem);
                break;

            case 2:
                $query->useRlProjetoVersaoAmbQuery()
                    ->useProjetoQuery()
                        ->orderByNoProjeto($ordem)
                    ->endUse()
                ->endUse()->orderByDtInicio('desc');
                break;

            case 3:
                $query->orderByNoResumo($ordem);
                break;

            case 4:
                $query->orderByDtInicio($ordem);
                break;

            case 5:
                $query->orderByCoPrioridade($ordem)
                    ->orderByDtInicio('desc');
                break;

            case 6:
                $query->useStatusQuery()
                        ->orderByNoStatus($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 7:
                $query->useOrgaoQuery()
                        ->orderByNoOrgao($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 8:
                $query->orderByDtFim($ordem);
                break;

            default:
                $query->orderBy('Tarefa.CoPrioridade', 'desc');
                break;
        }

        // Pagina o resultado e pega a quantidade de registros encontrados.
        $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
        $oTotal = count($oTarefa);

//        echo "<pre>";
//        foreach($oTarefa as $tarefa) {
//            print_r($tarefa);
//        }
//        exit;

        $this->view->pag_ordem = $pag_ordem;
        $aData = str_replace('/','-',$data);
        $this->view->aData = $aData;

        $this->view->tipo_tarefa = $tipoBusca;
        $this->view->tipoTarefa = $tipoBusca;

        $this->view->pr_chamado = $pr_chamado;
        $this->view->prChamado = $pr_chamado;

        $this->view->oStatus = $oStatus;
        $this->view->busca_status = $buscaStatus;

        $this->view->data = $data;
        $this->view->por_usuario = $por_usuario;
        $this->view->nr_chamado_asc_desc = $ordem;
        $this->view->numLinhasSelect = $numLinhasSelect;
        $this->view->nunLinhasUrl = $numLinhasSelect;

        $this->view->modulos = TbModuloProjetoQuery::create()->filterByStModulo(true)->find();

        $this->view->por_modulo = $por_modulo;
        $this->view->num_tarefa = $nrTarefa;
        $this->view->num_sirius = $num_sirius;
        $this->view->titulo = $titulo;
        $this->view->filtro = $filtro;
        $this->view->oTarefa = $oTarefa;
        $this->view->page = $paginaAtual;
        $this->view->pg = $paginaAtual;
        $this->view->ordem = $ordem;
        $this->view->coluna = $coluna;

        $this->view->totalRec = $oTotal;
        $this->view->pag = 'index';
        $orgao = "";

        $this->view->paginacao = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao, "/chamado/index/index/num_linhas/$numLinhasSelect/filtro/$filtro/tipo_tarefa/$tipoBusca/data/$novadata/num_tarefa/$nrTarefa/num_sirius/$num_sirius/titulo/$titulo/por_usuario/$por_usuario/pr_chamado/$pr_chamado/buscaStatus/$buscaStatus/por_modulo/$por_modulo/coluna/$coluna/oPagination/null/pag_ordem/$pag_ordem");
    }
    
    public function listarCategoriaAction(){
    
    	$oStatus = StatusQuery::create()->filterBySituacao(true)->find();
    	 
    	$this->view->oPrioridade = PrioridadeQuery::create()->orderByCoPrioridade()->find();

        $filtro = $this->_request->getParam('filtro', 'T');
    	$paginaAtual = $this->_request->getParam('pg',1);
        $coluna = $this->_request->getParam('coluna');
        $ordem = $this->_request->getParam('ordem', "desc");
        $pagination = $this->_request->getParam('pagination');

        $por_modulo = $this->_request->getParam('por_modulo');
        $oPor_modulo = $this->_request->getParam('oPor_modulo');
        if($oPor_modulo){
            $por_modulo = $oPor_modulo;
        }

        $pag_ordem = $this->_request->getParam('pag_ordem');

        // Referente à seleção de linhas no resultado.
        $numLinhasUrl = $this->_request->getParam('num_linhas',15);
        $numLinhasSelect = $this->_request->getParam('num_linhas_select');
        if($numLinhasSelect == ""){
            $numLinhasSelect = $numLinhasUrl;
        }
        $this->view->numLinhasSelect = $numLinhasSelect;

        if ($this->_request->isPost()) {
            $por_usuario = $this->_request->getParam('por_usuario');
            $pr_chamado = $this->_request->getParam('pri_chamado');
            $tipoBusca = $this->_request->getPost('tipo_tarefa');
            $nrTarefa = $this->_request->getPost('num_tarefa');
            $titulo = $this->_request->getPost('titulo');
            $data = $this->_request->getPost('data');
            $num_sirius = $this->_request->getPost('num_sirius');
            $buscaStatus = $this->_request->getPost('buscaStatus');
            
            $oData = explode("/", $data);
            $novadata = $oData[2]."-".$oData[1]."-".$oData[0];
        }  else {
            $por_usuario = $this->_request->getParam('por_usuario');
            $pr_chamado = $this->_request->getParam('pr_chamado');
            $tipoBusca = $this->_request->getParam('tipo_tarefa');
            $nrTarefa = $this->_request->getParam('num_tarefa');
            $titulo = $this->_request->getParam('titulo');
            $data = $this->_request->getParam('data');
            $num_sirius = $this->_request->getPost('num_sirius');
            $buscaStatus = $this->_request->getParam('buscaStatus');
            
            $novadata = $data;
        }

        $aObjCategoria = CategoriaQuery::create()->find();

        foreach ($aObjCategoria as $categoria ){
            $idCategorias[] = $categoria->getCoCategoria();
        }

        $this->view->aObjCategoria = $aObjCategoria;

        // Inicia a pesquisa.
        $query = TarefaQuery::create();

        // Bloco que cuida do filtro numérico ou não numérico.
        if(is_numeric($filtro)){
            $query->filterByCoCategoria($filtro);
        }

        // Se tem perfil multi unidades ou solicitante.
        if(CO_PERFIL == CO_PERFIL_ADM_UNIDADE || CO_PERFIL == CO_PERFIL_MULTI_UNIDADES) {
            $query->useOrgaoQuery()
                    ->useRlUsuarioOrgaoQuery()
                        ->filterByCoUsuario(CO_USUARIO)
                        ->filterByStRlUsuarioOrgao('TRUE')
                    ->endUse()
                ->endUse();
        }elseif(CO_PERFIL == CO_PERFIL_SOLICITANTE){
            $query->filterByCoOrgao(CO_USUARIO_ORGAO);
        }

        // Bloco que cuida do filtro.
        switch($tipoBusca){

            case 1:
                $query->filterByNrTarefa($nrTarefa);
                break;

            case 2:
                $query->filterByNoResumo("%$titulo%")
                    ->setIgnoreCase("%$titulo%");
                break;

            case 3:
                $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                break;

            case 4:
                $query->filterByCoPrioridade($pr_chamado);
                break;

            case 5:
                $usuario = UsuarioQuery::create()
                    ->filterByNoUsuario("%$por_usuario%")
                    ->setIgnoreCase("%$por_usuario%")
                    ->findOne();

                $cod_usuario = $usuario->getCoUsuario();

                $query->filterByCoUsuarioAberto($cod_usuario);
                break;

            case 6:
                $query->filterByNrSirius($num_sirius);
                break;

            case 7:
                $query->filterByCoStatus($buscaStatus);
                break;

            case 8:
                $query->filterByCoSeqModuloProj($por_modulo);
                break;
        }

        // Realiza a troca da ordem.
        if($pagination != ""){
            if($ordem == "asc"){
                $ordem = "desc";
            }else{
                $ordem = "asc";
            }
        }else{
            $ordem = $pag_ordem;
        }
        $pag_ordem = $ordem;

        // Bloco que cuida da ordenação.
        switch($coluna){

            case 1:
                $query->orderByNrTarefa($ordem);
                break;

            case 2:
                $query->useRlProjetoVersaoAmbQuery()
                    ->useProjetoQuery()
                    ->orderByNoProjeto($ordem)
                    ->endUse()
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 3:
                $query->orderByNoResumo($ordem);
                break;

            case 4:
                $query->orderByDtInicio($ordem);
                break;

            case 5:
                $query->orderByCoPrioridade($ordem)
                    ->orderByDtInicio('desc');
                break;

            case 6:
                $query->useStatusQuery()
                    ->orderByNoStatus($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 7:
                $query->useOrgaoQuery()
                    ->orderByNoOrgao($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 8:
                $query->orderByDtFim($ordem);
                break;

            default:
                $query->orderBy('Tarefa.CoPrioridade', 'desc');
                break;
        }

        // Pagina o resultado e verifica a quantidade.
        $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
        $oTotal = count($oTarefa);

        $this->view->pag_ordem = $pag_ordem;
        $aData = str_replace('/','-',$data);
        $this->view->aData = $aData;

        $this->view->pr_chamado = $pr_chamado;
        $this->view->pri_chamado = $pr_chamado;
        $this->view->por_usuario = $por_usuario;

        $this->view->tipo_tarefa = $tipoBusca;
        $this->view->tipoTarefa = $tipoBusca;
        $this->view->num_tarefa = $nrTarefa;
        $this->view->num_sirius = $num_sirius;
        $this->view->titulo = $titulo;
        $this->view->data = $novadata;
        $this->view->filtro = $filtro;
        $this->view->oTarefa = $oTarefa;
        $this->view->oStatus = $oStatus;
        $this->view->busca_status = $buscaStatus;
        
    	$this->view->totalRec = $oTotal;
    	$this->view->pg = $paginaAtual;
    	$this->view->pag = 'listar-categoria';
        $this->view->pg = $paginaAtual;
        $this->view->ordem = $ordem;
        $this->view->coluna = $coluna;
        $this->view->nr_chamado_asc_desc = $ordem;
        $this->view->numLinhasSelect = $numLinhasSelect;

        $this->view->modulos = TbModuloProjetoQuery::create()->filterByStModulo(true)->find();
        $this->view->por_modulo = $por_modulo;
        $orgao = "";

        $this->view->paginacao = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao, "/chamado/index/listar-categoria/num_linhas/$numLinhasSelect/filtro/$filtro/tipo_tarefa/$tipoBusca/data/$novadata/num_tarefa/$nrTarefa/num_sirius/$num_sirius/titulo/$titulo/por_usuario/$por_usuario/pr_chamado/$pr_chamado/buscaStatus/$buscaStatus/por_modulo/$por_modulo/coluna/$coluna/pagination//pag_ordem/$pag_ordem");

    }
    
    public function listarProjetoAction(){
    	 
    	$this->view->oStatus = StatusQuery::create()->filterBySituacao(true)->find();
    	$this->view->oPrioridade = PrioridadeQuery::create()->orderByCoPrioridade()->find();

        $oFiltro = $this->_request->getParam('filtro', 'T');
        if(is_array($oFiltro)){
            $filtro = $oFiltro['0'];
        }else{
            $filtro = $oFiltro;
        }

    	$paginaAtual = $this->_request->getParam('pg',1);
        $coluna = $this->_request->getParam('coluna');
        $ordem = $this->_request->getParam('ordem', "desc");
        $pagination = $this->_request->getParam('pagination');
        $pag_ordem = $this->_request->getParam('pag_ordem');

        $por_modulo = $this->_request->getParam('por_modulo');
        $oPor_modulo = $this->_request->getParam('oPor_modulo');
        if($oPor_modulo){
            $por_modulo = $oPor_modulo;
        }

        $buscaStatus = $this->_request->getParam('buscaStatus');

        // Referente à seleção de linhas no resultado.
        $numLinhasUrl = $this->_request->getParam('num_linhas',15);
        $numLinhasSelect = $this->_request->getParam('num_linhas_select');
        if($numLinhasSelect == ""){
            $numLinhasSelect = $numLinhasUrl;
        }
        $this->view->numLinhasSelect = $numLinhasSelect;

        if ($this->_request->isPost()) {
            $por_usuario = $this->_request->getParam('por_usuario');
            $pr_chamado = $this->_request->getPost('pr_chamado');
            $tipoBusca = $this->_request->getPost('tipo_tarefa');
            $nrTarefa = $this->_request->getPost('num_tarefa');
            $num_sirius = $this->_request->getPost('num_sirius');
            $titulo = $this->_request->getPost('titulo');
            $data = $this->_request->getPost('data');
            $buscaStatus = $this->_request->getPost('buscaStatus');
            
            $oData = explode("/", $data);
            $novadata = $oData[2]."-".$oData[1]."-".$oData[0];
        }  else {
            $por_usuario = $this->_request->getParam('por_usuario');
            $pr_chamado = $this->_request->getParam('pr_chamado');
            $tipoBusca = $this->_request->getParam('tipo_tarefa');
            $nrTarefa = $this->_request->getParam('num_tarefa');
            $num_sirius = $this->_request->getPost('num_sirius');
            $titulo = $this->_request->getParam('titulo');
            $data = $this->_request->getParam('data');
            $buscaStatus = $this->_request->getParam('buscaStatus');
            
            $novadata = $data;
        }

    	$aObjProjeto =  ProjetoQuery::create()
            ->groupByNoProjeto()
            ->groupByCoProjeto()
            ->orderByNoProjeto()
            ->useRlOrgaoProjetoQuery()
            ->filterByStOgaoProjeto(true)
            ->endUse()
            ->find();

        // Inicia a pesquisa.
        $query = TarefaQuery::create();

        // Bloco que cuida do filtro numérico ou não numérico.
        if(is_numeric($filtro)){
            $query->useRlProjetoVersaoAmbQuery()
                ->useProjetoQuery()
                    ->filterByCoProjeto($filtro)
                ->endUse()
            ->endUse();
        }

        // Se tem perfil multi unidades ou solicitante.
        if(CO_PERFIL == CO_PERFIL_ADM_UNIDADE || CO_PERFIL == CO_PERFIL_MULTI_UNIDADES) {
            $query->useOrgaoQuery()
                    ->useRlUsuarioOrgaoQuery()
                        ->filterByCoUsuario(CO_USUARIO)
                        ->filterByStRlUsuarioOrgao('TRUE')
                    ->endUse()
                ->endUse();
        }elseif(CO_PERFIL == CO_PERFIL_SOLICITANTE){
            $query->filterByCoOrgao(CO_USUARIO_ORGAO);
        }

        // Bloco que cuida do filtro.
        switch($tipoBusca){

            case 1:
                $query->filterByNrTarefa($nrTarefa);
                break;

            case 2:
                $query->filterByNoResumo("%$titulo%")
                    ->setIgnoreCase("%$titulo%");
                break;

            case 3:
                $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                break;

            case 4:
                $query->filterByCoPrioridade($pr_chamado);
                break;

            case 5:
                $usuario = UsuarioQuery::create()
                    ->filterByNoUsuario("%$por_usuario%")
                    ->setIgnoreCase("%$por_usuario%")
                    ->findOne();

                $cod_usuario = $usuario->getCoUsuario();

                $query->filterByCoUsuarioAberto($cod_usuario);
                break;

            case 6:
                $query->filterByNrSirius($num_sirius);
                break;

            case 7:
                $query->filterByCoStatus($buscaStatus);
                break;

            case 8:
                $query->filterByCoSeqModuloProj($por_modulo);
                break;
        }

        // Realiza a troca da ordem.
        if($pagination != ""){
            if($ordem == "asc"){
                $ordem = "desc";
            }else{
                $ordem = "asc";
            }
        }else{
            $ordem = $pag_ordem;
        }
        $pag_ordem = $ordem;

        // Bloco que cuida da ordenação.
        switch($coluna){

            case 1:
                $query->orderByNrTarefa($ordem);
                break;

            case 2:
                $query->useRlProjetoVersaoAmbQuery()
                    ->useProjetoQuery()
                    ->orderByNoProjeto($ordem)
                    ->endUse()
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 3:
                $query->orderByNoResumo($ordem);
                break;

            case 4:
                $query->orderByDtInicio($ordem);
                break;

            case 5:
                $query->orderByCoPrioridade($ordem)
                    ->orderByDtInicio('desc');
                break;

            case 6:
                $query->useStatusQuery()
                    ->orderByNoStatus($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 7:
                $query->useOrgaoQuery()
                    ->orderByNoOrgao($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 8:
                $query->orderByDtFim($ordem);
                break;

            default:
                $query->orderBy('Tarefa.CoPrioridade', 'desc');
                break;
        }

        // Pagina o resultado e verifica a quantidade.
        $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
        $oTotal = count($oTarefa);

        $this->view->tipo_tarefa = $tipoBusca;
        $this->view->num_tarefa = $nrTarefa;
        $this->view->num_sirius = $num_sirius;
        $this->view->titulo = $titulo;
        $this->view->data = $novadata;        
        $this->view->busca_status = $buscaStatus;

    	$this->view->totalRec = $oTotal;
    	$this->view->pg = $paginaAtual;
    	$this->view->pag = 'listar-projeto';
        $this->view->filtro = $filtro;
        $this->view->oTarefa = $oTarefa;

        $this->view->aObjProjeto = $aObjProjeto;
        $this->view->ordem = $ordem;
        $this->view->coluna = $coluna;
        $this->view->nr_chamado_asc_desc = $ordem;
        $this->view->pag_ordem = $pag_ordem;
        $this->view->pr_chamado = $pr_chamado;
        //$this->view->pri_chamado = $pr_chamado;

        $this->view->modulos = TbModuloProjetoQuery::create()->filterByStModulo(true)->find();
        $this->view->por_modulo = $por_modulo;

        $orgao = "";
    	$this->view->paginacao = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao, "/chamado/index/listar-projeto/filtro/$filtro/num_linhas/$numLinhasSelect/filtro/$filtro/tipo_tarefa/$tipoBusca/data/$novadata/num_tarefa/$nrTarefa/num_sirius/$num_sirius/titulo/$titulo/por_usuario/$por_usuario/pr_chamado/$pr_chamado/buscaStatus/$buscaStatus/por_modulo/$por_modulo/coluna/$coluna/pagination//pag_ordem/$pag_ordem");

    	 
    
    }
    
    public function meusChamadosAction() {
    
    	$this->view->oPrioridade = PrioridadeQuery::create()->orderByCoPrioridade()->find();


        $filtro = $this->_request->getParam('filtro', 'T'); // Filtro numérico ou não numérico.
        $paginaAtual = $this->_request->getParam('pg',1); // Página atual.
        $coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
        $ordem = $this->_request->getParam('ordem', "desc"); // Ordem selecionada pelo usuário.

        $pagination = $this->_request->getParam('pagination'); // Determina se a ordenação deve ser alterada ou não.
        $oPagination = $this->_request->getParam('oPagination'); // Determina se a ordenação deve ser alterada ou não.
        if($oPagination == false && $oPagination != null){
            $pagination = $oPagination;
        }

        $pag_ordem = $this->_request->getParam('pag_ordem', "desc"); // Variável que conserva a ordem anterior.
        $o_pr_chamado = $this->_request->getParam('o_pr_chamado'); // Variável que conserva a ordem anterior.

        $por_modulo = $this->_request->getParam('por_modulo');
        $oPor_modulo = $this->_request->getParam('oPor_modulo');
        if($oPor_modulo){
            $por_modulo = $oPor_modulo;
        }

        $tipoBusca = $this->_request->getParam('tipo_tarefa');
        $oTipoBusca = $this->_request->getParam('oTipo_tarefa');
        if($oTipoBusca){
            $tipoBusca = $oTipoBusca;
        }

        // Referente à seleção de linhas no resultado.
        $numLinhasUrl = $this->_request->getParam('num_linhas',15);
        $numLinhasSelect = $this->_request->getParam('num_linhas_select');
        if($numLinhasSelect == ""){
            $numLinhasSelect = $numLinhasUrl;
        }
        $this->view->numLinhasSelect = $numLinhasSelect;

    	if ($this->_request->isPost()) {
            $pr_chamado = $this->_request->getParam('pr_chamado');
            //$tipoBusca = $this->_request->getPost('tipo_tarefa');
            $nrTarefa = $this->_request->getPost('num_tarefa');
            $num_sirius = $this->_request->getPost('num_sirius');
            $titulo = $this->_request->getPost('titulo');
            $data = $this->_request->getPost('data');
            $buscaStatus = $this->_request->getPost('buscaStatus');
            
            $oData = explode("/", $data);
            $novadata = $oData[2].$oData[1].$oData[0];
        }  else {
            $pr_chamado = $this->_request->getParam('pr_chamado');
            //$tipoBusca = $this->_request->getParam('tipo_tarefa');
            $nrTarefa = $this->_request->getParam('num_tarefa');
            $num_sirius = $this->_request->getParam('num_sirius');
            $titulo = $this->_request->getParam('titulo');
            $data = $this->_request->getParam('data');
            $buscaStatus = $this->_request->getParam('buscaStatus');
            
            $novadata = $data;
        }

        // Inicia a pesquisa.
        $query = TarefaQuery::create();

        // Bloco que cuida do filtro numérico ou não numérico.
        if(is_numeric($filtro)){
            $query->filterByCoStatus($filtro);
        }

        // Se tem perfil multi unidades ou solicitante.
        if(CO_PERFIL == CO_PERFIL_ADM_UNIDADE || CO_PERFIL == CO_PERFIL_MULTI_UNIDADES) {
            $query->filterByCoOrgao(CO_USUARIO_ORGAO);
        }elseif(CO_PERFIL == CO_PERFIL_SOLICITANTE){
            $query->filterByCoOrgao(CO_USUARIO_ORGAO)->filterByCoUsuarioAberto(CO_USUARIO);
        }

        // Bloco que cuida do filtro.
        switch($tipoBusca){

            case 1:
                $query->filterByNrTarefa($nrTarefa);
                break;

            case 2:
                $query->filterByNoResumo("%$titulo%")
                    ->setIgnoreCase("%$titulo%");
                break;

            case 3:
                $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                break;

            case 4:
                if(!empty($o_pr_chamado)){
                    $pr_chamado = $o_pr_chamado;
                }
                $query->filterByCoPrioridade($pr_chamado);
                break;

//            case 5:
//                $usuario = UsuarioQuery::create()
//                    ->filterByNoUsuario("%$por_usuario%")
//                    ->setIgnoreCase("%$por_usuario%")
//                    ->findOne();
//
//                $cod_usuario = $usuario->getCoUsuario();
//
//                $query->filterByCoUsuarioAberto($cod_usuario);
//                break;

            case 5:
                $query->filterByNrSirius($num_sirius);
                break;

            case 7:
                $query->filterByCoStatus($buscaStatus);
                break;

            case 8:
                $query->filterByCoSeqModuloProj($por_modulo);
                break;
        }

//        echo "ordem antes: ".$ordem; echo "<br />";
//        echo "pag_ordem antes: ".$pag_ordem; echo "<br />";
//        echo "pagination antes: ".$pagination; echo "<br />";
//        echo "oPagination antes: ".$oPagination; echo "<br />";

        // Realiza a troca da ordem.
        if($pagination == true){
            if($ordem == "asc"){
                $ordem = "desc";
            }else{
                $ordem = "asc";
            }
        }else{
            $ordem = $pag_ordem;
        }
        $pag_ordem = $ordem;

//        echo "ordem depois: ".$ordem; echo "<br />";
//        echo "pag_ordem depois: ".$pag_ordem; echo "<br />";

        // Bloco que cuida da ordenação.
        switch($coluna){

            case 1:
                $query->orderByNrTarefa($ordem);
                break;

            case 2:
                $query->useRlProjetoVersaoAmbQuery()
                    ->useProjetoQuery()
                    ->orderByNoProjeto($ordem)
                    ->endUse()
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 3:
                $query->orderByNoResumo($ordem);
                break;

            case 4:
                $query->orderByDtInicio($ordem);
                break;

            case 5:
                $query->orderByCoPrioridade($ordem)
                    ->orderByDtInicio('desc');
                break;

            case 6:
                $query->useStatusQuery()
                    ->orderByNoStatus($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 7:
                $query->useOrgaoQuery()
                    ->orderByNoOrgao($ordem)
                    ->endUse()->orderByDtInicio('desc');
                break;

            case 8:
                $query->orderByDtFim($ordem);
                break;

            default:
                $query->orderBy('Tarefa.CoPrioridade', 'desc');
                break;
        }

        // Pagina o resultado e pega a quantidade de registros encontrados.
        $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
        $oTotal = count($oTarefa);

        $this->view->tipo_tarefa = $tipoBusca;
        $this->view->num_tarefa = $nrTarefa;
        $this->view->num_sirius = $num_sirius;
        $this->view->pr_chamado = $pr_chamado;
        $this->view->o_pr_chamado = $pr_chamado;
        $this->view->titulo = $titulo;
        $this->view->data = $novadata;     
    		    
    	$this->view->filtro = $filtro;
    	$this->view->oTarefa = $oTarefa;
        $this->view->nr_chamado_asc_desc = $ordem;
        $this->view->numLinhasSelect = $numLinhasSelect;
        $this->view->nunLinhasUrl = $numLinhasSelect;
//echo "a ordem que está indo para a view é ".$ordem;
    	$this->view->totalRec = $oTotal;
    	$this->view->pg = $paginaAtual;
    	$this->view->pag = 'meus-chamados';
        $this->view->ordem = $ordem;
        $this->view->pag_ordem = $pag_ordem;
        $this->view->oPag_ordem = $pag_ordem;
        $this->view->coluna = $coluna;
        $this->view->pagination = $pagination;

        $this->view->modulos = TbModuloProjetoQuery::create()->filterByStModulo(true)->find();
        $this->view->por_modulo = $por_modulo;

        $oStatus = StatusQuery::create()->filterBySituacao(true)->orderByNoStatus()->find();
        $this->view->oStatus = $oStatus;

        $orgao = "";
    	$this->view->paginacao = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao, "/chamado/index/meus-chamados/filtro/$filtro/num_linhas/$numLinhasSelect/tipo_tarefa/$tipoBusca/data/$novadata/num_tarefa/$nrTarefa/num_sirius/$num_sirius/titulo/$titulo/pr_chamado/$pr_chamado/buscaStatus/$buscaStatus/por_modulo/$por_modulo/coluna/$coluna/oPagination/false/pag_ordem/$pag_ordem");

    }

    public function meusChamadosAdmAction() {

        try{
            // Pega as PRIORIDADES e ordena de forma descendente.
            $this->view->oPrioridade = PrioridadeQuery::create()->orderByCoPrioridade('desc')->find();

            // Pega as PRIORIDADES e ordena de forma descendente.
            $projetos = ProjetoQuery::create()
                ->groupByNoProjeto()
                ->groupByCoProjeto()
                ->orderByNoProjeto()
                ->useRlOrgaoProjetoQuery()
                ->filterByStOgaoProjeto(true)
                ->endUse()
                ->find();

            // Pega os STATUS.
            $oStatus = StatusQuery::create()->filterBySituacao(true)->orderByNoStatus()->find();

            $filtro = $this->_request->getParam('filtro', 'T'); // Filtro numérico ou não numérico.
            $paginaAtual = $this->_request->getParam('pg',1); // Página atual.
            $coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
            $ordem = $this->_request->getParam('ordem', "desc"); // Ordem selecionada pelo usuário.
            $pagination = $this->_request->getParam('pagination'); // Determina se a ordenação deve ser alterada ou não.
            $aPagination = $this->_request->getParam('aPagination'); // Determina se a ordenação deve ser alterada ou não.
            $pag_ordem = $this->_request->getParam('pag_ordem'); // Variável que conserva a ordem anterior.
            $por_projeto = $this->_request->getParam('por_projeto'); //

            $por_modulo = $this->_request->getParam('por_modulo');
            $oPor_modulo = $this->_request->getParam('oPor_modulo');
            if($oPor_modulo){
                $por_modulo = $oPor_modulo;
            }

            if($this->_request->isPost()){
                $numLinhasSelect = $this->_request->getPost('num_linhas_select');
            }else{
                $numLinhasSelect = $this->_request->getParam('num_linhas',15);
            }

            if ($this->_request->isPost()) {
                $por_usuario = $this->_request->getParam('por_usuario');
                $pr_chamado = $this->_request->getParam('pri_chamado');
                $tipoBusca = $this->_request->getPost('tipo_tarefa');
                $nrTarefa = $this->_request->getPost('num_tarefa');
                $titulo = $this->_request->getPost('titulo');
                $data = $this->_request->getPost('data');
                $num_sirius = $this->_request->getPost('num_sirius');
                $buscaStatus = $this->_request->getPost('buscaStatus');

                $oData = explode("/", $data);
                $novadata = $oData[2]."-".$oData[1]."-".$oData[0];
            }  else {
                $por_usuario = $this->_request->getParam('no_usuario');
                $pr_chamado = $this->_request->getParam('pr_chamado');
                $tipoBusca = $this->_request->getParam('tipo_tarefa');
                $nrTarefa = $this->_request->getParam('num_tarefa');
                $titulo = $this->_request->getParam('titulo');
                $data = $this->_request->getParam('data');
                $num_sirius = $this->_request->getPost('num_sirius');
                $buscaStatus = $this->_request->getParam('buscaStatus');

                $novadata = $data;
            }

            // Este bloco trata do filtro do roda-pé.
            $o_num_tarefa = $this->_request->getParam('o_num_tarefa');
            $o_por_projeto = $this->_request->getParam('o_por_projeto');
            $o_titulo = $this->_request->getParam('o_titulo');
            $o_dt_inicio = $this->_request->getParam('o_dt_data');
            $o_pr_chamado = $this->_request->getParam('o_pr_chamado');
            $o_status = $this->_request->getParam('o_status');
            $o_orgao = $this->_request->getParam('o_orgao');
            $o_usuario = $this->_request->getParam('o_usuario');

            // Inicia a pesquisa.
            $query = TarefaQuery::create()
            ->filterByCoUsuarioAtendimento(CO_USUARIO);

            // Bloco que cuida do filtro numérico ou não numérico.
            if(is_numeric($filtro)){
                $query->filterByCoStatus($filtro);
            }

            // Bloco que cuida do filtro.
            switch($tipoBusca){

                case 1:
                    $query->filterByNrTarefa($nrTarefa);
                    break;

                case 2:
                    $query->filterByNoResumo("%$titulo%")
                        ->setIgnoreCase("%$titulo%");
                    break;

                case 3:
                    $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                    break;

                case 4:
                    $query->filterByCoPrioridade($pr_chamado);
                    break;

                case 5:
                    $usuario = UsuarioQuery::create()
                        ->filterByNoUsuario("%$por_usuario%")
                        ->setIgnoreCase("%$por_usuario%")
                        ->findOne();

                    $cod_usuario = $usuario->getCoUsuario();

                    $query->filterByCoUsuarioAberto($cod_usuario);
                    break;

                case 6:
                    $query->filterByNrSirius($num_sirius);
                    break;

                case 7:
                    $query->filterByCoStatus($buscaStatus);
                    break;

                case 8:
                    $query->filterByCoSeqModuloProj($por_modulo);
                    break;

//                case 8://echo $por_projeto; exit;
//                    $query->useRlProjetoVersaoAmbQuery()
//                        ->useProjetoQuery()
//                            ->filterByCoProjeto($por_projeto)
//                        ->endUse()
//                    ->endUse();
//                    break;

                default: //echo $o_por_projeto;exit;
                    if(!empty($o_num_tarefa)){
                        $nrTarefa = $o_num_tarefa;
                        $query->filterByNrTarefa($nrTarefa);
                    }
                    if(!empty($o_por_projeto)){
                        $por_projeto = $o_por_projeto;
                        $query->useRlProjetoVersaoAmbQuery()
                                ->useProjetoQuery()
                                    ->filterByCoProjeto($por_projeto)
                                ->endUse()
                            ->endUse();
                    }
                    if(!empty($o_titulo)){
                        $titulo = $o_titulo;
                        $query->filterByNoResumo("%$titulo%")
                            ->setIgnoreCase("%$titulo%");
                    }
                    if(!empty($o_dt_inicio)){
                        $data = $o_dt_inicio;
                        if($this->_request->isPost()){
                            $oData = explode("/", $o_dt_inicio);
                            $novadata = $oData[2]."-".$oData[1]."-".$oData[0];
                        }

                        $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                    }
                    if(!empty($o_pr_chamado)){
                        $pr_chamado = $o_pr_chamado;

                        $query->filterByCoPrioridade($o_pr_chamado);
                    }
                    if(!empty($o_status)){
                        $buscaStatus = $o_status;

                        $query->filterByCoStatus($buscaStatus);
                    }
                    if(!empty($o_orgao)){
                        $query->filterByCoOrgao($o_orgao);
                    }
                    if(!empty($o_usuario)){
                        $por_usuario = $o_usuario;
                        $query->filterByCoUsuarioAberto($por_usuario);
                    }
                    break;
            }

            // Realiza a troca da ordem.
            if($pagination != ""){
                if($ordem == "asc"){
                    $ordem = "desc";
                }else{
                    $ordem = "asc";
                }
            }else{
                $ordem = $pag_ordem;
            }
            $pag_ordem = $ordem;

            // Bloco que cuida da ordenação.
            switch($coluna){

                case 1:
                    $query->orderByNrTarefa($ordem);
                    break;

                case 2:
                    $query->useRlProjetoVersaoAmbQuery()
                        ->useProjetoQuery()
                        ->orderByNoProjeto($ordem)
                        ->endUse()
                        ->endUse()->orderByDtInicio('desc');
                    break;

                case 3:
                    $query->orderByNoResumo($ordem);
                    break;

                case 4:
                    $query->orderByDtInicio($ordem);
                    break;

                case 5:
                    $query->orderByCoPrioridade($ordem)
                        ->orderByDtInicio('desc');
                    break;

                case 6:
                    $query->useStatusQuery()
                        ->orderByNoStatus($ordem)
                        ->endUse()->orderByDtInicio('desc');
                    break;

                case 7:
                    $query->useOrgaoQuery()
                        ->orderByNoOrgao($ordem)
                        ->endUse()->orderByDtInicio('desc');
                    break;

                case 8:
                    $query->orderByDtFim($ordem);
                    break;

                default:
                    $query->orderBy('Tarefa.CoPrioridade', 'desc');
                    break;
            }

            // Pagina o resultado e pega a quantidade de registros encontrados.
            $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
            $oTotal = count($oTarefa);

            $this->view->pag_ordem = $pag_ordem;
            $aData = str_replace('/','-',$data);
            $this->view->aData = $aData;

            $this->view->tipo_tarefa = $tipoBusca;
            $this->view->tipoTarefa = $tipoBusca;

            $this->view->pr_chamado = $pr_chamado;
            $this->view->prChamado = $pr_chamado;

            $this->view->oStatus = $oStatus;
            $this->view->busca_status = $buscaStatus;

            $this->view->o_orgao = $o_orgao;
            $this->view->data = $data;
            $this->view->por_usuario = $por_usuario;
            $this->view->por_projeto = $por_projeto;
            $this->view->nr_chamado_asc_desc = $ordem;
            $this->view->numLinhasSelect = $numLinhasSelect;
            $this->view->nunLinhasUrl = $numLinhasSelect;

            $this->view->num_tarefa = $nrTarefa;
            $this->view->num_sirius = $num_sirius;
            $this->view->titulo = $titulo;
            $this->view->filtro = $filtro;
            $this->view->page = $paginaAtual;
            $this->view->pg = $paginaAtual;
            $this->view->ordem = $ordem;
            $this->view->coluna = $coluna;
            $this->view->projetos = $projetos;
            $this->view->pagination = $pagination;

            $this->view->modulos = TbModuloProjetoQuery::create()->filterByStModulo(true)->find();
            $this->view->por_modulo = $por_modulo;
            $this->view->totalRec = $oTotal;
            $this->view->oTarefa = $oTarefa;
            $orgao = "";

            $this->view->pag = 'meus-chamados-adm';
    	$this->view->paginacao = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao, "/chamado/index/meus-chamados-adm/filtro/$filtro/num_linhas/$numLinhasSelect/tipo_tarefa/$tipoBusca/data/$novadata/num_tarefa/$nrTarefa/num_sirius/$num_sirius/titulo/$titulo/por_usuario/$por_usuario/pr_chamado/$pr_chamado/buscaStatus/$buscaStatus/por_modulo/$por_modulo/coluna/$coluna/pagination//pag_ordem/$pag_ordem");

        $this->view->oTbDescChamado = TbDescricaoChamadoQuery::create()->find();
        $this->view->oModulo = ModuloQuery::create()->find();
        $this->view->oTbModuloProj = TbModuloProjetoQuery::create()->find();
        $this->view->oUserTarefa = UsuarioQuery::create()
            ->orderByNoUsuario('asc')
            ->setDistinct()
            ->innerJoinUsuarioTarefa()
            ->find();
        $this->view->oCategoria = CategoriaQuery::create()->find();
        $this->view->oNivel = NivelQuery::create()->find();
        $this->view->oProjVerAmb = RlProjetoVersaoAmbQuery::create()->find();
        $this->view->oProjeto = ProjetoQuery::create()->find();
        $this->view->oOrgao = OrgaoQuery::create()->orderByNoOrgao()->find();

        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function sobreAction(){

    }
    
    public function listarOrgaoAction(){
    	try {
            $this->view->oOrgao = OrgaoQuery::create()
                ->orderByNoOrgao()
                    ->useRlUsuarioOrgaoQuery()
                        ->filterByCoUsuario(CO_USUARIO)
                        ->filterByStRlUsuarioOrgao('TRUE')
                    ->endUse()
                ->find();

            $this->view->oStatus = StatusQuery::create()
                ->filterBySituacao(true)
                ->orderByNoStatus()
                ->find();

            $filtro = $this->_request->getParam('filtro', 'T');
            $paginaAtual = $this->_request->getParam('pg',1);
            $coluna = $this->_request->getParam('coluna');
            $ordem = $this->_request->getParam('ordem', "desc");
            $pagination = $this->_request->getParam('pagination');
            $pag_ordem = $this->_request->getParam('pag_ordem');
            $buscaStatus = $this->_request->getParam('buscaStatus');

            $por_modulo = $this->_request->getParam('por_modulo');
            $oPor_modulo = $this->_request->getParam('oPor_modulo');
            if($oPor_modulo){
                $por_modulo = $oPor_modulo;
            }

            // Referente à seleção de linhas no resultado.
            $numLinhasUrl = $this->_request->getParam('num_linhas',15);
            $numLinhasSelect = $this->_request->getParam('num_linhas_select');
            if($numLinhasSelect == ""){
                $numLinhasSelect = $numLinhasUrl;
            }
            $this->view->numLinhasSelect = $numLinhasSelect;

            if ($this->_request->isPost()) {
                $por_usuario = $this->_request->getParam('por_usuario');
                $pr_chamado = $this->_request->getPost('pr_chamado');
                $tipoBusca = $this->_request->getPost('tipo_tarefa');
                $nrTarefa = $this->_request->getPost('num_tarefa');
                $num_sirius = $this->_request->getPost('num_sirius');
                $titulo = $this->_request->getPost('titulo');
                $data = $this->_request->getPost('data');
                $coOrgao = $this->_request->getPost('co_orgao');
                $buscaStatus = $this->_request->getPost('buscaStatus');

                if (empty($coOrgao)){
                    $coOrgao = $this->_request->getPost('cod_orgao');
                }

                $oData = explode("/", $data);
                $novadata = $oData[2].$oData[1].$oData[0];
            } else {
                $por_usuario = $this->_request->getParam('por_usuario');
                $pr_chamado = $this->_request->getParam('pr_chamado');
                $tipoBusca = $this->_request->getParam('tipo_tarefa');
                $nrTarefa = $this->_request->getParam('num_tarefa');
                $num_sirius = $this->_request->getPost('num_sirius');
                $titulo = $this->_request->getParam('titulo');
                $data = $this->_request->getParam('data');
                $coOrgao = $this->_request->getParam('co_orgao');
                $buscaStatus = $this->_request->getParam('buscaStatus');

                $novadata = $data;
            }

            if(!empty($coOrgao)){
                // Inicia a pesquisa.
                $query = TarefaQuery::create()
                    ->filterByCoOrgao($coOrgao);

                if(is_numeric($filtro)){
                    $query->filterByCoStatus($filtro);
                }

                // Se tem perfil multi unidades ou solicitante.
                if(CO_PERFIL == CO_PERFIL_ADM_UNIDADE || CO_PERFIL == CO_PERFIL_MULTI_UNIDADES) {
                    $query->useOrgaoQuery()
                            ->useRlUsuarioOrgaoQuery()
                                ->filterByCoUsuario(CO_USUARIO)
                                ->filterByStRlUsuarioOrgao('TRUE')
                            ->endUse()
                        ->endUse();
                }elseif(CO_PERFIL == CO_PERFIL_SOLICITANTE){
                    $query->filterByCoOrgao(CO_USUARIO_ORGAO);
                }

                // Bloco que cuida do filtro.
                switch($tipoBusca){

                    case 1:
                        $query->filterByNrTarefa($nrTarefa);
                        break;

                    case 2:
                        $query->filterByNoResumo("%$titulo%")
                            ->setIgnoreCase("%$titulo%");
                        break;

                    case 3:
                        $query->filterByDtInicio(array('min' => $novadata . ' 00:00:00', 'max' => $novadata . ' 23:59:59'));
                        break;

                    case 4:
                        $query->filterByCoPrioridade($pr_chamado);
                        break;

                    case 5:
                        $usuario = UsuarioQuery::create()
                            ->filterByNoUsuario("%$por_usuario%")
                            ->setIgnoreCase("%$por_usuario%")
                            ->findOne();

                        $cod_usuario = $usuario->getCoUsuario();

                        $query->filterByCoUsuarioAberto($cod_usuario);
                        break;

                    case 6:
                        $query->filterByNrSirius($num_sirius);
                        break;

                    case 7:
                        $query->filterByCoStatus($buscaStatus);
                        break;

                    case 8:
                        $query->filterByCoSeqModuloProj($por_modulo);
                        break;
                }

                // Realiza a troca da ordem.
                if($pagination != ""){
                    if($ordem == "asc"){
                        $ordem = "desc";
                    }else{
                        $ordem = "asc";
                    }
                }else{
                    $ordem = $pag_ordem;
                }
                $pag_ordem = $ordem;

                // Bloco que cuida da ordenação.
                switch($coluna){

                    case 1:
                        $query->orderByNrTarefa($ordem);
                        break;

                    case 2:
                        $query->useRlProjetoVersaoAmbQuery()
                            ->useProjetoQuery()
                            ->orderByNoProjeto($ordem)
                            ->endUse()
                            ->endUse()->orderByDtInicio('desc');
                        break;

                    case 3:
                        $query->orderByNoResumo($ordem);
                        break;

                    case 4:
                        $query->orderByDtInicio($ordem);
                        break;

                    case 5:
                        $query->orderByCoPrioridade($ordem)
                            ->orderByDtInicio('desc');
                        break;

                    case 6:
                        $query->useStatusQuery()
                            ->orderByNoStatus($ordem)
                            ->endUse()->orderByDtInicio('desc');
                        break;

                    case 7:
                        $query->useOrgaoQuery()
                            ->orderByNoOrgao($ordem)
                            ->endUse()->orderByDtInicio('desc');
                        break;

                    case 8:
                        $query->orderByDtFim($ordem);
                        break;

                    default:
                        $query->orderBy('Tarefa.CoPrioridade', 'desc');
                        break;
                }

                // Pagina o resultado e verifica a quantidade.
                $oTarefa = $query->paginate($paginaAtual,$numLinhasSelect);
                $oTotal = count($oTarefa);

            }

            $this->view->cod_orgao = $coOrgao;
            $this->view->tipo_tarefa = $tipoBusca;
            $this->view->buscaStatus = $buscaStatus;
            $this->view->num_tarefa = $nrTarefa;
            $this->view->pr_chamado = $pr_chamado;

            $this->view->titulo = $titulo;
            $this->view->data = $novadata;   
            $this->view->pag = 'listar-orgao';

            $this->view->modulos = TbModuloProjetoQuery::create()->filterByStModulo(true)->find();
            $this->view->por_modulo = $por_modulo;

            $this->view->coOrgao = $coOrgao;
            $this->view->oTarefa = $oTarefa;
            $this->view->filtro = $filtro;
            $this->view->totalRec = $oTotal;
            $this->view->pg = $paginaAtual;
            $this->view->ordem = $ordem;
            $this->view->pag_ordem = $pag_ordem;
            $this->view->coluna = $coluna;
            $this->view->nr_chamado_asc_desc = $ordem;

            $this->view->paginacao = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $coOrgao, "/chamado/index/listar-orgao/co_orgao/$coOrgao/num_linhas/$numLinhasSelect/tipo_tarefa/$tipoBusca/data/$novadata/num_tarefa/$nrTarefa/num_sirius/$num_sirius/titulo/$titulo/por_usuario/$por_usuario/pr_chamado/$pr_chamado/buscaStatus/$buscaStatus/por_modulo/$por_modulo/coluna/$coluna/pagination//pag_ordem/$pag_ordem/ordem/$ordem");
    	} catch (Exception $e) {
    		
    	}
    }
    
    public function enviarEmail($remetente, $noRemetente, $conteudo, $ArrDestinatario, $assunto){
    	try {
    		
    		/**
    		 * Configuração para servidor local
    		 * smtp.datasus.net
    		 */
					    		
    		 	/* $settings = array('ssl'=>'tls',
    			'port'=>25,
    			'auth' => 'login',
    			'username' => 'marcelo.silva',
    			'password' => 'marcelo3001'); */ 
    		
    		/**
			 * Configuração para o servidor Desenv
    		 */
    		$settings = array('port'=>25);
    		$transport = new Zend_Mail_Transport_Smtp(SMTP,$settings);
    		
    		$email_from = EMAIL_CHAMADO;
    		$name_from = NOME_EMAIL.$noRemetente;
    	
	    	$mail = new Zend_Mail('UTF-8');
	    	$mail->setReplyTo($email_from, $name_from);
	    	$mail->setFrom ($email_from, $name_from);
	    	
	    	if(is_array($ArrDestinatario)){
	    		foreach ($ArrDestinatario as $email){
	    			$mail->addTo ($email);
	    		}
	    		
	    	}
	    	
	    	$mail->setSubject ($assunto);
	    	//$mail->setBodyText ($conteudo);
            $mail->setBodyHtml($conteudo);
	    
	    	$mail->send($transport);
	    	
	    	}  catch (Exception $e){
	    		//print_r($e);
	    		$this->_helper->mensagem('mensagem_warning',"Erro ao enviar e-mail." . $e->getMessage());
	    		$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
	    	}
    	
    }
    
    /**
     * Enviar e-mails E-mails adicionais
     */
    public function enviarEmailAdicionais($emails, $noEmail, $txt, $assunto){
    	if($emails){
    		$emails_adicionais = explode(";", $emails);
    		$this->enviarEmail(EMAIL_CHAMADO, $noEmail, $txt, $emails_adicionais, "Chamado - Nº ".$assunto);
    	}
    }
    
    
    /**
     * Enivar e-mail para os usuários que estão associado a categoria;
     */
    public function enviarEmailCategoria($co_categoria, $noProjeto, $txt, $assunto){
    	$Categoria = CategoriaQuery::create()->filterByCoCategoria($co_categoria)->findOne();
    	if($Categoria->getUsuarioCategorias()){
    		$arrEmails = array();
    		foreach ($Categoria->getUsuarioCategorias() as $usuariosCateg){
    			$arrEmails[] = $usuariosCateg->getUsuario()->getDsEmail();
    		}
    		$this->enviarEmail(EMAIL_CHAMADO, $noProjeto, $txt, $arrEmails, "Chamado - Nº ".$assunto);
    
    	}
    }
    
    public function gerarNrTarefa($Tarefa){
    	$Tarefa->setNrTarefa(date("Y").$Tarefa->getCoTarefa());
    	$Tarefa->save();
    	return $Tarefa->getNrTarefa();
    }
    
    public function download($arquivo) {

    }
    
    public function cadastrarAction() {

        // Pega o código do usuário.
    	$co_usuario = Zend_Auth::getInstance()->getIdentity()->getCoUsuario();

        // Envia o orgão do usuário para a view.
        $this->view->oOrgao = OrgaoQuery::create()
        ->filterByCoOrgao(CO_USUARIO_ORGAO)
        ->find();

        // Envia o status para a view.
        $oStatus = StatusQuery::create()->filterByCoStatus(CO_STATUS_ABERTA)->find();
                $this->view->oStatus = $oStatus;

        // Envia as prioridades para a view.
       	$oPrioridade = PrioridadeQuery::create()->orderByCoPrioridade("desc")->find();
       	$this->view->oPrioridade = $oPrioridade;

        // Envia as categorias para a view.
       	$oCategoria = CategoriaQuery::create()->orderByNuOrdem()->find();
       	$this->view->oCategoria = $oCategoria;

        try{
            if ($this->_request->isPost()) {
            	
                $co_orgao = $this->_request->getParam('co_orgao');
                $co_categoria   = $this->_request->getParam('co_categoria');
                $co_projeto     = $this->_request->getParam('co_projeto');
                $co_ambiente = $this->_request->getParam('co_ambiente');
            	$co_versao = $this->_request->getParam('co_versao');
            	$co_status    = $this->_request->getParam('co_status');
            	$co_prioridade  = $this->_request->getParam('co_prioridade');
            	$no_resumo      = $this->_request->getParam('no_resumo');

            	$ds_chamado      = $this->_request->getParam('ds_chamado');
            	$co_nivel       = 1; //$this->_request->getParam('co_nivel');
            	$co_modulo = $this->_request->getParam('co_modulo');

            	if($this->_request->getParam('emails_adicionais')){
            		$emailsAdic= trim($this->_request->getParam('emails_adicionais'));
            	}


                $oTarefa = TarefaQuery::create()
                        ->filterByCoTarefa($co_tarefa)
                        ->findOne(); 


                if(!$oTarefa){
                    $oTarefa = new Tarefa();
                }
                
                $projeto = ProjetoQuery::create()->filterByCoProjeto($co_projeto)->findOne();
                $oRlProjVersaoAmb = RlProjetoVersaoAmbQuery::create()->filterByCoProjeto($co_projeto)->filterByCoAmbiente($co_ambiente)->filterByCoVersao($co_versao)->findOne();
                
                $oTarefa->setCoCategoria($co_categoria);
                $oTarefa->setCoStatus($co_status);
                $oTarefa->setCoPrioridade($co_prioridade);
                $oTarefa->setCoNivel($co_nivel);
                $oTarefa->setCoSeqProjVerAmb($oRlProjVersaoAmb->getCoSeqProjVerAmb());
                $oTarefa->setCoUsuarioAberto($co_usuario);
                $oTarefa->setCoUsuarioAtualizacao($co_usuario);
                
                // Pega o objeto Orgão enviando o código do orgão por parâmetro. 07/08/2014
                $orgao = OrgaoQuery::create()
                        ->filterByCoOrgao($co_orgao)
                        ->findOne();
                
                $oTarefa->setNoResumo("[" . $orgao->getSgOrgao() . "] " . $no_resumo); // Concatena a sigla do orgão com o resumo do chamado.
                $oTarefa->setCoOrgao($co_orgao);
                $oTarefa->setDtInicio(date('Y-m-d H:i:s'));
                $oTarefa->setEmailAdicionais($emailsAdic);
                
                if(!empty($co_modulo) && $co_modulo != 0 ){
                	$oTarefa->setCoSeqModuloProj($co_modulo);
                }
                
                $oTarefa->save();

                
                /**
				 * Gerar o Numero do chamado.
                 */
                $nrTarefa = $this->gerarNrTarefa($oTarefa);
				
               	$oDescricao = new TbDescricaoChamado();
               	$oDescricao->setCoTarefa($oTarefa->getCoTarefa());
               	$oDescricao->setCoUsuario($co_usuario);
               	$oDescricao->setDsChamado($ds_chamado);
               	$oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
               	
               	$oDescricao->save();
                
                $coDescricao = $oDescricao->getCoSeqDescChamado();
                $count = count($_FILES['arquivo']['name']); 
                $i = 0;
                
                while ($i < $count)
                { 
                    // Testa para saber se veio algum erro referente ao arquivo.
                    // Se o número do erro for maior igual a 0 é porque veio arquivo.
                    if ($_FILES['arquivo']['error'][$i] == 0) 
                    {
                        // Armazena as extensões permitidas na variável $allowedExts.
                        $allowedExts = array("jpg", "png", "docx", "doc", "xls", "xlsx", "pdf");
                        
                        // A variável $temp recebe o resultado da função explode().
                        // o resultado dessa função é um array contendo o nome do
                        // arquivo e a extensão.
                        $temp = explode(".", $_FILES['arquivo']['name'][$i]);
                        
                        // A variável $extension recebe o ultimo item do array
                        // que é a extensão.
                        $extension = end($temp);
                        
                        // Verifica se a extensão armazenada na variável $extension
                        // está no array de extensões não permitidas $allowedExts.
                        if (in_array($extension, $allowedExts))
                        {
                            
                            
                            $dir = "/upload/".date('Y-m-d')."/";
                            $caminho = $_SERVER['DOCUMENT_ROOT'];

                            if(!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/")){
                                mkdir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/", 0777);
                            }

                            // Esse bloco de código cria um novo nome para o arquivo.
                            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                                $charid = strtoupper(md5(uniqid(rand(), true)));
                                $hyphen = chr(45);// "-"

                                $uuid = substr($charid, 0, 8).$hyphen
                                    .substr($charid, 8, 4).$hyphen
                                    .substr($charid,12, 4).$hyphen
                                    .substr($charid,16, 4).$hyphen
                                    .substr($charid,20,12);

                            /*
                            if ($_FILES['arquivo']['type'][$i] === 'image/gif' || 'image/jpeg' || 'image/jpg' || 'image/png') {
                                $extension = 'jpg';
                            }
                            */
                                
                            $aImagem = new TbImagem();
                            $aImagem->setCoSeqDescChamado($coDescricao);
                            $aImagem->setNoImagem($uuid);
                            $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                            $aImagem->setDsExtensao($extension);
                            $aImagem->setDsCaminho($dir);
                            $aImagem->save();

                            //$uploaddir = '/var/www/tarefa/public/upload/2014-10-20/';
                            //$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
                            $tmp_name = $_FILES['arquivo']['tmp_name'][$i];
                            
                            move_uploaded_file($tmp_name, $caminho.$dir.$uuid.".".$extension);
                        }
                    }
                    $i++;
                }

                /*
                 * Incluir UM usuario na tarefa
                 */
                 $UsuarioTarefa = new UsuarioTarefa();
                
                if($co_usuario != ""){
                    $UsuarioTarefa->setCoUsuario($co_usuario);
                    $UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
                    $UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
                    $UsuarioTarefa->save();
                }

                $noProjeto = ProjetoQuery::create()
                    ->filterByCoProjeto($co_projeto)
                    ->findOne();
                //." ".$noProjeto->getNoProjeto()
                /*
                 * Enviar e-mail para o usaurio que abriu o Chamado
                 */
                if($oTarefa->getCoUsuarioAberto()){
                	$usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
                	$txt = "O sistema chamado gerou o seguinte número da demanda: ".$nrTarefa.".\n
                    Clique <a href=".URL_HISTORICO.$nrTarefa." style='color: blue'>aqui</a> para visualiza-lo.";
                	$this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $projeto->getNoProjeto(), $txt, $nrTarefa." ".$noProjeto->getNoProjeto());
                }

                /*
                 * Enviar e-mails E-mails adicionais
                 */
                if($this->_request->getParam('emails_adicionais')){
                	$txt = "O sistema chamado gerou o seguinte número da demanda: ".$nrTarefa.".\n
                    Clique <a href=".URL_HISTORICO.$nrTarefa." style='color: blue'>aqui</a> para visualiza-lo.";
                	$this->enviarEmailAdicionais($this->_request->getParam('emails_adicionais'), $projeto->getNoProjeto(), $txt, $nrTarefa." ".$noProjeto->getNoProjeto());
                }

                /*
                 * Enivar e-mail para os usuários que estão associados a categoria;
                 */
               	$this->enviarEmailCategoria($co_categoria, $projeto->getNoProjeto(),
                    "O sistema chamado gerou o seguinte número da demanda: ".$nrTarefa.".\n
                    Clique <a href=".URL_HISTORICO.$nrTarefa." style='color: blue'>aqui</a> para visualiza-lo.",$nrTarefa." ".$noProjeto->getNoProjeto());

                $this->_helper->mensagem('mensagem_success',"Chamado cadastrado com sucesso.");
                $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
            }
       }  catch (Exception $e){
           $this->_helper->mensagem('mensagem_warning',"Erro ao cadastrar o chamado." . $e->getMessage());
           $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
       }
    }

    /*
     * 26/03/15 v2.3.6 | 20 - Correção: Dava erro quando o usuário respondia um chamado
     * com o status resolvido.
     */
    public function responderAction() {
        /*
         * Desabilita o layout.
         */
        $this->_helper->layout->disableLayout();
        /*
         * Não renderiza a tela.
         */
        $this->_helper->viewRenderer->setNoRender(true);

        try{
            
            /*
             * Testa para saber se as informações vieram via POST.
             */
            if ($this->_request->isPost()) {
                $co_usuario_atualizacao = $this->_request->getParam('co_usuario_atualizacao');
                $co_tarefa              = $this->_request->getParam('co_tarefa');
                $ds_chamado             = $this->_request->getParam('ds_chamado');
                $co_usuario             = $this->_request->getParam('co_usuario');

                /*
                 * Usa o código da tarefa para buscar a mesma no banco.
                 */
                $oTarefa = TarefaQuery::create()
                    ->filterByCoTarefa($co_tarefa)
                    ->findOne();

                /*
                 * Se a tarefa não for encontrada, o usuário é direcionado à
                 * listagem de chamados e uma mensagem de erro é exibida ao
                 * mesmo.
                 */
                if(!$oTarefa){
                    $this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontrada.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
                }

                /*
                 * Passando pela validação anterior, pegamos o código do usuário
                 * que fez o atendimento da demanda.
                 */
                $co_usuario_atendimento = $oTarefa->getCoUsuarioAtendimento();

                /*
                 * É feito um teste para saber se a variável foi populada com
                 * o código descrito no passo anterior.
                 */
                if($co_usuario_atendimento){
                    /*
                     * Se o código for encontrado, o status da demanda é 'Em
                     * Andamento' e o código do usuário que fez a atualização
                     * é o código do usuário que fez o atendimento.  Para 
                     * finalizar, a tarefa é salva.
                     */
                    $oTarefa->setCoStatus(2);
                    $oTarefa->setCoUsuarioAtualizacao($co_usuario_atendimento);
                    $oTarefa->save();
                }else{
                    /*
                     * Se o código não for encontrado, o status é 'Aberto' e
                     * o código do usuário que fez a alteração é o código do
                     * usuário que respondeu. Para finalizar, a tarefa é salva.
                     */
                    $oTarefa->setCoStatus(1);
                    $oTarefa->setCoUsuarioAtualizacao($co_usuario_atualizacao);
                    $oTarefa->save();
                    $co_usuario_atendimento = $co_usuario_atualizacao;
                }

                /*
                 * É feita uma busca pelo usuário que fez o atendimento
                 * da demanda.
                 */
                $atendente = UsuarioQuery::create()->filterByCoUsuario($co_usuario_atendimento)->findOne();
                
                /*
                 * O e-mail do usuário que atendeu o chamado é armazenado na
                 * variável.
                 */
                $email_atendente = $atendente->getDsEmail();

                /*
                 * O texto da resposta é guardado no benco de dados.
                 */
                $oDescricao = new TbDescricaoChamado();
                $oDescricao->setCoTarefa($oTarefa->getCoTarefa());
                $oDescricao->setCoUsuario($co_usuario);
                $oDescricao->setDsChamado($ds_chamado);
                $oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
                $oDescricao->save();

                /*
                 * Testa para saber se veio algum erro referente ao arquivo.
                 * Se o número do erro for maior igual a 0 é porque veio arquivo.
                 */
                if ($_FILES['file']['error'] == 0)
                {
                    /*
                     * Armazena as extensões permitidas na variável $allowedExts.
                     */
                    $allowedExts = array("jpg", "png", "docx", "doc", "xls", "xlsx", "pdf");

                    /*
                     * A variável $temp recebe o resultado da função explode(),
                     * o resultado dessa função é um array contendo o nome do
                     * arquivo e a extensão.
                     */
                    $temp = explode(".", $_FILES['file']['name']);

                    /*
                     * A variável $extension recebe o ultimo item do array
                     * que é a extensão.
                     */
                    $extension = end($temp);

                    /*
                     * Verifica se a estensão armazenada na variável $extension
                     * está no array de extensões não permitidas $allowedExts.
                     */
                    if (in_array($extension, $allowedExts))
                    {


                        $dir = "/upload/".date('Y-m-d')."/";
                        $caminho = $_SERVER['DOCUMENT_ROOT'];

                        if(!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/")){
                            mkdir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/", 0777);
                        }

                        /*
                         * Esse bloco de código cria um novo nome para o arquivo.
                         */
                        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                        $charid = strtoupper(md5(uniqid(rand(), true)));
                        $hyphen = chr(45);// "-"

                        $uuid = substr($charid, 0, 8).$hyphen
                            .substr($charid, 8, 4).$hyphen
                            .substr($charid,12, 4).$hyphen
                            .substr($charid,16, 4).$hyphen
                            .substr($charid,20,12);

                        $aImagem = new TbImagem();
                        $aImagem->setCoSeqDescChamado($oDescricao->getCoSeqDescChamado());
                        $aImagem->setNoImagem($uuid);
                        $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                        $aImagem->setDsExtensao($extension);
                        $aImagem->setDsCaminho($dir);
                        $aImagem->save();

                        $tmp_name = $_FILES['file']['tmp_name'];

                        move_uploaded_file($tmp_name, $caminho.$dir.$uuid.".".$extension);

                    }
                }

                $UsuarioTarefa = new UsuarioTarefa();
                if($co_usuario != ""){
                    $UsuarioTarefa->setCoUsuario($co_usuario);
                    $UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
                    $UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
                    $UsuarioTarefa->save();
                }

                $noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
                $nrTarefa = $oTarefa->getNrTarefa();

                /*
                 * Enviar e-mails E-mails adicionais
                 */
                if(!empty($co_usuario_atendimento)){
                    //$email = UsuarioQuery::create()->filterByCoUsuario($co_usuario_atendimento)->find();
                    $txt = "O chamado de número " . $nrTarefa . " foi respondido e devolvido ao atendente \n
                    do mesmo por não ter sido concluído corretamente. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualizar seu histórico \n
                    e verificar qual erro ainda persiste.";
                    $this->enviarEmailAdicionais($email_atendente, $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                }

                $this->_helper->mensagem('mensagem_success',"Chamado em atendimento.");
                $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
            }
        }  catch (Exception $e){
            $this->_helper->mensagem('mensagem_warning',"Erro ao fechar." . $e->getMessage());
            $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
        }
    }

    public function devolverAction() {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);

        try{
            if ($this->_request->isPost()) {

                $co_usuario_atualizacao = $this->_request->getParam('co_usuario_atualizacao');
                $co_tarefa              = $this->_request->getParam('co_tarefa');
                $ds_chamado             = $this->_request->getParam('ds_chamado');
                $co_usuario             = $this->_request->getParam('co_usuario');

                $oTarefa = TarefaQuery::create()
                    ->filterByCoTarefa($co_tarefa)
                    ->findOne();

                if(!$oTarefa){
                    $this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontarda.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
                }

                $oTarefa->setCoStatus(2);
                $oTarefa->setCoUsuarioAtualizacao($co_usuario_atualizacao);
                $oTarefa->save();

                $oDescricao = new TbDescricaoChamado();
                $oDescricao->setCoTarefa($oTarefa->getCoTarefa());
                $oDescricao->setCoUsuario($co_usuario);
                $oDescricao->setDsChamado($ds_chamado);
                $oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
                $oDescricao->save();

                // Testa para saber se veio algum erro referente ao arquivo.
                // Se o número do erro for maior igual a 0 é porque veio arquivo.
                if ($_FILES['file']['error'] == 0)
                {
                    // Armazena as extensões permitidas na variável $allowedExts.
                    $allowedExts = array("jpg", "png", "docx", "doc", "xls", "xlsx", "pdf");

                    // A variável $temp recebe o resultado da função explode().
                    // o resultado dessa função é um array contendo o nome do
                    // arquivo e a extensão.
                    $temp = explode(".", $_FILES['file']['name']);

                    // A variável $extension recebe o ultimo item do array
                    // que é a extensão.
                    $extension = end($temp);

                    // Verifica se a estensão armazenada na variável $extension
                    // está no array de extensões não permitidas $allowedExts.
                    if (in_array($extension, $allowedExts))
                    {


                        $dir = "/upload/".date('Y-m-d')."/";
                        $caminho = $_SERVER['DOCUMENT_ROOT'];

                        if(!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/")){
                            mkdir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/", 0777);
                        }

                        // Esse bloco de código cria um novo nome para o arquivo.
                        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                        $charid = strtoupper(md5(uniqid(rand(), true)));
                        $hyphen = chr(45);// "-"

                        $uuid = substr($charid, 0, 8).$hyphen
                            .substr($charid, 8, 4).$hyphen
                            .substr($charid,12, 4).$hyphen
                            .substr($charid,16, 4).$hyphen
                            .substr($charid,20,12);

                        /*
                        if ($_FILES['file']['type'] === 'image/jpg' || 'image/png') {
                            $extension = 'jpg';
                        }
                        */

                        $aImagem = new TbImagem();
                        $aImagem->setCoSeqDescChamado($oDescricao->getCoSeqDescChamado());
                        $aImagem->setNoImagem($uuid);
                        $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                        $aImagem->setDsExtensao($extension);
                        $aImagem->setDsCaminho($dir);
                        $aImagem->save();

                        //$uploaddir = '/var/www/tarefa/public/upload/2014-10-20/';
                        //$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
                        $tmp_name = $_FILES['file']['tmp_name'];

                        move_uploaded_file($tmp_name, $caminho.$dir.$uuid.".".$extension);

                    }
                }

                /*
                 * Incluir UM usuario na tarefa
                */
                //$UsuarioTarefa = UsuarioTarefaQuery::create()->filterByCoTarefa($oTarefa->getCoTarefa())->filterByCoUsuario($co_usuario)->findOne();
                //if(!$UsuarioTarefa){

                $UsuarioTarefa = new UsuarioTarefa();
                if($co_usuario != ""){
                    $UsuarioTarefa->setCoUsuario($co_usuario);
                    $UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
                    $UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
                    $UsuarioTarefa->save();
                }

                //}



                //$this->salvarArquivo($tmp_name, $nome_arquivo, $oDescricao->getCoSeqDescChamado());

                $noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
                $nrTarefa = $oTarefa->getNrTarefa();

                /*$noProjeto = ProjetoQuery::create()
                    ->filterByCoProjeto($co_projeto)
                    ->findOne();
                ." ".$noProjeto->getNoProjeto()
                 * Enviar e-mail para o usaurio que abriu o Chamado
                */
                if($oTarefa->getCoUsuarioAberto()){
                    $usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
                    $txt = "O chamado de número " . $nrTarefa . " sofreu uma atualização e\n
                    foi devolvido porque não foi concluído corretamente. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
                    $this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                }

                /*
                 * Enviar e-mails E-mails adicionais
                * */
                if($oTarefa->getEmailAdicionais()){
                    $txt = "O chamado de número " . $nrTarefa . " sofreu uma atualização e \n
                    foi devolvido porque não foi concluído corretamente. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
                    $this->enviarEmailAdicionais($oTarefa->getEmailAdicionais(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                }

                /*
                 * Enivar e-mail para os usuários que estão associado a categoria;
                */
                $this->enviarEmailCategoria($oTarefa->getCoCategoria(), $noProjeto,
                    "O chamado de número " . $nrTarefa . " sofreu uma atualização e \n
                    foi devolvido porque não foi concluído corretamente. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.", $nrTarefa." ".$noProjeto);

                $this->_helper->mensagem('mensagem_success',"Chamado em atendimento.");
                $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
            }
        }  catch (Exception $e){
            $this->_helper->mensagem('mensagem_warning',"Erro ao fechar." . $e->getMessage());
            $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
        }
    }

    public function atenderAction() {
    	$this->_helper->layout->disableLayout();
    	$this->_helper->viewRenderer->setNoRender(true);
        
    	try{
            if ($this->_request->isPost()) {
                $co_usuario = $this->_request->getParam('co_usuario');
                $co_tarefa      = $this->_request->getParam('co_terefa');
                $dt_previsao = $this->_request->getParam('dt_previsao');
                //$co_prioridade = $this->_request->getParam('co_prioridade');
                $ds_chamado = $this->_request->getParam('ds_chamado');
                $nr_sirius = $this->_request->getParam('nr_sirius');

                $oTarefa = TarefaQuery::create()
                ->filterByCoTarefa($co_tarefa)
                ->findOne();

                if(!$oTarefa){
                    $this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontarda.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
                }

                $oTarefa->setCoStatus(CO_STATUS_EM_ANDAMENTO);
                $oTarefa->setDtPrevisao(implode("-",array_reverse(explode("/",$dt_previsao))));
                //$oTarefa->setCoPrioridade($co_prioridade);
                $oTarefa->setCoUsuarioAtualizacao($co_usuario);
                $oTarefa->setCoUsuarioAtendimento($co_usuario);

                if(!empty($nr_sirius)){
                    $oTarefa->setNrSirius($nr_sirius);
                }else{
                    $oTarefa->setNrSirius(000000);
                }

                $oTarefa->save();

                $oDescricao = new TbDescricaoChamado();
                $oDescricao->setCoTarefa($oTarefa->getCoTarefa());
                $oDescricao->setCoUsuario($co_usuario);
                $oDescricao->setDsChamado($ds_chamado);
                $oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
                $oDescricao->save();

                /*
                 * Testa para saber se veio algum erro referente ao arquivo.
                 * Se o número do erro for maior igual a 0 é porque veio arquivo.
                 */
                if ($_FILES['file']['error'] == 0)
                {
                    /*
                     * Armazena as extensões permitidas na variável $allowedExts.
                     */
                    $allowedExts = array("jpg", "png", "docx", "doc", "xls", "xlsx", "pdf");

                    /*
                     * A variável $temp recebe o resultado da função explode(),
                     * o resultado dessa função é um array contendo o nome do
                     * arquivo e a extensão.
                     */
                    $temp = explode(".", $_FILES['file']['name']);

                    /*
                     * A variável $extension recebe o ultimo item do array
                     * que é a extensão.
                     */
                    $extension = end($temp);

                    /*
                     * Verifica se a estensão armazenada na variável $extension
                     * está no array de extensões não permitidas $allowedExts.
                     */
                    if (in_array($extension, $allowedExts))
                    {


                        $dir = "/upload/".date('Y-m-d')."/";
                        $caminho = $_SERVER['DOCUMENT_ROOT'];

                        if(!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/")){
                            mkdir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/", 0777);
                        }

                        /*
                         * Esse bloco de código cria um novo nome para o arquivo.
                         */
                        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                        $charid = strtoupper(md5(uniqid(rand(), true)));
                        $hyphen = chr(45);// "-"

                        $uuid = substr($charid, 0, 8).$hyphen
                            .substr($charid, 8, 4).$hyphen
                            .substr($charid,12, 4).$hyphen
                            .substr($charid,16, 4).$hyphen
                            .substr($charid,20,12);

                        $aImagem = new TbImagem();
                        $aImagem->setCoSeqDescChamado($oDescricao->getCoSeqDescChamado());
                        $aImagem->setNoImagem($uuid);
                        $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                        $aImagem->setDsExtensao($extension);
                        $aImagem->setDsCaminho($dir);
                        $aImagem->save();

                        $tmp_name = $_FILES['file']['tmp_name'];

                        move_uploaded_file($tmp_name, $caminho.$dir.$uuid.".".$extension);

                    }
                }

                /*
                 * Incluir UM usuario na tarefa
                 */
                //$UsuarioTarefa = UsuarioTarefaQuery::create()->filterByCoTarefa($oTarefa->getCoTarefa())->filterByCoUsuario($co_usuario)->findOne();
                //if(!$UsuarioTarefa){

                $UsuarioTarefa = new UsuarioTarefa();
                if($co_usuario != ""){
                    $UsuarioTarefa->setCoUsuario($co_usuario);
                    $UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
                    $UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
                    $UsuarioTarefa->save();
                }

                //}
                                
                
                
                //$this->salvarArquivo($tmp_name, $nome_arquivo, $oDescricao->getCoSeqDescChamado());
    			 
                $noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
                $nrTarefa = $oTarefa->getNrTarefa();

                /*
                 * Enviar e-mail para o usaurio que abriu o Chamado
                */
                if($oTarefa->getCoUsuarioAberto()){
                        $usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
                        $txt = "O chamado de número " . $nrTarefa . " foi encaminhado para atendimento. \n
                        Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
                        $this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                }

                /*
                 * Enviar e-mails E-mails adicionais
                * */
                if($oTarefa->getEmailAdicionais()){
                        $txt = "O chamado de número " . $nrTarefa . " foi encaminhado para atendimento. \n
                        Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
                        $this->enviarEmailAdicionais($oTarefa->getEmailAdicionais(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                }

                /*
                 * Enivar e-mail para os usuários que estão associado a categoria;
                */
                $this->enviarEmailCategoria($oTarefa->getCoCategoria(), $noProjeto,
                    "O chamado de número " . $nrTarefa . " foi encaminhado para atendimento. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.",
                    $nrTarefa." ".$noProjeto);

                $this->_helper->mensagem('mensagem_success',"Chamado em atendimento.");
                $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
            }
    	}  catch (Exception $e){
            $this->_helper->mensagem('mensagem_warning',"Erro ao fechar." . $e->getMessage());
            $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    	}
    }
	
    public function atribuirAction(){
    	$this->_helper->layout->disableLayout();
    	$this->_helper->viewRenderer->setNoRender(true);

    	try {
            if($this->_request->isPost()){
                $co_tarefa  = $this->_request->getParam('co_terefa_atribuir');
                $co_usuario = $this->_request->getParam('co_usuario_atribuir');

                $co_usuario_recep = $this->_request->getParam('co_usuario_recep');
                $co_categoria_recep = $this->_request->getParam('co_categoria_recep'); 
                $ds_atribuir = $this->_request->getParam('ds_atribuir');
                $nr_sirius = $this->_request->getParam('nr_sirius');
                
                $oTarefa = TarefaQuery::create()
                ->filterByCoTarefa($co_tarefa)
                ->findOne();

                if(!$oTarefa){
                    $this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontarda.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
                }

                $oCategoria = CategoriaQuery::create()->filterByCoCategoria($co_categoria_recep)->findOne();

                if(!$oCategoria){
                    $this->_helper->mensagem('mensagem_warning',"Nenhuma Categoria encontarda.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
                }

                $oTarefa->setCoStatus(CO_STATUS_ATRIBUI);
                $oTarefa->setCoUsuarioAtualizacao($co_usuario);
                $oTarefa->setCoCategoria($oCategoria->getCoCategoria());

                if(!empty($nr_sirius)){
                    $oTarefa->setNrSirius($nr_sirius);
                }else{
                    $oTarefa->setNrSirius(000000);
                }

                $oTarefa->save();

                $oDescricao = new TbDescricaoChamado();
                $oDescricao->setCoTarefa($oTarefa->getCoTarefa());
                $oDescricao->setCoUsuario($co_usuario);

                if (!empty($ds_atribuir)) {
                    $oDescricao->setDsChamado($ds_atribuir);
                } else {
                    $oDescricao->setDsChamado(" ");
                }

                $oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
                $oDescricao->save();

                // Testa para saber se veio algum erro referente ao arquivo.
                // Se foi anexado o arquivo.
                // Se o número do erro for maior igual a 0 é porque veio arquivo.
                if ($_FILES['file']['error'] == 0)
                {
                    // Armazena as extensões permitidas na variável $allowedExts.
                    $allowedExts = array("jpg", "png", "docx", "doc", "xls", "xlsx", "pdf");

                    // A variável $temp recebe o resultado da função explode().
                    // o resultado dessa função é um array contendo o nome do
                    // arquivo e a extensão.
                    $temp = explode(".", $_FILES['file']['name']);

                    // A variável $extension recebe o ultimo item do array
                    // que é a extensão.
                    $extension = end($temp);

                    // Verifica se a estensão armazenada na variável $extension
                    // está no array de extensões não permitidas $allowedExts.
                    if (in_array($extension, $allowedExts))
                    {


                        $dir = "/upload/".date('Y-m-d')."/";
                        $caminho = $_SERVER['DOCUMENT_ROOT'];

                        if(!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/")){
                            mkdir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/", 0777);
                        }

                        // Esse bloco de código cria um novo nome para o arquivo.
                        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                        $charid = strtoupper(md5(uniqid(rand(), true)));
                        $hyphen = chr(45);// "-"

                        $uuid = substr($charid, 0, 8).$hyphen
                            .substr($charid, 8, 4).$hyphen
                            .substr($charid,12, 4).$hyphen
                            .substr($charid,16, 4).$hyphen
                            .substr($charid,20,12);

                        /*
                        if ($_FILES['file']['type'] === 'image/jpg' || 'image/png') {
                            $extension = 'jpg';
                        }
                        */

                        $aImagem = new TbImagem();
                        $aImagem->setCoSeqDescChamado($oDescricao->getCoSeqDescChamado());
                        $aImagem->setNoImagem($uuid);
                        $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                        $aImagem->setDsExtensao($extension);
                        $aImagem->setDsCaminho($dir);
                        $aImagem->save();

                        //$uploaddir = '/var/www/tarefa/public/upload/2014-10-20/';
                        //$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
                        $tmp_name = $_FILES['file']['tmp_name'];

                        move_uploaded_file($tmp_name, $caminho.$dir.$uuid.".".$extension);

                    }
                }
                /*
                 * Incluir UM usuario na tarefa
                 */
                $UsuarioTarefa = new UsuarioTarefa();
                if($co_usuario_recep != ""){
                    $UsuarioTarefa->setCoUsuario($co_usuario_recep);
                    $UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
                    $UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
                    $UsuarioTarefa->save();
                }

                $noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
                $nrTarefa = $oTarefa->getNrTarefa();

                /*
                 * Enviar e-mail para o usaurio que abriu o Chamado
                */
                if($oTarefa->getCoUsuarioAberto()){
                        $usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
                        $txt = "O chamado de número " . $nrTarefa . " foi atribuido a outro usuário. \n
                            Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
                        $this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                }

                /*
                 * Enviar e-mail para o usuario que vai receber o chamado. 
                 */
                 $usuarioRecep = $usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario_recep)->findOne();
                 if($usuarioRecep){
                        $txt = "O chamado de número " . $nrTarefa . " foi atribuido a outro usuário. \n
                            Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
                        $this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
                 }

                /*
                 * Enivar e-mail para os usuários que estão associado a categoria;
                */
                $this->enviarEmailCategoria($oCategoria->getCoCategoria(), $noProjeto, "Uma atualização foi feita no chamado.", $nrTarefa." ".$noProjeto);

                $this->_helper->mensagem('mensagem_success',"Chamado atribuido com sucesso.");
                $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
            }
    		
    	} catch (Exception $e) {
    		$this->_helper->mensagem('mensagem_warning',"Erro ao atribuir chamado." . $e->getMessage());
    		$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    	}
    	 
    }

    public function resolverAction() { 
    	$this->_helper->layout->disableLayout(); 
    	$this->_helper->viewRenderer->setNoRender(true); 
    	try{ 
    		if ($this->_request->isPost()) { 
    			$co_tarefa  = $this->_request->getParam('co_terefa_resolvido');
    			$co_usuario = $this->_request->getParam('co_usuario_resolvido');
    			$dt_resolvido = $this->_request->getParam('dt_resolvido');
    			$ds_chamado = $this->_request->getParam('ds_resolvido');
                $nr_sirius = $this->_request->getParam('nrSirius');

    			$oTarefa = TarefaQuery::create()
    			->filterByCoTarefa($co_tarefa)
    			->findOne();

    			if(!$oTarefa){ 
    				$this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontarda.");
    				$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    			}

                $oTarefa->setDtFim(implode("-",array_reverse(explode("/",$dt_resolvido))));
//
//                echo "<pre>";
//                var_dump($oTarefa);
//                exit;

                if($oTarefa->getDtPrevisao() == ""){
                    $oTarefa->setDtPrevisao(implode("-",array_reverse(explode("/",$dt_resolvido))));
                }

    			$oTarefa->setCoStatus(CO_STATUS_RESOLVIDO);
    			$oTarefa->setCoUsuarioAtualizacao($co_usuario);

                if(!empty($nr_sirius)){
                    $oTarefa->setNrSirius($nr_sirius);
                }

    			$oTarefa->save();

    			$oDescricao = new TbDescricaoChamado();
    			$oDescricao->setCoTarefa($oTarefa->getCoTarefa());
    			$oDescricao->setCoUsuario($co_usuario);
    			$oDescricao->setDsChamado($ds_chamado);
    			$oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
    			$oDescricao->save();

                /*
                 * Testa para saber se veio algum erro referente ao arquivo.
                 * Se o número do erro for maior igual a 0 é porque veio arquivo.
                 */
                if ($_FILES['file']['error'] == 0)
                {
                    /*
                     * Armazena as extensões permitidas na variável $allowedExts.
                     */
                    $allowedExts = array("jpg", "png", "docx", "doc", "xls", "xlsx", "pdf");

                    /*
                     * A variável $temp recebe o resultado da função explode(),
                     * o resultado dessa função é um array contendo o nome do
                     * arquivo e a extensão.
                     */
                    $temp = explode(".", $_FILES['file']['name']);

                    /*
                     * A variável $extension recebe o ultimo item do array
                     * que é a extensão.
                     */
                    $extension = end($temp);

                    /*
                     * Verifica se a estensão armazenada na variável $extension
                     * está no array de extensões não permitidas $allowedExts.
                     */
                    if (in_array($extension, $allowedExts))
                    {


                        $dir = "/upload/".date('Y-m-d')."/";
                        $caminho = $_SERVER['DOCUMENT_ROOT'];

                        if(!is_dir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/")){
                            mkdir($_SERVER['DOCUMENT_ROOT']."/upload/".date('Y-m-d')."/", 0777);
                        }

                        /*
                         * Esse bloco de código cria um novo nome para o arquivo.
                         */
                        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                        $charid = strtoupper(md5(uniqid(rand(), true)));
                        $hyphen = chr(45);// "-"

                        $uuid = substr($charid, 0, 8).$hyphen
                            .substr($charid, 8, 4).$hyphen
                            .substr($charid,12, 4).$hyphen
                            .substr($charid,16, 4).$hyphen
                            .substr($charid,20,12);

                        $aImagem = new TbImagem();
                        $aImagem->setCoSeqDescChamado($oDescricao->getCoSeqDescChamado());
                        $aImagem->setNoImagem($uuid);
                        $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                        $aImagem->setDsExtensao($extension);
                        $aImagem->setDsCaminho($dir);
                        $aImagem->save();

                        $tmp_name = $_FILES['file']['tmp_name'];

                        move_uploaded_file($tmp_name, $caminho.$dir.$uuid.".".$extension);

                    }
                }

                /*
                 * Incluir UM usuario na tarefa
                */
    			//$UsuarioTarefa = UsuarioTarefaQuery::create()->filterByCoTarefa($oTarefa->getCoTarefa())->filterByCoUsuario($co_usuario)->findOne();
    			//if(!$UsuarioTarefa){

    			$UsuarioTarefa = new UsuarioTarefa();
    			if($co_usuario != ""){
    				$UsuarioTarefa->setCoUsuario($co_usuario);
    				$UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
    				$UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
    				$UsuarioTarefa->save();
    			}


    			//}

    			/*
    			 * Enviar e-mail para o usaurio que abriu o Chamado
    			*/
    			$noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
    			$nrTarefa = $oTarefa->getNrTarefa();

    			if($oTarefa->getCoUsuarioAberto()){
    				$usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
    				$txt = "O chamado de número " . $nrTarefa . " foi resolvido. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
    				$this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
    			}

    			/*
    			 * Enviar e-mails E-mails adicionais
    			* */
    			if($oTarefa->getEmailAdicionais()){
    				$txt = "O chamado de número " . $nrTarefa . " foi resolvido. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
    				$this->enviarEmailAdicionais($oTarefa->getEmailAdicionais(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
    			}

    			/*
    			 * Enivar e-mail para os usuários que estão associado a categoria;
    			*/
    			$this->enviarEmailCategoria($oTarefa->getCoCategoria(), $noProjeto, "O chamado foi resolvido com sucesso.", $nrTarefa." ".$noProjeto);

    			$this->_helper->mensagem('mensagem_success',"Tarefa resolvido com sucesso.");
    			$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    		}
    	}  catch (Exception $e){
    		$this->_helper->mensagem('mensagem_warning',"Erro ao resolver." . $e->getMessage());
    		$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    	}
    }
    
    public function fecharAction() {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
       try{
            if ($this->_request->isPost()) {
                $co_tarefa  = $this->_request->getParam('co_terefa_fechado');
                $co_usuario = $this->_request->getParam('co_usuario_fechado');
                $dt_fechamento = $this->_request->getParam('dt_fechamento');
                $ds_chamado = $this->_request->getParam('ds_fechamento');
                //$nr_sirius = $this->_request->getParam('nr_sirius');
                
                $oTarefa = TarefaQuery::create()
                    ->filterByCoTarefa($co_tarefa)
                    ->findOne();
                
                if(!$oTarefa){
                    $this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontarda.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','tarefa');
                }
                
                $oTarefa->setDtFim(implode("-",array_reverse(explode("/",$dt_fechamento))));
                $oTarefa->setCoStatus(CO_STATUS_FECHADO);
                $oTarefa->setCoUsuarioFechamento(CO_USUARIO);
                $oTarefa->setCoUsuarioAtualizacao($co_usuario);
                /*
                if ($nr_sirius) {
                    $oTarefa->setNrSirius($nr_sirius);
                }
                */
                $oTarefa->save();
                
                $oDescricao = new TbDescricaoChamado();
                $oDescricao->setCoTarefa($oTarefa->getCoTarefa());
                $oDescricao->setCoUsuario($co_usuario);
                $oDescricao->setDsChamado($ds_chamado);
                $oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
                $oDescricao->save();
                 
                /*
                 * Incluir UM usuario na tarefa
                */
            	//$UsuarioTarefa = UsuarioTarefaQuery::create()->filterByCoTarefa($oTarefa->getCoTarefa())->filterByCoUsuario($co_usuario)->findOne();
    				//if(!$UsuarioTarefa){

    				$UsuarioTarefa = new UsuarioTarefa();
    				if($co_usuario != ""){
    					$UsuarioTarefa->setCoUsuario($co_usuario);
    					$UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
    					$UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
    					$UsuarioTarefa->save();
    				}
    					
    				
    			//}
    			
    			/*
    			 * Enviar e-mail para o usaurio que abriu o Chamado
    			*/
    			$noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
    			$nrTarefa = $oTarefa->getNrTarefa();
    			
    			if($oTarefa->getCoUsuarioAberto()){
    				$usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
    				$txt = "O chamado de número " . $nrTarefa . " foi fechado. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
    				$this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
    			}
    			
    			/*
    			 * Enviar e-mails E-mails adicionais
    			* */
    			if($oTarefa->getEmailAdicionais()){
    				$txt = "O chamado de número " . $nrTarefa . " foi fechado. \n
                    Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
    				$this->enviarEmailAdicionais($oTarefa->getEmailAdicionais(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
    			}
    			 
    			/*
    			 * Enivar e-mail para os usuários que estão associado a categoria;
    			*/
    			$this->enviarEmailCategoria($oTarefa->getCoCategoria(), $noProjeto, "O chamado foi fechado com sucesso.", $nrTarefa." ".$noProjeto);
                
                $this->_helper->mensagem('mensagem_success',"Tarefa fechada com sucesso.");
                $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
            }
       }  catch (Exception $e){
           $this->_helper->mensagem('mensagem_warning',"Erro ao fechar." . $e->getMessage());
           $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','tarefa');
       }
    }

    public function reabrirAction(){
    	
    	$this->_helper->layout->disableLayout();
    	$this->_helper->viewRenderer->setNoRender(true);
    	 try{
    		if ($this->_request->isPost()) {
    				$co_usuario = $this->_request->getParam('co_usuario_reAbrir');
    				$co_tarefa      = $this->_request->getParam('co_terefa_reAbrir');
    				$ds_chamado = $this->_request->getParam('ds_reAbrir');
    				
    				
    				$oTarefa = TarefaQuery::create()
    				->filterByCoTarefa($co_tarefa)
    				->findOne();
    		
    				if(!$oTarefa){
    					$this->_helper->mensagem('mensagem_warning',"Nenhuma tarefa encontarda.");
    					$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    				}
    		
    		
    				$oTarefa->setCoStatus(CO_STATUS_REABERTO);
    				$oTarefa->setCoUsuarioAtualizacao($co_usuario);
    				$oTarefa->setDtFim(null);
    				
    				$oTarefa->save();
    		
    				$oDescricao = new TbDescricaoChamado();
    				$oDescricao->setCoTarefa($oTarefa->getCoTarefa());
    				$oDescricao->setCoUsuario($co_usuario);
    				$oDescricao->setDsChamado($ds_chamado);
    				$oDescricao->setDtCadastro(date('Y-m-d H:i:s'));
    				$oDescricao->save();
    				 
    				/*
    				 * Incluir UM usuario na tarefa
    				*/
    			
    				//$UsuarioTarefa = UsuarioTarefaQuery::create()->filterByCoTarefa($oTarefa->getCoTarefa())->filterByCoUsuario($co_usuario)->findOne();
    				//if(!$UsuarioTarefa){
    					
    					$UsuarioTarefa = new UsuarioTarefa();
    					if($co_usuario != ""){
    						$UsuarioTarefa->setCoUsuario($co_usuario);
    						$UsuarioTarefa->setCoTarefa($oTarefa->getCoTarefa());
    						$UsuarioTarefa->setCoStatus($oTarefa->getCoStatus());
    						$UsuarioTarefa->save();
    					}
    				//}
    				
    				
    				/*
    				 * Enviar e-mail para o usaurio que abriu o Chamado
    				*/
    				$noProjeto = $oTarefa->getRlProjetoVersaoAmb()->getProjeto()->getNoProjeto();
    				$nrTarefa = $oTarefa->getNrTarefa();
    				 
    				if($oTarefa->getCoUsuarioAberto()){
    					$usuarioEmail = UsuarioQuery::create()->filterByCoUsuario($co_usuario)->findOne();
    					$txt = "O chamado de número " . $nrTarefa . " foi reaberto. \n
                        Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
    					$this->enviarEmailAdicionais($usuarioEmail->getDsEmail(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
    				}
    				 
    				/*
    				 * Enviar e-mails E-mails adicionais
    				* */
    				if($oTarefa->getEmailAdicionais()){
    					$txt = "O chamado de número " . $nrTarefa . " foi reaberto. \n
                        Clique <a href='".URL_HISTORICO.$nrTarefa."' style='color: blue'>aqui</a> para visualiza-lo.";
    					$this->enviarEmailAdicionais($oTarefa->getEmailAdicionais(), $noProjeto, $txt, $nrTarefa." ".$noProjeto);
    				}
    				
    				/*
    				 * Enivar e-mail para os usuários que estão associado a categoria;
    				*/
    				$this->enviarEmailCategoria($oTarefa->getCoCategoria(), $noProjeto, "O chamado foi Reaberto.", $nrTarefa." ".$noProjeto);
    				
    				$this->_helper->mensagem('mensagem_success',"Chamado Reaberto.");
    				$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    		}
    	}  catch (Exception $e){
    			$this->_helper->mensagem('mensagem_warning',"Erro ao Reabrir." . $e->getMessage());
    			$this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
    	} 
    }

    public function historicoAction() {
    	$co_tarefa  = $this->_request->getParam('co_tarefa');
    	$filtro = $this->_request->getParam('filtro');
    	$pag = $this->_request->getParam('pag');
    	$co_orgao = $this->_request->getParam('coOrgao');
        $paginaAtual = $this->_request->getParam('pg');
        $num_linhas = $this->_request->getParam('num_linhas');
        $coluna = $this->_request->getParam('coluna');
        $oPag_ordem = $this->_request->getParam('pag_ordem');
        $por_modulo = $this->_request->getParam('por_modulo');
        $pagination = 'false';

        if(is_array($oPag_ordem)){
            $pag_ordem = $oPag_ordem['0'];
        }else{
            $pag_ordem = $oPag_ordem;
        }

        // Pega as informações da url.
        $oTipoBusca = $this->_request->getParam('tipo_tarefa');
       	$nrTarefa = $this->_request->getParam('num_tarefa');
        $titulo = $this->_request->getParam('titulo');
        $data = $this->_request->getParam('data');
        $por_usuario = $this->_request->getParam('por_usuario');
        $pr_chamado = $this->_request->getParam('pr_chamado');
        $buscaStatus = $this->_request->getParam('buscaStatus');

        if(is_array($oTipoBusca)){
            $tipoBusca = $oTipoBusca['0'];
        }else{
            $tipoBusca = $oTipoBusca;
        }

    	if($co_tarefa){
            $oTarefa = TarefaQuery::create()->filterByCoTarefa($co_tarefa)->findOne();

            $this->view->oTarefa = $oTarefa;
            $usuarioTarefa = $oTarefa->getUsuarioTarefas();

            $aDescricao = TbDescricaoChamadoQuery::create()->filterByCoTarefa($co_tarefa)->find();
            $this->view->oDescricoes = $aDescricao;

            $imagem = TbImagemQuery::create()->find();

            foreach($aDescricao as $descricao) {
                foreach($imagem as $aImagem){
                    if($descricao->getCoSeqDescChamado() == $aImagem->getCoSeqDescChamado()){
                        $imagem_desc[] = $aImagem;
                    }
                }
            }

            $this->view->imagem_desc = $imagem_desc;

            if (CO_PERFIL == CO_PERFIL_ADMINISTRADOR) {
                $oHistorico = HtTarefaQuery::create()->
                filterByCoTarefa($co_tarefa)
                    ->orderByDtAtualizacao()
                    ->find();
            } else {
                $oHistorico = HtTarefaQuery::create()
                    ->filterByCoTarefa($co_tarefa)
                    ->filterByCoOrgao(CO_USUARIO_ORGAO)
                    ->orderByDtAtualizacao()
                    ->find();

                if (empty($oHistorico)) {
                    $this->_helper->mensagem('mensagem_warning',"Essa tarefa não pertence a esse usuário.");
                    $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
                }
            }

            foreach ($oHistorico as $ht){
                //if(!empty($ht)){
                
                $usuario = UsuarioQuery::create()->filterByCoUsuario($ht->getCoUsuarioAtualizacao())->findOne();
                //echo $usuario->getCoUsuario();
                
                $status = StatusQuery::create()->filterByCoStatus($ht->getCoStatus())->findOne();
                $prioridade = PrioridadeQuery::create()->filterByCoPrioridade($ht->getCoPrioridade())->findOne();

                $arrTarefa[] =
                    array(
                        'dt_atualizacao' => $ht->getDtAtualizacao('d-m-Y H:i:s'),
                        'no_usuario'=> $usuario->getNoUsuario(),
                        'ds_status'=> $status->getNoStatus(),
                        'ds_prioridade'=> $prioridade->getNoPrioridade()
                    );
            }
                
            if($filtro){
                $this->view->filtro = $filtro;
            }
            
            if($pag){
                $this->view->pag = $pag;
            }else{
                $this->view->pag = 'index';
            }
            $this->view->oHistorico = $arrTarefa;
    	}else{
            $this->_helper->mensagem('mensagem_warning',"tarafa inválida");
            $this->_helper->_redirector->gotoSimpleAndExit('index', 'index','chamado');
        }

        //$this->view->extensao = $aExtensao;
        $this->view->imagem = $imagem;
        $this->view->pagination = $pagination;
        $this->view->tipo_tarefa = $tipoBusca;
        $this->view->num_tarefa = $nrTarefa;
        $this->view->titulo = $titulo;
        $this->view->data = $data;
        $this->view->por_usuario = $por_usuario;
        $this->view->por_modulo = $por_modulo;
        $this->view->pr_chamado = $pr_chamado;
        $this->view->busca_status = $buscaStatus;
        $this->view->filtro = $filtro;
        $this->view->co_orgao = $co_orgao;
        $this->view->pg = $paginaAtual;
        $this->view->num_linhas = $num_linhas;
        $this->view->coluna = $coluna;
        $this->view->pag_ordem = $pag_ordem;
    }
    
    public function projetoAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	$co_orgao = $this->_request->getParam('orgao');
    	
    	if($this->_request->isGet() && !empty($co_orgao)){
    		$projeto = ProjetoQuery::create()
    			->useRlOrgaoProjetoQuery()
    				->filterByCoOrgao($co_orgao)
    				->filterByStOgaoProjeto(true)
    			->endUse()
    		->find();
    		
    		$option=array('0'=>'Selecione...');
    		print json_encode($option+$projeto->toKeyValue('coProjeto','NoProjeto'));
    	}
    	exit();
    }
    
    
    
    public function ambienteAction(){
    	$this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();
        $co_projeto = $this->_request->getParam('projetos');
         if ($this->_request->isGet() && !empty($co_projeto)) {
         	$ambiente = AmbienteQuery::create()->useRlProjetoVersaoAmbQuery()->filterByCoProjeto($co_projeto)->filterByStProjVerAmb(true)->endUse()->find();
        	$option=array('0'=>'Selecione...');
        	print json_encode($option+$ambiente->toKeyValue('CoAmbiente','NoAmbiente')); 
        } 
         
    }
    
    public function  countmoduloAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	$co_projeto = $this->_request->getParam('co_projeto');
    	if (!empty($co_projeto)) {
    		
    		$modulo = TbModuloProjetoQuery::create()->filterByStModulo(true)->filterByCoProjeto($co_projeto)->orderByNoModulo()->count();
    		
    		if($modulo){
    			print $modulo;
    		}
    		
    	}
    	
    }
    
    public function  moduloAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	$co_projeto = $this->_request->getParam('projetos');
    	if (!empty($co_projeto)) {
    
    		$modulo = TbModuloProjetoQuery::create()->filterByStModulo(true)->filterByCoProjeto($co_projeto)->orderByNoModulo()->find();
    		
    		if($modulo){
    			$option=array('0'=>'Selecione...');
    			print json_encode($option+$modulo->toKeyValue('CoSeqModuloProj','NoModulo'));
    		}
    
    	}
    	 
    }
    
    public function versaoAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	$co_ambientes = $this->_request->getParam('ambientes');
    	$co_projeto = $this->_request->getParam('projetos');
    	
    	if ($this->_request->isGet() && !empty($co_ambientes)) {
    		$versao = VersaoQuery::create()
    			->useRlProjetoVersaoAmbQuery()
    				->filterByCoAmbiente($co_ambientes)
    				->filterByCoProjeto($co_projeto)
    				->filterByStProjVerAmb(true)
    			->endUse()
    			->find();
    		
    		$option=array('0'=>'Selecione...');
    		print json_encode($option+$versao->toKeyValue('CoVersao','NoVersao'));
    	}
    	 
    }
    public function tarefaAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	
    	$co_tarefa = $this->_request->getParam('co_tarefa');
    	
    	try {
    		$tarefa = TarefaQuery::create()->filterByCoTarefa($co_tarefa)->find();
    		print json_encode($tarefa->toArray());
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    } 
    
    
    public function usuariosOrgaoAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	
    	$co_orgao = $this->_request->getParam('orgao');
    	
    	try {
    		if($co_orgao){
	    		$usuario = UsuarioQuery::create()
	    			->useRlUsuarioOrgaoQuery()
	    				->filterByStRlUsuarioOrgao(true)
	    				->filterByCoOrgao($co_orgao)
	    			->endUse()
	    			->orderByNoUsuario()
	    			->find();
	    		$option=array('0'=>'Selecione...');
	    		print json_encode($option+$usuario->toKeyValue('coUsuario','NoUsuario'));
    		}	
    	
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
    
    public function getOrgaoAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
    	
    	$oOrgao = $this->getOrgaoPorUsuario(CO_USUARIO);
   		$option=array('0'=>'Selecione...');
    	print json_encode($option+$oOrgao->toKeyValue('coOrgao','NoOrgao'));
    }
    
    public function getCategoriaUsuarioAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
	
	   	$co_usuario = $this->_request->getParam('usuarios');
		if($co_usuario){
			$oCategoria = $this->getIdCategoriaPorUsuario($co_usuario);
			$option=array('0'=>'Selecione...');
			print json_encode($option+$oCategoria->toKeyValue('coCategoria','NoCategoria'));
		}
    }
    
    
    private function getTarefa($nrTarefa){
    	if($nrTarefa){
    		$tarefa = TarefaQuery::create()->filterByNrTarefa($nrTarefa)->find();
    		return $tarefa;
    	}
    }
    
    private function getOrgaoPorUsuario($co_usuario){
    	try {
    		$oOrgao = OrgaoQuery::create()->orderByNoOrgao()->useRlUsuarioOrgaoQuery()->filterByCoUsuario($co_usuario)->endUse()->find();
    		return $oOrgao;
    	} catch (Exception $e) {
    		print $e->getMessage();
    	}
    }
    
    private function getIdCategoriaPorUsuario($coUsuario){
    	try {
            return $aObjCategoria =
                CategoriaQuery::create()
                    //->useUsuarioCategoriaQuery()
                        //->filterByCoUsuario($coUsuario)
                    //->endUse()
                ->find();
    	} catch (Exception $e) {
    		$e->getMessage();
    	}
    }

    public function relatorioAction()
    {

    }
    
    /*
     *  Está sendo recebido por parâmetro o caminho atual do arquivo, o
     * nome do mesmo e o código da descrição criado no momento da criação do chamado.
     
    private function salvarArquivo($tmp_name, $nomeArquivo, $coDescricao)
    {   
        
        $count = count($nomeArquivo);
        for ($i = 0;$i < $count;$i++) {
            if ($nomeArquivo[$i])
            {
                
                 //      Armazena as extensões permitidas na variável $allowedExts.
                 
                $allowedExts = array("exe", "rar");
                
                //     A variável $temp recebe o resultado da função explode().
                  // o resultado dessa função é um array contendo o nome do
                 // arquivo e a extensão.
                 
                $temp = explode(".", $nomeArquivo[$i]);
                
                //      A variável $extension recebe o ultimo item do array
                //  que é a extensão.
                 
                $extension = end($temp);
                
                //    Verifica se a estensão armazenada na variável $extension
                //está no array de extensões permitidas $allowedExts.
                 
                if (!in_array($extension, $allowedExts))
                {
                    $dir = "/upload/".date('Y-m-d')."/";
                    
                    if(!is_dir(date('Y-m-d'))){
                        mkdir("upload/".date('Y-m-d'), 0700);
                    }

                    //      Esse bloco de código cria um novo nome para o arquivo.
                     
                    mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
                        $charid = strtoupper(md5(uniqid(rand(), true)));
                        $hyphen = chr(45);// "-"

                        $uuid = substr($charid, 0, 8).$hyphen
                            .substr($charid, 8, 4).$hyphen
                            .substr($charid,12, 4).$hyphen
                            .substr($charid,16, 4).$hyphen
                            .substr($charid,20,12);

                    $aImagem = new TbImagem();
                    $aImagem->setCoSeqDescChamado($coDescricao);
                    $aImagem->setNoImagem($uuid);
                    $aImagem->setDtImagem(date('Y-m-d H:i:s'));
                    $aImagem->setDsExtensao($extension);
                    $aImagem->setDsCaminho($dir);
                    $aImagem->save();

                    
                    
                     //      Não existindo um arquivo com o mesmo nome, a função move_uploaded_file() para
                     //  o diretório /upload. 
                     
                    move_uploaded_file($tmp_name[$i], $dir.$uuid.".".$extension);
                }
            }*/
      

}      
