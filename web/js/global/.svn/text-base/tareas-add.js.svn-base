  $(function() {
  // Variables a usar en el Script
    var stack_bottomright = {"dir1": "up", "dir2": "left", "firstpos1": 15, "firstpos2": 15};

    var indicacion = $('#tarea_indicacion').parents('div.area');
    var dosis = $('#tarea_cantidad').parents('div.area');
    var periodico = $('#tarea_periodicidad').parents('div.area');
    var descripcion = $('#tarea_descripcion').parents('div.area');
    var submit = $('input[type=submit]').parents('div.area');

    var resetHide = function() {
      $(indicacion).removeClass('full half tercio').addClass('full');
      $(dosis).addClass('hide');
      $(periodico).addClass('hide');
      $(descripcion).addClass('hide');
      $(submit).addClass('hide');
    };
    
    var clearValues = function() {
      $('#tarea_tipo').val('');
      $('#tarea_programacion').val('');
      $('#tarea_rastreable').val('');       
      $('#tarea_cantidad').val('');
      $('#tarea_periodicidad').val('');
      $('#tarea_descripcion').val('');
    };

    $('textarea').elastic();

  // Prevenir que la forma se envie al presionar <ENTER>
    $('input').keypress(function(e){
      if(e.which == 13){
        return false;
      }
    });

  // Evita que la forma se envie al hacer click en el Boton enviar
    $('form').submit(function() {
      return false;
    });

  // Hace que se envie la forma al hacer click mediante el metodo definido
    $('input[type=submit]').bind('click', function(e) {
      //alert ('se envia');
      if ($('#tarea_indicacion').val() == ""){
        $.pnotify({
          pnotify_title: "Error: Sin Contenido",
          pnotify_text: "No se pueden enviar indicacciones sin contenido",
          pnotify_delay: 3000,
          pnotify_animate_speed: "normal",
          pnotify_addclass: "stack-bottomright",
          pnotify_shadow: true,
          pnotify_stack: stack_bottomright,
          pnotify_type: "error"
        });

        resetHide();
      }
      else {
        var formdata = $('form').serialize();

        $.ajax({
          type: "POST",
          url: remoteUrl,
          data: formdata,
          success: function(data){
            //alert ('todo salio bien');
            $(data).find('input:checkbox').checkbox();
            $("#nuevo").append(data);
            $('#tarea_indicacion').val('');
            resetHide();
            clearValues();
          }
        });
      };
      return false
    });

  // Funciones de auto completado del campo indicacion, con datos de la BD
    $('#tarea_indicacion').autocomplete({
      minLength: 1,
      delay: 350,
      source: remoteSource,
      focus: function(event, ui) {
        $('#tarea_indicacion').val(ui.item.value);
        return false;
      },
      select: function(event, ui) {
        clearValues();
        $('#tarea_tipo').val(ui.item.type);
        $('#tarea_programacion').val(ui.item.programable);
        $('#tarea_rastreable').val(ui.item.rastreable);

        if (ui.item.dosis == true && ui.item.periodico == true) {
          $('#tarea_indicacion').parents('div.area').removeClass('full half triple').addClass('half');
        } else {
          $('#tarea_indicacion').parents('div.area').removeClass('full half triple').addClass('triple');
        }

        if (ui.item.dosis == false && ui.item.periodico == false) {
          $('#tarea_indicacion').parents('div.area').removeClass('full half triple').addClass('full');
        }

        if (ui.item.dosis == true) {
          $('#tarea_cantidad').parents('div.area').removeClass('hide');
        } else {
          $('#tarea_cantidad').parents('div.area').addClass('hide');
        }

        if (ui.item.periodico == true) {
          $('#tarea_periodicidad').parents('div.area').removeClass('hide');
        } else {
          $('#tarea_periodicidad').parents('div.area').addClass('hide');
        }

        if (ui.item.descripcion == true) {
          $('#tarea_descripcion').parents('div.area').removeClass('hide');
        } else {
          $('#tarea_descripcion').parents('div.area').addClass('hide');
        }

        if ($('#tarea_indicacion').val() != ""){
            $('input[type=submit]').parents('div.area').removeClass('hide');
        }
        return false;
      },
    })
    .data( "autocomplete" )._renderItem = function( ul, item ) {
      return $( "<li></li>" )
        .data( "item.autocomplete", item )
        .append( "<a>" + item.label + "</a>" )
        .appendTo( ul );
    };
  });
