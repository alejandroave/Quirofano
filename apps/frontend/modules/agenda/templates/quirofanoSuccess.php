<h1>Agendas List</h1>

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
    <?php foreach ($Cirugias as $Cirugia): ?>
    <tr>
      <td><a href="<?php echo url_for('agenda/edit?id='.$Cirugia->getId()) ?>"><?php echo $Cirugia->getId() ?></a></td>
      <td><?php echo $Cirugia->getProgramacion() ?></td>
      <td><?php echo $Cirugia->getHora() ?></td>
      <td><?php echo $Cirugia->getIngreso() ?></td>
      <td><?php echo $Cirugia->getSalaId() ?></td>
      <td><?php echo $Cirugia->getQuirofanoId() ?></td>
      <td><?php echo $Cirugia->getEgreso() ?></td>
      <td><?php echo $Cirugia->getCie9mc() ?></td>
      <td><?php echo $Cirugia->getCie9mcId() ?></td>
      <td><?php echo $Cirugia->getCxRealizada() ?></td>
      <td><?php echo $Cirugia->getCxRealizadaId() ?></td>
      <td><?php echo $Cirugia->getTipoCx() ?></td>
      <td><?php echo $Cirugia->getDiagnostico() ?></td>
      <td><?php echo $Cirugia->getDiagnosticoId() ?></td>
      <td><?php echo $Cirugia->getPacienteName() ?></td>
      <td><?php echo $Cirugia->getPacienteId() ?></td>
      <td><?php echo $Cirugia->getEdad() ?></td>
      <td><?php echo $Cirugia->getGenero() ?></td>
      <td><?php echo $Cirugia->getGeneroId() ?></td>
      <td><?php echo $Cirugia->getRegistro() ?></td>
      <td><?php echo $Cirugia->getServicio() ?></td>
      <td><?php echo $Cirugia->getAnestesiaId() ?></td>
      <td><?php echo $Cirugia->getAnestesiaEmpleada() ?></td>
      <td><?php echo $Cirugia->getEvAdversosAnestesia() ?></td>
      <td><?php echo $Cirugia->getObservaciones() ?></td>
      <td><?php echo $Cirugia->getRequerimiento() ?></td>
      <td><?php echo $Cirugia->getReqInsumos() ?></td>
      <td><?php echo $Cirugia->getReqHemoderiv() ?></td>
      <td><?php echo $Cirugia->getReqLaboratorio() ?></td>
      <td><?php echo $Cirugia->getReqAnestesico() ?></td>
      <td><?php echo $Cirugia->getStatus() ?></td>
      <td><?php echo $Cirugia->getCausaDiferidoId() ?></td>
      <td><?php echo $Cirugia->getSolicitado() ?></td>
      <td><?php echo $Cirugia->getRiesgoqxId() ?></td>
      <td><?php echo $Cirugia->getContaminacionqxId() ?></td>
      <td><?php echo $Cirugia->getEventoqxId() ?></td>
      <td><?php echo $Cirugia->getComplicaciones() ?></td>
      <td><?php echo $Cirugia->getValPreAnestesica() ?></td>
      <td><?php echo $Cirugia->getReintervencion() ?></td>
      <td><?php echo $Cirugia->getPermisos() ?></td>
      <td><?php echo $Cirugia->getTipoProcId() ?></td>
      <td><?php echo $Cirugia->getAtencionId() ?></td>
      <td><?php echo $Cirugia->getTiempoFuera() ?></td>
      <td><?php echo $Cirugia->getProcedencia() ?></td>
      <td><?php echo $Cirugia->getClasificacionqx() ?></td>
      <td><?php echo $Cirugia->getRegionPx() ?></td>
      <td><?php echo $Cirugia->getExtensionPx() ?></td>
      <td><?php echo $Cirugia->getAnexoDetalle() ?></td>
      <td><?php echo $Cirugia->getDestinoPx() ?></td>
      <td><?php echo $Cirugia->getLiberacionSala() ?></td>
      <td><?php echo $Cirugia->getTiempoEst() ?></td>
      <td><?php echo $Cirugia->getRiesgoQxPre() ?></td>
      <td><?php echo $Cirugia->getShowInIndex() ?></td>
      <td><?php echo $Cirugia->getProtocolo() ?></td>
      <td><?php echo $Cirugia->getCancelada() ?></td>
      <td><?php echo $Cirugia->getCreatedAt() ?></td>
      <td><?php echo $Cirugia->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('agenda/new') ?>">New</a>

<?php slot('titulo') ?>
  <title>Lista Global de Quirofanos | SIGA-HU </title>
<?php end_slot() ?>

<h1>Lista de Quirofanos</h1>

<ul id="navTabs">
  <li class="tab active"><a href="/quirofano/activo/1">Activos</a></li>
  <li class="tab "><a href="/quirofano/ambulatorio/1">Ambulatorios</a></li>
  <li class="tab "><a href="/quirofano/todas/1">Todos</a></li>
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
    <?php foreach ($Cirugias as $Cirugia): ?>
    <tr>
      <td><a href="<?php //echo url_for('quirofano/show?slug='.$Quirofano->getSlug()) ?>"><?php //echo $Quirofano->getNombre() ?></a></td>
      <td><a href="<?php //echo url_for('quirofano/programar?slug='.$Quirofano->getSlug())  ?>">Programar Cirugia</a></td>
      <td><a href="<?php //url_for('quirofano/diferidas?slug='.$Quirofano->getSlug())  ?>">Cirugias Diferidas</a></td>
      <td><a href="<?php //echo url_for('quirofano/inspeccionar?slug='.$Quirofano->getSlug())  ?>">Salas</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  <a href="<?php echo url_for('quirofano/agendadiaria')?>">Agenda Global del Dia</a>
</div>
