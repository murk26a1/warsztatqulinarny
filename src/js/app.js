import 'bootstrap';

$(window).on('load', function () { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({ 'overflow': 'visible' });
})


// ************ Resize detect
var resizeTimer;
const menu_szkolenia_link = document.querySelector('.menu_szkolenia_link');
var url_szkolenia = menu_szkolenia_link.href;
var screen = $(window);
screen_check();
$(window).resize(function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(screen_check, 100);
});




function screen_check() {
    screen = $(window);
    if (screen.width() < 1200) {
        menu_szkolenia_link.href = '#';
    } else {
        menu_szkolenia_link.href = url_szkolenia;
    }
}


var btnscroll = 1;

$(".btn-course").first().attr("disabled", true);
$(".btn-course").click(function () {
    btnscroll = 0;
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#section-courses").offset().top
    }, 300);
    var x = $(this);
    setTimeout(function () {
        $(".btn-course").attr("disabled", false);
        x.attr("disabled", true);
    }, 300);
    setTimeout(function () {
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
        if (st + $(window).height() < $(document).height() && btnscroll == 1) {
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
const menu_szkolenia = document.querySelector('.menu_szkolenia');
const menu_szkolenia_ul = document.querySelector('.menu_szkolenia ul');
const nav = document.querySelector('nav');
const body = document.querySelector('body');
const social = document.querySelector('.social');
let show_szkolenia = false;

menu.addEventListener('click', function () {
    this.classList.toggle('hamburger--active');
    nav.classList.toggle('nav-active');
    body.classList.toggle('dis-scroll');

}, false);





menu_szkolenia.addEventListener('click', function () {
    if (screen.width() < 1200) {

        if (!show_szkolenia) {
            $('.menu_li').addClass('nav-display');
            menu_szkolenia_link.innerHTML = "<--";
            menu_szkolenia_ul.classList.add('szkolenia-active');
            social.classList.add('d-none');
            show_szkolenia = true;
        } else {
            $('.menu_li').removeClass('nav-display');
            menu_szkolenia_link.innerHTML = "SZKOLENIA";
            menu_szkolenia_ul.classList.remove('szkolenia-active');
            social.classList.remove('d-none');
            show_szkolenia = false;
        }
    }
}, false);

menu_szkolenia.addEventListener('mouseover', function () {
    if (screen.width() >= 1200) {
        menu_szkolenia_ul.classList.add('szkolenia-active');
    }
}, false);

menu_szkolenia_ul.addEventListener('mouseleave', function () {
    if (screen.width() >= 1200) {
        menu_szkolenia_ul.classList.remove('szkolenia-active');
    }
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


$(document).ready(function () {
    var $element = $('.parallax');
    if ($element.length != 0) {

        var $follow = $element.find('.follow');
        var followHeight = $element.find('.follow').outerHeight();
        var height = $element.outerHeight();
        var window_height = $(window).height();

        $(window).scroll(function () {
            if (screen.width() >= 992) {

                var pos = $(window).scrollTop();
                var top = $element.offset().top;



                // Check if element totally above or totally below viewport
                if (top + height - followHeight < pos + 100 || top > pos + 100) {
                    return;
                }


                var offset = parseInt($(window).scrollTop() - top + 100);

                if (offset > 0) {
                    $follow.css('transform', 'translateY(' + offset + 'px)');
                }
            }
        });
    }

});

if (document.querySelector('.header_contact_btn')) {

    const header_contact_btn = document.querySelector('.header_contact_btn');
    const header_contact_btn_close = document.querySelector('.fa-window-close');

    header_contact_btn.addEventListener('click', function () {

        $('.header-contact').addClass('header-contact-active');


    });
    header_contact_btn_close.addEventListener('click', function () {
        $('.header-contact').removeClass('header-contact-active');
    });
}