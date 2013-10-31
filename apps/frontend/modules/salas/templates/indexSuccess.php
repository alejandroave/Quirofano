<!--<p>ola</p>-->
<?php foreach ($Quirofanos as $Quirofano): ?>
    <tr>
      <td><a href="<?php echo url_for('quirofano/show?slug='.$Quirofano->getSlug()) ?>"><?php echo $Quirofano->getNombre() ?></a></td>
      <td><a href="<?php echo url_for('quirofano/programar?slug='.$Quirofano->getSlug())  ?>">Programar Cirugia</a></td>
      <td><a href="<?php echo url_for('quirofano/diferidas?slug='.$Quirofano->getSlug())  ?>">Cirugias Diferidas</a></td>
      <td><a href="<?php echo url_for('quirofano/inspeccionar?slug='.$Quirofano->getSlug())  ?>">Salas</a></td>

    </tr>
    <?php endforeach; ?>
