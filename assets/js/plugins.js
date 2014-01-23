$.fn.shadowify = function(){
    var $obj = $(this);
    $(window).scroll(function(event){
        if ($obj.offset().top !== 45){
            if (!$obj.hasClass('shadow')){
                $obj.addClass('shadow');
            }
        } else {
            $obj.removeClass('shadow');
        }
    });
};

$.fn.windowify = function(){
    var _pattern = new RegExp(window.location.host);
    $(this).each(function(){
        var $obj = $(this);
        var _href = $obj.attr("href");
        if (!_pattern.test(_href) && typeof(_href) != "undefined") {
            $obj.click(function(event){
                event.preventDefault();
                event.stopPropagation();
                window.open(_href, '_blank');
            });
        }
    });
};