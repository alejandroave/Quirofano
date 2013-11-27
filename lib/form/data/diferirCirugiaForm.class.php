<?php

/**
 * Agenda form.
 *
 * @package    siga12
 * @subpackage form
 * @author     Antonio Sanchez Uresti
 */

class diferirCirugiaForm extends AgendaForm
{
  public function configure()
  {
    $object = $this->getObject();

    $this->useFields(array(
      'causa_diferido_id',
      'status',
      //'paciente_name',
      'paciente_id',
      'show_in_index'
    ));

    $this->widgetSchema['paciente_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['status'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['show_in_index'] = new sfWidgetFormInputHidden();

    $this->widgetSchema['status']->setAttribute('value', '-50');

    if (in_array($object->getTipoProcId(), array(1,2))) {
      $this->widgetSchema['show_in_index']->setAttribute('value', '0');
    }

    $this->widgetSchema->setLabels(AgendaPeer::getLabels());
  }

}
