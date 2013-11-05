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
    $this->Quirofanos = QuirofanoQuery::create()
      ->filterByactivo(1)
      ->filterByambulatorio(0)
      ->find();
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');

  }
  
 public function executeAmbulatorio(sfWebRequest $request)
  {
    $this->Quirofanos = QuirofanoQuery::create()
      ->filterByactivo(1)
      ->filterByambulatorio(1)
      ->find();
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');
  }

 public function executeTquirofanos(sfWebRequest $request)
  {
    $this->Quirofanos = QuirofanoQuery::create()->find(); //datos para los quirofanos
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');
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
      $Quirofano = QuirofanoQuery::create()
        ->findOneBySlug($request->getParameter('slug'));
    if ($request->isMethod('POST')) {
      	 $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
	       if ($this->form->isValid()) {
             $horapropuesta = $this->form->getValue("hora");
             $salaselecc = $this->form->getValue("sala_id");
             $fechaselecc['max'] = $this->form->getValue("programacion");
             $fechaselecc['min'] = date("Y-m-d",strtotime($fechaselecc['max'].' -1 day'));
             $tiempo_est = $this->form->getValue("tiempo_est");
             $control = $this->emHoras($fechaselecc,$horapropuesta,$Quirofano->getid(),$salaselecc,$tiempo_est);
             if ($control != NULL)
             {
                $text = 'Se empalma con la cirugia: '.$control;
                $this->getUser()->setFlash('notice', sprintf("$text"));
                //rv$this->redirect('agenda/programar?slug='.$request->getParameter('slug'));

             }else{
             $this->form->save();
             $this->getUser()->setFlash('notice', sprintf('Programación exitosa'));
	           $this->redirect('agenda/show?slug='.$request->getParameter('slug'));
         }
	       } 
    }
    $this->quirofano = QuirofanoQuery::create()->findOneBySlug($request->getParameter('slug'));    
    $this->form->setDefault('quirofano_id', $this->quirofano->getId());
    $request->hasParameter('sala') ? $this->form->setSalaDefault($request->getParameter('sala')): null;
  }

public function emHoras($fechaselecc,$horapropuesta,$Quiid,$salaselecc,$tiempo_est)
{
    $agenda = AgendaQuery::create()
        ->filterByquirofanoid($Quiid)
        ->filterByprogramacion($fechaselecc)
        ->filterBysalaid($salaselecc)
        ->find();
    $control = NULL;
    foreach($agenda as $agendas):

        $comp = $this->sumarhoras($agendas->getHora(),$agendas->getTiempoest());
        $hora1 = strtotime($agendas->getHora());
        $hora2 = strtotime($horapropuesta);
        $hora3 = strtotime($comp);

        if (strtotime($fechaselecc) > strtotime($agendas->getProgramacion())) {
          //Verificar entre dia anterior y actual en caso de que la cirugia continue
          if( $hora1 >= $hora2 && $hora2 <= $hora3) 
            {
               $control = $agendas->getId();
              //$control = strtotime($fechaselecc);
            }
        }else{
          //para el mismo dia
          if( $hora1 <= $hora2 && $hora2 <= $hora3) 
            {
              //$control = strtotime($fechaselecc);
              $control = $agendas->getId();
            }
        }
     endforeach;
  return $control;
}


public function sumarhoras($h1,$h2)
{
$h2h = date('H', strtotime($h2));
$h2m = date('i', strtotime($h2));
$h2s = date('s', strtotime($h2));
$hora2 =$h2h." hour ". $h2m ." min ".$h2s ." second";
$horas_sumadas= $h1." + ". $hora2;
$text=date('H:i:s', strtotime($horas_sumadas)) ;
return $text; 
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

public function executeTodos(sfWebRequest $request)
{
 $this->Quirofano = QuirofanoQuery::create()
      ->findOneBySlug($request->getParameter('slug'));


 $offset = $request->getParameter('offset', 0) * 3600;
 $this->date = strtotime($request->getParameter('date', date('Y-m-d')));
 $hinicio = $request->getParameter('hora');
 $hfinal = $request->getParameter('tiempo_est');
 $date = $this->date; 
 $qui = $this->Quirofano->getid();
 $this->Cirugias = AgendaQuery::create()
      ->filterByquirofanoid($qui)
      ->find();
}

public function executeShow(sfWebRequest $request)
  {

    $this->Quirofano = QuirofanoQuery::create()
      ->findOneBySlug($request->getParameter('slug'));
    $offset = $request->getParameter('offset', 0) * 3600;
    $this->date = strtotime($request->getParameter('date', date('Y-m-d')));
    $hinicio = $request->getParameter('hora');
    $hfinal = $request->getParameter('tiempo_est');
    $nombre = $this->Quirofano->getslug();
    $this->Cirugias = AgendaQuery::create()
      ->filterByquirofanoid($this->Quirofano->getid())
      ->filterByprogramacion($this->date)
      ->orderByStatus('asc')
      ->find();
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
   $this->Quirofano = QuirofanoQuery::create()
      ->findOneBySlug($request->getParameter('slug'));
 $offset = $request->getParameter('offset', 0) * 3600;
 $this->date = strtotime($request->getParameter('date', date('Y-m-d')));
 $hinicio = $request->getParameter('hora');
 $hfinal = $request->getParameter('tiempo_est');
 $date = $this->date; 
 $qui = $this->Quirofano->getid();
 $this->Cirugias = AgendaQuery::create()
      ->filterByquirofanoid($qui)
      ->filterBystatus(-50)
      ->find();
  }

public function executeDiferir(sfWebRequest $request)
  {
    $this->cirugia = AgendaQuery::create()->joinWith('Quirofano')->findPk($request->getParameter('id'));
    $this->form = New diferirCirugiaForm($this->cirugia);
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $agenda = $this->form->save();
        //$this->cirugia->setStatus(3)->save();
        $this->redirect('agenda/show?slug='.$agenda->getQuirofano()->getSlug());
      }
    }
  }

public function executeTransoperatorio(sfWebRequest $request)
  {
    $this->cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->form = new TransoperatorioQuirofanoForm($this->cirugia);
    if ($request->getMethod() == 'POST') {

      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $cirugia = $this->form->save();
        $cirugia->setStatus(10)->save();
        $this->redirect('agenda/show?slug='.$cirugia->getQuirofano()->getSlug());
      }
    }
    $this->form->setDefault('ingreso', date('H:i:s'));
  }
  public function executePxsolicitado(sfWebRequest $request)
  {
    $this->forward404Unless($request->hasParameter('id'));
    $cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $cirugia->setSolicitado(!$cirugia->getSolicitado())->save();
    $this->redirect($request->getReferer());
  }
 public function executeReprogramar(sfWebRequest $request)
  {
    $this->forward404Unless($request->hasParameter('id'));
    $agenda = AgendaQuery::create()->findPk($request->getParameter('id'));
   

      $Quirofano = QuirofanoQuery::create()
        ->findOneById($agenda->getQuirofanoid());



    if ($agenda->estaAtrasado() && !$agenda->esDiferido()) {
      $this->getUser()->setFlash('obligar', 'Esta cirugia tiene más de 24 Horas de atraso por lo que se debe marcar como diferida y especificar
      una causa, antes de poder reprogramarse');
      $this->redirect('agenda/diferir?id='.$agenda->getId());
    }
    $this->form = new programarCirugiaForm($agenda);
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {



             $horapropuesta = $this->form->getValue("hora");
             $salaselecc = $this->form->getValue("sala_id");
             $fechaselecc['max'] = $this->form->getValue("programacion");
             $fechaselecc['min'] = date("Y-m-d",strtotime($fechaselecc['max'].' -1 day'));
             $tiempo_est = $this->form->getValue("tiempo_est");
             $control = $this->emHoras($fechaselecc,$horapropuesta,$Quirofano->getid(),$salaselecc,$tiempo_est);
             if ($control != NULL)
             {
                $text = 'Se empalma con la cirugia: '.$control;
                $this->getUser()->setFlash('notice', sprintf("$text"));
                //rv$this->redirect('agenda/programar?slug='.$request->getParameter('slug'));

             }else{
             $this->form->save();
             $this->getUser()->setFlash('notice', sprintf('Programación exitosa'));
             $this->redirect('agenda/show?slug='.$request->getParameter('slug'));
         }




        //$this->form->save();
        //$this->redirect('agenda/show?slug='.$request->getParameter('slug'));
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


 public function executeBusqueda(sfWebRequest $request) {
    $this->term = $request->getParameter('term');
    $this->cirugias = AgendaQuery::create()
      ->filterByRegistro($this->term)
      ->find();
  }
 public function executeAgregarpersonal(sfWebRequest $request)
  {
    $this->form = new PersonalcirugiaForm();
    $this->form->configureNewPersonal()
      ->setAgendaId($request->getParameter('id'));
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $agenda = $this->form->save();
        $this->form = new PersonalcirugiaForm();
        $this->form->configureNewPersonal()
          ->setAgendaId($request->getParameter('id'));
      }
    }
    $this->cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($this->cirugia);
  }
public function executePostoperatorio(sfWebRequest $request)
  {
    AgendaQuery::create()
      ->filterByStatus(100)
      ->filterByEgreso(array('min' => strtotime('now') - 86400, 'max' => strtotime('now')))
      ->update(array('ShowInIndex' => false));

    $cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->form = new PostoperatorioQuirofanoForm($cirugia);
    if ($request->getMethod() == 'POST') {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $agenda = $this->form->save();
        $this->redirect('agenda/show?slug='.$agenda->getQuirofano()->getSlug());
      }
    }
  }
}
