
<html>
<p>¿Estas seguro que deseas cancelar esta cirugia?</p>

<form action="<?php echo url_for('agenda/cancelar?id='.$cirugia->getId() )?>" method="POST">
  <input type="submit" value="CANCELAR">
</form>
<a href="<?php echo url_for('agenda/show?slug='.$cirugia->getQuirofano()->getSlug())?>">Regresar a la agenda</a>

</html>
