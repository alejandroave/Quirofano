<h1>Programar Cirugia</h1>

<?php //include_partial('form', array('form' => $form)) ?>
<style>
  .formulario {
    float: left;
    background: cyan;   
  }

  .formulario .area {
    float: left;
  }

  .formulario .etiqueta {
    float: left;
    font-size: bold;
  }

  .formulario .campo {
    float: left;
    background: yellow;
  }
</style>

<div class='formulario'>
<form action='' method='post'>
<div class='area'>
  <div class='etiqueta'><?php echo $form['programacion']->renderLabel() ?></div>
    <div class='campo'>
      <?php echo $form['programacion']->renderError() ?>
      <?php echo $form['programacion']->render() ?>
    </div>
</div>
<div class='area'>
  <div class='etiqueta'><?php echo $form['hora']->renderLabel() ?></div>
    <div class='campo'>
      <?php echo $form['hora']->renderError() ?>
      <?php echo $form['hora']->render() ?>
    </div>
</div>
<div class='area'>
  <div class='etiqueta'><?php echo $form['sala_id']->renderLabel() ?></div>
    <div class='campo'>
      <?php echo $form['sala_id']->renderError() ?>
      <?php echo $form['sala_id']->render() ?>
    </div>
</div>
<div class='area'>
  <div class='etiqueta'><?php echo $form['paciente_name']->renderLabel() ?></div>
    <div class='campo'>
      <?php echo $form['paciente_name']->renderError() ?>
      <?php echo $form['paciente_name']->render() ?>
    </div>
</div>
<div class='area'>
  <div class='etiqueta'><?php echo $form['paciente_id']->renderLabel() ?></div>
    <div class='campo'>
      <?php echo $form['paciente_id']->renderError() ?>
      <?php echo $form['paciente_id']->render() ?>
    </div>
</div>
<div class='area'>
    <div class='campo'>
      <input type='submit' value='Guardar' />
    </div>
</div>
</div>
<table border ='1'>
<?php echo $form ?>
</table>
