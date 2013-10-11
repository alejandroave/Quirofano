<?php

/**
 * Personalcirugia form base class.
 *
 * @method Personalcirugia getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonalcirugiaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'personal_id'     => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'agenda_id'       => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'personal_nombre' => new sfWidgetFormInputText(),
      'tipo'            => new sfWidgetFormChoice(array('choices' => array (  '' => '',  'cirujano' => 'cirujano',  'anestesista' => 'anestesista',  'enfermeria' => 'enfermeria',  'otro' => 'otro',))),
      'status'          => new sfWidgetFormInputText(),
      'programa'        => new sfWidgetFormInputCheckbox(),
      'inicia'          => new sfWidgetFormInputCheckbox(),
      'transoperatorio' => new sfWidgetFormInputCheckbox(),
      'finaliza'        => new sfWidgetFormInputCheckbox(),
      'turno'           => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'personal_id'     => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id', 'required' => false)),
      'agenda_id'       => new sfValidatorPropelChoice(array('model' => 'Agenda', 'column' => 'id', 'required' => false)),
      'personal_nombre' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'tipo'            => new sfValidatorChoice(array('choices' => array (  0 => 'cirujano',  1 => 'anestesista',  2 => 'enfermeria',  3 => 'otro',), 'required' => false)),
      'status'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'programa'        => new sfValidatorBoolean(array('required' => false)),
      'inicia'          => new sfValidatorBoolean(array('required' => false)),
      'transoperatorio' => new sfValidatorBoolean(array('required' => false)),
      'finaliza'        => new sfValidatorBoolean(array('required' => false)),
      'turno'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('personalcirugia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Personalcirugia';
  }


}
