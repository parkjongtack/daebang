@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">영수증</h2>
    <div class="receipt_box">
        <div class="list_table">
            <table>
                <colgroup>
                    <col width="150px">
                    <col width="355px">
                    <col width="60px">
                    <col width="110px">
                    <col width="70px">
                    <col width="110px">
                    <col width="80px">
                </colgroup>
                <tr>
                    <th>구분</th>
                    <th>상품명</th>
                    <th>수량</th>
                    <th>정가</th>
                    <th>금액</th>
                    <th>주문일자</th>
                    <th>영수증</th>
                </tr>
                <tr>
                    <td>동영상 (PC+모바일)</td>
                    <td>영양사 - [44회 영양사 합격] 이론 및 문제완성반</td>
                    <td>1</td>
                    <td>650,000원</td>
                    <td>0원</td>
                    <td>2000-09-01</td>
                    <td><a href="javascript:receipt_open();">출력</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function receipt_open() {
        turl = "/site_info/my_page/receipt_open";
        window.open(turl, 'Receipt','width=653,height=570');
    }
</script>
@include('inc/footer')