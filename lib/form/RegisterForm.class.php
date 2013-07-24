<?php
class RegisterForm extends BaseForm
{
    public function configure()
    {
        parent::configure();
 
        $this->setWidgets(array(
	    'email'     => new sfWidgetFormInput(),
	        'password'  => new sfWidgetFormInputPassword(),
            'password2' => new sfWidgetFormInputPassword(),
	    ));
 
 $this->setValidators(array(
            'email'        => new sfValidatorEmail(array('required'=>true), array('required'=> "El email es obligatorio")),
            'password'  => new sfValidatorString(array('required'=>true), array('required'=> "La contraseña es obligatoria")),
            'password2' => new sfValidatorString(array('required'=>true), array('required'=> "La contraseña es obligatoria")),
	    ));
 
 $this->widgetSchema->setNameFormat('register[%s]');
        $this->widgetSchema->setFormFormatterName('list');
 
        $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorSchemaCompare('password2', sfValidatorSchemaCompare::EQUAL, 'password', array('throw_global_error' => true), array('invalid' => "Las dos contraseñas no coinciden")),
            new sfValidatorDoctrineUnique(array('model' => 'User', 'column' => array('email')), array('invalid'=> "Este email ya está en uso"))
        )));
    }
}