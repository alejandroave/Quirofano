<?php

/**
 * contenido actions.
 *
 * @package    Quirofano
 * @subpackage contenido
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contenidoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  *
  *
  * public function executeIndex(sfWebRequest $request)
  *{
   * $this->forward('default', 'module');
  *}
  */
  public function executeVer(sfWebRequest $request)
  {
    $hoy = getdate();
    $this->hora = $hoy['hours'];
  }


}
