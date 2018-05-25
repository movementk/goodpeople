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
                <h3>Good 피플</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li class="active"><a href="/introduce/ambassadors.php">나눔대사</a></li>
                    <li><a href="#">조직도</a></li>
                    <li><a href="#">이사회 및 위원회</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
	<main id="content" class="ambassadors">
		<div class="container">
			<article class="members">
				<ul class="row">
					<li class="col-12 col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list01.jpg" class="img-fluid" alt="">
								<figcaption>
									스타나눔대사
									<p><i class="icon-video"></i>박수홍</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="col-12 col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list02.jpg" class="img-fluid" alt="">
								<figcaption>
									스타나눔대사
									<p>정준</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="col-12 col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list03.jpg" class="img-fluid" alt="">
								<figcaption>
									문화나눔대사
									<p>박지훈</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="d-none d-md-block col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list04.jpg" class="img-fluid" alt="">
								<figcaption>
									스타나눔대사
									<p><i class="icon-video"></i>이유리</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="d-none d-md-block col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list05.jpg" class="img-fluid" alt="">
								<figcaption>
									스타나눔대사
									<p><i class="icon-video"></i>황정음</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="d-none d-md-block col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list06.jpg" class="img-fluid" alt="">
								<figcaption>
									스타나눔대사
									<p><i class="icon-video"></i>문천식</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="d-none d-xl-block col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list07.jpg" class="img-fluid" alt="">
								<figcaption>
									명예나눔대사
									<p><i class="icon-video"></i>이한위</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="d-none d-xl-block col-md-4 col-xl-3">
						<a href="#" data-toggle="modal" data-target="#video-popup">
							<figure>
								<img src="/assets/images/introduce/img_ambassadors_list08.jpg" class="img-fluid" alt="">
								<figcaption>
									스타나눔대사
									<p><i class="icon-video"></i>이진우</p>
								</figcaption>
							</figure>
						</a>
					</li>
				</ul>
				<nav class="paging">
					<ol class="pagination">
						<li class="first">
							<a href="#">
								<i class="icon-angle-double-left">
									<span class="sr-only">첫 페이지</span>
								</i>
							</a>
						</li>
						<li class="prev">
							<a href="#">
								<i class="icon-angle-left">
									<span class="sr-only">이전 페이지</span>
								</i>
							</a>
						</li>
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li class="next">
							<a href="#">
								<i class="icon-angle-right">
									<span class="sr-only">다음 페이지</span>
								</i>
							</a>
						</li>
						<li class="last">
							<a href="#">
								<i class="icon-angle-double-right">
									<span class="sr-only">마지막 페이지</span>
								</i>
							</a>
						</li>
					</ol>	
				</nav>
			</article>
		</div>
    </main>
    
    <!-- video modal popup -->
    <div class="modal fade video-modal" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="video-popupLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="video-popupLabel">스타나눔대사 박수홍</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Content
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
    <script>
        $(function(){
            $('#video-popup').modal('show')
        });
    </script>
</body>
</html>