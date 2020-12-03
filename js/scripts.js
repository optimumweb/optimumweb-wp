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

});

$(window).load(function () {
    $('.typed').each(function () {
        var $this = $(this),
            html = $this.html();

        $this.text('');

        var $content = $('<span class="typed-content"></span>').appendTo($this),
            $cursor = $('<span class="typed-cursor blinking">|</span>').appendTo($this);

        var i = 0, char, sleepTime;

        while (typeof html[i] !== 'undefined') {
            char = html[i];
            sleepTime = 100;

            if (char === '|') {
                char = '<br />';
                sleepTime = 500;
            }

            sleep(sleepTime);

            $content.append(char);

            i++;
        }
    });
});

function sleep(ms)
{
    if (typeof ms === 'number') {
        var currentTime = new Date().getTime();
        while ( currentTime + ms >= new Date().getTime() ) {}
    }
}
