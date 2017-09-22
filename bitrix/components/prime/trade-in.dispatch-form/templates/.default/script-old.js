$(document).ready(function() {
    var fileInput = $('#files-for-trade-in-dispatch')

    fileInput.filer({
        limit: 5,
        maxSize: 5,
        //extensions: ['jpg', 'png', 'gif', 'bmp'],
        extensions: null,
        changeInput: true,
        showThumbs: true,
        appendTo: null,
        theme: "default",
        templates: {
            box: '<ul class="jFiler-item-list"></ul>',
            item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-info">\
                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left status-and-progress">\
                                        <li>{{fi-progressBar}}</li>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
            itemAppend: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-info">\
                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left">\
                                        <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: true,
            removeConfirmation: false,
            _selectors: {
                list: '.jFiler-item-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action',
            }
        },
        uploadFile: {
            url: "./php/upload.php",
            data: {},
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function(){},
            success: function(data, el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i></div>").hide().appendTo(parent).fadeIn("slow");
                });
            },
            error: function(el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                });
            },
            statusCode: {},
            onProgress: function(){},
            onComplete: function(){}
        },
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        //addMore: true,
        addMore: false,
        clipBoardPaste: true,
        excludeName: null,
        files: null,
        beforeShow: function(){return true},
        onSelect: function(){
            console.dir('++++++++++++++++++++');
            console.dir('onSelect event.');
            console.dir('filer.getList():');
            console.dir(fileInput.trigger("filer.getList", {files:[]}));

            //console.dir(this);
            console.dir('arguments:');
            console.dir(arguments);


            var inpOrig = arguments[5][0];

            console.dir('inpOrig.files:');
            console.dir(inpOrig.files);
        },
        afterShow: function(){},
        onRemove: function(){
            console.dir('onRemove');
        },
        onEmpty: function(){},
        captions: {
            button: "Выбрать",
            //feedback: "Изображения не Выбраны",
            feedback: "Загрузите Фото",
            feedback2: "Загружено:",
            drop: "Бросьте, чтобы загрузить",
            removeConfirmation: "Вы уверены что хотите удалить это изображение?",
            errors: {
                filesLimit: "Максимальное количество изображений: {{fi-limit}}.",
                filesType: "Только Изображения Могут Быть Загружены.",
                filesSize: "Изображение {{fi-name}} слишком велико! Максимальный размер: {{fi-maxSize}} MB.",
                filesSizeAll: "Выбранные Изображения Слишком Большие!  Загрузите Изображения менее{{fi-maxSize}} MB.",
            }
        }
    });


    $('#form-for-trade-in-dispatch').validate({
        debug: true,
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
            }
        },
        submitHandler: function(form) {
            //console.dir('submitted');
            var myFormData = new FormData(form);

            console.dir(myFormData);
            //console.dir(myFormData);
            //jQuery.ajax({
            //    type: "POST",
            //    url: "/trade-in/form-handler.php",
            //    data: myFormData,
            //
            //    contentType: false,
            //    processData: false,
            //
            //    success: function(data) {
            //        //console.dir('success');
            //    },
            //    error: function(errorObject, errorText, errorHTTP) {
            //        //console.dir('error');
            //    }
            //});
        }
    });
});