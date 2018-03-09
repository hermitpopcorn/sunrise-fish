(function($) {
    "use strict"; // Start of use strict

    $('.main-slider').slick({
        arrows: true,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false,
        autoplay: true,
        autoplaySpeed: 5000
    });

})(jQuery); // End of use strict
