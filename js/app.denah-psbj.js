(function($) {
    "use strict";

    $('.hover-item').hover(function () {
        $('.hover-target#target-'+$(this).attr('target')).show();
    }, function () {
        $('.hover-target#target-'+$(this).attr('target')).hide();
    });
})(jQuery);
