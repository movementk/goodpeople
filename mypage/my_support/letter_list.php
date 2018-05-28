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
 			<article class="letter-list">
 			    <div class="article-header">
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
 			    </div>
 			    <div class="article-content">
 			        <div class="table-wrap">
 			            <table class="table">
 			                <thead>
 			                    <tr>
 			                        <th>번호</th>
 			                        <th>편지 작성일</th>
 			                        <th>아동번호</th>
 			                        <th>아동이름</th>
 			                        <th>상태</th>
 			                    </tr>
 			                </thead>
                            <!-- 
                                .waiting 발송대기
                                .success 발송완료
                            -->
 			                <tbody>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state waiting">발송대기</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state waiting">발송대기</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state waiting">발송대기</p></td>
 			                    </tr>
 			                    <tr>
 			                        <td class="num">123</td>
 			                        <td class="date">2018-05-01</td>
 			                        <td class="children-num"><a href="#">KN-2010-Nai0030</a></td>
 			                        <td><a href="#">커시 카베테</a></td>
 			                        <td><p class="state success">발송완료</p></td>
 			                    </tr>
 			                </tbody>
 			            </table>
 			        </div>
 			        <div class="btn-area">
 			            <p>
 			                <a href="#" class="btn btn-md" role="button">편지쓰기</a>
 			            </p>
 			        </div>
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