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
                <h3>Good 피플</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li><a href="/introduce/ambassadors.php">나눔대사</a></li>
                    <li class="active"><a href="/introduce/directors.php">조직도</a></li>
                    <li><a href="/introduce/directorate.php">이사회 및 위원회</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
	<main id="content" class="directors">
		<div class="container">
			<section class="group">
				<div class="section-header">
					<h4>조직도</h4>
					<nav class="sub-tab-list">
						<ul>
							<li class="active"><a href="/introduce/directors.php">이사장 및 이사</a></li>
							<li><a href="#">함께하는 파트너</a></li>
						</ul>
					</nav>
				</div>
				<div class="section-content">
					<figure>
						<img src="/assets/images/introduce/group_table_sm.jpg" class="img-fluid d-sm-block d-md-none" alt="조직도">
						<img src="/assets/images/introduce/group_table_md.jpg" class="img-fluid d-none d-md-block d-xl-none" alt="조직도">
						<img src="/assets/images/introduce/group_table_xl.jpg" class="img-fluid d-none d-xl-block" alt="조직도">
					</figure>
					<ul class="sr-only">
						<li><h1>이영훈 이사장</h1></li>
						<li>
							<ul>
								<li>이사회</li>
								<li>고문</li>
								<li>감사</li>
								<li>
									<ul>
										<li><h2>김천수 회장</h2></li>
										<li><h2>정권삼 운영부회장</h2></li>
										<li><h2>강대성 상임이사(F2F)</h2></li>
										<li>
											<ul>
												<li>
													<h3>기획실</h3>											
													<ul>
														<li>인사/기획 담당</li>
														<li>총무 담당</li>
														<li>홍보 담당</li>
														<li>재무담당</li>
														<li>의료봉사 담당</li>
													</ul>
												</li>
												<li>
													<h3>사업팀</h3>
													<ul>
														<li>해외 담당</li>
														<li>국내 담당</li>
														<li>국내 지부</li>
													</ul>
												</li>
												<li>
													<h3>나눔 마케팅 본부</h3>
													<ul>
														<li>마케팅팀</li>
														<li>미디어팀</li>
													</ul>
												</li>
												<li><h3>회원사업팀</h3></li>
												<li><h3>복지법인</h3></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					
				</div>
			</section>
		</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>