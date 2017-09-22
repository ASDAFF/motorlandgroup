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
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
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
exports.Hogan = exports.NotificationTypes = exports.Modernizr = exports.MediaElementPlayer = exports.$sc = exports._ = exports.moment = exports.templates = exports.vc = exports.Backbone = exports.$ = undefined;

var _templates = __webpack_require__(1);

var tmp = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

// eslint-disable-next-line no-use-before-define
var $ = exports.$ = global.$;
// eslint-disable-next-line no-use-before-define
var Backbone = exports.Backbone = global.Backbone;
// eslint-disable-next-line no-use-before-define
var vc = exports.vc = global.vc;
// eslint-disable-next-line no-use-before-define
var templates = exports.templates = tmp;
// eslint-disable-next-line no-use-before-define
var moment = exports.moment = global.moment;
// eslint-disable-next-line no-use-before-define
var _ = exports._ = global._;
// eslint-disable-next-line no-use-before-define
var $sc = exports.$sc = global.$sc;
// eslint-disable-next-line no-use-before-define
var MediaElementPlayer = exports.MediaElementPlayer = global.MediaElementPlayer;
// eslint-disable-next-line no-use-before-define
var Modernizr = exports.Modernizr = global.Modernizr;
// eslint-disable-next-line no-use-before-define
var NotificationTypes = exports.NotificationTypes = global.NotificationTypes;
// eslint-disable-next-line no-use-before-define
var Hogan = exports.Hogan = global.Hogan;
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(6)))

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

Object.defineProperty(exports, "__esModule", {
  value: true
});
var Hogan = global.Hogan;
var basicOverlay = exports.basicOverlay = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<a href=\"#\" class=\"overlay-close\"><i class=\"icon icon-close\"></i></a>");t.b("\n" + i);t.b("<div class=\"container\"></div>");return t.fl();
  }, partials: {}, subs: {} });
var carouselOverlay = exports.carouselOverlay = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("\n" + i);t.b("<a href=\"#\" class=\"overlay-close\"><i class=\"icon icon-close\"></i></a>");t.b("\n");t.b("\n" + i);t.b("<div class=\"carousel\">");t.b("\n");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"controls\">");t.b("\n" + i);t.b("  <a href=\"#\" class=\"prev\">");t.b("\n" + i);t.b("    <i class=\"icon icon-angle-left\"></i>");t.b("\n" + i);t.b("  </a>");t.b("\n" + i);t.b("  <a href=\"#\" class=\"next\">");t.b("\n" + i);t.b("    <i class=\"icon icon-angle-right\"></i>");t.b("\n" + i);t.b("  </a>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorCard = exports.customerEditorCard = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<div class=\"account-setting\">");t.b("\n");t.b("\n" + i);t.b("	<div class=\"account-setting-card\">");t.b("\n" + i);t.b("		");t.b("\n" + i);t.b("		<ul>");t.b("\n" + i);if (t.s(t.f("fieldset", c, p, 1), c, p, 0, 93, 334, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        if (t.s(t.f("stringValue", c, p, 1), c, p, 0, 113, 314, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            if (!t.s(t.f("isHidden", c, p, 1), c, p, 1, 0, 0, "")) {
              t.b("			<li class=\"");if (t.s(t.f("isSubcontrol", c, p, 1), c, p, 0, 171, 182, "{{ }}")) {
                t.rs(c, p, function (c, p, t) {
                  t.b("is-sub-item");
                });c.pop();
              }t.b("\">");t.b("\n" + i);t.b("				<span class=\"label\">");t.b(t.v(t.f("label", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("				<span>");t.b(t.v(t.f("stringValue", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("			</li>");t.b("\n" + i);
            };
          });c.pop();
        }
      });c.pop();
    }t.b("		</ul>");t.b("\n");t.b("\n" + i);t.b("	</div>");t.b("\n");t.b("\n" + i);t.b("	<div class=\"account-setting-actions\">");t.b("\n" + i);t.b("		<a href=\"#update\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Update", c, p, 0)));t.b("</a>");t.b("\n" + i);t.b("	</div>");t.b("\n" + i);t.b("</div>");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorForm = exports.customerEditorForm = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<form class=\"account-form\" id=\"account-form\">");t.b("\n" + i);if (t.s(t.f("fieldset", c, p, 1), c, p, 0, 60, 864, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("	<div class=\"form-item");if (t.s(t.f("isSubcontrol", c, p, 1), c, p, 0, 100, 112, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" is-sub-item");
          });c.pop();
        }if (t.s(t.f("hasSubcontrols", c, p, 1), c, p, 0, 148, 162, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" has-sub-items");
          });c.pop();
        }t.b(" ");if (t.s(t.f("isHidden", c, p, 1), c, p, 0, 195, 211, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("form-item-hidden");
          });c.pop();
        }t.b("\">");t.b("\n" + i);if (!t.s(t.f("isHidden", c, p, 1), c, p, 1, 0, 0, "")) {
          t.b("        <div class=\"form-desc\">");t.b(t.v(t.f("desc", c, p, 0)));t.b("</div>");t.b("\n" + i);if (!t.s(t.f("isCheckbox", c, p, 1), c, p, 1, 0, 0, "")) {
            t.b("        <label>");t.b("\n" + i);t.b("            <span>");t.b(t.v(t.f("label", c, p, 0)));t.b("</span>");t.b("\n" + i);if (t.s(t.f("required", c, p, 1), c, p, 0, 395, 472, "{{ }}")) {
              t.rs(c, p, function (c, p, t) {
                if (t.s(t.f("label", c, p, 1), c, p, 0, 405, 462, "{{ }}")) {
                  t.rs(c, p, function (c, p, t) {
                    t.b("            <span class=\"form-req\">*</span>");t.b("\n" + i);
                  });c.pop();
                }
              });c.pop();
            }t.b("        </label>");t.b("\n" + i);
          };
        };if (t.s(t.f("isInput", c, p, 1), c, p, 0, 563, 580, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(t.rp("<input0", c, p, "		"));
          });c.pop();
        }if (t.s(t.f("isHidden", c, p, 1), c, p, 0, 608, 626, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(t.rp("<hidden1", c, p, "		"));
          });c.pop();
        }if (t.s(t.f("isSelect", c, p, 1), c, p, 0, 655, 673, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(t.rp("<select2", c, p, "		"));
          });c.pop();
        }if (t.s(t.f("isCheckbox", c, p, 1), c, p, 0, 710, 742, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(t.rp("<checkbox3", c, p, "        "));
          });c.pop();
        }if (t.s(t.f("isRadio", c, p, 1), c, p, 0, 778, 807, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(t.rp("<radio4", c, p, "        "));
          });c.pop();
        }t.b("		<span class=\"form-error\"></span>");t.b("\n" + i);t.b("	</div>");t.b("\n" + i);
      });c.pop();
    }t.b("	<div class=\"form-item form-actions\">");t.b("\n" + i);t.b("		<a href=\"#save\" class=\"button\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Save", c, p, 0)));t.b("</a>");t.b("\n" + i);if (!t.s(t.f("editOnly", c, p, 1), c, p, 1, 0, 0, "")) {
      t.b("		<a href=\"#cancel\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Cancel", c, p, 0)));t.b("</a>");t.b("\n" + i);
    };t.b("	</div>");t.b("\n" + i);t.b("</form>");t.b("\n");return t.fl();
  }, partials: { "<input0": { name: "input", partials: {}, subs: {} }, "<hidden1": { name: "hidden", partials: {}, subs: {} }, "<select2": { name: "select", partials: {}, subs: {} }, "<checkbox3": { name: "checkbox", partials: {}, subs: {} }, "<radio4": { name: "radio", partials: {}, subs: {} } }, subs: {} });
var customerEditorFormCheckbox = exports.customerEditorFormCheckbox = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<input type=\"checkbox\" id=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\" name=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\" ");if (t.s(t.f("isChecked", c, p, 1), c, p, 0, 77, 84, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("checked");
      });c.pop();
    }t.b(">");t.b("\n" + i);t.b("<label for=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\"><span>");t.b(t.v(t.f("label", c, p, 0)));t.b("</span></label>");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorFormHidden = exports.customerEditorFormHidden = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<input name=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\" placeholder=\"\" type=\"hidden\" value=\"");t.b(t.v(t.f("value", c, p, 0)));t.b("\">");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorFormInput = exports.customerEditorFormInput = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<input name=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\" class=\"");t.b(t.v(t.f("subtype", c, p, 0)));t.b("\" type=\"text\" value=\"");t.b(t.v(t.f("value", c, p, 0)));t.b("\" ");if (t.s(t.f("required", c, p, 1), c, p, 0, 91, 99, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("required");
      });c.pop();
    }t.b(">");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorFormPicture = exports.customerEditorFormPicture = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<img src=\"Frontend/Images/profile.jpg\" alt=\"\">");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorFormRadio = exports.customerEditorFormRadio = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<div class=\"form-radio\">");t.b("\n" + i);if (t.s(t.f("options", c, p, 1), c, p, 0, 38, 250, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("    <fieldset>");t.b("\n" + i);t.b("        <input type=\"radio\" name=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\" value=\"");t.b(t.v(t.f("id", c, p, 0)));t.b("\" id=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b(".");t.b(t.v(t.f("id", c, p, 0)));t.b("\" ");if (t.s(t.f("selected", c, p, 1), c, p, 0, 157, 165, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" checked");
          });c.pop();
        }t.b(" /><label for=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b(".");t.b(t.v(t.f("id", c, p, 0)));t.b("\">");t.b(t.v(t.f("value", c, p, 0)));t.b("</label>");t.b("\n" + i);t.b("    </fieldset>");t.b("\n" + i);
      });c.pop();
    }t.b("</div>");return t.fl();
  }, partials: {}, subs: {} });
var customerEditorFormSelect = exports.customerEditorFormSelect = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("\n" + i);t.b("<div class=\"form-dropdown\">");t.b("\n" + i);t.b("	<select name=\"");t.b(t.v(t.f("fieldname", c, p, 0)));t.b("\">");t.b("\n" + i);if (t.s(t.f("options", c, p, 1), c, p, 0, 74, 156, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("		<option value=\"");t.b(t.v(t.f("id", c, p, 0)));t.b("\" ");if (t.s(t.f("selected", c, p, 1), c, p, 0, 113, 121, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("selected");
          });c.pop();
        }t.b(">");t.b(t.v(t.f("value", c, p, 0)));t.b("</option>");t.b("\n" + i);
      });c.pop();
    }t.b("	</select>");t.b("\n" + i);t.b("	<i class=\"icon icon-angle-down\"></i>");t.b("\n" + i);t.b("</div>");return t.fl();
  }, partials: {}, subs: {} });
var spinner = exports.spinner = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<div class=\"lxp-spinner__overlay\"></div>");t.b("\n" + i);t.b("<div class=\"lxp-spinner__spinner\"></div>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var userMenu = exports.userMenu = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");if (t.s(t.f("GreetingLabel", c, p, 1), c, p, 0, 18, 78, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("<sapn class=\"lxp-mainMenu__title\">");t.b(t.v(t.f("GreetingLabel", c, p, 0)));t.b("</sapn>");t.b("\n" + i);
      });c.pop();
    }if (t.s(t.f("MenuList", c, p, 1), c, p, 0, 110, 214, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("<a class=\"lxp-mainMenu__link\" href=\"");t.b(t.v(t.f("URL", c, p, 0)));t.b("\" ");if (t.s(t.f("Target", c, p, 1), c, p, 0, 167, 188, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" target=\"");t.b(t.v(t.f("Target", c, p, 0)));t.b("\" ");
          });c.pop();
        }t.b(">");t.b(t.v(t.f("Title", c, p, 0)));t.b("</a>");t.b("\n" + i);
      });c.pop();
    }return t.fl();
  }, partials: {}, subs: {} });
var connectVehicleOverlay = exports.connectVehicleOverlay = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<a href=\"#\" class=\"lxp-overlay__close lxp-js-overlay__close\"><i class=\"icon icon-close\"></i></a>");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__titleContainer\">");t.b("\n" + i);t.b("    <hgroup>");t.b("\n" + i);t.b("        <h6></h6>");t.b("\n" + i);t.b("        <h3 class=\"lxp-overlay__title\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Car_Connect_Title", c, p, 0)));t.b("</h3>");t.b("\n" + i);t.b("    </hgroup>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__details\">");t.b("\n" + i);t.b("    <p class=\"lxp-overlay__detailsRow\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Confirm_Information", c, p, 0)));t.b("</p>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__section\">");t.b("\n" + i);t.b("    <div class=\"lxp-myCar--overlay\">");t.b("\n" + i);t.b("        <div class=\"lxp-myCar__card\">");t.b("\n" + i);t.b("            <div class=\"lxp-myCar__imageContainer--overlay\">");t.b("\n" + i);t.b("                <img class=\"lxp-myCar__image--overlay\" src=\"");t.b(t.v(t.f("ImageUrl", c, p, 0)));t.b("\" alt=\"");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("\" />");t.b("\n" + i);t.b("                <div class=\"lxp-myCar__imageGuidance\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Guidance_Text", c, p, 0)));t.b("</div>");t.b("\n" + i);t.b("            </div>");t.b("\n");t.b("\n" + i);t.b("            <div class=\"lxp-myCar__data--overlay\">");t.b("\n" + i);t.b("                <ul class=\"lxp-myCar__dataList\">");t.b("\n" + i);t.b("                    <li class=\"lxp-myCar__dataListRow\">");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__itemLabel--overlay\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ModelName", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__item\">");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                    </li>");t.b("\n" + i);t.b("                    <li class=\"lxp-myCar__dataListRow\">");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__itemLabel--overlay\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Relationship", c, p, 0)));t.b("</span>");t.b("\n" + i);if (t.s(t.f("Owner", c, p, 1), c, p, 0, 1509, 1655, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("                        <span class=\"lxp-myCar__item\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Owns", c, p, 0)));t.b("</span>");t.b("\n" + i);
      });c.pop();
    }if (!t.s(t.f("Owner", c, p, 1), c, p, 1, 0, 0, "")) {
      t.b("                        <span class=\"lxp-myCar__item\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Drives", c, p, 0)));t.b("</span>");t.b("\n" + i);
    };t.b("                    </li>");t.b("\n" + i);t.b("                </ul>");t.b("\n");t.b("\n" + i);t.b("                <ul class=\"lxp-myCar__dataList\">");t.b("\n" + i);if (!t.s(t.f("DontShowModelYear", c, p, 1), c, p, 1, 0, 0, "")) {
      t.b("                    <li class=\"lxp-myCar__dataListRow\">");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__itemLabel--overlay\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ModelYear", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__item\">");t.b(t.v(t.f("ModelYear", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                    </li>");t.b("\n" + i);
    };t.b("                    <li class=\"lxp-myCar__dataListRow\">");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__itemLabel--overlay\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Vin", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                        <span class=\"lxp-myCar__item\">");t.b(t.v(t.f("VinId", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                    </li>");t.b("\n" + i);t.b("                </ul>");t.b("\n" + i);t.b("            </div>");t.b("\n" + i);t.b("        </div>");t.b("\n" + i);t.b("    </div>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__section\">");t.b("\n");t.b("\n" + i);t.b("    <div class=\"lxp-overlay__buttonGroup\">");t.b("\n" + i);t.b("        <a href=\"#confirm\" class=\"lxp-overlay__button lxp-js-overlay__button\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Confirm", c, p, 0)));t.b("</a>");t.b("\n" + i);t.b("        <a href=\"#cancel\" class=\"lxp-overlay__buttonSecondary lxp-js-overlay__button\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Cancel", c, p, 0)));t.b("</a>");t.b("\n" + i);t.b("    </div> ");t.b("\n" + i);t.b("    <div class=\"lxp-overlay__details\" id=\"additionalInfo\">");t.b("\n" + i);t.b("        <br>");t.b("\n" + i);t.b("        <small>");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_SingleAsterisk", c, p, 0)));t.b("</small>");t.b("\n" + i);t.b("    </div>");t.b("\n" + i);t.b("</div>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var removeVehicleOverlay = exports.removeVehicleOverlay = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<a href=\"#\" class=\"lxp-overlay__close lxp-js-overlay__close\"><i class=\"icon icon-close\"></i></a>");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__titleContainer\">");t.b("\n" + i);t.b("  <hgroup>");t.b("\n" + i);t.b("    <h6></h6>");t.b("\n" + i);t.b("    <h3 class=\"lxp-overlay__title\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ChangeCarRelation", c, p, 0)));t.b("</h3>");t.b("\n" + i);t.b("    <p class=\"lxp-overlay__selectAndConfirm\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_SelectAndConfirm", c, p, 0)));t.b("</p>");t.b("\n" + i);t.b("  </hgroup>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__section\">");t.b("\n" + i);t.b("  <div class=\"lxp-myCar--overlay\">");t.b("\n" + i);t.b("    <div class=\"lxp-myCar__card\">");t.b("\n" + i);t.b("      <div class=\"lxp-myCar__imageContainer--overlay\">");t.b("\n" + i);t.b("        <img class=\"lxp-myCar__image--overlay\" src=\"");t.b(t.v(t.f("ImageUrl", c, p, 0)));t.b("\" alt=\"");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("\" />");t.b("\n" + i);t.b("      </div>");t.b("\n");t.b("\n" + i);t.b("      <div class=\"lxp-myCar__data--overlay\">");t.b("\n" + i);if (!t.s(t.f("owner", c, p, 1), c, p, 1, 0, 0, "")) {
      if (!t.s(t.f("requested", c, p, 1), c, p, 1, 0, 0, "")) {
        t.b("        <div class=\"lxp-myCar__statusColumn--left lxp-js-myCar__statusColumn\" data-type=\"owner\">");t.b("\n" + i);t.b("          <fieldset class=\"lxp-myCar__statusField\">");t.b("\n" + i);t.b("            <input type=\"radio\" class=\"lxp-myCar__statusSelector lxp-js-myCar__statusSelector\" name=\"status\" value=\"owner\" id=\"status-owner\"/><label class=\"lxp-myCar__statusLabel\" for=\"status-owner\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_RequestOwnership", c, p, 0)));t.b("</label>");t.b("\n" + i);t.b("          </fieldset>");t.b("\n" + i);t.b("        </div>");t.b("\n" + i);
      };
    };t.b("\n" + i);t.b("        <div class=\"lxp-myCar__statusColumn");if (t.s(t.f("owner", c, p, 1), c, p, 0, 1337, 1345, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("--center");
      });c.pop();
    }if (!t.s(t.f("owner", c, p, 1), c, p, 1, 0, 0, "")) {
      if (t.s(t.f("requested", c, p, 1), c, p, 0, 1379, 1387, "{{ }}")) {
        t.rs(c, p, function (c, p, t) {
          t.b("--center");
        });c.pop();
      }if (!t.s(t.f("requested", c, p, 1), c, p, 1, 0, 0, "")) {};
    };t.b(" lxp-js-myCar__statusColumn\" data-type=\"remove\">");t.b("\n" + i);t.b("          <fieldset class=\"lxp-myCar__statusField");if (t.s(t.f("owner", c, p, 1), c, p, 0, 1547, 1555, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("--center");
      });c.pop();
    }if (!t.s(t.f("owner", c, p, 1), c, p, 1, 0, 0, "")) {
      if (t.s(t.f("requested", c, p, 1), c, p, 0, 1589, 1597, "{{ }}")) {
        t.rs(c, p, function (c, p, t) {
          t.b("--center");
        });c.pop();
      }if (!t.s(t.f("requested", c, p, 1), c, p, 1, 0, 0, "")) {
        t.b("--right");
      };
    };t.b("\">");t.b("\n" + i);t.b("            <input type=\"radio\" class=\"lxp-myCar__statusSelector lxp-js-myCar__statusSelector\" name=\"status\" value=\"remove\" id=\"status-remove\"/><label class=\"lxp-myCar__statusLabel\" for=\"status-remove\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Remove", c, p, 0)));t.b("</label>");t.b("\n" + i);t.b("          </fieldset>");t.b("\n" + i);t.b("        </div>");t.b("\n");t.b("\n" + i);t.b("      </div>");t.b("\n" + i);t.b("    </div>");t.b("\n" + i);t.b("  </div>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"lxp-overlay__section\">");t.b("\n" + i);t.b("  <div class=\"lxp-overlay__buttonGroup\">");t.b("\n" + i);t.b("    <a href=\"#confirm\" class=\"lxp-overlay__button lxp-js-overlay__button lxp-overlay__button--confirm\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Confirm", c, p, 0)));t.b("</a>");t.b("\n" + i);t.b("    <a href=\"#cancel\" class=\"lxp-overlay__buttonSecondary lxp-js-overlay__button\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Cancel", c, p, 0)));t.b("</a>");t.b("\n" + i);t.b("  </div>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var serviceBookingsOverlayCarouselItem = exports.serviceBookingsOverlayCarouselItem = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("\n" + i);t.b("<div class=\"card-title\">");t.b("\n" + i);t.b("  <hgroup>");t.b("\n" + i);t.b("    <h6></h6>");t.b("\n" + i);t.b("    <h3>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_UpcomingBooking", c, p, 0)));t.b("</h3>");t.b("\n" + i);t.b("  </hgroup>");t.b("\n" + i);t.b("  <i class=\"icon icon-calendar\"></i>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content vehicle-overlay-details\">");t.b("\n");t.b("\n" + i);t.b("  <div class=\"vehicle-data\">");t.b("\n" + i);t.b("    <ul class=\"data-list\">");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_BookingNumber", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("BookingNumber", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_DateTime", c, p, 0)));t.b("</span>");t.b("\n" + i);if (t.s(t.f("DateTimes", c, p, 1), c, p, 0, 578, 897, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("        <strong>");t.b("\n" + i);t.b("          ");t.b(t.v(t.f("Date", c, p, 0)));t.b("<br />");t.b("\n" + i);if (t.s(t.f("DropOff", c, p, 1), c, p, 0, 643, 738, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("          ");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_DropOff", c, p, 0)));t.b(": ");t.b(t.v(t.f("DropOff", c, p, 0)));t.b("<br />");t.b("\n" + i);
          });c.pop();
        }if (t.s(t.f("PickUp", c, p, 1), c, p, 0, 772, 859, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("          ");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_PickUp", c, p, 0)));t.b(": ");t.b(t.v(t.f("PickUp", c, p, 0)));t.b("\n" + i);
          });c.pop();
        }t.b("        </strong>");t.b("\n" + i);
      });c.pop();
    }t.b("      </li>");t.b("\n" + i);if (t.s(t.f("Dealer", c, p, 1), c, p, 0, 941, 1161, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Dealer", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b("\n" + i);t.b("          <a href=\"");t.b(t.v(t.f("Link", c, p, 0)));t.b("\" target=\"_blank\">");t.b(t.v(t.f("Name", c, p, 0)));t.b("</a>");t.b("\n" + i);t.b("        </strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);
      });c.pop();
    }t.b("      <!--<li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ServiceDescription", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("ServiceDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>-->");t.b("\n" + i);t.b("    </ul>");t.b("\n" + i);t.b("    <ul class=\"data-list\">");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Car", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Vin", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("VinId", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.General.Frontend_MyVolvo_Status", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("Status", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);t.b("    </ul>");t.b("\n" + i);t.b("  </div>");t.b("\n");t.b("\n" + i);t.b("  <div class=\"vehicle-image\">");t.b("\n" + i);t.b("    <img src=\"");t.b(t.v(t.f("VehicleImageUrl", c, p, 0)));t.b("\" alt=\"");t.b(t.v(t.f("VehicleModelName", c, p, 0)));t.b("\" />");t.b("\n" + i);t.b("  </div>");t.b("\n");t.b("\n");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<!--<table class=\"vehicle-overlay-table\">");t.b("\n" + i);t.b("  <tbody>");t.b("\n" + i);if (t.s(t.f("Operations", c, p, 1), c, p, 0, 2057, 2222, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("      <tr>");t.b("\n" + i);t.b("        <td class=\"operation-description\">");t.b(t.v(t.f("OperationDescription", c, p, 0)));t.b("</td>");t.b("\n" + i);t.b("        <td class=\"operation-price\">");t.b(t.v(t.f("TotalOperationPrice", c, p, 0)));t.b("</td>");t.b("\n" + i);t.b("      </tr>");t.b("\n" + i);
      });c.pop();
    }t.b("  </tbody>");t.b("\n" + i);t.b("  <tfoot>");t.b("\n" + i);t.b("    <tr>");t.b("\n" + i);t.b("      <td>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_EstimatedCost", c, p, 0)));t.b("</td>");t.b("\n" + i);t.b("      <td class=\"total-price\">");t.b(t.v(t.f("TotalEstimatedPrice", c, p, 0)));t.b("</td>");t.b("\n" + i);t.b("    </tr>");t.b("\n" + i);t.b("  </tfoot>");t.b("\n" + i);t.b("</table>-->");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content\">");t.b("\n" + i);if (!t.s(t.f("DontShowEdit", c, p, 1), c, p, 1, 0, 0, "")) {
      t.b("  <a href=\"");t.b(t.v(t.d("EditBooking.Link", c, p, 0)));t.b("\" class=\"card-cta desktop\">");t.b("\n" + i);t.b("    <span>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_EditBooking", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("    <i class=\"icon icon-arrow\"></i>");t.b("\n" + i);t.b("  </a>");t.b("\n" + i);t.b("  <a style=\"display:none;\" href=\"");t.b(t.v(t.d("EditBooking.LinkForMobileDevice", c, p, 0)));t.b("\" class=\"card-cta mobile\">");t.b("\n" + i);t.b("    <span>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_EditBooking", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("    <i class=\"icon icon-arrow\"></i>");t.b("\n" + i);t.b("  </a>");t.b("\n" + i);
    };if (t.s(t.f("CantEditMessage", c, p, 1), c, p, 0, 2918, 2945, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("    ");t.b(t.v(t.f("CantEditMessage", c, p, 0)));t.b("\n" + i);
      });c.pop();
    }t.b("</div>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var serviceHistoryCardRow = exports.serviceHistoryCardRow = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<td class=\"action\"><i class=\"icon icon-plus\"></i></td>");t.b("\n" + i);t.b("<td class=\"service-description\">");t.b("\n" + i);t.b("  <strong>");t.b(t.v(t.f("LocalizedDate", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("  <small>");t.b(t.v(t.f("ServiceDescription", c, p, 0)));t.b("</small>");t.b("\n" + i);t.b("</td>");t.b("\n" + i);t.b("<td class=\"service-data\">");t.b("\n" + i);t.b("  <span class=\"mileage\">");t.b(t.v(t.f("OdometerOut", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("  ");if (t.s(t.f("TotalRepairOrderPrice", c, p, 1), c, p, 0, 272, 324, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("<span class=\"cost\"> ");t.b(t.v(t.f("TotalRepairOrderPrice", c, p, 0)));t.b("</span>");
      });c.pop();
    }t.b("\n" + i);t.b("</td>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var serviceHistoryOverlayCarouselItem = exports.serviceHistoryOverlayCarouselItem = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("<div class=\"card-title\">");t.b("\n" + i);t.b("  <hgroup>");t.b("\n" + i);t.b("    <h6></h6>");t.b("\n" + i);t.b("    <h3>");t.b(t.v(t.f("LocalizedDate", c, p, 0)));t.b("</h3>");t.b("\n" + i);t.b("  </hgroup>");t.b("\n" + i);t.b("  <i class=\"icon icon-car\"></i>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content vehicle-overlay-details\">");t.b("\n" + i);t.b("  ");t.b("\n" + i);t.b("  <div class=\"vehicle-data\">");t.b("\n" + i);t.b("    <ul class=\"data-list\">");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_RepairId", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("RepairOrderNumber", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Dealer", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("PartnerCode", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ServiceAdvisor", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("ServiceAdvisor", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);t.b("    </ul>");t.b("\n");t.b("\n" + i);t.b("    <ul class=\"data-list\">");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Mileage", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("OdometerOut", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n");t.b("\n" + i);t.b("      <li>");t.b("\n" + i);t.b("        <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ServiceDescription", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("        <strong>");t.b(t.v(t.f("ServiceDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("      </li>");t.b("\n" + i);t.b("    </ul>");t.b("\n" + i);t.b("  </div>");t.b("\n");t.b("\n" + i);t.b("  <div class=\"vehicle-image\">");t.b("\n" + i);t.b("    <img src=\"");t.b(t.v(t.f("VehicleImageUrl", c, p, 0)));t.b("\" alt=\"");t.b(t.v(t.f("VehicleModelName", c, p, 0)));t.b("\" />");t.b("\n" + i);t.b("  </div>");t.b("\n");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content vehicle-overlay-service\">  ");t.b("\n" + i);t.b("  ");t.b("\n" + i);if (t.s(t.f("TotalRepairOrderPrice", c, p, 1), c, p, 0, 1345, 1501, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("  <div class=\"total-cost\"><span>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_TotalCost", c, p, 0)));t.b(":</span><strong>");t.b(t.v(t.f("TotalRepairOrderPrice", c, p, 0)));t.b("</strong></div>");t.b("\n" + i);
      });c.pop();
    }t.b("\n" + i);t.b("  <div class=\"accordion\">");t.b("\n" + i);if (t.s(t.f("Operations", c, p, 1), c, p, 0, 1576, 2223, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("      <div>");t.b("\n" + i);t.b("        <div class=\"accordion-panel-toggle\"><span class=\"label\">");t.b(t.v(t.f("OperationDescription", c, p, 0)));t.b("</span><i class=\"icon accordion-arrow icon-angle-down\"></i></div>");t.b("\n" + i);t.b("        <ul class=\"accordion-content\">");t.b("\n" + i);if (t.s(t.f("Parts", c, p, 1), c, p, 0, 1802, 1920, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("          <li><span class=\"label\">");t.b(t.v(t.f("PartDescription", c, p, 0)));t.b("</span><span class=\"value\">");t.b(t.v(t.f("TotalPrice", c, p, 0)));t.b("</span></li>");t.b("\n" + i);
          });c.pop();
        }t.b("        </ul>");t.b("\n" + i);if (t.s(t.f("TotalOperationPrice", c, p, 1), c, p, 0, 1979, 2179, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("          <div class=\"accordion-footer\"><span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_TotalCost", c, p, 0)));t.b(":</span><span class=\"value\">");t.b(t.v(t.f("TotalOperationPrice", c, p, 0)));t.b("</span></div>");t.b("\n" + i);
          });c.pop();
        }t.b("      </div>");t.b("\n" + i);
      });c.pop();
    }t.b("  </div>");t.b("\n");t.b("\n" + i);t.b("</div>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var vehicleDocumentsCard = exports.vehicleDocumentsCard = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("﻿<ul class=\"documents-card-list scrollbar-inner\">");t.b("\n" + i);if (t.s(t.f("documents", c, p, 1), c, p, 0, 68, 638, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("    <li onclick=\"window.open('");if (t.s(t.f("Content", c, p, 1), c, p, 0, 111, 124, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" ");t.b(t.v(t.f("Content", c, p, 0)));t.b(" ");
          });c.pop();
        }t.b(" ','_blank');\" ");if (t.s(t.f("NoOwnersManual", c, p, 1), c, p, 0, 170, 196, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" class=\"no-owners-manual\" ");
          });c.pop();
        }t.b(">");t.b("\n" + i);t.b("        ");if (t.s(t.f("Id", c, p, 1), c, p, 0, 232, 268, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("<i class=\"icon icon-z_download\"></i>");
          });c.pop();
        }t.b(" ");t.b("\n" + i);t.b("        ");if (t.s(t.f("NoOwnersManual", c, p, 1), c, p, 0, 304, 343, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b(" <i class=\"icon icon-viewwebsite\"></i> ");
          });c.pop();
        }t.b("\n" + i);t.b("        <strong>");t.b("\n" + i);t.b("            ");if (!t.s(t.f("NoOwnersManual", c, p, 1), c, p, 1, 0, 0, "")) {};t.b(t.v(t.d("Metadata.DisplayName", c, p, 0)));if (!t.s(t.f("NoOwnersManual", c, p, 1), c, p, 1, 0, 0, "")) {
          t.b("\n" + i);
        };t.b("        </strong>");t.b("\n" + i);if (t.s(t.f("NoOwnersManual", c, p, 1), c, p, 0, 551, 604, "{{ }}")) {
          t.rs(c, p, function (c, p, t) {
            t.b("        <small>");t.b(t.t(t.f("NoOwnersManual", c, p, 0)));t.b("</small>");t.b("\n" + i);
          });c.pop();
        }t.b("    </li>");t.b("\n" + i);
      });c.pop();
    }t.b("</ul>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var vehicleInfoCard = exports.vehicleInfoCard = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");if (t.s(t.f("ImageUrl", c, p, 1), c, p, 0, 13, 101, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("<div class=\"card-content vehicle-info-image\">");t.b("\n" + i);t.b("  <img src=\"");t.b(t.v(t.f("ImageUrl", c, p, 0)));t.b("\" alt=\"\">");t.b("\n" + i);t.b("</div>");t.b("\n" + i);
      });c.pop();
    }t.b("\n" + i);t.b("<div class=\"card-content vehicle-info-data\">");t.b("\n" + i);t.b("  <ul class=\"data-list\">");t.b("\n" + i);t.b("    <li>");t.b("\n" + i);t.b("      <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ModelName", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("      <strong>");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("    </li>");t.b("\n" + i);if (!t.s(t.f("DontShowModelYear", c, p, 1), c, p, 1, 0, 0, "")) {
      t.b("    <li>");t.b("\n" + i);t.b("      <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ModelYear", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("      <strong>");t.b(t.v(t.f("ModelYear", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("    </li>");t.b("\n" + i);
    };t.b("    <li>");t.b("\n" + i);t.b("      <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Color", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("      <strong>");t.b(t.v(t.f("ColorDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("    </li>");t.b("\n" + i);if (t.s(t.f("LicensePlate", c, p, 1), c, p, 0, 733, 898, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("    <li>");t.b("\n" + i);t.b("      <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_LicensePlate", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("      <strong>");t.b(t.v(t.f("LicensePlate", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("    </li>");t.b("\n" + i);
      });c.pop();
    }t.b("    <li>");t.b("\n" + i);t.b("      <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Vin", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("      <strong>");t.b(t.v(t.f("VinId", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("    </li>");t.b("\n" + i);t.b("  </ul>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content\">");t.b("\n" + i);t.b("  <a class=\"card-cta\" href=\"#\">");t.b("\n" + i);t.b("    <span>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_CarSpecifications", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("    <i class=\"icon icon-plus\"></i>");t.b("\n" + i);t.b("  </a>");t.b("\n" + i);t.b("</div>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
var vehicleInfoOverlay = exports.vehicleInfoOverlay = new Hogan.Template({ code: function code(c, p, i) {
    var t = this;t.b(i = i || "");t.b("\n" + i);t.b("<a href=\"#\" class=\"overlay-close\"><i class=\"icon icon-close\"></i></a>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-title\">");t.b("\n" + i);t.b("    <hgroup>");t.b("\n" + i);t.b("        <h6>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_MyCar", c, p, 0)));t.b("</h6>");t.b("\n" + i);t.b("        <h3>");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("</h3>");t.b("\n" + i);t.b("    </hgroup>");t.b("\n" + i);t.b("    <i class=\"icon icon-car\"></i>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content vehicle-overlay-details\">");t.b("\n");t.b("\n");t.b("\n" + i);t.b("    <div class=\"vehicle-image\">");t.b("\n" + i);t.b("        <img src=\"");t.b(t.v(t.f("ImageUrl", c, p, 0)));t.b("\" alt=\"");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("\" />");t.b("\n" + i);t.b("    </div>");t.b("\n");t.b("\n" + i);t.b("    <div class=\"vehicle-data\">");t.b("\n" + i);t.b("        <ul class=\"data-list\">");t.b("\n" + i);t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ModelName", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("ModelDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);if (!t.s(t.f("DontShowModelYear", c, p, 1), c, p, 1, 0, 0, "")) {
      t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_ModelYear", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("ModelYear", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);
    };if (t.s(t.f("ColorDescription", c, p, 1), c, p, 0, 993, 1199, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Color", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("ColorDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);
      });c.pop();
    }if (t.s(t.f("GearboxDescription", c, p, 1), c, p, 0, 1256, 1466, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Gearbox", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("GearboxDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);
      });c.pop();
    }if (t.s(t.f("UpholsteryDescription", c, p, 1), c, p, 0, 1528, 1744, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Upholstery", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("UpholsteryDescription", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);
      });c.pop();
    }t.b("        </ul>");t.b("\n");t.b("\n" + i);t.b("        <ul class=\"data-list\">");t.b("\n" + i);t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Vin", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("VinId", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);if (t.s(t.f("LicensePlate", c, p, 1), c, p, 0, 2026, 2235, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_LicensePlate", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("LicensePlate", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);
      });c.pop();
    }if (t.s(t.f("StructureWeek", c, p, 1), c, p, 0, 2283, 2494, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_StructureWeek", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("StructureWeek", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);
      });c.pop();
    }t.b("            <li>");t.b("\n" + i);t.b("                <span class=\"label\">");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Country", c, p, 0)));t.b("</span>");t.b("\n" + i);t.b("                <strong>");t.b(t.v(t.f("Country", c, p, 0)));t.b("</strong>");t.b("\n" + i);t.b("            </li>");t.b("\n" + i);t.b("        </ul>");t.b("\n" + i);t.b("    </div>");t.b("\n" + i);t.b("</div>");t.b("\n");t.b("\n" + i);t.b("<div class=\"card-content\">");t.b("\n" + i);t.b("    <h3>");t.b(t.v(t.d("translate.MyVolvo.Vehicle.Frontend_MyVolvo_Vehicle_Options", c, p, 0)));t.b("</h3>");t.b("\n" + i);t.b("    <ul class=\"check-list\">");t.b("\n" + i);if (t.s(t.f("Options", c, p, 1), c, p, 0, 2883, 2995, "{{ }}")) {
      t.rs(c, p, function (c, p, t) {
        t.b("        <li>");t.b("\n" + i);t.b("            <i class=\"icon icon-checkmark\"></i>");t.b("\n" + i);t.b("            ");t.b(t.v(t.f("Description", c, p, 0)));t.b("\n" + i);t.b("        </li>");t.b("\n" + i);
      });c.pop();
    }t.b("    </ul>");t.b("\n" + i);t.b("</div>");t.b("\n");return t.fl();
  }, partials: {}, subs: {} });
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(6)))

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.initRouter = exports.OverlayRouter = undefined;

var _libs = __webpack_require__(0);

var _vehicleInfo = __webpack_require__(4);

var _carouselOverlay = __webpack_require__(27);

var _vehicleInfoOverlay = __webpack_require__(43);

var _serviceHistoryOverlayCarouselItem = __webpack_require__(40);

var _serviceBookingsOverlayCarouselItem = __webpack_require__(37);

var _basicOverlay = __webpack_require__(26);

var _serviceHistoryEventCollection = __webpack_require__(8);

var _serviceBookingCollection = __webpack_require__(15);

var OverlayRouterClass = _libs.Backbone.Router.extend({
  // ### routes
  routes: {
    '': 'defaultRoute',
    'vehicle-info/:vin': 'vehicleInformation',
    'service-history-events/:vin(/:id)': 'serviceHistoryEvents',
    'service-history-bookings/:vin(/:id)': 'serviceHistoryBookings',
    'overlay/*id': 'basicOverlay'
  },
  // ### defaultRoute
  // the default route just closes the mask.
  defaultRoute: function defaultRoute() {
    if (!_libs.vc.app.$mask.hasClass('fixed')) {
      _libs.vc.app.trigger('mask:hide');
      this.clearModels();
    }
  },


  // ### clearModels
  // Clear any models/collection and overlays held in memory;
  clearModels: function clearModels() {
    this.serviceHistory = null;
    this.serviceBookings = null;
  },


  // ### prepareOverlay
  // Remove previous overlays.
  prepareOverlay: function prepareOverlay() {
    this.clearModels();
    _libs.vc.app.$mask.empty();
  },


  // ### vehicleInformation
  vehicleInformation: function vehicleInformation(vin) {
    var model = new _vehicleInfo.VehicleInfo();
    model.url = '/data/dynamic/myvolvo/vehicleinfo/' + vin + '?sc_site=' + _libs.vc.settings.sc_site;
    model.fetch();

    var overlay = new _vehicleInfoOverlay.VehicleInfoOverlay({ model: model });
    _libs.vc.app.$mask.append(overlay.render().el);
  },


  // ### serviceHistory
  // load the service history
  serviceHistoryEvents: function serviceHistoryEvents(vin, id) {
    // We already have a service history downloaded and have the correct vin, the user
    // must be paging in the collection
    if (this.serviceHistory && this.serviceHistory.vin === vin) {
      this.serviceHistory.activate(id);
      return;
    }

    this.prepareOverlay();

    // else we need to download the service history.
    var serviceHistory = this.serviceHistory = new _serviceHistoryEventCollection.ServiceHistoryEventCollection();
    serviceHistory.url = '/data/dynamic/myvolvo/ervicehistoryevents/' + vin + '?sc_site=' + _libs.vc.settings.sc_site;

    // download the service history
    // and activate the the service history
    serviceHistory.fetch().then(function () {
      // fallbacks to first if 'id' is null/undefined
      serviceHistory.activate(id);
    });

    // fire the overlay that shows the service history
    var overlay = new _carouselOverlay.CarouselOverlay({
      collection: serviceHistory,
      carouselItemView: _serviceHistoryOverlayCarouselItem.ServiceHistoryOverlayCarouselItem
    });
    _libs.vc.app.$mask.append(overlay.render().el);
  },


  // ### serviceHistoryBookings
  // load the service bookings
  serviceHistoryBookings: function serviceHistoryBookings(vin, id) {
    // We already have a service bookings downloaded and have the correct vin, the user
    // must be paging in the collection
    if (this.serviceBookings && this.serviceBookings.vin === vin) {
      this.serviceBookings.activate(id);
      return;
    }

    this.prepareOverlay();
    // else we need to download the service history.
    var serviceBookings = this.serviceBookings = new _serviceBookingCollection.ServiceBookingCollection();
    serviceBookings.url = '/data/dynamic/myvolvo/servicebookings/' + vin;

    serviceBookings.fetch().then(function () {
      serviceBookings.activate(id);
    });

    // fire the overlay that shows the service history
    var overlay = new _carouselOverlay.CarouselOverlay({
      collection: serviceBookings,
      carouselItemView: _serviceBookingsOverlayCarouselItem.ServiceBookingsOverlayCarouselItem
    });
    _libs.vc.app.$mask.append(overlay.render().el);
  },
  basicOverlay: function basicOverlay(path) {
    this.prepareOverlay();

    var overlay = new _basicOverlay.BasicOverlay({
      contentURL: _libs.vc.settings.marketSegment + '/data/overlay/' + path
    });

    _libs.vc.app.$mask.append(overlay.render().el);
  }
});

var OverlayRouter = exports.OverlayRouter = OverlayRouterClass;
var initRouter = exports.initRouter = new OverlayRouterClass();

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.Spinner = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var Spinner = exports.Spinner = _libs.Backbone.View.extend({
  tmpl: templates.spinner,
  className: 'spinner',
  body: false,
  container: false,

  initialize: function initialize(options) {
    if (options !== void 0 && options.container !== void 0 && options.container[0] !== void 0) {
      this.container = options.container[0];
    } else {
      this.container = document.body;
    }

    this.render();
  },
  remove: function remove() {
    if (this.el !== void 0 && this.el.parentNode !== void 0 && this.el.parentNode !== null) {
      this.el.parentNode.removeChild(this.el);
    }
  },
  render: function render() {
    if (document.body === this.container) {
      (0, _libs.$)(this.el).addClass('lxp-spinner');
    } else {
      (0, _libs.$)(this.el).addClass('lxp-spinner lxp-spinner--contained');
    }

    this.el.innerHTML = this.tmpl.render();

    this.container.appendChild(this.el);

    return this;
  }
});

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VehicleInfo = undefined;

var _libs = __webpack_require__(0);

var _model = __webpack_require__(5);

var VehicleInfo = exports.VehicleInfo = _model.Model.extend({
  initialize: function initialize(vin) {
    if (vin) {
      this.url = '/data/dynamic/myvolvo/vehicleinfo/' + vin + '?sc_site=' + _libs.vc.settings.sc_site;
    }
  }
});

// Also extend Translation Base
_libs._.extend(VehicleInfo.prototype, _libs.vc.Translations);

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.Model = undefined;

var _libs = __webpack_require__(0);

var _spinner = __webpack_require__(3);

var Model = exports.Model = _libs.Backbone.Model.extend({
  spinner: false,
  applyUpgrade: function applyUpgrade() {
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    var $this = this;
    var collection = options;

    if (options.spinner !== false) {
      var container = void 0;
      if (options.spinner === true) {
        container = (0, _libs.$)(document.body);
      } else {
        container = options.spinner;
      }

      // show overlay
      $this.spinner = new _spinner.Spinner({ container: container });

      var success = void 0;

      if (collection.success !== void 0) {
        success = collection.success;
      } else {
        success = function success() {};
      }

      collection.success = function () {
        // hide overlay
        $this.spinner.remove();

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }

        success.apply($this, args);
      };

      var error = void 0;

      if (collection.error !== void 0) {
        error = options.error;
      } else {
        error = function error() {};
      }

      collection.error = function () {
        // hide overlay
        $this.spinner.remove();

        if (collection.errorMessage !== void 0 && collection.errorMessage !== false) {
          var notification = new _libs.vc.Notification(collection.errorMessage);
          notification.fetch({
            type: 'POST',
            success: function success() {
              return _libs.vc.app.notifications.add(notification);
            }
          });
        }

        for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          args[_key2] = arguments[_key2];
        }

        error.apply($this, args);
      };
    }
  },
  save: function save() {
    var attributes = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

    this.applyUpgrade(options);
    return _libs.Backbone.Model.prototype.save.call(this, attributes, options);
  },
  fetch: function fetch() {
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    this.applyUpgrade(options);
    return _libs.Backbone.Model.prototype.fetch.call(this, options);
  }
});

/***/ }),
/* 6 */
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
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.CarouselItemCollection = undefined;

var _libs = __webpack_require__(0);

var _spinner = __webpack_require__(3);

var CarouselItemCollection = exports.CarouselItemCollection = _libs.vc.CarouselItemCollection.extend({
  spinner: false,
  fetch: function fetch() {
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    var p = this;
    var collection = options;

    if (options.spinner !== false) {
      var container = void 0;
      if (options.spinner === true) {
        container = (0, _libs.$)(document.body);
      } else {
        container = options.spinner;
      }

      // Show overlay
      p.spinner = new _spinner.Spinner({ container: container });

      var success = void 0;

      if (collection.success !== void 0) {
        success = collection.success;
      } else {
        success = function success() {};
      }

      collection.success = function () {
        // hide overlay
        p.spinner.remove();

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }

        success.apply(p, args);
      };

      var error = void 0;

      if (collection.error !== void 0) {
        error = collection.error;
      } else {
        error = function error() {};
      }

      collection.error = function () {
        // hide overlay
        p.spinner.remove();

        for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          args[_key2] = arguments[_key2];
        }

        error.apply(p, args);
      };
    }

    return _libs.Backbone.Collection.prototype.fetch.call(this, options);
  }
});

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceHistoryEventCollection = undefined;

var _carouselItemCollection = __webpack_require__(7);

var _serviceHistoryEvent = __webpack_require__(21);

var ServiceHistoryEventCollection = exports.ServiceHistoryEventCollection = _carouselItemCollection.CarouselItemCollection.extend({
  model: _serviceHistoryEvent.ServiceHistoryEvent,
  // set circular to false to disable looping
  circular: false,
  // ### parse
  // Override the parse function to set the "vin" of
  // the collection which comes in handy
  parse: function parse(response) {
    if (response.length) {
      this.vin = response[0].Vin;
    }

    for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    return _carouselItemCollection.CarouselItemCollection.prototype.parse.apply(this, [response].concat(args));
  }
});

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.readCookie = readCookie;
var cookies = false;

function test(name) {
  var result = false;
  if (cookies[name] !== void 0) {
    result = cookies[name];
  }

  return result;
}

function readCookie(name, c, C, i) {
  if (!cookies) {
    cookies = {};

    c = document.cookie.split('; ');

    for (i = c.length - 1; i >= 0; i--) {
      C = c[i].split('=');
      cookies[C[0]] = C[1];
    }
  }

  return test(name);
}

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.Overlay = undefined;

var _libs = __webpack_require__(0);

var _overlayRouter = __webpack_require__(2);

var Overlay = exports.Overlay = _libs.vc.Overlay.extend({
  initialize: function initialize() {
    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _libs.vc.Overlay.prototype.initialize.call(this, args);
    this.listenTo(_libs.vc.app, 'overlay:disabled', this.removeHash);
  },
  removeHash: function removeHash() {
    _overlayRouter.initRouter.navigate('', { trigger: true });
  }
});

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ConnectVehicleOverlay = undefined;

var _libs = __webpack_require__(0);

var _vehicleInfo = __webpack_require__(4);

var _userVehicleRelationship = __webpack_require__(23);

var _spinner = __webpack_require__(3);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ConnectVehicleOverlay = exports.ConnectVehicleOverlay = _libs.vc.Overlay.extend({
  className: _libs.vc.Overlay.prototype.className + ' lxp-overlay--connectVehicle lxp-overlay',
  tmpl: templates.connectVehicleOverlay,
  clearAddressHash: false,
  spinner: false,
  mask: (0, _libs.$)('#lxp-mask'),

  initialize: function initialize() {
    _libs._.bindAll(this, 'formAction', 'didntadd', 'reload');

    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _libs.vc.Overlay.prototype.initialize.apply(this, args);
  },


  events: _libs._.extend({}, _libs._.result(_libs.vc.Overlay.prototype, 'events'), {
    'click .lxp-js-overlay__button': 'formAction',
    'click .lxp-js-overlay__close': 'close'
  }),

  close: function close(evt) {
    if (evt) {
      evt.preventDefault();
      evt.stopPropagation();
    }
    this.mask.removeClass('lxp-mask--enabled');
    this.mask.addClass('lxp-mask--disabled');
    this.mask.empty();
    _libs.vc.app.trigger('mask:hide');
  },
  formAction: function formAction(evt) {
    evt.preventDefault();
    var href = evt.target.href;
    var hashIndex = href.indexOf('#');
    var action = hashIndex > -1 ? href.substr(hashIndex + 1) : '';

    switch (action) {
      case 'confirm':
        this.submitRelationship();
        break;
      case 'cancel':
        this.close();
        break;
      default:
        break;
    }
  },
  getFormAction: function getFormAction(action) {
    return this.$('.lxp-js-overlay__button[href=\'#' + action + '\']');
  },
  updateModel: function updateModel() {
    var model = new _vehicleInfo.VehicleInfo(this.model.attributes.VinId);
    this.fetching = true;
    this.spinner = new _spinner.Spinner();
    _libs.vc.app.trigger('mask:hide');
    var p = this;

    model.fetch({
      success: function success() {
        p.removeSpinner();
        self.fetching = false;
        window.location.reload();
      },
      error: function error() {
        p.removeSpinner();
      }
    });
  },
  reload: function reload() {
    setTimeout(function () {
      return location.reload(true);
    }, 1000);
  },
  didntadd: function didntadd() {
    _libs.vc.app.trigger('mask:hide');
    window.location.reload();
    /*
    const notification = new vc.Notification(NotificationTypes.AddCarFailed);
    notification.fetch({
      type: 'POST',
      success() {
        vc.app.notifications.add(notification);
      },
    });
    */
  },
  submitRelationship: function submitRelationship() {
    var vin = this.model.get('VinId');
    this.spinner = new _spinner.Spinner();
    var p = this;
    this.close();

    return _libs.$.ajax({
      url: '/data/dynamic/myvolvo/vehiclerelations/' + vin + '?sc_site=' + _libs.vc.settings.sc_site,
      type: 'POST'
    }).done(function () {
      p.removeSpinner();
      // Check if relationship was created
      _libs.vc.app.trigger('mask:hide');
      var relationship = new _userVehicleRelationship.UserVehicleRelationship(vin);
      p.spinner = new _spinner.Spinner();
      relationship.fetch({
        success: function success() {
          p.removeSpinner();
          if (relationship.get('type') !== void 0) {
            p.updateModel();
          } else {
            p.didntadd();
          }
        },
        error: function error() {
          p.removeSpinner();
          p.didntadd();
        }
      });
    }).fail(function () {
      return p.removeSpinner();
    }).responseText;
  },
  removeSpinner: function removeSpinner() {
    if (this.spinner) {
      this.spinner.remove();
      this.spinner = false;
    }
  },
  render: function render(model) {
    for (var _len2 = arguments.length, args = Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
      args[_key2 - 1] = arguments[_key2];
    }

    _libs.vc.Overlay.prototype.render.apply(this, [model].concat(args));
    return this;
  }
});

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

var _libs = __webpack_require__(0);

var _main = __webpack_require__(30);

var _manageVehicle = __webpack_require__(35);

var _serviceHistoryCard = __webpack_require__(38);

var _vehicleDocumentsCard = __webpack_require__(41);

var _vehicleInfoCard = __webpack_require__(42);

var _connectVehicle = __webpack_require__(34);

var _customerEditor = __webpack_require__(29);

var _bookAServiceForm = __webpack_require__(28);

var _cookie = __webpack_require__(9);

var _userMenuView = __webpack_require__(33);

var _preferredDealerValidate = __webpack_require__(32);

var _url = __webpack_require__(19);

// eslint-disable-next-line no-unused-vars
(0, _libs.$)(function () {
  var newUrl = false;
  // eslint-disable-next-line no-use-before-define camelcase
  if ((0, _cookie.readCookie)('LXP') !== false && global.VBS_manifest === void 0) {
    if (window.location.href.indexOf('http://www.volvocars') > -1) {
      newUrl = window.location.href.replace('http://www.volvocars', 'https://securewww.volvocars');
    }

    if (window.location.href.indexOf('http://qaoxp') > -1) {
      newUrl = window.location.href.replace('http://qaoxp', 'https://qasecurewww');
    }
  }

  if (newUrl !== false) {
    document.location.href = newUrl;
  } else {
    var initView = void 0;

    (0, _libs.$)('.lxp-js-myCar').each(function (i, el) {
      initView = new _manageVehicle.ManageVehicle({ el: el });
      initView.render();
    });

    (0, _libs.$)('.service-history-card').each(function (i, el) {
      initView = new _serviceHistoryCard.ServiceHistoryCard({ el: el });
      initView.render();
    });

    (0, _libs.$)('.vehicle-documents-card').each(function (i, el) {
      initView = new _vehicleDocumentsCard.VehicleDocumentsCard({ el: el });
      initView.render();
    });

    (0, _libs.$)('.vehicle-info-card').each(function (i, el) {
      initView = new _vehicleInfoCard.VehicleInfoCard({ el: el });
      initView.render();
    });

    (0, _libs.$)('.lxp-js-connectVehicle').each(function (i, el) {
      initView = new _connectVehicle.ConnectVehicle({ el: el });
      initView.render();
    });

    (0, _libs.$)('.lxp-profile-settings-container').each(function (i, el) {
      initView = new _customerEditor.CustomerEditor({ el: el });
      initView.render();
    });

    (0, _libs.$)('.book-a-service-form').each(function (i, el) {
      initView = new _bookAServiceForm.BookAServiceForm({ el: el });
      initView.render();
    });

    (0, _libs.$)('.lxp-js-menuIcon').each(function (i, el) {
      initView = new _userMenuView.UserMenuView({ el: el });
    });

    (0, _libs.$)('.lxp-js-dealerForm').each(function (i, el) {
      initView = new _preferredDealerValidate.PreferredDealerValidate({ el: el });
    });

    // FIX Repair text cursor bleeding for IE and Edge
    if (document.documentMode && document.documentMode < 12 || window.navigator.userAgent.indexOf('Edge') > -1) {
      (0, _libs.$)(document).on('focus', ':input', function (event) {
        (0, _libs.$)(window).one('scroll', function () {
          event.target.blur();
        });
      });
    }
  }
});
// eslint-disable-next-line no-unused-vars
// eslint-disable-next-line no-unused-vars
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(6)))

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.CarouselItem = undefined;

var _libs = __webpack_require__(0);

var _spinner = __webpack_require__(3);

var CarouselItem = exports.CarouselItem = _libs.vc.CarouselItem.extend({
  spinner: false,
  fetch: function fetch() {
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    var p = this;
    var collection = options;

    if (options.spinner !== false) {
      var container = void 0;
      if (options.spinner === true) {
        container = (0, _libs.$)(document.body);
      } else {
        container = options.spinner;
      }

      // Show overlay
      p.spinner = new _spinner.Spinner({ container: container });

      var success = void 0;

      if (collection.success !== void 0) {
        success = collection.success;
      } else {
        success = function success() {};
      }

      collection.success = function () {
        // hide overlay
        p.spinner.remove();

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }

        success.apply(p, args);
      };

      var error = void 0;

      if (collection.error !== void 0) {
        error = collection.error;
      } else {
        error = function error() {};
      }

      collection.error = function () {
        // hide overlay
        p.spinner.remove();

        for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          args[_key2] = arguments[_key2];
        }

        error.apply(p, args);
      };
    }

    return _libs.Backbone.Model.prototype.fetch.call(this, options);
  }
});

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.Collection = undefined;

var _libs = __webpack_require__(0);

var _spinner = __webpack_require__(3);

var Collection = exports.Collection = _libs.Backbone.Collection.extend({
  spinner: false,
  fetch: function fetch() {
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    var p = this;
    var collection = options;

    if (options.spinner !== false) {
      var container = void 0;
      if (options.spinner === true) {
        container = (0, _libs.$)(document.body);
      } else {
        container = options.spinner;
      }

      // Show overlay
      p.spinner = new _spinner.Spinner({ container: container });

      var success = void 0;

      if (collection.success !== void 0) {
        success = collection.success;
      } else {
        success = function success() {};
      }

      collection.success = function () {
        // hide overlay
        p.spinner.remove();

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }

        success.apply(p, args);
      };

      var error = void 0;

      if (collection.error !== void 0) {
        error = collection.error;
      } else {
        error = function error() {};
      }

      collection.error = function () {
        // hide overlay
        p.spinner.remove();

        for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          args[_key2] = arguments[_key2];
        }

        error.apply(p, args);
      };
    }

    return _libs.Backbone.Collection.prototype.fetch.call(this, options);
  }
});

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceBookingCollection = undefined;

var _carouselItemCollection = __webpack_require__(7);

var _serviceBooking = __webpack_require__(20);

var ServiceBookingCollection = exports.ServiceBookingCollection = _carouselItemCollection.CarouselItemCollection.extend({
  model: _serviceBooking.ServiceBooking,
  // set circular to false to disable looping
  circular: false,
  // ### parse
  // Override the parse function to set the "vin" of
  // the collection which comes in handy
  parse: function parse(response) {
    if (response.length) {
      this.vin = response[0].Vin;
    }

    for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    return _carouselItemCollection.CarouselItemCollection.prototype.parse.apply(this, [response].concat(args));
  }
});

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VehicleDocumentsCollection = undefined;

var _collection = __webpack_require__(14);

var _vehicleDocuments = __webpack_require__(24);

var VehicleDocumentsCollection = exports.VehicleDocumentsCollection = _collection.Collection.extend({
  model: _vehicleDocuments.VehicleDocuments
});

/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VideoCardManager = undefined;

var _libs = __webpack_require__(0);

var VideoCardManager = exports.VideoCardManager = _libs.Backbone.View.extend({
  collection: false,
  active: false,
  player: false,
  container: false,
  initialize: function initialize() {
    if ((0, _libs.$)('.vehicle-video-card').length === 0) {
      return false;
    }

    this.collection = new _libs.vc.VideoCardCollection();
    this.container = (0, _libs.$)('.video-container')[0];
    this.linkStructure();
    window.addEventListener('resize', this.updateCardSize);
    this.updateCardSize();

    (0, _libs.$)('.scrollbar-inner').scrollbar();
    return true;
  },
  updateCardSize: function updateCardSize() {
    if (window.innerWidth > 1024) {
      var containerHeight = (0, _libs.$)('.video-container').height();
      (0, _libs.$)('.vehicle-video-card')[0].style.height = containerHeight + 'px';
      var scroller = (0, _libs.$)('.scroll-wrapper.vido-list-container');
      if (scroller.length > 0) {
        var scrollerHeight = (0, _libs.$)('.video-container').height() - (0, _libs.$)('.vehicle-video-card .card-title').height();
        scroller[0].style.height = scrollerHeight + 'px';
      }
    } else {
      (0, _libs.$)('.vehicle-video-card')[0].style.height = 'auto';
      var _scroller = (0, _libs.$)('.scroll-wrapper.vido-list-container');
      if (_scroller.length > 0) {
        _scroller[0].style.height = 'auto';
      }
    }
  },
  linkStructure: function linkStructure() {
    var _this = this;

    var self = this;
    (0, _libs.$)('.vehicle-video-card li').each(function () {
      var element = new _libs.vc.VideoCardElement();

      element.set({ id: (0, _libs.$)(_this).data('id') });
      element.holder = _this;

      (0, _libs.$)('.track', _this).each(function () {
        element.addTrack({
          src: (0, _libs.$)(_this).data('src'),
          label: (0, _libs.$)(_this).data('label'),
          kind: (0, _libs.$)(_this).data('kind'),
          srclang: (0, _libs.$)(_this).data('srclang'),
          default: (0, _libs.$)(_this).data('default')
        });
      });

      (0, _libs.$)('.source', _this).each(function () {
        element.addSource({
          src: (0, _libs.$)(_this).data('src'),
          type: (0, _libs.$)(_this).data('type'),
          title: (0, _libs.$)(_this).data('title')
        });
      });

      var e = _this;
      e.addEventListener('click', function () {
        self.activate(element);
      });

      self.collection.add(element);
    }).promise().done(function () {
      self.connectVideo();
    });
  },
  activate: function activate(element) {
    this.setActive(element);
    this.renderVideo(element);
  },
  renderVideo: function renderVideo(model) {
    var video = '<video class=\'mediaelement video-guide-element\' controls=\'controls\' preload=\'none\'>';

    if (model.attributes.sources !== void 0) {
      for (var a = 0; a < model.attributes.sources.length; a++) {
        video += '<source ';
        if (model.attributes.sources[a].src !== void 0) {
          video += 'src=\'' + model.attributes.sources[a].src + '\' ';
        }

        if (model.attributes.sources[a].type !== void 0) {
          video += 'type=\'' + model.attributes.sources[a].type + '\' ';
        }

        if (model.attributes.sources[a].title !== void 0) {
          video += 'title=\'' + model.attributes.sources[a].title + '\' ';
        }

        video += '/>';
      }
    }

    if (model.attributes.tracks !== void 0) {
      for (var _a = 0; _a < model.attributes.tracks.length; _a++) {
        video += '<track ';
        if (model.tracks[_a].src !== void 0) {
          video += 'src=\'' + model.tracks[_a].src + '\' ';
        }

        if (model.tracks[_a].kind !== void 0) {
          video += 'kind=\'' + model.kind[_a].type + '\' ';
        }

        if (model.tracks[_a].srclang !== void 0) {
          video += 'srclang=\'' + model.srclang[_a].type + '\' ';
        }

        if (model.tracks[_a].default !== void 0) {
          video += 'default=\'default\' ';
        }

        if (model.tracks[_a].label !== void 0) {
          video += 'label=\'' + model.tracks[_a].label + '\' ';
        }

        video += '/>';
      }
    }

    video += '</video>';

    if (this.container) {
      (0, _libs.$)(this.container).html(video);
    }

    this.upgradeVideo();
  },
  upgradeVideo: function upgradeVideo() {
    if ((0, _libs.$)('.video-guide-element').length > 0) {
      self.player = new _libs.MediaElementPlayer('.video-guide-element', {
        // shows debug errors on screen
        enablePluginDebug: false,
        startVolume: 0.5,
        // useful for <audio> player loops
        loop: false,
        // enables Flash and Silverlight to resize to content size
        // enableAutosize: true,

        // rate in milliseconds for Flash and Silverlight to fire the timeupdate event
        // larger number is less accurate, but less strain on plugin->JavaScript bridge
        timerRate: 250,
        // method that fires when the Flash or Silverlight object is ready
        features: ['playpause', 'progress', 'volume', 'fullscreen', 'tracks'],
        // Hide controls when playing and mouse is not over the video
        // alwaysShowControls: true,
        // force iPad's native controls
        iPadUseNativeControls: true,
        // force iPhone's native controls
        iPhoneUseNativeControls: true,
        // force Android's native controls
        AndroidUseNativeControls: true,
        // forces the hour marker (##:00:00)
        alwaysShowHours: false,
        // show framecount in timecode (##:00:00:00)
        showTimecodeFrameCount: false,
        // used when showTimecodeFrameCount is set to true
        framesPerSecond: 25,
        // turns keyboard support on and off for this instance
        enableKeyboard: true,
        // when this player starts, it will pause other players
        pauseOtherPlayers: true,
        // array of keyboard commands
        keyActions: []

      });
    }
  },
  setActive: function setActive(model) {
    if (model) {
      this.active = model;
      this.collection.deactivate();
      this.active.activate();
    }
  },
  connectVideo: function connectVideo() {
    var playVideo = (0, _libs.$)('.video-guide-element');
    if (playVideo.length > 0) {
      this.setActive(this.collection.findWhere({ id: playVideo.data('id') }));
    }

    this.upgradeVideo();
  }
});

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.loggedInState = undefined;

var _cookie = __webpack_require__(9);

var loggedIn = void 0;
var instance = void 0;

var loggedInState = exports.loggedInState = function () {
  var doReadCookie = function doReadCookie() {
    loggedIn = (0, _cookie.readCookie)('LXP') !== false;
  };

  // LXP cookie might get new content - init() can be modified to return whatever is needed
  function init() {
    return true;
  }

  doReadCookie();

  // always return only a single instance - one and the same state
  var stateAccess = function () {
    if (!instance) {
      instance = init();
    }
    return instance;
  }();

  return loggedIn ? stateAccess : false;
}();

/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Url = function () {
  function Url() {
    _classCallCheck(this, Url);

    this.url = document.location.href;

    var queryParts = [];

    var urlParts = this.url.split('?');

    if (urlParts[1] !== void 0) {
      queryParts = urlParts[1].split('#');
    }

    this.urlParts = {
      url: this.setByPriority(urlParts[0]),
      query: this.setByPriority(queryParts[0], urlParts[1], false),
      hash: this.setByPriority(queryParts[1], false)
    };

    var queryValues = [];

    if (this.urlParts.query !== false) {
      var slices = this.urlParts.query.split('&');

      var keyVal = void 0;
      for (var a = 0; a < slices.length; a += 1) {
        keyVal = slices[a].split('=');

        if (keyVal[1] !== void 0) {
          queryValues[keyVal[0]] = keyVal[1];
        } else {
          queryValues[keyVal[0]] = true;
        }
      }
    }

    this.queryValues = queryValues;
  }

  // eslint-disable-next-line consistent-return


  _createClass(Url, [{
    key: 'setByPriority',
    value: function setByPriority() {
      for (var a = 0; a < arguments.length; a += 1) {
        if ((arguments.length <= a ? undefined : arguments[a]) !== void 0) {
          return arguments.length <= a ? undefined : arguments[a];
        }
      }
    }
  }, {
    key: 'get',
    value: function get(key) {
      var result = void 0;
      if (this.queryValues[key] !== void 0) {
        result = this.queryValues[key];
      } else {
        result = false;
      }

      return result;
    }
  }]);

  return Url;
}();

var url = exports.url = new Url();

/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceBooking = undefined;

var _libs = __webpack_require__(0);

var _model = __webpack_require__(5);

var ServiceBooking = exports.ServiceBooking = _model.Model.extend({
  idAttribute: 'BookingNumber',

  // ### getRouterUrl
  getRouterUrl: function getRouterUrl() {
    var url = 'service-history-bookings/' + this.get('Vin') + '/' + this.id;
    return url;
  }
});

// Also extend Translation Base
_libs._.extend(ServiceBooking.prototype, _libs.vc.Translations);

/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceHistoryEvent = undefined;

var _libs = __webpack_require__(0);

var _carouselItem = __webpack_require__(13);

var ServiceHistoryEvent = exports.ServiceHistoryEvent = _carouselItem.CarouselItem.extend({
  idAttribute: 'RepairOrderNumber',

  // ### getRouterUrl
  getRouterUrl: function getRouterUrl() {
    var url = 'service-history-events/' + this.get('Vin') + '/' + this.id;
    return url;
  }
});

// Also extend Translation Base
_libs._.extend(ServiceHistoryEvent.prototype, _libs.vc.Translations);

/***/ }),
/* 22 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.UserMenu = undefined;

var _model = __webpack_require__(5);

var _libs = __webpack_require__(0);

var UserMenu = exports.UserMenu = _model.Model.extend({
  initialize: function initialize() {
    var key = Math.round(Math.random() * 10000);
    this.url = '/data/dynamic/myvolvo/menu?sc_site=' + _libs.vc.settings.sc_site + '&key=' + key;
  }
});

/***/ }),
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.UserVehicleRelationship = undefined;

var _libs = __webpack_require__(0);

var _model = __webpack_require__(5);

var _vehicleInfo = __webpack_require__(4);

var UserVehicleRelationship = exports.UserVehicleRelationship = _model.Model.extend({
  initialize: function initialize(vin) {
    if (vin) {
      this.url = '/data/dynamic/myvolvo/vehiclerelations/' + vin + '?sc_site=' + _libs.vc.settings.sc_site;
    }
  }
});

// Also extend Translation Base
_libs._.extend(_vehicleInfo.VehicleInfo.prototype, _libs.vc.Translations);

/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VehicleDocuments = undefined;

var _libs = __webpack_require__(0);

var _model = __webpack_require__(5);

var VehicleDocuments = exports.VehicleDocuments = _model.Model.extend({
  initialize: function initialize() {}
});

// Also extend Translation Base
_libs._.extend(VehicleDocuments.prototype, _libs.vc.Translations);

/***/ }),
/* 25 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ApiCard = undefined;

var _libs = __webpack_require__(0);

var ApiCard = exports.ApiCard = _libs.Backbone.View.extend({
  modelType: _libs.Backbone.Model,
  contentTmpl: null,
  test: 'test2',

  // ### initialize
  initialize: function initialize() {
    if (this.modelType) {
      // eslint-disable-next-line new-cap
      this.model = new this.modelType();
      this.listenTo(this.model, 'sync', this.render);

      this.model.url = this.getModelUrl();
      this.model.fetch({
        success: function success() {
          (0, _libs.$)('.card-spinner').hide();
        },
        error: function error() {
          (0, _libs.$)('.card-spinner img').hide();
          (0, _libs.$)('.card-spinner').append('<p>The error Occured.</p>');
        }
      }).always(function () {
        (0, _libs.$)('.card-spinner').hide();
      });
    }
  },


  // ### getModelUrl.
  getModelUrl: function getModelUrl() {
    return this.$el.data('url');
  },


  // ### render
  render: function render() {
    var $remoteContent = this.$('.remote-content');

    if (this.modelType) {
      $remoteContent.html(this.contentTmpl.render(this.model.toJSON()));
      return this;
    }

    $remoteContent.html(this.contentTmpl.render());
    return this;
  }
});

/***/ }),
/* 26 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.BasicOverlay = undefined;

var _libs = __webpack_require__(0);

var _overlayRouter = __webpack_require__(2);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var BasicOverlay = exports.BasicOverlay = _libs.vc.Overlay.extend({
  className: _libs.vc.Overlay.prototype.className + ' card-overlay basic-overlay',
  tmpl: templates.basicOverlay,
  initialize: function initialize(options) {
    for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    _libs.vc.Overlay.prototype.initialize.call(this, [options].concat(args));
    this.contentURL = options.contentURL;
  },
  close: function close(evt) {
    evt.preventDefault();
    evt.stopPropagation();
    _overlayRouter.initRouter.navigate('', { trigger: true });
  },
  render: function render() {
    _libs.vc.Overlay.prototype.render.call(this);
    var container = this.$('.container');
    container.load(this.contentURL);
    return this;
  }
});

/***/ }),
/* 27 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.CarouselOverlay = undefined;

var _libs = __webpack_require__(0);

var _overlayCarousel = __webpack_require__(31);

var _overlayRouter = __webpack_require__(2);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

var _overlay = __webpack_require__(10);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var CarouselOverlay = exports.CarouselOverlay = _overlay.Overlay.extend({
  className: _overlay.Overlay.prototype.className + ' card-overlay carousel-overlay',
  tmpl: templates.carouselOverlay,
  carouselItemView: null,

  // ### initialize
  initialize: function initialize(options) {
    this.carouselItemView = options.carouselItemView;

    for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    _libs.vc.Overlay.prototype.initialize.apply(this, [options].concat(args));
    _libs._.bindAll(this, 'next', 'prev');
    this.listenTo(this.collection, 'change:active', this.activeChanged);
  },

  // ### events
  events: _libs._.extend({}, _libs._.result(_libs.vc.Overlay.prototype, 'events'), {
    'click .prev': 'prev',
    'click .next': 'next'
  }),
  // ### keyboardEvents
  // since it is a carousel, we want to listen for left and right on the
  // keyboard. We extend the keyboard events from the overlay base (it contains esc).
  keyboardEvents: _libs._.extend({}, _libs._.result(_libs.vc.Overlay.prototype, 'keyboardEvents'), {
    left: 'prev',
    right: 'next'
  }),
  close: function close(evt) {
    evt.preventDefault();
    evt.stopPropagation();
    _overlayRouter.initRouter.navigate('', { trigger: true });
  },

  // ### next
  next: function next(evt) {
    if (evt) {
      evt.preventDefault();
    }
    var nextItem = this.collection.nextItem();

    if (nextItem) {
      _overlayRouter.initRouter.navigate(nextItem.getRouterUrl(), { trigger: true, replace: true });
      return;
    }

    this.shake(this.collection.activeItem());
  },

  // ### prev
  prev: function prev(evt) {
    if (evt) {
      evt.preventDefault();
    }
    var prevItem = this.collection.prevItem();

    if (prevItem) {
      _overlayRouter.initRouter.navigate(prevItem.getRouterUrl(), { trigger: true, replace: true });
      return;
    }

    this.shake(this.collection.activeItem());
  },

  // ### shake
  // adds a css-class to the items
  shake: function shake(item) {
    item.view.$el.toggleClass('shake', true);

    // just remove the css class after the animation is
    // done
    setTimeout(function () {
      item.view.$el.toggleClass('shake', false);
    }, 300);
  },
  activeChanged: function activeChanged(model, active) {
    if (active) {
      this.$('.prev').toggle(!!this.collection.prevItem());
      this.$('.next').toggle(!!this.collection.nextItem());
    }
  },

  // ### render
  render: function render() {
    _libs.vc.Overlay.prototype.render.call(this);
    this.carousel = new _overlayCarousel.OverlayCarousel({
      collection: this.collection,
      el: this.$('.carousel'),
      itemView: this.carouselItemView
    }).render();

    return this;
  }
});

/***/ }),
/* 28 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.BookAServiceForm = undefined;

var _libs = __webpack_require__(0);

var BookAServiceForm = exports.BookAServiceForm = _libs.Backbone.View.extend({
  initialize: function initialize() {
    var value = this.$('.account-car.active').data('vin');
    this.selectedData.car = value;

    this.listenTo(_libs.vc.app, 'dealer-added', this.dealerUpdate);
    this.listenTo(_libs.vc.app, 'dealer-name-search', this.dealerUpdate);

    (0, _libs.$)('.license-field').removeAttr('required');
    (function (self) {
      (0, _libs.$)('.xtime-form-container').bind('submit', function () {
        self.checkData();
      });
    })(this);
  },
  checkData: function checkData() {
    var result = void 0;
    // eslint-disable-next-line eqeqeq
    if (this.selectedData.car === false || this.selectedData.car === void 0 || this.selectedData.provider == false || this.selectedData.provider === void 0) {
      (0, _libs.$)('.book-a-service-button').addClass('invalid');
      result = false;
    } else {
      (0, _libs.$)('.book-a-service-button').removeClass('invalid');
      result = true;
    }
    return result;
  },

  selectedData: {
    car: false,
    provider: false
  },
  events: {
    'click .account-car': 'carClicked'
  },
  dealerUpdate: function dealerUpdate(remoteData) {
    if (remoteData !== void 0 && remoteData !== false) {
      this.selectedData.provider = remoteData['dealrer-id'];
    } else {
      this.selectedData.provider = false;
    }
  },
  carClicked: function carClicked(evt) {
    this.$('.account-car').removeClass('active');
    var value = (0, _libs.$)(evt.currentTarget).addClass('active').data('vin');
    if (value !== void 0) {
      this.selectedData.car = value;
      this.$('input[name=vin]').val(value);
    }
  },
  render: function render() {
    (0, _libs.$)(function () {
      // myvolvo/us/my-volvo/book-a-service?company=12123&store=5482&cem=myvolvonext+us01@gmail.com&confkey=X07RNWT7HS

      if (document.getElementById('xtime-iframe')) {
        var warnLayout = '<div class="warning-container"><div class="warning-title"><hgroup><h3></h3></hgroup></div><div class="warning-body"></div></div>';

        (0, _libs.$)(warnLayout).prependTo('.book-a-service-form');

        var title = 'Please make sure you have saved changes before leaving the booking!';
        var mailWarn = 'If you leave this page your booking with any unsaved changes will be lost and you will have to start the booking process from the link in the email again.';
        var siteWarn = 'If you leave this page your booking with any unsaved changes will be lost and you will have to start the booking process again.';

        (0, _libs.$)('.warning-title h3').text(title);

        if (window.location.href.search('companyCode') > 0 && window.location.href.search('customerID') > 0) {
          (0, _libs.$)('.warning-body').text(mailWarn);
        } else {
          (0, _libs.$)('.warning-body').text(siteWarn);
        }
      }
    });
    return this;
  }
});

/***/ }),
/* 29 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.CustomerEditor = undefined;

var _libs = __webpack_require__(0);

function initializeUnobtrusive() {
  _libs.$.validator.addMethod('profilefieldrequired', function (value, element, isrequired) {
    var result = true;
    if (isrequired === 'True') {
      // eslint-disable-next-line no-unneeded-ternary
      if (element.tagName === 'INPUT') {
        if (value === '' || value === false) {
          result = false;
        } else {
          result = true;
        }
      } else if (element.tagName === 'SELECT') {
        if (element.value === '') {
          result = false;
        } else {
          result = true;
        }
      }
    }

    return result;
  });

  _libs.$.validator.addMethod('fieldspecificvalidations', function (value, element, fieldtype) {
    if (value && fieldtype === 'PhoneNumberField') {
      var phoneNumber = value.replace(/\s+/g, '');
      return phoneNumber.match(/^[0-9()\-+\/\\]+$/) && phoneNumber.match(/(\D*\d){4}/);
    }
    if (value && fieldtype === 'EmailField') {
      return value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    }

    return true;
  });

  _libs.$.validator.addMethod('date', function (value) {
    if (value === '' || value === null || value === false || value.toString() === 'false' || value.toString === '') {
      return true;
    }
    var parts = value.split('/');
    var a = parseInt(parts[0], 10);
    var b = parseInt(parts[1], 10);
    var c = parseInt(parts[2], 10);
    var timestamp = new Date(c, a - 1, b);
    var now = new Date();
    return timestamp.getMonth() + 1 === a && timestamp.getDate() === b && c > 1900 && c < now.getFullYear();
  });

  _libs.$.validator.unobtrusive.adapters.add('profilefieldrequired', ['isrequired'], function (options) {
    options.rules.profilefieldrequired = options.params.isrequired;
    options.messages.profilefieldrequired = options.message;
  });

  _libs.$.validator.unobtrusive.adapters.add('fieldspecificvalidations', ['fieldtype'], function (options) {
    options.rules.fieldspecificvalidations = options.params.fieldtype;
    options.messages.fieldspecificvalidations = options.message;
  });
}

var CustomerEditor = exports.CustomerEditor = _libs.Backbone.View.extend({
  select: document.getElementsByTagName('SELECT'),
  container: (0, _libs.$)('.lxp-content')[0],
  activeArrowEl: null,
  currentSelect: null,

  initialize: function initialize() {
    this.initializeDate();
    initializeUnobtrusive();
    this.attachValidation();
    var isApple = /iPhone|iPad|iPod/i.test(navigator.userAgent);
    if (isApple) {
      for (var i = 0; i < this.select.length; i++) {
        this.select[i].addEventListener('focusin', this.toggleArrow.bind(this.container));
        this.select[i].addEventListener('focusout', this.toggleArrow.bind(this.container));
      }
    } else {
      this.container.addEventListener('click', this.toggleArrow);
      window.addEventListener('scroll', this.toggleArrow.bind(this.container), true);
    }
  },
  toggleArrow: function toggleArrow(e) {
    var self = this;
    function scrollToggle() {
      if (self.currentSelect !== undefined && self.currentSelect.classList.contains('open')) {
        self.currentSelect.classList.remove('open');
        self.activeArrowEl.style.transform = 'rotateX(0deg)';
      } else {
        return;
      }
    }

    function clickToggle() {
      if (e.target.tagName === 'SELECT' && !e.target.classList.contains('open')) {
        if (self.activeArrowEl !== undefined) {
          self.activeArrowEl.style.transform = 'rotateX(0deg)';
        }
        if (self.currentSelect.classList.contains('open')) {
          self.currentSelect.classList.remove('open');
        }
        self.currentSelect = e.target;
        for (var i = 0; i < e.target.parentNode.childNodes.length; i++) {
          if (e.target.parentNode.childNodes[i].tagName === 'I') {
            self.activeArrowEl = e.target.parentNode.childNodes[i];
            self.activeArrowEl.style.transform = 'rotateX(180deg)';
          }
        }
        e.target.classList.toggle('open');
      } else if (e.target.tagName === 'SELECT' && e.target.classList.contains('open')) {
        self.currentSelect.classList.remove('open');
        self.activeArrowEl.style.transform = 'rotateX(0deg)';
        e.target.classList.remove('open');
      } else if (self.currentSelect.classList.contains('open')) {
        self.currentSelect.classList.remove('open');
        self.activeArrowEl.style.transform = 'rotateX(0deg)';
      }
    }

    if (self.currentSelect === undefined && e.target.tagName === 'SELECT') {
      self.currentSelect = e.target;
      if (e.type === 'click') {
        clickToggle();
      } else if (e.type === 'scroll') {
        scrollToggle();
      } else if (e.type === 'focusout' || e.type === 'focusin') {
        clickToggle();
      }
    } else if (e.type === 'focusout' || e.type === 'focusin') {
      clickToggle();
    } else {
      if (e.type === 'click') {
        clickToggle();
      } else if (e.type === 'scroll') {
        scrollToggle();
      }
      return;
    }
  },
  initializeDate: function initializeDate() {
    // let dateFormat = $('.date').data('format');

    // FIX THIS (TMP fix for incorrect date format)
    // const dateFormat = 'MM/DD/YYYY';
    /*
    if ((dateFormat === void(0)) || dateFormat === null || dateFormat === '') {
      dateFormat = "DD/MM/YYYY";
    } else {
      dateFormat = dateFormat.toUpperCase();
    }
    */
    // $('.date').pikaday({ i18n: global.calendarLanguage, yearRange: [1900, new Date().getFullYear()], minDate: new Date(1900, 1), maxDate: new Date(), format: dateFormat });
  },
  validatePhoneNumber: function validatePhoneNumber(value) {
    var phoneNumber = value.replace(/\s+/g, '');
    return phoneNumber.match(/^[0-9()\-+\/\\]+$/) && phoneNumber.match(/(\D*\d){4}/);
  },

  attachValidation: function attachValidation() {
    // $.validator.unobtrusive.parse($('.customer-editor'));
  }
});

/***/ }),
/* 30 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _libs = __webpack_require__(0);

var _overlayRouter = __webpack_require__(2);

var _videoCardManager = __webpack_require__(17);

// eslint-disable-next-line no-unused-vars
var notifications = new _libs.vc.NotificationCollection();

// eslint-disable-next-line no-unused-vars
var videoGuideCard = new _videoCardManager.VideoCardManager();

// export const overlayRouter = new OverlayRouter();

// eslint-disable-next-line no-unused-vars
var Main = _libs.Backbone.View.extend({
  initialize: function initialize() {
    // OD-2-Modified
    _libs._.bindAll(this, 'maskClicked');
    this.$body = (0, _libs.$)('body');
    this.$html = (0, _libs.$)('html');
    this.$window = (0, _libs.$)(window);
    this.$mask = (0, _libs.$)('#lxp-mask');

    this.listenTo(this, 'mask:show', this.showMask);
    this.listenTo(this, 'mask:hide', this.hideMask);
    this.listenTo(this, 'navDropdown:show', this.showDropdown);
    this.listenTo(this, 'navDropdown:hide', this.hideDropdown);

    this.listenTo(this, 'notification', this.notificationReceived);
    _libs._.defer(_libs._.bind(this.fetchNotifications, this));
  },


  events: {
    'click #lxp-mask': 'maskClicked'
  },

  // ### notificationReceived
  notificationReceived: function notificationReceived(data) {
    notifications.add(data);
  },
  fetchNotifications: function fetchNotifications() {
    if (((0, _libs.$)('.notification-dropdown').length > 0 || (0, _libs.$)('.notification-bar').length > 0) && _libs.vc.settings && _libs.vc.settings.marketSegment) {
      notifications.url = '/data/dynamic/myvolvo/notifications?sc_site=' + _libs.vc.settings.sc_site;
      notifications.fetch();
    }
  },
  maskClicked: function maskClicked(evt) {
    evt.preventDefault();
    this.trigger('mask:hide');
  },


  // ### showMask
  // callback for the *mask:show* event.
  showMask: function showMask() {
    // COM-728 Started
    // To check presence of vertical scrollbar in page
    if ((0, _libs.$)(document).height() > (0, _libs.$)(window).height()) {
      this.$html.addClass('no-scroll').css('padding-right', this.scrollbarWidth + '%');

      if ((0, _libs.$)('.nav-drop-on,.nav').length) {
        (0, _libs.$)('.nav-drop-on,.nav').css('padding-right', this.scrollbarWidth + '%');
        (0, _libs.$)('.nav-drop-on,.nav-logo').css('padding-right', this.scrollbarWidth + '%');
      }
    } else {
      this.$html.addClass('no-scroll').css('padding-right', 0);

      if ((0, _libs.$)('.nav-drop-on,.nav').length) {
        (0, _libs.$)('.nav-drop-on,.nav').css('padding-right', 0);
        (0, _libs.$)('.nav-drop-on,.nav-logo').css('padding-right', 0);
      }
    }
    // COM-728 Ended
    this.$mask.addClass('enabled');
    this.$mask.removeClass('disabled');
    this.$mask.addClass('fade-in');
  },


  // ### hideMask
  // callback for the *mask:hide* event.
  // TODO: I would like to be able to skip the timeout..
  hideMask: function hideMask() {
    var self = this;
    this.$html.removeClass('no-scroll').css('padding-right', 0);
    // COM-728 Started
    if ((0, _libs.$)('.nav-drop-on,.nav').length) {
      (0, _libs.$)('.nav-drop-on,.nav').css('padding-right', 0);
      (0, _libs.$)('.nav-drop-on,.nav-logo').css('padding-right', 0);
    }
    // COM-728 Ended
    this.$mask.addClass('disabled');
    this.$mask.removeClass('enabled fade-in');
    setTimeout(function () {
      self.$mask.removeClass('disabled');
    }, 400);
    // COM-624-Started
    if ((0, _libs.$)('#mask div.overlay').hasClass('overlay-fullscreen')) {
      (0, _libs.$)('#mask').removeClass('img-slider-fullscreen');
    }
    // COM-624-Ended
    // COM-831 Changes
    if ((0, _libs.$)('#mask iframe.videoIframe').hasClass('video-active')) {
      _libs.vc.app.$mask.empty();
    }
  }
});

/***/ }),
/* 31 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.OverlayCarousel = undefined;

var _libs = __webpack_require__(0);

var _overlayRouter = __webpack_require__(2);

var OverlayCarousel = exports.OverlayCarousel = _libs.vc.Carousel.extend({
  itemView: null,

  // ### initialize
  initialize: function initialize(options) {
    this.itemView = options.itemView;

    for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    _libs.vc.Carousel.prototype.initialize.apply(this, [options].concat(args));
    _libs._.bindAll(this, 'createViewForModel');
  },


  // ### activeItemChanged
  activeItemChanged: function activeItemChanged(item, active) {
    if (active) {
      var prevItem = this.collection.prevItem();
      var nextItem = this.collection.nextItem();
      // make sure the active item and the two next to it has a view.
      this.createViewForModel(prevItem, -this.getDragAdjustment() + '%');
      this.createViewForModel(item, 0);
      this.createViewForModel(nextItem, this.getDragAdjustment() + '%');

      // We need to make the height of the container
      // the same as the item.
      this.$el.height(item.view.$el.height());
    }
    _libs.vc.Carousel.prototype.activeItemChanged.call(this, item, active);
  },


  // ### createViewForModel.
  createViewForModel: function createViewForModel(model, offset) {
    if (!this.itemView) {
      return;
    }
    if (model && !model.view) {
      // eslint-disable-next-line new-cap
      model.view = new this.itemView({ model: model });
      this.$el.append(model.view.render().el);
      this.transitionItem(model, offset, true);
    } else {
      this.transitionItem(model, offset, false);
    }
  },


  // ### animateDragChange
  animateDragChange: function animateDragChange(model, active) {
    if (active) {
      _overlayRouter.initRouter.navigate(model.getRouterUrl(), { trigger: false, replace: true });
    }
  },


  // ### getDragAdjustment
  // override drag adjustment for prev and next since we in a touch context
  // want to show the outlines of the item.
  getDragAdjustment: function getDragAdjustment() {
    if (_libs.Modernizr.touch) {
      return 102;
    }
    return 100;
  }
});

/***/ }),
/* 32 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.PreferredDealerValidate = undefined;

var _libs = __webpack_require__(0);

var PreferredDealerValidate = exports.PreferredDealerValidate = _libs.Backbone.View.extend({
  // el: '.footer-background',

  initialize: function initialize() {
    (0, _libs.$)('.lxp-js-dealerSelector__button').click(function () {
      var result = true;
      if ((0, _libs.$)('#dealerId')[0].value === '') {
        (0, _libs.$)('.lxp-js-dealerSelector__failed').fadeIn();
        result = false;
      } else {
        (0, _libs.$)('.lxp-js-dealerSelector__failed').fadeOut();
      }
      return result;
    });
  }
});

/***/ }),
/* 33 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.UserMenuView = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

var _userMenu = __webpack_require__(22);

var _loggedInState = __webpack_require__(18);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var UserMenuView = exports.UserMenuView = _libs.Backbone.View.extend({
  tmpl: templates.userMenu,
  myState: false,
  initialize: function initialize() {
    _libs._.bindAll(this, 'swapState', 'close', 'stop', 'renderMe');

    this.model = new _userMenu.UserMenu();
    this.model.fetch({
      spinner: (0, _libs.$)('.lxp-js-mainMenu'),
      success: this.renderMe
    });

    if (_loggedInState.loggedInState && !(0, _libs.$)('.lxp-js-menuIcon').hasClass('lxp-menuIcon--loggedIn')) {
      (0, _libs.$)('.lxp-js-menuIcon').addClass('lxp-menuIcon--loggedIn');
    } else if ((0, _libs.$)('.lxp-js-menuIcon').hasClass('lxp-menuIcon--loggedIn')) {
      (0, _libs.$)('.lxp-js-menuIcon').removeClass('lxp-menuIcon--loggedIn');
    }

    (0, _libs.$)('.lxp-js-menuIcon')[0].addEventListener('click', this.swapState);
    (0, _libs.$)('.lxp-js-menuIcon')[0].addEventListener('click', this.stop);
    (0, _libs.$)('.content')[0].addEventListener('click', this.close);
  },
  swapState: function swapState(event) {
    event.preventDefault();
    event.stopPropagation();
    if (this.myState) {
      (0, _libs.$)('.lxp-js-mainMenu').fadeOut();
      (0, _libs.$)('.lxp-js-menuIcon__icon').removeClass('lxp-js-menuIcon__icon--change');
      this.myState = false;
    } else {
      (0, _libs.$)('.lxp-js-mainMenu').fadeIn();
      (0, _libs.$)('.lxp-js-menuIcon__icon').addClass('lxp-js-menuIcon__icon--change');
      this.myState = true;
    }
  },
  renderMe: function renderMe() {
    (0, _libs.$)('.lxp-js-mainMenu').html(this.tmpl.render(this.model.toJSON()));
    (0, _libs.$)('.lxp-js-menuIcon')[0].name = this.model.attributes.IconDivTitleAttribute;
    (0, _libs.$)('.lxp-js-menuIcon')[0].title = this.model.attributes.IconDivNameAttribute;
    return this;
  },
  stop: function stop(event) {
    if (event.target.tagName !== 'A') {
      event.preventDefault();
      event.stopPropagation();
    }
  },
  close: function close() {
    if (this.myState) {
      (0, _libs.$)('.lxp-js-mainMenu').fadeOut();
      (0, _libs.$)('.lxp-js-menuIcon__icon').removeClass('lxp-js-menuIcon__icon--change');
      this.myState = false;
    }
  }
});

/***/ }),
/* 34 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ConnectVehicle = undefined;

var _libs = __webpack_require__(0);

var _vehicleInfo = __webpack_require__(4);

var _connectVehicleOverlay = __webpack_require__(11);

var ConnectVehicle = exports.ConnectVehicle = _libs.Backbone.View.extend({
  initialize: function initialize() {
    _libs._.bindAll(this, 'submit', 'onInputValidate');
  },


  mask: (0, _libs.$)('#lxp-mask'),
  fetching: false,

  events: {
    'click .lxp-js-formSection__button': 'submit',
    'input .lxp-js-formSection__inputText': 'onInputValidate'
  },

  input: (0, _libs.$)('.lxp-js-formSection__inputText'),
  alphaNumeric: /^[a-zA-Z0-9]+$/,

  onInputValidate: function onInputValidate() {
    if (!this.alphaNumeric.test(this.input.val())) {
      (0, _libs.$)('.lxp-js-formSection__error--noData').fadeOut();
      (0, _libs.$)('.lxp-js-formSection__error--noServer').fadeOut();
      (0, _libs.$)('.lxp-js-formSection__error--custom').fadeIn();
    } else {
      this.clearErrorPlaceholder();
    }
  },
  submit: function submit(evt) {
    var vin = this.input.val();
    evt.preventDefault();

    if (this.fetching) {
      return;
    }
    var self = this;

    if (vin === '' || vin.length < 17 || vin.length > 17 || !this.alphaNumeric.test(vin)) {
      this.clearErrorPlaceholder();
      (0, _libs.$)('.lxp-js-formSection__error--custom').fadeIn();
    } else {
      var model = new _vehicleInfo.VehicleInfo(vin.toUpperCase());

      this.fetching = true;

      model.fetch({
        success: function success() {
          self.fetching = false;
          (0, _libs.$)('.lxp-js-formSection__error--custom').fadeOut();
          (0, _libs.$)('.lxp-js-formSection__noVin').fadeOut();
          model.state = 'AddCar';
          var overlay = new _connectVehicleOverlay.ConnectVehicleOverlay({ model: model });
          console.log('fetched overlay');
          (0, _libs.$)('#lxp-mask').addClass('lxp-mask--enabled');
          (0, _libs.$)('#lxp-mask').removeClass('lxp-mask--disabled');
          self.mask.append(overlay.el);
        },
        error: function error(jqXHR, textStatus) {
          self.fetching = false;
          // If VIN is valid but does not exist in system
          if (textStatus.status === 404 || textStatus.status === 204) {
            self.clearErrorPlaceholder();
            (0, _libs.$)('.lxp-js-formSection__noVin').fadeOut();
            (0, _libs.$)('.lxp-js-formSection__error--noData').fadeIn();
          } else if (textStatus.status === 400) {
            // If VIN is invalid
            self.clearErrorPlaceholder();
            (0, _libs.$)('.lxp-js-formSection__noVin').fadeIn();
          } else {
            // Any server errors
            self.clearErrorPlaceholder();
            (0, _libs.$)('.lxp-js-formSection__noVin').fadeOut();
            (0, _libs.$)('.lxp-js-formSection__error--noServer').fadeIn();
          }
        }
      });
    }
  },
  clearErrorPlaceholder: function clearErrorPlaceholder() {
    (0, _libs.$)('.lxp-js-formSection__error--custom').fadeOut();
    (0, _libs.$)('.lxp-js-formSection__error--noData').fadeOut();
    (0, _libs.$)('.lxp-js-formSection__error--noServer').fadeOut();
  }
});

/***/ }),
/* 35 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ManageVehicle = undefined;

var _libs = __webpack_require__(0);

var _vehicleInfo = __webpack_require__(4);

var _connectVehicleOverlay = __webpack_require__(11);

var _spinner = __webpack_require__(3);

var _removeVehicleOverlay = __webpack_require__(36);

var ManageVehicle = exports.ManageVehicle = _libs.Backbone.View.extend({
  html: (0, _libs.$)('html'),
  mask: (0, _libs.$)('#lxp-mask'),

  initialize: function initialize() {
    (0, _libs.$)('.lxp-js-formSection__licenseText_' + this.$el.data('vin')).hide();
    (0, _libs.$)('.lxp-js-formSection__licenseText_' + this.$el.data('vin')).addClass('lxp-formSection__licenseText');
    (0, _libs.$)('.lxp-js-formSection__button_saveLicencePlate_' + this.$el.data('vin')).hide();
    (0, _libs.$)('.lxp-js-formSection__button_cancelLicencePlate_' + this.$el.data('vin')).hide();
    _libs._.bindAll(this, 'clickAction', 'confirmRemove', 'removeSuccess', 'removeFail', 'activateVehicle', 'updateOwner', 'showMask', 'hideMask', 'maskClicked');
    this.listenTo(_libs.vc.app, 'mask:show', this.showMask);
    this.listenTo(_libs.vc.app, 'mask:hide', this.hideMask);
    this.mask.on('click', this.maskClicked);
  },


  events: {
    'click .lxp-js-myCar__actionButton': 'clickAction',
    'click .lxp-js-myCar__actionButtonMain': 'activateVehicle'
  },

  spinner: false,
  clickAction: function clickAction(evt) {
    evt.preventDefault();
    var href = evt.target.href;
    var hashIndex = href.indexOf('#');
    var action = hashIndex > -1 ? href.substr(hashIndex + 1) : '';
    switch (action) {
      case 'disconnect':
        this.remove(false);
        break;
      case 'updateOwner':
        this.updateOwner(false);
        break;
      case 'editLicencePlate':
        this.editLicencePlate();
        break;
      case 'saveLicencePlate':
        this.saveLicencePlate();
        break;
      case 'cancelLicencePlate':
        this.cancelLicencePlate();
        break;
      default:
        break;
    }
    return false;
  },
  maskClicked: function maskClicked(evt) {
    evt.preventDefault();
    _libs.vc.app.trigger('mask:hide');
  },
  showMask: function showMask() {
    this.mask.addClass('lxp-mask--enabled');
    this.mask.removeClass('lxp-mask--disabled');
  },
  hideMask: function hideMask() {
    this.html.removeClass('no-scroll').css('padding-right', 0);
    this.mask.addClass('lxp-mask--disabled');
    this.mask.removeClass('lxp-mask--enabled');
    this.mask.empty();
  },
  saveLicencePlate: function saveLicencePlate() {
    var licPlate = (0, _libs.$)('.lxp-js-formSection__licenseText_' + this.$el.data('vin')).val();
    var scSite = '?sc_site=' + _libs.vc.settings.sc_site;
    var vin = this.$el.data('vin');
    var model = new _vehicleInfo.VehicleInfo(vin);
    model.url = '/data/dynamic/myvolvo/licenseplate/' + vin + '/' + licPlate + scSite;
    model.fetch();
    window.location.reload();
  },
  editLicencePlate: function editLicencePlate() {
    (0, _libs.$)('.lxp-js-formSection__licenseText_' + this.$el.data('vin')).show();
    (0, _libs.$)('.lxp-js-formSection__button_saveLicencePlate_' + this.$el.data('vin')).show();
    (0, _libs.$)('.lxp-js-formSection__button_cancelLicencePlate_' + this.$el.data('vin')).show();
    (0, _libs.$)('.lxp-js-formSection__button_editLicencePlate_' + this.$el.data('vin')).hide();
    (0, _libs.$)('.lxp-js-formSection__button_textLicencePlate_' + this.$el.data('vin')).hide();
  },
  cancelLicencePlate: function cancelLicencePlate() {
    (0, _libs.$)('.lxp-js-formSection__licenseText_' + this.$el.data('vin')).hide();
    (0, _libs.$)('.lxp-js-formSection__button_saveLicencePlate_' + this.$el.data('vin')).hide();
    (0, _libs.$)('.lxp-js-formSection__button_cancelLicencePlate_' + this.$el.data('vin')).hide();
    (0, _libs.$)('.lxp-js-formSection__button_editLicencePlate_' + this.$el.data('vin')).show();
    (0, _libs.$)('.lxp-js-formSection__button_textLicencePlate_' + this.$el.data('vin')).show();
  },
  remove: function remove() {
    var _this = this;

    this.trigger('mask:show');
    var vin = this.$el.data('vin');
    var model = new _vehicleInfo.VehicleInfo(vin);
    var overlay = void 0;
    model.fetch({
      success: function success() {
        overlay = new _removeVehicleOverlay.RemoveVehicleOverlay({
          model: model,
          requested: _this.$el.data('requested'),
          owner: _this.$el.data('owner')
        });
        overlay.render();
        overlay.on('confirm', _this.confirmRemove);
        _this.mask.append(overlay.el);
      }
    });
  },
  updateOwner: function updateOwner() {
    var vin = this.$el.data('vin');
    var model = new _vehicleInfo.VehicleInfo(vin);
    this.fetching = true;
    model.fetch({
      errorMessage: 'Cannot change owner',
      success: function success() {
        self.fetching = false;
        model.state = 'SetOwner';
        var overlay = new _connectVehicleOverlay.ConnectVehicleOverlay({ model: model });
        overlay.render();
        this.mask.append(overlay.render().el);
      }
    });
  },
  confirmRemove: function confirmRemove(pars) {
    var _this2 = this;

    var vin = this.$el.data('vin');
    var url = pars.url;

    if (url !== false) {
      (0, _libs.$)('.my-cars').css('pointer-events', 'none');
      (0, _libs.$)('.my-cars').fadeTo('slow', 0.7);
      this.spinner = new _spinner.Spinner();

      // 1. remove relation to car at first
      (function (self) {
        _libs.$.ajax({
          url: '' + url + vin + '?sc_site=' + _libs.vc.settings.sc_site,
          type: pars.method
        }).done(function () {
          self.removeSuccess();
          // FIXME TODO this probably wont work due to some flaws in the API realted to ownership settings
          /*
           url = `${vc.settings.marketSegment}/data/myvolvo/vehicleownership/`;
           // 2. only then try to set the ownership
           $.ajax(
           {
           url: `${url}${vin}`,
           type: 'DELETE',
           })
           .done(() => {
           // Getting notification types from server side through "/api/sitecore/Notifications/NotificationTypes"
           const notification = new vc.Notification(NotificationTypes.RemoveCarFailed);
           notification.fetch({
           type: 'POST',
           success() {
           vc.app.notifications.add(notification);
           },
           });
            self.removeSuccess();
           })
           .fail(() => {
           this.removeFail();
           });
           */
        }).fail(function () {
          _this2.removeFail();
        });
      })(this);
    }
  },
  removeSuccess: function removeSuccess() {
    this.$el.fadeOut();
    this.removeSpinner();
    window.location.reload();
  },
  removeFail: function removeFail() {
    this.removeSpinner();
    /* const notification = new vc.Notification(NotificationTypes.RemoveCarFailed);
    notification.fetch({
      type: 'POST',
      success() {
        vc.app.notifications.add(notification);
      },
    }); */
  },
  removeSpinner: function removeSpinner() {
    if (this.spinner) {
      this.spinner.remove();
      this.spinner = false;
    }
  },
  activateVehicle: function activateVehicle(evt) {
    evt.preventDefault();
    var vin = this.$el.data('vin');
    var url = '/data/dynamic/myvolvo/activatevehicle/' + vin + '?sc_site=' + _libs.vc.settings.sc_site;
    this.spinner = new _spinner.Spinner();
    var p = this;
    _libs.$.ajax({
      type: 'POST',
      url: url
    }).done(function () {
      p.removeSpinner();
      window.location.reload();
    }).fail(function () {
      p.removeSpinner();
    });
    return false;
  }
});

/***/ }),
/* 36 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.RemoveVehicleOverlay = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var RemoveVehicleOverlay = exports.RemoveVehicleOverlay = _libs.vc.Overlay.extend({
  className: _libs.vc.Overlay.prototype.className + ' lxp-overlay--removeVehicle lxp-overlay',
  tmpl: templates.removeVehicleOverlay,
  clearAddressHash: false,
  postUrl: false,
  owner: false,
  requested: false,

  initialize: function initialize() {
    _libs._.bindAll(this, 'formAction', 'pickme');

    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    args[0].model.set('owner', args[0].owner);
    args[0].model.set('requested', args[0].requested);

    _libs.vc.Overlay.prototype.initialize.apply(this, args);

    this.owner = args[0].owner;
    this.requested = args[0].requested;
  },


  events: _libs._.extend({}, _libs._.result(_libs.vc.Overlay.prototype, 'events'), {
    'click .lxp-js-overlay__button': 'formAction',
    'click .lxp-js-overlay__close': 'close',
    'click .lxp-js-myCar__statusSelector': 'pickme'
  }),

  pickme: function pickme(evt) {
    if (evt.target.value === 'owner') {
      this.postUrl = '/data/dynamic/myvolvo/vehicleownership/';
      this.postType = 'POST';
    } else {
      this.postUrl = '/data/dynamic/myvolvo/vehiclerelations/remove/';
      this.postType = 'GET';
    }

    (0, _libs.$)('.lxp-overlay__button--confirm').removeClass('lxp-overlay__button--confirm');
  },
  formAction: function formAction(evt) {
    evt.preventDefault();

    var href = evt.target.href;
    var hashIndex = href.indexOf('#');
    var action = hashIndex > -1 ? href.substr(hashIndex + 1) : '';

    switch (action) {
      case 'confirm':
        if (this.postUrl !== false) {
          _libs.vc.app.trigger('mask:hide');
          this.trigger('confirm', { url: this.postUrl, method: this.postType });
        }
        break;
      case 'cancel':
        _libs.vc.app.trigger('mask:hide');
        break;
      default:
        break;
    }
  }
});

/***/ }),
/* 37 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceBookingsOverlayCarouselItem = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ServiceBookingsOverlayCarouselItem = exports.ServiceBookingsOverlayCarouselItem = _libs.vc.CarouselItemView.extend({
  tmpl: templates.serviceBookingsOverlayCarouselItem,
  className: _libs.vc.CarouselItemView.prototype.className + ' service-bookings-overlay-carousel-item',
  // ### initialize
  initialize: function initialize() {
    _libs._.bindAll(this, 'render');
  },

  // ### render
  render: function render() {
    this.$el.html(this.tmpl.render(this.model.toJSON()));
    var isMobile = {
      // eslint-disable-next-line new-cap
      Android: function Android() {
        return navigator.userAgent.match(/Android/i);
      },

      // eslint-disable-next-line new-cap
      BlackBerry: function BlackBerry() {
        return navigator.userAgent.match(/BlackBerry/i);
      },

      // eslint-disable-next-line new-cap
      iOS: function iOS() {
        return navigator.userAgent.match(/iPhone|iPod/i);
      },
      Opera: function Opera() {
        return navigator.userAgent.match(/Opera Mini/i);
      },

      // eslint-disable-next-line new-cap
      Windows: function Windows() {
        return navigator.userAgent.match(/Windows Phone|IEMobile|WPDesktop|ZuneWP7/i);
      },

      // eslint-disable-next-line new-cap
      any: function any() {
        return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
      }
    };

    if (isMobile.any()) {
      (0, _libs.$)('.desktop').hide();
      (0, _libs.$)('.mobile').show();
    }
    return this;
  }
});

/***/ }),
/* 38 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceHistoryCard = undefined;

var _libs = __webpack_require__(0);

var _serviceHistoryEventCollection = __webpack_require__(8);

var _serviceHistoryCardRow = __webpack_require__(39);

var _overlayRouter = __webpack_require__(2);

var ServiceHistoryCard = exports.ServiceHistoryCard = _libs.Backbone.View.extend({

  // ### initialize
  initialize: function initialize() {
    _libs._.bindAll(this, 'viewAllClicked', 'itemAdded');
    this.collection = new _serviceHistoryEventCollection.ServiceHistoryEventCollection();
    this.listenTo(this.collection, 'add', this.itemAdded);
  },


  // ### events
  events: {
    'click .view-all': 'viewAllClicked'
  },

  // ### viewAllClicked
  viewAllClicked: function viewAllClicked(evt) {
    evt.preventDefault();
    var url = 'service-history-events/' + this.$el.data('vin');
    _overlayRouter.initRouter.navigate(url, { trigger: true });
  },


  // ### itemAdded
  // this event callback is called whenever service history
  // event is added to the collection
  itemAdded: function itemAdded(item) {
    var row = new _serviceHistoryCardRow.ServiceHistoryCardRow({ model: item });
    this.$tableBody.append(row.render().el);
  },


  // ### render
  render: function render() {
    this.$tableBody = this.$('table tbody');
    this.collection.url = '/data/dynamic/myvolvo/servicehistoryevents/' + this.$el.data('vin') + '?sc_site=' + _libs.vc.settings.sc_site;
    this.collection.fetch({
      spinner: (0, _libs.$)('.card-spinner'),
      success: function success() {},
      error: function error() {
        (0, _libs.$)('.card-spinner').append('<p>The error Occured.</p>');
      }
    }).always(function () {});
    return this;
  }
});

/***/ }),
/* 39 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceHistoryCardRow = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

var _overlayRouter = __webpack_require__(2);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ServiceHistoryCardRow = exports.ServiceHistoryCardRow = _libs.Backbone.View.extend({
  tagName: 'tr',
  tmpl: templates.serviceHistoryCardRow,

  // ### initialize
  initialize: function initialize() {
    _libs._.bindAll(this, 'rowClicked');
  },


  events: {
    click: 'rowClicked'
  },

  // ### rowClicked
  rowClicked: function rowClicked(evt) {
    evt.preventDefault();
    _overlayRouter.initRouter.navigate(this.model.getRouterUrl(), { trigger: true });
  },


  // ### render
  render: function render() {
    this.$el.html(this.tmpl.render(this.model.toJSON()));
    return this;
  }
});

/***/ }),
/* 40 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ServiceHistoryOverlayCarouselItem = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var ServiceHistoryOverlayCarouselItem = exports.ServiceHistoryOverlayCarouselItem = _libs.vc.CarouselItemView.extend({
  tmpl: templates.serviceHistoryOverlayCarouselItem,
  className: _libs.vc.CarouselItemView.prototype.className + ' service-history-overlay-carousel-item',

  // ### initialize
  initialize: function initialize() {
    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _libs.vc.CarouselItemView.prototype.initialize.apply(this, args);
    _libs._.bindAll(this, 'render');
  },


  // ### render
  render: function render() {
    this.$el.html(this.tmpl.render(this.model.toJSON()));
    new _libs.vc.Accordion({ el: this.$('.accordion') }).render();
    return this;
  }
});

/***/ }),
/* 41 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VehicleDocumentsCard = undefined;

var _libs = __webpack_require__(0);

var _vehicleDocumentsCollection = __webpack_require__(16);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var VehicleDocumentsCard = exports.VehicleDocumentsCard = _libs.Backbone.View.extend({
  template: templates.vehicleDocumentsCard,

  // ### initialize
  initialize: function initialize() {
    _libs._.bindAll(this, 'render');
    this.collection = new _vehicleDocumentsCollection.VehicleDocumentsCollection();
    this.listenTo(this.collection, 'sync', this.render);
    this.collection.url = this.getModelUrl();
    this.collection.fetch({
      spinner: (0, _libs.$)('.card-spinner'),
      success: function success() {
        (0, _libs.$)('.card-spinner')[0].style.display = 'none';
      },
      error: function error() {
        (0, _libs.$)('.card-spinner').append('<p>An error Occured.</p>');
      }
    }).always(function () {});
  },


  events: {
    'click .documents-card-list li': 'liClicked'
  },

  getModelUrl: function getModelUrl() {
    return this.$el.data('url');
  },
  liClicked: function liClicked(event) {
    var currentTarget = (0, _libs.$)(event.currentTarget);
    var link = currentTarget.find('a .documents-card-link').attr('href');
    if (link !== undefined) {
      var newWin = window.open(link, '_blank');
      if (newWin === undefined) {
        location.href = link;
      }
    }
  },
  render: function render() {
    var $remoteContent = this.$('.remote-content');

    if (this.collection.models.length) {
      $remoteContent.html(this.template.render({ documents: this.collection.toJSON() }));
      this.$el.find('.documents-card-list').scrollbar();
      return this;
    }

    $remoteContent.html(this.template.render());
    return this;
  }
});

/***/ }),
/* 42 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VehicleInfoCard = undefined;

var _libs = __webpack_require__(0);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

var _apiCard = __webpack_require__(25);

var _vehicleInfo = __webpack_require__(4);

var _overlayRouter = __webpack_require__(2);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var VehicleInfoCard = exports.VehicleInfoCard = _apiCard.ApiCard.extend({
  modelType: _vehicleInfo.VehicleInfo,
  contentTmpl: templates.vehicleInfoCard,

  // ### initialize
  initialize: function initialize() {
    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _apiCard.ApiCard.prototype.initialize.apply(this, args);
    _libs._.bindAll(this, 'openVehicleSpecifications');
  },


  events: {
    'click .card-cta': 'openVehicleSpecifications'
  },

  // ### openVehicleSpecifications
  openVehicleSpecifications: function openVehicleSpecifications(evt) {
    evt.preventDefault();
    var vin = this.$el.data('vin');
    _overlayRouter.initRouter.navigate('vehicle-info/' + vin, { trigger: true });
  }
});

/***/ }),
/* 43 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.VehicleInfoOverlay = undefined;

var _libs = __webpack_require__(0);

var _overlay = __webpack_require__(10);

var _templates = __webpack_require__(1);

var templates = _interopRequireWildcard(_templates);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var VehicleInfoOverlay = exports.VehicleInfoOverlay = _overlay.Overlay.extend({
  className: _libs.vc.Overlay.prototype.className + ' card-overlay vehicle-info-overlay',
  tmpl: templates.vehicleInfoOverlay
});

/***/ }),
/* 44 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(12);


/***/ })
/******/ ]);