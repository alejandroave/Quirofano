<script type="text/javascript" src="/js/global/jquery.ptTimeSelect.js"></script>
<link rel="stylesheet" type="text/css" href="/css/global/jquery.ptTimeSelect.css" />


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

<!- Aqui va el paciente ->

<div id="idTag">
  <div class="name"><?php echo "Nombre del paciente: ".$form->getObject()->getPacienteName() ?></div>
  </div>
  

<!- Aqui va el paciente ->

<style>
/* Mientras podemos hacer botones con jQueryUI usamos css */




.menubar a {
  background: white;
  border: 1px solid black;
  color: blue;
  margin: 0 0 3px 0;
  padding: 2px 4px;
  text-decoration: none;
}

.menubar a:hover {
  background: lightgray;
}
</style>


<script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $("#datahora").ptTimeSelect();
        });
</script>



<?php $quirofano = $form->getObject()->getQuirofano() ?>
<div class="menubar">
  <a href="<?php echo url_for('agenda/show?slug='.$quirofano->getSlug()) ?>">Agenda de <?php echo $quirofano ?></a>
</div>

<div class="formulario clearfix">
<?php slot('titulo') ?>
  <title>Postoperatorio | SIGA-HU </title>
<?php end_slot() ?>

<h1>Postoperatorio</h1>

<form method="POST">

  <div class="area cols03">
    <div class="label"><?php echo $form['egreso']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['egreso']->renderError() ?>
      <?php echo $form['egreso'] ?>
    </div>
  </div>

   <div class="area cols03">
    <div class="label"><?php echo $form['clasificacionqx']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['clasificacionqx']->renderError() ?>
      <?php echo $form['clasificacionqx'] ?>
    </div>
  </div> 
 
<div class="area cols06 horizontal">
    <div class="label"><?php echo $form['destino_px']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['destino_px']->renderError() ?>
      <?php echo $form['destino_px'] ?>
    </div>
  </div>

<br/><br/><br/>
 

  <div class="area cols06">
    <div class="label"><?php echo $form['riesgoqx_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['riesgoqx_id']->renderError() ?>
      <?php echo $form['riesgoqx_id'] ?>
    </div>
  </div> 

  

  <div class="area cols03">
    <div class="label"><?php echo $form['eventoqx_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['eventoqx_id']->renderError() ?>
      <?php echo $form['eventoqx_id'] ?>
    </div>
  </div>

  <div class="area cols03">
    <div class="label"><?php echo $form['contaminacionqx_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['contaminacionqx_id']->renderError() ?>
      <?php echo $form['contaminacionqx_id'] ?>
    </div>
  </div>

 

  <div class="area cols12">
    <div class="label"><?php echo $form['ev_adversos_anestesia']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['ev_adversos_anestesia']->renderError() ?>
      <?php echo $form['ev_adversos_anestesia'] ?>
    </div>
  </div>

  <div class="area cols12">
    <div class="label"><?php echo $form['complicaciones']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['complicaciones']->renderError() ?>
      <?php echo $form['complicaciones'] ?>
    </div>
  </div>


<?php //$formularios = $form->getEmbeddedForm('temporal')?>

<?php $x = 1?>


<h3 style="float: left; margin-top: 20px; width: 100%;">Del personal que participa en esta cirugia, quienes finalizan</h3>
<?php foreach ($form['temporal'] as $formulario):?>

   <div class="area cols04">
    <!-- <div class="label"><?php echo $formulario['finaliza']->renderLabel($formulario['personal_nombre']->getValue()) ?></div> -->
    <div class="label"><?php echo $formulario['personal_nombre']->getValue() ?></div>
    <div style="display:none" ><?php echo $formulario['personal_nombre'] ?></div>
  </div>

  <div class="area cols08">
    <?php echo $formulario['finaliza'] ?>
  </div>



<?php endforeach;?>


  <div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Guardar">
  </div>

</form>
</div>

