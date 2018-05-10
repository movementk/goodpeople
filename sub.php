<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>We bring <span>hope</span> to neighbors<br>in despair around the world</h2>
        </div>
        <div class="container">
            <div class="page-path">
                <ol class="breadcrumb">
                    <li class="d-none d-md-block home">
                        <a href="/">
                            <i class="icon-home"><span class="sr-only">메인이동</span></i>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown depth-1">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                굿피플소개
                            </button>
                            <div class="dropdown-menu" aria-labelledby="depth-list-1">
                                <a class="dropdown-item" href="#">사업소개</a>
                                <a class="dropdown-item" href="#">캠페인</a>
                                <a class="dropdown-item" href="#">소식</a>
                                <a class="dropdown-item" href="#">후원</a>
                                <a class="dropdown-item" href="#">나의 후원</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown depth-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                소개
                            </button>
                            <div class="dropdown-menu" aria-labelledby="depth-list-1">
                                <a class="dropdown-item" href="#">소개</a>
                                <a class="dropdown-item" href="#">Good 피플</a>
                                <a class="dropdown-item" href="#">투명경영</a>
                                <a class="dropdown-item" href="#">지부안내</a>
                                <a class="dropdown-item" href="#">찾아오시는 길</a>
                            </div>
                        </div>
                    </li>
                </ol>
                <div class="d-none d-xl-block zoom">
                   <a href="javascript:;" class="in" role="button">확대</a>
                   <a href="javascript:;" class="out" role="button">축소</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="">
    	<div class="container">
    		
    	</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript">
        $(window).on('load', function(){
            var currentZoomIn = 1;
            var currentZoom = 1;
            $('.in').click(function() {
                currentZoom += 0.1;
                $('body').css({
                    zoom: currentZoom,
                    '-moz-transform': 'scale(' + currentZoomIn + ')'
                });
            });
            $('.out').click(function() {
                currentZoom -= 0.1;
                $('body').css({
                    zoom: currentZoom,
                    '-moz-transform': 'scale(' + currentZoomIn + ')'
                });
            });
        });
    </script>
    
</body>
</html>