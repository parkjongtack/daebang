@include('inc/head')
<script src="/js/datepicker.min.js"></script>
<script src="/js/datepicker.min.ko.js"></script>
<link rel="stylesheet" href="/css/datepicker.min.css">
<div id="section_inner">
    <h2 class="sub_page_title bar gray">주문/배송현황</h2>
    <div class="order_box">
        <div class="search_box">
            <div class="date_term">
                <a href="#none">오늘</a>
                <a href="#none">1주일</a>
                <a href="#none">1개월</a>
                <a href="#none">6개월</a>
                <a href="#none">전체</a>
            </div>
            <div class="search_option_box">
                <div class="line">
                    <label>주문일</label><input type="text" id="datepicker"> ~ <input type="text" id="datepicker2"><br/>
                </div>
                <div class="line">
                    <label>상품명 검색</label><input type="text" class="product_name">
                </div>
            </div>
            <div class="search_submit_box">
                <input type="submit" value="검색">
            </div>
        </div>
        <div class="list_table">
            <h3>주문내역</h3>
            <table>
                <colgroup>
                    <col width="104px">
                    <col width="82px">
                    <col width="325px">
                    <col width="64px">
                    <col width="92px">
                    <col width="88px">
                    <col width="100px">
                    <col width="75px">
                </colgroup>
                <tr>
                    <th>주문일자</th>
                    <th>구분</th>
                    <th>주문 상품 정보</th>
                    <th>수량</th>
                    <th>결제 금액</th>
                    <th>결제방법</th>
                    <th>배송조회</th>
                    <th>상태</th>
                </tr>
                <tr>
                    <td>2000-09-01</td>
                    <td>교재(PC)</td>
                    <td>교재포함:(44회 영양사) 영약학 이론 및 문제</td>
                    <td>1</td>
                    <td>12,000원</td>
                    <td>무통장입금</td>
                    <td>-</td>
                    <td>배송완료</td>
                </tr>
            </table>
        </div>
    </div>

    
</div>
<script type="text/javascript">

    //날짜 계산

    // var today = new Date();

    // var year = today.getFullYear(); // 년도
    // var month = today.getMonth() + 1;  // 월
    // var date = today.getDate();  // 날짜
    // var day = today.getDay();  // 요일

    function getDateStr(myDate){
        return (myDate.getFullYear() + '-' + (myDate.getMonth() + 1) + '-' + myDate.getDate())
    }

    /* 오늘 날짜를 문자열로 반환 */
    function today() {
        var d = new Date()
        return getDateStr(d)
    }

    /* 오늘로부터 1주일전 날짜 반환 */
    function lastWeek() {
        var d = new Date()
        var dayOfMonth = d.getDate()
        d.setDate(dayOfMonth - 7)
        return getDateStr(d)
    }

    /* 오늘로부터 1개월전 날짜 반환 */
    function lastMonth() {
        var d = new Date()
        var monthOfYear = d.getMonth()
        d.setMonth(monthOfYear - 1)
        return getDateStr(d)
    }

    function SixMonth() {
        var d = new Date()
        var monthOfYear = d.getMonth()
        d.setMonth(monthOfYear - 6)
        return getDateStr(d)
    }

    // function all_date() {
    //     var d = new Date()
    //     var monthOfYear = d.getMonth()
    //     d.setMonth(monthOfYear - 120)
    //     return getDateStr(d)
    // }

    $(".date_term a").click(function(){
        var rname = $(this).text()
        $("#datepicker2").val(today())
            if( rname == "오늘"){
            $("#datepicker").val(today())
        }else if(rname == "1주일") {
            $("#datepicker").val(lastWeek())
        }else if(rname == "1개월"){
            $("#datepicker").val(lastMonth())
        }else if(rname == "6개월"){
            $("#datepicker").val(SixMonth())
        }else if(rname == "전체"){
            $("#datepicker").val("2000-01-01")
        }
    })

    // $(".date_term a").click(function(){
    //     var idx = $(this).index();
        
    //     if(idx == 0){
    //         $("#datepicker").val(year+'-'+month+'-'+date);
    //         $("#datepicker2").val(year+'-'+month+'-'+date);
    //     }else if(idx == 1){
    //         $("#datepicker").val();
    //         $("#datepicker2").val(year+'-'+month+'-'+date);
    //     }else if(idx == 2){
    //         $("#datepicker").val();
    //         $("#datepicker2").val(year+'-'+month+'-'+date);
    //     }else if(idx == 3){
    //         $("#datepicker").val();
    //         $("#datepicker2").val(year+'-'+month+'-'+date);
    //     }else if(idx == 4){
    //         $("#datepicker").val();
    //         $("#datepicker2").val(year+'-'+month+'-'+date);
    //     }
    // });

    var date1;
    $("#datepicker").datepicker({
        language: 'ko',
        format: "yyyy-mm-dd",
        autoclose : true,
        //timepicker: true,
        //timeFormat: "hh:ii"
    });

    $("#datepicker2").click(function(){
        date1 = $("#datepicker").val();
        console.log(date1);
    });

    $("#datepicker2").datepicker({
        language: 'ko',
        format: "yyyy-mm-dd",
        autoclose : true,
        //timepicker: true,
        //timeFormat: "hh:ii"
    });
</script>
@include('inc/footer')