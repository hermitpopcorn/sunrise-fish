(function($) {
    "use strict"; // Start of use strict

    var mail_user = "unpadhimade";
    var mail_host = "gmail.com";
    $('#email').text($('#email').text() + ": " + mail_user + "@" + mail_host);
    $('#email').prop('href', "mailto:" + mail_user + "@" + mail_host);

})(jQuery); // End of use strict
