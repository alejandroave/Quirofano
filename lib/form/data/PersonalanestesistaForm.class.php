<?php

/**
 * Personalcirugia form.
 *
 * @package    siga12
 * @subpackage form
 * @author     Antonio Sanchez Uresti
 */
class PersonalanestesistaForm extends PersonalcirugiaForm
{
  public function configure()
  {
    unset(
      $this['especialidad_id'],
      $this['created_at'],
      $this['turno']
    );

    $this->setWidget('personal_id', new sfWidgetFormInputHidden());
    $this->setWidget('agenda_id', new sfWidgetFormInputHidden());
    $this->setWidget('status', new sfWidgetFormInputHidden());
    $this->setWidget('tipo', new sfWidgetFormInputHidden());
    $this->setWidget('programa', new sfWidgetFormInputHidden());
    $this->setWidget('transoperatorio', new sfWidgetFormInputHidden());
    $this->setWidget('inicia', new sfWidgetFormInputHidden());

    $this->widgetSchema['personal_nombre'] ->setAttributes(array(
      'class' => 'searchable',
      'data-url' => 'http://sigahu.local/pacientes/json',
      'data-select' => '#agenda_paciente_id'
    ));
  }
}
