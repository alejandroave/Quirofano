<?php

/**
 * Diagnosticocirugia form base class.
 *
 * @method Diagnosticocirugia getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDiagnosticocirugiaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'agenda_id'         => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'diagnostico_cie10' => new sfWidgetFormInputText(),
      'diagnostico_id'    => new sfWidgetFormInputText(),
      'tipo_diagnostico'  => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'agenda_id'         => new sfValidatorPropelChoice(array('model' => 'Agenda', 'column' => 'id', 'required' => false)),
      'diagnostico_cie10' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'diagnostico_id'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'tipo_diagnostico'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('diagnosticocirugia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Diagnosticocirugia';
  }


}
