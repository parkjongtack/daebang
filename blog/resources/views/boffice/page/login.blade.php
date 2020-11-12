<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>대방열림고시학원 관리자</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/css/jquery-ui.min.css">
        <link rel="stylesheet" href="/css/back_office/reset.css">
        <link rel="stylesheet" href="/css/back_office/style.css">
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="/js/jquery.mask.js"></script>
        <script src="/js/common.js"></script>
        <script src="/js/back_office/common.js"></script>
        <script type="text/javaScript">
            function actionLogin() {
                if (document.loginForm.id.value =="") {
                    alert("아이디를 입력하세요");
					document.loginForm.id.focus();
                } else if (document.loginForm.password.value =="") {
                    alert("비밀번호를 입력하세요");
					document.loginForm.password.focus();
                } else {
                    document.loginForm.action="/boffice/login_otp";
                    //document.loginForm.j_username.value = document.loginForm.userSe.value + document.loginForm.username.value;
                    //document.loginForm.action="/j_spring_security_check";
                    document.loginForm.submit();
                }
            }
        </script>
    </head>
    <body class="loginPage">
      <div class="wrap">
        <form name="loginForm" action="/boffice/login_otp" method="post" onsubmit="return javascript:actionLogin();">			
			{{ csrf_field() }}
			<div style="visibility:hidden;display:none;"><input name="iptSubmit1" type="submit" value="전송" title="전송"></div>			
			<input type="hidden" id="message" name="message" value="">
          <fieldset>
            <section class="login">
              <div class="imgsection">
                <img src="/img/loginImg.jpg" alt="">
              </div>
              <div>
                <h1><img src="/img/login_logo.jpg" alt="대방열림고시학원"></h1>
                <legend>로그인</legend>
                <input type="text" name="id" id="id" placeholder="아이디" class="req" title="아이디를 입력해주세요.">
                <input type="password" name="password" id="password" placeholder="비밀번호" onkeydown="javascript:if (event.keyCode == 13) { actionLogin(); }">
                <button type="button" onclick="actionLogin()">로그인</button>
              </div>
            </section>
        </fieldset>
		<input name="userSe" type="hidden" value="USR">
		<input name="j_username" type="hidden">
      </form>
      </div>
    </body>
</html>