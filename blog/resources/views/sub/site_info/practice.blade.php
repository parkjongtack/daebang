@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">모의고사 다운로드</h2>
    <div class="pratice">
        <div class="search_select">
            <form action="">
                <select name="">
                    <option value="">제목</option>
                    <option value="">직렬</option>
                </select>
                <input type="text">
                <input type="submit" value="검색">
            </form>
        </div>
        <div class="list_table">
            <table>
                <colgroup>
                    <col width="80px">
                    <col width="120px">
                    <col width="500px">
                    <col width="130px">
                    <col width="100px">
                </colgroup>
                <tr>
                    <th>NO</th>
                    <th>직렬</th>
                    <th>제목</th>
                    <th>파일</th>
                    <th>작성자</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>식품위생직 공무원</td>
                    <td><a href="/bbs/board_view">식품미생물 모의고사 문제입니다. ^^</a></td>
                    <td>
                        <a href="#none" ><img src="/img/word_file_ico.png" alt=""></a>
                        <a href="#none" ><img src="/img/word_file_ico.png" alt=""></a>
                    </td>
                    <td>yulimgosi</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>영양사</td>
                    <td><a href="/bbs/board_view">동영상강의 Q&A입니다.</a></td>
                    <td>
                        <a href="#none" ><img src="/img/zip_file_ico.png" alt=""></a>
                        <a href="#none" ><img src="/img/zip_file_ico.png" alt=""></a>
                    </td>
                    <td>yulimgosi</td>
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