<?php

/**
 * Classe Form
 * 
 * 
 * 
 */
class Base_Util_Form {

    private $_xml;
    private $_campos;
    private $_objeto;
    private $_camposadd = array();
    private $_camposvalidacao = array();
    private $_inputfields = array('text', 'hidden', 'password');

    public function __construct($formxml, $formid) {

        //Verifica Parametros
        if (empty($formxml))
            throw new Exception("XML Formulário não foi informado.");

        if (empty($formid))
            throw new Exception("Id Formulário não foi informado.");



        //Carrega XML                
        $this->_xml = new Zend_Config_Xml(PATH_FORMS . "/$formxml", $formid);

        $this->_campos = array();

        $this->_formid = $formid;

        $this->_propelQuery = trim($this->_xml->propel);

        //Percorre campos e monta estrutura
        foreach ($this->_xml->fields->toArray() as $id => $aInfo)
            $this->_campos[$id] = $aInfo;
    }

    /**
     * Adiciona campos preenchidos para Formulário
     * @param type $aDados 
     */
    public function addForm($aDados) {

        $this->_dados = $aDados;
    }

    /**
     * Remove um valor preenchido de um campo
     * @param type $id 
     */
    public function clear($id) {

        if (isset($this->_dados[$id]))
            unset($this->_dados[$id]);
    }

    public function addObjeto($objeto) {

        $this->_objeto = $objeto;
    }

    public function getValorCampo($id) {


        if (method_exists($this->_objeto, $this->_campos[$id]['propel'])) {

            $valor = $this->_objeto->{$this->_campos[$id]['propel']}();

            return $valor;
        } else
            print null;
    }

    /**
     * Recupera um campo formatado
     * @param type $id 
     */
    public function getCampo($id, $dados=null) {

        $html = "";

        //Verifica a necessidade de incluir label no campo
        if (!empty($this->_campos[$id]['label']))
            $html .= "<label for=\"$id\" class=\"label required\">{$this->_campos[$id]['label']}</label>";

        //Verifica tipo de campo
        switch ($this->_campos[$id]['tipo']) {

            case "text":
            case "hidden":
            case "password":

                $html .= "<input type=\"{$this->_campos[$id]['tipo']}\" ";
                break;

            case "checkbox":

                $html .= "<input type='checkbox'  ";
                
                if (! is_null($dados))
                    $html .= " checked='checked' ";

                break;

            case "select":

                $objSelect = new Base_Util_Select($id, $name, $dados, $this->_dados[$id]);

                //Propriedade Classe
                if (isset($this->_campos[$id]['classe']))
                    $objSelect->setParams(array("class" => $this->_campos[$id]['classe']));

                if (isset($this->_campos[$id]['onclick']))
                    $objSelect->setParams(array("onclick" => $this->_campos[$id]['onclick']));

                if (isset($this->_campos[$id]['onblur']))
                    $objSelect->setParams(array("onblur" => $this->_campos[$id]['onblur']));
                
                if (isset($this->_campos[$id]['onchange']))
                    $objSelect->setParams(array("onchange" => $this->_campos[$id]['onchange']));


                $html .= $objSelect->_return();
                break;

            case "textarea":

                $html .= "<textarea ";

                break;
        }

        if ($this->_campos[$id]['tipo'] != "select") {

            $html .= " id=\"$id\" ";

            //Verifica se campo tem propriedade name            
            if (isset($this->_campos[$id]['name']))
                $html .= " name=\"{$this->_campos[$id]['name']}\" ";
            else
                $html .= " name=\"$id\" ";


            //Verifica se existe o valor deste campo setado no array _dados (talvez informado pelo addForm)
            if (isset($this->_dados[$id])) {

                $valor = $this->_dados[$id];

                if (Base_Util_Date::isDate($valor)) {
                    $objZendDate = Base_Util_Date::getDateToZendDate($valor);
                    $valor = $objZendDate->toString('d/m/Y');
                }

                $html .= " value=\"{$valor}\" ";
            //Se não existir, procura o valor em outros lugares   
            } else {

                $valor = "";

                //Verifica se o objeto do propel foi adicionado 
                if (is_object($this->_objeto)) {

                    //Verifica se existe método do propel para recuperar dados do objeto                    
                    if (method_exists($this->_objeto, $this->_campos[$id]['propel'])) {

                        $valor = $this->_objeto->{$this->_campos[$id]['propel']}();

                        if (Base_Util_Date::isDate($valor)) {
                            $objZendDate = Base_Util_Date::getDateToZendDate($valor);
                            $valor = $objZendDate->toString('d/m/Y');
                        }

                        $this->_dados[$id] = $valor;
                    }
                } else {

                    //Verifica foi definido um valor padrao para o campo no xml do formulário
                    if (!empty($this->_campos[$id]['valor'])) {
                        
                        if (Base_Util_Date::isDate($this->_campos[$id]['valor'])) {
                            $objZendDate = Base_Util_Date::getDateToZendDate($this->_campos[$id]['valor']);
                            $valor = $objZendDate->toString('d/m/Y');
                        }
                        else
                            $valor = $this->_campos[$id]['valor'];
                    }
                }

                if ($this->_campos[$id]['tipo'] == "checkbox")
                    $html .= " value=\"1\" ";
                else
                    $html .= " value=\"{$valor}\" ";

                //Verifica se campo é checkbox e marca 
                if ($this->_campos[$id]['tipo'] == "checkbox") {

                    if (isset($this->_dados[$id])) {
                        if ($this->_dados[$id] == "true")
                            $html .= " checked=\"checked\" ";
                    } else {
                        if (($valor == "true" || $valor == "1") || (isset($this->_campos[$id]['checked'])))
                            $html .= " checked=\"checked\" ";
                    }
                }
            }

            //Propriedade Classe
            if (isset($this->_campos[$id]['classe']))
                $html .= " class=\"{$this->_campos[$id]['classe']}\" ";

            //Propriedades de Acoes
            if (isset($this->_campos[$id]['onclick']))
                $html .= " onclick=\"{$this->_campos[$id]['onclick']}\" ";


            if (isset($this->_campos[$id]['onblur']))
                $html .= " onblur=\"{$this->_campos[$id]['onblur']}\" ";
        }

        if ($this->_campos[$id]['tipo'] == "textarea")
            $html .= ">{$this->_dados[$id]}</textarea>";
        elseif ($this->_campos[$id]['tipo'] != "select")
            $html .= " />";


        //add informacao que campo foi add no formulario
        $this->_camposadd[] = $id;

        return $html;
    }

    /**
     * adicionar validacoes de campos do formulario
     */
    public function adicionarValidacao(Zend_View $view) {

        $aValidacao = array();
        $aRegra = array();
        $aMensagem = array();

        $i = 0;

        foreach ($this->_campos as $id => $aInformacao) {

            if (in_array($id, $this->_camposadd)) {


                //Verifica se existem validacoes
                if (isset($aInformacao['validacao'])) {

                    if (!(is_object($this->_objeto) && $aInformacao['tipo'] == "password")) {

                        if (isset($aInformacao['validacao']['requerido'])) {
                            $aRegra[$id][] = "required: true";
                            $aMensagem[$id][] = "required: \"{$aInformacao['validacao']['requerido']['msg']}\"";
                        }
                    }

                    if (isset($aInformacao['validacao']['email'])) {
                        $aRegra[$id][] = "email: true";
                        $aMensagem[$id][] = "email: \"{$aInformacao['validacao']['email']['msg']}\"";
                    }

                    if (isset($aInformacao['validacao']['tamanho-min'])) {
                        $aRegra[$id][] = "minlength: {$aInformacao['validacao']['tamanho-min']['regra']}";
                        $aMensagem[$id][] = "minlength: \"{$aInformacao['validacao']['tamanho-min']['msg']}\"";
                    }

                    if (isset($aInformacao['validacao']['tamanho-max'])) {
                        $aRegra[$id][] = "maxlength: {$aInformacao['validacao']['tamanho-min']['regra']}";
                        $aMensagem[$id][] = "maxlength: \"{$aInformacao['validacao']['tamanho-min']['msg']}\"";
                    }

                    if (isset($aInformacao['validacao']['igual'])) {

                        $aRegra[$id][] = "equalTo: \"#{$aInformacao['validacao']['igual']['campo']}\"";
                        $aMensagem[$id][] = "equalTo: \"{$aInformacao['validacao']['igual']['msg']}\"";
                    }
                }
            }
        }

        if (count($aRegra) > 0) {

            $view->headScript()->captureStart();

            print "
                $().ready(function() {          

            ";

            print "$('#{$this->_formid}').validate({\n";
            print "\t\trules: { \n";

            $aux = "";
            $i = 0;

            foreach ($aRegra as $id => $aRegraValidacao) {

                $i++;

                if ($aux != $id)
                    print "\t\t\t" . $id . ": { \n\t\t\t\t";

                print implode(",\n\t\t\t\t", $aRegraValidacao);

                if ($aux != $id)
                    print "\n\t\t\t}";

                if ($i < count($aRegra))
                    print ",\n";
            }

            print "\n\t\t}";

            if (count($aMensagem) > 0) {

                print ",\n\t\tmessages: {\n ";

                $i = 0;

                foreach ($aMensagem as $id => $aMensagemValidacao) {

                    $i++;

                    if ($aux != $id)
                        print "\t\t\t" . $id . ": { \n\t\t\t\t";

                    print implode(",\n\t\t\t\t", $aMensagemValidacao);

                    if ($aux != $id)
                        print "\n\t\t\t}";

                    if ($i < count($aMensagem))
                        print ",\n";
                }

                print "\n\t\t}";
            }
            print "\n\t});";

            print "\n\t});";
            $view->headScript()->captureEnd();
        }
    }

    /**
     * Valida Formulário (Server)
     */
    public function getErrors() {

        $msgErro = array();

        foreach ($this->_campos as $id => $aInformacao) {

            if (isset($this->_dados[$id])) {

                if (isset($aInformacao['validacao'])) {

                    if (!(is_object($this->_objeto) && $aInformacao['tipo'] == "password")) {

                        if (isset($aInformacao['validacao']['requerido']))
                            if (strlen($this->_dados[$id]) == 0)
                                $msgErro[] = $aInformacao['validacao']['requerido']['msg'];
                    }

                    if (isset($aInformacao['validacao']['tamanho-min']))
                        if (strlen($this->_dados[$id]) <= $aInformacao['validacao']['tamanho-min']['regra'])
                            $msgErro[] = $aInformacao['validacao']['tamanho-min']['msg'];

                    if (isset($aInformacao['validacao']['tamanho-max']))
                        if (strlen($this->_dados[$id]) <= $aInformacao['validacao']['tamanho-max']['regra'])
                            $msgErro[] = $aInformacao['validacao']['tamanho-max']['msg'];
                }
            }
        }

        return $msgErro;
    }

}