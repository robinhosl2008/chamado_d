<?php
class Usuario_Form_Login extends Zend_Form
{
 public function __construct($options = null) 
    { 
        parent::__construct($options);
        
        $ds_username = new Zend_Form_Element_Text('ds_username', array(
         	  'class'=>'text-input medium-input'
        ));
        $ds_username->removeDecorator('Errors'); 
		$ds_username->removeDecorator('HtmlTag'); 
		$ds_username->removeDecorator('Label');

		$ds_password = new Zend_Form_Element_Password('ds_password', array(
         	  'class'=>'text-input medium-input'
        ));
        $ds_password->removeDecorator('Errors'); 
		$ds_password->removeDecorator('HtmlTag'); 
		$ds_password->removeDecorator('Label');
				
        $this->addElements(array($ds_username,$ds_password));
     
    }
	
}
