<?php

class Base_Propel {
    
    private $_field;
    
    public function addField($field,$value) {
    
        $aInfo = explode(".",$field);
        
        #if (count($aInfo) != 2 && count($aInfo) != 3) {
        #    throw new Exception("Formato de Campo inválido " . count($aInfo));
        #}
        
        if (! $value) {
            throw new Exception("Valor não definido.");
        }
        
        switch(count($aInfo)) {
            
            case 2:
                
                $this->_field[$aInfo[0]][$aInfo[1]] = $value;
                break;
            
            case 3:
            
                $bFound = strstr($aInfo[1],"[]");
            
                if ($bFound) {
                    $this->_field[$aInfo[0]][str_replace("[]","",$aInfo[1])][][$aInfo[2]] = $value;
                } else {
                    $this->_field[$aInfo[0]][$aInfo[1]][$aInfo[2]] = $value;
                }
                
                break;
                
            case 4:
                
                $this->_field[$aInfo[0]][$aInfo[1]][$aInfo[2]][$aInfo[3]] = $value;
                
                break;
            
            case 5:
                
                $this->_field[$aInfo[0]][$aInfo[1]][$aInfo[2]][$aInfo[3]][$aInfo[4]] = $value;
                
                break;
        }
        
    }
    
    public function saveObject() {
        
        $oBase = null;
        
        foreach($this->_field as $base => $aField) {
            
            if (! $oBase) {
                
                $oBase = new $base();
                
            }
            
            foreach ($aField as $object => $value) {
                
                if (! is_array($value)) {
                    
                    $oBase->setByName(key($aField), current($aField));
                
                    
                } else {
                    
                    foreach($value as $subObject => $valueSubObject) {
                        
                        //Array de Subobjetos
                        if (is_int($subObject)) {
                            
                            try {
                        
                                if (! is_object($$object)) {
                                    $$object[$subObject] = new $object();
                                }
                                
                                $method = "set" . $base;
                                
                                if (method_exists($$object[$subObject], $method)) {
                                    $$object[$subObject]->$method($oBase);
                                }
                                
                                $$object[$subObject]->setByName(trim(key($valueSubObject)), current($valueSubObject));
                                
                                
                                
                            } catch (Exception $e) {
                            
                                print get_class($oSub) . "::" . $method . " => " . var_export($e, true);
                            
                            }
                            
                        } else {
                            
                            try {
                            
                                if (is_array($valueSubObject)) {
                                
                                    foreach($valueSubObject as $subSubObject => $valueSubSubObject) {
                                    
                                        if (! is_object($$subObject)) {
                                            $$subObject = new $subObject();
                                        }
                                        
                                        $method = "set" . $object;
                                
                                        if (method_exists($$subObject, $method)) {
                                    
                                            $$subObject->$method($$object);
                                            
                                        }
                                        
                                        $$subObject->setByName(trim($subSubObject), $valueSubSubObject);
                                
                                        
                                    }
                                    
                                } else {
                                
                                    if (! is_object($$object)) {
                                        $$object = new $object();
                                    }

                                    
                                    $method = "set" . $base;

                                    if (method_exists($$object, $method)) {
                                    
                                        $$object->$method($oBase);
                                        
                                    }
                                    
                                    
                                    $$object->setByName(trim($subObject), $valueSubObject);

                                }
                                
                            } catch(Exception $e) {
                                
                                print "=> $object > $subObject >> $subSubObject ==  "  . var_export($e->getMessage(),1) . "\n";
                                
                            }
                            
                        }
                        
                    }
                    
                }
                    
            }
            
        }
        
        
        $conn = Propel::getConnection();
        
        $conn->beginTransaction();
        
        $oBase->save($conn);
        
        $conn->commit();
        
        return $oBase;
        
    }
    
}