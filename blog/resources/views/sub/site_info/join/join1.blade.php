@include('inc/head')
<div id="section_inner">
    <ul class="join_step">
        <li class="on">
            <img src="/img/join_step01.png" alt="가입인증">
            <p>가입인증</p>
        </li>
        <li>
            <img src="/img/join_step02.png" alt="약관동의">
            <p>약관동의</p>
        </li>
        <li>
            <img src="/img/join_step03.png" alt="정보입력">
            <p>정보입력</p>
        </li>
        <li>
            <img src="/img/join_step04.png" alt="가입완료">
            <p>가입완료</p>
        </li>
    </ul>
    <h2 class="sub_page_title">가입인증</h2>
    <div class="join_select_box">
        <div class="join_select">
            <p class="select_subject">핸드폰 번호인증</p>
            <p>동일한 번호로 3회 이상<br/>요청 시 차단될 수 있습니다.</p>
            <a href="#none">
                <img src="/img/join_select_img1.png" alt="휴대폰 인증">
            </a>
        </div>
        <div class="join_select">
            <p class="select_subject">네이버 아이디로 가입</p>
            <p>
                네이버로 가입 후에도<br/>필수항목을 기재해야 합니다.
            </p>
            <a href="#none">
                <img src="/img/join_select_img2.png" alt="네이버 아이디로 로그인">
            </a>
        </div>
        <div class="join_select">
            <p class="select_subject">Kakao로 가입</p>
            <p>
                Kakao로 가입 후에도<br/>필수항목을 기재해야 합니다.
            </p>
            <a href="#none">
                <img src="/img/join_select_img3.png" alt="카카오계정으로 로그인">
            </a>
        </div>
    </div>
    <div class="join_membership">
        <h3>대방열림고시학원 멤버쉽</h3>
        <ul>
            <li>회원가입은 무료입니다.</li>
            <li>신규 강좌 및 시험 정보, 수험가 뉴스 등의 소식을 받아보실 수 있습니다.</li>
            <li>샘플동영상 강의를 이용하실 수 있습니다.</li>
            <li>마이페이지, 나의 강의실을 이용하여 간편하고 편리하게 강의를 수강하실 수 있습니다.</li>
            <li>회원만을 위한 이벤트와 할인 행사에 참여하실 수 있습니다.</li>
        </ul>
    </div>
</div>
@include('inc/footer')