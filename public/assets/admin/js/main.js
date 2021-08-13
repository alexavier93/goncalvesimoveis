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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin/main.js":
/*!************************************!*\
  !*** ./resources/js/admin/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

(function ($) {
  "use strict";

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $(document).on('click', '.delete', function () {
    var id = $(this).attr('data-id');
    $('#id').val(id);
  }); // Jquery Mask

  $('.money').mask("#.##0,00", {
    reverse: true
  });
  $('.cm').mask('##0,00', {
    reverse: true
  });
  $('.mes_ano').mask('00/0000');
  $('.summernote').summernote({
    lang: 'pt-BR',
    height: 200,
    fontNames: ['Noto Sans JP', 'Signika', 'Open Sans', 'Arial'],
    fontNamesIgnoreCheck: ['Nunito', 'Segoe UI'],
    fontSizeUnits: ['px', 'pt'],
    styleTags: ['p', {
      title: 'Blockquote',
      tag: 'blockquote',
      className: 'blockquote',
      value: 'blockquote'
    }, 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    toolbar: [['style'], ['font', ['bold', 'underline', 'clear', 'font']], ['fontname', ['fontname']], ['fontsize', ['fontsize']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['table'], ['insert', ['link']], ['view', ['fullscreen', 'codeview', 'help']]]
  });
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
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
  $('.select').select2({
    placeholder: "Selecione uma opção",
    theme: "classic"
  });
  $(function ($) {
    $("#geocompletecad").geocomplete({
      country: 'BR',
      map: "#mapa",
      details: "form",
      types: ["geocode", "establishment"]
    });
    $("#find").click(function () {
      $("#geocompletecad").trigger("geocode");
    }).click();
  }); //Tabs

  var url = location.href.replace(/\/$/, "");

  if (location.hash) {
    var hash = url.split("#");
    $('#tabStep a[href="#' + hash[1] + '"]').tab("show");
    url = location.href.replace(/\/#/, "#");
    history.replaceState(null, null, url);
    setTimeout(function () {
      $(window).scrollTop(0);
    }, 400);
  }

  $('a[data-toggle="tab"]').on("click", function () {
    var newUrl;
    var hash = $(this).attr("href");
    newUrl = url.split("#")[0] + hash;
    newUrl += "/";
    history.replaceState(null, null, newUrl);
  });

  __webpack_require__(/*! ./pages/imoveis.js */ "./resources/js/admin/pages/imoveis.js");
})(jQuery, window, document);

/***/ }),

/***/ "./resources/js/admin/pages/imoveis.js":
/*!*********************************************!*\
  !*** ./resources/js/admin/pages/imoveis.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

getImages();
getPlantas(); //getStatus();

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
}); // Buscando as Imagens do imóvel

function getImages() {
  var imovel_id = $("#imovel_id").val();
  var url = $("#getImages").val();
  $.ajax({
    url: url,
    method: "POST",
    data: {
      imovel_id: imovel_id
    },
    dataType: "json",
    success: function success(data) {
      $('#imagesImovel').html(data);
    }
  });
  return false;
}

; // Upload Imagens

$(document).on('click', '#uploadImage', function () {
  var formData = new FormData();
  var url = $("#urlUploadImage").val();
  var imovel_id = $("#imovel_id").val();
  var TotalFiles = $('#images')[0].files.length; //Total files

  var files = $('#images')[0];

  for (var i = 0; i < TotalFiles; i++) {
    formData.append('images' + i, files.files[i]);
  }

  formData.append('TotalFiles', TotalFiles);
  formData.append('imovel_id', imovel_id);
  $.ajax({
    type: 'POST',
    url: url,
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    beforeSend: function beforeSend() {
      $('#galeriaImovel').html('<h5 class="text-center my-4 w-100">Carregando...</h5>');
    },
    success: function success(response) {
      getGaleria();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
}); // Excluindo Imagens

$(document).on('click', '.delete_image', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $('.delete').attr('data-id', id);
  $('.delete').attr('data-url', url);
  $('.delete').addClass('deleteImage');
  $('.deleteImage').removeClass('delete');
});
$(document).on('click', '.deleteImage', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $.ajax({
    url: url,
    method: "POST",
    data: {
      id: id
    },
    dataType: "json",
    cache: false,
    success: function success(response) {
      $('#modalDelete').modal('toggle');
      $('.deleteImage').addClass('delete');
      $('.deleteImage').removeData('id');
      $('.delete').removeClass('deleteImage');
      getImages();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
}); // Buscando as Plantas do imóvel

function getPlantas() {
  var imovel_id = $("#imovel_id").val();
  var url = $("#getPlantas").val();
  $.ajax({
    url: url,
    method: "POST",
    data: {
      imovel_id: imovel_id
    },
    dataType: "json",
    success: function success(data) {
      $('#plantasImovel').html(data);
    }
  });
  return false;
}

; // Upload Plantans

$(document).on('click', '#uploadPlantas', function () {
  var formData = new FormData();
  var url = $("#urlUploadPlantas").val();
  var imovel_id = $("#imovel_id").val();
  var TotalFiles = $('#plantas')[0].files.length; //Total files

  var files = $('#plantas')[0];

  for (var i = 0; i < TotalFiles; i++) {
    formData.append('plantas' + i, files.files[i]);
  }

  formData.append('TotalFiles', TotalFiles);
  formData.append('imovel_id', imovel_id);
  $.ajax({
    type: 'POST',
    url: url,
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    beforeSend: function beforeSend() {
      $('#galeriaImovel').html('<h5 class="text-center my-4 w-100">Carregando...</h5>');
    },
    success: function success(response) {
      getPlantas();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
}); // Excluindo Plantans

$(document).on('click', '.delete_planta', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $('.delete').attr('data-id', id);
  $('.delete').attr('data-url', url);
  $('.delete').addClass('deletePlanta');
  $('.deletePlanta').removeClass('delete');
});
$(document).on('click', '.deletePlanta', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $.ajax({
    url: url,
    method: "POST",
    data: {
      id: id
    },
    dataType: "json",
    cache: false,
    success: function success(response) {
      $('#modalDelete').modal('toggle');
      $('.deletePlanta').addClass('delete');
      $('.deletePlanta').removeData('id');
      $('.delete').removeClass('deletePlanta');
      getPlantas();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
});

/***/ }),

/***/ 1:
/*!******************************************!*\
  !*** multi ./resources/js/admin/main.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\goncalvesimoveis\resources\js\admin\main.js */"./resources/js/admin/main.js");


/***/ })

/******/ });