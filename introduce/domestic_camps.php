<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/flags/flag-icon.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body class="sub introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>We bring <span>hope</span> to neighbors<br>in despair around the world</h2>
        </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_lnb.php'); ?>
    </div>
    
    <!-- page-intro -->
    <div class="page-intro">
        <div class="container">
            <div class="page-title">
                <h3>지부안내</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li><a href="/introduce/international_camps.php">해외지부</a></li>
                    <li class="active"><a href="/introduce/domestic_camps.php">국내지부</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
	<main id="content" class="domestic-camps">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="maps">
					   <p class="map-sm d-md-none">
							<img src="/assets/images/introduce/img_domestic_sm.gif" class="img-fluid" alt="지도">
						</p>
						<p class="map-lg d-none d-md-block">
							<img src="/assets/images/introduce/img_domestic_map.jpg" class="img-fluid domestic-maps" alt="지도">
							<img src="/assets/images/introduce/img_domestic_arrow.png" class="img-fluid domestic-arrow" alt="지부 위치">
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<article class="summary">
						<div class="article-header">
							<p>
								<img src="/assets/images/introduce/icon_daegu.jpg" alt="대구">
							</p>
							<h4>굿피플 대구 · 경북 지부</h4>
						</div>
						<div class="article-content">
							<dl>
								<dt>주소</dt>
								<dd>경상북도 구미시 박정희로 116 (상모동)경상북도 구미시 박정희로 116 (상모동)</dd>
								<dt>전화번호</dt>
								<dd>111-111-11111</dd>
								<dt>팩스번호</dt>
								<dd>111-111-11111</dd>
							</dl>
						</div>
					</article>
				</div>
			</div>
			
		</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
    <script>
        (function($){
            // 지도 관련
            $(window).on('load', function(){
                $('.maps .map-lg').addClass('on');
            });
        })(jQuery);
    </script>
</body>
</html>