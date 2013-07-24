<?php

/**
 * Registrosala filter form base class.
 *
 * @package    Quirofano
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRegistrosalaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'sala_id'  => new sfWidgetFormFilterInput(),
      'motivo'   => new sfWidgetFormFilterInput(),
      'inicio'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fin'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'duracion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'sala_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'motivo'   => new sfValidatorPass(array('required' => false)),
      'inicio'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fin'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'duracion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('registrosala_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registrosala';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'sala_id'  => 'Number',
      'motivo'   => 'Text',
      'inicio'   => 'Date',
      'fin'      => 'Date',
      'duracion' => 'Text',
    );
  }
}
