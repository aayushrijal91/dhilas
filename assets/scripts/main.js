// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init();
                $('.bannerServiceSlider').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    
                });

                $('.jobs-slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: false,
                    focusOnSelect: true,
                    asNavFor: $('.jobs-description-slider'),
                });

                $('.jobs-description-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    asNavFor: $('.jobs-slider'),
                });

                AOS.refresh();

                $('.testimonials-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: "0px",
                    autoplay: true,
                });

                AOS.refresh();

                $('.servicesList .service-card').mouseenter(function() {
                    $(this).find('.chronicle').slideUp(100);
                }).mouseleave(function() {
                    $(this).find('.chronicle').slideDown(100);
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});