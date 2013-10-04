<!---
<h1>Agendas List</h1>

<?php echo $filtro ?>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Programacion</th>
      <th>Hora</th>
      <th>Ingreso</th>
      <th>Sala</th>
      <th>Quirofano</th>
      <th>Egreso</th>
      <th>Cie9mc</th>
      <th>Cie9mc</th>
      <th>Cx realizada</th>
      <th>Cx realizada</th>
      <th>Tipo cx</th>
      <th>Diagnostico</th>
      <th>Diagnostico</th>
      <th>Paciente name</th>
      <th>Paciente</th>
      <th>Edad</th>
      <th>Genero</th>
      <th>Genero</th>
      <th>Registro</th>
      <th>Servicio</th>
      <th>Anestesia</th>
      <th>Anestesia empleada</th>
      <th>Ev adversos anestesia</th>
      <th>Observaciones</th>
      <th>Requerimiento</th>
      <th>Req insumos</th>
      <th>Req hemoderiv</th>
      <th>Req laboratorio</th>
      <th>Req anestesico</th>
      <th>Status</th>
      <th>Causa diferido</th>
      <th>Solicitado</th>
      <th>Riesgoqx</th>
      <th>Contaminacionqx</th>
      <th>Eventoqx</th>
      <th>Complicaciones</th>
      <th>Val pre anestesica</th>
      <th>Reintervencion</th>
      <th>Permisos</th>
      <th>Tipo proc</th>
      <th>Atencion</th>
      <th>Tiempo fuera</th>
      <th>Procedencia</th>
      <th>Clasificacionqx</th>
      <th>Region px</th>
      <th>Extension px</th>
      <th>Anexo detalle</th>
      <th>Destino px</th>
      <th>Liberacion sala</th>
      <th>Tiempo est</th>
      <th>Riesgo qx pre</th>
      <th>Show in index</th>
      <th>Protocolo</th>
      <th>Cancelada</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Agendas as $Agenda): ?>
    <tr>
      <td><a href="<?php echo url_for('agenda/edit?id='.$Agenda->getId()) ?>"><?php echo $Agenda->getId() ?></a></td>
      <td><?php echo $Agenda->getProgramacion() ?></td>
      <td><?php echo $Agenda->getHora() ?></td>
      <td><?php echo $Agenda->getIngreso() ?></td>
      <td><?php echo $Agenda->getSalaId() ?></td>
      <td><?php echo $Agenda->getQuirofanoId() ?></td>
      <td><?php echo $Agenda->getEgreso() ?></td>
      <td><?php echo $Agenda->getCie9mc() ?></td>
      <td><?php echo $Agenda->getCie9mcId() ?></td>
      <td><?php echo $Agenda->getCxRealizada() ?></td>
      <td><?php echo $Agenda->getCxRealizadaId() ?></td>
      <td><?php echo $Agenda->getTipoCx() ?></td>
      <td><?php echo $Agenda->getDiagnostico() ?></td>
      <td><?php echo $Agenda->getDiagnosticoId() ?></td>
      <td><?php echo $Agenda->getPacienteName() ?></td>
      <td><?php echo $Agenda->getPacienteId() ?></td>
      <td><?php echo $Agenda->getEdad() ?></td>
      <td><?php echo $Agenda->getGenero() ?></td>
      <td><?php echo $Agenda->getGeneroId() ?></td>
      <td><?php echo $Agenda->getRegistro() ?></td>
      <td><?php echo $Agenda->getServicio() ?></td>
      <td><?php echo $Agenda->getAnestesiaId() ?></td>
      <td><?php echo $Agenda->getAnestesiaEmpleada() ?></td>
      <td><?php echo $Agenda->getEvAdversosAnestesia() ?></td>
      <td><?php echo $Agenda->getObservaciones() ?></td>
      <td><?php echo $Agenda->getRequerimiento() ?></td>
      <td><?php echo $Agenda->getReqInsumos() ?></td>
      <td><?php echo $Agenda->getReqHemoderiv() ?></td>
      <td><?php echo $Agenda->getReqLaboratorio() ?></td>
      <td><?php echo $Agenda->getReqAnestesico() ?></td>
      <td><?php echo $Agenda->getStatus() ?></td>
      <td><?php echo $Agenda->getCausaDiferidoId() ?></td>
      <td><?php echo $Agenda->getSolicitado() ?></td>
      <td><?php echo $Agenda->getRiesgoqxId() ?></td>
      <td><?php echo $Agenda->getContaminacionqxId() ?></td>
      <td><?php echo $Agenda->getEventoqxId() ?></td>
      <td><?php echo $Agenda->getComplicaciones() ?></td>
      <td><?php echo $Agenda->getValPreAnestesica() ?></td>
      <td><?php echo $Agenda->getReintervencion() ?></td>
      <td><?php echo $Agenda->getPermisos() ?></td>
      <td><?php echo $Agenda->getTipoProcId() ?></td>
      <td><?php echo $Agenda->getAtencionId() ?></td>
      <td><?php echo $Agenda->getTiempoFuera() ?></td>
      <td><?php echo $Agenda->getProcedencia() ?></td>
      <td><?php echo $Agenda->getClasificacionqx() ?></td>
      <td><?php echo $Agenda->getRegionPx() ?></td>
      <td><?php echo $Agenda->getExtensionPx() ?></td>
      <td><?php echo $Agenda->getAnexoDetalle() ?></td>
      <td><?php echo $Agenda->getDestinoPx() ?></td>
      <td><?php echo $Agenda->getLiberacionSala() ?></td>
      <td><?php echo $Agenda->getTiempoEst() ?></td>
      <td><?php echo $Agenda->getRiesgoQxPre() ?></td>
      <td><?php echo $Agenda->getShowInIndex() ?></td>
      <td><?php echo $Agenda->getProtocolo() ?></td>
      <td><?php echo $Agenda->getCancelada() ?></td>
      <td><?php echo $Agenda->getCreatedAt() ?></td>
      <td><?php echo $Agenda->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('agenda/new') ?>">New</a>
-->
<?php slot('titulo') ?>
  <title>Lista General de Quirofanos | SIGA-HU </title>
<?php end_slot() ?>

<h1>Quirofanos Activos</h1>

<ul id="navTabs">
  <li class="tab active"><a href="<?php echo url_for('agenda/index')?>">Quirofano Activos</a></li>
  <li class="tab"><a href="<?php echo url_for('agenda/ambulatorio')?>">Ambulatorio</a></li>
  <li class="tab"><a href="<?php echo url_for('agenda/tquirofanos')?>">Todos</a></li>
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
