<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/policy.css">
</head>
<body class="sub policy">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>We bring <span>hope</span> to neighbors<br>in despair around the world</h2>
        </div>
        <!-- page-path -->
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/_lnb.php'); ?>
    </div>
    
    <!-- page-intro -->
    <div class="page-intro">
        <div class="container">
            <div class="page-title">
                <h3>문의하기</h3>
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="pw-confirm">
    	<div class="container">
 			<article class="pw-form">
                <div class="form">
                    <form action="#">
                        <figure>
                            <img src="/assets/images/policy/img_lock.jpg" class="img-fluid" alt="">
                            <figcaption>
                                <h4>비밀번호 확인</h4>
                                <p>
                                    개인정보 보호를 위해 비밀번호를 한번 더 확인합니다. <br class="d-none d-md-block">
                                    타인에게 비밀번호가 노출되지 않도록 항상 주의하세요.
                                </p>
                            </figcaption>
                        </figure>
                        <div class="form-group">
                            <input type="password" class="form-control" id="u-pw" placeholder="비밀번호">
                            <label for="u-pw" class="sr-only">비밀번호 입력</label>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-orange">확인</button>
                            </p>
                        </div>
                    </form>
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