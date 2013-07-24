<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Pass</th>
      <th>Tipo</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Users as $User): ?>
    <tr>
      <td><?php echo $User->getNombre() ?></td>
      <td><?php echo $User->getPass() ?></td>
      <td><?php echo $User->getTipo() ?></td>
      <td><a href="<?php echo url_for('user/edit?id='.$User->getId()) ?>"><?php echo $User->getId() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
