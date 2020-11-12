<body>
    <header class="gnbMenu">
		<div class="gnbTop">
			<form name="frmMenu" id="frmMenu" method="post">
			<input type="hidden" name="webMode" value="menu">
			</form>
			<h1>
                <a href="/boffice/lecture/video/list"></a>
            </h1>
			<span>이현주1님 로그인 중입니다. </span>
			<ul>
				<li class="home" @if(request()->segment(3) == 'video') class="on"@endif>
                    <a href="/boffice/">HOME</a>
                </li>
                <li class="homepage" @if(request()->segment(3) == 'video') class="on"@endif>
                    <a href="/" target="_blank">학원홈페이지</a>
                </li>
                <li class="logout" @if(request()->segment(3) == 'video') class="on"@endif>
                    <a href="/boffice/logout">로그아웃</a>
                </li>
			</ul>
		</div>
		<div class="gnb">
			<ul id="mainMenuList">
                <li id="mainMenu110" @if(request()->segment(2) == 'lecture') class="on"@endif>
                    <a href="/boffice/lecture/cate/setting">
                        <span> <img src="/img/gnbIcon1.jpg" alt="">강좌 서점 관리</span>
                    </a>
                </li>
                <li id="mainMenu120" @if(request()->segment(2) == 'order') class="on"@endif>
                    <a href="/boffice/order/video/list">
                        <span> <img src="/img/gnbIcon2.jpg" alt="">주문 관리</span>
                    </a>
                </li>
                <li id="mainMenu130" @if(request()->segment(2) == 'member') class="on"@endif>
                    <a href="/boffice/member/all/list">
                        <span> <img src="/img/gnbIcon3.jpg" alt="">회원 관리</span>
                    </a>
                </li>
                <li id="mainMenu140" @if(request()->segment(2) == 'statistics') class="on"@endif>
                    <a href="/boffice/statistics/video/list">
                        <span> <img src="/img/gnbIcon4.jpg" alt="">통계</span>
                    </a>
                </li>
                <li id="mainMenu150" @if(request()->segment(2) == 'cs_center') class="on"@endif>
                    <a href="/boffice/cs_center/video_qa/list">
                        <span> <img src="/img/gnbIcon5.jpg" alt="">고객센터</span>
                    </a>
                </li>
                <li id="mainMenu160" @if(request()->segment(2) == 'community') class="on"@endif>
                    <a href="/boffice/community/news/list">
                        <span> <img src="/img/gnbIcon6.jpg" alt="">커뮤니티</span>
                    </a>
                </li>
                <li id="mainMenu180" @if(request()->segment(2) == 'mobile') class="on"@endif>
                    <a href="/boffice/mobile/default/list">
                        <span> <img src="/img/gnbIcon7.jpg" alt="">모바일 관리</span>
                    </a>
                </li>
                <li id="mainMenu190" @if(request()->segment(2) == 'site') class="on"@endif>
                    <a href="/boffice/site/main_banner/list">
                        <span> <img src="/img/gnbIcon8.jpg" alt="">사이트 관리</span>
                    </a>
                </li>
            </ul>
		</div>
    </header>
    <section class="content">
        <!-- 왼쪽 nav 관리 -->
        @if(request()->segment(2) == 'lecture')
        <section class="lnb">
			<h2>
				<span><img src="/img/lnbIcon1.jpg" alt=" 강좌 서점 관리 아이콘"> 강좌 서점 관리</span>
			</h2>
			<ul id="subMenuList">
                <li id="subMenu101" @if(request()->segment(3) == 'cate') class="on"@endif>
                    <a href="/boffice/lecture/cate/setting">카테고리 관리</a>
                </li>
                <li id="subMenu102" @if(request()->segment(3) == 'video') class="on"@endif>
                    <a href="/boffice/lecture/video/list">동영상 강의 관리</a>
                </li>
                <li id="subMenu147" @if(request()->segment(3) == 'class') class="on"@endif>
                    <a href="/boffice/lecture/class/list">클래스강의 관리</a>
                </li>
                <li id="subMenu103" @if(request()->segment(3) == 'bookstore') class="on"@endif>
                    <a href="/boffice/lecture/bookstore/list">인터넷 서점 관리</a>
                </li>
                <li id="subMenu104" @if(request()->segment(3) == 'academy') class="on"@endif>
                    <a href="/boffice/lecture/academy/list">학원 강의 관리</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'order')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon2.jpg" alt=" 주문 관리 아이콘"> 주문 관리</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu105" @if(request()->segment(3) == 'video') class="on"@endif>
                    <a href="/boffice/order/video/list">동영상 주문 관리</a>
                </li>
                <li id="subMenu152" @if(request()->segment(3) == 'extension') class="on"@endif>
                    <a href="/boffice/order/extension/list">연장 신청 관리</a>
                </li>
                <li id="subMenu106" @if(request()->segment(3) == 'bookstore') class="on"@endif>
                    <a href="/boffice/order/bookstore/list">서점 주문 관리</a>
                </li>
                <li id="subMenu107" @if(request()->segment(3) == 'free') class="on"@endif>
                    <a href="/boffice/order/free/list">무료 강의 관리</a>
                </li>
                <li id="subMenu108" @if(request()->segment(3) == 'estimate') class="on"@endif>
                    <a href="/boffice/order/estimate/list">견적 관리</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'member')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon3.jpg" alt=" 회원 관리 아이콘"> 회원 관리</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu109" @if(request()->segment(3) == 'all') class="on"@endif>
                    <a href="/boffice/member/all/list">전체 회원 관리</a>
                </li>
                <li id="subMenu110" @if(request()->segment(3) == 'class') class="on"@endif>
                    <a href="/boffice/member/class/list">수강 회원 관리</a>
                </li>
                <li id="subMenu112" @if(request()->segment(3) == 'professor') class="on"@endif>
                    <a href="/boffice/member/professor/list">교수 회원 관리</a>
                </li>
                <li id="subMenu151" @if(request()->segment(3) == 'delete') class="on"@endif>
                    <a href="/boffice/member/delete/list">회원 탈퇴 및 삭제</a>
                </li>
                <li id="subMenu156" @if(request()->segment(3) == 'students') class="on"@endif>
                    <a href="/boffice/member/students/list">현강생 관리</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'statistics')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon4.jpg" alt=" 통계 아이콘"> 통계</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu113" @if(request()->segment(3) == 'video') class="on"@endif>
                    <a href="/boffice/statistics/video/list">동영상 매출 통계</a>
                </li>
                <li id="subMenu153" @if(request()->segment(3) == 'extension') class="on"@endif>
                    <a href="/boffice/statistics/extension/list">연장 신청 매출 통계</a>
                </li>
                <li id="subMenu114" @if(request()->segment(3) == 'bookstore') class="on"@endif>
                    <a href="/boffice/statistics/bookstore/list">서적 매출 통계</a>
                </li>
                <li id="subMenu115" @if(request()->segment(3) == 'professor') class="on"@endif>
                    <a href="/boffice/statistics/professor/list">교수별 정산</a>
                </li>
                <li id="subMenu116" @if(request()->segment(3) == 'learning') class="on"@endif>
                    <a href="/boffice/statistics/learning/list">학습 게시판 답변 현황</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'cs_center')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon5.jpg" alt=" 고객센터 아이콘"> 고객센터</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu117" @if(request()->segment(3) == 'video_qa') class="on"@endif>
                    <a href="/boffice/cs_center/video_qa/list">동영상 Q&amp;A관리</a>
                </li>
                <li id="subMenu118" @if(request()->segment(3) == 'bookstore') class="on"@endif>
                    <a href="/boffice/cs_center/bookstore/list">서점 Q&amp;A관리</a>
                </li>
                <li id="subMenu119" @if(request()->segment(3) == 'one') class="on"@endif>
                    <a href="/boffice/cs_center/one/list">1:1문의 관리</a>
                </li>
                <li id="subMenu120" @if(request()->segment(3) == 'free') class="on"@endif>
                    <a href="/boffice/cs_center/free/list">자유게시판 관리</a>
                </li>
                <li id="subMenu121" @if(request()->segment(3) == 'video_learning') class="on"@endif>
                    <a href="/boffice/cs_center/video_learning/list">동영상 학습 게시판 관리</a>
                </li>
                <li id="subMenu122" @if(request()->segment(3) == 'faq') class="on"@endif>
                    <a href="/boffice/cs_center/faq/list">FAQ</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'community')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon6.jpg" alt=" 커뮤니티 아이콘"> 커뮤니티</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu124" @if(request()->segment(3) == 'news') class="on"@endif>
                    <a href="/boffice/community/news/list">학원소식</a>
                </li>
                <li id="subMenu125" @if(request()->segment(3) == 'notice') class="on"@endif>
                    <a href="/boffice/community/notice/list">공지사항</a>
                </li>
                <li id="subMenu148" @if(request()->segment(3) == 'passing') class="on"@endif>
                    <a href="/boffice/community/passing/list">합격수기 관리</a>
                </li>
                <li id="subMenu149" @if(request()->segment(3) == 'origin') class="on"@endif>
                    <a href="/boffice/community/origin/list">본원출식 합격자 관리</a>
                </li>
                <li id="subMenu126" @if(request()->segment(3) == 'announcement') class="on"@endif>
                    <a href="/boffice/community/announcement/list">시험공고</a>
                </li>
                <li id="subMenu127" @if(request()->segment(3) == 'competition') class="on"@endif>
                    <a href="/boffice/community/competition/list">경쟁률 및 합격선</a>
                </li>
                <li id="subMenu128" @if(request()->segment(3) == 'examinee') class="on"@endif>
                    <a href="/boffice/community/examinee/list">수험가 뉴스</a>
                </li>
                <li id="subMenu129" @if(request()->segment(3) == 'learning') class="on"@endif>
                    <a href="/boffice/community/learning/list">학습자료실</a>
                </li>
                <li id="subMenu130" @if(request()->segment(3) == 'errata') class="on"@endif>
                    <a href="/boffice/community/errata/list">정오표</a>
                </li>
                <li id="subMenu154" @if(request()->segment(3) == 'bookstore') class="on"@endif>
                    <a href="/boffice/community/bookstore/list">인터넷서점공지사항</a>
                </li>
                <li id="subMenu150" @if(request()->segment(3) == 'practice') class="on"@endif>
                    <a href="/boffice/community/practice/list">모의고사 다운로드</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'mobile')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon8.jpg" alt=" 모바일 관리 아이콘"> 모바일 관리</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu135" @if(request()->segment(3) == 'default') class="on"@endif>
                    <a href="/boffice/mobile/default/list">기본 설정 관리</a>
                </li>
                <li id="subMenu136" @if(request()->segment(3) == 'status') class="on"@endif>
                    <a href="/boffice/mobile/status/list">접속 현황</a>
                </li>
                <li id="subMenu137" @if(request()->segment(3) == 'download') class="on"@endif>
                    <a href="/boffice/mobile/download/list">강의 다운로드 현황</a>
                </li>
                <li id="subMenu138" @if(request()->segment(3) == 'download_delete') class="on"@endif>
                    <a href="/boffice/mobile/download_delete/list">강의 다운로드 삭제 현황</a>
                </li>
                <li id="subMenu139" @if(request()->segment(3) == 'device') class="on"@endif>
                    <a href="/boffice/mobile/device/list">단말기 승인 현황</a>
                </li>
                <li id="subMenu140" @if(request()->segment(3) == 'device_delete') class="on"@endif>
                    <a href="/boffice/mobile/device_delete/list">단말기 해제 현황</a>
                </li>
            </ul>
        </section>
        @elseif(request()->segment(2) == 'site')
        <section class="lnb">
            <h2>
                <span><img src="/img/lnbIcon9.jpg" alt=" 사이트 관리 아이콘"> 사이트 관리</span>
            </h2>
            <ul id="subMenuList">
                <li id="subMenu141" @if(request()->segment(3) == 'main_banner') class="on"@endif>
                    <a href="/boffice/site/main_banner/list">메인 페이지 관리</a>
                </li>
                <li id="subMenu142" @if(request()->segment(3) == 'code') class="on"@endif>
                    <a href="/boffice/site/code/list">코드 관리</a>
                </li>
                <li id="subMenu143" @if(request()->segment(3) == 'bbs') class="on"@endif>
                    <a href="/boffice/site/bbs/list">게시판 관리</a>
                </li>
                <li id="subMenu144" @if(request()->segment(3) == 'admin') class="on"@endif>
                    <a href="/boffice/site/admin/list">관리자 관리</a>
                </li>
                <li id="subMenu145" @if(request()->segment(3) == 'basket') class="on"@endif>
                    <a href="/boffice/site/basket/list">장바구니 공지 관리</a>
                </li>
                <li id="subMenu146" @if(request()->segment(3) == 'authority') class="on"@endif>
                    <a href="/boffice/site/authority/list">권한 관리</a>
                </li>
                <li id="subMenu155" @if(request()->segment(3) == 'otp') class="on"@endif>
                    <a href="/boffice/site/otp/list">OTP 등록</a>
                </li>
            </ul>
        </section>
        @endif