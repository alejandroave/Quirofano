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

<script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $("#datahora").ptTimeSelect();
        });
</script>



<?php slot('titulo') ?>
  <title>Transoperatorio | SIGA-HU </title>
<?php end_slot() ?>

<?php $paciente = $form->getObject()?>

<div id="idTag">
  <div class="name"><?php echo $cirugia->getPacienteName() ?></div>
  <div><span class="label">Registro: </span><span><?php echo "registro del pasciente" ?></span></div>
</div>

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









<?php $quirofano = $form->getObject()->getQuirofano() ?>
<div class="menubar">
  <a href="<?php echo url_for('agenda/show?slug='.$quirofano->getSlug()) ?>">Agenda de <?php echo $quirofano ?></a>
</div>

<div class="formulario clearfix">


<h1>Transoperatorio</h1>

<form method="POST">

  <div class="area cols10">
    <div class="label"><?php echo $form['ingreso']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['ingreso']->renderError() ?>
      <?php echo $form['ingreso'] ?>
    </div>
  </div>

  <div class="area cols02 horizontal">
    <div class="label"><?php echo $form['tiempo_fuera']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['tiempo_fuera']->renderError() ?>
      <?php echo $form['tiempo_fuera'] ?>
    </div>
  </div>
<div class="area cols06">
    <div class="label"><?php echo $form['cxInicial']['personal_nombre']->renderLabel('Médico que inicia el procedimiento:') ?></div>
    <div class="field">
      <?php echo $form['cxInicial']['personal_nombre']->renderError() ?>
      <?php echo $form['cxInicial']['personal_nombre'] ?>
    </div>
  </div>
  <div class="area cols06">
    <div class="label"><?php echo $form['cxSupInicial']['personal_nombre']->renderLabel('Cirujano que supervisa:') ?></div>
    <div class="field">
      <?php echo $form['cxSupInicial']['personal_nombre']->renderError() ?>
      <?php echo $form['cxSupInicial']['personal_nombre'] ?>
    </div>
  </div>
<div class="area cols06">
    <div class="label"><?php echo $form['anesInicia']['personal_nombre']->renderLabel('Anestesiologo Inicial:') ?></div>
    <div class="field">
      <?php echo $form['anesInicia']['personal_nombre']->renderError() ?>
      <?php echo $form['anesInicia']['personal_nombre'] ?>
    </div>
  </div>

<div class="area cols06">
    <div class="label"><?php echo $form['anesSupInicia']['personal_nombre']->renderLabel('Anestesiologo que supervisa:') ?></div>
    <div class="field">
      <?php echo $form['anesSupInicia']['personal_nombre']->renderError() ?>
      <?php echo $form['anesSupInicia']['personal_nombre'] ?>
    </div>
  </div>

  <div class="area cols12">
    <div class="label"><?php echo $form['anestesia_empleada']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['anestesia_empleada']->renderError() ?>
      <?php echo $form['anestesia_empleada'] ?>
    </div>
  </div>

<div class="area cols04">
    <div class="label"><?php echo $form['instrumentistaInicial']['personal_nombre']->renderLabel('Instrumentista que inicia:') ?></div>
    <div class="field">
      <?php echo $form['instrumentistaInicial']['personal_nombre']->renderError() ?>
      <?php echo $form['instrumentistaInicial']['personal_nombre'] ?>
    </div>
  </div>
<!--aqui falta turno -->
 <div class="area cols02">
    <div class="label"><?php echo $form['instrumentistaInicial']['turno']->renderLabel('Turno:') ?></div>
    <div class="field">
      <?php echo $form['instrumentistaInicial']['turno']->renderError() ?>
      <?php echo $form['instrumentistaInicial']['turno'] ?>
    </div>
  </div>
<!--aqui falta turno-->

 <div class="area cols04">
    <div class="label"><?php echo $form['circulanteInicial']['personal_nombre']->renderLabel('Circulante que inicia:') ?></div>
    <div class="field">
      <?php echo $form['circulanteInicial']['personal_nombre']->renderError() ?>
      <?php echo $form['circulanteInicial']['personal_nombre'] ?>
    </div>
  </div>

  <div class="area cols02">
    <div class="label"><?php echo $form['circulanteInicial']['turno']->renderLabel('Turno:') ?></div>
    <div class="field">
      <?php echo $form['circulanteInicial']['turno']->renderError() ?>
      <?php echo $form['circulanteInicial']['turno'] ?>
    </div>
  </div>


  <div class="area cols12">
    <div class="label"><?php echo $form['observaciones']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['observaciones']->renderError() ?>
      <?php echo $form['observaciones'] ?>
    </div>
  </div>

  <div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Guardar">
  </div>

</form>
</div>

<script>
  $(function(){
    $("#agenda_anestesia_empleada").autocomplete({
      source: '<?php echo url_for('api/tipoanestesia', true)?>',
      select: function(event, ui) {
        $('#agenda_anestesia_id').val(ui.item.id);
      }
    });

    $('.personal_ac').each(function(){
      var $this = $(this),
          altField = $('#' + $this.attr('id').replace('personal_nombre', 'id'));

      $this.autocomplete({
        source: '<?php echo url_for('api/personal', true)?>',
        /*select: function(event, ui) {
          altField.val(ui.item.id);
        } /**/
      });
    });

  });
</script>


