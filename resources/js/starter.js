import $ from 'jquery';
import LazyLoad from 'vanilla-lazyload';

// (function ($) {
//     $.fn.matchMaxHeight = function () {
//         const items = $(this);
//         $(items).attr('style', '');
//         $(items).css({});
//         let max = 0;
//         for (let i = 0; i < items.length; i++) {
//             max = max < $(items[i]).height() ? $(items[i]).height() : max;
//
//         }
//         $(items).css({'display': 'block', 'height': '' + max + 'px'});
//     }
// })(jQuery);

$(window).on("load", () => {
    starter.main.init();
});

$(window).on("resize", () => {
});

$(window).scroll(() => {
    window.pageYOffset > 50
        ? $(".navbar").removeClass("transparent")
        : $(".navbar").addClass("transparent");
});

const starter = {
    _var: {
    },

    main: {
        init: function () {
            starter.main.onClick();
            starter.main.onChange();
            starter.main.onInputs();
            starter.main.onSubmit();
            starter.main.onFocus();
            starter.main.onShowBsModal();
            starter.main.onShowBsCollapse();
            starter.plugin.lazyload.init();
            starter.plugin.owl.init();

            starter.form.styled();
        },

        onClick: function () {
            $(".dropdown-toggle").on("click", function () {
                $(this).parent().siblings().find(".dropdown-menu").hide();
                $(this).next(".dropdown-menu").toggle();
            });
        },

        onChange: function () {

        },

        onInputs: function () {

        },

        onSubmit: function () {

        },

        onFocus: function () {
            $(".color-option").each(function () {
                $(this).focus(function () {
                    $(this).addClass("active").siblings().removeClass("active");
                    $($(this).data("img")).attr("src", $(this).data("src"));
                });
            });
        },

        onShowBsModal: function () {
            $("#modal").on("show.bs.modal", function (e) {
                console.log("show");
                var button = $(e.relatedTarget);
                var recipient = button.data("series");
                var modal = $(this);
                modal.find(".modal-body").load(`/html/modal-${recipient}.html`);
            });
        },

        onShowBsCollapse: function () {
            $(".navbar-collapse").on("shown.bs.collapse", function () {
                $(".navbar-toggler").blur();
            });
            $(".navbar-collapse").on("hidden.bs.collapse", function () {
                $(".navbar-toggler").blur();
            });
        }
    },

    form: {
        styled: function () {
            $(".select").find('option[value=""]:checked').parent().addClass("empty");
        }
    },

    plugin: {
        lazyload: {
            init: function () {
                new LazyLoad();
            }
        },

        owl: {
            init: function () {
                $("#gallery .owl-carousel").owlCarousel({
                    loop: true,
                    items: 1,
                    nav: true,
                    navText: [
                        ,
                        '<svg xmlns="http://www.w3.org/2000/svg" width="14.84" height="25.684" viewBox="0 0 14.84 25.684"><path d="M3627.143,530.706l10.012,10.014-10.012,10.014" transform="translate(-3624.314 -527.878)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>',
                    ],
                    dots: true,
                    responsive: {
                        0: {
                            stagePadding: 60,
                        },
                        576: {
                            stagePadding: 100,
                        },
                        768: {
                            stagePadding: 150,
                        },
                        992: {
                            stagePadding: 200,
                        },
                        1200: {
                            stagePadding: 250,
                        },
                    },
                });

                $("#carousel .owl-carousel").owlCarousel({
                    loop: true,
                    items: 1,
                    nav: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="13.408" height="24.816" viewBox="0 0 13.408 24.816"><path d="M0,0,11.7,11.7,0,23.4" transform="translate(0.707 0.707)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="13.408" height="24.816" viewBox="0 0 13.408 24.816"><path d="M0,0,11.7,11.7,0,23.4" transform="translate(0.707 0.707)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>',
                    ],
                    autoplay: true,
                    autoplayTimeout: 5000,
                    dots: false,
                    margin: 30,
                    responsive: {
                        768: {
                            items: 2,
                        },
                        992: {
                            items: 3,
                        },
                    },
                    onInitialized: starter.plugin.owl.callback,
                    onResized: starter.plugin.owl.callback,
                    onTranslated: starter.plugin.owl.callback,
                });

                $("#opinions .owl-carousel").owlCarousel({
                    loop: true,
                    items: 1,
                    nav: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="13.408" height="24.816" viewBox="0 0 13.408 24.816"><path d="M0,0,11.7,11.7,0,23.4" transform="translate(0.707 0.707)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="13.408" height="24.816" viewBox="0 0 13.408 24.816"><path d="M0,0,11.7,11.7,0,23.4" transform="translate(0.707 0.707)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>',
                    ],
                    autoplay: true,
                    autoplayTimeout: 10000,
                    dots: false,
                    margin: 30,
                    onInitialized: starter.plugin.owl.callback,
                    onResized: starter.plugin.owl.callback,
                    onTranslated: starter.plugin.owl.callback,
                });
            },

            callback: function () {
                $("#carousel .owl-carousel").find(".owl-item a").attr("tabindex", -1);
                $("#carousel .owl-carousel").find(".owl-item a").attr("aria-disabled", true);
                $("#carousel .owl-carousel").find(".owl-item.active a").removeAttr("tabindex");
                $("#carousel .owl-carousel").find(".owl-item.active a").removeAttr("aria-disabled");
            }
        }
    }


}

