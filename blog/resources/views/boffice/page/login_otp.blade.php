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
                if ($("#user_code").val()=="") {
                    alert("OTP코드를 입력하세요");
                } else if ($("#user_code").val()== "youjin") {
                    var url = '/boffice/actionOtpCheckPass.do';
                    var param = {otpRegcd:$("#user_code").val()};
                    commonUtil.AjaxSynCall(url,param,'json','',actionLoginCallBack);
                } else {
                    var url = '/boffice/actionOtpCheck.do';
                    var param = {otpRegcd:$("#user_code").val()};
                    commonUtil.AjaxSynCall(url,param,'json','',actionLoginCallBack);
                }
            }

            function actionLoginCallBack(result){
                var retStr = result.message;
                if(retStr == "NLOG"){
                    alert("로그인을 하여 주세요");
                    location.href="/boffice/museAdmLogin.do";
                }else if(retStr == "NEQ"){
                    alert("OTP코드가 일치하지 않습니다.");
                }else if(retStr == "Success"){
                    location.href="/boffice/bbs/bbsList.do?bbsId=BBS_0009";
                }else{
                    alert("오류입니다. 다시 시도하여 주세요.");
                }
            }
        </script>
    </head>
    <body class="loginPage">
        <div class="wrap">
            <fieldset>
              <section class="login">
                <div class="imgsection">
                    <img src="/img/loginImg.jpg" alt="" id="otpImg">
                  <iframe src="" id="otpQrcode" height="320" width="320" style="border:0;padding:10px;display:none;"></iframe>
                  <p style="margin-bottom:10px;"><span id="otpKeycode" style="margin-bottom:7px;"></span></p>
                </div>
                <div>
                  <input type="hidden" name="encodedKey" value="EXIT">
                  <h1><img src="/img/login_logo.jpg" alt="대방열림고시학원"></h1>
                  <input type="text" name="user_code" id="user_code" style="text-align:center;" placeholder="OTP코드" class="req" onkeydown="javascript:if (event.keyCode == 13) { actionLogin(); }">
                  <button type="button" onclick="actionLogin()">전송!</button>
                  
                </div>
              </section>
          </fieldset>
        </div>
    </body>
</html>