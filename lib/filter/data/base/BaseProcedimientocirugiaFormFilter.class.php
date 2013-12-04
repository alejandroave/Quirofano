<?php

/**
 * Procedimientocirugia filter form base class.
 *
 * @package    Quirofano
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseProcedimientocirugiaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'agenda_id'   => new sfWidgetFormPropelChoice(array('model' => 'Agenda', 'add_empty' => true)),
      'cie9mc'      => new sfWidgetFormFilterInput(),
      'cie9mc_id'   => new sfWidgetFormFilterInput(),
      'region'      => new sfWidgetFormFilterInput(),
      'detalles'    => new sfWidgetFormFilterInput(),
      'servicio_id' => new sfWidgetFormPropelChoice(array('model' => 'Especialidad', 'add_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'agenda_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Agenda', 'column' => 'id')),
      'cie9mc'      => new sfValidatorPass(array('required' => false)),
      'cie9mc_id'   => new sfValidatorPass(array('required' => false)),
      'region'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'detalles'    => new sfValidatorPass(array('required' => false)),
      'servicio_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Especialidad', 'column' => 'id')),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('procedimientocirugia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Procedimientocirugia';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'agenda_id'   => 'ForeignKey',
      'cie9mc'      => 'Text',
      'cie9mc_id'   => 'Text',
      'region'      => 'Number',
      'detalles'    => 'Text',
      'servicio_id' => 'ForeignKey',
      'created_at'  => 'Date',
    );
  }
}
