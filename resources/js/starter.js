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
        error: []
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

            $(document).on("click", "button.button-uploads", function () {
                $(this).closest('.field').find("input[type=file]").trigger("click");
            });

            $(document).on('click', '#form .submit', function () {
                $('#form form#save').submit();
                return false;
            });

            $(document).on('click', '#form input[name=legal_all]', function () {
                this.checked === true
                    ? $(".checkbox").each(function () {
                        this.checked = true;
                    })
                    : $(".checkbox").each(function () {
                        this.checked = false;
                    });
            });

            $(document).on('click', '#contact a.send', function () {
                $(this).closest('form').submit();
                return false;
            });
        },

        onChange: function () {
            $(document).on('change', '.input, .textarea, .checkbox, .file', function (event) {
                const item = $(this);
                const name = $(this).attr('name');
                const valid = starter.form.validate(item, event);

                if (valid !== true) {
                    $(`.error-${name}`).text(valid).closest('.field').addClass('has-error');
                    starter._var.error[name] = valid;
                } else {
                    $(`.error-${name}`).text('').closest('.field').removeClass('has-error');
                    delete starter._var.error[name];

                    if (item.hasClass('upload-file')) {
                        const fileUpload = item[0].files[0];
                        const fieldId = item.attr('id');
                        const errorDiv = $(`.error-${fieldId}`);

                        errorDiv.text('');

                        if (fileUpload) {
                            let reader = new FileReader();

                            reader.onload = function (event) {
                                if (item.hasClass('upload-image')) {
                                    $(`#${fieldId}_thumb`).attr('src', event.target.result).parent().removeClass('hidden').next().addClass('hidden');
                                }
                            }
                            reader.readAsDataURL(fileUpload);
                        }
                    }
                }
            });

            $(document).on('change', 'select#whence', function (event) {
                $(this).find('option:selected').val() === 'inne' ? $('.whence-other').show() : $('.whence-other').hide();
            });
        },

        onInputs: function () {

        },

        onSubmit: function () {
            $(document).on('submit', '#contact form', function () {
                // $('.input, .textarea, .checkbox, .file').trigger('change');

                console.log(starter._var.error);

                if (Object.keys(starter._var.error).length === 0) {

                    const fields = starter.form.getFields($(this).closest('form'));
                    const url = $(this).closest('form').attr('action');

                    axios({
                        method: 'post', url: url, headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }, data: fields,
                    }).then(function (response) {
                        $('#contact h3').html(response.data.results.message);
                        $('#contact form').hide();
                    }).catch(function (error) {
                        $(`.error-post`).text('');

                        if (error.response) {
                            Object.keys(error.response.data.errors).map((item) => {
                                $(`.error-${item}`).text(error.response.data.errors[item][0]);
                            });
                        } else if (error.request) {
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                    });

                } else {
                    $('.error-post').text('');
                    for (let key in starter._var.error) {
                        if (starter._var.error.hasOwnProperty(key)) {
                            let value = starter._var.error[key];
                            $('.error-' + key).text(value).closest('.field').addClass('has-error');
                        }
                    }
                }

                return false;
            });

            $(document).on('submit', '#form form', function () {
                $('.input, .textarea, .checkbox, .file').trigger('change');

                if (Object.keys(starter._var.error).length === 0) {
                    const fields = starter.form.getFields($(this).closest('form'));
                    const url = $(this).closest('form').attr('action');
                    const formData = new FormData();

                    for (const field in fields) {
                        formData.append(field, fields[field]);
                    }

                    axios({
                        method: 'post', url: url, headers: {
                            'content-type': 'multipart/form-data',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }, data: formData,
                    }).then(function (response) {
                        window.location = response.data.results.url;
                    }).catch(function (error) {
                        $(`.error-post`).text('');
                        if (error.response) {
                            Object.keys(error.response.data.errors).map((item) => {
                                $(`.error-${item}`).text(error.response.data.errors[item][0]);
                            });
                        } else if (error.request) {
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                    });
                } else {
                    $('.error-post').text('');
                    for (let key in starter._var.error) {
                        if (starter._var.error.hasOwnProperty(key)) {
                            let value = starter._var.error[key];
                            $('.error-' + key).text(value);
                        }
                    }
                }

                return false;
            });
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
            const navbarCollapse = $(".navbar-collapse");
            navbarCollapse.on("shown.bs.collapse", function () {
                $(".navbar-toggler").blur();
            });
            navbarCollapse.on("hidden.bs.collapse", function () {
                $(".navbar-toggler").blur();
            });
        }
    },

    form: {
        getFields: function ($form) {
            const inputs = $form.find('.input');
            const textareas = $form.find('.textarea');
            const checkboxes = $form.find('.checkbox');
            const files = $form.find('.file');
            const fields = {};

            $.each(inputs, function (index, item) {
                fields[$(item).attr('name')] = $(item).val();
            });

            $.each(textareas, function (index, item) {
                fields[$(item).attr('name')] = $(item).val();
            });

            $.each(checkboxes, function (index, item) {
                if ($(item).prop('checked')) {
                    fields[$(item).attr('name')] = $(item).val();
                }
            });

            $.each(files, function (index, item) {
                if (item.files[0]) {
                    fields[$(item).attr('name')] = item.files[0];
                }
            })

            fields['_token'] = $form.find('input[name=_token]').val();

            return fields;
        },

        validate: function (item, event) {
            const value = (item.hasClass('select') && item.find('option:selected').hasClass('selected')) ? '' : item.val().trim();
            const name = item.attr('name');

            const isOtherWhence = $('select#whence option:selected').val() === 'inne' ? 1 : 0;

            switch (name) {
                case 'name':
                    return starter.form.validator.isName(value, 'Imię i nazwisko');
                case 'street':
                    return starter.form.validator.isContent(value, 'Adres');
                case 'flat':
                    return starter.form.validator.isFlat(value, 'Numer mieszkania');
                case 'city':
                    return starter.form.validator.isName(value, 'Miejscowość');
                case 'zip':
                    return starter.form.validator.isZip(value, 'Miejscowość');
                case 'phone':
                    return starter.form.validator.isPhone(value, 'Telefon');
                case 'email':
                    return starter.form.validator.isEmail(value, 'E-mail');
                case 'purchase':
                    return starter.form.validator.isRequire(value, 'to');
                case 'whence':
                    return starter.form.validator.isRequire(value, 'to');
                case 'whence_other':
                    return isOtherWhence ? starter.form.validator.isName(value, 'to') : true;
                case 'img_receipt':
                    return starter.form.validator.isFile(item, 'Zdjęcie paragonu');
                case 'img_ean':
                    return starter.form.validator.isFile(item, 'Zdjęcie kodu EAN');
                case 'img_box':
                    return starter.form.validator.isFile(item, 'Zdjęcie pudełka');
                case 'message':
                    return starter.form.validator.isMessage(value, 'Treść wiadomości');
                case 'legal_1':
                case 'legal_2':
                case 'legal_3':
                    return starter.form.validator.isLegal(item);
                default:
                    return true;
            }
        },

        validator: {
            isName: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length < 3 || value.length > 128) {
                    return `Pole ${name} musi mieć od 3 do 128 znaków.`;
                } else if (!/^[\p{L}\s-]+$/u.test(value)) {
                    return `Pole ${name} może zawierać tylko litery.`;
                } else {
                    return true;
                }
            },
            isZip: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (!/^[0-9]{2}-[0-9]{3}$/.test(value)) {
                    return 'Wprowadź poprawny kod pocztowy.';
                } else {
                    return true;
                }
            },
            isPhone: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (!/^\+48(\s)?([1-9]\d{8}|[1-9]\d{2}\s\d{3}\s\d{3}|[1-9]\d{1}\s\d{3}\s\d{2}\s\d{2}|[1-9]\d{1}\s\d{2}\s\d{3}\s\d{2}|[1-9]\d{1}\s\d{2}\s\d{2}\s\d{3}|[1-9]\d{1}\s\d{4}\s\d{2}|[1-9]\d{2}\s\d{2}\s\d{2}\s\d{2}|[1-9]\d{2}\s\d{3}\s\d{2}|[1-9]\d{2}\s\d{4})$/.test(value)) {
                    return 'Wprowadź poprawny numer telefonu.';
                } else {
                    return true;
                }
            },
            isEmail: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length > 255) {
                    return `Pole ${name} może mieć maksymalnie 255 znaków.`;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                    return 'Wprowadź poprawny adres email.';
                } else {
                    return true;
                }
            },
            isFlat: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length > 16) {
                    return `Pole ${name} może mieć maksymalnie 255 znaków.`;
                } else {
                    return true;
                }
            },
            isLegal: (item) => {
                if (item.val() === "") {
                    return `Pole jest wymagane.`;
                } else if (!item.prop('checked')) {
                    return `Pole jest wymagane.`;
                } else {
                    return true;
                }
            },
            isFile: (file, name) => {
                const extension = file[0]?.files[0]?.name.split('.').pop().toLowerCase();
                if (file[0].files.length === 0) {
                    return `Pole ${name} jest wymagane.`;
                } else if (file[0].files[0].size > 4 * 1024 * 1024) {
                    return `Rozmiar pliku nie może przekraczać 4 MB`;
                } else if (['jpg', 'jpeg', 'png'].indexOf(extension) === -1) {
                    return `Można wybrać tylko pliki graficzne JPG, JPEG lub PNG`;
                } else {
                    return true;
                }
            },
            isContent: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length > 128) {
                    return `Pole ${name} może mieć maksymalnie 128 znaków.`;
                } else {
                    return true;
                }
            },
            isRequire: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else {
                    return true;
                }
            },
            isMessage: (value, name) => {
                if (value === "") {
                    return `Pole ${name} jest wymagane.`;
                } else if (value.length < 3 || value.length > 4096) {
                    return `Pole ${name} musi mieć od 3 do 4096 znaków.`;
                } else {
                    return true;
                }
            },
        },

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

