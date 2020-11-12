<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
				} else {
					var url = '/boffice/actionOtpCheck';
					var param = {otpRegcd:$("#user_code").val(),id:$("#id").val()};
					commonUtil.AjaxSynCall(url,param,'json','',actionLoginCallBack);
				}
			}

            function actionLoginCallBack(result){
				console.log(result);
                var retStr = result.message;
                if(retStr == "NLOG"){
                    alert("로그인을 하여 주세요");
                    location.href="/boffice/login";
                }else if(retStr == "NEQ"){
                    alert("OTP코드가 일치하지 않습니다.");
                }else if(retStr == "Success"){
                    location.href="/boffice/cs_center/video_qa/list";
                }else{
                    alert("오류입니다. 다시 시도하여 주세요.");
                }
            }
        </script>
		@if($encodedKey == 'NONE')
		<script type="text/javaScript">
			function fnAjaxOtpCall(){
				var url = '/getBarcodeURL';
				var param = {id:$("#id").val()};
				commonUtil.AjaxSynCall(url,param,'json','',fnAjaxOtpCallBack);
			}
			function fnAjaxOtpCallBack(result){
				$("#otpQrcode").prop("src",result.url);
				$("#otpQrcode").css("display","block");
				$("#otpImg").css("display","none");
				$("#otpKeycode").html("(제공된키입력시)<br/>계정이름 : manager@yulimgosi.com<br/>키 : "+result.encodedKey);
			}
			$(function(){
				var otpKeySt = "{{ $encodedKey }}";
				if(otpKeySt!="EXIT"){
					fnAjaxOtpCall();
				}
			});
		</script>
		@endif
    </head>
    <body class="loginPage">
	<input type="hidden" id="id" name="id" value="{{ request()->id }}" />
        <div class="wrap">
            <fieldset>
              <section class="login">
                <div class="imgsection">
                    <img src="/img/loginImg.jpg" alt="" id="otpImg">
                  <iframe src="" id="otpQrcode" height="320" width="320" style="border:0;padding:10px;display:none;"></iframe>
                  <p style="margin-bottom:10px;"><span id="otpKeycode" style="margin-bottom:7px;"></span></p>
                </div>
                <div>
                  <input type="hidden" name="encodedKey" value="{{ $encodedKey }}">
                  <h1><img src="/img/login_logo.jpg" alt="대방열림고시학원"></h1>
                  <input type="text" name="user_code" id="user_code" style="text-align:center;" placeholder="OTP코드" class="req" onkeydown="javascript:if (event.keyCode == 13) { actionLogin(); }">
				  @if($encodedKey == 'NONE')
					<button type="button" onClick="fnAjaxOtpCall()">신규생성</button>
				  @endif                  
				<button type="button" onclick="actionLogin()">전송!</button>
				</div>
              </section>
          </fieldset>
        </div>
    </body>
</html>