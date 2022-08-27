$(document).ready(function() {
        $('#example').DataTable({
            responsive: true,

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },

            dom:'Bfrtilp',
            buttons:[
                {
                    extend: 'pdfHtml5',
                    text: '<li class="nav-link btn btn-light border border-danger" type="button" title="Reporte en PDF"><a href="#"></a> <span class="svg-pdf"></span> </li>',
                },
                    
                {
                    extend: 'excelHtml5',
                    text: '<li class="nav-link btn btn-light border border-success" type="button" title="Reporte en EXCEL"><a class="m-0" href="#"></a> <span class="svg-excel"></span></li>',
                },
            ]
            
        });
    } );