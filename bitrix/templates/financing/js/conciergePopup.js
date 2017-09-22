$(document).ready(function () {
    var facebookShareURL = $('.social-dhubsharelink[data-sharesubject="Facebook"]').attr("data-dhubsharelink");
    $(".conciergeChatOpen").on('click', function (e) {
        e.preventDefault();
        PopupCenter($(this).attr("href"), $(this).text(), '445', '500');
    });
    function PopupCenter(url, title, w, h) {
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=0, left=0, status = no, toolbar = no, menubar = no, location = no');
        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }

    $('body').on('click', '.social-dhubsharelink[data-sharesubject="Facebook"]', function (e) {

        e.preventDefault();

        //New implementation for sharing different modules with different images
        var imgSource = "";

        if ($(this).parents(".module").find(".ff-carousel").length > 0) {
            imgSource = $(this).parents(".ff-carousel-item").find(".responsiveImg")[0].attributes["data-img-desktop"].nodeValue;
        }
        else {
            imgSource = $(this).parents(".module").find(".responsiveImg")[0].attributes["data-img-desktop"].nodeValue;
        }

        if (imgSource.indexOf("//") == 0) {

            imgSource = location.protocol + imgSource;

        } else if (imgSource.indexOf("/") == 0) {

            imgSource = location.origin + imgSource;
        }

        imgSource = encodeURIComponent(imgSource);

        //Get the url set in sitecore (with original parameters)
        var dhublink = $(this).attr("data-dhubOriglink");
        dhublink = dhublink.replace("{picture}", imgSource);

        //First call to replace in main link
        dhublink = replacePersonalizationParameter(dhublink);
        //Second call to replae in description link
        dhublink = replacePersonalizationParameter(dhublink);

        //replace the picture placeholder with the personalized hero image
        $(this).attr("data-dhubsharelink", dhublink);
        //open the share link in a pop up   
        window.open(dhublink, "_blank", "toolbar=0,location=0,menubar=0,height=500,width=500");

    });

    $('body').on('click', '.social-dhubsharelink[data-sharesubject="Twitter"]', function (e) {
        e.preventDefault();

        var sharelink = $(this).attr("data-dhubOriglink");
        sharelink = replacePersonalizationParameter(sharelink);
        window.open(sharelink, "_blank", "toolbar=0,location=0,menubar=0,height=500,width=500");

    });

    $('body').on('click', '.email-dhubsharelink[data-sharesubject="Email"]', function (e) {
        e.preventDefault();

        var sharelink = $(this).attr("data-dhubOriglink");
        sharelink = replacePersonalizationParameter(sharelink);
        window.location.href = sharelink;
    });

});

function replacePersonalizationParameter(link) {
    $('.cta-options').each(function () {
        link = link.replace('{' + $(this).children().find('.option.active').attr("data-key") + '}', $(this).children().find('.option.active').attr("data-option-code"));
    });
    return link;
}

//Hotjar Tracking Code for www.accenure.com
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings = {hjid:557461, hjsv: 5 };
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
