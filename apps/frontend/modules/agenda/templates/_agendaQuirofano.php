<?php if($cirugia->getCancelada() == false): ?>
  <tr class="<?php echo $cirugia->getClasses() ?>">
<?php else: ?>
 <tr class="diferido cxtipo_1 convenio1 diferida">
<?php endif ?>  

    <td style="width: 42px">
      <div class="icons clearfix">
        <div class="tipocx" title="<?php echo $cirugia->getTipoProcId() ?>"></div>
        <div class="convenio" title="<?php echo $cirugia->getatencionId() ?>"></div>
      </div>
    </td>
 
    <?php if($cirugia->getCancelada() == false): ?>
    <td><div class="atraso" title="<?php echo $cirugia->getTiempoDiferido() ?>"></div></td>
    <?php else: ?>
    <td></td>
    <?php endif ?>  

    <td><?php echo $cirugia->getProgramacion('Y-m-d') ?></td></div></td>
    <td><?php echo $cirugia->getHora()?></td>
    <td><?php echo $cirugia->getSalaquirurgica()->getNombre() ?></td>
    <td><?php echo $cirugia->getRegistro() ?></td>
    <td><?php echo $cirugia->getPacienteName() ?></td>
    <td><?php echo $cirugia->getDiagnostico() ?></td>
    <td><?php 
      $i = 1;
      foreach ($cirugia->getProcedimientocirugias() as $procedimiento) {
         echo "Procedimiento: " .$i++ ." id = ".$procedimiento->getId() ." cie9mc = ".$procedimiento->getcie9mc();
         echo " region = ".$procedimiento->getregion() ." detalles = ".$procedimiento->getdetalles();
         echo " servicio = ".$procedimiento->getservicioId();
         echo "<br>";
      }
    ?></td>

    <td><?php echo $cirugia->getPrograma() ?></td>
     <td>
    <?php if($cirugia->getCancelada() == true): ?>
      
    <?php elseif($cirugia->getStatus() < 0 ): ?>
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
    <?php endif; ?>

    </td>
  </tr>

