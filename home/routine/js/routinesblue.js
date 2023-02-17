var validService = false;
var content = null;
var contentColumns = null;
var readed = true;
var page = {
  row: {},
  props: {
    id: "",
    type: "text",
    class: "form-control",
    value: "",
    disable: false,
  },
  mode: "GET",
  init: function () {
    var self = this;
    global.options.url = "index.php?blue";
    self.loadTypes();
    $(".showColumns").hide("");
  },
  InitWizard: function () {
    $("#wizard").smartWizard({
      keyNavigation: false,
      selected: 0,
      theme: "default",
      transitionEffect: "",
      transitionSpeed: 0,
      useURLhash: false,
      showStepURLhash: false,
      toolbarSettings: {
        toolbarPosition: "bottom",
      },
      keyboardSettings: {
        keyNavigation: false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        keyLeft: [1111], // Left key code
        keyRight: [1111], // Right key code
      },
      lang: {
        // Language variables for button
        next: "Siguiente",
        previous: "Anterior",
      },
    });

    $("#wizard").on(
      "leaveStep",
      function (e, anchorObject, stepIndex, stepDirection) {
        if (stepIndex == 0) {
          if ($("#clipboard-default").val() == "") {
            global.myToast(
              4,
              "Error",
              "Por favor indique la dirección ULR a consumir",
              "toast-top-right",
              "toast-top-right"
            );
            return false;
          }
        }

        return true;
      }
    );

    // Initialize the showStep event
    $("#wizard").on(
      "showStep",
      function (e, anchorObject, stepIndex, stepDirection, stepPosition) {
        if (stepIndex == 1) {
          global.myToast(
            3,
            "Información",
            "Por favor pruebe el servicio web",
            "toast-top-right",
            "toast-top-right"
          );
        }
      }
    );

    $("#wizard").keypress(function (event) {
      if (event.which == 13) {
      }
    });
  },
  loadTypes: function () {
    var self = this;
    global.options.method = "POST";
    global.options.data = {
      action: 1,
    };
    var response = global.Ajax(global.options);
    response
      .then(function (data) {
        var data = JSON.parse(data);
        if (data.error) {
          //global.myToast(4, "Error", data.mensaje, 'toast-top-right', 'toast-top-right');
        } else {
          //global.myToast(2, "Acción Completada", data.mensaje, 'toast-top-right', 'toast-top-right');
          $("#typeBodySelect")
            .empty()
            .append(
              global.selectOptions("id_body_type", "name", data, null, "is_raw")
            );
        }
      })
      .catch(function (error) {
        console.log(error);
      });
  },
  SendRequest: function () {
    global.loadingBlock();

    var self = this;
    var params = {};

    var params = self.getDataFromTab("#tabTwo-1");
    var headers = self.getDataFromTab("#tabTwo-3");
    var body = {
      typeBody: $("#typeBodySelect").val(),
      inputs: [],
      raw: "",
    };
    if (Number($("#typeBodySelect option:selected").data("extra")) === 1) {
      body.raw = $("#bodyRawText").val();
    } else {
      body.inputs = self.getDataFromTab("#tabTwo-4");
    }
    var auth = {
      typeAuth: $("#typeAuthentication").val(),
    };
    if ($("#typeAuthentication").val() !== "0") {
      var value = Number($("#typeAuthentication").val());
      if (value === 1) {
        auth.username = $("#authUser").val();
        auth.userpass = $("#authPass").val();
      } else if (value === 2) {
        auth.authToken = $("#authToken").val();
      } else if (value === 3) {
        auth.barerToken = $("#barertoken").val();
      }
    }

    global.options.method = "POST";
    global.options.data = {
      action: 2,
      method: self.mode,
      params: params,
      auth: auth,
      headers: headers,
      body: body,
      url: $("#clipboard-default").val(),
    };
    var response = global.Ajax(global.options);
    response
      .then(function (data) {
        global.dismissLoadingBlock();

        var data = JSON.parse(data);
        console.log(data);
        if (data.error) {
          global.myToast(
            4,
            "Error",
            data.msg,
            "toast-top-right",
            "toast-top-right"
          );
          validService = false;
          $(".showColumns").hide("slow");
        } else {
          content = JSON.stringify(data.content, null, 2);
          validService = true;
          $(".showColumns").show("slow");
          $("#bodyResponse").val(JSON.stringify(data.content, null, 2));
        }
      })
      .catch(function (error) {
        global.dismissLoadingBlock();

        console.log(error);
      });
  },
  sendRoutineJson: function () {
    var self = this;

    var params = self.getDataFromTab("#tabTwo-1");
    var headers = self.getDataFromTab("#tabTwo-3");
    var body = {
      typeBody: $("#typeBodySelect").val(),
      inputs: [],
      raw: "",
    };
    if (Number($("#typeBodySelect option:selected").data("extra")) === 1) {
      body.raw = $("#bodyRawText").val();
    } else {
      body.inputs = self.getDataFromTab("#tabTwo-4");
    }
    var auth = {
      typeAuth: $("#typeAuthentication").val(),
    };
    if ($("#typeAuthentication").val() !== "0") {
      var value = Number($("#typeAuthentication").val());
      if (value === 1) {
        auth.username = $("#authUser").val();
        auth.userpass = $("#authPass").val();
      } else if (value === 2) {
        auth.authToken = $("#authToken").val();
      } else if (value === 3) {
        auth.barerToken = $("#barertoken").val();
      }
    }

    global.options.data = {
      action: 4,
      url: $("#clipboard-default").val(),
      method: self.mode,
      params: params,
      auth: auth,
      headers: headers,
      body: body,
      content: content,
      contentColumns: contentColumns,
      index: $("#index").val(),
      day: $("#day").val(),
      hour: $("#hour").val(),
      minutes: $("#minutes").val(),
      routine_name: $("#routine_name").val(),
    };

    global.loadingBlock();
    var response = global.Ajax(global.options);
    response
      .then(function (data) {
        global.dismissLoadingBlock();
        var data = JSON.parse(data);
        if (data.error) {
          global.myToast(
            4,
            "Error",
            data.msg,
            "toast-top-right",
            "toast-top-right"
          );
        } else {
          global.myToast(
            2,
            "Completado",
            "La rutina fue creada correctamente!",
            "toast-top-right",
            "toast-top-right"
          );

          setTimeout(() => location.reload(), 1000);
          var fileLocation = null;
          var fileName = null;
          var fileUploaded = false;
          var readed = false;
        }
      })
      .catch(function (error) {
        console.log(error);
      });
  },
  InitColumnsJson: function () {
    global.options.data = {
      action: 3,
      content: content,
      index: $("#index").val(),
    };
    global.loadingBlock();

    var response = global.Ajax(global.options);
    response
      .then(function (data) {
        global.dismissLoadingBlock();
        $("#dataTables-json").show();

        var data = JSON.parse(data);
        contentColumns = data.data;

        $("#dataTables-json").show();
        if ($.fn.DataTable.isDataTable("#dataTables-json")) {
          $("#dataTables-json").DataTable().destroy();
        }

        $("#dataTables-json").DataTable({
          language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ columna",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "No se encontro ninguna columna",
            sInfo:
              "Mostrando columnas del _START_ al _END_ de un total de _TOTAL_ ",
            sInfoEmpty: "Mostrando columnas de 0 al 0 de un total de 0",
            sInfoFiltered: "(filtrado de un total de _MAX_ columnas)",
            sInfoPostFix: "",
            sSearch: "Buscar: ",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
              sFirst: "Primero",
              sLast: "Último",
              sNext: "Siguiente",
              sPrevious: "Anterior",
            },
            oAria: {
              sSortAscending:
                ": Activar para ordenar la columna de manera ascendente",
              sSortDescending:
                ": Activar para ordenar la columna de manera descendente",
            },
          },
          aLengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"],
          ],
          iDisplayLength: 100,
          data: data.data,
          columns: [{ data: "title" }, { data: "value" }],
          columnDefs: [
            {
              targets: 1,
              render: function (data, type, row) {
                if (row.title.length > 0) {
                  return '<span class="badge badge-success">Valido!</span>';
                } else {
                  return '<span class="badge badge-danger">La columna no puede esta vacia!</span>';
                }
                //return "<label class='toggle-switch'><input type='checkbox' value='"+row.title+"' name='primary[]'  autocomplete='off'><span class='toggle-switch-slider round'></span></label>";
              },
            },
          ],
        });
        readed = true;
      })
      .catch(function (error) {
        console.log(error);
      });
  },
  generateBlock: function (count, custom) {
    return (
      '<div class="row ' +
      custom +
      '">' +
      '<div class="col-2 divKeyValue">' +
      '<div class="form-group">' +
      '<input type="text" class="form-control keyInput" placeholder="Key" autocomplete="off">' +
      "</div>" +
      "</div>" +
      '<div class="col-3 divKeyValue">' +
      '<div class="form-group">' +
      '<input type="text" class="form-control valueInput" placeholder="Value" autocomplete="off">' +
      "</div>" +
      "</div>" +
      '<div class="col-2">' +
      '<div class="checkbox">' +
      '<input id="check' +
      count +
      '" type="checkbox" class="checkChange" value="1">' +
      '<label for="check' +
      count +
      '"> Incrementa </label>' +
      "</div> " +
      "</div> " +
      '<div class="col-4 divTextConcurrency" style="display: none;">' +
      '<div class="input-group mb-3">' +
      '<input type="number" class="form-control concurrencyInput" placeholder="Valor" autocomplete="off">' +
      '<div class="input-group-append">' +
      '<select class="form-control concurrencyTypeInput" style="width:100px">' +
      '<option value="N" selected> Numero</option>' +
      '<option value="D"> Día</option>' +
      '<option value="H"> Hora</option>' +
      '<option value="M">  Minuto</option>  ' +
      "</select>" +
      "</div>" +
      "</div>" +
      "</div>" +
      '<div class="col-1 divBtnDelete">' +
      '<button type="button" class="btn btn-danger deleteBtn">Eliminar</button>' +
      "</div>" +
      "</div>"
    );
  },
  getDataFromTab(idtab) {
    var result = [];
    $(idtab)
      .find(".container")
      .children()
      .not(".divRawForm")
      .each(function (i, element) {
        var row = {};
        var $inputValue = $(element).find(".valueInput");
        var $inputKey = $(element).find(".keyInput");
        if (
          $($inputValue).val().trim().length > 0 &&
          $($inputKey).val().trim().length > 0
        ) {
          row.key = $($inputKey).val();
          row.value = $($inputValue).val();

          var checkbox = $(element).find(".checkChange");
          if ($(checkbox).is(":checked")) {
            row.concurrency = 1;
            row.numberConcurrency = $(element).find(".concurrencyInput").val();
            row.type = $(element).find(".concurrencyTypeInput").val();
          } else {
            row.concurrency = 0;
            row.numberConcurrency = 0;
            row.type = 0;
          }

          result.push(row);
        }
      });
    return result;
  },
};

$(document).ready(function () {
  page.init();
  page.InitWizard();

  $(".dropdown-menu").on("click", "a", function () {
    var text = $(this).html();
    page.mode = text.trim();
    var htmlText = text + ' <span class="caret"></span>';
    var target = $(this).closest(".dropdown").find(".dropdown-toggle");
    var current = $(target).html();
    $(this).html(current);
    $(target).html(htmlText);
  });

  $(".icon-add").on("click", function () {
    var value = Number($(this).data("id"));
    var container = $(this).parent().siblings(".container");
    var count = $(container).children().length;
    count *= 1;
    var custom = "";
    if ($(container).data("current") == "3") {
      custom = "divForm";
    }
    var row = page.generateBlock(count + $(container).data("current"), custom);
    $(container).append(row);
  });

  $(".container").on("click", ".deleteBtn", function () {
    var container = $(this).parent().parent().parent();
    if ($(container).children().length > 1) {
      $(this).parent().parent().remove();
    }
  });

  $("#typeAuthentication").on("change", function () {
    var value = Number($(this).val());
    if (value === 1) {
      $("#basicAuthDiv").show("slow");
      $("#bearerDiv").hide("slow");
      $("#oAuthDiv").hide("slow");
    } else if (value === 2) {
      $("#basicAuthDiv").hide("slow");
      $("#bearerDiv").show("slow");
      $("#oAuthDiv").hide("slow");
    } else if (value === 3) {
      $("#basicAuthDiv").hide("slow");
      $("#bearerDiv").hide("slow");
      $("#oAuthDiv").show("slow");
    } else {
      $("#basicAuthDiv").hide("slow");
      $("#bearerDiv").hide("slow");
      $("#oAuthDiv").hide("slow");
    }
  });

  $("#typeBodySelect").on("change", function () {
    var value = Number($("#typeBodySelect option:selected").data("extra"));
    if (value === 1) {
      $(".divForm").hide("slow");
      $("#divRawForm").show("slow");
      $(".iconextra").hide();
    } else {
      $(".divForm").show("slow");
      $("#divRawForm").hide("slow");
      $(".iconextra").show();
    }
  });

  $("#container").on("change", ".checkChange", function () {
    if ($(this).is(":checked")) {
      $(this).parent().parent().next().show();
      //$(".divKeyValue").removeClass('col-4').addClass('col-3');
    } else {
      $(this).parent().parent().next().hide();
      //$(".divKeyValue").removeClass('col-3').addClass('col-4');
    }
  });

  $("#btn-test-web").bind("click", function () {
    page.SendRequest();
  });

  $("#btn-get-data").bind("click", function () {
    page.InitColumnsJson();
  });

  $("#btn-create-routine").bind("click", function () {
    if (
      $("#day").val() == 0 &&
      $("#hour").val() == 0 &&
      $("#minutes").val() == 0
    ) {
      global.myToast(
        4,
        "Error",
        "Por favor ingrese la recurrencia",
        "toast-top-right",
        "toast-top-right"
      );
      return;
    }

    if (!validService) {
      global.myToast(
        4,
        "Error",
        "Por favor pruebe el servicio",
        "toast-top-right",
        "toast-top-right"
      );
      return;
    }

    if (!readed) {
      global.myToast(
        4,
        "Error",
        "Por favor ingrese el nivel",
        "toast-top-right",
        "toast-top-right"
      );
      return;
    }

    if ($("#routineName").val() == "") {
      global.myToast(
        4,
        "Error",
        "Por favor indique el nombre de la rutina",
        "toast-top-right",
        "toast-top-right"
      );
      return;
    }

    if (!$("#checkbox1").is(":checked")) {
      global.myToast(
        4,
        "Error",
        "Por favor confirme que reviso la información",
        "toast-top-right",
        "toast-top-right"
      );
      return;
    }

    page.sendRoutineJson();
  });
});
