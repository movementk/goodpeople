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
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="my-support children-view">
    	<div class="container">
 			<article class="children-details">
                <div class="article-content">
                    <div class="row">
                        <div class="col-12 col-md-5 col-xl-4">
                            <figure>
                                <img src="/assets/images/mypage/img_children01.jpg" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-md-7 col-xl-8">
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
                                    <li>
                                        <dl>
                                            <dt>아동국적</dt>
                                            <dd>방글라데시</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>아동생일</dt>
                                            <dd>2013년 06월 12일</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>아동성별</dt>
                                            <dd>여</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>사업장명</dt>
                                            <dd>방글라데시 지부</dd>
                                        </dl>
                                    </li>
                                </ul>
                                <hr>
                                <div class="summary">
                                    <strong>아동소개</strong>
                                    <p>
                                        아버지는 일용직에 종사하여 일자리가 거의 없고 가족 모두 영양 상태가 좋지 않습니다. 특히 아이는 영양실조로 인해 4살 아이지만 2살 아이처럼 보이며 면역력이 약하여 눈에 병이 생겼습니다. 지진으로 집이 무너져 큰아버지 방을 빌려 생활하고 있으며 할머니는 호흡기 질환을 앓고 있지만 병원비가 없어 치료를 받지 못하는 상황입니다.
                                    </p>
                                </div>
                                <div class="btn-letter">
                                    <p>
                                        <a href="/mypage/my_support/letter_write.php" class="btn btn-sm btn-white" role="button">편지쓰기</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="/mypage/my_support/children_list_type2.php" class="btn btn-md btn-white">목록으로</a>
                    </p>
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