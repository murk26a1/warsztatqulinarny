require('waypoints/lib/noframework.waypoints.js')
require('waypoints/lib/shortcuts/inview.min.js')

import anime from 'animejs';
// ************ Height change detect
function onElementHeightChange(elm, callback) {
    var lastHeight = elm.clientHeight, newHeight;
    (function run() {
        newHeight = elm.clientHeight;
        if (lastHeight != newHeight)
            callback();
        lastHeight = newHeight;

        if (elm.onElementHeightChangeTimer)
            clearTimeout(elm.onElementHeightChangeTimer);

        elm.onElementHeightChangeTimer = setTimeout(run, 200);
    })();
}



// Just add this code after Waypoints import/inclusion
Waypoint.Inview.prototype.createWaypoints = function () {
    // same as jQuery.outerHeight() function, works for IE9+
    function outerHeight(el) {
        var height = el.offsetHeight;
        var style = getComputedStyle(el);

        height += parseInt(style.marginTop) + parseInt(style.marginBottom);
        return height;
    }

    var configs = {
        vertical: [{
            down: 'enter',
            up: 'exited',
            offset: function () {
                var _offset = this.options.offset && this.options.offset.bottom || 0;
                return this.options.context.innerHeight - _offset;
            }.bind(this)
        }, {
            down: 'entered',
            up: 'exit',
            offset: function () {
                var _offset = this.options.offset && this.options.offset.bottom || 0;
                return this.options.context.innerHeight - outerHeight(this.element) - _offset;
            }.bind(this)
        }, {
            down: 'exit',
            up: 'entered',
            offset: function () {
                var _offset = this.options.offset && this.options.offset.top || 0;
                return _offset;
            }.bind(this)
        }, {
            down: 'exited',
            up: 'enter',
            offset: function () {
                var _offset = this.options.offset && this.options.offset.top || 0;
                return _offset - outerHeight(this.element);
            }.bind(this)
        }],
        horizontal: [{
            right: 'enter',
            left: 'exited',
            offset: '100%'
        }, {
            right: 'entered',
            left: 'exit',
            offset: 'right-in-view'
        }, {
            right: 'exit',
            left: 'entered',
            offset: 0
        }, {
            right: 'exited',
            left: 'enter',
            offset: function () {
                return -this.adapter.outerWidth()
            }
        }]
    };

    for (var i = 0, end = configs[this.axis].length; i < end; i++) {
        var config = configs[this.axis][i]
        this.createWaypoint(config)
    }
};





//home

/*
if (document.getElementById('section-about')) {

    $('#section-about .wrapper').addClass('anim-left');
    $('#section-about .photos').addClass('anim-left');
    $('#section-about .single-btn').addClass('opacity0');

    var waypoint = new Waypoint.Inview({
        element: document.getElementById('section-about'),
        enter: function () {
            $('#section-about .wrapper').removeClass('anim-left');
            $('#section-about .wrapper').addClass('anim-left-s');
            $('#section-about .single-btn').removeClass('opacity0 delay15');
            $('#section-about .single-btn').addClass('opacity1 delay15');
            $('#section-about .photos').removeClass('anim-left delay1');
            $('#section-about .photos').addClass('anim-left-s delay1');
        },
        exited: function () {
            $('#section-about .wrapper').removeClass('anim-left-s');
            $('#section-about .wrapper').addClass('anim-left');
            $('#section-about .single-btn').removeClass('opacity1 delay15');
            $('#section-about .single-btn').addClass('opacity0 delay15');
            $('#section-about .photos').removeClass('anim-left-s delay1');
            $('#section-about .photos').addClass('anim-left delay1');
        },
        offset: {
            top: 400,
            bottom: 400
        }
    })

};

*/

if (document.getElementById('section-banner')) {
    $(window).on('load', function () {
        $('#section-banner .food1').addClass('b-fadeInRight');
        $('#section-banner .food2').addClass('b-fadeInLeft');
        var waypoint = new Waypoint.Inview({
            element: document.getElementById('section-banner'),
            enter: function () {
                $('#section-banner .food1').addClass('b-fadeInRight-a');
                $('#section-banner .food2').addClass('b-fadeInLeft-a');
                
            },
            exited: function () {
                $('#section-banner .food1').removeClass('b-fadeInRight-a');
                $('#section-banner .food2').removeClass('b-fadeInLeft-a');
                
            },
            offset: {
                top: 400,
                bottom: 400
            }
        })
    })
};


if (document.getElementById('section-about')) {

    $('#section-about .wrapper').addClass('fadeInUp');
    $('#section-about .photos').addClass('fadeInUp');

    var waypoint = new Waypoint.Inview({
        element: document.getElementById('section-about'),
        enter: function () {
            $('#section-about .wrapper').addClass('fadeInUp-a');
            $('#section-about .photos').addClass('fadeInUp-a');
        },
        exited: function () {
            // $('#section-about .wrapper').removeClass('fadeInUp-a');
            //  $('#section-about .photos').removeClass('fadeInUp-a');
        },
        offset: {
            top: 400,
            bottom: 400
        }
    })

};

if (document.getElementById('section-courses')) {

    $('#section-courses .card-body').addClass('fadeInUp');

    var waypoint = new Waypoint.Inview({
        element: document.getElementById('section-courses'),
        enter: function () {
            $('#section-courses .card-body').addClass('fadeInUp-a');
        },
        exited: function () {
            //  $('#section-courses .card-body').removeClass('fadeInUp-a');
        },
        offset: {
            top: 400,
            bottom: 400
        }
    })

};

if (document.getElementById('section-course-info')) {

    $('#section-course-info').addClass('fadeInUp');

    var waypoint = new Waypoint.Inview({
        element: document.getElementById('section-course-info'),
        enter: function () {
            $('#section-course-info').addClass('fadeInUp-a');
        },
        exited: function () {
            //  $('#section-courses .card-body').removeClass('fadeInUp-a');
        },
        offset: {
            top: 400,
            bottom: 400
        }
    })

};

if (document.getElementById('section-course-program')) {

    $('#section-course-program .row').addClass('fadeInUp');

    var waypoint = new Waypoint.Inview({
        element: document.getElementById('section-course-program'),
        enter: function () {
            $('#section-course-program .row').addClass('fadeInUp-a');

        },
        exited: function () {
            //  $('#section-courses .card-body').removeClass('fadeInUp-a');
        },
        offset: {
            top: 400,
            bottom: 400
        }
    })

};

if (document.getElementById('section-courses-t')) {

    $('#section-courses-t .wrapper').addClass('fadeInUp');
    let el = document.getElementById('section-courses-t').getElementsByClassName('wrapper');
    for (let i = 0; i < el.length; i++) {




        var waypoint = new Waypoint.Inview({
            element: el[i],
            enter: function () {
                $(el[i]).addClass('fadeInUp-a');
            },
            exited: function () {
                //  $('#section-courses-t .wrapper').removeClass('fadeInUp-a');
            },
            offset: {
                top: 200,
                bottom: 200
            }
        })

    }

};

if (document.getElementsByClassName('header')) {

    $('.header').addClass('anim-clip');
    let el = document.getElementsByClassName('header');
    for (let i = 0; i < el.length; i++) {




        var waypoint = new Waypoint.Inview({
            element: el[i],
            enter: function () {
                $(el[i]).addClass('anim-clip-a');
            },
            exited: function () {
                //  $('#section-courses-t .wrapper').removeClass('fadeInUp-a');
            },
            offset: {
                top: 200,
                bottom: 200
            }
        })

    }

};

if (document.getElementById('section-black-bg')) {

    $('#section-black-bg .offset-md-6').addClass('fadeInUp');

    var waypoint = new Waypoint.Inview({
        element: document.getElementById('section-black-bg'),
        enter: function () {
            $('#section-black-bg .offset-md-6').addClass('fadeInUp-a');
        },
        offset: {
            top: 400,
            bottom: 400
        }
    })

};

if (document.getElementById('section-faq')) {
    $('#section-faq .card').addClass('fadeInUp');
    let el = document.getElementById('section-faq').getElementsByClassName('card');
    for (let i = 0; i < el.length; i++) {




        var waypoint = new Waypoint.Inview({
            element: el[i],
            enter: function () {
                $(el[i]).addClass('fadeInUp-a');
            },
            exited: function () {
                //  $('#section-courses-t .wrapper').removeClass('fadeInUp-a');
            },
            offset: {
                top: 200,
                bottom: 200
            }
        })

    }

};

if (document.getElementById('section-cert')) {

    $('#section-cert .cert').addClass('fadeInUp');
    let el = document.getElementById('section-cert').getElementsByClassName('cert');
    for (let i = 0; i < el.length; i++) {




        var waypoint = new Waypoint.Inview({
            element: el[i],
            enter: function () {
                $(el[i]).addClass('fadeInUp-a');
            },
            exited: function () {
                //  $('#section-courses-t .wrapper').removeClass('fadeInUp-a');
            },
            offset: {
                top: 200,
                bottom: 200
            }
        })

    }

};



onElementHeightChange(document.body, function () {
    Waypoint.refreshAll();
});