<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
                <h3>함께하는 사람들</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li class="active"><a href="/introduce/ambassadors.php">나눔대사</a></li>
                    <li><a href="/introduce/directors.php">조직도</a></li>
                    <li><a href="/introduce/directorate.php">이사회 및 위원회</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
	<main id="content" class="ambassadors">
		<div class="container">
			<article class="members">
			    <div class="article-header">
			        <div class="form-group">
                        <select class="form-control">
                            <option>스타</option>
                            <option>문화</option>
                            <option>명예</option>
                        </select>
                    </div>
			    </div>
				<ul class="row">
					<li class="col-6 col-md-3 col-xl-2">
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
					<li class="col-6 col-md-3 col-xl-2">
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
					<li class="col-6 col-md-3 col-xl-2">
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
					<li class="col-6 col-md-3 col-xl-2">
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
					<li class="d-none d-md-block col-md-3 col-xl-2">
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
					<li class="d-none d-md-block col-md-3 col-xl-2">
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
					<li class="d-none d-xl-block col-md-3 col-xl-2">
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
					<li class="d-none d-xl-block col-md-3 col-xl-2">
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
					<div class="star-slide">
					    <ul>
					        <li>
					            <figure>
					                <img src="/assets/images/introduce/slider_img01.jpg" class="img-fluid" alt="">
					            </figure>
					        </li>
					        <li>
					            <figure>
					                <img src="/assets/images/introduce/slider_img01.jpg" class="img-fluid" alt="">
					            </figure>
					        </li>
					        <li>
					            <figure>
					                <img src="/assets/images/introduce/slider_img01.jpg" class="img-fluid" alt="">
					            </figure>
					        </li>
					    </ul>
					</div>
               		<div class="comment">
               			<p>
               				방송을 통해 만난 지구촌 곳곳의 어려운 이웃들의 모습은 저에게 희망이 없는 삶이 어떤 것인지, 굶주림과 아픔이 주는 고통이 어떤 것인지, 다시 한번 생각하게 되는 계기가 되었습니다. 무언가 큰 것을 주어야 한다는 부담감이 아니라, 아주 작은 것부터 나눌 수 있는 마음을 갖는 것, 그것이지구촌 모두가 행복해지는 첫 걸음이 아닐까요? 아픔이 있는 현장이면 늘 달려가 사랑과 희망을 전해주는 굿피플과 함께 여러분도 나눔의 기쁨을 느껴보시기 바랍니다. 
               			</p>
               		</div>
               		<div class="latest-news">
               			<h5>최근 활동 소식</h5>
               			<ul>
               				<li>
               					<a href="#">
									&lt;보고서&gt; 2016 상반기 해외지역개발사업 보고서 2016 상반기 해외지역개발사업 보고서
               					</a>
               					<span class="d-none d-md-block">2018.04.06</span>
               				</li>
               				<li>
               					<a href="#">
               						&lt;보고서&gt; 해외교육지원사업 보고서
               					</a>
               					<span class="d-none d-md-block">2018.04.06</span>
               				</li>
               			</ul>
               		</div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/assets/js/sub.js"></script>
    <script>
        (function($){
			$('#video-popup').on('show.bs.modal', function (e) {
				setTimeout(function(){
					$('#video-popup .modal-body .star-slide ul').slick({
						autoplay: true,
						dots: false,
						infinite: true,
						autoplaySpeed: 5000,
						cssEase: 'linear',
						pauseOnHover: false,
						pauseOnFocus: false,
                        prevArrow: '<button class="slick-prev"><i class="icon-left-open-big"></i></button>',
                        nextArrow: '<button class="slick-next"><i class="icon-right-open-big"></i></button>',
					});
				}, 200);
			});
        })(jQuery);
    </script>
</body>
</html>