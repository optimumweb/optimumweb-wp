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
            html = $this.html().trim();

        $this.html('');

        var $content = $('<span class="typed-content"></span>').appendTo($this),
            $cursor = $('<span class="typed-cursor blinking">|</span>').appendTo($this);

        var i = 0, char, skip = 0;

        var interval = setInterval(function () {
            if (skip === 0) {
                char = html[i];

                if (typeof char === 'undefined') {
                    clearInterval(interval);
                } else if (char === '|') {
                    char = '<br />';
                    skip = 10;
                }

                $content.append(char);

                i++;
            } else {
                skip--;
            }
        }, 150);
    });

});
