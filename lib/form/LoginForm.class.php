
<?php
class LoginForm extends BaseForm
{
  public function configure()
  {
    parent::configure();
 
    $this->setWidgets(array(
      'email'        => new sfWidgetFormInput(),
      'password'  => new sfWidgetFormInputPassword(),
    ));    
 
    $this->setValidators(array(
      'email'        => new sfValidatorEmail(array('required'=>true), array('required'=>'El email es obligatorio')),
      'password'  => new sfValidatorString(array('required'=>true), array('required'=>'Escribe tu contraseña')),
    ));
 
    $this->widgetSchema->setNameFormat('login[%s]');
    $this->widgetSchema->setFormFormatterName('list');
 
  }
 
}