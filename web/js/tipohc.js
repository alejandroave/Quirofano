  $(function() {
    $("#tipo_modulos").hide();
    $("#usados, #disponibles").addClass('modulelist');
    $("#disponibles").addClass('disponibles');
    $("#disponibles li").addClass('ui-state-default');

    var modulos = $('#tipo_modulos').val();
    if (!modulos == "") {
      arreglo = modulos.split("\n");
      for (var i=0; i < arreglo.length; i++) {
        $("#usados").append("<li class=\"ui-state-default\" id=" + arreglo[i] + ">" + arreglo[i] + "</li>");
      }
    $('#tipo_modulos').val("");
    }

    $("#usados, #disponibles").sortable({
      forcePlaceholderSize: true,
      connectWith: '.modulelist',
      placeholder: 'ui-state-highlight'
    }).disableSelection();

    $("form#tipohc").submit(function() {
      var serie = $("#usados").sortable('toArray');
      var contenido = serie.join("\n");
      $("#tipo_modulos").val(contenido);
    });

    $('a[rel=facebox]').facebox({
      overlay: true,
      opacity: 0.75,
      closeImage   : '/css/global/facebox/closelabel.png',
      loadingImage   : '/css/global/facebox/loading.gif',
    });
  });
