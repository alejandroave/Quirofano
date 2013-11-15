<?php

/**
 * Personalcirugia form.
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
class PersonalcirugiaForm extends BasePersonalcirugiaForm
{
  public function configure()
  {
  }
    public function configureNewPersonal() {

     $object = $this->getObject();
      unset(
        $this['inicia'],
        $this['created_at'],
        $this['finaliza'],
        $this['programa']
      );

      $this->setWidget('agenda_id', new sfWidgetFormInputHidden());
      $this->setWidget('transoperatorio', new sfWidgetFormInputHidden());
      $this->setWidget('personal_id', new sfWidgetFormInputHidden());
      $this->setWidget('turno', new sfWidgetFormChoice(array(
        'choices' => array('Matutino', 'Vespertino', 'Nocturno', 'Plan Piloto')
      )));
      $this->setWidget('status', new sfWidgetFormChoice(array(
        'choices' => array('Ayudante', 'Supervisor', 'Instrumentista', 'Circulante')
      )));
      $this->widgetSchema['transoperatorio']->setAttribute('value', true);

  	$this->widgetSchema['personal_nombre'] 
  	->setLabel('Nombre del Personal:')
  	->setAttributes(array(
          'class' => 'searchable',
          'data-url' => 'profile/json',
          #'data-select' => '#agenda_personal_id'
        ));

      return $this;
    }

    public function setAgendaId($id) {
      $this->widgetSchema['agenda_id']->setAttribute('value', $id);

      return $this;
    }
}
