<?php
/**
 * Agenda form.
 *
 * @package    siga12
 * @subpackage form
 * @author     Antonio Sanchez Uresti
 */
class postoperatorioQuirofanoForm extends AgendaForm
{
  public function configure()
  {
  $object = $this->getObject();
    $this->useFields(array(
    //'paciente_name',
    //'paciente_id',
    'egreso',
    'complicaciones',
    'riesgoqx_id',
    'contaminacionqx_id',
    'eventoqx_id',
    'clasificacionqx',
    'destino_px',
    'status',
    'ev_adversos_anestesia'
    ));
  //$this->widgetSchema['paciente_id'] = new sfWidgetFormInputHidden();
  $this->widgetSchema['egreso'] = new sfWidgetFormInputText();
  $this->widgetSchema['complicaciones'] = new sfWidgetFormTextarea();
  $this->widgetSchema['status'] = new sfWidgetFormInputHidden();
  $this->widgetSchema['status']->setAttribute('value', '100');
  $this->setWidget('destino_px', new sfWidgetFormChoice(array(
    'choices' => array('Recuperación', 'Intensivos', 'Sala', 'Defunción'),
    'expanded' => true
  )));
  $this->setWidget('clasificacionqx', new sfWidgetFormChoice(array(
    'choices' => array(null, 'Mayor', 'Menor'),
    'expanded' => false,
  )));
  $this->widgetSchema->setLabels(AgendaPeer::getLabels());
    /* Ajustes a los validadores */
  $this->validatorSchema['egreso']->setOption('required', true);
  $this->validatorSchema['egreso']->setMessage('required','Falta hora');
  // Agregando las personas del transoperatorio
  
$this->widgetSchema['egreso']->setAttributes(array(
    'id' => 'datahora',
  
  ));
  $transPersonal = $object->getPersonalTransoperatorio();
  $tmp = new sfForm();

  if($transPersonal != null) {
    foreach ($transPersonal as $personal) {
      if ($personal->getPersonalNombre()) {
        $x = new PersonalcirugiaForm($personal);
        $x->useFields(array('finaliza', 'personal_nombre'));
        $tmp->embedForm('personal'.$personal->getId(), $x);
      }
    }
    $this->embedForm('temporal', $tmp);
  }
  
  $this->validatorSchema['clasificacionqx']->setOption('required', true);
  $this->validatorSchema['clasificacionqx']->setMessage('required','Falta clasificación de la cirugía');
  }
}
