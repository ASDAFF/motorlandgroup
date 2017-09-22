$(function(){





    var scrollFromIt;
    scrollFromIt = $('a.w-link');
    var width = $(window).width();
    if (width > 930) {scrollFromIt = scrollFromIt.not('.three-forms-exclude');}

    scrollFromIt.smoothScroll({
        offset: -79,
    });

    var scrollNoMargin;
    scrollNoMargin = $('a.w-link-nm-JS');
    scrollNoMargin.smoothScroll();



});