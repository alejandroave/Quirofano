  /*$(document).ready(function() {
      $('a#opciones').pageSlide({
          width: "300px"
      });
  }); */
  
  $(document).ready(function() {
    $('#bloqueo').dialog({
      draggable: false,
      closeOnEscape: false,
      overlay: {backgroundColor: '#000',opacity: 0.7},
      resizable: false,
      bgiframe: true,
      modal: true,
      autoOpen: false,
        buttons: {
          'Aceptar': function() {
            if ($('#pass').val() =='mesostel'){
              $('#bloqueo').dialog('close');
            }
          }},
      open: function (event, ui) {
        $('#pass').focus();
      }
    })
    
    $('#bloquear').click(function() {
      $('#bloqueo').dialog('open');
    });
  });
