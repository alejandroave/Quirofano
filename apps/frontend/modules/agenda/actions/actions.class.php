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

  /*Actión para el index inicial, filtra por quirofanos activos*/
  public function executeIndex(sfWebRequest $request)
  {
    $this->Quirofanos = QuirofanoQuery::create()
      ->filterByactivo(1)
      ->filterByambulatorio(0)
      ->find();
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');

  }
  /*Actión para el index inicial, filtra por quirofanos activos*/


/*Actión para mostrar quirofanos ambulatorios y activos*/
 public function executeAmbulatorio(sfWebRequest $request)
  {
    $this->Quirofanos = QuirofanoQuery::create()
      ->filterByactivo(1)
      ->filterByambulatorio(1)
      ->find();
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');
  }
/*Actión para mostrar quirofanos ambulatorios y activos*/


/*Actión para mostrar todos los quirofanos*/
 public function executeTquirofanos(sfWebRequest $request)
  {
    $this->Quirofanos = QuirofanoQuery::create()->find(); //datos para los quirofanos
    $quirofano_id = $request->getParameter('quirofano');  
    $date = $request->getParameter('date', 'today');
  }
/*Actión para mostrar todos los quirofanos*/

/*Actión de prueba*/
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AgendaForm();
  }
/*Actión de prueba*/



/*Actión para programar la cirugía*/
  public function executeProgramar(sfWebRequest $request)
  {   


      $this->forward404Unless($request->hasParameter('slug'));
      $this->form = new programarCirugiaForm();      //cargamos form
      $Quirofano = QuirofanoQuery::create()          //filtramos por un solo quirofano
        ->findOneBySlug($request->getParameter('slug'));


    if ($request->isMethod('POST')) {
      	 $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
	       if ($this->form->isValid()) {  //comprobamos si es valido

             /*Tomamos los valores del form enviado
             Esto nos ayudara a evaluar si se empalman con alguna cirugía
             Anteriormente programada*/
             $ide = $this->form->getValue("id");
             $horapropuesta = $this->form->getValue("hora");                               //Tomamos la hora propuesta
             $salaselecc = $this->form->getValue("sala_id");                               //la sala
             $fechaselecc['max'] = $this->form->getValue("programacion");                  //el dia actual de la programación
             $fechaselecc['min'] = date("Y-m-d",strtotime($fechaselecc['max'].' -1 day')); //Un dia antes por si la cirugía de un día antes continua actualmente
             $tiempo_est = $this->form->getValue("tiempo_est");                            //Tiempo estimado de la cirugía  

             /* llamamos a la función emHoras, esta función sirve para devolver con que cirugía se empalma o regresa un NULL en caso 
            de que no se empalme con niguna, se envian los parametros anteriores, al igual que el id del quirofano.
            Con respecto al NULL es para que no se empalme con sigo misma, en reprogramación se envia el id de esa programación,
            en este caso como es nuevo se va como NULL */

             $control = $this->emHoras($fechaselecc,$horapropuesta,$Quirofano->getid(),$salaselecc,$tiempo_est,NULL);

             if ($control != NULL)    //si es diferente a null quiere decir que se empalma con alguna programación anterior
             {
                $text = 'Se empalma con la cirugia: '.$control;
                $this->getUser()->setFlash('notice', sprintf("$text"));

             }else{   // si es null lo grabamos como debe ser

             $cirugia = $this->form->save();
             $cirugia->setfechaestado($fechaselecc['max'])->save();                  //control de fecha para cada estados
             $cirugia->sethoraestado($horapropuesta)->save();                        //control de fecha para cada estados
             $this->getUser()->setFlash('notice', sprintf('Programación exitosa'));
	           $this->redirect('agenda/show?slug='.$request->getParameter('slug'));
         }
	       } 
    }

    $this->quirofano = QuirofanoQuery::create()->findOneBySlug($request->getParameter('slug')); //Obtenemis el quirofano
    $this->form->setSalaWidget($request->getParameter('slug'));                                //ponemos las salas del quirofano
    $this->form->setDefault('quirofano_id', $this->quirofano->getId());                        //ponemos el id del quirofano        
    $request->hasParameter('sala') ? $this->form->setSalaDefault($request->getParameter('sala')): null; 
  }
/*Actión para programar la cirugía*/


/*Función para saber si se empalma con alguna programación anterior
EL orden de los datos es de la siguiente manera:
Fecha de programacion, LA hora propuesta, Id del quirofano, Id de la sala, tiempo estimado, id de la cirugia(si es nueva se pone solo 
un NULL) */

public function emHoras($fechaselecc,$horapropuesta,$Quiid,$salaselecc,$tiempo_est,$identificacion)
{

    $control = NULL;
    $estados['trans'] = 10;
    $estados['progr'] = 1;                         
    $agenda = AgendaQuery::create()                //filtramos por programaciones del dia actual y un dia anterior
        ->filterByquirofanoid($Quiid)              //en caso de que continue la cirugia al dia de hoy 
        ->filterByfechaestado($fechaselecc)
        ->filterBysalaid($salaselecc)
        ->filterByStatus($estados)
        ->find();

    //Buscamos las posibles cirugias programadas que se pueden empalmar    
    foreach($agenda as $agendas):
    if($identificacion != $agendas->getId()) //verificamos si no es la misma :P
      {
       
          $tiempo1 = strtotime("".$agendas->getFechaestado()."".$agendas->getHoraestado());  //tiempo inicial de la cirugía a comparar
          $tiempo2 = strtotime("".$fechaselecc['max']."".$horapropuesta);  //tiempo obtenido del form
          $hora = date('H', strtotime($agendas->getTiempoest()));           //sumamos la horas que tardaran en finalizar la cirugía  
          $minuto = date('i', strtotime($agendas->getTiempoest()));
          $segundo = date('s', strtotime($agendas->getTiempoest()));
          $hora2 = "+".$hora." hour +". $minuto ." minutes +".$segundo ." second";
          $tiempo3 = strtotime("".$agendas->getFechaestado()."".$agendas->getHoraestado()."".$hora2);  
          
          if($tiempo1 <= $tiempo2 && $tiempo2 <= $tiempo3 )  //comparamos con la cirugía y en caso de que quede entre el medio
          {                                                  //indicara que se empalma

            $control = $agendas->getId();
          }
          
     }
     endforeach;
  return $control;
}

/*Función para saber si se empalma con alguna programación anterior
EL orden de los datos es de la siguiente manera:
Fecha de programacion, LA hora propuesta, Id del quirofano, Id de la sala, tiempo estimado, id de la cirugia(si es nueva se pone solo 
un NULL) */



/*Funciones iniciales de symfony*/
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
/*Funcioens iniciales de symfony*/

/*Mostramos todas las cirugías de un cierto quirofano*/
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
/*Mostramos todas las cirugías de un cierto quirofano*/


/*Mostramos la agenda para el dia actual*/
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
/*Mostramos la agenda para el dia actual*/

/*Mostrar las diferentes salas del quirofano*/
public function executeInspeccionar(sfWebRequest $request)
{
      $this->salas = SalaquirurgicaQuery::create()
      ->joinWith('Quirofano')
      ->useQuery('Quirofano')
        ->filterBySlug($request->getParameter('slug'))
      ->endUse()
      ->find();	
}
/*Mostrar las diferentes salas del quirofano*/


/*Mostrar todas las cirugias diferidas de un quirofano*/
 public function executeDiferidas(sfWebRequest $request)
  {
   $this->Quirofano = QuirofanoQuery::create()
      ->findOneBySlug($request->getParameter('slug'));
 $offset = $request->getParameter('offset', 0) * 3600;
 //$this->date = strtotime($request->getParameter('date', date('Y-m-d')));
 //$hinicio = $request->getParameter('hora');
 //$hfinal = $request->getParameter('tiempo_est');
 //$date = $this->date; 
 $qui = $this->Quirofano->getid();
 $this->Cirugias = AgendaQuery::create()
      ->filterByquirofanoid($qui)
      ->filterBystatus(-50)
      ->find();
  }
/*Mostrar todas las cirugias diferidas de un quirofano*/

/*Diferir una cirugía*/
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
/*Diferir una cirugía*/

/* Iniciar la cirugía*/
public function executeTransoperatorio(sfWebRequest $request)
  {
    $this->cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $this->form = new TransoperatorioQuirofanoForm($this->cirugia);
    
    //se guardara con la fecha en que se realize la cirugia
    $fechaactual = date('Y-m-d', strtotime("now"));
    $horaactual = date('H:i:s');
    if ($request->getMethod() == 'POST') {

      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $cirugia = $this->form->save();
        $cirugia->setStatus(10)->save();
        $cirugia->setfechaestado($fechaactual)->save();
        $cirugia->sethoraestado($horaactual)->save();
        //$cirugia->setHora(date('H:i:s'))->save();
        //$cirugia->setProgramacion($fechaactual)->save();
        $this->redirect('agenda/show?slug='.$cirugia->getQuirofano()->getSlug());
      }
    }
    $this->form->setDefault('ingreso', $horaactual);
  }
/* iniciar cirugía */


/*Botón PO, saber si esta listo para la cirugía*/
  public function executePxsolicitado(sfWebRequest $request)
  {
    $this->forward404Unless($request->hasParameter('id'));
    $cirugia = AgendaQuery::create()->findPk($request->getParameter('id'));
    $cirugia->setSolicitado(!$cirugia->getSolicitado())->save();
    $this->redirect($request->getReferer());
  }
/*Botón PO, saber si esta listo para la cirugía*/

/**Reprogramar la cirugía*/
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
             $identificacion = $this->form->getValue("id");
             $control = $this->emHoras($fechaselecc,$horapropuesta,$Quirofano->getid(),$salaselecc,$tiempo_est,$identificacion);
             if ($control != NULL)
             {
                $text = 'Se empalma con la cirugia: '.$control;
                $this->getUser()->setFlash('notice', sprintf("$text"));
                //rv$this->redirect('agenda/programar?slug='.$request->getParameter('slug'));
             }else{
             //$this->form->save();
             $cirugia = $this->form->save();
             $cirugia->setfechaestado($fechaselecc['max'])->save();                  //control de fecha para cada estados
             $cirugia->sethoraestado($horapropuesta)->save();                        //control de fecha para cada estados
             $this->getUser()->setFlash('notice', sprintf('Programación exitosa'));
             $this->redirect('agenda/show?slug='.$request->getParameter('slug'));
         }
        //$this->form->save();
        //$this->redirect('agenda/show?slug='.$request->getParameter('slug'));
      }
    }
    //$this->form->setSalaWidget($request->getParameter('slug'));
  }
  /**Reprogramar la cirugía*/

/*Cancelar la cirugía*/
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
/*Cancelar la cirugía*/

/*Busqeda por registro*/
 public function executeBusqueda(sfWebRequest $request) {
    $this->term = $request->getParameter('term');
    $this->cirugias = AgendaQuery::create()
      ->filterByRegistro($this->term)
      ->find();

  }
/*Busqueda por registro*/


/*Mostrar la plantilla de busqueda personalizada*/
 public function executePbusqueda(sfWebrequest $request){
     return sfView::SUCCESS;	
  }
/*Mostrar la plantilla de busqueda personalizada*/

/*Realizar la busqueda personalizada*/
public function executeBusquedapersonalisada(sfWebrequest $request)
{
	$this->quirofano = $request->getParameter('Quirofano');
	$this->sala = $request->getParameter('Sala');
	$this->nombre = $request->getParameter('Nombre');

  $this->Quirofano = QuirofanoQuery::create()
        ->findOneByNombre("%".$this->quirofano."%");

  $this->Salas = SalaquirurgicaQuery::create()
        ->findOneByNombre("%".$this->sala."%");
        
	$this->cirugias = AgendaQuery::create()
  ->filterByquirofanoid($this->existe($this->Quirofano))
  ->filterBysalaid($this->existe($this->Salas))
	->filterBypacientename("%".$this->nombre."%")
  ->find();
}
/*Realiza la busqueda personalizada*/

/*Saber si existe un quirofano o sala en caso de que no regresa 0*/
public function existe($variable)
{
  $regreso = 0;
if (count($variable) > 0)
  {
    $regreso = $variable->getId();
  }
return $regreso;
}
/*Saber si existe un quirofano o sala en caso de que no regresa 0*/


/*Agregar personal a la cirugía*/
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
/*Agregar personal a la cirugía*/

/*Finalizar la cirugía*/
  public function executePostoperatorio(sfWebRequest $request)
  {
    //AgendaQuery::create()
    //  ->filterByStatus(100)
    //  ->filterByEgreso(array('min' => strtotime('now') - 86400, 'max' => strtotime('now')))
    //  ->update(array('ShowInIndex' => false));
    //   $fechaactual = date('Y-m-d', strtotime("now"));
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
/*Finalizar la cirugía*/

/*Mostrar calendario*/
  public function executeCalendar(sfWebRequest $request)
  {
     return sfView::SUCCESS;

  }
/*Mostrar calendario*/



}