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
	    	'ingreso',
		'sala_id',
      		'quirofano_id'
	));
  }
}
