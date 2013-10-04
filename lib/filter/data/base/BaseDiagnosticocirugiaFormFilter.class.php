<?php

/**
 * Diagnosticocirugia filter form base class.
 *
 * @package    Quirofano
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseDiagnosticocirugiaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'agenda_id'         => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'diagnostico_cie10' => new sfWidgetFormFilterInput(),
      'diagnostico_id'    => new sfWidgetFormFilterInput(),
      'tipo_diagnostico'  => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'agenda_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Agenda', 'column' => 'id')),
      'diagnostico_cie10' => new sfValidatorPass(array('required' => false)),
      'diagnostico_id'    => new sfValidatorPass(array('required' => false)),
      'tipo_diagnostico'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('diagnosticocirugia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Diagnosticocirugia';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'agenda_id'         => 'ForeignKey',
      'diagnostico_cie10' => 'Text',
      'diagnostico_id'    => 'Text',
      'tipo_diagnostico'  => 'Number',
      'created_at'        => 'Date',
    );
  }
}
