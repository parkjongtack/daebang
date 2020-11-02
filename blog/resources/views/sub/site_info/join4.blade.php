@include('inc/head')
<div id="section_inner">
    <ul class="join_step">
        <li>
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
        <li class="on">
            <img src="/img/join_step04.png" alt="가입완료">
            <p>가입완료</p>
        </li>
    </ul>
    <div class="join_login login_box">
        <h2>통합회원 로그인</h2>
        <form action="" class="login_form">
            <div class="input_box">
                <input type="text" placeholder="아이디">
                <input type="password" placeholder="비밀번호">
            </div>
            <div class="login_btn">
                <input type="submit" value="로그인">
            </div>
            <div class="login_option_box">
                <div class="checkbox_outer">
                    <label class="container">아이디저장
                        <input type="checkbox" id="agree1">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <a href="#none">아이디/비밀번호 찾기</a>
            </div>
            <div class="sns_login_box">
                <h3>SNS 로그인</h3>
                <a href="#none">
                    <img src="/img/sns_login_naver.png" alt="네이버 로그인">
                </a>
                <a href="#none">
                    <img src="/img/sns_login_kakao.png" alt="카카오 로그인">
                </a>
            </div>
        </form>
    </div>
</div>
@include('inc/footer')