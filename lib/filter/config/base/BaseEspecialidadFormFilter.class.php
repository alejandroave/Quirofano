<?php

/**
 * Especialidad filter form base class.
 *
 * @package    Quirofano
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseEspecialidadFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(),
      'medica'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'quirurgica' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'activo'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tree_left'  => new sfWidgetFormFilterInput(),
      'tree_right' => new sfWidgetFormFilterInput(),
      'tree_level' => new sfWidgetFormFilterInput(),
      'tree_scope' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'medica'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'quirurgica' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'activo'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'tree_left'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_right' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_level' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_scope' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('especialidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Especialidad';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'nombre'     => 'Text',
      'medica'     => 'Boolean',
      'quirurgica' => 'Boolean',
      'activo'     => 'Boolean',
      'created_at' => 'Date',
      'tree_left'  => 'Number',
      'tree_right' => 'Number',
      'tree_level' => 'Number',
      'tree_scope' => 'Number',
    );
  }
}
