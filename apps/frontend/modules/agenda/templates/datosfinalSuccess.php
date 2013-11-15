<style>
  #idTag {
    background: #e1e279;
    border-radius: 5px;
    /*border: 1px solid black;*/
    box-shadow: 10px 10px 10px #999;
    margin-bottom: 10px;
    padding: 5px;
  }

  #idTag div {
    margin: 0px 5px;
  }

  #idTag .name {
    font-size: 1.8em;
  }

  #idTag .label {
    font-weight: bold;
  }
</style>

<?php slot('titulo') ?>
  <title>Datos finales | SIGA-HU </title>
<?php end_slot() ?>



<div id="idTag">
  <div class="name"><?php echo $cirugia->getPacienteName() ?></div>
  <div><span class="label">Registro: </span><span><?php echo "registro del pasciente" ?></span></div>
</div>



<div class="formulario clearfix">
	
  <div class="area cols03">
    <div class="label"><?php echo $form['egreso']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['egreso']->renderError() ?>
      <?php echo $form['egreso'] ?>
    </div>
  </div>




</div>