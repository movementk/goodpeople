<?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/dochead.php'); ?>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/header.php'); ?>
    <!-- Main Content -->
    <main id="content" class="admin-login">
        <div class="container">
            <article class="login-form">
                <form action="#">
                    <div class="article-header">
                        <p>
                            굿피플 웹사이트 운영을 위한 관리자 모드입니다.<br>
                            아이디와 비밀번호를 입력하신 후 로그인해 주시기 바랍니다.
                        </p>
                    </div>
                    <div class="article-content">
                        <div class="form-group">
                            <input type="text" id="adm-id" class="form-control" placeholder="아이디">
                            <label for="adm-id" class="sr-only">아이디</label>
                            <input type="password" id="adm-pw" class="form-control" placeholder="비밀번호">
                            <label for="adm-pw" class="sr-only">비밀번호</label>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-orange">로그인</button>
                            </p>
                        </div>
                        <p class="copyright">(C) <a href="http://movementk.co.kr/" target="_blank">MOVEMENT K GROUP</a>. ALL RIGHT RESERVED.</p>
                    </div>
                </form>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/docfoot.php'); ?>
</body>
</html>