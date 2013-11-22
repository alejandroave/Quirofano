<style>
  .addLink{
    display: inline;
    float: right;
    font-size: 0.9em;
    margin-right: 10px;
    text-decoration: none;
    width: 700px;
  }

<!--
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
-->
</style>

<script type="text/javascript"> 
  function pregunta(){ 
    return confirm('¿Estas seguro de enviar este registro?'); 
  } 
  function saludo() {alert('Programación Exitosa')}
  function verificar() {alert('Verificar la hora')}
</script>


<div class="formulario clearfix">



<form id='target' method="POST" onsubmit="return pregunta();">
<!-- <form method="POST" action="<?php //echo url_for('quirofano/programar?slug='.$Quirofano->getSlug()) ?>">   -->
<div class="area cols03">

  
    <div class="label"><?php echo $form['paciente_name']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['paciente_name']->renderError() ?>
      <?php echo $form['paciente_name'] ?>
    </div>
  </div>


<div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Buscar">
  </div>
</form>

</div>
