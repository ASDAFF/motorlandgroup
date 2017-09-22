$(function(){
    $('.trade-car-small-slider').each(function(i, smallSlider){
        smallSlider = $(smallSlider);
        
        smallSlider.slick({
            accessibility: false,
            //lazyLoad: 'ondemand',
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#trade-car-big-slider-' + (i + 1),
            focusOnSelect: true,
            centerMode: true,
            centerPadding: '0px',
            draggable: false,
        });

        var bigSlider = $('#trade-car-big-slider-' + (i + 1));

        //spike nail
        bigSlider.on('init', function (slick) {
            setTimeout(function(){
                bigSlider.slick('slickGoTo', '0', false);
            }, 50);
        });

        //spike nail
        $('.super-trade-slider-giant').on('beforeChange', function(){
            var index = bigSlider.slick('slickCurrentSlide');
            bigSlider.slick('slickGoTo', index, false);
        });

        bigSlider.slick({
            accessibility: false,
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '#trade-car-small-slider-' + (i + 1),
        });
    })
});
