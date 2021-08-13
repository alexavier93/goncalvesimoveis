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
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }), $(".side-nav .navbar-nav").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }

    // Navbar Scroll Function
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


        $(window).scroll(function () {                  // assign scroll event listener

            var currentScroll = $(window).scrollTop(); // get current position

            if (currentScroll >= fixmeTop) {           // apply position: fixed if you
                $('.fixed-content').css({                      // scroll to that element or below it
                    top: '80px',
                    position: 'sticky',
                });
            } else {                                   // apply position: static
                $('.fixed-content').css({                      // if you scroll above it
                    position: 'static'
                });
            }

        });

    }


    $(function () {

        $("#geocomplete").geocomplete({
            country: 'BR',
            types: ["geocode", "establishment"],
            details: "form",
        });

        $("#find").click(function () {
            $("#geocomplete").trigger("geocode");
        }).click();

    });

    // Banner Carousel / Owl Carousel 
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
            },
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
                items: 1,
            },
            600: {
                items: 1,
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
                items: 1,
            },
            600: {
                items: 2,
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
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
                loop: false,
            }
        }
    });



    var myCarousel = document.querySelector('.imovelCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    })


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
    });


    // Mask
    $('.cep').mask('00000-000');
    $('.cpf').mask('000.000.000-00', { reverse: true });
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

    });


    // Form de Contato
    $('#formContato').submit(function () {

        var dados = $(this).serialize();

        var url = this.url;

        console.log(url);
 


    });


})(jQuery, window, document);