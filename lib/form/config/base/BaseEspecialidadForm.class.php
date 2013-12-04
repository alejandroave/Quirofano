<?php

/**
 * Especialidad form base class.
 *
 * @method Especialidad getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEspecialidadForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'medica'     => new sfWidgetFormInputCheckbox(),
      'quirurgica' => new sfWidgetFormInputCheckbox(),
      'activo'     => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'tree_left'  => new sfWidgetFormInputText(),
      'tree_right' => new sfWidgetFormInputText(),
      'tree_level' => new sfWidgetFormInputText(),
      'tree_scope' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'medica'     => new sfValidatorBoolean(array('required' => false)),
      'quirurgica' => new sfValidatorBoolean(array('required' => false)),
      'activo'     => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'tree_left'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_right' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_level' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_scope' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('especialidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Especialidad';
  }


}
