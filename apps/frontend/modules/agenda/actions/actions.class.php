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
    $this->filtro = $request->getParameter('filter', false);
    $this->Cirugias = AgendaQuery::create()->find();
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
    if (!$request->isMethod('POST')) {
      $this->form = new programarCirugiaForm();
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
      $Agenda = $form->save();

      $this->redirect('agenda/edit?id='.$Agenda->getId());
    }
  }
}
