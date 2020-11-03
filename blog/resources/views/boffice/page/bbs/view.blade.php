@include('/boffice/inc/head')
@if(request()->segment(2) == 'cs_center' && request()->segment(3) == 'video_qa')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상강의 Q&amp;A</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnWriteReply();">답변작성</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0009" />
            <input type="hidden" name="nttId" value="116579" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="2930" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="동영상 강의 화질" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    동영상강의 Q&amp;A 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            동영상 강의 화질
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>김채원 (kcs4208)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-28</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>180.70.237.141</td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                화질 설정은 어디서 하나요ㅠ?
                                <br />
                                <br />
                                화질이 깨져서 글씨보기 힘들어요...
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116469" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116469','BBS_0009');">
                    신장병 환자의 합병증 예방을 위한 영양 의학적 치료
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서점 Q&amp;A</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnWriteReply();">답변작성</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0010" />
            <input type="hidden" name="nttId" value="116562" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="390" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="교재변경 질문이요" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    서점 Q&amp;A 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            <div class="board-book-info">
                                <img src="/cmm/fms/getImage.do?atchFileId=FILE_000000000025267&amp;fileSn=0" class="img" style="float: left; width: 30px; height: 40px; margin-right: 4px;" />

                                하이스코어 확인학습 교재 [공무원 생물 심화반 강의용]
                            </div>

                            교재변경 질문이요
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>정은지 (asdf0093)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-27</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>124.146.28.195</td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                2020년도 교재 가지고 있는데 2021교재 내용과 다른가요?
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116465" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116465','BBS_0010');">
                    개정판 문의
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'one')
<section class="rightCont">
    <div class="rightTitle">
        <h3>1:1문의</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnWriteReply();">답변작성</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0011" />
            <input type="hidden" name="nttId" value="116690" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="12248" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="탈퇴신청" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    1:1문의 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            탈퇴신청
                        </td>
                    </tr>

                    <tr>
                        <th>카테고리</th>
                        <td colspan="3">탈퇴신청</td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>홍주연 (juju375)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-29</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>59.22.22.211</td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                dd
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116677" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116677','BBS_0011');">
                    면접특강관련 질문드립니다
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'free')
<section class="rightCont">
    <div class="rightTitle">
        <h3>자유게시판</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnWriteReply();">답변작성</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0012" />
            <input type="hidden" name="nttId" value="94061" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="1664" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="<b><font color=red> [공지] 기기초기화 문의" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    자유게시판 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            <b><font color="red"> [공지] 기기초기화 문의 </font></b>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>윳대리 (yulimgosiy)</td>
                        <th scope="row">작성일</th>
                        <td>2020-02-20</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">안녕하세요~! 기기 초기화는 수강중이던 강의가 종료되었을때만&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">가능하며, 강의 수강중인 경우 게시판에 글남기지 마시고 학원으로&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">직접 전화주셔서 동영상담당자를 찾아주시기 바랍니다.^^</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">기기 초기화 글은 자유게시판이 아닌 1:1상담 게시판을&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">이용해주시기 바랍니다~! 자유게시판에 올라오는 기기 초기화글은&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">앞으로 삭제 처리하도록 하겠습니다~</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="50450" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('50450','BBS_0012');">
                    &lt;b&gt;&lt;font color=green&gt; ☆ 대방열림고시학원 인기 추천 카페 안내 ☆
                </a>
            </li>
            <li data-no="50401" class="data-list">
                <span>다음글</span>

                <a href="javascript:void(0);" onclick="javascript:fnViewArticle('50401','BBS_0012');"> 기기등록</a>
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'video_learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 학습 게시판</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnWriteReply();">답변작성</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0013" />
            <input type="hidden" name="nttId" value="116689" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="14473" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="교수님 질문 있습니다" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    동영상 학습 게시판 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            교수님 질문 있습니다
                        </td>
                    </tr>

                    <tr>
                        <th>강의명</th>
                        <td colspan="3">[2021 문제] 식사요법 및 실습</td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>김민준 (mj2555)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-29</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>121.183.233.17</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                안녕하세요 교수님! 갑자기 헷갈리는 부분이 있어 질문납깁니다~
                                <br />
                                신장질환에서 단백뇨가 나올정도로 신장이 망가지는건 사구체여과율이 증가한건가요 감소한건가요? <br />
                                그럼 사구체장애로 핍뇨가 발생한것은 단백뇨와 반대되는 신장의 장애기전인건가요?
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116687" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116687','BBS_0013');">
                    유화제 질문입니다
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'faq')
<section class="rightCont">
    <div class="rightTitle">
        <h3>FAQ</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0014" />
            <input type="hidden" name="nttId" value="103622" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="4" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="교재 배송에 소요되는 시간입니다." />
            <table class="commonTable writeTable">
                <caption class="blind">
                    FAQ 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            교재 배송에 소요되는 시간입니다.
                        </td>
                    </tr>

                    <tr>
                        <th>카테고리</th>
                        <td colspan="3">인터넷서점</td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>이현주 (daebangmajor)</td>
                        <th scope="row">작성일</th>
                        <td>2020-06-01</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="row">순서</th>
                        <td colspan="3">
                            1
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">노출여부</th>
                        <td colspan="3">
                            보임
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <strong>
                                        <span style="background-color: rgb(255, 245, 153); font-family: 맑은 고딕; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">주중</span>에 결제가 접수되는 건은
                                        <span style="background-color: rgb(255, 245, 153); font-family: 맑은 고딕; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">매일 낮 12시를 기준으로 배송</span>이 됩니다.
                                    </strong>
                                </p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <strong>만약 오늘 낮 12시전에 결제가 완료된 건[전날 낮 12시 이후 ~ 금일 낮 12시 이전 결제]은 당일 출발하며 보통 다음날 수령이 가능합니다.</strong>
                                </p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;"><strong>제주도를 비롯한 도서산간 지역의 경우 하루가 더 걸리는 경우도 있습니다.</strong></p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;"><strong>금요일 낮 12시 이후 결제건은 그 다음주 월요일에 출발을 합니다.</strong></p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <strong>
                                        **
                                        <span style="color: rgb(0, 0, 255); font-family: 맑은 고딕; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">
                                            강의와 교재를 같이 주문하실 때에는 강의 시작일을 결제일 기준 최소 3~4일 이후로 지정
                                        </span>
                                        하여 주문을 해주시는 것이 좋습니다.
                                    </strong>
                                    <br />
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="103610" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('103610','BBS_0014');">
                    비밀번호 찾기가 안되시는 경우
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'news')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학원소식</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0002" />
            <input type="hidden" name="nttId" value="116595" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="900" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="<b><font color=black> 의료기술직공무원 합격! 본 내용 구석구석을 꼼꼼히 체크해 보세요! </b>" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    학원소식 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            <b><font color="black"> 의료기술직공무원 합격! 본 내용 구석구석을 꼼꼼히 체크해 보세요! </font></b><font color="black"> </font>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>이과장 (dbyadmin)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-28</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <meta http-equiv="content-type" content="text/html; charset=euc-kr" /><title>의료기술직공무원 합격! 합격생 추천 강의</title><meta name="description" content="대방열림고시학원" />
                                </p>
                                <h2 style="font-family: '맑은 고딕'; line-height: normal;">의료기술직공무원&nbsp;합격!&nbsp;본&nbsp;내용&nbsp;구석구석을&nbsp;꼼꼼히&nbsp;체크해&nbsp;보세요!</h2>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <img src="http://yulimgosi.com/yulimgosi_pr/images/2021/2021htyulim1.gif" border="0" usemap="#ImageMap1" />
                                    <img src="http://yulimgosi.com/yulimgosi_pr/images/2021/2021htyulim2.gif" border="0" usemap="#ImageMap2" />
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <map name="ImageMap1">
                                        <area shape="rect" coords="574, 371, 889, 570" href="http://naver.me/Fos8y373" target="_blank" />
                                        <area shape="rect" coords="678, 708, 878, 919" href="http://www.yulimgosi.com/front/Lecture/movingList.do?leCode=LE00006&amp;coIdx=37" target="_blank" />
                                        <area shape="rect" coords="354, 1147, 595, 1288" href="https://youtu.be/hsH--J4u2TM" target="_blank" />
                                        <area shape="rect" coords="139, 1156, 309, 1324" href="https://blog.naver.com/gyury/222128068821" target="_blank" />
                                        <area shape="rect" coords="621, 1150, 862, 1301" href="https://youtu.be/OCZ64vmesuc" target="_blank" />
                                        <area shape="rect" coords="27, 1365, 872, 1609" href="http://naver.me/x3O7QI35" target="_blank" />
                                    </map>
                                    <map name="ImageMap2">
                                        <area shape="rect" coords="10, 398, 889, 485" href="http://www.yulimgosi.com/front/viewAritcle.do?bbsId=BBS_0003&amp;nttId=73043&amp;nttCat=&amp;webMode=FRONT" target="_blank" />
                                    </map>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116202" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116202','BBS_0002');">
                    &lt;b&gt;&lt;font color=black&gt; 서울시간호직공무원 합격! 2021 EBS간호직공무원...
                </a>
            </li>
            <li data-no="33401" class="data-list">
                <span>다음글</span>

                <a href="javascript:void(0);" onclick="javascript:fnViewArticle('33401','BBS_0002');"> 영양사 12월 1일 3차개강!!!</a>
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'notice')
<section class="rightCont">
    <div class="rightTitle">
        <h3>공지사항</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0001" />
            <input type="hidden" name="nttId" value="115293" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="56" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="<b><font color=#FF007F> 모바일 강의 수강하고 계신 분들 중 '권한이 없다' 라는 메세지가 나오시는 분들은 앱 업데이트를 꼭 진행해 주세요~ </b>" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    공지사항 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            <b><font color="#FF007F"> 모바일 강의 수강하고 계신 분들 중 '권한이 없다' 라는 메세지가 나오시는 분들은 앱 업데이트를 꼭 진행해 주세요~ </font></b><font color="#FF007F"> </font>
                        </td>
                    </tr>

                    <tr>
                        <th>카테고리</th>
                        <td colspan="3">전체공지</td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>이과장 (dbyadmin)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-13</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <strong>
                                        <span style="font-size: 12pt; font-family: '맑은 고딕'; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">
                                            모바일&nbsp;강의&nbsp;수강하고&nbsp;계신&nbsp;분들&nbsp;중&nbsp;'권한이&nbsp;없다'&nbsp;라는&nbsp;메세지가&nbsp;나오시는&nbsp;분들은&nbsp;앱&nbsp;업데이트를&nbsp;꼭&nbsp;진행해&nbsp;주세요~
                                        </span>
                                    </strong>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <strong style="font-size: 20pt;"><a href="https://cafe.naver.com/yulim21c/74362" target="_blank" title="" class="" style="font-size: 20pt;">상세내용 보기 (클릭)</a></strong>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="111447" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('111447','BBS_0001');">
                    [긴급공지] 코로나 사태로 인하여 2020.8.31 ~ 2020.9.5 현장강의는 비대면 ...
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'passing')
<section class="rightCont">
    <div class="rightTitle">
        <h3>REAL 합격수기</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0016" />
            <input type="hidden" name="nttId" value="34888" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="653" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="<b><font color=purple> 대방열림고시학원의 합격수기가 다른점! [필독] </b>" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    REAL 합격수기 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            <b><font color="purple"> 대방열림고시학원의 합격수기가 다른점! [필독] </font></b><font color="purple"> </font>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>yulimgosi (yulimgosi)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-16</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="row">노출여부</th>
                        <td colspan="3">
                            보임
                        </td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <b>
                                            <span style="font-size: 18pt; color: rgb(255, 0, 0); font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; line-height: 28.8px; margin-top: 0px; margin-bottom: 0px;">
                                                대방열림고시학원의 합격수기가 다른점! [필독]
                                            </span>
                                        </b>
                                        <br />
                                        <br />
                                        <br />
                                    </span>
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        경쟁이 심화되는 공무원 시장에는 강의를 제공하는 많은 업체들이 있습니다. 하지만 이들 중에는 확인조차 불가능한 합격수기도 있고, 업체의 강의수강과는 크게 관련없는 수기들도 있습니다.
                                    </span>
                                    <br />
                                    <br />
                                    <b>
                                        <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; color: rgb(239, 0, 124); line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                            대방열림고시학원 홈페이지 및 카페에는
                                            <span style="font-size: 14pt; font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;">매년 많은 합격수기들이 등록</span>이 되고
                                            있습니다.&nbsp;
                                        </span>
                                        <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                            <span style="color: rgb(239, 0, 124); font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                                본원에 올라오는 수기들 중 대부분은 시험과목에 대한 종합반 강의를 수강하신 최종합격자분들의 수기입니다. 일부 수기 중엔 전공과목만 수강한 분들의 수기도 있습니다. 물론 단과 한 강의만 들은
                                                합격자에게는 합격수기 요청을 아예 하지 않고 있습니다.
                                            </span>
                                            [달랑 한 강의만 들어도 무리하게 합격수기를 요청하여 등록하는 업체들도 있습니다.]
                                        </span>
                                    </b>
                                    <br />
                                    <br />
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        최근 수년간 합격수기들이 거의 올라오지 않았던 업체들 중 억지나 다름없는 수기를 올리는 곳들도 있습니다.
                                        <u>시험합격을 하는데 필요했던 정규과정도 아닌 한 강의 또는 이벤트성 특강을 수강하였더라도 합격수기를 요청하여 마치 리스트를 보면 여러 합격수기들이 올라오는 것처럼 포장된 것들</u>도 있습니다.
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        온갖 허위 과대광고를 앞세우는 업체들 중에는 강의 수강여부와 상관없이 형식적인 면접특강을 무상으로 제공하는 곳들도 있습니다.
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        이들의 목적은 양질의 면접특강을 제공하는 것이 아닌 그것을 빌미로 본원 출신 합격자로 둔갑시키기 위해서입니다. 강의수강은 하지도 않았는데 형식적인 면접특강을 제공했다하여 과연 합격생일까요?
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">'합격자 다수배출'이라는 문구들을 조심해야 합니다.</span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; color: rgb(0, 158, 37); line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <b>** 대방열림고시학원에선 단과수강생에게는 합격수기를 아예 요청하지 않습니다.</b>
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; color: rgb(0, 158, 37); line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <b>** 합격수기에는 반드시 년도, 지방, 수험번호 등이 필수로 기재되야 합니다.</b>
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; color: rgb(0, 158, 37); font-size: 16pt; line-height: 25.6px; margin-top: 0px; margin-bottom: 0px;">
                                        <b style="font-size: 16pt;"><a href="https://028234700.blog.me/220832369387" target="_blank" title="" id="" class="">가짜 합격수기에 속지 않는 방법 [클릭]</a></b>
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; color: rgb(0, 158, 37); line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <b>
                                            <br />
                                            <br />
                                            <br />
                                        </b>
                                    </span>
                                    <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        기술직공무원 시험을 준비하는 혹은 준비하려는 수험생이라면 아래 링크의 내용을 반드시! 확인해보시기 바랍니다.
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <font face="나눔고딕코딩, NanumGothicCoding, sans-serif" style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        허위과대광고에 속지 않는 매우 좋은 팁!!!<br />
                                    </font>
                                    <br />
                                    <b>
                                        <span style="font-family: 나눔고딕코딩, NanumGothicCoding, sans-serif; font-size: 18pt; line-height: 28.8px; margin-top: 0px; margin-bottom: 0px;">
                                            <a href="http://028234700.blog.me/220841140862" target="_blank">꼭 체크해야 할 내용! [필독 / 클릭]</a>
                                        </span>
                                        <br />
                                    </b>
                                    <br />
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="34727" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('34727','BBS_0016');">
                    &lt;b&gt;&lt;font color=blue&gt; ★★★ 가짜 합격수기에 속지 않는 방법! ★★★ &lt;/...
                </a>
            </li>
            <li data-no="34238" class="data-list">
                <span>다음글</span>

                <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34238','BBS_0016');"> &lt;b&gt;&lt;font color=blue&gt; 본 합격수기 게시판은!!! ^o^</a>
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'origin')
<section class="rightCont">
    <div class="rightTitle">
        <h3>본원출신 합격자</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0017" />
            <input type="hidden" name="nttId" value="35307" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="333" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="2014 제1회 경상북도 지방공무원 경력경쟁임용시험 최종합격자 (보건진료, 의료직)" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    본원출신 합격자 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            2014 제1회 경상북도 지방공무원 경력경쟁임용시험 최종합격자 (보건진료, 의료직)
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>yulimgosi (yulimgosi)</td>
                        <th scope="row">작성일</th>
                        <td>2014-06-25</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>106.243.155.115</td>
                    </tr>

                    <tr>
                        <th scope="row">노출여부</th>
                        <td colspan="3">
                            보임
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="title_th bdtop"><strong>지역</strong></th>
                        <td colspan="3">경북</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p
                                    style="
                                        text-align: left;
                                        line-height: 13.5pt;
                                        margin: 0cm 0cm 0pt;
                                        text-autospace: ideograph-numeric;
                                        word-break: keep-all;
                                        mso-pagination: widow-orphan;
                                        mso-margin-top-alt: auto;
                                        mso-margin-bottom-alt: auto;
                                    "
                                    class="MsoNormal"
                                    align="left"
                                >
                                    <font face="맑은 고딕">
                                        <b style="mso-bidi-font-weight: normal;">
                                            <span
                                                style="
                                                    color: black;
                                                    font-size: 9pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                                lang="EN-US"
                                            >
                                                2014
                                            </span>
                                        </b>
                                        <b style="mso-bidi-font-weight: normal;">
                                            <span
                                                style="
                                                    color: black;
                                                    font-size: 9pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                            >
                                                제<span lang="EN-US">1</span>회 경상북도 지방공무원 경력경쟁임용시험 최종합격자
                                            </span>
                                        </b>
                                        <b style="mso-bidi-font-weight: normal;">
                                            <span
                                                style="
                                                    color: black;
                                                    font-size: 12pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-bidi-font-size: 10pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                                lang="EN-US"
                                            >
                                                (
                                            </span>
                                        </b>
                                        <b style="mso-bidi-font-weight: normal;">
                                            <span
                                                style="
                                                    color: black;
                                                    font-size: 12pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-bidi-font-size: 10pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                            >
                                                보건진료<span lang="EN-US">, </span>의료직
                                                <span lang="EN-US">
                                                    )<!--?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /-->
                                                    <o:p></o:p>
                                                </span>
                                            </span>
                                        </b>
                                    </font>
                                </p>
                                <br />
                                <p
                                    style="
                                        text-align: left;
                                        line-height: 13.5pt;
                                        margin: 0cm 0cm 0pt;
                                        text-autospace: ideograph-numeric;
                                        word-break: keep-all;
                                        mso-pagination: widow-orphan;
                                        mso-margin-top-alt: auto;
                                        mso-margin-bottom-alt: auto;
                                    "
                                    class="MsoNormal"
                                    align="left"
                                >
                                    <b style="mso-bidi-font-weight: normal;">
                                        <span style="font-family: 돋움; color: black; font-size: 12pt; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p>&nbsp;</o:p></span>
                                    </b>
                                </p>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <table
                                    style="
                                        border-bottom: windowtext 1pt solid;
                                        border-left: windowtext 1pt solid;
                                        width: 380.25pt;
                                        border-top: windowtext 1pt solid;
                                        border-right: windowtext 1pt solid;
                                        mso-border-alt: solid windowtext 0.75pt;
                                        mso-yfti-tbllook: 1184;
                                        mso-padding-alt: 0cm 0cm 0cm 0cm;
                                        mso-cellspacing: 0cm;
                                        mso-border-insideh: 0.75pt solid windowtext;
                                        mso-border-insidev: 0.75pt solid windowtext;
                                    "
                                    class="MsoNormalTable"
                                    border="1"
                                    cellspacing="0"
                                    cellpadding="0"
                                    width="507"
                                >
                                    <tbody>
                                        <tr style="height: 30.25pt; mso-yfti-irow: 0; mso-yfti-firstrow: yes;">
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    padding-left: 0.75pt;
                                                    width: 30.5pt;
                                                    padding-right: 0.75pt;
                                                    background: #ffffcc;
                                                    height: 30.25pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="41"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 13.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b>
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            시험<span lang="EN-US"><br /></span>일자
                                                        </span>
                                                    </b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    padding-left: 0.75pt;
                                                    width: 68.85pt;
                                                    padding-right: 0.75pt;
                                                    background: #ffffcc;
                                                    height: 30.25pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="92"
                                                colspan="2"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 13.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">직 렬</span></b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    padding-left: 0.75pt;
                                                    width: 40.7pt;
                                                    padding-right: 0.75pt;
                                                    background: #ffffcc;
                                                    height: 30.25pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 13.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">경쟁률</span></b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    padding-left: 0.75pt;
                                                    width: 53.1pt;
                                                    padding-right: 0.75pt;
                                                    background: #ffffcc;
                                                    height: 30.25pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="71"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; line-height: 13.5pt; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; background: #ffffcc; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">선발인원</span></b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    padding-left: 0.75pt;
                                                    width: 40.55pt;
                                                    padding-right: 0.75pt;
                                                    background: #ffffcc;
                                                    height: 30.25pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; line-height: 13.5pt; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">합격선</span></b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    padding-left: 0.75pt;
                                                    width: 146.55pt;
                                                    padding-right: 0.75pt;
                                                    background: #ffffcc;
                                                    height: 30.25pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="195"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 13.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; color: #ff3300; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">본원출신 최종합격자</span></b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="height: 10.5pt; mso-yfti-irow: 1;">
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 30.5pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                rowspan="5"
                                                width="41"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 13.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">2014</span></b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b><span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">4.26</span></b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 34.4pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                rowspan="4"
                                                width="46"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            보건<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;"><span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">진료직</span></b>
                                                    <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0cm;
                                                    background-color: transparent;
                                                    padding-left: 0cm;
                                                    width: 34.45pt;
                                                    padding-right: 0cm;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0cm;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="46"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            안동시<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.7pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">16.7:1</span>
                                                    </b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 53.1pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="71"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">4<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">94.33<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 146.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="195"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; line-height: 10.5pt; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;"><span style="font-family: 돋움; color: blue; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">노아영</span></b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="height: 10.5pt; mso-yfti-irow: 2;">
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0cm;
                                                    background-color: transparent;
                                                    padding-left: 0cm;
                                                    width: 34.45pt;
                                                    padding-right: 0cm;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0cm;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="46"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b>
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            영천시<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.7pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">6:1<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 53.1pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="71"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">1<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">90.00<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 146.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="195"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; line-height: 10.5pt; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: blue; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            김효진<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="height: 10.5pt; mso-yfti-irow: 3;">
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0cm;
                                                    background-color: transparent;
                                                    padding-left: 0cm;
                                                    width: 34.45pt;
                                                    padding-right: 0cm;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0cm;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="46"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b>
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            군위군<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.7pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">17.6:1<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 53.1pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="71"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">5<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">93.83<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 146.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="195"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; line-height: 10.5pt; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: blue; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            채민희<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="height: 10.5pt; mso-yfti-irow: 4;">
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0cm;
                                                    background-color: transparent;
                                                    padding-left: 0cm;
                                                    width: 34.45pt;
                                                    padding-right: 0cm;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0cm;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="46"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b>
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            울진군<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.7pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">23.3:1<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 53.1pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="71"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">3<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        line-height: 10.5pt;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">92.67<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 146.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 10.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="195"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; line-height: 10.5pt; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: blue; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            임미란<span lang="EN-US"><o:p></o:p></span>
                                                        </span>
                                                    </b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="height: 1.5pt; mso-yfti-irow: 5; mso-yfti-lastrow: yes;">
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 68.85pt;
                                                    padding-right: 0.75pt;
                                                    height: 1.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="92"
                                                colspan="2"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                        mso-line-height-alt: 1.5pt;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b>
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">
                                                            의료기술직<span lang="EN-US">-</span>방사선<span lang="EN-US">(</span>영주시<span lang="EN-US">)</span>
                                                        </span>
                                                    </b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.7pt;
                                                    padding-right: 0.75pt;
                                                    height: 1.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                        mso-line-height-alt: 1.5pt;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">17:1<o:p></o:p></span>
                                                    </b>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 53.1pt;
                                                    padding-right: 0.75pt;
                                                    height: 1.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="71"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                        mso-line-height-alt: 1.5pt;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">1</span>
                                                    </b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 40.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 1.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="54"
                                            >
                                                <br />
                                                <p
                                                    style="
                                                        text-align: center;
                                                        margin: 0cm 0cm 0pt;
                                                        text-autospace: ideograph-numeric;
                                                        word-break: keep-all;
                                                        mso-pagination: widow-orphan;
                                                        mso-margin-top-alt: auto;
                                                        mso-margin-bottom-alt: auto;
                                                        mso-line-height-alt: 1.5pt;
                                                    "
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;">
                                                        <span style="font-family: 돋움; color: black; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US">87.67</span>
                                                    </b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                            <td
                                                style="
                                                    border-bottom: windowtext 1pt solid;
                                                    border-left: windowtext 1pt solid;
                                                    padding-bottom: 0.75pt;
                                                    background-color: transparent;
                                                    padding-left: 0.75pt;
                                                    width: 146.55pt;
                                                    padding-right: 0.75pt;
                                                    height: 1.5pt;
                                                    border-top: windowtext 1pt solid;
                                                    border-right: windowtext 1pt solid;
                                                    padding-top: 0.75pt;
                                                    mso-border-alt: solid windowtext 0.75pt;
                                                "
                                                width="195"
                                            >
                                                <br />
                                                <p
                                                    style="text-align: center; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; word-break: keep-all; mso-pagination: widow-orphan; mso-line-height-alt: 1.5pt;"
                                                    class="MsoNormal"
                                                    align="center"
                                                >
                                                    <b style="mso-bidi-font-weight: normal;"><span style="font-family: 돋움; color: blue; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;">황혁준</span></b>
                                                    <span style="font-family: 굴림; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt; mso-bidi-font-size: 10pt;" lang="EN-US"><o:p></o:p></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br />
                                <p style="text-align: left; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; mso-pagination: widow-orphan;" class="MsoNormal" align="left">
                                    <font face="맑은 고딕">
                                        <b>
                                            <span
                                                style="
                                                    color: blue;
                                                    font-size: 13.5pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-bidi-font-size: 11pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                                lang="EN-US"
                                            >
                                                ※
                                            </span>
                                        </b>
                                        <b>
                                            <span
                                                style="
                                                    color: blue;
                                                    font-size: 13.5pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-bidi-font-size: 11pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                            >
                                                경상북도 최종합격자가 응시번호로 발표되어 학원에 응시번호를
                                            </span>
                                        </b>
                                        <span style="font-family: 굴림; font-size: 12pt; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt;" lang="EN-US"><o:p></o:p></span>
                                    </font>
                                </p>
                                <br />
                                <p style="text-align: left; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; mso-pagination: widow-orphan;" class="MsoNormal" align="left">
                                    <font face="맑은 고딕">
                                        <b>
                                            <span
                                                style="
                                                    color: blue;
                                                    font-size: 13.5pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-bidi-font-size: 11pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                            >
                                                제공한 합격자만 기재하였습니다<span lang="EN-US">. </span>
                                            </span>
                                        </b>
                                        <span style="font-family: 굴림; font-size: 12pt; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt;" lang="EN-US"><o:p></o:p></span>
                                    </font>
                                </p>
                                <br />
                                <p style="text-align: left; margin: 0cm 0cm 0pt; text-autospace: ideograph-numeric; mso-pagination: widow-orphan;" class="MsoNormal" align="left">
                                    <font face="맑은 고딕">
                                        <b>
                                            <span
                                                style="
                                                    color: blue;
                                                    font-size: 13.5pt;
                                                    mso-bidi-font-family: 굴림;
                                                    mso-font-kerning: 0pt;
                                                    mso-bidi-font-size: 11pt;
                                                    mso-ascii-font-family: '맑은 고딕';
                                                    mso-fareast-font-family: '맑은 고딕';
                                                    mso-hansi-font-family: '맑은 고딕';
                                                "
                                            >
                                                최종합격자중 본원 출신이신 경우 학원으로 연락주시기 바랍니다<span lang="EN-US">.^^</span>
                                            </span>
                                        </b>
                                        <span style="font-family: 굴림; font-size: 12pt; mso-bidi-font-family: 굴림; mso-font-kerning: 0pt;" lang="EN-US"><o:p></o:p></span>
                                    </font>
                                </p>
                                <br />
                                <p style="margin: 0cm 0cm 0pt;" class="MsoNormal">
                                    <span lang="EN-US">
                                        <o:p><font face="맑은 고딕">&nbsp;</font></o:p>
                                    </span>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="35306" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('35306','BBS_0017');">
                    2014년도 환경부 9급 환경직공무원 경력경쟁채용시험 최종합격자
                </a>
            </li>
            <li data-no="35308" class="data-list">
                <span>다음글</span>

                <a href="javascript:void(0);" onclick="javascript:fnViewArticle('35308','BBS_0017');"> ★★★ 2014 전국 지방직 공무원 시험 본원출신 합격자 현황 ★★★</a>
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'announcement')
<section class="rightCont">
    <div class="rightTitle">
        <h3>시험공고</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0004" />
            <input type="hidden" name="nttId" value="116599" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="5349" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="2020년도 제4회 강원도 보건연구사 공무원 임용시험 시행계획 공고" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    시험공고 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            2020년도 제4회 강원도 보건연구사 공무원 임용시험 시행계획 공고
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>쏭쏭쏭 (dragonhani)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-28</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>222.108.121.106</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025835" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="2" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000258350">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025835','0')">
                                                2020년_제4회_강원도_공무원_임용시험_시행계획_공고(보건연구).pdf&nbsp;[492963&nbsp;byte]
                                            </a>
                                        </td>
                                    </tr>

                                    <tr id="fileObjFILE_0000000000258351">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025835','1')">
                                                [붙임_1]_추천서_서식.hwp&nbsp;[16896&nbsp;byte]
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p class="se-text-paragraph se-text-paragraph-align-left" id="SE-da90ba76-5ac9-4e7d-8b31-90be9c952791" style="line-height: 1.6; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span
                                        class="se-ff-nanumgothic se-fs19 __se-node"
                                        id="SE-b4532824-2353-4d2f-9159-4d4245ae5745"
                                        style="color: rgb(0, 120, 203); font-family: 맑은 고딕; font-size: 10pt; line-height: 21.3333px; margin-top: 0px; margin-bottom: 0px;"
                                    >
                                        <b>2020년도 제4회 강원도 보건연구사 공무원 임용시험 시행계획 공고</b>
                                    </span>
                                </p>
                                <p class="se-text-paragraph se-text-paragraph-align-left" id="SE-e3cad25f-47d7-475e-9fcf-d05ecd748117" style="line-height: 1.6; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    &nbsp;
                                </p>
                                <p class="se-text-paragraph se-text-paragraph-align-left" id="SE-6254bed0-4c48-45b4-a85b-a9d933c60bb7" style="line-height: 1.6; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span
                                        class="se-ff-nanumgothic se-fs19 __se-node"
                                        id="SE-66bac21c-f86b-4c7c-81b0-317671434112"
                                        style="color: rgb(255, 0, 16); font-family: 맑은 고딕; font-size: 10pt; line-height: 21.3333px; margin-top: 0px; margin-bottom: 0px;"
                                    >
                                        <b>자세한 내용은 첨부파일의 공고문을 꼭! 확인해주세요~</b>
                                    </span>
                                </p>
                                <p class="se-text-paragraph se-text-paragraph-align-left" style="line-height: 1.6; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p class="se-text-paragraph se-text-paragraph-align-left" style="line-height: 1.6; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p class="se-text-paragraph se-text-paragraph-align-left" style="line-height: 1.6; font-family: 맑은 고딕; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span
                                        class="se-ff-nanumgothic se-fs19 __se-node"
                                        id="SE-66bac21c-f86b-4c7c-81b0-317671434112"
                                        style="color: rgb(255, 0, 16); font-family: 맑은 고딕; font-size: 10pt; line-height: 21.3333px; margin-top: 0px; margin-bottom: 0px;"
                                    >
                                        <b>
                                            <a href="https://cafe.naver.com/yulim21c/74887" target="_blank" title="" id="" class="">
                                                <span style="font-size: 20pt; color: rgb(0, 0, 255); font-family: 맑은 고딕; line-height: 42.6667px; margin-top: 0px; margin-bottom: 0px;">시험공고 보러가기(클릭)</span>
                                            </a>
                                            <br />
                                        </b>
                                    </span>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116522" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116522','BBS_0004');">
                    2020년 제3회 강원도 동해시 의료기술직(방사선)공무원 경력경쟁 임용시험 필기시험 일시·...
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'competition')
<section class="rightCont">
    <div class="rightTitle">
        <h3>경쟁률 및 합격선</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0005" />
            <input type="hidden" name="nttId" value="116426" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="1215" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="﻿2020년도 제1회 전라남도 장흥군 간호직공무원 경력경쟁임용시험 필기시험 합격선" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    경쟁률 및 합격선 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            2020년도 제1회 전라남도 장흥군 간호직공무원 경력경쟁임용시험 필기시험 합격선
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>쏭쏭쏭 (dragonhani)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-26</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>222.108.121.106</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025706" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000257060">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025706','0')">
                                                공고문.hwp&nbsp;[22016&nbsp;byte]
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="color: rgb(0, 118, 200); font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <strong>
                                            <span style="font-size: 14pt; font-family: 맑은 고딕; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;">2020년도 제1회 전라남도 장흥군 간호직공무원 경력경쟁임용시험 필기시험 합격선</span>
                                        </strong>
                                    </span>
                                </p>
                                <p style="font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="color: rgb(0, 118, 200); font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <strong>
                                            <span style="font-size: 14pt; font-family: 맑은 고딕; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;"><br /></span>
                                        </strong>
                                    </span>
                                </p>
                                <p style="font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="color: rgb(0, 118, 200); font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                        <strong>
                                            <span style="font-size: 14pt; font-family: 맑은 고딕; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;"><br /></span>
                                        </strong>
                                    </span>
                                </p>
                                <p style="font-family: 맑은 고딕; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <a href="https://cafe.naver.com/yulim21c/74805" target="_blank" title="" id="" class="">
                                        <span style="font-size: 16pt; color: rgb(255, 0, 0); font-family: 맑은 고딕; line-height: 25.6px; margin-top: 0px; margin-bottom: 0px;">
                                            <strong style="font-size: 16pt;">합격선 보러가기(클릭)</strong>
                                        </span>
                                    </a>
                                    <br />
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116424" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116424','BBS_0005');">
                    2020년도 제2회 대구광역시 보건연구사,보건직(고졸)공무원임용 시험 응시현황 안내
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'examinee')
<section class="rightCont">
    <div class="rightTitle">
        <h3>수험가 뉴스</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0006" />
            <input type="hidden" name="nttId" value="41899" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="877" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="내년부터 지방공무원시험 서울도 같은날 치른다" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    수험가 뉴스 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            내년부터 지방공무원시험 서울도 같은날 치른다
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>yulimgosi (yulimgosi)</td>
                        <th scope="row">작성일</th>
                        <td>2018-12-06</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <a href="https://news.naver.com/main/read.nhn?mode=LSD&amp;mid=sec&amp;oid=001&amp;aid=0010510077&amp;sid1=001" target="_blank">
                                    <img src="/upload/image/20181206130817%2D%2Ejpg" title="20181206130817%2D%2Ejpg" /><br style="clear: both;" />
                                </a>
                                <p>&nbsp;</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="41898" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('41898','BBS_0006');">
                    행정안전부, 2018년도 지방공무원 공개경쟁임용시험 일정 발표
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학습자료실</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0007" />
            <input type="hidden" name="nttId" value="116640" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="6319" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="2021 영양교사 실전모의고사 3회문제" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    학습자료실 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            2021 영양교사 실전모의고사 3회문제
                        </td>
                    </tr>

                    <tr>
                        <th>강의명</th>
                        <td colspan="3">2021 영양교사 실전모의고사 (최)</td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>윳대리 (yulimgosiy)</td>
                        <th scope="row">작성일</th>
                        <td>2020-10-29</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025840" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000258400">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025840','0')">
                                                2021_영양교사_모의고사3회_문제.zip&nbsp;[11046056&nbsp;byte]
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 14pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">다운받아 확인하세요.^^&nbsp;</span>
                                    <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 14pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">강의 수강전 미리 풀어보시기 바랍니다~!&nbsp;</span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">&nbsp;</p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="color: rgb(255, 0, 0); font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px; font-family: '맑은 고딕';">
                                        <strong>
                                            <span style="font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px; font-family: '맑은 고딕';">실전모의고사 4회 문제는 11월 5일(목) 오전 10시 5분에 업로드 됩니다.^^&nbsp;</span>
                                        </strong>
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">&nbsp;</p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-size: 18.6667px; line-height: 28.0001px; margin-top: 0px; margin-bottom: 0px; font-family: '맑은 고딕';">파일에 이미지가 밀려있는 경우 아래 링크로 가셔서 한컴뷰어를 설치하여</span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-size: 18.6667px; line-height: 28.0001px; margin-top: 0px; margin-bottom: 0px; font-family: '맑은 고딕';">
                                        열어보시기 바랍니다~ 모바일 강의 수강생도 문제지나 보충프린트는 PC에서&nbsp;
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-size: 18.6667px; line-height: 28.0001px; margin-top: 0px; margin-bottom: 0px; font-family: '맑은 고딕';">
                                        다운이 가능하니 모바일기기에서 잘 안될 경우 PC에서 다운받아 보시기 바랍니다.
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">&nbsp;</p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 16px; font-family: '맑은 고딕';">
                                    <a href="https://www.hancom.com/cs_center/csDownload.do" target="_blank" title="" class="" style="text-decoration-line: none; font-size: 14pt;">https://www.hancom.com/cs_center/csDownload.do</a>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-size: 18.6667px; line-height: 28.0001px; margin-top: 0px; margin-bottom: 0px; font-family: '맑은 고딕';"><br style="font-family: 나눔고딕, NanumGothic, sans-serif;" /></span>
                                    <br style="font-family: 나눔고딕, NanumGothic, sans-serif;" />
                                    <span style="font-size: 14pt; font-family: 나눔고딕, NanumGothic, sans-serif; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                        문제지 기본 사이즈는 B4로 되어 있습니다. A4용지로 출력하실때는 프린트 설정에
                                    </span>
                                    <br style="font-family: 나눔고딕, NanumGothic, sans-serif;" />
                                    <span style="font-size: 14pt; font-family: 나눔고딕, NanumGothic, sans-serif; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                        인쇄방식에서&nbsp;<strong>'공급용지에 맞추어'</strong>로 해놓고 출력해주셔야 합니다~!
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">&nbsp;</p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 14pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                        <img
                                            src="http://admin.yulimgosi.com:8086/cmm/dext/imageSrc.do?2019/20191017_095613964_65711.jpg?573^619^&amp;path=2019&amp;physical=20191017_095613964_65711.jpg"
                                            title=""
                                            alt=""
                                            border="0"
                                            style="vertical-align: top; border: 0px solid rgb(0, 0, 0);"
                                        />
                                        <br />
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">&nbsp;</p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 14pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                        <b style="font-family: 'Noto Sans KR', sans-serif; font-size: 13px;">
                                            <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 11pt; color: rgb(255, 0, 0); line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                                본 자료 다운(다운안받고 열어본것도 해당됩니다)시에는 강의 수강을 안하셨어도<br />
                                            </span>
                                            <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 11pt; color: rgb(255, 0, 0); line-height: 28px; margin-top: 0px; margin-bottom: 0px;">강의 수강으로 인정되니&nbsp;</span>
                                            <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 11pt; color: rgb(255, 0, 0); line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                                샘플강의 확인후에 다운받아 주시기 바랍니다.^^&nbsp;
                                            </span>
                                        </b>
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 14pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                        <b style="font-family: 'Noto Sans KR', sans-serif; font-size: 13px;">
                                            <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 10pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                                [강의수강으로 인정된다는 것은 자료만 다운받고 환불요청시 3회문제에 해당하는 강의를&nbsp;
                                            </span>
                                        </b>
                                    </span>
                                </p>
                                <p style="margin: 0px 5px 0px 0px; padding: 0px; font-size: 10pt; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); line-height: 1.5; font-family: '맑은 고딕';">
                                    <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 14pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">
                                        <b style="font-family: 'Noto Sans KR', sans-serif; font-size: 13px;">
                                            <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 10pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">수</span>
                                        </b>
                                    </span>
                                    <b style="font-family: 'Noto Sans KR', sans-serif; font-size: 13px;">
                                        <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 10pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">강한걸로 인정되어 계산이 된</span>
                                    </b>
                                    <b style="font-family: 'Noto Sans KR', sans-serif; font-size: 13px;">
                                        <span style="font-family: 나눔고딕, NanumGothic, sans-serif; font-size: 10pt; line-height: 28px; margin-top: 0px; margin-bottom: 0px;">다는 뜻입니다.]</span>
                                    </b>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="116634" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('116634','BBS_0007');">
                    2021 간호관리 보충프린트8
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'errata')
<section class="rightCont">
    <div class="rightTitle">
        <h3>정오표</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0008" />
            <input type="hidden" name="nttId" value="100086" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="122" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="2020 공무원 화학 단계별 문제풀이 정오표" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    정오표 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            2020 공무원 화학 단계별 문제풀이 정오표
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>쏭쏭쏭 (dragonhani)</td>
                        <th scope="row">작성일</th>
                        <td>2020-04-22</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>222.108.121.106</td>
                    </tr>

                    <tr>
                        <th scope="row">노출여부</th>
                        <td colspan="3">
                            보임
                        </td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <img src="/cmm/dext/imageSrc.do?2020/20200422_090459323_17862.jpg?650^271^&amp;path=2020&amp;physical=20200422_090459323_17862.jpg" title="" alt="" border="0" style="border: 0px solid rgb(0, 0, 0);" />
                                    <br />
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-size: 14pt; font-family: '맑은 고딕'; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;">
                                        <strong>
                                            <span style="font-family: 나눔고딕, NanumGothic, 돋움; font-size: 14pt; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;">
                                                <span style="color: rgb(58, 50, 195); font-family: 나눔고딕, NanumGothic, 돋움; font-size: 14pt; line-height: 22.4px; margin-top: 0px; margin-bottom: 0px;">
                                                    2020&nbsp;공무원 화학&nbsp;단계별 문제풀이
                                                </span>
                                                &nbsp;정오표입니다.
                                            </span>
                                        </strong>
                                    </span>
                                </p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p class="0" style="line-height: 100%; margin-bottom: 10pt; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px;">
                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 14pt; font-weight: bold; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">2020 </span>
                                    <span style="font-size: 14pt; font-weight: bold; font-family: '맑은 고딕'; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">화학 기출문제 분석 </span>
                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 14pt; font-weight: bold; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">&amp; </span>
                                    <span style="font-size: 14pt; font-weight: bold; font-family: '맑은 고딕'; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">응용</span>
                                </p>
                                <table style="border: 1px solid rgb(0, 0, 0); border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    background: rgb(221, 221, 221);
                                                    border-width: 3px 1px 1px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 25px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">위치</p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="background: rgb(221, 221, 221); border-width: 3px 3px 1px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 25px;"
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">수정 전</span>
                                                </p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    background: rgb(221, 221, 221);
                                                    border-width: 3px medium 1px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 25px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">수정 후</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px 1px 1px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">p.52</span>
                                                </p>
                                            </td>
                                            <td valign="center" style="border-width: 1px 3px 1px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 54px;">
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">190</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                    <span style="font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"> </span>정답
                                                    <span style="color: rgb(255, 0, 0); letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">②</span>
                                                </p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px medium 1px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">190</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                    <span style="font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"> </span>정답
                                                    <span style="letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">①</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px 1px 3px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">p.78</span>
                                                </p>
                                            </td>
                                            <td valign="center" style="border-width: 1px 3px 3px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 54px;">
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                                <p style="font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                                <p style="font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px medium 3px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">274</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                    <span style="font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"> </span>정답
                                                    <span style="letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">④</span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="0" style="text-align: right; line-height: 100%; margin-bottom: 10pt; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p class="0" style="line-height: 100%; margin-bottom: 10pt; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px;">
                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 14pt; font-weight: bold; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">2020 </span>
                                    <span style="font-size: 14pt; font-weight: bold; font-family: '맑은 고딕'; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">화학 단원별 문제풀이</span>
                                </p>
                                <table style="border: 1px solid rgb(0, 0, 0); border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    background: rgb(221, 221, 221);
                                                    border-width: 3px 1px 1px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 25px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">위치</p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="background: rgb(221, 221, 221); border-width: 3px 3px 1px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 25px;"
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">수정 전</span>
                                                </p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    background: rgb(221, 221, 221);
                                                    border-width: 3px medium 1px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 25px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">수정 후</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px 1px 1px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">p.16</span>
                                                </p>
                                            </td>
                                            <td valign="center" style="border-width: 1px 3px 1px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 54px;">
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">35</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                </p>
                                                <table style="border: 1px solid rgb(0, 0, 0); border-collapse: collapse;">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="center" style="padding: 1.41pt 5.1pt; border: 1px solid rgb(0, 0, 0); width: 293px; height: 4px;">
                                                                <p class="0" style="text-align: center; font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CH</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; vertical-align: sub; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">3</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CCCH</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; vertical-align: sub; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">3</span>
                                                                    <span style="color: rgb(255, 0, 0); letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CH</span>
                                                                    <span
                                                                        style="
                                                                            color: rgb(255, 0, 0);
                                                                            letter-spacing: 0pt;
                                                                            font-family: 함초롬바탕;
                                                                            vertical-align: sub;
                                                                            font-size: 12pt;
                                                                            line-height: 19.2px;
                                                                            margin-top: 0px;
                                                                            margin-bottom: 0px;
                                                                        "
                                                                    >
                                                                        2
                                                                    </span>
                                                                    <span style="color: rgb(255, 0, 0); letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">
                                                                        CHCHCHCH
                                                                    </span>
                                                                    <span
                                                                        style="
                                                                            color: rgb(255, 0, 0);
                                                                            letter-spacing: 0pt;
                                                                            font-family: 함초롬바탕;
                                                                            vertical-align: sub;
                                                                            font-size: 12pt;
                                                                            line-height: 19.2px;
                                                                            margin-top: 0px;
                                                                            margin-bottom: 0px;
                                                                        "
                                                                    >
                                                                        2
                                                                    </span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                                <p style="font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                                <p style="font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px medium 1px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">35</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                </p>
                                                <table style="border: 1px solid rgb(0, 0, 0); border-collapse: collapse;">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="center" style="padding: 1.41pt 5.1pt; border: 1px solid rgb(0, 0, 0); width: 293px; height: 4px;">
                                                                <p class="0" style="text-align: center; font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CH</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; vertical-align: sub; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">3</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CCCH</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; vertical-align: sub; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">3</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CH</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; vertical-align: sub; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">2</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">CHCHCH</span>
                                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; vertical-align: sub; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">2</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    정답 <span style="letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">①</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px 1px 3px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">p.28</span>
                                                </p>
                                            </td>
                                            <td valign="center" style="border-width: 1px 3px 3px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 54px;">
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                                <p style="font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                                <p style="font-family: '맑은 고딕'; font-size: 12pt; line-height: 19.2px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px medium 3px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">63</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                    <span style="font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"> </span>정답
                                                    <span style="letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">②</span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="0" style="text-align: right; line-height: 100%; margin-bottom: 10pt; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p class="0" style="line-height: 100%; margin-bottom: 10pt; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px;">
                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 14pt; font-weight: bold; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">2020 </span>
                                    <span style="font-size: 14pt; font-weight: bold; font-family: '맑은 고딕'; line-height: 13.3333px; margin-top: 0px; margin-bottom: 0px;">화학 실전 모의고사</span>
                                </p>
                                <table style="border: 1px solid rgb(0, 0, 0); border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    background: rgb(221, 221, 221);
                                                    border-width: 3px 1px 1px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 25px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">위치</p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="background: rgb(221, 221, 221); border-width: 3px 3px 1px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 25px;"
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">수정 전</span>
                                                </p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    background: rgb(221, 221, 221);
                                                    border-width: 3px medium 1px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 25px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">수정 후</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px 1px 3px medium;
                                                    border-style: solid solid solid none;
                                                    border-color: rgb(0, 0, 0) rgb(0, 0, 0) rgb(0, 0, 0) currentcolor;
                                                    padding: 1.41pt 5.1pt;
                                                    width: 44px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="text-align: center; line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">p.49</span>
                                                </p>
                                            </td>
                                            <td valign="center" style="border-width: 1px 3px 3px 1px; border-style: solid double solid solid; border-color: rgb(0, 0, 0); padding: 1.41pt 5.1pt; width: 314px; height: 54px;">
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">9</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                    <span style="font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"> </span>정답
                                                    <span style="color: rgb(255, 0, 0); letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">②</span>
                                                </p>
                                            </td>
                                            <td
                                                valign="center"
                                                style="
                                                    border-width: 1px medium 3px 3px;
                                                    border-style: solid none solid double;
                                                    border-color: rgb(0, 0, 0) currentcolor rgb(0, 0, 0) rgb(0, 0, 0);
                                                    padding: 1.41pt 5.1pt;
                                                    width: 320px;
                                                    height: 54px;
                                                "
                                            >
                                                <p class="0" style="line-height: 150%; font-family: '맑은 고딕'; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">
                                                    <span style="letter-spacing: 0pt; font-family: 함초롬바탕; font-weight: bold; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">9</span>
                                                    <span style="font-weight: bold; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">번</span>
                                                    <span style="font-family: 함초롬바탕; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"> </span>정답
                                                    <span style="letter-spacing: 0pt; font-family: '맑은 고딕'; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;">③</span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="98711" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('98711','BBS_0008');">
                    2020 하이스코어 생물 교재 정오표
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>인터넷서점공지사항</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0019" />
            <input type="hidden" name="nttId" value="111447" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="55" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="[긴급공지] 코로나 사태로 인하여 2020.8.31 ~ 2020.9.5 현장강의는 비대면 수업으로 진행이 됩니다." />
            <table class="commonTable writeTable">
                <caption class="blind">
                    공지사항 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            [긴급공지] 코로나 사태로 인하여 2020.8.31 ~ 2020.9.5 현장강의는 비대면 수업으로 진행이 됩니다.
                        </td>
                    </tr>

                    <tr>
                        <th>카테고리</th>
                        <td colspan="3">긴급공지</td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>이과장 (dbyadmin)</td>
                        <th scope="row">작성일</th>
                        <td>2020-08-28</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="0" />
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <strong style="font-size: 16pt;">[긴급공지]&nbsp;코로나&nbsp;사태로&nbsp;인하여&nbsp;2020.8.31&nbsp;~&nbsp;2020.9.5&nbsp;현장강의는&nbsp;비대면&nbsp;수업으로&nbsp;진행이&nbsp;됩니다.</strong>
                                </p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    저희도&nbsp;어디에서&nbsp;통보를&nbsp;받고&nbsp;공지를&nbsp;올려드리는&nbsp;것이&nbsp;아니라...&nbsp;기사를&nbsp;확인한&nbsp;후&nbsp;올려드립니다.;;;
                                </p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-size: 10pt; font-family: '맑은 고딕'; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">
                                        오늘이&nbsp;금요일인데&nbsp;당장&nbsp;다음주&nbsp;월요일부터&nbsp;일주일간&nbsp;실시되네요.&nbsp;-_-;
                                    </span>
                                </p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-size: 10pt; font-family: '맑은 고딕'; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">
                                        현재&nbsp;현장강의&nbsp;수강생&nbsp;분들&nbsp;및&nbsp;9월&nbsp;신규개강반&nbsp;수강생&nbsp;분들에게는&nbsp;개별&nbsp;공지드리도록&nbsp;하겠습니다.
                                    </span>
                                </p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-size: 10pt; font-family: '맑은 고딕'; line-height: 20px; margin-top: 0px; margin-bottom: 0px;"><br /></span>
                                </p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <span style="font-size: 10pt; font-family: '맑은 고딕'; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">아래&nbsp;기사&nbsp;내용을&nbsp;참고부탁드립니다.</span>
                                </p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="line-height: 1.5; font-family: '맑은 고딕'; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;">
                                    <a href="https://news.naver.com/main/read.nhn?mode=LPOD&amp;mid=sec&amp;oid=001&amp;aid=0011844682&amp;isYeonhapFlash=Y&amp;rc=N" target="_blank" title="" id="" class="">관련기사 보기 [클릭]</a>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="109321" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('109321','BBS_0001');">
                    모바일 강의 / 안드로이드 기기 수강생분들 필독해주세요.
                </a>
            </li>
            <li data-no="115293" class="data-list">
                <span>다음글</span>

                <a href="javascript:void(0);" onclick="javascript:fnViewArticle('115293','BBS_0001');"> &lt;b&gt;&lt;font color=#FF007F&gt; 모바일 강의 수강하고 계신 분들 중 '권한이 없...</a>
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'practice')
<section class="rightCont">
    <div class="rightTitle">
        <h3>모의고사 다운로드</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnDeleteArticle();">삭제</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form id="frm" name="frm" method="post" action="">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />
            <input type="hidden" name="bbsId" value="BBS_0018" />
            <input type="hidden" name="nttId" value="114469" />
            <input type="hidden" name="replyNo" value="0" />
            <input type="hidden" name="sortOrdr" value="46" />
            <input type="hidden" name="replyLc" value="0" />
            <input type="hidden" name="nttSj" value="식품미생물 모의고사 문제입니다.^^" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    모의고사 다운로드 상세보기
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col" class="first_line">제목</th>
                        <td colspan="3" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                            식품미생물 모의고사 문제입니다.^^
                        </td>
                    </tr>

                    <tr>
                        <th>직렬</th>
                        <td>식품위생직 공무원</td>
                        <th>직렬범위</th>
                        <td>
                            전체
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">작성자(ID)</th>
                        <td>이과장 (dbyadmin)</td>
                        <th scope="row">작성일</th>
                        <td>2020-09-29</td>
                    </tr>
                    <tr>
                        <th scope="col" class="first_line">조회수</th>
                        <td>0</td>
                        <th scope="row">아이피</th>
                        <td>14.36.124.169</td>
                    </tr>

                    <tr>
                        <th scope="row">노출여부</th>
                        <td colspan="3">
                            보임
                        </td>
                    </tr>

                    <tr>
                        <th scope="col">첨부파일</th>
                        <td colspan="3">
                            <input type="hidden" name="atchFileId" value="FILE_000000000024499" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="2" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000244990">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000024499','0')">
                                                식품미생물_모의고사문제_이승훈교수.hwp&nbsp;[36864&nbsp;byte]
                                            </a>
                                        </td>
                                    </tr>

                                    <tr id="fileObjFILE_0000000000244991">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000024499','1')">
                                                식품미생물모의고사정답_해설.hwp&nbsp;[49152&nbsp;byte]
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="View_in" style="word-wrap: break-word; word-break: break-all; padding: 20px;">
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;"><strong>2020.10.17 경상남도 시험응시생 분들을 위한 모의고사 문제입니다.</strong></p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>
                                <p style="font-family: '맑은 고딕'; font-size: 10pt; line-height: 16px; margin-top: 0px; margin-bottom: 0px;"><strong>첨부파일을 확인해 주세요~^^</strong></p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 S-->
            <br />
            <table class="commonTable detailTable">
                <thead>
                    <tr>
                        <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                        <th scope="col" class="first_line" width="*" nowrap="">아이디</th>
                        <th scope="col" class="first_line" width="20%" nowrap="">이름</th>
                        <th scope="col" class="first_line" width="10%" nowrap="">다운횟수</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>jinyu0524</td>
                        <td>김진유</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>N@11069043</td>
                        <td>신민경</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>N@18341133</td>
                        <td>김성희</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>sorry3</td>
                        <td>김소리</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>tmddl0417</td>
                        <td>최승희</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>dmsdhr117</td>
                        <td>박은옥</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>j5jin0704</td>
                        <td>조화진</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>jeb3039</td>
                        <td>정은빈</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>jinafox</td>
                        <td>정진아</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>mineralll</td>
                        <td>김민혜</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>yuniglowingpower</td>
                        <td>전윤희</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>csy3358</td>
                        <td>김예진</td>
                        <td>4</td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>hyundi2011</td>
                        <td>김현지</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>14</td>
                        <td>jace97</td>
                        <td>고수정</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>15</td>
                        <td>jakerick</td>
                        <td>노주형</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>16</td>
                        <td>K@1411340307</td>
                        <td>양문선</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>17</td>
                        <td>K@1452139425</td>
                        <td>김정섭</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>18</td>
                        <td>loveisred2</td>
                        <td>장경아</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>19</td>
                        <td>siopj321</td>
                        <td>황유진</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>20</td>
                        <td>dlwldms217</td>
                        <td>이지은</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>21</td>
                        <td>elijah</td>
                        <td>박순이</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>22</td>
                        <td>gkqrurrkwmdk</td>
                        <td>김효진</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>23</td>
                        <td>K@1491887064</td>
                        <td>여지현</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>24</td>
                        <td>lhj5817</td>
                        <td>이희재</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>25</td>
                        <td>N@126618682</td>
                        <td>심현지</td>
                        <td>4</td>
                    </tr>

                    <tr>
                        <td>26</td>
                        <td>N@61070212</td>
                        <td>손형경</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>27</td>
                        <td>yoyoyo20</td>
                        <td>배정민</td>
                        <td>6</td>
                    </tr>

                    <tr>
                        <td>28</td>
                        <td>decfive</td>
                        <td>권민지</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>29</td>
                        <td>N@169634851</td>
                        <td>신선화</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>30</td>
                        <td>N@23341496</td>
                        <td>이경화</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>31</td>
                        <td>N@25248452</td>
                        <td>박경희</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>32</td>
                        <td>N@28846329</td>
                        <td>임동혁</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>33</td>
                        <td>N@51560831</td>
                        <td>장정민</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>34</td>
                        <td>N@61396416</td>
                        <td>이미정</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>35</td>
                        <td>N@86682404</td>
                        <td>김정미</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>36</td>
                        <td>sonhj1102</td>
                        <td>손희정</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>37</td>
                        <td>uuu1444</td>
                        <td>박유리</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>38</td>
                        <td>yuridakk</td>
                        <td>최유리</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>39</td>
                        <td>acasia2421</td>
                        <td>김하윤</td>
                        <td>4</td>
                    </tr>

                    <tr>
                        <td>40</td>
                        <td>dktlq12</td>
                        <td>김미서</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>41</td>
                        <td>govl7896</td>
                        <td>양예지</td>
                        <td>5</td>
                    </tr>

                    <tr>
                        <td>42</td>
                        <td>gpo02362</td>
                        <td>최예슬</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>43</td>
                        <td>hailor92kr</td>
                        <td>임원희</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>44</td>
                        <td>hsks1220</td>
                        <td>최희수</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>45</td>
                        <td>ikjin0406</td>
                        <td>이수정</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>46</td>
                        <td>jyj316</td>
                        <td>정윤정</td>
                        <td>7</td>
                    </tr>

                    <tr>
                        <td>47</td>
                        <td>N@19764993</td>
                        <td>최수정</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>48</td>
                        <td>N@24359617</td>
                        <td>김지윤</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>49</td>
                        <td>N@42202828</td>
                        <td>정혜수</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>50</td>
                        <td>yunhee970909</td>
                        <td>윤희</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>51</td>
                        <td>clickj0807</td>
                        <td>전지숙</td>
                        <td>7</td>
                    </tr>

                    <tr>
                        <td>52</td>
                        <td>genius1991</td>
                        <td>이종원</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>53</td>
                        <td>inae0916</td>
                        <td>박인애</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>54</td>
                        <td>jeyang725</td>
                        <td>양정은</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>55</td>
                        <td>K@1387174440</td>
                        <td>최승희</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>56</td>
                        <td>lovely100432</td>
                        <td>김선율</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>57</td>
                        <td>loverbeat5</td>
                        <td>이지연</td>
                        <td>7</td>
                    </tr>

                    <tr>
                        <td>58</td>
                        <td>N@28559150</td>
                        <td>나연희</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>59</td>
                        <td>N@38798294</td>
                        <td>한종우</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>60</td>
                        <td>N@60348352</td>
                        <td>정은주</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>61</td>
                        <td>N@71283755</td>
                        <td>이세은</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>62</td>
                        <td>qkdalgus</td>
                        <td>방미현</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>63</td>
                        <td>vmfhrm</td>
                        <td>김인희</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>64</td>
                        <td>gy6036</td>
                        <td>최가영</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>65</td>
                        <td>khjktw</td>
                        <td>김효진</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>66</td>
                        <td>kyeyj97</td>
                        <td>계윤지</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>67</td>
                        <td>leedah34</td>
                        <td>이다혜</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>68</td>
                        <td>N@110306342</td>
                        <td>이소영</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>69</td>
                        <td>N@112892725</td>
                        <td>오주석</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>70</td>
                        <td>N@130235137</td>
                        <td>강지원</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>71</td>
                        <td>N@22253949</td>
                        <td>김소윤</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>72</td>
                        <td>N@53762167</td>
                        <td>박소영</td>
                        <td>5</td>
                    </tr>

                    <tr>
                        <td>73</td>
                        <td>N@91485619</td>
                        <td>한희경</td>
                        <td>5</td>
                    </tr>

                    <tr>
                        <td>74</td>
                        <td>N@92353366</td>
                        <td>김명숙</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>75</td>
                        <td>N@9532332</td>
                        <td>심성호</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>76</td>
                        <td>niigaki23</td>
                        <td>하양현</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>77</td>
                        <td>setdkp2</td>
                        <td>안복남</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>78</td>
                        <td>smjtlove</td>
                        <td>김선미</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
            <!-- 모의고사 다운로드 카운트 E -->
        </form>
    </div>

    <!--viewBtns-->
    <div class="viewBtns"></div>
    <!--//viewBtns-->

    <!--viewPagenation-->
    <div class="viewPagenation">
        <ol>
            <li data-no="103498" class="data-list">
                <span>이전글</span>

                <a href="javascript:void(0);" class="act_view" onclick="javascript:fnViewArticle('103498','BBS_0018');">
                    2020년 6월 간호직 모의고사
                </a>
            </li>
            <li data-no="" class="data-list">
                <span>다음글</span>

                다음글이 없습니다.
            </li>
        </ol>
    </div>
    <!--//viewPagenation-->
    <!-- //viewType05 -->
</section>
@endif