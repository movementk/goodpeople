<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body class="sub business">
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
                <h3>사랑의의료봉사</h3>
            </div>
            <nav class="lnb volunteer">
                <ul class="tab-list">
                    <li class="active"><a href="/business/volunteer_introduce.php">소개</a></li>
                    <li><a href="/business/volunteer_schedule.php">이동진료 일정안내</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="volunteer-introduce">
        <article class="volunteer-info">
            <div class="container">
                <h4>사랑의의료봉사로 사랑을 실천합니다</h4>
                <p class="summary">
                    주 1~2회씩 이동진료차량으로 의료사각지대에 거주하는 주민들, 독거노인, 다문화가정, 결식아동, 노약자,<br class="d-none d-md-block d-xl-none"> 외국인근로자, 장애인 등<br class="d-none d-xl-block">
                    가난하고 소외된 이웃에게 직접 찾아가 방문진료, 건강검진 등<br class="d-none d-md-block d-xl-none"> 전문화된 의료혜택을 제공하고 있습니다.
                </p>
                <ul class="circle-summary">
                    <li class="treatment-count">
                        <div class="details">
                            <figure>
                                <img src="/assets/images/business/img_treatment.png" class="img-fluid" alt="">
                                <figcaption>
                                    <small>총 진료횟수</small>
                                    <strong>523 회</strong>
                                </figcaption>
                            </figure>                        
                        </div>
                    </li>
                    <li class="year-count">
                        <div class="details">
                            <figure>
                                <img src="/assets/images/business/img_year.png" class="img-fluid" alt="">
                                <figcaption>
                                    <small>2018년 진료횟수 </small>
                                    <strong>23 회</strong>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
                <div class="latest-news">
                    <h5>최근 활동소식</h5>
                    <ul>
                        <li><a href="#">&lt;보고서&gt; 2016 상반기 해외지역개발사업 보고서</a></li>
                        <li><a href="#">&lt;보고서&gt; 해외교육지원사업 보고서</a></li>
                    </ul>
                </div>
            </div>
        </article>
        
        <article class="medical-association">
            <div class="container">
                <h4>굿피플 의사회</h4>
                <p class="summary">
                    굿피플 의사회는 국내외 소외계층에 전문 의료진을 통한 양질의 의료서비스를 제공하기 위해 창단 되었습니다. 보건의료 인프라를 상시에 구축하여 긴급구호 발생시, 신속하게 '재난의료팀'을 파견해 구호활동을 전개합니다.
                </p>
                <ul class="row">
                    <li class="col-12 col-md-4">
                        <figure>
                            <img src="/assets/images/business/img_association01.jpg" class="img-fluid" alt="">
                            <figcaption>검진을 위해 기다리는 주민들</figcaption>
                        </figure>
                    </li>
                    <li class="col-12 col-md-4">
                        <figure>
                            <img src="/assets/images/business/img_association02.jpg" class="img-fluid" alt="">
                            <figcaption>혈압측정하는 모습</figcaption>
                        </figure>
                    </li>
                    <li class="col-12 col-md-4">
                        <figure>
                            <img src="/assets/images/business/img_association03.jpg" class="img-fluid" alt="">
                            <figcaption>심장검사를 받는 주민</figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>