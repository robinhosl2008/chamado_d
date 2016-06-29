<?php

class Base_Util_Date {

    public static function getIdade($birthday, $deathday = NULL) {

	if (empty($birthday))
		return null;


        $birthDate = new Zend_Date($birthday,"YYYY-MM-dd");

        if (! $birthDate) {
            return false;
        }

        if (Zend_Date::isDate($deathday)) {
            $deathDate = new Zend_Date($deathday,"YYYY-MM-dd");
        } else {
            $deathDate = new Zend_Date();
        }
        $dYear = $deathDate->get(Zend_Date::YEAR) - $birthDate->get(Zend_Date::YEAR);
        $dMonth = $deathDate->get(Zend_Date::MONTH) - $birthDate->get(Zend_Date::MONTH);
        $dDay = $deathDate->get(Zend_Date::DAY) - $birthDate->get(Zend_Date::DAY);
        if ($dMonth < 0) {
            $dYear--;
        } elseif (($dMonth == 0) && ($dDay < 0))
            $dYear--;
        return $dYear;
    }

    public static function convertDate($regexp, $date) {

        preg_match($regexp, $date, $aData);

        return $aData;
    }

    public static function dmYtoYmd($date, $separador = "-") {

        
        $aData = self::convertDate("/^([0-9]{2})[-\/]([0-9]{2})[-\/]([0-9]{4})$/", $date);

        if (count($aData) == 4)
            return $aData[3] . $separador . $aData[2] . $separador . $aData[1];
        else
            return false;
    }

    
      public static function YmdtodmY($date, $separador = "/") {

        
        $aData = self::convertDate("/^([0-9]{4})[-]([0-9]{2})[-]([0-9]{2})$/", $date);

        if (count($aData) == 4) {
            $data = $aData[3] . $separador . $aData[2] . $separador . $aData[1];
            return $data;
        } else
            return false;
    }
    
    /**
     * Retorna uma data do Hospub para padrão Zend_Date
     * @param type $date 
     */
    public static function getHspDateToZendDate($date,$hour="") {
 
        if (strlen($date) != "8")
            return false;
        else {
            $aDate = array('year' => substr($date,0,4),
                           'month' => substr($date,4,2),
                           'day' => substr($date,6,2));
            
            if (! empty($hour)) {
                
                $aDate['hour'] = substr($hour,0,2);
                $aDate['minute'] = substr($hour,2,2);
                
            }
                
            
            Zend_Date::setOptions(array('format_type' => 'php'));
            
            return new Zend_Date($aDate);
        }
        
    }

    public static function isDate($date) {

        $bValid = false;

        //Valida data d-m-Y ou d/m/Y
        if (eregi("^[0-9]{2}[-\/][0-9]{2}[-\/][0-9]{4}$", $date))
            $bValid = true;

        //Valida data Y-m-d ou Y/m/d
        if (eregi("^[0-9]{4}[-\/][0-9]{2}[-\/][0-9]{2}$", $date))
            $bValid = true;

        return $bValid;

    }


    public static function getFormatoDate($date) {

        //Verifica o tipo de data
       // Tipo d-m-Y ou d/m/Y
        if (eregi("^[0-9]{2}[-\/][0-9]{2}[-\/][0-9]{4}$", $date))
            return 'dmY';

        if (eregi("^[0-9]{2}[-\/][0-9]{2}[-\/][0-9]{4}[.]{9}$", $date))
            return 'dmY';

        //Valida data Y-m-d ou Y/m/d
        if (eregi("^[0-9]{4}[-\/][0-9]{2}[-\/][0-9]{2}$", $date))
            return 'Ymd';

        if (eregi("^[0-9]{4}[-\/][0-9]{2}[-\/][0-9]{2}[.]{9}$", $date))
            return 'Ymd';

    }

    public static function getDateToZendDate($date) {

        switch(self::getFormatoDate($date)) {

            case 'dmY':


                $aDate = array('year' => substr($date,6,4),
                               'month' => substr($date,3,2),
                               'day' => substr($date,0,2));

                //Verifica se é necessário incluir tempo
                if (strlen($date) > 10) {
                    $aDate['hour'] = substr($date, 11,2);
                    $aDate['minute'] = substr($date, 14,2);
                    $aDate['second'] = substr($date, 17,8);
                }

                break;

            case 'Ymd':

                $aDate = array('year' => substr($date,0,4),
                           'month' => substr($date,5,2),
                           'day' => substr($date,8,2));

                //Verifica se é necessário incluir tempo
                if (strlen($date) > 10) {
                    $aDate['hour'] = substr($date, 11,2);
                    $aDate['minute'] = substr($date, 14,2);
                    $aDate['second'] = substr($date, 17,8);
                }

                break;

            default:
                return false;
        }

        Zend_Date::setOptions(array('format_type' => 'php'));

        return new Zend_Date($aDate);

    }

}

