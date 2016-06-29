<?php
class Base_Util_PaginacaoHtml {

	public static function getPaginacao($limit, $limitPag, $totalRec, $pagAtual, $orgao=null, $url){
                        $paginacaoHtml = "<ul><li><a href=\"{$url}/pg/1\">Primeira</a></li>";
			$ultimarec = ceil($totalRec / $limit);
			$nrPagEsq = 5;
			$classDisabledProx = "";
			$classDisabledAnt = "";
			$anterior = $pagAtual-1;
			$proximo = $pagAtual+1;
			
			//Validar se a pagina selecionado é maior que o numero de paginas paginadas.
			if($ultimarec <  $pagAtual){
				$pagAtual = $ultimarec;
			}
			
			if($pagAtual == 1){
				$paginacaoHtml .="<li class='disabled'><a href='#'>«</a></li>";
				
			}else{
				$paginacaoHtml .="<li><a href='{$url}/pg/{$anterior}'> « </a></li>";
			}
				
			if($pagAtual > $nrPagEsq){
				$cont = $pagAtual-$nrPagEsq;
				if(($ultimarec - $cont) >= $limitPag ){
  					$i= $cont;
  				}else if(($ultimarec-($limitPag-1)) > 0){
  					$i = $ultimarec-($limitPag-1);
  				}else{
					$i=1;
  				}
			}else{
  				$i=1;
  			}

			for ($i; $i< $ultimarec+1; $i++){
				if($i == $pagAtual){
					$classActive ="active";
				}else {
					$classActive = "";
				}
				$paginacaoHtml .= "<li class=\"{$classActive}\"><a href=\"{$url}/pg/{$i}/orgao/$orgao\">{$i}</a></li>";

				if($limitPag == 1){
					break;
				}
				$limitPag--;
			}

			if($pagAtual == $ultimarec){
				$paginacaoHtml .=	"<li class=\"disabled\"> <a href=\"#\">»</a></li>";
			}else{
				$paginacaoHtml .=	"<li> <a href=\"{$url}/pg/{$proximo}\">»</a></li>";
			}
				
			
			
			$paginacaoHtml .=   "<li class=\"disabled\"><a href=\"#\">{$pagAtual} de {$ultimarec} </a></li>";
		
		$paginacaoHtml .="<li><a href=\"{$url}/pg/{$ultimarec}\">Última</a></li></ul>";

		return $paginacaoHtml;
		
	}
}