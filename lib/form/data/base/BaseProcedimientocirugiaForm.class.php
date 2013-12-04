<?php

/**
 * Procedimientocirugia form base class.
 *
 * @method Procedimientocirugia getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProcedimientocirugiaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'agenda_id'   => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'cie9mc'      => new sfWidgetFormInputText(),
      'cie9mc_id'   => new sfWidgetFormInputText(),
      'region'      => new sfWidgetFormInputText(),
      'detalles'    => new sfWidgetFormInputText(),
      'servicio_id' => new sfWidgetFormPropelChoice(array('model' => 'Especialidad', 'add_empty' => true)),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'agenda_id'   => new sfValidatorPropelChoice(array('model' => 'Agenda', 'column' => 'id', 'required' => false)),
      'cie9mc'      => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'cie9mc_id'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'region'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'detalles'    => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'servicio_id' => new sfValidatorPropelChoice(array('model' => 'Especialidad', 'column' => 'id', 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('procedimientocirugia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Procedimientocirugia';
  }


}
