$(function() {

  function calcula(){
    var peso = $("#efsv_peso").val();
    var altura = $("#efsv_estatura").val();
    
    if (altura > 0) {
      var imc = peso / (altura ^ 2);
      $("#efsv_imc").val(imc);
    }
  };

  $("#efsv_imc").attr("disabled","disabled");
  
  $("#efsv_peso").keyup(function() {
    calcula();
  });
  
  $("#efsv_estatura").keyup(function() {
    var valor = $(this).val();
    if (valor > 100) {
      $(this).val(valor/100);
    }
  }).keyup(function() {
    calcula();
  });
});

