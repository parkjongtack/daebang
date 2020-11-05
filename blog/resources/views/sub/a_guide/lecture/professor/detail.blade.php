@include('inc/head')
<script src="/js/swiper.min.js"></script>
<div id="section_inner">
    {{-- <h2 class="sub_page_title bar gray">교수님 소개</h2> --}}
    <div class="professor_detail">
        <div class="top">
            <div class="professor_detail_inner">
                <div class="profile">
                    <div class="img_box">
                        <img src="/img/professor_detail_sample_img.png" alt="프로필사진">
                    </div>
                    <div class="profile_info">
                        <div class="profile_info_inner">
                            <div class="text">
                                <p>2021 간호관리 (정규이론반)</p>
                                <h3><b>오정화</b> 선생님</h3>
                            </div>
                            <div class="btn_box">
                                <a href="#none">프로필 보기</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="board_wrap">
                    <div class="main_notice_box">
                        <h3>선생님 Hi<span><a href="#none">+</a></span></h3>
                        <ul>
                            <li><a href="#none">대방열림고시학원에서 알려드립니다.1</a></li>
                            <li><a href="#none">대방열림고시학원에서 알려드립니다.2</a></li>
                        </ul>
                    </div>
                    <div class="main_notice_box">
                        <h3>공지사항<span><a href="#none">+</a></span></h3>
                        <ul>
                            <li><a href="#none">대방열림고시학원에서 알려드립니다.1</a></li>
                            <li><a href="#none">대방열림고시학원에서 알려드립니다.2</a></li>
                        </ul>
                    </div>
                    <div class="main_notice_box">
                        <h3>대방 TV<span><a href="#none">+</a></span></h3>
                        <div class="tv_slide swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image: url('/img/tv_sample_bg.jpg')">
                                    <div class="slide_bg"></div>
                                    <img src="/img/play_btn.png" alt="play">
                                    <p>제목입니다.제목입니다.제목입니다.제목입니다.제목입니다.제목입니다.</p>
                                </div>
                            </div>
                            <div class="swiper-button-prev"><img src="/img/tv_prev.png" alt=""></div>
                            <div class="swiper-button-next"><img src="/img/tv_next.png" alt=""></div>
                        </div>
                    </div>
                    <script>
                        var swiper = new Swiper('.tv_slide', {
                            slidesPerView: 1,
                            spaceBetween: 90,
                            loop: true,
                            speed: 2000,
                            width: 220,
                            // autoplay: {
                            //     delay: 4000,
                            //     disableOnInteraction :false,
                            // },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            // pagination: {
                            //   el: '.swiper-pagination-custom',
                            //   clickable: true,
                            // },
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="bot">
            <div class="tab_box">
                <div class="tabs on">전체 강좌</div>
                <div class="tabs">커리큘럼</div>
                <div class="tabs">공지사항</div>
                <div class="tabs">선생님 Hi</div>
            </div>
            <script type="text/javascript">
                $('.tabs').click(function(){
                    var idx = $(this).index();
                    $('.tabs').removeClass('on');
                    $(this).addClass('on');

                    $('.tab').removeClass('on');
                    $('.tab').eq(idx).addClass('on');
                });
            </script>
            <div class="table_box tab qa_box on">
                <p class="cnt">총 <b class="pink">20</b>개의 강좌가 있습니다.</p>
                <div class="list_table">
                    <table>
                        <colgroup>
                            <col width="130px">
                            <col width="355px">
                            <col width="150px">
                            <col width="170px">
                        </colgroup>
                        <tr>
                            <th>과목</th>
                            <th>강좌명</th>
                            <th>강의맛보기</th>
                            <th>신청</th>
                        </tr>
                        <tr>
                            <td>간호관리</td>
                            <td class="middle">
                                <span class="hot">인기</span>
                                <span class="new">NEW</span>
                                <span class="updating">업데이트중</span>
                                <span class="update_completed">업데이트 완료</span>
                                <h3>2021 간호관리 (정규이론반)</h3>
                                <p><b>교재 : </b>2021 원픽 간호관리</p>
                                <div>
                                <p class="see bl1">강좌소개 <span>></span></p>
                                <p class="see">교재소개 <span>></span></p>
                                <p class="see br1">강의목록 <span>></span></p>
                                </div>
                                <p class="date_info">4강 l 120일</p>
                            </td>
                            <td>
                                <img src="/img/player_img01.jpg" alt="">
                                <p class="caption" style="margin-bottom: 5px;">강의신청시 이용플레이어</p>
                                <img src="/img/player_img02.jpg" alt="">
                                <p class="caption">로그인 없이 강의 확인</p>
                            </td>
                            <td>
                                <p>
                                    <label class="container">강좌
                                        <input type="checkbox" id="agree1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="price"><b>1,500,000</b>원</span>
                                </p>
                                <label class="container">교재
                                    <input type="checkbox" id="agree1">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="price"><b>23,000</b>원</span>
                            </td>
                        </tr>
                        <tr class="hide_middle">
                            <td class="no_padding" colspan="5">
                                <div class="lecture_detail first">
                                    <h3>강좌 범위</h3>
                                    <p>
                                        [내신영어 3-2 전범위 : 동아(윤)]<br/>
    <br/>
                                        Lesson 05. The Team Behind the Team<br/>
                                        Lesson 06. Stories for All Time<br/>
                                        Lesson 07. Technology in Our Lives<br/>
                                        Lesson 08. The Joseon Dynasty Through Paintings<br/>                                    
                                    </p>
                                    <h3>강의 특징</h3>
                                    <p>
                                        ◈ 교재 안내<br/>
                                        중3 영어 동아(윤) 평가문제집과 김민아샘이 직접 제작한 교안으로 진행됩니다.<br/>
                                        (평가문제집은 수박씨 온라인서점 판매, 교안은 나의강의실에서 다운로드 가능)<br/>
                                        ◈ 본 강의는 기가막힌 kim쌤이 교과서, 자습서, 활동책까지 완벽 분석하여 만든<br/>
                                        최고의 교안으로 진행이 되며 문제풀이만 평가문제집을 활용합니다.                                    
                                    </p>
                                    <h3>수강 대상</h3>
                                    <p>
                                        ◈ 학교에서 동아(윤) 교과서를 사용하는 중학교 3학년 학생<br/>
                                        ◈ 2학기 중간고사+기말고사 범위를 모두 수강하고 싶은 학생<br/>
                                        ◈ 꼼꼼한 내신 강의를 원하는 학생<br/>
                                        ◈ 똑뿌러지는 확실한 영어강의를 원하는 학생                                    
                                    </p>
                                </div>
                                <div class="lecture_detail second">
                                    <ul>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lecture_detail third">
                                    <table>
                                        <colgroup>
                                            <col width="85px">
                                            <col width="400px">
                                            <col width="125px">
                                            <col width="145px">
                                        </colgroup>
                                        <tr>
                                            <th>강</th>
                                            <th>강좌명</th>
                                            <th>강의시간</th>
                                            <th>페이지</th>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold; color: #fd5e87;">Chapter 01</td>
                                        </tr>
                                        <tr>
                                            <td>1강</td>
                                            <td>01.강좌명1</td>
                                            <td>50분</td>
                                            <td>20페이지</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold; color: #fd5e87;">Chapter 02</td>
                                        </tr>
                                        <tr>
                                            <td>2강</td>
                                            <td>02.강좌명2</td>
                                            <td>20분</td>
                                            <td>30페이지</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold; color: #fd5e87;">Chapter 03</td>
                                        </tr>
                                        <tr>
                                            <td>3강</td>
                                            <td>03.강좌명3</td>
                                            <td>40분</td>
                                            <td>40페이지</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>간호관리</td>
                            <td class="middle">
                                <span class="hot">인기</span>
                                <span class="new">NEW</span>
                                <span class="updating">업데이트중</span>
                                <span class="update_completed">업데이트 완료</span>
                                <h3>2021 간호관리 (정규이론반)</h3>
                                <p><b>교재 : </b>2021 원픽 간호관리</p>
                                <div>
                                <p class="see bl1">강좌소개 <span>></span></p>
                                <p class="see">교재소개 <span>></span></p>
                                <p class="see br1">강의목록 <span>></span></p>
                                </div>
                                <p class="date_info">4강 l 120일</p>
                            </td>
                            <td>
                                <img src="/img/player_img01.jpg" alt="">
                                <p class="caption" style="margin-bottom: 5px;">강의신청시 이용플레이어</p>
                                <img src="/img/player_img02.jpg" alt="">
                                <p class="caption">로그인 없이 강의 확인</p>
                            </td>
                            <td>
                                <p>
                                    <label class="container">강좌
                                        <input type="checkbox" id="agree1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="price"><b>1,500,000</b>원</span>
                                </p>
                                <label class="container">교재
                                    <input type="checkbox" id="agree1">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="price"><b>23,000</b>원</span>
                            </td>
                        </tr>
                        <tr class="hide_middle">
                            <td class="no_padding" colspan="5">
                                <div class="lecture_detail first">
                                    <h3>강좌 범위</h3>
                                    <p>
                                        [내신영어 3-2 전범위 : 동아(윤)]<br/>
    <br/>
                                        Lesson 05. The Team Behind the Team<br/>
                                        Lesson 06. Stories for All Time<br/>
                                        Lesson 07. Technology in Our Lives<br/>
                                        Lesson 08. The Joseon Dynasty Through Paintings<br/>                                    
                                    </p>
                                    <h3>강의 특징</h3>
                                    <p>
                                        ◈ 교재 안내<br/>
                                        중3 영어 동아(윤) 평가문제집과 김민아샘이 직접 제작한 교안으로 진행됩니다.<br/>
                                        (평가문제집은 수박씨 온라인서점 판매, 교안은 나의강의실에서 다운로드 가능)<br/>
                                        ◈ 본 강의는 기가막힌 kim쌤이 교과서, 자습서, 활동책까지 완벽 분석하여 만든<br/>
                                        최고의 교안으로 진행이 되며 문제풀이만 평가문제집을 활용합니다.                                    
                                    </p>
                                    <h3>수강 대상</h3>
                                    <p>
                                        ◈ 학교에서 동아(윤) 교과서를 사용하는 중학교 3학년 학생<br/>
                                        ◈ 2학기 중간고사+기말고사 범위를 모두 수강하고 싶은 학생<br/>
                                        ◈ 꼼꼼한 내신 강의를 원하는 학생<br/>
                                        ◈ 똑뿌러지는 확실한 영어강의를 원하는 학생                                    
                                    </p>
                                </div>
                                <div class="lecture_detail second">
                                    <ul>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                                            <div class="text">
                                                <h5>2021 EBS 원픽 환경보건</h5>
                                                <p class="name">이승훈ㅣBTB Books</p>
                                                <a href="#none"><img src="/img/see_more_btn.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lecture_detail third">
                                    <table>
                                        <colgroup>
                                            <col width="85px">
                                            <col width="400px">
                                            <col width="125px">
                                            <col width="145px">
                                        </colgroup>
                                        <tr>
                                            <th>강</th>
                                            <th>강좌명</th>
                                            <th>강의시간</th>
                                            <th>페이지</th>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold; color: #fd5e87;">Chapter 01</td>
                                        </tr>
                                        <tr>
                                            <td>1강</td>
                                            <td>01.강좌명1</td>
                                            <td>50분</td>
                                            <td>20페이지</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold; color: #fd5e87;">Chapter 02</td>
                                        </tr>
                                        <tr>
                                            <td>2강</td>
                                            <td>02.강좌명2</td>
                                            <td>20분</td>
                                            <td>30페이지</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold; color: #fd5e87;">Chapter 03</td>
                                        </tr>
                                        <tr>
                                            <td>3강</td>
                                            <td>03.강좌명3</td>
                                            <td>40분</td>
                                            <td>40페이지</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                    {{-- <div class="paging">
                        <div class="paging">
                            <span onclick="javascript:page(1)">
                                <button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn_all.png" alt=""></button>
                            </span>
                            <span onclick="javascript:page(534)"><button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn.png" alt=""></button></span>
                            <span onclick="javascript:page(531)"><button type="button" class="btn btn-default">1</button></span>
                            <span onclick="javascript:page(532)"><button type="button" class="btn">2</button></span>
                            <span onclick="javascript:page(536)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn.png" alt=""></button></span><span onclick="javascript:page(541)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn_all.png" alt=""></button></span>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="tab">

            </div>
            <div class="qa_box tab">
                <div class="search_select">
                    <form action="">
                        <select name="">
                            <option value="">제목</option>
                            <option value="">분류</option>
                        </select>
                        <input type="text">
                        <input type="submit" value="검색">
                    </form>
                </div>
                <div class="list_table">
                    <table>
                        <colgroup>
                            <col width="60px">
                            <col width="355px">
                            <col width="150px">
                            <col width="110px">
                            <col width="70px">
                            <col width="110px">
                        </colgroup>
                        <tr>
                            <th>NO</th>
                            <th>제목</th>
                            <th>날짜</th>
                            <th>작성자</th>
                            <th>조회</th>
                        </tr>
                        <tr>
                            <td><span class="top">공지</span></td>
                            <td><a href="/community/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                            <td>2020-01-01</td>
                            <td>강산</td>
                            <td>99</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="/community/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                            <td>2020-01-01</td>
                            <td>강산</td>
                            <td>99</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="/community/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                            <td>2020-01-01</td>
                            <td>강산</td>
                            <td>99</td>
                        </tr>
                    </table>
                    <div class="paging">
                        <div class="paging">
                            <span onclick="javascript:page(1)">
                                <button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn_all.png" alt=""></button>
                            </span>
                            <span onclick="javascript:page(534)"><button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn.png" alt=""></button></span>
                            <span onclick="javascript:page(531)"><button type="button" class="btn btn-default">1</button></span>
                            <span onclick="javascript:page(532)"><button type="button" class="btn">2</button></span>
                            <span onclick="javascript:page(536)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn.png" alt=""></button></span><span onclick="javascript:page(541)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn_all.png" alt=""></button></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qa_box tab">
                <div class="list_table">
                    <div class="view_box" style="margin-bottom: 20px">
                        <ul>
                            <li>
                                <div class="line all_line">
                                    <h2 class="content">선생님 Hi 제목입니다.</h2>
                                </div>
                            </li>
                            <li>
                                <div class="line all_line">
                                    <p class="subject">작성일</p>
                                    <p class="content">2020-10-10</p>
                                </div>
                            </li>
                            <li>
                                <div class="line content_line">
                                    선생님 HI 내용입니다.<br/>
                                    선생님 HI 내용입니다.<br/>
                                    선생님 HI 내용입니다.<br/>
                                    선생님 HI 내용입니다.
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mar_top">
                        <div class="search_select" style="margin-bottom: 15px">
                            <form action="">
                                <select name="">
                                    <option value="">제목</option>
                                    <option value="">분류</option>
                                </select>
                                <input type="text">
                                <input type="submit" value="검색">
                            </form>
                        </div>
                        <table>
                            <colgroup>
                                <col width="60px">
                                <col width="355px">
                                <col width="150px">
                                <col width="110px">
                                <col width="70px">
                                <col width="110px">
                            </colgroup>
                            <tr>
                                <th>NO</th>
                                <th>제목</th>
                                <th>날짜</th>
                                <th>작성자</th>
                                <th>조회</th>
                            </tr>
                            <tr>
                                <td><span class="top">공지</span></td>
                                <td><a href="/community/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                                <td>2020-01-01</td>
                                <td>강산</td>
                                <td>99</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="/community/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                                <td>2020-01-01</td>
                                <td>강산</td>
                                <td>99</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="/community/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                                <td>2020-01-01</td>
                                <td>강산</td>
                                <td>99</td>
                            </tr>
                        </table>
                        <div class="paging">
                            <div class="paging">
                                <span onclick="javascript:page(1)">
                                    <button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn_all.png" alt=""></button>
                                </span>
                                <span onclick="javascript:page(534)"><button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn.png" alt=""></button></span>
                                <span onclick="javascript:page(531)"><button type="button" class="btn btn-default">1</button></span>
                                <span onclick="javascript:page(532)"><button type="button" class="btn">2</button></span>
                                <span onclick="javascript:page(536)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn.png" alt=""></button></span><span onclick="javascript:page(541)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn_all.png" alt=""></button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load', function(){
        console.log($('.middle p.see'))
        $('p.see').click(function(){
            var idx = $(this).index();
            
            $('.lecture_detail').hide();

            $(this).parent().parent().parent().next().children().children().eq(idx).show().toggleClass('on');
            // $('.lecture_detail').eq(idx).show().toggleClass('on');
            if(!$('.lecture_detail').hasClass("on")){
                $('.lecture_detail').eq(idx).hide();
            }
        });
    })
</script>
@include('inc/footer')