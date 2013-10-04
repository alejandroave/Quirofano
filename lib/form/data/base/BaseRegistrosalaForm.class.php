<?php

/**
 * Registrosala form base class.
 *
 * @method Registrosala getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRegistrosalaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'sala_id'  => new sfWidgetFormInputText(),
      'motivo'   => new sfWidgetFormInputText(),
      'inicio'   => new sfWidgetFormDateTime(),
      'fin'      => new sfWidgetFormDateTime(),
      'duracion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'sala_id'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'motivo'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'inicio'   => new sfValidatorDateTime(array('required' => false)),
      'fin'      => new sfValidatorDateTime(array('required' => false)),
      'duracion' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('registrosala[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registrosala';
  }


}
