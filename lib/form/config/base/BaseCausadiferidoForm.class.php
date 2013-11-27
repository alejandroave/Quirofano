<?php

/**
 * Causadiferido form base class.
 *
 * @method Causadiferido getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCausadiferidoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'activo'     => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'tree_left'  => new sfWidgetFormInputText(),
      'tree_right' => new sfWidgetFormInputText(),
      'tree_level' => new sfWidgetFormInputText(),
      'tree_scope' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 5)),
      'nombre'     => new sfValidatorString(array('max_length' => 128)),
      'activo'     => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'tree_left'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_right' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_level' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_scope' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('causadiferido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Causadiferido';
  }


}
