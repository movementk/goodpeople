<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/campaign.css">
</head>
<body class="sub campaign">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>We bring <span>hope</span> to neighbors<br>in despair around the world</h2>
        </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_lnb.php'); ?>
    </div>
    
    <!-- Content -->
    <main id="content">
    	<div class="container">
            <article class="campaign-list">
                <div class="article-header">
                    <div class="form-group">
                        <select class="form-control">
                            <option>진행중인 캠페인</option>
                            <option>종료된 캠페인</option>
                        </select>
                    </div>
                </div>
                <div class="article-content">
                    <ul class="row">
                        <li class="col-12 col-md-6 col-xl-4">
                            <a href="/campaign/review_view.php">
                                <div class="item ongoing">
                                    <span class="label">진행중</span>
                                    <figure>
                                        <img src="/assets/images/campaign/img_review01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <small>해외아동결연</small>
                                    <h3>사랑의의료봉사, 고려대학교 교우회 감사패 수상사랑의의료봉사, 고려대학교 교우회 감사패 수상</h3>
                                    <ul class="icon-list">
                                        <li class="calendar">2018-05-01</li>
                                        <li class="eye">1,234</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="col-12 col-md-6 col-xl-4">
                            <a href="/campaign/review_view.php">
                                <div class="item termination">
                                    <span class="label">종료</span>
                                    <figure>
                                        <img src="/assets/images/campaign/img_review02.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <small>해외아동결연</small>
                                    <h3>사랑의의료봉사, 고려대학교 교우회 감사패 수상</h3>
                                    <ul class="icon-list">
                                        <li class="calendar">2018-05-01</li>
                                        <li class="eye">1,234</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="col-12 col-md-6 col-xl-4">
                            <a href="/campaign/review_view.php">
                                <div class="item termination">
                                    <span class="label">종료</span>
                                    <figure>
                                        <img src="/assets/images/campaign/img_review03.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <small>해외아동결연</small>
                                    <h3>사랑의의료봉사, 고려대학교 교우회 감사패 수상</h3>
                                    <ul class="icon-list">
                                        <li class="calendar">2018-05-01</li>
                                        <li class="eye">1,234</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="col-12 col-md-6 col-xl-4">
                            <a href="/campaign/review_view.php">
                                <div class="item ongoing">
                                    <span class="label">진행중</span>
                                    <figure>
                                        <img src="/assets/images/campaign/img_review01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <small>해외아동결연</small>
                                    <h3>사랑의의료봉사, 고려대학교 교우회 감사패 수상</h3>
                                    <ul class="icon-list">
                                        <li class="calendar">2018-05-01</li>
                                        <li class="eye">1,234</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="col-12 col-md-6 col-xl-4">
                            <a href="/campaign/review_view.php">
                                <div class="item ongoing">
                                    <span class="label">진행중</span>
                                    <figure>
                                        <img src="/assets/images/campaign/img_none_review.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <small>해외아동결연</small>
                                    <h3>사랑의의료봉사, 고려대학교 교우회 감사패 수상</h3>
                                    <ul class="icon-list">
                                        <li class="calendar">2018-05-01</li>
                                        <li class="eye">1,234</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="col-12 col-md-6 col-xl-4">
                            <a href="/campaign/review_view.php">
                                <div class="item ongoing">
                                    <span class="label">진행중</span>
                                    <figure>
                                        <img src="/assets/images/campaign/img_review03.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <small>해외아동결연</small>
                                    <h3>사랑의의료봉사, 고려대학교 교우회 감사패 수상</h3>
                                    <ul class="icon-list">
                                        <li class="calendar">2018-05-01</li>
                                        <li class="eye">1,234</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                    </ul>
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