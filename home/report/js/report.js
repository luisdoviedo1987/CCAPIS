var tableUsuarios;

var page = {
    Init : function () {
        var self = this;
        global.options.url  = 'index.php';
      
        $('.date-time-picker-component').datetimepicker({
            fontAwesome: true
        });
    }
};



$(document).ready(function(){
    page.Init();
});
