// scroll to contacts
$("#contacts").click(function() {
    $('html,body').animate({
        scrollTop: $("footer").offset().top},
        'slow');
});
// scroll to contacts
$("#about").click(function() {
    $('html,body').animate({
        scrollTop: $("#to-about").offset().top},
        'slow');
});
