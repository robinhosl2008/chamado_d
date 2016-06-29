<?php


class  Base_Util_Opus {
    
    
   public static function getSadtConteudoExame($co_requisicao, $co_exame) {

        $strResult = Base_Util_System::opus("rege/hs_phprex_com", IP_OPUS, "null \"$co_requisicao\" \"$co_exame\"");

        $strResult = str_replace("[H[J", "", $strResult);
        $strResult = str_replace("'", "", $strResult);
     
        return $strResult;

    }
    
    public static function getArrayFromIntb6($coLegado) {
        
        $objConnTsql = new Base_Db_Tsql();
        
        $objConnTsql->query("SELECT * FROM INTB6 where ib6regist = $coLegado");
              
        return $objConnTsql->fetch();
        
        
    }
    
}
