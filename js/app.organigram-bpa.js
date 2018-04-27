(function($) {
    "use strict"; // Start of use strict

    $(".organigram-slider .switcher a").click(function() {
        var part = $(this).data('part-id');
        $('html, body').animate({
            scrollTop: $("#part-" + part).offset().top
        }, 300);
    });

})(jQuery); // End of use strict
