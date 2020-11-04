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
        <li class="on">
            <img src="/img/join_step03.png" alt="정보입력">
            <p>정보입력</p>
        </li>
        <li>
            <img src="/img/join_step04.png" alt="가입완료">
            <p>가입완료</p>
        </li>
    </ul>
    <h2 class="sub_page_title">정보입력<span class="pink">*는 필수항목입니다.</span></h2>
    <form action="/site_info/join/join4" class="join_form info" method="POST">
        <ul>
            <li>
                <div class="half_line">
                    <div class="input_title">아이디 <span>*</span></div>
                    <div class="input_box">
                        <input type="text">
                    </div>
                </div>
                <div class="half_line">
                    <div class="input_title">이름 <span>*</span></div>
                    <div class="input_box">
                        <input type="text">
                    </div>
                </div>
            </li>
            <li>
                <div class="half_line">
                    <div class="input_title">비밀번호 <span>*</span></div>
                    <div class="input_box">
                        <input type="password">
                    </div>
                </div>
                <div class="half_line">
                    <div class="input_title">비밀번호 확인 <span>*</span></div>
                    <div class="input_box">
                        <input type="password">
                    </div>
                </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">주소 <span>*</span></div>
                    <div class="input_box">
                        <input type="text" id="address1"><span class="find_address" onclick="execDaumPostcode();">우편번호 찾기</span><br/>
                        <input type="text" id="address2" class="address"><br/>
                        <input type="text" id="address3" class="address mt0" placeholder="상세주소">
                        <p>나머지 주소를 입력하세요.<br/>주소(기본배송시)는 구입하신 상품이나 이벤트 경품등의 배송시 사용됩니다.<br/>정확하게 입력하시기 바랍니다.</p>
                    </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">휴대폰 <span>*</span></div>
                    <div class="input_box">
                        <select name="" class="wd80">
                            <option value="010" selected>010</option>
                            <option value="011">011</option>
                            <option value="016">016</option>
                            <option value="017">017</option>
                            <option value="018">018</option>
                            <option value="019">019</option>
                        </select> - 
                        <input type="text" class="wd170"> - 
                        <input type="text" class="wd170">
                        <p class="agree_label">sms 수신여부 <label><input type="radio" value="agree" name="sms_agree">동의</label> <label><input type="radio" value="no_agree" name="sms_agree">동의안함</label></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">유선전화 <span>*</span></div>
                    <div class="input_box">
                        <select name="phone1" class="wd80">
                            <option value="02">02</option>
                            <option value="031">031</option>
                            <option value="032">032</option>
                            <option value="033">033</option>
                            <option value="041">041</option>
                            <option value="042">042</option>
                            <option value="043">043</option>
                            <option value="051">051</option>
                            <option value="052">052</option>
                            <option value="053">053</option>
                            <option value="054">054</option>
                            <option value="054">054</option>
                            <option value="055">055</option>
                            <option value="061">061</option>
                            <option value="062">062</option>
                            <option value="063">063</option>
                            <option value="064">064</option>
                    </select> - 
                        <input type="text" class="wd170"> - 
                        <input type="text" class="wd170">
                    </div>
                </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">생년월일 <span>*</span></div>
                    <div class="input_box">
                        <select id="years" class="wd93"></select>년 
                        <select id="months" class="wd70"></select>월 
                        <select id="days" class="wd70"></select>일
                    </div>
                </div>
            </li>
            <script type="text/javascript">
                $(function() {

                   //populate our years select box
                   for (i = new Date().getFullYear(); i > 1900; i--){
                       $('#years').append($('<option />').val(i).html(i));
                   }
                   //populate our months select box
                   for (i = 1; i < 13; i++){
                       $('#months').append($('<option />').val(i).html(i));
                   }
                   //populate our Days select box
                   updateNumberOfDays(); 
               
                   //"listen" for change events
                   $('#years, #months').change(function(){
                       updateNumberOfDays(); 
                   });
               
                });

                //function to update the days based on the current values of month and year
                function updateNumberOfDays(){
                   $('#days').html('');
                   month = $('#months').val();
                   year = $('#years').val();
                   days = daysInMonth(month, year);
            
                   for(i=1; i < days+1 ; i++){
                           $('#days').append($('<option />').val(i).html(i));
                   }
                }

                //helper function
                function daysInMonth(month, year) {
                   return new Date(year, month, 0).getDate();
                }
                function selectEmail(ele){ 
                    var $ele = $(ele);
                    var $email2 = $('input[name=email2]'); // '1'인 경우 직접입력
                    if($ele.val() == "1"){
                        $email2.attr('readonly', false); $email2.val('');
                        $('input[name=email2]').focus();
                    } else {
                            $email2.attr('readonly', true); $email2.val($ele.val());
                        }
                    }
            </script>
            <li>
                <div class="all_line">
                    <div class="input_title">이메일 <span>*</span></div>
                    <div class="input_box">
                        <input name="email1" type="text" class="wd188"> @ <input name="email2" type="text" class="wd188" readonly>
                        <select name="select_email" onChange="selectEmail(this)" class="wd170">
                            <option value="" selected>선택해 주세요</option>
                            <option value="naver.com">naver.com</option>
                            <option value="hanmail.net">hanmail.net</option>
                            <option value="hotmail.com">hotmail.com</option>
                            <option value="nate.com">nate.com</option>
                            <option value="yahoo.co.kr">yahoo.co.kr</option>
                            <option value="empas.com">empas.com</option>
                            <option value="dreamwiz.com">dreamwiz.com</option>
                            <option value="freechal.com">freechal.com</option>
                            <option value="lycos.co.kr">lycos.co.kr</option>
                            <option value="korea.com">korea.com</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="hanmir.com">hanmir.com</option>
                            <option value="paran.com">paran.com</option>
                            <option value="1">직접입력</option>
                        </select>
                        <p class="agree_label">이메일 수신여부 <label><input type="radio" value="agree" name="email_agree">동의</label> <label><input type="radio" value="no_agree" name="email_agree">동의안함</label></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">준비하는 시험 <span>*</span></div>
                    <div class="input_box">
                        <select name="">
                            <option value="">선택</option>
                            <option value="간호직 공무원">간호직 공무원</option>
                            <option value="보건직 공무원">보건직 공무원</option>
                            <option value="보건연구사">보건연구사</option>
                            <option value="보건복지부 공무원">보건복지부 공무원</option>
                            <option value="보건진료직 공무원">보건진료직 공무원</option>
                            <option value="의료기술직 공무원">의료기술직 공무원</option>
                            <option value="방역직 공무원">방역직 공무원</option>
                            <option value="식품위생직 공무원">식품위생직 공무원</option>
                            <option value="환경직 공무원">환경직 공무원</option>
                            <option value="환경연구사">환경연구사</option>
                            <option value="조리직 공무원">조리직 공무원</option>
                            <option value="영양교사">영양교사</option>
                            <option value="보건교사">보건교사</option>
                            <option value="영양사">영양사</option>
                            <option value="위생사">위생사</option>
                            <option value="간호사">간호사</option>
                            <option value="식품(산업)기사">식품(산업)기사</option>
                            <option value="교육학">교육학</option>
                        </select>
                    </div>
                </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">응시지역 <span>*</span></div>
                    <div class="input_box">
                        <input type="text">
                    </div>
                </div>
            </li>
            <li>
                <div class="all_line">
                    <div class="input_title">학원 알게된 동기 <span>*</span></div>
                    <div class="input_box">
                        <select name="">
                            <option value="">선택해 주세요</option>
                            <option value="주변소개">주변소개</option>
                            <option value="인터넷 검색">인터넷 검색</option>
                            <option value="시험장 홍보물">시험장 홍보물</option>
                            <option value="학교 홍보물">학교 홍보물</option>
                        </select>
                    </div>
                </div>
            </li>
        </ul>
        <input type="submit" value="다음" style="margin-top: 30px">
    </form>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript">
        function execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var roadAddr = data.roadAddress; // 도로명 주소 변수
                    var extraRoadAddr = ''; // 추가 정보 변수

                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraRoadAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraRoadAddr !== ''){
                        extraRoadAddr = ' (' + extraRoadAddr + ')';
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('address1').value = data.zonecode;
                    document.getElementById("address2").value = roadAddr;
                    //document.getElementById("sample4_jibunAddress").value = data.jibunAddress;
                    
                    // // 참고항목 문자열이 있을 경우 해당 필드에 넣는다.
                    // if(roadAddr !== ''){
                    //     document.getElementById("sample4_extraAddress").value = extraRoadAddr;
                    // } else {
                    //     document.getElementById("sample4_extraAddress").value = '';
                    // }

                    // var guideTextBox = document.getElementById("guide");
                    // // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                    // if(data.autoRoadAddress) {
                    //     var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                    //     guideTextBox.innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';
                    //     guideTextBox.style.display = 'block';

                    // } else if(data.autoJibunAddress) {
                    //     var expJibunAddr = data.autoJibunAddress;
                    //     guideTextBox.innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';
                    //     guideTextBox.style.display = 'block';
                    // } else {
                    //     guideTextBox.innerHTML = '';
                    //     guideTextBox.style.display = 'none';
                    // }
                }
            }).open();
        }
    </script>
</div>
@include('inc/footer')