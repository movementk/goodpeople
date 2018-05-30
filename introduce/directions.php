<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
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
                <h3>찾아오시는 길</h3>
            </div>
        </div>
    </div>
    
    <!-- Content -->
	<main id="content" class="directions">
		<div class="container">
			<ul class="location">
				<li class="addr">
					<address>서울시 영등포구 국회대로 74길 10 굿피플빌딩 4층</address>
				</li>
				<li class="tel"><a href="tel:027832291">02-783-2291~3</a></li>
				<li class="fax">02-783-2294</li>
				<li class="email"><a href="mailto:help@goodpeople.or.kr">help@goodpeople.or.kr</a></li>
			</ul>
			<div class="maps">
				<img src="/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="지도">
			</div>
			<div class="subway">
				<h4>지하철 이용시</h4>
				<ul>
					<li>
						<i class="line line-9">9호선</i>
						국회의사당역 2번출구에서 도보 5분
					</li>
					<li>
						<i class="line line-5">5호선</i>
						여의나루역 2번출구에서 버스 승차
					</li>
				</ul>
			</div>
			<div class="bus">
				<h4>버스 이용시</h4>
				<ol>
					<li>
						<h5>
							<span>1</span>
							여의도 순복음교회[19-136]
						</h5>
						<dl>
							<dt class="gr">지선</dt>
							<dd class="gr">5533, 5713, 6623</dd>
							<dt class="bl">간선</dt>
							<dd class="bl">461, 463, 753</dd>
						</dl>
					</li>
					<li>
						<h5>
							<span>2</span>
							여의도 순복음교회[19-137]
						</h5>
						<dl>
							<dt class="gr">지선</dt>
							<dd class="gr">5615, 5618, 5713, 7613</dd>
							<dt class="bl">간선</dt>
							<dd class="bl">753</dd>
						</dl>
					</li>
					<li>
						<h5>
							<span>3</span>
							여의도 순복음교회[19-303]
						</h5>
						<dl>
							<dt class="gr">지선</dt>
							<dd class="gr">5615, 5618, 5713, 7613</dd>
							<dt class="bl">간선</dt>
							<dd class="bl">753</dd>
							<dt class="shuttle">마을</dt>
							<dd class="shuttle">영등포10</dd>
						</dl>
					</li>
				</ol>
			</div>
		</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>