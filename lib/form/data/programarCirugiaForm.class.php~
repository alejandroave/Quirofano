<?php

/**
 * Agenda form.
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
class programarCirugiaForm extends BaseAgendaForm
{
  public function configure()
  {
	$this->useFields(array(
	      'id',
	      'programacion',
	      'hora',
	      //'evento_id',
	      'sala_id',
	      //'cie9mc',
	      //'cie9mc_id',
	      'paciente_name',
	      'paciente_id',
	      'diagnostico',
	      'diagnostico_id',
	      //'paciente_name',
	      //'paciente_id',
	      'edad',
	      'genero',
	      'registro',
	      'servicio',
	      //'programa',
	      //'programa_id',
	      'requerimiento',
	      'req_insumos',
	      'req_hemoderiv',
	      'req_laboratorio',
	      'req_anestesico',
	      'reintervencion',
	      'quirofano_id',
	      'tipo_proc_id',
	      'status',
	      'atencion_id',
	      'procedencia',
	      //'region_px',
	      //'extension_px',
	      'tiempo_est',
	      //'anexo_detalle',
	      'riesgo_qx_pre',
	      //'cxprograma',
	      'show_in_index',
	      'protocolo'
	));

	$this->widgetSchema['programacion'] = new sfWidgetFormInputText();
	$this->widgetSchema['hora'] = new sfWidgetFormInputText();
	$this->widgetSchema['diagnostico_id'] = new sfWidgetFormInputHidden();

	$this->widgetSchema['programacion']->setAttributes(array(
		'placeholder' => 'año/mes/dia',
		'data-source' => 'http://example.com/api/data'
	));

	$this->widgetSchema['diagnostico']->setAttributes(array(
		'placeholder' => 'Diagnóstico del paciente',
		'data-source' => 'http://example.com/api/data',
		'data-field'  => 'diagnostico_id'
	));

	$this->widgetSchema->setLabels(array(
		'paciente_name' => 'Nombre del Paciente'
	));
  }
}
