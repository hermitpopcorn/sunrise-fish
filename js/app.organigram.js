(function($) {
    "use strict"; // Start of use strict

    // Hide all but the first one
    $(".organigram-slider .slider .slide").hide();
    $(".organigram-slider .slider .slide#slide-pimpinan").show();

    var activeSlide = 'pimpinan';
    var switching = false;
    $(".organigram-slider .switcher a").click(function() {
        if(switching) { return false; }

        var toShow = $(this).data('slide-id');
        switching = true;
        $(".organigram-slider .slider #slide-"+activeSlide).fadeOut(300, function() {
            $(".organigram-slider .slider #slide-"+toShow).fadeIn(300, function() {
                activeSlide = toShow; switching = false;
            });
        });
    });

})(jQuery); // End of use strict
