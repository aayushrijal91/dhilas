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
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                arrows: false,
                                autoplay: true
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                arrows: false,
                                autoplay: true
                            }
                        }
                    ]
                });

                $('.jobs-slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: false,
                    focusOnSelect: true,
                    asNavFor: $('.jobs-description-slider'),
                    responsive: [
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });

                $('.jobs-description-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    asNavFor: $('.jobs-slider'),
                    responsive: [
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });

                AOS.refresh();

                $('.testimonials-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: "0px",
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: "100px",
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: "50px",
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: "0px",
                            }
                        }
                    ]
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