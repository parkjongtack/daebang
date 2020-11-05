@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">인터넷 서점 Q&A</h2>
    <div class="qa_box">
        <div class="search_select">
            <form action="">
                <select name="">
                    <option value="">제목</option>
                    <option value="">분류</option>
                </select>
                <input type="text">
                <input type="submit" value="검색">
            </form>
        </div>
        <div class="list_table">
            <table>
                <colgroup>
                    <col width="60px">
                    <col width="355px">
                    <col width="150px">
                    <col width="110px">
                    <col width="70px">
                    <col width="110px">
                </colgroup>
                <tr>
                    <th>NO</th>
                    <th>제목</th>
                    <th>날짜</th>
                    <th>작성자</th>
                    <th>조회</th>
                </tr>
                <tr>
                    <td><span class="top">공지</span></td>
                    <td><a href="/{{ request()->segment(1).'/'.request()->segment(2).'/bbs/view'.request()->segment(5) }}">동영상강의 Q&A입니다.</a></td>
                    <td>2020-01-01</td>
                    <td>강산</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="/{{ request()->segment(1).'/'.request()->segment(2).'/bbs/view'.request()->segment(5) }}">동영상강의 Q&A입니다.</a></td>
                    <td>2020-01-01</td>
                    <td>강산</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="/{{ request()->segment(1).'/'.request()->segment(2).'/bbs/view'.request()->segment(5) }}">동영상강의 Q&A입니다.</a></td>
                    <td>2020-01-01</td>
                    <td>강산</td>
                    <td>99</td>
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
            <div class="write_box">
            <a href="/{{ request()->segment(1).'/'.request()->segment(2).'/bbs/write/'.request()->segment(5) }}">글쓰기</a>
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