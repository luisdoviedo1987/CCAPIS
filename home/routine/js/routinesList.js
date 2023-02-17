var tableRoutines;
var page = { 
    init: function () {
        var self = this;
        global.options.url  = 'list.php';

        self.loadRoutines();
        $("#update-routine").bind( "click", function() {
            page.updateEdit($("#idstatus").val());
        });

        $("#delete-routine").bind( "click", function() {
            page.updateEdit(3);
        });
    },
    loadEdit : function(data){
        console.log(data);
        $("#idRoutine").val(data[0]);
        $("#nameRoutine").val(data[1]);
        $("#day").val(data[3]);
        $("#hour").val(data[4]);
        $("#minute").val(data[5]);
        $("#idstatus").val(data[9]);
        
        if(data[10] == "2"){
            $(".hidden-frec").hide();
        }else{
            $(".hidden-frec").show();
        }
        
        $('#modalFicha').modal('show');
    },
    updateEdit : function(status){
       
        global.options.method = 'POST';
        global.options.data = {
            "action": 2,
            "name" : $("#nameRoutine").val(),
            "day_frequency" : $("#day").val(),
            "minute_frequency" : $("#minute").val(),
            "hour_frequency" : $("#hour").val(),
            "id_routine_enc" : $("#idRoutine").val(),
            "status": status
        };
        var response = global.Ajax(global.options);
        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.mensaje, 'toast-top-right', 'toast-top-right');
            } else {
                global.myToast(2, "Acción Completada", data.mensaje, 'toast-top-right', 'toast-top-right');
                $('#modalFicha').modal('toggle');
            }
            tableRoutines.ajax.reload();
        }).catch(function (error) {
            console.log(error);
        });
    },

    loadRoutines : function(){
        var self = this;

        parameters = {"action": 1};

        if ($.fn.DataTable.isDataTable('#dataTables-routines')) {
             $('#dataTables-routines').DataTable().destroy();
        }

        tableRoutines = $('#dataTables-routines').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ Rutinas",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "No se encontro ninguna rutina",
                "sInfo": "Mostrando rutinas del _START_ al _END_ de un total de _TOTAL_ ",
                "sInfoEmpty": "Mostrando rutinas de 0 al 0 de un total de 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ rutinas)",
                "sInfoPostFix": "",
                "sSearch": "Buscar: ",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }

            },
            "processing": true,
            "serverSide": true,
            "fixedHeader": true,
                "scrollX": true,
                "scrollY": '100vh',
                "scrollCollapse": true,
            "ajax": {
                "url": "list.php",
                "type": "POST",
                "data": parameters
            },
            "columnDefs": [
                {
                    "targets": [ 10],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": 3,
                    "render": function (data, type, row) {
                        if (row[10] == "1") {
                            return '<span class="badge badge-pill badge badge-pill badge-primary">'+data+'</span>';
                        } else {
                            return '<span class="badge badge-pill badge-secondary">No Aplica</span>';;
                        }
                    }
                },
                {
                    "targets": 4,
                    "render": function (data, type, row) {
                        if (row[10] == "1") {
                            return '<span class="badge badge-pill badge badge-pill badge-primary">'+data+'</span>';
                        } else {
                            return '<span class="badge badge-pill badge-secondary">No Aplica</span>';;
                        }
                    }
                },{
                    "targets": 5,
                    "render": function (data, type, row) {
                        if (row[10] == "1") {
                            return '<span class="badge badge-pill badge badge-pill badge-primary">'+data+'</span>';
                        } else {
                            return '<span class="badge badge-pill badge-secondary">No Aplica</span>';;
                        }
                    }
                },
                {
                    "targets": 8,
                    "render": function (data, type, row) {
                        if (row[10] == "1") {
                            return '<button type="button" class="btn btn-success-medismart btn-round m-t-5 edit"> Editar</button>';
                        } else {
                            return '<button type="button" class="btn btn-success-medismart btn-round m-t-5 edit"> Editar</button><br><button type="button" class="btn btn-info btn-round m-t-5 load"> Cargar Archivo</button>';
                        }
                    }
                },
                {
                    "targets": 9,
                    "render": function (data, type, row) {
                        if (data == "1") {
                            return '<span class="badge badge-success">Activo</span>';
                        } else {
                            return '<span class="badge badge-secondary">Inactivo</span>';
                        }
                    }
                }
            ]
        });

        $("#dataTables-routines tbody").on("click", '.edit', function () {
            var $row = $(this).closest('tr');
            var $data = tableRoutines.row($(this).closest('tr')).data();
            page.loadEdit($data);
        });

        $("#dataTables-routines tbody").on("click", '.load', function () {
            var $row = $(this).closest('tr');
            var $data = tableRoutines.row($(this).closest('tr')).data();
            console.log($data);

            window.location.href = "./loadfile.php?id="+$data[0];

        });
        
      
    }
};

$(document).ready(function(){ 
    page.init();
});



