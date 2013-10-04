/**
 * Inicio de las funcionalidades del panel de paciente
 */
function panel(opts)
{
/**
 * Asignamos la referencia del Objeto a la variable $this para evitar el
 * problema de referencia cruzada con jQuery */
  $this = this;

/**
 * Asignamos las propiedades del objeto
 */

  var options = {
    baseURL: "http://sigahu.local/api/acciones",      //  url pase para obtener los datos
    agrupado: 'nombre',                               //  Orden de agrupado de los nodos del arbor
    evento: 0,                                        //  numero del evento del que se obtienen los datos
  }

  options = jQuery.extend(options, opts);

  this.setBaseURL = function(value){
    options.baseURL = value;
    return this;
  };

  this.getBaseURL = function() {
    return options.baseURL;
  };

  this.setAgrupado = function(value){
    options.agrupado = value;
    return this;
  };

  this.getAgrupado = function() {
    return options.agrupado;
  };

  this.setEvento = function(value){
    options.evento = value;
    return this;
  };

  this.getEvento = function() {
    return options.evento;
  };

/**
* Redimensiona el contenedor del layout */
  this.redimensionar = function()
  {
    var $alto = $(window).height();
    var $ancho = $(window).width();

    var $headerAlto = $('header').outerHeight();
    var $windowAlto = $alto - $headerAlto;
    $('#sf_content').css('height', $windowAlto)
  };

/**
 * Crea el layout principal del panel */
  this.makeLayout = function() {
    this.layout = $('#sf_content').layout({
      north: {
        closable: false,
        resizable: false,
        showOverflowOnHover: true,
        spacing_open: 0,
      },
      west: {
        applyDefaultStyles: false,
        contentSelector: ".content",
        initClosed: false,
        maxSize: 250,
        minSize: 200,
        //resizerCursor: 'e-resize',
        resizerTip: "Redimensionar",
        size: 250,
        slideTrigger_open: 'mouseover',
        sliderTip: "Muestra el panel de Acciones",
        spacing_closed: 25,
        togglerAlign_closed: "top",
        togglerContent_closed: "A<BR/>c<BR/>c<BR/>i<BR/>o<BR/>n<BR/>e<BR/>s",
        togglerLength_closed: 140,
        togglerTip_closed: "Muestra el panel de Acciones",
        togglerTip_open: "Oculta el panel de Acciones",
      },
      center: {
        applyDefaultStyles: false,
        contentSelector: ".content",
      },
      east: {
        applyDefaultStyles: false,
        contentSelector: ".content",
        initClosed: true,
        maxSize: 500,
        minSize: 300,
        size: 300,
      }
    });
  }

/**
 * Crear las Tabs
 */
  this.makeTabs = function() {
    this.tabs = $("#tabs").tabs({
      add: function(event, ui) {
        $('#tabs').tabs('select', ui.index);
      },
      cache: true,
      closable: true,
      idPrefix: 'tab',
      spinner: 'Cargando...',
      panelTemplate: '<div></div>',
      //tabTemplate: '<li><a href="#{href}">#{label}</a> <span class="ui-icon ui-icon-close"></span></li>',
    })
    //.find(".ui-tabs-nav").sortable({ axis:'x' });
  }

/**
 * Inicializacion del Arbol de Acciones */
  this.makeTree = function() {
    this.tree = $("#actions-list").dynatree({
      //children: treeData,
      initAjax: {
        url: $this.getUrl(),
         data: {
          groupby: "nombre",
          evento: $this.getEvento()
        }
      },
      debugLevel: 2,
      onActivate: function(node) {
        $($this.tabs).tabs('add', node.data.url, node.data.title);
        //$("#west .footer").text(node.data.title);
        //$("#west .footer").text(node.data.url);
      }
    });
  };

  this.getUrl = function () {
    return this.getBaseURL() + "/" + this.getAgrupado() + "/" + this.getEvento();
  };

  this.makeQRDialog = function() {
    this.qr = $("#qr-code").dialog({
      autoOpen: false,
      buttons: {
        "Cerrar":
          function() {
            $(this).dialog('close');
          }
      },
      closeText: 'hide',
      draggable: false,
      height: 415,
      modal: true,
      position: 'center',
      resizable: false,
      title: 'Lee este código con tu smartphone',
      width: 398,
    });
  };

/**
 * bindings inicializa todos los acciones del panel
 */
  this.bindings = function()
  {
    // Funciones añadidas al window.resize
      $(window).resize(function() {
        $this.redimensionar();
      });

    // Mostrar el dialogo con el Codigo QR
      $("#menuqr").click(function() {
        $this.qr.dialog('open');
        return false;
      });

    // Activa los botones superiores
      $('#west #menu li').hover(function() {
        $(this).toggleClass('ui-state-active');
      });

    // Cerrar el panel con el pin de las acciones
      $this.layout.addPinBtn("li#pin", "west");
    /*  $("li#pin").click(function() {
        $this.layout.toggle('west');
      }); */

    // Recarga el arbol de nodos
      $("li#reload").click(function() {
        $('#west .footer').text('Recargando...');
        $this.tree.dynatree("getTree").reload();
        $('#west .footer').text('Terminado');
      });

    // Cambia el tipo de ordenamiento
      $("li#ordenar").click(function() {
        switch ($this.getAgrupado())
        {
          case "nombre":
          $this.setAgrupado('fecha');
          break;

          case "fecha":
          $this.setAgrupado('medico');
          break;

          case "medico":
          $this.setAgrupado('servicio');
          break;

          case "servicio":
          $this.setAgrupado('nombre');
          break;
        }
        $('#west .footer').text($this.getAgrupado());

        $this.tree.dynatree("option", "initAjax", {
          url: $this.getBaseURL(),
          data: {
            groupby: $this.getAgrupado(),
            evento: $this.getEvento()
          }
        });
        $this.tree.dynatree("getTree").reload();
      });

      $('#west .footer').click(function() {
        alert ($this.layout.state.center.innerHeight);
      });

    /**$("#west .content a").click(function() {
      //$("#tabs").tabs('add', this.href, this.text);
      return false;
    }); */
  }

/**
 * Funciones de inicializacion del objeto, estan fuera de todas las funciones
 * y estan despues de ellas para poder usarlas */
  this.redimensionar();
  this.makeLayout();
  this.makeTabs();
  //this.makeTree(treeData);
  this.makeTree();
  this.makeQRDialog();
  this.bindings();

};
