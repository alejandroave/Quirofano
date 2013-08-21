<?php

/**
 * agenda actions.
 *
 * @package    Quirofano
 * @subpackage agenda
 * @author     Your name here
 */
class agendaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->form = new IndexForm();
    //$this->filtro = $request->getParameter('filter', false);
    //$this->Cirugias = AgendaQuery::create()->find();

    $quirofano_id = $request->getParameter('quirofano');
    $date = $request->getParameter('date', 'today');
    $this->Cirugias = AgendaQuery::create()
      ->filterByQuirofanoId($quirofano_id)
      ->filterByLastTime(array('min' => strtotime($date), 'max' => strtotime($date.' + 1 Day')))
      ->orderByStatus()
      ->find();

  }
  

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AgendaForm();
  }

  public function executeQuirofano(sfWebRequest $request)
  {
    $quirofano_id = $request->getParameter('quirofano');
    $date = $request->getParameter('date', 'today');
    $this->Cirugias = AgendaQuery::create()
      ->filterByQuirofanoId($quirofano_id)
      ->filterByLastTime(array('min' => strtotime($date), 'max' => strtotime($date.' + 1 Day')))
      ->orderByStatus()
      ->find();
  }

  public function executeProgramar(sfWebRequest $request)
  {   
      //$this->forward404Unless($request->hasParameter('slug'));
      $this->form = new programarCirugiaForm();
      if ($request->isMethod('POST')) {
      	 $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
	 if ($this->form->isValid()) {
             $this->form->save();
	     //$programarCirugia = $form->save();	
	     //$this->redirect('agenda/edit?id='.$this->getId());	
	     $this->redirect('agenda/index');
	     }
    }    
  }


  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    $this->form = new AgendaForm();
    $this->processForm($request, $this->form);
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Agenda = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Agenda, sprintf('Object Agenda does not exist (%s).', $request->getParameter('id')));
    $this->form = new AgendaForm($Agenda);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Agenda = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Agenda, sprintf('Object Agenda does not exist (%s).', $request->getParameter('id')));
    $this->form = new AgendaForm($Agenda);
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Agenda = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Agenda, sprintf('Object Agenda does not exist (%s).', $request->getParameter('id')));
    $Agenda->delete();
    $this->redirect('agenda/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $programarCirugia = $form->save();
      $this->redirect('agenda/edit?id='.$programarCirugia->getId());
    }
  }
}
