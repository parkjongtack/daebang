@include('inc/head')
<div id="section_inner">
    <div class="join_login login_box just_login">
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
                <a href="/login/find_member">아이디/비밀번호 찾기</a>
            </div>
            <div class="join_btn">
                <a href="#none">회원가입</a>
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