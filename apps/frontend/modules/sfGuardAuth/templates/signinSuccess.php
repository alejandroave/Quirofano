<?php slot('titulo') ?>
  <title>Iniciar de Sesión de Usuario | SIGA-HU</title>
<?php end_slot() ?>

<style>
  section#content {
    width: 940px;
  }

  /*#sf_content #login {
    margin: auto;
    width: 300px;
  }/**/

  /*.formulario {
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    width: 190px;
  } /**/

  #center {
    box-shadow: 0px 0px 20px #000;
    border-radius: 10px;
    background: #BF3503;
    font-size: 1.5em;
    margin: auto;
    margin-top: 30px;
    padding: 10px;
    width: 300px;
  }

  #center select,
  #center input[type=text],
  #center input[type=password],
  #center input[type=submit],
  #center textarea {
      color: #333333;
      font: 0.9em/1.4 tahoma,verdana,arial,helvetica,sans-serif;
      width: 99%; /**/
  }

  #center #login {
    float: left;
    width: 160px;
  }

  #center #referencia {
    color: white;
    float: right;
    width: 120px;
  }

  #center .label {
    color: white;
  }

  #referencia a {
    color: white;
    font-weight: bold;
    text-decoration: none;
  }

</style>

<div id="center" class="clearfix">
  <div id="login">
  <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <?php echo $form->renderHiddenFields()?>
      <div class="area">
        <div class="label"><?php echo $form['username']->renderLabel('Usuario:') ?></div>
        <div class="field">
          <?php echo $form['username']->renderError() ?>
          <?php echo $form['username'] ?>
      </div>
      </div>
      <div class="area clear">
        <div class="label"><?php echo $form['password']->renderLabel('Contrase&ntilde;a:') ?></div>
        <div class="field">
          <?php echo $form['password']->renderError() ?>
          <?php echo $form['password'] ?>
        </div>
      </div>
      <div class="area clear ">
        <div class="label">
          <?php echo $form['remember'] ?>
          <?php echo $form['remember']->renderLabel('Recordarme') ?>
        </div>
      </div>
      <div class="area clear">
        <input type="submit" value=" Entrar " />
      </div>

  </form>
  </div>

  <div id="referencia" >
    <div>Referencia:</div>
    <ul>
      <li class="first"><?php echo link_to('CIE9MC','referencia/cie9mc')  ?></li>
      <li><?php echo link_to('CIE10','referencia/cie10') ?></li>
    </ul>
  </div>
</div>
