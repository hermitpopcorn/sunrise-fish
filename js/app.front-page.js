(function($) {
    "use strict"; // Start of use strict

    $('.main-slider').slick({
        arrows: true,
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: false,
        autoplay: true,
        autoplaySpeed: 10000
    });

})(jQuery); // End of use strict
