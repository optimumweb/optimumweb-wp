$(document).ready(function() {

    var $window = $(window),
        $html = $('html'),
        $body = $('body');

    $window.on('scroll resize check-scroll', function () {

        $window.scrollTop() > 0 ? $html.addClass('is-scrolled') : $html.removeClass('is-scrolled');

    }).trigger('check-scroll');

});
