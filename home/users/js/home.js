var tableUsuarios;

var page = {
    Init : function () {
        var self = this;
        global.options.url  = 'index.php';
      
        self.loadUsuariosRegistrados();   

        $("#addUser").bind("click" , function () {
            $('#idroladd').val("");
            $('#numerocliadd').val("");
            $('#cedulacliadd').val("");
            $('#nombrecliadd').val("");
            $('#emailcliadd').val("");
            $('#telefonocliadd').val("");
            $('#idstatusadd').val("");
            $('#passadd').val("");

            $('#modalFichaCrear').modal('show'); 
         });

        $("#id-resend-password").bind("click" , function () {
           reSendPassword();  
        });

        $("#actualizar-usuario").bind("click" , function () {
           updateInfoClient();  
        });

        $("#eliminar-usuario").bind("click" , function () {
            if(confirm("Estas seguro que desea eliminar el usuario: "+ $('#nombrecli').val())){
               deleteInfoClient();  
            }
        });

        $("#crear-usuario").bind("click" , function () {
            self.crearUsuario();  
         });
        
    },
    crearUsuario : function(){

        if($('#idroladd').val()==""){
            alert("Por favor seleccione el rol");
            return false;
        }

        if($('#cedulacliadd').val()==""){
            alert("Por favor ingrese la cedula");
            return false;
        }

        if($('#nombrecliadd').val()==""){
            alert("Por favor ingrese el nombre");
            return false;
        }
        if($('#emailcliadd').val()==""){
            alert("Por favor ingrese el correo electronico");
            return false;
        }

        if($('#passadd').val()==""){
            alert("Por favor ingrese la contraseña");
            return false;
        }

        variable = {"action": "3",
                "idRol": $('#idroladd').val(),
                "cliUser": $('#numerocliadd').val(),
                "cedUser": $('#cedulacliadd').val(),
                "nameFullUser": $('#nombrecliadd').val(),
                "emailUser": $('#emailcliadd').val(),
                "phoneUser": $('#telefonocliadd').val(),
                "statusUser": $('#idstatusadd').val(),
                "pass": $('#passadd').val()
        };

        $.ajax({
            method: "POST",
            url: "./index.php",
            data: variable,
            type: 'json',
            beforeSend: function (data) {
            }})
                .done(function (data) {
                    var json_obj = $.parseJSON(data);
                    if (json_obj.status === "SUCCESS") {
                        $('#modalFichaCrear').modal('toggle');
                        alert("Cliente creado correctamente!");
                    } else {
                        alert(json_obj.msg)
                    }
                })
                .fail(function (data) {
                    
                })
                .always(function (data) {
                    tableUsuarios.ajax.reload();
                });
    },
    loadUsuariosRegistrados : function(mascotas){
        var self = this;

        parameters = {"action": 1};

        if ($.fn.DataTable.isDataTable('#dataTables-usuarios')) {
             $('#dataTables-usuarios').DataTable().destroy();
        }

        tableUsuarios = $('#dataTables-usuarios').DataTable({
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ Usuarios",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "No se encontro ningun usuario activo",
            "sInfo": "Mostrando usuarios del _START_ al _END_ de un total de _TOTAL_ ",
            "sInfoEmpty": "Mostrando usuarios de 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ usuarios)",
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
            "url": "index.php",
            "type": "POST",
            "data": parameters
        },
        dom: 'Blfrtip',
        buttons: ['csv', 'excel', 'pdf', 'print'
        ],
        "columnDefs": [
           {
                "targets": [ 0,1,2],
                "visible": false,
                "searchable": false
            },
            {
                "targets": 9,
                "render": function (data, type, row) {
                    if (row[9] == "1") {
                        return "<span class='label label-success'>Activo</span>";
                    } else {
                        return "<span class='label label-warning '>Inactivo</span>";
                    }
                }
            },
            {
                "targets": 10,
                "render": function (data, type, row) {
                       return "<button class='btn btn-success-medismart editar'>Editar</button>";
                }
            }
        ]
    });

    $("#dataTables-usuarios tbody").on("click", 'button.editar', function () {
        var $row = $(this).closest('tr');
        var $data = tableUsuarios.row($(this).closest('tr')).data();
        setupInfoClient($data);
    });
      
    }
};

function setupInfoClient(data){
    console.log(data);
    $("#idcli").val(data[0]);
    $("#numerocli").val(data[2]);
    $("#cedulacli").val(data[3]);
    $("#nombrecli").val(data[4]);
    $("#emailcli").val(data[5]);
    $("#telefonocli").val(data[6]);

    $("#idstatus").val(data[9]);

    $("#fechacreacion").val(data[7]);
    $("#fechamodi").val(data[8]);

    $('#modalFicha').modal('show');
}

function updateInfoClient(){

    variable = {"action": "2",
                "idRol": $('#idrol').val(),
                "cliUser": $('#numerocli').val(),
                "cedUser": $('#cedulacli').val(),
                "nameFullUser": $('#nombrecli').val(),
                "emailUser": $('#emailcli').val(),
                "phoneUser": $('#telefonocli').val(),
                "statusUser": $('#idstatus').val(),
                "idUser": $('#idcli').val()
        };

        $.ajax({
            method: "POST",
            url: "./index.php",
            data: variable,
            type: 'json',
            beforeSend: function (data) {
            }})
                .done(function (data) {
                    var json_obj = $.parseJSON(data);
                    if (json_obj.status === "SUCCESS") {
                        $('#modalFicha').modal('toggle');
                        alert("Cliente actualizado correctamente!");
                    } else {
                        alert(json_obj.msg)
                    }
                })
                .fail(function (data) {
                    
                })
                .always(function (data) {
                    tableUsuarios.ajax.reload();
                });

}

function reSendPassword(){

     variable = {"action": "1",
             "email_user": $('#emailcli').val()   
        };
    
    $.ajax({
            method: "POST",
            url: "../../forgetPassword/index.php",
            data: variable,
            type: 'json',
            beforeSend: function (data) {
            }})
                .done(function (data) {
                    console.log(data);
                    var json_obj = $.parseJSON(data);
                    if (!json_obj.error) {
                        alert(json_obj.mensaje)
                    } else {
                        alert(json_obj.msg)
                    }
                })
                .fail(function (data) {
                    
                })
                .always(function (data) {
                    tableUsuarios.ajax.reload();
                });
}

function deleteInfoClient(){

     variable = {"action": "2",
                "idRol": $('#idrol').val(),
                "cliUser": $('#numerocli').val(),
                "cedUser": $('#cedulacli').val(),
                "nameFullUser": $('#nombrecli').val(),
                "emailUser": $('#emailcli').val(),
                "phoneUser": $('#telefonocli').val(),
                "statusUser": "3",
                "idUser": $('#idcli').val()
        };

        $.ajax({
            method: "POST",
            url: "./index.php",
            data: variable,
            type: 'json',
            beforeSend: function (data) {
            }})
                .done(function (data) {
                    console.log(data);
                    var json_obj = $.parseJSON(data);

                    if (json_obj.status === "SUCCESS") {
                        alert("Cliente eliminado correctamente!");
                        $('#modalFicha').modal('hide');

                    } else {
                        alert(json_obj.msg)
                    }
                })
                .fail(function (data) {
                    
                })
                .always(function (data) {
                    tableUsuarios.ajax.reload();
                });
}

$(document).ready(function(){
    page.Init();
});
