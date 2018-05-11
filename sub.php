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
    
    <!-- page-intro -->
    <div class="page-intro">
        <div class="container">
            <div class="page-title">
                <h3>소개</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li><a href="#">비전과가치</a></li>
                    <li><a href="#">걸어온길</a></li>
                    <li class="active"><a href="#">인사말</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="">
    	<div class="container">
 			
  			<p class="ex-txt">검색</p>
			<!-- search-form -->
			<div class="search-form">
				<form action="#">
					<div class="form-group">
						<input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
						<label for="search" class="sr-only">검색하기</label>
					</div>
					<p class="btn-search">
						<button type="submit" class="btn btn-default">
							<i class="icon-search"></i>
						</button>
					</p>
				</form>
			</div>
   	
   			<p class="ex-txt">페이징</p>
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
   			
   			<p class="ex-txt">icon 리스트</p>
   			<!--  icon 리스트 -->
   			<ul class="icon-list">
   				<li class="user">굿피플</li>
   				<li class="calendar">2018-05-01</li>
   				<li class="eye">1,234</li>
   			</ul>
   			
   			
   			<p class="ex-txt">게시판1</p>
   			<!--  board 게시판 -->
   			<div class="board-list-1">
				<ul>
					<li>
						<a href="#">
							<div class="board-info">
								<div class="row">
									<div class="col-12 col-md-6 col-xl-5">
										<figure>
											<img src="/assets/images/sub/img_board01.jpg" class="img-fluid" alt="">
										</figure>
									</div>
									<div class="col-12 col-md-6 col-xl-7">
										<div class="details">
											<h4>사랑의의료봉사, 고려대학교 교우회 감사패 수상</h4>
											<p>
												굿피플 사랑의의료봉사가 지난 4월 21일 고려대학교 교우회로부터 감사패를 수상했습니다
											</p>
											<ul class="icon-list">
												<li class="user">굿피플</li>
												<li class="calendar">2018-05-01</li>
												<li class="eye">1,234</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="board-info">
								<div class="row">
									<div class="col-12 col-md-6 col-xl-5">
										<figure>
											<img src="/assets/images/sub/img_board_none.jpg" alt="">
										</figure>
									</div>
									<div class="col-12 col-md-6 col-xl-7">
										<div class="details">
											<h4>사랑의의료봉사, 고려대학교 교우회 감사패 수상 사랑의의료봉사, 고려대학교 교우회 감사패 수상</h4>
											<p>
												굿피플 사랑의의료봉사가 지난 4월 21일 고려대학교 교우회로부터 감사패를 수상했습니다 굿피플 사랑의의료봉사가 지난 4월 21일 고려대학교 교우회로부터 감사패를 수상했습니다
											</p>
											<ul class="icon-list">
												<li class="user">굿피플</li>
												<li class="calendar">2018-05-01</li>
												<li class="eye">1,234</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
   			
			<p class="ex-txt">게시판2</p>
           	<div class="board-list-2">
				<ol>
					<li>
						<div class="row">
							<div class="d-none d-xl-block col-xl-1">
								<P>123</P>
							</div>
							<div class="col-12 col-xl-8">
								<h3>
									<a href="#">
										사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 
										사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사,
									</a>
								</h3>
							</div>
							<div class="col-12 col-xl-3">
								<ul class="icon-list">
									<li class="calendar">2018-05-01</li>
									<li class="reply">
										<p>답변대기</p>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="d-none d-xl-block col-xl-1">
								<P>123</P>
							</div>
							<div class="col-12 col-xl-8">
								<h3>
									<a href="#">
										사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 
										사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사,
									</a>
								</h3>
							</div>
							<div class="col-12 col-xl-3">
								<ul class="icon-list">
									<li class="calendar">2018-05-01</li>
									<li class="reply">
										<p>답변대기</p>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="d-none d-xl-block col-xl-1">
								<P>123</P>
							</div>
							<div class="col-12 col-xl-8">
								<h3>
									<a href="#">
										사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 사랑의의료봉사, 
									</a>
								</h3>
							</div>
							<div class="col-12 col-xl-3">
								<ul class="icon-list">
									<li class="calendar">2018-05-01</li>
									<li class="reply success">
										<p>답변완료</p>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ol>
           	</div>

            <p class="ex-txt">게시판3</p>
            <!--  board 게시판 3-->
            <div class="board-list-3">
				<ol>
					<li>
						<div class="row">
							<div class="d-none d-xl-block col-xl-1">
								<P>123</P>
							</div>
							<div class="col-12 col-xl-8">
								<h3>
									<a href="#">
										사랑의의료봉사, 고려대학교 교우회 감사패 수상
									</a>
								</h3>
							</div>
							<div class="col-12 col-xl-3">
								<ul class="icon-list">
									<li class="calendar">2018-05-01</li>
									<li class="eye">1,234</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="d-none d-xl-block col-xl-1">
								<P>123</P>
							</div>
							<div class="col-12 col-xl-8">
								<h3>
									<a href="#">
										사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상
									</a>
								</h3>
							</div>
							<div class="col-12 col-xl-3">
								<ul class="icon-list">
									<li class="calendar">2018-05-01</li>
									<li class="eye">1,234</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="d-none d-xl-block col-xl-1">
								<P>123</P>
							</div>
							<div class="col-12 col-xl-8">
								<h3>
									<a href="#">
										사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상
									</a>
								</h3>
							</div>
							<div class="col-12 col-xl-3">
								<ul class="icon-list">
									<li class="calendar">2018-05-01</li>
									<li class="eye">1,234</li>
								</ul>
							</div>
						</div>
					</li>
				</ol>
           	</div>
           	
           	<p class="ex-txt">게시판뷰</p>
            <!--  board 게시판 뷰-->
           	<aricle class="board-view">
           		<div class="article-header">
           			<h4>문의 제목이 노출되는 영역입니다.문의 제목이 노출되는 영역입니다.문의 제목이 노출되는 영역입니다.</h4>
           			<ul class="icon-list">
           				<li class="calendar">2018-05-01</li>
						<li class="eye">1,234</li>
           			</ul>
           		</div>
           		<div class="article-content">
           			<div class="view-content">
           				<p>
           					사용자 문의내용이 노출되는 영역입니다. <br>
							사용자 문의내용이 노출되는 영역입니다. <br>
         					사용자 문의내용이 노출되는 영역입니다. <br>
         					사용자 문의내용이 노출되는 영역입니다. <br>
         					사용자 문의내용이 노출되는 영역입니다. <br>
							사용자 문의내용이 노출되는 영역입니다.
							
          				</p>
           				<div class="reply">
           					<h5>굿피플 관리자</h5>	
           					<p>
           						관리자가 등록한 답변이 노출되는 영역입니다.
								관리자가 등록한 답변이 노출되는 영역입니다.관
								리자가 등록한 답변이 노출되는 영역입니다.
								관리자가 등록한 답변이 노출되는 영역입니다.
           					</p>
           				</div>
           			</div>
           			<ul class="attach">
						<li>
							<a href="#">첨부파일01_파일명.hwp</a>
						</li>
						<li>
							<a href="#">첨부파일01_파일명.hwp</a>
						</li>
					</ul>
           			<div class="btn-area">
           				<p>
           					<a href="#" class="btn btn-gray" role="button">삭제하기</a>
           					<a href="#" class="btn btn-gray" role="button">수정하기</a>
           					<a href="#" class="btn btn-black" role="button">목록으로</a>
           				</p>
           			</div>
           			<div class="page-link">
           				<ul>
           					<li class="prev">
           						<a href="#">다음글이 없습니다.</a>
           					</li>
           					<li class="next">
           						<a href="#">굿피플과 함께하는 KCBL 연예인 농구대회</a>
           					</li>
           				</ul>
           			</div>
           		</div>
           	</aricle>
    	</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>