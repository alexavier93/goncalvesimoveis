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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./main */ "./resources/js/main.js");

/***/ }),

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict";

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  /* ===================================
      Side Menu
  ====================================== */

  if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").on("click", function () {
      $(".pushwrap").toggleClass("active");
      $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700);
    }), $("#close_side_menu").on("click", function () {
      $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active");
    }), $(".side-nav .navbar-nav").on("click", function () {
      $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active");
    }), $("#btn_sideNavClose").on("click", function () {
      $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active");
    });
  } // Navbar Scroll Function


  var $window = $(window);
  $window.scroll(function () {
    var $scroll = $window.scrollTop();
    var $navbar = $(".header-nav");

    if (!$navbar.hasClass("sticky-bottom")) {
      if ($scroll > 250) {
        $navbar.addClass("fixed-menu");
      } else {
        $navbar.removeClass("fixed-menu");
      }
    }
  });
  var fixTop = $('.fixed-content');

  if (fixTop.length) {
    var fixmeTop = fixTop.offset().top;
    $(window).scroll(function () {
      // assign scroll event listener
      var currentScroll = $(window).scrollTop(); // get current position

      if (currentScroll >= fixmeTop) {
        // apply position: fixed if you
        $('.fixed-content').css({
          // scroll to that element or below it
          top: '80px',
          position: 'sticky'
        });
      } else {
        // apply position: static
        $('.fixed-content').css({
          // if you scroll above it
          position: 'static'
        });
      }
    });
  }

  $(function () {
    $("#geocomplete").geocomplete({
      country: 'BR',
      types: ["geocode", "establishment"],
      details: "form"
    });
    $("#find").click(function () {
      $("#geocomplete").trigger("geocode");
    }).click();
  }); // Banner Carousel / Owl Carousel 

  $('.banner-carousel').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    smartSpeed: 500,
    autoHeight: true,
    autoplay: true,
    autoplayTimeout: 5000,
    navText: ['<span class="fa fa-angle-left">', '<span class="fa fa-angle-right">'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1024: {
        items: 1
      }
    }
  });
  $('.carrosel-depoimentos').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1,
        loop: false,
        margin: 20
      }
    }
  });
  $('.imoveis-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4,
        loop: false,
        margin: 20
      }
    }
  });
  $('.imovelCarousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1,
        loop: false
      }
    }
  });
  var myCarousel = document.querySelector('.imovelCarousel');
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
  });
  $(".mix-imoveis").mixItUp({
    animation: {
      duration: 400,
      effects: "stagger(34ms) rotateX(20deg) scale(0.01) translateZ(1000px) fade",
      easing: "ease"
    }
  });
  $(".youtube").fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    helpers: {
      media: {}
    }
  }); // Mask

  $('.cep').mask('00000-000');
  $('.cpf').mask('000.000.000-00', {
    reverse: true
  });
  $('.data').mask('00/00/0000');
  $('.telefone').focusout(function () {
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');

    if (phone.length > 10) {
      element.mask("(99) 99999-9999");
    } else {
      element.mask("(99) 9999-99999");
    }
  }).trigger('focusout');
  $('#formBusca').submit(function () {
    $('input[name=administrative_area_level_2]').attr('name', 'cidade');
    $('input[name=sublocality]').attr('name', 'bairro');
    $('input[name=localizacao]').attr('name', '');

    if ($("input[name=bairro]").val() == '') {
      $("input[name=bairro]").remove();
    }

    if ($("input[name=cidade]").val() == '') {
      $("input[name=cidade]").remove();
    }
  }); // Form de Contato

  $('#formContato').submit(function () {
    var dados = $(this).serialize();
    var url = this.url;
    console.log(url);
  });
})(jQuery, window, document);

/***/ }),

/***/ "./resources/sass/admin/edit.scss":
/*!****************************************!*\
  !*** ./resources/sass/admin/edit.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**********************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ./resources/sass/admin/edit.scss ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\goncalvesimoveis\resources\js\app.js */"./resources/js/app.js");
__webpack_require__(/*! C:\xampp\htdocs\goncalvesimoveis\resources\sass\app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\goncalvesimoveis\resources\sass\admin\edit.scss */"./resources/sass/admin/edit.scss");


/***/ })

/******/ });