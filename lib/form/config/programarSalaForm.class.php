<?php

/**
 * Salaquirurgica form.
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
class programarSalaForm extends BaseSalaquirurgicaForm
{
  public function configure()
  {
	$this->useFields(array(
		'id',                   
    		'nombre',               
    		'activo',               
    		'bloqueado',            
    		'quirofano_id',                     
    		'permisos'            
	));
  }
}
