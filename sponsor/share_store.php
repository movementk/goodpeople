<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/sponsor.css">
</head>
<body class="sub sponsor">
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
                <h3>기업후원</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li><a href="/sponsor/share_partner.php">나눔파트너</a></li>
                    <li class="active"><a href="/sponsor/share_store.php">나눔가게</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="share-store">
		<section class="collection-step">
			<div class="container">
				<div class="section-header">
					<h4>모금함 종류</h4>
					<p>
						작은 동전 하나가 희망이 됩니다. <br class="d-block d-md-none"> 
						식당, 편의점, 약국, 은행 등 각 가게에<br class="d-none d-md-block">  굿피플 모금함을 설치하여 어려운 이웃을 위한  나눔 활동에 동참하실 수 있습니다.
					</p>	
				</div>
				<div class="section-content">
					<ol class="method">
                        <li>
                            <div class="box">
                                <div class="item">
                                    <img src="/assets/images/sponsor/collection-step01.png" class="img-fluid" alt="">
                                </div>
                                <div class="details">
                                    <small>STEP 01</small>
                                    <p>모금함 신청</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="item">
                                    <img src="/assets/images/sponsor/collection-step02.png" class="img-fluid" alt="">
                                </div>
                                <div class="details">
                                    <small>STEP 02</small>
                                    <p>
                                        모금함 발송<br class="d-block">
                                        <span>(신청 후 2주일 이내)</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="item">
                                    <img src="/assets/images/sponsor/collection-step03.png" class="img-fluid" alt="">
                                </div>
                                <div class="details">
                                    <small>STEP 03</small>
                                    <p>모금함 채우기</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="item">
                                    <img src="/assets/images/sponsor/collection-step04.png" class="img-fluid" alt="">
                                </div>
                                <div class="details">
                                    <small>STEP 04</small>
                                    <p>
                                        모금함 송금/<br class="d-sm-block d-lg-none">
                                        수거 및 재신청
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ol>
				</div>
			</div>
		</section>
		<article class="hope">
            <div class="container">
                <h4>작은 동전 하나가 희망이 됩니다.</h4>
                <p>현대사회에서 기업의 사회공헌활동은 점차 사회적으로 중요해지고 있습니다.</p>
            </div>
		</article>
		<section class="information">
			<div class="container">
				<div class="section-header">
					<h4>모금함 수거 및 송금 안내</h4>
				</div>
				<div class="section-content">
					<ul>
						<li>
							<div class="wrap">
								<div class="items">
									<img src="/assets/images/sponsor/img_information01.png" class="img-fluid" alt="">
								</div>
								<div class="summary">
									<ul>
										<li>
											<dl>
												<dt>무통장 입금</dt>
												<dd>국민은행 816-01-0334-955</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt>예금주</dt>  
												<dd>굿피플</dd>
											</dl>
										</li>
									</ul>
									<p>
										입금 후 굿피플 회원관리팀으로 전화주시면 후원영수증을 발송해드립니다.  또한 사업자명으로 입금 후 사업자번호를 알려주시면 기부금영수증을 발급해 드립니다
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="wrap">
								<div class="items">
									<img src="/assets/images/sponsor/img_information02.png" class="img-fluid" alt="">
								</div>
								<div class="summary">
									<ul>
										<li>
											<dl>
												<dt>방문수거</dt>
												<dd>
													송금이 어려우신 분들의 경우 전화를 주시면 <br class="d-none d-xl-block">  
													굿피플 담당자가 수거합니다.
												</dd>
											</dl>
										</li>
									</ul>
									<p>
										방문수거는 서울지역만 가능합니다. 그 외 기타지역은 방문 수거가 어려우니 송금을 이용해주시기 바랍니다.
									</p>
								</div>
							</div>
						</li>
					</ul>
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