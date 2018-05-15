<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/member.css">
</head>
<body class="sub member">
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
                <h3>로그인</h3>
                <p class="summary">굿피플은 UN경제사회이사회로 부터 특별 <br>협의 지위를 부여 받은 국제구호개발 NGO 입니다.</p>
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="login">
    	<div class="container">
 			<article class="login-form">
 			    <form action="#">
 			        <div class="form-group">
 			            <input type="text" id="user-id" class="form-control" placeholder="아이디">
 			            <label for="user-id" class="sr-only">아이디</label>
 			            <input type="password" id="user-pw" class="form-control" placeholder="비밀번호">
 			            <label for="user-pw" class="sr-only">비밀번호</label>
 			        </div>
 			        <div class="btn-area">
                        <button type="submit" class="btn btn-lg btn-or">로그인</button>
                        <hr>
 			            <p>
                            <i class="note join d-none d-md-block">
                                굿피플 회원이되어서 사랑을 나누어주세요.
                            </i>
 			                <a href="#" class="btn btn-md btn-white" role="button">회원가입</a>
 			            </p>
 			            <p>
                            <i class="note find d-none d-md-block">
                                회원아이디와 비밀번호가 생각나지 않으신가요?
                            </i>
 			                <a href="#" class="btn btn-md btn-white" role="button">ID/PW 찾기</a>
 			            </p>
 			        </div>
 			    </form>
 			</article>
    	</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>