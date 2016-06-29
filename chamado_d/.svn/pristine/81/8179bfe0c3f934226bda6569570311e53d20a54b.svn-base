<?php

class Base_Util_Net {

    /**
     * Verifica se IP/PORTA estão online
     * @param <type> $ip
     * @param <type> $porta
     * @return <type> Boolean
     */
    public static function isOnline($ip,$porta) {

        $fileLog = New Base_Util_FileLog();

        if (strlen($ip) < 9 )
            return false;

        $fp = @fsockopen("$ip", (int) $porta, $errno, $errstr, 30);

        if ($fp) {
            fclose($fp);
            return true;
        }else{
            $fileLog->write("unable to connect to $ip (Connection timed out)");
            return false;
        }
    }
    
    public static function getResponse($url) {
        
        return file_get_contents($url);
        
    }
    

}