({
    initValidation: function () {

        $(function () {
            $('#test-reviews-form').validate({
                debug: true,
                rules: {
                   

                    surname: 'required',
                    phone: 'required',
                    text: 'required',


                },
                messages: {
                    required: "Данное поле обьязательное."
                },

                errorPlacement: function (error, element) {
                    if(element.attr("name") == "modelid[]"){
                        error.insertAfter("#place-one-model-error-here");
                    } else {
                        error.insertAfter(element);
                    }
                },

                submitHandler: function(form) { // for demo

                    var msg   = $(form).serialize();

                    $.ajax({
                        type: "POST",
                        url: '/ajax/reviews-post.php',
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

