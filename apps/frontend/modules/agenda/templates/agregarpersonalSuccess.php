<?php slot('titulo')?>
  <title>Agregar personal | SIGA - HU</title>
<?php end_slot() ?>

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



<div id="idTag">
  <div class="name"><?php echo $cirugia->getpacientename() ?></div>
  <div><span class="label">Registro: </span><span><?php echo $cirugia->getRegistro() ?></span></div>
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

<?php $quirofano = $cirugia->getQuirofano() ?>
<div class="menubar">
  <a href="<?php echo url_for('agenda/show?slug='.$quirofano->getSlug()) ?>">Agenda de <?php echo $quirofano ?></a>
</div>

<div class="formulario clearfix">
  <h1>Añadir Cambio de Personal </h1>

  <h2>Personal actualmente en la cirugia</h2>
  <?php foreach($cirugia->getPersonalTransoperatorio() as $personal):?>
    <div class="area cols07"><?php echo $personal ?></div>
    <div class="area cols04"><?php echo $personal->getTipo() ?></div>
<HR width="100%">
  <?php endforeach; ?>

<form method="POST">

<!--  <div class="area cols12">
    <?php //echo $form['Personalcirugia'] ?>
    <?php //echo $form ?>
-->

  <div class="area cols06">
    <div class="label"><?php echo $form['personal_nombre']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['personal_nombre']->renderError() ?>
      <?php echo $form['personal_nombre'] ?>
    </div>
  </div>

  <div class="area cols03">
    <div class="label"><?php echo $form['tipo']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['tipo']->renderError() ?>
      <?php echo $form['tipo'] ?>
    </div>
  </div>


   <div class="area cols04">
    <div class="label"><?php echo $form['status']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['status']->renderError() ?>
      <?php echo $form['status'] ?>
    </div>
  </div>

  <div class="area cols04">
    <div class="label"><?php echo $form['turno']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['turno']->renderError() ?>
      <?php echo $form['turno'] ?>
    </div>
  </div>


<!--
  </div>
-->

  <div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Agregar nuevo personal">
  </div>

</form>

</div>
<script>
  $(function(){

    $('.personal_ac').each(function(){
      var $this = $(this),
          altField = $('#' + $this.attr('id').replace('personal_nombre', 'id'));

      $this.autocomplete({
        source: '<?php echo url_for('api/personal', true)?>',
          /*select: function(event, ui) {
          altField.val(ui.item.id);
        }/**/
      });
    });

  });
</script>

 <script>
(function($){
  var
    esp = $('#personalcirugia_especialidad_id, label[for="personalcirugia_especialidad_id"]' ).hide(),
    $status = $('#personalcirugia_status, label[for="personalcirugia_status"]').hide(),
    turno = $('#personalcirugia_turno, label[for="personalcirugia_turno"]').hide();

   var
   s_ayudante = $("#personalcirugia_status option[value=0]"),
   s_supervisor = $("#personalcirugia_status option[value=1]"),
   s_circulante = $("#personalcirugia_status option[value=2]"),
   s_instrumentista = $("#personalcirugia_status option[value=3]");

  $('#personalcirugia_tipo').bind('change', function(){
    var tipoPersonal = $("#personalcirugia_tipo");
    //console.log(tipoPersonal.val());

    switch (tipoPersonal.val()) {

      case "cirujano":
        esp.show();
        $status.show();
        turno.hide();
      s_ayudante.show();
      s_supervisor.show();
      s_circulante.hide();
      s_instrumentista.hide();
        break;

      case "anestesista":
        esp.hide();
        $status.show();
        turno.hide();
      s_ayudante.show();
      s_supervisor.show();
      s_circulante.hide();
      s_instrumentista.hide();
        break;

      case "enfermeria":
        esp.hide();
        $status.show();
        turno.show();
      s_ayudante.hide();
      s_supervisor.hide();
      s_circulante.show();
      s_instrumentista.show();

        break;

      default:
        esp.show();
        $status.show();
        turno.show();
      s_ayudante.show();
      s_supervisor.show();
      s_circulante.show();
      s_instrumentista.show();
    }

  });
})(jQuery);


</script>
<script>

  $(function() {
    $('textarea').elastic();

    $('.searchable').each(function() {
      var $this = $(this),
          source = '<?php echo url_for('@homepage', true)?>' + $this.data('url'),
          focus = $this.attr('id'),
          select = $this.data('select');

      $this.autocomplete({
      minLength: 2,
      delay: 350,
      source: source,
      focus: function(event, ui) {
        $this.val(ui.item.value);
        return false;
      },
      select: function(event, ui) {
        $(select).val(ui.item.id)
      }
      })

    });
 });


</script>
