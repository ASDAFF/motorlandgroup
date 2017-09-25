paceOptions = {
    // Disable the 'elements' source
    elements: false,

    // Only show the progress on regular and ajax-y page navigation,
    // not every request
    restartOnRequestAfter: false
}

$(document).ready(function() {
    $('#files-for-trade-in-dispatch').styler({
        filePlaceholder: 'Выберите Фото',
        fileNumber: 'Выбрано Фото: %s'
    });

    $('#form-for-trade-in-dispatch').validate({
        debug: true,
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
            },
            rule: {
                required: true,
            }

        },
        submitHandler: function(form) {
            var myFormData = new FormData(form);

            jQuery.ajax({
                type: "POST",
                url: "/ajax/form-handler.php",
                data: myFormData,

                contentType: false,
                processData: false,

                success: function(data) {
                    zzModal.show(data);
                },
                error: function(errorObject, errorText, errorHTTP) {}
            });
        }
    });
});

$(function(){
    $("input[name='phone']").mask("+7 (999) 999-99-99");
    $('.show-rules').click(function(){
        zzModal.show($('.rule_blocks').html());
    });
});