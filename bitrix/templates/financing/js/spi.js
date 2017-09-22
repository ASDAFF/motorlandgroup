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
/******/ 	return __webpack_require__(__webpack_require__.s = 14);
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
var ga = exports.ga = global.ga;
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(13)))

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.styleReset = exports.trackingID = exports.dealerGa = exports.getBrowserName = exports.removeBlockClass = exports.emptyElements = exports.addBlockClass = undefined;

var _libs = __webpack_require__(0);

var addBlockClass = exports.addBlockClass = function addBlockClass() {
  for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
    args[_key] = arguments[_key];
  }

  _libs.$.each(args, function (a, b) {
    b.addClass('spi-blockedElement'); /* helper to add class */
  });
};
var emptyElements = exports.emptyElements = function emptyElements() {
  for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
    args[_key2] = arguments[_key2];
  }

  _libs.$.each(args, function (i, e) {
    e.empty(); /* helper to clear elements */
  });
};
var removeBlockClass = exports.removeBlockClass = function removeBlockClass() {
  for (var _len3 = arguments.length, args = Array(_len3), _key3 = 0; _key3 < _len3; _key3++) {
    args[_key3] = arguments[_key3];
  }

  _libs.$.each(args, function (c, d) {
    d.removeClass('spi-blockedElement'); /* helper to remove class */
  });
};

var getBrowserName = exports.getBrowserName = function getBrowserName() {
  var name = 'Unknown';
  if (navigator.userAgent.indexOf('MSIE') !== -1) {
    name = 'MSIE';
  } else if (navigator.userAgent.indexOf('Firefox') !== -1) {
    name = 'Firefox';
  } else if (navigator.userAgent.indexOf('Opera') !== -1) {
    name = 'Opera';
  } else if (navigator.userAgent.indexOf('Chrome') !== -1) {
    name = 'Chrome';
  } else if (navigator.userAgent.indexOf('Safari') !== -1) {
    name = 'Safari';
  }
  return name;
};

var dealerGa = exports.dealerGa = function dealerGa(market, gaName, gaValue) {
  var getTrackingId = document.getElementById('trackingID');
  var trackingId = getTrackingId.value;
  (0, _libs.ga)('create', '\'' + trackingId + '\'', 'auto');
  (0, _libs.ga)('send', 'event', '\'Market:' + market + '|Dealer locator page\'', '\'click|' + gaName + '\'', '\'' + gaValue + '\'');
};

var trackingID = exports.trackingID = function trackingID() {
  var getTrackingId = document.getElementById('trackingID');
  var trackingId = getTrackingId.value;
  (0, _libs.ga)('create', '\'' + trackingId + '\'', 'auto');
};

var styleReset = exports.styleReset = function styleReset() {
  (0, _libs.$)('.spi-js-carMilage__data').text('0'); /* setting text */
  (0, _libs.$)('.ui-slider-handle').css('left', '0%'); /* setting style */
  (0, _libs.$)('.ui-slider-range').css('width', '100%'); /* setting style */
  (0, _libs.$)('.spi-js-carMilage__yearData').text('0');
};

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _libs = __webpack_require__(0);

var _print = __webpack_require__(9);

var print = _interopRequireWildcard(_print);

var _getYear = __webpack_require__(8);

var year = _interopRequireWildcard(_getYear);

var _getFuelType = __webpack_require__(7);

var fuel = _interopRequireWildcard(_getFuelType);

var _getEngineType = __webpack_require__(6);

var engine = _interopRequireWildcard(_getEngineType);

var _dropdowns = __webpack_require__(4);

var dropdowns = _interopRequireWildcard(_dropdowns);

var _radiobtn = __webpack_require__(10);

var radiob = _interopRequireWildcard(_radiobtn);

var _additional_trigers = __webpack_require__(3);

var trigers = _interopRequireWildcard(_additional_trigers);

var _rangeslider = __webpack_require__(11);

var range = _interopRequireWildcard(_rangeslider);

var _getDealerId = __webpack_require__(5);

var getDealer = _interopRequireWildcard(_getDealerId);

var _spiGaScripts = __webpack_require__(12);

var analitic = _interopRequireWildcard(_spiGaScripts);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

(0, _libs.$)(function () {
  year.year();
  print.print();
  dropdowns.dropdowns();
  radiob.radiob();
  trigers.trigers();
  range.range();
  engine.engine();
  fuel.fuel();
  getDealer.getDealer();
  analitic.analicticsScript();
});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.trigers = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var trigers = exports.trigers = function trigers() {
  /**
    * Detecting witch browser are we using
    * If it is Safari
  */
  if (Helpers.getBrowserName() === 'Safari') {
    /* adding class with fixes for safari browser */
    (0, _libs.$)('.spi-carView__name').addClass('spi-all-safari-fix');
    (0, _libs.$)('.spi-selectedCarDetails__name h1').addClass('spi-all-safari-fix');
  } else {
    (0, _libs.$)('.spi-carView__name').removeClass('spi-all-safari-fix');
    (0, _libs.$)('.spi-selectedCarDetails__name h1').removeClass('spi-all-safari-fix');
  }

  (0, _libs.$)('.spi-listOfActions').on('click', function () {
    /* showing list of all service actions */
    (0, _libs.$)('.spi-fullService').slideDown('slow');
  });
};

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.dropdowns = undefined;

var _libs = __webpack_require__(0);

var dropdowns = exports.dropdowns = function dropdowns() {
  /* variables */
  var select = (0, _libs.$)('.spi-js-selectVal');
  var option = (0, _libs.$)('.spi-js-dropOption');
  var selected = (0, _libs.$)('.spi-js-dropOption');
  var arrowUp = (0, _libs.$)('.spi-js-selectVal__up');
  var arrowDown = (0, _libs.$)('.spi-js-selectVal__down');
  var ddTriger = (0, _libs.$)('.spi-js-dropBox');

  /* function on outside click */
  var outsideClick = function outsideClick(outTarget) {
    if (!(0, _libs.$)(outTarget).is(select) && !(0, _libs.$)(outTarget).parents().is(select)) {
      /* removing open class and adding close class */
      option.hide().removeClass('opened').addClass('closed');

      /* removing dropdown active class */
      (0, _libs.$)('.spi-js-selectVal').removeClass('dropdown-active');

      /* removing style attribute */
      (0, _libs.$)('.spi-js-selectVal').removeAttr('style');

      /* hidding up arrow */
      (0, _libs.$)(outTarget).find(arrowUp).hide();

      /* hidding down arrow */
      (0, _libs.$)(outTarget).find(arrowDown).show();
    }
  };

  /* selected item function */
  var selectedItem = function selectedItem(selTarget) {
    /* removing all selected clases from drop down list */
    (0, _libs.$)(selTarget).parent().children().removeClass('selected');

    /* definig data attribute */
    var data = (0, _libs.$)(selTarget).attr('data-value');

    /**
      * adding selected class to selected element
      * passing value to data attribute
    */
    (0, _libs.$)(selTarget).addClass('selected');
    (0, _libs.$)(selTarget).parent().parent().children().children('.spi-dropValue').text(data);
  };

  var toggleDDList = function toggleDDList() {
    /* looking if dropdown list have class opened */
    if (option.hasClass('opened')) {
      /* if have then we are closing drop down list and removing class opened, then adding class closed */
      option.slideUp(100).removeClass('opened').addClass('closed');

      /* hidding up arrow */
      arrowUp.hide();

      /* showing down arrow */
      arrowDown.show();

      /*
        * looking if dropdown list have class closed
        * if have then we are opening drop down list and removing class closed, then adding class opened
        * showing up arrow
        * hidding down arrow
      */
    } else if (option.hasClass('closed')) {
      option.slidDown(100).removeClass('closed').addClass('opened');
      arrowUp.show();
      arrowDown.hide();
    }
  };

  var selectedItemField = function selectedItemField(fieldTarget) {
    /* looking if drop down selected zone have class dropdown-active */
    if ((0, _libs.$)(fieldTarget).parent().children().hasClass('dropdown-active')) {
      /* if have then we remove it */
      (0, _libs.$)('.spi-js-selectVal').removeClass('dropdown-active');

      /* also removing style attribute */
      (0, _libs.$)(fieldTarget).removeAttr('style');
      (0, _libs.$)(fieldTarget).parent().children('ul').stop(true, true)

      /* hidding dropdown list */
      .slideUp(100)

      /* removing opened class */
      .removeClass('opened')

      /* adding closed class */
      .addClass('closed');
      (0, _libs.$)(fieldTarget).removeAttr('style');

      /* hidding up arrow */
      (0, _libs.$)(fieldTarget).find(arrowUp).hide();

      /* showing down arrow */
      (0, _libs.$)(fieldTarget).find(arrowDown).show();
    } else {
      /* else we adding class */
      (0, _libs.$)('.spi-js-selectVal').addClass('dropdown-active');

      /* assigning class */
      (0, _libs.$)(fieldTarget).css('border-bottom', '0px');

      /* hidding down arrow */
      (0, _libs.$)(fieldTarget).find(arrowDown).hide();

      /* showing up arrow */
      (0, _libs.$)(fieldTarget).find(arrowUp).show();
    }
  };

  /* opening drop down list */
  var ddList = function ddList(opTarget) {
    (0, _libs.$)(opTarget).parent().children('ul').stop(true, true).slideDown(100).addClass('opened').removeClass('closed');
  };

  (0, _libs.$)('.spi-js-dropBox ul').hide();
  (0, _libs.$)(document).on('click', function (e) {
    /* closing drop down on outside click */
    outsideClick(e.target);
  });

  arrowUp.on('click', function () {
    /* removing style attribute on arrow up click */
    (0, _libs.$)('.spi-js-selectVal').removeAttr('style');
  });

  selected.on('click', 'li', function (e) {
    /* trigering function */
    selectedItem(e.target);
  });

  ddTriger.on('click', function (e) {
    /* adding opened class */
    option.addClass('opened');
    /* trigering function */
    toggleDDList();
    /* trigering function */
    ddList(e.target);
    /* trigering function */
    selectedItemField(e.target);
  });
};

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.getDealer = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var getDealer = exports.getDealer = function getDealer() {
  /* getting market */
  var gaMarket = (0, _libs.$)('html').attr('lang');
  if (_libs.vc.settings.spi) {
    /* defining button name */
    var btnName = (0, _libs.$)('.spi-selectDealer').val();
    (0, _libs.$)('body').on('click', '.dealer-accordion li', function () {
      /* on dealer click finding select dealer button */
      var selBtn = (0, _libs.$)('.dealer-accordion li').find('.spi-selDealer');

      /* passing neme for button */
      selBtn.text(btnName);
      (0, _libs.$)(document).ready(function () {
        setTimeout(function () {
          /* getting dealer name */
          var selctedNameEvent = (0, _libs.$)('.dealer-accordion li.expanded .text strong').text();

          /* geting dealer phone */
          var selctedPhoneText = (0, _libs.$)('.dealer-accordion li.expanded .accordion-content p').text().split('\n')[5];

          /* defining phone number as trigger  */
          var selctedPhoneBtn = (0, _libs.$)('.dealer-accordion li.expanded .accordion-content p');
          (0, _libs.$)(selBtn).on('click', function () {
            /* definning event name */
            var selectedDealerName = 'SelectedDealerName';

            /* calling GA event from helpers and passing parameters witch need to be send */
            Helpers.dealerGa(gaMarket, selectedDealerName, selctedNameEvent);
          });
          (0, _libs.$)(selctedPhoneBtn).on('click', function () {
            /* definning event name */
            var clikedPhoneNumber = 'ClikedPhoneNumber';

            /* calling GA event from helpers and passing parameters witch need to be send */
            Helpers.dealerGa(gaMarket, clikedPhoneNumber, selctedPhoneText);
          });
        }, 1000);
      });
    });
    (0, _libs.$)('body').on('click', '.icon-website', function () {
      /* getting dealer name */
      var descDelName = (0, _libs.$)('.dealer-accordion li.expanded .text strong').text().trim();

      /* definning event name */
      var dealerWebSiteClick = 'DealerWebSiteClick';

      /* calling GA event from helpers and passing parameters witch need to be send */
      Helpers.dealerGa(gaMarket, dealerWebSiteClick, descDelName);
    });
    (0, _libs.$)('body').on('click', '.gmnoprint', function () {
      /* on marker click finding select dealer button */
      var selBtn = (0, _libs.$)('.dealer-accordion li').find('.spi-selDealer');
      setTimeout(function () {
        var mobTitle = (0, _libs.$)('.dealer-information h6').find('a').text();

        /* getting dealer name */
        var selctedNameEvent = (0, _libs.$)('.dealer-accordion li.expanded .text strong').text();

        /* searching button in mobile view */
        var dealerBtnMob = (0, _libs.$)('#mask').find('.spi-selDealer');

        /* searching button in normal view */
        var selBtnDesc = (0, _libs.$)('.dealer-accordion li').find('.spi-selDealer');

        /* searching dealer phone number in mobile view */
        var mobTelNumBtn = (0, _libs.$)('.dealer-information > a');

        /* geting dealer phone number text */
        var mobTelNum = (0, _libs.$)('.dealer-information > a').text();

        /* passing neme for button */
        dealerBtnMob.text(btnName);
        (0, _libs.$)(dealerBtnMob).on('click', function () {
          /* definning event name */
          var selectedDealerName = 'SelectedDealerName';

          /* calling GA event from helpers and passing parameters witch need to be send */
          Helpers.dealerGa(gaMarket, selectedDealerName, mobTitle);
        });
        (0, _libs.$)(selBtnDesc).on('click', function () {
          /* definning event name */
          var selectedDealerName = 'SelectedDealerName';

          /* calling GA event from helpers and passing parameters witch need to be send */
          Helpers.dealerGa(gaMarket, selectedDealerName, selctedNameEvent);
        });
        (0, _libs.$)(mobTelNumBtn).on('click', function () {
          /* definning event name */
          var clikedPhoneNumber = 'ClikedPhoneNumber';

          /* calling GA event from helpers and passing parameters witch need to be send */
          Helpers.dealerGa(gaMarket, clikedPhoneNumber, mobTelNum);
        });
      }, 1000);
      /* passing neme for button */
      selBtn.text(btnName);
    });

    var getDealerId = function getDealerId() {
      /* looking if dealer selector have class expanded */
      if ((0, _libs.$)('.dealer-accordion li').hasClass('expanded')) {
        /* looping try dealers */
        _libs.$.each(_libs.vc.dealerData.attributes, function (i, v) {
          /* definnig selected dealer name */
          var selctedName = (0, _libs.$)('.dealer-accordion li.expanded .text strong').text();

          /* checking if dealer name is matching any dealer */
          if (v.Name === selctedName) {
            /* creating new action for dealer form */
            var newAction = (0, _libs.$)('.formDealer').attr('action').split('=')[0] + '=' + v.DealerId;

            /* assigning action to button */
            (0, _libs.$)('.formDealer').attr('action', newAction);

            /* submiting form */
            (0, _libs.$)('#getDealer').submit();
          }
        });
      }
    };

    var getDealerMobile = function getDealerMobile() {
      /* finding dealer button */
      var dealerBtn = (0, _libs.$)('#mask').find('.spi-selDealer');

      /* searching for dealer web sites icon */
      var dealerSite = (0, _libs.$)('#mask').find('.icon-website');
      dealerBtn.on('click', function () {
        /* submiting form */
        (0, _libs.$)('#getDealer').submit();
      });
      dealerSite.on('click', function () {
        /* getting dealer name in mobile view */
        var mobDelName = (0, _libs.$)('.dealer-information h6 a').text().trim();

        /* definning event name */
        var dealerWebSiteClick = 'DealerWebSiteClick';

        /* calling GA event from helpers and passing parameters witch need to be send */
        Helpers.dealerGa(gaMarket, dealerWebSiteClick, mobDelName);
      });
    };

    (0, _libs.$)('body').on('click', '.spi-selDealer', function () {
      /* trigering function */
      getDealerId();
    });

    /* lisening event if we have any cahnges in #mask area */
    (0, _libs.$)('#mask').bind('DOMNodeInserted', function () {
      /* preventing multiple calss */
      setTimeout(function () {
        /* trigering function */
        getDealerMobile();

        /* setting interval 1 milisecond */
      }, 100);
    });
  }
};

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.engine = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var engine = exports.engine = function engine() {
  /* reading model code */
  var modelCode = (0, _libs.$)('.spi-selectedCarDetails__placholder').attr('data-modelCode');

  /* reading first part of URL */
  var origin = window.location.origin;

  /* reading second part of URL */
  var market = document.location.href.split('/');
  var gaMarket = (0, _libs.$)('html').attr('lang');

  /* variables */
  var chooseEngine = (0, _libs.$)('.spi-chooseEngine').val();
  var chooseMilage = (0, _libs.$)('.spi-chooseMilage').val();
  var engineList = (0, _libs.$)('.spi-js-engine');
  var milageList = (0, _libs.$)('.spi-js-milage');
  var engDropValue = (0, _libs.$)('.spi-js-engineDropValue');
  var milDropValue = (0, _libs.$)('.spi-js-milageDropValue');
  var engineDropList = (0, _libs.$)('.spi-js-engineDown');
  var decMilage = (0, _libs.$)('.spi-js-dectopMilage');
  var mobMilage = (0, _libs.$)('.spi-js-mobileMilage');
  var detailsNext = (0, _libs.$)('.spi-js-deteils-next');

  var onFuelChange = function onFuelChange() {
    /* clearing elements with helper function */
    Helpers.emptyElements(engineList, milageList, engDropValue, milDropValue);

    /* appending default label */
    (0, _libs.$)('.spi-js-engineDropValue').append('<span class="spi-dropValue__value">' + chooseEngine + '</span>');

    /* appending default label */
    (0, _libs.$)('.spi-js-milageDropValue').append('<span class="spi-dropValue__value">' + chooseMilage + '</span>');

    /* checking if element have class */
    if (engineDropList.hasClass('spi-blockedElement')) {
      /* if have then removing this class with helper method */
      Helpers.removeBlockClass(engineDropList);
    } else {
      /* if not then adding this class with helper method */
      Helpers.addBlockClass(decMilage, mobMilage, detailsNext);

      /* clearing styles for slider on fuel change */
      Helpers.styleReset();
    }
  };
  var getCarEngines = function getCarEngines(fuel) {
    /* reading car year from attribute */
    var carYear = (0, _libs.$)('.spi-js-yearDown').attr('car-year');

    /* reading fuel name from attribute */
    var passedName = (0, _libs.$)('.spi-js-choseFuel').attr('fuel-name');

    /* passing fuel nam to hidden field */
    (0, _libs.$)('#FuelType').val(passedName);

    /* passing fuel id to hidden field */
    (0, _libs.$)('#FuelTypeID').val(fuel);

    /* setting data attribute */
    (0, _libs.$)('.spi-js-choseFuel').attr('fuel-type', fuel);

    /* checking is there all needed parameters passed */
    if (typeof modelCode !== 'undefined' && typeof market !== 'undefined' && typeof carYear !== 'undefined' && typeof fuel !== 'undefined') {
      /* calling service */
      _libs.$.ajax({
        type: 'GET',
        dataType: 'json',
        url: origin + '/' + market[3] + '/data/spi/SelectedCarEngineTypes/' + modelCode + '/' + carYear + '/' + fuel,
        crossDomain: true,
        success: function success(data) {
          /* data response */
          var arr = _libs.$.parseJSON(data);
          if (arr !== null) {
            /* looping try data */
            for (var i = 0; i < arr.length; i++) {
              /* appending data to drop down box */
              engineList.append('<li engine-id="' + arr[i].EngineCode + '" data-value="' + arr[i].EngineName + '" class="spi-dropOption__value spi-js-dropOption__value">' + arr[i].EngineName + '</li>');
            }

            /* getting all created items */
            var items = (0, _libs.$)('.spi-js-engine > li');

            /* looping try items */
            _libs.$.each(items, function (key, value) {
              /* getting selected value */
              var selectedEngine = (0, _libs.$)(value).data('value');
              (0, _libs.$)(value).on('click', function () {
                /* calling tracking id function */
                Helpers.trackingID();

                /* creating GA event to send colected data */
                (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car details page\'', 'click|CarModel|CarYear|FuelName|EngineName', '\'' + modelCode + ', ' + carYear + ', ' + passedName + ', ' + selectedEngine + '\'');
              });
            });
          }
        },
        /* error logs */
        error: function error(xhr, thrownError) {
          console.log(thrownError);
        }
      });
    }
  };
  (0, _libs.$)('.spi-fuelType').on('click', '.spi-radio', function (e) {
    /* trigering function */
    onFuelChange();
    var target = e.target;

    /* reading data attribute */
    var fuelType = (0, _libs.$)(target).attr('data-value');

    /* reading data attribute */
    var selectedfuelName = (0, _libs.$)(target).attr('fuel-name');

    /* passing data attribute */
    (0, _libs.$)('.spi-js-choseFuel').attr('fuel-name', selectedfuelName);

    /* trigering function with parameter */
    getCarEngines(fuelType);
  });
};

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.fuel = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var fuel = exports.fuel = function fuel() {
  /* geting model code */
  var modelCode = (0, _libs.$)('.spi-selectedCarDetails__placholder').attr('data-modelCode');

  /* geting first part of URL */
  var origin = window.location.origin;

  /* geting second part of URL */
  var market = document.location.href.split('/');
  var gaMarket = (0, _libs.$)('html').attr('lang');

  /* variables */
  var chooseEngine = (0, _libs.$)('.spi-chooseEngine').val();
  var chooseMilage = (0, _libs.$)('.spi-chooseMilage').val();
  var engineDown = (0, _libs.$)('.spi-js-engineDown');
  var dectopMilage = (0, _libs.$)('.spi-js-dectopMilage');
  var mobileMilage = (0, _libs.$)('.spi-js-mobileMilage');
  var nextBtn = (0, _libs.$)('.spi-js-deteils-next');
  var fuelType = (0, _libs.$)('.spi-fuelType');
  var engineType = (0, _libs.$)('.spi-js-engine');
  var spiMilage = (0, _libs.$)('.spi-js-milage');
  var engineDropValue = (0, _libs.$)('.spi-js-engineDropValue');
  var milageDropValue = (0, _libs.$)('.spi-js-milageDropValue');
  var choseFuel = (0, _libs.$)('.spi-choseFuel');

  var onYearChange = function onYearChange() {
    /* clearing elements with helper function */
    Helpers.emptyElements(fuelType, engineType, spiMilage, engineDropValue, milageDropValue);

    /* appending default label */
    engineDropValue.append('<span class="spi-dropValue__value">' + chooseEngine + '</span>');

    /* appending default label */
    milageDropValue.append('<span class="spi-dropValue__value">' + chooseMilage + '</span>');

    /* chacking if element has class */
    if (choseFuel.hasClass('spi-blockedElement')) {
      /* if have then removing it with helper function */
      Helpers.removeBlockClass(choseFuel);
    } else {
      /* if not then adding class with helper function */
      Helpers.addBlockClass(engineDown, dectopMilage, mobileMilage, nextBtn);
      Helpers.styleReset();
    }
  };

  /* calling service to get fuel types */
  var getFuelTypes = function getFuelTypes(year) {
    /* getting selected model year */
    (0, _libs.$)('#ModelYear').val(year);

    /* appending yer to data attribute*/
    (0, _libs.$)('.spi-js-yearDown').attr('car-year', year);

    /* chacking if we have all needed parameters to call service */
    if (typeof modelCode !== 'undefined' && typeof market !== 'undefined' && typeof year !== 'undefined') {
      /* calling service */
      _libs.$.ajax({
        type: 'GET',
        dataType: 'json',
        url: origin + '/' + market[3] + '/data/spi/SelectedCarModelFuelTypes/' + modelCode + '/' + year,
        crossDomain: true,
        success: function success(data) {
          /* responded data */
          var arr = _libs.$.parseJSON(data);
          /* checking if data not null */
          if (arr !== null) {
            /* looping try data */
            for (var i = 0; i < arr.length; i++) {
              /* appending data to radio buttons */
              fuelType.append('<div class="spi-fuelType__type spi-js-fuelType__type"><a fuel-name="' + arr[i].FuelName + '" data-value="' + arr[i].FuelCode + '" class="spi-radio spi-js-radio">' + arr[i].FuelName + '</a></div>');
            }
            var items = (0, _libs.$)('.spi-fuelType').find('.spi-js-radio');
            _libs.$.each(items, function (key, value) {
              var selectedFuel = (0, _libs.$)(value).attr('fuel-name');
              (0, _libs.$)(value).on('click', function () {
                Helpers.trackingID();
                (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car details page\'', 'click|CarModel|CarYear|FuelName', '\'' + modelCode + ', ' + year + ', ' + selectedFuel + '\'');
              });
            });
          }
        },
        /* error logs */
        error: function error(xhr, thrownError) {
          console.log(thrownError);
          console.log(xhr.status);
        }
      });
    }
  };
  (0, _libs.$)('.spi-js-second').on('click', 'li', function (e) {
    var target = e.target;
    /* trigering function*/
    onYearChange();

    /* reading attribute */
    var carYear = (0, _libs.$)(target).attr('data-value');

    /* trigering function with year parameter */
    getFuelTypes(carYear);
  });
};

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.year = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var year = exports.year = function year() {
  /* getting car model code */
  var models = (0, _libs.$)('.spi-selectedCarDetails__placholder').attr('data-modelCode');

  /* getting first part of URL */
  var origin = window.location.origin;

  /* getting second part of URL */
  var market = document.location.href.split('/');
  var gaMarket = (0, _libs.$)('html').attr('lang');

  /* passing default label for drop down box */
  var chooseYears = (0, _libs.$)('.spi-chooseYear').val();

  /* appending lable for drop down box */
  (0, _libs.$)('.spi-js-YearValue').empty().append('<span class="spi-dropValue__value">' + chooseYears + '</span>');

  /* checkin if we got car model code */
  if (typeof models !== 'undefined') {
    /* calling service to get years */
    _libs.$.ajax({
      type: 'GET',
      dataType: 'json',
      url: origin + '/' + market[3] + '/data/spi/SelectedCarModelYears/' + models,
      crossDomain: true,
      success: function success(data) {
        localStorage.setItem('data', data);
        /* response data */
        var arr = _libs.$.parseJSON(data);
        /* chacking if we got data */
        if (arr !== null) {
          /* looping try data */
          for (var i = 0; i < arr.length; i++) {
            /* appending data to drop down box */
            (0, _libs.$)('.spi-js-years').append('<li data-value="' + arr[i] + '" class="spi-dropOption__value spi-js-dropOption__value">' + arr[i] + '</li>');
          }

          /* getting all created items */
          var items = (0, _libs.$)('.spi-js-years > li');

          /* looping try them */
          _libs.$.each(items, function (key, value) {
            /* getting selected value */
            var selectedYear = (0, _libs.$)(value).data('value');
            (0, _libs.$)(value).on('click', function () {
              /* calling tracking id function */
              Helpers.trackingID();

              /* creating GA event to send colected data */
              (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car details page\'', 'click|CarModel|CarYear', '\'' + models + ', ' + selectedYear + '\'');
            });
          });
        }
      },
      error: function error(xhr, thrownError) {
        /* error logs */
        console.log(thrownError);
        console.log(xhr.status);
      }
    });
  }
};

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.print = undefined;

var _libs = __webpack_require__(0);

var print = exports.print = function print() {
  (0, _libs.$)('.spi-js-Print').on('click', function (event) {
    /* stoping event */
    event.preventDefault();

    /* stoping event */
    event.stopImmediatePropagation();

    /* clearing Volvo Logo container and creating Volvo Logo image */
    (0, _libs.$)('.spi-volvoLogo').empty().append("<div class='print-header' style='width: 5%;margin: 0 auto;'><img src='/Content/SPI/volvo-logo-scaled.png' width=58 height=58 style='display:block;' alt='Volvo Logotip'></div>");
    setTimeout(function () {
      /* trigering print function */
      window.print();
    }, 500);
  });
};

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.radiob = undefined;

var _libs = __webpack_require__(0);

var radiob = exports.radiob = function radiob() {
  /* variable */
  var fuelText = (0, _libs.$)('.spi-js-carDetails .spi-js-carDetails__fuel');

  var radioClick = function radioClick(radioTarget) {
    /* removing activ and disabled classes */
    (0, _libs.$)('.spi-js-fuelType__type a').removeClass('spi-active spi-disable');

    /* defining data atribute */
    var fuel = (0, _libs.$)(radioTarget).attr('data-value');

    /* passing selected fuel type */
    fuelText.text(fuel);

    /* if target has calss spi-active */
    if ((0, _libs.$)(radioTarget).hasClass('spi-active')) {
      /* then we removing this class */
      (0, _libs.$)(radioTarget).removeClass('spi-active');
    } else {
      /* if not then we adding this class */
      (0, _libs.$)(radioTarget).addClass('spi-active spi-disable');
    }
  };

  (0, _libs.$)('.spi-fuelType').on('click', '.spi-js-radio', function (e) {
    /* trigering function */
    radioClick(e.target);
  });
};

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.range = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var range = exports.range = function range() {
  /* Variables */
  var modelCode = (0, _libs.$)('.spi-selectedCarDetails__placholder').attr('data-modelCode');
  var origin = window.location.origin;
  var market = document.location.href.split('/');
  var gaMarket = (0, _libs.$)('html').attr('lang');
  var minValue = void 0;
  var maxValue = void 0;
  var intervalSize = void 0;
  var stepSize = void 0;
  var inVal = void 0;
  var unit = void 0;
  var sliderStep = void 0;
  var yearOne = (0, _libs.$)('#spi-js-yearOne').val();
  var yearTwo = (0, _libs.$)('#spi-js-yearTwo').val();
  var yearText = (0, _libs.$)('.spi-carMilage-js__yearContainer');
  var rangeData = (0, _libs.$)('.spi-js-carMilage__data');
  var yearsData = (0, _libs.$)('.spi-js-carMilage__yearData');
  var year = (0, _libs.$)('#spi-js-monthsInStep').val();
  var chooseMilage = (0, _libs.$)('.spi-chooseMilage').val();
  var nextBtn = (0, _libs.$)('.spi-js-deteils-next');
  var linePosition = (0, _libs.$)('.spi-js-linePos');
  var carMilage = (0, _libs.$)('.spi-js-milage');
  var milageDropValue = (0, _libs.$)('.spi-js-milageDropValue');
  var descMilage = (0, _libs.$)('.spi-js-dectopMilage');
  var mobMilage = (0, _libs.$)('.spi-js-mobileMilage');
  var engineList = (0, _libs.$)('.spi-js-engineDown');
  var unblockButton = function unblockButton() {
    if (nextBtn.hasClass('spi-blockedElement')) {
      /* trigering helper function */
      Helpers.removeBlockClass(nextBtn);
    }
  };

  var sliderMove = function sliderMove(event, ui) {
    /* on slider move Next button is activated */
    unblockButton();

    /* defining range value */
    var value = ui.value;

    /* passing sliderRange value in to spi-inputRange data attribute */
    (0, _libs.$)('.spi-inputRange').attr('input-value', value);

    /* looping try all steps and calculating labels on slider move */
    for (var i = 0; i <= stepSize; i++) {
      /* starting loop if steps size is more then 0 and ending if step has ended */
      if (i > 0 && i < stepSize * i) {
        /* if interval size is smaller or equls actual range value and if interval is bigger then acctual value */
        if (value >= intervalSize * i - intervalSize && value < intervalSize * i) {
          /* if it is first step */
          if (i === 1) {
            /* showing year */
            yearText.text(yearOne);

            /* calculateing and displaying value for the first step for year */
            yearsData.text('' + year * i);

            /* calculateing and displaying value for the first step */
            rangeData.text(minValue + '-' + Math.round(intervalSize * i) + ' ' + unit);

            /* passing value to hidden field */
            (0, _libs.$)('#decMileage').val(minValue + '-' + Math.round(intervalSize * i) + ' ' + unit + ' ' + year * i + ' ' + yearOne);

            /* passing value to hidden field */
            (0, _libs.$)('#decMileageNumber').val(minValue + '-' + Math.round(intervalSize * i));
          } else {
            /* showing years */
            yearText.text(yearTwo);

            /* calculateing and displaying value for the other step for year */
            yearsData.text('' + year * i);

            /* calculateing and displaying value for the other steps */
            rangeData.text(Math.round(intervalSize * i - intervalSize) + '-' + Math.round(intervalSize * i) + ' ' + unit);

            /* passing value to hidden field */
            (0, _libs.$)('#decMileage').val(Math.round(intervalSize * i - intervalSize) + '-' + Math.round(intervalSize * i) + ' ' + unit + ' ' + year * i + ' ' + yearTwo);

            /* passing value to hidden field */
            (0, _libs.$)('#decMileageNumber').val(Math.round(intervalSize * i - intervalSize) + '-' + Math.round(intervalSize * i));
          }
        }
        /* if it is last step */
      } else if (i === stepSize) {
        /* if value is biger then interval size */
        if (value >= intervalSize * (i - 1)) {
          /* calculateing and displaying value for the last step */
          rangeData.text(Math.round(intervalSize * i - intervalSize) + '-' + Math.round(intervalSize * i) + ' ' + unit);

          /* passing value to hidden field */
          (0, _libs.$)('#decMileage').val(Math.round(intervalSize * i - intervalSize) + '-' + Math.round(intervalSize * i) + ' ' + unit + ' ' + year * i + ' ' + yearTwo);

          /* passing value to hidden field */
          (0, _libs.$)('#decMileageNumber').val(Math.round(intervalSize * i - intervalSize) + '-' + Math.round(intervalSize * i));
        }
      }
    }
  };
  (0, _libs.$)(nextBtn).on('click', function () {
    /* Getting value from attr */
    var passedFuelName = (0, _libs.$)('.spi-js-choseFuel').attr('fuel-name');

    /* Getting value from attr */
    var engineName = (0, _libs.$)('.spi-js-engineDown').attr('engine-name');

    /* Getting value from attr */
    var yearName = (0, _libs.$)('.spi-js-yearDown').attr('car-year');

    /* Getting value */
    var milageData = (0, _libs.$)('#decMileage').val();

    /* calling trackingId function from Helpers */
    Helpers.trackingID();

    /* Creating Google Analitics event to send data with passed values */
    (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car details page\'', 'click|CarModel|CarYear|FuelName|EngineName|SelectedMilage', '\'' + modelCode + ', ' + yearName + ', ' + passedFuelName + ', ' + engineName + ', ' + milageData + '\'');
  });

  /* defining main slider */
  var spiSlider = function spiSlider() {
    if (_libs.vc.settings.spi) {
      /* initializing slider */
      (0, _libs.$)('#spi-js-inputRange__slider').slider({
        range: 'max',
        min: 0,
        /* passing max value from API */
        max: maxValue,
        value: 0,
        /* passing step */
        step: sliderStep,
        slide: function slide(event, ui) {
          /* initialize function on slide */
          sliderMove(event, ui);
        },
        stop: function stop(event, ui) {
          /* initialize function on click */
          sliderMove(event, ui);
        }
      });
    }
  };

  /* function to redraw lines */
  var redrawLines = function redrawLines() {
    /* clear section before draw lines */
    Helpers.emptyElements(linePosition);
    /* looping try steps */
    for (var i = 0; i <= stepSize - 1; i++) {
      if (i !== 0) {
        if (maxValue <= 100) {
          /* draw lines if max value is smaller then 100 */
          linePosition.append('<div data-position="' + i / stepSize * 100 + '" class="spi-inputRange--first spi-js-inputRange--' + i + '" style="width:1%!important;left: ' + (i / stepSize * 100 - 2) + '%"></div>');
        } else {
          /* draw lines if max value is bigger then 100 */
          linePosition.append('<div data-position="' + i / stepSize * 100 + '" class="spi-inputRange--first spi-js-inputRange--' + i + '" style="width:1%!important;left: ' + i / stepSize * 100 + '%"></div>');
        }
      }
    }
  };

  /* function on engine change */
  var onEngineChange = function onEngineChange() {
    /* adding class to block next button */
    Helpers.addBlockClass(nextBtn);

    /* clearing milage */
    Helpers.emptyElements(carMilage, milageDropValue);

    /* appending new selected value zone */
    milageDropValue.append('<span class="spi-dropValue__value">' + chooseMilage + '</span>');

    /* Calling style clear function for slider */
    Helpers.styleReset();
  };

  /* function to check if max value is smaller or eqels to 100 */
  var isYears = function isYears() {
    if (maxValue <= 100) {
      sliderStep = 0.1;
    } else {
      sliderStep = 500;
    }
  };

  /* function to populate mobile drop down with ranges */
  var mobileRangePopulate = function mobileRangePopulate() {
    /* passing value to attribute */
    (0, _libs.$)('.spi-inputRange').attr('input-value', inVal);

    /* showing start text */
    (0, _libs.$)('.spi-js-carMilage__data').text(inVal + ' ' + unit);

    /* loping try steps */
    for (var a = 0; a <= stepSize; a++) {
      /* start loop if steps is more then 0 */
      if (a !== 0) {
        /* check if it is first element */
        if (a === 1) {
          carMilage.append('<li data-range="' + minValue + '-' + intervalSize * a + '" data-value="' + minValue + '-' + intervalSize * a + ' ' + unit + ' ' + year * a + ' ' + yearOne + '" class="spi-dropOption__value spi-js-dropOption__value">' + minValue + '-' + intervalSize * a + ' ' + unit + ' </br> ' + year * a + ' ' + yearOne + '</li>');
        } else {
          carMilage.append('<li data-range="' + (intervalSize * a - intervalSize) + '-' + intervalSize * a + '" data-value="' + (intervalSize * a - intervalSize) + '-' + intervalSize * a + ' ' + unit + ' ' + year * a + ' ' + yearTwo + '" class="spi-dropOption__value spi-js-dropOption__value">' + (intervalSize * a - intervalSize) + '-' + intervalSize * a + ' ' + unit + ' </br> ' + year * a + ' ' + yearTwo + '</li>');
        }
      }
    }
  };

  /* activating range selector if engine is selected */
  var activateRangeSlider = function activateRangeSlider() {
    if (descMilage.hasClass('spi-blockedElement')) {
      /* trigering helper function */
      Helpers.removeBlockClass(descMilage);
    }
    if (mobMilage.hasClass('spi-blockedElement')) {
      /* trigering helper function */
      Helpers.removeBlockClass(mobMilage);
    }
  };

  /* function to call API with parameters to range */
  var getInputRange = function getInputRange(engineId) {
    /* passing value to attribute */
    var fuelType = (0, _libs.$)('.spi-js-choseFuel').attr('fuel-type');

    /* passing value to attribute */
    var carYear = (0, _libs.$)('.spi-js-yearDown').attr('car-year');

    /* check if all parameters is passed */
    if (typeof modelCode !== 'undefined' && typeof market !== 'undefined' && typeof carYear !== 'undefined' && typeof fuelType !== 'undefined' && typeof engineId !== 'undefined') {
      _libs.$.ajax({
        type: 'GET',
        dataType: 'json',
        url: origin + '/' + market[3] + '/data/spi/SelectedCarMileageRange/' + modelCode + '/' + carYear + '/' + fuelType + '/' + engineId,
        crossDomain: true,
        success: function success(data) {
          var arr = _libs.$.parseJSON(data);
          if (arr !== null) {
            minValue = arr.BeginningMileage;
            inVal = arr.BeginningMileage;
            maxValue = arr.TotalMileage;
            intervalSize = arr.IntervalSize;
            stepSize = arr.IntervalsCount;
            unit = arr.Unit;
            mobileRangePopulate();
            redrawLines();
            isYears();
            spiSlider();
          }
        },
        error: function error(xhr, thrownError) {
          console.log(thrownError);
        }
      });
    }
  };

  /* engine select function */
  (0, _libs.$)('.spi-js-engine').on('click', 'li', function (e) {
    /* detecting clicked element */
    var target = e.target;

    /* initializeing onEngineChange function */
    onEngineChange();
    var engId = (0, _libs.$)(target).attr('engine-id');

    /* passing selected element value attribute */
    var engName = (0, _libs.$)(target).attr('data-value');
    (0, _libs.$)('#EngineType').val(engName);
    (0, _libs.$)('#EngineID').val(engId);
    engineList.attr('engine-id', engId);
    engineList.attr('engine-name', engName);

    /* initializing getInputRange function with selected engine ID */
    getInputRange(engId);

    /* unblocking slider */
    activateRangeSlider();
  });

  /* function on mobile milage select */
  carMilage.on('click', 'li', function (e) {
    /* detecting clicked element */
    var target = e.target;

    /* unblocking Next button */
    unblockButton();

    /* passing selected element value to attribute */
    var mobMilages = (0, _libs.$)(target).attr('data-value');

    /* passing selected element value to attribute */
    var mobMilageNumber = (0, _libs.$)(target).attr('data-range');

    /* passing selected element value */
    (0, _libs.$)('#decMileage').val(mobMilages);

    /* passing selected element value */
    (0, _libs.$)('#decMileageNumber').val(mobMilageNumber);

    /* calling trackingId function from Helpers */
    Helpers.trackingID();
    (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car details page\'', 'click|SelectedMilageMobile', '\'' + mobMilages + '\'');
  });

  /* default slider for representation */
  var defaultSlider = function defaultSlider() {
    if (_libs.vc.settings.spi) {
      (0, _libs.$)('#spi-js-inputRange__slider').slider({
        range: 'max',
        min: 0,
        max: 200000,
        value: 0,
        step: 500,
        slide: function slide(event, ui) {
          sliderMove(event, ui);
        },
        stop: function stop(event, ui) {
          sliderMove(event, ui);
        }
      });
    }
  };

  /* initializing default slider */
  defaultSlider();
};

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.analicticsScript = undefined;

var _libs = __webpack_require__(0);

var _helpers = __webpack_require__(1);

var Helpers = _interopRequireWildcard(_helpers);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var analicticsScript = exports.analicticsScript = function analicticsScript() {
  /* variables */
  var gaMarket = (0, _libs.$)('html').attr('lang');
  if (_libs.vc.settings.spi) {
    (0, _libs.$)('.spi-selectModel').on('click', '.spi-carView', function (e) {
      /* calling trackingId function from helpers */
      Helpers.trackingID();

      /* getting clicked car name */
      var carName = (0, _libs.$)(e.target).closest('.spi-carView').find('.spi-carView__name').text();

      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car model page\'', 'Car model page|Click', '\'' + carName + '\'');
    });
    (0, _libs.$)('.cta-button').on('click', function () {
      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Start Page\'', 'Start Estimating Price|Click', 'Start Estimating Price');
    });

    (0, _libs.$)('.spi-bookService-btn a').on('click', function () {
      /* Dealer name variable */
      var dealerName = (0, _libs.$)('.spi-dealerLocation__name').text().trim();

      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Result page\'', 'Enter contact form|Click', '\'Enter contact form|' + dealerName + '\'');
    });

    (0, _libs.$)('.spi-dealerLocation__cords a').on('click', function () {
      /* Dealer phone variable */
      var dealerPhone = (0, _libs.$)('.spi-dealerLocation__cords').text().trim();

      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Result page\'', 'Call Dealer Phone|Click', '\'Call dealer|' + dealerPhone + '\'');
    });

    (0, _libs.$)('.spi-sendEmail a').on('click', function () {
      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Result page\'', 'Enter E-mail form|Click', 'Enter Email form');
    });

    (0, _libs.$)('.spi-js-Print span').on('click', function () {
      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Result page\'', 'Print offer|Click', 'Print offer');
    });

    (0, _libs.$)('.spi-servicePromise__link a , .spi-promisePoster a').on('click', function () {
      /* Creating GA event to send collected data */
      (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Result page\'', 'Volvo Service 2.0 web site|Click', 'Enter Volvo Servie 2.0 web site'); /*  */
    });
    (0, _libs.$)(document).ready(function () {
      /*
        * Creating GA event to send on page load data
        * Creating event for all pages and passing Market
      */
      (0, _libs.$)(window).on('load', function () {
        if ((0, _libs.$)('.standard-hero').length > 0) {
          (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Start Page\'', 'Market|View', '\'' + gaMarket + '\'');
        }
        if ((0, _libs.$)('.dealer-locator').length > 0) {
          (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Dealer locator page\'', 'Dealer web site|Click', 'Enter dealer locator page');
        }
        if ((0, _libs.$)('.spi-selectModel').length > 0) {
          (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car Selector page\'', 'Car Selector page|Click', 'Enter Car Selector page');
        }
        if ((0, _libs.$)('.spi-selectedCarDetails').length > 0) {
          (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Car Details page\'', 'Car Details page|Click', 'Enter Car Details page');
        }
        if ((0, _libs.$)('.spi-Price').length > 0) {
          (0, _libs.ga)('send', 'event', '\'Market:' + gaMarket + '|Service Price page\'', 'Service Price page|Click', 'Enter Service Price page');
        }
      });
    });
  }
};

/***/ }),
/* 13 */
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
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(2);


/***/ })
/******/ ]);