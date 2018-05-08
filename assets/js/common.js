(function($){
    // 모바일 태블릿 네비 오픈 버튼 이벤트
    $(document).on('click','.btn-nav', function() {
        $('body').addClass('opened');
        $(this).addClass('btn-close');
    });
    $(document).on('click','.btn-close', function() {
        $('body').removeClass('opened'); 
        $(this).removeClass('btn-close');
    });

    // 모바일 gnb 메뉴 관련
    $(document).on('click', '.depth-1 > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
    $(document).on('click', '.depth-2 > li > a', function() {
        if ($(this).parent().hasClass('on')) {
            $(this).parent().removeClass('on');
        } else {
            $(this).parent().siblings('.on').removeClass('on');
            $(this).parent().addClass('on');
        }
    });

    // 모바일 메뉴 스크롤바 이벤트
    $(window).on("load",function() {
        $("#nav").mCustomScrollbar();
    });

    // 모바일 넓이 클레스 제거
    $(window).on('load resize', function() {
        var conWidth = $('body').width();
        /*console.log(conWidth);*/
        if (conWidth >= 1199) {
            $('body').removeClass("opened");
            $('.nav-btn-area > .btn-nav').removeClass("btn-close");
        }
    });

    // 웹 gnb 메뉴 관련
    $(document).on('mouseenter focus', '#gnb > ul > li > a', function() {
        if ($(this).siblings('div').length > 0) {
            $(this).parent().siblings().removeClass('active');
            $(this).parent().addClass('active');
        }
    });
    $(document).on('mouseleave', '#gnb', function() {
        $('#gnb > ul > li').removeClass('active');
    });
    $(document).on('mouseenter focus', '.page-list li', function() {
        $(this).siblings().removeClass('on');
        $(this).addClass('on');
    });
    $(document).on('mouseleave', '.page-list li', function() {
        $(this).removeClass('on');
    });

    // 웹 사이트 맵 관련
    $(document).on('click','#site-map .btn-area .btn-map',  function() {
        $('#site-map').addClass('active');
        $(this).addClass('close-map');
    });
    $(document).on('click','#site-map .btn-area .close-map',  function() {
        $('#site-map').removeClass('active');
        $(this).removeClass('close-map');
    });
})(jQuery);