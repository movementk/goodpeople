// aside nav menu
(function($){
    $(document).on('click', '.nav > ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
    $(document).on('click', '.nav > ul > li > ul > li > a', function() {
        if ($(this).parent().hasClass('on')) {
            $(this).parent().removeClass('on');
        } else {
            $(this).parent().siblings('.on').removeClass('on');
            $(this).parent().addClass('on');
        }
    });
})(jQuery);