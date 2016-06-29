<?php

class Base_Util_String {



    public static function cropLeft($string,$tamanho=15) {

        if (strlen($string) < $tamanho)
            return $string;
        else
            return "<span title='".htmlentities($string,ENT_QUOTES)."' class='tooltipLeft'>" . substr($string, 0,$tamanho) . "...</span>";

    }
    public static function crop($string,$tamanho=15) {
        
        if (strlen($string) < $tamanho)
            return $string;
        else
            return "<span title='".htmlentities($string,ENT_QUOTES)."' class='tooltip'>" . substr($string, 0,$tamanho) . "...</span>";  
        
    }
    public static function cropImg($string,$tamanho=15,$imgSrc=null) {
            return "<span title='".htmlentities($string,ENT_QUOTES)."' class='tooltip'> <img src='" . $imgSrc . "'></span>";
    }
    public static function cropImgLeft($string,$tamanho=15,$imgSrc=null) {
            return "<span title='".htmlentities($string,ENT_QUOTES)."' class='tooltipLeft'> <img src='" . $imgSrc . "'></span>";
    }


    /**
     * Remove caracteres inválidos para inserção no postgresql
     */
    public static function clearText($string) {
        
        $string = utf8_encode($string);
        return preg_replace('[^A-Za-z0-9_]', '', $string);
        
    }

    /**
     * Completa Cpf com zeros a esquerda
     */
    public static function completaCpf($string) {
        $string = trim($string);
        return str_pad($string, 11, "0", STR_PAD_LEFT);
    }    
    
    
    public static function nullSeVazio($string) {
        
        if (strlen($string) == 0)
            return null;
        else
            return $string;
    }
    
}
