<?php

/**
 * Agenda form base class.
 *
 * @method Agenda getObject() Returns the current form's model object
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAgendaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'programacion'          => new sfWidgetFormDate(),
      'hora'                  => new sfWidgetFormTime(),
      'inicio'                => new sfWidgetFormDateTime(),
      'last_time'             => new sfWidgetFormDateTime(),
      'ingreso'               => new sfWidgetFormDateTime(),
      'sala_id'               => new sfWidgetFormPropelChoice(array('model' => 'Salaquirurgica', 'add_empty' => true)),
      'quirofano_id'          => new sfWidgetFormPropelChoice(array('model' => 'Quirofano', 'add_empty' => true)),
      'egreso'                => new sfWidgetFormDateTime(),
      'cie9mc'                => new sfWidgetFormTextarea(),
      'cie9mc_id'             => new sfWidgetFormInputText(),
      'cx_realizada'          => new sfWidgetFormTextarea(),
      'cx_realizada_id'       => new sfWidgetFormInputText(),
      'tipo_cx'               => new sfWidgetFormInputText(),
      'diagnostico'           => new sfWidgetFormInputText(),
      'diagnostico_id'        => new sfWidgetFormInputText(),
      'medico_name'           => new sfWidgetFormInputText(),
      'paciente_name'         => new sfWidgetFormInputText(),
      'paciente_id'           => new sfWidgetFormInputText(),
      'edad'                  => new sfWidgetFormInputText(),
      'genero'                => new sfWidgetFormInputText(),
      'genero_id'             => new sfWidgetFormInputText(),
      'registro'              => new sfWidgetFormInputText(),
      'servicio'              => new sfWidgetFormInputText(),
      'anestesia_id'          => new sfWidgetFormInputText(),
      'anestesia_empleada'    => new sfWidgetFormInputText(),
      'ev_adversos_anestesia' => new sfWidgetFormTextarea(),
      'observaciones'         => new sfWidgetFormTextarea(),
      'requerimiento'         => new sfWidgetFormTextarea(),
      'req_insumos'           => new sfWidgetFormTextarea(),
      'req_hemoderiv'         => new sfWidgetFormTextarea(),
      'req_laboratorio'       => new sfWidgetFormTextarea(),
      'req_anestesico'        => new sfWidgetFormTextarea(),
      'status'                => new sfWidgetFormInputText(),
      'causa_diferido_id'     => new sfWidgetFormInputText(),
      'solicitado'            => new sfWidgetFormInputCheckbox(),
      'riesgoqx_id'           => new sfWidgetFormInputText(),
      'contaminacionqx_id'    => new sfWidgetFormInputText(),
      'eventoqx_id'           => new sfWidgetFormInputText(),
      'complicaciones'        => new sfWidgetFormTextarea(),
      'val_pre_anestesica'    => new sfWidgetFormTextarea(),
      'reintervencion'        => new sfWidgetFormInputCheckbox(),
      'permisos'              => new sfWidgetFormInputText(),
      'tipo_proc_id'          => new sfWidgetFormInputText(),
      'atencion_id'           => new sfWidgetFormInputText(),
      'tiempo_fuera'          => new sfWidgetFormInputCheckbox(),
      'procedencia'           => new sfWidgetFormInputText(),
      'clasificacionqx'       => new sfWidgetFormInputText(),
      'region_px'             => new sfWidgetFormInputText(),
      'extension_px'          => new sfWidgetFormInputText(),
      'anexo_detalle'         => new sfWidgetFormInputText(),
      'destino_px'            => new sfWidgetFormInputText(),
      'liberacion_sala'       => new sfWidgetFormTime(),
      'tiempo_est'            => new sfWidgetFormTime(),
      'riesgo_qx_pre'         => new sfWidgetFormInputText(),
      'show_in_index'         => new sfWidgetFormInputCheckbox(),
      'protocolo'             => new sfWidgetFormInputCheckbox(),
      'cancelada'             => new sfWidgetFormInputCheckbox(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'programacion'          => new sfValidatorDate(array('required' => false)),
      'hora'                  => new sfValidatorTime(array('required' => false)),
      'inicio'                => new sfValidatorDateTime(array('required' => false)),
      'last_time'             => new sfValidatorDateTime(array('required' => false)),
      'ingreso'               => new sfValidatorDateTime(array('required' => false)),
      'sala_id'               => new sfValidatorPropelChoice(array('model' => 'Salaquirurgica', 'column' => 'id', 'required' => false)),
      'quirofano_id'          => new sfValidatorPropelChoice(array('model' => 'Quirofano', 'column' => 'id', 'required' => false)),
      'egreso'                => new sfValidatorDateTime(array('required' => false)),
      'cie9mc'                => new sfValidatorString(array('required' => false)),
      'cie9mc_id'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cx_realizada'          => new sfValidatorString(array('required' => false)),
      'cx_realizada_id'       => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'tipo_cx'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'diagnostico'           => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'diagnostico_id'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'medico_name'           => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'paciente_name'         => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'paciente_id'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'edad'                  => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'genero'                => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'genero_id'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'registro'              => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'servicio'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'anestesia_id'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'anestesia_empleada'    => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'ev_adversos_anestesia' => new sfValidatorString(array('required' => false)),
      'observaciones'         => new sfValidatorString(array('required' => false)),
      'requerimiento'         => new sfValidatorString(array('required' => false)),
      'req_insumos'           => new sfValidatorString(array('required' => false)),
      'req_hemoderiv'         => new sfValidatorString(array('required' => false)),
      'req_laboratorio'       => new sfValidatorString(array('required' => false)),
      'req_anestesico'        => new sfValidatorString(array('required' => false)),
      'status'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'causa_diferido_id'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'solicitado'            => new sfValidatorBoolean(array('required' => false)),
      'riesgoqx_id'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'contaminacionqx_id'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'eventoqx_id'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'complicaciones'        => new sfValidatorString(array('required' => false)),
      'val_pre_anestesica'    => new sfValidatorString(array('required' => false)),
      'reintervencion'        => new sfValidatorBoolean(array('required' => false)),
      'permisos'              => new sfValidatorPass(array('required' => false)),
      'tipo_proc_id'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'atencion_id'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tiempo_fuera'          => new sfValidatorBoolean(array('required' => false)),
      'procedencia'           => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'clasificacionqx'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'region_px'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'extension_px'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'anexo_detalle'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'destino_px'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'liberacion_sala'       => new sfValidatorTime(array('required' => false)),
      'tiempo_est'            => new sfValidatorTime(array('required' => false)),
      'riesgo_qx_pre'         => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'show_in_index'         => new sfValidatorBoolean(array('required' => false)),
      'protocolo'             => new sfValidatorBoolean(array('required' => false)),
      'cancelada'             => new sfValidatorBoolean(array('required' => false)),
      'created_at'            => new sfValidatorDateTime(array('required' => false)),
      'updated_at'            => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agenda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agenda';
  }


}
