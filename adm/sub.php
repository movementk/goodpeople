<?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/dochead.php'); ?>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/header.php'); ?>
    <!-- Main Content -->
    <main id="content" class="page-content">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/aside.php'); ?>
        
        <!-- sub-content -->
        <section id="sub-content">
            <div class="page-header">
                <h2 class="page-title">관리자 정보설정</h2>
            </div>
            <!-- view -->
            <div class="section-content info-view">
                
            </div>
            
            <!-- write -->
            <div class="section-content info-write">
				<form action="#">
					<div class="table-wrap">
						<table class="table table-bordered type-2">
							<colgroup>
								<col style="width: 10%;">
								<col style="width: 40%;">
								<col style="width: 10%;">
								<col style="width: 40%;">
							</colgroup>
							<tbody>
								<tr>
									<th class="essential">
										<label for="u-id">아이디</label>
									</th>
									<td class="user-id">
										<div class="form-group">
											<input type="text" id="u-id" class="form-control">
										</div>
										<p class="attention">사용 가능한 아이디 입니다.</p>
									</td>
									<th class="essential">
										<label for="u-name">이름</label>
									</th>
									<td>
										<div class="form-group">
											<input type="text" id="u-name" class="form-control">
										</div>
									</td>
								</tr>
								<tr>
									<th class="essential">관리자 그룹</th>
									<td class="adm-group">
										<div class="form-group">
											<select class="form-control">
												<option>헬퍼스하이</option>
											</select>
										</div>
									</td>
									<th class="essential">
										<label for="department">소속부서</label>
									</th>
									<td>
										<div class="form-group">
											<input type="text" id="department" class="form-control">
										</div>
									</td>
								</tr>
								<tr>
									<th class="essential">
										<label for="u-pw">비밀번호</label>
									</th>
									<td>
										<div class="form-group">
											<input type="password" id="u-pw" class="form-control">
										</div>
									</td>
									<th class="essential">
										<label for="confirm-pw">비밀번호 확인</label>
									</th>
									<td>
										<div class="form-group">
											<input type="password" id="confirm-pw" class="form-control">
										</div>
									</td>
								</tr>
								<tr>
									<th class="essential">
										<label for="u-phone">휴대전화</label>
									</th>	
									<td>
										<div class="form-group">
											<input type="text" id="u-phone" class="form-control" placeholder="01012345678">
										</div>
									</td>
									<th>
										<label for="u-call">전화번호</label>
									</th>
									<td>
										<div class="form-group">
											<input type="text" id="u-call" class="form-control" placeholder="-">
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<label for="u-email">이메일</label>
									</th>
									<td>
										<div class="form-group">
											<input type="text" id="u-email" class="form-control">
										</div>
									</td>
									<th>생성일시</th>
									<td>2018-05-16 14:41:30</td>
								</tr>
								<tr>
									<th>최종 로그인</th>
									<td>2018-05-16 14:41:30</td>
									<th>최종수정</th>
									<td>2018-05-16 14:41:30</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn-area">
						<p>
							<button type="submit" class="btn btn-md btn-blue">수정하기</button>
							<a href="#" class="btn btn-md btn-gray" role="button">취소하기</a>
						</p>
					</div>
				</form>
            </div>
            
            <!-- list -->
            <div class="section-content info-list">
                <article>
                    <div class="article-header">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered type-2">
                                    <colgroup>
                                        <col style="width: 10%;">
                                        <col style="width: 15%;">
                                        <col style="width: 10%;">
                                        <col style="width: 15%;">
                                        <col style="width: 10%;">
                                        <col style="width: 15%;">
                                        <col style="width: 10%;">
                                        <col style="width: 15%;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>그룹</th>
                                            <td>2</td>
                                            <th>아이디</th>
                                            <td>4</td>
                                            <th>이름</th>
                                            <td>6</td>
                                            <th>휴대폰</th>
                                            <td>8</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-md btn-gray">검색하기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="article-content">
                        <div class="table-wrap">
                            <table class="table table-bordered type-1">
                                <colgroup>
                                    <col style="width: 10%;">
                                    <col style="width: 10%;">
                                    <col style="width: 10%;">
                                    <col style="width: 10%;">
                                    <col style="width: 10%;">
                                    <col style="width: 10%;">
                                    <col style="width: 20%;">
                                    <col style="width: 10%;">
                                    <col style="width: 10%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>그룹</th>
                                        <th>관리자명</th>
                                        <th>관리자 ID</th>
                                        <th>부서명</th>
                                        <th>휴대폰</th>
                                        <th>최근 로그인 일시</th>
                                        <th>상태</th>
                                        <th>관리</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="cease">중지</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="cease">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>헬퍼스하이</td>
                                        <td>홍길동</td>
                                        <td>helpershigh</td>
                                        <td>헬퍼스하이</td>
                                        <td>01012345678</td>
                                        <td>2018-05-16 14:41:30</td>
                                        <td class="normalit">정상</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm" role="button">수정</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-gray" role="button">등록하기</a>
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
                                <li>
                                    <a href="#">6</a>
                                </li>
                                <li>
                                    <a href="#">7</a>
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
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/adm/inc/docfoot.php'); ?>
    <script src="/adm/assets/js/common.js"></script>
</body>
</html>