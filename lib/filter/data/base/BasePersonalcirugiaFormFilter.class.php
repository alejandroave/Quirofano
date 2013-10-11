<?php

/**
 * Personalcirugia filter form base class.
 *
 * @package    Quirofano
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonalcirugiaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'personal_id'     => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'agenda_id'       => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'personal_nombre' => new sfWidgetFormFilterInput(),
      'tipo'            => new sfWidgetFormChoice(array('choices' => array(''=>'all',0=>'cirujano',1=>'anestesista',2=>'enfermeria',3=>'otro',))),
      'status'          => new sfWidgetFormFilterInput(),
      'programa'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'inicia'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'transoperatorio' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'finaliza'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'turno'           => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'personal_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'agenda_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Agenda', 'column' => 'id')),
      'personal_nombre' => new sfValidatorPass(array('required' => false)),
      'tipo'            => new sfValidatorChoice(array('required' => false, 'choices' => array(0=>0,1=>1,2=>2,3=>3,))),
      'status'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'programa'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'inicia'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'transoperatorio' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'finaliza'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'turno'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('personalcirugia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Personalcirugia';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'personal_id'     => 'ForeignKey',
      'agenda_id'       => 'ForeignKey',
      'personal_nombre' => 'Text',
      'tipo'            => 'Text',
      'status'          => 'Number',
      'programa'        => 'Boolean',
      'inicia'          => 'Boolean',
      'transoperatorio' => 'Boolean',
      'finaliza'        => 'Boolean',
      'turno'           => 'Number',
      'created_at'      => 'Date',
    );
  }
}
