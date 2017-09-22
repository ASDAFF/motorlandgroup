$(function(){
    var tabs = $('#form-tabs-on-contacts');

    function initTabs(){
        //differences between tabs and accordion
        var width = $(window).width();
        var animation;
        var animationQueue;
        if (width > 768){
            animation = false;
            animationQueue = true;
            duration = 50;
        } else {
            animation = 'slide';
            animationQueue = false;
            duration = 200;
        }

        tabs.responsiveTabs({
            startCollapsed: true,
            //startCollapsed: false,
            animation: animation,
            animationQueue: animationQueue,
            animationQueue: false,
            duration: duration,
            activate: function(event, tab){
                tab.anchor.data('is-just-activated', 'true');
            },
            deactivate: function(event, tab){
                tab.anchor.data('is-just-activated', 'false');
            },
        });

        //close all tabs on click on active tab-link
        tabs.find('.r-tabs-tab a').on('click', function(){
            var anchor = $(this);
            var li = anchor.parent();
            if (anchor.data('is-just-activated') == 'true') {
                anchor.data('is-just-activated', 'false');
            } else {
                console.dir('closing it');
                //tabs.responsiveTabs('deactivate', 0);
                tabs.responsiveTabs('deactivate', li.index());
            }
        });
    }

    //initializing
    initTabs();
    //$(window).resizeend(function(){
    //    initTabs();
    //})

    /*валидация "Задать Вопрос"*/

    $('#ask-the-question').validate({
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
            var myFormData = new FormData(form);

            jQuery.ajax({
                type: "POST",
                url: "/ajax/ask-question-post.php",
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

    $('#enroll-the-service').validate({
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
            var myFormData = new FormData(form);

            jQuery.ajax({
                type: "POST",
                url: "/ajax/enroll-to.php",
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