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

<!-- scripts para mostrar alertas-->
<script type="text/javascript"> 
  function pregunta(){ 
    return confirm('¿Estas seguro de enviar este registro?'); 
  } 
  function saludo() {alert('Programación Exitosa')}
  function verificar() {alert('Verificar la hora')}
</script>
<!-- Scripts para mostrar alertas-->

<!-- Mostrar alerta-->
<?php if ($sf_user->hasFlash('notice')): ?>
<script type="text/javascript">
function start() {verificar()}
window.onload = start;
</script>
<?php endif;?>
<!-- Mostrar alerta-->


<form id='target' method="POST" onsubmit="return pregunta();">
<!-- <form method="POST" action="<?php //echo url_for('quirofano/programar?slug='.$Quirofano->getSlug()) ?>">   -->
<div class="area cols03">
    <div class="label"><?php echo $form['sala_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['sala_id']->renderError() ?>
      <?php echo $form['sala_id'] ?>
    </div>
  </div>

<div class="area cols02">
    <div class="label"><?php echo $form['programacion']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['programacion']->renderError() ?>
      <?php echo $form['programacion'] ?>
    </div>
  </div>


<div class="area cols02">
    <div class="label"><?php echo $form['hora']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['hora']->renderError() ?>
      <?php echo $form['hora'] ?>
    </div>
  </div>


<div class="area cols02">
    <div class="label"><?php echo $form['tiempo_est']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['tiempo_est']->renderError() ?>
      <?php echo $form['tiempo_est'] ?>
    </div>
  </div>


  <div class="area cols03">
    <div class="label"><?php echo $form['tipo_proc_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['tipo_proc_id']->renderError() ?>
      <?php echo $form['tipo_proc_id'] ?>
    </div>
  </div>


<div class="area cols03">
    <div class="label"><?php echo $form['registro']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['registro']->renderError() ?>
      <?php echo $form['registro'] ?>
    </div>
  </div>



  <div class="area cols09">
    <div class="label"><?php echo $form['paciente_name']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['paciente_name']->renderError() ?>
      <?php echo $form['paciente_name'] ?>
    </div>
  </div>


<div class="area cols03">
    <div class="label"><?php echo $form['edad']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['edad']->renderError() ?>
      <?php echo $form['edad'] ?>
    </div>
  </div>



  <div class="area cols03">
    <div class="label"><?php echo $form['genero']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['genero']->renderError() ?>
      <?php echo $form['genero'] ?>
    </div>
  </div>


<div class="area cols03">
    <div class="label"><?php echo $form['procedencia']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['procedencia']->renderError() ?>
      <?php echo $form['procedencia'] ?>
    </div>
  </div>



  <div class="area cols03">
    <div class="label"><?php echo $form['servicio']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['servicio']->renderError() ?>
      <?php echo $form['servicio'] ?>
    </div>
  </div>

<div class="area cols06">
    <div class="label"><?php echo $form['diagnostico']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['diagnostico']->renderError() ?>
      <?php echo $form['diagnostico'] ?>
    </div>
  </div>

 
  <div class="area cols03 horizontal">
    <div class="label"><?php echo $form['protocolo']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['protocolo']->renderError() ?>
      <?php echo $form['protocolo'] ?>
    </div>
  </div>

 <div class="area cols03 horizontal">
    <div class="label"><?php echo $form['reintervencion']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['reintervencion']->renderError() ?>
      <?php echo $form['reintervencion'] ?>
    </div>
  </div>
<!-- personal -->

  <div class="area cols09">
    <div class="label"><?php echo $form['programa']['personal_nombre']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['programa']['personal_nombre']->renderError() ?>
      <?php echo $form['programa']['personal_nombre'] ?>
    </div>
  </div>
<!-- personal -->
<div class="area cols03">
    <div class="label"><?php echo $form['atencion_id']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['atencion_id']->renderError() ?>
      <?php echo $form['atencion_id'] ?>
    </div>
  </div>


<!--Esperemos que funque-->
 <?php foreach ($form['Procedimientocirugia'] as $subform) :?>
  <div class="formCie9">
  <?php echo $subform;?>
  </div>
  <?php endforeach; ?>
<!--Esperemos que funque-->
 
  <div class="area cols04">
    <div class="label"><?php echo $form['riesgo_qx_pre']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['riesgo_qx_pre']->renderError() ?>
      <?php echo $form['riesgo_qx_pre'] ?>
    </div>
  </div>

  <div class="area cols04">
    <div class="label"><?php echo $form['req_insumos']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_insumos']->renderError() ?>
      <?php echo $form['req_insumos'] ?>
    </div>
  </div>

  <div class="area cols04">
    <div class="label"><?php echo $form['req_anestesico']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_anestesico']->renderError() ?>
      <?php echo $form['req_anestesico'] ?>
    </div>
  </div>

<div class="area cols04">
    <div class="label"><?php echo $form['req_hemoderiv']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_hemoderiv']->renderError() ?>
      <?php echo $form['req_hemoderiv'] ?>
    </div>
  </div>

  <div class="area cols04">
    <div class="label"><?php echo $form['req_laboratorio']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['req_laboratorio']->renderError() ?>
      <?php echo $form['req_laboratorio'] ?>
    </div>
  </div>

  <div class="area cols04">
    <div class="label"><?php echo $form['requerimiento']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['requerimiento']->renderError() ?>
      <?php echo $form['requerimiento'] ?>
    </div>
  </div>


<!--
<div class="area cols07">
    <div class="label"><?php echo $form['medico_name']->renderLabel() ?></div>
    <div class="field">
      <?php echo $form['medico_name']->renderError() ?>
      <?php echo $form['medico_name'] ?>
    </div>
</div>
-->

<div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Guardar">
  </div>
</form><!--Termina form-->

<!--  <div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Guardar">
  </div>-->


<script>
$('#target').submit(function() {
if(!confirm(" Esta seguro ? "))
{
}}
</script>

<script>
  $('#add_newProcedimientocirugia_link').addClass('addLink');
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
      /*.data( "autocomplete" )._renderItem = function( ul, item ) {
        return $( "<li></li>" )
          .data( "item.autocomplete", item )
          .append( "<a>" + item.label + "</a>" )
          .appendTo( ul );
      }; /**/
    });
    $('.searchpx').each(function() {
      var $this = $(this),
          source = '<?php echo url_for('@homepage', true)?>' + $this.data('url'),
          focus = $this.attr('id'),
          select = $this.data('select');
          /* console.log(select); /**/
      $this.autocomplete({
        minLength: 2,
        delay: 350,
        source: source,
        focus: function(event, ui) {
          if ($this.attr('id') == 'agenda_registro') {
            $this.val(ui.item.registro);
          }
          else {
            $this.val(ui.item.value);
          }
          return false;
        },
        select: function(event, ui) {
          $('#agenda_paciente_name').val(ui.item.name);
          $('#agenda_edad').val(ui.item.edad);
          $('#agenda_genero').val(ui.item.sexo);
          $('#agenda_registro').val(ui.item.registro);
          $('#agenda_paciente_id').val(ui.item.id);
          return false;
        }
      })
    });

    // todo: migrar jquery a la version 1.7
    $('.formCie9').live('keyup.autocomplete', function() {
      $(this).each(function() {
        var $target = $(this).find('.target');

        $(this).find('.autocompleteCie9').autocomplete({
          source: '<?php echo url_for('api/cie9mc', true)?>',
          focus: function(event, ui) {
            $(this).val(ui.item.value);
            return false;
          },
          select: function(event, ui) {
            $($target).val(ui.item.id)
          }
        });
      });
    });
  });
</script>
