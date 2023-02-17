var global = {
    db : false,
    options: {
        method: 'POST',
        url: '',
        async: true,
        data: {},
        type: 'json',
        headers : {},
        processData : true,
        contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
        cache       : true,
        timeout : 0
    },
    Init : function () {
        var self = this;
    },
    Ajax : function (options){
        return new Promise(function (resolve, reject) {
            $.ajax({
                    method: options.method,
                    url: options.url,
                    async: options.async,
                    data: options.data,
                    type: options.type,
                    headers : options.headers,
                    processData : options.processData,
                    contentType     : options.contentType,
                    cache       : options.cache
                }
            ).done(resolve).fail(reject);
        });
    },
    logOutProcess : function (){
        var self = this;
        self.options.url  = '../../global/index.php';
        self.options.data = {
            "action" : 1
        };
        var response = self.Ajax(self.options);
        response.then(function (data) {
            var data = JSON.parse(data);
            if(data.error){
                alert(data.message);
            }else{
                window.location.href = data.url;

            }
        }).catch(function (error) {
            console.log(error);
        });
    },
    selectOptions: function( key, value, data, first = null, extra){
        var options = '';
        if(first !== null){
              options = '<option value="">'+first+'</option>';
        }
        data.forEach(function (row) {
            var v = (typeof extra === 'undefined' || extra === null || extra === '' ) ? '' : row[extra] ;
            options += '<option value="'+row[key]+'" data-extra="'+v+'">'+row[value]+'</option>';
        });
        return options;
    },
    myToast: function(type, title, body, positionClass, containerId){
        switch(type) {
            //INFO
            case 1:
                toastr.info(body, title, {positionClass: positionClass, containerId: containerId});
                break;
            //SUCCESS
            case 2:
                toastr.success(body, title, {positionClass: positionClass, containerId: containerId});

                break;
            //WARNING
            case 3:
                toastr.warning(body, title, {positionClass: positionClass, containerId: containerId});

                break;
            //ERROR
            case 4:
                toastr.error(body, title, {positionClass: positionClass, containerId: containerId});

                break;
            default:
                toastr.info(body, title, {positionClass: positionClass, containerId: containerId});
                break;
        }

    },
    loadingBlockEle: function (e, msg) {
        $(e).block({
            message: "<div class='resize'><center><img src='../../resources/img/loading.gif' ></span><br><h4>"+msg+"</h4></center></div>",
            overlayCSS: {
                backgroundColor: '#FFF',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                color: '#333',
                backgroundColor: 'transparent'
            }
        });
    },
    dismissLoadingElem:function (e) {
        $(e).unblock();
    },
    loadingBlock :function(msg){
        msg = "Procesando por favor espere";
        $.blockUI({
            message: "<div class='resize'><center><img src='../../resources/img/loading.gif' ></span><br><h4>"+msg+"</h4></center></div>",
            overlayCSS: {
                backgroundColor: '#FFF',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                color: '#333',
                backgroundColor: 'transparent'
            },
            onBlock: function() {
            }
        });
    },
    dismissLoadingBlock : function(){
        $.unblockUI();
    }
};

$(document).ready(function(){
    'use strict';
    global.Init();
    $("#closeSession").on("click", function () {
        global.logOutProcess();
    })

});
