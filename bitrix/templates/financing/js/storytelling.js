/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 16);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

Object.defineProperty(exports, "__esModule", {
  value: true
});
// eslint-disable-next-line no-use-before-define
var $ = exports.$ = global.$;
// eslint-disable-next-line no-use-before-define
var vc = exports.vc = global.vc;
// eslint-disable-next-line no-use-before-define
var dataLayer = exports.dataLayer = global.dataLayer;
var getTelium = exports.getTelium = function getTelium() {
  var utag = global.utag;
  return utag;
};
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(15)))

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.isTabletLandscape = exports.textSubstring = exports.isMobile = exports.addMultipleListeners = exports.smartResize = exports.resizableBgImage = exports.formatValue = exports.checkAndPush = exports.forceRedraw = undefined;

var _libs = __webpack_require__(0);

var forceRedraw = exports.forceRedraw = function forceRedraw() {
  _libs.$.fn.redraw = function () {
    return this.hide(0, function () {
      (0, _libs.$)(this).show();
    });
  };
};
var checkAndPush = exports.checkAndPush = function checkAndPush(array, value) {
  if (value.length > 0) {
    array.push(value);
  }
};
var formatValue = exports.formatValue = function formatValue(value) {
  if (!value) {
    return null;
  }
  var formatted = value.toLowerCase().replace(/ /g, '_');
  return formatted;
};
var resizableBgImage = exports.resizableBgImage = function resizableBgImage() {
  for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
    args[_key] = arguments[_key];
  }

  var breakpoints = {
    small: 768,
    medium: 1024
  };
  var $windowWidth = (0, _libs.$)(window).outerWidth();
  _libs.$.each(args, function (j, k) {
    _libs.$.each(k, function (i, v) {
      var $element = (0, _libs.$)(v);
      var dataValue = null;
      if ($windowWidth <= breakpoints.small) {
        dataValue = $element.data('bg-S');
      } else if ($windowWidth >= breakpoints.medium) {
        dataValue = $element.data('bg-L');
      } else {
        dataValue = $element.data('bg-M');
      }
      $element.css('background-image', 'url(' + dataValue + ')');
    });
  });
};

var smartResize = exports.smartResize = function smartResize() {
  var sr = 'smartresize';
  var debounce = function debounce(func, threshold, execAsap) {
    for (var _len2 = arguments.length, Args = Array(_len2 > 3 ? _len2 - 3 : 0), _key2 = 3; _key2 < _len2; _key2++) {
      Args[_key2 - 3] = arguments[_key2];
    }

    var timeout = void 0;
    return function debounced() {
      var obj = this;
      var args = Args;

      function delayed() {
        if (!execAsap) {
          func.apply(obj, args);
        }
        timeout = null;
      }
      if (timeout) {
        clearTimeout(timeout);
      } else if (execAsap) {
        func.apply(obj, args);
      }
      timeout = setTimeout(delayed, threshold || 200);
    };
  };
  _libs.$.fn[sr] = function (fn) {
    return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
  };
};
var addMultipleListeners = exports.addMultipleListeners = function addMultipleListeners(el, s, fn) {
  var evts = s.split(' ');
  for (var i = 0, iLen = evts.length; i < iLen; i++) {
    el[0].addEventListener(evts[i], fn, false);
  }
};

var isMobile = exports.isMobile = function isMobile() {
  var isMobileSize = false;
  var ismobile = /iphone|ipod|android|blackberry|opera|mini|windows\sce|palm|smartphone|iemobile/i.test(navigator.userAgent.toLowerCase());
  var istablet = /ipad|android|android 3.0|xoom|sch-i800|playbook|tablet|kindle/i.test(navigator.userAgent.toLowerCase());
  if (ismobile || istablet) {
    isMobileSize = true;
  }
  return isMobileSize;
};

var textSubstring = exports.textSubstring = function textSubstring(element, start, end) {
  var dots = '...';
  _libs.$.each(element, function (j, k) {
    var currentElementLength = (0, _libs.$)(element[j]).text().length;
    if (currentElementLength >= end) {
      var workingItem = (0, _libs.$)(k);
      var originalString = workingItem.text();
      var substringedText = originalString.substring(start, end) + dots;
      workingItem.text(substringedText);
    }
  });
};

var isTabletLandscape = exports.isTabletLandscape = function isTabletLandscape() {
  var isTabletLandscapeSize = false;
  var istablet = /ipad|android|android 3.0|xoom|sch-i800|playbook|tablet|kindle/i.test(navigator.userAgent.toLowerCase());
  if (istablet && window.innerWidth >= 1024) {
    isTabletLandscapeSize = true;
  }
  return isTabletLandscapeSize;
};

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.teliumTopStories = exports.teliumOtherStories = exports.init = exports.bindTeliumtoOtherStories = exports.pageLoadEvent = exports.checkItems = exports.storytellingModuleInView = exports.getSortType = exports.getTopic = exports.getTitle = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var utag = (0, _libs.getTelium)();
var getTitle = exports.getTitle = function getTitle() {
  var storyName = Helpers.formatValue((0, _libs.$)('#storytelling-subnav').data('storytitle'));
  return storyName;
};
var getTopic = exports.getTopic = function getTopic() {
  var topicName = Helpers.formatValue((0, _libs.$)('#storytelling-subnav').data('storytopic'));
  return topicName;
};
var getSortType = exports.getSortType = function getSortType() {
  var sortType = Helpers.formatValue((0, _libs.$)('.storytelling-popularBlock .active-tab').text());
  return sortType;
};
/*
  Storytelling Module Load: Story Page
  Event fires when module comes into view
*/
var storytellingModuleInView = exports.storytellingModuleInView = function storytellingModuleInView() {
  var moduleTopicLink = (0, _libs.$)('.storytelling-module__titleBlock--link');
  var workingItem = moduleTopicLink.attr('href').split('id=')[1];
  var separatorIndex = workingItem.indexOf('&');
  var topicName = Helpers.formatValue(workingItem.substring(0, separatorIndex));
  var content1Name = Helpers.formatValue((0, _libs.$)('.storytelling-imageItem--1').find('.storytelling-imageItem__title').text());
  var content2Name = Helpers.formatValue((0, _libs.$)('.storytelling-imageItem--2').find('.storytelling-imageItem__title').text());
  var content3Name = Helpers.formatValue((0, _libs.$)('.storytelling-imageItem--3').find('.storytelling-imageItem__title').text());
  utag.link({
    event: 'load_event',
    experience: 'storytelling',
    buttonType: 'in_view',
    buttonClass: 'module',
    topic: topicName,
    content_1_name: content1Name,
    content_2_name: content2Name,
    content_3_name: content3Name
  });
};
var checkItems = exports.checkItems = function checkItems(itemsInView) {
  var storyName = getTitle();
  var topicName = getTopic();
  _libs.$.each(itemsInView, function (i, v) {
    _libs.$.each(v, function (j, k) {
      var elem = (0, _libs.$)(k);
      if (typeof elem !== 'undefined' && elem.length > 0) {
        if (elem.visible(true, elem)) {
          var storyTitle = elem.find('.storytelling-storyThumb__title h3');
          var otherStoryTitle = elem.find('.storytelling-otherStories__storySummary-title p');
          var containerMediaType = elem.data('contenttype') ? elem.data('contenttype') : elem.data('type');
          containerMediaType = containerMediaType || 'image';
          if (storyTitle.length > 0) {
            storyName = storyTitle.text();
            topicName = elem.find('.storytelling-storyThumb__title h2').text();
          } else if (otherStoryTitle.length > 0) {
            storyName = otherStoryTitle.text();
            topicName = elem.find('.storytelling-otherStories__storySummary-headline p').text();
          }
          topicName = Helpers.formatValue(topicName);
          storyName = Helpers.formatValue(storyName);
          if (elem.hasClass('storytelling-module')) {
            storytellingModuleInView();
          } else {
            utag.link({
              event: 'load_event',
              experience: 'storytelling',
              buttonType: 'in_view',
              buttonClass: 'page_body',
              story_name: storyName,
              topic: topicName,
              container_media_type: containerMediaType
            });
          }
        }
      }
    });
  });
};

var pageLoadEvent = exports.pageLoadEvent = function pageLoadEvent() {
  /*
    Page Load Event: Hub Page
    Event fires when page is loaded
  */
  var storyName = getTitle();
  var topicName = getTopic();
  var sortType = getSortType();
  var isStory = (0, _libs.$)('#storytelling-subnav').data('isstory');
  if (isStory !== 'True') {
    var activeItem = (0, _libs.$)('.storytelling-topicBlock__item--active');
    var filterType = [];
    var filterName = [];
    if (activeItem.length > 0) {
      filterType = activeItem.closest('div[class^="storytelling-topicBlock__dropdown--by"]').hasClass('storytelling-topicBlock__dropdown--byTopicContent') ? 'by_topic' : 'by_car';
      filterType = Helpers.formatValue(filterType);
      filterName = activeItem.data('class');
      filterName = Helpers.formatValue(filterName);
    }
    utag.view({
      event: 'page_load',
      experience: 'storytelling',
      sort_type: sortType,
      filter_type: filterType,
      filter_name: filterName
    });
  }
  /*
    Page Load Event: Story Page
    Event fires when page is loaded
  */
  if (isStory === 'True') {
    utag.view({
      event: 'page_load',
      experience: 'storytelling',
      story_name: storyName,
      topic: topicName
    });
  }
  var itemsInView = [];
  Helpers.checkAndPush(itemsInView, (0, _libs.$)('article.storytelling-storyThumb'));
  if (Helpers.isMobile()) {
    Helpers.checkAndPush(itemsInView, (0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer').not((0, _libs.$)('.storytelling-js-hideMobile .storytelling-otherStories__storyContainer')));
  } else {
    Helpers.checkAndPush(itemsInView, (0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer'));
  }
  Helpers.checkAndPush(itemsInView, (0, _libs.$)('.storytelling-module'));
  checkItems(itemsInView);
};
var bindTeliumtoOtherStories = exports.bindTeliumtoOtherStories = function bindTeliumtoOtherStories() {
  var storyName = getTitle();
  var topicName = getTopic();
  (0, _libs.$)('article.storytelling-otherStories__storyContainer').on('click.GTMStoryClick', function (e) {
    storyName = (0, _libs.$)(e.target).closest('.storytelling-otherStories__storyContainer').find('.storytelling-otherStories__storySummary-title p').text();
    topicName = (0, _libs.$)(e.target).closest('.storytelling-otherStories__storyContainer').find('.storytelling-otherStories__storySummary-headline p').text();
    storyName = Helpers.formatValue(storyName);
    topicName = Helpers.formatValue(topicName);
    utag.link({
      event: 'click_event',
      experience: 'storytelling',
      buttonType: 'content',
      buttonClass: 'page_body',
      story_name: storyName,
      topic: topicName
    });
  });
};
var init = exports.init = function init() {
  var storyName = getTitle();
  var topicName = getTopic();
  var sortType = getSortType();
  /*
    Story In View Event:
    Event fires when 'container' (i.e. story) comes into view on page
  */
  utag = (0, _libs.getTelium)();
  if ((0, _libs.$)('.storytelling').length > 0) {
    pageLoadEvent();
    /*
      SubNav Click
    */
    (0, _libs.$)('.storytelling-popularBlock a').on('click.GTM', function () {
      utag.link({
        event: 'click_event',
        experience: 'storytelling',
        buttonType: 'sort_type',
        buttonClass: 'sub_nav',
        sort_type: sortType
      });
    });
    /*
      Story Click:
      Event fires on click on a story container to load story page
    */
    (0, _libs.$)('article.storytelling-storyThumb').on('click.GTMStoryClick', function (e) {
      storyName = (0, _libs.$)(e.target).closest('.storytelling-storyThumb').find('.storytelling-storyThumb__title h3').text();
      topicName = (0, _libs.$)(e.target).closest('.storytelling-storyThumb').find('.storytelling-storyThumb__title h2').text();
      storyName = Helpers.formatValue(storyName);
      topicName = Helpers.formatValue(topicName);
      utag.link({
        event: 'click_event',
        experience: 'storytelling',
        buttonType: 'content',
        buttonClass: 'page_body',
        story_name: storyName,
        topic: topicName
      });
    });
    bindTeliumtoOtherStories();
    /*
      Social Share Click: Story Page
      Event fires on click on Share method icon in top right corner of page
    */
    (0, _libs.$)('.social-sharelink').on('click.socialShareGTM', function (e) {
      var socialPlatform = (0, _libs.$)(e.target).closest('.social-sharelink').data('socialplatform');
      utag.link({
        event: 'click_event',
        experience: 'storytelling',
        buttonType: 'social',
        buttonClass: 'sub_nav',
        story_name: storyName,
        topic: topicName,
        social_platform: socialPlatform
      });
    });
    /*
      Video player Click: Story Page
      Event fires on video 'Play' click
    */
    (0, _libs.$)('.trigger-gallery').on('click.videoPlayerGTM', function (e) {
      var containerMediaType = (0, _libs.$)(e.target).closest('.trigger-gallery').data('item-type');
      var videoTitle = (0, _libs.$)(e.target).closest('.trigger-gallery').attr('title');
      if (containerMediaType !== 'image') {
        utag.link({
          event: 'click_event',
          experience: 'storytelling',
          buttonType: containerMediaType + '_play',
          buttonClass: 'page_body',
          story_name: storyName,
          topic: topicName,
          video_name: videoTitle,
          container_media_type: containerMediaType
        });
      }
      /*
        Bind Video Ended Event to Dynamicly added component to the DOM
      */
      setTimeout(function () {
        (0, _libs.$)('video.mediaelement').on('ended', function () {
          utag.link({
            event: 'load_event',
            experience: 'storytelling',
            buttonType: 'video_end',
            buttonClass: 'page_body',
            story_name: storyName,
            topic: topicName,
            video_name: videoTitle
          });
        });
      }, 200);
    });
    (0, _libs.$)('.mediaelement').on('click.videoPlayerGTM', function (e) {
      var videoElement = (0, _libs.$)(e.target);
      if (videoElement[0].paused) {
        utag.link({
          event: 'click_event',
          experience: 'storytelling',
          buttonType: 'video_play',
          buttonClass: 'page_body',
          story_name: storyName,
          topic: topicName
        });
      }
    });
    /*
        Video onEnd: Story Page
        Event fires on video completion (full video viewed)
      */
    (0, _libs.$)('video').on('ended', function () {
      utag.link({
        event: 'load_event',
        experience: 'storytelling',
        buttonType: 'video_end',
        buttonClass: 'page_body',
        story_name: storyName,
        topic: topicName
      });
    });
    /*
      Explore more Click: Story Page
      Event fires on click on suggested story in 'Explore more' block at bottom of page
    */
    (0, _libs.$)('#end-of-page-cta a').on('click.exploreMoreGTM', function (e) {
      storyName = Helpers.formatValue((0, _libs.$)(e.target).closest('#end-of-page-cta').find('.extf-cta').text());
      utag.link({
        event: 'click_event',
        experience: 'storytelling',
        buttonType: 'content',
        buttonClass: 'module',
        story_name: storyName,
        topic: topicName
      });
    });
    /*
      Suggested Click: Story Page
      Event fires on click on suggested story in Storytelling module
    */
    (0, _libs.$)('.storytelling-imageItem').on('click.suggestedClickGTM', function (e) {
      var currentItemParent = (0, _libs.$)(e.target).closest('.storytelling-imageItem');
      var contentPosition = currentItemParent.data('position');
      storyName = Helpers.formatValue(currentItemParent.find('.storytelling-imageItem__title').text());
      topicName = Helpers.formatValue(currentItemParent.find('.storytelling-imageItem__headLine').text());
      utag.link({
        event: 'click_event',
        experience: 'storytelling',
        buttonType: 'content',
        buttonClass: 'module',
        story_name: storyName,
        topic: topicName,
        content_position: contentPosition
      });
    });
  }
};

var teliumOtherStories = exports.teliumOtherStories = function teliumOtherStories() {
  var items = [];
  Helpers.checkAndPush(items, (0, _libs.$)('.storytelling-module').not('.text-fade'));
  if (Helpers.isMobile()) {
    Helpers.checkAndPush(items, (0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer').not((0, _libs.$)('.storytelling-js-hideMobile .storytelling-otherStories__storyContainer')).not('.text-fade'));
  } else {
    Helpers.checkAndPush(items, (0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer').not('.text-fade'));
  }
  checkItems(items);
};

var teliumTopStories = exports.teliumTopStories = function teliumTopStories() {
  var items = [];
  Helpers.checkAndPush(items, (0, _libs.$)('article.storytelling-storyThumb').not('.come-in').not('.start-anim').not('.start-anim--Two').not('.start-anim--Three').not('.start-anim--Four'));
  checkItems(items);
};

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.animation = exports.addAnimation = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

var _dataLayer = __webpack_require__(2);

var dataLayer = _interopRequireWildcard(_dataLayer);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var addAnimation = exports.addAnimation = function addAnimation(elements) {
  _libs.$.each(elements, function (i, v) {
    _libs.$.each(v, function (j, k) {
      var elem = (0, _libs.$)(k);
      if (typeof elem !== 'undefined' && elem.length > 0) {
        if (elem.visible(true, elem)) {
          elem.addClass('text-fade');
        }
      }
    });
  });
};
var animation = exports.animation = function animation() {
  _libs.$.fn.visible = function (partial, element, container) {
    var $t = element;
    var $w = container || (0, _libs.$)(window);
    var viewTop = container ? $w.offset().top : $w.scrollTop();
    var viewBottom = viewTop + $w.height();
    var top = $t.offset().top;
    var bottom = top + $t.height();
    var compareTop = partial === true ? bottom : top;
    var compareBottom = partial === true ? top : bottom;
    return compareBottom <= viewBottom && compareTop >= viewTop;
  };
  var topStoryItems = (0, _libs.$)('.storytelling-scrollingBlock .storytelling-contSplit .storytelling-storyThumb.animated').not('.come-in');
  (0, _libs.$)(window).on('scroll.topStories', function () {
    dataLayer.teliumTopStories();
    _libs.$.each(topStoryItems, function (i, elem) {
      var el = (0, _libs.$)(elem);
      if (typeof el !== 'undefined' && el.visible(true, el)) {
        el.addClass('come-in');
      }
    });
  });
  (0, _libs.$)(window).on('scroll.Fade', function () {
    dataLayer.teliumOtherStories();
    var itemsToAnimate = [];
    itemsToAnimate.push((0, _libs.$)('.storytelling-categoryAndTitle').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-textInfoWrapper').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-quoteBlock').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-sideMedia').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-slideShow').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling #end-of-page-cta').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-module').not('.text-fade'));
    if (Helpers.isMobile()) {
      itemsToAnimate.push((0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer').not((0, _libs.$)('.storytelling-js-hideMobile .storytelling-otherStories__storyContainer')).not('.text-fade'));
    } else {
      itemsToAnimate.push((0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer').not('.text-fade'));
    }
    itemsToAnimate.push((0, _libs.$)('.storytelling-otherStories__loadMore').not('.text-fade'));
    itemsToAnimate.push((0, _libs.$)('.storytelling .trigger-gallery').not('.text-fade'));
    addAnimation(itemsToAnimate);
  });
  var fadingHeroTextBlock = (0, _libs.$)('.storytelling-articleHeroTextWrapper');
  var fadingHeroHeight = (0, _libs.$)('.storytelling-articleHero').height();
  var mainNavigation = (0, _libs.$)('.logo-block').height();
  var articleSubNavigation = (0, _libs.$)('#storytelling-subnav').height();
  var fadeStart = mainNavigation + articleSubNavigation;
  var fadeEnd = 0.5 * fadingHeroHeight;
  (0, _libs.$)(window).on('scroll.heroTextBlockFade', function () {
    (0, _libs.$)(fadingHeroTextBlock).removeClass('come-in');
    var offset = (0, _libs.$)(document).scrollTop();
    var opacity = 0;
    if (offset <= fadeStart) {
      opacity = 1;
    } else if (offset <= fadeEnd) {
      opacity = 1 - offset / fadeEnd;
    }
    fadingHeroTextBlock.css('opacity', opacity);
  });
  var blackOverlay = (0, _libs.$)('.storytelling-articleHeroImage__blackOverlay');
  var startingOpacity = parseFloat(blackOverlay.css('opacity'));
  (0, _libs.$)(window).on('scroll.heroBlackOverlay', function () {
    var currentScrollTop = (0, _libs.$)(window).scrollTop();
    var modifier = startingOpacity < 0.25 ? 0.7 : 0.4;
    var calculatedOpacity = currentScrollTop / (0, _libs.$)(blackOverlay).height() * modifier + startingOpacity;
    (0, _libs.$)(blackOverlay).css('opacity', calculatedOpacity);
  });
  (0, _libs.$)(window).load(function () {
    var itemsToAnimate = [];
    itemsToAnimate.push((0, _libs.$)('.storytelling-categoryAndTitle'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-textInfoWrapper'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-quoteBlock'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-sideMedia'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-slideShow'));
    itemsToAnimate.push((0, _libs.$)('.storytelling #end-of-page-cta'));
    itemsToAnimate.push((0, _libs.$)('.storytelling video.mediaelement'));
    itemsToAnimate.push((0, _libs.$)('.storytelling .trigger-gallery'));
    itemsToAnimate.push((0, _libs.$)('.storytelling-module'));
    if (Helpers.isMobile()) {
      itemsToAnimate.push((0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer').not((0, _libs.$)('.storytelling-js-hideMobile .storytelling-otherStories__storyContainer')));
    } else {
      itemsToAnimate.push((0, _libs.$)('.storytelling-otherStories__storySection .storytelling-otherStories__storyContainer'));
    }
    itemsToAnimate.push((0, _libs.$)('.storytelling-otherStories__loadMore'));
    addAnimation(itemsToAnimate);
    var animatedModules = (0, _libs.$)('.storytelling-js-noAnimation');
    _libs.$.each(animatedModules, function (i, v) {
      (0, _libs.$)(v).removeClass('storytelling-js-noAnimation');
    });
  });
};

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _libs = __webpack_require__(0);

var _animation = __webpack_require__(3);

var Anim = _interopRequireWildcard(_animation);

var _subNavHeader = __webpack_require__(12);

var subNav = _interopRequireWildcard(_subNavHeader);

var _topStories = __webpack_require__(14);

var TopStories = _interopRequireWildcard(_topStories);

var _articleHero = __webpack_require__(5);

var articleHero = _interopRequireWildcard(_articleHero);

var _slideShow = __webpack_require__(9);

var slideShow = _interopRequireWildcard(_slideShow);

var _textInfo = __webpack_require__(13);

var textInfo = _interopRequireWildcard(_textInfo);

var _sideMedia = __webpack_require__(8);

var sideMedia = _interopRequireWildcard(_sideMedia);

var _subNavFilter = __webpack_require__(11);

var subNavFilter = _interopRequireWildcard(_subNavFilter);

var _otherStories = __webpack_require__(6);

var otherStories = _interopRequireWildcard(_otherStories);

var _storytellingModule = __webpack_require__(10);

var storytellingModule = _interopRequireWildcard(_storytellingModule);

var _dataLayer = __webpack_require__(2);

var dataLayer = _interopRequireWildcard(_dataLayer);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

(0, _libs.$)(function () {
  (0, _libs.$)(window).on('load.waitForUtag', function () {
    setTimeout(function () {
      dataLayer.init();
    }, 2000);
  });
  Anim.animation();
  subNav.subNavHeader();
  TopStories.initialize();
  articleHero.imageResize();
  textInfo.textCharacterLimit();
  slideShow.init();
  sideMedia.init();
  subNavFilter.filterMenu();
  otherStories.init();
  storytellingModule.init();
});

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.imageResize = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var imageResize = exports.imageResize = function imageResize() {
  var mainArticleImage = (0, _libs.$)('.storytelling-articleHeroImage__backgroundImage');
  (0, _libs.$)(document).ready(function () {
    Helpers.resizableBgImage(mainArticleImage);
    (0, _libs.$)(window).smartresize(function () {
      Helpers.resizableBgImage(mainArticleImage);
    });
  });
};

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.init = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

var _otherStoriesTemplate = __webpack_require__(7);

var otherStoriesTemplate = _interopRequireWildcard(_otherStoriesTemplate);

var _animation = __webpack_require__(3);

var Anim = _interopRequireWildcard(_animation);

var _dataLayer = __webpack_require__(2);

var dataLayer = _interopRequireWildcard(_dataLayer);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var init = exports.init = function init() {
  var storyImage = (0, _libs.$)('.storytelling-otherStories__storyImage');
  var loadMoreBtn = (0, _libs.$)('.storytelling-otherStories__loadMore-button--readMore');
  var backToTopBtn = (0, _libs.$)('.storytelling-otherStories__loadMore-button--backToTop');
  var countofStories = (0, _libs.$)('.storytelling-otherStories__storyContainer').length;
  var otherStoryBodyParagraph = (0, _libs.$)('.storytelling-otherStories__storySummary-body p');
  var addClickBind = function addClickBind() {
    var storyItem = (0, _libs.$)('.storytelling-otherStories__storyContainer');
    _libs.$.each(storyItem, function (i, v) {
      var href = (0, _libs.$)(v).data('href');
      (0, _libs.$)(v).on('click.navigateTo', function (e) {
        e.preventDefault();
        window.location.href = href;
      });
    });
  };
  if (Helpers.isMobile() && countofStories > 5 && countofStories <= 10) {
    loadMoreBtn.show();
    backToTopBtn.hide();
  }
  var bindAnimation = function bindAnimation() {
    var itemArray = [];
    Helpers.checkAndPush(itemArray, (0, _libs.$)('.storytelling-otherStories__storyContainer').not('.text-fade'));
    dataLayer.checkItems(itemArray);
    Anim.addAnimation(itemArray);
    (0, _libs.$)(window).on('scroll.animateAdded', function () {
      Anim.addAnimation(itemArray);
    });
  };
  var addItems = function addItems(data, isMobile) {
    if (data != null && data.LoadedStories.length > 0) {
      var template = otherStoriesTemplate.getTemplate(data.LoadedStories);
      (0, _libs.$)('.storytelling-otherStories__template').append(template);
      Helpers.resizableBgImage((0, _libs.$)('.storytelling-otherStories__storyImage'));
      if (isMobile && data.LoadedStories.length < 5 || !isMobile && data.LoadedStories.length < 10 || !data.AreMoreStoriesNeeded) {
        loadMoreBtn.off('click.LoadMore');
        loadMoreBtn.hide();
        backToTopBtn.show();
      }
      bindAnimation();
      addClickBind();
      Helpers.textSubstring((0, _libs.$)('.storytelling-otherStories__storySummary-body p'), 0, 130);
      dataLayer.bindTeliumtoOtherStories();
    } else {
      loadMoreBtn.hide();
      backToTopBtn.show();
    }
  };
  backToTopBtn.on('click.backToTop', function () {
    var body = (0, _libs.$)('html, body');
    body.stop().animate({ scrollTop: 0 }, {
      duration: 1000,
      specialEasing: {
        height: 'easeOutBounce'
      }
    });
  });
  loadMoreBtn.on('click.LoadMore', function () {
    var origin = window.location.origin;
    var rootItemId = (0, _libs.$)('#rootItemId').val();
    var sortType = (0, _libs.$)('#sortType').val();
    var language = _libs.vc.settings.itemlanguageId;
    var isMobile = Helpers.isMobile();
    var startPosition = (0, _libs.$)('.storytelling-otherStories__storyContainer').length + (0, _libs.$)('.storytelling-storyThumb').length;
    var requestUrl = origin + '/OtherStoryGrid/LoadMoreStories?\n                        sortType=' + sortType + '&startPosition=' + startPosition + '&isMobile=' + isMobile + '&rootItemId=' + rootItemId + '&language=' + language;
    var shouldLoad = true;
    _libs.$.each((0, _libs.$)('.storytelling-otherStories__storySection'), function (i, v) {
      if ((0, _libs.$)(v).hasClass('storytelling-js-hideMobile')) {
        shouldLoad = false;
        if ((0, _libs.$)('#areMoreStoriesNeeded').val() === 'False') {
          loadMoreBtn.hide();
          backToTopBtn.show();
        }
        (0, _libs.$)(v).removeClass('storytelling-js-hideMobile');
        if (!isMobile) {
          shouldLoad = true;
        }
      }
    });
    bindAnimation();
    if (shouldLoad) {
      _libs.$.ajax({
        url: requestUrl,
        type: 'Get',
        contentType: 'application/json; charset=utf-8',
        data: {},
        success: function success(data) {
          addItems(data, isMobile);
        }
      });
    }
  });
  (0, _libs.$)(document).ready(function () {
    addClickBind();
    Helpers.resizableBgImage(storyImage);
    Helpers.textSubstring(otherStoryBodyParagraph, 0, 130);
    (0, _libs.$)(window).smartresize(function () {
      Helpers.resizableBgImage((0, _libs.$)('.storytelling-otherStories__storyImage'));
    });
  });
};

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.getTemplate = undefined;

var _libs = __webpack_require__(0);

var getTemplate = exports.getTemplate = function getTemplate(storyData) {
    var marketSegment = _libs.vc.settings.marketSegment;
    var getStory = function getStory(index, doubleHeight, is9by16, tabletMode) {
        if (index < storyData.length) {
            var elem = storyData[index];
            var doubleHeightClass = doubleHeight ? '--doubleHeight' : '';
            var tabletModeAttr = tabletMode === 'inline' ? 'inline' : 'fullWidth';
            var storyUrlPart = elem.StoryUrl.split('/');
            var storyUrlComplete = elem.StoryUrl.replace('/' + storyUrlPart[1], marketSegment);
            var storyUrl = storyUrlComplete;
            var bgImages = 'data-bg-l=\'' + elem.Image_16x9_Link + '\'\n                     data-bg-m=\'' + elem.Image_16x9_Link + '\'\n                     data-bg-s=\'' + elem.Image_4x3_Link + '\'\n                     style="background-image: url(\'' + elem.Image_16x9_Link + '\')';
            if (is9by16) {
                bgImages = 'data-bg-l=\'' + elem.Image_9x16_Link + '\'\n               data-bg-m=\'' + elem.Image_16x9_Link + '\'\n               data-bg-s=\'' + elem.Image_16x9_Link + '\'\n               style="background-image: url(\'' + elem.Image_9x16_Link + '\')';
            }
            if (typeof elem !== 'undefined') {
                var elemTemplate = '<article class="storytelling-otherStories__storyContainer storytelling-otherStories__storyContainer' + doubleHeightClass + '"\n            data-type="' + elem.StoryType.toLowerCase() + '"\n            tablet="' + tabletModeAttr + '"\n            data-href="' + storyUrl + '"\n            >\n            <div class="storytelling-otherStories__storyImage storytelling-otherStories__storyImage' + doubleHeightClass + '" ' + bgImages + '">\n                <div class="storytelling-otherStories__storyTypeIcons storytelling-otherStories__storyTypeIcons--' + elem.StoryType + '">\n                   <div class="storytelling-otherStories__storyTypeIcons-container">\n                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">\n                                            <g>\n                                                <g>\n                                                    <polyline class="st0" points="6.9,23.4 14.1,15.1 23.2,23.4 \t\t"></polyline>\n                                \t            </g>\n                                                <g>\n                                                    <polyline class="st0" points="20.5,20.8 23,17.9 28.8,23.2 \t\t"></polyline>\n                                \t            </g>\n                                                <circle class="st0" cx="25.5" cy="13.2" r="1.7"></circle>\n                                                <circle class="st0" cx="18.5" cy="18.5" r="17.5"></circle>\n                                            </g>\n                                        </svg>\n                   </div>\n                   <div class="storytelling-otherStories__storyTypeIcons-container">\n                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">\n                                            <g>\n                                            <circle class="st0" cx="18.5" cy="18.5" r="17.5"></circle>\n                                            <g>\n                                                <g>\n                                                <path class="st1" d="M18.5,11.6c1.1,0,1.9,0.9,1.9,1.9v5.8c0,1.1-0.9,1.9-1.9,1.9s-1.9-0.9-1.9-1.9v-5.8\n\t\t\t\t                                    C16.6,12.5,17.5,11.6,18.5,11.6 M18.5,10.6c-1.6,0-2.9,1.3-2.9,2.9v5.8c0,1.6,1.3,2.9,2.9,2.9c1.6,0,2.9-1.3,2.9-2.9v-5.8\n\t\t\t\t                                    C21.4,12,20.1,10.6,18.5,10.6L18.5,10.6z"></path>\n\t\t                                        </g>\n\t                                        </g>\n                                                <path class="st0" d="M14.3,18.7v0.8c0,2.3,1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2v-0.9"></path>\n                                                <line class="st0" x1="15.4" y1="26.5" x2="21.6" y2="26.5"></line>\n                                                <line class="st0" x1="18.5" y1="26.7" x2="18.5" y2="24"></line>\n                                            </g>\n                                        </svg>\n                   </div>\n                   <div class="storytelling-otherStories__storyTypeIcons-container">\n                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">\n                                        <g>\n                                        <style type="text/css">\n                                                .st0 {\n                                                    fill: none;\n                                                    stroke: #FFFFFF;\n                                                    stroke-miterlimit: 10;\n                                                }\n\n                                                .st1 {\n                                                    fill: #FFFFFF;\n                                                }\n                                         </style>\n                                        <circle class="st0" cx="18.5" cy="18.5" r="17.5"></circle>\n                                        <polyline class="st1" points="16.8,15 21.3,18.8 16.8,22.6 \t"></polyline>\n                                        </g>\n                                        </svg>\n                   </div>\n                </div>\n            </div>\n            <div class="storytelling-otherStories__storySummary">\n                <div class="storytelling-otherStories__storySummary-headline"> \n                    <p>' + elem.CategoryTitle + '</p> \n                </div>\n                <div class="storytelling-otherStories__storySummary-title">\n                    <p>' + elem.StoryTitle + '</p> \n                </div>\n                <div class="storytelling-otherStories__storySummary-body">\n                    <p>' + elem.StoryText + '</p>\n                </div>\n            </div> \n            </article>';
                return elemTemplate;
            }
            return '';
        }
        return '';
    };
    var template = '<div class="storytelling-otherStories__storySection">\n        <div class="storytelling-otherStories__storySection--small">\n            ' + getStory(0, true, true, 'inline') + '\n            ' + getStory(4, false, false, 'inline') + '\n        </div>\n        <div class="storytelling-otherStories__storySection--large"> \n            ' + getStory(1, false, false, 'inline') + '\n            ' + getStory(2, false, false) + '\n            ' + getStory(3, true, false, 'inline') + '\n        </div>\n      </div>\n      <div class="storytelling-otherStories__storySection storytelling-js-hideMobile"> \n        <div class="storytelling-otherStories__storySection--large">\n            ' + getStory(5, false, false, 'inline') + '\n            ' + getStory(6, false, false, 'inline') + '\n            ' + getStory(8, true, false, 'inline') + '\n        </div>\n       <div class="storytelling-otherStories__storySection--small"> \n            ' + getStory(7, true, true, false) + '\n            ' + getStory(9, false, false, 'inline') + '\n       </div> \n    </div>';
    return template;
};

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.init = undefined;

var _libs = __webpack_require__(0);

var init = exports.init = function init() {
  var items = (0, _libs.$)('.storytelling-sideMedia__mediaBlock');
  (0, _libs.$)('.storytelling-sideMedia__mediaBlock .storytelling-sideMedia__theaterIcon').on('click.expandClick', function (e) {
    (0, _libs.$)(e.target).closest('.storytelling-sideMedia__mediaBlock').find('.trigger-gallery').trigger('click');
  });
  (0, _libs.$)(window).on('load', function () {
    _libs.$.each(items, function (i, v) {
      var workingItem = (0, _libs.$)(v);
      if (!workingItem.find('.storytelling-slideShow').length && !workingItem.find('#gallery').length) {
        var textBlock = workingItem.parent().find('.storytelling-sideMedia__textBlock');
        workingItem.hide();
        textBlock.css('right', '0%');
      }
    });
  });
};

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.init = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var init = exports.init = function init() {
  var slideShow = (0, _libs.$)('.storytelling-slideShow');
  var touchStartCoords = { x: -1, y: -1 };
  var touchEndCoords = { x: -1, y: -1 };
  var direction = 'undefined';
  var minDistanceXAxis = 30;
  var maxDistanceYAxis = 30;
  var maxAllowedTime = 1000;
  var startTime = 0;
  var elapsedTime = 0;
  var animateLegend = function animateLegend(slideShowInfo, activeSlide, slideshowWrapper, modifier, numToSlide) {
    activeSlide.addClass('active');
    var slideCount = (0, _libs.$)(activeSlide).closest('.storytelling-slideShow').find('.storytelling-slideShow__slideBlock-slide').length;
    var activeSlideId = (0, _libs.$)(activeSlide).data('slideid');
    var legendCTA = (0, _libs.$)(slideShowInfo).find('a');
    var legendPagination = (0, _libs.$)(slideShowInfo).find('p');
    var currentItem = (0, _libs.$)(activeSlide).find('.storytelling-slideShow__slideBlock-info a');
    slideshowWrapper.animate({
      left: '-' + numToSlide * modifier + '%'
    }, 1000, function () {
      legendCTA.attr('href', currentItem.attr('href'));
      legendCTA.text(currentItem.text());
      legendPagination.text(activeSlideId + '/' + slideCount);
      legendCTA.removeClass('storytelling-nonCTA');
      if (currentItem.hasClass('storytelling-nonCTA')) {
        legendCTA.addClass('storytelling-nonCTA');
      }
    });
  };
  var slideElem = function slideElem(numToSlide, i, slideshowelement) {
    (0, _libs.$)(slideshowelement).find('.storytelling-slideShow__slideBlock-slide').removeClass('active');
    var slideShowInfo = (0, _libs.$)(slideshowelement).find('.storytelling-slideShow__slideBlock-info').not('.storytelling-slideShow__slideBlock-slide .storytelling-slideShow__slideBlock-info');
    var slideshowWrapper = (0, _libs.$)(slideshowelement).find('.storytelling-slideShow__container--wrap');
    var activeSlideId = parseInt(slideshowWrapper.attr('slide-num'), 10);
    var activeSlide = (0, _libs.$)(slideshowelement).find('.storytelling-slideShow__slideBlock-slide[data-slideid= \'' + activeSlideId + '\']');
    animateLegend(slideShowInfo, activeSlide, slideshowWrapper, i, numToSlide);
  };
  var slideImg = function slideImg(slideshowelement, position) {
    var slideShowWrap = (0, _libs.$)(slideshowelement).find('.storytelling-slideShow__container--wrap');
    var slidesCount = (0, _libs.$)(slideshowelement).find('.storytelling-slideShow__slideBlock-slide');
    var slide = parseInt(slideShowWrap.attr('slide-num'), 10);
    var slideInt = 100;
    if (position > 0) {
      if (slide === 1) {
        slideShowWrap.attr('slide-num', slidesCount.length);
        slideElem(slidesCount.length - 1, slideInt, slideshowelement);
      } else {
        slide = parseInt(slideShowWrap.attr('slide-num'), 10) - 1;
        slideShowWrap.attr('slide-num', slide);
        slideElem(slide - 1, slideInt, slideshowelement);
      }
    } else {
      slideInt = 0;
      if (slide === slidesCount.length) {
        slideShowWrap.attr('slide-num', '1');
        slideElem(slide - 1, 0, slideshowelement);
      } else {
        slide = parseInt(slideShowWrap.attr('slide-num'), 10) + 1;
        slideShowWrap.attr('slide-num', slide);
        slideInt = 100;
        slideElem(slide - 1, slideInt, slideshowelement);
      }
    }
  };
  var swipeMove = function swipeMove(e) {
    e = window.event;
    e.preventDefault();
  };
  var swipeStart = function swipeStart(e) {
    e = window.event;
    var targetElement = (0, _libs.$)('.storytelling-slideShow');
    e = 'changedTouches' in e ? e.changedTouches[0] : e;
    touchStartCoords = { x: e.pageX, y: e.pageY };
    startTime = new Date().getTime();
    targetElement.textContent = '';
  };
  var swipeEnd = function swipeEnd(e) {
    var slideshowelement = (0, _libs.$)(e.target).closest('.storytelling-slideShow');
    e = window.event;
    e = 'changedTouches' in e ? e.changedTouches[0] : e;
    touchEndCoords = { x: e.pageX - touchStartCoords.x, y: e.pageY - touchStartCoords.y };
    elapsedTime = new Date().getTime() - startTime;
    if (elapsedTime <= maxAllowedTime) {
      if (Math.abs(touchEndCoords.x) >= minDistanceXAxis && Math.abs(touchEndCoords.y) <= maxDistanceYAxis) {
        direction = touchEndCoords.x < 0 ? 'left' : 'right';
        switch (direction) {
          case 'left':
            slideImg(slideshowelement, -1);
            break;
          case 'right':
            slideImg(slideshowelement, 1);
            break;
          default:
            break;
        }
      }
    }
  };
  var toggleFullscreen = function toggleFullscreen(slideShowIcon) {
    (0, _libs.$)(slideShowIcon).closest('.storytelling-slideShow').toggleClass('fullscreen');
    (0, _libs.$)(slideShowIcon).closest('.storytelling-sideMedia__mediaBlock').toggleClass('fullscreen-media');
    (0, _libs.$)(slideShowIcon).closest('.storytelling-sideMedia').toggleClass('full');
    (0, _libs.$)('html').toggleClass('storytelling-js-noScroll');
  };
  var initializeSlideShow = function initializeSlideShow(slideShowElement) {
    var slideShowLegend = (0, _libs.$)(slideShowElement).find((0, _libs.$)('.storytelling-slideShow__slideBlock-info a'));
    slideShowLegend.on('click', function (e) {
      if ((0, _libs.$)(e.target).hasClass('storytelling-nonCTA')) {
        e.preventDefault();
      }
    });
    var slideLeftArrow = (0, _libs.$)(slideShowElement).find('.storytelling-js-leftSlideShowArrow');
    var slideRightArrow = (0, _libs.$)(slideShowElement).find('.storytelling-js-rightSlideShowArrow');
    var slideFullScreen = (0, _libs.$)(slideShowElement).find('.storytelling-js-slideShowFullscreen');
    var slideCloseFullscreen = (0, _libs.$)(slideShowElement).find('.icon-close');
    var slidesCount = (0, _libs.$)(slideShowElement).find('.storytelling-slideShow__slideBlock-slide');
    var wrapper = (0, _libs.$)(slideShowElement).find('.storytelling-slideShow__container--wrap');
    var slideSize = (0, _libs.$)(slideShowElement).find('.storytelling-slideShow__slideBlock-slide');
    var targetElement = (0, _libs.$)(slideShowElement);
    _libs.$.each(slidesCount, function (i, v) {
      if (i > 0) {
        (0, _libs.$)(v).css('right', -100 * i + '%');
      }
    });
    var wraperWidth = 100 * slidesCount.length;
    var slideWidth = 100 / slidesCount.length;
    wrapper.width(wraperWidth + '%');
    slideSize.width(slideWidth + '%');
    slideLeftArrow.on('click.slideLeft', function (e) {
      e.preventDefault();
      slideImg(slideShowElement, 1);
    });
    slideRightArrow.on('click.slideRight', function (e) {
      e.preventDefault();
      slideImg(slideShowElement, -1);
    });
    slideFullScreen.on('click.fullscreenOn', function (e) {
      e.preventDefault();
      toggleFullscreen(e.target);
      (0, _libs.$)(e.target).on('mousemove.fullscreen touchmove.fullscreen', swipeMove);
    });
    slideCloseFullscreen.on('click.fullscreenOff', function (e) {
      e.preventDefault();
      toggleFullscreen(e.target);
      (0, _libs.$)(e.target).off('mousemove.fullscreen touchmove.fullscreen');
    });
    if (targetElement.length > 0) {
      Helpers.addMultipleListeners(targetElement, 'mousedown touchstart', swipeStart);
      Helpers.addMultipleListeners(targetElement, 'mouseup touchend', swipeEnd);
    }
  };
  (0, _libs.$)(document).ready(function () {
    _libs.$.each(slideShow, function (i, v) {
      initializeSlideShow(v);
    });
    Helpers.forceRedraw();
    (0, _libs.$)(window).smartresize(function () {
      _libs.$.each(slideShow, function (i, v) {
        (0, _libs.$)(v).redraw();
      });
    });
  });
};

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.init = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var init = exports.init = function init() {
  var storytellingModuleBody = (0, _libs.$)('.storytelling-imageItem__body');
  (0, _libs.$)(document).ready(function () {
    Helpers.textSubstring(storytellingModuleBody, 0, 75);
  });
};

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.filterMenu = undefined;

var _libs = __webpack_require__(0);

var filterMenu = exports.filterMenu = function filterMenu() {
  var mobileDropdown = (0, _libs.$)('.storytelling-topicBlock__dropdown');
  var mobileDropdownFilter = (0, _libs.$)('.storytelling-topicBlock__dropdown--filters');
  var dropdownByTopic = (0, _libs.$)('.storytelling-topicBlock__dropdown--byTopic');
  var byTopicContent = (0, _libs.$)('.storytelling-topicBlock__dropdown--byTopicContent');
  var dropdownByCar = (0, _libs.$)('.storytelling-topicBlock__dropdown--byCar');
  var byCarContent = (0, _libs.$)('.storytelling-topicBlock__dropdown--byCarContent');
  var byCarParagraph = dropdownByCar.find('p');
  var byTopicParagraph = dropdownByTopic.find('p');
  var byTopicDown = dropdownByTopic.find('.storytelling-topicBlock__downArrow');
  var byTopicUp = dropdownByTopic.find('.storytelling-topicBlock__upArrow');
  var byCarDown = dropdownByCar.find('.storytelling-topicBlock__downArrow');
  var byCarUp = dropdownByCar.find('.storytelling-topicBlock__upArrow');
  var topicWrap = (0, _libs.$)('.storytelling-topicBlock__dropdown--wrap');
  var dropdownByFilter = (0, _libs.$)('.storytelling-topicBlock__tabletSort');
  var dropdownOverlay = (0, _libs.$)('.storytelling-overlay');
  var byFilterDown = dropdownByFilter.find('.storytelling-topicBlock__downArrow');
  var byFilterUp = dropdownByFilter.find('.storytelling-topicBlock__upArrow');
  var url = window.location.href;
  var id = url.split('=')[1];
  var moduleId = url.substring(url.indexOf('=') + 1, url.indexOf('&'));
  var storyItemSelected = (0, _libs.$)('.storytelling-topicBlock__item[data-class= \'' + id + '\']');
  var moduleStoryItemSelected = (0, _libs.$)('.storytelling-topicBlock__item[data-class= \'' + moduleId + '\']');
  var storyCloseFilter = (0, _libs.$)('.storytelling-topicBlock__item--close[data-close= \'' + id + '\']');
  var moduleStoryCloseFilter = (0, _libs.$)('.storytelling-topicBlock__item--close[data-close= \'' + moduleId + '\']');

  mobileDropdown.on('click.mobileDropdownFilter', function () {
    if (mobileDropdownFilter.hasClass('storytelling-js-opened')) {
      mobileDropdownFilter.slideUp('slow').removeClass('storytelling-js-opened');
      byCarParagraph.removeClass('storytelling-js-selectedTabState');
      byCarContent.hide().removeClass('storytelling-js-opened');
      byTopicContent.hide().removeClass('storytelling-js-opened');
      dropdownOverlay.removeClass('storytelling-fade');
      (0, _libs.$)('html').removeClass('storytelling-js-noScroll');
    } else {
      mobileDropdownFilter.slideDown('slow').addClass('storytelling-js-opened');
      byTopicContent.slideDown('slow').addClass('storytelling-js-opened');
      byTopicParagraph.addClass('storytelling-js-selectedTabState');
      topicWrap.css('opacity', '1');
      dropdownOverlay.addClass('storytelling-fade');
      (0, _libs.$)('html').addClass('storytelling-js-noScroll');
    }
    if (byFilterDown.hasClass('storytelling-js-visible')) {
      byFilterUp.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
      byFilterDown.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
    } else {
      byFilterUp.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
      byFilterDown.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
    }
  });
  var filterClose = function filterClose(topicCont, wrap, carCont, fArrDown, fArrUp, sArrUp, sArrDown) {
    if (topicCont.hasClass('storytelling-js-opened')) {
      topicCont.slideUp('slow').removeClass('storytelling-js-opened');
      wrap.css('opacity', '0');
      dropdownOverlay.removeClass('storytelling-fade');
      (0, _libs.$)('html').removeClass('storytelling-js-noScroll');
    } else {
      topicCont.slideDown('slow').addClass('storytelling-js-opened');
      carCont.slideUp('slow').removeClass('storytelling-js-opened');
      wrap.css('opacity', '0').animate({ opacity: 1 }, 1000);
      dropdownOverlay.addClass('storytelling-fade');
      (0, _libs.$)('html').addClass('storytelling-js-noScroll');
    }
    carCont.hide();
    if (fArrDown.hasClass('storytelling-js-visible')) {
      fArrUp.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
      fArrDown.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
      sArrUp.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
      sArrDown.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
    } else {
      fArrUp.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
      fArrDown.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
    }
  };
  var closeOnOutsideClick = function closeOnOutsideClick() {
    if (dropdownOverlay.hasClass('storytelling-fade')) {
      byTopicContent.removeClass('storytelling-js-opened');
      byCarContent.removeClass('storytelling-js-opened');
      dropdownOverlay.removeClass('storytelling-fade');
      byCarParagraph.removeClass('storytelling-js-selectedTabState');
      byTopicParagraph.removeClass('storytelling-js-selectedTabState');
      byCarContent.hide();
      byTopicContent.hide();
      byTopicDown.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
      byTopicUp.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
      byCarUp.addClass('storytelling-js-hidden').removeClass('storytelling-js-visible').hide();
      byCarDown.addClass('storytelling-js-visible').removeClass('storytelling-js-hidden').show();
      (0, _libs.$)('html').removeClass('storytelling-js-noScroll');
    }
  };
  dropdownByTopic.on('click.dropdownByTopic', function (e) {
    e.stopPropagation();
    byCarParagraph.removeClass('storytelling-js-selectedTabState');
    byCarContent.removeClass('storytelling-js-dropdownShow');
    byTopicParagraph.toggleClass('storytelling-js-selectedTabState');
    filterClose(byTopicContent, topicWrap, byCarContent, byTopicDown, byTopicUp, byCarUp, byCarDown);
  });
  dropdownByCar.on('click.dropdownByCar', function (e) {
    e.stopPropagation();
    byTopicParagraph.removeClass('storytelling-js-selectedTabState');
    byCarParagraph.toggleClass('storytelling-js-selectedTabState');
    filterClose(byCarContent, topicWrap, byTopicContent, byCarDown, byCarUp, byTopicUp, byTopicDown);
  });
  mobileDropdownFilter.on('click.stopMobileFilterToggle', function (e) {
    e.stopPropagation();
  });
  byTopicContent.on('click', function (e) {
    e.stopPropagation();
  });
  byCarContent.on('click', function (e) {
    e.stopPropagation();
  });
  dropdownOverlay.on('click', function () {
    closeOnOutsideClick();
  });
  storyItemSelected.addClass('storytelling-topicBlock__item--active');
  moduleStoryItemSelected.addClass('storytelling-topicBlock__item--active');
  storyCloseFilter.show();
  moduleStoryCloseFilter.show();
};

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.subNavHeader = undefined;

var _libs = __webpack_require__(0);

var subNavHeader = exports.subNavHeader = function subNavHeader() {
  var secondHeader = (0, _libs.$)('#storytelling-subnav');
  var storytellingBody = (0, _libs.$)('.storytelling');
  var secondHeaderHeight = (0, _libs.$)('#storytelling-subnav').outerHeight();
  var socialSharingToggler = (0, _libs.$)('.storytelling-topicBlock__tabletIcon');
  var socialSharingCloseIcon = (0, _libs.$)('.storytelling-topicBlock__closeTabletIcon');
  var icons = socialSharingToggler.parent().find('.hero-social');
  var arrowCheck = (0, _libs.$)('.storytelling-discoverBlock__hideArrow');
  var backArrow = 'storytelling-discoverBlock__backArrow';
  var upperCaseClass = (0, _libs.$)('.text-uppercase');
  if (icons.length !== 0) {
    socialSharingToggler.on('click.toggleSocialIcons', function () {
      icons.slideDown('slow').addClass('storytelling-js-tableShareIconPressed');
      socialSharingToggler.hide();
      socialSharingCloseIcon.addClass('storytelling-js-dropdownShow');
    });
  } else {
    socialSharingToggler.hide();
  }
  socialSharingCloseIcon.on('click.closeSocialIcons', function () {
    icons.slideUp('slow').removeClass('storytelling-js-tableShareIconPressed');
    socialSharingToggler.show();
    socialSharingCloseIcon.removeClass('storytelling-js-dropdownShow');
  });
  (0, _libs.$)(window).on('scroll.header', function () {
    if ((0, _libs.$)(document).scrollTop() > secondHeaderHeight) {
      secondHeader.addClass('storytelling-js-positionChange');
      storytellingBody.addClass('storytelling-js-bodyPaddingChange');
    } else {
      secondHeader.removeClass('storytelling-js-positionChange');
      storytellingBody.removeClass('storytelling-js-bodyPaddingChange');
    }
  });
  (0, _libs.$)(window).on('scroll.hideIcons', function () {
    if (icons.hasClass('storytelling-js-tableShareIconPressed')) {
      icons.removeClass('storytelling-js-tableShareIconPressed');
      icons.hide();
      socialSharingToggler.show();
      socialSharingCloseIcon.removeClass('storytelling-js-dropdownShow');
    }
  });
  if (!arrowCheck.hasClass(backArrow)) {
    upperCaseClass.removeClass('storytelling-discoverBlock__link');
  }
};

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.textCharacterLimit = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var textCharacterLimit = exports.textCharacterLimit = function textCharacterLimit() {
  var pullOutRightBlock = (0, _libs.$)('.storytelling-pullout--right p');
  var pullOutLeftBlock = (0, _libs.$)('.storytelling-pullout--left p');
  Helpers.textSubstring(pullOutRightBlock, 0, 260);
  Helpers.textSubstring(pullOutLeftBlock, 0, 260);
};

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.initialize = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var initialize = exports.initialize = function initialize() {
  Helpers.smartResize();
  var videoComponent = (0, _libs.$)('.storytelling-storyThumb__video video');
  var mainImage = (0, _libs.$)('.storytelling-storyThumb--One');
  var otherImages = (0, _libs.$)('.storytelling-storyThumb__image');
  var topStoriesModule = (0, _libs.$)('.storytelling-mainStories');
  var staticBlock = (0, _libs.$)('.storytelling-mainStories .storytelling-staticBlock');
  var scrollingBlock = (0, _libs.$)('.storytelling-scrollingBlock');
  var adaptTopStories = function adaptTopStories() {
    var heightFromTop = parseInt((0, _libs.$)('.storytelling').css('padding-top'), 10) + ((0, _libs.$)('.storytelling-mainStories').height() - window.innerHeight);
    var bodyScrollTop = (0, _libs.$)(document).scrollTop();
    if (bodyScrollTop < 55) {
      topStoriesModule.removeClass('storytelling-js-scrolledDown');
      staticBlock.css({
        position: 'static',
        top: 0,
        width: 'calc(50% + 1px)'
      });
      scrollingBlock.css({
        float: 'left',
        width: '49.9%'
      });
      return;
    } else if (bodyScrollTop >= 55 && bodyScrollTop < heightFromTop) {
      topStoriesModule.addClass('storytelling-js-scrolledDown');
      staticBlock.css({
        position: 'fixed',
        top: 55,
        width: 'calc(50% + 1px)'
      });
      scrollingBlock.css({
        float: 'right',
        width: '50%'
      });
    } else {
      topStoriesModule.removeClass('storytelling-js-scrolledDown');
      staticBlock.css({
        position: 'absolute',
        top: heightFromTop + 55,
        width: 'calc(50% + 1px)'
      });
      scrollingBlock.css({
        float: 'right'
      });
      return;
    }
  };
  var clearStyles = function clearStyles() {
    staticBlock.attr('style', '');
    scrollingBlock.attr('style', '');
  };
  (0, _libs.$)(document).ready(function () {
    Helpers.resizableBgImage(mainImage, otherImages);
    if ((!Helpers.isMobile() || Helpers.isTabletLandscape()) && window.innerWidth >= 1024) {
      adaptTopStories();
      (0, _libs.$)(window).on('scroll.scrollingBlock', function () {
        adaptTopStories();
      });
    }
    (0, _libs.$)(window).smartresize(function () {
      Helpers.resizableBgImage(mainImage, otherImages);
      if ((!Helpers.isMobile() || Helpers.isTabletLandscape()) && window.innerWidth >= 1024) {
        adaptTopStories();
        (0, _libs.$)(window).off('scroll.scrollingBlock');
        (0, _libs.$)(window).on('scroll.scrollingBlock', function () {
          adaptTopStories();
        });
      } else {
        (0, _libs.$)(window).off('scroll.scrollingBlock');
        clearStyles();
      }
    });
    if (typeof videoComponent[0] !== 'undefined') {
      videoComponent[0].play();
    }
  });
};

/***/ }),
/* 15 */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || Function("return this")() || (1,eval)("this");
} catch(e) {
	// This works if the window reference is available
	if(typeof window === "object")
		g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(4);


/***/ })
/******/ ]);