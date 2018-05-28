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
                <h3>문의</h3>
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="inquiry">
    	<div class="container">
 			<article class="inquiry-write">
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
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-white" role="button">취소하기</a>
                                <button type="submit" class="btn btn-md btn-black">등록하기</button>
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