@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">장바구니 <span>접속 종료, 일정시간 페이지 이동이 없으면 로그아웃 됩니다. 장바구니는 7일 후 자동 삭제 됩니다.</span></h2>
    <div class="shopping_box">
        <div class="list_table">
            <form action="">
                <div class="select_action_box">
                    <span>전체선택</span>
                    <span>선택삭제</span>
                </div>
                <table>
                    <colgroup>
                        <col width="80px">
                        <col width="130px">
                        <col width="190px">
                        <col width="120px">
                        <col width="131px">
                        <col width="131px">
                        <col width="131px">
                    </colgroup>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>구분</th>
                        <th>강의명/교재명</th>
                        <th>수량</th>
                        <th>정가액</th>
                        <th>할인액</th>
                        <th>판매가</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><input type="text" value="교재" readonly></td>
                        <td><input type="text" value="2021 EBS 원픽 환경보건" readonly></td>
                        <td>
                            <span class="count_box">
                                <input type="text" class="count_num" value="1">
                                <span class="upDown_box">
                                    <i class="fas fa-angle-up bt_up"></i>
                                    <i class="fas fa-angle-down bt_down"></i>
                                </span>
                            </span>
                        </td>
                        <td><input type="text" value="300,000원" readonly></td>
                        <td><input type="text" value="20,000원" readonly></td>
                        <td><input type="text" value="280,000원" readonly></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="price_table">
            <form action="">
                <h3>주문상품 합계</h3>
                <p>교제 금액이 <span>30,000</span>원 이상일 경우 <span>배송비는 무료</span>입니다.</p>
                <table>
                    <colgroup>
                        <col width="165px">
                        <col width="165px">
                        <col width="110px">
                        <col width="110px">
                        <col width="110px">
                        <col width="210px">
                    </colgroup>
                    <tr>
                        <th colspan="2">주문상품수</th>
                        <th colspan="3">상품금액</th>
                        <th rowspan="2">총결제금액</th>
                    </tr>
                    <tr>
                        <th>동영상</th>
                        <th class="br_">교재</th>
                        <th>정가액</th>
                        <th>할인액</th>
                        <th>배송비</th>
                    </tr>
                    <tr>
                        <td><input type="text" value="0" readonly></td>
                        <td><input type="text" value="0" readonly></td>
                        <td><input type="text" value="300,000원" readonly></td>
                        <td><input type="text" value="20,000원" readonly></td>
                        <td><input type="text" value="2,500원" readonly></td>
                        <td class="pink"><input type="text" value="282,500원" readonly></td>
                    </tr>
                </table>
                <div class="submit_box">
                    <a href="#none">계속 둘러보기</a>
                    <input type="submit" value="주문하기" class="fw_500">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.bt_up').click(function(){ 
        var n = $('.bt_up').index(this);
        var num = $(".count_num:eq("+n+")").val();
        num = $(".count_num:eq("+n+")").val(num*1+1); 
    });

    $('.bt_down').click(function(){ 
        var n = $('.bt_down').index(this);
        var num = $(".count_num:eq("+n+")").val();
        if(num <2){
            alert('최소 구매수량은 1개 입니다.')
        }else{
            num = $(".count_num:eq("+n+")").val(num*1-1); 
        }
    });

    function receipt_open() {
        turl = "/site_info/my_page/receipt_open";
        window.open(turl, 'Receipt','width=653,height=570');
    }
</script>
@include('inc/footer')