@include('inc/head')
<div id="section" class="blue">
    <div class="inner">
        <div id="side_menu">
            <ul class="sub_menu_box blue">
                <li class="top_name"><h2>인터넷 서점</h2></li>
                <li class="@if(request()->segment(2) == 'obstacle')on @endif">
                    <a href="/bookstore/list">학원강의용 서적<i class="fas fa-chevron-right"></i></a>
                </li>
                <li class="@if(request()->segment(2) == 'site')on @endif">
                    <a href="/bookstore/list">동영상 강의용 서적<i class="fas fa-chevron-right"></i></a>
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
            <h2 class="sub_page_title bar gray">교수님 소개</h2>
            <div class="professor_list">
                <div class="list_box">
                    <ul>
                        <li class="on no_top">
                            <a href="#none"><img src="/img/professor_ico01.png" alt="ico">간호직 공무원</a>
                        </li>
                        <li class="no_top">
                            <a href="#none"><img src="/img/professor_ico02.png" alt="ico">보건직 공무원</a>
                        </li>
                        <li class="no_top">
                            <a href="#none"><img src="/img/professor_ico03.png" alt="ico">보건연구사</a>
                        </li>
                        <li class="no_top">
                            <a href="#none"><img src="/img/professor_ico04.png" alt="ico">보건복지부 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico05.png" alt="ico">보건진료직 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico06.png" alt="ico">의료기술직 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico07.png" alt="ico">방역직 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico08.png" alt="ico">식품위생직 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico09.png" alt="ico">환경직 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico10.png" alt="ico">환경연구사</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico11.png" alt="ico">조리직 공무원</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico12.png" alt="ico">영양교사</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico13.png" alt="ico">보건교사</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico14.png" alt="ico">영양사</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico15.png" alt="ico">위생사</a>
                        </li>
                        <li>
                            <a href="#none"><img src="/img/professor_ico16.png" alt="ico">간호사</a>
                        </li>
                        <li class="no_bot">
                            <a href="#none"><img src="/img/professor_ico17.png" alt="ico">식품(산업)기사</a>
                        </li>
                        <li class="no_bot">
                            <a href="#none"><img src="/img/professor_ico18.png" alt="ico">교육학</a>
                        </li>
                    </ul>
                </div>
                <div class="book_sale_list">
                    <ul>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img02.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img03.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img03.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img02.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img02.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img01.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="ssum"><img src="/img/book_sample_img02.png" alt=""></div>
                            <div class="text">
                                <h5>2021 EBS 원픽 환경보건</h5>
                                <p class="name">이승훈ㅣBTB Books</p>
                                <div class="price">
                                    <p>정가 : <span>28,000원</span></p>
                                    <p>판매가 : <span class="blue"><b>23,200</b>원</span></p>
                                </div>
                                <a href="#none"><img src="/img/basket_btn2.png" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc/footer')