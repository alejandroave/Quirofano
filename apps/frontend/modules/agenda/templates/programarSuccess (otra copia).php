<?php slot('titulo') ?>
  <title>Programar Cirugía | SIGA-HU</title>
<?php end_slot() ?>


<!--<h1>Programar Cirugia</h1>-->
<link rel="stylesheet" type="text/css" media="screen" href="/css/global/main.css" /> <!-- Da formato basico a los formularios -->
<?php //include_partial('form', array('form' => $form)) ?>


<style>
  .formulario {
    float: left;
    background:#ebf4fb;;   
  }

  .formulario .area {
    float: left;
  }

  .formulario .label {
    float: left;
    font-size: bold;	
  }

  .formulario .field {	
    margin:0px 0 0px 0px;
    float: left;
  }


</style>
<!--
<div class='formulario'>
<form action='' method='post'>
<div class='area'>
  <div class='label'><?php echo $form['programacion']->renderLabel() ?></div>
    <div class='field'>
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
-->

<div class='formulario'>
<!--<div class="formulario clearfix">-->
<h1>Programar Cirugia</h1>
<form method="POST">
<!-- <form method="POST" action="<?php //echo url_for('quirofano/programar?slug='.$Quirofano->getSlug()) ?>">   -->
<div class="area">
    <div class="label"><?php echo $form['sala_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['sala_id']->renderError() ?>
      <?php echo $form['sala_id'] ?>
    </div>
  </div>
<div class="area">
    <div class="label"><?php echo $form['programacion']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['programacion']->renderError() ?>
      <?php echo $form['programacion'] ?>
    </div>
  </div>
<div class="area">
    <div class="label"><?php echo $form['hora']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['hora']->renderError() ?>
      <?php echo $form['hora'] ?>
    </div>
  </div>
  <div class="area">
    <div class="label"><?php echo $form['tiempo_est']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['tiempo_est']->renderError() ?>
      <?php echo $form['tiempo_est'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['tipo_proc_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['tipo_proc_id']->renderError() ?>
      <?php echo $form['tipo_proc_id'] ?>
    </div>
  </div>
<div class="area">
    <div class="label"><?php echo $form['registro']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['registro']->renderError() ?>
      <?php echo $form['registro'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['paciente_name']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['paciente_name']->renderError() ?>
      <?php echo $form['paciente_name'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['edad']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['edad']->renderError() ?>
      <?php echo $form['edad'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['genero']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['genero']->renderError() ?>
      <?php echo $form['genero'] ?>
    </div>
  </div>

<div class="area">
    <div class="label"><?php echo $form['procedencia']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['procedencia']->renderError() ?>
      <?php echo $form['procedencia'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['servicio']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['servicio']->renderError() ?>
      <?php echo $form['servicio'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['diagnostico']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['diagnostico']->renderError() ?>
      <?php echo $form['diagnostico'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['protocolo']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['protocolo']->renderError() ?>
      <?php echo $form['protocolo'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['reintervencion']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['reintervencion']->renderError() ?>
      <?php echo $form['reintervencion'] ?>
    </div>
  </div>
<div class="area">
    <div class="label"><?php echo $form['atencion_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['atencion_id']->renderError() ?>
      <?php echo $form['atencion_id'] ?>
    </div>
  </div>

 
  <div class="area">
    <div class="label"><?php echo $form['riesgo_qx_pre']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['riesgo_qx_pre']->renderError() ?>
      <?php echo $form['riesgo_qx_pre'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['req_insumos']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_insumos']->renderError() ?>
      <?php echo $form['req_insumos'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['req_anestesico']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_anestesico']->renderError() ?>
      <?php echo $form['req_anestesico'] ?>
    </div>
  </div>

<div class="area">
    <div class="label"><?php echo $form['req_hemoderiv']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_hemoderiv']->renderError() ?>
      <?php echo $form['req_hemoderiv'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['req_laboratorio']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_laboratorio']->renderError() ?>
      <?php echo $form['req_laboratorio'] ?>
    </div>
  </div>

  <div class="area">
    <div class="label"><?php echo $form['requerimiento']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['requerimiento']->renderError() ?>
      <?php echo $form['requerimiento'] ?>
    </div>
  </div>

<div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Guardar">
  </div>
</form><!-Termina form->

<!--  <div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Guardar">
  </div>-->

</div> <!- Termina formulario-->


