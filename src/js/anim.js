require('waypoints/lib/noframework.waypoints.js')
require('waypoints/lib/shortcuts/inview.min.js')

import anime from 'animejs';







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