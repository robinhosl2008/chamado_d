<?php


class Base_Util_Relatorio {
      
    public static function getRelatorio($co_relatorio){
        if($co_relatorio == ""){
            return false;
        }
        if(!is_numeric($co_relatorio)){
            return false;
        }
        
        $oRelatorio = RelatorioQuery::create()
                        ->filterByCoRelatorio($co_relatorio)
                        ->filterByStAtivar(true)
                        ->orderByCoOrdem()
                        ->findOne();        
        return $oRelatorio;
    }
   
    public static function montaRelatorio($co_relatorio,$aResultado){
       
            
            if($co_relatorio == ""){
                return false;
            }
        
            $oDicionario = DicionarioDadosQuery::create()
                    ->filterByCoRelatorio($co_relatorio)
                    ->find();
            
            $Relatorio = "<table>";
            $Relatorio .= '<tr class="d0">';
            
            foreach($oDicionario as $Dicionario){
                $Relatorio .= "<td>" . $Dicionario->getNoApelidoColuna() . "</td>";
                if($Dicionario->getNoFisicoColuna() != ""){
                    $aResultColunas[] = $Dicionario->getNoFisicoColuna();
                }
            }
            
            $Relatorio .= '</tr>';
       
           
            if(is_array($aResultado)){
                if(count($aResultado) > 0){
                        $i=1;
                        
                        foreach($aResultado as $aResult){
                            
                            if($i % 2){$color = "d0";}else{$color="d1";}
                            
                             $Relatorio .= '<tr class="'.$color.'">';
                             if(is_array($aResultColunas)){
                                foreach($aResultColunas as $vColunas){
                                       $Relatorio .= "<td>" . $aResult[$vColunas] . "</td>";
                                }
                             }
                             $Relatorio .= '</tr>';
                        }
                } else { 
                    $Relatorio .= '<tr>';
                        $Relatorio .= '<td colspan="18">Nenhum registro encontrado!</td>';
                    $Relatorio .= '</tr>';
                } 
             }
            
            if(is_object($aResultado)){
                //var_dump(count($aResultado));
                if(count($aResultado) > 0){
                        $i=1;
                        foreach($aResultado as $aResult){
                            
                            if($i % 2){$color = "d0";}else{$color="d1";}
                            
                             $Relatorio .= '<tr class="'.$color.'">';
                             if(is_array($aResultColunas)){
                                foreach($aResultColunas as $vColunas){
                                       $Relatorio .= "<td>" . $aResult[$vColunas] . "</td>";
                                }
                             }
                             $Relatorio .= '</tr>';
                        }
                } else { 
                    $Relatorio .= '<tr>';
                        $Relatorio .= '<td colspan="18">Nenhum registro encontrado!</td>';
                    $Relatorio .= '</tr>';
                } 
            }
            $Relatorio .= '</table>';
            
            return $Relatorio;
    }
    public static function getQuery($codigo_relatorio){
        $aObjRelatorio = new Zend_Config_Xml(PATH_RELATORIO . '/'.ARQ_RELATORIO.'.xml','relatorios');
       
        foreach ($aObjRelatorio->relatorio as $oRelatorio){
            if($codigo_relatorio == $oRelatorio->codigo_relatorio){
                return array('query'=>$oRelatorio->query,
                                'query_totalizadora'=>$oRelatorio->query_totalizadora,
                                'nome'=>$oRelatorio->nome,
                                'codigo_relatorio'=>$oRelatorio->codigo_relatorio,
                                 'no_action'=>$oRelatorio->no_action);
            }
        }
        
        return false;
    }
    public static function getConexao($co_unidade){
        $aObjConexao = new Zend_Config_Xml(PATH_RELATORIO . '/conexao.xml','unidades');
       
        foreach ($aObjConexao->unidade as $oConexao){
            if($co_unidade == $oConexao->co_unidade){
                return array('conexao'=>$oConexao->conexao,
                    'usuario'=>$oConexao->usuario,
                    'senha'=>$oConexao->senha,
                    'co_uni'=>$oConexao->co_uni,
                    'charset'=>$oConexao->charset);
            }
        }
        
        return false;
    }
    public static function getConfiguracaoUnidade($co_unidade){
        $aObjConexao = new Zend_Config_Xml(PATH_RELATORIO . '/conexao.xml','unidades');
       
        foreach ($aObjConexao->unidade as $oConexao){
            if($co_unidade == $oConexao->co_unidade){
                foreach($oConexao->configuracao as $key => $aResult){
                    $aConfig[$key] = $aResult;
                }
            }
        }
         
        return $aConfig;
    }
    public static function getCsv($relatorio,$aDados=array(),$aHeader=array()){
        //
        try{
        //$aHead = array('Nome','Sexo');
        //$aDados = array(array('nome'=>'Fabio Rocha','sexo'=>'M'),array('nome'=>'Maria da Silva','sexo'=>'F'));
        if($relatorio != ""){
            
            $lineCsv .= implode(";",$aHeader);
            $lineCsv .= "\n";
        
            foreach ($aDados as $result){            
                $lineCsv .= implode(";",$result);
                $lineCsv .= "\n";
            }
         
           $nomeArquivo = PATH_RELATORIO_SAVE  . $relatorio . "." . Zend_Session::getId() . ".csv";
             
           Base_Util_FileLog::write("Gerando CSV ($nomeArquivo)");
             
           if(strlen($lineCsv) > 0){
                $rSave = file_put_contents($nomeArquivo,$lineCsv);
                Base_Util_FileLog::write("Gerado CSV ($nomeArquivo)");
           }else{
                echo "Nenhum dado encontrado!";
                Base_Util_FileLog::write("Nenhum dado para gerar CSV ($nomeArquivo)");
           }
        }
        
        }catch(Exception $e){
            print $e->getMessage();
        }
    }
    public static function downloadCsv($relatorio){
        return false;
            $csvFile = PATH_RELATORIO_SAVE  . $relatorio . "." . Zend_Session::getId() . ".csv";
            $csvFileDownload = "/csv/"  . $relatorio . "." . Zend_Session::getId() . ".csv";
            
            if(is_file($csvFile)){
                echo " - <a href='$csvFileDownload' target='_blank'>Download Relatório</a>";
            }else{
                return false;
            }
       
    }
    
}

