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

//  public function executeIndex(sfWebRequest $request)
//  { 
//  }

  public function executeIndex(sfWebRequest $request)
  {
    $this->Quirofanos = QuirofanoQuery::create()->find();
  }
  
  //registro para los quirofanos
  public function executeRegistroq(sfWebRequest $request) 
  {
	$this->form = new programarQuirofanoForm();
        if ($request->isMethod('POST')) {
           $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
           if ($this->form->isValid()) {
             $Quirofano= $this->form->save();
             $this->getUser()->setFlash('notice', sprintf('Registro exitoso'));

	     $this->redirect('agenda/index');
	     }
	}

  }	
  

  //registro para las salas
  public function executeRegistrosalas(sfWebRequest $request)
  {
      $this->form = new programarSalaForm();
       if ($request->isMethod('POST')) {
           $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
           if ($this->form->isValid()) {
             $Salaquirurgica= $this->form->save();
              $this->getUser()->setFlash('notice', sprintf('Registro exitoso'));

             $this->redirect('agenda/index');
             }
        }

      
      
  }
  
}
