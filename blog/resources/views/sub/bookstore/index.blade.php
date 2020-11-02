@include('inc/head')
<script src="/js/swiper.min.js"></script>
<div id="section_index">
    <div class="book_main inner">
        <div class="top">
            <div class="left_area">
                <div class="area_top">
                    <div class="best_item _item">
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img01.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img02.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img03.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img01.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img02.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img03.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img01.png" alt="">
                        </a>
                    </div>
                    <div class="new_item _item">
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img03.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img02.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img01.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img03.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img02.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img01.png" alt="">
                        </a>
                        <a href="/bookstore/view">
                            <img src="/img/book_sample_img03.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="area_bot">
                    <div class="book_banner01 swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/img/short_banner_sample.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/short_banner_sample.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="book_banner02 swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/img/long_banner_sample.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/long_banner_sample.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    var swiper1 = new Swiper('.book_banner01', {
                        spaceBetween: 10,
                        loop: true,
                        speed: 1000,
                        width: 270,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction :false,
                        },
                        pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        },
                    });

                    var swiper2 = new Swiper('.book_banner02', {
                        spaceBetween: 10,
                        loop: true,
                        speed: 1000,
                        width: 610,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction :false,
                        },
                        pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        },
                    });
                </script>
            </div>
            <div class="right_area">
                <div class="area_top">
                    <div class="item_list">
                        <ul>
                            <li>
                                <h4><a href="/bookstore/list">학원 강의용 서적<i class="fas fa-chevron-right"></i></a></h4>
                                <div class="text">
                                    <a href="/bookstore/list">간호직</a>
                                    <a href="/bookstore/list">보건직</a>
                                    <a href="/bookstore/list">의료기술직</a>
                                    <a href="/bookstore/list" class="no_bar">보건진료직</a>
                                    <a href="/bookstore/list">식품위생직</a>
                                    <a href="/bookstore/list">환경직</a>
                                    <a href="/bookstore/list">위생사</a>
                                    <a href="/bookstore/list" class="no_bar">간호사</a>
                                    <a href="/bookstore/list">보건교사</a>
                                    <a href="/bookstore/list" class="no_bar">공통과목</a>
                                </div>
                            </li>
                            <li>
                                <h4><a href="/bookstore/list">동영상 강의용 서적<i class="fas fa-chevron-right"></i></a></h4>
                                <div class="text">
                                    <a href="/bookstore/list">간호직</a>
                                    <a href="/bookstore/list">보건직</a>
                                    <a href="/bookstore/list">의료기술직</a>
                                    <a href="/bookstore/list" class="no_bar">보건진료직</a>
                                    <a href="/bookstore/list">식품위생직</a>
                                    <a href="/bookstore/list">환경직</a>
                                    <a href="/bookstore/list">위생사</a>
                                    <a href="/bookstore/list" class="no_bar">간호사</a>
                                    <a href="/bookstore/list">보건교사</a>
                                    <a href="/bookstore/list" class="no_bar">공통과목</a>
                                </div>
                            </li>
                            <li>
                                <h4><a href="/community/bbs/board_list">인터넷서점 정오표<i class="fas fa-chevron-right"></i></a></h4>
                            
                            </li>
                            <li>
                                <h4><a href="/community/bbs/board_list">인터넷 서점 공지사항<i class="fas fa-chevron-right"></i></a></h4>
                            
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="area_bot">
                    <h4><span>이달의 </span>인기판매 도서</h4>
                    <div class="text">
                        <p>2021 EBS 원픽 환경보건</p>
                        <p>2021 원픽 지역사회간호</p>
                        <p>2021 원픽 간호관리</p>
                        <p>2021 이승훈 공중보건</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot">
            <div class="book_sale_list">
                <h4><img src="/img/book_sale_list.png" alt=""></h4>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
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
                            <a href="/bookstore/view"><img src="/img/see_more_btn.png" alt=""></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@include('inc/footer')