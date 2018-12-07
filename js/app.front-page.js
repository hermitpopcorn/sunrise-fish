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

    $('.trigger-image-modal').each(function (index, i) {
        var img = $(i).find('img');
        var modal = $('#'+$(i).data('target'));
        var modalImg = modal.find('img');
        img.click(function () {
            modal.show();
            modalImg.prop('src', img.prop('src'));
        });

        modal.click(function (event) {
            if($(event.target).prop('id') == modal.prop('id')) {
                modal.hide();
            }
        });

        var span = $(modal.find(".close")[0]);
        span.click(function () {
            modal.hide();
        });
    })

})(jQuery); // End of use strict
