<?php

class Manutencao_Form_Relatorio extends Zend_Form
{
public function __construct($options = null)
    {
    parent::__construct($options);
              
        $this->setName('contact_us');

        $no_relatorio = new Zend_Form_Element_Text('no_relatorio');
        $no_relatorio->setLabel('Nome Relatorio')
        ->setRequired(true)
        ->addValidator('NotEmpty');

        $ds_query = new Zend_Form_Element_Text('ds_query');
        $ds_query->setLabel('Query')
        ->setRequired(true)
        ->addValidator('NotEmpty');

        $ds_action = new Zend_Form_Element_Text('ds_action');
        $ds_action->setLabel('Action')
        ->setRequired(true)
        ->addValidator('NotEmpty');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Salvar');

        $this->addElements(array($no_relatorio, $ds_query,
        $ds_action, $submit));

    }
}

?>
