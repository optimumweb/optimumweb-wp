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

    $('.typed').each(function () {
        var $this = $(this),
            html = $this.html();

        $this.text('');

        var i = 0,
            interval = setInterval(function () {
                var char = html[i];
                if (typeof char === 'undefined') {
                    clearInterval(interval);
                } else {
                    if (char === '|') {
                        char = '<br />';
                    }
                    $this.html($this.html() + char);
                    i++;
                }
            }, 100);
    });

});
