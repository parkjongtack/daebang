@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">본원출신 합격자</h2>
    <div class="pratice">
        <div class="search_select">
            <form action="">
                <select name="">
                    <option value="">제목</option>
                </select>
                <input type="text">
                <input type="submit" value="검색">
            </form>
        </div>
        <div class="list_table">
            <table>
                <colgroup>
                    <col width="80px">
                    <col width="50px">
                    <col width="450px">
                    <col width="100px">
                    <col width="100px">
                    <col width="100px">
                    <col width="80px">
                </colgroup>
                <tr>
                    <th>NO</th>
                    <th>지역</th>
                    <th>제목</th>
                    <th>파일</th>
                    <th>날짜</th>
                    <th>작성자</th>
                    <th>조회</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>서울</td>
                    <td><a href="/site_info/my_page/board_view">식품미생물 모의고사 문제입니다. ^^</a></td>
                    <td>
                        <a href="#none" ><img src="/img/word_file_ico.png" alt=""></a>
                        <a href="#none" ><img src="/img/word_file_ico.png" alt=""></a>
                    </td>
                    <td>2020-10-10</td>
                    <td>yulimgosi</td>
                    <td>1,234</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>부산</td>
                    <td><a href="/site_info/my_page/board_view">동영상강의 Q&A입니다.</a></td>
                    <td>
                        <a href="#none" ><img src="/img/zip_file_ico.png" alt=""></a>
                        <a href="#none" ><img src="/img/zip_file_ico.png" alt=""></a>
                    </td>
                    <td>2020-10-10</td>
                    <td>yulimgosi</td>
                    <td>30</td>
                </tr>
            </table>
            <div class="paging">
                <div class="paging">
                    <span onclick="javascript:page(1)">
                        <button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn_all.png" alt=""></button>
                    </span>
                    <span onclick="javascript:page(534)"><button type="button" class="btn btn-danger"><img src="/img/pag_prev_btn.png" alt=""></button></span>
                    <span onclick="javascript:page(531)"><button type="button" class="btn btn-default">1</button></span>
                    <span onclick="javascript:page(532)"><button type="button" class="btn">2</button></span>
                    <span onclick="javascript:page(536)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn.png" alt=""></button></span><span onclick="javascript:page(541)"><button type="button" class="btn btn-danger"><img src="/img/pag_next_btn_all.png" alt=""></button></span>
                </div>
            </div>
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