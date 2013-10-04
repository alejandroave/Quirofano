/**
  === toggleTextarea.js ===
  Autor: Antonio Sanchez Uresti
  Version: 0.1
  Fecha: 01/Oct/2009
  Compatibilidad: Firefox 3.5+,
                  Google Chrome 0.3+,
                  Opera 9+,
                  Safari 3+
                  Internet Explorer 7+

  1. Se seleccionan los marcos con la clase $('.motivo) y se itera.
  2. Se seleccionan el "checkbox" y el "textarea".
  3. Se ocultan los "textarea" vacios y se desmarcan
     sus respectivos "checkbox".
  4. Se Agrega en observador de cambio al "checkbox".
  5. Al cambiar se checa el estado del "checkbox" y se muestra
     o se oculta la "textarea" en concordancia.
*/

  $(function() {
    $('.motivo').each(function() {

      var
        checkbox = $(this).find('input:checkbox'),
        textarea = $(this).find('textarea');

      $(textarea).elastic();

      if ($(textarea).val()==""){
        $(textarea).attr('rows', 2);
        $(textarea).hide();
        $(checkbox).attr('checked', false);
      }
      else {
        $(checkbox).attr('checked', 'checked');
        $(textarea).attr('rows', 2);
      }

      $(checkbox).on('click', function() {
        console.log(checkbox);
        if ($(checkbox).attr('checked') === 'checked') {
          $(textarea).show('fast');
          $(textarea).focus();
        }
        else {
          $(textarea).hide('fast');
        }
      });
    });
  });
