<script type="text/javascript" src="/js/global/jquery.ptTimeSelect.js"></script>    <!-- 1.8.2 -->
<link rel="stylesheet" type="text/css" href="/css/global/jquery.ptTimeSelect.css" />


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
  
<div class="formulario clearfix">

<h1>Reprogramar Cirugia</h1>

<?php include_partial('programarForm', array('form' => $form))?>

</div>


