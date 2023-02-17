
var page = { 
    row: {},
    mode: false, 
    init: function () {
        var self = this;
        
    },
    generateInput: function(id, class, value ){
        
    
    } 
};

$(document).ready(function(){ 
    page.init();

    $(".dropdown-menu li a").click(function(){

        $(".btn:first-child").text($(this).text());
        $(".btn:first-child").val($(this).text());
  
    });
  
 
});

