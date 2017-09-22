zzModal = {
    wrapper: '',
    ovelay: '',
    box: '',
    content: '',
    cross: '',
    template: '\
        <div class="zzModalWrapper">\
            <div class="zzModalOverlay"></div>\
            <div class="zzModalBox">\
                <div class="zzModalBoxCross">\
                    <i class="fa fa-times fa-2x"></i>\
                </div>\
                <div class="zzModalContent"></div>\
            </div>\
        </div>',

    show: function (content) {
        this.content.html(content);
        this.wrapper.addClass('visible');
    },
    hide: function () {
        this.content.html('');
        this.wrapper.removeClass('visible');
    },

    init: function () {
        var self = this;
        $(function () {
            $('body').append(self.template);
            self.wrapper = $('.zzModalWrapper');
            self.overlay = $('.zzModalOverlay');
            self.box     = $('.zzModalBox');
            self.cross   = $('.zzModalBoxCross');
            self.content = $('.zzModalContent');

            self.overlay.click(function() {
                self.hide();
            });
            self.cross.click(function() {
                self.hide();
            });
        })
    }
};

zzModal.init();

