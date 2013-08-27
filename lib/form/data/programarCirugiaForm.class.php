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
	      'medico_name',
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
	//$this->widgetSchema['programacion'] = new sfWidgetFormJqueryDate(array(
	//'config' => '{"option", "dateFormat", "yy-mm-dd"}',
	//));

	$this->widgetSchema['programacion'] = new sfWidgetFormInputText();
	$this->widgetSchema['hora'] = new sfWidgetFormInputText();
	$this->widgetSchema['tiempo_est'] = new sfWidgetFormInputText();		
	$this->widgetSchema['diagnostico_id'] = new sfWidgetFormInputHidden();
	$this->widgetSchema['programacion']->setAttributes(array(
		'id' => 'datepicker',
		'placeholder' => 'año/mes/dia',
		'class' => 'hasDatapicker'
		//'data-source' => 'http://example.com/api/data'
	));

	$this->widgetSchema['medico_name']->setAttributes(array(
		'planceholder' => 'Nombre del médico que programa la cirugia',
	));
	$this->widgetSchema['diagnostico']->setAttributes(array(
		'placeholder' => 'Diagnóstico del paciente',
		'data-source' => 'http://example.com/api/data',
		'data-field'  => 'diagnostico_id'
	));
	$this->widgetSchema->setLabels(array(
		'paciente_name' => 'Nombre del Paciente:',
		'diagnostico'   => 'Diágnostico',
		'medico_name'   => 'Nombre del médico que programa la cirugía:',
		'hora'          => 'Hora propuesta',
		'tipo_proc_id'  => 'Tipo de programación',
		'programacion'  => 'Programación',
		'tiempo_est'    => 'Tiempo estimado',
		'riesgo_qx_pre' => 'Riesgo quirurgico:',
		'req_insumos'   => 'Insumos indispensables:',
		'req_anestesico'  => 'Requerimientos de Anestesiología:', 
 		'req_hemoderiv'   => 'Hemoderivados Necesarios:',
		'req_laboratorio' => 'Requisitos de laboratorio:',
		'requerimiento'   => 'Otras necesidades:'
	));

	$this->widgetSchema['reintervencion'] = new sfWidgetFormChoice(array(
      	   'choices' => array('0' => 'No', '1' => 'Si'),
      	   //'expanded' => true
    	));
	
	$this->widgetSchema['protocolo'] = new sfWidgetFormChoice(array(
             'choices' => array('0' => 'No', '1' => 'Si'),
             //'expanded' => true
        ));

	
	$this->validatorSchema['diagnostico']->setOption('required',true);
        $this->validatorSchema['diagnostico']->setMessage('required','Falta diagnóstico');

	$this->validatorSchema['hora']->setOption('required', true);
        $this->validatorSchema['hora']->setMessage('required','Falta hora');

	$this->validatorSchema['programacion']->setOption('required', true);
        $this->validatorSchema['programacion']->setMessage('required','Falta fecha');
	
	$this->validatorSchema['tiempo_est']->setOption('required', true);
        $this->validatorSchema['tiempo_est']->setMessage('required','Falta hora');
	
	$this->validatorSchema['registro']->setOption('required', true);
        $this->validatorSchema['registro']->setMessage('required','Falta registro');
	
	$this->validatorSchema['tipo_proc_id']->setOption('required', true);
        $this->validatorSchema['tipo_proc_id']->setMessage('required','Falta tipo');
	
	$this->validatorSchema['paciente_name']->setOption('required', true);
        $this->validatorSchema['paciente_name']->setMessage('required','Falta nombre');

	$this->validatorSchema['edad']->setOption('required', true);
	$this->validatorSchema['edad']->setMessage('required','Falta edad');

	$this->validatorSchema['medico_name']->setOption('required', true);
        $this->validatorSchema['medico_name']->setMessage('required','Falta nombre');
	
	$this->validatorSchema['riesgo_qx_pre']->setOption('required', true);
        $this->validatorSchema['riesgo_qx_pre']->setMessage('required','Falta riesgo');

	$this->validatorSchema['req_insumos']->setOption('required', true);
        $this->validatorSchema['req_insumos']->setMessage('required','Falta insumos');

	$this->validatorSchema['req_anestesico']->setOption('required', true);
        $this->validatorSchema['req_anestesico']->setMessage('required','Falta anestesia');

  }
}
