<?php

/**
 * Quirofano form.
 *
 * @package    Quirofano
 * @subpackage form
 * @author     Your name here
 */
class programarQuirofanoForm extends BaseQuirofanoForm
{
  public function configure()
  {
	$this->useFields(array(
	 'id',                  
         'nombre',               
         'activo',               
         'ambulatorio',          
         'permisos'             
        ));
	
	



  }
}
