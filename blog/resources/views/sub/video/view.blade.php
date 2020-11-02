@include('inc/head')
<script src="/js/swiper.min.js"></script>
<div id="section_inner">
    <h2 class="sub_page_title bar gray green"><span class="title_img_box"><img src="/img/video_ico01.png" alt="" class="green"></span> 간호직 공무원 <span>화면 왼편의 세부 카테고리를 클릭하시면 상세설명 확인이 가능합니다.</span></h2>
    <div class="video_view">
        <div class="top">
            <div class="left">
                <img src="/img/professor_sample_img.png" alt="">
            </div>
            <div class="right">
                <div class="info">
                    <span class="hot span_ico">인기</span>
                    <span class="new span_ico">NEW</span>
                    <h3>2021 간호관리 (정규이론반)</h3>
                    <div class="player">
                        <p>
                            <img src="/img/player_img01.jpg" alt="">
                            강의신청시 이용플레이어
                        </p>
                        <p>
                            <img src="/img/player_img02.jpg" alt="">
                            로그인 없이 강의 확인
                        </p>
                    </div>
                </div>
            </div>
            <div class="info_area">
                <div class="info_left left">
                    <div>
                        <p>담당교수</p>
                        <p>오정화</p>
                    </div>
                    <div>
                        <p>과목</p>
                        <p>간호관리</p>
                    </div>
                    <div>
                        <p>강의구성</p>
                        <p>총 4강 <span class="updating span_ico">업데이트중</span></p>
                    </div>
                    <div>
                        <p>수강기간</p>
                        <p>70일</p>
                    </div>
                </div>
                <div class="info_right right">
                    <div>
                        <p>수강료</p>
                        <p class="red"><b>150,000</b>원</p>
                    </div>
                    <div>
                        <p>교재비</p>
                        <p>2021 원픽 간호관리</p>
                    </div>
                    <div>
                        <p>교재비</p>
                        <p class="red"><b>150,000</b>원</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="tab_box">
                <div class="tabs on">강의설명</div>
                <div class="tabs">교수소개</div>
                <div class="tabs">교재소개</div>
                <div class="tabs">강의목차</div>
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
            <div class="tab on">
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>강좌 범위</h4>
                </div>
                <div class="text">
                    <p>Grammar Inside Lv.2 모든 개념 및 문제풀이</p>
                </div>
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>강좌 특징</h4>
                </div>
                <div class="text">
                    <p>
                        딱, 한번이라도 정화쌤의 강의를 들은 제자님들이라면 공감하는 백.퍼.만.족.<br/>
                        왜 기가막힌 간호관리, 기가막힌 정화쌤인지.<br/>
                        학교 끝날 때, 진작 기가막힌 정화쌤과 하지 못했을까 후회하지 말고.<br/>
                        간호관리공부, 정화쌤하세요~^_^                        
                    </p>
                </div>
            </div>
            <div class="tab">
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>교수소개</h4>
                </div>
                <div class="text">
                    <p>최정환교수</p>
                </div>
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>교수 주요경력</h4>
                </div>
                <div class="text">
                    <p>
                        ■ 최정환 교수 약력<br/>
                        현) 대방열림고시학원 생물 담당                 
                    </p>
                </div>
            </div>
            <div class="tab">
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>교재명</h4>
                </div>
                <div class="text">
                    <p>프린트 출력</p>
                </div>
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>저자</h4>
                </div>
                <div class="text">
                    <p>
                        대방열림고시학원               
                    </p>
                </div>
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>교재비</h4>
                </div>
                <div class="text">
                    <p>
                        0원               
                    </p>
                </div>
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>교재 상세소개</h4>
                </div>
                <div class="text">
                    <p>
                        강의 수강을 위해서는 나의강의실 내 자료실에서 프린트물을 출력하셔야 합니다.^^            
                    </p>
                </div>
                <div class="caption">
                    <img src="/img/circle_arrow_right.png" alt="">
                    <h4>출판사</h4>
                </div>
                <div class="text">
                    <p>
                                       
                    </p>
                </div>
            </div>
            <div class="tab">
                <div class="list_table" style="margin-top: 20px;">
                    <table>
                        <colgroup>
                            <col width="60px">
                            <col width="355px">
                            <col width="150px">
                        </colgroup>
                        <tr>
                            <th>번호</th>
                            <th>학습내용</th>
                            <th>시간</th>
                        </tr>
                        <tr>
                            <td>1강</td>
                            <td>1회 문제 (프린트는 나의 강의실내 수강중인 강의명옆에 자료실에서 다운받으실수 있습니다.^^)</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2강</td>
                            <td>2회 문제</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>3강</td>
                            <td>3회 문제</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>4강</td>
                            <td>4회 문제 (종강 ^^ - 수고하셨습니다~)</td>
                            <td>50</td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
</div>
@include('inc/footer')