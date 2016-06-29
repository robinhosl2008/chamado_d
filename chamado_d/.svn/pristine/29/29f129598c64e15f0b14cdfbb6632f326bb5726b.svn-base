<?php

/**
 * Classe para criação de formulário personalizados baseado em Zend_Form 
 */
class Base_Form extends Zend_Form {

       
    public function __construct($idForm) {
        
        $configForm = new Zend_Config_Yaml(CONFIG_FORM_FILE, $idForm);
        
        $aFormConf = $configForm->toArray();
    
        //Propriedades do Formulario
        $aProperty = $aFormConf['properties'];
        $aElement = $aFormConf['fields'];
        
        if (! is_array($aProperty)) {
            throw new Exception("Nenhuma propriedade definida para o formulário");
        }
        
        if (! is_array($aElement)) {
            throw new Exception("Nenhum elemento definido para o formulário");
        }
        
        if ($aProperty['id']) {
            $this->setAttrib("id", $aProperty['id']);
        }
        
        if ($aProperty['name']) {
            $this->setName($aProperty['name']);
        }
        
        if ($aProperty['method']) {
            $this->setMethod($aProperty['method']);
        }
        
        if ($aProperty['action']) {
            $this->setAction($aProperty['action']);
        }
        
        $aElementDecorator = array();
        
        //Cria elementos do formulário
        foreach ($aElement as $aPropertyElement) {
            
            $oElement = $this->createElement($aPropertyElement['type'], $aPropertyElement['name']);
            
            $oElement->setLabel($aPropertyElement['label']);            
            
            //Verifica propriedades específicas
            if ($aPropertyElement['placeholder']) {
                $oElement->setAttrib("placeholder", $aPropertyElement['placeholder']);
            }
            
            if ($aPropertyElement['class']) {
                $oElement->setAttrib("class", $aPropertyElement['class']);
            }
            
            if ($aPropertyElement['id']) {
                $oElement->setAttrib("id", $aPropertyElement['id']);
            }
            
            if ($aPropertyElement['value']) {
                $oElement->setValue($aPropertyElement['value']);
            }
            
            
            if ($aPropertyElement['onClick']) {
                $oElement->setAttrib("onClick", $aPropertyElement['onClick']);
            }
            
            
            
            //Verifica Valores para Select
            if ($aPropertyElement['selectOption']) {
                
                //Valores passados por array
                if (is_array($aPropertyElement['selectOption'])) {
                    
                } else {
                    //Valores passados por Funcao do Sistema
                    //Recupera objeto de ConfigFunction
                    $oConfigFunction = Zend_Registry::get("oConfigFunction");
                    
                    try {

                        $vlFunction = $oConfigFunction->exec($aPropertyElement['selectOption']);                        
                        $oElement->addMultiOptions($vlFunction);
                        

                    } catch (Exception $e) {

                        throw new Base_Exception($e);

                    }
                }
                
            }
            
            
            //Verifica Validadores
            if (is_array($aPropertyElement['validators'])) {
            
                $aValidators = array();
                
                $oElement->setRequired($aPropertyElement['validators']['required']);
            
                //Validar campo em branco
                if (isset($aPropertyElement['validators']['notempty'])) {
                    
                    $aOption = array();
                    
                    if ($aPropertyElement['validators']['notempty']['messages']) {
                        $aOption['messages'] = $aPropertyElement['validators']['notempty']['messages'];
                    }
                    
                    $oElement->addValidator(
                            $aPropertyElement['validators']['notempty']['validator'], 
                            (bool) $aPropertyElement['validators']['notempty']['break'], 
                            $aOption);
                }
                
                //Validar campo alfanumerico
                if (isset($aPropertyElement['validators']['alnum'])) {
                    $aAlNum = array('validator' => $aPropertyElement['validators']['alnum']['validator']);
                    
                    //Verifica se a validação será interrompida
                    if ($aPropertyElement['validators']['alnum']['break']) {
                        $aAlNum['breakChainOnFailure'] = true;
                    }
                    
                    $aValidators[] = $aAlnum;
                }
                
                //Validar tamanho da string
                if (isset($aPropertyElement['validators']['strlen'])) {
                    
                    $aStrlen = array('validator' => $aPropertyElement['validators']['strlen']['validator']);
                    $aStrlen = array('options' => array($aPropertyElement['validators']['strlen']['min'],$aPropertyElement['validators']['strlen']['max']));
                    
                    //Verifica se a validação será interrompida
                    if ($aPropertyElement['validators']['strlen']['break']) {
                        $aStrlen['breakChainOnFailure'] = true;
                    }
                    
                    $aValidators[] = $aStrlen;
                }
                
                
                
            }
            
            //Verifica decoradores de campo
            $aDecorator = $this->getArrayDecoration($aPropertyElement['decorators']);
            
            if (count($aDecorator) > 0) {
                $aElementDecorator[] = array($oElement,$aDecorator);
            }

            #$oElement->setDisableLoadDefaultDecorators($aPropertyElement['DisableLoadDefaultDecorators']);
            
            $this->addElement($oElement);
            
        }
        
        //Decorators padrão para os Elementos do Formulario
        $aFormElementDecorator = $this->getArrayDecoration($aProperty['element_decorators']);
        
        if (count($aFormElementDecorator) > 0) {
            $this->setElementDecorators($aFormElementDecorator);
        }        
        
        //Verifica se existem Elementos do Formulario com Decorators
        if (count($aElementDecorator) > 0) {            
            foreach($aElementDecorator as $aDecorator) {                
                $aDecorator[0]->setDecorators($aDecorator[1]);
            }
        }
        
        $aFormDecorator = $this->getArrayDecoration($aProperty['decorators']);
        
        if (count($aFormDecorator) > 0) {
            $this->setDecorators($aFormDecorator);
        }        
        
        
        parent::__construct($options);
        
    }
    
    public function getArrayDecoration($aDecoratorProperty) {
        
        $aDecorator = array();
        
        if (is_array($aDecoratorProperty)) {
            foreach($aDecoratorProperty as $decorator => $values) {

                //Verifica se é um decorator padrao
                if (! is_array($values)) {
                    $aDecorator[] = $decorator;
                } else {

                    //Verifica decorators agrupados
                    foreach($values as $subdecorator => $subvalues) {

                        if (is_array($subvalues)) {                        
                            $aDecorator[] = array(array($decorator => $subdecorator),$subvalues);
                        } else {
                            $aDecorator[] = array($decorator,$values);
                        }
                    }

                }

            }
        }
        
        return $aDecorator;
        
    }
    
    /**
     * Retorna Campos do Formulário em objetos propel 
     */
    public function savePropelObject(array $_POST) {
        
        $oConfiForm = Zend_Registry::get('oConfigForm');
        $aForm = $oConfiForm->getFields($_POST['id_form']);
        
        $oPropel = new Base_Propel();
        
        foreach($this->getElements() as $oElement) {
            //Verifica se existe valor e se o campo está mapeado.
            if ($aForm[$oElement->getName()] && 
                $aForm[$oElement->getName()]['column'] && 
                $_POST[$oElement->getName()]) {
                
                    $oPropel->addField($aForm[$oElement->getName()]['column'], $_POST[$oElement->getName()]);
                    
                    //Verifica se existem campos adicionais 
                    if ($aForm[$oElement->getName()]['columns']) {
                        
                        foreach($aForm[$oElement->getName()]['columns'] as $value) {
                            
                            $aField = explode("=",$value);
                            
                            print "{$aField[0]} = {$aField[1]}\n";
                            
                            $oPropel->addField($aField[0],$aField[1]);
                            
                        }
                        
                    }
                    
            }
        }
        exit;
        $oBase = $oPropel->saveObject();
        
        return $oBase;
    }
    
}