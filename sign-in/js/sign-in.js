var page = {
    Init : function () {
        var self = this;
        global.options.url  = 'index.php';

        $("#year").html((new Date).getFullYear());

        $('#username').bind("enterKey",function(e){
           $('#password').focus();
        });

        $('#username').keyup(function(e){
            if(e.keyCode == 13){
                $(this).trigger("enterKey");
            }
        });

        $('#password').bind("enterKey",function(e){
           $(this).trigger("enterKey");
        });

        $('#password').keyup(function(e){
            if(e.keyCode == 13){
                $("#button-sign-in").trigger("click");
            }
        });

    },
    login: function () {
        var self = this;
        global.options.data = {
            "action" : 1,
            "username" : $("#username").val(),
            "password" : $("#password").val(),
            "remenber" : $("#chkRemember").is(":checked")
        };

        var response = global.Ajax(global.options);
        response.then(function (data) {
            var data = JSON.parse(data);
            if(data.error){
                global.myToast(4, "Error", data.mensaje, 'toast-top-right', 'toast-top-right');
                $("#password").val("");
                $("#password").focus();
            }else{
                global.myToast(2, "Acción Completada", data.mensaje, 'toast-top-right', 'toast-top-right');
                window.location.href = data.url;
            }
        }).catch(function (error) {
            console.log(error);
        });
    }

};

$(document).ready(function(){
    page.Init();
    $("#button-sign-in").on("click", function () {
        if($("#username").val().trim() !== '' && $("#password").val().trim() !== ''){
            page.login();
        }else{
            global.myToast(3, "Error", 'Por favor completa la información solicitada', 'toast-top-right', 'toast-top-right');
        }
    });
});

