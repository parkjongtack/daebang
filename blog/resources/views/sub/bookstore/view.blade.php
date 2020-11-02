@include('inc/head')
<div id="section" class="blue">
    <div class="inner">
        <div id="side_menu">
            <ul class="sub_menu_box blue">
                <li class="top_name"><h2>인터넷 서점</h2></li>
                <li class="@if(request()->segment(2) == 'obstacle')on @endif">
                    <a href="/bookstore/view">학원강의용 서적<i class="fas fa-chevron-right"></i></a>
                </li>
                <li class="@if(request()->segment(2) == 'site')on @endif">
                    <a href="/bookstore/view">동영상 강의용 서적<i class="fas fa-chevron-right"></i></a>
                </li>
                <li class="@if(request()->segment(2) == 'install')on @endif">
                    <a href="/community/bbs/board_list">인터넷서점 정오표<i class="fas fa-chevron-right"></i></a>
                </li>
                <li class="@if(request()->segment(2) == 'remote')on @endif">
                    <a href="/community/bbs/board_list">인터넷서점 공지사항<i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
            <div class="side_middle_box">
                <a href="/guide/obstacle">
                    <img src="/img/side_middle_box_img5.png" alt="동영상 장애 가이드">
                </a>
                <span></span>
                <a href="/guide/ban">
                    <img src="/img/side_middle_box_img6.png" alt="아이디 공유금지">
                </a>        
            </div>
            <div class="side_cs_box">
                <p class="ft_gm">고객센터</p>
                <h2 class="ft_gm">02-823-4700</h2>
                <p>월~금 09:00~18:00<br/>토 09:00~14:00 (일, 공휴일 휴무)</p>
                <a href="/arcademy/map">찾아오시는 길<i class="fas fa-chevron-right"></i></a>
                <a href="#none">1:1 고객센터<i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div id="section_inner">
            <h2 class="sub_page_title bar gray blue"><img src="/img/book_title_ico.png" alt=""> 인터넷 서점</h2>
            <div class="bookstore_view">
                <div class="top">
                    <div class="img_box">
                        <img src="/img/book_sample_img05.png" alt="">
                        <a href="#none"><img src="/img/basket_btn.png" alt="장바구니 담기"></a>
                    </div>
                    <div class="info">
                        <h2>2021 EBS 원픽 환경보건</h2>
                        <div class="info_area">
                            <div class="info_left left">
                                <div>
                                    <p>출판사</p>
                                    <p>오정화</p>
                                </div>
                                <div>
                                    <p>정가</p>
                                    <p style="text-decoration: line-through"><b>28,000</b>원</p>
                                </div>
                            </div>
                            <div class="info_right right">
                                <div>
                                    <p>저자</p>
                                    <p>2021 원픽 간호관리</p>
                                </div>
                                <div>
                                    <p>할인가</p>
                                    <p class="red"><b>25,200</b>원</p>
                                </div>
                            </div>
                            <div class="info_left left">
                                <div>
                                    <p>판매가격</p>
                                    <p><b>25,200</b>원</p>
                                </div>
                                <div>
                                    <p>배송비</p>
                                    <p><b>3,000</b>원 <span>(해당상품을 포함하여 30,000원이상 구매시 무료)</span></p>
                                </div>
                                <div>
                                    <p>구매수량</p>
                                    <p>구매수량은 주문하실때 조정하실수 있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <h3>상품 상세정보</h3>
                    <p class="mt_20">
                        딱, 한번이라도 정화쌤의 강의를 들은 제자님들이라면 공감하는 백.퍼.만.족.<br/>
                        왜 기가막힌 간호관리, 기가막힌 정화쌤인지.<br/>
                        학교 끝날 때, 진작 기가막힌 정화쌤과 하지 못했을까 후회하지 말고.<br/>
                        간호관리공부, 정화쌤하세요~^_^
                    </p>
                    <h3>배송 정보</h3>
                    <h4>1.최소 3일 배송</h4>
                    <p>
                        대방열림고시학원은 우체국 택배를 이용한 배송을 하고 있으며, 배송은<b>주문후 2~3일정도</b> 소요됩니다.<br/>
                        (주문한 날짜로부터) 오후 12시 입금확인. 교환 및 환불은 제품수령 후 5일이내에 하셔야 합니다.<br/>
                        (발송완료 기준) 교재가 발송시 상태와 동일하지 않은 경우(접거나, 필기) 교환 및 환불처리는 되지 않습니다.<br/>
                        일부 도서산간 지역의 경우 배송기간이 조금 늘어날 수 있습니다.
                    </p>
                    <h4>2.배송료</h4>
                    <p>
                        대방열림고시학원에서 판매하는 상품은 30,000원 이상의 물품의 경우 무료 배송으로 하고 있습니다.<br/>
                        <b>30,000원 미만 구입 시 배송료 3,000원</b>이 추가됩니다. 동영상강의를 수강하고자 하는 경우 강의와 교재를<br/>
                        같이 주문해 주시면 배송료가 붙지 않습니다.
                    </p>
                    <h4>3.대방열림고시학원</h4>
                    <p>
                        대방열림고시학원에서 발송되는 모든 교재에 대해서는 그날그날 해당자료를 데이터로 기록하고 있습니다.<br/>
                        간혹 비양심적인 행동을 하는 사람들이 있는데. 끝까지 법적 책임을 묻습니다.
                    </p>
                    <h3>교환/환불 정보</h3>
                    <h4>대방열림고시학원</h4>
                    <p>
                        – 상품에 이상이 있을 경우 : 100% 교환 및 환불해 드립니다 (배송료 당사 부담)<br/>
                        – 고객 변심에 의한 교환시 : 상품을 수령 후 5일 이내에 교환 가능 (배송비 및 수수료 고객 부담)                        
                    </p>
                    <div class="table_box tab qa_box on">
                        <h3>상품 Q&A</h3>
                        <p class="cnt">총 <b class="pink">20</b>개의 Q&A가 있습니다.</p>
                        <div class="list_table">
                            <table>
                                <colgroup>
                                    <col width="80px">
                                    <col width="505px">
                                    <col width="100px">
                                    <col width="120px">
                                </colgroup>
                                <tbody><tr>
                                    <th>NO</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                    <th>작성자</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>QA입니다.QA입니다.QA입니다.</td>
                                    <td>2020-10-10</td>
                                    <td>홍길동</td>
                                </tr>
                            </tbody></table>
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
                            <div class="write_box">
                                <a href="/site_info/my_page/inquiry_write?be_type=video">글쓰기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc/footer')