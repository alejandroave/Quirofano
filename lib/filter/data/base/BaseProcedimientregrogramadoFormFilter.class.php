<?php

/**
 * Procedimientregrogramado filter form base class.
 *
 * @package    Quirofano
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseProcedimientregrogramadoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'agenda_id'    => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'programacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'hora'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'sala_id'      => new sfWidgetFormFilterInput(),
      'tiempo_est'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'agenda_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Agenda', 'column' => 'id')),
      'programacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'hora'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'sala_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tiempo_est'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('procedimientregrogramado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Procedimientregrogramado';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'agenda_id'    => 'ForeignKey',
      'programacion' => 'Date',
      'hora'         => 'Date',
      'sala_id'      => 'Number',
      'tiempo_est'   => 'Date',
      'created_at'   => 'Date',
    );
  }
}
