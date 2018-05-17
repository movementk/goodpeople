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
        <div class="container">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_lnb.php'); ?>
        </div>
    </div>
    
    <!-- page-intro -->
    <div class="page-intro">
        <div class="container">
            <div class="page-title">
                <h3>소개</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li class="active"><a href="/introduce/vision.php">비전과가치</a></li>
                    <li><a href="#">걸어온길</a></li>
                    <li><a href="/introduce/greetings.php">인사말</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="vision">
        <section class="vision-wrap">
        	<div class="container">
        		<div class="section-header">
					<h2>굿피플의 비전</h2>
					<strong>LOVE,HOPE &amp; GOOD PEOPLE</strong>
					<p>
						1999년 2월 설립된 국제구호개발 NGO 굿피플은 가난과 질병, 재난 등의 극심한 생존위험에 노출되어있는 지구촌 소외 이웃들의 현실을 알리고, 국경을 초월한 체계적이고 
						전문적인 도움의 손길을 전하기 위해 1999년 설립되었습니다.  이를 위해 문명과 정부기관의 보호로부터 소외된 지역을 중심으로 아동보호, 교육, 질병예방 및 치료, 긴급구호, 
						지역개발 등 다양한 사업을 전개하고 있습니다.
					</p>
        		</div>
        		<div class="section-content">
					<ul class="row">
						<li class="col-12 col-md-4">
							<figure>
								<img src="/assets/images/introduce/img_vision01.jpg"  class="img-fluid d-md-none" alt="">
								<img src="/assets/images/introduce/img_md_vision01.jpg"  class="img-fluid d-none d-md-block" alt="">
								<figcaption>
									사랑을 나누고 희망을 세우는<br class="d-none d-md-block"> 사랑의 메신저
								</figcaption>
							</figure>
						</li>
						<li class="col-12 col-md-4">
							<figure>
								<img src="/assets/images/introduce/img_vision02.jpg" class="img-fluid d-block d-md-none d-xl-block" alt="">
								<img src="/assets/images/introduce/img_md_vision02.jpg"  class="img-fluid d-none d-md-block d-xl-none" alt="">
								<figcaption>
									아름답고 따뜻한 세상을<br class="d-none d-md-block"> 만드는 변화의 손길
								</figcaption>
							</figure>
						</li>
						<li class="col-12 col-md-4">
							<figure>
								<img src="/assets/images/introduce/img_vision03.jpg"  class="img-fluid d-md-none" alt="">
								<img src="/assets/images/introduce/img_md_vision03.jpg"  class="img-fluid d-none d-md-block" alt="">
								<figcaption>
									올바른 도움의 문화를<br class="d-none d-md-block"> 만드는 기부 천사
								</figcaption>
							</figure>
						</li>
					</ul>
       				<div class="step-wrap">
       					<ol class="row">
       						<li class="col-12 col-md-4 col-xl-3">
       							<div class="step">
       								<strong>나눔실천</strong>
       								<p>개인/기업 후원자(NGO단체)</p>
       							</div>
       						</li>
       						<li class="col-12 col-md-4 col-xl-3">
       							<div class="step">
       								<p>
       									<img src="/assets/images/introduce/img_vision_step.jpg" alt="">
       								</p>
       							</div>
							</li>
       						<li class="col-12 col-md-4 col-xl-3">
       							<div class="step">
       								<strong>세움실천</strong>
       								<p>수혜국/수혜자</p>
       							</div>
       						</li>
       					</ol>
       				</div>
        		</div>
        	</div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>