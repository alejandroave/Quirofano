<?php
require_once '../lib/vendor/lessphp/lessc.inc.php';

require_once dirname(__FILE__).'/../SYM/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfPropelORMPlugin');
    $this->enablePlugins('sfGuardPlugin');
    //$this->enablePlugins('sfGuardAuth');

  }
}



