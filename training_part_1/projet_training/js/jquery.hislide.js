(function($) {

    var slide = function(ele,options) {
        var $ele = $(ele);
        var setting = {
            speed: 1000,

            interval: 2000,
            
        };

        $.extend(true, setting, options);

        var states = [
            { $zIndex: 1, width: 260, height: 320, top: 110, left: 134, $opacity: 0.2 },
            { $zIndex: 2, width: 280, height: 360, top: 135, left: 0, $opacity: 0.4 },
            { $zIndex: 3, width: 400, height: 476, top: 75, left: 130, $opacity: 0.7 },
            { $zIndex: 4, width: 508, height: 656, top: 0, left: 340, $opacity: 1 },
            { $zIndex: 3, width: 400, height: 476, top: 75, left: 650, $opacity: 0.7 },
            { $zIndex: 2, width: 280, height: 360, top: 135, left: 920, $opacity: 0.4 },
            { $zIndex: 1, width: 260, height: 320, top: 110, left: 500, $opacity: 0.2 }
        ];

        var $lis = $ele.find('li');
        var timer = null;

        
        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        move();
     

        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

        function next() {
            states.unshift(states.pop());
            move();
        }

    }

    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });

        return this;
    }
})(jQuery);
