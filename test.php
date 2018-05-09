<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/test.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
    	<div class="sub-visual">
			<h2>
				We bring <span>hope</span> to neighbors<br> 
				tin despair around the world.
			</h2>
    	</div>
		<div class="container">
			<nav class="path-nav">
				<div class="row">
					<div class="col-12 col-xl-8">
						<ul class="breadcrumb-list">
							<li>
								<a href="\">
									<i class="icon-home"></i>
								</a>
							</li>
							<li>
								<a href="#">
									굿피플소개<i></i>
								</a>
								<ul class="depth-1">
									<li>
										<a href="#">ddff</a>
										<ul class="depth-2">
											<li>
												<a href="#">ddff</a>
											</li>
											<li>
												<a href="#">ddff</a>
											</li>
											<li>
												<a href="#">ddff</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">ddff</a>
									</li>
									<li>
										<a href="#">ddff</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									소개<i></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="d-none d-xl-block col-xl-4">
						<div class="exposure">
							<div>
								<a href="#">
									확대<i class="icon-plus"></i>
								</a>
							</div>
							<div>
								<a href="#">
									축소<i class="icon-minus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
   	</div>
    
    <!-- Content -->
    <main id="content" class="">
    	<div class="container">
    		<!--<div class="page-wrap"></div>-->
			<section>
				<div class="section-header">
					<h3 class="section-title">소개</h3>
					<nav class="lnb-nav">
						<ul>
							<li class="active">
								<a href="#none">비전과가치</a>
							</li>
							<li>
								<a href="#none">걸어온길</a>
							</li>
							<li>
								<a href="#none">인사말</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>
  			
  			<div style="margin: 50px 0; border:"></div>
   			<!-- search-form -->
			<div class="search-form">
				<form action="#">
					<div class="form-group">
						<input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
						<label for="search" class="sr-only">검색하기</label>
					</div>
					<p class="btn-search">
						<button type="submit" class="btn btn-default">
							<i></i>
						</button>
					</p>
				</form>
			</div>
    	</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
   
    <script>
		$(function(){
			// path-nav
			$(document).on("click", ".breadcrumb-list > li:nth-of-type(2) > a", function(){
				$(".depth-1").toggleClass("toggle");
			});
			$(document).on("click", ".breadcrumb-list > li:nth-of-type(3) > a", function(){
				$(".depth-2").toggleClass("toggle");
			});
		});
        
		//lnb-nav active
		$(document).ready(function(){
			$('.lnb-nav ul li').click(function(){
				$('.lnb-nav ul li').removeClass('active');
				$(this).addClass('active');
			});
		});
	
	</script>
</body>
</html>