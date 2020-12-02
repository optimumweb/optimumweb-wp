$(document).ready(function() {

    var $window = $(window),
        $html = $('html'),
        $body = $('body'),
        $header = $('#header'),
        $menuBurger = $('#menu-burger'),
        $mainNav = $('#main-nav'),
        $headerCtaNav = $('#header-cta-nav');

    if (typeof AOS === 'object') {
        AOS.init({
            once: true,
            duration: 800,
            delay: 100
        });
    }

    $window.on('scroll resize check-scroll', function () {

        $window.scrollTop() > 0 ? $html.addClass('is-scrolled') : $html.removeClass('is-scrolled');

    }).trigger('check-scroll');

    $menuBurger.on('click', function (e) {
        e.preventDefault();

        $mainNav.toggle();
        $headerCtaNav.toggle();
    });

});
