@include('inc/head')
<div id="section_inner">
    <div class="find_member">
        <form action="">
            <img src="/img/circle_arrow_right.png" alt=""><h3>아이디 찾기</h3>
            <div class="form_inner">
                <div class="input_area">
                    <input type="text" name="" placeholder="이름">
                    <div class="email_">
                        <input type="text" name="" placeholder="E-mail"> @ <input type="text" name="" placeholder="ex)naver.com">
                    </div>
                    <div class="submit_box">
                        <input type="submit" value="확인">
                    </div>
                </div>
            </div>
        </form>
        <form action="">
            <img src="/img/circle_arrow_right.png" alt="">
            <h3>비밀번호 찾기</h3>
            <div class="form_inner">
                <div class="input_area">
                    <input type="text" name="" placeholder="아이디">
                    <input type="text" name="" placeholder="이름">
                    <div class="email_">
                        <input type="text" name="" placeholder="E-mail"> @ <input type="text" name="" placeholder="ex)naver.com"> 
                    </div>
                    <div class="submit_box">
                        <input type="submit" value="확인">
                    </div>
                </div>
            </div>
        </form>
        <div class="member_faq">
            <div class="text_area">
                <p class="subject">자주 묻는 질문 FAQ</p>
                <p class="text">1. 아이디와 비번 찾기가 이메일 찾기로 안되는 경우 스팸메일함도 꼭 확인해주세요.</p>
                <p class="text">2. 메일이 전혀 날라오지 않는다면 <b class="pink">02-823-4700</b>으로 문의해 주세요.</p>
            </div>
        </div>
    </div>
</div>
@include('inc/footer')