<?php

/**
 * Procedimientregrogramado form base class.
 *
 * @method Procedimientregrogramado getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProcedimientregrogramadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'agenda_id'    => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'programacion' => new sfWidgetFormDate(),
      'hora'         => new sfWidgetFormTime(),
      'sala_id'      => new sfWidgetFormInputText(),
      'tiempo_est'   => new sfWidgetFormTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'agenda_id'    => new sfValidatorPropelChoice(array('model' => 'Agenda', 'column' => 'id', 'required' => false)),
      'programacion' => new sfValidatorDate(array('required' => false)),
      'hora'         => new sfValidatorTime(array('required' => false)),
      'sala_id'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tiempo_est'   => new sfValidatorTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('procedimientregrogramado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Procedimientregrogramado';
  }


}
