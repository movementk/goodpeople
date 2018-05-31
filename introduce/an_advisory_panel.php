<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body class="sub introduce">
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
                <h3>함께하는 사람들</h3>
            </div>
            <nav class="lnb">
                <ul class="tab-list">
                    <li><a href="/introduce/ambassadors.php">나눔대사</a></li>
                    <li><a href="#">조직도</a></li>
                    <li class="active"><a href="/introduce/directorate.php">이사회 및 위원회</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
	<main id="content" class="committee">
		<div class="container">
            <section class="an-advisory-panel">
                <div class="section-header">
                    <h4>이사회 및 위원회</h4>
                    <nav class="sub-tab-list">
                        <ul>
                            <li><a href="/introduce/directorate.php">이사회(사단,복지)</a></li>
                            <li class="active"><a href="/introduce/an_advisory_panel.php">자문단</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="section-content">
                    <article>
                        <h5>&lt; 사단법인 이사 &gt;</h5>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 15%;">
                                    <col style="width: 33%;">
                                    <col style="width: 33%;">
                                    <col style="width: 19%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>순번</th>
                                        <th>성 명</th>
                                        <th>기업(학교)명</th>
                                        <th>구 분</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="num">1</td>
                                        <td>선진경 대표</td>
                                        <td>오마이 컴퍼니</td>
                                        <td>Funding</td>
                                    </tr>
                                    <tr>
                                        <td class="num">2</td>
                                        <td>한동우 교수</td>
                                        <td>강남대학교</td>
                                        <td>교수</td>
                                    </tr>
                                    <tr>
                                        <td class="num">3</td>
                                        <td>최상미 교수</td>
                                        <td>동국대학교</td>
                                        <td>교수</td>
                                    </tr>
                                    <tr>
                                        <td class="num">4</td>
                                        <td>안수남 대표</td>
                                        <td>다솔세무법인</td>
                                        <td>세무</td>
                                    </tr>
                                    <tr>
                                        <td class="num">5</td>
                                        <td>염창환 원장</td>
                                        <td>비타민엔젤스</td>
                                        <td>의료</td>
                                    </tr>
                                    <tr>
                                        <td class="num">6</td>
                                        <td>유영진 대표</td>
                                        <td>소셜가드너</td>
                                        <td>sns</td>
                                    </tr>
                                    <tr>
                                        <td class="num">7</td>
                                        <td>조소연 박사</td>
                                        <td>사회복지연구소 마:실</td>
                                        <td>사례개발</td>
                                    </tr>
                                    <tr>
                                        <td class="num">8</td>
                                        <td>양창국 사장</td>
                                        <td>청밀</td>
                                        <td>기업인</td>
                                    </tr>
                                    <tr>
                                        <td class="num">9</td>
                                        <td>김현명 부회장</td>
                                        <td>LA총영사</td>
                                        <td>외교관</td>
                                    </tr>
                                    <tr>
                                        <td class="num">10</td>
                                        <td>이태호 대표</td>
                                        <td>임팩트워커스</td>
                                        <td>모금</td>
                                    </tr>
                                    <tr>
                                        <td class="num">11</td>
                                        <td>조문열 변호사</td>
                                        <td>변호사</td>
                                        <td>변호사</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </div>
            </section>
		</div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/sitemap.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>