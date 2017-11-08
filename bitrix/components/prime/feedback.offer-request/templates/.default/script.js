({
    initValidation: function () {

        $(function () {
            $('#test-drive-form').validate({
                debug: true,
                rules: {
                   

                    surname: 'required',
                    phone: 'required',
                    rule: 'required',
                    "modelid[]": 'required',

                },
                messages: {
                    required: "Данное поле обьязательное.",

                    "modelid[]": {
                        required: 'Укажите хотя-бы одну модель.'
                    }

                },

                errorPlacement: function (error, element) {
                    if(element.attr("name") == "modelid[]"){
                        error.insertAfter("#place-one-model-error-here");
                    }else if(element.attr("name") == "rule"){
                        error.appendTo(element.parent().parent().find('.not-a-label'));
                    } else {
                        error.insertAfter(element);
                    }
                },

                submitHandler: function(form) { // for demo

                    var msg   = $(form).serialize();

                    $.ajax({
                        type: "POST",
                        url: '/ajax/offer-request-post.php',
                        data: msg,
                        success: function(data, textStatus, jqXHR) {
                            zzModal.show(data);
                            setTimeout(function () {
                                zzModal.hide();
                            }, 5000);
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                        },
                        dataType: 'html'
                    });

                    return false;
                }
            });
        })
    },

    initMasking: function(){

    },

    init: function(){
        this.initValidation();
        this.initMasking();

        return this;
    }
}).init();

$(function(){
    $("#sel-phone").mask("+7 (999) 999-99-99");
    $('.show-rules').click(function(){
        zzModal.show($('.rule_block').html());
    });
});

