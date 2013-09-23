    <tr>
    <td style="width: 42px">
      <div class="icons clearfix">
        <div class="tipocx" title="<?php echo $cirugia->getTipoProcId() ?>"></div>
        <div class="convenio" title="<?php echo 'atencion'?>"></div>
      </div>
    </td>
    <td><div class="atraso" title="<?php echo 'tiempo diferido'?>"></div></td>
    <td><?php echo $cirugia->getProgramacion('Y-m-d') ?></td></div></td>
    <td><?php echo $cirugia->getHora()?></td>
    <td><?php echo $cirugia->getSalaquirurgica()->getNombre() ?></td>
    <td><?php echo $cirugia->getRegistro() ?></td>
    <td><?php echo $cirugia->getPacienteName() ?></td>
    <td><?php echo $cirugia->getDiagnostico() ?></td>
    <td><?php echo 'procedimiento'?></td>
    <td><?php echo $cirugia->getmediconame()?></td>
    <!-- <td><?php //echo $cirugia->getClasses() ?></td> -->
    <td>
    <?php if($cirugia->getStatus() == NULL &&  $cirugia->getSolicitado() != 1): ?>
     <a href="<?php echo url_for('agenda/pxsolicitado?id='.$cirugia->getId()) ?>" title="Paciente en preoperatorio"><div class="button"></div></a>
     <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
     <a href="<?php echo url_for('agenda/transoperatorio?id='.$cirugia->getId()) ?>" title="Iniciar cirugía"><div class="iniciar"></div></a>
     <a href="<?php echo url_for('agenda/cancelar?id='.$cirugia->getId()) ?>" title="Cancelar cirugía"><div class="cancelar"></div></a>
  
  <?php elseif($cirugia->getStatus() == NULL &&  $cirugia->getSolicitado() == 1): ?>
     <a href="<?php echo url_for('agenda/pxsolicitado?id='.$cirugia->getId()) ?>" title="Paciente en preoperatorio"><div class="preoperacion"></div></a>
     <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
     <a href="<?php echo url_for('agenda/transoperatorio?id='.$cirugia->getId()) ?>" title="Iniciar cirugía"><div class="iniciar"></div></a>
     <a href="<?php echo url_for('agenda/cancelar?id='.$cirugia->getId()) ?>" title="Cancelar cirugía"><div class="cancelar"></div></a>

  <?php elseif($cirugia->getStatus() != NULL ): ?>
<!--  no existe esta atrasado  -->
      <a href="<?php echo url_for('agenda/diferir?id='.$cirugia->getId()) ?>" title="Diferir Cirugia"><div class="diferir"></div></a>
      <a href="<?php echo url_for('agenda/cancelar?id='.$cirugia->getId()) ?>" title="Cancelar cirugía"><div class="cancelar"></div></a>
  <?php elseif($cirugia->getStatus() <= 10 ): ?>
      <a href="<?php echo url_for('agenda/reprogramar?slug='.$slug.'&id='.$cirugia->getId()) ?>" rel="facebox" title="Modificar"><div class="modificar"></div></a>
      <a href="<?php echo url_for('agenda/postoperatorio?id='.$cirugia->getId()) ?>" title="Cirugia Realizada"><div class="realizada"></div></a>
      <a href="<?php echo url_for('agenda/agregarpersonal?id='.$cirugia->getid())?>" title="Cambio de personal"><div class="cambio"></div></a>
  <?php elseif($cirugia->getStatus() <= 100 ): ?>
      <a href="<?php echo url_for('agenda/postoperatorio?id='.$cirugia->getId()) ?>" title="Cirugia Realizada"><div class="realizada"></div></a>
      <a href="<?php echo url_for('agenda/agregarpersonal?id='.$cirugia->getid())?>" title="Cambio de personal"><div class="cambio"></div></a>
    <?php endif; ?>

    </td>
  </tr>

