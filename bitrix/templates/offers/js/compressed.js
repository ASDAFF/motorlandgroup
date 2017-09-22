/*
* jquery-match-height master by @liabru
* http://brm.io/jquery-match-height/
* License MIT
*/
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,a=function(t){return parseFloat(t)||0},i=function(e){var o=1,i=t(e),n=null,r=[];return i.each(function(){var e=t(this),i=e.offset().top-a(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(n-i))<=o?r[r.length-1]=s.add(e):r.push(e),n=i}),r},n=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=n(e);if(o.remove){var a=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(a)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="master",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=i,r._parse=a,r._parseOptions=n,r._apply=function(e,o){var s=n(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),d=h.parents().filter(":hidden");return d.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),d.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=i(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var i=t(o),n=0;if(s.target)n=s.target.outerHeight(!1);else{if(s.byRow&&i.length<=1)return void i.css(s.property,"");i.each(function(){var e=t(this),o=e.attr("style"),a=e.css("display");"inline-block"!==a&&"flex"!==a&&"inline-flex"!==a&&(a="block");var i={
display:a};i[s.property]="",e.css(i),e.outerHeight(!1)>n&&(n=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}i.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=a(e.css("border-top-width"))+a(e.css("border-bottom-width")),o+=a(e.css("padding-top"))+a(e.css("padding-bottom"))),e.css(s.property,n-o+"px"))})}),d.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),a=o.attr("data-mh")||o.attr("data-match-height");a in e?e[a]=e[a].add(o):e[a]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(a,i){if(i&&"resize"===i.type){var n=t(window).width();if(n===e)return;e=n;
}a?-1===o&&(o=setTimeout(function(){s(i),o=-1},r._throttle)):s(i)},t(r._applyDataApi),t(window).bind("load",function(t){r._update(!1,t)}),t(window).bind("resize orientationchange",function(t){r._update(!0,t)})});
'use strict';

//GW = {}
//let gw = {}
if (typeof GW == 'undefined') {
    var GW = {};
}

GW.sameHeight = {
    maxHeight: 0,
    elements: '',

    clear: function clear() {

        this.elements.each(function (i, el) {
            el = $(el);
            el.height('auto');
        });
    },
    findMax: function findMax() {
        var _this = this;

        this.elements.each(function (i, el) {
            el = $(el);
            var elH = el.outerHeight();
            if (elH > _this.maxHeight) {
                _this.maxHeight = elH;
            }
        });
    },

    setMaxToAll: function setMaxToAll() {
        var _this2 = this;

        this.elements.each(function (i, el) {
            el = $(el);

            //var pricesHeight = el.find('.old-new-prices-block').outerHeight();
            var pricesHeight = el.find('.toBottomThem').outerHeight();
            var newHeitht = _this2.maxHeight + pricesHeight;
            el.outerHeight(newHeitht);
        });
    },

    init: function init(elements) {
        this.maxHeight = 0;
        this.elements = elements;

        this.clear();
        this.findMax();
        this.setMaxToAll();
    }
};
'use strict';

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Banner = (function () {
    _createClass(Banner, null, [{
        key: '_getActiveClass',
        value: function _getActiveClass() {
            return 'active';
        }
    }]);

    function Banner(_ref) {
        var element = _ref.element;

        _classCallCheck(this, Banner);

        this.switcher;
        this.element = element;
    }

    _createClass(Banner, [{
        key: 'unactivate',
        value: function unactivate() {
            this.element.removeClass(Banner._getActiveClass());
        }
    }, {
        key: 'activate',
        value: function activate() {
            this.element.addClass(Banner._getActiveClass());
        }
    }]);

    return Banner;
})();
'use strict';

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Switcher = (function () {
    _createClass(Switcher, null, [{
        key: '_getPrimaryClass',
        value: function _getPrimaryClass() {
            return 'primary';
        }
    }, {
        key: '_getSecondaryClass',
        value: function _getSecondaryClass() {
            return 'secondary';
        }
    }, {
        key: '_getUsualClass',
        value: function _getUsualClass() {
            return 'usual';
        }
    }]);

    function Switcher(_ref) {
        var element = _ref.element;
        var tripleBanner = _ref.tripleBanner;

        _classCallCheck(this, Switcher);

        this.banner;
        this.tripleBanner = tripleBanner;
        this.element = element;
        this.scrollingNav = this.element.find('nav.nicescroll');

        this._initView();
    }

    _createClass(Switcher, [{
        key: '_initView',
        value: function _initView() {
            this._setHeaderzToBottom();
        }
    }, {
        key: '_setHeaderzToBottom',
        value: function _setHeaderzToBottom() {
            var headerz = this.element.find('.headerz');
            var menu = this.element.find('.block-with-menu');

            //headerz
            var heightSwitcher = this.element.height();
            var heightH3 = headerz.find('.h3').innerHeight();

            var topVal = heightSwitcher - heightH3;

            headerz.css('top', topVal);

            //block-with-menu
            menu.removeClass('hovered');
        }
    }, {
        key: '_setHeaderzFullyVisible',
        value: function _setHeaderzFullyVisible() {

            var headerz = this.element.find('.headerz');
            var menu = this.element.find('.block-with-menu');

            //headerz
            if (menu[0]) {
                headerz.css('top', '100%');
            } else {
                var heightSwitcher = this.element.height();
                var heightHeaderz = headerz.height();
                var topVal = heightSwitcher - heightHeaderz;

                headerz.css('top', topVal);
            }

            //block-with-menu
            menu.addClass('hovered');
            //this.scrollingNav.one('transitionend webkitTransitionEnd', ()=>{
            //    this.scrollingNav.getNiceScroll().resize();
            //});
        }
    }, {
        key: '_onHoverIn',
        value: function _onHoverIn() {
            this.tripleBanner.changeBannerActive(this);
            this.banner.activate();

            this.tripleBanner.setSwitcherPrimary(this);
        }
    }, {
        key: '_onHoverOut',
        value: function _onHoverOut() {
            this.banner.unactivate();
            this.tripleBanner.activateBannerDefault();

            this.tripleBanner.setAllSwitchersUsual();
        }
    }, {
        key: 'attachEvents',
        value: function attachEvents() {
            this.element.hover(this._onHoverIn.bind(this), this._onHoverOut.bind(this));
        }
    }, {
        key: 'detachEvents',
        value: function detachEvents() {
            this.element.off('mouseenter mouseleave');;
        }
    }, {
        key: 'setPrimary',
        value: function setPrimary() {
            this.element.removeClass(Switcher._getSecondaryClass() + ' ' + Switcher._getUsualClass());
            this.element.addClass(Switcher._getPrimaryClass());
            this._setHeaderzFullyVisible();
        }
    }, {
        key: 'setSecondary',
        value: function setSecondary() {
            this.element.removeClass(Switcher._getPrimaryClass() + ' ' + Switcher._getUsualClass());
            this.element.addClass(Switcher._getSecondaryClass());
            this._setHeaderzToBottom();
        }
    }, {
        key: 'setUsual',
        value: function setUsual() {
            this.element.removeClass(Switcher._getPrimaryClass() + ' ' + Switcher._getSecondaryClass());
            this.element.addClass(Switcher._getUsualClass());
            this._setHeaderzToBottom();
        }
    }]);

    return Switcher;
})();
'use strict';

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var TripleBanner = (function () {
    _createClass(TripleBanner, null, [{
        key: '_getHoveredClass',
        value: function _getHoveredClass() {
            return 'hovered';
        }
    }]);

    function TripleBanner(_ref) {
        var bannerElements = _ref.bannerElements;
        var switcherElements = _ref.switcherElements;
        var defaultBannerId = _ref.defaultBannerId;
        var wrapper = _ref.wrapper;

        _classCallCheck(this, TripleBanner);

        this.isOn = false;
        this.banners = [];
        this.switchers = [];
        this.bannerDefault;
        this.bannerActive;

        this.wrapper = wrapper;

        var i = 0;
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
            for (var _iterator = bannerElements[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                var bannerElement = _step.value;

                var nextBanner = new Banner({ element: bannerElement });
                this.banners.push(nextBanner);

                if (i == defaultBannerId) {
                    this.bannerDefault = this.bannerActive = nextBanner;
                }
                i += 1;
            }
        } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion && _iterator.return) {
                    _iterator.return();
                }
            } finally {
                if (_didIteratorError) {
                    throw _iteratorError;
                }
            }
        }

        var _iteratorNormalCompletion2 = true;
        var _didIteratorError2 = false;
        var _iteratorError2 = undefined;

        try {
            for (var _iterator2 = switcherElements[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
                var switcherElement = _step2.value;

                var nextSwither = new Switcher({ element: switcherElement, tripleBanner: this });
                this.switchers.push(nextSwither);
            }
        } catch (err) {
            _didIteratorError2 = true;
            _iteratorError2 = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion2 && _iterator2.return) {
                    _iterator2.return();
                }
            } finally {
                if (_didIteratorError2) {
                    throw _iteratorError2;
                }
            }
        }

        this._linkBannersAnsSwitchers();
    }

    _createClass(TripleBanner, [{
        key: 'on',
        value: function on() {
            this._attachEventsToTripleBanner();
            this._attachEventsToBannersAndSwitchers();

            this.isOn = true;
        }
    }, {
        key: 'off',
        value: function off() {
            this._detachEventsFromTripleBanner();
            this._detachEventsFromBannersAndSwitchers();

            this.isOn = false;
        }
    }, {
        key: '_attachEventsToTripleBanner',
        value: function _attachEventsToTripleBanner() {
            this.wrapper.hover(this._onHoverIn.bind(this), this._onHoverOut.bind(this));
        }
    }, {
        key: '_detachEventsFromTripleBanner',
        value: function _detachEventsFromTripleBanner() {
            this.wrapper.off('mouseenter mouseleave');
        }
    }, {
        key: '_onHoverIn',
        value: function _onHoverIn() {
            this.wrapper.addClass(TripleBanner._getHoveredClass());
        }
    }, {
        key: '_onHoverOut',
        value: function _onHoverOut() {
            this.wrapper.removeClass(TripleBanner._getHoveredClass());
        }
    }, {
        key: '_linkBannersAnsSwitchers',
        value: function _linkBannersAnsSwitchers() {
            var iterationQty = this.banners.length;
            for (var i = 0; i < iterationQty; i++) {
                this.banners[i].switcher = this.switchers[i];
                this.switchers[i].banner = this.banners[i];
            }
        }
    }, {
        key: '_attachEventsToBannersAndSwitchers',
        value: function _attachEventsToBannersAndSwitchers() {
            var _iteratorNormalCompletion3 = true;
            var _didIteratorError3 = false;
            var _iteratorError3 = undefined;

            try {
                for (var _iterator3 = this.switchers[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
                    var switcher = _step3.value;

                    switcher.attachEvents();
                }
            } catch (err) {
                _didIteratorError3 = true;
                _iteratorError3 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion3 && _iterator3.return) {
                        _iterator3.return();
                    }
                } finally {
                    if (_didIteratorError3) {
                        throw _iteratorError3;
                    }
                }
            }
        }
    }, {
        key: '_detachEventsFromBannersAndSwitchers',
        value: function _detachEventsFromBannersAndSwitchers() {
            var _iteratorNormalCompletion4 = true;
            var _didIteratorError4 = false;
            var _iteratorError4 = undefined;

            try {
                for (var _iterator4 = this.switchers[Symbol.iterator](), _step4; !(_iteratorNormalCompletion4 = (_step4 = _iterator4.next()).done); _iteratorNormalCompletion4 = true) {
                    var switcher = _step4.value;

                    switcher.detachEvents();
                }
            } catch (err) {
                _didIteratorError4 = true;
                _iteratorError4 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion4 && _iterator4.return) {
                        _iterator4.return();
                    }
                } finally {
                    if (_didIteratorError4) {
                        throw _iteratorError4;
                    }
                }
            }
        }
    }, {
        key: 'changeBannerActive',
        value: function changeBannerActive(hoveredSwither) {
            this.bannerActive.unactivate();
            hoveredSwither.banner.activate();
            this.bannerActive = hoveredSwither;
        }
    }, {
        key: 'activateBannerDefault',
        value: function activateBannerDefault() {
            this.bannerDefault.activate();
            this.bannerActive = this.bannerDefault;
        }
    }, {
        key: 'setSwitcherPrimary',
        value: function setSwitcherPrimary(hoveredSwitcher) {
            hoveredSwitcher.setPrimary();
            var _iteratorNormalCompletion5 = true;
            var _didIteratorError5 = false;
            var _iteratorError5 = undefined;

            try {
                for (var _iterator5 = this.switchers[Symbol.iterator](), _step5; !(_iteratorNormalCompletion5 = (_step5 = _iterator5.next()).done); _iteratorNormalCompletion5 = true) {
                    var switcher = _step5.value;

                    if (Object.is(switcher, hoveredSwitcher)) {
                        switcher.setPrimary();
                    } else {
                        switcher.setSecondary();
                    }
                }
            } catch (err) {
                _didIteratorError5 = true;
                _iteratorError5 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion5 && _iterator5.return) {
                        _iterator5.return();
                    }
                } finally {
                    if (_didIteratorError5) {
                        throw _iteratorError5;
                    }
                }
            }
        }
    }, {
        key: 'setAllSwitchersUsual',
        value: function setAllSwitchersUsual() {
            var _iteratorNormalCompletion6 = true;
            var _didIteratorError6 = false;
            var _iteratorError6 = undefined;

            try {
                for (var _iterator6 = this.switchers[Symbol.iterator](), _step6; !(_iteratorNormalCompletion6 = (_step6 = _iterator6.next()).done); _iteratorNormalCompletion6 = true) {
                    var switcher = _step6.value;

                    switcher.setUsual();
                }
            } catch (err) {
                _didIteratorError6 = true;
                _iteratorError6 = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion6 && _iterator6.return) {
                        _iterator6.return();
                    }
                } finally {
                    if (_didIteratorError6) {
                        throw _iteratorError6;
                    }
                }
            }
        }
    }]);

    return TripleBanner;
})();
'use strict';

$(function () {

    var crossOver = 768;

    var myTripleBanner = new TripleBanner({
        bannerElements: [$('.triple-banner .b1'), $('.triple-banner .b2'), $('.triple-banner .b3')],
        switcherElements: [$('.triple-banner .s1'), $('.triple-banner .s2'), $('.triple-banner .s3')],
        defaultBannerId: 1,
        wrapper: $('.triple-banner')
    });

    var windowWidth = $(window).width();

    if (windowWidth > crossOver) {
        myTripleBanner.on();
    } else {
        myTripleBanner.off();
    }

    $(window).resizeend(function () {
        var windowWidth = $(window).width();

        if (windowWidth > crossOver && !myTripleBanner.isOn) {
            myTripleBanner.on();
        }

        if (windowWidth <= crossOver && myTripleBanner.isOn) {
            myTripleBanner.off();
        }
    });

    var els = $("[data-height-ratio-triple]");
    function resizeThem(els) {
        els.each(function () {
            var self = $(this);
            console.dir(self.width() + 'px');
            self.height(self.width() * self.data('height-ratio-triple'));
        });
    }
    resizeThem(els);
    $(window).resizeend(resizeThem.bind(null, els));

    var sameHeightThem = $('.triple-banner .triple-menu-offers>nav>ul>li');
    var sameHeightThemSM = $('.triple-banner-SM .triple-menu-offers>nav>ul>li');
    GW.sameHeight.init(sameHeightThem);
    GW.sameHeight.init(sameHeightThemSM);
    $(window).resizeend(function () {
        GW.sameHeight.init(sameHeightThem);
    });
    $(window).resizeend(function () {
        GW.sameHeight.init(sameHeightThemSM);
    });
});
'use strict';

if (typeof GW == 'undefined') {
    var GW = {};
}
GW.OffersPage = {

    initSliders: function initSliders() {
        $('#main-slider-big-slides').slick({
            lazyLoad: 'progressive',
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            asNavFor: '#main-slider-small-slides'
        });

        $('#main-slider-small-slides').slick({
            lazyLoad: 'progressive',
            infinite: true,
            autoplay: true,
            autoplaySpeed: 8000,
            //slidesToShow: 5,
            slidesToShow: 5,
            slidesToScroll: 5,
            asNavFor: '#main-slider-big-slides',
            focusOnSelect: true,
            centerMode: true,
            centerPadding: 0,
            responsive: [{
                //breakpoint: 992,
                breakpoint: 1020,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }]
        });
    },

    init: function init() {
        this.initSliders();
    }
};

$(function () {
    if ($('body').hasClass('new-offers')) {
        GW.OffersPage.init();
    }
});