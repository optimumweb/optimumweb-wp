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

        var $content = $('<span class="typed-content"></span>').appendTo($this),
            $cursor = $('<span class="typed-cursor blining">_</span>').appendTo($this);

        var i = 0,
            interval = setInterval(function () {
                var char = html[i];
                if (typeof char === 'undefined') {
                    clearInterval(interval);
                } else {
                    if (char === '|') {
                        char = '<br />';
                    }
                    $content.html($content.html() + char);
                    i++;
                }
            }, 100);
    });

});
