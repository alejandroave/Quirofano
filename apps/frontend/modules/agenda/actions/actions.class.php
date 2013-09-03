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

    $this->Quirofanos = QuirofanoQuery::create()->find(); //datos para los quirofanos
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');

    $this->Cirugias = AgendaQuery::create()  //datos para la programacion
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
      $this->forward404Unless($request->hasParameter('slug'));
      $this->form = new programarCirugiaForm();
      if ($request->isMethod('POST')) {
      	 $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
	 if ($this->form->isValid()) {
             $Agenda= $this->form->save();
	     //$programarCirugia = $form->save();	
	     //$this->redirect('agenda/edit?id='.$this->getId());	
	     $this->redirect('agenda/index');
	     }
    }
    $this->quirofano = QuirofanoQuery::create()->findOneBySlug($request->getParameter('slug'));    
    $this->form->setDefault('quirofano_id', $this->quirofano->getId());
    $request->hasParameter('sala') ? $this->form->setSalaDefault($request->getParameter('sala')): null;
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

//mostrar pruebas versión 1
public function executeShow(sfWebRequest $request)
  {
    $this->Quirofano = QuirofanoQuery::create()
      ->findOneBySlug($request->getParameter('slug'));
    $offset = $request->getParameter('offset', 0) * 3600;
    $this->date = strtotime($request->getParameter('date', date('d-m-Y')));
    $date['max'] = $this->date + $offset;
    $date['min'] = ($request->hasParameter('date')) ? $date['max'] - 86400: null;

    $this->cirugias = AgendaQuery::create()
      //->filterByProgramadas()
      //->filterByArea($this->Quirofano)
      ->filterByShowInIndex(true)
      ->filterByCancelada(false)
      //->joinWith('Personalcirugia', Criteria::LEFT_JOIN)
      ->joinWith('Procedimientocirugia', Criteria::LEFT_JOIN)
      ->orderByStatus('asc')
      //->orderByDefault()
      //->queryAgenda($date)
      ->find();

    $this->forward404Unless($this->Quirofano);
  }

//mostrar pruebas versión 1




}
