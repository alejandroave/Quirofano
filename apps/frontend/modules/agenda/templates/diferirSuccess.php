<style>
  #idTag {
    background: #e1e279;
    border-radius: 5px;
    /*border: 1px solid black;*/
    box-shadow: 10px 10px 10px #999;
    margin-bottom: 10px;
    padding: 5px;
  }

  #idTag div {
    margin: 0px 5px;
  }

  #idTag .name {
    font-size: 1.8em;
  }

  #idTag .label {
    font-weight: bold;
  }
</style>

<?php slot('titulo') ?>
  <title>Diferir cirugia | SIGA-HU </title>
<?php end_slot() ?>



<div id="idTag">
  <div class="name"><?php echo $cirugia->getPacienteName() ?></div>
  <div><span class="label">Registro: </span><span><?php echo "registro del pasciente" ?></span></div>
</div>




<div id="alert">
<?php echo $sf_user->getFlash('obligar')?>
</div>

<div class="formulario clearfix">
  <form action="" method="POST">
  <h1>Diferir Cirugia</h1>
  <div class="area cols12">
    <div class="label">
      <?php echo $form['causa_diferido_id']->renderLabel() ?>
      <?php echo $form['causa_diferido_id']->renderError() ?>
    </div>
    <div class="field"><?php echo $form['causa_diferido_id'] ?></div>
  </div>
  <div class="area control">
    <?php echo $form->renderHiddenFields() ?>
    <input type="submit" value="Aceptar" />
  </div>
  </form>
</div>
