<?php


class Base_Util_Select {
    
    
    private $_label = "Selecione";    
    private $_params = array();
    private $_options = "";
            
    public function __construct($id,$name="",$dados=null,$selected=null) {
        
        $htmlSelect = "";
        
        if (! $dados)
            $dados = array();
        
        foreach($dados as $key => $value) {
        
            $htmlSelect .= "<option value='$key' ";
            
            if ($key == $selected)
                $htmlSelect .= " selected ";
                
            $htmlSelect .= "  > $value </option>";
            
        }
        
        
        $this->_options = $htmlSelect;
     
        if ($name == "")
            $name = $id;
        
        self::setParams(array("id" => $id));
        self::setParams(array("name" => $name));
        
    }
    
    public function setLabel($label) {
        
        $this->_label = $label;
        
    }
        
    public function addOption($label,$value='') {
        
        $this->_options .= "<option value='$value'>$label</option>";
        
    }
    
    
    public function setParams($params) {
    
        if (is_array($params)) {
            $this->_params[key($params)] = $params[key($params)];
        }
        
    }
    
    public function printToHtml($labelDefault="Selecione") {
                
        $params = Base_Util_Array::implode($this->_params, "=", " ");
        
        print "<select $params >";
        print "<option>{$labelDefault}</option>";
        print $this->_options;
        print "</select>";
    }
    
    public function _return() {
        
        $params = Base_Util_Array::implode($this->_params, "=", " ");
       
        #var_dump($this->_params);
        $html  = "<select $params>";
        $html .= "<option value=''>". $this->_label . "</option>";
        $html .= $this->_options;
        $html .= "</select>";
        
        return $html;
        
    }
    
    
}