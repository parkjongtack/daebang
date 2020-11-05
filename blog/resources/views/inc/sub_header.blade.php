<body>
    <link rel="stylesheet" property="stylesheet" href="/css/sub.css">
    <div id="container">
        {{-- <div id="bottom_banner">
            <span></span>
            <a href="#none">
                <img src="/img/bottom_banner_sample.png" alt="">
            </a>
        </div> --}}
        <header id="header">
            {{-- <div class="top_banner">
                <img src="/img/top_banner_sample.png" alt="">
            </div> --}}
            <div class="member_box">
                <div class="inner">
                    <a href="/site_info/my_page/shopping">장바구니</a>
                    <span>ㅣ</span>
                    <a href="/">메인</a>
                    <span>ㅣ</span>
                    <a href="/bookstore">인터넷서점</a>
                    {{-- <span>ㅣ</span>
                    <a href="">고객센터</a>
                    <span>ㅣ</span>
                    <a href="/">HOME</a> --}}
                </div>
            </div>
            <div class="logo_box">
                <div class="inner">
                    <div class="my_content">
                        <a href="/site_info/my_classroom/running">
                            <img src="/img/my_img1.png" alt="">
                        </a>
                        <a href="/">
                            <img src="/img/my_img2.png" alt="">
                        </a>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <img src="/img/sub_logo.png" alt="">
                        </a>
                    </div>
                    <div class="logo_banner">
                        {{-- <a href="#none">
                            <img src="/img/logo_banner.png" alt="">
                        </a> --}}
                    </div>
                </div>
            </div>
        </header>
        @if(request()->segment(1) == 'arcademy' || request()->segment(1) == 'video')
        <div id="section" class="green">
        @else
        <div id="section">
        @endif
            <section>
            <div class="inner">
                @if(request()->segment(1) == 'video' && request()->segment(2) == '')
                @else
                <div id="side_menu">
                    @if(request()->segment(1) == 'guide')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>이용가이드</h2></li>
                        <li class="@if(request()->segment(2) == 'obstacle')on @endif">
                            <a href="/guide/obstacle">동영상 장애가이드<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'site')on @endif">
                            <a href="/guide/site">사이트 이용 가이드<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'install')on @endif">
                            <a href="/guide/install">프로그램설치<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'remote')on @endif">
                            <a href="/guide/remote">원격지원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'ban')on @endif">
                            <a href="/guide/ban">아이디 공유금지<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'arcademy')
                    <ul class="sub_menu_box green">
                        <li class="top_name"><h2>학원소개</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/arcademy/greeting">인사말<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/arcademy/history">운영방식 및 연혁<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/arcademy/real_pass">REAL 합격수기<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/arcademy/pass">본원출신 합격자<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'map')on @endif">
                            <a href="/arcademy/map">학원 찾아오시는길<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'a_guide')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>학원안내</h2></li>
                        <li class="@if(request()->segment(2) == 'news')on @endif">
                            <a href="/a_guide/news/bbs/list">학원소식<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'notice')on @endif">
                            <a href="/a_guide/notice/bbs/list">주요 공지사항<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'professor')on @endif">
                            <a href="/a_guide/lecture/professor">교수님 소개<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'free')on @endif">
                            <a href="/a_guide/free/bbs/list">자유 게시판<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'faq')on @endif">
                            <a href="/a_guide/faq">자주하는 질문<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/a_guide/greeting">인사말<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/a_guide/history">운영방식 및 연혁<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'map')on @endif">
                            <a href="/a_guide/map">학원오시는길<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'cafe')on @endif">
                            <a href="/a_guide/cafe/bbs/view">추천카페 안내<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'invitation')on @endif">
                            <a href="/a_guide/invitation/bbs/view">강사님 초빙<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    {{-- @elseif(request()->segment(1) == 'lecture' && request()->segment(2) == 'moving')
                    <ul class="sub_menu_box green">
                        <li class="top_name"><h2>전체강좌</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/community/bbs/list">간호직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/community/bbs/list">보건직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/community/bbs/list">보건연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">보건복지부 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">보건진료직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">의료기술직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">방역직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">식품위생직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">환경직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">환경연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">조리직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">영양교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">보건교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">영양사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">위생사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">간호사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">식품(산업)기사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">교육학<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul> --}}
                    @elseif(request()->segment(1) == 'lecture' && request()->segment(2) == '')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>전체강좌</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/lecture">간호직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/lecture">보건직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/lecture">보건연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">보건복지부 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">보건진료직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">의료기술직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">방역직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">식품위생직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">환경직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">환경연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">조리직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">영양교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">보건교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">영양사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">위생사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">간호사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">식품(산업)기사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture">교육학<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'lecture' && request()->segment(2) == 'professor' && request()->segment(3) == 'detail')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>교수님 소개</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/lecture/professor/detail">생물 <span class="name">최정환</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/lecture/professor/detail">간호관리 <span class="name">오정화</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/lecture/professor/detail">지역사회간호 <span class="name">김희영</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">보건행정 <span class="name">김희영</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">공중보건 <span class="name">김희영</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">공중보건 <span class="name">이승훈</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">환경보건 <span class="name">이승훈</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">화학 <span class="name">강두수</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">환경화학 <span class="name">강두수</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">식품위생 <span class="name">김지연</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">환경공학 <span class="name">평혜림</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">식품화학개론 <span class="name">이경연</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">국어 <span class="name">김철민</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">영어 <span class="name">오권영</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">영어 <span class="name">박동현</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor/detail">한국사 <span class="name">강하영</span><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'lecture' && request()->segment(2) == 'professor')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>교수님 소개</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/lecture/professor">간호직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/lecture/professor">보건직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/lecture/professor">보건연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">보건복지부 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">보건진료직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">의료기술직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">방역직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">식품위생직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">환경직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">환경연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">조리직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">영양교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">보건교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">영양사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">위생사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">간호사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">식품(산업)기사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/lecture/professor">교육학<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'video' || request()->segment(2) == 'list')
                    <ul class="sub_menu_box green">
                        <li class="top_name"><h2>전체강좌</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/video/list">간호직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/video/list">보건직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/video/list">보건연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">보건복지부 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">보건진료직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">의료기술직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">방역직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">식품위생직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">환경직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">환경연구사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">조리직 공무원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">영양교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">보건교사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">영양사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">위생사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">간호사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">식품(산업)기사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/video/list">교육학<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'lecture' && request()->segment(2) == 'moving')
                    <ul class="sub_menu_box green">
                        <li class="top_name"><h2>교수별 소개</h2></li>
                        <li class="@if(request()->segment(2) == 'greeting')on @endif">
                            <a href="/community/bbs/list">학원소식<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'history')on @endif">
                            <a href="/community/bbs/list">공지사항<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'real_pass')on @endif">
                            <a href="/community/bbs/list">자주하는 질문<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/community/bbs/list">자유 게시판<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'site_info' && request()->segment(2) == 'my_page')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>마이 페이지</h2></li>
                        <li class="@if(request()->segment(3) == 'order')on @endif">
                            <a href="/site_info/my_page/order">주문/배송현황<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'receipt')on @endif">
                            <a href="/site_info/my_page/receipt">영수증<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'shopping')on @endif">
                            <a href="/site_info/my_page/shopping">장바구니<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(5) == 'video_qa')on @endif">
                            <a href="/site_info/my_page/bbs/list/video_qa">동영상 Q&A<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(5) == 'bookstore_qa')on @endif">
                            <a href="/site_info/my_page/bbs/list/bookstore_qa">인터넷 서점 Q&A<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(5) == 'inquiry')on @endif">
                            <a href="/site_info/my_page/bbs/list/inquiry">1:1문의<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'my_info')on @endif">
                            <a href="/site_info/my_page/my_info">회원정보 관리<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'member_out')on @endif">
                            <a href="/site_info/my_page/member_out">회원탈퇴<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'site_info' && request()->segment(2) == 'my_classroom')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>나의강의실</h2></li>
                        <li class="@if(request()->segment(3) == 'running')on @endif">
                            <a href="/site_info/my_classroom/running">수강중인 강의<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'running_end')on @endif">
                            <a href="/site_info/my_classroom/running_end">수강종료 강의<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(3) == 'device')on @endif">
                            <a href="/site_info/my_classroom/device">수강 기기인증<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(5) == 'practice')on @endif">
                            <a href="/site_info/my_classroom/bbs/list/practice">모의고사 다운로드<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'site_guide')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>이용가이드</h2></li>
                        <li class="@if(request()->segment(2) == 'ban')on @endif">
                            <a href="/site_guide/ban">아이디 공유금지<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'install')on @endif">
                            <a href="/site_guide/install">프로그램 설치<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'remote')on @endif">
                            <a href="/site_guide/remote">원격지원<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'site')on @endif">
                            <a href="/site_guide/site">사이트 이용가이드<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'obstacle')on @endif">
                            <a href="/site_guide/obstacle">동영상 장애가이드<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'laboratory')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>합격 연구소</h2></li>
                        <li class="@if(request()->segment(2) == 'pass')on @endif">
                            <a href="/laboratory/pass/bbs/list">합격수기<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'install')on @endif">
                            <a href="/laboratory/">온라인 모의고사<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'remote')on @endif">
                            <a href="/laboratory/remote">합격예측 서비스<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'exam')on @endif">
                            <a href="/laboratory/exam/bbs/list">시험 제대로 알기<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'local')on @endif">
                            <a href="/laboratory/local/bbs/list">본원출신 합격자<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @elseif(request()->segment(1) == 'announcement')
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>시험공고</h2></li>
                        <li class="@if(request()->segment(2) == 'competition')on @endif">
                            <a href="/announcement/competition/bbs/list">시험공고/경쟁률/합격선<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'news')on @endif">
                            <a href="/announcement/news/bbs/list">수험가 뉴스<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @else
                    <ul class="sub_menu_box">
                        <li class="top_name"><h2>사이트안내</h2></li>
                        <li class="@if(request()->segment(2) == 'use_info')on @endif">
                            <a href="/site_info/use_info">이용약관<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'personal')on @endif">
                            <a href="/site_info/personal">개인정보 취급방침<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'agree')on @endif">
                            <a href="/site_info/agree">이메일 무단수집 거부<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'join')on @endif">
                            <a href="/site_info/join/join1">회원가입<i class="fas fa-chevron-right"></i></a>
                        </li>
                        <li class="@if(request()->segment(2) == 'login')on @endif">
                            <a href="/site_info/login">로그인<i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    @endif
                    <div class="side_middle_box">
                        {{-- @if(request()->segment(1) == 'guide')
                        <a href="/guide/obstacle">
                            <img src="/img/side_middle_box_img3.png" alt="동영상 장애 가이드">
                        </a>
                        <span></span>
                        <a href="/guide/ban">
                            <img src="/img/side_middle_box_img4.png" alt="아이디 공유금지">
                        </a>
                        @else --}}
                        <a href="/guide/obstacle">
                            <img src="/img/side_middle_box_img1.png" alt="동영상 장애 가이드">
                        </a>
                        <span></span>
                        <a href="/guide/ban">
                            <img src="/img/side_middle_box_img2.png" alt="아이디 공유금지">
                        </a>
                        {{-- @endif --}}
                        
                    </div>
                    <div class="side_cs_box">
                        <p class="ft_gm">고객센터</p>
                        <h2 class="ft_gm">02-823-4700</h2>
                        <p>월~금 09:00~18:00<br/>토 09:00~14:00 (일, 공휴일 휴무)</p>
                        <a href="/arcademy/map">찾아오시는 길<i class="fas fa-chevron-right"></i></a>
                        <a href="/site_info/my_page/bbs/write/inquiry">1:1 고객센터<i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                @endif
