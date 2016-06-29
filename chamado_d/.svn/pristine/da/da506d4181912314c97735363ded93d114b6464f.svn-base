<?php


class  Base_Util_System {
    
    
    
    /**
     * Executa um comando no shell e retorna o resultado
     */    
    public static function cmd($comando) {
                
        if (empty($comando))
            return null;
        
        return shell_exec($comando);
        
    }

    public static function popen($cmd,$mode="r") {
        
        $handle = popen($cmd, $mode);
        echo "'$handle'; " . gettype($handle) . "\n";
        $read = fread($handle, 2096);
        echo $read;
        pclose($handle);
        
    }
    
    /**
     * Executa um programa OPUS
     */
    public static function opus($programa,$ipBanco,$parametros="") {
        
        $log = new Base_Util_FileLog();
        
        $ini = microtime(true);

        if (empty($ipBanco)) {
            $log->write("Base_Util_System::opus => IP do Banco ($ipBanco) não informado ");
            return false;
        }

        $opusExec = trim(self::cmd(PATH_SCRIPT_OPUS . "/$programa $ipBanco $parametros"));

        $fim = microtime(true);

        $resultTime = round($fim - $ini,2);

        $log->write("TS: $resultTime - OPUS: " . PATH_SCRIPT_OPUS . "/$programa $ipBanco $parametros");

        return $opusExec;
        
    }
    
     
    /**
     * Limpa um Diretorio com comando rm -rf
     */
    
    public static function clearDir($dir) {
        
        if (is_dir($dir) && strlen($dir) > 18)        
            return self::cmd("rm -rf $dir ");
        else
            return false;
        
    }
    
    /**
     * Converte Medidas
     * @param type $size
     * @return type 
     */
    public static function convert($size) {
        $unit=array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }
    
    /**
     * Cria um arquivo tar.gz
     * @param type $origem
     * @param type $destino
     * @return type 
     */
    public static function tar($origem,$destino,$tipo="zcf") {
        
        define("BIN_TAR","/bin/tar");
        
        if (! is_file($origem))
            return false;
        
        if (empty($destino))
            return false;
        
        if (! is_file(BIN_TAR))
            return false;
        
        return self::cmd(BIN_TAR . " $tipo $destino $origem");
        
    }
    
    public static function untar($arquivo,$tipo="zxvf") {
        
        define("BIN_TAR","/bin/tar");
        
        if (! is_file($arquivo))
            return false;
        
       
        if (! is_file(BIN_TAR))
            return false;
        
        return self::cmd(BIN_TAR . " $tipo $arquivo");
        
    }

    public static function rsync($pathLocal,$pathDestino,$ipDestino,$portaDestino,$ssh=false) {

        $log = new Base_Util_FileLog();

        $comando = "rsync -Cravzp ";

        if ($ssh)
            $comando .= "--rsh=\"ssh -C -l " . USUARIO_RSYNC . " -p$portaDestino\" ";

        $comando .=  USUARIO_RSYNC .  "@{$ipDestino}:{$pathDestino}/ $pathLocal";

        $log->write("Executando $comando");

        $resultado = self::cmd($comando);

        $log->write($resultado);

        return $resultado;

    }


}
