$(document).ready(function () {

    //Orden de Compra
    $('#generarPDFOrden').click(function () {
        var doc = new jsPDF('p', 'pt', 'letter');
        var specialElementHandlers = {
            '#editor': function(element, renderer){
                return true;
            },
            '.controls': function(element, renderer){
                return true;
            }
        };

        var margins = {
            top:50,
            bottom: 10,
            right: 40,
            left: 60,
            width: 900,
        };

        doc.fromHTML($('#titulo').get(0), 220, 30, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoGeneral').get(0), margins.left, 50, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoContacto').get(0), margins.left, 150, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#observacionDespacho').get(0), margins.left, 270, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoProductos').get(0), margins.left, 330, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.save('Orden de Compra.pdf');
    });

    //Cotización
    $('#generarPDFCotización').click(function () {
        var doc = new jsPDF('p', 'pt', 'letter');
        var specialElementHandlers = {
            '#editor': function(element, renderer){
                return true;
            },
            '.controls': function(element, renderer){
                return true;
            }
        };

        var margins = {
            top:50,
            bottom: 10,
            right: 40,
            left: 60,
            width: 1000,
        };

        doc.fromHTML($('#titulo').get(0), 220, 30, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoGeneral').get(0), margins.left, 50, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoCotizacion').get(0), margins.left, 110, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoContacto').get(0), margins.left, 190, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoProductos').get(0), margins.left, 290, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#observaciones').get(0), margins.left, 490, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#datosPago').get(0), margins.left, 560, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.save('Cotización.pdf');
    });

    //Orden de Trabajo
    $('#generarPDFOrdenDeTrabajo').click(function () {
        var doc = new jsPDF('p', 'pt', 'letter');
        var specialElementHandlers = {
            '#editor': function(element, renderer){
                return true;
            },
            '.controls': function(element, renderer){
                return true;
            }
        };

        var margins = {
            top:50,
            bottom: 10,
            right: 40,
            left: 60,
            width: 1000,
        };

        doc.fromHTML($('#titulo').get(0), 220, 30, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoGeneral').get(0), margins.left, 60, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoSeccion').get(0), margins.left, 110, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoTareas').get(0), margins.left, 160, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoMantencion').get(0), margins.left, 210, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#infoDuracion').get(0), margins.left, 260, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#observaciones').get(0), margins.left, 310, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.fromHTML($('#firmas').get(0), margins.left, 360, {
            'width': margins.width,
            'elementHandlers': specialElementHandlers});
        doc.save('Orden de Trabajo.pdf');
    });
});