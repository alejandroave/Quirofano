<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre' => new sfWidgetFormInputText(),
      'pass'   => new sfWidgetFormInputText(),
      'tipo'   => new sfWidgetFormInputText(),
      'id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nombre' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'pass'   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'tipo'   => new sfValidatorPass(array('required' => false)),
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }


}
