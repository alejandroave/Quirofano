/*  jQuert.enfermeriaGUI.js
 * ==========================
 * Plugin para jquery que genera y controla el panel de administracion para
 * enfermeria
 *
 * Autor: Antonio Sanchez Uresti
 * Fecha: 25/Ago/2010
 */

(function($) {

$.fn.enfermeriaGUI = function (opts) {

/* Variables usadas internamente en el programa */
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var mainContainer = $(this[0]);
  var roomTab = {};
  var roomWrapper = $('<ul class="clearfix"/>').css({'margin-top': '37px'});
  var paciente = {};
  var
    roomContainer,
    camaContainer,
    graphContainer,
    chartContainer,
    controlContainer,
    taskContainer
  ;

/* Opciones por default */
  var options = {
    topSpace: 0,
    rightSpace: 0,
    bottomSpace: 0,
    leftSpace: 0,
    source: data,
    width: windowWidth,
    height: windowHeight,
    fillWindow: true,
    main: { width: '100%', height: 0 },
    room: { width: 60, height: 0 },
    cama: { width: 0, height: 40 },
    graph: { width: 0, height: 0 },
    chart: { width: '100%', height: 0 },
    control: { width: '100%', height: 0 },
    task: { width: 360, height: 0 },
  };

  var op = $.fn.extend(options, opts);

  var createElements = function () {
    roomContainer = $('<div id="roomContainer" />').width(op.room.width).height(op.room.height);
    camaContainer = $('<div id="camaContainer"/>').width(op.cama.width).height(op.cama.height);
    graphContainer = $('<div id="graphContainer" />').width(op.graph.width).height(op.graph.height);
    chartContainer = $('<div id="chartContainer" />').width(op.chart.width).height(op.chart.height);
    controlContainer = $('<div id="controlContainer" />').width(op.control.width).height(op.control.height);
    taskContainer = $('<div id="taskContainer" />').width(op.task.width).height(op.task.height);

    $(graphContainer).append(chartContainer).append(controlContainer);
    $(mainContainer).append(roomContainer)
      .append(camaContainer)
      .append(graphContainer)
      .append(taskContainer);
  };

  var calculateGUI = function() {
    if (op.fillWindow) {
      op.width = $(window).width();
      op.height = $(window).height();
    };

    op.main.width = op.width;
    op.room.height = op.height - op.topSpace;
    op.cama.width = op.width - op.room.width;
    op.graph.width = op.width - (op.room.width + op.task.width);
    op.graph.height = op.room.height - (op.cama.height);
    op.chart.height = op.graph.height * 0.6;
    op.control.height = op.graph.height * 0.4;
    op.task.height = op.room.height - (op.cama.height);
  };

  var resizeGUI = function(x, y)
  {
    $(mainContainer).width(op.main.width).height(op.main.height);
    $(roomContainer).width(op.room.width).height(op.room.height);
    $(camaContainer).width(op.cama.width).height(op.cama.height);
    $(graphContainer).width(op.graph.width).height(op.graph.height);
    $(chartContainer).height(op.chart.height);
    $(controlContainer).height(op.control.height);
    $(taskContainer).width(op.task.width).height(op.task.height);
  };

/* Carga de Datos y construccion de la Interfaz
 * ******************************************** */
  var dataLoad = function()
  {
    for (var i in op.source)
    {
      roomTab[i] = populateRooms(i);
      $(roomWrapper).append(roomTab[i].tab);
      for (var j in op.source[i])
      {
        roomTab[i].camas[j] = populateCamas(j);
        $(roomTab[i].wrapper).append(roomTab[i].camas[j].cama);
        createInterfaz(roomTab[i].camas[j], op.source[i][j]);
        $(chartContainer).append(roomTab[i].camas[j].paciente);
      }
    }
    showGUI();
  };

  /* Crear las Pestañas de los cuartos */
  var populateRooms = function(index)
  {
    return {
      tab: $('<li />')
        .attr('id', index)
        .html(index)
        .addClass('vtabs ui-widget ui-tabs ui-state-default')
        .click(function() {
          //alert (this.id)     // REMOVE ALERT
          showCamas(this.id);
        })
        .hover(function() {
          $(this).addClass('ui-state-hover');
        },function() {
          $(this).removeClass('ui-state-hover');
        }),
      visible: false,
      wrapper: $('<ul class="clearfix" />'),
      camas: new Object()
    };
  };

  /* Crear las pestañas de las camas */
  var populateCamas = function(index)
  {
    return {
      cama: $('<li class="ui-widget ui-corner-top ui-tabs ui-state-default ui-helper-reset" />')
        .attr('id', index)
        .css({
          'border': '1px solid black',
          'float': 'left',
          'font-size': '1.2em',
          'margin': '8px 5px 0 5px',
          'padding': '10px 0px 3px',
          'text-align': 'center',
          'width': '70px'
        })
        .html(index)
        .bind('click', function() {
          $(this).addClass('ui-state-hover ui-state-active');
          alert ('click en '+ this.id)
        })
        .hover(function() {
          $(this).addClass('ui-state-hover');
        },function() {
          $(this).removeClass('ui-state-hover');
        }),
      visible: null,
      paciente: null,
      charts: null,
      tasks: null,
    };
  };

  /* Creacion de las interfaces de cada paciente */
  var createInterfaz = function(cama, object)
  {
    return {
      paciente: object.paciente.nombre
    }
    alert(object.paciente.nombre);  //   ALERT
  }

/* Manejo de la interfaz
 **************************************************************************** */
  var showGUI = function()
  {
    $(roomContainer).append(roomWrapper);
    for (var i in roomTab) break;
    //alert(i) //ALERT
    //showCamas(i);
    $(camaContainer).append(roomTab[i].wrapper);
  };

  var showCamas = function(id)
  {
    for (var a in roomTab){
      $(roomTab[a].tab).removeClass('ui-state-hover ui-state-active');
    }
    $(camaContainer).find('ul').detach();
    $(camaContainer).append(roomTab[id].wrapper);
    $(roomTab[id].tab).addClass('ui-state-hover ui-state-active');
  };

/* Inicializacion de los datos
 * ******************************************** */
  var create = function() {
    $('html').css('overflow', 'hidden');
    calculateGUI();
    createElements();
    dataLoad();
    if (op.fillWindow) {
      $(window).resize(function() {
        calculateGUI();
        resizeGUI(op.width, op.height)
      });
    };
  };

  create();

  return {
    create: create,
    showGUI: showGUI,
    showCamas: showCamas
  };
};

})( jQuery );
