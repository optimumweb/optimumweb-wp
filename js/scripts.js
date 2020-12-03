$(document).ready(function() {

    var $window = $(window),
        $html = $('html'),
        $body = $('body'),
        $header = $('#header'),
        $burger = $('#burger'),
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

    $burger.on('click', function (e) {
        e.preventDefault();

        $header.toggleClass('is-open');
    });

    $('.teletype').each(function () {
        var $this = $(this),
            $cursor = $('<span class="cursor"></span>').insertAfter($this);

        $this.teletype({
            text: [ $this.text() ]
        });

        $cursor.teletype({
            text: ['_', ' '],
            delay: 0,
            pause: 500
        });
    });

});
