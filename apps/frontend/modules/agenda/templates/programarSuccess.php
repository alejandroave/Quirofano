<html>
<script type="text/javascript" src="/js/global/jquery.ptTimeSelect.js"></script>    <!-- 1.8.2 -->
<link rel="stylesheet" type="text/css" href="/css/global/jquery.ptTimeSelect.css" />
<style>
/* Mientras podemos hacer botones con jQueryUI usamos css */

.menubar a {
  background: white;
  border: 1px solid black;
  color: blue;
  margin: 0 0 3px 0;
  padding: 2px 4px;
  text-decoration: none;
}

.menubar a:hover {
  background: lightgray;
}
</style>

  <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->

<!-- Para poner calendario-->
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    //$( "#format" ).change(function() {
    $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd");
    //});
  });
  </script> 
<!-- Para poner calendario-->

<!-- Para poner reloj-->
<script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $("#datahora").ptTimeSelect();
        });
</script>

<script type="text/javascript">
$(function()
{
            $("#tiest").timepicker({ 'timeFormat': 'H:i:s' });
});
</script>


<!-- Para poner reloj-->

<div class="menubar">
  <a href="<?php echo url_for('agenda/show?slug='.$quirofano->getSlug()) ?>">Agenda de <?php echo $quirofano ?></a>
</div>

<div class="formulario clearfix">
<h1 style="color:#FFFFFF;">Programar Cirugia</h1>
<?php include_partial('programarForm', array('form' => $form, 'Quirofano' => $quirofano)) ?>
</div>

</html>
