<style>
  .addLink{
    display: inline;
    float: right;
    font-size: 0.9em;
    margin-right: 10px;
    text-decoration: none;
    width: 700px;
  }

<!--
  .formulario {
    float: left;
    background:#ebf4fb;;   
  }

  .formulario .area {
    float: left;
  }

  .formulario .label {
    float: left;
    font-size: bold;	
  }

  .formulario .field {	
    margin:0px 0 0px 0px;
    float: left;
  }
-->
</style>

<script type="text/javascript"> 
  function pregunta(){ 
    return confirm('¿Estas seguro de enviar este registro?'); 
  } 
  function saludo() {alert('Programación Exitosa')}
  function verificar() {alert('Verificar la hora')}
</script>


<div class="formulario clearfix">
<h1 style="color:#FFFFFF;">Busqueda Personalizada: </h1>


<form action="<?php echo url_for('agenda/busquedapersonalisada') ?>" style="display:inline; float:right;">
<div class="area cols06">
    <div class="label"><?php echo "Quirofano: " ?></div>
      <div class="field">
        <input type="text" id="busqueda" name="Quirofano" placeholder="Quirofano" style="width:120px">
      </div>
</div>

<div class="area cols06">
    <div class="label"><?php echo "Sala: " ?></div>
      <div class="field">
        <input type="text" id="busqueda" name="Sala" placeholder="Sala" style="width:120px">
      </div>
</div>


<div class="area cols06">
    <div class="label"><?php echo "Nombre: " ?></div>
      <div class="field">
        <input type="text" id="busqueda" name="Nombre" placeholder="Nombre" style="width:120px">
      </div>
</div>



<div class = "area cols03">
  <input type="submit" value="Buscar">
</div>
</form>

  

</div>
