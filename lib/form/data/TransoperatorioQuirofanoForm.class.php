<?php

/**
 * Agenda form.
 *
 * @package    siga12
 * @subpackage form
 * @author     Antonio Sanchez Uresti
 */

class transoperatorioQuirofanoForm extends AgendaForm
{
  public function configure()
  {
    $object = $this->getObject();

    $this->useFields(array(
    'ingreso',
    'anestesia_empleada',
    'observaciones',
    'tiempo_fuera',
    'status',
    //'paciente_name',
    //'paciente_id',
    //'realiza',
    //'realiza_id',
    //'supervisor',
    //'supervisor_id',
    //'anestesiologo_qx',
    //'anestesiologo_qx_id',
    //'maestro_anestesia',
    //'maestro_anestesia_id',
    'anestesia_id',
    //'instrumentista',
    //'instrumentista_id',
    //'circulante',
    //'circulante_id',
    //'turno_ci_id',
    //'turno_ii_id',
    'solicitado'
    ));

    //$this->widgetSchema['paciente_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['realiza_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['supervisor_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['anestesiologo_qx_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['maestro_anestesia_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['instrumentista_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['circulante_id'] = new sfWidgetFormInputHidden();


    $this->widgetSchema['solicitado'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['status'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['ingreso'] = new sfWidgetFormInputText();

    $this->widgetSchema['ingreso']->setAttributes(array(
      'id' => 'datahora',
  
     ));


    $this->widgetSchema['anestesia_empleada'] = new sfWidgetFormInputText();
    $this->widgetSchema['anestesia_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['observaciones'] = new sfWidgetFormTextarea();
    $this->widgetSchema['tiempo_fuera'] = new sfWidgetFormChoice(array(
      'choices' => array('No', 'Si'),
      'expanded' => true
    ));

  $transPersonal = $object->getPersonalTransoperatorio();
  $cxInicial = $object->getCirujanoInicial();

  $this->embedPersonalForm($object->getCirujanoInicial(), 'cxInicial', array('Tipo' => 'cirujano','Inicia' => true,'Status' => '0'));
  $this->embedPersonalForm($object->getCirujanoSupInicial(), 'cxSupInicial', array('Tipo' => 'cirujano','Inicia' => true,'Status' => '1'));

  //-------------------------------------------------------------------------
  $this->embedPersonalForm($object->getAnestesiologoInicial(), 'anesInicia', array('Tipo' => 'anestesista','Inicia' => true,'Status' => '0'));
  $this->embedPersonalForm($object->getAnestesiologoSupInicial(), 'anesSupInicia', array('Tipo' => 'anestesista','Inicia' => true,'Status' => '1'));


  $this->embedPersonalForm($object->getInstrumentistaInicial(), 'instrumentistaInicial', array('Tipo' => 'enfermeria','Inicia' => true,'Status' => '2'));
  $this->embedPersonalForm($object->getCirculanteInicial(), 'circulanteInicial', array('Tipo' => 'enfermeria','Inicia' => true,'Status' => '3'));



    //$this->setWidget('turno_ii_id', new sfWidgetFormInput());
    /*$turnoChoices = array(
      '1' => 'Matutino',
      '2' => 'Vespertino',
      '3' => 'Nocturno',
      '4' => 'Plan Piloto',
    );

    $this->widgetSchema['turno_ii_id'] = new sfWidgetFormChoice(array('choices' => $turnoChoices));
    $this->widgetSchema['turno_ci_id'] = new sfWidgetFormChoice(array('choices' => $turnoChoices)); */

    //$this->setDefault('turno_ii_id', $this->calcTurno());
    //$this->setDefault('turno_ci_id', $this->calcTurno());
    $this->setDefault('solicitado', true);


  $this->widgetSchema->setLabels(AgendaPeer::getLabels());
    /* Ajustes a los validadores */

/*
    $this->validatorSchema['ingreso']->setOption('required', true);
    $this->validatorSchema['ingreso']->setMessage('required','Falta hora');

    $this->validatorSchema['realiza']->setOption('required', true);
    $this->validatorSchema['realiza']->setMessage('required','Falta nombre de cirujano');

    $this->validatorSchema['anestesiologo_qx']->setOption('required', true);
    $this->validatorSchema['anestesiologo_qx']->setMessage('required','Falta nombre de anestesiologo');

    $this->validatorSchema['anestesia_empleada']->setOption('required', true);
    $this->validatorSchema['anestesia_empleada']->setMessage('required','Falta tipo de anestesia');

    $this->validatorSchema['instrumentista']->setOption('required', true);
    $this->validatorSchema['instrumentista']->setMessage('required','Falta nombre de instrumentista');

    $this->validatorSchema['turno_ii_id']->setOption('required', true);
    $this->validatorSchema['turno_ii_id']->setMessage('required','Falta hora');

    $this->validatorSchema['circulante']->setOption('required', true);
    $this->validatorSchema['circulante']->setMessage('required','Falta nombre de circulante');

    $this->validatorSchema['turno_ci_id']->setOption('required', true);
    $this->validatorSchema['turno_ci_id']->setMessage('required','Falta hora'); */

  }

  public function embedPersonalForm($personal, $name, $values)
  {
    if ($personal->isNew()) {
      $values = array_merge($values, array('Transoperatorio' => true));
      $personal->fromArray($values);
      $personal->setAgenda($this->getObject());
    }

    $class = 'Personal'.$values['Tipo'].'Form';

    $tmpForm = new $class($personal);
    $tmpForm->widgetSchema['personal_nombre']->setAttribute('class', 'personal_ac');
    unset(
      $tmpForm['finaliza'],
      $tmpForm['programa']
    );

    $this->embedForm($name, $tmpForm);
    return $this;
  }

  public function calcTurno()
  {
    $turno = 0;
    $dia = date('N');
    //$dia = date('N', mktime(0,0,0,12,11,2011));
    $transcurrido = strtotime('now') - strtotime('today');
    //$transcurrido = mktime(8,0,0,12,10,2011) - mktime(0,0,0,12,10,2011);

    if (in_array($dia, array(1,2,3,4,5)) && $transcurrido < 26999) {
      $turno = 3;
    }
    elseif (in_array($dia, array(1,2,3,4,5)) && $transcurrido > 77400) {
      $turno = 3;
    }
    elseif (in_array($dia, array(1,2,3,4,5)) && $transcurrido > 50400) {
      $turno = 2;
    }
    elseif (in_array($dia, array(1,2,3,4,5)) && $transcurrido > 27000) {
      $turno = 1;
    }
    elseif (in_array($dia, array(2,3,4,5,6)) && $transcurrido < 30600) {
      $turno = 3;
    }
    elseif ($dia == 6 && $transcurrido > 25200) {
      $turno = 4;
    }
    elseif ($dia == 7 && $transcurrido < 75600) {
      $turno = 4;
    }

    //return in_array($dia, array(1,2,3,4,5));
    //return $dia;
    //return $transcurrido;
    //return date('U', mktime(0,0,0,12,10,2011));
    return $turno;
  }

}
