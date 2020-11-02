@include('inc/head')
<link rel="stylesheet" href="/css/swiper.min.css">
<script src="/js/swiper.min.js"></script>
<section id="main">
    <div class="main_banner swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/img/main_banner1.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/main_banner1.png" alt="">
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <script>
        var swiper = new Swiper('.main_banner', {
            spaceBetween: 0,
            loop: true,
            speed: 1000,

            autoplay: {
                delay: 4000,
                disableOnInteraction :false,
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            breakpoints: {
                1920: {
                    width: 1920,
                },
            }
        });
    </script>
    <div class="main_sub_cate">
        <ul class="inner">
            <li>
                <a href="/arcademy/real_pass">
                    <img src="/img/main_sub_cate1.png" alt="">
                    <p>합격수기</p>
                </a>
            </li>
            <li>
                <a href="https://blog.naver.com/028234700/220841140862">
                    <img src="/img/main_sub_cate2.png" alt="">
                    <p>학원선택시<br/>주의할 점</p>
                </a>
            </li>
            <li>
                <a href="https://blog.naver.com/028234700/220793825566">
                    <img src="/img/main_sub_cate3.png" alt="">
                    <p>동영상강의<br/>이용방법</p>
                </a>
            </li>
            <li>
                <a href="#none">
                    <img src="/img/main_sub_cate4.png" alt="">
                    <p>대방열림 TV</p>
                </a>
            </li>
            <li>
                <a href="/community/bbs/board_view">
                    <img src="/img/main_sub_cate5.png" alt="">
                    <p>추천 카페</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="main_steady">
        <img src="/img/main_steady.png" alt="">
    </div>
    <div class="main_banner2">
        <div class="text_box ft_gm">
            <h2>다 같은 학원이 아닙니다!</h2>
            <p><strong>각 직렬별 현장강의</strong>가 연중 진행되고 있는 <strong>정식 학원</strong>입니다.</p>
            <p class="circle">서울특별시 남부교육청지원청 제 5585호</p>
        </div>
    </div>
    <div class="main_notieven_box inner">
        <div class="main_notice_box">
            <h3>공지사항<span><a href="/community/bbs/board_list">+</a></span></h3>
            <ul>
                <li><a href="/community/bbs/board_view">대방열림고시학원에서 알려드립니다.1</a></li>
                <li><a href="/community/bbs/board_view">대방열림고시학원에서 알려드립니다.2</a></li>
                <li><a href="/community/bbs/board_view">대방열림고시학원에서 알려드립니다.3</a></li>
                <li><a href="/community/bbs/board_view">대방열림고시학원에서 알려드립니다.4</a></li>
            </ul>
        </div>
        <div class="main_event_box">
            <h3>진행중인 이벤트<span class="swiper-pagination-custom1"><a href="#none" class="swiper-prev"></a><a href="#none" class="swiper-next"></a></span></h3>
            <div class="event_slide swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img_area">
                            <img src="/img/event_slide1.png" alt="">
                        </div>
                        <div class="date_area">
                            <p>이벤트 기간 : <span>2020-07-16 ~ 2020-09-30</span></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img_area">
                            <img src="/img/event_slide2.png" alt="">
                        </div>
                        <div class="date_area">
                            <p>이벤트 기간 : <span>2020-07-16 ~ 2020-09-30</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper('.event_slide', {
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            speed: 1000,
            width: 860,
            autoplay: {
                delay: 4000,
                disableOnInteraction :false,
            },
            navigation: {
                nextEl: '.swiper-pagination-custom1 .swiper-next',
                prevEl: '.swiper-pagination-custom1 .swiper-prev',
            },
            // pagination: {
            //   el: '.swiper-pagination-custom',
            //   clickable: true,
            // },
        });
    </script>
    <div class="main_cs_box">
        <div class="inner">
            <div>
                <h4>고객센터</h4>
                <P class="call_number ft_gm">02-823-4700</P>
                <P class="gray">
                    월~금 09:00~18:00<br/>토 09:00~14:00 (일, 공휴일 휴무)
                </P>
                <a href="/bbs/board_list" class="go_btn">자주하는 질문 바로가기</a>
            </div>
            <div>
                <h4>동영상강의 입급계좌</h4>
                <img src="/img/bank_logo.png" alt="우리은행 로고">
                <P class="ft_gm">1005-603-866062</P>
                <P class="gray">
                    예금주 : 대방메이저 주식회사
                </P>
                <a href="https://www.wooribank.com/" class="go_btn">우리은행 바로가기</a>
            </div>
            <div>
                <h4>현장강의 입금계좌</h4>
                <img src="/img/bank_logo.png" alt="우리은행 로고">
                <P class="ft_gm">1005-103-866255</P>
                <P class="gray">
                    예금주 : 대방메이저 주식회사
                </P>
                <a href="https://www.wooribank.com/" class="go_btn">우리은행 바로가기</a>
            </div>
            <div>
                <a href="/guide/remote">
                    <img class="img" src="/img/main_cs_box_img1.png" alt="PC 원격지원">
                </a>
            </div>
            <div>
                <a href="https://blog.naver.com/028234700/220793825566">
                    <img class="img" src="/img/main_cs_box_img2.png" alt="동영상 플레이어 이용방법">
                </a>
            </div>
        </div>  
    </div>
@include('inc/footer')