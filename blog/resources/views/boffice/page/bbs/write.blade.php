@include('/boffice/inc/head')
@if(request()->segment(2) == 'lecture' && request()->segment(3) == 'video')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상강의 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMovingModify('new');">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMovingList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmForm" id="frmForm" method="post" class="articleWrite">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="0" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />

            <input type="hidden" name="mvIdx" id="mvIdx" value="" />
            <input type="hidden" name="mvDesc" />

            <fieldset>
                <p>기본 정보</p>
                <table class="rowTable">
                    <caption class="blind">
                        기본 정보
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">과목 카테고리</th>
                            <td colspan="3">
                                <select name="clCode" id="clCode" class="req" title="과목 카테고리를 선택하여 주세요" style="width: 250px; padding-left: 10px;">
                                    <option value="">선택</option>

                                    <option value="CL00001">RNBSN</option>

                                    <option value="CL00002">간호관리</option>

                                    <option value="CL00003">간호사</option>

                                    <option value="CL00004">감염의료관계법규</option>

                                    <option value="CL00005">공중보건</option>

                                    <option value="CL00006">국어</option>

                                    <option value="CL00007">보건의료관계법규</option>

                                    <option value="CL00008">보건학</option>

                                    <option value="CL00009">보건행정</option>

                                    <option value="CL00010">사회</option>

                                    <option value="CL00011">생물</option>

                                    <option value="CL00012">식품미생물</option>

                                    <option value="CL00013">식품위생</option>

                                    <option value="CL00014">식품화학개론 이론</option>

                                    <option value="CL00015">역학</option>

                                    <option value="CL00016">영양교사</option>

                                    <option value="CL00017">영양사</option>

                                    <option value="CL00018">영어</option>

                                    <option value="CL00019">위생관계법규</option>

                                    <option value="CL00020">위생사</option>

                                    <option value="CL00021">의료관계법규</option>

                                    <option value="CL00022">지역사회</option>

                                    <option value="CL00023">지역사회간호</option>

                                    <option value="CL00024">한국사</option>

                                    <option value="CL00025">해부생리학</option>

                                    <option value="CL00026">행정법</option>

                                    <option value="CL00027">화학</option>

                                    <option value="CL00028">환경공학</option>

                                    <option value="CL00029">환경보건</option>

                                    <option value="CL00030">환경화학</option>

                                    <option value="CL00031">전공보건</option>

                                    <option value="CL00032">식품화학개론 문제</option>

                                    <option value="CL00033">면접특강</option>

                                    <option value="CL00034">보건교사</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">강좌명</th>
                            <td colspan="3">
                                <input type="text" name="mvSubject" id="mvSubject" title="강좌명을 입력하여 주세요" value="" class="req" maxlength="100" style="width: 350px;" />
                                <p class="checkBox">
                                    <input type="checkbox" name="mvOp1" value="Y" id="mvOp1" />
                                    <label for="mvOp1"><span></span>종합반 강의로만 사용함</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">교수선택</th>
                            <td colspan="3">
                                <select name="mvProf" id="mvProf" title="교수선택을 하여 주세요" class="req" style="width: 250px; padding-left: 10px;">
                                    <option value="">선택</option>

                                    <option value="mercy3080">강두수(mercy3080)</option>

                                    <option value="khy8518">강하영(khy8518)</option>

                                    <option value="jajaa33">권경자(jajaa33)</option>

                                    <option value="823ksy">권숙영(823ksy)</option>

                                    <option value="ran204">김경란(ran204)</option>

                                    <option value="ilroc9653">김경미(ilroc9653)</option>

                                    <option value="yulim-test">김만수(yulim-test)</option>

                                    <option value="kssgom">김상수(kssgom)</option>

                                    <option value="indi1">김순복(indi1)</option>

                                    <option value="pixyk">김신희(pixyk)</option>

                                    <option value="gosicom">김용철(gosicom)</option>

                                    <option value="alcobook">김종찬(alcobook)</option>

                                    <option value="cell">김지연(cell)</option>

                                    <option value="edutop">김철민(edutop)</option>

                                    <option value="kcn63">김치년(kcn63)</option>

                                    <option value="ysioh">김현수(ysioh)</option>

                                    <option value="yan33">김희영(yan33)</option>

                                    <option value="ss4u4u">노성신(ss4u4u)</option>

                                    <option value="etwhat">박동현(etwhat)</option>

                                    <option value="sunghee73">박성희(sunghee73)</option>

                                    <option value="sj10089">백성종(sj10089)</option>

                                    <option value="83mkp">송선미(83mkp)</option>

                                    <option value="hyeonsong">송현(hyeonsong)</option>

                                    <option value="shj3015">신현준(shj3015)</option>

                                    <option value="jjanglish">오권영(jjanglish)</option>

                                    <option value="ohcatarsis">오정화(ohcatarsis)</option>

                                    <option value="in91">오현인(in91)</option>

                                    <option value="top-teacher">유길준(top-teacher)</option>

                                    <option value="brain6107">유재록(brain6107)</option>

                                    <option value="micro">이경연(micro)</option>

                                    <option value="leakihan">이기한(leakihan)</option>

                                    <option value="lee2000sb">이상복(lee2000sb)</option>

                                    <option value="mike69">이승훈(mike69)</option>

                                    <option value="saengmin">이종민(saengmin)</option>

                                    <option value="95prisca">이진아(95prisca)</option>

                                    <option value="china">이진아(china)</option>

                                    <option value="amcseoulkr">이혜진(amcseoulkr)</option>

                                    <option value="briansso">임장빈(briansso)</option>

                                    <option value="gongju616">장혜림(gongju616)</option>

                                    <option value="test11">전효성(test11)</option>

                                    <option value="philippo">제갈현근(philippo)</option>

                                    <option value="mushzo">조덕현(mushzo)</option>

                                    <option value="kbjoo54">주경복(kbjoo54)</option>

                                    <option value="test_1">주순재(test_1)</option>

                                    <option value="csh5">최선희(csh5)</option>

                                    <option value="sjj07711">최은미(sjj07711)</option>

                                    <option value="petal2002">최정환(petal2002)</option>

                                    <option value="hyerim0525">평혜림(hyerim0525)</option>

                                    <option value="gepo1">하영길(gepo1)</option>

                                    <option value="yulim_test">test(yulim_test)</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">등록옵션</th>
                            <td>
                                <p class="checkBox">
                                    <input type="checkbox" name="mvOp2" value="Y" id="mvOp2" checked="" />
                                    <label for="mvOp2"><span></span>인기</label>
                                    <input type="checkbox" name="mvOp3" value="Y" id="mvOp3" />
                                    <label for="mvOp3"><span></span>NEW</label>
                                </p>
                            </td>
                            <th scope="row">강의 노출 여부</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="mvSta" value="Y" id="mvSta1" checked="" />
                                    <label for="mvSta1"><span></span>보임</label>
                                </p>
                                <p class="radioStyle">
                                    <input type="radio" name="mvSta" value="N" id="mvSta2" />
                                    <label for="mvSta2"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">개강 여부</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="mvOpen" value="3" id="mvOpen3" checked="" />
                                    <label for="mvOpen3"><span></span>강의준비중</label>
                                    <input type="radio" name="mvOpen" value="2" id="mvOpen2" />
                                    <label for="mvOpen2"><span></span>업데이트중</label>
                                    <input type="radio" name="mvOpen" value="1" id="mvOpen1" />
                                    <label for="mvOpen1"><span></span>업데이트완료</label>
                                </p>
                            </td>
                            <th scope="row">학습기간</th>
                            <td><input type="text" name="mvPeriod" id="mvPeriod" value="" class="chknum req" title="학습기간을 입력하여주세요" maxlength="3" />일</td>
                        </tr>
                        <tr>
                            <th scope="row">학습질문 게시판 사용</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="mvQna" value="Y" id="mvQna1" checked="" />
                                    <label for="mvQna1"><span></span>예</label>
                                    <input type="radio" name="mvQna" value="N" id="mvQna2" />
                                    <label for="mvQna2"><span></span>아니오</label>
                                </p>
                            </td>
                            <th scope="row">학습게시판관리자</th>
                            <td>
                                <select name="mvMng" id="mvMng" title="학습게시판관리자를 선택하여 주세요" style="width: 250px; padding-left: 10px;">
                                    <option value="">선택</option>

                                    <option value="mercy3080">강두수(mercy3080)</option>

                                    <option value="khy8518">강하영(khy8518)</option>

                                    <option value="jajaa33">권경자(jajaa33)</option>

                                    <option value="823ksy">권숙영(823ksy)</option>

                                    <option value="ran204">김경란(ran204)</option>

                                    <option value="ilroc9653">김경미(ilroc9653)</option>

                                    <option value="yulim-test">김만수(yulim-test)</option>

                                    <option value="kssgom">김상수(kssgom)</option>

                                    <option value="indi1">김순복(indi1)</option>

                                    <option value="pixyk">김신희(pixyk)</option>

                                    <option value="gosicom">김용철(gosicom)</option>

                                    <option value="alcobook">김종찬(alcobook)</option>

                                    <option value="cell">김지연(cell)</option>

                                    <option value="edutop">김철민(edutop)</option>

                                    <option value="kcn63">김치년(kcn63)</option>

                                    <option value="ysioh">김현수(ysioh)</option>

                                    <option value="yan33">김희영(yan33)</option>

                                    <option value="ss4u4u">노성신(ss4u4u)</option>

                                    <option value="etwhat">박동현(etwhat)</option>

                                    <option value="sunghee73">박성희(sunghee73)</option>

                                    <option value="sj10089">백성종(sj10089)</option>

                                    <option value="83mkp">송선미(83mkp)</option>

                                    <option value="hyeonsong">송현(hyeonsong)</option>

                                    <option value="shj3015">신현준(shj3015)</option>

                                    <option value="jjanglish">오권영(jjanglish)</option>

                                    <option value="ohcatarsis">오정화(ohcatarsis)</option>

                                    <option value="in91">오현인(in91)</option>

                                    <option value="top-teacher">유길준(top-teacher)</option>

                                    <option value="brain6107">유재록(brain6107)</option>

                                    <option value="micro">이경연(micro)</option>

                                    <option value="leakihan">이기한(leakihan)</option>

                                    <option value="lee2000sb">이상복(lee2000sb)</option>

                                    <option value="mike69">이승훈(mike69)</option>

                                    <option value="saengmin">이종민(saengmin)</option>

                                    <option value="95prisca">이진아(95prisca)</option>

                                    <option value="china">이진아(china)</option>

                                    <option value="amcseoulkr">이혜진(amcseoulkr)</option>

                                    <option value="briansso">임장빈(briansso)</option>

                                    <option value="gongju616">장혜림(gongju616)</option>

                                    <option value="test11">전효성(test11)</option>

                                    <option value="philippo">제갈현근(philippo)</option>

                                    <option value="mushzo">조덕현(mushzo)</option>

                                    <option value="kbjoo54">주경복(kbjoo54)</option>

                                    <option value="test_1">주순재(test_1)</option>

                                    <option value="csh5">최선희(csh5)</option>

                                    <option value="sjj07711">최은미(sjj07711)</option>

                                    <option value="petal2002">최정환(petal2002)</option>

                                    <option value="hyerim0525">평혜림(hyerim0525)</option>

                                    <option value="gepo1">하영길(gepo1)</option>

                                    <option value="yulim_test">test(yulim_test)</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>단과반 수강료 설정</p>
                <table class="rowTable">
                    <caption class="blind">
                        단과반 수강료 설정
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">강의 노출</th>
                            <td colspan="5">
                                <p class="radioStyle">
                                    <input type="radio" name="mvPcmo" value="3" id="mvPcmo3" checked="" />
                                    <label for="mvPcmo3"><span></span>전체</label>
                                    <input type="radio" name="mvPcmo" value="1" id="mvPcmo1" />
                                    <label for="mvPcmo1"><span></span>PC</label>
                                    <input type="radio" name="mvPcmo" value="2" id="mvPcmo2" />
                                    <label for="mvPcmo2"><span></span>모바일</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">강의 종료</th>
                            <td colspan="5">
                                <p class="checkBox">
                                    <input type="checkbox" name="mvClose" value="Y" id="mvClose" />
                                    <label for="mvClose"><span></span>강의 종료</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">PC 가격(원)</th>
                            <td>
                                <input type="text" name="mvPrice1" class="chkmoney req" value="" title="PC가격을 입력하여주세요" maxlength="19" />
                            </td>
                            <th scope="row">모바일 가격(원)</th>
                            <td>
                                <input type="text" name="mvPrice2" class="chkmoney req" value="" title="모바일가격을 입력하여주세요" maxlength="19" />
                            </td>
                            <th scope="row">PC+모바일 가격(원)</th>
                            <td>
                                <input type="text" name="mvPrice3" class="chkmoney req" value="" title="PC+모바일가격을 입력하여주세요" maxlength="19" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                단과 강의<br />
                                수수료 제외(원)
                            </th>
                            <td colspan="5">
                                <input type="text" name="mvCharge" class="chkmoney" value="" maxlength="19" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>교재 등록</p>
                <table class="rowTable">
                    <caption class="blind">
                        교재 등록
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col width="*" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">교재 등록</th>
                            <td>
                                <button type="button" class="colorBtn rightbluebtn plusIcon act_ins act_book_add">검색</button>
                                <p class="checkBox">
                                    <input type="checkbox" name="mvBook" value="Y" id="mvBook" />
                                    <label for="mvBook"><span></span>교재 무료</label>
                                    <input type="checkbox" name="mvPrint" value="Y" id="mvPrint" />
                                    <label for="mvPrint"><span></span>프린트 출력</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="commonTable detailTable">
                    <caption>
                        교재등록 리스트 테이블
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 180px;" />
                        <col style="width: 130px;" />
                        <col style="width: 120px;" />
                        <col style="width: 120px;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>
                                <span class="checkBox">
                                    <input type="checkbox" class="check_all2" data-check="noBook" id="check_all2" name="check_all2" value="Y" />
                                    <label for="check_all2"><span></span>선택</label>
                                </span>
                                <button type="button" class="commonBtn" onclick="javascript:fnActBookALLDel();">삭제</button>
                            </th>
                            <th>교재명</th>
                            <th>출판사</th>
                            <th>가격(원)</th>
                            <th>등록일</th>
                            <th>삭제</th>
                        </tr>
                    </thead>
                    <tbody id="bookListTbody"></tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>강좌 설명</p>
                <table class="rowTable">
                    <caption class="blind">
                        강좌 설명
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">강좌 설명</th>
                            <td colspan="3">
                                <!--editor-->
                                <script type="text/javascript">
                                    DEXT5.config.Width = "100%";
                                    DEXT5.config.Height = "300px";
                                    var editor = new Dext5editor("mvDesc");
                                    function dext_editor_loaded_event(DEXT5Editor) {
                                        DEXT5.setBodyValue("", DEXT5Editor.ID);
                                    }
                                </script>
                                <div id="dext_frame_holdermvDesc" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                    <iframe
                                        frameborder="0"
                                        scrolling="no"
                                        id="dext_frame_mvDesc"
                                        title="에디터 전체영역"
                                        width="100%"
                                        height="100%"
                                        style="width: 100%; height: 100%;"
                                        src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                    ></iframe>
                                    <div id="dext_resizebar_mvDesc" class="DEXT_resizebar DEXT_resizebar_blue">
                                        <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_mvDesc">
                                            <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_mvDesc"></div>
                                            <button type="button" id="DEXT_resizebar_button_mvDesc" title="에디터 높이 조절"></button>
                                        </div>
                                    </div>
                                </div>
                                <!--//editor-->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>강좌 리스트에 사용할 Alert메세지</p>
                <table class="rowTable">
                    <caption class="blind">
                        강좌 리스트에 사용할 Alert메세지
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>
                                <p class="radioStyle">
                                    <input type="radio" name="mvMsgyn1" value="N" id="mvMsgyn1n" checked="" />
                                    <label for="mvMsgyn1n"><span></span>사용안함</label>
                                    <br />
                                    <input type="radio" name="mvMsgyn1" value="Y" id="mvMsgyn1y" />
                                    <label for="mvMsgyn1y"><span></span>사용함</label>
                                </p>
                            </th>
                            <td>
                                <textarea name="mvMsg1" style="height: 80px;"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>플레이어에 노출할 공지사항 메세지</p>
                <table class="rowTable">
                    <caption class="blind">
                        플레이어에 노출할 공지사항 메세지
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>
                                <p class="radioStyle">
                                    <input type="radio" name="mvMsgyn2" value="N" id="mvMsgyn2n" checked="" />
                                    <label for="mvMsgyn2n"><span></span>사용안함</label>
                                    <br />
                                    <input type="radio" name="mvMsgyn2" value="Y" id="mvMsgyn2y" />
                                    <label for="mvMsgyn2y"><span></span>사용함</label>
                                </p>
                            </th>
                            <td colspan="2">
                                <textarea name="mvMsg2" style="height: 80px;"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>관리 메모</p>
                <table class="rowTable">
                    <caption class="blind">
                        관리 메모
                    </caption>
                    <colgroup>
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <textarea name="mvEtc" style="height: 80px;"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <!-- //writeType03 -->
        </form>
    </div>
</section>
@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'video_detail')
<section class="rightCont">
    <div class="rightTitle">
        <h3>강의 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMovingList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="actMovingModifyForm" id="actMovingModifyForm" method="post" class="articleWrite">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="0" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />

            <input type="hidden" name="mvIdx" id="mvIdx" value="8074" />
        </form>

        <fieldset class="categoryInfo">
            <table class="rowTable">
                <caption class="blind">
                    강좌 정보
                </caption>
                <colgroup>
                    <col width="130px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">강좌명</th>
                        <td>
                            2021 영양교사 실전모의고사 (김)
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <fieldset>
            <p style="margin: 10px 0 10px 0;">샘플 강의</p>

            <form name="frmSmp0" id="frmSmp0" method="post">
                <input type="hidden" name="cpIdx" value="157960" />
                <table class="rowTable">
                    <caption>
                        강의 등록 테이블
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col />
                        <col width="130px" />
                        <col />
                        <col width="200px" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">순서</th>
                            <td class="al">
                                <input type="text" class="chknum req" name="cpSeq" value="1" title="순서 번호를 입력해주세요." maxlength="3" style="width: 50px; color: red; font-weight: bolder;" />
                                <p class="radioStyle">
                                    <input type="radio" name="cpSmp" value="T" id="cpSmp10" checked="" />
                                    <label for="cpSmp10"><span></span>OT</label>
                                    <input type="radio" name="cpSmp" value="F" id="cpSmp20" />
                                    <label for="cpSmp20"><span></span>1강</label>
                                </p>
                            </td>
                            <th scope="col">시간</th>
                            <td class="al"><input type="text" class="chknum" name="cpTime" value="0" title="시간을 입력해주세요." maxlength="3" style="width: 50px;" /> 분</td>
                            <th rowspan="4">
                                <div class="btnsWrap" style="margin-top: 0;">
                                    <button type="button" onclick="javascript:fnActMovingModify('frmSmp0');">수정</button>
                                    <button type="button" class="cancle" style="margin: 5px 0 0 0;" onclick="javascript:fnActMovingDel('frmSmp0');">삭제</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">제목</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpTitle" value="샘플강의" title="제목을 입력해주세요." maxlength="100" style="width: 75%;" /></td>
                        </tr>
                        <tr>
                            <th scope="col">동영상</th>
                            <td colspan="3" class="al">
                                <input type="text" class="req" name="cpUrl" value="yulimgosizonep.xcache.kinxcdn.com/daebang/2021_yedu/kjys/kjysam_201016_1.mp4" title="동영상 경로를 입력해주세요." maxlength="200" style="width: 75%;" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">youtube</th>
                            <td colspan="3" class="al"><input type="text" class="" name="cpUtb" value="https://www.youtube.com/embed/N7ts5M-i-Qk" title="youtube 경로를 입력해주세요." maxlength="200" style="width: 75%;" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <form name="frmSmp" id="frmSmp" method="post">
                <table class="rowTable">
                    <caption>
                        강의 등록 테이블
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col />
                        <col width="130px" />
                        <col />
                        <col width="200px" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">순서</th>
                            <td class="al">
                                <input type="text" class="chknum req" name="cpSeq" value="2" title="순서 번호를 입력해주세요." maxlength="3" style="width: 50px; color: red; font-weight: bolder;" />
                                <p class="radioStyle">
                                    <input type="radio" name="cpSmp" value="T" id="cpSmp3" />
                                    <label for="cpSmp3"><span></span>OT</label>
                                    <input type="radio" name="cpSmp" value="F" id="cpSmp4" />
                                    <label for="cpSmp4"><span></span>1강</label>
                                </p>
                            </td>
                            <th scope="col">시간</th>
                            <td class="al"><input type="text" class="chknum" name="cpTime" value="" title="시간을 입력해주세요." maxlength="3" style="width: 50px;" /> 분</td>
                            <th rowspan="4">
                                <div class="btnsWrap" style="margin-top: 0;">
                                    <button type="button" onclick="javascript:fnActMovingModify('frmSmp');">등록</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">제목</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpTitle" value="" title="제목을 입력해주세요." maxlength="100" style="width: 75%;" /></td>
                        </tr>
                        <tr>
                            <th scope="col">동영상</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpUrl" value="" title="동영상 경로를 입력해주세요." maxlength="200" style="width: 75%;" /></td>
                        </tr>
                        <tr>
                            <th scope="col">youtube</th>
                            <td colspan="3" class="al"><input type="text" class="" name="cpUtb" value="" title="youtube 경로를 입력해주세요." maxlength="200" style="width: 75%;" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </fieldset>

        <fieldset>
            <p style="margin: 10px 0 10px 0;">본 강의</p>

            <form name="frmClip0" id="frmClip0" method="post">
                <input type="hidden" name="cpIdx" value="157966" />
                <table class="rowTable">
                    <caption>
                        강의 등록 테이블
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col />
                        <col width="130px" />
                        <col />
                        <col width="200px" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">순서</th>
                            <td class="al"><input type="text" class="chknum req" name="cpSeq" value="1" title="순서 번호를 입력해주세요." maxlength="3" style="width: 50px; color: red; font-weight: bolder;" /></td>
                            <th scope="col">시간</th>
                            <td class="al"><input type="text" class="chknum" name="cpTime" value="52" title="시간을 입력해주세요." maxlength="3" style="width: 50px;" /> 분</td>
                            <th rowspan="4">
                                <div class="btnsWrap" style="margin-top: 0;">
                                    <button type="button" onclick="javascript:fnActMovingModify('frmClip0');">수정</button>
                                    <button type="button" class="cancle" style="margin: 5px 0 0 0;" onclick="javascript:fnActMovingDel('frmClip0');">삭제</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">제목</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpTitle" value="제1회 2교시 4, 8번 / 3교시 2, 6, 9번" title="제목을 입력해주세요." maxlength="100" style="width: 75%;" /></td>
                        </tr>
                        <tr>
                            <th scope="col">동영상</th>
                            <td colspan="3" class="al">
                                <input type="text" class="req" name="cpUrl" value="yulimgosizonep.xcache.kinxcdn.com/daebang/2021_yedu/kjys/kjy_201016_1.mp4" title="동영상 경로를 입력해주세요." maxlength="200" style="width: 75%;" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <form name="frmClip1" id="frmClip1" method="post">
                <input type="hidden" name="cpIdx" value="158025" />
                <table class="rowTable">
                    <caption>
                        강의 등록 테이블
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col />
                        <col width="130px" />
                        <col />
                        <col width="200px" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">순서</th>
                            <td class="al"><input type="text" class="chknum req" name="cpSeq" value="2" title="순서 번호를 입력해주세요." maxlength="3" style="width: 50px; color: red; font-weight: bolder;" /></td>
                            <th scope="col">시간</th>
                            <td class="al"><input type="text" class="chknum" name="cpTime" value="47" title="시간을 입력해주세요." maxlength="3" style="width: 50px;" /> 분</td>
                            <th rowspan="4">
                                <div class="btnsWrap" style="margin-top: 0;">
                                    <button type="button" onclick="javascript:fnActMovingModify('frmClip1');">수정</button>
                                    <button type="button" class="cancle" style="margin: 5px 0 0 0;" onclick="javascript:fnActMovingDel('frmClip1');">삭제</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">제목</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpTitle" value="제2회 2교시 3, 8, 11번 / 3교시 2, 10번" title="제목을 입력해주세요." maxlength="100" style="width: 75%;" /></td>
                        </tr>
                        <tr>
                            <th scope="col">동영상</th>
                            <td colspan="3" class="al">
                                <input type="text" class="req" name="cpUrl" value="yulimgosizonep.xcache.kinxcdn.com/daebang/2021_yedu/kjys/kjy_201023_1.mp4" title="동영상 경로를 입력해주세요." maxlength="200" style="width: 75%;" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <form name="frmClip2" id="frmClip2" method="post">
                <input type="hidden" name="cpIdx" value="158026" />
                <table class="rowTable">
                    <caption>
                        강의 등록 테이블
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col />
                        <col width="130px" />
                        <col />
                        <col width="200px" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">순서</th>
                            <td class="al"><input type="text" class="chknum req" name="cpSeq" value="3" title="순서 번호를 입력해주세요." maxlength="3" style="width: 50px; color: red; font-weight: bolder;" /></td>
                            <th scope="col">시간</th>
                            <td class="al"><input type="text" class="chknum" name="cpTime" value="0" title="시간을 입력해주세요." maxlength="3" style="width: 50px;" /> 분</td>
                            <th rowspan="4">
                                <div class="btnsWrap" style="margin-top: 0;">
                                    <button type="button" onclick="javascript:fnActMovingModify('frmClip2');">수정</button>
                                    <button type="button" class="cancle" style="margin: 5px 0 0 0;" onclick="javascript:fnActMovingDel('frmClip2');">삭제</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">제목</th>
                            <td colspan="3" class="al">
                                <input
                                    type="text"
                                    class="req"
                                    name="cpTitle"
                                    value="다음 업데이트는 10. 31입니다. (강의는 수업이 있는 다음날 오전 11시~11시반사이에 업데이트 됩니다.^^)"
                                    title="제목을 입력해주세요."
                                    maxlength="100"
                                    style="width: 75%;"
                                />
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">동영상</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpUrl" value="" title="동영상 경로를 입력해주세요." maxlength="200" style="width: 75%;" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <form name="frmClip" id="frmClip" method="post">
                <table class="rowTable">
                    <caption>
                        강의 등록 테이블
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col />
                        <col width="130px" />
                        <col />
                        <col width="200px" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">순서</th>
                            <td class="al"><input type="text" class="chknum req" name="cpSeq" value="4" title="순서 번호를 입력해주세요." maxlength="3" style="width: 50px; color: red; font-weight: bolder;" /></td>
                            <th scope="col">시간</th>
                            <td class="al"><input type="text" class="chknum" name="cpTime" value="" title="시간을 입력해주세요." maxlength="3" style="width: 50px;" /> 분</td>
                            <th rowspan="4">
                                <div class="btnsWrap" style="margin-top: 0;">
                                    <button type="button" onclick="javascript:fnActMovingModify('frmClip');">등록</button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">제목</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpTitle" value="" title="제목을 입력해주세요." maxlength="100" style="width: 75%;" /></td>
                        </tr>
                        <tr>
                            <th scope="col">동영상</th>
                            <td colspan="3" class="al"><input type="text" class="req" name="cpUrl" value="" title="동영상 경로를 입력해주세요." maxlength="200" style="width: 75%;" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </fieldset>
        <!-- //writeType03 -->
    </div>
</section>

@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'class')
<section class="rightCont">
    <div class="rightTitle">
        <h3>클래스강의 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActCollegeModify('new');">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActCollegeList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmForm" id="frmForm" method="post" class="articleWrite">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="pageUnit" value="30" />
            <input type="hidden" name="searchCnd" value="0" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />
            <input type="hidden" name="searchOp1" value="" />
            <input type="hidden" name="searchOp2" value="" />
            <input type="hidden" name="searchOp3" value="" />
            <input type="hidden" name="searchOp4" value="" />
            <input type="hidden" name="searchSdt" value="" />
            <input type="hidden" name="searchEdt" value="" />

            <input type="hidden" name="coIdx" id="coIdx" value="" />
            <input type="hidden" name="coDesc" />
            <input type="hidden" name="coDecm" />

            <fieldset>
                <p>기본 정보</p>
                <table class="rowTable">
                    <caption class="blind">
                        기본 정보
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">직렬</th>
                            <td colspan="3">
                                <select name="leCode" id="leCode" class="req" title="직렬을 선택하여 주세요" style="width: 250px; padding-left: 10px;">
                                    <option value="">선택</option>

                                    <option value="LE00001">간호직 공무원</option>

                                    <option value="LE00002">보건직 공무원</option>

                                    <option value="LE00004">보건연구사</option>

                                    <option value="LE00005">보건복지부 공무원</option>

                                    <option value="LE00003">보건진료직 공무원</option>

                                    <option value="LE00006">의료기술직 공무원</option>

                                    <option value="LE00007">방역직 공무원</option>

                                    <option value="LE00010">식품위생직 공무원</option>

                                    <option value="LE00008">환경직 공무원</option>

                                    <option value="LE00009">환경연구사</option>

                                    <option value="LE00011">조리직 공무원</option>

                                    <option value="LE00012">영양교사</option>

                                    <option value="LE00013">보건교사</option>

                                    <option value="LE00016">영양사</option>

                                    <option value="LE00017">위생사</option>

                                    <option value="LE00015">간호사</option>

                                    <option value="LE00019">식품(산업)기사</option>

                                    <option value="LE00014">교육학</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">클래스 명</th>
                            <td colspan="3">
                                <input type="text" name="coSubject" id="coSubject" title="클래스명을 입력하여 주세요" value="" class="req" maxlength="100" style="width: 350px;" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">구분</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="coSec" value="12" id="coSec1" checked="" />
                                    <label for="coSec1"><span></span>종합</label>
                                </p>
                                <p class="radioStyle">
                                    <input type="radio" name="coSec" value="11" id="coSec2" />
                                    <label for="coSec2"><span></span>단과</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>강의 추가</p>
                <table class="rowTable">
                    <caption class="blind">
                        강의 추가
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col width="*" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">강의 검색</th>
                            <td>
                                <button type="button" class="colorBtn rightbluebtn plusIcon act_ins act_lect_add">검색</button>
                            </td>
                        </tr>
                        <tr id="optListHead" class="jognhabBan" style="display: none;">
                            <th scope="row">과목</th>
                            <th>
                                택일 강의 설정 여부
                            </th>
                        </tr>
                    </tbody>
                    <tbody id="optListTbody"></tbody>
                </table>
                <table class="commonTable detailTable">
                    <caption>
                        강의등록 리스트 테이블
                    </caption>
                    <thead>
                        <tr>
                            <th width="104px">
                                <span class="checkBox">
                                    <input type="checkbox" class="check_all2" data-check="noLect" id="check_all2" name="check_all2" value="Y" />
                                    <label for="check_all2"><span></span>선택</label>
                                </span>
                                <button type="button" class="commonBtn" onclick="javascript:fnActLectALLDel();">삭제</button>
                            </th>
                            <th width="120px"><button type="button" class="commonBtn" onclick="javascript:fnTranSeqAuto();">순서입력</button></th>
                            <th width="*">강의명</th>
                            <th width="120px">과목</th>
                            <th width="120px">삭제</th>
                        </tr>
                    </thead>
                    <tbody id="lectListTbody"></tbody>
                </table>
                <div id="sortWrap" class="ui-sortable"></div>
            </fieldset>

            <fieldset>
                <p>노출 여부<span class="jonghabBan"> / 수수료 제외 금액</span></p>
                <table class="rowTable">
                    <caption class="blind">
                        노출 여부
                        <span class="jonghabBan"> / 수수료 제외 금액</span>
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">노출 여부</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="coSta" value="Y" id="coSta1" checked="" />
                                    <label for="coSta1"><span></span>보임</label>
                                    <input type="radio" name="coSta" value="N" id="coSta2" />
                                    <label for="coSta2"><span></span>숨김</label>
                                </p>
                            </td>
                            <th scope="row">모바일 노출 여부</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="coMobile" value="Y" id="coMobile1" checked="" />
                                    <label for="coMobile1"><span></span>보임</label>
                                    <input type="radio" name="coMobile" value="N" id="coMobile2" />
                                    <label for="coMobile2"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>
                        <tr class="jonghabBan">
                            <th scope="row">수수료 제외 금액</th>
                            <td colspan="3"><input type="text" name="coCharge" class="chkmoney" value="" maxlength="19" />원</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset class="jonghabBan">
                <p>수강료 설정</p>
                <table class="rowTable">
                    <caption class="blind">
                        수강료 설정
                    </caption>
                    <colgroup>
                        <col width="130px" />
                        <col width="*" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">수강기간 추가</th>
                            <td>
                                <input type="text" name="cpDayInput" class="chknum" />
                                <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActAddPrice();">추가</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="rowTable">
                    <caption>
                        수강료 설정 테이블
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 20%;" />
                        <col style="width: 20%;" />
                        <col style="width: 20%;" />
                        <col style="width: 60px;" />
                    </colgroup>
                    <tbody id="priceListTbody">
                        <tr>
                            <th>
                                <span class="checkBox">
                                    <input type="checkbox" class="check_all" data-check="noPrice" id="check_all" name="check_all" value="Y" />
                                    <label for="check_all"><span></span>선택</label>
                                </span>
                                <button type="button" class="commonBtn" onclick="javascript:fnActPriceALLDel();">삭제</button>
                            </th>
                            <th>기간</th>
                            <th>PC수강료</th>
                            <th>모바일 수강료</th>
                            <th>PC+모바일 수강료</th>
                            <th>삭제</th>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset class="jonghabBan">
                <p>연장설정</p>
                <table class="rowTable">
                    <caption class="blind">
                        연장설정
                    </caption>
                    <colgroup>
                        <col style="width: *;" />
                        <col style="width: 27%;" />
                        <col style="width: 27%;" />
                        <col style="width: 27%;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>구분(수강종료일 + x일)</th>
                            <th>7일 추가 금액</th>
                            <th>15일 추가 금액</th>
                            <th>30일 추가 금액</th>
                        </tr>
                        <tr>
                            <th>
                                <p class="radioStyle">
                                    <input type="radio" name="coExtyn" value="Y" id="coExtyn1" />
                                    <label for="coExtyn1"><span></span>사용</label>
                                    <input type="radio" name="coExtyn" value="N" id="coExtyn2" checked="" />
                                    <label for="coExtyn2"><span></span>미사용</label>
                                </p>
                            </th>
                            <td align="center"><input type="text" name="coExten1" value="" class="chkmoney" maxlength="19" />원</td>
                            <td align="center"><input type="text" name="coExten2" value="" class="chkmoney" maxlength="19" />원</td>
                            <td align="center"><input type="text" name="coExten3" value="" class="chkmoney" maxlength="19" />원</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>강좌 설명(PC)</p>
                <table class="rowTable">
                    <caption class="blind">
                        강좌 설명(PC)
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">강좌 설명(PC)</th>
                            <td colspan="3">
                                <!--editor-->
                                <script type="text/javascript">
                                    DEXT5.config.Width = "100%";
                                    DEXT5.config.Height = "300px";
                                    var editor = new Dext5editor("coDesc");
                                </script>
                                <div id="dext_frame_holdercoDesc" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                    <iframe
                                        frameborder="0"
                                        scrolling="no"
                                        id="dext_frame_coDesc"
                                        title="에디터 전체영역"
                                        width="100%"
                                        height="100%"
                                        style="width: 100%; height: 100%;"
                                        src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                    ></iframe>
                                    <div id="dext_resizebar_coDesc" class="DEXT_resizebar DEXT_resizebar_blue">
                                        <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_coDesc">
                                            <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_coDesc"></div>
                                            <button type="button" id="DEXT_resizebar_button_coDesc" title="에디터 높이 조절"></button>
                                        </div>
                                    </div>
                                </div>
                                <!--//editor-->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p>강좌 설명(모바일)</p>
                <table class="rowTable">
                    <caption class="blind">
                        강좌 설명(모바일)
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">강좌 설명(모바일)</th>
                            <td colspan="3">
                                <!--editor-->
                                <script type="text/javascript">
                                    DEXT5.config.Width = "100%";
                                    DEXT5.config.Height = "300px";
                                    var editor = new Dext5editor("coDecm");
                                    function dext_editor_loaded_event(DEXT5Editor) {
                                        DEXT5.setBodyValue("", "coDesc");
                                        DEXT5.setBodyValue("", "coDecm");
                                    }
                                </script>
                                <div id="dext_frame_holdercoDecm" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                    <iframe
                                        frameborder="0"
                                        scrolling="no"
                                        id="dext_frame_coDecm"
                                        title="에디터 전체영역"
                                        width="100%"
                                        height="100%"
                                        style="width: 100%; height: 100%;"
                                        src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                    ></iframe>
                                    <div id="dext_resizebar_coDecm" class="DEXT_resizebar DEXT_resizebar_blue">
                                        <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_coDecm">
                                            <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_coDecm"></div>
                                            <button type="button" id="DEXT_resizebar_button_coDecm" title="에디터 높이 조절"></button>
                                        </div>
                                    </div>
                                </div>
                                <!--//editor-->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <!-- //writeType03 -->
        </form>
    </div>
</section>

@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서적 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActBookModify('new');">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActBookList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="actBookModifyForm" id="actBookModifyForm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="0" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />

            <input type="hidden" name="bmIdx" id="bmIdx" value="" />
            <input type="hidden" name="bmContent" />

            <table class="rowTable">
                <caption class="blind">
                    카테고리 정보
                </caption>
                <colgroup>
                    <col width="130px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">카테고리</th>
                        <td>
                            <select name="leCodeSel" id="leCodeSel" style="width: 250px; padding-left: 10px;">
                                <option value="">직렬선택</option>

                                <option value="LE00001">간호직 공무원</option>

                                <option value="LE00002">보건직 공무원</option>

                                <option value="LE00004">보건연구사</option>

                                <option value="LE00005">보건복지부 공무원</option>

                                <option value="LE00003">보건진료직 공무원</option>

                                <option value="LE00006">의료기술직 공무원</option>

                                <option value="LE00007">방역직 공무원</option>

                                <option value="LE00010">식품위생직 공무원</option>

                                <option value="LE00008">환경직 공무원</option>

                                <option value="LE00009">환경연구사</option>

                                <option value="LE00011">조리직 공무원</option>

                                <option value="LE00012">영양교사</option>

                                <option value="LE00013">보건교사</option>

                                <option value="LE00016">영양사</option>

                                <option value="LE00017">위생사</option>

                                <option value="LE00015">간호사</option>

                                <option value="LE00019">식품(산업)기사</option>

                                <option value="LE00014">교육학</option>
                            </select>
                            <select name="clCodeSel" id="clCodeSel" style="width: 180px; padding-left: 10px;">
                                <option value="">과목선택(전체)</option>

                                <option value="CL00001">RNBSN</option>

                                <option value="CL00002">간호관리</option>

                                <option value="CL00003">간호사</option>

                                <option value="CL00004">감염의료관계법규</option>

                                <option value="CL00005">공중보건</option>

                                <option value="CL00006">국어</option>

                                <option value="CL00007">보건의료관계법규</option>

                                <option value="CL00008">보건학</option>

                                <option value="CL00009">보건행정</option>

                                <option value="CL00010">사회</option>

                                <option value="CL00011">생물</option>

                                <option value="CL00012">식품미생물</option>

                                <option value="CL00013">식품위생</option>

                                <option value="CL00014">식품화학개론 이론</option>

                                <option value="CL00015">역학</option>

                                <option value="CL00016">영양교사</option>

                                <option value="CL00017">영양사</option>

                                <option value="CL00018">영어</option>

                                <option value="CL00019">위생관계법규</option>

                                <option value="CL00020">위생사</option>

                                <option value="CL00021">의료관계법규</option>

                                <option value="CL00022">지역사회</option>

                                <option value="CL00023">지역사회간호</option>

                                <option value="CL00024">한국사</option>

                                <option value="CL00025">해부생리학</option>

                                <option value="CL00026">행정법</option>

                                <option value="CL00027">화학</option>

                                <option value="CL00028">환경공학</option>

                                <option value="CL00029">환경보건</option>

                                <option value="CL00030">환경화학</option>

                                <option value="CL00031">전공보건</option>

                                <option value="CL00032">식품화학개론 문제</option>

                                <option value="CL00033">면접특강</option>

                                <option value="CL00034">보건교사</option>
                            </select>
                            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActAddCate();">추가</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="commonTable detailTable">
                <caption>
                    카테고리 리스트 테이블
                </caption>
                <colgroup>
                    <col style="width: 130px;" />
                    <col style="width: *;" />
                    <col style="width: 200px;" />
                    <col style="width: 130px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                            <button type="button" class="commonBtn" onclick="javascript:fnActCateALLDel();">삭제</button>
                        </th>
                        <th>카테고리</th>
                        <th>과목</th>
                        <th>삭제</th>
                    </tr>
                </thead>
                <tbody id="cateListTbody"></tbody>
            </table>
            <table class="rowTable">
                <caption class="blind">
                    기본 정보
                </caption>
                <colgroup>
                    <col style="width: 130px;" />
                    <col style="width: *;" />
                    <col style="width: 130px;" />
                    <col style="width: *;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">상품명</th>
                        <td colspan="3" id="bmIdxTd">
                            <input type="text" name="bmSubject" id="bmSubject" value="" title="상품명을 입력하여 주세요" class="req" maxlength="100" style="width: 350px;" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">상품이미지</th>
                        <td colspan="3">
                            <input type="hidden" name="fileDel1" />
                            <input type="hidden" name="bmPic" value="" />
                            <input type="file" name="file_1" id="egovComFileUploader" /><span class="f_color3 ml_20" id="sizeTxt1"></span>

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
                        <th scope="row">저자</th>
                        <td colspan="3">
                            <input type="text" name="bmAuthor" value="" class="" title="저자명을 입력해주세요." maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">출판사</th>
                        <td>
                            <input type="text" name="bmPress" value="" class="" title="출판사를 입력해주세요." maxlength="50" />
                        </td>
                        <th scope="row">노출여부</th>
                        <td>
                            <p class="radioStyle">
                                <input type="radio" name="bmShow" value="Y" id="ck_view_y" />
                                <label for="ck_view_y"><span></span>보임</label>
                            </p>
                            <p class="radioStyle">
                                <input type="radio" name="bmShow" value="N" id="ck_view_n" />
                                <label for="ck_view_n"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">정가(원)</th>
                        <td>
                            <input type="text" name="bmPrice1" class="chkmoney" value="" maxlength="19" /> 원
                            <p class="checkBox">
                                <input type="checkbox" name="bmSold" value="Y" id="bmSold" />
                                <label for="bmSold"><span></span>품절</label>
                            </p>
                        </td>
                        <th scope="row">판매가(원)</th>
                        <td><input type="text" name="bmPrice2" class="chkmoney" value="" maxlength="19" /> 원</td>
                    </tr>
                    <tr>
                        <th scope="row">등록옵션</th>
                        <td>
                            <p class="checkBox">
                                <input type="checkbox" name="bmOp1" value="Y" id="bmOp1" />
                                <label for="bmOp1"><span></span><i class="tableIcon popular">인기</i></label>
                            </p>
                            <p class="checkBox">
                                <input type="checkbox" name="bmOp2" value="Y" id="bmOp2" />
                                <label for="bmOp2"><span></span><i class="tableIcon new">NEW</i></label>
                            </p>
                            <p class="checkBox">
                                <input type="checkbox" name="bmOp3" value="Y" id="bmOp3" />
                                <label for="bmOp3"><span></span><i class="tableIcon best">베스트</i></label>
                            </p>
                            <p class="checkBox">
                                <input type="checkbox" name="bmOp4" value="Y" id="bmOp4" />
                                <label for="bmOp4"><span></span><i class="tableIcon info">강좌설명</i></label>
                            </p>
                            <p class="checkBox">
                                <input type="checkbox" name="bmOp5" value="Y" id="bmOp5" />
                                <label for="bmOp5"><span></span><i class="tableIcon recommend">추천</i></label>
                            </p>
                            <p class="checkBox">
                                <input type="checkbox" name="bmOp6" value="Y" id="bmOp6" />
                                <label for="bmOp6"><span></span><i class="tableIcon event">이벤트</i></label>
                            </p>
                        </td>
                        <th scope="row">노출위치</th>
                        <td>
                            <p class="checkBox">
                                <input type="checkbox" name="bmSite1" value="Y" id="ck_school" />
                                <label for="ck_school"><span></span>학원강의</label>
                            </p>
                            <p class="checkBox">
                                <input type="checkbox" name="bmSite2" value="Y" id="ck_movie" />
                                <label for="ck_movie"><span></span>동영상강의</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">상품설명</th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("bmContent");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holderbmContent" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_bmContent"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_bmContent" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_bmContent">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_bmContent"></div>
                                        <button type="button" id="DEXT_resizebar_button_bmContent" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- //writeType03 -->
        </form>
    </div>
</section>

@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'academy')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학원강의</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0003" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="" />
            <input type="hidden" name="fileCnt" value="0" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    학원강의 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 300px;" maxlength="500" />

                            <select name="nttSjLecCd" id="nttSjLecCd" style="width: 180px;">
                                <option value="">선택</option>

                                <option value="LE00001">간호직 공무원</option>

                                <option value="LE00002">보건직 공무원</option>

                                <option value="LE00004">보건연구사</option>

                                <option value="LE00005">보건복지부 공무원</option>

                                <option value="LE00003">보건진료직 공무원</option>

                                <option value="LE00006">의료기술직 공무원</option>

                                <option value="LE00007">방역직 공무원</option>

                                <option value="LE00010">식품위생직 공무원</option>

                                <option value="LE00008">환경직 공무원</option>

                                <option value="LE00009">환경연구사</option>

                                <option value="LE00011">조리직 공무원</option>

                                <option value="LE00012">영양교사</option>

                                <option value="LE00013">보건교사</option>

                                <option value="LE00016">영양사</option>

                                <option value="LE00017">위생사</option>

                                <option value="LE00015">간호사</option>

                                <option value="LE00019">식품(산업)기사</option>

                                <option value="LE00014">교육학</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>순서</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSeq" id="nttSeq" value="" class="chknum" maxlength="5" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'video')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상강의 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_mod">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_del" onclick="javascript:fnActOrderDel('271859');">삭제</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_list" onclick="javascript:fnActOrderList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmForm" id="frmForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchOp1" type="hidden" value="동영상" />
            <input name="searchOp2" type="hidden" value="" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt" value="2020-09-02" />
            <input type="hidden" name="searchEdt" value="2020-11-03" />

            <input type="hidden" name="psno" id="psno" value="271859" />
        </form>

        <fieldset>
            <div class="info-msg" style="float: right; margin: 0 4px 4px 0;">L20201029104110poilks1 <button class="commonBtn act_print">프린트</button></div>
            <p style="font-size: 16px; padding-bottom: 7px;">주문 상품</p>
            <table class="commonTable detailTable">
                <caption>
                    주문 내역 테이블
                </caption>
                <colgroup>
                    <col width="40" />
                    <col width="100" />
                    <col />
                    <col width="210" />
                    <col width="60" />
                    <col width="110" />
                    <col width="110" />
                    <col width="100" />
                    <col width="60" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">구분</th>
                        <th scope="col">상품명</th>
                        <th scope="col">기간</th>
                        <th scope="col">일</th>
                        <th scope="col">상품금액</th>
                        <th scope="col">결제금액</th>
                        <th scope="col">상태</th>
                        <th scope="col">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="313255">
                        <td>1</td>
                        <td>
                            <select name="mobileYn">
                                <option value="N" selected="">PC</option>
                                <option value="Y">mobile</option>
                            </select>
                        </td>
                        <td>2021 지역사회간호 (정규이론반)</td>
                        <td><input type="text" name="sinDate" value="2020-10-29" class="calendar req hasDatepicker" title="시작일을 입력해주세요." readonly="" id="dp1604365684153" /> ~ 2021-01-06</td>
                        <td><input type="text" name="giganDay" value="70" class="chknum req" title="일 수를 입력해주세요." style="width: 30px;" /></td>
                        <td class="chkmoney ar">150,000</td>
                        <td><input type="text" name="price2" value="150000" class="chkmoney" title="결제금액을 입력해주세요." style="width: 80px;" maxlength="19" /></td>
                        <td>
                            <p>
                                <select name="status2">
                                    <option value="입금요">입금요</option>
                                    <option value="수강중" selected="">수강중</option>
                                    <option value="수강종료">수강종료</option>
                                    <option value="취소">취소</option>
                                    <option value="일시정지">일시정지</option>
                                    <option value="취소고민">취소고민</option>
                                </select>
                            </p>
                        </td>
                        <td><button type="button" class="commonBtn act_goods_modi">수정</button></td>
                    </tr>

                    <tr>
                        <th colspan="5">합계</th>
                        <th class="chkmoney ar">150,000</th>
                        <th class="chkmoney ar">150,000</th>
                        <th colspan="2"><button class="colorBtn grybtn act_cancel" style="width: 120px;">주문취소정보</button></th>
                    </tr>

                    <tr>
                        <th colspan="2">종합반 상세</th>
                        <th>2021 지역사회간호 (정규이론반)</th>
                        <td colspan="6" class="al">
                            <div>2021 지역사회간호 (정규이론반)</div>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="2">
                            상품명 상세<br />
                            (교재포함)
                        </th>
                        <td colspan="7" class="al"><div></div></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <fieldset style="display: none; padding-top: 20px;" id="cont-cancel">
            <p style="font-size: 16px; padding-bottom: 7px;">주문 취소 정보</p>
            <form id="frmOrderCnc" name="frmOrderCnc">
                <input type="hidden" name="psno" value="271859" />
                <input type="hidden" name="sno" value="" />
                <table class="commonTable detailTable">
                    <caption>
                        주문 내역 테이블
                    </caption>
                    <colgroup>
                        <col width="12%" />
                        <col />
                        <col width="8%" />
                        <col width="20%" />
                        <col width="10%" />
                        <col width="22%" />
                        <col />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">처리담당자</th>
                            <td class="al"><input type="text" name="dName" id="dName" value="" maxlength="25" class="req" title="처리담당자명을 입력해주세요." /></td>
                            <th scope="col">사유</th>
                            <td class="al">
                                <select name="dReason" id="dReason" style="width: 100px;" class="req" title="사유를 선택해주세요.">
                                    <option value="단순변심">단순변심</option>
                                    <option value="상품불량">상품불량</option>
                                    <option value="품절취소">품절취소</option>
                                    <option value="기타">기타</option>
                                </select>
                            </td>
                            <th scope="col">취소일</th>
                            <td class="al"><input type="text" name="dDate" id="dDate" value="" class="calendar req hasDatepicker" title="취소일을 입력해주세요." readonly="" /></td>
                        </tr>
                        <tr>
                            <th scope="col">상세사유</th>
                            <td class="al" colspan="5"><textarea name="dMemo" id="dMemo" style="width: 96%; height: 50px;" class="req" title="상세사유를 입력해주세요."></textarea></td>
                        </tr>
                        <tr>
                            <th scope="col">환불계좌정보</th>
                            <td class="al" colspan="5"><input type="text" name="dBank" id="dBank" value="" maxlength="25" style="width: 98%;" title="환불계좌정보를 입력해주세요." /></td>
                        </tr>
                    </tbody>
                </table>
                <!--btnsWrap-->
                <div class="btnsWrap">
                    <button type="button" class="btnCancelInfo" style="width: 150px;">주문 취소 정보 저장</button>
                </div>
                <!--//btnsWrap-->
            </form>
        </fieldset>

        <fieldset style="padding-top: 20px;">
            <p style="font-size: 16px; padding-bottom: 7px;">주문 상세</p>
            <form id="frm_write" name="frm_write">
                <input type="hidden" name="sno" value="271859" />
                <div style="float: left; width: 49%;">
                    <table class="commonTable detailTable">
                        <caption>
                            주문 내역 테이블
                        </caption>
                        <colgroup>
                            <col width="100" />
                            <col width="250" />
                            <col width="100" />
                            <col />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">주문자 정보</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">회원구분</th>
                                <td colspan="3" class="al">일반회원</td>
                            </tr>
                            <tr>
                                <th scope="col">성명(아이디)</th>
                                <td class="al">김한나(poilks1)</td>
                                <th scope="col">이메일</th>
                                <td class="al">poilks123@naver.com</td>
                            </tr>
                            <tr>
                                <th scope="col">전화번호</th>
                                <td class="al">010-3324-5755</td>
                                <th scope="col">휴대폰</th>
                                <td class="al">010-3324-5755</td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">우편번호</th>
                                <td colspan="3" class="al">46963</td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">주소(지역)</th>
                                <td colspan="3" class="al">부산 사상구 사상로243번길 7 (괘법동, 천아하늘정원)</td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">주소(상세)</th>
                                <td colspan="3" class="al">903호</td>
                            </tr>
                            <tr>
                                <th scope="col">주문일</th>
                                <td colspan="3" class="al">2020-10-29</td>
                            </tr>
                            <tr>
                                <th scope="col">결제</th>
                                <td colspan="3" class="al">
                                    <div><label>결제방법</label><input type="text" name="method2" value="카드_신한" style="width: 120px;" /> <label>결제메모</label><input type="text" name="fname" value="" style="width: 120px;" /></div>

                                    <input type="hidden" name="bank" value="[우리은행] 1005-603-866062 대방메이저 주식회사" />
                                    <input type="hidden" name="vBank" value="" />
                                    <input type="hidden" name="bName" value="김한나" />
                                    <input type="hidden" name="payday" value="2020-10-29" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="float: right; width: 50%;">
                    <table class="commonTable detailTable">
                        <caption>
                            주문 내역 테이블
                        </caption>
                        <colgroup>
                            <col width="100" />
                            <col />
                            <col width="100" />
                            <col />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">메모 사항</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: none;">
                                <th scope="col">성명</th>
                                <td class="al"><input type="text" name="rName" value="김한나" maxlength="50" style="width: 95%;" /></td>
                                <th scope="col">이메일</th>
                                <td class="al"><input type="text" name="rEmail" value="poilks123@naver.com" maxlength="50" style="width: 95%;" /></td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">전화번호</th>
                                <td class="al"><input type="text" name="rTel" value="010-3324-5755" maxlength="30" style="width: 95%;" /></td>
                                <th scope="col">휴대폰</th>
                                <td class="al"><input type="text" name="rHand" value="010-3324-5755" maxlength="30" style="width: 95%;" /></td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">우편번호</th>
                                <td colspan="3" class="al"><input type="text" name="rZip" value="46963" maxlength="7" style="width: 80px;" /></td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">주소(지역)</th>
                                <td colspan="3" class="al"><input type="text" name="rAdd" value="부산 사상구 사상로243번길 7 (괘법동, 천아하늘정원)" maxlength="100" style="width: 95%;" /></td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">주소(상세)</th>
                                <td colspan="3" class="al"><input type="text" name="rAdd2" value="903호" maxlength="100" style="width: 95%;" /></td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    남기실<br />
                                    메세지
                                </th>
                                <td colspan="3" class="al"><textarea name="memo" style="width: 92%; height: 50px;"></textarea></td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    관리자<br />
                                    메모
                                </th>
                                <td colspan="3" class="al"><textarea name="memo2" style="width: 92%; height: 100px;"></textarea></td>
                            </tr>
                            <tr style="display: none;">
                                <th scope="col">운송장번호</th>
                                <td colspan="3" class="al"><input type="text" name="send" value="" maxlength="30" style="width: 400px;" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--btnsWrap-->
                <div style="float: right; width: 100%;">
                    <div class="btnsWrap">
                        <button type="button" class="orderBasicUpdate" style="width: 150px;">주문 정보 저장</button>
                    </div>
                </div>
                <!--//btnsWrap-->
            </form>
        </fieldset>

        <!-- //writeType03 -->
    </div>
</section>

@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'extension')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 연장신청 상세</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_mod">수정</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_del" onclick="javascript:fnActOrderDel('2980');">삭제</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_list" onclick="javascript:fnActOrderList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmForm" id="frmForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />

            <input type="hidden" name="sno" id="sno" value="2980" />
            <input type="hidden" name="psno" id="psno" value="311081" />

            <fieldset>
                <div class="info-msg" style="float: right; margin: 0 4px 4px 0;">D20201029101755ruddms9736 <button class="commonBtn act_print">프린트</button></div>
                <p style="font-size: 16px; padding-bottom: 7px;">주문 상품</p>
                <table class="commonTable detailTable">
                    <caption>
                        주문 내역 테이블
                    </caption>
                    <colgroup>
                        <col width="40" />
                        <col />
                        <col width="60" />
                        <col width="110" />
                        <col width="110" />
                        <col width="120" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">구분</th>
                            <th scope="col">상품명</th>
                            <th scope="col">일</th>
                            <th scope="col">상품금액</th>
                            <th scope="col">결제금액</th>
                            <th scope="col">상태</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-no="2980">
                            <td>PC</td>
                            <td>영양교사 - [2021] 서답형 문제풀이</td>
                            <td><input type="text" name="giganDay" value="30" class="chknum req" title="일 수를 입력해주세요." style="width: 30px;" /></td>
                            <td class="chkmoney">100,000</td>
                            <td><input type="text" name="payPrice" value="" class="chkmoney" title="결제금액을 입력해주세요." style="width: 80px;" maxlength="19" /></td>
                            <td>
                                <p>
                                    <select name="status">
                                        <option value="입금요" selected="">입금요</option>
                                        <option value="수강중">수강중</option>
                                        <option value="수강종료">수강종료</option>
                                        <option value="취소">취소</option>
                                        <option value="취소고민">취소고민</option>
                                    </select>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6"><button class="colorBtn grybtn act_cancel" style="width: 120px;">주문취소정보</button></th>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <fieldset style="padding-top: 20px;">
                <p style="font-size: 16px; padding-bottom: 7px;">결제 정보</p>
                <table class="commonTable detailTable">
                    <caption>
                        주문 내역 테이블
                    </caption>
                    <colgroup>
                        <col width="12%" />
                        <col />
                        <col width="8%" />
                        <col width="20%" />
                        <col width="10%" />
                        <col width="22%" />
                        <col />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">결제방법</th>
                            <td class="al"><input type="text" name="method2" id="method2" value="무통장입금" maxlength="25" class="req" /></td>
                            <th scope="col">입금자</th>
                            <td class="al"><input type="text" name="bName" id="bName" value="이경은" /></td>
                            <th scope="col">입금일</th>
                            <td class="al"><input type="text" name="payday" id="payday" value="" class="calendar hasDatepicker" readonly="" /></td>
                        </tr>
                        <tr>
                            <th scope="col">관리자메모</th>
                            <td class="al" colspan="5"><textarea name="memo" id="memo" style="width: 96%; height: 50px;"></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <fieldset style="display: none; padding-top: 20px;" id="cont-cancel">
            <p style="font-size: 16px; padding-bottom: 7px;">주문 취소 정보</p>
            <form id="frmOrderCnc" name="frmOrderCnc">
                <input type="hidden" name="psno" value="2980" />
                <input type="hidden" name="sno" value="" />
                <table class="commonTable detailTable">
                    <caption>
                        주문 내역 테이블
                    </caption>
                    <colgroup>
                        <col width="12%" />
                        <col />
                        <col width="8%" />
                        <col width="20%" />
                        <col width="10%" />
                        <col width="22%" />
                        <col />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">처리담당자</th>
                            <td class="al"><input type="text" name="dName" id="dName" value="" maxlength="25" class="req" title="처리담당자명을 입력해주세요." /></td>
                            <th scope="col">사유</th>
                            <td class="al">
                                <select name="dReason" id="dReason" style="width: 100px;" class="req" title="사유를 선택해주세요.">
                                    <option value="단순변심">단순변심</option>
                                    <option value="상품불량">상품불량</option>
                                    <option value="품절취소">품절취소</option>
                                    <option value="기타">기타</option>
                                </select>
                            </td>
                            <th scope="col">취소일</th>
                            <td class="al"><input type="text" name="dDate" id="dDate" value="" class="calendar req hasDatepicker" title="취소일을 입력해주세요." readonly="" /></td>
                        </tr>
                        <tr>
                            <th scope="col">상세사유</th>
                            <td class="al" colspan="5"><textarea name="dMemo" id="dMemo" style="width: 96%; height: 50px;" class="req" title="상세사유를 입력해주세요."></textarea></td>
                        </tr>
                        <tr>
                            <th scope="col">환불계좌정보</th>
                            <td class="al" colspan="5"><input type="text" name="dBank" id="dBank" value="" maxlength="25" style="width: 98%;" title="환불계좌정보를 입력해주세요." /></td>
                        </tr>
                    </tbody>
                </table>
                <!--btnsWrap-->
                <div class="btnsWrap">
                    <button type="button" class="btnCancelInfo" style="width: 150px;">주문 취소 정보 저장</button>
                </div>
                <!--//btnsWrap-->
            </form>
        </fieldset>
    </div>
</section>

@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상강의 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_mod">수정</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_del" onclick="javascript:fnActOrderDel('216215');">삭제</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_list" onclick="javascript:fnActOrderList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmForm" id="frmForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchOp1" type="hidden" value="" />
            <input name="searchOp2" type="hidden" value="" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="o_name" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt" value="2020-09-01" />
            <input type="hidden" name="searchEdt" value="2020-11-03" />

            <input type="hidden" name="sno" id="sno" value="216215" />
        </form>

        <fieldset>
            <div class="info-msg" style="float: right; margin: 0 4px 4px 0;">B20201029104110poilks1 <button class="commonBtn act_print">프린트</button></div>
            <p style="font-size: 16px; padding-bottom: 7px;">주문 상품</p>
            <table class="commonTable detailTable">
                <caption>
                    주문 내역 테이블
                </caption>
                <colgroup>
                    <col width="40" />
                    <col width="100" />
                    <col />
                    <col width="60" />
                    <col width="110" />
                    <col width="110" />
                    <col width="60" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">구분</th>
                        <th scope="col">상품명</th>
                        <th scope="col">수량</th>
                        <th scope="col">결제금액</th>
                        <th scope="col">배송료</th>
                        <th scope="col">상태</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="694050">
                        <td>1</td>
                        <td>교재</td>
                        <td>2021 원픽 지역사회간호</td>
                        <td>1</td>
                        <td class="chkmoney">34,200</td>
                        <td class="chkmoney">0</td>
                        <td>결제완료</td>
                    </tr>

                    <tr>
                        <th colspan="3">합계</th>
                        <td>1</td>
                        <td class="chkmoney">34,200</td>
                        <td class="chkmoney">0</td>
                        <th><button class="colorBtn grybtn act_cancel" style="width: 120px;">주문취소정보</button></th>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <fieldset style="display: none; padding-top: 20px;" id="cont-cancel">
            <p style="font-size: 16px; padding-bottom: 7px;">주문 취소 정보</p>
            <form id="frmOrderCnc" name="frmOrderCnc">
                <input type="hidden" name="psno" value="216215" />
                <input type="hidden" name="sno" id="sno" value="" />
                <table class="commonTable detailTable">
                    <caption>
                        주문 내역 테이블
                    </caption>
                    <colgroup>
                        <col width="12%" />
                        <col />
                        <col width="8%" />
                        <col width="20%" />
                        <col width="10%" />
                        <col width="22%" />
                        <col />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">처리담당자</th>
                            <td class="al"><input type="text" name="dName" id="dName" value="" maxlength="25" class="req" title="처리담당자명을 입력해주세요." /></td>
                            <th scope="col">사유</th>
                            <td class="al">
                                <select name="dReason" id="dReason" style="width: 100px;" class="req" title="사유를 선택해주세요.">
                                    <option value="단순변심">단순변심</option>
                                    <option value="상품불량">상품불량</option>
                                    <option value="품절취소">품절취소</option>
                                    <option value="기타">기타</option>
                                </select>
                            </td>
                            <th scope="col">취소일</th>
                            <td class="al"><input type="text" name="dDate" id="dDate" value="" class="calendar req hasDatepicker" title="취소일을 입력해주세요." readonly="" /></td>
                        </tr>
                        <tr>
                            <th scope="col">상세사유</th>
                            <td class="al" colspan="5"><textarea name="dMemo" id="dMemo" style="width: 96%; height: 50px;" class="req" title="상세사유를 입력해주세요."></textarea></td>
                        </tr>
                        <tr>
                            <th scope="col">환불계좌정보</th>
                            <td class="al" colspan="5"><input type="text" name="dBank" id="dBank" value="" maxlength="25" style="width: 98%;" title="환불계좌정보를 입력해주세요." /></td>
                        </tr>
                    </tbody>
                </table>
                <!--btnsWrap-->
                <div class="btnsWrap">
                    <button type="button" class="btnCancelInfo" style="width: 150px;">주문 취소 정보 저장</button>
                </div>
                <!--//btnsWrap-->
            </form>
        </fieldset>

        <fieldset style="padding-top: 20px;">
            <p style="font-size: 16px; padding-bottom: 7px;">주문 상세</p>
            <form id="frm_write" name="frm_write">
                <input type="hidden" name="sno" value="216215" />
                <div style="float: left; width: 49%;">
                    <table class="commonTable detailTable">
                        <caption>
                            주문 내역 테이블
                        </caption>
                        <colgroup>
                            <col width="100" />
                            <col width="250" />
                            <col width="100" />
                            <col />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">주문자 정보</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">회원구분</th>
                                <td colspan="3" class="al">일반회원</td>
                            </tr>
                            <tr>
                                <th scope="col">성명(아이디)</th>
                                <td class="al">김한나(poilks1)</td>
                                <th scope="col">이메일</th>
                                <td class="al">poilks123@naver.com</td>
                            </tr>
                            <tr>
                                <th scope="col">전화번호</th>
                                <td class="al">010-3324-5755</td>
                                <th scope="col">휴대폰</th>
                                <td class="al">010-3324-5755</td>
                            </tr>
                            <tr>
                                <th scope="col">우편번호</th>
                                <td colspan="3" class="al">46963</td>
                            </tr>
                            <tr>
                                <th scope="col">주소(지역)</th>
                                <td colspan="3" class="al">부산 사상구 사상로243번길 7 (괘법동, 천아하늘정원)</td>
                            </tr>
                            <tr>
                                <th scope="col">주소(상세)</th>
                                <td colspan="3" class="al">903호</td>
                            </tr>
                            <tr>
                                <th scope="col">주문일</th>
                                <td colspan="3" class="al">2020-10-29</td>
                            </tr>
                            <tr>
                                <th scope="col">결제</th>
                                <td colspan="3" class="al">
                                    <div><label>결제방법</label><input type="text" name="method2" value="카드_신한" style="width: 120px;" /> <label>결제메모</label><input type="text" name="fname" value="" style="width: 120px;" /></div>

                                    <input type="hidden" name="bank" value="[우리은행] 1005-603-866062 대방메이저 주식회사" />
                                    <input type="hidden" name="vBank" value="" />
                                    <input type="hidden" name="bName" value="김한나" />
                                    <input type="hidden" name="payday" value="2020-10-29" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="float: right; width: 50%;">
                    <table class="commonTable detailTable">
                        <caption>
                            주문 내역 테이블
                        </caption>
                        <colgroup>
                            <col width="100" />
                            <col />
                            <col width="100" />
                            <col />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">수취인 정보</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">성명</th>
                                <td class="al"><input type="text" name="rName" value="김한나" maxlength="50" style="width: 95%;" /></td>
                                <th scope="col">이메일</th>
                                <td class="al"><input type="text" name="rEmail" value="poilks123@naver.com" maxlength="50" style="width: 95%;" /></td>
                            </tr>
                            <tr>
                                <th scope="col">전화번호</th>
                                <td class="al"><input type="text" name="rTel" value="010-3324-5755" maxlength="30" style="width: 95%;" /></td>
                                <th scope="col">휴대폰</th>
                                <td class="al"><input type="text" name="rHand" value="010-3324-5755" maxlength="30" style="width: 95%;" /></td>
                            </tr>
                            <tr>
                                <th scope="col">우편번호</th>
                                <td colspan="3" class="al"><input type="text" name="rZip" value="46963" maxlength="7" style="width: 80px;" /></td>
                            </tr>
                            <tr>
                                <th scope="col">주소(지역)</th>
                                <td colspan="3" class="al"><input type="text" name="rAdd" value="부산 사상구 사상로243번길 7 (괘법동, 천아하늘정원)" maxlength="100" style="width: 95%;" /></td>
                            </tr>
                            <tr>
                                <th scope="col">주소(상세)</th>
                                <td colspan="3" class="al"><input type="text" name="rAdd2" value="903호" maxlength="100" style="width: 95%;" /></td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    남기실<br />
                                    메세지
                                </th>
                                <td colspan="3" class="al"><textarea name="memo" style="width: 92%; height: 50px;"></textarea></td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    관리자<br />
                                    메모
                                </th>
                                <td colspan="3" class="al"><textarea name="memo2" style="width: 92%; height: 100px;"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table class="commonTable">
                    <caption>
                        주문 내역 테이블
                    </caption>
                    <colgroup>
                        <col width="12%" />
                        <col />
                        <col width="12%" />
                        <col width="38%" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col">운송장번호</th>
                            <td class="al"><input type="text" name="send" value="" maxlength="30" style="width: 400px;" /></td>
                            <th scope="col">주문상태</th>
                            <td class="al">
                                <select name="status">
                                    <option value="주문접수">주문접수</option>
                                    <option value="결제완료" selected="">결제완료</option>
                                    <option value="배송준비중">배송준비중</option>
                                    <option value="배송중">배송중</option>
                                    <option value="배송완료">배송완료</option>
                                    <option value="거래완료">거래완료</option>
                                    <option value="주문취소">주문취소</option>
                                    <option value="입금요">입금요</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--btnsWrap-->
                <div style="float: right; width: 100%;">
                    <div class="btnsWrap">
                        <button type="button" class="orderBasicUpdate" style="width: 150px;">주문 정보 저장</button>
                    </div>
                </div>
                <!--//btnsWrap-->
            </form>
        </fieldset>
        <!-- //writeType03 -->
    </div>
</section>

@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'free')
@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'estimate')
<section class="rightCont">
    <div class="rightTitle">
        <h3>견적 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_list">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form class="articleWrite" id="frm_write" name="frm_write" method="post">
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 150px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">회원검색</th>
                            <td colspan="3"><button type="button" class="colorBtn rightbluebtn plusIcon act_ins act_usr_add">검색</button></td>
                        </tr>
                    </tbody>
                </table>
                <table class="commonTable detailTable">
                    <caption>
                        회원 리스트 테이블
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 180px;" />
                        <col style="width: 160px;" />
                        <col style="width: 120px;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>
                                <span class="checkBox">
                                    <input type="checkbox" class="check_all" data-check="noMemb" id="check_all" name="check_all" value="Y" />
                                    <label for="check_all"><span></span>선택</label>
                                </span>
                                <button type="button" class="commonBtn" onclick="javascript:fnActMembALLDel();">삭제</button>
                            </th>
                            <th>회원명</th>
                            <th>회원ID</th>
                            <th>장바구니보기</th>
                            <th>삭제</th>
                        </tr>
                    </thead>
                    <tbody id="membListTbody"></tbody>
                </table>

                <table class="rowTable">
                    <colgroup>
                        <col style="width: 150px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">분류</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="lecgubun" value="P" id="lecgubun1" checked="" /><label for="lecgubun1"><span></span>PC</label> <input type="radio" name="lecgubun" value="M" id="lecgubun2" />
                                    <label for="lecgubun2"><span></span>Mobile</label> <input type="radio" name="lecgubun" value="A" id="lecgubun3" /><label for="lecgubun3"><span></span>PC+Mobile</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>단과강의선택</th>
                            <td>
                                <select name="clCode" id="clCode" class="req" title="과목 카테고리를 선택하여 주세요" style="width: 150px; padding-left: 10px;">
                                    <option value="">과목 선택</option>

                                    <option value="CL00001">RNBSN</option>

                                    <option value="CL00002">간호관리</option>

                                    <option value="CL00003">간호사</option>

                                    <option value="CL00004">감염의료관계법규</option>

                                    <option value="CL00005">공중보건</option>

                                    <option value="CL00006">국어</option>

                                    <option value="CL00007">보건의료관계법규</option>

                                    <option value="CL00008">보건학</option>

                                    <option value="CL00009">보건행정</option>

                                    <option value="CL00010">사회</option>

                                    <option value="CL00011">생물</option>

                                    <option value="CL00012">식품미생물</option>

                                    <option value="CL00013">식품위생</option>

                                    <option value="CL00014">식품화학개론 이론</option>

                                    <option value="CL00015">역학</option>

                                    <option value="CL00016">영양교사</option>

                                    <option value="CL00017">영양사</option>

                                    <option value="CL00018">영어</option>

                                    <option value="CL00019">위생관계법규</option>

                                    <option value="CL00020">위생사</option>

                                    <option value="CL00021">의료관계법규</option>

                                    <option value="CL00022">지역사회</option>

                                    <option value="CL00023">지역사회간호</option>

                                    <option value="CL00024">한국사</option>

                                    <option value="CL00025">해부생리학</option>

                                    <option value="CL00026">행정법</option>

                                    <option value="CL00027">화학</option>

                                    <option value="CL00028">환경공학</option>

                                    <option value="CL00029">환경보건</option>

                                    <option value="CL00030">환경화학</option>

                                    <option value="CL00031">전공보건</option>

                                    <option value="CL00032">식품화학개론 문제</option>

                                    <option value="CL00033">면접특강</option>

                                    <option value="CL00034">보건교사</option>
                                </select>
                                <select name="lectype" id="lectype" class="req" title="강좌를 선택하여 주세요" style="width: 500px; padding-left: 10px;">
                                    <option value="">선택</option>
                                </select>
                                <button type="button" class="commonBtn act_lecture">추가</button>
                            </td>
                        </tr>
                        <tr>
                            <th>종합반강의선택</th>
                            <td>
                                <select name="leCode" id="leCode" class="req" title="직렬 카테고리를 선택하여 주세요" style="width: 150px; padding-left: 10px;">
                                    <option value="">직렬 선택</option>

                                    <option value="LE00001">간호직 공무원</option>

                                    <option value="LE00002">보건직 공무원</option>

                                    <option value="LE00004">보건연구사</option>

                                    <option value="LE00005">보건복지부 공무원</option>

                                    <option value="LE00003">보건진료직 공무원</option>

                                    <option value="LE00006">의료기술직 공무원</option>

                                    <option value="LE00007">방역직 공무원</option>

                                    <option value="LE00010">식품위생직 공무원</option>

                                    <option value="LE00008">환경직 공무원</option>

                                    <option value="LE00009">환경연구사</option>

                                    <option value="LE00011">조리직 공무원</option>

                                    <option value="LE00012">영양교사</option>

                                    <option value="LE00013">보건교사</option>

                                    <option value="LE00016">영양사</option>

                                    <option value="LE00017">위생사</option>

                                    <option value="LE00015">간호사</option>

                                    <option value="LE00019">식품(산업)기사</option>

                                    <option value="LE00014">교육학</option>
                                </select>
                                <select name="coltype" id="coltype" class="req" title="강의를 선택하여 주세요" style="width: 500px; padding-left: 10px;">
                                    <option value="">선택</option>
                                </select>
                                <button type="button" class="commonBtn act_college">추가</button>
                            </td>
                        </tr>
                        <tr>
                            <th>교재선택</th>
                            <td>
                                <select name="bleCode" id="bleCode" class="req" title="직렬 카테고리를 선택하여 주세요" style="width: 150px; padding-left: 10px;">
                                    <option value="">직렬 선택</option>

                                    <option value="LE00001">간호직 공무원</option>

                                    <option value="LE00002">보건직 공무원</option>

                                    <option value="LE00004">보건연구사</option>

                                    <option value="LE00005">보건복지부 공무원</option>

                                    <option value="LE00003">보건진료직 공무원</option>

                                    <option value="LE00006">의료기술직 공무원</option>

                                    <option value="LE00007">방역직 공무원</option>

                                    <option value="LE00010">식품위생직 공무원</option>

                                    <option value="LE00008">환경직 공무원</option>

                                    <option value="LE00009">환경연구사</option>

                                    <option value="LE00011">조리직 공무원</option>

                                    <option value="LE00012">영양교사</option>

                                    <option value="LE00013">보건교사</option>

                                    <option value="LE00016">영양사</option>

                                    <option value="LE00017">위생사</option>

                                    <option value="LE00015">간호사</option>

                                    <option value="LE00019">식품(산업)기사</option>

                                    <option value="LE00014">교육학</option>
                                </select>
                                <select name="bclCode" id="bclCode" class="req" title="과목 카테고리를 선택하여 주세요" style="width: 150px; padding-left: 10px;">
                                    <option value="">과목 선택</option>

                                    <option value="CL00001">RNBSN</option>

                                    <option value="CL00002">간호관리</option>

                                    <option value="CL00003">간호사</option>

                                    <option value="CL00004">감염의료관계법규</option>

                                    <option value="CL00005">공중보건</option>

                                    <option value="CL00006">국어</option>

                                    <option value="CL00007">보건의료관계법규</option>

                                    <option value="CL00008">보건학</option>

                                    <option value="CL00009">보건행정</option>

                                    <option value="CL00010">사회</option>

                                    <option value="CL00011">생물</option>

                                    <option value="CL00012">식품미생물</option>

                                    <option value="CL00013">식품위생</option>

                                    <option value="CL00014">식품화학개론 이론</option>

                                    <option value="CL00015">역학</option>

                                    <option value="CL00016">영양교사</option>

                                    <option value="CL00017">영양사</option>

                                    <option value="CL00018">영어</option>

                                    <option value="CL00019">위생관계법규</option>

                                    <option value="CL00020">위생사</option>

                                    <option value="CL00021">의료관계법규</option>

                                    <option value="CL00022">지역사회</option>

                                    <option value="CL00023">지역사회간호</option>

                                    <option value="CL00024">한국사</option>

                                    <option value="CL00025">해부생리학</option>

                                    <option value="CL00026">행정법</option>

                                    <option value="CL00027">화학</option>

                                    <option value="CL00028">환경공학</option>

                                    <option value="CL00029">환경보건</option>

                                    <option value="CL00030">환경화학</option>

                                    <option value="CL00031">전공보건</option>

                                    <option value="CL00032">식품화학개론 문제</option>

                                    <option value="CL00033">면접특강</option>

                                    <option value="CL00034">보건교사</option>
                                </select>
                                <select name="booktype" id="booktype" class="req" title="과목 카테고리를 선택하여 주세요" style="width: 350px; padding-left: 10px;">
                                    <option value="">선택</option>
                                </select>
                                <button type="button" class="commonBtn act_book">추가</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="commonTable detailTable">
                    <colgroup>
                        <col style="width: 120px;" />
                        <col style="width: 80px;" />
                        <col style="width: 180px;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 160px;" />
                        <col style="width: 60px;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>분류</th>
                            <th>수강일수</th>
                            <th>금액</th>
                            <th>강의명 or 교재명</th>
                            <th>결제금액</th>
                            <th>삭제</th>
                        </tr>
                    </thead>
                    <tbody id="addLecture"></tbody>
                </table>
            </fieldset>

            <!--btnsWrap-->
            <div class="btnsWrap">
                <button type="button" class="act_save">등록</button>
                <button type="button" class="cancle act_list">취소</button>
            </div>
            <!--//btnsWrap-->
        </form>
    </div>
</section>

@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'all')
<section class="rightCont">
    <div class="rightTitle">
        <h3>회원 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMembWrite('edit');">수정</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMembList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchCnd2" type="hidden" value="" />
            <input name="searchCnd3" type="hidden" value="" />
            <input name="searchOp1" type="hidden" value="" />
            <input name="searchOp2" type="hidden" value="" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp4" type="hidden" value="" />
            <input name="searchOp5" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input name="searchOp7" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt" value="" />
            <input type="hidden" name="searchEdt" value="" />
        </form>
        <form name="actEmpModifyForm" id="actEmpModifyForm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchCnd2" type="hidden" value="" />
            <input name="searchCnd3" type="hidden" value="" />
            <input name="searchOp1" type="hidden" value="" />
            <input name="searchOp2" type="hidden" value="" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp4" type="hidden" value="" />
            <input name="searchOp5" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input name="searchOp7" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt" value="" />
            <input type="hidden" name="searchEdt" value="" />
            <input type="hidden" name="mIdx" id="mIdx" value="109539" />
            <div class="writeType03 mt_50">
                <table class="rowTable">
                    <caption class="blind">
                        회원정보 수정
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: 230px;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">이름</th>
                            <td>
                                <input type="text" name="mName" id="mName" style="width: 150px;" value="김한나" maxlength="10" />
                            </td>
                            <th scope="row">아이디</th>
                            <td>
                                <input type="hidden" name="mId" id="mId" style="width: 150px;" maxlength="10" value="poilks1" />
                                poilks1
                            </td>
                            <th scope="row">회원구분</th>
                            <td>
                                <select name="mGubun" id="mGubun">
                                    <option value="">선택</option>

                                    <option value="11" selected="">일반회원</option>

                                    <option value="13">합격자</option>

                                    <option value="14">블랙리스트</option>

                                    <option value="21">교수</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">휴대폰번호</th>
                            <td>
                                <input type="text" name="mHp" id="mHp" style="width: 150px;" value="010-3324-5755" maxlength="13" />
                            </td>
                            <th scope="row">전화번호</th>
                            <td>
                                <input type="text" name="mTel" id="mTel" style="width: 150px;" value="010-3324-5755" maxlength="13" />
                            </td>
                            <th scope="row">성별</th>
                            <td>
                                <input type="radio" name="mSex" id="mSex1" value="M" />
                                <label for="mSex1">남</label>
                                <input type="radio" name="mSex" id="mSex2" value="W" class="mls15" checked="" />
                                <label for="mSex2">여</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">이메일</th>
                            <td>
                                <input type="text" name="mEmail" id="mEmail" style="width: 150px;" value="poilks123@naver.com" maxlength="25" />
                            </td>
                            <th scope="row">생년월일</th>
                            <td>
                                <input type="text" name="mBirth" id="mBirth" maxlength="8" class="textNumOnly" value="19930120" />
                            </td>
                            <th scope="row">비밀번호</th>
                            <td>
                                <input type="password" name="mPass" class="" title="비밀번호를 입력해주세요." maxlength="50" style="width: 100px;" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">주소</th>
                            <td>
                                <a href="javascript:void(0);" class="button_v2" onclick="execDaumPostcode('mZip','mAddr1')"><span>우편번호</span></a>
                                <input type="text" name="mZip" id="mZip" style="text-align: center; width: 80px;" value="46963" maxlength="5" class="chknum" />
                            </td>
                            <td colspan="4" style="height: 70px;">
                                <input type="text" name="mAddr1" id="mAddr1" style="width: 500px; margin-bottom: 5px;" value="부산 사상구 사상로243번길 7 (괘법동, 천아하늘정원)" maxlength="150" /><br />
                                <input type="text" name="mAddr2" id="mAddr2" style="width: 500px;" value="903호" maxlength="150" />
                                <span id="guide" style="color: #999;"></span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">가입경로</th>
                            <td>
                                <select name="mWay" id="mWay">
                                    <option value="">선택</option>

                                    <option value="11" selected="">PC</option>

                                    <option value="12">Mobile</option>
                                </select>
                            </td>
                            <th scope="row">이메일수신여부</th>
                            <td>
                                <input type="radio" name="emailYn" id="emailY" value="Y" checked="" /><label for="emailY">동의</label> <input type="radio" name="emailYn" id="emailN" value="N" style="margin-left: 5px;" />
                                <label for="emailN">동의안함</label>
                            </td>
                            <th scope="row">SMS수신여부</th>
                            <td>
                                <input type="radio" name="smsYn" id="smsY" value="Y" checked="" /><label for="smsY">동의</label> <input type="radio" name="smsYn" id="smsN" value="N" style="margin-left: 5px;" />
                                <label for="smsN">동의안함</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">준비하는 시험</th>
                            <td>
                                <select name="mExam" id="mExam">
                                    <option value="">선택</option>

                                    <option value="LE00001" selected="">간호직 공무원</option>

                                    <option value="LE00002">보건직 공무원</option>

                                    <option value="LE00004">보건연구사</option>

                                    <option value="LE00005">보건복지부 공무원</option>

                                    <option value="LE00003">보건진료직 공무원</option>

                                    <option value="LE00006">의료기술직 공무원</option>

                                    <option value="LE00007">방역직 공무원</option>

                                    <option value="LE00010">식품위생직 공무원</option>

                                    <option value="LE00008">환경직 공무원</option>

                                    <option value="LE00009">환경연구사</option>

                                    <option value="LE00011">조리직 공무원</option>

                                    <option value="LE00012">영양교사</option>

                                    <option value="LE00013">보건교사</option>

                                    <option value="LE00016">영양사</option>

                                    <option value="LE00017">위생사</option>

                                    <option value="LE00015">간호사</option>

                                    <option value="LE00019">식품(산업)기사</option>

                                    <option value="LE00014">교육학</option>
                                </select>
                            </td>
                            <th scope="row">응시지역1지망</th>
                            <td>
                                <input type="text" size="10" maxlength="10" name="mHope1" id="mHope1" value="부산" />
                            </td>
                            <th scope="row">응시지역2지망</th>
                            <td>
                                <input type="text" size="10" maxlength="10" name="mHope2" id="mHope2" value="부산" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">학원을 알게된 동기</th>
                            <td>
                                <select name="mPath" id="mPath">
                                    <option value="">선택</option>

                                    <option value="11">주변소개</option>

                                    <option value="12">인터넷 검색</option>

                                    <option value="13">시험장 홍보물</option>

                                    <option value="14">학교 홍보물</option>
                                </select>
                            </td>
                            <th scope="row">최근 접속 일시</th>
                            <td>2020-10-29 10:37:31.157</td>
                            <th scope="row">방문 횟수</th>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row">가입일시</th>
                            <td colspan="5">2020-10-29 10:37:00.0</td>
                        </tr>
                        <tr>
                            <th scope="row">특이사항</th>
                            <td colspan="5">
                                <textarea name="mEtc" style="height: 80px;"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- //writeType03 -->
        </form>

        <!--등록기기-->
        <fieldset style="margin-top: 20px;">
            <p>등록기기</p>
            <table class="commonTable detailTable">
                <colgroup>
                    <col style="width: *;" />
                    <col style="width: *;" />
                    <col style="width: *;" />
                    <col style="width: *;" />
                    <col style="width: 70px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">PID</th>
                        <th scope="col">SSN</th>
                        <th scope="col">별칭</th>
                        <th scope="col">등록일시</th>
                        <th scope="col">관리</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </fieldset>
        <!--//등록기기-->
    </div>
</section>

@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'class')
<section class="rightCont">
    <div class="rightTitle">
        <h3>수강 회원 관리 - 수강 현황</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_list" onclick="javascript:fnActOrderList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmForm" id="frmForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchOp1" type="hidden" value="" />
            <input name="searchOp2" type="hidden" value="수강중" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="o_name" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt2" value="" />
            <input type="hidden" name="searchEdt2" value="" />

            <fieldset>
                <table class="commonTable detailTable">
                    <caption>
                        수강현황 테이블
                    </caption>
                    <colgroup>
                        <col width="100" />
                        <col />
                        <col width="150" />
                        <col width="250" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">구분</th>
                            <th scope="col">강의명</th>
                            <th scope="col">전체 수강 현황</th>
                            <th scope="col">기간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>종합반</td>
                            <td>식품위생직 공무원 - 공개경쟁(5) FP반</td>
                            <td>0.00</td>
                            <td>2020-11-02 ~ 2021-11-01</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset>
                <p style="font-size: 16px; padding: 10px 0 7px 0;">연장신청</p>
                <table class="commonTable detailTable">
                    <caption>
                        연장신청 테이블
                    </caption>
                    <colgroup>
                        <col width="100" />
                        <col />
                        <col width="150" />
                        <col width="250" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">차수</th>
                            <th scope="col">연장 일수</th>
                            <th scope="col">결제금액</th>
                            <th scope="col">연장된 기간</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </fieldset>

            <fieldset>
                <p style="font-size: 16px; padding: 10px 0 7px 0;">강의리스트</p>
                <table class="commonTable detailTable">
                    <caption>
                        강의리스트 테이블
                    </caption>
                    <colgroup>
                        <col width="100" />
                        <col />
                        <col width="150" />
                        <col width="125" />
                        <col width="125" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">강의명</th>
                            <th scope="col">전체 수강 현황</th>
                            <th scope="col">상세보기</th>
                            <th scope="col">자료 다운 횟수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2021 식품위생 이론 및 심화완성</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8070">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8070" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>이경연 교수의 식품화학개론 최신 이론완성반</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="7988">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="7988" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>2021 국어 (정규이론반)</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8059">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8059" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>2021 영어 (정규이론반)</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8060">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8060" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>박동현 9급공무원영어 기본완성</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8011">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8011" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>2021 한국사 (정규이론반)</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8061">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8061" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>NEW 한국 근현대사 특강</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="7952">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="7952" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>2021 식품위생 기출분석 및 단원별 문제특강</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8055">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8055" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>신경향 식품화학개론 기출 및 단원별 문제완성</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8000">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8000" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>2021 국어 기출분석 및 단원별 문제특강</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8037">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8037" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>2021 영어 기출분석 및 단원별 문제특강</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8039">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8039" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>2021 한국사 기출분석 및 단원별 문제특강</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8041">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8041" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>2021 식품위생 실전 모의고사</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8056">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8056" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>신경향 식품화학개론 실전 모의고사반</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8002">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8002" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>2021 국어 실전 모의고사</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8038">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8038" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>2021 영어 실전 모의고사</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8040">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8040" style="width: 60px;">0</button></td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>2021 한국사 실전 모의고사</td>
                            <td>0.00</td>
                            <td><button type="button" class="commonBtn act_lecture" data-no="8042">수강현황</button></td>
                            <td><button type="button" class="commonBtn act_bbs" data-no="8042" style="width: 60px;">0</button></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>
    </div>
</section>
<div tabindex="-1" role="dialog" style="height: auto; width: 1000px; top: 94.5px; left: 456px; display: block; z-index: 101;" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front ui-dialog-buttons ui-draggable" aria-describedby="lyr_doc_popup" aria-labelledby="ui-id-2">
    <div class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix ui-draggable-handle">
        <span id="ui-id-2" class="ui-dialog-title">수강현황</span>
        <button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="Close">
            <span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>Close
        </button>
    </div>
    <div class="dialog ui-dialog-content ui-widget-content pop" id="lyr_doc_popup" style="display: block; width: auto; min-height: 0px; max-height: none; height: 660px;">
        <p class="total" style="margin-top:4px;"></p>
        <table class="commonTable">
            <caption>
                수강 회원 관리 - 수강 현황
            </caption>
            <colgroup>
                <col width="40" />
                <col />
                <col width="160" />
                <col width="90" />
                <col width="90" />
                <col width="80" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">강의명</th>
                    <th scope="col">최종수강일시</th>
                    <th scope="col">강좌시간(m)</th>
                    <th scope="col">수강시간(m)</th>
                    <th scope="col">수강률(%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>식품위생의 개요 및 법규 / 교재 8 ~ 13페이지 / 보충프린트1(프린트는 나의 강의실내 수강중인 강의명옆에 자료실에서 다운받으실수 있습니다.^^)</td>
                    <td>
                        -
                    </td>
                    <td>55</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>2</td>
                    <td>식품위생의 개요 및 법규 / 교재 13 ~ 19페이지</td>
                    <td>
                        -
                    </td>
                    <td>61</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>3</td>
                    <td>식품위생의 개요 및 법규 / 교재 20 ~ 27페이지</td>
                    <td>
                        -
                    </td>
                    <td>63</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>4</td>
                    <td>식품위생의 개요 및 법규 / 교재 28 ~ 30페이지 / 보충프린트2</td>
                    <td>
                        -
                    </td>
                    <td>57</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>5</td>
                    <td>식품위생의 개요 및 법규 / 교재 30 ~ 38페이지</td>
                    <td>
                        -
                    </td>
                    <td>57</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>6</td>
                    <td>식품과 미생물 / 교재 48 ~ 50페이지</td>
                    <td>
                        -
                    </td>
                    <td>72</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>7</td>
                    <td>식품과 미생물 / 교재 50 ~ 51페이지 / 보충프린트3</td>
                    <td>
                        -
                    </td>
                    <td>62</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>8</td>
                    <td>식품과 미생물 / 교재 51 ~ 55페이지</td>
                    <td>
                        -
                    </td>
                    <td>63</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>9</td>
                    <td>식품과 미생물 / 교재 55 ~ 59페이지</td>
                    <td>
                        -
                    </td>
                    <td>69</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>10</td>
                    <td>식품과 미생물 / 교재 60 ~ 62페이지 / 보충프린트4</td>
                    <td>
                        -
                    </td>
                    <td>62</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>11</td>
                    <td>식품과 미생물 / 교재 62 ~ 65페이지</td>
                    <td>
                        -
                    </td>
                    <td>63</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>12</td>
                    <td>식품과 미생물 / 교재 65 ~ 68페이지</td>
                    <td>
                        -
                    </td>
                    <td>60</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>13</td>
                    <td>식품과 미생물 / 교재 68 ~ 71페이지 / 보충프린트5</td>
                    <td>
                        -
                    </td>
                    <td>63</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>14</td>
                    <td>식품과 미생물 / 교재 71 ~ 74페이지</td>
                    <td>
                        -
                    </td>
                    <td>60</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>15</td>
                    <td>식품과 미생물 / 교재 74 ~ 76, 100 ~ 103페이지</td>
                    <td>
                        -
                    </td>
                    <td>57</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>16</td>
                    <td>식중독 / 교재 104 ~ 105페이지 / 보충프린트6</td>
                    <td>
                        -
                    </td>
                    <td>59</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>17</td>
                    <td>식중독 / 교재 105 ~ 108페이지</td>
                    <td>
                        -
                    </td>
                    <td>67</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>18</td>
                    <td>식중독 / 교재 108 ~ 112페이지</td>
                    <td>
                        -
                    </td>
                    <td>65</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>19</td>
                    <td>식중독 / 교재 112 ~ 114페이지 / 보충프린트7</td>
                    <td>
                        -
                    </td>
                    <td>62</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>20</td>
                    <td>식중독 / 교재 114 ~ 117페이지</td>
                    <td>
                        -
                    </td>
                    <td>52</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>21</td>
                    <td>식중독 / 교재 117 ~ 124페이지</td>
                    <td>
                        -
                    </td>
                    <td>50</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>22</td>
                    <td>식중독 / 교재 122 ~ 127페이지</td>
                    <td>
                        -
                    </td>
                    <td>49</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>23</td>
                    <td>식중독 / 교재 127 ~ 128페이지 / 보충프린트8</td>
                    <td>
                        -
                    </td>
                    <td>57</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>24</td>
                    <td>식중독 / 교재 128 ~ 131페이지</td>
                    <td>
                        -
                    </td>
                    <td>57</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>25</td>
                    <td>식중독 / 교재 131 ~ 134페이지</td>
                    <td>
                        -
                    </td>
                    <td>46</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>26</td>
                    <td>식중독 / 교재 135 ~ 138페이지</td>
                    <td>
                        -
                    </td>
                    <td>47</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
        
                <tr>
                    <td>27</td>
                    <td>다음 업데이트는 11. 3입니다. (강의는 수업이 있는 다음날 오전 11시~11시반사이에 업데이트 됩니다.^^)</td>
                    <td>
                        -
                    </td>
                    <td>0</td>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
        <div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-corner-all ui-widget">닫기</button></div>
    </div>
</div>

@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'professor')
<section class="rightCont">
    <div class="rightTitle">
        <h3>교수 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMembWrite('edit');">수정</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMembList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchOp1" type="hidden" value="" />
            <input name="searchOp2" type="hidden" value="" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt" value="" />
            <input type="hidden" name="searchEdt" value="" />
        </form>
        <form name="actEmpModifyForm" id="actEmpModifyForm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input name="searchOp1" type="hidden" value="" />
            <input name="searchOp2" type="hidden" value="" />
            <input name="searchOp3" type="hidden" value="" />
            <input name="searchOp6" type="hidden" value="" />
            <input type="hidden" name="searchCnd" value="" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchSdt" value="" />
            <input type="hidden" name="searchEdt" value="" />
            <input type="hidden" name="mIdx" id="mIdx" value="24502" />
            <input type="hidden" name="pIdx" id="pIdx" value="36" />
            <input type="hidden" name="pIntro" />
            <input type="hidden" name="actListMode" value="PROF" />
            <div class="writeType03 mt_50">
                <table class="rowTable">
                    <caption class="blind">
                        회원정보 수정
                    </caption>
                    <colgroup>
                        <col style="width: 130px;" />
                        <col style="width: 230px;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                        <col style="width: 130px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">이름</th>
                            <td>
                                <input type="text" name="mName" id="mName" style="width: 150px;" value="최정환" maxlength="10" />
                            </td>
                            <th scope="row">아이디</th>
                            <td>
                                <input type="hidden" name="mId" id="mId" style="width: 150px;" maxlength="10" value="petal2002" />
                                petal2002
                            </td>
                            <th scope="row">회원구분</th>
                            <td>
                                <select name="mGubun" id="mGubun">
                                    <option value="">선택</option>

                                    <option value="11">일반회원</option>

                                    <option value="13">합격자</option>

                                    <option value="14">블랙리스트</option>

                                    <option value="21" selected="">교수</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">휴대폰번호</th>
                            <td>
                                <input type="text" name="mHp" id="mHp" style="width: 150px;" value="010-9455-2484" maxlength="13" />
                            </td>
                            <th scope="row">전화번호</th>
                            <td>
                                <input type="text" name="mTel" id="mTel" style="width: 150px;" value="02-935-2484" maxlength="13" />
                            </td>
                            <th scope="row">비밀번호</th>
                            <td>
                                <input type="password" name="mPass" class="" title="비밀번호를 입력해주세요." maxlength="50" style="width: 100px;" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">이메일</th>
                            <td>
                                <input type="text" name="mEmail" id="mEmail" style="width: 150px;" value="petal2002@hanmail.net" maxlength="25" />
                            </td>
                            <th scope="row">생년월일</th>
                            <td>
                                <input type="text" name="mBirth" id="mBirth" maxlength="8" class="chknum" value="19710524" />
                            </td>
                            <th scope="row">성별</th>
                            <td>
                                <input type="radio" name="mSex" id="mSex1" value="M" checked="" />
                                <label for="mSex1">남</label>
                                <input type="radio" name="mSex" id="mSex2" value="W" class="mls15" />
                                <label for="mSex2">여</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">주소</th>
                            <td>
                                <a href="javascript:void(0);" class="button_v2" onclick="execDaumPostcode('mZip','mAddr1')"><span>우편번호</span></a>
                                <input type="text" name="mZip" id="mZip" style="text-align: center; width: 80px;" value="139756" maxlength="5" class="chknum" />
                            </td>
                            <td colspan="4" style="height: 70px;">
                                <input type="text" name="mAddr1" id="mAddr1" style="width: 500px; margin-bottom: 5px;" value="서울 노원구 상계6, 7동 (동일로 215길 48)" maxlength="150" /><br />
                                <input type="text" name="mAddr2" id="mAddr2" style="width: 500px;" value="주공APT 303동 1306호" maxlength="150" />
                                <span id="guide" style="color: #999;"></span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">가입경로/일시</th>
                            <td>
                                <select name="mWay" id="mWay" style="width: 80px;">
                                    <option value="">선택</option>

                                    <option value="11" selected="">PC</option>

                                    <option value="12">Mobile</option>
                                </select>
                                / 2007-04-14
                            </td>
                            <th scope="row">이메일수신여부</th>
                            <td>
                                <input type="radio" name="emailYn" id="emailY" value="Y" checked="" /><label for="emailY">동의</label> <input type="radio" name="emailYn" id="emailN" value="N" style="margin-left: 5px;" />
                                <label for="emailN">동의안함</label>
                            </td>
                            <th scope="row">SMS수신여부</th>
                            <td>
                                <input type="radio" name="smsYn" id="smsY" value="Y" /><label for="smsY">동의</label> <input type="radio" name="smsYn" id="smsN" value="N" checked="" style="margin-left: 5px;" />
                                <label for="smsN">동의안함</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">전공과목</th>
                            <td>
                                <input type="text" name="pMajor" id="pMajor" style="width: 150px;" value="생물" maxlength="50" />
                            </td>
                            <th scope="row">수수료율%</th>
                            <td>
                                <input type="text" size="10" maxlength="10" name="pRate" id="pRate" value="" />
                            </td>
                            <th scope="row">순서/노출여부</th>
                            <td>
                                <input type="text" size="5" maxlength="3" name="pSeq" id="pSeq" class="textNumOnly" value="200" />
                                <input type="radio" name="pShow" id="pShowY" value="Y" checked="" /><label for="pShowY">노출</label> <input type="radio" name="pShow" id="pShowN" value="N" style="margin-left: 5px;" />
                                <label for="pShowN">숨김</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">특이사항</th>
                            <td colspan="5">
                                <textarea name="mEtc" style="height: 80px;">02-935-2484</textarea>
                            </td>
                        </tr>

                        <tr>
                            <th class="ta_l" scope="row"><label for="thumId">사진</label></th>
                            <td class="v3" colspan="5">
                                <span>
                                    <input type="file" name="fileThum" style="width: 500px;" />
                                    <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileReset(this);"><span>취소</span></a>
                                </span>
                            </td>
                        </tr>

                        <tr id="inputFileSpan">
                            <th class="ta_l" scope="row"><label for="fileid">배너</label></th>
                            <td class="v3" colspan="5">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <input type="hidden" name="fileSnum2" />
                                <input type="text" name="fileCn" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>배너추가</span></a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">교수소개</th>
                            <td colspan="5">
                                <input
                                    type="hidden"
                                    name="pIntroTp"
                                    id="pIntroTp"
                                    value='<p style="line-height: 1.5; font-family: &amp;quot;맑은 고딕&amp;quot;; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;"><strong><span style="font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">■ 최정환 교수 약력</span></strong></p><p style="line-height: 1.5; font-family: &amp;quot;맑은 고딕&amp;quot;; font-size: 10pt; margin-top: 0px; margin-bottom: 0px;"><strong><span style="font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">현) 대방열림고시학원 생물 담당</span></strong></p>'
                                />
                                <!--editor-->
                                <script type="text/javascript">
                                    DEXT5.config.Width = "100%";
                                    DEXT5.config.Height = "300px";
                                    var editor = new Dext5editor("pIntro");
                                    function dext_editor_loaded_event(DEXT5Editor) {
                                        DEXT5.setBodyValue($("#pIntroTp").val(), DEXT5Editor.ID);
                                    }
                                </script>
                                <div id="dext_frame_holderpIntro" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                    <iframe
                                        frameborder="0"
                                        scrolling="no"
                                        id="dext_frame_pIntro"
                                        title="에디터 전체영역"
                                        width="100%"
                                        height="100%"
                                        style="width: 100%; height: 100%;"
                                        src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                    ></iframe>
                                    <div id="dext_resizebar_pIntro" class="DEXT_resizebar DEXT_resizebar_blue">
                                        <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_pIntro">
                                            <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_pIntro"></div>
                                            <button type="button" id="DEXT_resizebar_button_pIntro" title="에디터 높이 조절"></button>
                                        </div>
                                    </div>
                                </div>
                                <!--//editor-->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- //writeType03 -->
        </form>
    </div>
</section>

@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'delete')
@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'students')
<section class="rightCont">
    <div class="rightTitle">
        <h3>현강생 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActStudentModify('new');">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActStudentList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="searchForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="sName" value="" />
            <input type="hidden" name="sAge" value="" />
            <input type="hidden" name="sSex" value="" />
            <input type="hidden" name="birthdayM" value="" />
            <input type="hidden" name="birthdayD" value="" />
            <input type="hidden" name="sEmail" value="" />
            <input type="hidden" name="sTel" value="" />
            <input type="hidden" name="sHand" value="" />
            <input type="hidden" name="sAdd" value="" />
            <input type="hidden" name="readyExam" value="" />
            <input type="hidden" name="takeArea1" value="" />
            <input type="hidden" name="takeArea2" value="" />
            <input type="hidden" name="takeArea3" value="" />
            <input type="hidden" name="sGrade" value="" />
            <input type="hidden" name="sSchool" value="" />
            <input type="hidden" name="lectureSdate" value="" />
            <input type="hidden" name="lectureEdate" value="" />
            <input type="hidden" name="readyTime" value="" />
            <input type="hidden" name="sScore" value="" />
            <input type="hidden" name="eScore" value="" />
            <input type="hidden" name="examExp" value="" />
            <input type="hidden" name="diffSubject" value="" />
            <input type="hidden" name="planTime" value="" />
            <input type="hidden" name="sDifficulties" value="" />
            <input type="hidden" name="sStress" value="" />
            <input type="hidden" name="sPath" value="" />
            <input type="hidden" name="lectureExp" value="" />
            <input type="hidden" name="sOpinion" value="" />
            <input type="hidden" name="sRemark" value="" />
            <input type="hidden" name="searchSdt" value="" />
            <input type="hidden" name="searchEdt" value="" />
            <input type="hidden" name="sIdx" id="sIdx" value="" />
        </form>
        <form name="frmForm" id="frmForm" method="post" enctype="multipart/form-data" class="articleWrite">
            <input type="hidden" name="sIdx" id="sIdx" value="" />

            <!--기본정보-->
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 170px;" />
                        <col style="width: *;" />
                        <col style="width: 170px;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">이름</th>
                            <td>
                                <input type="text" name="sName" value="" class="req" title="이름을 입력해주세요." maxlength="10" />
                            </td>
                            <th scope="row" rowspan="6">사진</th>
                            <td rowspan="6">
                                <div>
                                    <input type="file" name="fileThum" />
                                    <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileReset(this);"><span>취소</span></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">성별</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="sSex" id="sex_m" value="M" /><label for="sex_m"><span></span>남</label> <input type="radio" name="sSex" id="sex_w" value="W" /><label for="sex_w"><span></span>여</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">생년월일</th>
                            <td>
                                <input type="text" name="sBirthday" value="" class="calendar edit hasDatepicker" title="생년월일을 입력해주세요." id="dp1604367662407" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">이메일</th>
                            <td>
                                <input type="text" name="sEmail" value="" class="" title="이메일 주소를 입력해주세요." maxlength="50" style="width: 230px;" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">전화번호</th>
                            <td>
                                <div class="for-phoneform tel" data-name="sTel" data-class="" data-attr=" title='전화번호를 입력해주세요.', title='전화번호를 입력해주세요.', title='전화번호를 입력해주세요.'" style="display: none;"></div>
                                <select class="fphone" name="sTel" title="전화번호를 입력해주세요.">
                                    <option value="02">02</option>
                                    <option value="051">051</option>
                                    <option value="053">053</option>
                                    <option value="032">032</option>
                                    <option value="062">062</option>
                                    <option value="042">042</option>
                                    <option value="052">052</option>
                                    <option value="044">044</option>
                                    <option value="031">031</option>
                                    <option value="033">033</option>
                                    <option value="043">043</option>
                                    <option value="041">041</option>
                                    <option value="063">063</option>
                                    <option value="061">061</option>
                                    <option value="054">054</option>
                                    <option value="055">055</option>
                                    <option value="064">064</option>
                                    <option value="060">060</option>
                                    <option value="070">070</option>
                                    <option value="080">080</option>
                                </select>
                                <span>-</span><input type="text" class="fphone" name="sTel" value="" maxlength="4" title="전화번호를 입력해주세요." /><span>-</span>
                                <input type="text" class="fphone" name="sTel" value="" maxlength="4" title="전화번호를 입력해주세요." />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">휴대폰</th>
                            <td>
                                <div
                                    class="for-phoneform mobile"
                                    data-name="sHand"
                                    data-class=""
                                    data-attr=" title='휴대폰번호를 입력해주세요.', title='휴대폰번호를 입력해주세요.', title='휴대폰번호를 입력해주세요.'"
                                    style="display: none;"
                                ></div>
                                <select class="fphone" name="sHand" title="휴대폰번호를 입력해주세요.">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                                <span>-</span><input type="text" class="fphone" name="sHand" value="" maxlength="4" title="휴대폰번호를 입력해주세요." /><span>-</span>
                                <input type="text" class="fphone" name="sHand" value="" maxlength="4" title="휴대폰번호를 입력해주세요." />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">주소</th>
                            <td class="addr" colspan="3">
                                <button type="button" class="commonBtn search_address">우편번호찾기</button> <input type="text" class="postcode" style="width: 70px;" name="sZip" value="" title="주소를 입력해주세요." readonly="readonly" />
                                <input type="text" class="addr1" name="sAdd1" value="" title="주소를 입력해주세요." readonly="readonly" style="width: 500px;" />
                                <input type="text" class="addr2" name="sAdd2" value="" title="주소를 입력해주세요." maxlength="100" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">준비하는 시험</th>
                            <td colspan="3">
                                <select name="readyExam" style="width: 180px;">
                                    <option value="">- 선택 -</option>

                                    <option value="LE00001">간호직 공무원</option>

                                    <option value="LE00002">보건직 공무원</option>

                                    <option value="LE00004">보건연구사</option>

                                    <option value="LE00005">보건복지부 공무원</option>

                                    <option value="LE00003">보건진료직 공무원</option>

                                    <option value="LE00006">의료기술직 공무원</option>

                                    <option value="LE00007">방역직 공무원</option>

                                    <option value="LE00010">식품위생직 공무원</option>

                                    <option value="LE00008">환경직 공무원</option>

                                    <option value="LE00009">환경연구사</option>

                                    <option value="LE00011">조리직 공무원</option>

                                    <option value="LE00012">영양교사</option>

                                    <option value="LE00013">보건교사</option>

                                    <option value="LE00016">영양사</option>

                                    <option value="LE00017">위생사</option>

                                    <option value="LE00015">간호사</option>

                                    <option value="LE00019">식품(산업)기사</option>

                                    <option value="LE00014">교육학</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">응시지역</th>
                            <td colspan="3">
                                1지망 <input type="text" name="takeArea1" value="" class="" title="1지망 응시지역을 입력해주세요." maxlength="50" /> 2지망
                                <input type="text" name="takeArea2" value="" class="" title="2지망 응시지역을 입력해주세요." maxlength="50" /> 3지망
                                <input type="text" name="takeArea3" value="" class="" title="3지망 응시지역을 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">학력</th>
                            <td>
                                <select name="sGrade" style="width: 180px;">
                                    <option value="">- 선택 -</option>
                                    <option value="11">고졸</option>
                                    <option value="12">전문대 재학중</option>
                                    <option value="13">전문대졸</option>
                                    <option value="14">대학 재학 중</option>
                                    <option value="15">대졸</option>
                                    <option value="16">대학원 재학 중</option>
                                    <option value="17">대학원 졸업</option>
                                </select>
                            </td>
                            <th scope="row">출신학교</th>
                            <td>
                                <input type="text" name="sSchool" value="" class="" title="출신학교를 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">현장강의 수강기간</th>
                            <td>
                                <input type="text" name="lectureSdate" value="" class="calendar hasDatepicker" title="시험준비기간 시작일을 입력해주세요." readonly="" id="dp1604367662408" /> ~
                                <input type="text" name="lectureEdate" value="" class="calendar hasDatepicker" title="시험준비기간 종료일을 입력해주세요." readonly="" id="dp1604367662409" />
                            </td>
                            <th scope="row">시험준비기간</th>
                            <td>
                                <input type="text" name="readyTime" value="" class="" title="시험준비기간을 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">소지가산점</th>
                            <td>
                                <input type="text" name="sScore" value="" class="" title="소지가산점을 입력해주세요." maxlength="50" />
                            </td>
                            <th scope="row">공무원 시험 응시경험</th>
                            <td>
                                <input type="text" name="examExp" value="" class="" title="공무원 시험 응시경험을 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">가장 어렵게 느끼는 과목</th>
                            <td>
                                <input type="text" name="diffSubject" value="" class="" title="가장 어렵게 느끼는 과목을 입력해주세요." maxlength="50" />
                            </td>
                            <th scope="row">공무원 시험 계획 기간</th>
                            <td>
                                <input type="text" name="planTime" value="" class="" title="공무원 시험 계획 기간을 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">공부하면서 가장 힘든점</th>
                            <td>
                                <input type="text" name="sDifficulties" value="" class="" title="공부하면서 가장 힘든점을 입력해주세요." maxlength="50" />
                            </td>
                            <th scope="row">나만의 스트레스 해소법</th>
                            <td>
                                <input type="text" name="sStress" value="" class="" title="나만의 스트레스 해소법을 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">본원을 알게 된 경로</th>
                            <td>
                                <input type="text" name="sPath" value="" class="" title="본원을 알게 된 경로를 입력해주세요." maxlength="50" />
                            </td>
                            <th scope="row">타강의 수강 경험</th>
                            <td>
                                <input type="text" name="lectureExp" value="" class="" title="타강의 수강 경험을 입력해주세요." maxlength="50" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">학원에 하고싶은 말</th>
                            <td colspan="3">
                                <textarea name="sOpinion" style="height: 80px;"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">비고</th>
                            <td colspan="3">
                                <textarea name="sRemark" style="height: 80px;"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <!--//기본정보-->

            <!-- //writeType03 -->
        </form>
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'video_qa')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상강의 Q&amp;A</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0009" />

            <input type="hidden" name="repYn" value="Y" />
            <input type="hidden" name="fileYn" value="" />
            <input type="hidden" name="fileCnt" value="0" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    동영상강의 Q&amp;A 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서점 Q&amp;A</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0010" />

            <input type="hidden" name="repYn" value="Y" />
            <input type="hidden" name="fileYn" value="" />
            <input type="hidden" name="fileCnt" value="0" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    서점 Q&amp;A 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'one')
<section class="rightCont">
    <div class="rightTitle">
        <h3>1:1문의</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0011" />

            <input type="hidden" name="repYn" value="Y" />
            <input type="hidden" name="fileYn" value="" />
            <input type="hidden" name="fileCnt" value="0" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    1:1문의 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>카테고리</strong></th>
                        <td colspan="3">
                            <div style="width: 250px; float: left; display: inline;">
                                <select name="nttCat" id="nttCat">
                                    <option value="">선택</option>

                                    <option value="11">동영상강의문의</option>

                                    <option value="12">학원강의문의</option>

                                    <option value="13">인터넷서점문의</option>

                                    <option value="14">교재문의</option>

                                    <option value="15">사이트이용문의</option>

                                    <option value="16">주문/결제문의</option>

                                    <option value="17">배송문의</option>

                                    <option value="18">취소/환불문의</option>

                                    <option value="19">회원정보문의</option>

                                    <option value="20">기타문의</option>

                                    <option value="21">탈퇴신청</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'free')
<section class="rightCont">
    <div class="rightTitle">
        <h3>자유게시판</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0012" />

            <input type="hidden" name="repYn" value="Y" />
            <input type="hidden" name="fileYn" value="" />
            <input type="hidden" name="fileCnt" value="0" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    자유게시판 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'video_learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 학습 게시판</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0013" />

            <input type="hidden" name="repYn" value="Y" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    동영상 학습 게시판 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th>강의명</th>
                        <td colspan="3">
                            <select name="nttCat" id="nttCat" style="width: 50%;">
                                <option value="">선택</option>

                                <option value="8074">2021 영양교사 실전모의고사 (김)</option>

                                <option value="8073">2021 영양교사 실전모의고사 (이)</option>

                                <option value="8072">2021 영양교사 실전모의고사 (최)</option>

                                <option value="8071">화질 테스트 전용</option>

                                <option value="8070">2021 식품위생 이론 및 심화완성</option>

                                <option value="8069">2021 하이스코어 공무원 생물 (심화반)</option>

                                <option value="8068">2021 지역사회간호 (정규이론반)</option>

                                <option value="8067">2021 간호관리 (정규이론반)</option>

                                <option value="8066">보건연구사 역학 및 보건행정 (최신판)</option>

                                <option value="8065">2021 이승훈 환경보건 (정규이론반)</option>

                                <option value="8064">2021 보건행정 (정규이론반)</option>

                                <option value="8063">2021 이승훈 공중보건 (정규이론반)</option>

                                <option value="8062">2021 김희영 공중보건 (정규이론반)</option>

                                <option value="8061">2021 한국사 (정규이론반)</option>

                                <option value="8060">2021 영어 (정규이론반)</option>

                                <option value="8059">2021 국어 (정규이론반)</option>

                                <option value="8058">2021 환경공학 실전 모의고사</option>

                                <option value="8056">2021 식품위생 실전 모의고사</option>

                                <option value="8057">2021 환경공학 기출분석 및 단원별 문제특강</option>

                                <option value="8055">2021 식품위생 기출분석 및 단원별 문제특강</option>

                                <option value="8053">2021 화학 기출분석 및 단원별 문제특강</option>

                                <option value="8054">2021 화학 실전 모의고사</option>

                                <option value="8052">2021 지역사회간호 실전 모의고사</option>

                                <option value="8050">2021 간호관리 실전 모의고사</option>

                                <option value="8051">2021 지역사회간호 기출분석 및 단원별 문제특강</option>

                                <option value="8049">2021 간호관리 기출분석 및 단원별 문제특강</option>

                                <option value="8048">2021 생물 실전 모의고사</option>

                                <option value="8047">2021 생물 기출분석 및 단원별 문제특강</option>

                                <option value="8045">2021 보건행정 기출분석 및 단원별 문제특강</option>

                                <option value="8046">2021 보건행정 실전 모의고사</option>

                                <option value="8044">2021 공중보건 실전 모의고사</option>

                                <option value="8043">2021 공중보건 기출분석 및 단원별 문제특강</option>

                                <option value="8041">2021 한국사 기출분석 및 단원별 문제특강</option>

                                <option value="8042">2021 한국사 실전 모의고사</option>

                                <option value="8040">2021 영어 실전 모의고사</option>

                                <option value="8039">2021 영어 기출분석 및 단원별 문제특강</option>

                                <option value="8038">2021 국어 실전 모의고사</option>

                                <option value="8037">2021 국어 기출분석 및 단원별 문제특강</option>

                                <option value="8036">2021 김희영 전공보건 영역별 문제풀이반</option>

                                <option value="8035">2021 오정화 전공보건 영역별 문제풀이반</option>

                                <option value="8034">[2021 문제] 고급영양학 및 생리,생화학</option>

                                <option value="8033">[2021 문제] 단체급식 및 실습</option>

                                <option value="8032">[2021 문제] 식품위생학</option>

                                <option value="8031">[2021 문제] 조리원리 및 실습</option>

                                <option value="8030">[2021 문제] 식품학</option>

                                <option value="8028">[2021 문제] 생애주기영양학</option>

                                <option value="8029">[2021 문제] 식사요법 및 실습</option>

                                <option value="8027">[2021 문제] 영양판정 및 영양교육</option>

                                <option value="8026">2020 공무원 생물 일일 특강</option>

                                <option value="8025">(42회 위생사 합격) 공중보건학, 위생관계법규</option>

                                <option value="8024">(42회 위생사 합격) 식품위생학</option>

                                <option value="8023">(42회 위생사 합격) 환경위생학, 위생곤충학</option>

                                <option value="8022">(44회 영양사) 식품학 이론 및 문제</option>

                                <option value="8021">(44회 영양사) 조리원리 이론 및 문제</option>

                                <option value="8020">(44회 영양사) 단체급식 이론 및 문제</option>

                                <option value="8017">(44회 영양사) 식사요법 이론 및 문제</option>

                                <option value="8016">(44회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="8015">(44회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="8014">(44회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="8013">(44회 영양사) 영양학 이론 및 문제</option>

                                <option value="8012">생물 봉투 모의고사 특강</option>

                                <option value="8011">박동현 9급공무원영어 기본완성</option>

                                <option value="8010">(2021) 고급영양학 및 생리,생화학</option>

                                <option value="8009">(2021) 식품위생학</option>

                                <option value="8008">(2021) 단체급식 및 실습</option>

                                <option value="8007">(2021) 조리원리 및 실습</option>

                                <option value="8005">(2021) 식사요법 및 실습</option>

                                <option value="8006">(2021) 식품학</option>

                                <option value="8004">(2021) 생애주기영양학</option>

                                <option value="8003">(2021) 영양판정 및 영양교육</option>

                                <option value="8002">신경향 식품화학개론 실전 모의고사반</option>

                                <option value="8001">2020 의료관계법규 이론 및 문제완성반</option>

                                <option value="8000">신경향 식품화학개론 기출 및 단원별 문제완성</option>

                                <option value="7999">평혜림 환경공학 이론완성 단과반 [소음진동 및 폐기물편]</option>

                                <option value="7998">평혜림 환경공학 이론완성 단과반 [대기편]</option>

                                <option value="7997">평혜림 환경공학 이론완성 단과반 [수질편]</option>

                                <option value="7996">2021 오정화 전공보건 이론 및 심화 및 기출분석 2</option>

                                <option value="7988">이경연 교수의 식품화학개론 최신 이론완성반</option>

                                <option value="7987">공무원 환경보건 최신 문제풀이 완성반</option>

                                <option value="7986">보건교사 임용대비 마인드맵1</option>

                                <option value="7985">보건교사 임용대비 마인드맵</option>

                                <option value="7984">2021 오정화 전공보건 이론 및 심화 및 기출분석 1</option>

                                <option value="7983">2021 김희영 전공보건 이론 및 심화 및 기출분석</option>

                                <option value="7982">2020 영양교사 실전모의고사 (김)</option>

                                <option value="7981">2020 영양교사 실전모의고사 (이)</option>

                                <option value="7980">2020 영양교사 실전모의고사 (최)</option>

                                <option value="7979">환경보건 최신 이론완성반 [현재 교재 품절]</option>

                                <option value="7977">2020 환경공학 단원별 문제완성</option>

                                <option value="7978">2020 환경공학 실전 모의고사</option>

                                <option value="7976">2020 환경공학 기출문제 분석특강</option>

                                <option value="7974">2020 생물 단원별 문제완성</option>

                                <option value="7975">2020 생물 실전 모의고사</option>

                                <option value="7973">2020 생물 기출문제 분석특강</option>

                                <option value="7972">2020 하이스코어 생물 (심화반)</option>

                                <option value="7971">최신 하이탑 생명과학 [공무원생물 이론완성]</option>

                                <option value="7970">2020 지역사회간호 실전 모의고사</option>

                                <option value="7968">2020 지역사회간호 기출문제 분석특강</option>

                                <option value="7969">2020 지역사회간호 단원별 문제완성</option>

                                <option value="7967">2020 지역사회간호학 (정규이론반)</option>

                                <option value="7966">2020 간호관리 실전 모의고사</option>

                                <option value="7965">2020 간호관리 단원별 문제완성</option>

                                <option value="7964">2020 간호관리 기출문제 분석특강</option>

                                <option value="7963">2020 간호관리학 (정규이론반)</option>

                                <option value="7962">평혜림 환경공학 이론완성 2 [소음진동 및 폐기물]</option>

                                <option value="7961">평혜림 환경공학 이론완성 1 [수질,대기]</option>

                                <option value="7960">2020 식품위생 실전 모의고사반</option>

                                <option value="7959">2020 식품위생 기출 및 단원별 문제풀이</option>

                                <option value="7958">2020 김지연 식품위생 (정규이론반)</option>

                                <option value="7957">2020 화학 실전 모의고사</option>

                                <option value="7956">2020 화학 단원별 문제완성</option>

                                <option value="7955">2020 화학 기출문제 분석특강</option>

                                <option value="7954">강두수 공무원 화학 [정규이론반]</option>

                                <option value="7953">2020 이승훈 공중보건 (정규이론반)</option>

                                <option value="7952">NEW 한국 근현대사 특강</option>

                                <option value="7951">2020 한국사 실전 모의고사</option>

                                <option value="7950">2020 한국사 단원별 문제완성</option>

                                <option value="7948">2020 한국사 (정규이론반)</option>

                                <option value="7949">2020 한국사 기출문제 분석특강</option>

                                <option value="7947">2020 박동현 영어 문제풀이 3탄</option>

                                <option value="7945">2020 박동현 영어 문제풀이 1탄</option>

                                <option value="7946">2020 박동현 영어 문제풀이 2탄</option>

                                <option value="7944">2020 영어 실전 모의고사</option>

                                <option value="7942">2020 영어 단원별 문제완성</option>

                                <option value="7941">2020 영어 기출문제 분석특강</option>

                                <option value="7940">2020 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7939">2020 국어 실전 모의고사</option>

                                <option value="7937">2020 국어 기출문제 분석특강</option>

                                <option value="7938">2020 국어 단원별 문제완성</option>

                                <option value="7936">2020 국어 (정규이론반)</option>

                                <option value="7935">2020 보건행정 실전 모의고사</option>

                                <option value="7934">2020 보건행정 단원별 문제완성</option>

                                <option value="7933">2020 보건행정 기출문제 분석특강</option>

                                <option value="7931">2020 공중보건 단원별 문제완성</option>

                                <option value="7932">2020 공중보건 실전 모의고사</option>

                                <option value="7930">2020 공중보건 기출문제 분석특강</option>

                                <option value="7929">2020 김희영 보건행정 (정규이론반)</option>

                                <option value="7928">2020 김희영 공중보건 (정규이론반)</option>

                                <option value="7927">[2020 문제] 고급영양학 및 생리,생화학</option>

                                <option value="7925">[2020 문제] 단체급식 및 실습</option>

                                <option value="7926">[2020 문제] 식품위생학</option>

                                <option value="7924">[2020 문제] 조리원리 및 실습</option>

                                <option value="7923">[2020 문제] 식품학</option>

                                <option value="7922">[2020 문제] 식사요법 및 실습</option>

                                <option value="7921">[2020 문제] 생애주기영양학</option>

                                <option value="7920">[2020 문제] 영양판정 및 영양교육</option>

                                <option value="7919">간호사 합격 최종 마무리 문제풀이 [노성신 교수]</option>

                                <option value="7917">간호사 합격 최종 마무리 문제풀이 [김희영 교수]</option>

                                <option value="7918">간호사 합격 최종 마무리 문제풀이 [오정화 교수]</option>

                                <option value="7916">[간호사 합격] 보건의약관계법규 이론 및 문제완성</option>

                                <option value="7915">[간호사 합격] 기본간호학 이론 및 문제완성</option>

                                <option value="7914">[간호사 합격] 간호관리학 이론 및 문제완성</option>

                                <option value="7913">[간호사 합격] 정신간호학 이론 및 문제완성</option>

                                <option value="7912">[간호사 합격] 지역사회간호학 이론 및 문제완성</option>

                                <option value="7911">[간호사 합격] 아동간호학 이론 및 문제완성</option>

                                <option value="7910">[간호사 합격] 모성간호학 이론 및 문제완성</option>

                                <option value="7909">[간호사 합격] 성인간호학 이론 및 문제완성</option>

                                <option value="7908">2020 노성신 전공보건 영역별 집중 문제풀이반</option>

                                <option value="7907">2020 오정화 전공보건 영역별 집중 문제풀이반</option>

                                <option value="7906">2020 김희영 전공보건 영역별 집중 문제풀이반</option>

                                <option value="7905">(2019 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7904">(2019 위생사) 식품위생학</option>

                                <option value="7903">(2019 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7902">감염의료관계법규 총정리 문제특강</option>

                                <option value="7901">행정법 총정리 문제특강</option>

                                <option value="7900">보건의료관계법규 총정리 문제특강</option>

                                <option value="7899">(44회 영양사) 조리원리 모의고사</option>

                                <option value="7898">(44회 영양사) 식품학 모의고사</option>

                                <option value="7897">(44회 영양사) 단체급식 모의고사</option>

                                <option value="7896">(44회 영양사) 식사요법 모의고사</option>

                                <option value="7895">(44회 영양사) 영양교육 및 식품위생관계법규 모의고사</option>

                                <option value="7894">(44회 영양사) 식품위생학 모의고사</option>

                                <option value="7893">(44회 영양사) 생리학 및 생화학 모의고사</option>

                                <option value="7892">(44회 영양사) 영양학 모의고사</option>

                                <option value="7891">(43회 영양사) 조리원리 이론 및 문제</option>

                                <option value="7890">(43회 영양사) 식품학 이론 및 문제</option>

                                <option value="7889">(43회 영양사) 단체급식 이론 및 문제</option>

                                <option value="7888">(43회 영양사) 식사요법 이론 및 문제</option>

                                <option value="7887">(43회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7886">(43회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7885">(43회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7884">(43회 영양사) 영양학 이론 및 문제</option>

                                <option value="7883">공무원 생물 기출 700제 특강</option>

                                <option value="7882">(2020) 고급영양학 및 생리,생화학</option>

                                <option value="7881">(2020) 식품위생학</option>

                                <option value="7880">(2020) 단체급식 및 실습</option>

                                <option value="7879">(2020) 조리원리 및 실습</option>

                                <option value="7878">(2020) 식품학</option>

                                <option value="7877">(2020) 식사요법 및 실습</option>

                                <option value="7876">(2020) 생애주기영양학</option>

                                <option value="7875">(2020) 영양판정 및 영양교육</option>

                                <option value="7874">2019 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7873">[지역사회간호] 서울시 동형 모의고사</option>

                                <option value="7872">[간호관리] 서울시 동형 모의고사</option>

                                <option value="7871">[생물] 서울시 동형 모의고사</option>

                                <option value="7870">2019 하이스코어 생물 (심화반)</option>

                                <option value="7869">박동현 교수의 8,9급 영어 기본독해</option>

                                <option value="7868">2020 노성신 전공보건 이론완성 및 기출분석</option>

                                <option value="7867">2020 오정화 전공보건 이론완성 및 기출분석</option>

                                <option value="7866">2020 김희영 전공보건 이론완성 및 기출분석</option>

                                <option value="7864">공무원 면접 필수 특강</option>

                                <option value="7863">2019 영양교사 실전모의고사 (김)</option>

                                <option value="7862">2019 영양교사 실전모의고사 (이)</option>

                                <option value="7861">2019 영양교사 실전모의고사 (최)</option>

                                <option value="7860">하이탑 생명과학 [공무원생물 이론완성]</option>

                                <option value="7859">환경화학 이론완성 [연구사,7급대비]</option>

                                <option value="7858">NEW 공중보건 심화이론 특강</option>

                                <option value="7857">2019 보건행정 실전 모의고사</option>

                                <option value="7856">2019 보건행정 단원별 문제완성</option>

                                <option value="7855">2019 보건행정 기출문제 분석특강</option>

                                <option value="7854">2019 보건행정 (정규이론반)</option>

                                <option value="7853">2019 공중보건 실전 모의고사</option>

                                <option value="7852">2019 공중보건 단원별 문제완성</option>

                                <option value="7851">2019 공중보건 기출문제 분석특강</option>

                                <option value="7850">2019 이승훈 공중보건 (정규이론반)</option>

                                <option value="7849">2019 김희영 공중보건 (정규이론반)</option>

                                <option value="7848">2019 환경공학 실전 모의고사</option>

                                <option value="7847">2019 환경공학 단원별 문제완성</option>

                                <option value="7846">2019 환경공학 기출문제 분석특강</option>

                                <option value="7845">2019 생물 실전 모의고사</option>

                                <option value="7844">2019 생물 단원별 문제완성</option>

                                <option value="7843">2019 생물 기출문제 분석특강</option>

                                <option value="7842">2019 지역사회간호 실전 모의고사</option>

                                <option value="7841">2019 지역사회간호 단원별 문제완성</option>

                                <option value="7840">2019 지역사회간호 기출문제 분석특강</option>

                                <option value="7839">2019 간호관리 실전 모의고사</option>

                                <option value="7838">2019 간호관리 단원별 문제완성</option>

                                <option value="7837">2019 간호관리 기출문제 분석특강</option>

                                <option value="7836">2019 한국사 실전 모의고사</option>

                                <option value="7835">2019 한국사 단원별 문제완성</option>

                                <option value="7834">2019 한국사 기출문제 분석특강</option>

                                <option value="7833">박동현 영어 문제풀이 3탄</option>

                                <option value="7832">박동현 영어 문제풀이 2탄</option>

                                <option value="7831">박동현 영어 문제풀이 1탄</option>

                                <option value="7830">2019 영어 실전 모의고사</option>

                                <option value="7829">2019 영어 단원별 문제완성</option>

                                <option value="7828">2019 영어 기출문제 분석특강</option>

                                <option value="7827">2019 국어 실전 모의고사</option>

                                <option value="7826">2019 국어 단원별 문제완성</option>

                                <option value="7825">2019 국어 기출문제 분석특강</option>

                                <option value="7824">2019 한국사 (정규이론반)</option>

                                <option value="7823">2019 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7822">2019 국어 (정규이론반)</option>

                                <option value="7821">이경연 식품화학개론 실전 모의고사</option>

                                <option value="7820">이경연 식품화학개론 기출 및 단원별 문제풀이</option>

                                <option value="7818">이경연 식품화학개론 이론완성반</option>

                                <option value="7817">2019 식품위생 실전 모의고사반</option>

                                <option value="7816">2019 식품위생 기출 및 단원별 문제풀이</option>

                                <option value="7815">2019 화학 실전 모의고사</option>

                                <option value="7814">2019 화학 단원별 문제완성</option>

                                <option value="7813">2019 화학 기출문제 분석특강</option>

                                <option value="7812">2019 식품위생 꼼꼼한 이론완성반</option>

                                <option value="7811">보건연구사 역학 완성반</option>

                                <option value="7810">(2019 문제) 고급영양학</option>

                                <option value="7809">(2019 문제) 식품위생학</option>

                                <option value="7808">(2019 문제) 단체급식 및 실습</option>

                                <option value="7807">(2019 문제) 조리원리 및 실습</option>

                                <option value="7806">(2019 문제) 식품학</option>

                                <option value="7805">(2019 문제) 식사요법 및 실습</option>

                                <option value="7804">(2019 문제) 영양판정 및 영양교육</option>

                                <option value="7803">(2019 문제) 생애주기영양학</option>

                                <option value="7802">[59회 간호사] 보건의약관계법규 모의고사</option>

                                <option value="7801">[59회 간호사] 기본간호학 모의고사</option>

                                <option value="7800">[59회 간호사] 간호관리학 모의고사</option>

                                <option value="7799">[59회 간호사] 정신간호학 모의고사</option>

                                <option value="7798">[59회 간호사] 지역사회간호학 모의고사</option>

                                <option value="7797">[59회 간호사] 아동간호학 모의고사</option>

                                <option value="7796">[59회 간호사] 모성간호학 모의고사</option>

                                <option value="7795">59회 간호사 최종 마무리 문제풀이 [노성신 교수]</option>

                                <option value="7794">(59회 간호사) 보건의약관계법규 이론 및 문제</option>

                                <option value="7793">(59회 간호사) 기본간호학 이론 및 문제</option>

                                <option value="7792">(59회 간호사) 간호관리학 이론 및 문제</option>

                                <option value="7791">(59회 간호사) 정신간호학 이론 및 문제</option>

                                <option value="7790">(59회 간호사) 지역사회간호학 이론 및 문제</option>

                                <option value="7789">(59회 간호사) 아동간호학 이론 및 문제</option>

                                <option value="7788">(59회 간호사) 모성간호학 이론 및 문제</option>

                                <option value="7787">(59회 간호사) 성인간호학 이론 및 문제</option>

                                <option value="7786">2019 지역사회간호학 (정규이론반)</option>

                                <option value="7785">2019 간호관리학 (정규이론반)</option>

                                <option value="7784">캠벨 생명과학 요점과 문제풀이 [공무원생물]</option>

                                <option value="7783">(2018 위생사) 식품위생학</option>

                                <option value="7782">(2018 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7781">(2018 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7780">박동현 9급 영어 [기본 완성편]</option>

                                <option value="7779">STP 공무원 화학 [이론완성반]</option>

                                <option value="7778">공무원 생물 수능형 문제완성 특강</option>

                                <option value="7777">환경보건 문제풀이 완성</option>

                                <option value="7776">(42회 영양사) 조리원리 이론 및 문제</option>

                                <option value="7775">(42회 영양사) 식품학 이론 및 문제</option>

                                <option value="7774">(42회 영양사) 단체급식 이론 및 문제</option>

                                <option value="7773">(42회 영양사) 식사요법 이론 및 문제</option>

                                <option value="7772">(42회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7771">(42회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7770">(42회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7769">(42회 영양사) 영양학 이론 및 문제</option>

                                <option value="7764">이승훈 교수의 환경보건 이론완성반</option>

                                <option value="7763">(2019) 고급영양학</option>

                                <option value="7762">(2019) 식품위생학</option>

                                <option value="7761">(2019) 단체급식 및 실습</option>

                                <option value="7760">(2019) 조리원리 및 실습</option>

                                <option value="7759">(2019) 식품학</option>

                                <option value="7758">(2019) 식사요법 및 실습</option>

                                <option value="7757">(2019) 영양판정 및 영양교육</option>

                                <option value="7756">(2019) 생애주기영양학</option>

                                <option value="7755">2018 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7754">쉽게 배우는 한국사 실력향상 문제특강</option>

                                <option value="7753">[심화] 국어실력 수직상승 문제정리</option>

                                <option value="7752">공무원 사회 핵심이론 및 문제완성</option>

                                <option value="7751">위생관계법규 핵심이론 및 문제완성</option>

                                <option value="7750">강의 보강</option>

                                <option value="7749">공무원 면접특강 (기본완성)</option>

                                <option value="7748">2018 환경공학 실전 모의고사</option>

                                <option value="7747">2018 환경공학 단원별 문제완성</option>

                                <option value="7746">2018 환경공학 기출문제 분석특강</option>

                                <option value="7745">2018 식품위생 실전 모의고사반</option>

                                <option value="7744">2018 식품위생 기출 및 단원별 문제풀이</option>

                                <option value="7743">2018 화학 실전 모의고사</option>

                                <option value="7742">2018 화학 단원별 문제완성</option>

                                <option value="7741">2018 화학 기출문제 분석특강</option>

                                <option value="7740">2018 식품위생 꼼꼼한 이론완성반</option>

                                <option value="7739">공무원 화학 생기초 완성반</option>

                                <option value="7738">2018 보건행정 실전 모의고사</option>

                                <option value="7737">2018 보건행정 단원별 문제완성</option>

                                <option value="7736">2018 보건행정 기출문제 분석특강</option>

                                <option value="7735">2018 보건행정 (정규이론반)</option>

                                <option value="7734">2018 공중보건 실전 모의고사</option>

                                <option value="7733">2018 공중보건 단원별 문제완성</option>

                                <option value="7732">2018 공중보건 기출문제 분석특강</option>

                                <option value="7731">2018 이승훈 공중보건 (정규이론반)</option>

                                <option value="7730">2018 김희영 공중보건 (정규이론반)</option>

                                <option value="7729">2018 한국사 실전 모의고사</option>

                                <option value="7728">2018 한국사 단원별 문제완성</option>

                                <option value="7727">2018 한국사 기출문제 분석특강</option>

                                <option value="7726">2018 한국사 (정규이론반)</option>

                                <option value="7725">2018 영어(박) 동형 모의고사</option>

                                <option value="7724">2018 영어(임) 단원별 문제완성</option>

                                <option value="7723">2018 영어(임) 기출문제 분석특강</option>

                                <option value="7722">2018 영어(오) 실전 모의고사</option>

                                <option value="7721">2018 영어(오) 단원별 문제완성</option>

                                <option value="7720">2018 영어(오) 기출문제 분석특강</option>

                                <option value="7719">2018 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7718">2018 국어 실전 모의고사</option>

                                <option value="7717">2018 국어 단원별 문제완성</option>

                                <option value="7716">2018 국어 기출문제 분석특강</option>

                                <option value="7715">2018 국어 (정규이론반)</option>

                                <option value="7714">2018 지역사회간호 실전 모의고사</option>

                                <option value="7713">2018 지역사회간호 단원별 문제완성</option>

                                <option value="7712">2018 지역사회간호 기출문제 분석특강</option>

                                <option value="7711">2018 간호관리 실전 모의고사</option>

                                <option value="7708">2018 간호관리 단원별 문제완성</option>

                                <option value="7707">2018 간호관리 기출문제 분석특강</option>

                                <option value="7706">2018 생물 실전 모의고사</option>

                                <option value="7705">2018 생물 단원별 문제완성</option>

                                <option value="7704">2018 생물 기출문제 분석특강</option>

                                <option value="7703">2018 하이스코어 생물 (심화반)</option>

                                <option value="7702">2018 지역사회간호학 (정규이론반)</option>

                                <option value="7701">2018 간호관리학 (정규이론반)</option>

                                <option value="7700">2018 최정환 공무원 생물 (이론완성반)</option>

                                <option value="7699">공무원 생물 기초탄탄 완성반</option>

                                <option value="7697">(2018 문제) 식품위생학</option>

                                <option value="7696">(2018 문제) 단체급식 및 실습</option>

                                <option value="7695">(2018 문제) 조리원리 및 실습</option>

                                <option value="7694">(2018 문제) 식품학</option>

                                <option value="7693">(2018 문제) 식사요법 및 실습</option>

                                <option value="7692">(2018 문제) 영양판정 및 영양교육</option>

                                <option value="7691">(2018 문제) 생애주기영양학</option>

                                <option value="7690">[58회 간호사] 보건의약관계법규 모의고사</option>

                                <option value="7689">[58회 간호사] 기본간호학 모의고사</option>

                                <option value="7688">[58회 간호사] 간호관리학 모의고사</option>

                                <option value="7687">[58회 간호사] 정신간호학 모의고사</option>

                                <option value="7686">[58회 간호사] 지역사회간호학 모의고사</option>

                                <option value="7685">[58회 간호사] 아동간호학 모의고사</option>

                                <option value="7684">[58회 간호사] 여성건강간호학 모의고사</option>

                                <option value="7683">[58회 간호사] 성인간호학 모의고사</option>

                                <option value="7682">(58회 간호사) 보건의약관계법규 이론 및 문제</option>

                                <option value="7681">(58회 간호사) 기본간호학 이론 및 문제</option>

                                <option value="7680">(58회 간호사) 간호관리학 이론 및 문제</option>

                                <option value="7679">(58회 간호사) 정신간호학 이론 및 문제</option>

                                <option value="7678">(58회 간호사) 지역사회간호학 이론 및 문제</option>

                                <option value="7677">(58회 간호사) 아동간호학 이론 및 문제</option>

                                <option value="7676">(58회 간호사) 여성건강간호학 이론 및 문제</option>

                                <option value="7675">(58회 간호사) 성인간호학 이론 및 문제</option>

                                <option value="7674">2018 기초 간호과학 (연세대 대비반)</option>

                                <option value="7673">2018 간호학 개론 (연세대 대비반)</option>

                                <option value="7672">2018 연세대학교 RN-BSN 안내 및 강의계획</option>

                                <option value="7671">조리원리 모의고사</option>

                                <option value="7670">식품학 모의고사</option>

                                <option value="7669">단체급식 모의고사</option>

                                <option value="7668">식사요법 모의고사</option>

                                <option value="7666">영양교육 및 식품위생관계법규 모의고사</option>

                                <option value="7665">식품위생학 모의고사</option>

                                <option value="7664">생리학 및 생화학 모의고사</option>

                                <option value="7663">영양학 모의고사</option>

                                <option value="7662">(41회 영양사) 조리원리 이론 및 문제</option>

                                <option value="7661">(41회 영양사) 식품학 이론 및 문제</option>

                                <option value="7660">(41회 영양사) 단체급식 이론 및 문제</option>

                                <option value="7659">(41회 영양사) 식사요법 이론 및 문제</option>

                                <option value="7658">(41회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7657">(41회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7656">(41회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7655">(41회 영양사) 영양학 이론 및 문제</option>

                                <option value="7654">(2017 위생사) 식품위생학</option>

                                <option value="7653">(2017 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7652">(2017 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7651">캠벨 생명과학 심화 문제풀이 [공무원생물]</option>

                                <option value="7650">이승훈 교수의 환경보건 이론 및 문제 완성반</option>

                                <option value="7649">2017 보건행정 법규 총정리 특강</option>

                                <option value="7648">(2018) 식품위생학</option>

                                <option value="7647">(2018) 단체급식 및 실습</option>

                                <option value="7646">(2018) 조리원리 및 실습</option>

                                <option value="7645">(2018) 식품학</option>

                                <option value="7644">(2018) 식사요법 및 실습</option>

                                <option value="7643">(2018) 영양판정 및 영양교육</option>

                                <option value="7642">(2018) 생애주기영양학</option>

                                <option value="7641">2017 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7640">감염의료관계법규 총정리 문제풀이</option>

                                <option value="7639">보건의료관계법규 총정리 문제특강</option>

                                <option value="7638">행정법 통합 문제풀이</option>

                                <option value="7637">2017 환경공학 실전 모의고사</option>

                                <option value="7636">2017 환경공학 단원별 문제완성</option>

                                <option value="7635">2017 환경공학 기출문제 분석특강</option>

                                <option value="7634">2017 식품위생 실전 모의고사반</option>

                                <option value="7633">2017 공무원 화학 실전 모의고사</option>

                                <option value="7632">2017 지역사회간호 실전 모의고사</option>

                                <option value="7631">2017 지역사회간호 단원별 문제완성</option>

                                <option value="7630">2017 지역사회간호 기출문제 분석특강</option>

                                <option value="7629">2017 간호관리 실전 모의고사</option>

                                <option value="7628">2017 간호관리 단원별 문제완성</option>

                                <option value="7627">2017 간호관리 기출문제 분석특강</option>

                                <option value="7626">2017 생물 실전 모의고사</option>

                                <option value="7625">2017 생물 단원별 문제완성</option>

                                <option value="7624">2017 생물 기출문제 분석특강</option>

                                <option value="7623">2017 보건행정 실전 모의고사</option>

                                <option value="7622">2017 보건행정 단원별 문제완성</option>

                                <option value="7621">2017 보건행정 기출문제 분석특강</option>

                                <option value="7620">2017 공중보건 실전 모의고사</option>

                                <option value="7619">2017 공중보건 단원별 문제완성</option>

                                <option value="7618">2017 공중보건 기출문제 분석특강</option>

                                <option value="7617">2017 한국사 실전 모의고사</option>

                                <option value="7616">2017 한국사 단원별 문제완성</option>

                                <option value="7615">2017 한국사 기출문제 분석특강</option>

                                <option value="7614">2017 영어(임) 실전 모의고사</option>

                                <option value="7613">2017 영어(오) 실전 모의고사</option>

                                <option value="7612">2017 영어(임) 단원별 문제완성</option>

                                <option value="7611">2017 영어(오) 단원별 문제완성</option>

                                <option value="7610">2017 영어(임) 기출문제 분석특강</option>

                                <option value="7609">2017 영어(오) 기출문제 분석특강</option>

                                <option value="7608">2017 국어 실전 모의고사</option>

                                <option value="7607">2017 국어 단원별 문제완성</option>

                                <option value="7606">2017 국어 기출문제 분석특강</option>

                                <option value="7605">2017 공무원 화학 단원별 문제완성</option>

                                <option value="7604">근현대사 집중 문제완성반</option>

                                <option value="7603">[2017] 보건의약관계법규 모의고사</option>

                                <option value="7602">[2017] 기본간호학 모의고사</option>

                                <option value="7601">[2017] 간호관리학 모의고사</option>

                                <option value="7600">[2017] 정신간호학 모의고사</option>

                                <option value="7599">[2017] 지역사회간호학 모의고사</option>

                                <option value="7598">[2017] 아동간호학 모의고사</option>

                                <option value="7597">[2017] 모성간호학 모의고사</option>

                                <option value="7596">[2017] 성인간호학 모의고사</option>

                                <option value="7595">기출문제로 배우는 공무원 생물</option>

                                <option value="7594">공중보건 FAQ 특강</option>

                                <option value="7593">2017 식품위생 기출 + 단원별 문제풀이</option>

                                <option value="7592">2017 공무원 화학 기출문제 분석특강</option>

                                <option value="7591">공무원 영어 3개년 기출 및 출제예상 집중분석</option>

                                <option value="7588">꼭 체크해야할 식품미생물 문제풀이</option>

                                <option value="7587">[국어 심화] 단원별로 정리하는 주요 기출 및 예상 문제</option>

                                <option value="7586">2017 하이스코어 생물 (심화반)</option>

                                <option value="7585">한국 근현대사 특강</option>

                                <option value="7584">이승훈 교수의 식품미생물 이론완성반</option>

                                <option value="7583">평혜림 new 환경공학 (소음진동 및 폐기물)</option>

                                <option value="7582">평혜림 new 환경공학 (대기편)</option>

                                <option value="7581">평혜림 new 환경공학 (수질편)</option>

                                <option value="7580">2017 보건행정 (정규이론반)</option>

                                <option value="7579">2017 이승훈 공중보건 (정규이론반)</option>

                                <option value="7578">2017 김희영 공중보건 (정규이론반)</option>

                                <option value="7577">역학 이론 및 문제완성반</option>

                                <option value="7576">2017 한국사 (정규이론반)</option>

                                <option value="7575">2017 국어 (정규이론반)</option>

                                <option value="7574">2017 식품위생 꼼꼼한 이론완성반</option>

                                <option value="7573">재생 테스트 전용</option>

                                <option value="7572">임장빈 영어 new 기초문법 및 독해</option>

                                <option value="7571">공무원 면접특강</option>

                                <option value="7570">2017 지역사회간호학 (정규이론반)</option>

                                <option value="7569">2017 간호관리학 (정규이론반)</option>

                                <option value="7568">2017 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7567">2017 최정환 공무원 생물 (이론완성반)</option>

                                <option value="7566">(2017 간호사) 보건의약관계법규</option>

                                <option value="7565">(2017 간호사) 기본간호학</option>

                                <option value="7564">(2017 간호사) 간호관리학</option>

                                <option value="7563">(2017 간호사) 정신간호학</option>

                                <option value="7562">(2017 간호사) 지역사회간호학</option>

                                <option value="7561">(2017 간호사) 아동간호학</option>

                                <option value="7560">(2017 간호사) 모성간호학</option>

                                <option value="7559">(2017 간호사) 성인간호학</option>

                                <option value="7558">(2017 문제) 식품위생학</option>

                                <option value="7557">(2017 문제) 단체급식 및 실습</option>

                                <option value="7556">(2017 문제) 조리원리 및 실습</option>

                                <option value="7555">(2017 문제) 식품학</option>

                                <option value="7554">(2017 문제) 식사요법 및 실습</option>

                                <option value="7553">(2017 문제) 고급영양학</option>

                                <option value="7552">(2017 문제) 영양판정 및 영양교육</option>

                                <option value="7551">(2017 문제) 생애주기영양학</option>

                                <option value="7550">(2016 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7549">(2016 위생사) 식품위생학</option>

                                <option value="7548">(2016 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7547">(2017 영양사) 조리원리 이론 및 문제</option>

                                <option value="7546">(2017 영양사) 식품학 이론 및 문제</option>

                                <option value="7545">(2017 영양사) 단체급식 이론 및 문제</option>

                                <option value="7544">(2017 영양사) 식사요법 이론 및 문제</option>

                                <option value="7543">(2017 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7542">(2017 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7541">(2017 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7540">(2017 영양사) 영양학 이론 및 문제</option>

                                <option value="7539">(최신 간협문제 특강) 지역사회간호학 제9판</option>

                                <option value="7538">보강</option>

                                <option value="7537">2016 보건행정 법규 총정리 특강</option>

                                <option value="7536">STP 공무원 화학 이론 통합완성</option>

                                <option value="7535">식품화학개론 문제풀이 완성</option>

                                <option value="7534">(2017) 식품위생학</option>

                                <option value="7533">(2017) 단체급식 및 실습</option>

                                <option value="7532">(2017) 조리원리 및 실습</option>

                                <option value="7531">(2017) 식품학</option>

                                <option value="7530">(2017) 식사요법 및 실습</option>

                                <option value="7529">(2017) 영양판정 및 영양교육</option>

                                <option value="7528">고급영양학</option>

                                <option value="7527">(2017) 생애주기영양학</option>

                                <option value="7526">2016 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7525">공무원 식품화학개론 이론 끝장특강</option>

                                <option value="7524">2016 환경공학 실전 모의고사</option>

                                <option value="7523">2016 환경공학 단원별 문제완성</option>

                                <option value="7522">2016 환경공학 기출문제 분석특강</option>

                                <option value="7521">2016 식품위생 실전 모의고사</option>

                                <option value="7520">2016 식품위생 기출 + 단원별 문제풀이</option>

                                <option value="7519">2016 화학 실전 모의고사</option>

                                <option value="7518">2016 화학 단원별 문제완성</option>

                                <option value="7517">2016 화학 기출문제 분석특강</option>

                                <option value="7516">2016 보건행정 실전 모의고사</option>

                                <option value="7515">2016 보건행정 단원별 문제완성</option>

                                <option value="7514">2016 보건행정 기출문제 분석특강</option>

                                <option value="7513">2016 공중보건 실전 모의고사</option>

                                <option value="7512">2016 공중보건 단원별 문제완성</option>

                                <option value="7511">2016 공중보건 기출문제 분석특강</option>

                                <option value="7510">2016 한국사 실전 모의고사</option>

                                <option value="7509">2016 한국사 단원별 문제완성</option>

                                <option value="7508">2016 한국사 기출문제 분석특강</option>

                                <option value="7507">2016 영어(임) 실전 모의고사</option>

                                <option value="7506">2016 영어(오) 실전 모의고사</option>

                                <option value="7505">2016 영어(임) 단원별 문제완성</option>

                                <option value="7504">2016 영어(오) 단원별 문제완성</option>

                                <option value="7503">2016 영어 기출문제 분석특강</option>

                                <option value="7502">2016 국어 실전 모의고사</option>

                                <option value="7501">2016 국어 단원별 문제완성</option>

                                <option value="7500">2016 국어 기출문제 분석특강</option>

                                <option value="7499">2016 지역사회간호 실전 모의고사</option>

                                <option value="7498">2016 지역사회간호 단원별 문제완성</option>

                                <option value="7497">2016 지역사회간호 기출문제 분석특강</option>

                                <option value="7496">2016 간호관리 실전 모의고사</option>

                                <option value="7495">2016 간호관리 단원별 문제완성</option>

                                <option value="7494">2016 간호관리 기출문제 분석특강</option>

                                <option value="7493">2016 생물 실전 모의고사</option>

                                <option value="7492">2016 생물 단원별 문제완성</option>

                                <option value="7491">2016 생물 기출문제 분석특강</option>

                                <option value="7490">2016 환경보건 이론 및 문제 완성반</option>

                                <option value="7489">공중보건 심화이론 특강</option>

                                <option value="7488">보건의약관계법규 모의고사</option>

                                <option value="7487">기본간호학 모의고사</option>

                                <option value="7486">간호관리학 모의고사</option>

                                <option value="7485">정신간호학 모의고사</option>

                                <option value="7484">지역사회간호학 모의고사</option>

                                <option value="7483">아동간호학 모의고사</option>

                                <option value="7482">모성간호학 모의고사</option>

                                <option value="7481">성인간호학 모의고사</option>

                                <option value="7480">국어 심화특강 [최근 5개년 기출문제 분석]</option>

                                <option value="7479">2016 지역사회간호학 (정규이론반)</option>

                                <option value="7478">2016 간호관리학 (정규이론반)</option>

                                <option value="7477">2016 영양교사 최종 모의고사반 (서답형)</option>

                                <option value="7476">2016 국어 테마특강 (심화반)</option>

                                <option value="7475">근현대사 완성 특강반</option>

                                <option value="7474">2016 이승훈 공중보건 (정규이론반)</option>

                                <option value="7473">2016 보건행정 (정규이론반)</option>

                                <option value="7472">2016 김희영 공중보건 (정규이론반)</option>

                                <option value="7471">2016 한국사 (정규이론반)</option>

                                <option value="7470">2016 영어 (정규이론반)</option>

                                <option value="7469">2016 국어 (정규이론반)</option>

                                <option value="7468">2015 공무원 면접특강</option>

                                <option value="7467">2016 하이스코어 생물 (심화반)</option>

                                <option value="7466">2016 하이탑 생명과학</option>

                                <option value="7465">(2016 영양사) 조리원리 이론 및 문제</option>

                                <option value="7464">(2016 영양사) 식품학 이론 및 문제</option>

                                <option value="7463">(2016 영양사) 단체급식 이론 및 문제</option>

                                <option value="7462">(2016 영양사) 식사요법 이론 및 문제</option>

                                <option value="7461">(2016 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7460">(2016 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7459">(2016 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7458">(2016 영양사) 영양학 이론 및 문제</option>

                                <option value="7457">(2015 위생사) 식품위생학</option>

                                <option value="7456">(2015 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7455">(2015 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7454">(2016 간호사) 보건의약관계법규</option>

                                <option value="7453">(2016 간호사) 기본간호학</option>

                                <option value="7452">(2016 간호사) 간호관리학</option>

                                <option value="7451">(2016 간호사) 정신간호학</option>

                                <option value="7450">(2016 간호사) 지역사회간호학</option>

                                <option value="7449">(2016 간호사) 아동간호학</option>

                                <option value="7448">(2016 간호사) 모성간호학</option>

                                <option value="7447">(2016 간호사) 성인간호학</option>

                                <option value="7446">(2016 문제) 식품위생학</option>

                                <option value="7445">(2016 문제) 단체급식 및 실습</option>

                                <option value="7444">(2016 문제) 조리원리 및 실습</option>

                                <option value="7443">(2016 문제) 식품학</option>

                                <option value="7442">(2016 문제) 식사요법 및 실습</option>

                                <option value="7441">(2016 문제) 영양판정 및 영양교육</option>

                                <option value="7440">(2016 문제) 생애주기영양학</option>

                                <option value="7439">(2016 문제) 고급영양학</option>

                                <option value="7438">기초 간호과학 (연세대 대비반)</option>

                                <option value="7437">간호학 개론 (연세대 대비반)</option>

                                <option value="7436">2016 연세대학교 RN-BSN 안내 및 강의계획</option>

                                <option value="7435">2015 지역사회간호 실전 모의고사</option>

                                <option value="7434">2015 간호관리 실전 모의고사</option>

                                <option value="7433">2015 생물 실전 모의고사</option>

                                <option value="7432">2015 환경공학 실전 모의고사</option>

                                <option value="7431">2015 화학 실전 모의고사</option>

                                <option value="7430">2015 보건행정 실전 모의고사</option>

                                <option value="7429">2015 공중보건 실전 모의고사</option>

                                <option value="7428">2015 한국사 실전 모의고사</option>

                                <option value="7427">2015 영어 실전 모의고사 (오)</option>

                                <option value="7426">2015 영어 실전모의고사 (임)</option>

                                <option value="7425">2015 국어 실전 모의고사</option>

                                <option value="7424">[정훈사] 공중보건 기출 및 예상문제 총정리</option>

                                <option value="7423">2015 지역사회간호 단원별 문제완성</option>

                                <option value="7422">2015 간호관리 단원별 문제완성</option>

                                <option value="7421">2015 생물 단원별 문제완성</option>

                                <option value="7420">2015 환경공학 단원별 문제완성</option>

                                <option value="7419">2015 화학 단원별 문제완성</option>

                                <option value="7418">2015 보건행정 단원별 문제완성</option>

                                <option value="7417">2015 공중보건 단원별 문제완성</option>

                                <option value="7416">2015 한국사 단원별 문제완성</option>

                                <option value="7415">2015 영어 단원별 문제완성</option>

                                <option value="7414">2015 국어 단원별 문제완성</option>

                                <option value="7413">한번에 끝내는 식품위생 문제풀이</option>

                                <option value="7412">생물 심화문제 완성 [캠벨 생명과학]</option>

                                <option value="7411">(2016) 식품위생학</option>

                                <option value="7410">(2016) 단체급식 및 실습</option>

                                <option value="7409">(2016) 조리원리 및 실습</option>

                                <option value="7408">(2016) 식품학</option>

                                <option value="7407">(2016) 식사요법 및 실습</option>

                                <option value="7406">(2016) 영양판정 및 영양교육</option>

                                <option value="7405">(2016) 고급영양학</option>

                                <option value="7404">(2016) 생애주기영양학</option>

                                <option value="7403">임장빈 교수의 공무원 영문법 총정리 [영어]</option>

                                <option value="7402">2015 지역사회간호 기출문제 분석특강</option>

                                <option value="7401">2015 간호관리 기출문제 분석특강</option>

                                <option value="7400">2015 생물 기출문제 분석특강</option>

                                <option value="7399">2015 환경공학 기출문제 분석특강</option>

                                <option value="7398">2015 화학 기출문제 분석특강</option>

                                <option value="7397">2015 보건행정 기출문제 분석특강</option>

                                <option value="7396">2015 공중보건 기출문제 분석특강</option>

                                <option value="7395">2015 한국사 기출문제 분석특강</option>

                                <option value="7394">2015 영어 기출문제 분석특강</option>

                                <option value="7393">2015 국어 기출문제 분석특강</option>

                                <option value="7392">2015 보건행정 법규 총정리 특강</option>

                                <option value="7391">강두수 화학 이론수험서(문운당) 문제정리</option>

                                <option value="7390">2015 의료관계법규 이론 및 문제 완성</option>

                                <option value="7389">강두수 화학 (이론 및 문제)</option>

                                <option value="7387">보건의약관계법규 모의고사</option>

                                <option value="7386">기본간호학 모의고사</option>

                                <option value="7385">간호관리학 모의고사</option>

                                <option value="7384">정신간호학 모의고사</option>

                                <option value="7383">지역사회간호학 모의고사</option>

                                <option value="7382">아동간호학 모의고사</option>

                                <option value="7381">모성간호학 모의고사</option>

                                <option value="7380">성인간호학 모의고사</option>

                                <option value="7379">환경보건 이론 및 문제 완성반</option>

                                <option value="7378">2015 영양교사 최종 모의고사반 (서답형)</option>

                                <option value="7377">2015 간호관리학 (정규이론반)</option>

                                <option value="7376">2014 보건의료관계법규 최종정리</option>

                                <option value="7375">2014 행정법총론 최종 마무리 특강</option>

                                <option value="7374">2015 하이스코어 생물 (심화이론반)</option>

                                <option value="7373">2015 보건행정 (정규이론반)</option>

                                <option value="7372">한권으로 올인! 2015 공중보건</option>

                                <option value="7371">2015 공중보건 (정규이론반)</option>

                                <option value="7370">2015 한국사 (정규이론반)</option>

                                <option value="7369">2015 영어 (정규이론반)</option>

                                <option value="7368">2015 국어 (정규이론반)</option>

                                <option value="7367">2015 지역사회간호학 (정규이론반)</option>

                                <option value="7366">2015 연세대학교 RN-BSN 안내 및 강의계획</option>

                                <option value="7365">9급 공무원 면접 특강</option>

                                <option value="7364">기초 간호과학 (연세대 대비반)</option>

                                <option value="7363">간호학 개론 (연세대 대비반)</option>

                                <option value="7362">(2015 문제) 식품위생학</option>

                                <option value="7361">(2015 문제) 단체급식 및 실습</option>

                                <option value="7360">(2015 문제) 조리원리 및 실습</option>

                                <option value="7359">(2015 문제) 식품학</option>

                                <option value="7358">(2015 문제) 식사요법 및 실습</option>

                                <option value="7357">(2015 문제) 영양판정 및 영양교육</option>

                                <option value="7356">(2015 문제) 생애주기영양학</option>

                                <option value="7355">(2015 문제) 고급영양학</option>

                                <option value="7354">(2015 간호사) 보건의약관계법규</option>

                                <option value="7353">(2015 간호사) 기본간호학</option>

                                <option value="7352">(2015 간호사) 간호관리학</option>

                                <option value="7351">(2015 간호사) 정신간호학</option>

                                <option value="7350">강두수 화학 (이론)</option>

                                <option value="7349">(2015 간호사) 지역사회간호학</option>

                                <option value="7348">(2015 간호사) 아동간호학</option>

                                <option value="7347">(2015 간호사) 모성간호학</option>

                                <option value="7346">(2015 간호사) 성인간호학</option>

                                <option value="7345">(2014 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7344">(2014 위생사) 식품위생학</option>

                                <option value="7343">(2014 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7342">(2015 영양사) 조리원리 이론 및 문제</option>

                                <option value="7341">(2015 영양사) 식품학 이론 및 문제</option>

                                <option value="7340">(2015 영양사) 단체급식 이론 및 문제</option>

                                <option value="7339">(2015 영양사) 식사요법 이론 및 문제</option>

                                <option value="7338">(2015 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7337">(2015 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7336">(2015 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7335">(2015 영양사) 영양학 이론 및 문제</option>

                                <option value="7334">2014 지역사회간호 실전 모의고사</option>

                                <option value="7333">2014 간호관리 실전 모의고사</option>

                                <option value="7332">2014 생물 실전 모의고사</option>

                                <option value="7331">2014 보건행정 실전 모의고사</option>

                                <option value="7330">2014 공중보건 실전 모의고사</option>

                                <option value="7329">2014 한국사 실전 모의고사</option>

                                <option value="7328">2014 영어 실전 모의고사</option>

                                <option value="7327">2014 국어 실전 모의고사</option>

                                <option value="7326">2014 화학 실전 모의고사반</option>

                                <option value="7325">2014 지역사회간호 단원별 문제풀이반</option>

                                <option value="7324">2014 간호관리 단원별 문제풀이반</option>

                                <option value="7323">2014 생물 단원별 문제풀이반</option>

                                <option value="7322">2014 보건행정 단원별 문제풀이반</option>

                                <option value="7321">2014 공중보건 단원별 문제풀이반</option>

                                <option value="7320">2014 한국사 단원별 문제풀이반</option>

                                <option value="7319">2014 영어 단원별 문제풀이반</option>

                                <option value="7318">2014 국어 단원별 문제풀이반</option>

                                <option value="7317">2014 환경공학 단원별 문제완성반</option>

                                <option value="7316">2014 화학 단원별 문제완성반</option>

                                <option value="7315">2014 식품위생 단원별 문제완성반</option>

                                <option value="7314">2014 지역사회간호 기출문제 분석특강</option>

                                <option value="7313">2014 간호관리 기출문제 분석특강</option>

                                <option value="7312">2014 생물 심화 기출문제 분석특강</option>

                                <option value="7311">2014 보건행정 기출문제 분석특강</option>

                                <option value="7310">2014 공중보건 기출문제 분석특강</option>

                                <option value="7309">2014 한국사 기출문제 분석특강</option>

                                <option value="7308">2014 영어 기출문제 분석특강</option>

                                <option value="7307">2014 국어 기출문제 분석특강</option>

                                <option value="7306">2014 보건행정 법규 총정리 특강</option>

                                <option value="7305">환경보건 이론 및 문제 정리</option>

                                <option value="7304">(2015) 식품위생학</option>

                                <option value="7303">(2015) 단체급식 및 실습</option>

                                <option value="7302">(2015) 조리원리 및 실습</option>

                                <option value="7301">(2015) 식품학</option>

                                <option value="7300">(2015) 식사요법 및 실습</option>

                                <option value="7299">(2015) 영양판정 및 영양교육</option>

                                <option value="7298">(2015) 고급영양학</option>

                                <option value="7297">(2015) 생애주기영양학</option>

                                <option value="7296">9급 공무원 한국사 단계형 문제풀이</option>

                                <option value="7295">2014 의료관계법규 이론 및 문제 완성</option>

                                <option value="7294">교재 종합</option>

                                <option value="7293">생물 500제 기출문제 분석특강</option>

                                <option value="7292">(간협문제 특강) 지역사회간호학</option>

                                <option value="7291">(간협문제 특강) 간호관리학</option>

                                <option value="7290">김지연 교수의 식품위생 이론완성반</option>

                                <option value="7289">(간호사) 보건의약관계법규 최종 모의고사</option>

                                <option value="7288">(간호사) 간호관리학 최종 모의고사</option>

                                <option value="7287">2014 하이스코어 생물 (심화이론반)</option>

                                <option value="7286">보건의료법규 핵심요약 및 문제정리</option>

                                <option value="7285">행정법 총론 최종 모의고사 정리</option>

                                <option value="7284">평혜림 환경공학 (소음진동 및 폐기물)</option>

                                <option value="7283">평혜림 환경공학 (대기편)</option>

                                <option value="7282">9급 공무원 화학 기초 완성반</option>

                                <option value="7281">9급 공무원 영어 기초문법 및 독해 완성</option>

                                <option value="7280">하이탑 생명과학 (생물 정규이론반)</option>

                                <option value="7279">2014 지역사회간호학 (정규이론반)</option>

                                <option value="7278">2014 간호관리학 (정규이론반)</option>

                                <option value="7277">2014 공중보건 핵심요약 정리</option>

                                <option value="7276">평혜림 환경공학 (수질편)</option>

                                <option value="7275">공무원 영어 기초완성반</option>

                                <option value="7274">2014 영양교사 최종 모의고사반 (서답형)</option>

                                <option value="7273">2014 보건행정 (정규이론반)</option>

                                <option value="7272">2014 공중보건 (정규이론반)</option>

                                <option value="7271">2014 한국사 (정규이론반)</option>

                                <option value="7270">2014 영어 (정규이론반)</option>

                                <option value="7269">2014 국어 (정규이론반)</option>

                                <option value="7268">(2014 간호사) 보건의약관계법규</option>

                                <option value="7267">2013 FINAL 모의고사 (보건행정)</option>

                                <option value="7266">공중보건 기출문제 분석특강 (이승훈)</option>

                                <option value="7265">2013 FINAL 모의고사 (공중보건)</option>

                                <option value="7264">2013 FINAL 모의고사 (한국사)</option>

                                <option value="7263">2013 FINAL 모의고사 (영어)</option>

                                <option value="7262">2013 FINAL 모의고사 (국어)</option>

                                <option value="7261">(2013 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7260">(2013 위생사) 식품위생학</option>

                                <option value="7259">(2013 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7258">(2014 문제) 식품위생학</option>

                                <option value="7257">(2014 문제) 단체급식 및 실습</option>

                                <option value="7256">(2014 문제) 조리원리 및 실습</option>

                                <option value="7255">(2014 문제) 식품학</option>

                                <option value="7254">(2014 문제) 식사요법 및 실습</option>

                                <option value="7253">(2014 문제) 영양판정 및 영양교육</option>

                                <option value="7252">(2014 문제) 생애주기영양학</option>

                                <option value="7251">(2014 문제) 고급영양학</option>

                                <option value="7250">FINAL 모의고사 (지역사회간호)</option>

                                <option value="7249">2013 FINAL 모의고사 (간호관리)</option>

                                <option value="7248">2013 FINAL 모의고사 (생물)</option>

                                <option value="7247">(2014 간호사) 기본간호학</option>

                                <option value="7246">(2014 간호사) 간호관리학</option>

                                <option value="7245">(2014 간호사) 정신간호학</option>

                                <option value="7244">(2014 간호사) 지역사회간호학</option>

                                <option value="7243">(2014 간호사) 아동간호학</option>

                                <option value="7242">(2014 간호사) 모성간호학</option>

                                <option value="7241">(2014 간호사) 성인간호학</option>

                                <option value="7240">(2014 영양사) 식품미생물 이론 및 문제</option>

                                <option value="7239">(2014 영양사) 조리원리 이론 및 문제</option>

                                <option value="7238">(2014 영양사) 식품학 이론 및 문제</option>

                                <option value="7237">(2014 영양사) 단체급식 이론 및 문제</option>

                                <option value="7236">(2014 영양사) 식사요법 이론 및 문제</option>

                                <option value="7235">(2014 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7234">(2014 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7233">(2014 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7232">(2014 영양사) 영양학 이론 및 문제</option>

                                <option value="7231">한국사 핵심정리 및 단계형 문제풀이</option>

                                <option value="7230">경기도 면접특강</option>

                                <option value="7220">국어(기초-심화 개념완성) 특강</option>

                                <option value="7219">2013 보건행정 법규 총정리 특강</option>

                                <option value="7218">공무원 화학 단원별 문제풀이반 (실전모의고사 포함)</option>

                                <option value="7217">김지연 교수의 식품위생 최신 단원별 문제풀이반</option>

                                <option value="7216">(2014) 식품위생학</option>

                                <option value="7215">(2014) 단체급식 및 실습</option>

                                <option value="7214">(2014) 조리원리 및 실습</option>

                                <option value="7213">(2014) 식품학</option>

                                <option value="7212">(2014) 식사요법 및 실습</option>

                                <option value="7211">(2014) 영양판정 및 영양교육</option>

                                <option value="7210">(2014) 생애주기영양학</option>

                                <option value="7209">(2014) 고급영양학</option>

                                <option value="7208">2013 보건행정 모의고사형 문제풀이</option>

                                <option value="7207">2013 공중보건 모의고사형 문제풀이반</option>

                                <option value="7206">2013 한국사 모의고사형 문제풀이</option>

                                <option value="7205">2013 영어 모의고사형 문제풀이</option>

                                <option value="7204">2013 국어 모의고사형 문제풀이</option>

                                <option value="7203">2013 지역사회간호 모의고사형 문제풀이</option>

                                <option value="7202">2013 간호관리 모의고사형 문제풀이</option>

                                <option value="7201">2013 생물 모의고사형 문제풀이</option>

                                <option value="7200">강두수 교수의 하이탑 화학 (이론완성반)</option>

                                <option value="7199">보건행정 집중관리반 (심화과정) - 4. 4 오픈!</option>

                                <option value="7198">공중보건 집중관리반 (심화과정) - 4. 5 오픈!</option>

                                <option value="7197">2013 최신 의료관계법규 이론 및 문제 총정리 (강좌설명 필독!)</option>

                                <option value="7196">2013 보건행정 단원별 문제풀이</option>

                                <option value="7195">2013 공중보건 단원별 문제풀이반</option>

                                <option value="7194">2013 한국사 단원별 문제풀이</option>

                                <option value="7193">2013 영어 단원별 문제풀이</option>

                                <option value="7192">2013 국어 단원별 문제풀이</option>

                                <option value="7191">2013 지역사회간호 단원별 문제풀이</option>

                                <option value="7190">2013 간호관리 단원별 문제풀이</option>

                                <option value="7189">2013 생물 단원별 문제풀이</option>

                                <option value="7188">최근 공무원 국어 기출문제 분석특강</option>

                                <option value="7187">2013 공무원 생물 통합 기출문제 분석</option>

                                <option value="7186">보건의약관계법규 최종 모의고사</option>

                                <option value="7185">기본간호학 최종 모의고사</option>

                                <option value="7184">간호관리학 최종 모의고사</option>

                                <option value="7183">정신간호학 최종 모의고사</option>

                                <option value="7182">지역사회간호학 최종 모의고사</option>

                                <option value="7181">아동간호학 최종 모의고사</option>

                                <option value="7180">모성간호학 최종 모의고사</option>

                                <option value="7179">성인간호학 최종 모의고사</option>

                                <option value="7178">2013 강 한국사 (정규이론반)</option>

                                <option value="7177">한국 근현대사 특강 (한국사 심화과정)</option>

                                <option value="7176">간호사 보강</option>

                                <option value="7175">2013 하이스코어 생물 (심화이론반)</option>

                                <option value="7174">환경공학 핵심이론 및 기출 예상문제 총정리</option>

                                <option value="7173">(간호사) 기본간호학</option>

                                <option value="7172">(간호사) 정신간호학</option>

                                <option value="7171">(간호사) 성인간호학</option>

                                <option value="7170">(간호사) 보건의약관계법규</option>

                                <option value="7169">(간호사) 간호관리학</option>

                                <option value="7168">(간호사) 지역사회간호학</option>

                                <option value="7167">(간호사) 아동간호학</option>

                                <option value="7166">(간호사) 모성간호학</option>

                                <option value="7165">식품위생 개념완성 (정규이론반)</option>

                                <option value="7164">하이탑 화학 (정규이론반)</option>

                                <option value="7163">2013 지역사회간호학 (정규이론반)</option>

                                <option value="7162">2013 간호관리학 (정규이론반)</option>

                                <option value="7161">2013 한국사</option>

                                <option value="7160">2013 영어 (정규이론반)</option>

                                <option value="7159">2013 국어 (정규이론반)</option>

                                <option value="7158">2013 공중보건 (정규이론반)</option>

                                <option value="7157">2013 보건행정 (정규이론반)</option>

                                <option value="7155">하이탑 생명과학 (생물 이론완성)</option>

                                <option value="7154">2012 위생사 실기 이론 및 문제</option>

                                <option value="7153">생명과학</option>

                                <option value="7151">(2013 영양사) 식품미생물 이론 및 문제</option>

                                <option value="7149">(2013 영양사) 식품학 이론 및 문제</option>

                                <option value="7150">(2013 영양사) 조리원리 이론 및 문제</option>

                                <option value="7148">(2013 영양사) 단체급식 이론 및 문제</option>

                                <option value="7147">(2013 영양사) 식사요법 이론 및 문제</option>

                                <option value="7146">(2013 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7144">(2013 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7145">(2013 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7143">(2013 영양사) 영양학 이론 및 문제</option>

                                <option value="7142">보건의료법규</option>

                                <option value="7141">보건교육학</option>

                                <option value="7140">보건학</option>

                                <option value="7139">보건프로그램 개발 및 평가</option>

                                <option value="7138">공무원 면접대비 특강</option>

                                <option value="7137">2012 위생사 필기 이론 및 문제</option>

                                <option value="7136">(필기) 생화학 및 발효학</option>

                                <option value="7135">2012 보건행정 법규 총정리 특강</option>

                                <option value="7134">2012 영어 (임) 모의고사형 문제풀이</option>

                                <option value="7133">2012 지역사회간호 모의고사형 문제풀이</option>

                                <option value="7132">2012 간호관리 모의고사형 문제풀이</option>

                                <option value="7131">2012 생물 모의고사형 문제풀이</option>

                                <option value="7130">2012 보건행정 모의고사형 문제풀이</option>

                                <option value="7129">2012 공중보건 모의고사형 문제풀이</option>

                                <option value="7128">2012 한국사 모의고사형 문제풀이</option>

                                <option value="7127">2012 영어 (오) 모의고사형 문제풀이</option>

                                <option value="7126">2012 국어 모의고사형 문제풀이</option>

                                <option value="7125">김지연 교수의 식품위생 최종 마무리 모의고사형 문제풀이</option>

                                <option value="7124">(필기) 식품제조공정</option>

                                <option value="7123">식품미생물 최종 모의고사 문제풀이반</option>

                                <option value="7122">보충강의</option>

                                <option value="7121">(2013 이론) 식품위생학</option>

                                <option value="7120">(2013 이론) 단체급식 및 실습</option>

                                <option value="7119">(2013 이론) 조리원리 및 실습</option>

                                <option value="7118">(2013 이론) 식품학</option>

                                <option value="7117">(2013 이론) 식사요법 및 실습</option>

                                <option value="7116">(2013 이론) 영양판정 및 영양교육</option>

                                <option value="7115">(2013 이론) 생애주기영양학</option>

                                <option value="7114">(2013 이론) 고급영양학</option>

                                <option value="7113">2012 지역사회간호 단원별 문제풀이</option>

                                <option value="7112">2012 간호관리 단원별 문제풀이</option>

                                <option value="7111">2012 생물 단원별 문제풀이</option>

                                <option value="7110">2012 보건행정 단원별 문제풀이</option>

                                <option value="7109">2012 공중보건 단원별 문제풀이</option>

                                <option value="7108">2012 한국사 단원별 문제풀이</option>

                                <option value="7107">2012 영어 (임) 단원별 문제풀이</option>

                                <option value="7106">2012 영어 (오) 단원별 문제풀이</option>

                                <option value="7105">2012 국어 단원별 문제풀이</option>

                                <option value="7104">대방열림 테스트 강의</option>

                                <option value="7103">김지연 교수의 식품위생 이론완성반</option>

                                <option value="7102">김만수 교수의 식품미생물 이론완성반</option>

                                <option value="7101">전효성 교수의 화학 최종 (7회) 모의고사 문제</option>

                                <option value="7100">문제로 배우는 캠벨 생명과학 (생물심화 문제)</option>

                                <option value="7099">의료관계법규 이론 및 문제 완성반</option>

                                <option value="7098">김희영 교수의 보건행정 기출문제 분석 특강</option>

                                <option value="7097">생물 8, 9급 통합 기출문제 분석특강</option>

                                <option value="7096">김철민 국어 (심화반 2)</option>

                                <option value="7095">간협문제집 특강 (지역사회간호학)</option>

                                <option value="7094">빅터 생명과학 (생물 이론반)</option>

                                <option value="7093">김철민 국어 (심화반 1)</option>

                                <option value="7092">2012 하이스코어 생물 (심화이론반) - 강좌설명 필독!</option>

                                <option value="7091">임장빈 교수의 (어휘 + 독해) 특강</option>

                                <option value="7090">신현준 교수의 화학 최종 모의고사 문제</option>

                                <option value="7089">김지연 교수의 식품위생 문제풀이반</option>

                                <option value="7088">2012 간호관리학 (정규이론반)</option>

                                <option value="7087">(간호사 국시) 아동간호학</option>

                                <option value="7086">2012 보건행정 (정규이론반)</option>

                                <option value="7085">2012 공중보건 (정규이론반)</option>

                                <option value="7084">2012 한국사 (정규이론반)</option>

                                <option value="7083">2012 영어 (정규이론반)</option>

                                <option value="7082">2012 국어 (정규이론반)</option>

                                <option value="7081">(간호사 국시) 모성간호학</option>

                                <option value="7080">(간호사 국시) 보건의약관계법규</option>

                                <option value="7079">(간호사 국시) 기본간호학</option>

                                <option value="7078">(간호사 국시) 정신간호학</option>

                                <option value="7077">(간호사 국시) 간호관리학</option>

                                <option value="7076">(간호사 국시) 지역사회간호학</option>

                                <option value="7075">(간호사 국시) 성인간호학</option>

                                <option value="7074">(보건복지부) 행정법총론 마무리 특강</option>

                                <option value="7073">(보건복지부) 영어2 마무리 특강</option>

                                <option value="7072">(보건복지부) 영어1 마무리 특강</option>

                                <option value="7071">(보건복지부) 감염병 예방법 마무리 특강 (기능직전환 대비)</option>

                                <option value="7070">(보건복지부) 보건의료관계법규 마무리 특강</option>

                                <option value="7069">(보건복지부) 공중보건 마무리 특강</option>

                                <option value="7068">2012 영양교사 임용시험대비 최종 모의고사반</option>

                                <option value="7067">2012 지역사회간호학 (정규이론반)</option>

                                <option value="7066">전효성 교수의 화학 이론 완성반</option>

                                <option value="7065">(영양교사 문제) 단체급식 및 실습</option>

                                <option value="7064">(영양교사 문제) 조리원리 및 실습</option>

                                <option value="7063">(영양교사 문제) 생애주기영양학</option>

                                <option value="7062">(영양교사 문제) 식사요법 및 실습</option>

                                <option value="7061">(영양교사 문제) 영양교육 및 영양판정</option>

                                <option value="7060">(영양교사 문제) 식품학</option>

                                <option value="7059">(영양교사 문제) 식품위생학</option>

                                <option value="7058">(영양교사 문제) 고급영양학</option>

                                <option value="7057">임장빈 교수의 영어 이론완성반</option>

                                <option value="7056">간호학 기출문제풀이 및 예상문제풀이 (원서접수 및 면접 논술특강 포함) (교재포함)</option>

                                <option value="7055">간호학개론 part 3 &lt;간호과정론&gt; (교재포함)</option>

                                <option value="7054">간호학개론 part 2 &lt;간호윤리, 의사소통론, 전문직 특성&gt; (교재포함)</option>

                                <option value="7053">간호학개론 part 1 &lt;간호과학, 간호철학, 간호이론&gt; (교재포함)</option>

                                <option value="7052">기초간호과학 (교재 별도구매)</option>

                                <option value="7051">필수 해부생리학 (교재 별도구매)</option>

                                <option value="7050">하재남 교수의 환경보건학 문제풀이 766제 완성</option>

                                <option value="7049">(영양교사 심화) 단체급식 및 실습</option>

                                <option value="7048">(영양교사 심화) 조리원리 및 실습</option>

                                <option value="7047">(영양교사 심화) 생애주기영양학</option>

                                <option value="7046">(영양교사 심화) 식사요법 및 실습</option>

                                <option value="7045">(영양교사 심화) 영양교육 및 영양판정</option>

                                <option value="7044">(영양교사 심화) 식품학</option>

                                <option value="7043">(영양교사 심화) 고급영양학</option>

                                <option value="7042">(영양교사 심화) 식품위생학</option>

                                <option value="7041">2011 보건행정 문제풀이 (모의고사형)</option>

                                <option value="7040">2011 공중보건 문제풀이 (모의고사형)</option>

                                <option value="7039">2011 지역사회간호 모의고사형 문제풀이 (2)</option>

                                <option value="7038">2011 간호관리 모의고사형 문제풀이 (2)</option>

                                <option value="7037">2011 한국사 문제풀이 (모의고사형)</option>

                                <option value="7036">2011 영어 문제풀이 (모의고사형)</option>

                                <option value="7035">2011 국어 문제풀이 (모의고사형)</option>

                                <option value="7034">2011 지역사회간호 모의고사형 문제풀이 (1)</option>

                                <option value="7033">2011 간호관리 모의고사형 문제풀이 (1)</option>

                                <option value="7032">2011 생물 모의고사형 문제풀이</option>

                                <option value="7031">2011 한국사 문제풀이 (단원별)</option>

                                <option value="7030">2011 영어 문제풀이 (단원별)</option>

                                <option value="7029">2011 국어 문제풀이 (단원별)</option>

                                <option value="7028">2011 보건행정 문제풀이 (단원별)</option>

                                <option value="7027">2011 공중보건 문제풀이 (단원별)</option>

                                <option value="7026">김만수 교수의 식품화학개론 (문제풀이)</option>

                                <option value="7025">(영양교사 이론) 단체급식 및 실습</option>

                                <option value="7024">(영양교사 이론) 조리원리 및 실습</option>

                                <option value="7023">(영양교사 이론) 생애주기영양학</option>

                                <option value="7022">(영양교사 이론) 식사요법 및 실습</option>

                                <option value="7021">(영양교사 이론) 영양교육 및 영양판정</option>

                                <option value="7020">(영양교사 이론) 식품학</option>

                                <option value="7019">(영양교사 이론) 고급영양학</option>

                                <option value="7018">(영양교사 이론) 식품위생학</option>

                                <option value="7017">김만수 교수의 식품화학개론 (이론) - 강좌설명 필독!^^</option>

                                <option value="7016">2011 지역사회간호 단원별 문제풀이</option>

                                <option value="7015">2011 간호관리 단원별 문제풀이</option>

                                <option value="7014">2011 생물 단원별 문제풀이</option>

                                <option value="7013">(필기) 식품미생물학</option>

                                <option value="7012">(필기) 식품가공학</option>

                                <option value="7011">(필기) 식품화학</option>

                                <option value="7010">(필기) 식품위생학</option>

                                <option value="7009">하재남 교수의 환경보건학 이론강의</option>

                                <option value="7008">(2011 시험대비) 위생사 실기강의</option>

                                <option value="7007">(2011 시험대비) 위생사 필기강의</option>

                                <option value="7006">(2012 영양사) 식품미생물 이론 및 문제</option>

                                <option value="7005">(2012 영양사) 조리원리 이론 및 문제 - 강좌설명 확인!^^</option>

                                <option value="7004">(2012 영양사) 단체급식 이론 및 문제</option>

                                <option value="7003">(2012 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7002">(2012 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7001">(2012 영양사) 영양학 이론 및 문제</option>

                                <option value="7000">(2012 영양사) 식사요법 이론 및 문제</option>

                                <option value="6999">(2012 영양사) 식품위생학 이론 및 문제</option>

                                <option value="6998">(2012 영양사) 식품학 이론 및 문제</option>

                                <option value="6997">문어독(문법,어휘,독해) 문제풀이 특강</option>

                                <option value="6996">2011 의료관계법규 핵심이론 및 문제풀이 (교재포함)</option>

                                <option value="6995">지역사회간호학 (심화반)</option>

                                <option value="6994">간협문제집 특강 (간호관리학)</option>

                                <option value="6993">생물 8, 9급 통합 기출문제 분석특강</option>

                                <option value="6992">2011 보건행정 (정규이론반)</option>

                                <option value="6991">2011 지역사회간호학 (정규이론반)</option>

                                <option value="6990">2011 간호관리학 (정규이론반)</option>

                                <option value="6989">2011 하이스코어 생물 (심화이론반)</option>

                                <option value="6988">하이탑 생물이론 - 7차 교육과정</option>

                                <option value="6987">2011 한국사 (정규이론반)</option>

                                <option value="6986">2011 영어 (정규이론반)</option>

                                <option value="6985">2011 국어 (정규이론반) - 강좌설명 필독!!!!!</option>

                                <option value="6984">2011 공중보건 (정규이론반)</option>

                                <option value="6982">간호학 기출문제풀이 및 예상문제풀이 (원서접수 및 면접 논술특강 포함)</option>

                                <option value="6981">간호학개론 part 3 &lt;간호과정론&gt;</option>

                                <option value="6980">간호학개론 part 2 &lt;간호윤리, 의사소통론, 전문직 특성&gt;</option>

                                <option value="6979">간호학개론 part 1 &lt;간호과학, 간호철학, 간호이론&gt;</option>

                                <option value="6978">(문제) 단체급식 및 실습</option>

                                <option value="6977">(문제) 조리원리 및 실습</option>

                                <option value="6976">(문제) 고급영양학</option>

                                <option value="6975">(문제) 식사요법 및 실습</option>

                                <option value="6974">(문제) 영양판정 및 영양교육</option>

                                <option value="6973">(문제) 식품학</option>

                                <option value="6972">(문제) 생애주기영양학</option>

                                <option value="6971">(문제) 식품위생학</option>

                                <option value="6970">(영양사) 식품미생물 이론 및 문제</option>

                                <option value="6969">(영양사) 조리원리 이론 및 문제</option>

                                <option value="6968">(영양사) 단체급식 이론 및 문제</option>

                                <option value="6967">(영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="6966">(영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="6965">(영양사) 영양학 이론 및 문제</option>

                                <option value="6964">(영양사) 식사요법 이론 및 문제</option>

                                <option value="6963">(영양사) 식품위생학 이론 및 문제</option>

                                <option value="6962">(영양사) 식품학 이론 및 문제</option>

                                <option value="6961">위생사 2010 시험대비 실기강의</option>

                                <option value="6960">위생사 2010 시험대비 필기강의</option>

                                <option value="6959">2010 보건행정 문제풀이 3 (모의고사형)</option>

                                <option value="6958">2010 공중보건 문제풀이 3 (모의고사형)</option>

                                <option value="6957">2010 한국사 문제풀이 3 (모의고사형)</option>

                                <option value="6956">2010 영어 문제풀이 3 (모의고사형)</option>

                                <option value="6955">2010 국어 문제풀이 3 (모의고사형)</option>

                                <option value="6954">2010 지역사회간호 문제풀이 3 (모의고사형)</option>

                                <option value="6953">2010 간호관리 문제풀이 3 (모의고사형)</option>

                                <option value="6952">2010 생물 문제풀이 2 (모의고사형)</option>

                                <option value="6951">2010 보건행정 문제풀이 2 (단원별)</option>

                                <option value="6950">2010 공중보건 문제풀이 2 (단원별)</option>

                                <option value="6949">2010 한국사 문제풀이 2 (단원별)</option>

                                <option value="6948">2010 영어 문제풀이 2 (단원별)</option>

                                <option value="6947">2010 국어 문제풀이 2 (단원별)</option>

                                <option value="6946">2010 지역사회간호 문제풀이 2 (단원별)</option>

                                <option value="6945">2010 간호관리 문제풀이 2 (단원별)</option>

                                <option value="6944">2010 생물 문제풀이 1 (단원별)</option>

                                <option value="6943">(심화과정) 식품위생학</option>

                                <option value="6942">(심화과정) 단체급식 및 실습</option>

                                <option value="6941">(심화과정) 조리원리 및 실습</option>

                                <option value="6940">(심화과정) 식품학</option>

                                <option value="6939">(심화과정) 식사요법 이론 및 실습</option>

                                <option value="6938">(심화과정) 고급영양학</option>

                                <option value="6937">(심화과정) 영양판정 및 영양교육</option>

                                <option value="6936">(심화과정) 생애주기영양학</option>

                                <option value="6935">간협문제집 문제풀이 (지역사회간호학)</option>

                                <option value="6934">2010 의료관계법규 핵심이론 및 문제풀이 (교재 별도)</option>

                                <option value="6933">해부생리학 문제풀이 (단원별)</option>

                                <option value="6932">2010 보건행정 문제풀이 1 (단원별)</option>

                                <option value="6931">2010 공중보건 문제풀이 1 (단원별)</option>

                                <option value="6930">생물 기출문제 특강 (단원별형)</option>

                                <option value="6929">2010 지역사회간호 문제풀이 1 (단원별)</option>

                                <option value="6928">2010 간호관리 문제풀이 1 (모의고사형)</option>

                                <option value="6927">2010 영어 문제풀이 1 (단원별)</option>

                                <option value="6926">2010 한국사 문제풀이 1 (단원별)</option>

                                <option value="6925">2010 국어 문제풀이 1 (단원별)</option>

                                <option value="6924">신현준 교수의 화학 문제풀이 2</option>

                                <option value="6923">이경연 교수의 식품미생물 이론</option>

                                <option value="6922">김지연 교수의 식품위생 이론</option>

                                <option value="6921">문제로 배우는 생물학</option>

                                <option value="6920">식품위생학 (이론)</option>

                                <option value="6919">단체급식 및 실습 (이론)</option>

                                <option value="6918">조리원리 및 실습 (이론)</option>

                                <option value="6917">식품학 (이론)</option>

                                <option value="6916">식사요법 및 실습 (이론)</option>

                                <option value="6915">고급 영양학 (이론)</option>

                                <option value="6914">생애주기 영양학 (이론)</option>

                                <option value="6913">영양판정 및 영양교육 (이론)</option>

                                <option value="6912">신현준 교수의 화학이론</option>

                                <option value="6911">2010 보건행정 (정규이론반)</option>

                                <option value="6910">영양학 이론 및 문제 (권)</option>

                                <option value="6909">2010 한국사 (정규이론반)</option>

                                <option value="6908">2010 공중보건 (정규이론반)</option>

                                <option value="6907">해부생리학 이론강의</option>

                                <option value="6906">RN-BSN 핵심이론 및 문제풀이</option>

                                <option value="6905">2010 하이스코어 생물 (심화이론반)</option>

                                <option value="6904">2010 지역사회간호 (정규이론반)</option>

                                <option value="6903">2010 전공보건 최종 모의고사반</option>

                                <option value="6902">수문사 간호관리학 이론</option>

                                <option value="6901">알토란 생물 (기본이론반)</option>

                                <option value="6900">2010 국어이론</option>

                                <option value="6899">2010 영어이론</option>

                                <option value="6898">환경공학 바이블 (소음진동, 폐기물, 토양편)</option>

                                <option value="6897">작물생리학 핵심이론 및 문제</option>

                                <option value="6896">재배학 핵심이론 및 문제</option>

                                <option value="6895">전공보건 문제풀이 (박성희)</option>

                                <option value="6894">전공보건 문제풀이 (김희영)</option>

                                <option value="6893">09 위생사 (곤충학 및 실기)</option>

                                <option value="6892">09 위생사 (위생법규)</option>

                                <option value="6891">09 위생사 (식품위생학)</option>

                                <option value="6890">09 위생사 (환경위생학)</option>

                                <option value="6889">09 위생사 (공중보건학)</option>

                                <option value="6888">09 강하영 교수의 한국사 문제풀이 3</option>

                                <option value="6887">09 오권영 교수의 영어 문제풀이 2</option>

                                <option value="6886">09 김철민 교수의 국어 문제풀이 3</option>

                                <option value="6885">09 김희영 교수의 보건행정 문제풀이 3</option>

                                <option value="6884">09 하재남 교수의 공중보건 문제풀이 3</option>

                                <option value="6883">09 김희영 교수의 지역사회간호 문제풀이 3</option>

                                <option value="6882">권경자 교수의 간호관리 문제풀이 3</option>

                                <option value="6881">09 최정환 교수의 생물 문제풀이 3</option>

                                <option value="6880">식품미생물 요약</option>

                                <option value="6879">조리원리 이론 및 문제</option>

                                <option value="6878">단체급식 이론 및 문제</option>

                                <option value="6877">영양교육/위생법규 이론 및 문제</option>

                                <option value="6876">영양학 이론 및 문제</option>

                                <option value="6874">생리학/생화학 이론 및 문제</option>

                                <option value="6873">식사요법 이론 및 문제</option>

                                <option value="6872">식품위생 이론 및 문제</option>

                                <option value="6871">식품학 이론 및 문제</option>

                                <option value="6870">09 식사요법 문제</option>

                                <option value="6869">09 식품위생 문제</option>

                                <option value="6868">09 조리원리 문제</option>

                                <option value="6867">09 영양판정/교육 문제</option>

                                <option value="6866">09 생애주기영양학 문제</option>

                                <option value="6865">09 단체급식 문제</option>

                                <option value="6864">09 식품학 문제</option>

                                <option value="6863">의료관계법규 핵심이론 및 문제</option>

                                <option value="6862">09 김희영 교수의 보건행정 문제풀이 2</option>

                                <option value="6861">09 하재남 교수의 공중보건 문제풀이 2</option>

                                <option value="6860">09 김철민 교수의 국어 문제풀이 2</option>

                                <option value="6859">09 오권영 교수의 영어 문제풀이 1</option>

                                <option value="6858">09 강하영 교수의 한국사 문제풀이 2</option>

                                <option value="6857">09 김희영 교수의 지역사회간호 문제풀이 2</option>

                                <option value="6856">권경자 교수의 간호관리 문제풀이 2</option>

                                <option value="6855">09 최정환 교수의 생물 문제풀이 2</option>

                                <option value="6854">기출문제분석 특강</option>

                                <option value="6853">한국사 동형 모의고사</option>

                                <option value="6852">영어 동형 모의고사</option>

                                <option value="6851">국어 동형 모의고사</option>

                                <option value="6850">환경공학 바이블 (수질편)</option>

                                <option value="6849">조리원리 심화</option>

                                <option value="6848">식사요법 심화</option>

                                <option value="6847">영양교육, 영양판정 심화</option>

                                <option value="6846">생애주기영양학 심화</option>

                                <option value="6845">식품위생 심화</option>

                                <option value="6844">단체급식 심화</option>

                                <option value="6843">식품학 심화</option>

                                <option value="6842">신현준 교수의 화학 문제풀이 1</option>

                                <option value="6841">전공영양 (영양학,생애주기영양학)</option>

                                <option value="6840">환경공학 바이블 (대기편)</option>

                                <option value="6839">09 강하영 교수의 한국사 문제풀이 1</option>

                                <option value="6838">임장빈 교수의 영어 문제풀이 1</option>

                                <option value="6837">09 김철민 교수의 국어 문제풀이 1</option>

                                <option value="6836">09 김희영 교수의 보건행정 문제풀이 1</option>

                                <option value="6835">09 하재남 교수의 공중보건 문제풀이 1</option>

                                <option value="6834">09 김희영 교수의 지역사회간호 문제풀이 1</option>

                                <option value="6833">권경자 교수의 간호관리 문제풀이 1</option>

                                <option value="6832">09 최정환 교수의 생물 문제풀이 1</option>

                                <option value="6831">09 전공보건2 (3~4월)</option>

                                <option value="6830">전공영양 (식사요법 요점)</option>

                                <option value="6829">전공영양 (조리원리)</option>

                                <option value="6828">전공영양 (영양교육, 영양판정)</option>

                                <option value="6827">전공영양 (영양학, 생애주기영양학)</option>

                                <option value="6826">전공영양 (식사요법)</option>

                                <option value="6825">전공영양 (식품위생)</option>

                                <option value="6824">전공영양 (단체급식)</option>

                                <option value="6823">전공영양 (식품학)</option>

                                <option value="6822">갑야테스트</option>

                                <option value="6821">임장빈 J 영어 (이론완성반)</option>

                                <option value="6820">한국 근현대사</option>

                                <option value="6819">김종찬 교육학 (2009 촬영)</option>

                                <option value="6818">09 전공보건1 (1~2월)</option>

                                <option value="6817">2009 공중보건 (정규이론반)</option>

                                <option value="6816">2009 보건행정 (정규이론반)</option>

                                <option value="6815">2009 한국사 (정규이론반)</option>

                                <option value="6814">2009 영어 (정규이론반)</option>

                                <option value="6813">2009 국어 (정규이론반)</option>

                                <option value="6812">권경자 간호관리학</option>

                                <option value="6811">하이스코어 생물이론 (정규심화반)</option>

                                <option value="6810">하이탑 생물이론 (정규이론반)</option>

                                <option value="6809">2009 지역사회간호 (정규이론반)</option>

                                <option value="6808">교육학 문제</option>

                                <option value="6807">08 전공영양 (조리원리 문제)</option>

                                <option value="6806">08 전공영양 (식사요법 문제)</option>

                                <option value="6805">예전 영양교사 문제 (영양학 관련)</option>

                                <option value="6804">08 전공영양 (식품학 문제)</option>

                                <option value="6803">08 전공영양 (식품위생 문제)</option>

                                <option value="6802">08 전공영양 (단체급식 문제)</option>

                                <option value="6801">보복부 행정법총론</option>

                                <option value="6800">보복부 법규</option>

                                <option value="6799">보복부 공중보건문제</option>

                                <option value="6798">보복부 영어문제</option>

                                <option value="6797">위생사 보충강의</option>

                                <option value="6796">08 김희영 교수의 지역사회간호 문제풀이 4</option>

                                <option value="6795">08 권경자 교수의 간호관리 문제풀이 4</option>

                                <option value="6794">08 최정환 교수의 생물 문제풀이 3</option>

                                <option value="6793">08 이종민 교수의 생물 문제풀이 2</option>

                                <option value="6792">환경공학 핵심이론 및 문제풀이</option>

                                <option value="6791">영양교사 이론(조리원리_이)</option>

                                <option value="6789">09대비 생리학</option>

                                <option value="6790">09대비 생화학</option>

                                <option value="6788">09대비 단체급식</option>

                                <option value="6787">09대비 식품위생학</option>

                                <option value="6786">09대비 식품미생물</option>

                                <option value="6784">09대비 식품학</option>

                                <option value="6785">09대비 조리원리</option>

                                <option value="6783">예전 영양학 강의 (영양사)</option>

                                <option value="6782">09대비 영양교육 및 위생법규</option>

                                <option value="6781">09대비 식사요법</option>

                                <option value="6780">보충강의</option>

                                <option value="6779">위생법규 및 위생곤충학 (08대비)</option>

                                <option value="6778">위생사 실기종합 (08대비)</option>

                                <option value="6777">식품위생학 (08대비)</option>

                                <option value="6776">환경위생학 (08대비)</option>

                                <option value="6775">공중보건학 (08대비)</option>

                                <option value="6774">08 강하영 교수의 한국사 문제풀이 3</option>

                                <option value="6773">08 유재록 교수의 영어 문제풀이 3</option>

                                <option value="6772">08 김철민 교수의국어 문제풀이 3</option>

                                <option value="6771">08 김희영 교수의 보건행정 문제풀이 2</option>

                                <option value="6770">08 하재남 교수의 공중보건 문제풀이 4</option>

                                <option value="6769">08 김희영 교수의 지역사회간호 문제풀이 3</option>

                                <option value="6768">08 권경자 교수의 간호관리 문제풀이 3</option>

                                <option value="6767">08 최정환 교수의 생물 문제풀이 2</option>

                                <option value="6766">08 이종민 교수의 생물 문제풀이 1</option>

                                <option value="6765">보충강의입니다</option>

                                <option value="6763">생물 기출문제 분석특강</option>

                                <option value="6762">08 김희영 교수의 지역사회간호 문제풀이 2</option>

                                <option value="6761">08 권경자 교수의간호관리 문제풀이 2</option>

                                <option value="6760">하영길 교수의 보건행정 문제풀이</option>

                                <option value="6759">08 하재남 교수의 공중보건 문제풀이 3</option>

                                <option value="6758">08 유재록 교수의영어 문제풀이 2</option>

                                <option value="6757">08 강하영 교수의한국사 문제풀이 2</option>

                                <option value="6756">08 김철민 교수의국어 문제풀이 2</option>

                                <option value="6755">08 김한식 교수의환경공학 문제풀이 1</option>

                                <option value="6754">이문환 교수의 화학 문제풀이</option>

                                <option value="6753">간협문제집 문제풀이 (간호관리) - 현재 교재품절되어 강의만 신청가능.</option>

                                <option value="6752">간협문제집 문제풀이 (지역사회간호)</option>

                                <option value="6751">08 김희영 교수의보건행정 문제풀이 1</option>

                                <option value="6750">08 하재남 교수의 공중보건 문제풀이 2</option>

                                <option value="6749">08 강하영 교수의한국사 문제풀이 1</option>

                                <option value="6748">08 유재록 교수의영어 문제풀이 1</option>

                                <option value="6747">08 김철민 교수의국어 문제풀이 1</option>

                                <option value="6746">영양교사 이론(식사요법)</option>

                                <option value="6745">영양교사 이론(단체급식+식품위생학)</option>

                                <option value="6744">영양교사 이론(식품학)</option>

                                <option value="6743">영양교사 이론(영양학관련)</option>

                                <option value="6742">영양교사 이론(조리원리_유)</option>

                                <option value="6741">영양교사 전공종합</option>

                                <option value="6740">영양교사 이론 총종합</option>

                                <option value="6739">김지연 교수의식품위생 이론강의</option>

                                <option value="6387">전효성 교수의 화학 문제풀이</option>

                                <option value="6738">경기도 제한 문풀 (식위직)</option>

                                <option value="6363">08 하재남 교수의 공중보건 문제풀이 1</option>

                                <option value="6737">김지연 교수의 식품위생 문제풀이</option>

                                <option value="6736">경기도 제한 문풀 (의료직)</option>

                                <option value="6362">08 최정환 교수의 생물 문제풀이 1</option>

                                <option value="6353">이문환 교수의All가짐 화학이론</option>

                                <option value="6361">알기쉬운 생물이론</option>

                                <option value="6360">알토란 생물이론</option>

                                <option value="6386">하재남 교수의 환경보건</option>

                                <option value="6357">하이스코어 생물이론(정규 심화과정)</option>

                                <option value="6735">국민건강보험공단 종합반</option>

                                <option value="6734">노인장기요양보험법령국민건강보험법</option>

                                <option value="6733">직무수행에 필요한 응용능력</option>

                                <option value="6732">심화 한국사</option>

                                <option value="6385">영어심화반(독해+어휘)</option>

                                <option value="6352">오쌤영어</option>

                                <option value="6356">2008 공중보건(정규이론반)</option>

                                <option value="6359">2008 간호관리(정규이론반)</option>

                                <option value="6351">2008 보건행정(정규이론반)</option>

                                <option value="6350">브레인 영어 (정규이론반)</option>

                                <option value="6349">2008 국어(정규이론반)</option>

                                <option value="6348">2008 지역사회간호(정규이론반)</option>

                                <option value="6347">2008 한국사(정규이론반)</option>

                                <option value="6384">국어(심화반)Ⅱ</option>

                                <option value="6346">교육학(이론강의)</option>

                                <option value="6731">보건교사(전공+교육학) 종합</option>

                                <option value="6730">보건교사(전공)</option>

                                <option value="6728">성인*아동*기초간호*간호관리 전분야</option>

                                <option value="6727">지역사회정신간호분야 전과정</option>

                                <option value="6726">영양교사(조리원리)</option>

                                <option value="6725">영양교사(전공과목) 종합반</option>

                                <option value="6724">영양교사 종합반</option>

                                <option value="6383">교육학(문제풀이)</option>

                                <option value="6723">영양교사(식품위생학)</option>

                                <option value="6722">영양교사(단체급식)</option>

                                <option value="6720">영양교사(식품학)</option>

                                <option value="6719">영양교사(영양학/생애주기영양학/영양판정/영양교육)</option>

                                <option value="6345">신보건행정</option>

                                <option value="6718">영어독해 문제풀이(보건복지부대비)</option>

                                <option value="6717">공중보건 문제풀이(보건복지부대비)</option>

                                <option value="6460">영어 문제풀이(보건복지부대비)</option>

                                <option value="6716">보건직 문제풀이</option>

                                <option value="6715">2007위생사(위생곤충학)</option>

                                <option value="6714">2007위생사(식품위생학)</option>

                                <option value="6713">2007위생사(환경위생)</option>

                                <option value="6712">2007위생사(위생관계법규)</option>

                                <option value="6711">2007위생사(공중보건학)</option>

                                <option value="6710">영양학 이론 및 문제(구)</option>

                                <option value="6709">식품미생물 요약 및 문제</option>

                                <option value="6708">생화학 이론 및 문제</option>

                                <option value="6707">생리학 이론 및 문제</option>

                                <option value="6706">단체급식 이론 및 문제</option>

                                <option value="6705">식품위생학 이론 및 문제</option>

                                <option value="6704">조리원리 이론 및 문제</option>

                                <option value="6703">식품학 이론 및 문제</option>

                                <option value="6702">식사요법 이론 및 문제</option>

                                <option value="6701">(영양교육+식품위생관계법규) 이론 및 문제</option>

                                <option value="6700">2007 보건직 문제풀이(magic4)</option>

                                <option value="6698">2007 간호직 문제풀이(magic4)</option>

                                <option value="6699">2007 의료직 문제풀이(magic4)</option>

                                <option value="6448">지역사회간호 문제풀이(magic4)</option>

                                <option value="6382">간호관리 문제풀이(magic4)</option>

                                <option value="6411">심화생물 문제풀이(magic4)</option>

                                <option value="6381">생물 문제풀이(magic4)</option>

                                <option value="6432">신보건행정 문제풀이(magic4)</option>

                                <option value="6431">보건행정 문제풀이(magic4)</option>

                                <option value="6410">공중보건 문제풀이(magic4)</option>

                                <option value="6430">영어 문제풀이(magic4)</option>

                                <option value="6344">한국사 문제풀이(magic4)</option>

                                <option value="6429">국어 문제풀이(magic4)</option>

                                <option value="6697">교육학 문제풀이</option>

                                <option value="6696">9급 행정법 총론 문제풀이(보건복지부대비)</option>

                                <option value="6694">7급 행정법</option>

                                <option value="6693">9급 행정법 총론</option>

                                <option value="6692">교육학 이론</option>

                                <option value="6691">심화생물이론</option>

                                <option value="6690">의료직(제한경쟁) 문제풀이(magic3)</option>

                                <option value="6689">간호직(제한경쟁) 문제풀이(magic3)</option>

                                <option value="6688">보건직 문제풀이(magic3)</option>

                                <option value="6409">심화생물 문제풀이(magic3)</option>

                                <option value="6408">생물 문제풀이(magic3)</option>

                                <option value="6471">지역사회간호 문제풀이(magic3)</option>

                                <option value="6407">간호관리 문제풀이(magic3)</option>

                                <option value="6447">신보건행정 문제풀이(magic3)</option>

                                <option value="6406">공중보건 문제풀이(magic3)</option>

                                <option value="6446">영어 문제풀이(magic3)</option>

                                <option value="6380">한국사 문제풀이(magic3)</option>

                                <option value="6445">국어 문제풀이(magic3)</option>

                                <option value="6687">의료직(2과목) 문제풀이(magic2)</option>

                                <option value="6686">간호직(3과목) 문제풀이(magic2)</option>

                                <option value="6685">간호직(5과목) 문제풀이(magic2)</option>

                                <option value="6684">보건직 문제풀이(magic2)</option>

                                <option value="6405">생물 문제풀이(magic2)</option>

                                <option value="6428">지역사회간호 문제풀이(magic2)</option>

                                <option value="6404">간호관리 문제풀이(magic2)</option>

                                <option value="6470">신보건행정 문제풀이(magic2)</option>

                                <option value="6459">김희영의 보건행정 문제풀이(magic2)</option>

                                <option value="6403">공중보건 문제풀이(magic2)</option>

                                <option value="6427">영어 문제풀이(magic2)</option>

                                <option value="6444">한국사 문제풀이(magic2)</option>

                                <option value="6458">국어 문제풀이(magic2)</option>

                                <option value="6379">최정환의 생물 심화이론</option>

                                <option value="6683">2007 의료관계법규</option>

                                <option value="6682">2007 환경부 문제 종합</option>

                                <option value="6624">2007 환경부환경공학+환경보건(김순복)</option>

                                <option value="6426">환경보건 문제풀이</option>

                                <option value="6402">2007 환경부화학(전효성) 문제</option>

                                <option value="6681">2007 환경직 문제풀이</option>

                                <option value="6680">2007 보건직 문제풀이</option>

                                <option value="6378">2007 화학(이문환) 문제풀이</option>

                                <option value="6443">영어기출 문제풀이(magic1)</option>

                                <option value="6481">보건행정(김희영) 문제풀이(magic1)</option>

                                <option value="6486">신보건행정 문제풀이(magic1)</option>

                                <option value="6425">공중보건 문제풀이(magic1)</option>

                                <option value="6442">영어 문제풀이(magic1)</option>

                                <option value="6457">한국사 문제풀이(magic1)</option>

                                <option value="6469">국어 문제풀이(magic1)</option>

                                <option value="6679">김기연의 환경공학이론</option>

                                <option value="6678">의료관계법규 기출예상문제</option>

                                <option value="6343">2007 간호관리 이론</option>

                                <option value="6401">2007 지역사회간호</option>

                                <option value="6342">전효성 화학 이론 (화학사)</option>

                                <option value="6341">2007 공중보건 이론</option>

                                <option value="6377">2007 김희영의 보건행정 이론</option>

                                <option value="6340">2007 한국사(정규반)</option>

                                <option value="6358">신환경공학 이론</option>

                                <option value="6675">간호직 심화종합반</option>

                                <option value="6677">식품위생직 심화종합반</option>

                                <option value="6676">의료기술직 심화종합반</option>

                                <option value="6674">환경직 심화종합반</option>

                                <option value="6673">보건직 심화종합반</option>

                                <option value="6672">이벤트 강좌(문제풀이)</option>

                                <option value="6376">2007 신보건행정 이론</option>

                                <option value="6339">2007 국어(정규반)</option>

                                <option value="6671">심화종합반(국어+한국사+영어)</option>

                                <option value="6670">2006경기도 하반기 식품위생직</option>

                                <option value="6669">2006경기도 하반기 화학(이문환+전효성)</option>

                                <option value="6668">2006경기도 하반기 환경직</option>

                                <option value="6667">2006 식품위생(김지연)-경기도하반기</option>

                                <option value="6666">2006 식품위생(박미원)-경기도하반기</option>

                                <option value="6400">화학(전효성)-경기도하반기</option>

                                <option value="6399">화학(이문환)-경기도하반기</option>

                                <option value="6375">2007 영어(정규반)</option>

                                <option value="6374">한국사(심화반)</option>

                                <option value="6398">영어(심화반)</option>

                                <option value="6397">국어(심화반)Ⅰ</option>

                                <option value="6665">환경공학 쪽집게 특강</option>

                                <option value="6664">간호관리 쪽집게 특강</option>

                                <option value="6663">백성종의 생물 문제풀이</option>

                                <option value="6662">전효성의 화학 쪽집게 특강</option>

                                <option value="6661">영어(오권영) 쪽집게 특강</option>

                                <option value="6660">영어 쪽집게 특강</option>

                                <option value="6659">공중보건 쪽집게 특강</option>

                                <option value="6658">이문환의 화학 쪽집게 특강</option>

                                <option value="6657">보건행정 쪽집게 특강</option>

                                <option value="6656">국어 쪽집게 모의고사</option>

                                <option value="6655">지역사회간호 쪽집게 모의고사</option>

                                <option value="6654">이종민의 생물 쪽집게 모의고사</option>

                                <option value="6653">2006 한국사 쪽집게 특강</option>

                                <option value="6396">근현대사 (모의고사) 문제풀이</option>

                                <option value="6424">전효성의 화학(모의고사)문제풀이</option>

                                <option value="6422">백성종의 생물(모의고사) 문제풀이</option>

                                <option value="6423">이종민의 생물(모의고사) 문제풀이</option>

                                <option value="6373">지역사회간호(모의고사) 문제풀이</option>

                                <option value="6372">간호관리(모의고사) 문제풀이</option>

                                <option value="6456">3차 영어 기출문제풀이</option>

                                <option value="6512">보건행정(모의고사) 문제풀이</option>

                                <option value="6395">공중보건(모의고사) 문제풀이</option>

                                <option value="6394">영어(모의고사) 문제풀이</option>

                                <option value="6441">한국사(모의고사) 문제풀이</option>

                                <option value="6371">국어(모의고사) 문제풀이</option>

                                <option value="6652">2006위생사(위생곤충학)</option>

                                <option value="6651">2006위생사(식품위생학)</option>

                                <option value="6650">2006위생사(실기)</option>

                                <option value="6649">2006위생사(환경위생)</option>

                                <option value="6648">2006위생사(위생관계법규)</option>

                                <option value="6647">2006위생사(공중 보건학)</option>

                                <option value="6421">근현대사 (단원별) 문제풀이</option>

                                <option value="6480">2차 영어 기출문제풀이</option>

                                <option value="6646">2006 의료직(서울시) 모의고사 문제풀이</option>

                                <option value="6645">2006 환경직(서울시) 모의고사 문제풀이</option>

                                <option value="6644">2006 간호직(서울시) 모의고사 문제풀이</option>

                                <option value="6643">2006 보건직(서울시) 모의고사 문제풀이</option>

                                <option value="6370">환경공학(단원별) 문제풀이</option>

                                <option value="6393">이문환의 화학(단원별)문제풀이(시리즈2)</option>

                                <option value="6420">이종민의 생물(단원별) 문제풀이</option>

                                <option value="6392">지역사회간호(단원별) 문제풀이</option>

                                <option value="6391">간호관리(단원별) 문제풀이</option>

                                <option value="6514">보건행정(단원별) 문제풀이</option>

                                <option value="6419">공중보건(단원별) 문제풀이</option>

                                <option value="6418">영어(단원별) 문제풀이</option>

                                <option value="6468">한국사(단원별) 문제풀이</option>

                                <option value="6369">국어(단원별) 문제풀이</option>

                                <option value="6642">2008 영양사 이론 및 문제</option>

                                <option value="6640">2006생리학 이론 및 문제</option>

                                <option value="6641">2006생화학 이론 및 문제</option>

                                <option value="6639">2006단체급식 이론 및 문제</option>

                                <option value="6638">2006식품위생학 이론 및 문제</option>

                                <option value="6637">2006조리원리 이론 및 문제</option>

                                <option value="6636">2006식품학 이론 및 문제</option>

                                <option value="6635">2006영양학 이론 및 문제</option>

                                <option value="6634">2006(영양교육+식품위생관계법규) 이론 및 문제</option>

                                <option value="6633">식사요법 이론 및 문제</option>

                                <option value="6467">오권영의 영어기출문제</option>

                                <option value="6631">환경직문제풀이(경기도대비)</option>

                                <option value="6417">화학(단원별) 문제풀이</option>

                                <option value="6440">화학(모의고사형) 문제풀이</option>

                                <option value="6485">환경공학(단원별) 문제풀이</option>

                                <option value="6338">김순복의 환경공학 이론</option>

                                <option value="6630">의료관계법규(핵심이론 및 문제풀이)&lt;font color=blue&gt;&lt;b&gt;김희영교수님 샘플&lt;/b&gt;&lt;/font&gt;&lt;b&gt;&lt;font color=red&gt;(샘플강의용 목록)&lt;/font&gt;&lt;/b&gt;</option>

                                <option value="6337">2006 간호관리이론</option>

                                <option value="6336">2006 지역사회간호 이론</option>

                                <option value="6390">얼른후딱 생물문제풀이</option>

                                <option value="6416">[시리즈 ②] 지역사회간호문제풀이</option>

                                <option value="6415">[시리즈 ②] 간호관리문제풀이</option>

                                <option value="6516">[시리즈 ②]보건행정문제풀이</option>

                                <option value="6439">[시리즈 ②]공중보건문제풀이</option>

                                <option value="6455">[시리즈 ②] 영어문제풀이</option>

                                <option value="6479">[시리즈 ②] 한국사문제풀이</option>

                                <option value="6389">[시리즈 ②] 국어문제풀이</option>

                                <option value="6484">환경보건이론</option>

                                <option value="6629">이준규의 문학특강</option>

                                <option value="6627">2006 간호직 문제종합(시리즈②)</option>

                                <option value="6628">2006 환경직 문제종합</option>

                                <option value="6478">2006 보건직 문제종합(시리즈②)</option>

                                <option value="6438">[시리즈 ①] 화학문제풀이</option>

                                <option value="6437">[시리즈 ①] 지역사회간호문제풀이</option>

                                <option value="6436">[시리즈 ①] 간호관리문제풀이</option>

                                <option value="6517">[시리즈 ①]보건행정문제풀이</option>

                                <option value="6454">[시리즈 ①]공중보건문제풀이</option>

                                <option value="6466">[시리즈 ①] 영어문제풀이</option>

                                <option value="6483">[시리즈 ①] 한국사문제풀이</option>

                                <option value="6388">[시리즈 ①] 국어문제풀이</option>

                                <option value="6625">환경부대비 종합반(환경공학,화학,환경보건)</option>

                                <option value="6488">환경보건문제풀이</option>

                                <option value="6453">화학문제풀이(환경부)</option>

                                <option value="6623">환경공학문제풀이(환경부)</option>

                                <option value="6435">보건행정 이론강의</option>

                                <option value="6368">(한국사) 근현대사 이론특강</option>

                                <option value="6622">2006 의료관계법규(핵심이론 및 문제풀이)</option>

                                <option value="6333">헨리홍의 환경공학이론</option>

                                <option value="6367">백성종의 알토란 생물이론</option>

                                <option value="6366">2006 국어</option>

                                <option value="6414">한국사 이론(정규반)</option>

                                <option value="6335">2006 공중보건</option>

                                <option value="6620">선관위&amp;노동부 복원 문제(영어)</option>

                                <option value="6334">김진의 smile 영어(new)</option>

                                <option value="6365">알기쉬운 생물(이론)</option>

                                <option value="6452">5차 화학문제풀이(모의고사형)</option>

                                <option value="6525">2차 지역사회간호 문제(단원별2)</option>

                                <option value="6521">5차 간호관리 문제풀이(단원별)</option>

                                <option value="6364">헨리홍의 환경공학 문제풀이(교재 Ⅰ,Ⅱ권으로 구성)</option>

                                <option value="6618">위생사 시험은?(오리엔테이션)</option>

                                <option value="6617">보건복지부 7급 보건직 문제풀이 </option>

                                <option value="6616">보건복지부 9급 보건직 문제풀이 </option>

                                <option value="6626">럭셔리 보건행정 문제풀이&lt;font color=red&gt;교재별도</option>

                                <option value="6614">보건복지부보건의료관계법규</option>

                                <option value="6536">5차 보건복지부영어(오권영교수)</option>

                                <option value="6513">5차 보건복지부영어(김진교수)</option>

                                <option value="6413">5차 보건복지부공중보건</option>

                                <option value="6490">지역사회간호 이론</option>

                                <option value="6610">위생사(위생곤충학)</option>

                                <option value="6609">위생사(식품위생학)</option>

                                <option value="6608">위생사(실기)</option>

                                <option value="6607">위생사(환경위생)</option>

                                <option value="6606">위생사(위생관계법규)&lt;font color=red&gt;클릭하세요.&lt;/font&gt;</option>

                                <option value="6605">위생사(공중 보건학)</option>

                                <option value="6604">전산직 종합</option>

                                <option value="6603">프로그래밍언어(9월8일 오픈)</option>

                                <option value="6601">컴퓨터일반(9월 2일 오픈)</option>

                                <option value="6602">산업위생관리산업기사(실기)</option>

                                <option value="6600">환기(일반, 전체, 국소)</option>

                                <option value="6599">작업환경측정 및 평가(실기)</option>

                                <option value="6598">작업환경관리(실기)</option>

                                <option value="6597">사무자동화산업기사필기</option>

                                <option value="6465">간호관리 이론 (학원정규이론수업)</option>

                                <option value="6595">2005생화학 이론 및 문제</option>

                                <option value="6594">2005생리학 이론 및 문제</option>

                                <option value="6593">식품위생관계법규 이론 및 문제</option>

                                <option value="6592">2005식품위생학 이론 및 문제</option>

                                <option value="6591">2005조리원리 이론 및 문제</option>

                                <option value="6589">2005식품학 이론 및 문제</option>

                                <option value="6588">2005영양학 이론 및 문제</option>

                                <option value="6587">2005영양교육 이론 및 문제</option>

                                <option value="6586">2005식사요법 이론 및 문제</option>

                                <option value="6526">1차 김희영의 지역사회간호 문제(단원별)</option>

                                <option value="6354">오쌤영어특강</option>

                                <option value="6451">2005 보건행정 이론강의</option>

                                <option value="6584">환경직문제풀이(모의고사형)</option>

                                <option value="6583">보건직문제풀이(모의고사형)</option>

                                <option value="6527">3차 지역사회간호문제풀이(모의고사형)</option>

                                <option value="6522">4차 간호관리문제풀이(모의고사형)</option>

                                <option value="6464">4차 환경공학문제풀이(모의고사형)</option>

                                <option value="6463">4차 화학문제풀이(모의고사형)</option>

                                <option value="6555">4차 보건행정문제풀이(모의고사형)</option>

                                <option value="6434">공중보건문제풀이(모의고사형)</option>

                                <option value="6578">4차 영어문제풀이(모의고사형)</option>

                                <option value="6511">4차 한국사문제풀이(모의고사형)</option>

                                <option value="6509">4차 국어문제풀이(모의고사형)</option>

                                <option value="6519">이경연의 식품미생물 문제풀이</option>

                                <option value="6576">산업위생관리산업기사 필기</option>

                                <option value="6575">산업위생학</option>

                                <option value="6574">작업환경측정 및 평가</option>

                                <option value="6573">작업환경관리</option>

                                <option value="6571">산업환기</option>

                                <option value="6545">3차 식품위생 적중 예상문제풀이</option>

                                <option value="6569">3차 의료관계법규문제풀이(단원별)</option>

                                <option value="6568">2차 지역사회간호문제풀이(단원별)</option>

                                <option value="6523">3차 간호관리문제풀이(단원별)</option>

                                <option value="6567">환경직문제풀이(단원별)</option>

                                <option value="6477">3차 화학문제풀이(단원별)</option>

                                <option value="6566">보건직문제풀이(단원별)</option>

                                <option value="6476">3차 환경공학문제풀이(단원별)</option>

                                <option value="6450">공중보건문제풀이(단원별)</option>

                                <option value="6565">3차 보건행정문제풀이(단원별)</option>

                                <option value="6554">3차 한국사문제풀이(단원별)</option>

                                <option value="6585">3차 영어문제풀이(단원별)</option>

                                <option value="6534">3차 국어문제풀이(단원별)</option>

                                <option value="6561">정보처리기사</option>

                                <option value="6560">정보처리기능사(필기)</option>

                                <option value="6502">2005단체급식 이론 및 문제</option>

                                <option value="6559">의료관계법규이론</option>

                                <option value="6355">이문환의 화학이론</option>

                                <option value="6570">2차 김지연의 식품위생문제풀이</option>

                                <option value="6581">2차 권경자의 간호관리문제풀이</option>

                                <option value="6515">고성진의 보건행정문제풀이</option>

                                <option value="6558">보건행정이론(6월20일 오픈)</option>

                                <option value="6580">1차 두현기의 화학문제풀이 특강(8주)</option>

                                <option value="6412">3차 적중 생물 모의고사특강</option>

                                <option value="6433">2차 생물문제풀이(6주)</option>

                                <option value="6557">환경직문제(6주)</option>

                                <option value="6556">보건직문제(6주)</option>

                                <option value="6462">2차 화학문제풀이(6주)</option>

                                <option value="6489">2차 환경공학문제풀이(6주)</option>

                                <option value="6579">2차 보건행정문제풀이(6주)</option>

                                <option value="6461">2차 공중보건문제풀이(6주)</option>

                                <option value="6563">2차 한국사문제풀이(6주)</option>

                                <option value="6612">2차 영어문제풀이(6주)</option>

                                <option value="6553">2차 국어문제풀이(6주)</option>

                                <option value="6582">1차 장혜림의 지역사회간호 핵심이론 및 문제풀이</option>

                                <option value="6590">1차 권경자의 간호관리 핵심이론 및 문제풀이</option>

                                <option value="6552">1차 환경보건문제풀이</option>

                                <option value="6551">영양사문제풀이</option>

                                <option value="6549">생리학</option>

                                <option value="6550">생화학</option>

                                <option value="6548">단체급식</option>

                                <option value="6547">식품위생관계법규</option>

                                <option value="6546">식품위생학</option>

                                <option value="6544">조리원리</option>

                                <option value="6543">식품학</option>

                                <option value="6542">영양학</option>

                                <option value="6541">영양교육</option>

                                <option value="6540">식사요법</option>

                                <option value="6621">심화학습 (근,현대사)</option>

                                <option value="6539">심화학습 (문학영역)</option>

                                <option value="6449">1차 이종민의 생물 문제풀이 특강(8주)</option>

                                <option value="6632">9급 기초영문법(이벤트강좌)</option>

                                <option value="6538">지방직 대비(보건직)</option>

                                <option value="6537">보건행정문제풀이</option>

                                <option value="6475">공중보건문제풀이</option>

                                <option value="6510">1차 영어문제풀이(8주)</option>

                                <option value="6535">한국사문제풀이</option>

                                <option value="6562">1차 국어문제풀이(8주)</option>

                                <option value="6532">의료기술직문제풀이</option>

                                <option value="6533">식품위생직문제풀이</option>

                                <option value="6531">간호직문제풀이</option>

                                <option value="6530">환경직문제풀이</option>

                                <option value="6529">보건직문제풀이</option>

                                <option value="6528">지역사회간호문제풀이</option>

                                <option value="6524">간호관리문제풀이</option>

                                <option value="6520">1차 김민지의 식품미생물 문제풀이(8주)</option>

                                <option value="6518">1차 식품화학문제풀이(8주)</option>

                                <option value="6572">1차 식품위생문제풀이(8주)</option>

                                <option value="6492">1차 환경공학문제풀이(8주)</option>

                                <option value="6474">1차 전효성의 화학문제풀이(8주)</option>

                                <option value="6473">1차 공중보건문제풀이(8주)</option>

                                <option value="6615">1차 보건행정문제풀이(8주)</option>

                                <option value="6613">1차 영어문제풀이(8주)</option>

                                <option value="6564">1차 한국사문제풀이(8주)</option>

                                <option value="6577">1차 국어문제풀이(8주)</option>

                                <option value="6508">위생사실기</option>

                                <option value="6507">위생관계법규</option>

                                <option value="6506">위생곤충학</option>

                                <option value="6505">식품위생학</option>

                                <option value="6504">환경위생학</option>

                                <option value="6503">공중보건학</option>

                                <option value="6501">식품미생물학 이론</option>

                                <option value="6500">2007 위생사</option>

                                <option value="6499">의료기술직 종합</option>

                                <option value="6497">간호직 종합</option>

                                <option value="6498">식품위생직 종합</option>

                                <option value="6496">환경직 종합</option>

                                <option value="6495">보건직 종합</option>

                                <option value="6494">의료관계법규</option>

                                <option value="6619">이종민의 생물이론</option>

                                <option value="6493">이경연의 식품미생물</option>

                                <option value="6491">해부생리학</option>

                                <option value="6611">지역사회간호</option>

                                <option value="6596">간호관리</option>

                                <option value="6487">식품화학</option>

                                <option value="6472">박미원의 식품위생</option>

                                <option value="6482">권숙영의 식품위생</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'faq')
<section class="rightCont">
    <div class="rightTitle">
        <h3>FAQ</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0014" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="" />
            <input type="hidden" name="fileCnt" value="0" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    FAQ 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>카테고리</strong></th>
                        <td colspan="3">
                            <div style="width: 250px; float: left; display: inline;">
                                <select name="nttCat" id="nttCat">
                                    <option value="">선택</option>

                                    <option value="11">동영상강의</option>

                                    <option value="12">인터넷서점</option>

                                    <option value="13">회원정보</option>

                                    <option value="14">주문/결제</option>

                                    <option value="15">기타</option>

                                    <option value="16">안내문</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>순서</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSeq" id="nttSeq" value="" class="chknum" maxlength="5" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'news')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학원소식</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0002" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="2" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    학원소식 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'notice')
<section class="rightCont">
    <div class="rightTitle">
        <h3>공지사항</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0001" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    공지사항 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>카테고리</strong></th>
                        <td colspan="3">
                            <div style="width: 250px; float: left; display: inline;">
                                <select name="nttCat" id="nttCat">
                                    <option value="">선택</option>

                                    <option value="11">전체공지</option>

                                    <option value="12">긴급공지</option>

                                    <option value="13">직렬공지</option>
                                </select>
                            </div>

                            <div style="width: 250px; float: left;">
                                <select name="nttCatLect" id="nttCatLect" style="display: none;">
                                    <option value="">선택</option>

                                    <option value="LE00001">간호직 공무원</option>

                                    <option value="LE00002">보건직 공무원</option>

                                    <option value="LE00004">보건연구사</option>

                                    <option value="LE00005">보건복지부 공무원</option>

                                    <option value="LE00003">보건진료직 공무원</option>

                                    <option value="LE00006">의료기술직 공무원</option>

                                    <option value="LE00007">방역직 공무원</option>

                                    <option value="LE00010">식품위생직 공무원</option>

                                    <option value="LE00008">환경직 공무원</option>

                                    <option value="LE00009">환경연구사</option>

                                    <option value="LE00011">조리직 공무원</option>

                                    <option value="LE00012">영양교사</option>

                                    <option value="LE00013">보건교사</option>

                                    <option value="LE00016">영양사</option>

                                    <option value="LE00017">위생사</option>

                                    <option value="LE00015">간호사</option>

                                    <option value="LE00019">식품(산업)기사</option>

                                    <option value="LE00014">교육학</option>
                                </select>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $("select[name='nttCatLect']").hide();
                                    if ($("select[name='nttCatLect']").val()) {
                                        $("select[name='nttCat']").val("13");
                                        $("select[name='nttCatLect']").show();
                                    }
                                    $("select[name='nttCat']").on("change", function () {
                                        if ($(this).val() == "13") {
                                            $("select[name='nttCatLect']").show();
                                        } else {
                                            $("select[name='nttCatLect']").hide();
                                        }
                                    });
                                });
                            </script>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'passing')
<section class="rightCont">
    <div class="rightTitle">
        <h3>REAL 합격수기</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0016" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="1" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    REAL 합격수기 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'origin')
<section class="rightCont">
    <div class="rightTitle">
        <h3>본원출신 합격자</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0017" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="Y" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    본원출신 합격자 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>지역</strong></th>
                        <td colspan="3">
                            <input type="text" name="bExt1" id="bExt1" value="" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'announcement')
<section class="rightCont">
    <div class="rightTitle">
        <h3>본원출신 합격자</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0017" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="Y" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    본원출신 합격자 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>지역</strong></th>
                        <td colspan="3">
                            <input type="text" name="bExt1" id="bExt1" value="" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'competition')
<section class="rightCont">
    <div class="rightTitle">
        <h3>경쟁률 및 합격선</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0005" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    경쟁률 및 합격선 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'examinee')
<section class="rightCont">
    <div class="rightTitle">
        <h3>수험가 뉴스</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0006" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    수험가 뉴스 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>수험가 뉴스</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0006" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    수험가 뉴스 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'errata')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학습자료실</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0007" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    학습자료실 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th>강의명</th>
                        <td colspan="3">
                            <select name="nttCat" id="nttCat" style="width: 50%;">
                                <option value="">선택</option>

                                <option value="8074">2021 영양교사 실전모의고사 (김)</option>

                                <option value="8073">2021 영양교사 실전모의고사 (이)</option>

                                <option value="8072">2021 영양교사 실전모의고사 (최)</option>

                                <option value="8071">화질 테스트 전용</option>

                                <option value="8070">2021 식품위생 이론 및 심화완성</option>

                                <option value="8069">2021 하이스코어 공무원 생물 (심화반)</option>

                                <option value="8068">2021 지역사회간호 (정규이론반)</option>

                                <option value="8067">2021 간호관리 (정규이론반)</option>

                                <option value="8066">보건연구사 역학 및 보건행정 (최신판)</option>

                                <option value="8065">2021 이승훈 환경보건 (정규이론반)</option>

                                <option value="8064">2021 보건행정 (정규이론반)</option>

                                <option value="8063">2021 이승훈 공중보건 (정규이론반)</option>

                                <option value="8062">2021 김희영 공중보건 (정규이론반)</option>

                                <option value="8061">2021 한국사 (정규이론반)</option>

                                <option value="8060">2021 영어 (정규이론반)</option>

                                <option value="8059">2021 국어 (정규이론반)</option>

                                <option value="8058">2021 환경공학 실전 모의고사</option>

                                <option value="8056">2021 식품위생 실전 모의고사</option>

                                <option value="8057">2021 환경공학 기출분석 및 단원별 문제특강</option>

                                <option value="8055">2021 식품위생 기출분석 및 단원별 문제특강</option>

                                <option value="8053">2021 화학 기출분석 및 단원별 문제특강</option>

                                <option value="8054">2021 화학 실전 모의고사</option>

                                <option value="8052">2021 지역사회간호 실전 모의고사</option>

                                <option value="8050">2021 간호관리 실전 모의고사</option>

                                <option value="8051">2021 지역사회간호 기출분석 및 단원별 문제특강</option>

                                <option value="8049">2021 간호관리 기출분석 및 단원별 문제특강</option>

                                <option value="8048">2021 생물 실전 모의고사</option>

                                <option value="8047">2021 생물 기출분석 및 단원별 문제특강</option>

                                <option value="8045">2021 보건행정 기출분석 및 단원별 문제특강</option>

                                <option value="8046">2021 보건행정 실전 모의고사</option>

                                <option value="8044">2021 공중보건 실전 모의고사</option>

                                <option value="8043">2021 공중보건 기출분석 및 단원별 문제특강</option>

                                <option value="8041">2021 한국사 기출분석 및 단원별 문제특강</option>

                                <option value="8042">2021 한국사 실전 모의고사</option>

                                <option value="8040">2021 영어 실전 모의고사</option>

                                <option value="8039">2021 영어 기출분석 및 단원별 문제특강</option>

                                <option value="8038">2021 국어 실전 모의고사</option>

                                <option value="8037">2021 국어 기출분석 및 단원별 문제특강</option>

                                <option value="8036">2021 김희영 전공보건 영역별 문제풀이반</option>

                                <option value="8035">2021 오정화 전공보건 영역별 문제풀이반</option>

                                <option value="8034">[2021 문제] 고급영양학 및 생리,생화학</option>

                                <option value="8033">[2021 문제] 단체급식 및 실습</option>

                                <option value="8032">[2021 문제] 식품위생학</option>

                                <option value="8031">[2021 문제] 조리원리 및 실습</option>

                                <option value="8030">[2021 문제] 식품학</option>

                                <option value="8028">[2021 문제] 생애주기영양학</option>

                                <option value="8029">[2021 문제] 식사요법 및 실습</option>

                                <option value="8027">[2021 문제] 영양판정 및 영양교육</option>

                                <option value="8026">2020 공무원 생물 일일 특강</option>

                                <option value="8025">(42회 위생사 합격) 공중보건학, 위생관계법규</option>

                                <option value="8024">(42회 위생사 합격) 식품위생학</option>

                                <option value="8023">(42회 위생사 합격) 환경위생학, 위생곤충학</option>

                                <option value="8022">(44회 영양사) 식품학 이론 및 문제</option>

                                <option value="8021">(44회 영양사) 조리원리 이론 및 문제</option>

                                <option value="8020">(44회 영양사) 단체급식 이론 및 문제</option>

                                <option value="8017">(44회 영양사) 식사요법 이론 및 문제</option>

                                <option value="8016">(44회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="8015">(44회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="8014">(44회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="8013">(44회 영양사) 영양학 이론 및 문제</option>

                                <option value="8012">생물 봉투 모의고사 특강</option>

                                <option value="8011">박동현 9급공무원영어 기본완성</option>

                                <option value="8010">(2021) 고급영양학 및 생리,생화학</option>

                                <option value="8009">(2021) 식품위생학</option>

                                <option value="8008">(2021) 단체급식 및 실습</option>

                                <option value="8007">(2021) 조리원리 및 실습</option>

                                <option value="8005">(2021) 식사요법 및 실습</option>

                                <option value="8006">(2021) 식품학</option>

                                <option value="8004">(2021) 생애주기영양학</option>

                                <option value="8003">(2021) 영양판정 및 영양교육</option>

                                <option value="8002">신경향 식품화학개론 실전 모의고사반</option>

                                <option value="8001">2020 의료관계법규 이론 및 문제완성반</option>

                                <option value="8000">신경향 식품화학개론 기출 및 단원별 문제완성</option>

                                <option value="7999">평혜림 환경공학 이론완성 단과반 [소음진동 및 폐기물편]</option>

                                <option value="7998">평혜림 환경공학 이론완성 단과반 [대기편]</option>

                                <option value="7997">평혜림 환경공학 이론완성 단과반 [수질편]</option>

                                <option value="7996">2021 오정화 전공보건 이론 및 심화 및 기출분석 2</option>

                                <option value="7988">이경연 교수의 식품화학개론 최신 이론완성반</option>

                                <option value="7987">공무원 환경보건 최신 문제풀이 완성반</option>

                                <option value="7986">보건교사 임용대비 마인드맵1</option>

                                <option value="7985">보건교사 임용대비 마인드맵</option>

                                <option value="7984">2021 오정화 전공보건 이론 및 심화 및 기출분석 1</option>

                                <option value="7983">2021 김희영 전공보건 이론 및 심화 및 기출분석</option>

                                <option value="7982">2020 영양교사 실전모의고사 (김)</option>

                                <option value="7981">2020 영양교사 실전모의고사 (이)</option>

                                <option value="7980">2020 영양교사 실전모의고사 (최)</option>

                                <option value="7979">환경보건 최신 이론완성반 [현재 교재 품절]</option>

                                <option value="7977">2020 환경공학 단원별 문제완성</option>

                                <option value="7978">2020 환경공학 실전 모의고사</option>

                                <option value="7976">2020 환경공학 기출문제 분석특강</option>

                                <option value="7974">2020 생물 단원별 문제완성</option>

                                <option value="7975">2020 생물 실전 모의고사</option>

                                <option value="7973">2020 생물 기출문제 분석특강</option>

                                <option value="7972">2020 하이스코어 생물 (심화반)</option>

                                <option value="7971">최신 하이탑 생명과학 [공무원생물 이론완성]</option>

                                <option value="7970">2020 지역사회간호 실전 모의고사</option>

                                <option value="7968">2020 지역사회간호 기출문제 분석특강</option>

                                <option value="7969">2020 지역사회간호 단원별 문제완성</option>

                                <option value="7967">2020 지역사회간호학 (정규이론반)</option>

                                <option value="7966">2020 간호관리 실전 모의고사</option>

                                <option value="7965">2020 간호관리 단원별 문제완성</option>

                                <option value="7964">2020 간호관리 기출문제 분석특강</option>

                                <option value="7963">2020 간호관리학 (정규이론반)</option>

                                <option value="7962">평혜림 환경공학 이론완성 2 [소음진동 및 폐기물]</option>

                                <option value="7961">평혜림 환경공학 이론완성 1 [수질,대기]</option>

                                <option value="7960">2020 식품위생 실전 모의고사반</option>

                                <option value="7959">2020 식품위생 기출 및 단원별 문제풀이</option>

                                <option value="7958">2020 김지연 식품위생 (정규이론반)</option>

                                <option value="7957">2020 화학 실전 모의고사</option>

                                <option value="7956">2020 화학 단원별 문제완성</option>

                                <option value="7955">2020 화학 기출문제 분석특강</option>

                                <option value="7954">강두수 공무원 화학 [정규이론반]</option>

                                <option value="7953">2020 이승훈 공중보건 (정규이론반)</option>

                                <option value="7952">NEW 한국 근현대사 특강</option>

                                <option value="7951">2020 한국사 실전 모의고사</option>

                                <option value="7950">2020 한국사 단원별 문제완성</option>

                                <option value="7948">2020 한국사 (정규이론반)</option>

                                <option value="7949">2020 한국사 기출문제 분석특강</option>

                                <option value="7947">2020 박동현 영어 문제풀이 3탄</option>

                                <option value="7945">2020 박동현 영어 문제풀이 1탄</option>

                                <option value="7946">2020 박동현 영어 문제풀이 2탄</option>

                                <option value="7944">2020 영어 실전 모의고사</option>

                                <option value="7942">2020 영어 단원별 문제완성</option>

                                <option value="7941">2020 영어 기출문제 분석특강</option>

                                <option value="7940">2020 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7939">2020 국어 실전 모의고사</option>

                                <option value="7937">2020 국어 기출문제 분석특강</option>

                                <option value="7938">2020 국어 단원별 문제완성</option>

                                <option value="7936">2020 국어 (정규이론반)</option>

                                <option value="7935">2020 보건행정 실전 모의고사</option>

                                <option value="7934">2020 보건행정 단원별 문제완성</option>

                                <option value="7933">2020 보건행정 기출문제 분석특강</option>

                                <option value="7931">2020 공중보건 단원별 문제완성</option>

                                <option value="7932">2020 공중보건 실전 모의고사</option>

                                <option value="7930">2020 공중보건 기출문제 분석특강</option>

                                <option value="7929">2020 김희영 보건행정 (정규이론반)</option>

                                <option value="7928">2020 김희영 공중보건 (정규이론반)</option>

                                <option value="7927">[2020 문제] 고급영양학 및 생리,생화학</option>

                                <option value="7925">[2020 문제] 단체급식 및 실습</option>

                                <option value="7926">[2020 문제] 식품위생학</option>

                                <option value="7924">[2020 문제] 조리원리 및 실습</option>

                                <option value="7923">[2020 문제] 식품학</option>

                                <option value="7922">[2020 문제] 식사요법 및 실습</option>

                                <option value="7921">[2020 문제] 생애주기영양학</option>

                                <option value="7920">[2020 문제] 영양판정 및 영양교육</option>

                                <option value="7919">간호사 합격 최종 마무리 문제풀이 [노성신 교수]</option>

                                <option value="7917">간호사 합격 최종 마무리 문제풀이 [김희영 교수]</option>

                                <option value="7918">간호사 합격 최종 마무리 문제풀이 [오정화 교수]</option>

                                <option value="7916">[간호사 합격] 보건의약관계법규 이론 및 문제완성</option>

                                <option value="7915">[간호사 합격] 기본간호학 이론 및 문제완성</option>

                                <option value="7914">[간호사 합격] 간호관리학 이론 및 문제완성</option>

                                <option value="7913">[간호사 합격] 정신간호학 이론 및 문제완성</option>

                                <option value="7912">[간호사 합격] 지역사회간호학 이론 및 문제완성</option>

                                <option value="7911">[간호사 합격] 아동간호학 이론 및 문제완성</option>

                                <option value="7910">[간호사 합격] 모성간호학 이론 및 문제완성</option>

                                <option value="7909">[간호사 합격] 성인간호학 이론 및 문제완성</option>

                                <option value="7908">2020 노성신 전공보건 영역별 집중 문제풀이반</option>

                                <option value="7907">2020 오정화 전공보건 영역별 집중 문제풀이반</option>

                                <option value="7906">2020 김희영 전공보건 영역별 집중 문제풀이반</option>

                                <option value="7905">(2019 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7904">(2019 위생사) 식품위생학</option>

                                <option value="7903">(2019 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7902">감염의료관계법규 총정리 문제특강</option>

                                <option value="7901">행정법 총정리 문제특강</option>

                                <option value="7900">보건의료관계법규 총정리 문제특강</option>

                                <option value="7899">(44회 영양사) 조리원리 모의고사</option>

                                <option value="7898">(44회 영양사) 식품학 모의고사</option>

                                <option value="7897">(44회 영양사) 단체급식 모의고사</option>

                                <option value="7896">(44회 영양사) 식사요법 모의고사</option>

                                <option value="7895">(44회 영양사) 영양교육 및 식품위생관계법규 모의고사</option>

                                <option value="7894">(44회 영양사) 식품위생학 모의고사</option>

                                <option value="7893">(44회 영양사) 생리학 및 생화학 모의고사</option>

                                <option value="7892">(44회 영양사) 영양학 모의고사</option>

                                <option value="7891">(43회 영양사) 조리원리 이론 및 문제</option>

                                <option value="7890">(43회 영양사) 식품학 이론 및 문제</option>

                                <option value="7889">(43회 영양사) 단체급식 이론 및 문제</option>

                                <option value="7888">(43회 영양사) 식사요법 이론 및 문제</option>

                                <option value="7887">(43회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7886">(43회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7885">(43회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7884">(43회 영양사) 영양학 이론 및 문제</option>

                                <option value="7883">공무원 생물 기출 700제 특강</option>

                                <option value="7882">(2020) 고급영양학 및 생리,생화학</option>

                                <option value="7881">(2020) 식품위생학</option>

                                <option value="7880">(2020) 단체급식 및 실습</option>

                                <option value="7879">(2020) 조리원리 및 실습</option>

                                <option value="7878">(2020) 식품학</option>

                                <option value="7877">(2020) 식사요법 및 실습</option>

                                <option value="7876">(2020) 생애주기영양학</option>

                                <option value="7875">(2020) 영양판정 및 영양교육</option>

                                <option value="7874">2019 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7873">[지역사회간호] 서울시 동형 모의고사</option>

                                <option value="7872">[간호관리] 서울시 동형 모의고사</option>

                                <option value="7871">[생물] 서울시 동형 모의고사</option>

                                <option value="7870">2019 하이스코어 생물 (심화반)</option>

                                <option value="7869">박동현 교수의 8,9급 영어 기본독해</option>

                                <option value="7868">2020 노성신 전공보건 이론완성 및 기출분석</option>

                                <option value="7867">2020 오정화 전공보건 이론완성 및 기출분석</option>

                                <option value="7866">2020 김희영 전공보건 이론완성 및 기출분석</option>

                                <option value="7864">공무원 면접 필수 특강</option>

                                <option value="7863">2019 영양교사 실전모의고사 (김)</option>

                                <option value="7862">2019 영양교사 실전모의고사 (이)</option>

                                <option value="7861">2019 영양교사 실전모의고사 (최)</option>

                                <option value="7860">하이탑 생명과학 [공무원생물 이론완성]</option>

                                <option value="7859">환경화학 이론완성 [연구사,7급대비]</option>

                                <option value="7858">NEW 공중보건 심화이론 특강</option>

                                <option value="7857">2019 보건행정 실전 모의고사</option>

                                <option value="7856">2019 보건행정 단원별 문제완성</option>

                                <option value="7855">2019 보건행정 기출문제 분석특강</option>

                                <option value="7854">2019 보건행정 (정규이론반)</option>

                                <option value="7853">2019 공중보건 실전 모의고사</option>

                                <option value="7852">2019 공중보건 단원별 문제완성</option>

                                <option value="7851">2019 공중보건 기출문제 분석특강</option>

                                <option value="7850">2019 이승훈 공중보건 (정규이론반)</option>

                                <option value="7849">2019 김희영 공중보건 (정규이론반)</option>

                                <option value="7848">2019 환경공학 실전 모의고사</option>

                                <option value="7847">2019 환경공학 단원별 문제완성</option>

                                <option value="7846">2019 환경공학 기출문제 분석특강</option>

                                <option value="7845">2019 생물 실전 모의고사</option>

                                <option value="7844">2019 생물 단원별 문제완성</option>

                                <option value="7843">2019 생물 기출문제 분석특강</option>

                                <option value="7842">2019 지역사회간호 실전 모의고사</option>

                                <option value="7841">2019 지역사회간호 단원별 문제완성</option>

                                <option value="7840">2019 지역사회간호 기출문제 분석특강</option>

                                <option value="7839">2019 간호관리 실전 모의고사</option>

                                <option value="7838">2019 간호관리 단원별 문제완성</option>

                                <option value="7837">2019 간호관리 기출문제 분석특강</option>

                                <option value="7836">2019 한국사 실전 모의고사</option>

                                <option value="7835">2019 한국사 단원별 문제완성</option>

                                <option value="7834">2019 한국사 기출문제 분석특강</option>

                                <option value="7833">박동현 영어 문제풀이 3탄</option>

                                <option value="7832">박동현 영어 문제풀이 2탄</option>

                                <option value="7831">박동현 영어 문제풀이 1탄</option>

                                <option value="7830">2019 영어 실전 모의고사</option>

                                <option value="7829">2019 영어 단원별 문제완성</option>

                                <option value="7828">2019 영어 기출문제 분석특강</option>

                                <option value="7827">2019 국어 실전 모의고사</option>

                                <option value="7826">2019 국어 단원별 문제완성</option>

                                <option value="7825">2019 국어 기출문제 분석특강</option>

                                <option value="7824">2019 한국사 (정규이론반)</option>

                                <option value="7823">2019 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7822">2019 국어 (정규이론반)</option>

                                <option value="7821">이경연 식품화학개론 실전 모의고사</option>

                                <option value="7820">이경연 식품화학개론 기출 및 단원별 문제풀이</option>

                                <option value="7818">이경연 식품화학개론 이론완성반</option>

                                <option value="7817">2019 식품위생 실전 모의고사반</option>

                                <option value="7816">2019 식품위생 기출 및 단원별 문제풀이</option>

                                <option value="7815">2019 화학 실전 모의고사</option>

                                <option value="7814">2019 화학 단원별 문제완성</option>

                                <option value="7813">2019 화학 기출문제 분석특강</option>

                                <option value="7812">2019 식품위생 꼼꼼한 이론완성반</option>

                                <option value="7811">보건연구사 역학 완성반</option>

                                <option value="7810">(2019 문제) 고급영양학</option>

                                <option value="7809">(2019 문제) 식품위생학</option>

                                <option value="7808">(2019 문제) 단체급식 및 실습</option>

                                <option value="7807">(2019 문제) 조리원리 및 실습</option>

                                <option value="7806">(2019 문제) 식품학</option>

                                <option value="7805">(2019 문제) 식사요법 및 실습</option>

                                <option value="7804">(2019 문제) 영양판정 및 영양교육</option>

                                <option value="7803">(2019 문제) 생애주기영양학</option>

                                <option value="7802">[59회 간호사] 보건의약관계법규 모의고사</option>

                                <option value="7801">[59회 간호사] 기본간호학 모의고사</option>

                                <option value="7800">[59회 간호사] 간호관리학 모의고사</option>

                                <option value="7799">[59회 간호사] 정신간호학 모의고사</option>

                                <option value="7798">[59회 간호사] 지역사회간호학 모의고사</option>

                                <option value="7797">[59회 간호사] 아동간호학 모의고사</option>

                                <option value="7796">[59회 간호사] 모성간호학 모의고사</option>

                                <option value="7795">59회 간호사 최종 마무리 문제풀이 [노성신 교수]</option>

                                <option value="7794">(59회 간호사) 보건의약관계법규 이론 및 문제</option>

                                <option value="7793">(59회 간호사) 기본간호학 이론 및 문제</option>

                                <option value="7792">(59회 간호사) 간호관리학 이론 및 문제</option>

                                <option value="7791">(59회 간호사) 정신간호학 이론 및 문제</option>

                                <option value="7790">(59회 간호사) 지역사회간호학 이론 및 문제</option>

                                <option value="7789">(59회 간호사) 아동간호학 이론 및 문제</option>

                                <option value="7788">(59회 간호사) 모성간호학 이론 및 문제</option>

                                <option value="7787">(59회 간호사) 성인간호학 이론 및 문제</option>

                                <option value="7786">2019 지역사회간호학 (정규이론반)</option>

                                <option value="7785">2019 간호관리학 (정규이론반)</option>

                                <option value="7784">캠벨 생명과학 요점과 문제풀이 [공무원생물]</option>

                                <option value="7783">(2018 위생사) 식품위생학</option>

                                <option value="7782">(2018 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7781">(2018 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7780">박동현 9급 영어 [기본 완성편]</option>

                                <option value="7779">STP 공무원 화학 [이론완성반]</option>

                                <option value="7778">공무원 생물 수능형 문제완성 특강</option>

                                <option value="7777">환경보건 문제풀이 완성</option>

                                <option value="7776">(42회 영양사) 조리원리 이론 및 문제</option>

                                <option value="7775">(42회 영양사) 식품학 이론 및 문제</option>

                                <option value="7774">(42회 영양사) 단체급식 이론 및 문제</option>

                                <option value="7773">(42회 영양사) 식사요법 이론 및 문제</option>

                                <option value="7772">(42회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7771">(42회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7770">(42회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7769">(42회 영양사) 영양학 이론 및 문제</option>

                                <option value="7764">이승훈 교수의 환경보건 이론완성반</option>

                                <option value="7763">(2019) 고급영양학</option>

                                <option value="7762">(2019) 식품위생학</option>

                                <option value="7761">(2019) 단체급식 및 실습</option>

                                <option value="7760">(2019) 조리원리 및 실습</option>

                                <option value="7759">(2019) 식품학</option>

                                <option value="7758">(2019) 식사요법 및 실습</option>

                                <option value="7757">(2019) 영양판정 및 영양교육</option>

                                <option value="7756">(2019) 생애주기영양학</option>

                                <option value="7755">2018 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7754">쉽게 배우는 한국사 실력향상 문제특강</option>

                                <option value="7753">[심화] 국어실력 수직상승 문제정리</option>

                                <option value="7752">공무원 사회 핵심이론 및 문제완성</option>

                                <option value="7751">위생관계법규 핵심이론 및 문제완성</option>

                                <option value="7750">강의 보강</option>

                                <option value="7749">공무원 면접특강 (기본완성)</option>

                                <option value="7748">2018 환경공학 실전 모의고사</option>

                                <option value="7747">2018 환경공학 단원별 문제완성</option>

                                <option value="7746">2018 환경공학 기출문제 분석특강</option>

                                <option value="7745">2018 식품위생 실전 모의고사반</option>

                                <option value="7744">2018 식품위생 기출 및 단원별 문제풀이</option>

                                <option value="7743">2018 화학 실전 모의고사</option>

                                <option value="7742">2018 화학 단원별 문제완성</option>

                                <option value="7741">2018 화학 기출문제 분석특강</option>

                                <option value="7740">2018 식품위생 꼼꼼한 이론완성반</option>

                                <option value="7739">공무원 화학 생기초 완성반</option>

                                <option value="7738">2018 보건행정 실전 모의고사</option>

                                <option value="7737">2018 보건행정 단원별 문제완성</option>

                                <option value="7736">2018 보건행정 기출문제 분석특강</option>

                                <option value="7735">2018 보건행정 (정규이론반)</option>

                                <option value="7734">2018 공중보건 실전 모의고사</option>

                                <option value="7733">2018 공중보건 단원별 문제완성</option>

                                <option value="7732">2018 공중보건 기출문제 분석특강</option>

                                <option value="7731">2018 이승훈 공중보건 (정규이론반)</option>

                                <option value="7730">2018 김희영 공중보건 (정규이론반)</option>

                                <option value="7729">2018 한국사 실전 모의고사</option>

                                <option value="7728">2018 한국사 단원별 문제완성</option>

                                <option value="7727">2018 한국사 기출문제 분석특강</option>

                                <option value="7726">2018 한국사 (정규이론반)</option>

                                <option value="7725">2018 영어(박) 동형 모의고사</option>

                                <option value="7724">2018 영어(임) 단원별 문제완성</option>

                                <option value="7723">2018 영어(임) 기출문제 분석특강</option>

                                <option value="7722">2018 영어(오) 실전 모의고사</option>

                                <option value="7721">2018 영어(오) 단원별 문제완성</option>

                                <option value="7720">2018 영어(오) 기출문제 분석특강</option>

                                <option value="7719">2018 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7718">2018 국어 실전 모의고사</option>

                                <option value="7717">2018 국어 단원별 문제완성</option>

                                <option value="7716">2018 국어 기출문제 분석특강</option>

                                <option value="7715">2018 국어 (정규이론반)</option>

                                <option value="7714">2018 지역사회간호 실전 모의고사</option>

                                <option value="7713">2018 지역사회간호 단원별 문제완성</option>

                                <option value="7712">2018 지역사회간호 기출문제 분석특강</option>

                                <option value="7711">2018 간호관리 실전 모의고사</option>

                                <option value="7708">2018 간호관리 단원별 문제완성</option>

                                <option value="7707">2018 간호관리 기출문제 분석특강</option>

                                <option value="7706">2018 생물 실전 모의고사</option>

                                <option value="7705">2018 생물 단원별 문제완성</option>

                                <option value="7704">2018 생물 기출문제 분석특강</option>

                                <option value="7703">2018 하이스코어 생물 (심화반)</option>

                                <option value="7702">2018 지역사회간호학 (정규이론반)</option>

                                <option value="7701">2018 간호관리학 (정규이론반)</option>

                                <option value="7700">2018 최정환 공무원 생물 (이론완성반)</option>

                                <option value="7699">공무원 생물 기초탄탄 완성반</option>

                                <option value="7697">(2018 문제) 식품위생학</option>

                                <option value="7696">(2018 문제) 단체급식 및 실습</option>

                                <option value="7695">(2018 문제) 조리원리 및 실습</option>

                                <option value="7694">(2018 문제) 식품학</option>

                                <option value="7693">(2018 문제) 식사요법 및 실습</option>

                                <option value="7692">(2018 문제) 영양판정 및 영양교육</option>

                                <option value="7691">(2018 문제) 생애주기영양학</option>

                                <option value="7690">[58회 간호사] 보건의약관계법규 모의고사</option>

                                <option value="7689">[58회 간호사] 기본간호학 모의고사</option>

                                <option value="7688">[58회 간호사] 간호관리학 모의고사</option>

                                <option value="7687">[58회 간호사] 정신간호학 모의고사</option>

                                <option value="7686">[58회 간호사] 지역사회간호학 모의고사</option>

                                <option value="7685">[58회 간호사] 아동간호학 모의고사</option>

                                <option value="7684">[58회 간호사] 여성건강간호학 모의고사</option>

                                <option value="7683">[58회 간호사] 성인간호학 모의고사</option>

                                <option value="7682">(58회 간호사) 보건의약관계법규 이론 및 문제</option>

                                <option value="7681">(58회 간호사) 기본간호학 이론 및 문제</option>

                                <option value="7680">(58회 간호사) 간호관리학 이론 및 문제</option>

                                <option value="7679">(58회 간호사) 정신간호학 이론 및 문제</option>

                                <option value="7678">(58회 간호사) 지역사회간호학 이론 및 문제</option>

                                <option value="7677">(58회 간호사) 아동간호학 이론 및 문제</option>

                                <option value="7676">(58회 간호사) 여성건강간호학 이론 및 문제</option>

                                <option value="7675">(58회 간호사) 성인간호학 이론 및 문제</option>

                                <option value="7674">2018 기초 간호과학 (연세대 대비반)</option>

                                <option value="7673">2018 간호학 개론 (연세대 대비반)</option>

                                <option value="7672">2018 연세대학교 RN-BSN 안내 및 강의계획</option>

                                <option value="7671">조리원리 모의고사</option>

                                <option value="7670">식품학 모의고사</option>

                                <option value="7669">단체급식 모의고사</option>

                                <option value="7668">식사요법 모의고사</option>

                                <option value="7666">영양교육 및 식품위생관계법규 모의고사</option>

                                <option value="7665">식품위생학 모의고사</option>

                                <option value="7664">생리학 및 생화학 모의고사</option>

                                <option value="7663">영양학 모의고사</option>

                                <option value="7662">(41회 영양사) 조리원리 이론 및 문제</option>

                                <option value="7661">(41회 영양사) 식품학 이론 및 문제</option>

                                <option value="7660">(41회 영양사) 단체급식 이론 및 문제</option>

                                <option value="7659">(41회 영양사) 식사요법 이론 및 문제</option>

                                <option value="7658">(41회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7657">(41회 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7656">(41회 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7655">(41회 영양사) 영양학 이론 및 문제</option>

                                <option value="7654">(2017 위생사) 식품위생학</option>

                                <option value="7653">(2017 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7652">(2017 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7651">캠벨 생명과학 심화 문제풀이 [공무원생물]</option>

                                <option value="7650">이승훈 교수의 환경보건 이론 및 문제 완성반</option>

                                <option value="7649">2017 보건행정 법규 총정리 특강</option>

                                <option value="7648">(2018) 식품위생학</option>

                                <option value="7647">(2018) 단체급식 및 실습</option>

                                <option value="7646">(2018) 조리원리 및 실습</option>

                                <option value="7645">(2018) 식품학</option>

                                <option value="7644">(2018) 식사요법 및 실습</option>

                                <option value="7643">(2018) 영양판정 및 영양교육</option>

                                <option value="7642">(2018) 생애주기영양학</option>

                                <option value="7641">2017 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7640">감염의료관계법규 총정리 문제풀이</option>

                                <option value="7639">보건의료관계법규 총정리 문제특강</option>

                                <option value="7638">행정법 통합 문제풀이</option>

                                <option value="7637">2017 환경공학 실전 모의고사</option>

                                <option value="7636">2017 환경공학 단원별 문제완성</option>

                                <option value="7635">2017 환경공학 기출문제 분석특강</option>

                                <option value="7634">2017 식품위생 실전 모의고사반</option>

                                <option value="7633">2017 공무원 화학 실전 모의고사</option>

                                <option value="7632">2017 지역사회간호 실전 모의고사</option>

                                <option value="7631">2017 지역사회간호 단원별 문제완성</option>

                                <option value="7630">2017 지역사회간호 기출문제 분석특강</option>

                                <option value="7629">2017 간호관리 실전 모의고사</option>

                                <option value="7628">2017 간호관리 단원별 문제완성</option>

                                <option value="7627">2017 간호관리 기출문제 분석특강</option>

                                <option value="7626">2017 생물 실전 모의고사</option>

                                <option value="7625">2017 생물 단원별 문제완성</option>

                                <option value="7624">2017 생물 기출문제 분석특강</option>

                                <option value="7623">2017 보건행정 실전 모의고사</option>

                                <option value="7622">2017 보건행정 단원별 문제완성</option>

                                <option value="7621">2017 보건행정 기출문제 분석특강</option>

                                <option value="7620">2017 공중보건 실전 모의고사</option>

                                <option value="7619">2017 공중보건 단원별 문제완성</option>

                                <option value="7618">2017 공중보건 기출문제 분석특강</option>

                                <option value="7617">2017 한국사 실전 모의고사</option>

                                <option value="7616">2017 한국사 단원별 문제완성</option>

                                <option value="7615">2017 한국사 기출문제 분석특강</option>

                                <option value="7614">2017 영어(임) 실전 모의고사</option>

                                <option value="7613">2017 영어(오) 실전 모의고사</option>

                                <option value="7612">2017 영어(임) 단원별 문제완성</option>

                                <option value="7611">2017 영어(오) 단원별 문제완성</option>

                                <option value="7610">2017 영어(임) 기출문제 분석특강</option>

                                <option value="7609">2017 영어(오) 기출문제 분석특강</option>

                                <option value="7608">2017 국어 실전 모의고사</option>

                                <option value="7607">2017 국어 단원별 문제완성</option>

                                <option value="7606">2017 국어 기출문제 분석특강</option>

                                <option value="7605">2017 공무원 화학 단원별 문제완성</option>

                                <option value="7604">근현대사 집중 문제완성반</option>

                                <option value="7603">[2017] 보건의약관계법규 모의고사</option>

                                <option value="7602">[2017] 기본간호학 모의고사</option>

                                <option value="7601">[2017] 간호관리학 모의고사</option>

                                <option value="7600">[2017] 정신간호학 모의고사</option>

                                <option value="7599">[2017] 지역사회간호학 모의고사</option>

                                <option value="7598">[2017] 아동간호학 모의고사</option>

                                <option value="7597">[2017] 모성간호학 모의고사</option>

                                <option value="7596">[2017] 성인간호학 모의고사</option>

                                <option value="7595">기출문제로 배우는 공무원 생물</option>

                                <option value="7594">공중보건 FAQ 특강</option>

                                <option value="7593">2017 식품위생 기출 + 단원별 문제풀이</option>

                                <option value="7592">2017 공무원 화학 기출문제 분석특강</option>

                                <option value="7591">공무원 영어 3개년 기출 및 출제예상 집중분석</option>

                                <option value="7588">꼭 체크해야할 식품미생물 문제풀이</option>

                                <option value="7587">[국어 심화] 단원별로 정리하는 주요 기출 및 예상 문제</option>

                                <option value="7586">2017 하이스코어 생물 (심화반)</option>

                                <option value="7585">한국 근현대사 특강</option>

                                <option value="7584">이승훈 교수의 식품미생물 이론완성반</option>

                                <option value="7583">평혜림 new 환경공학 (소음진동 및 폐기물)</option>

                                <option value="7582">평혜림 new 환경공학 (대기편)</option>

                                <option value="7581">평혜림 new 환경공학 (수질편)</option>

                                <option value="7580">2017 보건행정 (정규이론반)</option>

                                <option value="7579">2017 이승훈 공중보건 (정규이론반)</option>

                                <option value="7578">2017 김희영 공중보건 (정규이론반)</option>

                                <option value="7577">역학 이론 및 문제완성반</option>

                                <option value="7576">2017 한국사 (정규이론반)</option>

                                <option value="7575">2017 국어 (정규이론반)</option>

                                <option value="7574">2017 식품위생 꼼꼼한 이론완성반</option>

                                <option value="7573">재생 테스트 전용</option>

                                <option value="7572">임장빈 영어 new 기초문법 및 독해</option>

                                <option value="7571">공무원 면접특강</option>

                                <option value="7570">2017 지역사회간호학 (정규이론반)</option>

                                <option value="7569">2017 간호관리학 (정규이론반)</option>

                                <option value="7568">2017 오쌤 9급 공무원 영어 (정규이론반)</option>

                                <option value="7567">2017 최정환 공무원 생물 (이론완성반)</option>

                                <option value="7566">(2017 간호사) 보건의약관계법규</option>

                                <option value="7565">(2017 간호사) 기본간호학</option>

                                <option value="7564">(2017 간호사) 간호관리학</option>

                                <option value="7563">(2017 간호사) 정신간호학</option>

                                <option value="7562">(2017 간호사) 지역사회간호학</option>

                                <option value="7561">(2017 간호사) 아동간호학</option>

                                <option value="7560">(2017 간호사) 모성간호학</option>

                                <option value="7559">(2017 간호사) 성인간호학</option>

                                <option value="7558">(2017 문제) 식품위생학</option>

                                <option value="7557">(2017 문제) 단체급식 및 실습</option>

                                <option value="7556">(2017 문제) 조리원리 및 실습</option>

                                <option value="7555">(2017 문제) 식품학</option>

                                <option value="7554">(2017 문제) 식사요법 및 실습</option>

                                <option value="7553">(2017 문제) 고급영양학</option>

                                <option value="7552">(2017 문제) 영양판정 및 영양교육</option>

                                <option value="7551">(2017 문제) 생애주기영양학</option>

                                <option value="7550">(2016 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7549">(2016 위생사) 식품위생학</option>

                                <option value="7548">(2016 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7547">(2017 영양사) 조리원리 이론 및 문제</option>

                                <option value="7546">(2017 영양사) 식품학 이론 및 문제</option>

                                <option value="7545">(2017 영양사) 단체급식 이론 및 문제</option>

                                <option value="7544">(2017 영양사) 식사요법 이론 및 문제</option>

                                <option value="7543">(2017 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7542">(2017 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7541">(2017 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7540">(2017 영양사) 영양학 이론 및 문제</option>

                                <option value="7539">(최신 간협문제 특강) 지역사회간호학 제9판</option>

                                <option value="7538">보강</option>

                                <option value="7537">2016 보건행정 법규 총정리 특강</option>

                                <option value="7536">STP 공무원 화학 이론 통합완성</option>

                                <option value="7535">식품화학개론 문제풀이 완성</option>

                                <option value="7534">(2017) 식품위생학</option>

                                <option value="7533">(2017) 단체급식 및 실습</option>

                                <option value="7532">(2017) 조리원리 및 실습</option>

                                <option value="7531">(2017) 식품학</option>

                                <option value="7530">(2017) 식사요법 및 실습</option>

                                <option value="7529">(2017) 영양판정 및 영양교육</option>

                                <option value="7528">고급영양학</option>

                                <option value="7527">(2017) 생애주기영양학</option>

                                <option value="7526">2016 의료관계법규 최신 문제풀이 특강</option>

                                <option value="7525">공무원 식품화학개론 이론 끝장특강</option>

                                <option value="7524">2016 환경공학 실전 모의고사</option>

                                <option value="7523">2016 환경공학 단원별 문제완성</option>

                                <option value="7522">2016 환경공학 기출문제 분석특강</option>

                                <option value="7521">2016 식품위생 실전 모의고사</option>

                                <option value="7520">2016 식품위생 기출 + 단원별 문제풀이</option>

                                <option value="7519">2016 화학 실전 모의고사</option>

                                <option value="7518">2016 화학 단원별 문제완성</option>

                                <option value="7517">2016 화학 기출문제 분석특강</option>

                                <option value="7516">2016 보건행정 실전 모의고사</option>

                                <option value="7515">2016 보건행정 단원별 문제완성</option>

                                <option value="7514">2016 보건행정 기출문제 분석특강</option>

                                <option value="7513">2016 공중보건 실전 모의고사</option>

                                <option value="7512">2016 공중보건 단원별 문제완성</option>

                                <option value="7511">2016 공중보건 기출문제 분석특강</option>

                                <option value="7510">2016 한국사 실전 모의고사</option>

                                <option value="7509">2016 한국사 단원별 문제완성</option>

                                <option value="7508">2016 한국사 기출문제 분석특강</option>

                                <option value="7507">2016 영어(임) 실전 모의고사</option>

                                <option value="7506">2016 영어(오) 실전 모의고사</option>

                                <option value="7505">2016 영어(임) 단원별 문제완성</option>

                                <option value="7504">2016 영어(오) 단원별 문제완성</option>

                                <option value="7503">2016 영어 기출문제 분석특강</option>

                                <option value="7502">2016 국어 실전 모의고사</option>

                                <option value="7501">2016 국어 단원별 문제완성</option>

                                <option value="7500">2016 국어 기출문제 분석특강</option>

                                <option value="7499">2016 지역사회간호 실전 모의고사</option>

                                <option value="7498">2016 지역사회간호 단원별 문제완성</option>

                                <option value="7497">2016 지역사회간호 기출문제 분석특강</option>

                                <option value="7496">2016 간호관리 실전 모의고사</option>

                                <option value="7495">2016 간호관리 단원별 문제완성</option>

                                <option value="7494">2016 간호관리 기출문제 분석특강</option>

                                <option value="7493">2016 생물 실전 모의고사</option>

                                <option value="7492">2016 생물 단원별 문제완성</option>

                                <option value="7491">2016 생물 기출문제 분석특강</option>

                                <option value="7490">2016 환경보건 이론 및 문제 완성반</option>

                                <option value="7489">공중보건 심화이론 특강</option>

                                <option value="7488">보건의약관계법규 모의고사</option>

                                <option value="7487">기본간호학 모의고사</option>

                                <option value="7486">간호관리학 모의고사</option>

                                <option value="7485">정신간호학 모의고사</option>

                                <option value="7484">지역사회간호학 모의고사</option>

                                <option value="7483">아동간호학 모의고사</option>

                                <option value="7482">모성간호학 모의고사</option>

                                <option value="7481">성인간호학 모의고사</option>

                                <option value="7480">국어 심화특강 [최근 5개년 기출문제 분석]</option>

                                <option value="7479">2016 지역사회간호학 (정규이론반)</option>

                                <option value="7478">2016 간호관리학 (정규이론반)</option>

                                <option value="7477">2016 영양교사 최종 모의고사반 (서답형)</option>

                                <option value="7476">2016 국어 테마특강 (심화반)</option>

                                <option value="7475">근현대사 완성 특강반</option>

                                <option value="7474">2016 이승훈 공중보건 (정규이론반)</option>

                                <option value="7473">2016 보건행정 (정규이론반)</option>

                                <option value="7472">2016 김희영 공중보건 (정규이론반)</option>

                                <option value="7471">2016 한국사 (정규이론반)</option>

                                <option value="7470">2016 영어 (정규이론반)</option>

                                <option value="7469">2016 국어 (정규이론반)</option>

                                <option value="7468">2015 공무원 면접특강</option>

                                <option value="7467">2016 하이스코어 생물 (심화반)</option>

                                <option value="7466">2016 하이탑 생명과학</option>

                                <option value="7465">(2016 영양사) 조리원리 이론 및 문제</option>

                                <option value="7464">(2016 영양사) 식품학 이론 및 문제</option>

                                <option value="7463">(2016 영양사) 단체급식 이론 및 문제</option>

                                <option value="7462">(2016 영양사) 식사요법 이론 및 문제</option>

                                <option value="7461">(2016 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7460">(2016 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7459">(2016 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7458">(2016 영양사) 영양학 이론 및 문제</option>

                                <option value="7457">(2015 위생사) 식품위생학</option>

                                <option value="7456">(2015 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7455">(2015 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7454">(2016 간호사) 보건의약관계법규</option>

                                <option value="7453">(2016 간호사) 기본간호학</option>

                                <option value="7452">(2016 간호사) 간호관리학</option>

                                <option value="7451">(2016 간호사) 정신간호학</option>

                                <option value="7450">(2016 간호사) 지역사회간호학</option>

                                <option value="7449">(2016 간호사) 아동간호학</option>

                                <option value="7448">(2016 간호사) 모성간호학</option>

                                <option value="7447">(2016 간호사) 성인간호학</option>

                                <option value="7446">(2016 문제) 식품위생학</option>

                                <option value="7445">(2016 문제) 단체급식 및 실습</option>

                                <option value="7444">(2016 문제) 조리원리 및 실습</option>

                                <option value="7443">(2016 문제) 식품학</option>

                                <option value="7442">(2016 문제) 식사요법 및 실습</option>

                                <option value="7441">(2016 문제) 영양판정 및 영양교육</option>

                                <option value="7440">(2016 문제) 생애주기영양학</option>

                                <option value="7439">(2016 문제) 고급영양학</option>

                                <option value="7438">기초 간호과학 (연세대 대비반)</option>

                                <option value="7437">간호학 개론 (연세대 대비반)</option>

                                <option value="7436">2016 연세대학교 RN-BSN 안내 및 강의계획</option>

                                <option value="7435">2015 지역사회간호 실전 모의고사</option>

                                <option value="7434">2015 간호관리 실전 모의고사</option>

                                <option value="7433">2015 생물 실전 모의고사</option>

                                <option value="7432">2015 환경공학 실전 모의고사</option>

                                <option value="7431">2015 화학 실전 모의고사</option>

                                <option value="7430">2015 보건행정 실전 모의고사</option>

                                <option value="7429">2015 공중보건 실전 모의고사</option>

                                <option value="7428">2015 한국사 실전 모의고사</option>

                                <option value="7427">2015 영어 실전 모의고사 (오)</option>

                                <option value="7426">2015 영어 실전모의고사 (임)</option>

                                <option value="7425">2015 국어 실전 모의고사</option>

                                <option value="7424">[정훈사] 공중보건 기출 및 예상문제 총정리</option>

                                <option value="7423">2015 지역사회간호 단원별 문제완성</option>

                                <option value="7422">2015 간호관리 단원별 문제완성</option>

                                <option value="7421">2015 생물 단원별 문제완성</option>

                                <option value="7420">2015 환경공학 단원별 문제완성</option>

                                <option value="7419">2015 화학 단원별 문제완성</option>

                                <option value="7418">2015 보건행정 단원별 문제완성</option>

                                <option value="7417">2015 공중보건 단원별 문제완성</option>

                                <option value="7416">2015 한국사 단원별 문제완성</option>

                                <option value="7415">2015 영어 단원별 문제완성</option>

                                <option value="7414">2015 국어 단원별 문제완성</option>

                                <option value="7413">한번에 끝내는 식품위생 문제풀이</option>

                                <option value="7412">생물 심화문제 완성 [캠벨 생명과학]</option>

                                <option value="7411">(2016) 식품위생학</option>

                                <option value="7410">(2016) 단체급식 및 실습</option>

                                <option value="7409">(2016) 조리원리 및 실습</option>

                                <option value="7408">(2016) 식품학</option>

                                <option value="7407">(2016) 식사요법 및 실습</option>

                                <option value="7406">(2016) 영양판정 및 영양교육</option>

                                <option value="7405">(2016) 고급영양학</option>

                                <option value="7404">(2016) 생애주기영양학</option>

                                <option value="7403">임장빈 교수의 공무원 영문법 총정리 [영어]</option>

                                <option value="7402">2015 지역사회간호 기출문제 분석특강</option>

                                <option value="7401">2015 간호관리 기출문제 분석특강</option>

                                <option value="7400">2015 생물 기출문제 분석특강</option>

                                <option value="7399">2015 환경공학 기출문제 분석특강</option>

                                <option value="7398">2015 화학 기출문제 분석특강</option>

                                <option value="7397">2015 보건행정 기출문제 분석특강</option>

                                <option value="7396">2015 공중보건 기출문제 분석특강</option>

                                <option value="7395">2015 한국사 기출문제 분석특강</option>

                                <option value="7394">2015 영어 기출문제 분석특강</option>

                                <option value="7393">2015 국어 기출문제 분석특강</option>

                                <option value="7392">2015 보건행정 법규 총정리 특강</option>

                                <option value="7391">강두수 화학 이론수험서(문운당) 문제정리</option>

                                <option value="7390">2015 의료관계법규 이론 및 문제 완성</option>

                                <option value="7389">강두수 화학 (이론 및 문제)</option>

                                <option value="7387">보건의약관계법규 모의고사</option>

                                <option value="7386">기본간호학 모의고사</option>

                                <option value="7385">간호관리학 모의고사</option>

                                <option value="7384">정신간호학 모의고사</option>

                                <option value="7383">지역사회간호학 모의고사</option>

                                <option value="7382">아동간호학 모의고사</option>

                                <option value="7381">모성간호학 모의고사</option>

                                <option value="7380">성인간호학 모의고사</option>

                                <option value="7379">환경보건 이론 및 문제 완성반</option>

                                <option value="7378">2015 영양교사 최종 모의고사반 (서답형)</option>

                                <option value="7377">2015 간호관리학 (정규이론반)</option>

                                <option value="7376">2014 보건의료관계법규 최종정리</option>

                                <option value="7375">2014 행정법총론 최종 마무리 특강</option>

                                <option value="7374">2015 하이스코어 생물 (심화이론반)</option>

                                <option value="7373">2015 보건행정 (정규이론반)</option>

                                <option value="7372">한권으로 올인! 2015 공중보건</option>

                                <option value="7371">2015 공중보건 (정규이론반)</option>

                                <option value="7370">2015 한국사 (정규이론반)</option>

                                <option value="7369">2015 영어 (정규이론반)</option>

                                <option value="7368">2015 국어 (정규이론반)</option>

                                <option value="7367">2015 지역사회간호학 (정규이론반)</option>

                                <option value="7366">2015 연세대학교 RN-BSN 안내 및 강의계획</option>

                                <option value="7365">9급 공무원 면접 특강</option>

                                <option value="7364">기초 간호과학 (연세대 대비반)</option>

                                <option value="7363">간호학 개론 (연세대 대비반)</option>

                                <option value="7362">(2015 문제) 식품위생학</option>

                                <option value="7361">(2015 문제) 단체급식 및 실습</option>

                                <option value="7360">(2015 문제) 조리원리 및 실습</option>

                                <option value="7359">(2015 문제) 식품학</option>

                                <option value="7358">(2015 문제) 식사요법 및 실습</option>

                                <option value="7357">(2015 문제) 영양판정 및 영양교육</option>

                                <option value="7356">(2015 문제) 생애주기영양학</option>

                                <option value="7355">(2015 문제) 고급영양학</option>

                                <option value="7354">(2015 간호사) 보건의약관계법규</option>

                                <option value="7353">(2015 간호사) 기본간호학</option>

                                <option value="7352">(2015 간호사) 간호관리학</option>

                                <option value="7351">(2015 간호사) 정신간호학</option>

                                <option value="7350">강두수 화학 (이론)</option>

                                <option value="7349">(2015 간호사) 지역사회간호학</option>

                                <option value="7348">(2015 간호사) 아동간호학</option>

                                <option value="7347">(2015 간호사) 모성간호학</option>

                                <option value="7346">(2015 간호사) 성인간호학</option>

                                <option value="7345">(2014 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7344">(2014 위생사) 식품위생학</option>

                                <option value="7343">(2014 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7342">(2015 영양사) 조리원리 이론 및 문제</option>

                                <option value="7341">(2015 영양사) 식품학 이론 및 문제</option>

                                <option value="7340">(2015 영양사) 단체급식 이론 및 문제</option>

                                <option value="7339">(2015 영양사) 식사요법 이론 및 문제</option>

                                <option value="7338">(2015 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7337">(2015 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7336">(2015 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7335">(2015 영양사) 영양학 이론 및 문제</option>

                                <option value="7334">2014 지역사회간호 실전 모의고사</option>

                                <option value="7333">2014 간호관리 실전 모의고사</option>

                                <option value="7332">2014 생물 실전 모의고사</option>

                                <option value="7331">2014 보건행정 실전 모의고사</option>

                                <option value="7330">2014 공중보건 실전 모의고사</option>

                                <option value="7329">2014 한국사 실전 모의고사</option>

                                <option value="7328">2014 영어 실전 모의고사</option>

                                <option value="7327">2014 국어 실전 모의고사</option>

                                <option value="7326">2014 화학 실전 모의고사반</option>

                                <option value="7325">2014 지역사회간호 단원별 문제풀이반</option>

                                <option value="7324">2014 간호관리 단원별 문제풀이반</option>

                                <option value="7323">2014 생물 단원별 문제풀이반</option>

                                <option value="7322">2014 보건행정 단원별 문제풀이반</option>

                                <option value="7321">2014 공중보건 단원별 문제풀이반</option>

                                <option value="7320">2014 한국사 단원별 문제풀이반</option>

                                <option value="7319">2014 영어 단원별 문제풀이반</option>

                                <option value="7318">2014 국어 단원별 문제풀이반</option>

                                <option value="7317">2014 환경공학 단원별 문제완성반</option>

                                <option value="7316">2014 화학 단원별 문제완성반</option>

                                <option value="7315">2014 식품위생 단원별 문제완성반</option>

                                <option value="7314">2014 지역사회간호 기출문제 분석특강</option>

                                <option value="7313">2014 간호관리 기출문제 분석특강</option>

                                <option value="7312">2014 생물 심화 기출문제 분석특강</option>

                                <option value="7311">2014 보건행정 기출문제 분석특강</option>

                                <option value="7310">2014 공중보건 기출문제 분석특강</option>

                                <option value="7309">2014 한국사 기출문제 분석특강</option>

                                <option value="7308">2014 영어 기출문제 분석특강</option>

                                <option value="7307">2014 국어 기출문제 분석특강</option>

                                <option value="7306">2014 보건행정 법규 총정리 특강</option>

                                <option value="7305">환경보건 이론 및 문제 정리</option>

                                <option value="7304">(2015) 식품위생학</option>

                                <option value="7303">(2015) 단체급식 및 실습</option>

                                <option value="7302">(2015) 조리원리 및 실습</option>

                                <option value="7301">(2015) 식품학</option>

                                <option value="7300">(2015) 식사요법 및 실습</option>

                                <option value="7299">(2015) 영양판정 및 영양교육</option>

                                <option value="7298">(2015) 고급영양학</option>

                                <option value="7297">(2015) 생애주기영양학</option>

                                <option value="7296">9급 공무원 한국사 단계형 문제풀이</option>

                                <option value="7295">2014 의료관계법규 이론 및 문제 완성</option>

                                <option value="7294">교재 종합</option>

                                <option value="7293">생물 500제 기출문제 분석특강</option>

                                <option value="7292">(간협문제 특강) 지역사회간호학</option>

                                <option value="7291">(간협문제 특강) 간호관리학</option>

                                <option value="7290">김지연 교수의 식품위생 이론완성반</option>

                                <option value="7289">(간호사) 보건의약관계법규 최종 모의고사</option>

                                <option value="7288">(간호사) 간호관리학 최종 모의고사</option>

                                <option value="7287">2014 하이스코어 생물 (심화이론반)</option>

                                <option value="7286">보건의료법규 핵심요약 및 문제정리</option>

                                <option value="7285">행정법 총론 최종 모의고사 정리</option>

                                <option value="7284">평혜림 환경공학 (소음진동 및 폐기물)</option>

                                <option value="7283">평혜림 환경공학 (대기편)</option>

                                <option value="7282">9급 공무원 화학 기초 완성반</option>

                                <option value="7281">9급 공무원 영어 기초문법 및 독해 완성</option>

                                <option value="7280">하이탑 생명과학 (생물 정규이론반)</option>

                                <option value="7279">2014 지역사회간호학 (정규이론반)</option>

                                <option value="7278">2014 간호관리학 (정규이론반)</option>

                                <option value="7277">2014 공중보건 핵심요약 정리</option>

                                <option value="7276">평혜림 환경공학 (수질편)</option>

                                <option value="7275">공무원 영어 기초완성반</option>

                                <option value="7274">2014 영양교사 최종 모의고사반 (서답형)</option>

                                <option value="7273">2014 보건행정 (정규이론반)</option>

                                <option value="7272">2014 공중보건 (정규이론반)</option>

                                <option value="7271">2014 한국사 (정규이론반)</option>

                                <option value="7270">2014 영어 (정규이론반)</option>

                                <option value="7269">2014 국어 (정규이론반)</option>

                                <option value="7268">(2014 간호사) 보건의약관계법규</option>

                                <option value="7267">2013 FINAL 모의고사 (보건행정)</option>

                                <option value="7266">공중보건 기출문제 분석특강 (이승훈)</option>

                                <option value="7265">2013 FINAL 모의고사 (공중보건)</option>

                                <option value="7264">2013 FINAL 모의고사 (한국사)</option>

                                <option value="7263">2013 FINAL 모의고사 (영어)</option>

                                <option value="7262">2013 FINAL 모의고사 (국어)</option>

                                <option value="7261">(2013 위생사) 공중보건학, 위생관계법규</option>

                                <option value="7260">(2013 위생사) 식품위생학</option>

                                <option value="7259">(2013 위생사) 환경위생학, 위생곤충학</option>

                                <option value="7258">(2014 문제) 식품위생학</option>

                                <option value="7257">(2014 문제) 단체급식 및 실습</option>

                                <option value="7256">(2014 문제) 조리원리 및 실습</option>

                                <option value="7255">(2014 문제) 식품학</option>

                                <option value="7254">(2014 문제) 식사요법 및 실습</option>

                                <option value="7253">(2014 문제) 영양판정 및 영양교육</option>

                                <option value="7252">(2014 문제) 생애주기영양학</option>

                                <option value="7251">(2014 문제) 고급영양학</option>

                                <option value="7250">FINAL 모의고사 (지역사회간호)</option>

                                <option value="7249">2013 FINAL 모의고사 (간호관리)</option>

                                <option value="7248">2013 FINAL 모의고사 (생물)</option>

                                <option value="7247">(2014 간호사) 기본간호학</option>

                                <option value="7246">(2014 간호사) 간호관리학</option>

                                <option value="7245">(2014 간호사) 정신간호학</option>

                                <option value="7244">(2014 간호사) 지역사회간호학</option>

                                <option value="7243">(2014 간호사) 아동간호학</option>

                                <option value="7242">(2014 간호사) 모성간호학</option>

                                <option value="7241">(2014 간호사) 성인간호학</option>

                                <option value="7240">(2014 영양사) 식품미생물 이론 및 문제</option>

                                <option value="7239">(2014 영양사) 조리원리 이론 및 문제</option>

                                <option value="7238">(2014 영양사) 식품학 이론 및 문제</option>

                                <option value="7237">(2014 영양사) 단체급식 이론 및 문제</option>

                                <option value="7236">(2014 영양사) 식사요법 이론 및 문제</option>

                                <option value="7235">(2014 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7234">(2014 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7233">(2014 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7232">(2014 영양사) 영양학 이론 및 문제</option>

                                <option value="7231">한국사 핵심정리 및 단계형 문제풀이</option>

                                <option value="7230">경기도 면접특강</option>

                                <option value="7220">국어(기초-심화 개념완성) 특강</option>

                                <option value="7219">2013 보건행정 법규 총정리 특강</option>

                                <option value="7218">공무원 화학 단원별 문제풀이반 (실전모의고사 포함)</option>

                                <option value="7217">김지연 교수의 식품위생 최신 단원별 문제풀이반</option>

                                <option value="7216">(2014) 식품위생학</option>

                                <option value="7215">(2014) 단체급식 및 실습</option>

                                <option value="7214">(2014) 조리원리 및 실습</option>

                                <option value="7213">(2014) 식품학</option>

                                <option value="7212">(2014) 식사요법 및 실습</option>

                                <option value="7211">(2014) 영양판정 및 영양교육</option>

                                <option value="7210">(2014) 생애주기영양학</option>

                                <option value="7209">(2014) 고급영양학</option>

                                <option value="7208">2013 보건행정 모의고사형 문제풀이</option>

                                <option value="7207">2013 공중보건 모의고사형 문제풀이반</option>

                                <option value="7206">2013 한국사 모의고사형 문제풀이</option>

                                <option value="7205">2013 영어 모의고사형 문제풀이</option>

                                <option value="7204">2013 국어 모의고사형 문제풀이</option>

                                <option value="7203">2013 지역사회간호 모의고사형 문제풀이</option>

                                <option value="7202">2013 간호관리 모의고사형 문제풀이</option>

                                <option value="7201">2013 생물 모의고사형 문제풀이</option>

                                <option value="7200">강두수 교수의 하이탑 화학 (이론완성반)</option>

                                <option value="7199">보건행정 집중관리반 (심화과정) - 4. 4 오픈!</option>

                                <option value="7198">공중보건 집중관리반 (심화과정) - 4. 5 오픈!</option>

                                <option value="7197">2013 최신 의료관계법규 이론 및 문제 총정리 (강좌설명 필독!)</option>

                                <option value="7196">2013 보건행정 단원별 문제풀이</option>

                                <option value="7195">2013 공중보건 단원별 문제풀이반</option>

                                <option value="7194">2013 한국사 단원별 문제풀이</option>

                                <option value="7193">2013 영어 단원별 문제풀이</option>

                                <option value="7192">2013 국어 단원별 문제풀이</option>

                                <option value="7191">2013 지역사회간호 단원별 문제풀이</option>

                                <option value="7190">2013 간호관리 단원별 문제풀이</option>

                                <option value="7189">2013 생물 단원별 문제풀이</option>

                                <option value="7188">최근 공무원 국어 기출문제 분석특강</option>

                                <option value="7187">2013 공무원 생물 통합 기출문제 분석</option>

                                <option value="7186">보건의약관계법규 최종 모의고사</option>

                                <option value="7185">기본간호학 최종 모의고사</option>

                                <option value="7184">간호관리학 최종 모의고사</option>

                                <option value="7183">정신간호학 최종 모의고사</option>

                                <option value="7182">지역사회간호학 최종 모의고사</option>

                                <option value="7181">아동간호학 최종 모의고사</option>

                                <option value="7180">모성간호학 최종 모의고사</option>

                                <option value="7179">성인간호학 최종 모의고사</option>

                                <option value="7178">2013 강 한국사 (정규이론반)</option>

                                <option value="7177">한국 근현대사 특강 (한국사 심화과정)</option>

                                <option value="7176">간호사 보강</option>

                                <option value="7175">2013 하이스코어 생물 (심화이론반)</option>

                                <option value="7174">환경공학 핵심이론 및 기출 예상문제 총정리</option>

                                <option value="7173">(간호사) 기본간호학</option>

                                <option value="7172">(간호사) 정신간호학</option>

                                <option value="7171">(간호사) 성인간호학</option>

                                <option value="7170">(간호사) 보건의약관계법규</option>

                                <option value="7169">(간호사) 간호관리학</option>

                                <option value="7168">(간호사) 지역사회간호학</option>

                                <option value="7167">(간호사) 아동간호학</option>

                                <option value="7166">(간호사) 모성간호학</option>

                                <option value="7165">식품위생 개념완성 (정규이론반)</option>

                                <option value="7164">하이탑 화학 (정규이론반)</option>

                                <option value="7163">2013 지역사회간호학 (정규이론반)</option>

                                <option value="7162">2013 간호관리학 (정규이론반)</option>

                                <option value="7161">2013 한국사</option>

                                <option value="7160">2013 영어 (정규이론반)</option>

                                <option value="7159">2013 국어 (정규이론반)</option>

                                <option value="7158">2013 공중보건 (정규이론반)</option>

                                <option value="7157">2013 보건행정 (정규이론반)</option>

                                <option value="7155">하이탑 생명과학 (생물 이론완성)</option>

                                <option value="7154">2012 위생사 실기 이론 및 문제</option>

                                <option value="7153">생명과학</option>

                                <option value="7151">(2013 영양사) 식품미생물 이론 및 문제</option>

                                <option value="7149">(2013 영양사) 식품학 이론 및 문제</option>

                                <option value="7150">(2013 영양사) 조리원리 이론 및 문제</option>

                                <option value="7148">(2013 영양사) 단체급식 이론 및 문제</option>

                                <option value="7147">(2013 영양사) 식사요법 이론 및 문제</option>

                                <option value="7146">(2013 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7144">(2013 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7145">(2013 영양사) 식품위생학 이론 및 문제</option>

                                <option value="7143">(2013 영양사) 영양학 이론 및 문제</option>

                                <option value="7142">보건의료법규</option>

                                <option value="7141">보건교육학</option>

                                <option value="7140">보건학</option>

                                <option value="7139">보건프로그램 개발 및 평가</option>

                                <option value="7138">공무원 면접대비 특강</option>

                                <option value="7137">2012 위생사 필기 이론 및 문제</option>

                                <option value="7136">(필기) 생화학 및 발효학</option>

                                <option value="7135">2012 보건행정 법규 총정리 특강</option>

                                <option value="7134">2012 영어 (임) 모의고사형 문제풀이</option>

                                <option value="7133">2012 지역사회간호 모의고사형 문제풀이</option>

                                <option value="7132">2012 간호관리 모의고사형 문제풀이</option>

                                <option value="7131">2012 생물 모의고사형 문제풀이</option>

                                <option value="7130">2012 보건행정 모의고사형 문제풀이</option>

                                <option value="7129">2012 공중보건 모의고사형 문제풀이</option>

                                <option value="7128">2012 한국사 모의고사형 문제풀이</option>

                                <option value="7127">2012 영어 (오) 모의고사형 문제풀이</option>

                                <option value="7126">2012 국어 모의고사형 문제풀이</option>

                                <option value="7125">김지연 교수의 식품위생 최종 마무리 모의고사형 문제풀이</option>

                                <option value="7124">(필기) 식품제조공정</option>

                                <option value="7123">식품미생물 최종 모의고사 문제풀이반</option>

                                <option value="7122">보충강의</option>

                                <option value="7121">(2013 이론) 식품위생학</option>

                                <option value="7120">(2013 이론) 단체급식 및 실습</option>

                                <option value="7119">(2013 이론) 조리원리 및 실습</option>

                                <option value="7118">(2013 이론) 식품학</option>

                                <option value="7117">(2013 이론) 식사요법 및 실습</option>

                                <option value="7116">(2013 이론) 영양판정 및 영양교육</option>

                                <option value="7115">(2013 이론) 생애주기영양학</option>

                                <option value="7114">(2013 이론) 고급영양학</option>

                                <option value="7113">2012 지역사회간호 단원별 문제풀이</option>

                                <option value="7112">2012 간호관리 단원별 문제풀이</option>

                                <option value="7111">2012 생물 단원별 문제풀이</option>

                                <option value="7110">2012 보건행정 단원별 문제풀이</option>

                                <option value="7109">2012 공중보건 단원별 문제풀이</option>

                                <option value="7108">2012 한국사 단원별 문제풀이</option>

                                <option value="7107">2012 영어 (임) 단원별 문제풀이</option>

                                <option value="7106">2012 영어 (오) 단원별 문제풀이</option>

                                <option value="7105">2012 국어 단원별 문제풀이</option>

                                <option value="7104">대방열림 테스트 강의</option>

                                <option value="7103">김지연 교수의 식품위생 이론완성반</option>

                                <option value="7102">김만수 교수의 식품미생물 이론완성반</option>

                                <option value="7101">전효성 교수의 화학 최종 (7회) 모의고사 문제</option>

                                <option value="7100">문제로 배우는 캠벨 생명과학 (생물심화 문제)</option>

                                <option value="7099">의료관계법규 이론 및 문제 완성반</option>

                                <option value="7098">김희영 교수의 보건행정 기출문제 분석 특강</option>

                                <option value="7097">생물 8, 9급 통합 기출문제 분석특강</option>

                                <option value="7096">김철민 국어 (심화반 2)</option>

                                <option value="7095">간협문제집 특강 (지역사회간호학)</option>

                                <option value="7094">빅터 생명과학 (생물 이론반)</option>

                                <option value="7093">김철민 국어 (심화반 1)</option>

                                <option value="7092">2012 하이스코어 생물 (심화이론반) - 강좌설명 필독!</option>

                                <option value="7091">임장빈 교수의 (어휘 + 독해) 특강</option>

                                <option value="7090">신현준 교수의 화학 최종 모의고사 문제</option>

                                <option value="7089">김지연 교수의 식품위생 문제풀이반</option>

                                <option value="7088">2012 간호관리학 (정규이론반)</option>

                                <option value="7087">(간호사 국시) 아동간호학</option>

                                <option value="7086">2012 보건행정 (정규이론반)</option>

                                <option value="7085">2012 공중보건 (정규이론반)</option>

                                <option value="7084">2012 한국사 (정규이론반)</option>

                                <option value="7083">2012 영어 (정규이론반)</option>

                                <option value="7082">2012 국어 (정규이론반)</option>

                                <option value="7081">(간호사 국시) 모성간호학</option>

                                <option value="7080">(간호사 국시) 보건의약관계법규</option>

                                <option value="7079">(간호사 국시) 기본간호학</option>

                                <option value="7078">(간호사 국시) 정신간호학</option>

                                <option value="7077">(간호사 국시) 간호관리학</option>

                                <option value="7076">(간호사 국시) 지역사회간호학</option>

                                <option value="7075">(간호사 국시) 성인간호학</option>

                                <option value="7074">(보건복지부) 행정법총론 마무리 특강</option>

                                <option value="7073">(보건복지부) 영어2 마무리 특강</option>

                                <option value="7072">(보건복지부) 영어1 마무리 특강</option>

                                <option value="7071">(보건복지부) 감염병 예방법 마무리 특강 (기능직전환 대비)</option>

                                <option value="7070">(보건복지부) 보건의료관계법규 마무리 특강</option>

                                <option value="7069">(보건복지부) 공중보건 마무리 특강</option>

                                <option value="7068">2012 영양교사 임용시험대비 최종 모의고사반</option>

                                <option value="7067">2012 지역사회간호학 (정규이론반)</option>

                                <option value="7066">전효성 교수의 화학 이론 완성반</option>

                                <option value="7065">(영양교사 문제) 단체급식 및 실습</option>

                                <option value="7064">(영양교사 문제) 조리원리 및 실습</option>

                                <option value="7063">(영양교사 문제) 생애주기영양학</option>

                                <option value="7062">(영양교사 문제) 식사요법 및 실습</option>

                                <option value="7061">(영양교사 문제) 영양교육 및 영양판정</option>

                                <option value="7060">(영양교사 문제) 식품학</option>

                                <option value="7059">(영양교사 문제) 식품위생학</option>

                                <option value="7058">(영양교사 문제) 고급영양학</option>

                                <option value="7057">임장빈 교수의 영어 이론완성반</option>

                                <option value="7056">간호학 기출문제풀이 및 예상문제풀이 (원서접수 및 면접 논술특강 포함) (교재포함)</option>

                                <option value="7055">간호학개론 part 3 &lt;간호과정론&gt; (교재포함)</option>

                                <option value="7054">간호학개론 part 2 &lt;간호윤리, 의사소통론, 전문직 특성&gt; (교재포함)</option>

                                <option value="7053">간호학개론 part 1 &lt;간호과학, 간호철학, 간호이론&gt; (교재포함)</option>

                                <option value="7052">기초간호과학 (교재 별도구매)</option>

                                <option value="7051">필수 해부생리학 (교재 별도구매)</option>

                                <option value="7050">하재남 교수의 환경보건학 문제풀이 766제 완성</option>

                                <option value="7049">(영양교사 심화) 단체급식 및 실습</option>

                                <option value="7048">(영양교사 심화) 조리원리 및 실습</option>

                                <option value="7047">(영양교사 심화) 생애주기영양학</option>

                                <option value="7046">(영양교사 심화) 식사요법 및 실습</option>

                                <option value="7045">(영양교사 심화) 영양교육 및 영양판정</option>

                                <option value="7044">(영양교사 심화) 식품학</option>

                                <option value="7043">(영양교사 심화) 고급영양학</option>

                                <option value="7042">(영양교사 심화) 식품위생학</option>

                                <option value="7041">2011 보건행정 문제풀이 (모의고사형)</option>

                                <option value="7040">2011 공중보건 문제풀이 (모의고사형)</option>

                                <option value="7039">2011 지역사회간호 모의고사형 문제풀이 (2)</option>

                                <option value="7038">2011 간호관리 모의고사형 문제풀이 (2)</option>

                                <option value="7037">2011 한국사 문제풀이 (모의고사형)</option>

                                <option value="7036">2011 영어 문제풀이 (모의고사형)</option>

                                <option value="7035">2011 국어 문제풀이 (모의고사형)</option>

                                <option value="7034">2011 지역사회간호 모의고사형 문제풀이 (1)</option>

                                <option value="7033">2011 간호관리 모의고사형 문제풀이 (1)</option>

                                <option value="7032">2011 생물 모의고사형 문제풀이</option>

                                <option value="7031">2011 한국사 문제풀이 (단원별)</option>

                                <option value="7030">2011 영어 문제풀이 (단원별)</option>

                                <option value="7029">2011 국어 문제풀이 (단원별)</option>

                                <option value="7028">2011 보건행정 문제풀이 (단원별)</option>

                                <option value="7027">2011 공중보건 문제풀이 (단원별)</option>

                                <option value="7026">김만수 교수의 식품화학개론 (문제풀이)</option>

                                <option value="7025">(영양교사 이론) 단체급식 및 실습</option>

                                <option value="7024">(영양교사 이론) 조리원리 및 실습</option>

                                <option value="7023">(영양교사 이론) 생애주기영양학</option>

                                <option value="7022">(영양교사 이론) 식사요법 및 실습</option>

                                <option value="7021">(영양교사 이론) 영양교육 및 영양판정</option>

                                <option value="7020">(영양교사 이론) 식품학</option>

                                <option value="7019">(영양교사 이론) 고급영양학</option>

                                <option value="7018">(영양교사 이론) 식품위생학</option>

                                <option value="7017">김만수 교수의 식품화학개론 (이론) - 강좌설명 필독!^^</option>

                                <option value="7016">2011 지역사회간호 단원별 문제풀이</option>

                                <option value="7015">2011 간호관리 단원별 문제풀이</option>

                                <option value="7014">2011 생물 단원별 문제풀이</option>

                                <option value="7013">(필기) 식품미생물학</option>

                                <option value="7012">(필기) 식품가공학</option>

                                <option value="7011">(필기) 식품화학</option>

                                <option value="7010">(필기) 식품위생학</option>

                                <option value="7009">하재남 교수의 환경보건학 이론강의</option>

                                <option value="7008">(2011 시험대비) 위생사 실기강의</option>

                                <option value="7007">(2011 시험대비) 위생사 필기강의</option>

                                <option value="7006">(2012 영양사) 식품미생물 이론 및 문제</option>

                                <option value="7005">(2012 영양사) 조리원리 이론 및 문제 - 강좌설명 확인!^^</option>

                                <option value="7004">(2012 영양사) 단체급식 이론 및 문제</option>

                                <option value="7003">(2012 영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="7002">(2012 영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="7001">(2012 영양사) 영양학 이론 및 문제</option>

                                <option value="7000">(2012 영양사) 식사요법 이론 및 문제</option>

                                <option value="6999">(2012 영양사) 식품위생학 이론 및 문제</option>

                                <option value="6998">(2012 영양사) 식품학 이론 및 문제</option>

                                <option value="6997">문어독(문법,어휘,독해) 문제풀이 특강</option>

                                <option value="6996">2011 의료관계법규 핵심이론 및 문제풀이 (교재포함)</option>

                                <option value="6995">지역사회간호학 (심화반)</option>

                                <option value="6994">간협문제집 특강 (간호관리학)</option>

                                <option value="6993">생물 8, 9급 통합 기출문제 분석특강</option>

                                <option value="6992">2011 보건행정 (정규이론반)</option>

                                <option value="6991">2011 지역사회간호학 (정규이론반)</option>

                                <option value="6990">2011 간호관리학 (정규이론반)</option>

                                <option value="6989">2011 하이스코어 생물 (심화이론반)</option>

                                <option value="6988">하이탑 생물이론 - 7차 교육과정</option>

                                <option value="6987">2011 한국사 (정규이론반)</option>

                                <option value="6986">2011 영어 (정규이론반)</option>

                                <option value="6985">2011 국어 (정규이론반) - 강좌설명 필독!!!!!</option>

                                <option value="6984">2011 공중보건 (정규이론반)</option>

                                <option value="6982">간호학 기출문제풀이 및 예상문제풀이 (원서접수 및 면접 논술특강 포함)</option>

                                <option value="6981">간호학개론 part 3 &lt;간호과정론&gt;</option>

                                <option value="6980">간호학개론 part 2 &lt;간호윤리, 의사소통론, 전문직 특성&gt;</option>

                                <option value="6979">간호학개론 part 1 &lt;간호과학, 간호철학, 간호이론&gt;</option>

                                <option value="6978">(문제) 단체급식 및 실습</option>

                                <option value="6977">(문제) 조리원리 및 실습</option>

                                <option value="6976">(문제) 고급영양학</option>

                                <option value="6975">(문제) 식사요법 및 실습</option>

                                <option value="6974">(문제) 영양판정 및 영양교육</option>

                                <option value="6973">(문제) 식품학</option>

                                <option value="6972">(문제) 생애주기영양학</option>

                                <option value="6971">(문제) 식품위생학</option>

                                <option value="6970">(영양사) 식품미생물 이론 및 문제</option>

                                <option value="6969">(영양사) 조리원리 이론 및 문제</option>

                                <option value="6968">(영양사) 단체급식 이론 및 문제</option>

                                <option value="6967">(영양사) 영양교육 및 식품위생관계법규 이론 및 문제</option>

                                <option value="6966">(영양사) 생리학 및 생화학 이론 및 문제</option>

                                <option value="6965">(영양사) 영양학 이론 및 문제</option>

                                <option value="6964">(영양사) 식사요법 이론 및 문제</option>

                                <option value="6963">(영양사) 식품위생학 이론 및 문제</option>

                                <option value="6962">(영양사) 식품학 이론 및 문제</option>

                                <option value="6961">위생사 2010 시험대비 실기강의</option>

                                <option value="6960">위생사 2010 시험대비 필기강의</option>

                                <option value="6959">2010 보건행정 문제풀이 3 (모의고사형)</option>

                                <option value="6958">2010 공중보건 문제풀이 3 (모의고사형)</option>

                                <option value="6957">2010 한국사 문제풀이 3 (모의고사형)</option>

                                <option value="6956">2010 영어 문제풀이 3 (모의고사형)</option>

                                <option value="6955">2010 국어 문제풀이 3 (모의고사형)</option>

                                <option value="6954">2010 지역사회간호 문제풀이 3 (모의고사형)</option>

                                <option value="6953">2010 간호관리 문제풀이 3 (모의고사형)</option>

                                <option value="6952">2010 생물 문제풀이 2 (모의고사형)</option>

                                <option value="6951">2010 보건행정 문제풀이 2 (단원별)</option>

                                <option value="6950">2010 공중보건 문제풀이 2 (단원별)</option>

                                <option value="6949">2010 한국사 문제풀이 2 (단원별)</option>

                                <option value="6948">2010 영어 문제풀이 2 (단원별)</option>

                                <option value="6947">2010 국어 문제풀이 2 (단원별)</option>

                                <option value="6946">2010 지역사회간호 문제풀이 2 (단원별)</option>

                                <option value="6945">2010 간호관리 문제풀이 2 (단원별)</option>

                                <option value="6944">2010 생물 문제풀이 1 (단원별)</option>

                                <option value="6943">(심화과정) 식품위생학</option>

                                <option value="6942">(심화과정) 단체급식 및 실습</option>

                                <option value="6941">(심화과정) 조리원리 및 실습</option>

                                <option value="6940">(심화과정) 식품학</option>

                                <option value="6939">(심화과정) 식사요법 이론 및 실습</option>

                                <option value="6938">(심화과정) 고급영양학</option>

                                <option value="6937">(심화과정) 영양판정 및 영양교육</option>

                                <option value="6936">(심화과정) 생애주기영양학</option>

                                <option value="6935">간협문제집 문제풀이 (지역사회간호학)</option>

                                <option value="6934">2010 의료관계법규 핵심이론 및 문제풀이 (교재 별도)</option>

                                <option value="6933">해부생리학 문제풀이 (단원별)</option>

                                <option value="6932">2010 보건행정 문제풀이 1 (단원별)</option>

                                <option value="6931">2010 공중보건 문제풀이 1 (단원별)</option>

                                <option value="6930">생물 기출문제 특강 (단원별형)</option>

                                <option value="6929">2010 지역사회간호 문제풀이 1 (단원별)</option>

                                <option value="6928">2010 간호관리 문제풀이 1 (모의고사형)</option>

                                <option value="6927">2010 영어 문제풀이 1 (단원별)</option>

                                <option value="6926">2010 한국사 문제풀이 1 (단원별)</option>

                                <option value="6925">2010 국어 문제풀이 1 (단원별)</option>

                                <option value="6924">신현준 교수의 화학 문제풀이 2</option>

                                <option value="6923">이경연 교수의 식품미생물 이론</option>

                                <option value="6922">김지연 교수의 식품위생 이론</option>

                                <option value="6921">문제로 배우는 생물학</option>

                                <option value="6920">식품위생학 (이론)</option>

                                <option value="6919">단체급식 및 실습 (이론)</option>

                                <option value="6918">조리원리 및 실습 (이론)</option>

                                <option value="6917">식품학 (이론)</option>

                                <option value="6916">식사요법 및 실습 (이론)</option>

                                <option value="6915">고급 영양학 (이론)</option>

                                <option value="6914">생애주기 영양학 (이론)</option>

                                <option value="6913">영양판정 및 영양교육 (이론)</option>

                                <option value="6912">신현준 교수의 화학이론</option>

                                <option value="6911">2010 보건행정 (정규이론반)</option>

                                <option value="6910">영양학 이론 및 문제 (권)</option>

                                <option value="6909">2010 한국사 (정규이론반)</option>

                                <option value="6908">2010 공중보건 (정규이론반)</option>

                                <option value="6907">해부생리학 이론강의</option>

                                <option value="6906">RN-BSN 핵심이론 및 문제풀이</option>

                                <option value="6905">2010 하이스코어 생물 (심화이론반)</option>

                                <option value="6904">2010 지역사회간호 (정규이론반)</option>

                                <option value="6903">2010 전공보건 최종 모의고사반</option>

                                <option value="6902">수문사 간호관리학 이론</option>

                                <option value="6901">알토란 생물 (기본이론반)</option>

                                <option value="6900">2010 국어이론</option>

                                <option value="6899">2010 영어이론</option>

                                <option value="6898">환경공학 바이블 (소음진동, 폐기물, 토양편)</option>

                                <option value="6897">작물생리학 핵심이론 및 문제</option>

                                <option value="6896">재배학 핵심이론 및 문제</option>

                                <option value="6895">전공보건 문제풀이 (박성희)</option>

                                <option value="6894">전공보건 문제풀이 (김희영)</option>

                                <option value="6893">09 위생사 (곤충학 및 실기)</option>

                                <option value="6892">09 위생사 (위생법규)</option>

                                <option value="6891">09 위생사 (식품위생학)</option>

                                <option value="6890">09 위생사 (환경위생학)</option>

                                <option value="6889">09 위생사 (공중보건학)</option>

                                <option value="6888">09 강하영 교수의 한국사 문제풀이 3</option>

                                <option value="6887">09 오권영 교수의 영어 문제풀이 2</option>

                                <option value="6886">09 김철민 교수의 국어 문제풀이 3</option>

                                <option value="6885">09 김희영 교수의 보건행정 문제풀이 3</option>

                                <option value="6884">09 하재남 교수의 공중보건 문제풀이 3</option>

                                <option value="6883">09 김희영 교수의 지역사회간호 문제풀이 3</option>

                                <option value="6882">권경자 교수의 간호관리 문제풀이 3</option>

                                <option value="6881">09 최정환 교수의 생물 문제풀이 3</option>

                                <option value="6880">식품미생물 요약</option>

                                <option value="6879">조리원리 이론 및 문제</option>

                                <option value="6878">단체급식 이론 및 문제</option>

                                <option value="6877">영양교육/위생법규 이론 및 문제</option>

                                <option value="6876">영양학 이론 및 문제</option>

                                <option value="6874">생리학/생화학 이론 및 문제</option>

                                <option value="6873">식사요법 이론 및 문제</option>

                                <option value="6872">식품위생 이론 및 문제</option>

                                <option value="6871">식품학 이론 및 문제</option>

                                <option value="6870">09 식사요법 문제</option>

                                <option value="6869">09 식품위생 문제</option>

                                <option value="6868">09 조리원리 문제</option>

                                <option value="6867">09 영양판정/교육 문제</option>

                                <option value="6866">09 생애주기영양학 문제</option>

                                <option value="6865">09 단체급식 문제</option>

                                <option value="6864">09 식품학 문제</option>

                                <option value="6863">의료관계법규 핵심이론 및 문제</option>

                                <option value="6862">09 김희영 교수의 보건행정 문제풀이 2</option>

                                <option value="6861">09 하재남 교수의 공중보건 문제풀이 2</option>

                                <option value="6860">09 김철민 교수의 국어 문제풀이 2</option>

                                <option value="6859">09 오권영 교수의 영어 문제풀이 1</option>

                                <option value="6858">09 강하영 교수의 한국사 문제풀이 2</option>

                                <option value="6857">09 김희영 교수의 지역사회간호 문제풀이 2</option>

                                <option value="6856">권경자 교수의 간호관리 문제풀이 2</option>

                                <option value="6855">09 최정환 교수의 생물 문제풀이 2</option>

                                <option value="6854">기출문제분석 특강</option>

                                <option value="6853">한국사 동형 모의고사</option>

                                <option value="6852">영어 동형 모의고사</option>

                                <option value="6851">국어 동형 모의고사</option>

                                <option value="6850">환경공학 바이블 (수질편)</option>

                                <option value="6849">조리원리 심화</option>

                                <option value="6848">식사요법 심화</option>

                                <option value="6847">영양교육, 영양판정 심화</option>

                                <option value="6846">생애주기영양학 심화</option>

                                <option value="6845">식품위생 심화</option>

                                <option value="6844">단체급식 심화</option>

                                <option value="6843">식품학 심화</option>

                                <option value="6842">신현준 교수의 화학 문제풀이 1</option>

                                <option value="6841">전공영양 (영양학,생애주기영양학)</option>

                                <option value="6840">환경공학 바이블 (대기편)</option>

                                <option value="6839">09 강하영 교수의 한국사 문제풀이 1</option>

                                <option value="6838">임장빈 교수의 영어 문제풀이 1</option>

                                <option value="6837">09 김철민 교수의 국어 문제풀이 1</option>

                                <option value="6836">09 김희영 교수의 보건행정 문제풀이 1</option>

                                <option value="6835">09 하재남 교수의 공중보건 문제풀이 1</option>

                                <option value="6834">09 김희영 교수의 지역사회간호 문제풀이 1</option>

                                <option value="6833">권경자 교수의 간호관리 문제풀이 1</option>

                                <option value="6832">09 최정환 교수의 생물 문제풀이 1</option>

                                <option value="6831">09 전공보건2 (3~4월)</option>

                                <option value="6830">전공영양 (식사요법 요점)</option>

                                <option value="6829">전공영양 (조리원리)</option>

                                <option value="6828">전공영양 (영양교육, 영양판정)</option>

                                <option value="6827">전공영양 (영양학, 생애주기영양학)</option>

                                <option value="6826">전공영양 (식사요법)</option>

                                <option value="6825">전공영양 (식품위생)</option>

                                <option value="6824">전공영양 (단체급식)</option>

                                <option value="6823">전공영양 (식품학)</option>

                                <option value="6822">갑야테스트</option>

                                <option value="6821">임장빈 J 영어 (이론완성반)</option>

                                <option value="6820">한국 근현대사</option>

                                <option value="6819">김종찬 교육학 (2009 촬영)</option>

                                <option value="6818">09 전공보건1 (1~2월)</option>

                                <option value="6817">2009 공중보건 (정규이론반)</option>

                                <option value="6816">2009 보건행정 (정규이론반)</option>

                                <option value="6815">2009 한국사 (정규이론반)</option>

                                <option value="6814">2009 영어 (정규이론반)</option>

                                <option value="6813">2009 국어 (정규이론반)</option>

                                <option value="6812">권경자 간호관리학</option>

                                <option value="6811">하이스코어 생물이론 (정규심화반)</option>

                                <option value="6810">하이탑 생물이론 (정규이론반)</option>

                                <option value="6809">2009 지역사회간호 (정규이론반)</option>

                                <option value="6808">교육학 문제</option>

                                <option value="6807">08 전공영양 (조리원리 문제)</option>

                                <option value="6806">08 전공영양 (식사요법 문제)</option>

                                <option value="6805">예전 영양교사 문제 (영양학 관련)</option>

                                <option value="6804">08 전공영양 (식품학 문제)</option>

                                <option value="6803">08 전공영양 (식품위생 문제)</option>

                                <option value="6802">08 전공영양 (단체급식 문제)</option>

                                <option value="6801">보복부 행정법총론</option>

                                <option value="6800">보복부 법규</option>

                                <option value="6799">보복부 공중보건문제</option>

                                <option value="6798">보복부 영어문제</option>

                                <option value="6797">위생사 보충강의</option>

                                <option value="6796">08 김희영 교수의 지역사회간호 문제풀이 4</option>

                                <option value="6795">08 권경자 교수의 간호관리 문제풀이 4</option>

                                <option value="6794">08 최정환 교수의 생물 문제풀이 3</option>

                                <option value="6793">08 이종민 교수의 생물 문제풀이 2</option>

                                <option value="6792">환경공학 핵심이론 및 문제풀이</option>

                                <option value="6791">영양교사 이론(조리원리_이)</option>

                                <option value="6789">09대비 생리학</option>

                                <option value="6790">09대비 생화학</option>

                                <option value="6788">09대비 단체급식</option>

                                <option value="6787">09대비 식품위생학</option>

                                <option value="6786">09대비 식품미생물</option>

                                <option value="6784">09대비 식품학</option>

                                <option value="6785">09대비 조리원리</option>

                                <option value="6783">예전 영양학 강의 (영양사)</option>

                                <option value="6782">09대비 영양교육 및 위생법규</option>

                                <option value="6781">09대비 식사요법</option>

                                <option value="6780">보충강의</option>

                                <option value="6779">위생법규 및 위생곤충학 (08대비)</option>

                                <option value="6778">위생사 실기종합 (08대비)</option>

                                <option value="6777">식품위생학 (08대비)</option>

                                <option value="6776">환경위생학 (08대비)</option>

                                <option value="6775">공중보건학 (08대비)</option>

                                <option value="6774">08 강하영 교수의 한국사 문제풀이 3</option>

                                <option value="6773">08 유재록 교수의 영어 문제풀이 3</option>

                                <option value="6772">08 김철민 교수의국어 문제풀이 3</option>

                                <option value="6771">08 김희영 교수의 보건행정 문제풀이 2</option>

                                <option value="6770">08 하재남 교수의 공중보건 문제풀이 4</option>

                                <option value="6769">08 김희영 교수의 지역사회간호 문제풀이 3</option>

                                <option value="6768">08 권경자 교수의 간호관리 문제풀이 3</option>

                                <option value="6767">08 최정환 교수의 생물 문제풀이 2</option>

                                <option value="6766">08 이종민 교수의 생물 문제풀이 1</option>

                                <option value="6765">보충강의입니다</option>

                                <option value="6763">생물 기출문제 분석특강</option>

                                <option value="6762">08 김희영 교수의 지역사회간호 문제풀이 2</option>

                                <option value="6761">08 권경자 교수의간호관리 문제풀이 2</option>

                                <option value="6760">하영길 교수의 보건행정 문제풀이</option>

                                <option value="6759">08 하재남 교수의 공중보건 문제풀이 3</option>

                                <option value="6758">08 유재록 교수의영어 문제풀이 2</option>

                                <option value="6757">08 강하영 교수의한국사 문제풀이 2</option>

                                <option value="6756">08 김철민 교수의국어 문제풀이 2</option>

                                <option value="6755">08 김한식 교수의환경공학 문제풀이 1</option>

                                <option value="6754">이문환 교수의 화학 문제풀이</option>

                                <option value="6753">간협문제집 문제풀이 (간호관리) - 현재 교재품절되어 강의만 신청가능.</option>

                                <option value="6752">간협문제집 문제풀이 (지역사회간호)</option>

                                <option value="6751">08 김희영 교수의보건행정 문제풀이 1</option>

                                <option value="6750">08 하재남 교수의 공중보건 문제풀이 2</option>

                                <option value="6749">08 강하영 교수의한국사 문제풀이 1</option>

                                <option value="6748">08 유재록 교수의영어 문제풀이 1</option>

                                <option value="6747">08 김철민 교수의국어 문제풀이 1</option>

                                <option value="6746">영양교사 이론(식사요법)</option>

                                <option value="6745">영양교사 이론(단체급식+식품위생학)</option>

                                <option value="6744">영양교사 이론(식품학)</option>

                                <option value="6743">영양교사 이론(영양학관련)</option>

                                <option value="6742">영양교사 이론(조리원리_유)</option>

                                <option value="6741">영양교사 전공종합</option>

                                <option value="6740">영양교사 이론 총종합</option>

                                <option value="6739">김지연 교수의식품위생 이론강의</option>

                                <option value="6387">전효성 교수의 화학 문제풀이</option>

                                <option value="6738">경기도 제한 문풀 (식위직)</option>

                                <option value="6363">08 하재남 교수의 공중보건 문제풀이 1</option>

                                <option value="6737">김지연 교수의 식품위생 문제풀이</option>

                                <option value="6736">경기도 제한 문풀 (의료직)</option>

                                <option value="6362">08 최정환 교수의 생물 문제풀이 1</option>

                                <option value="6353">이문환 교수의All가짐 화학이론</option>

                                <option value="6361">알기쉬운 생물이론</option>

                                <option value="6360">알토란 생물이론</option>

                                <option value="6386">하재남 교수의 환경보건</option>

                                <option value="6357">하이스코어 생물이론(정규 심화과정)</option>

                                <option value="6735">국민건강보험공단 종합반</option>

                                <option value="6734">노인장기요양보험법령국민건강보험법</option>

                                <option value="6733">직무수행에 필요한 응용능력</option>

                                <option value="6732">심화 한국사</option>

                                <option value="6385">영어심화반(독해+어휘)</option>

                                <option value="6352">오쌤영어</option>

                                <option value="6356">2008 공중보건(정규이론반)</option>

                                <option value="6359">2008 간호관리(정규이론반)</option>

                                <option value="6351">2008 보건행정(정규이론반)</option>

                                <option value="6350">브레인 영어 (정규이론반)</option>

                                <option value="6349">2008 국어(정규이론반)</option>

                                <option value="6348">2008 지역사회간호(정규이론반)</option>

                                <option value="6347">2008 한국사(정규이론반)</option>

                                <option value="6384">국어(심화반)Ⅱ</option>

                                <option value="6346">교육학(이론강의)</option>

                                <option value="6731">보건교사(전공+교육학) 종합</option>

                                <option value="6730">보건교사(전공)</option>

                                <option value="6728">성인*아동*기초간호*간호관리 전분야</option>

                                <option value="6727">지역사회정신간호분야 전과정</option>

                                <option value="6726">영양교사(조리원리)</option>

                                <option value="6725">영양교사(전공과목) 종합반</option>

                                <option value="6724">영양교사 종합반</option>

                                <option value="6383">교육학(문제풀이)</option>

                                <option value="6723">영양교사(식품위생학)</option>

                                <option value="6722">영양교사(단체급식)</option>

                                <option value="6720">영양교사(식품학)</option>

                                <option value="6719">영양교사(영양학/생애주기영양학/영양판정/영양교육)</option>

                                <option value="6345">신보건행정</option>

                                <option value="6718">영어독해 문제풀이(보건복지부대비)</option>

                                <option value="6717">공중보건 문제풀이(보건복지부대비)</option>

                                <option value="6460">영어 문제풀이(보건복지부대비)</option>

                                <option value="6716">보건직 문제풀이</option>

                                <option value="6715">2007위생사(위생곤충학)</option>

                                <option value="6714">2007위생사(식품위생학)</option>

                                <option value="6713">2007위생사(환경위생)</option>

                                <option value="6712">2007위생사(위생관계법규)</option>

                                <option value="6711">2007위생사(공중보건학)</option>

                                <option value="6710">영양학 이론 및 문제(구)</option>

                                <option value="6709">식품미생물 요약 및 문제</option>

                                <option value="6708">생화학 이론 및 문제</option>

                                <option value="6707">생리학 이론 및 문제</option>

                                <option value="6706">단체급식 이론 및 문제</option>

                                <option value="6705">식품위생학 이론 및 문제</option>

                                <option value="6704">조리원리 이론 및 문제</option>

                                <option value="6703">식품학 이론 및 문제</option>

                                <option value="6702">식사요법 이론 및 문제</option>

                                <option value="6701">(영양교육+식품위생관계법규) 이론 및 문제</option>

                                <option value="6700">2007 보건직 문제풀이(magic4)</option>

                                <option value="6698">2007 간호직 문제풀이(magic4)</option>

                                <option value="6699">2007 의료직 문제풀이(magic4)</option>

                                <option value="6448">지역사회간호 문제풀이(magic4)</option>

                                <option value="6382">간호관리 문제풀이(magic4)</option>

                                <option value="6411">심화생물 문제풀이(magic4)</option>

                                <option value="6381">생물 문제풀이(magic4)</option>

                                <option value="6432">신보건행정 문제풀이(magic4)</option>

                                <option value="6431">보건행정 문제풀이(magic4)</option>

                                <option value="6410">공중보건 문제풀이(magic4)</option>

                                <option value="6430">영어 문제풀이(magic4)</option>

                                <option value="6344">한국사 문제풀이(magic4)</option>

                                <option value="6429">국어 문제풀이(magic4)</option>

                                <option value="6697">교육학 문제풀이</option>

                                <option value="6696">9급 행정법 총론 문제풀이(보건복지부대비)</option>

                                <option value="6694">7급 행정법</option>

                                <option value="6693">9급 행정법 총론</option>

                                <option value="6692">교육학 이론</option>

                                <option value="6691">심화생물이론</option>

                                <option value="6690">의료직(제한경쟁) 문제풀이(magic3)</option>

                                <option value="6689">간호직(제한경쟁) 문제풀이(magic3)</option>

                                <option value="6688">보건직 문제풀이(magic3)</option>

                                <option value="6409">심화생물 문제풀이(magic3)</option>

                                <option value="6408">생물 문제풀이(magic3)</option>

                                <option value="6471">지역사회간호 문제풀이(magic3)</option>

                                <option value="6407">간호관리 문제풀이(magic3)</option>

                                <option value="6447">신보건행정 문제풀이(magic3)</option>

                                <option value="6406">공중보건 문제풀이(magic3)</option>

                                <option value="6446">영어 문제풀이(magic3)</option>

                                <option value="6380">한국사 문제풀이(magic3)</option>

                                <option value="6445">국어 문제풀이(magic3)</option>

                                <option value="6687">의료직(2과목) 문제풀이(magic2)</option>

                                <option value="6686">간호직(3과목) 문제풀이(magic2)</option>

                                <option value="6685">간호직(5과목) 문제풀이(magic2)</option>

                                <option value="6684">보건직 문제풀이(magic2)</option>

                                <option value="6405">생물 문제풀이(magic2)</option>

                                <option value="6428">지역사회간호 문제풀이(magic2)</option>

                                <option value="6404">간호관리 문제풀이(magic2)</option>

                                <option value="6470">신보건행정 문제풀이(magic2)</option>

                                <option value="6459">김희영의 보건행정 문제풀이(magic2)</option>

                                <option value="6403">공중보건 문제풀이(magic2)</option>

                                <option value="6427">영어 문제풀이(magic2)</option>

                                <option value="6444">한국사 문제풀이(magic2)</option>

                                <option value="6458">국어 문제풀이(magic2)</option>

                                <option value="6379">최정환의 생물 심화이론</option>

                                <option value="6683">2007 의료관계법규</option>

                                <option value="6682">2007 환경부 문제 종합</option>

                                <option value="6624">2007 환경부환경공학+환경보건(김순복)</option>

                                <option value="6426">환경보건 문제풀이</option>

                                <option value="6402">2007 환경부화학(전효성) 문제</option>

                                <option value="6681">2007 환경직 문제풀이</option>

                                <option value="6680">2007 보건직 문제풀이</option>

                                <option value="6378">2007 화학(이문환) 문제풀이</option>

                                <option value="6443">영어기출 문제풀이(magic1)</option>

                                <option value="6481">보건행정(김희영) 문제풀이(magic1)</option>

                                <option value="6486">신보건행정 문제풀이(magic1)</option>

                                <option value="6425">공중보건 문제풀이(magic1)</option>

                                <option value="6442">영어 문제풀이(magic1)</option>

                                <option value="6457">한국사 문제풀이(magic1)</option>

                                <option value="6469">국어 문제풀이(magic1)</option>

                                <option value="6679">김기연의 환경공학이론</option>

                                <option value="6678">의료관계법규 기출예상문제</option>

                                <option value="6343">2007 간호관리 이론</option>

                                <option value="6401">2007 지역사회간호</option>

                                <option value="6342">전효성 화학 이론 (화학사)</option>

                                <option value="6341">2007 공중보건 이론</option>

                                <option value="6377">2007 김희영의 보건행정 이론</option>

                                <option value="6340">2007 한국사(정규반)</option>

                                <option value="6358">신환경공학 이론</option>

                                <option value="6675">간호직 심화종합반</option>

                                <option value="6677">식품위생직 심화종합반</option>

                                <option value="6676">의료기술직 심화종합반</option>

                                <option value="6674">환경직 심화종합반</option>

                                <option value="6673">보건직 심화종합반</option>

                                <option value="6672">이벤트 강좌(문제풀이)</option>

                                <option value="6376">2007 신보건행정 이론</option>

                                <option value="6339">2007 국어(정규반)</option>

                                <option value="6671">심화종합반(국어+한국사+영어)</option>

                                <option value="6670">2006경기도 하반기 식품위생직</option>

                                <option value="6669">2006경기도 하반기 화학(이문환+전효성)</option>

                                <option value="6668">2006경기도 하반기 환경직</option>

                                <option value="6667">2006 식품위생(김지연)-경기도하반기</option>

                                <option value="6666">2006 식품위생(박미원)-경기도하반기</option>

                                <option value="6400">화학(전효성)-경기도하반기</option>

                                <option value="6399">화학(이문환)-경기도하반기</option>

                                <option value="6375">2007 영어(정규반)</option>

                                <option value="6374">한국사(심화반)</option>

                                <option value="6398">영어(심화반)</option>

                                <option value="6397">국어(심화반)Ⅰ</option>

                                <option value="6665">환경공학 쪽집게 특강</option>

                                <option value="6664">간호관리 쪽집게 특강</option>

                                <option value="6663">백성종의 생물 문제풀이</option>

                                <option value="6662">전효성의 화학 쪽집게 특강</option>

                                <option value="6661">영어(오권영) 쪽집게 특강</option>

                                <option value="6660">영어 쪽집게 특강</option>

                                <option value="6659">공중보건 쪽집게 특강</option>

                                <option value="6658">이문환의 화학 쪽집게 특강</option>

                                <option value="6657">보건행정 쪽집게 특강</option>

                                <option value="6656">국어 쪽집게 모의고사</option>

                                <option value="6655">지역사회간호 쪽집게 모의고사</option>

                                <option value="6654">이종민의 생물 쪽집게 모의고사</option>

                                <option value="6653">2006 한국사 쪽집게 특강</option>

                                <option value="6396">근현대사 (모의고사) 문제풀이</option>

                                <option value="6424">전효성의 화학(모의고사)문제풀이</option>

                                <option value="6422">백성종의 생물(모의고사) 문제풀이</option>

                                <option value="6423">이종민의 생물(모의고사) 문제풀이</option>

                                <option value="6373">지역사회간호(모의고사) 문제풀이</option>

                                <option value="6372">간호관리(모의고사) 문제풀이</option>

                                <option value="6456">3차 영어 기출문제풀이</option>

                                <option value="6512">보건행정(모의고사) 문제풀이</option>

                                <option value="6395">공중보건(모의고사) 문제풀이</option>

                                <option value="6394">영어(모의고사) 문제풀이</option>

                                <option value="6441">한국사(모의고사) 문제풀이</option>

                                <option value="6371">국어(모의고사) 문제풀이</option>

                                <option value="6652">2006위생사(위생곤충학)</option>

                                <option value="6651">2006위생사(식품위생학)</option>

                                <option value="6650">2006위생사(실기)</option>

                                <option value="6649">2006위생사(환경위생)</option>

                                <option value="6648">2006위생사(위생관계법규)</option>

                                <option value="6647">2006위생사(공중 보건학)</option>

                                <option value="6421">근현대사 (단원별) 문제풀이</option>

                                <option value="6480">2차 영어 기출문제풀이</option>

                                <option value="6646">2006 의료직(서울시) 모의고사 문제풀이</option>

                                <option value="6645">2006 환경직(서울시) 모의고사 문제풀이</option>

                                <option value="6644">2006 간호직(서울시) 모의고사 문제풀이</option>

                                <option value="6643">2006 보건직(서울시) 모의고사 문제풀이</option>

                                <option value="6370">환경공학(단원별) 문제풀이</option>

                                <option value="6393">이문환의 화학(단원별)문제풀이(시리즈2)</option>

                                <option value="6420">이종민의 생물(단원별) 문제풀이</option>

                                <option value="6392">지역사회간호(단원별) 문제풀이</option>

                                <option value="6391">간호관리(단원별) 문제풀이</option>

                                <option value="6514">보건행정(단원별) 문제풀이</option>

                                <option value="6419">공중보건(단원별) 문제풀이</option>

                                <option value="6418">영어(단원별) 문제풀이</option>

                                <option value="6468">한국사(단원별) 문제풀이</option>

                                <option value="6369">국어(단원별) 문제풀이</option>

                                <option value="6642">2008 영양사 이론 및 문제</option>

                                <option value="6640">2006생리학 이론 및 문제</option>

                                <option value="6641">2006생화학 이론 및 문제</option>

                                <option value="6639">2006단체급식 이론 및 문제</option>

                                <option value="6638">2006식품위생학 이론 및 문제</option>

                                <option value="6637">2006조리원리 이론 및 문제</option>

                                <option value="6636">2006식품학 이론 및 문제</option>

                                <option value="6635">2006영양학 이론 및 문제</option>

                                <option value="6634">2006(영양교육+식품위생관계법규) 이론 및 문제</option>

                                <option value="6633">식사요법 이론 및 문제</option>

                                <option value="6467">오권영의 영어기출문제</option>

                                <option value="6631">환경직문제풀이(경기도대비)</option>

                                <option value="6417">화학(단원별) 문제풀이</option>

                                <option value="6440">화학(모의고사형) 문제풀이</option>

                                <option value="6485">환경공학(단원별) 문제풀이</option>

                                <option value="6338">김순복의 환경공학 이론</option>

                                <option value="6630">의료관계법규(핵심이론 및 문제풀이)&lt;font color=blue&gt;&lt;b&gt;김희영교수님 샘플&lt;/b&gt;&lt;/font&gt;&lt;b&gt;&lt;font color=red&gt;(샘플강의용 목록)&lt;/font&gt;&lt;/b&gt;</option>

                                <option value="6337">2006 간호관리이론</option>

                                <option value="6336">2006 지역사회간호 이론</option>

                                <option value="6390">얼른후딱 생물문제풀이</option>

                                <option value="6416">[시리즈 ②] 지역사회간호문제풀이</option>

                                <option value="6415">[시리즈 ②] 간호관리문제풀이</option>

                                <option value="6516">[시리즈 ②]보건행정문제풀이</option>

                                <option value="6439">[시리즈 ②]공중보건문제풀이</option>

                                <option value="6455">[시리즈 ②] 영어문제풀이</option>

                                <option value="6479">[시리즈 ②] 한국사문제풀이</option>

                                <option value="6389">[시리즈 ②] 국어문제풀이</option>

                                <option value="6484">환경보건이론</option>

                                <option value="6629">이준규의 문학특강</option>

                                <option value="6627">2006 간호직 문제종합(시리즈②)</option>

                                <option value="6628">2006 환경직 문제종합</option>

                                <option value="6478">2006 보건직 문제종합(시리즈②)</option>

                                <option value="6438">[시리즈 ①] 화학문제풀이</option>

                                <option value="6437">[시리즈 ①] 지역사회간호문제풀이</option>

                                <option value="6436">[시리즈 ①] 간호관리문제풀이</option>

                                <option value="6517">[시리즈 ①]보건행정문제풀이</option>

                                <option value="6454">[시리즈 ①]공중보건문제풀이</option>

                                <option value="6466">[시리즈 ①] 영어문제풀이</option>

                                <option value="6483">[시리즈 ①] 한국사문제풀이</option>

                                <option value="6388">[시리즈 ①] 국어문제풀이</option>

                                <option value="6625">환경부대비 종합반(환경공학,화학,환경보건)</option>

                                <option value="6488">환경보건문제풀이</option>

                                <option value="6453">화학문제풀이(환경부)</option>

                                <option value="6623">환경공학문제풀이(환경부)</option>

                                <option value="6435">보건행정 이론강의</option>

                                <option value="6368">(한국사) 근현대사 이론특강</option>

                                <option value="6622">2006 의료관계법규(핵심이론 및 문제풀이)</option>

                                <option value="6333">헨리홍의 환경공학이론</option>

                                <option value="6367">백성종의 알토란 생물이론</option>

                                <option value="6366">2006 국어</option>

                                <option value="6414">한국사 이론(정규반)</option>

                                <option value="6335">2006 공중보건</option>

                                <option value="6620">선관위&amp;노동부 복원 문제(영어)</option>

                                <option value="6334">김진의 smile 영어(new)</option>

                                <option value="6365">알기쉬운 생물(이론)</option>

                                <option value="6452">5차 화학문제풀이(모의고사형)</option>

                                <option value="6525">2차 지역사회간호 문제(단원별2)</option>

                                <option value="6521">5차 간호관리 문제풀이(단원별)</option>

                                <option value="6364">헨리홍의 환경공학 문제풀이(교재 Ⅰ,Ⅱ권으로 구성)</option>

                                <option value="6618">위생사 시험은?(오리엔테이션)</option>

                                <option value="6617">보건복지부 7급 보건직 문제풀이 </option>

                                <option value="6616">보건복지부 9급 보건직 문제풀이 </option>

                                <option value="6626">럭셔리 보건행정 문제풀이&lt;font color=red&gt;교재별도</option>

                                <option value="6614">보건복지부보건의료관계법규</option>

                                <option value="6536">5차 보건복지부영어(오권영교수)</option>

                                <option value="6513">5차 보건복지부영어(김진교수)</option>

                                <option value="6413">5차 보건복지부공중보건</option>

                                <option value="6490">지역사회간호 이론</option>

                                <option value="6610">위생사(위생곤충학)</option>

                                <option value="6609">위생사(식품위생학)</option>

                                <option value="6608">위생사(실기)</option>

                                <option value="6607">위생사(환경위생)</option>

                                <option value="6606">위생사(위생관계법규)&lt;font color=red&gt;클릭하세요.&lt;/font&gt;</option>

                                <option value="6605">위생사(공중 보건학)</option>

                                <option value="6604">전산직 종합</option>

                                <option value="6603">프로그래밍언어(9월8일 오픈)</option>

                                <option value="6601">컴퓨터일반(9월 2일 오픈)</option>

                                <option value="6602">산업위생관리산업기사(실기)</option>

                                <option value="6600">환기(일반, 전체, 국소)</option>

                                <option value="6599">작업환경측정 및 평가(실기)</option>

                                <option value="6598">작업환경관리(실기)</option>

                                <option value="6597">사무자동화산업기사필기</option>

                                <option value="6465">간호관리 이론 (학원정규이론수업)</option>

                                <option value="6595">2005생화학 이론 및 문제</option>

                                <option value="6594">2005생리학 이론 및 문제</option>

                                <option value="6593">식품위생관계법규 이론 및 문제</option>

                                <option value="6592">2005식품위생학 이론 및 문제</option>

                                <option value="6591">2005조리원리 이론 및 문제</option>

                                <option value="6589">2005식품학 이론 및 문제</option>

                                <option value="6588">2005영양학 이론 및 문제</option>

                                <option value="6587">2005영양교육 이론 및 문제</option>

                                <option value="6586">2005식사요법 이론 및 문제</option>

                                <option value="6526">1차 김희영의 지역사회간호 문제(단원별)</option>

                                <option value="6354">오쌤영어특강</option>

                                <option value="6451">2005 보건행정 이론강의</option>

                                <option value="6584">환경직문제풀이(모의고사형)</option>

                                <option value="6583">보건직문제풀이(모의고사형)</option>

                                <option value="6527">3차 지역사회간호문제풀이(모의고사형)</option>

                                <option value="6522">4차 간호관리문제풀이(모의고사형)</option>

                                <option value="6464">4차 환경공학문제풀이(모의고사형)</option>

                                <option value="6463">4차 화학문제풀이(모의고사형)</option>

                                <option value="6555">4차 보건행정문제풀이(모의고사형)</option>

                                <option value="6434">공중보건문제풀이(모의고사형)</option>

                                <option value="6578">4차 영어문제풀이(모의고사형)</option>

                                <option value="6511">4차 한국사문제풀이(모의고사형)</option>

                                <option value="6509">4차 국어문제풀이(모의고사형)</option>

                                <option value="6519">이경연의 식품미생물 문제풀이</option>

                                <option value="6576">산업위생관리산업기사 필기</option>

                                <option value="6575">산업위생학</option>

                                <option value="6574">작업환경측정 및 평가</option>

                                <option value="6573">작업환경관리</option>

                                <option value="6571">산업환기</option>

                                <option value="6545">3차 식품위생 적중 예상문제풀이</option>

                                <option value="6569">3차 의료관계법규문제풀이(단원별)</option>

                                <option value="6568">2차 지역사회간호문제풀이(단원별)</option>

                                <option value="6523">3차 간호관리문제풀이(단원별)</option>

                                <option value="6567">환경직문제풀이(단원별)</option>

                                <option value="6477">3차 화학문제풀이(단원별)</option>

                                <option value="6566">보건직문제풀이(단원별)</option>

                                <option value="6476">3차 환경공학문제풀이(단원별)</option>

                                <option value="6450">공중보건문제풀이(단원별)</option>

                                <option value="6565">3차 보건행정문제풀이(단원별)</option>

                                <option value="6554">3차 한국사문제풀이(단원별)</option>

                                <option value="6585">3차 영어문제풀이(단원별)</option>

                                <option value="6534">3차 국어문제풀이(단원별)</option>

                                <option value="6561">정보처리기사</option>

                                <option value="6560">정보처리기능사(필기)</option>

                                <option value="6502">2005단체급식 이론 및 문제</option>

                                <option value="6559">의료관계법규이론</option>

                                <option value="6355">이문환의 화학이론</option>

                                <option value="6570">2차 김지연의 식품위생문제풀이</option>

                                <option value="6581">2차 권경자의 간호관리문제풀이</option>

                                <option value="6515">고성진의 보건행정문제풀이</option>

                                <option value="6558">보건행정이론(6월20일 오픈)</option>

                                <option value="6580">1차 두현기의 화학문제풀이 특강(8주)</option>

                                <option value="6412">3차 적중 생물 모의고사특강</option>

                                <option value="6433">2차 생물문제풀이(6주)</option>

                                <option value="6557">환경직문제(6주)</option>

                                <option value="6556">보건직문제(6주)</option>

                                <option value="6462">2차 화학문제풀이(6주)</option>

                                <option value="6489">2차 환경공학문제풀이(6주)</option>

                                <option value="6579">2차 보건행정문제풀이(6주)</option>

                                <option value="6461">2차 공중보건문제풀이(6주)</option>

                                <option value="6563">2차 한국사문제풀이(6주)</option>

                                <option value="6612">2차 영어문제풀이(6주)</option>

                                <option value="6553">2차 국어문제풀이(6주)</option>

                                <option value="6582">1차 장혜림의 지역사회간호 핵심이론 및 문제풀이</option>

                                <option value="6590">1차 권경자의 간호관리 핵심이론 및 문제풀이</option>

                                <option value="6552">1차 환경보건문제풀이</option>

                                <option value="6551">영양사문제풀이</option>

                                <option value="6549">생리학</option>

                                <option value="6550">생화학</option>

                                <option value="6548">단체급식</option>

                                <option value="6547">식품위생관계법규</option>

                                <option value="6546">식품위생학</option>

                                <option value="6544">조리원리</option>

                                <option value="6543">식품학</option>

                                <option value="6542">영양학</option>

                                <option value="6541">영양교육</option>

                                <option value="6540">식사요법</option>

                                <option value="6621">심화학습 (근,현대사)</option>

                                <option value="6539">심화학습 (문학영역)</option>

                                <option value="6449">1차 이종민의 생물 문제풀이 특강(8주)</option>

                                <option value="6632">9급 기초영문법(이벤트강좌)</option>

                                <option value="6538">지방직 대비(보건직)</option>

                                <option value="6537">보건행정문제풀이</option>

                                <option value="6475">공중보건문제풀이</option>

                                <option value="6510">1차 영어문제풀이(8주)</option>

                                <option value="6535">한국사문제풀이</option>

                                <option value="6562">1차 국어문제풀이(8주)</option>

                                <option value="6532">의료기술직문제풀이</option>

                                <option value="6533">식품위생직문제풀이</option>

                                <option value="6531">간호직문제풀이</option>

                                <option value="6530">환경직문제풀이</option>

                                <option value="6529">보건직문제풀이</option>

                                <option value="6528">지역사회간호문제풀이</option>

                                <option value="6524">간호관리문제풀이</option>

                                <option value="6520">1차 김민지의 식품미생물 문제풀이(8주)</option>

                                <option value="6518">1차 식품화학문제풀이(8주)</option>

                                <option value="6572">1차 식품위생문제풀이(8주)</option>

                                <option value="6492">1차 환경공학문제풀이(8주)</option>

                                <option value="6474">1차 전효성의 화학문제풀이(8주)</option>

                                <option value="6473">1차 공중보건문제풀이(8주)</option>

                                <option value="6615">1차 보건행정문제풀이(8주)</option>

                                <option value="6613">1차 영어문제풀이(8주)</option>

                                <option value="6564">1차 한국사문제풀이(8주)</option>

                                <option value="6577">1차 국어문제풀이(8주)</option>

                                <option value="6508">위생사실기</option>

                                <option value="6507">위생관계법규</option>

                                <option value="6506">위생곤충학</option>

                                <option value="6505">식품위생학</option>

                                <option value="6504">환경위생학</option>

                                <option value="6503">공중보건학</option>

                                <option value="6501">식품미생물학 이론</option>

                                <option value="6500">2007 위생사</option>

                                <option value="6499">의료기술직 종합</option>

                                <option value="6497">간호직 종합</option>

                                <option value="6498">식품위생직 종합</option>

                                <option value="6496">환경직 종합</option>

                                <option value="6495">보건직 종합</option>

                                <option value="6494">의료관계법규</option>

                                <option value="6619">이종민의 생물이론</option>

                                <option value="6493">이경연의 식품미생물</option>

                                <option value="6491">해부생리학</option>

                                <option value="6611">지역사회간호</option>

                                <option value="6596">간호관리</option>

                                <option value="6487">식품화학</option>

                                <option value="6472">박미원의 식품위생</option>

                                <option value="6482">권숙영의 식품위생</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>정오표</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0008" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    정오표 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'practice')
<section class="rightCont">
    <div class="rightTitle">
        <h3>모의고사 다운로드</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnListArticle();return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frmBoard" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="1" />
            <input type="hidden" name="searchWrd" value="" />

            <input type="hidden" name="bbsId" value="BBS_0018" />

            <input type="hidden" name="repYn" value="" />
            <input type="hidden" name="fileYn" value="Y" />
            <input type="hidden" name="fileCnt" value="5" />
            <input type="hidden" name="fileSize" value="" />
            <input type="hidden" name="extYn" value="" />
            <input type="hidden" name="nttCn" />

            <table class="rowTable">
                <caption class="blind">
                    모의고사 다운로드 신규 등록 및 수정
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                    <col style="width: 10%;" />
                    <col style="width: 40%;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><strong>제목</strong></th>
                        <td colspan="3">
                            <input type="text" name="nttSj" id="nttSj" value="" style="width: 70%;" maxlength="500" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>공지여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttTop" id="nttTop1" value="Y" />
                                <label for="nttTop1"><span></span>공지</label>
                                <input type="radio" name="nttTop" id="nttTop2" value="N" checked="" />
                                <label for="nttTop2"><span></span>일반</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th>직렬</th>
                        <td>
                            <select name="nttCat" id="nttCat" style="width: 180px;">
                                <option value="">선택</option>

                                <option value="LE00001">간호직 공무원</option>

                                <option value="LE00002">보건직 공무원</option>

                                <option value="LE00004">보건연구사</option>

                                <option value="LE00005">보건복지부 공무원</option>

                                <option value="LE00003">보건진료직 공무원</option>

                                <option value="LE00006">의료기술직 공무원</option>

                                <option value="LE00007">방역직 공무원</option>

                                <option value="LE00010">식품위생직 공무원</option>

                                <option value="LE00008">환경직 공무원</option>

                                <option value="LE00009">환경연구사</option>

                                <option value="LE00011">조리직 공무원</option>

                                <option value="LE00012">영양교사</option>

                                <option value="LE00013">보건교사</option>

                                <option value="LE00016">영양사</option>

                                <option value="LE00017">위생사</option>

                                <option value="LE00015">간호사</option>

                                <option value="LE00019">식품(산업)기사</option>

                                <option value="LE00014">교육학</option>
                            </select>
                        </td>
                        <th>직렬범위</th>
                        <td>
                            <p class="radioStyle">
                                <input type="radio" name="nttLock" id="nttLock2" value="N" checked="" />
                                <label for="nttLock2"><span></span>전체</label>
                                <input type="radio" name="nttLock" id="nttLock1" value="Y" />
                                <label for="nttLock1"><span></span>수강중인회원</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>노출여부</strong></th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input type="radio" name="nttHidden" id="nttHidden2" value="N" checked="" />
                                <label for="nttHidden2"><span></span>보임</label>
                                <input type="radio" name="nttHidden" id="nttHidden1" value="Y" />
                                <label for="nttHidden1"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>작성자</strong></th>
                        <td>
                            <input type="text" name="ntcrNm" id="ntcrNm" value="이현주1" maxlength="20" />
                        </td>
                        <th scope="row"><strong>작성일</strong></th>
                        <td>
                            <input type="text" name="nttRegdt" id="nttRegdt" value="2020-11-03" class="calendar hasDatepicker" readonly="" />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>첨부파일</strong></th>
                        <td colspan="3">
                            <span id="inputFileSpan">
                                <input type="file" name="file_1" style="width: 500px;" />
                                <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileCancel(this);"><span>취소</span></a>
                            </span>

                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActFileAdd();"><span>추가</span></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><strong>내 용</strong></th>
                        <td colspan="3">
                            <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("nttCn");
                                function dext_editor_loaded_event(DEXT5Editor) {
                                    DEXT5.setBodyValue("", DEXT5Editor.ID);
                                }
                            </script>
                            <div id="dext_frame_holdernttCn" style="width: 100%; height: 300px;" class="DEXT_frame_resizebar">
                                <iframe
                                    frameborder="0"
                                    scrolling="no"
                                    id="dext_frame_nttCn"
                                    title="에디터 전체영역"
                                    width="100%"
                                    height="100%"
                                    style="width: 100%; height: 100%;"
                                    src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"
                                ></iframe>
                                <div id="dext_resizebar_nttCn" class="DEXT_resizebar DEXT_resizebar_blue">
                                    <div class="DEXT_resizebar_btn" id="dext_resizebar_btn_nttCn">
                                        <div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_nttCn"></div>
                                        <button type="button" id="DEXT_resizebar_button_nttCn" title="에디터 높이 조절"></button>
                                    </div>
                                </div>
                            </div>
                            <!--//editor-->
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- //writeType03 -->
        </form>
    </div>
    <div class="rightTitle" style="margin-top: 20px;">
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnUpdateArticle();return false;">등록</button>
        </div>
    </div>
</section>

@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'default')
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'status')
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'download')
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'download_delete')
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'device')
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'device_delete')
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'main_banner')
<section class="rightCont">
    <div class="rightTitle">
        <h3>메인 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActBannerModify('new');">등록</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActBannerList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchOp1" value="" />
            <input type="hidden" name="searchCnd" value="actName" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />
        </form>
        <form name="actEmpModifyForm" id="actEmpModifyForm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="frmMode" />
            <input type="hidden" name="idx" value="" />

            <table class="rowTable">
                <caption class="blind">
                    배너 상세보기 및 수정
                </caption>
                <colgroup>
                    <col width="153px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><label for="tPart">분류</label></th>
                        <td>
                            <select class="v2" name="tPart" id="tPart" style="width: 300px;">
                                <option value="11">[학원]메인(상단) 640 x 350</option>

                                <option value="35">[학원]메인추천직강 </option>

                                <option value="36">[동영상]추천동영상강의 </option>

                                <option value="12">[학원]메인(중간) 270 x 215</option>

                                <option value="13">[학원]메인(우측첫번째) 270 x 105</option>

                                <option value="14">[학원]메인(우측두번째) 270 x 105</option>

                                <option value="15">[학원]메인(우측사이드) 105 x 125</option>

                                <option value="16">[학원] Top 1920 x 90</option>

                                <option value="17">[동영상] Top 1920 x 90</option>

                                <option value="18">[서점] Top 1920 x 90</option>

                                <option value="19">[학원] 계좌 270 x 105</option>

                                <option value="20">[동영상] 계좌 270 x 10</option>

                                <option value="21">[동영상] 교수별 270 x 103</option>

                                <option value="22">[동영상] 인기동영상 248 x 150</option>

                                <option value="23">[동영상]메인(우측사이트) 105 x 125</option>

                                <option value="24">[동영상]메인(중간) 270 x 215</option>

                                <option value="25">[모바일]메인(상단) 640 x 240</option>

                                <option value="33">[서점]메인(중간) 640 x 215</option>

                                <option value="26">[모바일]메인(하단) 180 x 130</option>

                                <option value="34">[서점]메인(왼쪽) 270 x 215</option>

                                <option value="27">[모바일]공통메뉴(하단) 540 x 140</option>

                                <option value="28">[모바일]동영상강의(상단) 640 x 240</option>

                                <option value="29">[모바일]동영상강의(하단) 180 x 130</option>

                                <option value="30">[모바일]학원현장강의(상단) 640 x 240</option>

                                <option value="31">[모바일]학원현장강의(하단) 180 x 130</option>

                                <option value="32">[모바일]인터넷서점(하단) 640 x 170</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="tName">제목</label></th>
                        <td>
                            <input type="text" name="tName" id="tName" style="width: 188px;" value="" maxlength="100" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="tUrl">게시기간</label></th>
                        <td>
                            <input type="checkbox" name="tOpdt" id="tOpdt" value="Y" /> 게시기간 설정<br />
                            <input type="text" name="tSdt" id="tSdt" value="" class="calendar hasDatepicker" style="width: 80px;" maxlength="10" pattern="yyyy-mm-dd" readonly="" /> ~
                            <input type="text" name="tEdt" id="tEdt" value="" class="calendar hasDatepicker" style="width: 80px;" maxlength="10" pattern="yyyy-mm-dd" readonly="" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="tUrl">URL</label></th>
                        <td>
                            <input type="text" name="tUrl" id="tUrl" style="width: 70%;" value="" maxlength="500" />
                            <input type="radio" name="tTarget" id="tTarget" value="S" checked="" />현재창 <input type="radio" name="tTarget" id="tTarget" value="B" />새창
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="useYn">노출여부</label></th>
                        <td><input type="radio" name="useYn" id="useYn" value="Y" checked="" />노출 <input type="radio" name="useYn" id="useYn" value="N" />미노출</td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="fileId">이미지</label></th>
                        <td>
                            <input type="hidden" name="fileDel1" />
                            <input type="hidden" name="fileId1" value="" />
                            <input type="file" name="file_1" id="egovComFileUploader" /><span class="f_color3 ml_20" id="sizeTxt1"></span>

                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr style="display: none;">
                        <th scope="row"><label for="fileId">이미지(모바일)</label></th>
                        <td>
                            <input type="hidden" name="fileDel2" />
                            <input type="hidden" name="fileId2" value="" />
                            <input type="file" name="file_2" id="egovComFileUploader" /><span class="f_color3 ml_20" id="sizeTxt2"></span>

                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr style="display: none;">
                        <th scope="row"><label for="fileId">이미지(타블렛)</label></th>
                        <td>
                            <input type="hidden" name="fileDel3" />
                            <input type="hidden" name="fileId3" value="" />
                            <input type="file" name="file_3" id="egovComFileUploader" /><span class="f_color3 ml_20" id="sizeTxt3"></span>

                            <table>
                                <tbody>
                                    <tr>
                                        <td style="border: 0; margin: 0; padding: 0;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>

@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'bbs')
<section class="rightCont">
    <div class="rightTitle">
        <h3>게시판 마스터</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fn_egov_update_brdMstr(); return false;">저장</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fn_egov_select_brdMstrList(); return false;">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="boardMaster" action="/boffice/bbs/actBbsMasterList.do" method="post">
            <input name="pageIndex" type="hidden" value="1" />
            <input name="bbsId" type="hidden" value="" />

            <table class="rowTable">
                <caption class="blind">
                    카테고리 정보
                </caption>
                <colgroup>
                    <col width="130px" />
                    <col width="*" />
                    <col width="130px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">게시판코드</th>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th scope="row">게시판명</th>
                        <td colspan="3"><input title="게시판명입력" name="bbsNm" type="text" size="60" value="" maxlength="60" class="req" /></td>
                    </tr>
                    <tr>
                        <th scope="row">게시판 설명</th>
                        <td colspan="3"><input title="게시판소개입력" name="bbsCn" type="text" maxlength="250" style="width: 760px;" value="" /></td>
                    </tr>
                    <tr>
                        <th scope="row">게시판사용여부</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="useYn" id="useYn" value="Y" checked="" />
                                <label for="useYn"><span></span></label>
                            </span>
                        </td>
                        <th scope="row">썸네일기능</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="thumYn" id="thumYn" value="Y" />
                                <label for="thumYn"><span></span></label>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">답장가능여부</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="repYn" id="repYn" value="Y" />
                                <label for="repYn"><span></span></label>
                            </span>
                        </td>
                        <th scope="row">댓글가능여부</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="cmtYn" id="cmtYn" value="Y" />
                                <label for="cmtYn"><span></span></label>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">파일첨부여부</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="fileYn" id="fileYn" value="Y" />
                                <label for="fileYn"><span></span></label>
                            </span>
                        </td>
                        <th scope="row">첨부파일 수</th>
                        <td><input type="text" name="fileCnt" id="fileCnt" value="0" maxlength="2" class="chknum" style="width: 29px; ime-mode: disabled;" /></td>
                    </tr>
                    <tr>
                        <th scope="row">메인공지기능</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="mainYn" id="mainYn" value="Y" />
                                <label for="mainYn"><span></span></label>
                            </span>
                        </td>
                        <th scope="row">공지기능</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="topYn" id="topYn" value="Y" />
                                <label for="topYn"><span></span></label>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">링크기능</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="linkYn" id="linkYn" value="Y" />
                                <label for="linkYn"><span></span></label>
                            </span>
                        </td>
                        <th scope="row">노출여부</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="hideYn" id="hideYn" value="Y" />
                                <label for="hideYn"><span></span></label>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">순서기능</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="seqYn" id="seqYn" value="Y" />
                                <label for="seqYn"><span></span></label>
                            </span>
                        </td>
                        <th scope="row">비밀글여부</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="lockYn" id="lockYn" value="Y" />
                                <label for="lockYn"><span></span></label>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">카테고리기능</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="cateYn" id="cateYn" value="Y" />
                                <label for="cateYn"><span></span></label>
                            </span>
                            <input type="text" name="cateCd" id="cateCd" size="30" maxlength="20" value="" style="width: 120px;" />(코드)
                        </td>
                        <th scope="row">이전/다음글</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="twoYn" id="twoYn" value="Y" />
                                <label for="twoYn"><span></span></label>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">새글</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="newYn" id="newYn" value="Y" />
                                <label for="newYn"><span></span></label>
                            </span>
                            <input type="text" name="newNo" id="newNo" size="30" class="chknum" maxlength="10" value="" style="width: 120px;" />(기간)
                        </td>
                        <th scope="row">인기글</th>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" name="hotYn" id="hotYn" value="Y" />
                                <label for="hotYn"><span></span></label>
                            </span>
                            <input type="text" name="hotNo" id="hotNo" size="30" class="chknum" maxlength="10" value="" style="width: 120px;" />(조회수)
                        </td>
                    </tr>
                    <tr style="height: 70px;">
                        <th scope="row">확장필드</th>
                        <td colspan="3">
                            <span class="checkBox">
                                <input type="checkbox" name="extYn" id="extYn" value="Y" />
                                <label for="extYn"><span></span></label>
                            </span>
                            <input type="text" name="extFld" id="extFld" maxlength="250" style="width: 760px;" value="" /><br />
                            *최대 10개까지 쉼표로 구분하여 명칭:폼타입 으로 입력 예) 기간:input,공연정보:input,장소:input,동의:radio
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">리스트권한</th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input id="posblList1" name="posblList" type="radio" value="1" checked="" /><label for="posblList1"><span></span>비회원</label> <input id="posblList2" name="posblList" type="radio" value="2" />
                                <label for="posblList2"><span></span>회원</label> <input id="posblList3" name="posblList" type="radio" value="3" /><label for="posblList3"><span></span>관리자</label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">뷰권한</th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input id="posblView1" name="posblView" type="radio" value="1" checked="" /><label for="posblView1"><span></span>비회원</label> <input id="posblView2" name="posblView" type="radio" value="2" />
                                <label for="posblView2"><span></span>회원</label> <input id="posblView3" name="posblView" type="radio" value="3" /><label for="posblView3"><span></span>관리자</label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">쓰기권한</th>
                        <td colspan="3">
                            <p class="radioStyle">
                                <input id="posblWrite1" name="posblWrite" type="radio" value="1" /><label for="posblWrite1"><span></span>비회원</label> <input id="posblWrite2" name="posblWrite" type="radio" value="2" />
                                <label for="posblWrite2"><span></span>회원</label> <input id="posblWrite3" name="posblWrite" type="radio" value="3" checked="" /><label for="posblWrite3"><span></span>관리자</label>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'admin')
<section class="rightCont">
    <div class="rightTitle">
        <h3>관리자 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActEmpModify('new');">수정</button>

            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActEmpList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" id="actEmpModifyForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="all" />
            <input type="hidden" name="searchKeyword" value="" />
            <input type="hidden" name="searchActstt" value="" />

            <input type="hidden" name="statusCode" value="" />
            <input type="hidden" name="groupId" />
            <input type="hidden" name="empNo" value="" />

            <table class="commonTable writeTable">
                <caption class="blind">
                    권한관리 상세보기 및 수정
                </caption>
                <colgroup>
                    <col width="153px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">관리자 권한 명칭</th>
                        <td>
                            <select name="groupIdSel" id="groupIdSel" style="width: 230px;">
                                <option value="">선택</option>

                                <option value="G000040">이과장 서브</option>

                                <option value="G000001">총괄관리자</option>

                                <option value="G000013">게시판 관리자</option>

                                <option value="G000030">김태촌</option>

                                <option value="G000002">신청관리자</option>

                                <option value="G000021">테스트</option>

                                <option value="G000050">테스트확인용</option>

                                <option value="G000000">기본그룹</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">아이디</th>
                        <td id="empIdTd">
                            <input type="text" name="empId" id="empId" style="width: 188px;" value="" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="place">비밀번호</label></th>
                        <td>
                            <input type="password" name="password" id="password" style="width: 188px;" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="place">비밀번호 확인</label></th>
                        <td>
                            <input type="password" name="password2" id="password2" style="width: 188px;" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="place">성명</label></th>
                        <td>
                            <input type="text" name="empNm" id="empNm" style="width: 188px;" value="" maxlength="10" />
                            <!-- 
									 <a href="" class="button_v2 ml_7" onclick="openLayer('poster2',{top:70});return false;"><span>선택</span></a>
									-->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="orgCd2">부서</label></th>
                        <td>
                            <select class="v2 d2" style="width: 230px;">
                                <option value="">선택</option>
                            </select>
                            <select class="v2 d3" name="orgCd" id="orgCd" style="width: 230px;"> </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="psnCd">직위</label></th>
                        <td>
                            <select name="psnCd" id="psnCd" style="width: 230px;">
                                <option value="">선택</option>

                                <option value="11">파견</option>

                                <option value="13">주임</option>

                                <option value="14">대리</option>

                                <option value="15">과장</option>

                                <option value="16">팀장</option>

                                <option value="17">본부장</option>

                                <option value="18">지사장</option>

                                <option value="12">사원</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="telNo">연락처</label></th>
                        <td>
                            <input type="text" name="telNo" id="telNo" style="width: 188px;" value="" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="email">이메일</label></th>
                        <td>
                            <input type="text" name="email" id="email" style="width: 188px;" value="" maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="useyn">사용여부</label></th>
                        <td>
                            <p class="radioStyle">
                                <input id="useyn1" name="useyn" type="radio" value="Y" checked="" /><label for="useyn1"><span></span>사용</label> <input id="useyn2" name="useyn" type="radio" value="N" />
                                <label for="useyn2"><span></span>미사용</label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="regdt">등록일</label></th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <!-- //writeType03 -->
        </form>

        <!-- //layer-popup -->

        <div id="poster2" class="layer-popup v2 ht2">
            <div class="tit">
                <img src="/images/boffice/common/tit_popup6.jpg" alt="임직원 찾기" />
                <a href="#" class="close"><img src="/images/boffice/common/btn_close.jpg" alt="닫기" /></a>
            </div>

            <div class="content ta_c">
                <ul>
                    <li class="schWrap">
                        <label class="blind" for="ajaxKeyword">제목 검색</label>
                        <input type="text" class="sch_text" name="ajaxKeyword" id="ajaxKeyword" onkeypress="press(event);" placeholder="이름" />
                        <a href="javascript:void(0);" class="btn_css" onclick="fnAjaxEmpCall();">
                            <img src="/images/boffice/board/btn_search.jpg" alt="검색" />
                        </a>
                    </li>
                </ul>

                <div class="listType05 bbn mt_10">
                    <table>
                        <caption class="blind">
                            임직원 목록
                        </caption>
                        <colgroup>
                            <col width="120px" />
                            <col width="*" />
                            <col width="154px" />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="col" class="first_line">이름</th>
                                <th scope="col" class="first_line">부서</th>
                                <th scope="col" class="first_line">직위</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="listType05 ovf">
                    <table>
                        <caption class="blind">
                            임직원 목록
                        </caption>
                        <colgroup>
                            <col width="120px" />
                            <col width="*" />
                            <col width="154px" />
                        </colgroup>
                        <tbody id="infoGrEmpListBody"></tbody>
                    </table>
                </div>

                <div class="mt_20 ta_c">
                    <a href="javascript:void(0);" class="btn close"><img src="/images/boffice/common/btn_close2.jpg" alt="확인" /></a>
                </div>
            </div>
        </div>

        <!-- //layer-popup -->
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'authority')
<section class="rightCont">
    <div class="rightTitle">
        <h3>권한그룹 구성</h3>
        <div class="btnWrap">
            
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActGroupModify('new');">수정</button>
            
            
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActGroupList();">목록</button>
        </div>
    </div>
    <div class="realCont">

        <form name="frm" id="actGroupModifyForm" method="post">
            <input type="hidden" name="pageIndex" value="1">
            <input type="hidden" name="searchCnd" value="groupNm">
            <input type="hidden" name="searchKeyword" value="">
        
            <input type="hidden" name="groupId" value="">
            <input type="hidden" name="deldt" id="deldt">
            <table class="commonTable writeTable">
                <caption class="blind">그룹 정보</caption>
                <colgroup>
                    <col width="153px">
                    <col width="*">
                </colgroup>
                <tbody>	
                    <tr>
                        <th scope="row"><label for="title">그룹명</label></th>
                        <td>
                            <input type="text" name="groupNm" id="groupNm" style="width:200px;" value="" maxlength="20">
                            <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnAjaxActGroupDupCheck();"><span>중복 확인</span></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="title">설명</label></th>
                        <td>
                            <input type="text" name="groupDc" id="groupDc" style="width:300px;" value="" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="title">레벨</label></th>
                        <td>
                            <select name="groupLevel" id="groupLevel" style="width:120px;">
                            
                                <option value="10">일반관리자</option>
                            
                                <option value="20">총괄관리자</option>
                            
                            </select>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </form>
        <!-- //writeType03 -->

    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'authority_detail')
<section class="rightCont">
    <div class="rightTitle">
        <h3>권한 설정</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActGroupModify('edit');">저장</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActGroupList();">목록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" id="actGroupModifyForm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="searchCnd" value="groupNm" />
            <input type="hidden" name="searchKeyword" value="" />

            <input type="hidden" name="groupId" value="G000050" />
            <table class="commonTable writeTable">
                <caption class="blind">
                    권한 설정
                </caption>
                <colgroup>
                    <col width="170px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row" style="border-right: 1px solid #e7e7e7;"><label for="title">관리자 권한 명칭</label></th>
                        <td class="v2">테스트확인용</td>
                    </tr>
                </tbody>
            </table>
            <table class="commonTable writeTable">
                <caption class="blind">
                    권한 설정
                </caption>
                <colgroup>
                    <col width="170px" />
                    <col width="230px" />
                    <col width="*" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="8" style="border-right: 1px solid #e7e7e7;"><label for="title">권한 목록</label></th>

                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />강좌 서점 관리</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="101" />카테고리 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="102" />동영상 강의 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="147" />클래스강의 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="103" />인터넷 서점 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="104" />학원 강의 관리</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />주문 관리</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="105" />동영상 주문 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="152" />연장 신청 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="106" />서점 주문 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="107" />무료 강의 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="108" />견적 관리</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />회원 관리</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="109" />전체 회원 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="110" />수강 회원 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="112" />교수 회원 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="151" />회원 탈퇴 및 삭제</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="156" />현강생 관리</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />통계</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="113" />동영상 매출 통계</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="153" />연장 신청 매출 통계</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="114" />서적 매출 통계</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="115" />교수별 정산</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="116" />학습 게시판 답변 현황</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />고객센터</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="117" />동영상 Q&amp;A관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="118" />서점 Q&amp;A관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="119" />1:1문의 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="120" />자유게시판 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="121" />동영상 학습 게시판 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="122" />FAQ</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />커뮤니티</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="124" />학원소식</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="125" />공지사항</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="148" />합격수기 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="149" />본원출식 합격자 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="126" />시험공고</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="127" />경쟁률 및 합격선</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="128" />수험가 뉴스</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="129" />학습자료실</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="130" />정오표</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="154" />인터넷서점공지사항</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="150" />모의고사 다운로드</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />모바일 관리</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="135" />기본 설정 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="136" />접속 현황</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="137" />강의 다운로드 현황</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="138" />강의 다운로드 삭제 현황</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="139" />단말기 승인 현황</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="140" />단말기 해제 현황</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="v2" style="border-right: 1px solid #e7e7e7;"><input type="checkbox" class="check_all" style="width: 25px;" />사이트 관리</td>
                        <td class="v2">
                            <ul>
                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="141" />메인 페이지 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="142" />코드 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="143" />게시판 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="144" />관리자 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="145" />장바구니 공지 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="146" />권한 관리</li>

                                <li><input type="checkbox" name="menuCode" style="width: 30px;" value="155" />OTP 등록</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- //writeType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'otp')
@endif