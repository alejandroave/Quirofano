(function(){
  control = {
    dom: {},
    emptyFields: false,

    init: function() {
      console.log('Empieza control de interactivos');
      this
        .collectWidgets()
        .iterateWidgets()
        .appendOverMenu()
    },

    collectWidgets: function() {
      var t=this, d=t.dom;
      d.textareas = $('textarea').attr('rows', '2').elastic();
      d['widgets'] = $('.form-widget');
      return this;
    },

    iterateWidgets: function() {
      var t=this, d=t.dom;
      d.widgets.each(function() {
        switch ($(this).data('type')) {
          case 'hidetextarea':
            t.hideTextarea($(this));
            break;
        }
      });
      return this;
    },

    hideTextarea: function(elem) {
      var checkbox = elem.find('input:checkbox');
      var textarea = elem.find('textarea');
      var pattern = /negado|no referido|no aplica|sin datos patologicos/;
      var value = textarea.val().toLowerCase();

      if (value === '') {
        textarea.hide();
        checkbox.attr('checked', false);
        this.emptyFields = true;
      }
      else if (pattern.test(value)){
        checkbox.attr('checked', false);
      }
      else {
        checkbox.attr('checked', 'checked');
      }

      checkbox.on('click', function() {
        if (checkbox.attr('checked') === 'checked') {
          textarea.show('fast').focus();
        }
        else {
          textarea.hide('fast');
        }
      });
    },

    appendOverMenu: function() {
      if (this.emptyFields) {
        var control = $('div.control');
        console.log(control);
        $('<div>', {'html': 'Resto'}).insertBefore(control);
      }
    },
  }
})();


$(function() {
    control.init();

    console.log(control);
  })
