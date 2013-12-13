<?php use_stylesheet('/css/global/styleAgenda.css')?>
<?php use_javascript('/js/global/facebox.js')?>
<?php use_stylesheet('/css/global/facebox.css')?>

<h1>Resultados de la búsqueda: <?php echo $term ?></h1>

<div id="headtable">
<a class="button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" href="<?php echo url_for('agenda/index') ?>">&nbsp;&nbsp;Lista general de quirofanos&nbsp;&nbsp;</a>
<form action="<?php echo url_for('agenda/busqueda') ?>" style="display:inline; float:right;">
  <input type="text" id="busqueda" name="term" placeholder="Buscar" value="<?php echo $term ?>" style="width:120px">
  <input type="submit" value=">>">
</form>
</div>

<?php if( count($cirugias) > 0 ): ?>

<?php slot('titulo') ?>
  <title>Resultados de la búsqueda: <?php echo $term ?> | SIGA-HU </title>
<?php end_slot() ?>
<?php use_stylesheet('/css/global/widescreen.css')?>

<div id="camasPanel">
  <table id="agenda" border="0" width="100%" cellspacing="0">
   <tr>
    <th colspan="2">Iconos</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Quirofano</th>
    <th>Sala</th>
    <th>Registro</th>
    <th>Paciente</th>
    <th>Diagnóstico</th>
    <th>Procedimiento / Cirugía</th>
    <th>Médico que programo</th>
    <th>Acciones</th>
  </tr>
</div>
<?php foreach($cirugias as $cirugia): ?>

  <tr class="<?php echo $cirugia->getClasses() ?>">
    <td style="width: 42px">
      <div class="icons clearfix">
        <div class="tipocx" title="<?php echo $cirugia->getTipoProcId() ?>"></div>
        <div class="convenio" title="<?php echo "atencion" ?>"></div>
      </div>
    </td>
    <td><div class="atraso" title="<?php echo $cirugia->getTiempoDiferido() ?>"></div></td>
    <td><?php echo $cirugia->getProgramacion('d-m-Y') ?></td>
    <td><?php echo $cirugia->getHora('H:i') ?></td>
    <td><?php echo $cirugia->getQuirofano() ?></td>
    <td>
      <!-- <a href="<?php //echo url_for('quirofano/show?sala='.$cirugia->getSalaquirurgica()->getSlug())?>"> -->
        <?php echo $cirugia->getSalaquirurgica()->getNombre() ?>
      <!-- </a> -->
    </td>
    <td><?php echo $cirugia->getRegistro() ?></td>
    <td><?php echo $cirugia->getPacienteName() ?></td>
    <td><?php echo $cirugia->getDiagnostico() ?></td>
    <td><?php echo $cirugia->getCie9mc() ?></td>
    <td><?php echo "programa"?></td>
    <!-- <td><?php //echo $cirugia->getClasses() ?></td> -->
    <td>
      <!--
    <?php if($cirugia->getStatus() < 10 ): ?>
      <a href="<?php echo url_for('quirofano/pxsolicitado?id='.$cirugia->getId()) ?>" title="Paciente en preoperatorio"><div class="button"></div></a>
      <a href="<?php echo url_for('quirofano/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
      <a href="<?php echo url_for('quirofano/transoperatorio?id='.$cirugia->getId()) ?>" title="Iniciar cirugía"><div class="iniciar"></div></a>
      <a href="<?php echo url_for('quirofano/diferir?id='.$cirugia->getId()) ?>" title="Diferir Cirugia"><div class="diferir"></div></a>
      <a href="#" ><div class="cancelar"></div></a>
    <?php else: ?>
      <a href="<?php echo url_for('quirofano/postoperatorio?id='.$cirugia->getId()) ?>" title="Cirugia Realizada"><div class="realizada"></div></a>
      <a href="<?php echo url_for('quirofano/agregarpersonal?id='.$cirugia->getid())?>" title="Cambio de personal"><div class="cambio"></div></a>
    <?php endif; ?> -->

<?php if($cirugia->getStatus() < 0 ): ?>
      <a href="<?php echo url_for('agenda/pxsolicitado?id='.$cirugia->getId()) ?>" title="Paciente en preoperatorio"><div class="button"></div></a>
      <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
      <!--<a href="<?php echo url_for('agenda/transoperatorio?id='.$cirugia->getId()) ?>" title="Iniciar cirugía"><div class="iniciar"></div></a>-->
      <a href="<?php echo url_for('agenda/cancelar?id='.$cirugia->getId()) ?>" title="Cancelar cirugía"><div class="cancelar"></div></a>
    <?php elseif($cirugia->getStatus() < 10 ): ?>
      <?php if (!$cirugia->estaAtrasado() || $sf_user->getAttribute('categoriaId', null, 'profile') >= 10):?>
      <a href="<?php echo url_for('agenda/pxsolicitado?id='.$cirugia->getId()) ?>" title="Paciente en preoperatorio"><div class="button"></div></a>
      <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
      <a href="<?php echo url_for('agenda/transoperatorio?id='.$cirugia->getId()) ?>" title="Iniciar cirugía"><div class="iniciar"></div></a>
      <?php endif;?>

      <?php if ($cirugia->estaAtrasado() == true):?>
       <a href="<?php echo url_for('agenda/pxsolicitado?id='.$cirugia->getId()) ?>" title="Paciente en preoperatorio"><div class="button"></div></a>
      <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
     <!-- <a href="<?php echo url_for('agenda/transoperatorio?id='.$cirugia->getId()) ?>" title="Iniciar cirugía"><div class="iniciar"></div></a>-->
      <?php endif;?>
      <a href="<?php echo url_for('agenda/diferir?id='.$cirugia->getId()) ?>" title="Diferir Cirugia"><div class="diferir"></div></a>
      <a href="<?php echo url_for('agenda/cancelar?id='.$cirugia->getId()) ?>" title="Cancelar cirugía"><div class="cancelar"></div></a>


  <?php elseif($cirugia->getStatus() <= 10 ): ?>
     <!-- <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>-->
      <a href="<?php echo url_for('agenda/postoperatorio?id='.$cirugia->getId()) ?>" title="Cirugia Realizada"><div class="realizada"></div></a>
      <a href="<?php echo url_for('agenda/agregarpersonal?id='.$cirugia->getid())?>" title="Cambio de personal"><div class="cambio"></div></a>
  <?php elseif($cirugia->getStatus() <= 100 ): ?>
      <a href="<?php echo url_for('agenda/postoperatorio?id='.$cirugia->getId()) ?>" title="Cirugia Realizada"><div class="realizada"></div></a>
<!--      <a href="<?php echo url_for('agenda/agregarpersonal?id='.$cirugia->getid())?>" title="Cambio de personal"><div class="cambio"></div></a>-->
    <?php endif; ?>    </td>
  </tr>

<?php endforeach; ?>
</table>

<script>
  /*$(function(){
    $('a[rel*=facebox]').facebox({
      overlay: true,
      opacity: 0.75
    });
  }); /**/
</script>

<?php else: ?>
<?php slot('titulo') ?>
  <title>Sin coincidencias para  <?php echo $term ?> | SIGA-HU </title>
<?php end_slot() ?>
  <p>No se encontraron coincidencias, verifica los datos y vuelve a intentarlo </p>

<?php endif; ?>
