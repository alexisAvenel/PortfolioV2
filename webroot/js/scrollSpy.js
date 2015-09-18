jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 *
 * Open source under the BSD License.
 *
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list
 * of conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 *
 * Neither the name of the author nor the names of contributors may be used to endorse
 * or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 */;    // Custom Easing
    jQuery.extend( jQuery.easing,
    {
      easeInOutMaterial: function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t + b;
        return c/4*((t-=2)*t*t + 2) + b;
      }
    });

;

/**
 * Extend jquery with a scrollspy plugin.
 * This watches the window scroll and fires events when elements are scrolled into viewport.
 *
 * throttle() and getTime() taken from Underscore.js
 * https://github.com/jashkenas/underscore
 *
 * @author Copyright 2013 John Smart
 * @license https://raw.github.com/thesmart/jquery-scrollspy/master/LICENSE
 * @see https://github.com/thesmart
 * @version 0.1.2
 */ (function ($) {

    //var jWindow = $(window);
    var elements = [];
    var elementsInView = [];
    var isSpying = false;
    var ticks = 0;
    var unique_id = 1;
    var offset = {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0,
    }

    /**
     * Find elements that are within the boundary
     * @param {number} top
     * @param {number} right
     * @param {number} bottom
     * @param {number} left
     * @return {jQuery}     A collection of elements
     */
        function findElements(top, right, bottom, left) {
            var hits = $();
            $.each(elements, function (i, element) {
                if (element.height() > 0) {
                    /* MOD START */
                    var elTop = element.offset().top,
                     elLeft = element.offset().left,
                     //var elTop = element.position().top,
                     // elLeft = element.position().left,
                    //var elTop = jWindow.scrollTop() + element.offset().top,
                     //   elLeft = jWindow.scrollTop() + element.offset().left,
                        /* MOD END */
                        elRight = elLeft + element.width(),
                        elBottom = elTop + element.height();
                    console.log('Scrollable Bottom: ' + bottom + ' Top: ' + top);
                    console.log(element.attr('id') + ' Bottom: ' + elBottom + ' Top: ' + elTop);
                    //console.log('Bottom of scrollable: ' + bottom + ' Top of ' + element.attr('id') + ': ' + elTop);
                    //console.log('Top of scrollable: ' + top + ' Bottom of ' + element.attr('id') + ': ' + elBottom);

                    var isIntersect = !(elLeft > right || elRight < left || elTop > bottom || elBottom < top);

                    if (isIntersect) {
                        hits.push(element);
                    }
                }
            });

            return hits;
        }


        /**
         * Called when the user scrolls the window
         */
        function onScroll() {
            // unique tick id
            ++ticks;

            // viewport rectangle
            //var top = jWindow.scrollTop(),
            var top = jWindow.offset() ? jWindow.offset().top : jWindow.scrollTop(),
                left = jWindow.scrollLeft(),
                right = left + jWindow.width(),
                bottom = top + jWindow.height();
                //bottom = jWindow.height();

            // determine which elements are in view
            //        + 60 accounts for fixed nav
            /* MOD START */
            // var intersections = findElements(top+offset.top + 200, right+offset.right, bottom+offset.bottom, left+offset.left);
            var intersections = findElements(top + offset.top, right + offset.right, bottom + offset.bottom, left + offset.left);
            //var intersections = findElements(top, right, bottom, left);
            /* MOD END */
            $.each(intersections, function (i, element) {

                var lastTick = element.data('scrollSpy:ticks');
                if (typeof lastTick != 'number') {
                    // entered into view
                    element.triggerHandler('scrollSpy:enter');
                }

                // update tick id
                element.data('scrollSpy:ticks', ticks);
            });

            // determine which elements are no longer in view
            $.each(elementsInView, function (i, element) {
                var lastTick = element.data('scrollSpy:ticks');
                if (typeof lastTick == 'number' && lastTick !== ticks) {
                    // exited from view
                    element.triggerHandler('scrollSpy:exit');
                    element.data('scrollSpy:ticks', null);
                }
            });

            // remember elements in view for next tick
            elementsInView = intersections;
        }

        /**
         * Called when window is resized
         */
        function onWinSize() {
            jWindow.trigger('scrollSpy:winSize');
        }

        /**
         * Get time in ms
         * @license https://raw.github.com/jashkenas/underscore/master/LICENSE
         * @type {function}
         * @return {number}
         */
    var getTime = (Date.now || function () {
        return new Date().getTime();
    });

    /**
     * Returns a function, that, when invoked, will only be triggered at most once
     * during a given window of time. Normally, the throttled function will run
     * as much as it can, without ever going more than once per `wait` duration;
     * but if you'd like to disable the execution on the leading edge, pass
     * `{leading: false}`. To disable execution on the trailing edge, ditto.
     * @license https://raw.github.com/jashkenas/underscore/master/LICENSE
     * @param {function} func
     * @param {number} wait
     * @param {Object=} options
     * @returns {Function}
     */
    function throttle(func, wait, options) {
        var context, args, result;
        var timeout = null;
        var previous = 0;
        options || (options = {});
        var later = function () {
            previous = options.leading === false ? 0 : getTime();
            timeout = null;
            result = func.apply(context, args);
            context = args = null;
        };
        return function () {
            var now = getTime();
            if (!previous && options.leading === false) previous = now;
            var remaining = wait - (now - previous);
            context = this;
            args = arguments;
            if (remaining <= 0) {
                clearTimeout(timeout);
                timeout = null;
                previous = now;
                result = func.apply(context, args);
                context = args = null;
            } else if (!timeout && options.trailing !== false) {
                timeout = setTimeout(later, remaining);
            }
            return result;
        };
    };

    /**
     * Enables ScrollSpy using a selector
     * @param {jQuery|string} selector  The elements collection, or a selector
     * @param {Object=} options Optional.
        throttle : number -> scrollspy throttling. Default: 100 ms
        offsetTop : number -> offset from top. Default: 0
        offsetRight : number -> offset from right. Default: 0
        offsetBottom : number -> offset from bottom. Default: 0
        offsetLeft : number -> offset from left. Default: 0
     * @returns {jQuery}
     */
    $.scrollSpy = function (selector, options) {
        /* MOD START */
        jWindow = $(options.scrollParent).first();
        /* MOD END */
        var visible = [];
        selector = $(selector);
        selector.each(function (i, element) {
            elements.push($(element));
            $(element).data("scrollSpy:id", i);
            // Smooth scroll to section
            $('a[href=#' + $(element).attr('id') + ']').click(function (e) {
                e.preventDefault();
                /* MOD START */
                //var top = jWindow.offset() ? jWindow.offset().top : jWindow.scrollTop()
                
                //console.log(this.hash + ' offset: ' + offset);

                //          offset - 200 allows elements near bottom of page to scroll

                //$('html, body').animate({ scrollTop: offset - 200 }, {duration: 400, easing: 'easeOutCubic'});
                if (options.scrollParent == window) {
                   var offset = $(this.hash).position().top + 1;
                   $('html, body').animate({
                        scrollTop: offset
                    }, {
                        duration: 1000,
                        easing: 'easeOutCubic'
                    });
                } else {
                    var offset = $(this.hash).position().top - jWindow.offset().top + 1;
                    jWindow.animate({
                        scrollTop: jWindow.scrollTop() + offset
                    }, {
                        duration: 1000,
                        easing: 'easeOutCubic'
                    });
                }
                /* MOD END */

            });
        });
        options = options || {
            throttle: 100
        };

        offset.top = options.offsetTop || 0;
        offset.right = options.offsetRight || 0;
        offset.bottom = options.offsetBottom || 0;
        offset.left = options.offsetLeft || 0;

        var throttledScroll = throttle(onScroll, options.throttle || 100);
        var readyScroll = function () {
            $(document).ready(throttledScroll);
        };

        if (!isSpying) {
            jWindow.on('scroll', readyScroll);
            jWindow.on('resize', readyScroll);
            isSpying = true;
        }

        // perform a scan once, after current execution context, and after dom is ready
        setTimeout(readyScroll, 0);


        selector.on('scrollSpy:enter', function () {
            visible = $.grep(visible, function (value) {
                return value.height() != 0;
            });

            var $this = $(this);

            if (visible[0]) {
                $('a[href=#' + visible[0].attr('id') + ']').removeClass('active');
                if ($this.data('scrollSpy:id') < visible[0].data('scrollSpy:id')) {
                    visible.unshift($(this));
                } else {
                    visible.push($(this));
                }
            } else {
                visible.push($(this));
            }


            $('a[href=#' + visible[0].attr('id') + ']').addClass('active');
        });
        selector.on('scrollSpy:exit', function () {
            visible = $.grep(visible, function (value) {
                return value.height() != 0;
            });

            if (visible[0]) {
                $('a[href=#' + visible[0].attr('id') + ']').removeClass('active');
                var $this = $(this);
                visible = $.grep(visible, function (value) {
                    return value.attr('id') != $this.attr('id');
                });
                if (visible[0]) { // Check if empty
                    $('a[href=#' + visible[0].attr('id') + ']').addClass('active');
                }
            }
        });

        return selector;
    };     
     /**
	 * Listen for window resize events
	 * @param {Object=} options						Optional. Set { throttle: number } to change throttling. Default: 100 ms
	 * @returns {jQuery}		$(window)
	 */
	$.winSizeSpy = function(options) {
		$.winSizeSpy = function() { return jWindow; }; // lock from multiple calls
		options = options || {
			throttle: 100
		};
		return jWindow.on('resize', throttle(onWinSize, options.throttle || 100));
	};

	/**
	 * Enables ScrollSpy on a collection of elements
	 * e.g. $('.scrollSpy').scrollSpy()
	 * @param {Object=} options	Optional.
											throttle : number -> scrollspy throttling. Default: 100 ms
											offsetTop : number -> offset from top. Default: 0
											offsetRight : number -> offset from right. Default: 0
											offsetBottom : number -> offset from bottom. Default: 0
											offsetLeft : number -> offset from left. Default: 0
	 * @returns {jQuery}
	 */
	$.fn.scrollSpy = function(options) {
		return $.scrollSpy($(this), options);
	};

})(jQuery);