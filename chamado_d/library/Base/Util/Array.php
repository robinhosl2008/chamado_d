<?php


class Base_Util_Array {
    
    /**
     * Junta array
     * 
     * @param type $array 
     */
    public static function implode($array,$divisor1,$divisor2) {
 
        $arrayTmp = array();
        
        foreach($array as $key => $value)
            $arrayTmp[] = "$key $divisor1 '$value'";
        
        
        return implode($divisor2,$arrayTmp);
        
    }
    
}

