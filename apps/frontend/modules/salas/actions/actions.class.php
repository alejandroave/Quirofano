<?php

/**
 * salas actions.
 *
 * @package    Quirofano
 * @subpackage salas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class salasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  { 
  }
  
  //registro para los quirofanos
  public function executeRegistroq(sfWebRequest $request) 
  {
	$this->form = new programarQuirofanoForm();

  }	
  

  //registro para las salas
  public function executeRegistrosalas(sfWebRequest $request)
  {
      $this->form = new programarSalaForm();
  }
  
}
