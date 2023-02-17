var page = {
    Init : function () {
        var self = this;

        $("#div-name").hide();
        $("#div-name-msj").hide();

        $("#button-forget-password").on("click", function () {

             if($("#email-user").val().trim() !== ''){
                $("#button-forget-password").prop( "disabled", true );
                page.sendForgetPassword();
             }else{
                global.myToast(3, "Error", 'Por favor completa la información solicitada', 'toast-top-right', 'toast-top-right');
             }
        });

        $("#button-recovery-password").on("click", function () {
             if($("#pass-user").val().trim() !== '' && $("#pass-user2").val().trim() !== ''){
                if($("#pass-user").val().trim() == $("#pass-user2").val().trim()){
                     $("#button-recovery-password").prop( "disabled", true );
                     page.changePassword();
                }else{
                     global.myToast(3, "Error", 'Las contraseñas no coinciden', 'toast-top-right', 'toast-top-right');
                }
             }else{
                global.myToast(3, "Error", 'Por favor completa la información solicitada', 'toast-top-right', 'toast-top-right');
             }
        });       
    },
    sendForgetPassword: function () {
        var self = this;
                global.options.data = {
                "action" : 1,
                "email_user" : $("#email-user").val()
            };
            global.options.url  = 'index.php';
            var response = global.Ajax(global.options);
            response.then(function (data) {
                console.log(data);

                var data = JSON.parse(data);
                if(data.error){
                    global.myToast(4, "Error", data.mensaje, 'toast-top-right', 'toast-top-right');


                }else{
                    global.myToast(2, "Acción Completada", data.mensaje, 'toast-top-right', 'toast-top-right');
                    $("#email-user").val("")
                }
               $("#button-forget-password").prop( "disabled", false );
            }).catch(function (error) {
                console.log(error);
            });  
    },
    changePassword: function () {
            global.options.url  = 'index.php?hash=recovery';
            var self = this;
                    global.options.data = {
                    "action" : 1,
                    "pass-user" : $("#pass-user").val(),
                    "token-user" : $("#token-user").val(),
                    "id-user": $("#id-user").val()
                };
            var response = global.Ajax(global.options);
            response.then(function (data) {
                console.log(data);

                var data = JSON.parse(data);
                if(data.error){
                    global.myToast(4, "Error", data.mensaje, 'toast-top-right', 'toast-top-right');

                }else{
                    $("#pass-user").val("");
                    $("#pass-user2").val("")
                    global.myToast(2, "Acción Completada", data.mensaje, 'toast-top-right', 'toast-top-right');
                    
                    window.alert(data.mensaje);
                    window.location.href='http://159.65.167.172/api/autowolkvox/';
                }
                $("#button-recovery-password").prop( "disabled", false );
            }).catch(function (error) {
                console.log(error);
            });  
    }
};

$(document).ready(function(){
    page.Init();
});

