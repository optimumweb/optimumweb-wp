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
                if (typeof html[i] === 'undefined') {
                    clearInterval(interval);
                } else {
                    var char = html[i];
                    $this.html($this.html() + char);
                    $this.append(char);
                    i++;
                    if (char === '<') {
                        for (var j = i; html[j] !== '>'; j++) {
                            char = html[j];
                            $this.html($this.html() + char);
                        }
                        i = j;
                    }
                }
            }, 100);
    });

});
