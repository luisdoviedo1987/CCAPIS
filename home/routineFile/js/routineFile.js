var myDropzone;
var fileLocation = null;
var fileName = null;
var fileUploaded = false;
var readed = false;
var page = {
    Init: function() {
        global.options.url = 'index.php';
        $("#table-file").hide();
        $("#btn-read-file").bind("click", function() {
            if ($("#rowIndex").val().length > 0) {
                page.InitReadFile();
            } else {
                global.myToast(4, "Error", 'Por favor ingresa el indice inicial', 'toast-top-right', 'toast-top-right');
            }
        });

        $("#btn-create-routine").bind("click", function() {
            if (!fileUploaded) {
                global.myToast(4, "Error", 'Por favor cargue un archivo', 'toast-top-right', 'toast-top-right');
                return;
            }

            if (!readed) {
                global.myToast(4, "Error", 'Por favor lea el archivo', 'toast-top-right', 'toast-top-right');
                return;
            }

            if ($("#routineName").val() == "") {
                global.myToast(4, "Error", 'Por favor indique el nombre de la rutina', 'toast-top-right', 'toast-top-right');
                return;
            }

            if (!$('#checkbox1').is(':checked')) {
                global.myToast(4, "Error", 'Por favor confirme que reviso la información', 'toast-top-right', 'toast-top-right');
                return;
            }

            page.sendRoutineFile();
        });

    },
    InitWizard: function() {

        $("#wizard").on("leaveStep", function(e, anchorObject, stepIndex, stepDirection) {
            if (stepIndex == 0) {
                if (!fileUploaded) {
                    global.myToast(4, "Error", 'Por favor cargue un archivo para continuar', 'toast-top-right', 'toast-top-right');
                    return false;
                }
            }

            if (stepIndex == 1) {
                if (!readed) {
                    global.myToast(4, "Error", 'Por favor lea el archivo para continuar', 'toast-top-right', 'toast-top-right');
                    return false;
                }
            }

            if (stepIndex == 2) {
                if ($("#routineName").val() == "") {
                    global.myToast(4, "Error", 'Por favor ingrese el nombre de la rutina', 'toast-top-right', 'toast-top-right');
                    return false;
                }
            }

            return true;
        });

        // Initialize the showStep event
        $("#wizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
            if (stepIndex == 1) {
                global.myToast(3, "Información", 'Por favor indica la posicion inicial de lectura', 'toast-top-right', 'toast-top-right');
            }

            if (stepIndex == 2) {
                if ($("#routine_name").val() == "") {
                    $("#routine_name").val(fileName);
                }
            }

        });
    },
    InitReadFile: function() {
        global.options.data = {
            "action": 2,
            "file": fileLocation,
            "index": $("#rowIndex").val()
        };
        global.loadingBlock()

        var response = global.Ajax(global.options);
        response.then(function(data) {
            global.dismissLoadingBlock();
            $("#table-file").show();

            var data = JSON.parse(data);
            $("#table-file").show();
            if ($.fn.DataTable.isDataTable('#dataTables-file')) {
                $('#dataTables-file').DataTable().destroy();
            }

            $('#dataTables-file').DataTable({
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ columna",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "No se encontro ninguna columna",
                    "sInfo": "Mostrando columnas del _START_ al _END_ de un total de _TOTAL_ ",
                    "sInfoEmpty": "Mostrando columnas de 0 al 0 de un total de 0",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ columnas)",
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
                "aLengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                "iDisplayLength": 100,
                "data": data.data,
                "columns": [
                    { "data": "title" },
                    { "data": "value" }

                ],
                "columnDefs": [{
                    "targets": 1,
                    "render": function(data, type, row) {
                        return "<label class='toggle-switch'><input type='checkbox' value='" + row.title + "' name='primary[]'  autocomplete='off'><span class='toggle-switch-slider round'></span></label>";
                    }
                }]
            });
            readed = true;
        }).catch(function(error) {
            console.log(error);
        });
    },
    sendRoutineFile: function() {
        global.options.data = {
            "action": 3,
            "file": fileLocation,
            "form": $('#create-routine').serialize(),
            "index": $("#rowIndex").val()
        };
        global.loadingBlock()
        var response = global.Ajax(global.options);
        response.then(function(data) {
            global.dismissLoadingBlock();
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.msg, 'toast-top-right', 'toast-top-right');
            } else {
                global.myToast(2, "Completado", 'La rutina fue creada correctamente!', 'toast-top-right', 'toast-top-right');

                setTimeout(() => location.reload(), 1000);
                var fileLocation = null;
                var fileName = null;
                var fileUploaded = false;
                var readed = false;
            }
        }).catch(function(error) {
            console.log(error);
        });
    },
    InitDropzone: function() {
        myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "./index.php",
            method: "post",
            // Set the url
            previewsContainer: "#dpz-single-file", // Define the container to display the previews
            paramName: "doc", // The name that will be used to transfer the file
            maxFilesize: 5,
            maxFiles: 1,
            clickable: true,
            addRemoveLinks: true,
            dictRemoveFile: "Eliminar",
            dictFallbackMessage: "El navegador utilizado no soporta el arrastre de archivos",
            dictFileTooBig: "El archivo que intenta subir supera el maximo permitido",
            dictInvalidFileType: "El tipo del archivo no es valido",
            dictMaxFilesExceeded: "Solo se puede subir un archivo a la vez",
            dictCancelUpload: "Cancelar Carga",
            init: function() {
                this.on("maxfilesexceeded", function(file) {
                    this.removeAllFiles();
                    this.addFile(file);
                    global.myToast(3, "Informacion", 'Solo se acepta la carga de un archivo a la vez', 'toast-top-right', 'toast-top-right');
                });
                this.on("success", function(file, responseText) {
                    var response = JSON.parse(responseText);
                    if (response.error == false) {
                        fileLocation = response.file;
                        fileUploaded = true;
                        fileName = response.name;
                        $('#routine_name').val(fileName);
                        $('#wizard').smartWizard("next");
                    } else {
                        global.myToast(4, "Error", response.msg, 'toast-top-right', 'toast-top-right');
                        fileUploaded = false;
                        myDropzone.removeFile(file);
                    }
                });
                this.on("sending", function(file, xhr, formData) {
                    formData.append("action", "1");
                });
                this.on("addedfile", function(file) {
                    var allow = ["application/vnd.ms-excel", "application/csv", "Appletext/x-csv", "application/x-csv", "text/comma-separated-values", "text/x-comma-separated-values", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];
                    if (!allow.includes(file.type)) {
                        global.myToast(4, "Error", 'El tipo del archivo que intenta cargar no es valido!', 'toast-top-right', 'toast-top-right');
                        myDropzone.removeFile(file);
                    }
                });
                this.on("removedfile", function(file) {
                    fileUploaded = false;
                });
            }
        });

        myDropzone.on("addedfile", function(file) {
            file.previewElement.addEventListener("click", function() {
                fileUploaded = false;
                myDropzone.removeFile(file);
            });
        });

    }
};

$(document).ready(function() {
    page.Init();
    Dropzone.autoDiscover = false;

    page.InitDropzone();
    page.InitWizard();
});