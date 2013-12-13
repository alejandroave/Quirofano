<div class="formulario clearfix">
<h1 style="color:#FFFFFF;">Busqueda Personalizada: </h1>


<form action="<?php echo url_for('agenda/busquedapersonalisada') ?>" style="display:inline; float:right;">
<div class="area cols03">
    <div class="label"><?php echo "Quirofano: " ?></div>
      <div class="field">
        <input type="text" id="busqueda" name="Quirofano" placeholder="Quirofano" style="width:120px">
      </div>
</div>

<div class="area cols03">
    <div class="label"><?php echo "Sala: " ?></div>
      <div class="field">
        <input type="text" id="busqueda" name="Sala" placeholder="Sala" style="width:120px">
      </div>
</div>


<div class="area cols06">
    <div class="label"><?php echo "Nombre: " ?></div>
      <div class="field">
        <input type="text" id="busqueda" name="Nombre" placeholder="Nombre">
      </div>
</div>

<div class="area cols03">
    <div class="label"><?php echo "Mes: " ?></div>

<select id= "busqueda "name="Mes" style = "width:120px"> 
   <option value="01">Enero</option> 
   <option value="02">Febrero</option> 
   <option value="03">Marzo</option>
   <option value="04">Abril</option>
   <option value="05">Mayo</option>
   <option value="06">Junio</option>
   <option value="07">Julio</option>
   <option value="08">Agosto</option>
   <option value="09">Septiembre</option>
   <option value="10">Octubre</option>
   <option value="11">Noviembre</option>
   <option value="12">Diciembre</option> 
</select> 
</div>

<div class="area cols03">
    <div class="label"><?php echo "Año: " ?></div>
      <div class="field">
        <input type="number" id="busqueda" name="Año" placeholder="Año" style="width:120px"  min="2013" maxlength="4">
      </div>
</div>

<div class="area control">
    <input type="submit" value="Buscar">
</div>


</form>

  

</div>
