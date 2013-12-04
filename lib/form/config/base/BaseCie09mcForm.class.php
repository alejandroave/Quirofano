<?php

/**
 * Cie09mc form base class.
 *
 * @method Cie09mc getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCie09mcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'clave'       => new sfWidgetFormInputHidden(),
      'descripcion' => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'clave'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getClave()), 'empty_value' => $this->getObject()->getClave(), 'required' => false)),
      'descripcion' => new sfValidatorString(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cie09mc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cie09mc';
  }


}
