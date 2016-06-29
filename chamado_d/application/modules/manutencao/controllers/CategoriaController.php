<?php

class Manutencao_CategoriaController extends Zend_Controller_Action {

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

			$porCategoria = $this->_request->getParam('porCategoria');
			$oPorCategoria = $this->_request->getParam('oPorCategoria');
			if(!empty($oPorCategoria)){
				$porCategoria = $oPorCategoria;
			}

			$paginacao = $this->_request->getParam('paginacao'); // Determina se a ordenação deve ser alterada ou não.
			$oPaginacao = $this->_request->getParam('oPagination'); // Determina se a ordenação deve ser alterada ou não.
			if(!empty($oPaginacao)){
				$paginacao = $oPaginacao;
			}

			$paginaAtual = $this->_request->getParam('pg',1);
			$coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
			$ordem = $this->_request->getParam('ordem', "asc"); // Ordem selecionada pelo usuário.
			$pag_ordem = $this->_request->getParam('pag_ordem'); // Variável que conserva a ordem anterior.

//echo "tipoBusca: ".$tipoBusca; echo "<br />";
//echo "oTipoBusca: ".$oTipoBusca; echo "<br />";
//echo "porCategoria: ".$porCategoria; echo "<br />";
//echo "oPorCategoria: ".$oPorCategoria; echo "<br />";
//			echo "<br />";
//echo "coluna: ".$coluna; echo "<br />";
//echo "paginacao: ".$paginacao; echo "<br />";
//echo "oPaginacao: ".$oPaginacao; echo "<br />";

			// Referente à seleção de linhas no resultado.
			$numLinhasUrl = $this->_request->getParam('num_linhas',15);
			$numLinhasSelect = $this->_request->getParam('num_linhas_select');
			if($numLinhasSelect == ""){
				$numLinhasSelect = $numLinhasUrl;
			}
			$this->view->numLinhasSelect = $numLinhasSelect;

//			if($tipoBusca == 0) {
//				$categoria = CategoriaQuery::create()
//					->paginate($paginaAtual, $numLinhasSelect);
//			}else{
//				$categoria = CategoriaQuery::create()
//					->filterByNoCategoria("%$porCategoria%")
//					->setIgnoreCase("%$porCategoria%")
//					->paginate($paginaAtual,$numLinhasSelect);
//			}


			// Inicia a query.
			$query = CategoriaQuery::create();

			// Referente ao filtro.
			switch($tipoBusca){
				case 1:
					$query->filterByNoCategoria("%$porCategoria%")->setIgnoreCase("%$porCategoria%");
					break;
			}

			// Realiza a troca da ordem.
			if($paginacao == true){
				if($ordem == "asc"){
					$ordem = "desc";
				}else{
					$ordem = "asc";
				}
			}else{
				$ordem = $pag_ordem;
			}
			$pag_ordem = $ordem;

//			echo "pag_ordem: ".$pag_ordem; echo "<br />";
//			echo "ordem: ".$ordem; echo "<br />";

			switch($coluna){
				case 1:
					$query->orderByNoCategoria($ordem);
					break;
//				case 2:
//					break;
			}

			// Pagina o resultado e pega a quantidade de registros encontrados.
			$aObjCategoria = $query->paginate($paginaAtual,$numLinhasSelect);
			$oTotal = count($aObjCategoria);

//			echo "<pre>";
//			foreach($aObjCategoria as $categoria) {
//				print_r($categoria->getUsuarioCategorias($ordem));
//			}
//			exit;

			$this->view->ordem = $ordem;
			$this->view->pag_ordem = $pag_ordem;
			$this->view->coluna = $coluna;
			$this->view->paginacao = $paginacao;
			$this->view->pg = $paginaAtual;
			$this->view->porCategoria = $porCategoria;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->nr_chamado_asc_desc = $ordem;

			$this->view->oTotal = $oTotal;
			$this->view->aObjCategoria = $aObjCategoria;

			$this->view->pagination = Base_Util_PaginacaoHtml::getPaginacao($numLinhasSelect, TOTAL_PAGINACAO, $oTotal, $paginaAtual, $orgao=null, "/manutencao/categoria/listar/num_linhas/$numLinhasSelect/tipoBusca/$tipoBusca/porCategoria/$porCategoria/coluna/$coluna/pagination/false/pag_ordem/$pag_ordem");
		}catch (Exception $e){
			echo $e;
		}
    }
    
    private function salvarUsuarioCategoria($oCategoria, $co_usuarios){
    	
    	$co_categoria = $oCategoria->getCoCategoria();
    	if($co_categoria){
	    	$objUsuarioCategoria = UsuarioCategoriaQuery::create()->filterByCoCategoria($co_categoria)->find();
	    	
	    	if($objUsuarioCategoria->count() && empty($co_usuarios)){
	    		$objUsuarioCategoria->delete();
	    		
	    	} else if(!empty($co_usuarios) && $objUsuarioCategoria->count()){
	    		
	    		foreach($objUsuarioCategoria as $usuarioCategoria){
	    			
	    			if (in_array($usuarioCategoria->getCoUsuario(), $co_usuarios)) { 
	    				$chave = array_search($usuarioCategoria->getCoUsuario(), $co_usuarios);
	    				unset($co_usuarios[$chave]); 
	    				
					}else{
						$usuarioCategoria->delete();
					}
	    		}
	    	}

    	}
    	if($co_usuarios != null){
    		foreach ($co_usuarios as $usuario) {
    			$oUsuarioCategoria = new UsuarioCategoria();
    	
    			$oUsuarioCategoria->setCategoria($oCategoria);
    			$usu = UsuarioQuery::create()->filterByCoUsuario($usuario)->findOne();
    			if($usu != null){
    				$oUsuarioCategoria->setCoUsuario($usu->getCoUsuario());
    				$oUsuarioCategoria->save();
    			}
    		}
    		 
    	}else{
   			$oCategoria = $oCategoria->save();
    	}	
    
    }

    public function validarAction(){
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->layout->disableLayout();
        
    	$no_categoria = trim($this->_request->getParam('no_categoria'));

    	$cat = CategoriaQuery::create()
            ->filterByNoCategoria($no_categoria)
            ->setIgnoreCase(true)
            ->findOne();

       if(!$cat){
            print 'true';
        }else{
            print 'false';
        }

    	 
    }
    
    public function adicionarAction()
	{
		try {
			$numLinhas = $this->_request->getParam('num_linhas');
			$tipoBusca = $this->_request->getParam('tipoBusca');
			$porCategoria = $this->_request->getParam('porCategoria');
			$coluna = $this->_request->getParam('coluna'); // Coluna onde existe a ordenação.
			$paginacao = $this->_request->getParam('paginacao'); // Determina se a ordenação deve ser alterada ou não.
			$pag_ordem = $this->_request->getParam('pag_ordem'); // Variável que conserva a ordem anterior.
			$ordem = $this->_request->getParam('ordem'); // Ordem selecionada pelo usuário.
			$paginaAtual = $this->_request->getParam('pg');

			if($ordem == "asc"){
				$ordem = "desc";
				$pag_ordem = "desc";
			}else{
				$ordem = "asc";
				$pag_ordem = "asc";
			}

			$this->view->aObjUsuario = UsuarioQuery::create()
				->where('usuario.ds_email IS NOT NULL')
				->orderByNoUsuario()
				->find();

			$co_categoria = $this->_request->getParam('co_categoria');
			if (!empty($co_categoria)) {
				$no_cat = CategoriaQuery::create()->filterByCoCategoria($co_categoria)->findOne();
				$this->view->no_cat = $no_cat->getNoCategoria();
			}

			if ($this->_request->isPost()) {
				try {
					if ($co_categoria) {
						$oCategoria = CategoriaQuery::create()->filterByCoCategoria($co_categoria)->findOne();
					} else {
						$oCategoria = new Categoria();
					}

					$usuarios = $this->_request->getParam('usuarios');
					$oCategoria->setNoCategoria(trim($this->_request->getParam('no_categoria')));

					$this->salvarUsuarioCategoria($oCategoria, $usuarios);

					$this->_helper->mensagem('mensagem_success', "Categoria cadastrada com sucesso.");
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'categoria', 'manutencao');


				} catch (Exception $e) {
					$this->_helper->mensagem('mensagem_warning', "Erro ao cadastrar." . $e->getMessage());
					$this->_helper->_redirector->gotoSimpleAndExit('listar', 'categoria', 'manutencao');
				}

			} else {
				if ($co_categoria) {
					$this->view->aObjCategoria = CategoriaQuery::create()->filterByCoCategoria($co_categoria)->findOne();
					$this->view->aObjUsuarios = UsuarioCategoriaQuery::create()->filterByCoCategoria($co_categoria)->find();
					$this->view->aObjUsuario = UsuarioQuery::create()->where('usuario.ds_email IS NOT NULL')->orderByNoUsuario()->find();
				} else {
					$this->view->aObjCategoria = new Categoria();
					$this->view->aObjUsuarios = new UsuarioCategoria();

				}
			}

			$this->view->ordem = $ordem;
			$this->view->pag_ordem = $pag_ordem;
			$this->view->coluna = $coluna;
			$this->view->paginacao = $paginacao;
			$this->view->pg = $paginaAtual;
			$this->view->porCategoria = $porCategoria;
			$this->view->tipoBusca = $tipoBusca;
			$this->view->numLinhasSelect = $numLinhas;
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
        
        $co_categoria = $this->_request->getParam('co_categoria');
        $objCategoria = CategoriaQuery::create()->filterByCoCategoria($co_categoria)->findOne();
        try {
	        if(count($objCategoria->getUsuarioCategorias()) == 0){
	        	$objCategoria->delete();
	        }else{
	        	$objCategoria->getUsuarioCategorias()->delete();
	        	
	        }
	        $this->_helper->mensagem('mensagem_success','Categoria excluída com sucesso!');
        }catch (Exception $e) {
                $this->_helper->mensagem('mensagem_warning','Não foi possivel excluir a categoria!');
        }  
        $this->_helper->_redirector->gotoSimpleAndExit('listar', 'categoria','manutencao');
    }
}
