<h1>Salas de <?php echo $sf_request->getParameter('slug')?></h1>


<?php echo link_to('Volver', 'agenda/index')?>

<ul id="navTabs">
  <!--<li class="tab active"><a href="/quirofano/todas/1">Todos</a></li>-->
  <!-- <li class="tab "><a href="/quirofano/activo/1">Activos</a></li>
  <li class="tab "><a href="/quirofano/ambulatorio/1">Ambulatorios</a></li> -->
</ul>

<div id="camasPanel">
  <table width="100%">
    <thead>
    <tr id="tabla">
      <th>Nombre</th>
      <th>Activo</th>
      <th>Bloqueado</th>
      <th>Calendario</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($salas as $sala): ?>
    <tr>
      <td><a href="<?php echo url_for('quirofano/show?slug='.$sala->getSlug()) ?>"><?php echo $sala->getNombre() ?></a></td>
      
      <td>
      <?php 
      if ($sala->getActivo() == 1)
      {
	echo "si";
      }else 
      {
	echo "no";
      };
      ?>
      </td>
      
      <td>
      <?php
      if ($sala->getBloqueado() == 1)
      {
        echo "si";
      }else
      {
        echo "no";
      };
      ?>
      </td>
      <td>
        <a href="<?php echo url_for('agenda/calendar?slug='.$sala->getSlug()) ?>">Calendario</a>
      </td>

    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
