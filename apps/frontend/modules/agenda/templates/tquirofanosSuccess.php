<?php slot('titulo') ?>
  <title>Lista General de Quirofanos | SIGA-HU </title>
<?php end_slot() ?>

<h1>Lista de Quirofanos </h1>

<ul id="navTabs">
  <li class="tab"><a href="<?php echo url_for('agenda/index')?>">Quirofano Activos</a></li>
  <li class="tab"><a href="<?php echo url_for('agenda/ambulatorio')?>">Ambulatorio</a></li>
  <li class="tab active"><a href="<?php echo url_for('agenda/tquirofanos')?>">Todos</a></li>
</ul>

<div id="camasPanel">
  <table width="100%">
    <thead>
    <tr id="tabla">
      <th>Nombre</th>
      <th>Programar</th>
      <th>Diferidas</th>
      <th>Inspeccionar</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($Quirofanos as $Quirofano): ?>
    <tr>
      <td><a href="<?php echo url_for('agenda/show?slug='.$Quirofano->getSlug().'&date='.date('Y-m-d', strtotime("now")))?>"><?php echo $Quirofano->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('agenda/programar?slug='.$Quirofano->getSlug())  ?>">Programar Cirugia</a></td>
      <td><a href="<?php echo url_for('agenda/diferidas?slug='.$Quirofano->getSlug())  ?>">Cirugias Diferidas</a></td>
      <td><a href="<?php echo url_for('agenda/inspeccionar?slug='.$Quirofano->getSlug())  ?>">Salas</a></td>

    </tr>
    <?php endforeach; ?>

    </tbody>
  </table>
  <!--<a href="<?php echo url_for('quirofano/agendadiaria')?>">Agenda del Dia</a>
  <a href="<?php echo url_for('agenda/programar')?>">Programar cirugia</a>-->
</div>
