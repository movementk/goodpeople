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
			<!-- search-form-->
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
			
			<p class="ex-txt">검색2</p>
			<div class="select-search">
				<form action="#">
					<div class="row">
						<div class="col-4 col-xl-3">
							<div class="form-group">
								<select class="form-control">
									<option>전체</option>
								</select>
							</div>
						</div>
						<div class="col-8 col-xl-9">
							<div class="form-group">
								<input type="text" id="search2" class="form-control" placeholder="검색어를 입력해 주세요">
								<label for="search2" class="sr-only">검색하기</label>
							</div>
							<p class="btn-search">
								<button type="submit" class="btn btn-default">
									<i class="icon-search"></i>
								</button>
							</p>
						</div>
					</div>
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
										사랑의의료봉사
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
           	<article class="board-view">
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
           			<div class="test-link-list">
           				<ul>
           					<li class="t-prev">
           						<dl class="row">
           							<dt class="d-none d-md-block col-2">다음글</dt>
           							<dd class="col-12 col-md-10">
           								<a href="#">다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다</a>
           							</dd>
           						</dl>
           					</li>
           					<li class="t-next">
           						<dl class="row">
           							<dt class="d-none d-md-block col-2">이전글</dt>
           							<dd class="col-12 col-md-10">
           								<a href="#">다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다.다음글이 없습니다</a>
           							</dd>
           						</dl>
           					</li>
           				</ul>
           			</div>
           		</div>
           	</article>
           	
           	<br><br><br>
           	
           	<article class="board-view">
           		<div class="article-header">
           			<h4>사랑의 의료봉사, 고려대학교 교우회 감사패 수상</h4>
           			<ul class="icon-list">
           				<li class="user">굿피플</li>
           				<li class="calendar">2018-05-01</li>
						<li class="eye">1,234</li>
           			</ul>
           		</div>
           		<div class="article-content">
					<!--
						.view-content  -> width: 100%;
						.space 추가 했을때 -> width: 725px; center정렬
					 -->
           			<div class="view-content space">
           				<div class="item">
           					<img src="/assets/images/community/img_news_view01.jpg" class="img-fluid" alt="">
           					<p>
								1999년부터 국내 의료 혜택이 미치지 못하는 
								산간벽지의 독거노인, 조손 가정 및 외국인 근로자, 
								장애인, 노숙인들에게 매주 무료 진료를 진행해온 굿피플 
								사랑의의료봉사가 감사패를 받았습니다!
           					</p>
           				</div>
           				<div class="item">
           					<img src="/assets/images/community/img_news_view02.jpg" class="img-fluid" alt="">
           					<p>
								굿피플의 대표적인 보건의료사업 사랑의의료봉사는 
								지난 10년간 고대교우 의료봉사회와 함께 지역 
								사회복지관, 북한에서 이탈해 대한민국에 정착한 새터민, 
								어려움을 겪고 있는 다문화가족 등 의료복지 사각지대의 
								의료진료를 위해 힘써왔습니다. 
								이에 33만 고려대 교우들이 사랑의의료봉사의 
								공로를 인정하고 감사패를 수여했습니다.
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
           			<div class="test-link-list">
           				<ul>
           					<li class="t-prev">
           						<dl class="row">
           							<dt class="d-none d-md-block col-2">다음글</dt>
           							<dd class="col-12 col-md-10">
           								<a href="#">다음글이 없습니다.</a>
           							</dd>
           						</dl>
           					</li>
           					<li class="t-next">
           						<dl class="row">
           							<dt class="d-none d-md-block col-2">이전글</dt>
           							<dd class="col-12 col-md-10">
           								<a href="#">굿피플과 함께하는 KCBL 연예인 농구대회  굿피플과 함께하는 KCBL 연예인 농구대회</a>
           							</dd>
           						</dl>
           					</li>
           				</ul>
           			</div>
           		</div>
           	</article>
           	
           	<p class="ex-txt">게시판 작성</p>
         	<!--  board 게시판 작성-->
         	<div class="write-wrap">
         		<form action="#">
         			<div class="table-wrap">
         				<table class="table">
         					<tbody>
         						<tr>
         							<th>
         								<label for="title">제목</label>
         							</th>
         							<td>
         								<div class="form-group">
         									<input type="text" id="title" class="form-control">
         								</div>
         							</td>
         						</tr>
         						<tr>
         							<th class="v-top">
         								<label for="u-content">내용</label>
         							</th>
         							<td>
         								<div class="form-group">
         									<textarea id="u-content" class="form-control"></textarea>
         								</div>
         							</td>
         						</tr>
         						<tr>
         							<th>
         								<label for="attach">첨부파일</label>
         							</th>
         							<td class="file">
         								<div class="form-group">
         									<input type="file" id="attach" class="form-control">
         								</div>
         							</td>
         						</tr>
         					</tbody>
         				</table>
         			</div>
         		</form>
         	</div>
         	
         	<p class="ex-txt">E-book 리스트</p>
         	<!-- news-list sm, md -->
            <article class="news-table-sm d-xl-none">
                <div class="ebook-list">
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="backdrop"></div>
                </div>
                <div class="ebook-list">
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </article>
            
            <!-- news-list xl -->
            <article class="news-table-xl d-none d-xl-block">
                <div class="ebook-list">
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="backdrop"></div>
                </div>
                <div class="ebook-list">
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="news-list">
                        <a href="#">
                            <div class="details">
                                <small>2018년 ~ 4~6월호</small>
                                <h3>2018 Spring Vol.12</h3>
                            </div>
                            <div class="item-ebook">
                                <img src="/assets/images/sub/img_book.jpg" class="img-fluid" alt="">
                                <div class="hover-box"></div>
                            </div>
                        </a>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </article>
            
            
            <p class="ex-txt">Accordion 리스트</p>
         	<!-- Accordion -->
			<article class="accordion" id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<a href="#" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<strong>2017년 사업보고서</strong>
							<p>
								2017년도 굿피플의 연간 수입총계는
								<span>21,153,000,000</span>원이며, 
								다음과 같이 사용되었습니다.
							</p>
						</a>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<div class="btn-area">
								<p>
									<a href="#" class="btn btn-blue" role="button">보고서 PDF</a>
									<a href="#" class="btn btn-gray" role="button">뷰어 다운로드</a>
								</p>
							</div>
							<div class="chart-area">
								<div class="row">
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart01.png" class="img-fluid" alt="">
									</div>
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart02.png"  class="img-fluid" alt="">
									</div>
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart01.png" class="img-fluid" alt="">
									</div>
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart02.png"  class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<strong>2017년 사업보고서</strong>
							<p>
								2017년도 굿피플의 연간 수입총계는
								<span>21,153,000,000</span>원이며, 
								다음과 같이 사용되었습니다.
							</p>
						</a>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<div class="btn-area">
								<p>
									<a href="#" class="btn btn-blue" role="button">보고서 PDF</a>
									<a href="#" class="btn btn-gray" role="button">뷰어 다운로드</a>
								</p>
							</div>
							<div class="chart-area">
								<div class="row">
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart01.png" class="img-fluid" alt="">
									</div>
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart02.png"  class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							<strong>2017년 사업보고서</strong>
							<p>
								2017년도 굿피플의 연간 수입총계는
								<span>21,153,000,000</span>원이며, 
								다음과 같이 사용되었습니다.
								
								2017년도 굿피플의 연간 수입총계는
								<span>21,153,000,000</span>원이며, 
								다음과 같이 사용되었습니다.
							</p>
						</a>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<div class="btn-area">
								<p>
									<a href="#" class="btn btn-blue" role="button">보고서 PDF</a>
									<a href="#" class="btn btn-gray" role="button">뷰어 다운로드</a>
								</p>
							</div>
							<div class="chart-area">
								<div class="row">
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart01.png" class="img-fluid" alt="">
									</div>
									<div class="col-12 col-xl-6">
										<img src="/assets/images/sub/img_chart02.png"  class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
            
            
            
            
            
            
    	</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>