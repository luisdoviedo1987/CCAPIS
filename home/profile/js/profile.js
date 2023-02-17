var tableClientes;
var tableBene;
var tablePets;
var tableBady;

var page = {
    Init : function () {
        var self = this;
        global.options.url  = 'index.php';
        $("#div-beneficiarios").hide();
        $("#div-mascotas").hide();
        $("#div-bebes").hide();


        self.loadTableInfo();

        $("#btn-my-card").on("click",function(){
            self.loadMyCarnetInfo();
        });

       
        $("#btn-save-badge").on("click",function(){
            var element = $("#badge-content")[0];
         
            html2canvas(element).then(function(canvas) {                   
                    self.saveAs(canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"), $("#cli-badge").html()+'.png');
            });

          });
        
    
        
    },saveAs: function(uri, filename) {
    var link = document.createElement('a');
    if (typeof link.download === 'string') {
      link.href = uri;
      link.download = filename;
      //Firefox requires the link to be in the body
      document.body.appendChild(link);
      //simulate click
      link.click();
      //remove the link when done
      document.body.removeChild(link);
    } else {
      window.open(uri);
    }
  },
    setCarnetInfo : function(nombre , cli ,estado){
         $("#name-badge").html(nombre);
         $("#cli-badge").html(cli);
         $("#status-badge").html(estado);

         $("#qr-badge").attr("src","QRLogo.php?data="+cli);

         $("#login_modal").modal('show');
    },
    loadMyCarnetInfo : function(){
          var self = this;
                global.options.data = {
                "action" : 2
            };
            var response = global.Ajax(global.options);
            response.then(function (data) {
                console.log(data);

                var mdata = JSON.parse(data);
                if(mdata.error){
                    global.myToast(4, "Error", mdata.mensaje, 'toast-top-right', 'toast-top-right');
                }else{

                    self.setCarnetInfo(mdata.data.nombre,mdata.data.numeroCliente,mdata.data.estado);  
                }
            }).catch(function (error) {
                console.log(error);
            }); 
        $("#login_modal").modal('show');
    },
    loadTableInfo: function () {
        var self = this;
                global.options.data = {
                "action" : 1
            };
            var response = global.Ajax(global.options);
            response.then(function (data) {
                console.log(data);

                var data = JSON.parse(data);
                if(data.error){
                    global.myToast(4, "Error", data.mensaje, 'toast-top-right', 'toast-top-right');
                }else{
                    self.loadTableBeneficiarios(data.benResults);
                    self.loadTablePets(data.petResults);
                    self.loadTableBebes(data.bebeResults);
                }
            }).catch(function (error) {
                console.log(error);
            });   
    },
    loadTableBeneficiarios : function(beneficiaros){
            var self = this;

            if(beneficiaros.length > 0 ){
                $("#div-beneficiarios").fadeIn( "slow" );
            }else{
                $("#div-beneficiarios").hide();
            }

            if ($.fn.DataTable.isDataTable('#dataTables-beneficiarios')) {
                 $('#dataTables-beneficiarios').DataTable().destroy();
            }

            tableBene = $('#dataTables-beneficiarios').DataTable({
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ Beneficiarios",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "No se encontro ningun beneficiario",
                    "sInfo": "Mostrando beneficiarios del _START_ al _END_ de un total de _TOTAL_ ",
                    "sInfoEmpty": "Mostrando beneficiarios de 0 al 0 de un total de 0",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ beneficiarios)",
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
                "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                "iDisplayLength": 5,
                "data": beneficiaros,
                "columns": [
                    {"data": "estado",
                        "render": function (data, type, row, meta) {
                            if (type === 'display') {
                                if (row.estado == "Activo") {
                                    return '<span class="badge badge-pill badge-success">'+row.estado+'</span>'
                                } else if (row.estado == "Activo Titular Sin Cobertura") {
                                    return '<span class="badge badge-pill badge-success">'+row.estado+'</span>'
                                }else if (row.estado == "En Proceso de Venta") {
                                    return '<span class="badge badge-pill badge-warning">'+row.estado+'</span>'
                                }else{
                                    return '<span class="badge badge-pill badge-danger">'+row.estado+'</span>'
                                }
                            } else {
                                return data;
                            }
                        }},
                    {"data": "numeroCliente" , "visible":false},
                    {"data": "numeroBen"},
                    {"data": "cedula", "visible":false,
                        "render": function (data, type, row, meta) {
                            if (type === 'display') {
                                if (row.cedula === null) {
                                    return '<span class="badge badge-pill badge-default">Sin Registro</span>';
                                } else {
                                    return data;

                                }
                            } else {
                                return data;
                            }
                        }},
                    {"data": "nombre"}, 
                    {"data": "nombreTitular" , "visible":false},
                    {"data": "tipoCoberutura"},
                    {"data": "oncosmart", "visible":false,
                        "render": function (data, type, row, meta) {
                            if (type === 'display') {
                                if (row.oncosmart === true) {
                                    return '<span class="badge badge-pill badge-success">Si</span>'
                                } else {
                                    return '<span class="badge badge-pill badge-danger">No</span>'

                                }
                            } else {
                                return data;
                            }
                        }},
                    {"data": "oncosmart", 
                        "render": function (data, type, row, meta) {
                            return '<button class="btn btn-info badge" >Ver Carnet</button>'
                        }}
                ]
            });

            $('#dataTables-beneficiarios tbody').on('click', '.badge', function () {
                var data = tableBene.row($(this).parents('tr')).data();
                self.setCarnetInfo(data.nombre , data.numeroBen ,data.estado);
            })
    },
    loadTablePets : function(mascotas){
        var self = this;

        if(mascotas.length > 0 ){
            $("#div-mascotas").fadeIn( "slow" );
        }else{
            $("#div-mascotas").hide();
        }

        if ($.fn.DataTable.isDataTable('#dataTables-mascotas')) {
             $('#dataTables-mascotas').DataTable().destroy();
        }

      tablePets = $('#dataTables-mascotas').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ Mascotas",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "No se encontro ninguna mascota",
                "sInfo": "Mostrando mascotas del _START_ al _END_ de un total de _TOTAL_ ",
                "sInfoEmpty": "Mostrando mascotas de 0 al 0 de un total de 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ mascotas)",
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
            "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            "iDisplayLength": 5,
            "data": mascotas,
            "columns": [
                {"data": "estado",
                    "render": function (data, type, row, meta) {
                        if (type === 'display') {
                            if (row.estado == "Activo") {
                                return '<span class="badge badge-pill badge-success">'+row.estado+'</span>'
                            } else if (row.estado == "Activo Titular Sin Cobertura") {
                                return '<span class="badge badge-pill badge-success">'+row.estado+'</span>'
                            }else if (row.estado == "En Proceso de Venta") {
                                return '<span class="badge badge-pill badge-warning">'+row.estado+'</span>'
                            }else{
                                return '<span class="badge badge-pill badge-danger">'+row.estado+'</span>'
                            }
                        } else {
                            return data;
                        }
                    }},
                {"data": "numeroCliente", "visible":false},
                {"data": "nombreTitular", "visible":false},
                {"data": "numeroPet"},
                {"data": "nombre"},
                {"data": "numeroCliente", "visible":false,
                    "render": function (data, type, row, meta) {
                        if (type === 'display') {
                            if (row.cli === null) {
                                return '<span class="label label-default">Sin Registro</span>';
                            } else {
                                return data;

                            }
                        } else {
                            return data;
                        }
                    }},
                {"data": "numeroCliente", 
                        "render": function (data, type, row, meta) {
                            return '<button class="btn btn-info badge" >Ver Carnet</button>'
                    }}

            ]
        });

        $('#dataTables-mascotas tbody').on('click', '.badge', function () {
                var data = tablePets.row($(this).parents('tr')).data();
                self.setCarnetInfo(data.nombre , data.numeroPet ,data.estado);
        })

    },
    loadTableBebes : function(bebes){
        var self = this;

        if(bebes.length > 0 ){
            $("#div-bebes").fadeIn( "slow" );
        }else{
            $("#div-bebes").hide();
        }

        if ($.fn.DataTable.isDataTable('#dataTables-bebes')) {
             $('#dataTables-bebes').DataTable().destroy();
        }

       tableBady = $('#dataTables-bebes').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ Bebes",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "No se encontro ningun bebe",
                "sInfo": "Mostrando bebes del _START_ al _END_ de un total de _TOTAL_ ",
                "sInfoEmpty": "Mostrando bebes de 0 al 0 de un total de 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ bebes)",
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
            "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            "iDisplayLength": 5,
            "data": bebes,
             "columns": [
                {"data": "estado",
                    "render": function (data, type, row, meta) {
                        if (type === 'display') {
                            if (row.estado == "Activo") {
                                return '<span class="badge badge-pill badge-success">'+row.estado+'</span>'
                            } else if (row.estado == "Activo Titular Sin Cobertura") {
                                return '<span class="badge badge-pill badge-success">'+row.estado+'</span>'
                            }else if (row.estado == "En Proceso de Venta") {
                                return '<span class="badge badge-pill badge-warning">'+row.estado+'</span>'
                            }else{
                                return '<span class="badge badge-pill badge-danger">'+row.estado+'</span>'
                            }
                        } else {
                            return data;
                        }
                    }},
                {"data": "numeroCliente", "visible":false},
                {"data": "nombreTitular", "visible":false},
                {"data": "numeroBebe"},
                {"data": "nombre"},
                {"data": "nombreMadre", "visible":false},
                {"data": "fechaNacimiento"},
                {"data": "fechaFinCortesia", "visible":false},
                {"data": "fechaFinCortesia", 
                        "render": function (data, type, row, meta) {
                            return '<button class="btn btn-info badge" >Ver Carnet</button>'
                        }}

            ]
        });

        $('#dataTables-bebes tbody').on('click', '.badge', function () {
                var data = tableBady.row($(this).parents('tr')).data();
                self.setCarnetInfo(data.nombre , data.numeroBebe ,data.estado);
        })
    }
};

$(document).ready(function(){
    page.Init();
});

