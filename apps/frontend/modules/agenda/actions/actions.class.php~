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

    //$this->Cirugias = AgendaQuery::create()  //datos para la programacion
    //  ->filterByQuirofanoId($quirofano_id)
    //  ->filterByLastTime(array('min' => strtotime($date), 'max' => strtotime($date.' + 1 Day')))
    //  ->orderByStatus()
    //  ->find();

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
//Quirofano = QuirofanoQuery::create()
      ->findOneBySlug($request->getParameter('slug'));
         
      
    $offset = $request->getParameter('offset', 0) * 3600;
    //$date = strtotime($request->getParameter('date', date('Y-m-d')));
    $this->date = strtotime($request->getParameter('date', date('Y-m-d')));
    //$date = strtotime("now");
    $hinicio = $request->getParameter('hora');
    $hfinal = $request->getParameter('tiempo_est');
    $date = $this->date; 
    //$date['max'] = $this->date + $offset;
    //$date['min'] = ($request->hasParameter('date')) ? $date['max'] - 86400: null;
    $qui = $this->Quirofano->getid();
    $nombre = $this->Quirofano->getslug();
    $this->Cirugias = AgendaQuery::create()
      //->filterByArea($this->Quirofano)
      ->filterByquirofanoid($qui)
      //->filterByquirofanoid('slug')
      ->filterByprogramacion($date)
      //->filterByShowInIndex(true)      
      //->queryAgenda($date)
      ->find();
    //$this->forward404Unless($this->Quirofano);
  }

//mostrar pruebas versión 1

public function executeInspeccionar(sfWebRequest $request)
{
      $this->salas = SalaquirurgicaQuery::create()
      ->joinWith('Quirofano')
      ->useQuery('Quirofano')
        ->filterBySlug($request->getParameter('slug'))
      ->endUse()
      ->find();	
}
 public function executeDiferidas(sfWebRequest $request)
  {
    $this->Quirofano = QuirofanoQuery::create()->findOneBySlug($request->getParameter('slug'));
    //$maxDate = array('max' => strtotime('today'));
    $this->cirugias = AgendaQuery::create()
      ->filterByquirofanoid($this->Quirofano->getid())
      //->filterByProgramadas()
      //->filterByArea($this->Quirofano)
      ->filterByquirofanoid($this->Quirofano->getid())
      //->filterByShowInIndex(0)
      //->filterByStatus(-50)
      //->orderByStatus('Desc')
      //->orderByDefault()
      ->joinsAgenda()
      ->find();

    $this->forward404Unless($this->cirugias);
  }

public function executeDiferir(sfWebRequest $request)
  {
    $this->cirugia = AgendaQuery::create()->joinWith('Quirofano')->findPk($request->getParameter('id'));
    $this->form = New diferirCirugiaForm($this->cirugia);
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $agenda = $this->form->save();
        $this->redirect('agenda/show?slug='.$agenda->getQuirofano()->getSlug());
      }
    }
  }

public function executeTransoperatorio(sfWebRequest $request)
  {
    $cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->form = new TransoperatorioQuirofanoForm($cirugia);
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $cirugia = $this->form->save();
        $this->redirect('agenda/show?slug='.$cirugia->getQuirofano()->getSlug());
      }
    }
    $this->form->setDefault('ingreso', date('H:i:s'));
    $this->form->setDefault('status', 10);
  }
  public function executePxsolicitado(sfWebRequest $request)
  {
    $this->forward404Unless($request->hasParameter('id'));
    $cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $cirugia->setSolicitado(!$cirugia->getSolicitado())->save();
    $this->redirect($request->getReferer());
    //$this->redirect('agenda/show?slug='.$request->getParameter('id'));

  }
 public function executeReprogramar(sfWebRequest $request)
  {
    $this->forward404Unless($request->hasParameter('id'));
    $agenda = AgendaQuery::create()->findPk($request->getParameter('id'));
    //if ($agenda->estaAtrasado() && !$agenda->esDiferido()) {
    //  $this->getUser()->setFlash('obligar', 'Esta cirugia tiene más de 24 Horas de atraso por lo que se debe marcar como diferida y especificar
    //  una causa, antes de poder reprogramarse');
    //  $this->redirect('quirofano/diferir?id='.$agenda->getId());
    //}
    $this->form = new programarCirugiaForm($agenda);
    //$this->form = new programarQuirofanoForm($agenda);
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        //$Quirofano = $this->form->save();
        $this->form->save();
        $this->redirect('agenda/show?slug='.$request->getParameter('slug'));
      }
    }

    //$this->form->setSalaWidget($request->getParameter('slug'));
  }

 public function executeCancelar(sfWebRequest $request)
  {
  $this->forward404unless($request->hasParameter('id'));
  $this->cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
  	
  $this->Quirofano = QuirofanoQuery::create()
    ->findOneByid($this->cirugia->getquirofanoid());      
  if ($request->getMethod() == 'POST') {
      $this->cirugia->setCancelada(true)->save();
      $this->redirect('agenda/show?slug='.$this->Quirofano->getSlug().'&date='.date('Y-m-d', strtotime("now")));
    }
}
}
