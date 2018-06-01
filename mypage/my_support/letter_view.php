<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/mypage.css">
</head>
<body class="sub mypage">
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
                <h3>나의 후원아동</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li><a href="#">보낸편지</a></li>
                    <li class="active"><a href="/mypage/my_support/letter_list.php">받은편지</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="my-support">
    	<div class="container">
 			<article class="letter-view">
 			    <div class="article-header">
 			        <div class="row">
 			            <div class="col-12 col-md-3">
 			                <figure>
 			                    <img src="/assets/images/mypage/img_letter_view_children.jpg" class="img-fluid" alt="">
 			                </figure>
 			            </div>
 			            <div class="col-12 col-md-9">
 			                <div class="details">
 			                    <ul>
 			                        <li>
 			                            <dl>
 			                                <dt>아동번호</dt>
 			                                <dd>KN-2010-Nai0030</dd>
 			                            </dl>
 			                        </li>
 			                        <li>
 			                            <dl>
 			                                <dt>아동이름</dt>
 			                                <dd>비즐리 (Bizli Khatun)</dd>
 			                            </dl>
 			                        </li>
 			                        <li class="d-none d-md-block">
 			                            <dl>
 			                                <dt>아동국적</dt>
 			                                <dd>방글라데시</dd>
 			                            </dl>
 			                        </li>
 			                        <li class="d-none d-md-block">
 			                            <dl>
 			                                <dt>아동생일</dt>
 			                                <dd>2013년 06월 12일</dd>
 			                            </dl>
 			                        </li>
 			                        <li class="d-none d-md-block">
 			                            <dl>
 			                                <dt>아동성별</dt>
 			                                <dd>여</dd>
 			                            </dl>
 			                        </li>
 			                        <li class="d-none d-md-block">
 			                            <dl>
 			                                <dt>사업장명</dt>
 			                                <dd>방글라데시 지부</dd>
 			                            </dl>
 			                        </li>
 			                    </ul>
 			                </div>
 			            </div>
 			        </div>
 			    </div>
 			    <div class="article-content">
 			        <div class="letter-head">
 			            <h3>편지 제목이 노출되는 영역입니다. 편지 제목이 노출되는 영역입니다.</h3>
 			            <ul class="icon-list">
                            <li class="calendar">2018-05-01</li>
                            <li class="eye">1,234</li>
                        </ul>
 			        </div>
 			        <div class="letter-body">
 			            편지내용이 노출되는 영역입니다.<br>
                        편지내용이 노출되는 영역입니다.<br><br>

                        편지내용이 노출되는 영역입니다.<br>
                        편지내용이 노출되는 영역입니다.편지내용이 <br>
                        노출되는 영역입니다.<br>
                        편지내용이 노출되는 영역입니다.<br><br><br>


                        편지내용이 노출되는 영역입니다.
 			        </div>
 			        <div class="btn-area">
 			            <p>
 			                <a href="/mypage/my_support/letter_write.php" class="btn btn-md btn-white" role="button">새편지쓰기</a>
 			                <a href="/mypage/my_support/letter_list.php" class="btn btn-md btn-black" role="button">목록으로</a>
 			            </p>
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