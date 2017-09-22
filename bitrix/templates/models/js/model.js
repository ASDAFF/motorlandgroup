var vc = vc || {};
(function () {
    'use strict';

    vc.settings = {
        "languageId": "ru",
        "marketId": "ru",
        "dealerLocatorUrl": "/ru/find-a-dealer",
        "requestQuoteURL": "",
        "sc_site": "russia"
    };

}());

var utag_data= { "friendly_name":"xc90:landing_page",
    "site_segment":"xc90",
    "site_subsegment":"model_landing_page",
    "locale":"russia"
};

$(function () {
    //console.dir('transferred model');

    $('#gellery').slidesjs({
        height: 300,
        navigation: false
    });




    $('.tab_form').hide();
    $('.tab_step').click(function(){
        $('.tab_step').removeClass("activ");
        $(this).addClass("activ").parents('.items-list').find('.tab_form').hide().eq($(this).index()).fadeIn(150);
        return false;
    });

    $('#slaider').slidesjs({
        height: 400,
        navigation: false
    });

    /**************************/
    var i       = '';
    var va      = '';

    $(".t").css("display","none");
    $(".z").click(function()
    {
        i = $(".z").index(this);
        $(".t").eq(i).toggle();
        $(this).toggleClass("show");
        va = $(this).attr("class");

    });
    /**************************/
    virtual();
    $(window).resize(virtual);
    function virtual() {

        var w=$('#gellery').width();
        var h=$('#gellery').height();

        $('.virtual').css({'height' : h, 'width' : w});

    };
    /**************************/

});

$(window).scroll(function(){
    var w = $(window).scrollTop();
    if ( w > 50 ) {
        $(".subnav_model .nav-logo").show();
        $(".har_menu").removeClass('no_m');
    } else {
        $(".subnav_model .nav-logo").hide();
        $(".har_menu").addClass('no_m');
    }

});



function add_test_in() {
    var mist=0;
    var data = {};
    data.modelName = $('select[name=model]').val();
    data.user_name = $('input[name=fio_t]').val();
    data.user_phone = $('input[name=telephone_t]').val();

    if(data.user_name == ''){
        $('input[name=fio_t]').addClass("error");
        mist=mist+1;
    }else{
        $('input[name=fio_t]').removeClass("error");
    }
    if(data.user_phone == ''){
        $('input[name=telephone_t]').addClass("error");
        mist=mist+1;
    }else{
        $('input[name=telephone_t]').removeClass("error");
    }
    if(mist==0){
        $.ajax({
            type: "POST",
            url: "/ajax/add_test.php",
            data: data,
            success: function(data){
                zzModal.show(data);
            }
        });

        $('input[name=fio_t]').val('');
        $('input[name=telephone_t]').val('');

    }
}

function get_discount() {

    var mist=0;
    var data = {};
    data.user_name = $('input[name=fio_d]').val();
    data.user_phone = $('input[name=telephone_d]').val();

    if(data.user_name == ''){
        $('input[name=fio_d]').addClass("error");
        mist=mist+1;
    }else{
        $('input[name=fio_d]').removeClass("error");
    }

    if(data.user_phone == ''){
        $('input[name=telephone_d]').addClass("error");
        mist=mist+1;
    }else{
        $('input[name=telephone_d]').removeClass("error");
    }

    if(mist==0){
        $.ajax({
            type: "POST",
            url: "/ajax/get_discount.php",
            data: data,
            success: function(data){
                zzModal.show(data);
            }
        });

        $('input[name=fio_d]').val('');
        $('input[name=telephone_d]').val('');
    }
}

function add_phone() {
    var mist=0;
    var data = {};
    data.user_name = $('input[name=fio_p]').val();
    data.user_phone = $('input[name=telephone_p]').val();

    if(data.user_name == ''){
        $('input[name=fio_p]').addClass("error");
        mist=mist+1;
    }else{
        $('input[name=fio_p]').removeClass("error");
    }

    if(data.user_phone == ''){
        $('input[name=telephone_p]').addClass("error");
        mist=mist+1;
    }else{
        $('input[name=telephone_p]').removeClass("error");
    }
    if(mist==0){
        $.ajax({
            type: "POST",
            url: "/ajax/add_phone.php",
            data: data,
            success: function(data){
                zzModal.show(data);
            }
        });

        $('input[name=fio_p]').val('');
        $('input[name=telephone_p]').val('');

    }
}