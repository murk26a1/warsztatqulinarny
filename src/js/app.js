import 'bootstrap';

// ************ Hide Header on on scroll down





var btnscroll = 1;

$(".btn-course").first().attr("disabled", true);
$(".btn-course").click(function() {
    btnscroll = 0;
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#section-courses").offset().top
    }, 300);
    var x= $(this);
    setTimeout(function(){ 
        $(".btn-course").attr("disabled", false);
        x.attr("disabled", true);
    }, 300);
    setTimeout(function(){ 
        btnscroll = 1;
    }, 1000);

});









var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.site-header').outerHeight();



$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);


function hasScrolled() {
    var st = $(window).scrollTop();
    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('.site-header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()  && btnscroll == 1) {
            $('.site-header').removeClass('nav-up');
        }
    }
    if (st != 0) {
        $('.site-header').addClass('nav-down');
    } else {
        $('.site-header').removeClass('nav-down');
    }


    lastScrollTop = st;
};

// ************ Hide Header on on scroll down


const menu = document.querySelector('.hamburger');
const nav = document.querySelector('nav');
const body = document.querySelector('body');

menu.addEventListener('click', function () {
    this.classList.toggle('hamburger--active');
    nav.classList.toggle('nav-active');
    body.classList.toggle('dis-scroll');

}, false);




/*


$(document).ready(function () {
    var $element = $('.parallax');
    var $follow = $element.find('.follow');
    var followHeight = $element.find('.follow').outerHeight();
    var height = $element.outerHeight();
    var window_height = $(window).height();

    $(window).scroll(function () {
        var pos = $(window).scrollTop();
        var top = $element.offset().top;



        // Check if element totally above or totally below viewport
        if (top + height - followHeight < pos + (window_height / 2 - followHeight / 2) || top > pos + (window_height / 2 - followHeight / 2)) {
            return;
        }


        var offset = parseInt($(window).scrollTop() - top + (window_height / 2 - followHeight / 2));

        if (offset > 0) {
            $follow.css('transform', 'translateY(' + offset + 'px)');
        }

    });
});
*/

