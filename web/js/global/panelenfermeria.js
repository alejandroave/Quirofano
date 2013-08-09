var enfermeriaGUI = function(element)
{
// Definicion de Propiedades de la Interfase
  var container = $(element);
  var containerHeight = $(container).height();
  var containerWidth = $(container).width();

  var vtabWrapper = $('<ul />').css({'margin-top': '37px'}).addClass('clearfix');
  var vtab = $(container).find('#vtabs');
  var vtabH = $(vtab).outerHeight();
  var vtabW = $(vtab).outerWidth();

  var htabs = $(container).find('#htabs');
  var htabsH = $(htabs).outerHeight();
  var htabsW = $(htabs).outerWidth();

  var graph = $(container).find('#graph');
  var graphH = $(graph).outerHeight();
  var graphW = $(graph).outerWidth();

  var chart = $(container).find('#chart');
  var chartH = $(chart).outerHeight();
  var chartW = $(chart).outerWidth();

  var control = $(container).find('#control');
  var controlH = $(control).outerHeight();
  var controlW = $(control).outerWidth();

  var task = $(container).find('#task');
  var taskH = $(task).outerHeight();
  var taskW = $(task).outerWidth();

  var vTabs = new Object();

// Definicion de Metodos de la Interfase Grafica
  this.getGUIHeight = function () {
    return containerHeight;
  };

  this.getGUIWidth = function () {
    return containerWidth;
  };

/* this.resizeGUI [publico]
 * Cambia el tamaño de los elementos de la Interfaz */
  this.resizeGUI = function(ancho, alto) {
    $(container).css('width', ancho);
    $(container).css('height', alto);
    $(vtab).css('height', alto);
    $(htabs).css('width', (ancho-60));
    $(graph).css('width', (ancho-60-360));
    $(task).css('height', (alto-40));
    $(chart).css('height', (alto-40)*.6);
    $(control).css('height', (alto-40)*.4);
    updateSize();   // Recalculamos el tamaño de los elementos
  };

/* updateSize [Privado]
 * Metodo Privado que Recalcula el tamaño de la Interfaz */
  updateSize = function() {
    containerHeight = $(container).height();
    containerWidth = $(container).width();
    vtabH = $(vtab).outerHeight();
    vtabW = $(vtab).outerWidth();
    htabsH = $(htabs).outerHeight();
    htabsW = $(htabs).outerWidth();
    graphH = $(graph).outerHeight();
    graphW = $(graph).outerWidth();
    chartH = $(chart).outerHeight();
    chartW = $(chart).outerWidth();
    controlH = $(control).outerHeight();
    controlW = $(control).outerWidth();
    taskH = $(task).outerHeight();
    taskW = $(task).outerWidth();
  };

/* this.dataLoad [publico]
 * Carga los datos de inicio de la interfaz */
  this.dataLoad = function(data){
    for (var room in data) {
      vTabs[room] = new verticalTab();
      $(vtabWrapper).append(vTabs[room].createTab(room, data[room]));
    }
    $(vtab).append(vtabWrapper);
  };

  this.showRoomTabs = function(room) {
    vTabs[room].showTabs();
  };

  this.getInfo = function() {
    info = "Tamaño GUI: "+ this.getGUIWidth() + "px x " + this.getGUIHeight() + "px\n";
    info += "vTab: "+ vtabW + "px x " + vtabH + "px\n";
    info += "hTabs: "+ htabsW + "px x " + htabsH + "px\n";
    info += "graph: "+ graphW + "px x " + graphH + "px\n";
    info += "chart: "+ chartW + "px x " + chartH + "px\n";
    info += "control: "+ controlW + "px x " + controlH + "px\n";
    info += "Task: "+ taskW + "px x " + taskH + "px\n";
    alert (info);
  };
};


/* Clase que maneja los cuartos y sus pestañas
 ****************************************************************************************************** */
var verticalTab = function()
{
  var roomTab;
  var visible = false;
  var camaGUI = new Object();
  var wrapper = $('<ul />').addClass('clearfix');
  var container = $('#htabs');

/* this.createTab [publico]
 * Crea una nueva pestaña (el objeto y la interfaz)y la devuelve  */
  this.createTab = function(index, data) {
    roomTab = $('<li />')
    .attr('id', index)
    .html(index)
    .addClass('vtabs ui-widget ui-corner-left ui-tabs ui-state-default')
    .bind('click', function() {
      //$(this).remove();
      gui.showRoomTabs(this.id);
      alert('Click en '+ this.id);
    })
    .hover(function() {
      $(this).addClass('ui-state-hover');
    },function() {
      $(this).removeClass('ui-state-hover');
    });

    for (var cama in data) {
      camaGUI[cama] = new camaTab();
      camaGUI[cama].createTabGUI(cama, data[cama]);
      $(wrapper).append(camaGUI[cama].getTab());  // las tabs se agregan a un wrapper comun
    };

    return roomTab;
  };

  this.getTab = function() {
    return roomTab;
  };

  this.showTabs = function() {
    $(container).append(wrapper);
  };
};

/* Clase que maneja las Camas y sus pestañas
 ****************************************************************************************************** */
var camaTab = function()
{
  var camaGUI;
  var paciente;
  var visible = false;
  var paciente;

  this.createTabGUI = function(index, data) {
    camaGUI = $('<li />')
    .attr('id', index)
    .css({
      'border': '1px solid black',
      'float': 'left',
      'margin': '10px 5px 0 5px',
      'padding': '10px 0px 3px',
      'text-align': 'center',
      'width': '70px'
    })
    .addClass('ui-widget ui-corner-top ui-tabs ui-state-default ui-helper-reset')
    .html(index)
    .bind('click', function(e) {
      $(this).addClass('ui-state-hover ui-state-active');
      alert ('click en '+ this.id)
      e.stopPropagation();
    })
    .hover(function() {
      $(this).addClass('ui-state-hover');
    },function() {
      $(this).removeClass('ui-state-hover');
    });

    return camaGUI;
  };

  this.getTab = function() {
    return camaGUI;
  }
};

/*
 * Clase que maneja los pacientes
 * ******************************************************************************************************/
var paciente = function() {
  var id;
  var nombre;
  var chart;
  var indicaciones = new Object();

};
