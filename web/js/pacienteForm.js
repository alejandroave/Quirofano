$(function() {
    $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        //showStatus: true,
        showAnim: 'slide',
        showOptions: {direction: 'up'},
        //dateFormat: 'DD, d MM, yy',
        dateFormat: 'yy-mm-dd',
        yearRange: '-90:+1',
        clearText: 'Borrar',
        closeText: 'X',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes','Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom,', 'Lun', 'Mar','Mie', 'Jue', 'Vie', 'Sab'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa']
    });

});