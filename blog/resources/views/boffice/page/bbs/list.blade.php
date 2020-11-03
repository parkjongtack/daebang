@include('/boffice/inc/head')
@if(request()->segment(2) == 'lecture' && request()->segment(3) == 'cate')
<script type="text/javascript">
function fnCodeIdAdd(codeGb){
	if($(".newCodeGb"+codeGb).size()>0){
		return;
	}
	var size1 = "<c:out value='${fn:length(resultList)}'/>";
	var size2 = "<c:out value='${fn:length(resultList2)}'/>";
	var sizeCnt = 0;
	if(codeGb == 'LE'){ sizeCnt = size1; }
	if(codeGb == 'CL'){ sizeCnt = size2; }
	sizeCnt = (sizeCnt*1)+1;
	var str = '<tr>' +
		'<td><input type="hidden" id="newCodeGb" class="newCodeGb'+codeGb+'" value="'+codeGb+'"><input type="text" id="newCodeNm" value="" style="width:140px;"></td>' +
		'<td><input type="text" id="newCodeSq" value="'+sizeCnt+'" style="width:30px;"></td>' +
		'<td><select id="newCodeUseYn" style="width:60px;"><option value="Y">사용</option><option value="N">미사용</option></select></td>' +
		'<td onclick="javascript:fnCodeIdAddSave(this);" style="cursor:pointer;" data-gb="'+codeGb+'">저장</td>' +
		'<td onclick="javascript:fnCodeIdAddCancel(this);" style="cursor:pointer;">취소</td>' +
		'</tr>';
	$("#codeIdAddRowPoint"+codeGb).prepend(str);
}
</script>
<section class="rightCont">
    <div class="rightTitle">
        <h3>카테고리 관리</h3>
        <div class="btnWrap"></div>
    </div>
    <div class="realCont">
        <div class="contents_zone" style="width: 1250px;">
            <div style="width: 1250px; text-align: left; overflow: hidden;">
                <!-- 직렬코드 리스트 S -->
                <div style="float: left; width: 450px;">
                    <div class="btnWrap" style="float: left; margin: 0 0 5px 170px; font-size: 16px; font-weight: bold;">
                        직렬 카테고리
                    </div>
                    <div class="btnWrap" style="float: right; margin-bottom: 5px;">
                        <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnTranSeqAuto('LE');">순서자동입력</button>
                        <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnTranSeqSave('LE');">순서변경적용</button>
                        <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnCodeIdAdd('LE'); return false;">등록</button>
                    </div>
                    <table style="width: 450px;" class="commonTable detailTable">
                        <caption style="display: none;">
                            카테고리 관리(직렬)
                        </caption>
                        <thead>
                            <tr>
                                <th class="title" width="*" scope="col" nowrap="">직렬 명</th>
                                <th class="title" width="12%" scope="col" nowrap="">순서</th>
                                <th class="title" width="20%" scope="col" nowrap="">사용여부</th>
                                <th class="title" width="12%" scope="col" nowrap="">수정</th>
                                <th class="title" width="12%" scope="col" nowrap="">삭제</th>
                            </tr>
                        </thead>
                        <tbody id="codeIdAddRowPointLE"></tbody>
                    </table>
                    <form name="frmEquipLE" id="frmEquipLE" method="post">
                        <div id="sortWrap" class="sortWrap ui-sortable">
                            <div data-order="1" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId1" value="LE00001" />1</td>
                                            <td width="*" id="codeC1">간호직 공무원</td>
                                            <td width="12%" id="codeD1"><input type="text" id="codeseq1" name="codeSq" value="1" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE1">사용</td>
                                            <td width="12%" id="codeZ1" onclick="javascript:fnCodeIdEdit('1');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX1" onclick="javascript:fnCodeIdSave('1');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="2" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId2" value="LE00002" />2</td>
                                            <td width="*" id="codeC2">보건직 공무원</td>
                                            <td width="12%" id="codeD2"><input type="text" id="codeseq2" name="codeSq" value="2" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE2">사용</td>
                                            <td width="12%" id="codeZ2" onclick="javascript:fnCodeIdEdit('2');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX2" onclick="javascript:fnCodeIdSave('2');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="3" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId3" value="LE00004" />3</td>
                                            <td width="*" id="codeC3">보건연구사</td>
                                            <td width="12%" id="codeD3"><input type="text" id="codeseq3" name="codeSq" value="3" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE3">사용</td>
                                            <td width="12%" id="codeZ3" onclick="javascript:fnCodeIdEdit('3');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX3" onclick="javascript:fnCodeIdSave('3');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="4" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId4" value="LE00005" />4</td>
                                            <td width="*" id="codeC4">보건복지부 공무원</td>
                                            <td width="12%" id="codeD4"><input type="text" id="codeseq4" name="codeSq" value="4" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE4">사용</td>
                                            <td width="12%" id="codeZ4" onclick="javascript:fnCodeIdEdit('4');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX4" onclick="javascript:fnCodeIdSave('4');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="5" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId5" value="LE00003" />5</td>
                                            <td width="*" id="codeC5">보건진료직 공무원</td>
                                            <td width="12%" id="codeD5"><input type="text" id="codeseq5" name="codeSq" value="5" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE5">사용</td>
                                            <td width="12%" id="codeZ5" onclick="javascript:fnCodeIdEdit('5');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX5" onclick="javascript:fnCodeIdSave('5');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="6" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId6" value="LE00006" />6</td>
                                            <td width="*" id="codeC6">의료기술직 공무원</td>
                                            <td width="12%" id="codeD6"><input type="text" id="codeseq6" name="codeSq" value="6" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE6">사용</td>
                                            <td width="12%" id="codeZ6" onclick="javascript:fnCodeIdEdit('6');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX6" onclick="javascript:fnCodeIdSave('6');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="7" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId7" value="LE00007" />7</td>
                                            <td width="*" id="codeC7">방역직 공무원</td>
                                            <td width="12%" id="codeD7"><input type="text" id="codeseq7" name="codeSq" value="7" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE7">사용</td>
                                            <td width="12%" id="codeZ7" onclick="javascript:fnCodeIdEdit('7');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX7" onclick="javascript:fnCodeIdSave('7');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="8" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId8" value="LE00010" />8</td>
                                            <td width="*" id="codeC8">식품위생직 공무원</td>
                                            <td width="12%" id="codeD8"><input type="text" id="codeseq8" name="codeSq" value="8" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE8">사용</td>
                                            <td width="12%" id="codeZ8" onclick="javascript:fnCodeIdEdit('8');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX8" onclick="javascript:fnCodeIdSave('8');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="9" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId9" value="LE00008" />9</td>
                                            <td width="*" id="codeC9">환경직 공무원</td>
                                            <td width="12%" id="codeD9"><input type="text" id="codeseq9" name="codeSq" value="9" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE9">사용</td>
                                            <td width="12%" id="codeZ9" onclick="javascript:fnCodeIdEdit('9');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX9" onclick="javascript:fnCodeIdSave('9');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10" value="LE00009" />10</td>
                                            <td width="*" id="codeC10">환경연구사</td>
                                            <td width="12%" id="codeD10"><input type="text" id="codeseq10" name="codeSq" value="10" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10">사용</td>
                                            <td width="12%" id="codeZ10" onclick="javascript:fnCodeIdEdit('10');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10" onclick="javascript:fnCodeIdSave('10');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="11" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId11" value="LE00011" />11</td>
                                            <td width="*" id="codeC11">조리직 공무원</td>
                                            <td width="12%" id="codeD11"><input type="text" id="codeseq11" name="codeSq" value="11" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE11">사용</td>
                                            <td width="12%" id="codeZ11" onclick="javascript:fnCodeIdEdit('11');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX11" onclick="javascript:fnCodeIdSave('11');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="12" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId12" value="LE00012" />12</td>
                                            <td width="*" id="codeC12">영양교사</td>
                                            <td width="12%" id="codeD12"><input type="text" id="codeseq12" name="codeSq" value="12" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE12">사용</td>
                                            <td width="12%" id="codeZ12" onclick="javascript:fnCodeIdEdit('12');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX12" onclick="javascript:fnCodeIdSave('12');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="13" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId13" value="LE00013" />13</td>
                                            <td width="*" id="codeC13">보건교사</td>
                                            <td width="12%" id="codeD13"><input type="text" id="codeseq13" name="codeSq" value="13" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE13">사용</td>
                                            <td width="12%" id="codeZ13" onclick="javascript:fnCodeIdEdit('13');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX13" onclick="javascript:fnCodeIdSave('13');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="14" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId14" value="LE00016" />14</td>
                                            <td width="*" id="codeC14">영양사</td>
                                            <td width="12%" id="codeD14"><input type="text" id="codeseq14" name="codeSq" value="14" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE14">사용</td>
                                            <td width="12%" id="codeZ14" onclick="javascript:fnCodeIdEdit('14');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX14" onclick="javascript:fnCodeIdSave('14');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="15" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId15" value="LE00017" />15</td>
                                            <td width="*" id="codeC15">위생사</td>
                                            <td width="12%" id="codeD15"><input type="text" id="codeseq15" name="codeSq" value="15" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE15">사용</td>
                                            <td width="12%" id="codeZ15" onclick="javascript:fnCodeIdEdit('15');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX15" onclick="javascript:fnCodeIdSave('15');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="16" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId16" value="LE00015" />16</td>
                                            <td width="*" id="codeC16">간호사</td>
                                            <td width="12%" id="codeD16"><input type="text" id="codeseq16" name="codeSq" value="16" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE16">사용</td>
                                            <td width="12%" id="codeZ16" onclick="javascript:fnCodeIdEdit('16');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX16" onclick="javascript:fnCodeIdSave('16');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="17" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId17" value="LE00019" />17</td>
                                            <td width="*" id="codeC17">식품(산업)기사</td>
                                            <td width="12%" id="codeD17"><input type="text" id="codeseq17" name="codeSq" value="17" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE17">사용</td>
                                            <td width="12%" id="codeZ17" onclick="javascript:fnCodeIdEdit('17');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX17" onclick="javascript:fnCodeIdSave('17');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="18" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId18" value="LE00014" />18</td>
                                            <td width="*" id="codeC18">교육학</td>
                                            <td width="12%" id="codeD18"><input type="text" id="codeseq18" name="codeSq" value="18" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE18">사용</td>
                                            <td width="12%" id="codeZ18" onclick="javascript:fnCodeIdEdit('18');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX18" onclick="javascript:fnCodeIdSave('18');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- 직렬코드 리스트 E -->
                <!-- 과목코드 리스트 S -->
                <div style="float: left; width: 450px; margin-left: 20px;">
                    <div class="btnWrap" style="float: left; margin: 0 0 5px 170px; font-size: 16px; font-weight: bold;">
                        과목 카테고리
                    </div>
                    <div class="btnWrap" style="float: right; margin-bottom: 5px;">
                        <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnTranSeqAuto('CL');">순서자동입력</button>
                        <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnTranSeqSave('CL');">순서변경적용</button>
                        <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnCodeIdAdd('CL'); return false;">등록</button>
                    </div>
                    <table style="width: 450px;" class="commonTable detailTable">
                        <thead>
                            <tr>
                                <th class="title" width="*" scope="col" nowrap="">과목 명</th>
                                <th class="title" width="12%" scope="col" nowrap="">순서</th>
                                <th class="title" width="20%" scope="col" nowrap="">사용여부</th>
                                <th class="title" width="12%" scope="col" nowrap="">수정</th>
                                <th class="title" width="12%" scope="col" nowrap="">삭제</th>
                            </tr>
                        </thead>
                        <tbody id="codeIdAddRowPointCL"></tbody>
                    </table>
                    <form name="frmEquipCL" id="frmEquipCL" method="post">
                        <div id="sortWrap" class="sortWrap ui-sortable">
                            <div data-order="10000" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10001" value="CL00001" />10001</td>
                                            <td width="*" id="codeC10001">RNBSN</td>
                                            <td width="12%" id="codeD10001"><input type="text" id="codeseq10001" name="codeSq" value="1" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10001">사용</td>
                                            <td width="12%" id="codeZ10001" onclick="javascript:fnCodeIdEdit('10001');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10001" onclick="javascript:fnCodeIdSave('10001');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10001" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10002" value="CL00002" />10002</td>
                                            <td width="*" id="codeC10002">간호관리</td>
                                            <td width="12%" id="codeD10002"><input type="text" id="codeseq10002" name="codeSq" value="2" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10002">사용</td>
                                            <td width="12%" id="codeZ10002" onclick="javascript:fnCodeIdEdit('10002');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10002" onclick="javascript:fnCodeIdSave('10002');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10002" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10003" value="CL00003" />10003</td>
                                            <td width="*" id="codeC10003">간호사</td>
                                            <td width="12%" id="codeD10003"><input type="text" id="codeseq10003" name="codeSq" value="3" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10003">사용</td>
                                            <td width="12%" id="codeZ10003" onclick="javascript:fnCodeIdEdit('10003');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10003" onclick="javascript:fnCodeIdSave('10003');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10003" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10004" value="CL00004" />10004</td>
                                            <td width="*" id="codeC10004">감염의료관계법규</td>
                                            <td width="12%" id="codeD10004"><input type="text" id="codeseq10004" name="codeSq" value="4" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10004">사용</td>
                                            <td width="12%" id="codeZ10004" onclick="javascript:fnCodeIdEdit('10004');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10004" onclick="javascript:fnCodeIdSave('10004');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10004" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10005" value="CL00005" />10005</td>
                                            <td width="*" id="codeC10005">공중보건</td>
                                            <td width="12%" id="codeD10005"><input type="text" id="codeseq10005" name="codeSq" value="5" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10005">사용</td>
                                            <td width="12%" id="codeZ10005" onclick="javascript:fnCodeIdEdit('10005');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10005" onclick="javascript:fnCodeIdSave('10005');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10005" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10006" value="CL00006" />10006</td>
                                            <td width="*" id="codeC10006">국어</td>
                                            <td width="12%" id="codeD10006"><input type="text" id="codeseq10006" name="codeSq" value="6" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10006">사용</td>
                                            <td width="12%" id="codeZ10006" onclick="javascript:fnCodeIdEdit('10006');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10006" onclick="javascript:fnCodeIdSave('10006');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10006" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10007" value="CL00007" />10007</td>
                                            <td width="*" id="codeC10007">보건의료관계법규</td>
                                            <td width="12%" id="codeD10007"><input type="text" id="codeseq10007" name="codeSq" value="7" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10007">사용</td>
                                            <td width="12%" id="codeZ10007" onclick="javascript:fnCodeIdEdit('10007');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10007" onclick="javascript:fnCodeIdSave('10007');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10007" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10008" value="CL00008" />10008</td>
                                            <td width="*" id="codeC10008">보건학</td>
                                            <td width="12%" id="codeD10008"><input type="text" id="codeseq10008" name="codeSq" value="8" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10008">사용</td>
                                            <td width="12%" id="codeZ10008" onclick="javascript:fnCodeIdEdit('10008');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10008" onclick="javascript:fnCodeIdSave('10008');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10008" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10009" value="CL00009" />10009</td>
                                            <td width="*" id="codeC10009">보건행정</td>
                                            <td width="12%" id="codeD10009"><input type="text" id="codeseq10009" name="codeSq" value="9" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10009">사용</td>
                                            <td width="12%" id="codeZ10009" onclick="javascript:fnCodeIdEdit('10009');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10009" onclick="javascript:fnCodeIdSave('10009');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10009" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10010" value="CL00010" />10010</td>
                                            <td width="*" id="codeC10010">사회</td>
                                            <td width="12%" id="codeD10010"><input type="text" id="codeseq10010" name="codeSq" value="10" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10010">사용</td>
                                            <td width="12%" id="codeZ10010" onclick="javascript:fnCodeIdEdit('10010');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10010" onclick="javascript:fnCodeIdSave('10010');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10010" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10011" value="CL00011" />10011</td>
                                            <td width="*" id="codeC10011">생물</td>
                                            <td width="12%" id="codeD10011"><input type="text" id="codeseq10011" name="codeSq" value="11" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10011">사용</td>
                                            <td width="12%" id="codeZ10011" onclick="javascript:fnCodeIdEdit('10011');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10011" onclick="javascript:fnCodeIdSave('10011');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10011" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10012" value="CL00012" />10012</td>
                                            <td width="*" id="codeC10012">식품미생물</td>
                                            <td width="12%" id="codeD10012"><input type="text" id="codeseq10012" name="codeSq" value="12" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10012">사용</td>
                                            <td width="12%" id="codeZ10012" onclick="javascript:fnCodeIdEdit('10012');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10012" onclick="javascript:fnCodeIdSave('10012');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10012" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10013" value="CL00013" />10013</td>
                                            <td width="*" id="codeC10013">식품위생</td>
                                            <td width="12%" id="codeD10013"><input type="text" id="codeseq10013" name="codeSq" value="13" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10013">사용</td>
                                            <td width="12%" id="codeZ10013" onclick="javascript:fnCodeIdEdit('10013');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10013" onclick="javascript:fnCodeIdSave('10013');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10013" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10014" value="CL00014" />10014</td>
                                            <td width="*" id="codeC10014">식품화학개론 이론</td>
                                            <td width="12%" id="codeD10014"><input type="text" id="codeseq10014" name="codeSq" value="14" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10014">사용</td>
                                            <td width="12%" id="codeZ10014" onclick="javascript:fnCodeIdEdit('10014');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10014" onclick="javascript:fnCodeIdSave('10014');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10014" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10015" value="CL00015" />10015</td>
                                            <td width="*" id="codeC10015">역학</td>
                                            <td width="12%" id="codeD10015"><input type="text" id="codeseq10015" name="codeSq" value="15" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10015">사용</td>
                                            <td width="12%" id="codeZ10015" onclick="javascript:fnCodeIdEdit('10015');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10015" onclick="javascript:fnCodeIdSave('10015');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10015" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10016" value="CL00016" />10016</td>
                                            <td width="*" id="codeC10016">영양교사</td>
                                            <td width="12%" id="codeD10016"><input type="text" id="codeseq10016" name="codeSq" value="16" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10016">사용</td>
                                            <td width="12%" id="codeZ10016" onclick="javascript:fnCodeIdEdit('10016');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10016" onclick="javascript:fnCodeIdSave('10016');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10016" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10017" value="CL00017" />10017</td>
                                            <td width="*" id="codeC10017">영양사</td>
                                            <td width="12%" id="codeD10017"><input type="text" id="codeseq10017" name="codeSq" value="17" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10017">사용</td>
                                            <td width="12%" id="codeZ10017" onclick="javascript:fnCodeIdEdit('10017');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10017" onclick="javascript:fnCodeIdSave('10017');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10017" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10018" value="CL00018" />10018</td>
                                            <td width="*" id="codeC10018">영어</td>
                                            <td width="12%" id="codeD10018"><input type="text" id="codeseq10018" name="codeSq" value="18" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10018">사용</td>
                                            <td width="12%" id="codeZ10018" onclick="javascript:fnCodeIdEdit('10018');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10018" onclick="javascript:fnCodeIdSave('10018');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10018" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10019" value="CL00019" />10019</td>
                                            <td width="*" id="codeC10019">위생관계법규</td>
                                            <td width="12%" id="codeD10019"><input type="text" id="codeseq10019" name="codeSq" value="19" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10019">사용</td>
                                            <td width="12%" id="codeZ10019" onclick="javascript:fnCodeIdEdit('10019');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10019" onclick="javascript:fnCodeIdSave('10019');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10019" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10020" value="CL00020" />10020</td>
                                            <td width="*" id="codeC10020">위생사</td>
                                            <td width="12%" id="codeD10020"><input type="text" id="codeseq10020" name="codeSq" value="20" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10020">사용</td>
                                            <td width="12%" id="codeZ10020" onclick="javascript:fnCodeIdEdit('10020');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10020" onclick="javascript:fnCodeIdSave('10020');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10020" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10021" value="CL00021" />10021</td>
                                            <td width="*" id="codeC10021">의료관계법규</td>
                                            <td width="12%" id="codeD10021"><input type="text" id="codeseq10021" name="codeSq" value="21" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10021">사용</td>
                                            <td width="12%" id="codeZ10021" onclick="javascript:fnCodeIdEdit('10021');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10021" onclick="javascript:fnCodeIdSave('10021');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10021" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10022" value="CL00022" />10022</td>
                                            <td width="*" id="codeC10022">지역사회</td>
                                            <td width="12%" id="codeD10022"><input type="text" id="codeseq10022" name="codeSq" value="22" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10022">사용</td>
                                            <td width="12%" id="codeZ10022" onclick="javascript:fnCodeIdEdit('10022');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10022" onclick="javascript:fnCodeIdSave('10022');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10022" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10023" value="CL00023" />10023</td>
                                            <td width="*" id="codeC10023">지역사회간호</td>
                                            <td width="12%" id="codeD10023"><input type="text" id="codeseq10023" name="codeSq" value="23" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10023">사용</td>
                                            <td width="12%" id="codeZ10023" onclick="javascript:fnCodeIdEdit('10023');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10023" onclick="javascript:fnCodeIdSave('10023');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10023" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10024" value="CL00024" />10024</td>
                                            <td width="*" id="codeC10024">한국사</td>
                                            <td width="12%" id="codeD10024"><input type="text" id="codeseq10024" name="codeSq" value="24" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10024">사용</td>
                                            <td width="12%" id="codeZ10024" onclick="javascript:fnCodeIdEdit('10024');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10024" onclick="javascript:fnCodeIdSave('10024');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10024" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10025" value="CL00025" />10025</td>
                                            <td width="*" id="codeC10025">해부생리학</td>
                                            <td width="12%" id="codeD10025"><input type="text" id="codeseq10025" name="codeSq" value="25" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10025">사용</td>
                                            <td width="12%" id="codeZ10025" onclick="javascript:fnCodeIdEdit('10025');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10025" onclick="javascript:fnCodeIdSave('10025');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10025" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10026" value="CL00026" />10026</td>
                                            <td width="*" id="codeC10026">행정법</td>
                                            <td width="12%" id="codeD10026"><input type="text" id="codeseq10026" name="codeSq" value="26" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10026">사용</td>
                                            <td width="12%" id="codeZ10026" onclick="javascript:fnCodeIdEdit('10026');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10026" onclick="javascript:fnCodeIdSave('10026');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10026" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10027" value="CL00027" />10027</td>
                                            <td width="*" id="codeC10027">화학</td>
                                            <td width="12%" id="codeD10027"><input type="text" id="codeseq10027" name="codeSq" value="27" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10027">사용</td>
                                            <td width="12%" id="codeZ10027" onclick="javascript:fnCodeIdEdit('10027');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10027" onclick="javascript:fnCodeIdSave('10027');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10027" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10028" value="CL00028" />10028</td>
                                            <td width="*" id="codeC10028">환경공학</td>
                                            <td width="12%" id="codeD10028"><input type="text" id="codeseq10028" name="codeSq" value="28" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10028">사용</td>
                                            <td width="12%" id="codeZ10028" onclick="javascript:fnCodeIdEdit('10028');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10028" onclick="javascript:fnCodeIdSave('10028');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10028" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10029" value="CL00029" />10029</td>
                                            <td width="*" id="codeC10029">환경보건</td>
                                            <td width="12%" id="codeD10029"><input type="text" id="codeseq10029" name="codeSq" value="29" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10029">사용</td>
                                            <td width="12%" id="codeZ10029" onclick="javascript:fnCodeIdEdit('10029');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10029" onclick="javascript:fnCodeIdSave('10029');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10029" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10030" value="CL00030" />10030</td>
                                            <td width="*" id="codeC10030">환경화학</td>
                                            <td width="12%" id="codeD10030"><input type="text" id="codeseq10030" name="codeSq" value="30" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10030">사용</td>
                                            <td width="12%" id="codeZ10030" onclick="javascript:fnCodeIdEdit('10030');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10030" onclick="javascript:fnCodeIdSave('10030');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10030" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10031" value="CL00031" />10031</td>
                                            <td width="*" id="codeC10031">전공보건</td>
                                            <td width="12%" id="codeD10031"><input type="text" id="codeseq10031" name="codeSq" value="31" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10031">사용</td>
                                            <td width="12%" id="codeZ10031" onclick="javascript:fnCodeIdEdit('10031');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10031" onclick="javascript:fnCodeIdSave('10031');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10031" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10032" value="CL00032" />10032</td>
                                            <td width="*" id="codeC10032">식품화학개론 문제</td>
                                            <td width="12%" id="codeD10032"><input type="text" id="codeseq10032" name="codeSq" value="32" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10032">사용</td>
                                            <td width="12%" id="codeZ10032" onclick="javascript:fnCodeIdEdit('10032');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10032" onclick="javascript:fnCodeIdSave('10032');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10032" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10033" value="CL00033" />10033</td>
                                            <td width="*" id="codeC10033">면접특강</td>
                                            <td width="12%" id="codeD10033"><input type="text" id="codeseq10033" name="codeSq" value="33" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10033">사용</td>
                                            <td width="12%" id="codeZ10033" onclick="javascript:fnCodeIdEdit('10033');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10033" onclick="javascript:fnCodeIdSave('10033');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div data-order="10033" class="ui-sortable-handle">
                                <table class="commonTable" style="border: 0;">
                                    <tbody>
                                        <tr>
                                            <td style="display: none;"><input type="hidden" id="codeAA" /><input type="hidden" name="codeId" id="codeId10034" value="CL00034" />10034</td>
                                            <td width="*" id="codeC10034">보건교사</td>
                                            <td width="12%" id="codeD10034"><input type="text" id="codeseq10034" name="codeSq" value="34" style="width: 20px;" /></td>
                                            <td width="20%" id="codeE10034">사용</td>
                                            <td width="12%" id="codeZ10034" onclick="javascript:fnCodeIdEdit('10034');" style="cursor: pointer;">수정</td>
                                            <td width="12%" id="codeX10034" onclick="javascript:fnCodeIdSave('10034');" style="cursor: pointer;">삭제</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- 과목코드 리스트 E -->
            </div>
        </div>
    </div>
</section>
@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'video')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 강의 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url();">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1">
                <input name="mvIdx" type="hidden">
                <table class="rowTable">
                    <colgroup>
                        <col style="width:9%">
                        <col style="width:350px">
                        <col style="width:9%">
                        <col style="width:*">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>카테고리 선택</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchOp1" id="searchOp1" style="width:250px;padding-left:10px;">
										<option value="">선택</option>
									</select>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
												<option value="0">전체</option>
												<option value="1">강좌명</option>
												<option value="2">교수명</option>
											</select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp2" value="" id="searchOp20" checked=""><label for="searchOp20"><span></span>전체</label>
                                    <input type="radio" name="searchOp2" value="Y" id="searchOp21"><label for="searchOp21"><span></span>보임</label>
                                    <input type="radio" name="searchOp2" value="N" id="searchOp22"><label for="searchOp22"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>강좌금액</th>
                            <td colspan="3">
                                <p><input type="text" placeholder="원" class="chknum" name="searchOp3" value=""></p>
                                ~
                                <p><input type="text" placeholder="원" class="chknum" name="searchOp4" value=""></p>
                            </td>
                        </tr>
                        <tr>
                            <th>강좌등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar" type="text" name="searchSdt" value="" readonly="" id="datepicker1"> ~
                                <input class="calendar" type="text" name="searchEdt" value="" readonly="" id="datepicker2">
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActMovingList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>
        <script>
            $("#datepicker1, #datepicker2").datepicker({

                showOn: "both", // 버튼과 텍스트 필드 모두 캘린더를 보여준다.
                changeMonth: true, // 월을 바꿀수 있는 셀렉트 박스를 표시한다.
                changeYear: true, // 년을 바꿀 수 있는 셀렉트 박스를 표시한다.
                minDate: '-100y', // 현재날짜로부터 100년이전까지 년을 표시한다.
                nextText: '다음 달', // next 아이콘의 툴팁.
                prevText: '이전 달', // prev 아이콘의 툴팁.
                numberOfMonths: [1,1], // 한번에 얼마나 많은 월을 표시할것인가. [2,3] 일 경우, 2(행) x 3(열) = 6개의 월을 표시한다.
                stepMonths: 3, // next, prev 버튼을 클릭했을때 얼마나 많은 월을 이동하여 표시하는가. 
                yearRange: 'c-100:c+10', // 년도 선택 셀렉트박스를 현재 년도에서 이전, 이후로 얼마의 범위를 표시할것인가.
                showButtonPanel: true, // 캘린더 하단에 버튼 패널을 표시한다. 
                currentText: '오늘 날짜' , // 오늘 날짜로 이동하는 버튼 패널
                closeText: '닫기',  // 닫기 버튼 패널
                dateFormat: "yy-mm-dd", // 텍스트 필드에 입력되는 날짜 형식.
                showAnim: "slide", //애니메이션을 적용한다.
                showMonthAfterYear: true , // 월, 년순의 셀렉트 박스를 년,월 순으로 바꿔준다. 
                dayNamesMin: ['월', '화', '수', '목', '금', '토', '일'], // 요일의 한글 형식.
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'] // 월의 한글 형식.

            });
        </script>
        <!--menuTable-->
        <table class="commonTable detailTable">
            <caption>동영상 강의 리스트</caption>
            <colgroup>
                <col style="width:50px">
                <col style="width:50px">
                <col style="width:60px">
                <col style="width:*">
                <col style="width:50px">
                <col style="width:50px">
                <col style="width:50px">
                <col style="width:90px">
                <col style="width:100px">
                <col style="width:50px">
                <col style="width:90px">
                <col style="width:170px">
            </colgroup>
            <thead>
                <tr>
                    <th>
                        <span class="checkBox">
									<input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y">
	  								<label for="check_all"><span></span>선택</label>
                        </span>
                    </th>
                    <th>번호</th>
                    <th>과목</th>
                    <th>강좌명</th>
                    <th>구분</th>
                    <th>교수</th>
                    <th>강의수</th>
                    <th>가격(원)</th>
                    <th>상태</th>
                    <th>노출</th>
                    <th>등록일</th>
                    <th>관리</th>
                </tr>
            </thead>
            <tbody class="sortWrap">
                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="no" value="0" id="no0">
                            <label for="no0"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">1702</td>
                    <td>영양교사</td>
                    <td class="al">
                        <a href="javascript:void(0);" onclick="javascript:fnActMovingView('8074');">2021 영양교사 실전모의고사 (김)</a>
                        <i class="tableIcon popular">인기</i>
                        <i class="tableIcon new">NEW</i>
                    </td>
                    <td>전체</td>
                    <td>김지연</td>
                    <td>3</td>
                    <td class="ar chkmoney">220,000</td>
                    <td>
                        <i class="tableIcon statuIng">업데이트중</i>
                    </td>
                    <td>보임</td>
                    <td>2020-10-06</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActMovingClip('8074');">강의등록</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActMovingView('8074');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActMovingDel('8074');">삭제</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--//menuTable-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActMovingList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActMovingList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActMovingList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActMovingList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActMovingList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActMovingList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActMovingList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActMovingList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActMovingList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActMovingList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActMovingList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActMovingList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=86" onclick="fnActMovingList(86);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
    </div>
</section>
@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'class')
<section class="rightCont">
    <div class="rightTitle">
        <h3>클래스 강의 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url();">등록</button>
        </div>
    </div>
    <div class="realCont">

        <form name="frm" method="post" class="SearchForm">
              <fieldset>
                <input name="pageIndex" type="hidden" value="1">
                <input name="coIdx" type="hidden">
                <table class="rowTable">
                    <colgroup>
                        <col style="width:9%">
                        <col style="width:350px">
                        <col style="width:9%">
                        <col style="width:*">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>카테고리 선택</th>
                            <td colspan="3">
                                <p>
                                <select name="searchOp1" id="searchOp1">
                                    <option value="">선택</option>
                                </select>
                                </p> (*카테고리 선택 시 순서 수정 가능)
                                &nbsp; &nbsp; 
                                / 출력갯수
                                <select name="pageUnit" id="pageUnit" style="width:80px;" onchange="fnActCollegeList(1)">
                                    <option value="20">20</option>
                                    <option value="30" selected="">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="150">150</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="0">전체</option>
                                        <option value="1">강좌명</option>
                                        <option value="2">교수명</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp2" value="" id="searchOp20" checked=""><label for="searchOp20"><span></span>전체</label>
                                    <input type="radio" name="searchOp2" value="Y" id="searchOp21"><label for="searchOp21"><span></span>보임</label>
                                    <input type="radio" name="searchOp2" value="N" id="searchOp22"><label for="searchOp22"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>강좌금액</th>
                            <td colspan="3">
                                  <p><input type="text" placeholder="원" class="chknum" name="searchOp3" value=""></p>
                                  ~
                                  <p><input type="text" placeholder="원" class="chknum" name="searchOp4" value=""></p>
                            </td>
                        </tr>
                          <tr>
                              <th>강좌등록일</th>
                              <td colspan="3" class="daterange">
                                <input class="calendar" type="text" name="searchSdt" value="" readonly="" id="datepicker1">
                                ~
                                <input class="calendar" type="text" name="searchEdt" value="" readonly="" id="datepicker2">
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                              </td>
                          </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActCollegeList('1'); return false;">검색</button>
                </div>
              </fieldset>
        </form>

        <!--menuTable-->
        <table class="commonTable detailTable">
            <caption>클래스 강의 리스트</caption>
            <colgroup>
                <col style="width:40px">
                <col style="width:40px">
                <col style="width:160px">
                <col style="width:230px">
                <col style="width:*">
                <col style="width:50px">
                <col style="width:90px">
                <col style="width:90px">
            </colgroup>
            <thead>
                <tr>
                    <th>
                        <span class="checkBox">
                            <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y">
                              <label for="check_all"><span></span>선택</label>
                        </span>
                    </th>
                    <th>번호</th>
                    <th>직렬</th>
                    <th>클래스명</th>
                    <th>과목명</th>
                    <th>노출</th>
                    <th>등록일</th>
                    <th>관리</th>
                </tr>
            </thead>
            <tbody class="sortWrap">

                <tr data-no="140">
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="no" value="0" id="no0">
                            <label for="no0"><span></span>선택</label>
                        </span>
                    </td>
                    <td>101</td>
                
                    <td>영양교사</td>
                    <td>2021 실전 동형 모의고사</td>
                    <td style="word-break:break-all;">영양교사,영양교사,영양교사</td>
                    <td>보임</td>
                    <td>2020-10-06</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActCollegeView('140');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActCollegeDel('140');">삭제</button>
                    </td>
                </tr>

                <tr data-no="139">
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="no" value="1" id="no1">
                            <label for="no1"><span></span>선택</label>
                        </span>
                    </td>
                    <td>100</td>
                
                    <td>보건직 공무원</td>
                    <td>하반기 경기 경채반</td>
                    <td style="word-break:break-all;">생물,공중보건,생물,생물,공중보건,공중보건</td>
                    <td>보임</td>
                    <td>2020-09-14</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActCollegeView('139');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActCollegeDel('139');">삭제</button>
                    </td>
                </tr>

            </tbody>
        </table>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActCollegeList(2);return false; " class="pn_page">2</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActCollegeList(3);return false; " class="pn_page">3</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActCollegeList(4);return false; " class="pn_page">4</a></li>

            </ul>
        </div>
        <!-- //pagingType03 -->

    </div>
</section>
@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서점 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url();">등록</button>
        </div>
    </div>
    <div class="realCont">

        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1">
                <input name="bmIdx" type="hidden">
                <table class="rowTable">
                    <colgroup>
                        <col style="width:9%">
                        <col style="width:350px">
                        <col style="width:9%">
                        <col style="width:*">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>카테고리 선택</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchOp1" id="searchOp1" style="width:250px;padding-left:10px;">
										<option value="">직렬선택</option>	
									</select>
                                </p>
                                <p>
                                    <select name="searchOp2" id="searchOp2" style="width:250px;padding-left:10px;">
										<option value="">과목선택</option>
									</select>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="0">전체</option>
                                        <option value="1">상품명</option>
                                        <option value="2">저자</option>
                                        <option value="3">출판사</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp3" value="" id="searchOp30" checked=""><label for="searchOp30"><span></span>전체</label>
                                    <input type="radio" name="searchOp3" value="Y" id="searchOp31"><label for="searchOp31"><span></span>보임</label>
                                    <input type="radio" name="searchOp3" value="N" id="searchOp32"><label for="searchOp32"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActBookList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <table class="commonTable detailTable">
            <caption>서적 관리 테이블</caption>
            <colgroup>
                <col style="width:50px">
                <col style="width:50px">
                <col style="width:*">
                <col style="width:220px">
                <col style="width:120px">
                <col style="width:120px">
                <col style="width:50px">
                <col style="width:100px">
                <col style="width:120px">
            </colgroup>
            <thead>
                <tr>
                    <th>
                        <span class="checkBox">
                            <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y">
                            <label for="check_all"><span></span>선택</label>
                        </span>
                    </th>
                    <th>번호</th>
                    <th>교재명</th>
                    <th>출판사</th>
                    <th>정가(원)</th>
                    <th>판매가(원)</th>
                    <th>상태</th>
                    <th>등록일</th>
                    <th>관리</th>
                </tr>
            </thead>
            <tbody class="sortWrap">

                <tr>
                    <td>
                        <span class="checkBox">
									<input type="checkbox" class="no" name="no" value="0" id="no0">
									<label for="no0"><span></span>선택</label>
                        </span>
                    </td>
                    <td>289</td>
                    <td class="al">
                        <img src="/cmm/fms/getImage.do?atchFileId=FILE_000000000022389&amp;fileSn=0" class="img" style="float:left;width:30px;height:40px;margin-right:4px;">
                        <a href="javascript:void(0);" onclick="javascript:fnActBookView('4410');" class="act_modi">
                              <b class="goods title">2021 EBS 원픽 환경보건</b>
                        </a>
                        <br>
                        <i class="tableIcon popular">인기</i>
                        <i class="tableIcon new">NEW</i>
                        <i class="tableIcon best">베스트</i>
                        <i class="tableIcon recommend">추천</i>

                    </td>
                    <td>BTB Books</td>
                    <td class="chkmoney">28,000</td>
                    <td class="chkmoney">25,200</td>
                    <td>보임</td>
                    <td>2020-09-01</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActBookView('4410');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActBookDel('4410');">삭제</button>
                    </td>
                </tr>

            </tbody>
        </table>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActBookList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActBookList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActBookList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActBookList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActBookList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActBookList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActBookList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActBookList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActBookList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActBookList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActBookList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActBookList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=29" onclick="fnActBookList(29);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->

    </div>
</section>
@elseif(request()->segment(2) == 'lecture' && request()->segment(3) == 'academy')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학원강의</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0003">
                <input type="hidden" name="nttId" value="0">
                <input type="hidden" name="authFlag" value="">
                <input name="pageIndex" type="hidden" value="1">
                <table class="rowTable">
                    <colgroup>
                        <col style="width:9%">
                        <col style="width:350px">
                        <col style="width:9%">
                        <col style="width:*">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
												<option value="1">제목</option>						
												<option value="2">내용</option>
												<option value="3">작성자</option>
												<option value="4">작성일</option>
												<option value="0">전체</option>
											</select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp7" id="searchOp70" value="" checked="">
                                    <label for="searchOp70"><span></span>전체</label>
                                    <input type="radio" name="searchOp7" id="searchOp72" value="N">
                                    <label for="searchOp72"><span></span>보임</label>
                                    <input type="radio" name="searchOp7" id="searchOp71" value="Y">
                                    <label for="searchOp71"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604305441044"> ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604305441045">
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>15</span>건, <span>1</span>/<span>1</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0003">
            <input type="hidden" name="nttId">
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0003">
            <table class="commonTable detailTable">
                <caption class="blind">학원강의 목록</caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all">
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>
                        <th scope="col" width="40px">순서</th>
                        <th scope="col" width="*">제목</th>
                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>
                        <th scope="col" width="40px">노출</th>
                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody class="sortWrap">

                    <tr class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="73971" id="no73971">
                                <label for="no73971"><span></span>선택</label>
                            </span>
                        </td>
                        <td>15</td>
                        <td>73971</td>
                        <td>0</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('73971', 'BBS_0003');">
								간호직 공무원
							</a>
                        </td>
                        <td>관리자</td>
                        <td class="chkmoney">44,684</td>
                        <td style="color:#FF0000;">보임</td>
                        <td>2019-05-13</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('73971');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('73971');">삭제</button>
                        </td>
                    </tr>

                    <tr class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="73971" id="no73971">
                                <label for="no73971"><span></span>선택</label>
                            </span>
                        </td>
                        <td>15</td>
                        <td>7391</td>
                        <td>0</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('73971', 'BBS_0003');">
								간호직 공무원
							</a>
                        </td>
                        <td>관리자</td>
                        <td class="chkmoney">44,684</td>
                        <td style="color:#FF0000;">보임</td>
                        <td>2019-05-13</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('73971');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('73971');">삭제</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>

            </ul>
            <button type="button" class="right act_write" onclick="javascript:fnWriteArticle(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->

    </div>
</section>
@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'video')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 신청 리스트</h3>
        <!-- div class="btnWrap">
					<button type="button" class="colorBtn act_lecture_closing" style="background-color:#f00281;">수강정리</button>
				</div-->
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="searchOp1" type="hidden" value="동영상" />
                <input name="psno" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1" selected="">주문자명</option>
                                        <option value="2">주문번호</option>
                                        <option value="3">입금자명</option>
                                        <option value="4">아이디</option>
                                        <option value="5">강좌명</option>
                                        <option value="6">결제메모</option>
                                        <option value="7">관리자메모</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문상태</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp20" value="" checked="" class="check-all" /><label for="searchOp20"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요" /><label for="searchOp21"><span></span>입금요</label> <input type="checkbox" name="searchOp2" id="searchOp22" value="수강중" />
                                    <label for="searchOp22"><span></span>수강중</label> <input type="checkbox" name="searchOp2" id="searchOp23" value="수강종료" /><label for="searchOp23"><span></span>수강종료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp24" value="취소" /><label for="searchOp24"><span></span>취소</label> <input type="checkbox" name="searchOp2" id="searchOp25" value="일시정지" />
                                    <label for="searchOp25"><span></span>일시정지</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="2020-08-01" readonly="" id="dp1604306518752" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="2020-11-02" readonly="" id="dp1604306518753" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>결제방법</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all" /><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장" /><label for="searchOp31"><span></span>무통장</label> <input type="checkbox" name="searchOp3" id="searchOp32" value="카드" />
                                    <label for="searchOp32"><span></span>카드</label> <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌" /><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp34" value="학원결제" /><label for="searchOp34"><span></span>학원결제</label> <input type="checkbox" name="searchOp3" id="searchOp35" value="실강변경" />
                                    <label for="searchOp35"><span></span>실강변경</label> <input type="checkbox" name="searchOp6" id="searchOp6" value="Y" /><label for="searchOp6"><span></span>모바일강의</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <form name="frm_list" id="frm_list" method="post">
            <input type="hidden" name="status2" id="order_status" />
            <table class="commonTable detailTable">
                <caption>
                    동영상 신청 리스트
                </caption>
                <colgroup>
                    <col style="width: 40px;" />
                    <col style="width: 50px;" />
                    <col style="width: 100px;" />
                    <col style="width: 60px;" />
                    <col style="width: 80px;" />
                    <col style="width: *;" />
                    <col style="width: 80px;" />
                    <col style="width: 120px;" />
                    <col style="width: 70px;" />
                    <col style="width: 80px;" />
                    <col style="width: 100px;" />
                    <col style="width: 120px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th>번호</th>
                        <th>
                            주문일시<br />
                            주문경로
                        </th>
                        <th>수강구분</th>
                        <th>강좌구분</th>
                        <th>강좌</th>
                        <th>결제금액</th>
                        <th>결제수단</th>
                        <th>주문상태</th>
                        <th>
                            주문자<br />
                            입금자
                        </th>
                        <th>
                            시작일<br />
                            종료일
                        </th>
                        <th>연락처</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271859" id="no271859" />
                                <label for="no271859"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271859');">
                                2358
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271859');">
                                <div class="date">2020-10-29</div>
                                <div class="ord-mobile">mobile</div>
                            </a>
                        </td>
                        <td><div class="ord-pc">PC</div></td>
                        <td>단과</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271859');"> 2021 지역사회간호 (정규이론반)</a>
                        </td>
                        <td class="ar chkmoney">150,000</td>
                        <td rowspan="1">
                            <div>카드_신한</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">김한나</div>
                            <div>(poilks1)</div>
                            <div>김한나</div>
                        </td>
                        <td>
                            2020-10-29<br />
                            2021-01-06
                        </td>
                        <td rowspan="1">
                            <div>010-3324-5755</div>
                            <div>010-3324-5755</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="2">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271858" id="no271858" />
                                <label for="no271858"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="2" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271858');">
                                2357
                            </a>
                        </td>
                        <td rowspan="2">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271858');">
                                <div class="date">2020-10-29</div>
                                <div class="ord-pc">PC</div>
                            </a>
                        </td>
                        <td><div class="ord-pc">PC</div></td>
                        <td>
                            종합<br />
                            <button type="button" class="commonBtn act_lecture" data-no="271858" data-sno="313253">강좌변경</button>
                        </td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271858');"> 식품위생직 공무원 - 공개경쟁(5) FP반</a>
                        </td>
                        <td class="ar chkmoney">1,700,000</td>
                        <td rowspan="2">
                            <div>카드_현대</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="2">
                            <div class="name">김은경</div>
                            <div>(N@39801658)</div>
                            <div>김은경</div>
                        </td>
                        <td>
                            2020-11-02<br />
                            2021-11-01
                        </td>
                        <td rowspan="2">
                            <div>010-3551-4620</div>
                            <div>010-3551-4620</div>
                        </td>
                    </tr>

                    <tr>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td>
                            종합<br />
                            <button type="button" class="commonBtn act_lecture" data-no="271858" data-sno="313254">강좌변경</button>
                        </td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271858');"> 식품위생직 공무원 - 공개경쟁(5) FP반</a>
                        </td>
                        <td class="ar chkmoney">0</td>
                        <td>수강중</td>
                        <td>
                            <div>2020-11-02</div>
                            <div>2021-11-01</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271857" id="no271857" />
                                <label for="no271857"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271857');">
                                2356
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271857');">
                                <div class="date">2020-10-29</div>
                                <div class="ord-pc">PC</div>
                            </a>
                        </td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td>
                            종합<br />
                            <button type="button" class="commonBtn act_lecture" data-no="271857" data-sno="313252">강좌변경</button>
                        </td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271857');"> 영양교사 - 2021 실전 동형 모의고사</a>
                        </td>
                        <td class="ar chkmoney">220,000</td>
                        <td rowspan="1">
                            <div>카드_KB국민</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">김해나</div>
                            <div>(N@35279212)</div>
                            <div>김해나</div>
                        </td>
                        <td>
                            2020-11-01<br />
                            2020-12-05
                        </td>
                        <td rowspan="1">
                            <div>010-9469-6771</div>
                            <div>010-9469-6771</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271856" id="no271856" />
                                <label for="no271856"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271856');">
                                2355
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271856');">
                                <div class="date">2020-10-29</div>
                                <div class="ord-mobile">mobile</div>
                            </a>
                        </td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td>단과</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271856');"> 이경연 교수의 식품화학개론 최신 이론완성반</a>
                        </td>
                        <td class="ar chkmoney">150,000</td>
                        <td rowspan="1">
                            <div>무통장입금</div>

                            <div>(처리전)</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">주소정</div>
                            <div>(N@28432635)</div>
                            <div>주소정</div>
                        </td>
                        <td>
                            2020-10-29<br />
                            2021-01-06
                        </td>
                        <td rowspan="1">
                            <div>010-3269-2387</div>
                            <div>010-3269-2387</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271855" id="no271855" />
                                <label for="no271855"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271855');">
                                2354
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271855');">
                                <div class="date">2020-10-29</div>
                                <div class="ord-mobile">mobile</div>
                            </a>
                        </td>
                        <td><div class="ord-pc">PC</div></td>
                        <td>
                            종합<br />
                            <button type="button" class="commonBtn act_lecture" data-no="271855" data-sno="313250">강좌변경</button>
                        </td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271855');"> 영양교사 - [2021] 이론 및 심화완성</a>
                        </td>
                        <td class="ar chkmoney">550,000</td>
                        <td rowspan="1">
                            <div>카드_신한</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">나혜민</div>
                            <div>(N@79583408)</div>
                            <div>나혜민</div>
                        </td>
                        <td>
                            2020-10-30<br />
                            2021-01-27
                        </td>
                        <td rowspan="1">
                            <div>070-7804-0846</div>
                            <div>010-4184-0846</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271854" id="no271854" />
                                <label for="no271854"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271854');">
                                2353
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271854');">
                                <div class="date">2020-10-28</div>
                                <div class="ord-mobile">mobile</div>
                            </a>
                        </td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td>
                            종합<br />
                            <button type="button" class="commonBtn act_lecture" data-no="271854" data-sno="313249">강좌변경</button>
                        </td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271854');"> 영양사 - 44회 영양사 모의고사반</a>
                        </td>
                        <td class="ar chkmoney">220,000</td>
                        <td rowspan="1">
                            <div>카드_우리</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">안재금</div>
                            <div>(N@148376084)</div>
                            <div>안재금</div>
                        </td>
                        <td>
                            2020-11-02<br />
                            2020-12-21
                        </td>
                        <td rowspan="1">
                            <div>010-4216-1211</div>
                            <div>010-4216-1211</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271853" id="no271853" />
                                <label for="no271853"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271853');">
                                2352
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271853');">
                                <div class="date">2020-10-28</div>
                                <div class="ord-mobile">mobile</div>
                            </a>
                        </td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td>단과</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271853');"> 이경연 교수의 식품화학개론 최신 이론완성반</a>
                        </td>
                        <td class="ar chkmoney">150,000</td>
                        <td rowspan="1">
                            <div>무통장입금</div>

                            <div>(처리전)</div>
                        </td>
                        <td>입금요</td>
                        <td rowspan="1">
                            <div class="name">주소정</div>
                            <div>(N@28432635)</div>
                            <div>주소정</div>
                        </td>
                        <td>
                            2020-10-29<br />
                            2021-01-06
                        </td>
                        <td rowspan="1">
                            <div>010-3269-2387</div>
                            <div>010-3269-2387</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271852" id="no271852" />
                                <label for="no271852"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271852');">
                                2351
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271852');">
                                <div class="date">2020-10-28</div>
                                <div class="ord-pc">PC</div>
                            </a>
                        </td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td>단과</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271852');"> 2020 화학 기출문제 분석특강</a>
                        </td>
                        <td class="ar chkmoney">120,000</td>
                        <td rowspan="1">
                            <div>무통장입금</div>

                            <div>(처리)</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">이미라</div>
                            <div>(N@7976217)</div>
                            <div>이미라</div>
                        </td>
                        <td>
                            2020-10-29<br />
                            2020-12-07
                        </td>
                        <td rowspan="1">
                            <div>010-3483-6689</div>
                            <div>010-3483-6689</div>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="psno" value="271851" id="no271851" />
                                <label for="no271851"><span></span>선택</label>
                            </span>
                        </td>
                        <td rowspan="1" class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271851');">
                                2350
                            </a>
                        </td>
                        <td rowspan="1">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271851');">
                                <div class="date">2020-10-28</div>
                                <div class="ord-pc">PC</div>
                            </a>
                        </td>
                        <td><div class="ord-pc">PC</div></td>
                        <td>
                            종합<br />
                            <button type="button" class="commonBtn act_lecture" data-no="271851" data-sno="313246">강좌변경</button>
                        </td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('271851');"> 간호직 공무원 - 이론종합 (3)</a>
                        </td>
                        <td class="ar chkmoney">400,000</td>
                        <td rowspan="1">
                            <div>카드_현대</div>
                        </td>
                        <td>수강중</td>
                        <td rowspan="1">
                            <div class="name">배선정</div>
                            <div>(sunjung245)</div>
                            <div>배선정</div>
                        </td>
                        <td>
                            2020-10-28<br />
                            2021-01-25
                        </td>
                        <td rowspan="1">
                            <div>062-522-5439</div>
                            <div>010-8323-3506</div>
                        </td>
                    </tr>

                    <tr>
							<td rowspan="2">
								<span class="checkBox">
									<input type="checkbox" class="no" name="psno" value="271787" id="no271787">
									<label for="no271787"><span></span>선택</label>
								</span>
							</td>
							<td rowspan="2" class="list-no">
								<a href="javascript:void(0);" onclick="javascript:fnActOrderView('271787');">
								2286
								</a>
							</td>
							<td rowspan="2">
								<a href="javascript:void(0);" onclick="javascript:fnActOrderView('271787');">
								<div class="date">2020-10-25</div><div class="ord-mobile">mobile</div>
								</a>
							</td>
							<td><div class="ord-pc">PC</div></td>
							<td>단과</td>
							<td class="al">
								<a href="javascript:void(0);" onclick="javascript:fnActOrderView('271787');">
								2021 이승훈 공중보건 (정규이론반)</a>
							</td>
							<td class="ar chkmoney">200,000</td>
							<td rowspan="2">
								<div>무통장입금</div>
  								
  								<div>(처리)</div>
  								
							</td>
							<td>수강중</td>
							<td rowspan="2"><div class="name">김다영</div><div>(N@24421558)</div><div>김다영</div></td>
							<td>2020-10-29<br>2021-01-06</td>
							<td rowspan="2"><div>010-9618-1305</div><div>010-9618-1305</div></td>
						</tr>
                </tbody>
            </table>
        </form>
        <!--//menuTable-->

        <style>
            .list_status {
                float: left;
            }
            .act_list_status {
                margin-left: 2px;
                margin-right: 5px;
            }
        </style>
        <!-- pagingType03 -->
        <div class="pageNation clear">
            <select class="list_status" id="list_status" style="width: 90px;">
                <option value="">==선택==</option>
                <option value="입금요">입금요</option>
                <option value="수강중">수강중</option>
                <option value="수강종료">수강종료</option>
                <option value="취소">취소</option>
                <option value="일시정지">일시정지</option>
                <option value="취소고민">취소고민</option>
            </select>
            <button class="left act_list_status">주문상태변경</button>

            <button class="left act_list_del">선택삭제</button>

            <button class="left act_gigan" style="margin-left: 4px;">수강일수변경</button>
            <button class="left act_sin_date" style="margin-left: 4px;">수강기간변경</button>
            <button class="left act_price" style="margin-left: 4px;">수강금액변경</button>

            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=236" onclick="fnActResultList(236);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'extension')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 연장 신청 리스트</h3>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="searchOp1" type="hidden" value="" />
                <input name="sno" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">주문자명</option>
                                        <option value="2">주문번호</option>
                                        <option value="3">입금자명</option>
                                        <option value="4">아이디</option>
                                        <option value="5">강좌명</option>
                                        <option value="6">관리자메모</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문상태</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp20" value="" checked="" class="check-all" /><label for="searchOp20"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요" /><label for="searchOp21"><span></span>입금요</label> <input type="checkbox" name="searchOp2" id="searchOp22" value="수강중" />
                                    <label for="searchOp22"><span></span>수강중</label> <input type="checkbox" name="searchOp2" id="searchOp23" value="수강종료" /><label for="searchOp23"><span></span>수강종료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp24" value="취소" /><label for="searchOp24"><span></span>취소</label> <input type="checkbox" name="searchOp2" id="searchOp25" value="일시정지" />
                                    <label for="searchOp25"><span></span>일시정지</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604306846597" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604306846598" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>결제방법</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all" /><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장입금" /><label for="searchOp31"><span></span>무통장</label> <input type="checkbox" name="searchOp3" id="searchOp32" value="카드" />
                                    <label for="searchOp32"><span></span>카드</label> <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌" /><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp34" value="학원결제" /><label for="searchOp34"><span></span>학원결제</label> <input type="checkbox" name="searchOp3" id="searchOp35" value="실강변경" />
                                    <label for="searchOp35"><span></span>실강변경</label> <input type="checkbox" name="searchOp3" id="searchOp36" value="모바일강의" /><label for="searchOp35"><span></span>모바일강의</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <form name="frm_list" id="frm_list" method="post">
            <table class="commonTable detailTable">
                <caption>
                    동영상 연장 신청 리스트
                </caption>
                <colgroup>
                    <col style="width: 40px;" />
                    <col style="width: 40px;" />
                    <col style="width: 60px;" />
                    <col style="width: 80px;" />
                    <col style="width: 100px;" />
                    <col style="width: 50px;" />
                    <col style="width: *;" />
                    <col style="width: 90px;" />
                    <col style="width: 80px;" />
                    <col style="width: 80px;" />
                    <col style="width: 80px;" />
                    <col style="width: 80px;" />
                    <col style="width: 100px;" />
                    <col style="width: 100px;" />
                    <col style="width: 100px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th>번호</th>
                        <th>이름</th>
                        <th>아이디</th>
                        <th>주문일시</th>
                        <th>수강구분</th>
                        <th>강좌명</th>
                        <th>연장신청일수</th>
                        <th>연장료</th>
                        <th>입금</th>
                        <th>결제수단</th>
                        <th>주문상태</th>
                        <th>입금일</th>
                        <th>수강종료일</th>
                        <th>연장 후 종료일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="sno" value="2980" id="no2980" />
                                <label for="no2980"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('2980');">
                                2975
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('2980');">
                                이경은
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('2980');">
                                ruddms9736
                            </a>
                        </td>
                        <td>2020-10-29</td>
                        <td>PC</td>
                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnActOrderView('2980');"> 영양교사 - [2021] 서답형 문제풀이</a>
                        </td>
                        <td>30</td>
                        <td class="ar chkmoney">100,000</td>
                        <td class="ar chkmoney"></td>
                        <td>무통장입금</td>
                        <td>입금요</td>
                        <td></td>
                        <td>2020-10-29</td>
                        <td>2020-11-28</td>
                    </tr>

                </tbody>
            </table>
        </form>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button class="left act_list_del">선택삭제</button>

            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=149" onclick="fnActResultList(149);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서적 주문 관리</h3>
    </div>
    <div class="realCont">

    <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1">
            <input type="hidden" name="sno">
              <fieldset>
                  <table class="rowTable">
                      <colgroup>
                          <col style="width:9%">
                          <col style="width:*">
                      </colgroup>
                      <tbody>
                          <tr>
                              <th>검색어</th>
                              <td>
                                <p>
                                <select name="searchCnd" id="searchCnd">
                                    <option value="o_name" selected="">주문자명</option>
                                    <option value="b_name">입금자명</option>
                                    <option value="uid">주문자아이디</option>
                                    <option value="jumun">주문번호</option>
                                    <option value="p_name">강좌명</option>
                                    <option value="method">카드종류</option>
                                </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                          </tr>
                          <tr>
                            <th>주문상태</th>
                              <td>
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp20" value="" checked="" class="check-all"><label for="searchOp20"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요"><label for="searchOp21"><span></span>입금요</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp22" value="결제완료"><label for="searchOp22"><span></span>결제완료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp23" value="배송준비중"><label for="searchOp23"><span></span>배송준비중</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp24" value="배송중"><label for="searchOp24"><span></span>배송중</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp25" value="배송완료"><label for="searchOp25"><span></span>배송완료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp26" value="거래완료"><label for="searchOp26"><span></span>거래완료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp27" value="주문취소"><label for="searchOp27"><span></span>주문취소</label>
                                </p>
                              </td>
                          </tr>
                          <tr>
                              <th>주문일</th>
                              <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="2020-10-01" readonly="" id="dp1604306949418">
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="2020-11-02" readonly="" id="dp1604306949419">
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                              </td>
                          </tr>
                          <tr>
                            <th>결제방법</th>
                              <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all"><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장"><label for="searchOp31"><span></span>무통장</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp32" value="카드"><label for="searchOp32"><span></span>카드</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌"><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp6" id="searchOp6" value="Y"><label for="searchOp6"><span></span>교재포함무료</label>
                                </p>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              <div class="btnsWrap">
                  <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
              </div>
              </fieldset>
          </form>
      <!--//search-->

        <!--menuTable-->
      <p class="total">
              <span class="total_left">총 <strong class="chkmoney">98,480</strong>개, 검색 <strong>415</strong>, 1 of 42 page</span>
          </p>
        <form name="frm_list" id="frm_list" method="post">
        <input type="hidden" name="status" id="status">
        <table class="commonTable detailTable">
            <caption>교재 신청 리스트</caption>
            <colgroup>
                <col style="width:30px">
                <col style="width:60px">
                <col style="width:80px">
                  <col>
                  <col style="width:100px">
                  <col style="width:60px">
                  <col style="width:110px">
                  <col style="width:100px">
                  <col style="width:70px">
                  <col style="width:80px">
            </colgroup>
            <thead>
                <tr>
                    <th>
                        <span class="checkBox">
                            <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y">
                              <label for="check_all"><span></span>선택</label>
                        </span>
                    </th>
                    <th scope="col">번호</th>
                      <th scope="col">주문일시<br>주문경로</th>
                      <th scope="col">상품명</th>
                      <th scope="col">주문자</th>
                      <th scope="col">수령인</th>
                      <th scope="col">연락처</th>
                      <th scope="col">결제수단</th>
                      <th scope="col">결제금액</th>
                      <th scope="col">주문상태</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="sno" value="216215" id="no216215">
                            <label for="no216215"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">
                        415
                    </td>
                      <td><div class="date">2020-10-29</div><div class="ord-mobile">mobile</div></td>
                      <td class="al"><a href="javascript:void(0);" onclick="javascript:fnActOrderView('216215')">
                        2021 원픽 지역사회간호1권
                    </a> <button type="button" class="commonBtn" onclick="javascript:fnActOrderView('216215')">변경</button></td>
                      <td><div class="name">김한나</div><div>poilks1</div></td>
                    <td>김한나</td>
                      <td><div>010-3324-5755</div><div>010-3324-5755</div></td>
                      <td>
                          <div>카드_신한</div><div></div>
                          
                      </td>
                      <td class="chkmoney">34,200</td>
                      <td>결제완료</td>
                </tr>

                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="sno" value="216214" id="no216214">
                            <label for="no216214"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">
                        414
                    </td>
                      <td><div class="date">2020-10-29</div><div class="ord-pc">PC</div></td>
                      <td class="al"><a href="javascript:void(0);" onclick="javascript:fnActOrderView('216214')">
                        2021 김지연 식품위생 이론서 [최신판]1권/식품화학개론 최신판 수험서 [강의용]1권/2021 김철민 국어 이론서1권/오! 영어 [공무원]1권/박동현 공무원영어 기본완성1권/2021 강 한국사 (이론서 및 서브)1권/교재포함:신경향 식품화학개론 기출 및 단원별 문제완성1권/교재포함:신경향 식품화학개론 실전 모의고사반1권/교재포함:2021 국어 기출분석 및 단원별 문제특강1권/교재포함:2021 국어 실전 모의고사1권/교재포함:2021 영어 기출분석 및 단원별 문제특강1권/교재포함:2021 영어 실전 모의고사1권/교재포함:2021 한국사 기출분석 및 단원별 문제특강1권/교재포함:2021 한국사 실전 모의고사1권/교재포함:2021 식품위생 기출분석 및 단원별 문제특강1권/교재포함:2021 식품위생 실전 모의고사1권
                    </a> <button type="button" class="commonBtn" onclick="javascript:fnActOrderView('216214')">변경</button></td>
                      <td><div class="name">김은경</div><div>N@39801658</div></td>
                    <td>김은경</td>
                      <td><div>010-3551-4620</div><div>010-3551-4620</div></td>
                      <td>
                          <div>카드_현대</div><div></div>
                          
                      </td>
                      <td class="chkmoney">187,200</td>
                      <td>결제완료</td>
                </tr>

                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="sno" value="216213" id="no216213">
                            <label for="no216213"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">
                        413
                    </td>
                      <td><div class="date">2020-10-29</div><div class="ord-mobile">mobile</div></td>
                      <td class="al"><a href="javascript:void(0);" onclick="javascript:fnActOrderView('216213')">
                        하이스코어 확인학습 교재 [공무원 생물 심화반 강의용]1권/공무원 생물 기출 700제1권
                    </a> <button type="button" class="commonBtn" onclick="javascript:fnActOrderView('216213')">변경</button></td>
                      <td><div class="name">김미령</div><div>mwmrmd</div></td>
                    <td>김미령</td>
                      <td><div>010-8741-2220</div><div>010-8741-2220</div></td>
                      <td>
                          <div>카드_신한</div><div></div>
                          
                      </td>
                      <td class="chkmoney">40,500</td>
                      <td>배송완료</td>
                </tr>
            </tbody>
        </table>
        </form>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            
            <select class="list_status" id="list_status" style="width:90px;">
                <option value="">==선택==</option>
                <option value="입금요">입금요</option>
                <option value="주문접수">주문접수</option>
                <option value="결제완료">결제완료</option>
                <option value="배송준비중">배송준비중</option>
                <option value="배송중">배송중</option>
                <option value="배송완료">배송완료</option>
                <option value="거래완료">거래완료</option>
                <option value="주문취소">주문취소</option>
            </select>
            <button class="left act_list_status">주문상태변경</button>
              <button class="left act_list_del">선택삭제</button>
               
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li><li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li><li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li><li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li><li class="next text-ir"><a href="?pageIndex=42" onclick="fnActResultList(42);return false; " class="pn_next">마지막</a></li>

            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!-- //pagingType03 -->

    </div>
</section>
@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'free')
<section class="rightCont">
    <div class="rightTitle">
        <h3>무료 강의 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url();">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="fmIdx" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <!-- tr>
									<th>카테고리 선택</th>
									<td colspan="3">
										<p>
									<select name="searchOp1" id="searchOp1" style="width:250px;padding-left:10px;">
										<option value="">선택</option>
									
									</select>
										</p>
									</td>
								</tr>
								<tr-->
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="0">전체</option>
                                        <option value="1">무료강의명</option>
                                        <option value="2">강좌명</option>
                                        <option value="3">회원</option>
                                        <option value="4">회원ID</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>분류</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp2" value="" id="searchOp20" checked="" /><label for="searchOp20"><span></span>전체</label> <input type="radio" name="searchOp2" value="P" id="searchOp21" />
                                    <label for="searchOp21"><span></span>PC</label> <input type="radio" name="searchOp2" value="M" id="searchOp22" /><label for="searchOp22"><span></span>Mobile</label>
                                    <input type="radio" name="searchOp2" value="A" id="searchOp23" /><label for="searchOp23"><span></span>PC+Mobile</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604307025009" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604307025010" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActFreeLectList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <table class="commonTable detailTable">
            <caption>
                무료 강의 리스트
            </caption>
            <colgroup>
                <col style="width: 50px;" />
                <col style="width: 50px;" />
                <col style="width: 60px;" />
                <col style="width: 300px;" />
                <col style="width: *;" />
                <col style="width: 50px;" />
                <col style="width: 100px;" />
                <col style="width: 100px;" />
                <col style="width: 100px;" />
            </colgroup>
            <thead>
                <tr>
                    <th>
                        <span class="checkBox">
                            <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                            <label for="check_all"><span></span>선택</label>
                        </span>
                    </th>
                    <th>번호</th>
                    <th>구분</th>
                    <th>무료강의명</th>
                    <th>강좌</th>
                    <th>회원수</th>
                    <th>등록자</th>
                    <th>등록일</th>
                    <th>관리</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="no" value="0" id="no0" />
                            <label for="no0"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">465</td>
                    <td>
                        PC+Mobile
                    </td>
                    <td>
                        <a href="javascript:fnActFreeLectView('579');"> KINX TEST</a>
                    </td>
                    <td>
                        <a href="javascript:fnActFreeLectView('579');"> 환경보건 최신 이론완성반 [현재 교재 품절]</a>
                    </td>
                    <td>1</td>
                    <td>dbyadmin</td>
                    <td>2020-10-21</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActFreeLectView('579');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActFreeLectDel('579');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="no" value="1" id="no1" />
                            <label for="no1"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">464</td>
                    <td>
                        PC
                    </td>
                    <td>
                        <a href="javascript:fnActFreeLectView('580');"> 20201022무료수강</a>
                    </td>
                    <td>
                        <a href="javascript:fnActFreeLectView('580');"> 평혜림 환경공학 이론완성 1 [수질</a>
                    </td>
                    <td>1</td>
                    <td>yulimgosiy</td>
                    <td>2020-10-22</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActFreeLectView('580');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActFreeLectDel('580');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <span class="checkBox">
                            <input type="checkbox" class="no" name="no" value="1" id="no1" />
                            <label for="no1"><span></span>선택</label>
                        </span>
                    </td>
                    <td class="list-no">464</td>
                    <td>
                        PC
                    </td>
                    <td>
                        <a href="javascript:fnActFreeLectView('580');"> 20201029무료수강(이승헌N@50707371)</a>
                    </td>
                    <td>
                        <a href="javascript:fnActFreeLectView('580');"> 평혜림 환경공학 이론완성 1 [수질</a>
                    </td>
                    <td>1</td>
                    <td>yulimgosiy</td>
                    <td>2020-10-22</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActFreeLectView('580');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActFreeLectDel('580');">삭제</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActFreeLectList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActFreeLectList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActFreeLectList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActFreeLectList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActFreeLectList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActFreeLectList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActFreeLectList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActFreeLectList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActFreeLectList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActFreeLectList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActFreeLectList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActFreeLectList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=47" onclick="fnActFreeLectList(47);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'order' && request()->segment(3) == 'estimate')
<section class="rightCont">
    <div class="rightTitle">
        <h3>견적 등록 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url();">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="ocIdx" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">강좌명</option>
                                        <option value="2">회원명</option>
                                        <option value="3">회원ID</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>견적일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604307111458" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604307111459" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <form name="frm_list" id="frm_list" method="post">
            <table class="commonTable detailTable">
                <caption>
                    견적 등록 리스트
                </caption>
                <colgroup>
                    <col style="width: 40px;" />
                    <col style="width: 50px;" />
                    <col style="width: 160px;" />
                    <col style="width: 60px;" />
                    <col style="width: 60px;" />
                    <col style="width: *;" />
                    <col style="width: 100px;" />
                    <col style="width: 180px;" />
                    <col style="width: 80px;" />
                    <col style="width: 60px;" />
                    <col style="width: 80px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th>번호</th>
                        <th>견적일시</th>
                        <th>종류</th>
                        <th>구분</th>
                        <th>강좌명 or 교재명</th>
                        <th>회원명</th>
                        <th>회원ID</th>
                        <th>결제금액</th>
                        <th>처리상태</th>
                        <th>관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="ocIdx" value="36311" id="no36311" />
                                <label for="no36311"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            6
                        </td>
                        <td>2020-10-21 12:24:00.0</td>
                        <td>
                            단과
                        </td>
                        <td>
                            PC
                        </td>
                        <td class="al">
                            2020 하이스코어 생물 (심화반)
                        </td>
                        <td>이미경</td>
                        <td>delos83</td>
                        <td class="ar chkmoney">150,000</td>
                        <td>결제</td>
                        <td><button type="button" class="commonBtn act_clear" data-no="36311">삭제</button></td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="ocIdx" value="36310" id="no36310" />
                                <label for="no36310"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            5
                        </td>
                        <td>2020-10-21 11:30:00.0</td>
                        <td>
                            단과
                        </td>
                        <td>
                            mobile
                        </td>
                        <td class="al">
                            2020 하이스코어 생물 (심화반)
                        </td>
                        <td>성지호</td>
                        <td>wlgh0503</td>
                        <td class="ar chkmoney">150,000</td>
                        <td>결제</td>
                        <td><button type="button" class="commonBtn act_clear" data-no="36310">삭제</button></td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="ocIdx" value="36302" id="no36302" />
                                <label for="no36302"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            4
                        </td>
                        <td>2020-10-21 10:02:00.0</td>
                        <td>
                            단과
                        </td>
                        <td>
                            PC
                        </td>
                        <td class="al">
                            환경보건 최신 이론완성반 [현재 교재 품절]
                        </td>
                        <td>박민규</td>
                        <td>minggyu119</td>
                        <td class="ar chkmoney">150,000</td>
                        <td>결제</td>
                        <td><button type="button" class="commonBtn act_clear" data-no="36302">삭제</button></td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="ocIdx" value="36246" id="no36246" />
                                <label for="no36246"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            3
                        </td>
                        <td>2020-10-19 15:38:00.0</td>
                        <td>
                            종합
                        </td>
                        <td>
                            mobile
                        </td>
                        <td class="al">
                            이론 및 문제종합반
                        </td>
                        <td>박신영</td>
                        <td>honeybee1009</td>
                        <td class="ar chkmoney">324,000</td>
                        <td>결제</td>
                        <td><button type="button" class="commonBtn act_clear" data-no="36246">삭제</button></td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="ocIdx" value="36223" id="no36223" />
                                <label for="no36223"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            2
                        </td>
                        <td>2020-10-19 10:14:00.0</td>
                        <td>
                            종합
                        </td>
                        <td>
                            mobile
                        </td>
                        <td class="al">
                            전남 보건직 FP반
                        </td>
                        <td>박경희</td>
                        <td>N@25248452</td>
                        <td class="ar chkmoney">300,000</td>
                        <td>결제</td>
                        <td><button type="button" class="commonBtn act_clear" data-no="36223">삭제</button></td>
                    </tr>

                    <tr>
                        <td rowspan="1">
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="ocIdx" value="36222" id="no36222" />
                                <label for="no36222"><span></span>선택</label>
                            </span>
                        </td>
                        <td class="list-no">
                            1
                        </td>
                        <td>2020-10-19 09:44:00.0</td>
                        <td>
                            단과
                        </td>
                        <td>
                            PC
                        </td>
                        <td class="al">
                            2020 하이스코어 생물 (심화반)
                        </td>
                        <td>서연정</td>
                        <td>dus801a</td>
                        <td class="ar chkmoney">150,000</td>
                        <td>결제</td>
                        <td><button type="button" class="commonBtn act_clear" data-no="36222">삭제</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button class="left act_list_del">선택삭제</button>

            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'all')
<section class="rightCont">
    <div class="rightTitle">
        <h3>회원 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMembList('1');">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActExcellDown();">엑셀다운</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_excel">이메일다운로드</button>
        </div>
    </div>
    <div class="realCont">
        <fieldset style="margin-bottom: 4px;">
            <table class="commonTable detailTable">
                <colgroup>
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: *;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>전체가입수</th>
                        <th>남자</th>
                        <th>여자</th>
                        <th>오늘접속수</th>
                        <th>총접속수</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <form name="frm" method="post" class="SearchForm">
            <input name="pageIndex" type="hidden" value="1" />
            <input name="mIdx" type="hidden" />
            <table class="rowTable">
                <colgroup>
                    <col style="width: 9%;" />
                    <col style="width: 350px;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th>이름</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp1" id="searchOp1" value="" />
                            </p>
                        </td>
                        <th>아이디</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp2" id="searchOp2" value="" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>회원구분</th>
                        <td>
                            <p>
                                <select name="searchActgubun" id="searchActgubun">
                                    <option value="">선택</option>

                                    <option value="11">일반회원</option>

                                    <option value="13">합격자</option>

                                    <option value="14">블랙리스트</option>

                                    <option value="21">교수</option>
                                </select>
                            </p>
                        </td>
                        <th>이메일</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp4" id="searchOp4" value="" />
                                <input type="checkbox" class="sch_text" name="searchCnd3" id="searchCnd3" value="Y" style="width: 20px;" />이메일수신동의
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>연락처</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp5" id="searchOp5" value="" />
                                <input type="checkbox" class="sch_text" name="searchCnd2" id="searchCnd2" value="Y" style="width: 20px;" />SMS수신동의
                            </p>
                        </td>
                        <th>주소</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp6" id="searchOp6" value="" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>특이사항</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp7" id="searchOp7" value="" />
                            </p>
                        </td>
                        <th></th>
                        <td>
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <th>가입일</th>
                        <td colspan="3" class="daterange">
                            <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604307156886" /> ~
                            <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604307156887" />
                            <button type="button" class="grybtn setdate today">오늘</button>
                            <button type="button" class="grybtn setdate week">일주일</button>
                            <button type="button" class="grybtn setdate month">한달</button>
                            <button type="button" class="grybtn setdate clear">전체</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <div style="margin: 20px 0 5px 0;">검색결과 총 <span>107474</span>건, <span>1</span>/<span>5374</span>pages</div>

        <fieldset>
            <table class="commonTable detailTable">
                <colgroup>
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: *;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>가입수</th>
                        <th>남자</th>
                        <th>여자</th>
                        <th>오늘접속수</th>
                        <th>접속수</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                        <td class="chkmoney"></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <!-- //sch_list -->
        <form name="listFrm" id="listFrm" method="post">
            <!-- listType05 -->
            <table class="commonTable detailTable">
                <caption class="blind">
                    목록
                </caption>
                <colgroup>
                    <col width="40px" />
                    <col width="50px" />
                    <col width="80px" />
                    <col width="80px" />
                    <col width="*" />
                    <col width="210px" />
                    <col width="120px" />
                    <col width="50px" />
                    <col width="90px" />
                    <col width="50px" />
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th>번호</th>
                        <th>구분</th>
                        <th>이름</th>
                        <th>아이디</th>
                        <th>이메일</th>
                        <th>연락처</th>
                        <th>가입경로</th>
                        <th>가입일</th>
                        <th>관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="checkBox">
                                <input type="hidden" name="mIdx" id="mIdx" value="109540" />
                                <input type="checkbox" class="no" name="searchChk" value="109540" id="no109540" />
                                <label for="no109540"><span></span>선택</label>
                            </span>
                        </td>
                        <td>107474</td>
                        <td>일반회원</td>
                        <td>최혜빈</td>
                        <td><a href="javascript:void(0);" onclick="javascript:fnActMembView(109540);">N@70972318</a></td>
                        <td>chlgpqls6259@naver.com</td>
                        <td>010-6259-1759</td>
                        <td>PC</td>
                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActMembView(109540);">수정</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="checkBox">
                                <input type="hidden" name="mIdx" id="mIdx" value="109539" />
                                <input type="checkbox" class="no" name="searchChk" value="109539" id="no109539" />
                                <label for="no109539"><span></span>선택</label>
                            </span>
                        </td>
                        <td>107473</td>
                        <td>일반회원</td>
                        <td>김한나</td>
                        <td><a href="javascript:void(0);" onclick="javascript:fnActMembView(109539);">poilks1</a></td>
                        <td>poilks123@naver.com</td>
                        <td>010-3324-5755</td>
                        <td>PC</td>
                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActMembView(109539);">수정</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- //listType05 -->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택탈퇴</button>
            <button class="left act_dialog" data-act="mail" style="margin-left: 4px;">메일발송</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActMembList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActMembList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActMembList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActMembList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActMembList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActMembList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActMembList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActMembList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActMembList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActMembList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActMembList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActMembList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=5374" onclick="fnActMembList(5374);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'class')
<section class="rightCont">
    <div class="rightTitle">
        <h3>수강 회원 관리</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <input type="hidden" name="sno" />
            <input type="hidden" name="psno" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 25%;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="o_name">주문자명</option>
                                        <option value="uid">주문자아이디</option>
                                        <option value="jumun">주문번호</option>
                                        <option value="p_name">강좌명</option>
                                        <option value="method">카드종류</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문상태</th>
                            <td>
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp22" value="수강중" checked="" /><label for="searchOp22"><span></span>수강중</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp23" value="수강종료" /><label for="searchOp23"><span></span>수강종료</label> <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요" />
                                    <label for="searchOp21"><span></span>입금요</label> <input type="checkbox" name="searchOp2" id="searchOp24" value="취소" /><label for="searchOp24"><span></span>취소</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp25" value="일시정지" /><label for="searchOp25"><span></span>일시정지</label>
                                </p>
                            </td>
                            <th>강의형태</th>
                            <td>
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp6" id="searchOp60" value="" checked="" class="check-all" /><label for="searchOp60"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp6" id="searchOp61" value="N" /><label for="searchOp61"><span></span>PC</label> <input type="checkbox" name="searchOp6" id="searchOp62" value="Y" />
                                    <label for="searchOp62"><span></span>모바일</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt2" value="" readonly="" id="dp1604307463472" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt2" value="" readonly="" id="dp1604307463473" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>결제방법</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all" /><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장" /><label for="searchOp31"><span></span>무통장</label> <input type="checkbox" name="searchOp3" id="searchOp32" value="카드" />
                                    <label for="searchOp32"><span></span>카드</label> <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌" /><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp34" value="학원결제" /><label for="searchOp34"><span></span>학원결제</label> <input type="checkbox" name="searchOp3" id="searchOp35" value="실강변경" />
                                    <label for="searchOp35"><span></span>실강변경</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney"></strong>개, 검색 <strong>8126</strong>, 1 of 407 page</span>
        </p>
        <table class="commonTable detailTable">
            <caption>
                관리자 회원관리 테이블
            </caption>
            <colgroup>
                <col style="width: 60px;" />
                <col style="width: 80px;" />
                <col style="width: 110px;" />
                <col style="width: 120px;" />
                <col style="width: 60px;" />
                <col />
                <col style="width: 110px;" />
                <col style="width: 80px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">이름</th>
                    <th scope="col">아이디</th>
                    <th scope="col">연락처</th>
                    <th scope="col">구분</th>
                    <th scope="col">수강강의</th>
                    <th scope="col">수강기간</th>
                    <th scope="col">수강상태</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="list-no">8126</td>
                    <td><a href="javascript:fnActMembLectView('313255','271859')">김한나</a></td>
                    <td><a href="javascript:fnActMembLectView('313255','271859')">poilks1</a></td>
                    <td>
                        <div>010-3324-5755</div>
                        <div>010-3324-5755</div>
                    </td>
                    <td><div class="ord-pc">PC</div></td>
                    <td class="al"><a href="javascript:fnActMembLectView('313255','271859')">2021 지역사회간호 (정규이론반)</a></td>
                    <td>
                        2020-10-29<br />
                        2021-01-06
                    </td>
                    <td>수강중</td>
                </tr>

                <tr>
                    <td class="list-no">8125</td>
                    <td><a href="javascript:fnActMembLectView('313253','271858')">김은경</a></td>
                    <td><a href="javascript:fnActMembLectView('313253','271858')">N@39801658</a></td>
                    <td>
                        <div>010-3551-4620</div>
                        <div>010-3551-4620</div>
                    </td>
                    <td><div class="ord-pc">PC</div></td>
                    <td class="al"><a href="javascript:fnActMembLectView('313253','271858')">식품위생직 공무원 - 공개경쟁(5) FP반</a></td>
                    <td>
                        2020-11-02<br />
                        2021-11-01
                    </td>
                    <td>수강중</td>
                </tr>
            </tbody>
        </table>
        <!--//listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=407" onclick="fnActResultList(407);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'professor')
<section class="rightCont">
    <div class="rightTitle">
        <h3>교수 리스트</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActMembList('1');">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:document.frm.action='/boffice/actMemb/downloadActProfExcel.do';document.frm.submit();">엑셀다운</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <input name="pageIndex" type="hidden" value="1" />
            <input name="mIdx" type="hidden" />
            <table class="rowTable">
                <colgroup>
                    <col style="width: 9%;" />
                    <col style="width: 350px;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th>이름</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp1" id="searchOp1" value="" />
                            </p>
                        </td>
                        <th>노출여부</th>
                        <td>
                            <p class="radioStyle">
                                <input type="radio" name="searchOp3" value="" id="searchOp30" /><label for="searchOp30"><span></span>전체</label> <input type="radio" name="searchOp3" value="Y" id="searchOp31" />
                                <label for="searchOp31"><span></span>보임</label> <input type="radio" name="searchOp3" value="N" id="searchOp32" /><label for="searchOp32"><span></span>숨김</label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>아이디</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp2" id="searchOp2" value="" />
                            </p>
                        </td>
                        <th>이메일</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp4" id="searchOp4" value="" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>연락처</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp5" id="searchOp5" value="" />
                            </p>
                        </td>
                        <th>주소</th>
                        <td>
                            <p>
                                <input type="text" class="sch_text" style="width: 90px;" name="searchOp6" id="searchOp6" value="" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>가입일</th>
                        <td colspan="3" class="daterange">
                            <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604307535978" /> ~
                            <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604307535979" />
                            <button type="button" class="grybtn setdate today">오늘</button>
                            <button type="button" class="grybtn setdate week">일주일</button>
                            <button type="button" class="grybtn setdate month">한달</button>
                            <button type="button" class="grybtn setdate clear">전체</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <div style="margin: 20px 0 5px 0;">검색결과 총 <span>50</span>건, <span>1</span>/<span>3</span>pages</div>

        <!-- //sch_list -->
        <form name="listFrm" id="listFrm" method="post">
            <!-- listType05 -->
            <table class="commonTable detailTable">
                <caption class="blind">
                    목록
                </caption>
                <colgroup>
                    <col width="40px" />
                    <col width="50px" />
                    <col width="80px" />
                    <col width="80px" />
                    <col width="*" />
                    <col width="40px" />
                    <col width="210px" />
                    <col width="120px" />
                    <col width="150px" />
                    <col width="40px" />
                    <col width="50px" />
                    <col width="50px" />
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" name="check_all" value="Y" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th>번호</th>
                        <th>순서</th>
                        <th>이름</th>
                        <th>아이디</th>
                        <th>성별</th>
                        <th>이메일</th>
                        <th>연락처</th>
                        <th>전공과목</th>
                        <th>노출</th>
                        <th>강의수</th>
                        <th>관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="checkBox">
                                <input type="hidden" name="mIdx" id="mIdx" value="24502" />
                                <input type="checkbox" class="no" name="searchChk" value="24502" id="no24502" />
                                <label for="no24502"><span></span>선택</label>
                            </span>
                        </td>
                        <td>50</td>
                        <td>
                            <input type="text" name="pSeq" id="pSeq" value="200" class="chknum" style="width: 40px;" maxlength="3" />
                        </td>
                        <td>최정환</td>
                        <td><a href="javascript:void(0);" onclick="javascript:fnActMembView(24502);">petal2002</a></td>
                        <td>남</td>
                        <td>petal2002@hanmail.net</td>
                        <td>010-9455-2484</td>
                        <td>생물</td>
                        <td>보임</td>
                        <td>94</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActMembView(24502);">수정</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="checkBox">
                                <input type="hidden" name="mIdx" id="mIdx" value="45660" />
                                <input type="checkbox" class="no" name="searchChk" value="45660" id="no45660" />
                                <label for="no45660"><span></span>선택</label>
                            </span>
                        </td>
                        <td>49</td>
                        <td>
                            <input type="text" name="pSeq" id="pSeq" value="199" class="chknum" style="width: 40px;" maxlength="3" />
                        </td>
                        <td>오정화</td>
                        <td><a href="javascript:void(0);" onclick="javascript:fnActMembView(45660);">ohcatarsis</a></td>
                        <td>여</td>
                        <td>ohcatarsis@hanmail.net</td>
                        <td>011-295-0895</td>
                        <td>간호관리</td>
                        <td>보임</td>
                        <td>98</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActMembView(45660);">수정</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="checkBox">
                                <input type="hidden" name="mIdx" id="mIdx" value="13342" />
                                <input type="checkbox" class="no" name="searchChk" value="13342" id="no13342" />
                                <label for="no13342"><span></span>선택</label>
                            </span>
                        </td>
                        <td>48</td>
                        <td>
                            <input type="text" name="pSeq" id="pSeq" value="198" class="chknum" style="width: 40px;" maxlength="3" />
                        </td>
                        <td>김희영</td>
                        <td><a href="javascript:void(0);" onclick="javascript:fnActMembView(13342);">yan33</a></td>
                        <td>여</td>
                        <td>yan333@paran.net</td>
                        <td>011-9703-0136</td>
                        <td>지역사회간호,보건행정,공중보건</td>
                        <td>보임</td>
                        <td>223</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActMembView(13342);">수정</button>
                        </td>
                    </tr>
                    <tr style="background-color:#F4F4F4;">	
                        <td>
                            <span class="checkBox">
                                <input type="hidden" name="mIdx" id="mIdx" value="34581">
                                <input type="checkbox" class="no" name="searchChk" value="34581" id="no34581">
                                <label for="no34581"><span></span>선택</label>
                            </span>
                        </td>
                        <td>46</td>
                        <td>
                            
                            
                            <input type="hidden" name="pSeq" id="pSeq" value="196">숨김
                            
                        </td>
                        <td>신현준</td>
                        <td><a href="javascript:void(0);" onclick="javascript:fnActMembView(34581);">shj3015</a></td>
                        <td>남</td>
                        <td>shj3015@dreamwiz.com</td>
                        <td>010-2384-7206</td>
                        <td></td>
                        <td>숨김</td>
                        <td>7</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActMembView(34581);">수정</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- //listType05 -->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택탈퇴</button>
            <button type="button" class="left act_list_del" onclick="javascript:fnActSeqUp(); return false;">순서변경</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActMembList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActMembList(3);return false; " class="pn_page">3</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'delete')
<section class="rightCont">
    <div class="rightTitle">
        <h3>회원 리스트</h3>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <input name="pageIndex" type="hidden" value="1" /> <input name="mIdx" type="hidden" />
            <table class="rowTable">
                <colgroup>
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th>검색어</th>
                        <td>
                            <p>
                                <select name="searchCnd" id="searchCnd">
                                    <option value="all">전체</option>
                                    <option value="name">회원명</option>
                                    <option value="id">아이디</option>
                                </select>
                            </p>
                            <p>
                                <input type="text" name="searchWrd" value="" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th>메모</th>
                        <td><input type="text" name="searchOp2" value="" style="width: 400px;" /></td>
                    </tr>
                    <tr>
                        <th>탈퇴일</th>
                        <td class="daterange">
                            <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604307637748" /> ~
                            <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604307637749" />
                            <button type="button" class="grybtn setdate today">오늘</button>
                            <button type="button" class="grybtn setdate week">일주일</button>
                            <button type="button" class="grybtn setdate month">한달</button>
                            <button type="button" class="grybtn setdate clear">전체</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <div style="margin: 20px 0 5px 0;">검색결과 총 <span>1931</span>건, <span>1</span>/<span>97</span>pages</div>

        <!-- //sch_list -->
        <form name="listFrm" id="listFrm" method="post">
            <!-- listType05 -->
            <table class="commonTable detailTable">
                <caption class="blind">
                    목록
                </caption>
                <colgroup>
                    <col style="width: 60px;" />
                    <col style="width: 120px;" />
                    <col style="width: 120px;" />
                    <col style="width: 50px;" />
                    <col style="width: 120px;" />
                    <col style="width: 220px;" />
                    <col />
                    <col style="width: 200px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">이름</th>
                        <th scope="col">아이디</th>
                        <th scope="col">성별</th>
                        <th scope="col">상태</th>
                        <th scope="col">탈퇴일시</th>
                        <th scope="col">관리메모</th>
                        <th scope="col">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="2593">
                        <td>1931</td>
                        <td>강유미</td>
                        <td>tweity</td>
                        <td>남</td>
                        <td>개인정보삭제</td>
                        <td>2020-10-26 11:18:00.0</td>
                        <td class="al etc"></td>
                        <td class="ar">
                            <button type="button" class="commonBtn act_dialog" data-act="etc">메모</button>
                        </td>
                    </tr>

                    <tr data-no="2592">
                        <td>1930</td>
                        <td>조은지</td>
                        <td>tp319</td>
                        <td>남</td>
                        <td>개인정보삭제</td>
                        <td>2020-10-26 09:00:00.0</td>
                        <td class="al etc"></td>
                        <td class="ar">
                            <button type="button" class="commonBtn act_dialog" data-act="etc">메모</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- //listType05 -->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActMembList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActMembList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActMembList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActMembList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActMembList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActMembList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActMembList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActMembList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActMembList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActMembList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActMembList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActMembList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=97" onclick="fnActMembList(97);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'member' && request()->segment(3) == 'students')
<section class="rightCont">
    <div class="rightTitle">
        <h3>현강생 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon" onclick="javascript:go_write_url();">등록</button>
        </div>
    </div>
    <div class="realCont">
        <!--search-->
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="sIdx" type="hidden" />
                <div id="cont-search" class="search_min">
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
                                    <input type="text" name="sName" value="" />
                                </td>
                                <th>연령/성별</th>
                                <td>
                                    <p>
                                        <select name="sAge" id="">
                                            <option value="">전체</option>

                                            <option value="10">10대</option>

                                            <option value="20">20대</option>

                                            <option value="30">30대</option>

                                            <option value="40">40대</option>

                                            <option value="50">50대</option>

                                            <option value="60">60대</option>

                                            <option value="70">70대</option>

                                            <option value="80">80대</option>
                                        </select>
                                    </p>
                                    <p class="radioStyle">
                                        <input type="radio" name="sSex" id="sex_" value="" /><label for="sex_"><span></span>전체</label> <input type="radio" name="sSex" id="sex_m" value="M" /><label for="sex_m"><span></span>남자</label>
                                        <input type="radio" name="sSex" id="sex_w" value="W" /><label for="sex_w"><span></span>여자</label>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>생일</th>
                                <td>
                                    <p>
                                        <select name="birthdayM" id="" style="width: 50px;">
                                            <option value="">전체</option>

                                            <option value="01">01</option>

                                            <option value="02">02</option>

                                            <option value="03">03</option>

                                            <option value="04">04</option>

                                            <option value="05">05</option>

                                            <option value="06">06</option>

                                            <option value="07">07</option>

                                            <option value="08">08</option>

                                            <option value="09">09</option>

                                            <option value="10">10</option>

                                            <option value="11">11</option>

                                            <option value="12">12</option>
                                        </select>
                                        월
                                    </p>
                                    <p>
                                        <select name="birthdayD" id="" style="width: 50px;">
                                            <option value="">전체</option>

                                            <option value="01">01</option>

                                            <option value="02">02</option>

                                            <option value="03">03</option>

                                            <option value="04">04</option>

                                            <option value="05">05</option>

                                            <option value="06">06</option>

                                            <option value="07">07</option>

                                            <option value="08">08</option>

                                            <option value="09">09</option>

                                            <option value="10">10</option>

                                            <option value="11">11</option>

                                            <option value="12">12</option>

                                            <option value="13">13</option>

                                            <option value="14">14</option>

                                            <option value="15">15</option>

                                            <option value="16">16</option>

                                            <option value="17">17</option>

                                            <option value="18">18</option>

                                            <option value="19">19</option>

                                            <option value="20">20</option>

                                            <option value="21">21</option>

                                            <option value="22">22</option>

                                            <option value="23">23</option>

                                            <option value="24">24</option>

                                            <option value="25">25</option>

                                            <option value="26">26</option>

                                            <option value="27">27</option>

                                            <option value="28">28</option>

                                            <option value="29">29</option>

                                            <option value="30">30</option>

                                            <option value="31">31</option>
                                        </select>
                                        일
                                    </p>
                                </td>
                                <th scope="row">이메일</th>
                                <td>
                                    <input type="text" name="sEmail" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">전화번호</th>
                                <td>
                                    <input type="text" name="sTel" value="" />
                                </td>
                                <th scope="row">휴대폰</th>
                                <td>
                                    <input type="text" name="sHand" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">주소</th>
                                <td>
                                    <input type="text" name="sAdd" value="" style="width: 80%;" />
                                </td>
                                <th scope="row">준비하는 시험</th>
                                <td>
                                    <select name="readyExam" style="width: 180px;">
                                        <option value="">전체</option>

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
                                <td colspan="3">1지망 <input type="text" name="takeArea1" value="" /> 2지망 <input type="text" name="takeArea2" value="" /> 3지망 <input type="text" name="takeArea3" value="" /></td>
                            </tr>
                            <tr>
                                <th scope="row">학력</th>
                                <td>
                                    <select name="sGrade" style="width: 180px;">
                                        <option value="">전체</option>
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
                                    <input type="text" name="sSchool" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">현장강의 수강기간</th>
                                <td>
                                    <input type="text" name="lectureSdate" class="calendar hasDatepicker" value="" readonly="" id="dp1604307682245" /> ~
                                    <input type="text" name="lectureEdate" class="calendar hasDatepicker" value="" readonly="" id="dp1604307682246" />
                                </td>
                                <th scope="row">시험준비기간</th>
                                <td>
                                    <input type="text" name="readyTime" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">소지가산점</th>
                                <td>
                                    <input type="text" name="sScore" value="" /> ~
                                    <input type="text" name="eScore" value="" />
                                </td>
                                <th scope="row">공무원 시험 응시경험</th>
                                <td>
                                    <input type="text" name="examExp" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">가장 어렵게 느끼는 과목</th>
                                <td>
                                    <input type="text" name="diffSubject" value="" style="width: 80%;" />
                                </td>
                                <th scope="row">공무원 시험 계획 기간</th>
                                <td>
                                    <input type="text" name="planTime" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">공부하면서 가장 힘든점</th>
                                <td>
                                    <input type="text" name="sDifficulties" value="" style="width: 80%;" />
                                </td>
                                <th scope="row">나만의 스트레스 해소법</th>
                                <td>
                                    <input type="text" name="sStress" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">본원을 알게 된 경로</th>
                                <td>
                                    <input type="text" name="sPath" value="" style="width: 80%;" />
                                </td>
                                <th scope="row">타강의 수강 경험</th>
                                <td>
                                    <input type="text" name="lectureExp" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">학원에 하고싶은 말</th>
                                <td>
                                    <input type="text" name="sOpinion" value="" style="width: 80%;" />
                                </td>
                                <th scope="row">비고</th>
                                <td>
                                    <input type="text" name="sRemark" value="" style="width: 80%;" />
                                </td>
                            </tr>
                            <tr>
                                <th>등록일</th>
                                <td colspan="3" class="daterange">
                                    <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604307682247" />
                                    ~
                                    <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604307682248" />
                                    <button type="button" class="grybtn setdate today">오늘</button>
                                    <button type="button" class="grybtn setdate week">일주일</button>
                                    <button type="button" class="grybtn setdate month">한달</button>
                                    <button type="button" class="grybtn setdate clear">전체</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="btn_ext">▼ 확장</div>
                <div class="btnsWrap">
                    <button class="">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">검색결과 총 <span>0</span>건, <span></span>/<span>1</span>pages</span>
        </p>
        <form id="listFrm" name="listFrm">
            <input type="hidden" name="act" value="" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 수강생관리 테이블
                </caption>
                <colgroup>
                    <col style="width: 30px;" />
                    <col style="width: 60px;" />
                    <col style="width: 100px;" />
                    <col style="width: 60px;" />
                    <col style="width: 150px;" />
                    <col style="width: 150px;" />
                    <col />
                    <col style="width: 250px;" />
                    <col style="width: 120px;" />
                    <col style="width: 60px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col">번호</th>
                        <th scope="col">이름</th>
                        <th scope="col">성별</th>
                        <th scope="col">전화</th>
                        <th scope="col">휴대폰</th>
                        <th scope="col">이메일</th>
                        <th scope="col">준비하는시험</th>
                        <th scope="col">등록일</th>
                        <th scope="col">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="allmerge">
                        <td colspan="10">자료가 없습니다.</td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//listTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <button class="left act_dialog" data-act="mail" style="margin-left: 4px;">메일발송</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'statistics' && request()->segment(3) == 'video')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 매출 통계</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 25%;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>담당교수</th>
                            <td>
                                <p>
                                    <select name="searchOp4">
                                        <option value="">전체</option>

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
                                </p>
                            </td>
                            <th>유형</th>
                            <td>
                                <p>
                                    <select name="searchOp5" style="width: 70px;">
                                        <option value="">전체</option>
                                        <option value="0">종합</option>
                                        <option value="1">단과</option>
                                    </select>
                                </p>
                                교수선택시 무조건 단과 검색
                            </td>
                        </tr>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="o_name">주문자명</option>
                                        <option value="jumun">주문번호</option>
                                        <option value="p_name">강좌명</option>
                                        <option value="method">카드종류</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문상태</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp20" value="" checked="" class="check-all" /><label for="searchOp20"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요" /><label for="searchOp21"><span></span>입금요</label> <input type="checkbox" name="searchOp2" id="searchOp22" value="수강중" />
                                    <label for="searchOp22"><span></span>수강중</label> <input type="checkbox" name="searchOp2" id="searchOp23" value="수강종료" /><label for="searchOp23"><span></span>수강종료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp24" value="취소" /><label for="searchOp24"><span></span>취소</label> <input type="checkbox" name="searchOp2" id="searchOp25" value="일시정지" />
                                    <label for="searchOp25"><span></span>일시정지</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>입금일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchActSday" value="2020-10-02" readonly="" id="dp1604308057606" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchActEday" value="2020-11-02" readonly="" id="dp1604308057607" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>결제방법</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all" /><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장" /><label for="searchOp31"><span></span>무통장</label> <input type="checkbox" name="searchOp3" id="searchOp32" value="카드" />
                                    <label for="searchOp32"><span></span>카드</label> <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌" /><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp34" value="학원결제" /><label for="searchOp34"><span></span>학원결제</label> <input type="checkbox" name="searchOp3" id="searchOp35" value="실강변경" />
                                    <label for="searchOp35"><span></span>실강변경</label> <input type="checkbox" name="searchOp6" id="searchOp6" value="Y" /><label for="searchOp6"><span></span>모바일강의</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney">148,064</strong>개, 검색 <strong>915</strong>, 1 of 46 page</span>
        </p>
        <fieldset>
            <table class="commonTable detailTable">
                <colgroup>
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>총 주문 수</th>
                        <td class="chkmoney">915</td>
                        <th>총 수강신청</th>
                        <td class="chkmoney">915</td>
                        <th>총 금액</th>
                        <td class="chkmoney">260,056,000</td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <form id="frm_list" name="frm_list">
            <input type="hidden" name="act" value="" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 회원관리 테이블
                </caption>
                <colgroup>
                    <col style="width: 60px;" />
                    <col style="width: 70px;" />
                    <col style="width: 90px;" />
                    <col style="width: 60px;" />
                    <col />
                    <col style="width: 100px;" />
                    <col style="width: 70px;" />
                    <col style="width: 70px;" />
                    <col style="width: 90px;" />
                    <col style="width: 90px;" />
                    <col style="width: 90px;" />
                    <col style="width: 90px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">이름</th>
                        <th scope="col">주문일</th>
                        <th scope="col">수강구분</th>
                        <th scope="col">강좌명</th>
                        <th scope="col">수강료</th>
                        <th scope="col">상태</th>
                        <th scope="col">교수명</th>
                        <th scope="col">결제수단</th>
                        <th scope="col">입금일</th>
                        <th scope="col">수강시작일</th>
                        <th scope="col">수강종료일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="list-no">915</td>
                        <td>김한나</td>
                        <td>2020-10-29</td>
                        <td><div class="ord-pc">PC</div></td>
                        <td class="al">2021 지역사회간호 (정규이론반)</td>
                        <td class="chkmoney">150,000</td>
                        <td>수강중</td>
                        <td>김희영</td>
                        <td>카드_신한</td>
                        <td>2020-10-29</td>
                        <td>2020-10-29</td>
                        <td>2021-01-06</td>
                    </tr>

                    <tr>
                        <td class="list-no">914</td>
                        <td>김은경</td>
                        <td>2020-10-29</td>
                        <td><div class="ord-pc">PC</div></td>
                        <td class="al">식품위생직 공무원 - 공개경쟁(5) FP반</td>
                        <td class="chkmoney">1,700,000</td>
                        <td>수강중</td>
                        <td>종합</td>
                        <td>카드_현대</td>
                        <td>2020-10-29</td>
                        <td>2020-11-02</td>
                        <td>2021-11-01</td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=46" onclick="fnActResultList(46);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'statistics' && request()->segment(3) == 'extension')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 연장 신청 리스트</h3>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="searchOp1" type="hidden" value="" />
                <input name="sno" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">주문자명</option>
                                        <option value="2">주문번호</option>
                                        <option value="3">입금자명</option>
                                        <option value="4">아이디</option>
                                        <option value="5">강좌명</option>
                                        <option value="6">관리자메모</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문상태</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp20" value="" checked="" class="check-all" /><label for="searchOp20"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요" /><label for="searchOp21"><span></span>입금요</label> <input type="checkbox" name="searchOp2" id="searchOp22" value="수강중" />
                                    <label for="searchOp22"><span></span>수강중</label> <input type="checkbox" name="searchOp2" id="searchOp23" value="수강종료" /><label for="searchOp23"><span></span>수강종료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp24" value="취소" /><label for="searchOp24"><span></span>취소</label> <input type="checkbox" name="searchOp2" id="searchOp25" value="일시정지" />
                                    <label for="searchOp25"><span></span>일시정지</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308142994" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308142995" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>결제방법</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all" /><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장입금" /><label for="searchOp31"><span></span>무통장</label> <input type="checkbox" name="searchOp3" id="searchOp32" value="카드" />
                                    <label for="searchOp32"><span></span>카드</label> <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌" /><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp34" value="학원결제" /><label for="searchOp34"><span></span>학원결제</label> <input type="checkbox" name="searchOp3" id="searchOp35" value="실강변경" />
                                    <label for="searchOp35"><span></span>실강변경</label> <input type="checkbox" name="searchOp3" id="searchOp36" value="모바일강의" /><label for="searchOp35"><span></span>모바일강의</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney">2,975</strong>개, 검색 <strong>2975</strong>, 1 of 149 page</span>
        </p>
        <fieldset>
            <table class="commonTable detailTable">
                <colgroup>
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>총 주문 수</th>
                        <td class="chkmoney">2,975</td>
                        <th>총 신청</th>
                        <td class="chkmoney">2,975</td>
                        <th>총 금액</th>
                        <td class="chkmoney">100,000</td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <form name="frm_list" id="frm_list" method="post">
            <table class="commonTable detailTable">
                <caption>
                    동영상 연장 신청 리스트
                </caption>
                <colgroup>
                    <col style="width: 40px;" />
                    <col style="width: 80px;" />
                    <col style="width: 100px;" />
                    <col style="width: 50px;" />
                    <col style="width: *;" />
                    <col style="width: 90px;" />
                    <col style="width: 100px;" />
                    <col style="width: 100px;" />
                    <col style="width: 80px;" />
                    <col style="width: 80px;" />
                    <col style="width: 100px;" />
                    <col style="width: 100px;" />
                    <col style="width: 100px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>이름</th>
                        <th>주문일시</th>
                        <th>수강구분</th>
                        <th>강좌명</th>
                        <th>연장신청일수</th>
                        <th>연장료</th>
                        <th>입금</th>
                        <th>결제수단</th>
                        <th>주문상태</th>
                        <th>입금일</th>
                        <th>수강종료일</th>
                        <th>연장 후 종료일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="list-no">
                            2975
                        </td>
                        <td>
                            이경은
                        </td>
                        <td>2020-10-29</td>
                        <td>PC</td>
                        <td class="al">영양교사 - [2021] 서답형 문제풀이</td>
                        <td>30</td>
                        <td class="ar chkmoney">100,000</td>
                        <td class="ar chkmoney"></td>
                        <td>무통장입금</td>
                        <td>입금요</td>
                        <td></td>
                        <td>2020-10-29</td>
                        <td>2020-11-28</td>
                    </tr>

                    <tr>
                        <td class="list-no">
                            2974
                        </td>
                        <td>
                            전승희
                        </td>
                        <td>2020-10-29</td>
                        <td>PC</td>
                        <td class="al">간호사 - 이론 및 문제종합반</td>
                        <td>30</td>
                        <td class="ar chkmoney">100,000</td>
                        <td class="ar chkmoney"></td>
                        <td>카드_신한</td>
                        <td>수강중</td>
                        <td>2020-10-29</td>
                        <td>2020-10-29</td>
                        <td>2020-11-28</td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//menuTable-->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=149" onclick="fnActResultList(149);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'statistics' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서적 매출 통계</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td>
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="o_name">주문자명</option>
                                        <option value="jumun">주문번호</option>
                                        <option value="p_name">강좌명</option>
                                        <option value="method">카드종류</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문상태</th>
                            <td>
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp2" id="searchOp20" value="" checked="" class="check-all" /><label for="searchOp20"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp21" value="입금요" /><label for="searchOp21"><span></span>입금요</label> <input type="checkbox" name="searchOp2" id="searchOp22" value="결제완료" />
                                    <label for="searchOp22"><span></span>결제완료</label> <input type="checkbox" name="searchOp2" id="searchOp23" value="배송준비중" /><label for="searchOp23"><span></span>배송준비중</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp24" value="배송중" /><label for="searchOp24"><span></span>배송중</label> <input type="checkbox" name="searchOp2" id="searchOp25" value="배송완료" />
                                    <label for="searchOp25"><span></span>배송완료</label> <input type="checkbox" name="searchOp2" id="searchOp26" value="거래완료" /><label for="searchOp26"><span></span>거래완료</label>
                                    <input type="checkbox" name="searchOp2" id="searchOp27" value="주문취소" /><label for="searchOp27"><span></span>주문취소</label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>주문일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="2020-10-02" readonly="" id="dp1604308184525" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="2020-11-02" readonly="" id="dp1604308184526" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>입금일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchActSday" value="2020-10-02" readonly="" id="dp1604308184527" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchActEday" value="2020-11-02" readonly="" id="dp1604308184528" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                        <tr>
                            <th>결제방법</th>
                            <td colspan="3">
                                <p class="checkBox">
                                    <input type="checkbox" name="searchOp3" id="searchOp30" value="" checked="" class="check-all" /><label for="searchOp30"><span></span>전체</label>
                                    <input type="checkbox" name="searchOp3" id="searchOp31" value="무통장" /><label for="searchOp31"><span></span>무통장</label> <input type="checkbox" name="searchOp3" id="searchOp32" value="카드" />
                                    <label for="searchOp32"><span></span>카드</label> <input type="checkbox" name="searchOp3" id="searchOp33" value="가상계좌" /><label for="searchOp33"><span></span>가상계좌</label>
                                    <input type="checkbox" name="searchOp6" id="searchOp6" value="Y" /><label for="searchOp6"><span></span>교재포함무료</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney">98,480</strong>개, 검색 <strong>281</strong>, 1 of 15 page</span>
        </p>
        <fieldset>
            <table class="commonTable detailTable">
                <colgroup>
                    <col style="width: 9%;" />
                    <col style="width: 41%;" />
                    <col style="width: 9%;" />
                    <col style="width: *;" />
                </colgroup>
                <thead>
                    <tr>
                        <th>총 주문 수</th>
                        <td class="chkmoney">281</td>
                        <th>총 결제완료 금액</th>
                        <td class="chkmoney">9,797,500</td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <form id="frm_list" name="frm_list">
            <input type="hidden" name="act" value="" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 회원관리 테이블
                </caption>
                <colgroup>
                    <col style="width: 60px;" />
                    <col style="width: 70px;" />
                    <col style="width: 90px;" />
                    <col style="width: 60px;" />
                    <col />
                    <col style="width: 100px;" />
                    <col style="width: 70px;" />
                    <col style="width: 90px;" />
                    <col style="width: 90px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">이름</th>
                        <th scope="col">주문일</th>
                        <th scope="col">구분</th>
                        <th scope="col">상품명</th>
                        <th scope="col">금액</th>
                        <th scope="col">상태</th>
                        <th scope="col">결제수단</th>
                        <th scope="col">입금일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="list-no">281</td>
                        <td>김한나</td>
                        <td>2020-10-29</td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td class="al">2021 원픽 지역사회간호1권</td>
                        <td>
                            <span><span class="chkmoney">34,200</span></span>
                        </td>
                        <td>결제완료</td>
                        <td>카드_신한</td>
                        <td>
                            2020-10-29
                        </td>
                    </tr>

                    <tr>
                        <td class="list-no">280</td>
                        <td>김은경</td>
                        <td>2020-10-29</td>
                        <td><div class="ord-pc">PC</div></td>
                        <td class="al">
                            2021 김지연 식품위생 이론서 [최신판]1권/식품화학개론 최신판 수험서 [강의용]1권/2021 김철민 국어 이론서1권/오! 영어 [공무원]1권/박동현 공무원영어 기본완성1권/2021 강 한국사 (이론서 및 서브)1권/교재포함:신경향
                            식품화학개론 기출 및 단원별 문제완성1권/교재포함:신경향 식품화학개론 실전 모의고사반1권/교재포함:2021 국어 기출분석 및 단원별 문제특강1권/교재포함:2021 국어 실전 모의고사1권/교재포함:2021 영어 기출분석 및 단원별
                            문제특강1권/교재포함:2021 영어 실전 모의고사1권/교재포함:2021 한국사 기출분석 및 단원별 문제특강1권/교재포함:2021 한국사 실전 모의고사1권/교재포함:2021 식품위생 기출분석 및 단원별 문제특강1권/교재포함:2021
                            식품위생 실전 모의고사1권
                        </td>
                        <td>
                            <span><span class="chkmoney">187,200</span></span>
                        </td>
                        <td>결제완료</td>
                        <td>카드_현대</td>
                        <td>
                            2020-10-29
                        </td>
                    </tr>

                    <tr>
                        <td class="list-no">279</td>
                        <td>김미령</td>
                        <td>2020-10-29</td>
                        <td><div class="ord-mobile">mobile</div></td>
                        <td class="al">하이스코어 확인학습 교재 [공무원 생물 심화반 강의용]1권/공무원 생물 기출 700제1권</td>
                        <td>
                            <span><span class="chkmoney">40,500</span></span>
                        </td>
                        <td>배송완료</td>
                        <td>카드_신한</td>
                        <td>
                            2020-10-29
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=15" onclick="fnActResultList(15);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'statistics' && request()->segment(3) == 'professor')
@elseif(request()->segment(2) == 'statistics' && request()->segment(3) == 'learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학습게시판 답변현황</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" id="frm_search" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 25%;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>보기형식</th>
                            <td>
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp1" id="type1" value="1" checked="" /><label for="type1"><span></span>강좌별</label> <input type="radio" name="searchOp1" id="type2" value="2" />
                                    <label for="type2"><span></span>교수별</label>
                                </p>
                            </td>
                            <th>담당교수</th>
                            <td>
                                <p>
                                    <select name="searchOp2">
                                        <option value="">전체</option>

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
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="all">전체</option>
                                        <option value="m.M_NAME">교수명</option>
                                        <option value="l.MV_SUBJECT" selected="">강좌명</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="2020-10-02" readonly="" id="dp1604308226150" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="2020-11-02" readonly="" id="dp1604308226151" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <p class="total">
            <span class="total_left">검색 <strong>53</strong>, 1 of 3 page</span>
        </p>

        <!--listTable-->
        <table class="commonTable detailTable">
            <caption>
                관리자 회원관리 테이블
            </caption>
            <colgroup>
                <col style="width: 60px;" />
                <col style="width: 180px;" />
                <col />
                <col style="width: 150px;" />
                <col style="width: 150px;" />
                <col style="width: 150px;" />
                <col style="width: 150px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">강좌등록일시</th>
                    <th scope="col">강좌명</th>
                    <th scope="col">교수명</th>
                    <th scope="col">질문수</th>
                    <th scope="col">답변수</th>
                    <th scope="col">답변률</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="list-no">53</td>
                    <td class="al">2020-10-06 14:46:00</td>
                    <td class="al">2021 영양교사 실전모의고사 (김)</td>
                    <td>김지연</td>
                    <td class="ar chkmoney">54</td>
                    <td class="ar chkmoney">34</td>
                    <td class="ar">62.96</td>
                </tr>

                <tr>
                    <td class="list-no">52</td>
                    <td class="al">2020-10-06 14:46:00</td>
                    <td class="al">2021 영양교사 실전모의고사 (이)</td>
                    <td>이경연</td>
                    <td class="ar chkmoney">115</td>
                    <td class="ar chkmoney">58</td>
                    <td class="ar">50.43</td>
                </tr>
            </tbody>
        </table>
        <!--listTable-->

        <!--listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
            </ul>
            <button class="right act_excel">엑셀전환</button>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'video_qa')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상강의 Q&amp;A</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0009" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308387124" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308387125" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>5480</span>건, <span>1</span>/<span>274</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0009" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0009" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    동영상강의 Q&amp;A 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="40px">답변</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="116579" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116579" id="no116579" />
                                <label for="no116579"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            5480
                        </td>
                        <td>116579</td>

                        <td>완료</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116579', 'BBS_0009');">
                                동영상 강의 화질
                            </a>
                        </td>

                        <td>김채원</td>
                        <td class="chkmoney">6</td>

                        <td>2020-10-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116579');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116579');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116583" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116583" id="no116583" />
                                <label for="no116583"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            5479
                        </td>
                        <td>116579</td>

                        <td></td>

                        <td class="al">
                            <i class="reply" style="margin-left: 6px;"></i>

                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116583', 'BBS_0009');">
                                [RE]동영상 강의 화질
                            </a>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">3</td>

                        <td>2020-10-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116583');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116583');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=274" onclick="fnListArticle(274);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>서점 Q&amp;A</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0010" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308440466" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308440467" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>695</span>건, <span>1</span>/<span>35</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0010" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0010" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    서점 Q&amp;A 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="40px">답변</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="116562" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116562" id="no116562" />
                                <label for="no116562"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            695
                        </td>
                        <td>116562</td>

                        <td>완료</td>

                        <td class="al">
                            <div class="board-book-info">
                                <img src="/cmm/fms/getImage.do?atchFileId=FILE_000000000025267&amp;fileSn=0" class="img" style="float: left; width: 30px; height: 40px; margin-right: 4px;" />

                                하이스코어 확인학습 교재 [공무원 생물 심화반 강의용] 하이스코어 확인학습 교재 [공무원 생물 심화반 강의용]
                            </div>

                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116562', 'BBS_0010');">
                                교재변경 질문이요
                            </a>
                        </td>

                        <td>정은지</td>
                        <td class="chkmoney">2</td>

                        <td>2020-10-27</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116562');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116562');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116584" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116584" id="no116584" />
                                <label for="no116584"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            694
                        </td>
                        <td>116562</td>

                        <td></td>

                        <td class="al">
                            <i class="reply" style="margin-left: 6px;"></i>

                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116584', 'BBS_0010');">
                                [RE]교재변경 질문이요
                            </a>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">1</td>

                        <td>2020-10-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116584');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116584');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=35" onclick="fnListArticle(35);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'one')
<section class="rightCont">
    <div class="rightTitle">
        <h3>1:1문의</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0011" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>분류</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchOp6" id="searchOp6">
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
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308490464" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308490465" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>23401</span>건, <span>1</span>/<span>1171</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0011" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0011" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    1:1문의 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="80px">분류</th>

                        <th scope="col" width="40px">답변</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="116690" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116690" id="no116690" />
                                <label for="no116690"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            23401
                        </td>
                        <td>116690</td>

                        <td>탈퇴신청</td>

                        <td>대기</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116690', 'BBS_0011');">
                                탈퇴신청
                            </a>
                        </td>

                        <td>홍주연</td>
                        <td class="chkmoney">0</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116690');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116690');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116677" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116677" id="no116677" />
                                <label for="no116677"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            23400
                        </td>
                        <td>116677</td>

                        <td>동영상강의문의</td>

                        <td>완료</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116677', 'BBS_0011');">
                                면접특강관련 질문드립니다
                            </a>
                        </td>

                        <td>최미나</td>
                        <td class="chkmoney">2</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116677');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116677');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116687" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116687" id="no116687" />
                                <label for="no116687"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            23399
                        </td>
                        <td>116677</td>

                        <td>동영상강의문의</td>

                        <td></td>

                        <td class="al">
                            <i class="reply" style="margin-left: 6px;"></i>

                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116687', 'BBS_0011');">
                                [RE]면접특강관련 질문드립니다
                            </a>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">1</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116687');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116687');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=1171" onclick="fnListArticle(1171);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'free')
<section class="rightCont">
    <div class="rightTitle">
        <h3>자유게시판</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0012" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308535425" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308535426" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>4140</span>건, <span>1</span>/<span>207</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0012" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0012" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    자유게시판 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="40px">답변</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="94061" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="94061" id="no94061" />
                                <label for="no94061"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>94061</td>

                        <td>대기</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('94061', 'BBS_0012');">
                                <b><font color="red"> [공지] 기기초기화 문의 </font></b>
                            </a>
                            <b><font color="red"> </font></b>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">1,034</td>

                        <td>2020-02-20</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('94061');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('94061');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="50450" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="50450" id="no50450" />
                                <label for="no50450"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>50450</td>

                        <td>대기</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('50450', 'BBS_0012');">
                                <b><font color="green"> ☆ 대방열림고시학원 인기 추천 카페 안내 ☆ </font></b>
                            </a>
                            <b><font color="green"> </font></b>
                        </td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">9,671</td>

                        <td>2020-01-02</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('50450');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('50450');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116647" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116647" id="no116647" />
                                <label for="no116647"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            4138
                        </td>
                        <td>116647</td>

                        <td>완료</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116647', 'BBS_0012');">
                                예전에 들었던 기기

                                <font color="black"><i class="newText">NEW</i></font>
                            </a>
                        </td>

                        <td>이해서</td>
                        <td class="chkmoney">15</td>

                        <td>2020-10-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116647');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116647');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116660" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116660" id="no116660" />
                                <label for="no116660"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            4137
                        </td>
                        <td>116647</td>

                        <td></td>

                        <td class="al">
                            <i class="reply" style="margin-left: 6px;"></i>

                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116660', 'BBS_0012');">
                                [RE]예전에 들었던 기기

                                <font color="black"><i class="newText">NEW</i></font>
                            </a>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">3</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116660');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116660');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=207" onclick="fnListArticle(207);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'video_learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>동영상 학습 게시판</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0013" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>강의명</th>
                            <td colspan="3">
                                <p>
                                    <input name="nttCat" type="text" size="200" class="shc_text" value="" maxlength="200" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308573973" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308573974" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>27314</span>건, <span>1</span>/<span>1366</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0013" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0013" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    동영상 학습 게시판 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="230px">강의명</th>

                        <th scope="col" width="40px">답변</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="116689" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116689" id="no116689" />
                                <label for="no116689"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            27314
                        </td>
                        <td>116689</td>

                        <td>[2021 문제] 식사요법 및 실습</td>

                        <td>대기</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116689', 'BBS_0013');">
                                교수님 질문 있습니다
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>김민준</td>
                        <td class="chkmoney">0</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116689');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116689');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116687" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116687" id="no116687" />
                                <label for="no116687"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            27313
                        </td>
                        <td>116687</td>

                        <td>[2021 문제] 식품학</td>

                        <td>대기</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116687', 'BBS_0013');">
                                유화제 질문입니다
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>조희연</td>
                        <td class="chkmoney">4</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116687');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116687');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116671" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116671" id="no116671" />
                                <label for="no116671"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            27312
                        </td>
                        <td>116671</td>

                        <td>[2021 문제] 고급영양학 및 생리,생화학</td>

                        <td>대기</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116671', 'BBS_0013');">
                                질문드립니다.
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>김은혜</td>
                        <td class="chkmoney">1</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116671');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116671');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=1366" onclick="fnListArticle(1366);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'cs_center' && request()->segment(3) == 'faq')
<section class="rightCont">
    <div class="rightTitle">
        <h3>FAQ</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0014" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>분류</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchOp6" id="searchOp6">
                                        <option value="">선택</option>

                                        <option value="11">동영상강의</option>

                                        <option value="12">인터넷서점</option>

                                        <option value="13">회원정보</option>

                                        <option value="14">주문/결제</option>

                                        <option value="15">기타</option>

                                        <option value="16">안내문</option>
                                    </select>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp7" id="searchOp70" value="" checked="" />
                                    <label for="searchOp70"><span></span>전체</label>
                                    <input type="radio" name="searchOp7" id="searchOp72" value="N" />
                                    <label for="searchOp72"><span></span>보임</label>
                                    <input type="radio" name="searchOp7" id="searchOp71" value="Y" />
                                    <label for="searchOp71"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308633880" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308633881" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>3</span>건, <span>1</span>/<span>1</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0014" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0014" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    FAQ 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="40px">순서</th>

                        <th scope="col" width="80px">분류</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="80px">순서변경</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="40px">노출</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="103622" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103622" id="no103622" />
                                <label for="no103622"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            3
                        </td>
                        <td>103622</td>

                        <td>1</td>

                        <td>인터넷서점</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103622', 'BBS_0014');">
                                교재 배송에 소요되는 시간입니다.
                            </a>
                        </td>

                        <td>
                            <button type="button" class="commonBtn act_ord" data-dir="up" value="1"><i class="upBtn">위</i></button>
                            <button type="button" class="commonBtn act_ord" data-dir="down" value="1"><i class="downBtn">아래</i></button>
                        </td>

                        <td>이현주</td>
                        <td class="chkmoney">0</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103622');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103622');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="103610" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103610" id="no103610" />
                                <label for="no103610"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            2
                        </td>
                        <td>103610</td>

                        <td>1</td>

                        <td>회원정보</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103610', 'BBS_0014');">
                                비밀번호 찾기가 안되시는 경우
                            </a>
                        </td>

                        <td>
                            <button type="button" class="commonBtn act_ord" data-dir="up" value="1"><i class="upBtn">위</i></button>
                            <button type="button" class="commonBtn act_ord" data-dir="down" value="1"><i class="downBtn">아래</i></button>
                        </td>

                        <td>이현주</td>
                        <td class="chkmoney">0</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103610');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103610');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="103608" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103608" id="no103608" />
                                <label for="no103608"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            1
                        </td>
                        <td>103608</td>

                        <td>2</td>

                        <td>동영상강의</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103608', 'BBS_0014');">
                                나의강의실 내 학습자료실 자료가 다운로드 안되는 경우
                            </a>
                        </td>

                        <td>
                            <button type="button" class="commonBtn act_ord" data-dir="up" value="2"><i class="upBtn">위</i></button>
                            <button type="button" class="commonBtn act_ord" data-dir="down" value="2"><i class="downBtn">아래</i></button>
                        </td>

                        <td>이현주</td>
                        <td class="chkmoney">0</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103608');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103608');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'news')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학원소식</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0002" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308660897" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308660898" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>888</span>건, <span>1</span>/<span>45</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0002" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0002" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    학원소식 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="116595" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116595" id="no116595" />
                                <label for="no116595"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>116595</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116595', 'BBS_0002');">
                                <b>
                                    <font color="black">
                                        의료기술직공무원 합격! 본 내용 구석구석을 꼼꼼히 ...

                                        <font color="black"><i class="newText">NEW</i></font>
                                    </font>
                                </b>
                            </a>
                            <b><font color="black"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>이과장</td>
                        <td class="chkmoney">69</td>

                        <td>2020-10-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116595');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116595');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116202" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116202" id="no116202" />
                                <label for="no116202"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>116202</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116202', 'BBS_0002');">
                                <b>
                                    <font color="black">
                                        서울시간호직공무원 합격! 2021 EBS간호직공무원...

                                        <font color="black"><i class="newText">NEW</i></font>
                                    </font>
                                </b>
                            </a>
                            <b><font color="black"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>이과장</td>
                        <td class="chkmoney">256</td>

                        <td>2020-10-23</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116202');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116202');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34217" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34217" id="no34217" />
                                <label for="no34217"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34217</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34217', 'BBS_0002');">
                                <b><font color="black"> 2020 대방열림고시학원 국가면허 특강안내! [영양... </font></b>
                            </a>
                            <b><font color="black"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">6,864</td>

                        <td>2020-03-02</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34217');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34217');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34199" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34199" id="no34199" />
                                <label for="no34199"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34199</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34199', 'BBS_0002');">
                                <b>
                                    <font color="black"> 대방열림고시학원 2020.11월 강의 안내^^<i class="newText">NEW</i></font>
                                </b>
                            </a>
                            <b> </b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">12,395</td>

                        <td>2020-10-20</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34199');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34199');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34125" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34125" id="no34125" />
                                <label for="no34125"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34125</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34125', 'BBS_0002');">
                                <b>
                                    <font color="black">
                                        ★ 2021 공무원 시험합격을 위한 동영상 강의 풀...

                                        <font color="black"><i class="newText">NEW</i></font>
                                    </font>
                                </b>
                            </a>
                            <b><font color="black"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">51,423</td>

                        <td>2020-10-16</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34125');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34125');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34106" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34106" id="no34106" />
                                <label for="no34106"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34106</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34106', 'BBS_0002');">
                                <b>
                                    <font color="black">
                                        2021 기술직공무원 이론반 안내 [간호직,보건진료...

                                        <font color="black"><i class="newText">NEW</i></font>
                                    </font>
                                </b>
                            </a>
                            <b><font color="black"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">77,715</td>

                        <td>2020-10-16</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34106');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34106');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="103621" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103621" id="no103621" />
                                <label for="no103621"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            869
                        </td>
                        <td>103621</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103621', 'BBS_0002');">
                                2020년 6월 대방열림고시학원 공무원 모의고사&lt;무료&gt; 안내!
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>윳대리</td>
                        <td class="chkmoney">316</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103621');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103621');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=45" onclick="fnListArticle(45);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'notice')
<section class="rightCont">
    <div class="rightTitle">
        <h3>공지사항</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0001" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>분류</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchOp6" id="searchOp6">
                                        <option value="">선택</option>

                                        <option value="11">전체공지</option>

                                        <option value="12">긴급공지</option>

                                        <option value="13">직렬공지</option>
                                    </select>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308760316" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308760317" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>42</span>건, <span>1</span>/<span>3</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0001" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0001" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    공지사항 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="80px">분류</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="101183" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="101183" id="no101183" />
                                <label for="no101183"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>101183</td>

                        <td></td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('101183', 'BBS_0001');">
                                공휴일은 대방열림고시학원 전체 휴무입니다.^^ [학원 운영시간 안내]
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>이과장</td>
                        <td class="chkmoney">715</td>

                        <td>2020-05-05</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('101183');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('101183');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34229" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34229" id="no34229" />
                                <label for="no34229"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34229</td>

                        <td></td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34229', 'BBS_0001');">
                                대방열림고시학원 학원 운영방침
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">21,509</td>

                        <td>2020-02-06</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34229');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34229');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34228" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34228" id="no34228" />
                                <label for="no34228"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34228</td>

                        <td></td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34228', 'BBS_0001');">
                                대방열림고시학원 강사채용 안내
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">24,133</td>

                        <td>2020-01-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34228');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34228');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="115293" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="115293" id="no115293" />
                                <label for="no115293"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            39
                        </td>
                        <td>115293</td>

                        <td>전체공지</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('115293', 'BBS_0001');">
                                <b><font color="#FF007F"> 모바일 강의 수강하고 계신 분들 중 '권한이 없... </font></b>
                            </a>
                            <b><font color="#FF007F"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>이과장</td>
                        <td class="chkmoney">217</td>

                        <td>2020-10-13</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('115293');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('115293');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="111447" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="111447" id="no111447" />
                                <label for="no111447"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            38
                        </td>
                        <td>111447</td>

                        <td>긴급공지</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('111447', 'BBS_0001');">
                                [긴급공지] 코로나 사태로 인하여 2020.8.31 ~ 2020.9.5 현장강의는 비대면 ...
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>이과장</td>
                        <td class="chkmoney">446</td>

                        <td>2020-08-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('111447');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('111447');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'passing')
<section class="rightCont">
    <div class="rightTitle">
        <h3>REAL 합격수기</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0016" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp7" id="searchOp70" value="" checked="" />
                                    <label for="searchOp70"><span></span>전체</label>
                                    <input type="radio" name="searchOp7" id="searchOp72" value="N" />
                                    <label for="searchOp72"><span></span>보임</label>
                                    <input type="radio" name="searchOp7" id="searchOp71" value="Y" />
                                    <label for="searchOp71"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308851047" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308851048" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>974</span>건, <span>1</span>/<span>49</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0016" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0016" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    REAL 합격수기 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="40px">노출</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="34888" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34888" id="no34888" />
                                <label for="no34888"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34888</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34888', 'BBS_0016');">
                                <b>
                                    <font color="purple">
                                        대방열림고시학원의 합격수기가 다른점! [필독] &lt;...

                                        <font color="black"><i class="newText">NEW</i></font>
                                    </font>
                                </b>
                            </a>
                            <b><font color="purple"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">8,221</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-10-16</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34888');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34888');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34727" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34727" id="no34727" />
                                <label for="no34727"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34727</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34727', 'BBS_0016');">
                                <b>
                                    <font color="blue">
                                        ★★★ 가짜 합격수기에 속지 않는 방법! ★★★
                                        <!--...
									
									
									
									<font color="black"-->
                                        <i class="newText">NEW</i>
                                    </font>
                                </b>
                            </a>
                            <b> </b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">26,693</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-10-16</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34727');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34727');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="34308" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="34308" id="no34308" />
                                <label for="no34308"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>34308</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('34308', 'BBS_0016');">
                                <b>
                                    <font color="red">
                                        영양사 및 위생사, 간호사국가고시 합격수기는...^^ ...

                                        <font color="black"><i class="newText">NEW</i></font>
                                    </font>
                                </b>
                            </a>
                            <b><font color="red"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">28,925</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-10-16</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('34308');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('34308');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116691" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116691" id="no116691" />
                                <label for="no116691"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            971
                        </td>
                        <td>116691</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116691', 'BBS_0016');">
                                이미지 업로드 테스트입니다~

                                <font color="black"><i class="newText">NEW</i></font>
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>이과장</td>
                        <td class="chkmoney">1</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-10-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116691');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116691');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=49" onclick="fnListArticle(49);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'origin')
<section class="rightCont">
    <div class="rightTitle">
        <h3>본원출신 합격자</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0017" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp7" id="searchOp70" value="" checked="" />
                                    <label for="searchOp70"><span></span>전체</label>
                                    <input type="radio" name="searchOp7" id="searchOp72" value="N" />
                                    <label for="searchOp72"><span></span>보임</label>
                                    <input type="radio" name="searchOp7" id="searchOp71" value="Y" />
                                    <label for="searchOp71"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308905793" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308905794" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>338</span>건, <span>1</span>/<span>17</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0017" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0017" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    본원출신 합격자 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="80px">지역</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="40px">노출</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="35202" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="35202" id="no35202" />
                                <label for="no35202"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>35202</td>

                        <td>강원</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('35202', 'BBS_0017');">
                                <b><font color="black">★ 본원출신 합격자 게시판은 ★ </font></b>
                            </a>
                            <b><font color="black"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td></td>
                        <td class="chkmoney">9,585</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2011-12-21</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('35202');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('35202');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="73121" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="73121" id="no73121" />
                                <label for="no73121"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            337
                        </td>
                        <td>73121</td>

                        <td></td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('73121', 'BBS_0017');">
                                ★★★ 2018 전국 지방직 공무원 시험 본원출신 합격자 현황 ★★★
                            </a>
                        </td>

                        <td align="center"></td>

                        <td></td>
                        <td class="chkmoney">5,275</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2019-05-10</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('73121');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('73121');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="35311" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="35311" id="no35311" />
                                <label for="no35311"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            336
                        </td>
                        <td>35311</td>

                        <td>admin</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('35311', 'BBS_0017');">
                                ★★★ 2017 전국 지방직 공무원 시험 본원출신 합격자 현황 ★★★
                            </a>
                        </td>

                        <td align="center"></td>

                        <td></td>
                        <td class="chkmoney">7,907</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2018-02-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('35311');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('35311');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="35310" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="35310" id="no35310" />
                                <label for="no35310"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            335
                        </td>
                        <td>35310</td>

                        <td>admin</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('35310', 'BBS_0017');">
                                ★★★ 2016 전국 지방직 공무원 시험 본원출신 합격자 현황 ★★★
                            </a>
                        </td>

                        <td align="center"></td>

                        <td></td>
                        <td class="chkmoney">7,435</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2017-03-07</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('35310');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('35310');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="35309" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="35309" id="no35309" />
                                <label for="no35309"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            334
                        </td>
                        <td>35309</td>

                        <td>admin</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('35309', 'BBS_0017');">
                                ★★★ 2015 전국 지방직 공무원 시험 본원출신 합격자 현황 ★★★
                            </a>
                        </td>

                        <td align="center"></td>

                        <td></td>
                        <td class="chkmoney">9,456</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2015-11-26</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('35309');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('35309');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="35308" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="35308" id="no35308" />
                                <label for="no35308"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            333
                        </td>
                        <td>35308</td>

                        <td>admin</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('35308', 'BBS_0017');">
                                ★★★ 2014 전국 지방직 공무원 시험 본원출신 합격자 현황 ★★★
                            </a>
                        </td>

                        <td align="center"></td>

                        <td></td>
                        <td class="chkmoney">12,363</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2014-12-26</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('35308');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('35308');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=17" onclick="fnListArticle(17);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'announcement')
<section class="rightCont">
    <div class="rightTitle">
        <h3>시험공고</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0004" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604308981056" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604308981057" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>5346</span>건, <span>1</span>/<span>268</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0004" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0004" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    시험공고 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="38834" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="38834" id="no38834" />
                                <label for="no38834"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>38834</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('38834', 'BBS_0004');">
                                <b><font color="#FFL493"> 2020 전국 공무원 시험공고 한눈에 보기! [... </font></b>
                            </a>
                            <b><font color="#FFL493"> </font></b>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">100,641</td>

                        <td>2015-01-21</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('38834');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('38834');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116599" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116599" id="no116599" />
                                <label for="no116599"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            5345
                        </td>
                        <td>116599</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116599', 'BBS_0004');">
                                2020년도 제4회 강원도 보건연구사 공무원 임용시험 시행계획 공고

                                <font color="black"><i class="newText">NEW</i></font>
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025835" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="2" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000258350">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025835','0')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>

                                    <tr id="fileObjFILE_0000000000258351">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025835','1')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">21</td>

                        <td>2020-10-28</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116599');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116599');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116522" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116522" id="no116522" />
                                <label for="no116522"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            5344
                        </td>
                        <td>116522</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116522', 'BBS_0004');">
                                2020년 제3회 강원도 동해시 의료기술직(방사선)공무원 경력경쟁 임용시험 필기시험 일시·...
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025740" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000257400">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025740','0')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">14</td>

                        <td>2020-10-27</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116522');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116522');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=268" onclick="fnListArticle(268);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'competition')
<section class="rightCont">
    <div class="rightTitle">
        <h3>경쟁률 및 합격선</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0005" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309024154" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309024155" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>1213</span>건, <span>1</span>/<span>61</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0005" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0005" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    경쟁률 및 합격선 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="40135" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="40135" id="no40135" />
                                <label for="no40135"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>40135</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('40135', 'BBS_0005');">
                                '경쟁률 및 합격선' 게시판은...^^
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">18,882</td>

                        <td>2018-04-30</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('40135');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('40135');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116426" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116426" id="no116426" />
                                <label for="no116426"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            1212
                        </td>
                        <td>116426</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116426', 'BBS_0005');">
                                2020년도 제1회 전라남도 장흥군 간호직공무원 경력경쟁임용시험 필기시험 합격선
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025706" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000257060">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025706','0')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">40</td>

                        <td>2020-10-26</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116426');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116426');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=61" onclick="fnListArticle(61);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'examinee')
<section class="rightCont">
    <div class="rightTitle">
        <h3>수험가 뉴스</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0005" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309024154" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309024155" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>1213</span>건, <span>1</span>/<span>61</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0005" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0005" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    경쟁률 및 합격선 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="40135" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="40135" id="no40135" />
                                <label for="no40135"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>40135</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('40135', 'BBS_0005');">
                                '경쟁률 및 합격선' 게시판은...^^
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>yulimgosi</td>
                        <td class="chkmoney">18,882</td>

                        <td>2018-04-30</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('40135');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('40135');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="116426" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="116426" id="no116426" />
                                <label for="no116426"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            1212
                        </td>
                        <td>116426</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('116426', 'BBS_0005');">
                                2020년도 제1회 전라남도 장흥군 간호직공무원 경력경쟁임용시험 필기시험 합격선
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000025706" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000257060">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000025706','0')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">40</td>

                        <td>2020-10-26</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('116426');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('116426');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=61" onclick="fnListArticle(61);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'learning')
<section class="rightCont">
    <div class="rightTitle">
        <h3>학습자료실</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0007" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>강의명</th>
                            <td colspan="3">
                                <p>
                                    <input name="nttCat" type="text" size="200" class="shc_text" value="" maxlength="200" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309095772" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309095773" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>6272</span>건, <span>1</span>/<span>314</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0007" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0007" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    학습자료실 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="230px">강의명</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="115492" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="115492" id="no115492" />
                                <label for="no115492"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>115492</td>

                        <td>2021 영양교사 실전모의고사 (최)</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('115492', 'BBS_0007');">
                                [필독] 실전 모의고사 시험지 업로드 시간 안내
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>윳대리</td>
                        <td class="chkmoney">392</td>

                        <td>2020-10-15</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('115492');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('115492');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="111168" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="111168" id="no111168" />
                                <label for="no111168"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            <i class="notice">공지</i>
                        </td>
                        <td>111168</td>

                        <td>(42회 위생사 합격) 공중보건학, 위생관계법규</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('111168', 'BBS_0007');">
                                [42회 위생사] 위생관계법규
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">662</td>

                        <td>2020-08-26</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('111168');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('111168');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnListArticle(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnListArticle(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnListArticle(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnListArticle(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnListArticle(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=314" onclick="fnListArticle(314);return false; " class="pn_next">마지막</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'errata')
<section class="rightCont">
    <div class="rightTitle">
        <h3>정오표</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0008" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp7" id="searchOp70" value="" checked="" />
                                    <label for="searchOp70"><span></span>전체</label>
                                    <input type="radio" name="searchOp7" id="searchOp72" value="N" />
                                    <label for="searchOp72"><span></span>보임</label>
                                    <input type="radio" name="searchOp7" id="searchOp71" value="Y" />
                                    <label for="searchOp71"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309188346" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309188347" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>122</span>건, <span>1</span>/<span>7</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0008" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0008" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    정오표 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="40px">노출</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="100086" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="100086" id="no100086" />
                                <label for="no100086"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            122
                        </td>
                        <td>100086</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('100086', 'BBS_0008');">
                                2020 공무원 화학 단계별 문제풀이 정오표
                            </a>
                        </td>

                        <td align="center"></td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">113</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-04-22</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('100086');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('100086');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="98711" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="98711" id="no98711" />
                                <label for="no98711"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            121
                        </td>
                        <td>98711</td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('98711', 'BBS_0008');">
                                2020 하이스코어 생물 교재 정오표
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000012821" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000128211">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000012821','1')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>쏭쏭쏭</td>
                        <td class="chkmoney">127</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-04-08</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('98711');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('98711');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnListArticle(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnListArticle(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnListArticle(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnListArticle(7);return false; " class="pn_page">7</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'bookstore')
<section class="rightCont">
    <div class="rightTitle">
        <h3>기본 설정 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0019" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1" selected="">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309283196" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309283197" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>0</span>건, <span>1</span>/<span>1</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0019" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0019" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    인터넷서점 공지사항 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'community' && request()->segment(3) == 'practice')
<section class="rightCont">
    <div class="rightTitle">
        <h3>모의고사 다운로드</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0018" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">제목</option>
                                        <option value="2">내용</option>
                                        <option value="3">작성자</option>
                                        <option value="4">작성일</option>
                                        <option value="0">전체</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp7" id="searchOp70" value="" checked="" />
                                    <label for="searchOp70"><span></span>전체</label>
                                    <input type="radio" name="searchOp7" id="searchOp72" value="N" />
                                    <label for="searchOp72"><span></span>보임</label>
                                    <input type="radio" name="searchOp7" id="searchOp71" value="Y" />
                                    <label for="searchOp71"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309314867" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309314868" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>45</span>건, <span>1</span>/<span>3</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0018" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0018" />
            <table class="commonTable detailTable">
                <caption class="blind">
                    모의고사 다운로드 목록
                </caption>
                <thead>
                    <tr>
                        <th scope="col" width="30px">
                            <span class="checkBox">
                                <input type="checkbox" class="check_all" data-check="no" id="check_all" />
                                <label for="check_all"><span></span>선택</label>
                            </span>
                        </th>
                        <th scope="col" width="60px">번호</th>
                        <th scope="col" width="70px">일련번호</th>

                        <th scope="col" width="160px">직렬</th>
                        <th scope="col" width="60px">직렬범위</th>

                        <th scope="col" width="*">제목</th>

                        <th scope="col" width="60px">첨부파일</th>

                        <th scope="col" width="80px">작성자</th>
                        <th scope="col" width="60px">조회수</th>

                        <th scope="col" width="40px">노출</th>

                        <th scope="col" width="90px">작성일</th>
                        <th scope="col" width="100px">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="114469" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="114469" id="no114469" />
                                <label for="no114469"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            45
                        </td>
                        <td>114469</td>

                        <td>식품위생직 공무원</td>
                        <td>
                            전체
                        </td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('114469', 'BBS_0018');">
                                식품미생물 모의고사 문제입니다.^^
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000024499" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="2" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000244990">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000024499','0')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>

                                    <tr id="fileObjFILE_0000000000244991">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000024499','1')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>이과장</td>
                        <td class="chkmoney">197</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-09-29</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('114469');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('114469');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="103498" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103498" id="no103498" />
                                <label for="no103498"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            44
                        </td>
                        <td>103498</td>

                        <td>간호직 공무원</td>
                        <td>
                            수강회원
                        </td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103498', 'BBS_0018');">
                                2020년 6월 간호직 모의고사
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000016737" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000167371">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000016737','1')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">178</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103498');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103498');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="103497" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103497" id="no103497" />
                                <label for="no103497"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            43
                        </td>
                        <td>103497</td>

                        <td>보건직 공무원</td>
                        <td>
                            수강회원
                        </td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103497', 'BBS_0018');">
                                2020년 6월 보건직 모의고사
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000016736" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000167361">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000016736','1')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">95</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103497');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103497');">삭제</button>
                        </td>
                    </tr>

                    <tr data-no="103496" class="view-y">
                        <td>
                            <span class="checkBox">
                                <input type="checkbox" class="no" name="searchChk" value="103496" id="no103496" />
                                <label for="no103496"><span></span>선택</label>
                            </span>
                        </td>
                        <td>
                            42
                        </td>
                        <td>103496</td>

                        <td>의료기술직 공무원</td>
                        <td>
                            수강회원
                        </td>

                        <td class="al">
                            <a href="javascript:void(0);" onclick="javascript:fnViewArticle('103496', 'BBS_0018');">
                                2020년 6월 의료기술직 모의고사
                            </a>
                        </td>

                        <td align="center">
                            <input type="hidden" name="atchFileId" value="FILE_000000000016735" />
                            <input type="hidden" name="fileSn" />
                            <input type="hidden" name="fileListCnt" id="fileListCnt" value="1" />
                            <table>
                                <tbody>
                                    <tr id="fileObjFILE_0000000000167351">
                                        <td style="border: 0; margin: 0; padding: 0;">
                                            <a href="javascript:fnCommonDownFile('FILE_000000000016735','1')">
                                                <img src="/img/file2.jpg" alt="첨부파일" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>윳대리</td>
                        <td class="chkmoney">106</td>

                        <td style="color: #ff0000;">보임</td>

                        <td>2020-06-01</td>
                        <td>
                            <button type="button" class="commonBtn" onclick="javascript:fnActEdit('103496');">수정</button>
                            <button type="button" class="commonBtn" onclick="javascript:fnActDel('103496');">삭제</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnListArticle(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnListArticle(3);return false; " class="pn_page">3</a></li>
            </ul>
            <button type="button" class="right act_write" onclick="javascript:go_write_url(); return false;">글쓰기</button>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'default')
<section class="rightCont">
    <div class="rightTitle">
        <h3>인터넷서점 공지사항</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn act_ins" onclick="fnListArticle('1'); return false;">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:go_write_url(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="bbsId" value="BBS_0019" />
                <input type="hidden" name="nttId" value="0" />
                <input type="hidden" name="authFlag" value="" />
                <input name="pageIndex" type="hidden" value="1" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="1">아이디</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>

        <div class="totalWrap clear">
            <p class="total">검색결과 총 <span>0</span>건, <span>1</span>/<span>1</span>pages</p>
        </div>

        <!-- listType05 -->
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" value="BBS_0019" />
            <input type="hidden" name="nttId" />
        </form>
        <form name="listFrm" id="listFrm" method="post">
            <input type="hidden" name="bbsId" value="BBS_0019" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 관리 테이블
                </caption>
                <colgroup>
                    <col style="width: 10%;" />
                    <col style="width: *;" />
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                    <col style="width: 20%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">아이디</th>
                        <th scope="col">단말기 제한 대수</th>
                        <th scope="col">다운로드 제한 횟수</th>
                        <th scope="col">관리</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-no="" class="row-add" style="display: none;">
                        <td style="">추가</td>
                        <td><input type="text" class="" name="user_id" value="" maxlength="16" style="width: 150px;" /></td>
                        <td><input type="text" class="chknum" name="device_cnt" value="" maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="" maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">등록</button> <button type="button" class="commonBtn act_cancel">취소</button></td>
                    </tr>
            
                    <tr data-no="1" class="default">
                        <td>1</td>
                        <td>기본설정</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="3         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button></td>
                    </tr>
            
                    <tr data-no="86" class="">
                        <td>2</td>
                        <td>psssu3</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="3         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="87" class="">
                        <td>3</td>
                        <td>bomi9656</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="3         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="92" class="">
                        <td>4</td>
                        <td>junlang</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="104" class="">
                        <td>5</td>
                        <td>glaaos52</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="6         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="105" class="">
                        <td>6</td>
                        <td>helloodi</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="106" class="">
                        <td>7</td>
                        <td>hoyoung0308</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="107" class="">
                        <td>8</td>
                        <td>tps317</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="6         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="108" class="">
                        <td>9</td>
                        <td>soekz1004</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="109" class="">
                        <td>10</td>
                        <td>N@47860458</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="6         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="110" class="">
                        <td>11</td>
                        <td>lovely27</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="111" class="">
                        <td>12</td>
                        <td>a9800</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="112" class="">
                        <td>13</td>
                        <td>arom47</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="114" class="">
                        <td>14</td>
                        <td>seotaji78</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="5         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
            
                    <tr data-no="115" class="">
                        <td>15</td>
                        <td>cldl129</td>
                        <td><input type="text" class="chknum" name="device_cnt" value="2         " maxlength="5" style="width: 50px;" /> 대</td>
                        <td><input type="text" class="chknum" name="down_cnt" value="4         " maxlength="5" style="width: 50px;" /> 회</td>
                        <td><button type="button" class="commonBtn act_save">수정</button> <button type="button" class="commonBtn act_del">삭제</button></td>
                    </tr>
                </tbody>
            </table>
            
        </form>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <button type="button" class="left act_list_del" onclick="javascript:fnActDelChk(); return false;">선택삭제</button>
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'status')
<section class="rightCont">
    <div class="rightTitle">
        <h3>접속 현황</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td>
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="user_id">아이디</option>
                                        <option value="device_id">기기정보</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309523536" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309523537" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney">711,996</strong>개, 검색 <strong>711996</strong>, of 47467 page</span>
        </p>
        <form id="frm_list" name="frm_list">
            <input type="hidden" name="act" value="" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 메뉴관리 테이블
                </caption>
                <colgroup>
                    <col width="60" />
                    <col width="150" />
                    <col />
                    <col width="150" />
                    <col width="100" />
                    <col width="100" />
                    <col width="200" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">아이디</th>
                        <th scope="col">기기정보</th>
                        <th scope="col">OS</th>
                        <th scope="col">APP</th>
                        <th scope="col">State</th>
                        <th scope="col">접속일시</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="list-no">711996</td>
                        <td>N@12863118</td>
                        <td>38dd0acd-cdde-39a3-8186-541558c50841</td>
                        <td>Android 9</td>
                        <td>1.1.4</td>
                        <td>normal</td>
                        <td>
                            2020-10-29 11:35
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=47467" onclick="fnActResultList(47467);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'download')
<section class="rightCont">
    <div class="rightTitle">
        <h3>강의 다운로드 현황</h3>
    </div>
    <div class="realCont">

    <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1">
              <fieldset>
                  <table class="rowTable">
                      <colgroup>
                          <col style="width:9%">
                          <col style="width:*">
                      </colgroup>
                      <tbody>
                          <tr>
                              <th>검색어</th>
                              <td>
                                <p>
                                <select name="searchCnd" id="searchCnd">
                                    <option value="user_id">아이디</option>
                                    <option value="device_id">기기정보</option>
                                </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                          </tr>
                          <tr>
                              <th>등록일</th>
                              <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309563556">
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309563557">
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              <div class="btnsWrap">
                  <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
              </div>
              </fieldset>
          </form>
      <!--//search-->

      <!--listTable-->
      <p class="total">
              <span class="total_left">총 <strong class="chkmoney">37,745</strong>개, 검색 <strong>37745</strong>,  of 2517 page</span>
          </p>
        <form id="frm_list" name="frm_list">
        <input type="hidden" name="act" value="">
        <table class="commonTable detailTable">
              <caption>관리자 메뉴관리 테이블</caption>
              <colgroup>
                <col width="60">
                <col width="150">
                  <col>
                <col width="150">
                <col width="100">
                  <col>
                <col width="200">
              </colgroup>
              <thead>
                  <tr>
                    <th scope="col">번호</th>
                      <th scope="col">아이디</th>
                      <th scope="col">기기정보</th>
                      <th scope="col">OS</th>
                      <th scope="col">상품아이디</th>
                      <th scope="col">URL</th>
                      <th scope="col">다운로드일시</th>
                  </tr>
              </thead>
              <tbody>
                
                  <tr>
                    <td class="list-no">37745</td>
                      <td>dhgudrjs</td>
                      <td>77394C4763B74898A7E3D8394AA69A74</td>
                      <td>iOS 13.5.1</td>
                      <td>154544</td>
                      <td class="al">http://yulimgosizonep.xcache.kinxcdn.com/daebang/2020_eron/phr/phr_191031_3_M.mp4</td>
                      <td>
                          2020-10-29
                          11:34
                    </td>
                  </tr>                 
                  
              </tbody>
          </table>
        </form>
      <!--//listTable-->

      <!--pagenation-->
      <div class="pageNation clear">
        <ul class="pagenation">
        <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li><li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li><li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li><li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li><li class="next text-ir"><a href="?pageIndex=2517" onclick="fnActResultList(2517);return false; " class="pn_next">마지막</a></li>

        </ul>
      </div>
      <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'download_delete')
<section class="rightCont">
    <div class="rightTitle">
        <h3>강의 다운로드 삭제 현황</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td>
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="user_id">아이디</option>
                                        <option value="device_id">기기정보</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309603967" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309603968" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney">2,784</strong>개, 검색 <strong>2784</strong>, of 186 page</span>
        </p>
        <form id="frm_list" name="frm_list">
            <input type="hidden" name="act" value="" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 메뉴관리 테이블
                </caption>
                <colgroup>
                    <col width="60" />
                    <col width="150" />
                    <col />
                    <col width="100" />
                    <col />
                    <col width="200" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">아이디</th>
                        <th scope="col">기기정보</th>
                        <th scope="col">상품아이디</th>
                        <th scope="col">URL</th>
                        <th scope="col">삭제일시</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="list-no">2784</td>
                        <td>rlais3</td>
                        <td>80c958badd61c89cff967b5127f6dad9</td>
                        <td>156924</td>
                        <td class="al">http://yulimgosi.xcache.kinxcdn.com/daebang/2021_yedu/kjys/kjys_200522_2_M.mp4</td>
                        <td>
                            2020-10-18 23:42
                        </td>
                    </tr>

                    <tr>
                        <td class="list-no">2783</td>
                        <td>rlais3</td>
                        <td>80c958badd61c89cff967b5127f6dad9</td>
                        <td>156923</td>
                        <td class="al">http://yulimgosi.xcache.kinxcdn.com/daebang/2021_yedu/kjys/kjys_200522_1_M.mp4</td>
                        <td>
                            2020-10-18 23:42
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li>
                <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li>
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li>
                <li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li>
                <li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li>
                <li class="next text-ir"><a href="?pageIndex=186" onclick="fnActResultList(186);return false; " class="pn_next">마지막</a></li>
            </ul>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'device')
<section class="rightCont">
    <div class="rightTitle">
        <h3>단말기 승인 현황</h3>
    </div>
    <div class="realCont">

    <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1">
              <fieldset>
                  <table class="rowTable">
                      <colgroup>
                          <col style="width:9%">
                          <col style="width:*">
                      </colgroup>
                      <tbody>
                          <tr>
                              <th>검색어</th>
                              <td>
                                <p>
                                <select name="searchCnd" id="searchCnd">
                                    <option value="user_id">아이디</option>
                                    <option value="device_id">기기정보</option>
                                </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력">
                                </p>
                            </td>
                          </tr>
                          <tr>
                              <th>등록일</th>
                              <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309648546">
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309648547">
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              <div class="btnsWrap">
                  <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
              </div>
              </fieldset>
          </form>
      <!--//search-->

      <!--listTable-->
      <p class="total">
              <span class="total_left">총 <strong class="chkmoney">2,640</strong>개, 검색 <strong>2640</strong>,  of 176 page</span>
          </p>
        <form id="frm_list" name="frm_list">
        <input type="hidden" name="act" value="">
        <table class="commonTable detailTable">
              <caption>관리자 메뉴관리 테이블</caption>
              <caption>관리자 메뉴관리 테이블</caption>
              <colgroup>
                <col width="60">
                <col width="150">
                  <col>
                <col width="150">
                <col width="100">
                <col width="100">
              </colgroup>
              <thead>
                  <tr>
                    <th scope="col">번호</th>
                      <th scope="col">아이디</th>
                      <th scope="col">기기정보</th>
                      <th scope="col">승인일시</th>
                      <th scope="col">상태</th>
                      <th scope="col">관리</th>
                  </tr>
              </thead>
              <tbody>
                
                  <tr data-no="29758">
                    <td class="list-no">2640</td>
                      <td>kimhy0227</td>
                      <td>61755858758B4E5899393F6D69E67850</td>
                      <td>
                          2020-10-29
                          09:46
                    </td>
                      <td>
                          
                          <font color="blue">정상</font>
                      </td>
                      <td><button type="button" class="commonBtn act_del">삭제</button></td>
                  </tr>
                  
                  <tr data-no="29757">
                    <td class="list-no">2639</td>
                      <td>kimhy0227</td>
                      <td>9dbfa3fc-34fd-378a-89a1-f739ea7191aa</td>
                      <td>
                          2020-10-29
                          09:42
                    </td>
                      <td>
                          
                          <font color="blue">정상</font>
                      </td>
                      <td><button type="button" class="commonBtn act_del">삭제</button></td>
                  </tr>
              </tbody>
          </table>
        </form>
      <!--//listTable-->

      <!--pagenation-->
      <div class="pageNation clear">
        <ul class="pagenation">
        <li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">처음</a></li><li class="prev text-ir"><a href="?pageIndex=1" onclick="fnActResultList(1);return false; " class="pn_prev">이전</a></li><li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=2" onclick="fnActResultList(2);return false; " class="pn_page">2</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=3" onclick="fnActResultList(3);return false; " class="pn_page">3</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=4" onclick="fnActResultList(4);return false; " class="pn_page">4</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=5" onclick="fnActResultList(5);return false; " class="pn_page">5</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=6" onclick="fnActResultList(6);return false; " class="pn_page">6</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=7" onclick="fnActResultList(7);return false; " class="pn_page">7</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=8" onclick="fnActResultList(8);return false; " class="pn_page">8</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=9" onclick="fnActResultList(9);return false; " class="pn_page">9</a></li><li class="pn_paging_set pn_paging"><a href="?pageIndex=10" onclick="fnActResultList(10);return false; " class="pn_page">10</a></li><li class="next text-ir"><a href="?pageIndex=11" onclick="fnActResultList(11);return false; " class="pn_next">다음</a></li><li class="next text-ir"><a href="?pageIndex=176" onclick="fnActResultList(176);return false; " class="pn_next">마지막</a></li>

        </ul>
      </div>
      <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'mobile' && request()->segment(3) == 'device_delete')
<section class="rightCont">
    <div class="rightTitle">
        <h3>단말기 해제 현황</h3>
    </div>
    <div class="realCont">
        <!--search-->
        <form class="SearchForm" name="frm" method="post">
            <input type="hidden" name="pageIndex" value="1" />
            <fieldset>
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td>
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="user_id">아이디</option>
                                        <option value="device_id">기기정보</option>
                                    </select>
                                </p>
                                <p>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td colspan="3" class="daterange">
                                <input class="calendar hasDatepicker" type="text" name="searchSdt" value="" readonly="" id="dp1604309673742" />
                                ~
                                <input class="calendar hasDatepicker" type="text" name="searchEdt" value="" readonly="" id="dp1604309673743" />
                                <button type="button" class="grybtn setdate today">오늘</button>
                                <button type="button" class="grybtn setdate week">일주일</button>
                                <button type="button" class="grybtn setdate month">한달</button>
                                <button type="button" class="grybtn setdate clear">전체</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActResultList(1);">검색</button>
                </div>
            </fieldset>
        </form>
        <!--//search-->

        <!--listTable-->
        <p class="total">
            <span class="total_left">총 <strong class="chkmoney">0</strong>개, 검색 <strong>0</strong>, of 1 page</span>
        </p>
        <form id="frm_list" name="frm_list">
            <input type="hidden" name="act" value="" />
            <table class="commonTable detailTable">
                <caption>
                    관리자 메뉴관리 테이블
                </caption>
                <colgroup>
                    <col width="60" />
                    <col width="150" />
                    <col />
                    <col width="200" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">아이디</th>
                        <th scope="col">기기정보</th>
                        <th scope="col">해제일시</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="allmerge">
                        <td colspan="4">해당하는 자료가 없습니다.</td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!--//listTable-->

        <!--pagenation-->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
        </div>
        <!--//pagenation-->
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'main_banner')
<section class="rightCont">
    <div class="rightTitle">
        <h3>메인 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnActBannerList('1');">검색</button>
            <button type="button" class="colorBtn rightbluebtn plusIcon" onclick="javascript:fnActBannerWrite();">신규등록</button>
            <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnTranSeqAuto();">순서자동입력</button>
            <button type="button" class="colorBtn rightbluebtn" onclick="javascript:fnTranSeqSave();">순서변경적용</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="idx" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>분류</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchOp1" id="searchOp1" class="searchSelect">
                                        <option value="">분류선택</option>

                                        <option value="11">[학원]메인(상단)</option>

                                        <option value="35">[학원]메인추천직강</option>

                                        <option value="36">[동영상]추천동영상강의</option>

                                        <option value="12">[학원]메인(중간)</option>

                                        <option value="13">[학원]메인(우측첫번째)</option>

                                        <option value="14">[학원]메인(우측두번째)</option>

                                        <option value="15">[학원]메인(우측사이드)</option>

                                        <option value="16">[학원] Top</option>

                                        <option value="17">[동영상] Top</option>

                                        <option value="18">[서점] Top</option>

                                        <option value="19">[학원] 계좌</option>

                                        <option value="20">[동영상] 계좌</option>

                                        <option value="21">[동영상] 교수별</option>

                                        <option value="22">[동영상] 인기동영상</option>

                                        <option value="23">[동영상]메인(우측사이트)</option>

                                        <option value="24">[동영상]메인(중간)</option>

                                        <option value="25">[모바일]메인(상단)</option>

                                        <option value="33">[서점]메인(중간)</option>

                                        <option value="26">[모바일]메인(하단)</option>

                                        <option value="34">[서점]메인(왼쪽)</option>

                                        <option value="27">[모바일]공통메뉴(하단)</option>

                                        <option value="28">[모바일]동영상강의(상단)</option>

                                        <option value="29">[모바일]동영상강의(하단)</option>

                                        <option value="30">[모바일]학원현장강의(상단)</option>

                                        <option value="31">[모바일]학원현장강의(하단)</option>

                                        <option value="32">[모바일]인터넷서점(하단)</option>
                                    </select>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" id="searchCnd">
                                        <option value="actName">배너명</option>
                                        <option value="actUrl">링크URL</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>노출여부</th>
                            <td colspan="3">
                                <p class="radioStyle">
                                    <input type="radio" name="searchOp3" value="" id="searchOp30" /><label for="searchOp30"><span></span>전체</label> <input type="radio" name="searchOp3" value="Y" id="searchOp31" />
                                    <label for="searchOp31"><span></span>보임</label> <input type="radio" name="searchOp3" value="N" id="searchOp32" /><label for="searchOp32"><span></span>숨김</label>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>
        <!-- //sch_list -->

        <div class="ask mt_50">총 <span>69</span>건</div>

        <!-- listType05 -->
        <div id="sortWrapHead">
            <table class="commonTable" style="border: 0;">
                <tbody>
                    <tr>
                        <th scope="col" class="first_line" style="width: 50px;">번호</th>
                        <th scope="col" class="first_line" style="width: 160px;">분류</th>
                        <th scope="col" class="first_line" style="width: 140px;">배너</th>
                        <th scope="col" class="first_line" style="width: 140px;">제목</th>
                        <th scope="col" class="first_line" style="width: auto;">링크URL</th>
                        <th scope="col" class="first_line" style="width: 100px;">순서</th>
                        <th scope="col" class="first_line" style="width: 40px;">클릭수</th>
                        <th scope="col" class="first_line" style="width: 60px;">노출여부</th>
                        <th scope="col" class="first_line" style="width: 120px;">관리</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <form name="frmEquip" id="frmEquip" method="post">
            <div id="sortWrap" class="ui-sortable">
                <div data-order="1" class="ui-sortable-handle">
                    <table class="commonTable" style="border: 0;">
                        <tbody>
                            <tr>
                                <td style="width: 50px; border: none;"><input type="hidden" name="idx" value="44" />1</td>
                                <td style="width: 160px; border: none;">[학원]메인추천직강</td>
                                <td style="width: 140px; border: none;"><img src="/cmm/fms/getImage.do?atchFileId=&amp;fileSn=0" style="width: 140px; height: 40px;" /></td>
                                <td style="width: 140px; border: none;">2021 서울시간호직 풀패키지반</td>
                                <td style="width: auto; border: none;">https://028234700.tistory.com/328...</td>
                                <td style="width: 100px; border: none;"><input type="text" name="tSeq" value="1" style="width: 50px; text-align: center; ime-mode: disabled;" maxlength="4" class="chknum" /></td>
                                <td style="width: 40px; border: none;">0</td>
                                <td style="width: 60px; border: none;">노출</td>
                                <td style="width: 120px; border: none;">
                                    <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActBannerView('44');"><span>수정</span></a>
                                    <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActBannerModify('44');"><span>삭제</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div data-order="2" class="ui-sortable-handle">
                    <table class="commonTable" style="border: 0;">
                        <tbody>
                            <tr>
                                <td style="width: 50px; border: none;"><input type="hidden" name="idx" value="49" />2</td>
                                <td style="width: 160px; border: none;">[동영상]추천동영상강의</td>
                                <td style="width: 140px; border: none;"><img src="/cmm/fms/getImage.do?atchFileId=&amp;fileSn=0" style="width: 140px; height: 40px;" /></td>
                                <td style="width: 140px; border: none;">2021 서울시간호직공무원 풀패키지반</td>
                                <td style="width: auto; border: none;">/front/Lecture/movingList.do?leCode=LE00...</td>
                                <td style="width: 100px; border: none;"><input type="text" name="tSeq" value="1" style="width: 50px; text-align: center; ime-mode: disabled;" maxlength="4" class="chknum" /></td>
                                <td style="width: 40px; border: none;">0</td>
                                <td style="width: 60px; border: none;">노출</td>
                                <td style="width: 120px; border: none;">
                                    <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActBannerView('49');"><span>수정</span></a>
                                    <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActBannerModify('49');"><span>삭제</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        <!-- //listType05 -->
    </div>
</section>
<style type="text/css">

    #sortWrap div {
        margin: 5px;
        padding: 3px;
        background-color: #FFF;
        border: 1px solid #ddd;
        cursor: ns-resize;
    }
    #sortWrapHead {
        margin: 5px;
        padding: 3px;
        background-color: #EEE;
        border: 1px solid #ddd;
        color:#333;
    }
    #sortWrap td, #sortWrapHead td {
        text-align:center;
        font-size:14px;
    }
    </style>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'code')
<section class="rightCont">
    <div class="rightTitle">
        <h3>코드 관리</h3>
        <div class="btnWrap"></div>
    </div>
    <div class="realCont">
        <div class="contents_zone" style="width: 1250px;">
            <div style="width: 1250px; text-align: left; overflow: hidden;">
                <!-- 코드 리스트 S -->
                <div style="float: left; width: 370px;">
                    <div class="btnWrap" style="float: right; margin-bottom: 5px;">
                        <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnCodeIdAdd(); return false;">등록</button>
                    </div>
                    <table style="width: 370px;" class="commonTable detailTable">
                        <caption style="display: none;">
                            공통코드 목록
                        </caption>
                        <thead>
                            <tr>
                                <th class="title" width="5%" scope="col" nowrap="">순번</th>
                                <th class="title" width="18%" scope="col" nowrap="">코드ID</th>
                                <th class="title" width="*" scope="col" nowrap="">코드ID명</th>
                                <th class="title" width="10%" scope="col" nowrap="">사용여부</th>
                                <th class="title" width="10%" scope="col" nowrap="">수정</th>
                                <th class="title" width="10%" scope="col" nowrap="">삭제</th>
                            </tr>
                        </thead>
                        <tbody id="codeIdAddRowPoint">
                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />1</td>
                                <td class="lt_text3" nowrap="" id="codeB1" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM041');">COM041</td>
                                <td class="lt_text" nowrap="" id="codeC1">관리메뉴</td>
                                <td class="lt_text3" nowrap="" id="codeD1">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ1" onclick="javascript:fnCodeIdEdit('1');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX1" onclick="javascript:fnCodeIdSave('1');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />2</td>
                                <td class="lt_text3" nowrap="" id="codeB2" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM042');">COM042</td>
                                <td class="lt_text" nowrap="" id="codeC2">메뉴대분류</td>
                                <td class="lt_text3" nowrap="" id="codeD2">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ2" onclick="javascript:fnCodeIdEdit('2');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX2" onclick="javascript:fnCodeIdSave('2');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />3</td>
                                <td class="lt_text3" nowrap="" id="codeB3" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM043');">COM043</td>
                                <td class="lt_text" nowrap="" id="codeC3">관리자구분</td>
                                <td class="lt_text3" nowrap="" id="codeD3">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ3" onclick="javascript:fnCodeIdEdit('3');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX3" onclick="javascript:fnCodeIdSave('3');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />4</td>
                                <td class="lt_text3" nowrap="" id="codeB4" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM044');">COM044</td>
                                <td class="lt_text" nowrap="" id="codeC4">회원구분</td>
                                <td class="lt_text3" nowrap="" id="codeD4">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ4" onclick="javascript:fnCodeIdEdit('4');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX4" onclick="javascript:fnCodeIdSave('4');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />5</td>
                                <td class="lt_text3" nowrap="" id="codeB5" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM045');">COM045</td>
                                <td class="lt_text" nowrap="" id="codeC5">직급</td>
                                <td class="lt_text3" nowrap="" id="codeD5">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ5" onclick="javascript:fnCodeIdEdit('5');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX5" onclick="javascript:fnCodeIdSave('5');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />6</td>
                                <td class="lt_text3" nowrap="" id="codeB6" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM046');">COM046</td>
                                <td class="lt_text" nowrap="" id="codeC6">임원구분</td>
                                <td class="lt_text3" nowrap="" id="codeD6">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ6" onclick="javascript:fnCodeIdEdit('6');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX6" onclick="javascript:fnCodeIdSave('6');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />7</td>
                                <td class="lt_text3" nowrap="" id="codeB7" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM047');">COM047</td>
                                <td class="lt_text" nowrap="" id="codeC7">임원직위</td>
                                <td class="lt_text3" nowrap="" id="codeD7">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ7" onclick="javascript:fnCodeIdEdit('7');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX7" onclick="javascript:fnCodeIdSave('7');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />8</td>
                                <td class="lt_text3" nowrap="" id="codeB8" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM049');">COM049</td>
                                <td class="lt_text" nowrap="" id="codeC8">공지분류</td>
                                <td class="lt_text3" nowrap="" id="codeD8">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ8" onclick="javascript:fnCodeIdEdit('8');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX8" onclick="javascript:fnCodeIdSave('8');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />9</td>
                                <td class="lt_text3" nowrap="" id="codeB9" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM050');">COM050</td>
                                <td class="lt_text" nowrap="" id="codeC9">지역</td>
                                <td class="lt_text3" nowrap="" id="codeD9">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ9" onclick="javascript:fnCodeIdEdit('9');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX9" onclick="javascript:fnCodeIdSave('9');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />10</td>
                                <td class="lt_text3" nowrap="" id="codeB10" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM051');">COM051</td>
                                <td class="lt_text" nowrap="" id="codeC10">강의상태</td>
                                <td class="lt_text3" nowrap="" id="codeD10">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ10" onclick="javascript:fnCodeIdEdit('10');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX10" onclick="javascript:fnCodeIdSave('10');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />11</td>
                                <td class="lt_text3" nowrap="" id="codeB11" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM052');">COM052</td>
                                <td class="lt_text" nowrap="" id="codeC11">강의노출</td>
                                <td class="lt_text3" nowrap="" id="codeD11">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ11" onclick="javascript:fnCodeIdEdit('11');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX11" onclick="javascript:fnCodeIdSave('11');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />12</td>
                                <td class="lt_text3" nowrap="" id="codeB12" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM053');">COM053</td>
                                <td class="lt_text" nowrap="" id="codeC12">FAQ분류</td>
                                <td class="lt_text3" nowrap="" id="codeD12">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ12" onclick="javascript:fnCodeIdEdit('12');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX12" onclick="javascript:fnCodeIdSave('12');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />13</td>
                                <td class="lt_text3" nowrap="" id="codeB13" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM054');">COM054</td>
                                <td class="lt_text" nowrap="" id="codeC13">1:1문의분류</td>
                                <td class="lt_text3" nowrap="" id="codeD13">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ13" onclick="javascript:fnCodeIdEdit('13');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX13" onclick="javascript:fnCodeIdSave('13');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />14</td>
                                <td class="lt_text3" nowrap="" id="codeB14" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM055');">COM055</td>
                                <td class="lt_text" nowrap="" id="codeC14">처리상태</td>
                                <td class="lt_text3" nowrap="" id="codeD14">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ14" onclick="javascript:fnCodeIdEdit('14');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX14" onclick="javascript:fnCodeIdSave('14');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />15</td>
                                <td class="lt_text3" nowrap="" id="codeB15" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM056');">COM056</td>
                                <td class="lt_text" nowrap="" id="codeC15">배너분류</td>
                                <td class="lt_text3" nowrap="" id="codeD15">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ15" onclick="javascript:fnCodeIdEdit('15');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX15" onclick="javascript:fnCodeIdSave('15');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />16</td>
                                <td class="lt_text3" nowrap="" id="codeB16" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM057');">COM057</td>
                                <td class="lt_text" nowrap="" id="codeC16">QnA구분</td>
                                <td class="lt_text3" nowrap="" id="codeD16">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ16" onclick="javascript:fnCodeIdEdit('16');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX16" onclick="javascript:fnCodeIdSave('16');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />17</td>
                                <td class="lt_text3" nowrap="" id="codeB17" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM058');">COM058</td>
                                <td class="lt_text" nowrap="" id="codeC17">QnA회신방법</td>
                                <td class="lt_text3" nowrap="" id="codeD17">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ17" onclick="javascript:fnCodeIdEdit('17');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX17" onclick="javascript:fnCodeIdSave('17');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />18</td>
                                <td class="lt_text3" nowrap="" id="codeB18" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM059');">COM059</td>
                                <td class="lt_text" nowrap="" id="codeC18">지역(구군)</td>
                                <td class="lt_text3" nowrap="" id="codeD18">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ18" onclick="javascript:fnCodeIdEdit('18');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX18" onclick="javascript:fnCodeIdSave('18');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />19</td>
                                <td class="lt_text3" nowrap="" id="codeB19" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM061');">COM061</td>
                                <td class="lt_text" nowrap="" id="codeC19">언어</td>
                                <td class="lt_text3" nowrap="" id="codeD19">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ19" onclick="javascript:fnCodeIdEdit('19');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX19" onclick="javascript:fnCodeIdSave('19');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />20</td>
                                <td class="lt_text3" nowrap="" id="codeB20" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM062');">COM062</td>
                                <td class="lt_text" nowrap="" id="codeC20">접수상태</td>
                                <td class="lt_text3" nowrap="" id="codeD20">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ20" onclick="javascript:fnCodeIdEdit('20');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX20" onclick="javascript:fnCodeIdSave('20');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />21</td>
                                <td class="lt_text3" nowrap="" id="codeB21" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM063');">COM063</td>
                                <td class="lt_text" nowrap="" id="codeC21">메일담당자</td>
                                <td class="lt_text3" nowrap="" id="codeD21">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ21" onclick="javascript:fnCodeIdEdit('21');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX21" onclick="javascript:fnCodeIdSave('21');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />22</td>
                                <td class="lt_text3" nowrap="" id="codeB22" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM064');">COM064</td>
                                <td class="lt_text" nowrap="" id="codeC22">메일카테고리</td>
                                <td class="lt_text3" nowrap="" id="codeD22">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ22" onclick="javascript:fnCodeIdEdit('22');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX22" onclick="javascript:fnCodeIdSave('22');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />23</td>
                                <td class="lt_text3" nowrap="" id="codeB23" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM070');">COM070</td>
                                <td class="lt_text" nowrap="" id="codeC23">국문메뉴(2차)</td>
                                <td class="lt_text3" nowrap="" id="codeD23">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ23" onclick="javascript:fnCodeIdEdit('23');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX23" onclick="javascript:fnCodeIdSave('23');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />24</td>
                                <td class="lt_text3" nowrap="" id="codeB24" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM071');">COM071</td>
                                <td class="lt_text" nowrap="" id="codeC24">국문메뉴리스트</td>
                                <td class="lt_text3" nowrap="" id="codeD24">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ24" onclick="javascript:fnCodeIdEdit('24');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX24" onclick="javascript:fnCodeIdSave('24');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />25</td>
                                <td class="lt_text3" nowrap="" id="codeB25" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM072');">COM072</td>
                                <td class="lt_text" nowrap="" id="codeC25">국문메뉴(1차)</td>
                                <td class="lt_text3" nowrap="" id="codeD25">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ25" onclick="javascript:fnCodeIdEdit('25');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX25" onclick="javascript:fnCodeIdSave('25');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />26</td>
                                <td class="lt_text3" nowrap="" id="codeB26" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM090');">COM090</td>
                                <td class="lt_text" nowrap="" id="codeC26">사이트정보</td>
                                <td class="lt_text3" nowrap="" id="codeD26">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ26" onclick="javascript:fnCodeIdEdit('26');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX26" onclick="javascript:fnCodeIdSave('26');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />27</td>
                                <td class="lt_text3" nowrap="" id="codeB27" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM121');">COM121</td>
                                <td class="lt_text" nowrap="" id="codeC27">회원상태</td>
                                <td class="lt_text3" nowrap="" id="codeD27">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ27" onclick="javascript:fnCodeIdEdit('27');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX27" onclick="javascript:fnCodeIdSave('27');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />28</td>
                                <td class="lt_text3" nowrap="" id="codeB28" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM122');">COM122</td>
                                <td class="lt_text" nowrap="" id="codeC28">가입경로</td>
                                <td class="lt_text3" nowrap="" id="codeD28">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ28" onclick="javascript:fnCodeIdEdit('28');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX28" onclick="javascript:fnCodeIdSave('28');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />29</td>
                                <td class="lt_text3" nowrap="" id="codeB29" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM123');">COM123</td>
                                <td class="lt_text" nowrap="" id="codeC29">이메일</td>
                                <td class="lt_text3" nowrap="" id="codeD29">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ29" onclick="javascript:fnCodeIdEdit('29');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX29" onclick="javascript:fnCodeIdSave('29');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />30</td>
                                <td class="lt_text3" nowrap="" id="codeB30" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM124');">COM124</td>
                                <td class="lt_text" nowrap="" id="codeC30">국번</td>
                                <td class="lt_text3" nowrap="" id="codeD30">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ30" onclick="javascript:fnCodeIdEdit('30');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX30" onclick="javascript:fnCodeIdSave('30');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />31</td>
                                <td class="lt_text3" nowrap="" id="codeB31" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM125');">COM125</td>
                                <td class="lt_text" nowrap="" id="codeC31">휴대폰</td>
                                <td class="lt_text3" nowrap="" id="codeD31">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ31" onclick="javascript:fnCodeIdEdit('31');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX31" onclick="javascript:fnCodeIdSave('31');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />32</td>
                                <td class="lt_text3" nowrap="" id="codeB32" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM126');">COM126</td>
                                <td class="lt_text" nowrap="" id="codeC32">준비하는시험</td>
                                <td class="lt_text3" nowrap="" id="codeD32">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ32" onclick="javascript:fnCodeIdEdit('32');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX32" onclick="javascript:fnCodeIdSave('32');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />33</td>
                                <td class="lt_text3" nowrap="" id="codeB33" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM127');">COM127</td>
                                <td class="lt_text" nowrap="" id="codeC33">학력</td>
                                <td class="lt_text3" nowrap="" id="codeD33">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ33" onclick="javascript:fnCodeIdEdit('33');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX33" onclick="javascript:fnCodeIdSave('33');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />34</td>
                                <td class="lt_text3" nowrap="" id="codeB34" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM128');">COM128</td>
                                <td class="lt_text" nowrap="" id="codeC34">학원알게된동기</td>
                                <td class="lt_text3" nowrap="" id="codeD34">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ34" onclick="javascript:fnCodeIdEdit('34');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX34" onclick="javascript:fnCodeIdSave('34');">삭제</td>
                            </tr>

                            <tr>
                                <td class="lt_text3" nowrap=""><input type="hidden" id="codeAA" />35</td>
                                <td class="lt_text3" nowrap="" id="codeB35" style="cursor: pointer; cursor: hand;" onclick="javascript:fnCmcodelist('COM129');">COM129</td>
                                <td class="lt_text" nowrap="" id="codeC35">결제상태</td>
                                <td class="lt_text3" nowrap="" id="codeD35">사용</td>
                                <td class="lt_text3" nowrap="" id="codeZ35" onclick="javascript:fnCodeIdEdit('35');">수정</td>
                                <td class="lt_text3" nowrap="" id="codeX35" onclick="javascript:fnCodeIdSave('35');">삭제</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 코드 리스트 E -->
                <!-- 상세코드 리스트 S -->
                <div style="float: left; width: 830px; margin-left: 20px;">
                    <div id="divCodeList">
                        <script type="text/javaScript">
                            /* ********************************************************
                             * 조회 처리
                             ******************************************************** */
                            function fnSearch(){
                                document.listForm.pageIndex.value = 1;
                                   document.listForm.submit();
                            }
                            function fnCodenEdit(no){
                                $("#codenZ"+no).text()=="수정" ? fnCodenModify(no) : fnCodenCancel(no);
                            }
                            function fnCodenSave(no){
                                $("#codenX"+no).text()=="저장" ? fnCodenModifySave(no) : fnCodenDelete(no);
                            }
                            function fnCodenModify(no){
                                fnCodenCancel($("#codenAA").val());
                                var codenC = $("#codenC"+no).text();
                                var codenD = $("#codenD"+no).text();
                                var codenE = $("#codenE"+no).text();
                                var codenF = $("#codenF"+no).text();
                                var codenH = $("#codenH"+no).text();
                                var codenG = $("#codenG"+no).text();
                                $("#codenC"+no).empty();
                                $("#codenC"+no).append("<input type='text' id='ncodename"+no+"' value='"+codenC+"' style='width:110px;'><input type='hidden' id='codenCOr"+no+"' value='"+codenC+"'>");
                                $("#codenD"+no).empty();
                                $("#codenD"+no).append("<select id='nuseAt"+no+"' style='width:56px;'><option value='Y'>사용</option><option value='N'>미사용</option></select><input type='hidden' id='codenDOr"+no+"' value='"+codenD+"'>");
                                JqSelectTextOption("#nuseAt"+no,codenD);
                                $("#codenE"+no).empty();
                                $("#codenE"+no).append("<input type='text' id='ncodeetc1"+no+"' value='"+codenE+"' style='width:100px;'><input type='hidden' id='codenEOr"+no+"' value='"+codenE+"'>");
                                $("#codenF"+no).empty();
                                $("#codenF"+no).append("<input type='text' id='ncodeetc2"+no+"' value='"+codenF+"' style='width:100px;'><input type='hidden' id='codenFOr"+no+"' value='"+codenF+"'>");
                                $("#codenH"+no).empty();
                                $("#codenH"+no).append("<input type='text' id='ncodeetc3"+no+"' value='"+codenH+"' style='width:100px;'><input type='hidden' id='codenHOr"+no+"' value='"+codenH+"'>");
                                $("#codenG"+no).empty();
                                $("#codenG"+no).append("<input type='text' id='nseq"+no+"' value='"+codenG+"' style='width:40px;'><input type='hidden' id='codenGOr"+no+"' value='"+codenG+"'>");
                                $("#codenZ"+no).text("취소");
                                $("#codenX"+no).text("저장");
                                $("#codenAA").val(no);
                            }
                            function fnCodenCancel(no){
                                var codenC = $("#codenCOr"+no).val();
                                var codenD = $("#codenDOr"+no).val();
                                var codenE = $("#codenEOr"+no).val();
                                var codenF = $("#codenFOr"+no).val();
                                var codenH = $("#codenHOr"+no).val();
                                var codenG = $("#codenGOr"+no).val();
                                $("#codenC"+no).empty();
                                $("#codenC"+no).text(codenC);
                                $("#codenD"+no).empty();
                                $("#codenD"+no).text(codenD);
                                $("#codenE"+no).empty();
                                $("#codenE"+no).text(codenE);
                                $("#codenF"+no).empty();
                                $("#codenF"+no).text(codenF);
                                $("#codenH"+no).empty();
                                $("#codenH"+no).text(codenH);
                                $("#codenG"+no).empty();
                                $("#codenG"+no).text(codenG);
                                $("#codenZ"+no).text("수정");
                                $("#codenX"+no).text("삭제");
                                $("#codenAA").val("");
                            }
                            function fnCodeAdd(){
                                if($("#newCode").size()>0){
                                    return;
                                }
                                var str = '<tr><td class="lt_text3" nowrap></td>' +
                                    '<td class="lt_text" nowrap>'+cmmnDetailCode.codeId.value+'</td>' +
                                    '<td class="lt_text" nowrap><input type="text" id="newCode" value="157" style="width:40px;"></td>' +
                                    '<td class="lt_text" nowrap><input type="text" id="newCodeNm" value="" style="width:110px;"></td>' +
                                    '<td class="lt_text" nowrap><input type="text" id="newSeq" value="" style="width:40px;"></td>' +
                                    '<td class="lt_text3" nowrap><select id="newCodeUseYn" style="width:56px;"><option value="Y">사용</option><option value="N">미사용</option></select></td>' +
                                    '<td class="lt_text" nowrap><input type="text" id="newCodeEtc1" value="" style="width:100px;"></td>' +
                                    '<td class="lt_text" nowrap><input type="text" id="newCodeEtc2" value="" style="width:100px;"></td>' +
                                    '<td class="lt_text" nowrap><input type="text" id="newCodeEtc3" value="" style="width:100px;"></td>' +
                                    '<td class="lt_text3" nowrap onclick="javascript:fnCodenAddSave();" style="cursor:pointer;">저장</td>' +
                                    '<td class="lt_text3" nowrap onclick="javascript:fnCodenAddCancel(this);" style="cursor:pointer;">취소</td>' +
                                    '</tr>';
                                $("#addRowPoint").prepend(str);
                            }
                            function fnCodenAddCancel(obj){
                                $(obj).parent('tr').remove();
                            }
                            /* ********************************************************
                             * 저장처리화면
                             ******************************************************** */
                            function fnCodenDelete(no){
                                var codenB = $("#codenB"+no).text();
                                if(confirm("삭제하시겠습니까?")){
                                    var url = "/boffice/actCode/cmdCodeSave.do";
                                    var param = {
                                        cmd: "Del",
                                        codeId: cmmnDetailCode.codeId.value,
                                        code: codenB
                                    };
                                    commonUtil.AjaxSynCall(url,param,'text','삭제되었습니다.');
                                    fnCmcodelist(cmmnDetailCode.codeId.value);
                                }
                            }
                            function fnCodenAddSave(no){
                                if(!cmmnDetailCode.codeId.value){
                                    alert("상위코드값이 없습니다. 상위코드를 먼저 선택하여 주세요.");
                                    return;
                                }
                                if(!$("#newCode").val()){
                                    alert("코드를 입력하여 주세요");
                                    return;
                                }
                                if(!$("#newCodeNm").val()){
                                    alert("코드명을 입력하여 주세요");
                                    return;
                                }
                                if(confirm("저장하시겠습니까?")){
                                    var url = "/boffice/actCode/cmdCodeSave.do";
                                    var param = {
                                        cmd: "Add",
                                        codeId: cmmnDetailCode.codeId.value,
                                        code: $("#newCode").val(),
                                        codeNm: $("#newCodeNm").val(),
                                        codeDc: $("#newCodeNm").val(),
                                        seq: $("#newSeq").val(),
                                        codeEtc1: $("#newCodeEtc1").val(),
                                        codeEtc2: $("#newCodeEtc2").val(),
                                        codeEtc3: $("#newCodeEtc3").val(),
                                        useAt: $("#newCodeUseYn option:selected").val()
                                    };
                                    commonUtil.AjaxSynCall(url,param,'text','등록되었습니다.');
                                    fnCmcodelist(cmmnDetailCode.codeId.value);
                                }
                            }
                            function fnCodenModifySave(no){
                                //var frm = document.cmmnDetailCode;
                                if(!$("#ncodename"+no).val()){
                                    alert("코드명을 입력하여 주세요");
                                    return;
                                }
                                if(confirm("저장하시겠습니까?")){
                                    var url = "/boffice/actCode/cmdCodeSave.do";
                                    var param = {
                                        cmd: "Modify",
                                        codeId: $("#codenA"+no).text(),
                                        code: $("#codenB"+no).text(),
                                        codeNm: $("#ncodename"+no).val(),
                                        codeDc: $("#ncodename"+no).val(),
                                        seq: $("#nseq"+no).val(),
                                        codeEtc1: $("#ncodeetc1"+no).val(),
                                        codeEtc2: $("#ncodeetc2"+no).val(),
                                        codeEtc3: $("#ncodeetc3"+no).val(),
                                        useAt: $("#nuseAt"+no+" option:selected").val()
                                    };
                                    commonUtil.AjaxSynCall(url,param,'text','수정되었습니다.');
                                    fnCmcodelist($("#codenA"+no).text());
                                }
                            }
                            </script>
                            <form id="cmmnDetailCode" name="cmmnDetailCode" method="post">
                                <input name="cmd" type="hidden" value="Modify">
                                <input name="codeId" type="hidden" value="COM041">
                                <input name="code" type="hidden">
                                <input name="codeNm" type="hidden">
                                <input name="codeDc" type="hidden">
                                <input name="seq" type="hidden">
                                <input name="codeEtc1" type="hidden">
                                <input name="codeEtc2" type="hidden">
                                <input name="codeEtc3" type="hidden">
                                <input name="useAt" type="hidden">
                            </form>
                            <div class="btnWrap" style="float:right;margin-bottom:5px;">
                                <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnCodeAdd();">등록</button>
                            </div>
                            <table style="table-layout:fixed;width:820px;" class="commonTable detailTable" summary="코드ID, 코드, 코드명, 사용여부를 나타내는 공통상세코드 목록 테이블이다.">
                                <caption style="display: none;">공통상세코드 목록</caption>
                                <thead>
                                <tr>
                                    <th class="title" width="4%" scope="col" nowrap="">순번</th>
                                    <th class="title" width="8%" scope="col" nowrap="">코드ID</th>
                                    <th class="title" width="5%" scope="col" nowrap="">코드</th>
                                    <th class="title" width="*" scope="col" nowrap="">코드명</th>
                                    <th class="title" width="7%" scope="col" nowrap="">순서</th>
                                    <th class="title" width="9%" scope="col" nowrap="">사용여부</th>
                                    <th class="title" width="14%" scope="col" nowrap="">ETC1</th>
                                    <th class="title" width="14%" scope="col" nowrap="">ETC2</th>
                                    <th class="title" width="14%" scope="col" nowrap="">ETC3</th>
                                    <th class="title" width="5%" scope="col" nowrap="">수정</th>
                                    <th class="title" width="5%" scope="col" nowrap="">삭제</th>
                                </tr>
                                </thead>
                                <tbody id="addRowPoint">
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">1</td>
                                    <td class="lt_text" nowrap="" id="codenA1">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB1">100</td>
                                    <td class="lt_text" nowrap="" id="codenC1">메인페이지</td>
                                    <td class="lt_text" nowrap="" id="codenG1">1000</td>
                                    <td class="lt_text3" nowrap="" id="codenD1">미사용</td>
                                    <td class="lt_text" nowrap="" id="codenE1" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF1" style="overflow:hidden;">/boffice/main.do</td>
                                    <td class="lt_text" nowrap="" id="codenH1" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ1" onclick="javascript:fnCodenEdit('1');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX1" onclick="javascript:fnCodenSave('1');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">2</td>
                                    <td class="lt_text" nowrap="" id="codenA2">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB2">101</td>
                                    <td class="lt_text" nowrap="" id="codenC2">카테고리 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG2">1101</td>
                                    <td class="lt_text3" nowrap="" id="codenD2">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE2" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF2" style="overflow:hidden;">/boffice/actLecture/actLecCategory.do</td>
                                    <td class="lt_text" nowrap="" id="codenH2" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ2" onclick="javascript:fnCodenEdit('2');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX2" onclick="javascript:fnCodenSave('2');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">3</td>
                                    <td class="lt_text" nowrap="" id="codenA3">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB3">102</td>
                                    <td class="lt_text" nowrap="" id="codenC3">동영상 강의 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG3">1102</td>
                                    <td class="lt_text3" nowrap="" id="codenD3">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE3" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF3" style="overflow:hidden;">/boffice/actLecture/actMovingList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH3" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ3" onclick="javascript:fnCodenEdit('3');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX3" onclick="javascript:fnCodenSave('3');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">4</td>
                                    <td class="lt_text" nowrap="" id="codenA4">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB4">147</td>
                                    <td class="lt_text" nowrap="" id="codenC4">클래스강의 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG4">1103</td>
                                    <td class="lt_text3" nowrap="" id="codenD4">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE4" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF4" style="overflow:hidden;">/boffice/actLecture/actCollegeList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH4" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ4" onclick="javascript:fnCodenEdit('4');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX4" onclick="javascript:fnCodenSave('4');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">5</td>
                                    <td class="lt_text" nowrap="" id="codenA5">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB5">103</td>
                                    <td class="lt_text" nowrap="" id="codenC5">인터넷 서점 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG5">1104</td>
                                    <td class="lt_text3" nowrap="" id="codenD5">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE5" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF5" style="overflow:hidden;">/boffice/actLecture/actBookList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH5" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ5" onclick="javascript:fnCodenEdit('5');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX5" onclick="javascript:fnCodenSave('5');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">6</td>
                                    <td class="lt_text" nowrap="" id="codenA6">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB6">104</td>
                                    <td class="lt_text" nowrap="" id="codenC6">학원 강의 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG6">1105</td>
                                    <td class="lt_text3" nowrap="" id="codenD6">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE6" style="overflow:hidden;">BBS_0003</td>
                                    <td class="lt_text" nowrap="" id="codenF6" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0003</td>
                                    <td class="lt_text" nowrap="" id="codenH6" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ6" onclick="javascript:fnCodenEdit('6');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX6" onclick="javascript:fnCodenSave('6');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">7</td>
                                    <td class="lt_text" nowrap="" id="codenA7">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB7">105</td>
                                    <td class="lt_text" nowrap="" id="codenC7">동영상 주문 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG7">1201</td>
                                    <td class="lt_text3" nowrap="" id="codenD7">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE7" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF7" style="overflow:hidden;">/boffice/actOrder/actOrderList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH7" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ7" onclick="javascript:fnCodenEdit('7');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX7" onclick="javascript:fnCodenSave('7');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">8</td>
                                    <td class="lt_text" nowrap="" id="codenA8">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB8">152</td>
                                    <td class="lt_text" nowrap="" id="codenC8">연장 신청 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG8">1202</td>
                                    <td class="lt_text3" nowrap="" id="codenD8">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE8" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF8" style="overflow:hidden;">/boffice/actOrder/actOrderExtList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH8" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ8" onclick="javascript:fnCodenEdit('8');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX8" onclick="javascript:fnCodenSave('8');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">9</td>
                                    <td class="lt_text" nowrap="" id="codenA9">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB9">106</td>
                                    <td class="lt_text" nowrap="" id="codenC9">서점 주문 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG9">1203</td>
                                    <td class="lt_text3" nowrap="" id="codenD9">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE9" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF9" style="overflow:hidden;">/boffice/actOrder/actOrderBookList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH9" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ9" onclick="javascript:fnCodenEdit('9');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX9" onclick="javascript:fnCodenSave('9');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">10</td>
                                    <td class="lt_text" nowrap="" id="codenA10">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB10">107</td>
                                    <td class="lt_text" nowrap="" id="codenC10">무료 강의 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG10">1204</td>
                                    <td class="lt_text3" nowrap="" id="codenD10">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE10" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF10" style="overflow:hidden;">/boffice/actFreeLect/actFreeLectList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH10" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ10" onclick="javascript:fnCodenEdit('10');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX10" onclick="javascript:fnCodenSave('10');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">11</td>
                                    <td class="lt_text" nowrap="" id="codenA11">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB11">108</td>
                                    <td class="lt_text" nowrap="" id="codenC11">견적 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG11">1205</td>
                                    <td class="lt_text3" nowrap="" id="codenD11">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE11" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF11" style="overflow:hidden;">/boffice/actOrder/actOrderEstiList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH11" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ11" onclick="javascript:fnCodenEdit('11');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX11" onclick="javascript:fnCodenSave('11');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">12</td>
                                    <td class="lt_text" nowrap="" id="codenA12">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB12">109</td>
                                    <td class="lt_text" nowrap="" id="codenC12">전체 회원 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG12">1301</td>
                                    <td class="lt_text3" nowrap="" id="codenD12">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE12" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF12" style="overflow:hidden;">/boffice/actMemb/actMembList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH12" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ12" onclick="javascript:fnCodenEdit('12');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX12" onclick="javascript:fnCodenSave('12');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">13</td>
                                    <td class="lt_text" nowrap="" id="codenA13">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB13">110</td>
                                    <td class="lt_text" nowrap="" id="codenC13">수강 회원 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG13">1302</td>
                                    <td class="lt_text3" nowrap="" id="codenD13">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE13" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF13" style="overflow:hidden;">/boffice/actMemb/actMembLectList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH13" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ13" onclick="javascript:fnCodenEdit('13');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX13" onclick="javascript:fnCodenSave('13');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">14</td>
                                    <td class="lt_text" nowrap="" id="codenA14">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB14">111</td>
                                    <td class="lt_text" nowrap="" id="codenC14">휴면 회원 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG14">1303</td>
                                    <td class="lt_text3" nowrap="" id="codenD14">미사용</td>
                                    <td class="lt_text" nowrap="" id="codenE14" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF14" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenH14" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ14" onclick="javascript:fnCodenEdit('14');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX14" onclick="javascript:fnCodenSave('14');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">15</td>
                                    <td class="lt_text" nowrap="" id="codenA15">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB15">112</td>
                                    <td class="lt_text" nowrap="" id="codenC15">교수 회원 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG15">1304</td>
                                    <td class="lt_text3" nowrap="" id="codenD15">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE15" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF15" style="overflow:hidden;">/boffice/actMemb/actProfList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH15" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ15" onclick="javascript:fnCodenEdit('15');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX15" onclick="javascript:fnCodenSave('15');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">16</td>
                                    <td class="lt_text" nowrap="" id="codenA16">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB16">151</td>
                                    <td class="lt_text" nowrap="" id="codenC16">회원 탈퇴 및 삭제</td>
                                    <td class="lt_text" nowrap="" id="codenG16">1305</td>
                                    <td class="lt_text3" nowrap="" id="codenD16">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE16" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF16" style="overflow:hidden;">/boffice/actMemb/actMembDelList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH16" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ16" onclick="javascript:fnCodenEdit('16');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX16" onclick="javascript:fnCodenSave('16');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">17</td>
                                    <td class="lt_text" nowrap="" id="codenA17">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB17">156</td>
                                    <td class="lt_text" nowrap="" id="codenC17">현강생 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG17">1306</td>
                                    <td class="lt_text3" nowrap="" id="codenD17">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE17" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF17" style="overflow:hidden;">/boffice/actMemb/actStudentList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH17" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ17" onclick="javascript:fnCodenEdit('17');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX17" onclick="javascript:fnCodenSave('17');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">18</td>
                                    <td class="lt_text" nowrap="" id="codenA18">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB18">113</td>
                                    <td class="lt_text" nowrap="" id="codenC18">동영상 매출 통계</td>
                                    <td class="lt_text" nowrap="" id="codenG18">1401</td>
                                    <td class="lt_text3" nowrap="" id="codenD18">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE18" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF18" style="overflow:hidden;">/boffice/actStat/statMovingList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH18" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ18" onclick="javascript:fnCodenEdit('18');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX18" onclick="javascript:fnCodenSave('18');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">19</td>
                                    <td class="lt_text" nowrap="" id="codenA19">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB19">153</td>
                                    <td class="lt_text" nowrap="" id="codenC19">연장 신청 매출 통계</td>
                                    <td class="lt_text" nowrap="" id="codenG19">1402</td>
                                    <td class="lt_text3" nowrap="" id="codenD19">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE19" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF19" style="overflow:hidden;">/boffice/actStat/statMovingExtList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH19" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ19" onclick="javascript:fnCodenEdit('19');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX19" onclick="javascript:fnCodenSave('19');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">20</td>
                                    <td class="lt_text" nowrap="" id="codenA20">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB20">114</td>
                                    <td class="lt_text" nowrap="" id="codenC20">서적 매출 통계</td>
                                    <td class="lt_text" nowrap="" id="codenG20">1403</td>
                                    <td class="lt_text3" nowrap="" id="codenD20">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE20" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF20" style="overflow:hidden;">/boffice/actStat/statBookList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH20" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ20" onclick="javascript:fnCodenEdit('20');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX20" onclick="javascript:fnCodenSave('20');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">21</td>
                                    <td class="lt_text" nowrap="" id="codenA21">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB21">115</td>
                                    <td class="lt_text" nowrap="" id="codenC21">교수별 정산</td>
                                    <td class="lt_text" nowrap="" id="codenG21">1404</td>
                                    <td class="lt_text3" nowrap="" id="codenD21">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE21" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF21" style="overflow:hidden;">/boffice/actStat/statProfList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH21" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ21" onclick="javascript:fnCodenEdit('21');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX21" onclick="javascript:fnCodenSave('21');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">22</td>
                                    <td class="lt_text" nowrap="" id="codenA22">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB22">116</td>
                                    <td class="lt_text" nowrap="" id="codenC22">학습 게시판 답변 현황</td>
                                    <td class="lt_text" nowrap="" id="codenG22">1405</td>
                                    <td class="lt_text3" nowrap="" id="codenD22">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE22" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF22" style="overflow:hidden;">/boffice/actStat/statQnaList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH22" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ22" onclick="javascript:fnCodenEdit('22');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX22" onclick="javascript:fnCodenSave('22');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">23</td>
                                    <td class="lt_text" nowrap="" id="codenA23">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB23">117</td>
                                    <td class="lt_text" nowrap="" id="codenC23">동영상 Q&amp;A관리</td>
                                    <td class="lt_text" nowrap="" id="codenG23">1501</td>
                                    <td class="lt_text3" nowrap="" id="codenD23">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE23" style="overflow:hidden;">BBS_0009</td>
                                    <td class="lt_text" nowrap="" id="codenF23" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0009</td>
                                    <td class="lt_text" nowrap="" id="codenH23" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ23" onclick="javascript:fnCodenEdit('23');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX23" onclick="javascript:fnCodenSave('23');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">24</td>
                                    <td class="lt_text" nowrap="" id="codenA24">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB24">118</td>
                                    <td class="lt_text" nowrap="" id="codenC24">서점 Q&amp;A관리</td>
                                    <td class="lt_text" nowrap="" id="codenG24">1502</td>
                                    <td class="lt_text3" nowrap="" id="codenD24">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE24" style="overflow:hidden;">BBS_0010</td>
                                    <td class="lt_text" nowrap="" id="codenF24" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0010</td>
                                    <td class="lt_text" nowrap="" id="codenH24" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ24" onclick="javascript:fnCodenEdit('24');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX24" onclick="javascript:fnCodenSave('24');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">25</td>
                                    <td class="lt_text" nowrap="" id="codenA25">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB25">119</td>
                                    <td class="lt_text" nowrap="" id="codenC25">1:1문의 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG25">1503</td>
                                    <td class="lt_text3" nowrap="" id="codenD25">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE25" style="overflow:hidden;">BBS_0011</td>
                                    <td class="lt_text" nowrap="" id="codenF25" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0011</td>
                                    <td class="lt_text" nowrap="" id="codenH25" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ25" onclick="javascript:fnCodenEdit('25');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX25" onclick="javascript:fnCodenSave('25');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">26</td>
                                    <td class="lt_text" nowrap="" id="codenA26">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB26">120</td>
                                    <td class="lt_text" nowrap="" id="codenC26">자유게시판 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG26">1504</td>
                                    <td class="lt_text3" nowrap="" id="codenD26">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE26" style="overflow:hidden;">BBS_0012</td>
                                    <td class="lt_text" nowrap="" id="codenF26" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0012</td>
                                    <td class="lt_text" nowrap="" id="codenH26" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ26" onclick="javascript:fnCodenEdit('26');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX26" onclick="javascript:fnCodenSave('26');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">27</td>
                                    <td class="lt_text" nowrap="" id="codenA27">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB27">121</td>
                                    <td class="lt_text" nowrap="" id="codenC27">동영상 학습 게시판 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG27">1505</td>
                                    <td class="lt_text3" nowrap="" id="codenD27">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE27" style="overflow:hidden;">BBS_0013</td>
                                    <td class="lt_text" nowrap="" id="codenF27" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0013</td>
                                    <td class="lt_text" nowrap="" id="codenH27" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ27" onclick="javascript:fnCodenEdit('27');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX27" onclick="javascript:fnCodenSave('27');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">28</td>
                                    <td class="lt_text" nowrap="" id="codenA28">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB28">122</td>
                                    <td class="lt_text" nowrap="" id="codenC28">FAQ</td>
                                    <td class="lt_text" nowrap="" id="codenG28">1506</td>
                                    <td class="lt_text3" nowrap="" id="codenD28">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE28" style="overflow:hidden;">BBS_0014</td>
                                    <td class="lt_text" nowrap="" id="codenF28" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0014</td>
                                    <td class="lt_text" nowrap="" id="codenH28" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ28" onclick="javascript:fnCodenEdit('28');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX28" onclick="javascript:fnCodenSave('28');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">29</td>
                                    <td class="lt_text" nowrap="" id="codenA29">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB29">123</td>
                                    <td class="lt_text" nowrap="" id="codenC29">자주하는 질문</td>
                                    <td class="lt_text" nowrap="" id="codenG29">1507</td>
                                    <td class="lt_text3" nowrap="" id="codenD29">미사용</td>
                                    <td class="lt_text" nowrap="" id="codenE29" style="overflow:hidden;">BBS_0015</td>
                                    <td class="lt_text" nowrap="" id="codenF29" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0015</td>
                                    <td class="lt_text" nowrap="" id="codenH29" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ29" onclick="javascript:fnCodenEdit('29');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX29" onclick="javascript:fnCodenSave('29');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">30</td>
                                    <td class="lt_text" nowrap="" id="codenA30">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB30">124</td>
                                    <td class="lt_text" nowrap="" id="codenC30">학원소식</td>
                                    <td class="lt_text" nowrap="" id="codenG30">1601</td>
                                    <td class="lt_text3" nowrap="" id="codenD30">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE30" style="overflow:hidden;">BBS_0002</td>
                                    <td class="lt_text" nowrap="" id="codenF30" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0002</td>
                                    <td class="lt_text" nowrap="" id="codenH30" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ30" onclick="javascript:fnCodenEdit('30');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX30" onclick="javascript:fnCodenSave('30');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">31</td>
                                    <td class="lt_text" nowrap="" id="codenA31">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB31">125</td>
                                    <td class="lt_text" nowrap="" id="codenC31">공지사항</td>
                                    <td class="lt_text" nowrap="" id="codenG31">1602</td>
                                    <td class="lt_text3" nowrap="" id="codenD31">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE31" style="overflow:hidden;">BBS_0001</td>
                                    <td class="lt_text" nowrap="" id="codenF31" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0001</td>
                                    <td class="lt_text" nowrap="" id="codenH31" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ31" onclick="javascript:fnCodenEdit('31');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX31" onclick="javascript:fnCodenSave('31');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">32</td>
                                    <td class="lt_text" nowrap="" id="codenA32">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB32">148</td>
                                    <td class="lt_text" nowrap="" id="codenC32">합격수기 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG32">1603</td>
                                    <td class="lt_text3" nowrap="" id="codenD32">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE32" style="overflow:hidden;">BBS_0016</td>
                                    <td class="lt_text" nowrap="" id="codenF32" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0016</td>
                                    <td class="lt_text" nowrap="" id="codenH32" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ32" onclick="javascript:fnCodenEdit('32');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX32" onclick="javascript:fnCodenSave('32');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">33</td>
                                    <td class="lt_text" nowrap="" id="codenA33">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB33">149</td>
                                    <td class="lt_text" nowrap="" id="codenC33">본원출식 합격자 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG33">1604</td>
                                    <td class="lt_text3" nowrap="" id="codenD33">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE33" style="overflow:hidden;">BBS_0017</td>
                                    <td class="lt_text" nowrap="" id="codenF33" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0017</td>
                                    <td class="lt_text" nowrap="" id="codenH33" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ33" onclick="javascript:fnCodenEdit('33');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX33" onclick="javascript:fnCodenSave('33');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">34</td>
                                    <td class="lt_text" nowrap="" id="codenA34">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB34">126</td>
                                    <td class="lt_text" nowrap="" id="codenC34">시험공고</td>
                                    <td class="lt_text" nowrap="" id="codenG34">1605</td>
                                    <td class="lt_text3" nowrap="" id="codenD34">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE34" style="overflow:hidden;">BBS_0004</td>
                                    <td class="lt_text" nowrap="" id="codenF34" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0004</td>
                                    <td class="lt_text" nowrap="" id="codenH34" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ34" onclick="javascript:fnCodenEdit('34');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX34" onclick="javascript:fnCodenSave('34');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">35</td>
                                    <td class="lt_text" nowrap="" id="codenA35">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB35">127</td>
                                    <td class="lt_text" nowrap="" id="codenC35">경쟁률 및 합격선</td>
                                    <td class="lt_text" nowrap="" id="codenG35">1606</td>
                                    <td class="lt_text3" nowrap="" id="codenD35">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE35" style="overflow:hidden;">BBS_0005</td>
                                    <td class="lt_text" nowrap="" id="codenF35" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0005</td>
                                    <td class="lt_text" nowrap="" id="codenH35" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ35" onclick="javascript:fnCodenEdit('35');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX35" onclick="javascript:fnCodenSave('35');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">36</td>
                                    <td class="lt_text" nowrap="" id="codenA36">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB36">128</td>
                                    <td class="lt_text" nowrap="" id="codenC36">수험가 뉴스</td>
                                    <td class="lt_text" nowrap="" id="codenG36">1607</td>
                                    <td class="lt_text3" nowrap="" id="codenD36">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE36" style="overflow:hidden;">BBS_0006</td>
                                    <td class="lt_text" nowrap="" id="codenF36" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0006</td>
                                    <td class="lt_text" nowrap="" id="codenH36" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ36" onclick="javascript:fnCodenEdit('36');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX36" onclick="javascript:fnCodenSave('36');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">37</td>
                                    <td class="lt_text" nowrap="" id="codenA37">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB37">129</td>
                                    <td class="lt_text" nowrap="" id="codenC37">학습자료실</td>
                                    <td class="lt_text" nowrap="" id="codenG37">1608</td>
                                    <td class="lt_text3" nowrap="" id="codenD37">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE37" style="overflow:hidden;">BBS_0007</td>
                                    <td class="lt_text" nowrap="" id="codenF37" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0007</td>
                                    <td class="lt_text" nowrap="" id="codenH37" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ37" onclick="javascript:fnCodenEdit('37');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX37" onclick="javascript:fnCodenSave('37');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">38</td>
                                    <td class="lt_text" nowrap="" id="codenA38">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB38">130</td>
                                    <td class="lt_text" nowrap="" id="codenC38">정오표</td>
                                    <td class="lt_text" nowrap="" id="codenG38">1609</td>
                                    <td class="lt_text3" nowrap="" id="codenD38">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE38" style="overflow:hidden;">BBS_0008</td>
                                    <td class="lt_text" nowrap="" id="codenF38" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0008</td>
                                    <td class="lt_text" nowrap="" id="codenH38" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ38" onclick="javascript:fnCodenEdit('38');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX38" onclick="javascript:fnCodenSave('38');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">39</td>
                                    <td class="lt_text" nowrap="" id="codenA39">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB39">154</td>
                                    <td class="lt_text" nowrap="" id="codenC39">인터넷서점공지사항</td>
                                    <td class="lt_text" nowrap="" id="codenG39">1610</td>
                                    <td class="lt_text3" nowrap="" id="codenD39">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE39" style="overflow:hidden;">BBS_0019</td>
                                    <td class="lt_text" nowrap="" id="codenF39" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0019</td>
                                    <td class="lt_text" nowrap="" id="codenH39" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ39" onclick="javascript:fnCodenEdit('39');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX39" onclick="javascript:fnCodenSave('39');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">40</td>
                                    <td class="lt_text" nowrap="" id="codenA40">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB40">150</td>
                                    <td class="lt_text" nowrap="" id="codenC40">모의고사 다운로드</td>
                                    <td class="lt_text" nowrap="" id="codenG40">1611</td>
                                    <td class="lt_text3" nowrap="" id="codenD40">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE40" style="overflow:hidden;">BBS_0018</td>
                                    <td class="lt_text" nowrap="" id="codenF40" style="overflow:hidden;">/boffice/bbs/bbsList.do?bbsId=BBS_0018</td>
                                    <td class="lt_text" nowrap="" id="codenH40" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ40" onclick="javascript:fnCodenEdit('40');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX40" onclick="javascript:fnCodenSave('40');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">41</td>
                                    <td class="lt_text" nowrap="" id="codenA41">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB41">131</td>
                                    <td class="lt_text" nowrap="" id="codenC41">문제 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG41">1701</td>
                                    <td class="lt_text3" nowrap="" id="codenD41">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE41" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF41" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenH41" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ41" onclick="javascript:fnCodenEdit('41');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX41" onclick="javascript:fnCodenSave('41');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">42</td>
                                    <td class="lt_text" nowrap="" id="codenA42">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB42">132</td>
                                    <td class="lt_text" nowrap="" id="codenC42">시험 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG42">1702</td>
                                    <td class="lt_text3" nowrap="" id="codenD42">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE42" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF42" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenH42" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ42" onclick="javascript:fnCodenEdit('42');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX42" onclick="javascript:fnCodenSave('42');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">43</td>
                                    <td class="lt_text" nowrap="" id="codenA43">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB43">133</td>
                                    <td class="lt_text" nowrap="" id="codenC43">응시 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG43">1703</td>
                                    <td class="lt_text3" nowrap="" id="codenD43">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE43" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF43" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenH43" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ43" onclick="javascript:fnCodenEdit('43');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX43" onclick="javascript:fnCodenSave('43');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">44</td>
                                    <td class="lt_text" nowrap="" id="codenA44">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB44">134</td>
                                    <td class="lt_text" nowrap="" id="codenC44">합격예측</td>
                                    <td class="lt_text" nowrap="" id="codenG44">1704</td>
                                    <td class="lt_text3" nowrap="" id="codenD44">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE44" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF44" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenH44" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ44" onclick="javascript:fnCodenEdit('44');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX44" onclick="javascript:fnCodenSave('44');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">45</td>
                                    <td class="lt_text" nowrap="" id="codenA45">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB45">135</td>
                                    <td class="lt_text" nowrap="" id="codenC45">기본 설정 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG45">1801</td>
                                    <td class="lt_text3" nowrap="" id="codenD45">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE45" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF45" style="overflow:hidden;">/boffice/actMobile/actConfList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH45" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ45" onclick="javascript:fnCodenEdit('45');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX45" onclick="javascript:fnCodenSave('45');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">46</td>
                                    <td class="lt_text" nowrap="" id="codenA46">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB46">136</td>
                                    <td class="lt_text" nowrap="" id="codenC46">접속 현황</td>
                                    <td class="lt_text" nowrap="" id="codenG46">1802</td>
                                    <td class="lt_text3" nowrap="" id="codenD46">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE46" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF46" style="overflow:hidden;">/boffice/actMobile/actConnectList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH46" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ46" onclick="javascript:fnCodenEdit('46');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX46" onclick="javascript:fnCodenSave('46');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">47</td>
                                    <td class="lt_text" nowrap="" id="codenA47">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB47">137</td>
                                    <td class="lt_text" nowrap="" id="codenC47">강의 다운로드 현황</td>
                                    <td class="lt_text" nowrap="" id="codenG47">1803</td>
                                    <td class="lt_text3" nowrap="" id="codenD47">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE47" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF47" style="overflow:hidden;">/boffice/actMobile/actDownList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH47" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ47" onclick="javascript:fnCodenEdit('47');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX47" onclick="javascript:fnCodenSave('47');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">48</td>
                                    <td class="lt_text" nowrap="" id="codenA48">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB48">138</td>
                                    <td class="lt_text" nowrap="" id="codenC48">강의 다운로드 삭제 현황</td>
                                    <td class="lt_text" nowrap="" id="codenG48">1804</td>
                                    <td class="lt_text3" nowrap="" id="codenD48">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE48" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF48" style="overflow:hidden;">/boffice/actMobile/actDownDelList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH48" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ48" onclick="javascript:fnCodenEdit('48');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX48" onclick="javascript:fnCodenSave('48');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">49</td>
                                    <td class="lt_text" nowrap="" id="codenA49">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB49">139</td>
                                    <td class="lt_text" nowrap="" id="codenC49">단말기 승인 현황</td>
                                    <td class="lt_text" nowrap="" id="codenG49">1805</td>
                                    <td class="lt_text3" nowrap="" id="codenD49">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE49" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF49" style="overflow:hidden;">/boffice/actMobile/actDeviceList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH49" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ49" onclick="javascript:fnCodenEdit('49');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX49" onclick="javascript:fnCodenSave('49');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">50</td>
                                    <td class="lt_text" nowrap="" id="codenA50">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB50">140</td>
                                    <td class="lt_text" nowrap="" id="codenC50">단말기 해제 현황</td>
                                    <td class="lt_text" nowrap="" id="codenG50">1806</td>
                                    <td class="lt_text3" nowrap="" id="codenD50">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE50" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF50" style="overflow:hidden;">/boffice/actMobile/actDeviceDelList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH50" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ50" onclick="javascript:fnCodenEdit('50');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX50" onclick="javascript:fnCodenSave('50');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">51</td>
                                    <td class="lt_text" nowrap="" id="codenA51">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB51">141</td>
                                    <td class="lt_text" nowrap="" id="codenC51">메인 페이지 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG51">1901</td>
                                    <td class="lt_text3" nowrap="" id="codenD51">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE51" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF51" style="overflow:hidden;">/boffice/actBanner/actBannerList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH51" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ51" onclick="javascript:fnCodenEdit('51');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX51" onclick="javascript:fnCodenSave('51');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">52</td>
                                    <td class="lt_text" nowrap="" id="codenA52">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB52">142</td>
                                    <td class="lt_text" nowrap="" id="codenC52">코드 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG52">1902</td>
                                    <td class="lt_text3" nowrap="" id="codenD52">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE52" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF52" style="overflow:hidden;">/boffice/actCode/actCodeSet.do</td>
                                    <td class="lt_text" nowrap="" id="codenH52" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ52" onclick="javascript:fnCodenEdit('52');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX52" onclick="javascript:fnCodenSave('52');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">53</td>
                                    <td class="lt_text" nowrap="" id="codenA53">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB53">143</td>
                                    <td class="lt_text" nowrap="" id="codenC53">게시판 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG53">1903</td>
                                    <td class="lt_text3" nowrap="" id="codenD53">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE53" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF53" style="overflow:hidden;">/boffice/bbs/actBbsMasterList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH53" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ53" onclick="javascript:fnCodenEdit('53');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX53" onclick="javascript:fnCodenSave('53');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">54</td>
                                    <td class="lt_text" nowrap="" id="codenA54">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB54">144</td>
                                    <td class="lt_text" nowrap="" id="codenC54">관리자 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG54">1904</td>
                                    <td class="lt_text3" nowrap="" id="codenD54">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE54" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF54" style="overflow:hidden;">/boffice/actEmp/actEmpList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH54" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ54" onclick="javascript:fnCodenEdit('54');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX54" onclick="javascript:fnCodenSave('54');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">55</td>
                                    <td class="lt_text" nowrap="" id="codenA55">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB55">145</td>
                                    <td class="lt_text" nowrap="" id="codenC55">장바구니 공지 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG55">1905</td>
                                    <td class="lt_text3" nowrap="" id="codenD55">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE55" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF55" style="overflow:hidden;">/boffice/actOrderNotice/actOrderNoticeView.do</td>
                                    <td class="lt_text" nowrap="" id="codenH55" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ55" onclick="javascript:fnCodenEdit('55');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX55" onclick="javascript:fnCodenSave('55');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">56</td>
                                    <td class="lt_text" nowrap="" id="codenA56">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB56">146</td>
                                    <td class="lt_text" nowrap="" id="codenC56">권한 관리</td>
                                    <td class="lt_text" nowrap="" id="codenG56">1906</td>
                                    <td class="lt_text3" nowrap="" id="codenD56">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE56" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF56" style="overflow:hidden;">/boffice/actGroup/actGroupList.do</td>
                                    <td class="lt_text" nowrap="" id="codenH56" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ56" onclick="javascript:fnCodenEdit('56');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX56" onclick="javascript:fnCodenSave('56');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                <tr>
                                    
                                    <td class="lt_text3" nowrap=""><input type="hidden" id="codenAA">57</td>
                                    <td class="lt_text" nowrap="" id="codenA57">COM041</td>
                                    <td class="lt_text" nowrap="" id="codenB57">155</td>
                                    <td class="lt_text" nowrap="" id="codenC57">OTP 등록</td>
                                    <td class="lt_text" nowrap="" id="codenG57">1907</td>
                                    <td class="lt_text3" nowrap="" id="codenD57">사용</td>
                                    <td class="lt_text" nowrap="" id="codenE57" style="overflow:hidden;"></td>
                                    <td class="lt_text" nowrap="" id="codenF57" style="overflow:hidden;">/boffice/actEmp/empOtpQr.do</td>
                                    <td class="lt_text" nowrap="" id="codenH57" style="overflow:hidden;"></td>
                                    <td class="lt_text3" nowrap="" id="codenZ57" onclick="javascript:fnCodenEdit('57');" style="cursor:pointer;">수정</td>
                                    <td class="lt_text3" nowrap="" id="codenX57" onclick="javascript:fnCodenSave('57');" style="cursor:pointer;">삭제</td>
                                </tr>
                                
                                
                                </tbody>
                                </table>
                    </div>
                </div>
                <!-- 상세코드 리스트 E -->
            </div>
        </div>
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'bbs')
<section class="rightCont">
    <div class="rightTitle">
        <h3>게시판 마스터</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fn_egov_insert_addBrdMstr(); return false;">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" action="/boffice/bbs/actBbsMasterList.do" method="post" class="SearchForm">
            <fieldset>
                <input type="hidden" name="pageIndex" value="1" />
                <input type="hidden" name="bbsId" />
                <input type="hidden" name="trgetId" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3" class="category_select" data-part="moving">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="0">전체</option>
                                        <option value="1">게시판명</option>
                                        <option value="2">게시판코드</option>
                                    </select>
                                    <input name="searchWrd" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="fn_egov_select_brdMstr('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <div class="total">총 <span>19</span> 건의 게시글</div>
        <form name="submitParam" method="post">
            <input type="hidden" name="bbsId" />
            <input type="hidden" name="nttId" />
        </form>
        <table class="commonTable detailTable">
            <thead>
                <tr>
                    <th scope="col" class="first_line" width="5%" nowrap="">번호</th>
                    <th scope="col" class="first_line" width="10%" nowrap="">게시판코드</th>
                    <th scope="col" class="first_line" width="*" nowrap="">게시판명</th>
                    <th scope="col" class="first_line" width="10%" nowrap="">게시판유형</th>
                    <th scope="col" class="first_line" width="8%" nowrap="">사용여부</th>
                    <th scope="col" class="first_line" width="5%" nowrap="">관리</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>19</td>
                    <td>BBS_0001</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0001">
                            공지사항
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0001'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>18</td>
                    <td>BBS_0002</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0002">
                            학원소식
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0002'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>17</td>
                    <td>BBS_0003</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0003">
                            학원강의
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0003'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>16</td>
                    <td>BBS_0004</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0004">
                            시험공고
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0004'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>15</td>
                    <td>BBS_0005</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0005">
                            경쟁률 및 합격선
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0005'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>14</td>
                    <td>BBS_0006</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0006">
                            수험가 뉴스
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0006'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>13</td>
                    <td>BBS_0007</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0007">
                            학습자료실
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0007'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>BBS_0008</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0008">
                            정오표
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0008'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>11</td>
                    <td>BBS_0009</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0009">
                            동영상강의 Q&amp;A
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0009'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>10</td>
                    <td>BBS_0010</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0010">
                            서점 Q&amp;A
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0010'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>9</td>
                    <td>BBS_0011</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0011">
                            1:1문의
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0011'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>8</td>
                    <td>BBS_0012</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0012">
                            자유게시판
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0012'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>BBS_0013</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0013">
                            동영상 학습 게시판
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0013'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>BBS_0014</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0014">
                            FAQ
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0014'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>BBS_0015</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0015">
                            자주하는 질문
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0015'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>BBS_0016</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0016">
                            REAL 합격수기
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0016'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>BBS_0017</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0017">
                            본원출신 합격자
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0017'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>BBS_0018</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0018">
                            모의고사 다운로드
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0018'">수정</button>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>BBS_0019</td>
                    <td class="tal">
                        <a href="/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0019">
                            인터넷서점 공지사항
                        </a>
                    </td>
                    <td>
                        일반
                    </td>
                    <td>
                        사용
                    </td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:location.href='/boffice/bbs/actBbsMasterView.do?bbsId=BBS_0019'">수정</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'admin')
<section class="rightCont">
    <div class="rightTitle">
        <h3>관리자 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActEmpWrite();">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="empId" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>검색어</th>
                            <td colspan="3">
                                <p>
                                    <select name="searchCnd" title="검색유형선력">
                                        <option value="all">전체</option>
                                        <option value="actEmpnm">이름</option>
                                        <option value="actempId">ID</option>
                                    </select>
                                    <input name="searchKeyword" type="text" size="35" class="shc_text" value="" maxlength="35" onkeypress="press(event);" title="검색단어입력" />
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActEmpList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>

        <!--menuTable-->
        <table class="commonTable detailTable">
            <caption>
                관리자 관리 테이블
            </caption>
            <colgroup>
                <col width="50px" />
                <col width="120px" />
                <col width="100px" />
                <col width="80px" />
                <col width="120px" />
                <col width="80px" />
                <col width="*" />
                <col width="80px" />
                <col width="60px" />
                <col width="120px" />
            </colgroup>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>관리자권한</th>
                    <th>ID</th>
                    <th>이름</th>
                    <th>부서</th>
                    <th>직위</th>
                    <th>이메일</th>
                    <th>등록일</th>
                    <th>상태</th>
                    <th>관리</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>6</td>
                    <td>총괄관리자</td>
                    <td>dbyadmin</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActEmpView('dbyadmin');">
                            이과장
                        </a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>rokmc850@gmail.com</td>
                    <td>2018-11-30</td>
                    <td>Y</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpView('dbyadmin');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpDel('dbyadmin');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>총괄관리자</td>
                    <td>daebangmajor</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActEmpView('daebangmajor');">
                            이현주
                        </a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>028234700@hanmail.net</td>
                    <td>2020-05-11</td>
                    <td>Y</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpView('daebangmajor');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpDel('daebangmajor');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>총괄관리자</td>
                    <td>yulimadmin</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActEmpView('yulimadmin');">
                            이현주1
                        </a>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>2020-11-02</td>
                    <td>Y</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpView('yulimadmin');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpDel('yulimadmin');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>게시판 관리자</td>
                    <td>dragonhani12</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActEmpView('dragonhani12');">
                            송대리
                        </a>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>2020-05-25</td>
                    <td>Y</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpView('dragonhani12');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpDel('dragonhani12');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>게시판 관리자</td>
                    <td>yulimgosiy</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActEmpView('yulimgosiy');">
                            윳대리
                        </a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>gyury@naver.com</td>
                    <td>2019-11-14</td>
                    <td>Y</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpView('yulimgosiy');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpDel('yulimgosiy');">삭제</button>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>김태촌</td>
                    <td>dragonhani</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActEmpView('dragonhani');">
                            쏭쏭쏭
                        </a>
                    </td>
                    <td></td>
                    <td>대리</td>
                    <td>028234700@naver.com</td>
                    <td>2019-05-07</td>
                    <td>Y</td>
                    <td>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpView('dragonhani');">수정</button>
                        <button type="button" class="commonBtn" onclick="javascript:fnActEmpDel('dragonhani');">삭제</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--//menuTable-->
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'basket')
<section class="rightCont">
    <div class="rightTitle">
        <h3>장바구니 공지 등록</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActOrderNoticeModify('edit');">수정</button>
        </div>
    </div>
    <div class="realCont">

        <form name="frmForm" id="frmForm" method="post" class="articleWrite">
            <input type="hidden" name="fqSj" id="fqSj" value="장바구니공지">
            <input type="hidden" name="fqSta" id="fqSta" value="Y">
            <input type="hidden" name="fqGb" id="fqGb" value="11">
            <input type="hidden" name="fqCn">
            <input type="hidden" name="fqCn2">

        <fieldset>
            <p>기본 정보</p>
            <table class="rowTable">
                <caption class="blind">기본 정보</caption>
                <colgroup>
                    <col style="width:130px">
                    <col style="width:*">
                    <col style="width:130px">
                    <col style="width:*">
                </colgroup>
                <tbody>	
                    <tr>
                        <th scope="row"><strong>상세설명 (동영상)</strong></th>
                        <td colspan="3">
                          <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("fqCn");
                            </script><div id="dext_frame_holderfqCn" style="width:100%; height:300px; " class="DEXT_frame_resizebar"><iframe frameborder="0" scrolling="no" id="dext_frame_fqCn" title="에디터 전체영역" width="100%" height="100%" style="width: 100%; height: 100%;" src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"></iframe><div id="dext_resizebar_fqCn" class="DEXT_resizebar DEXT_resizebar_blue"><div class="DEXT_resizebar_btn" id="dext_resizebar_btn_fqCn"><div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_fqCn"></div><button type="button" id="DEXT_resizebar_button_fqCn" title="에디터 높이 조절"></button></div></div></div>
                          <!--//editor-->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>상세설명 (서점)</strong></th>
                        <td colspan="3">
                          <!--editor-->
                            <script type="text/javascript">
                                DEXT5.config.Width = "100%";
                                DEXT5.config.Height = "300px";
                                var editor = new Dext5editor("fqCn2");
                                function dext_editor_loaded_event(editor) {
                                    DEXT5.setBodyValue('<p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;" 150%;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">※ 본원에서 서비스되는 동영상강좌는 <span style="color: rgb(255, 0, 0); line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">강의 재생이 가능한 컴퓨터의 대수를 2대(개인PC 또는 본인이 직접 관리가 가능한 PC)로 제한</span>하고 있습니다.&nbsp;</span></span><strong style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span class="&quot;mycart&quot;" style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">처음 강의를 재생하는 순서대로 2대 적용(모바일 강의 동일)</span></span></strong><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">&nbsp;</span></span></b></span><span style="color: rgb(0, 0, 255); line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;"><b 150%;&quot;="" style="letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">(강의 오픈 후 처음 지정된 컴퓨터 수강기간 중 변경 불가)&nbsp;&nbsp;<span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 255);&quot;="" 55,="" rgb(0,="">본인이 관리하지 않는 PC.&nbsp;</span></span></span></b><b 150%;&quot;="" style="letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 255);&quot;="" 55,="" rgb(0,="">예를들어 공공시설(도서관, 독서실, 피씨방)에서의 사용으로 인하여 발생되는 문제에 대해서는 일체 책임을 지지 않습니다.&nbsp;&nbsp;</span></span></span></b></span><span style="font-family: Verdana; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"><b 150%;&quot;="" style="color: rgb(0, 0, 255); letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">강의수강에 피해를 입지 않도록 공지해 드린 사항에 대해서는 각별히 유의하시기 바랍니다.<span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;<span style="color: rgb(255, 0, 0); line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">개인이 관리할 수 없는 공용 PC의 기기등록은 권장하지 않습니다</span>. [</span></span></span></b><span style="letter-spacing: -0.36px; line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;" 150%;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 0);&quot;="" 0,="" rgb(255,="">도서관, 독서실, 피씨방(하드보안 프로그램이 설치되어있는 공용컴퓨터)에서&nbsp;</span></span></span></b><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;" 150%;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 0);&quot;="" 0,="" rgb(255,="" 9pt;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">기기등록시 컴퓨터 전원을 껐다 킨후에&nbsp;</span></span></b></span><span style="letter-spacing: -0.36px; color: rgb(0, 0, 255); line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;"><b 150%;&quot;="" style="letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 0);&quot;="" 0,="" rgb(255,="" 9pt;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">강의 재생을 하면 다시 기기등록을 하라고 뜨기 때문에 절대 기기등록을 하시면 안됩니다.]</span></span></b></span></span></p><p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; font-weight: 400; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;="">&nbsp;</p><p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; font-weight: 400; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;=""><span 9pt&quot;="" style="letter-spacing: -0.36px; margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;">※<span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;</span></b></span></span><span style="letter-spacing: -0.36px; line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><strong style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span class="&quot;mycart&quot;" style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">강의신청 전 꼭! <span style="color: rgb(255, 0, 0); font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">샘플강의를 확인</span></span></span></strong><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="color: rgb(255, 0, 0); font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">하여 강의가 잘 나오는지 확인</span>해 주시기 바랍니다.&nbsp;</span></span></b></span><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 255);&quot;="" 46,="" rgb(16,="">동영상 강의수강은 &#39;스타플레이어&#39;가 정상설치되어 플레이어를 통한 재생</span>이 되야 합니다.&nbsp;</span></span></b><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">샘플이 정상적 재생이 안되는 경우는 컴퓨터 설정 및 인터넷 회선의 문제일 수가 있으니&nbsp;</span></span></b><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">&#39;동영상 장애가이드(</span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; cursor: pointer; text-size-adjust: 100%; color: rgb(0, 0, 255); font-size: 10pt;" href="http://yulimgosi.com/front/viewAritcle.do?bbsId=BBS_0001&amp;nttId=34232&amp;authFlag=&amp;pageIndex=1&amp;searchCnd=1&amp;searchWrd=" target="_blank" title="" id="" class="">클릭</a></span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">)&#39;를 우선 참고하신 후 해결이 어려운 경우 월 ~ 금 [오전 10시 ~ 저녁 6시]에 학원으로 전화주시기 바랍니다.&nbsp;</span></span></b><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">모바일 강의의 경우 데이터무제한 요금제 사용자가 아닌경우 필히 wi-fi 환경에서 수강하셔야 합니다.&nbsp;</span></span></b><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">(아닌 경우 요금 과다 청구), 모바일 강의 신청자의 경우 반드시 모바일 강좌안내 페이지를 확인하세요.</span></span></b><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">(<span style="cursor: pointer; font-size: 10pt; font-family: Verdana; line-height: 20px; margin-top: 0px; margin-bottom: 0px;"><a href="http://naver.me/F4P8cAcz" target="_blank" title="" id="" class="">모바일 강좌안내 - 클릭</a></span>) / <span style="color: rgb(255, 0, 0); font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">모바일 강의는 한 강의당 다운로드 회수가 3회까지 제한</span>되어 있습니다.</span></span></b></p><p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; font-weight: 400; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;="">&nbsp;</p><p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; font-weight: 400; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;=""><b 150%;&quot;="" style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">※ 본원의 동영상 강의는 해외에서는 수강이 불가능합니다.</span></span></b></p><p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; font-weight: 400; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;" 150%;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt;&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><br><b 150%;&quot;="" style="font-size: 10pt; letter-spacing: -0.36px; margin: 0px; padding: 0px; text-size-adjust: 100%;"><span 9pt;&quot;="" style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">※ 본원에서는 안정적인 웹서비스를 위해 월 2회 서버점검을 실시하고 있습니다. 주로 새벽시간대에 진행하며, 점검 시간[약 2시간 내외]대에는 사이트 이용이 일시적으로 이용불가할 수 있습니다.</span></span></b></span></span></b></span></p><p style="margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); text-transform: none; line-height: 1.5; text-indent: 0px; letter-spacing: -0.36px; font-family: 굴림; font-size: 12pt; font-style: normal; font-weight: 400; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" 150%&quot;="">&nbsp;</p><p style="line-height: 1.5; font-family: 굴림; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;"><span style="color: rgb(0, 0, 255); line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;">※<span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;</span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" #ffff00&quot;="">동영상 강의 서비스는 대방열림고시학원 부속기관인&nbsp;&lt; 대방열림 원격평생교육원 (등록번호 = 남부교육지원청 제 729호)&nbsp;&gt;에서 제공하고 있습니다.</span><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;</span></b></span></span></b></span><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;">동영상 강의 환불규정은 학원법이 아닌 평생교육법에 근거 처리되고 있습니다. 아</b></span></span></b></span><span style="color: rgb(0, 0, 255); line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;">래의 링크를 확인해주시기 바랍니다.&nbsp;</b></span></span></b></span><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="color: rgb(255, 0, 0); font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">강의 취소시 추후 강의신청이 불가</span>하니 처음 강의신청 시 참고해 주시기 바랍니다.&nbsp;</b></span></span><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">(</span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="cursor: pointer; font-size: 10pt; font-family: Verdana; line-height: 20px; margin-top: 0px; margin-bottom: 0px;"><a href="http://028234700.blog.me/130183282351" target="_blank" title="" id="" class="">동영상 환불 규정 보러가기 - 클릭</a></span></span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">)&nbsp;</span></span></b></b><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">**<span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;</span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 0);&quot;="" 0,="" rgb(255,="">모바일 강의의 경우 다운로드 한 강의는 강의수강으로 인정됨. / 보충프린트 다운로드도 해당 관련 강의들 수강으로 인정이 됩니다. [패키지반 및 종합반은 단과로 신청하는 것과 비교시 수강료와 기간에 혜택이 있습니다. 패키지 또는 종합으로 신청시 드리는 혜택이기 때문에, 패키지반 및 종합반 수강 취소시 수강내역을 단과로 적용하여 차감합니다.]</span></span></span></b></b></p><p style="margin: 0px; padding: 0px; line-height: 1.5; font-family: 굴림; font-size: 12pt; text-size-adjust: 100%;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; text-transform: none; text-indent: 0px; letter-spacing: -0.36px; font-style: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 10pt;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 본원의 동영상 강의는 강의기간에 대한 일시중지 및 연장서비스가 되지 않습니다.&nbsp;종합반의 경우 유료연장 기능이 활성화 되어 있는 강의의 경우 종강 7일 전 유료연장 여부 메세지가 노출됩니다.&nbsp;</span></span></b></b></span></p><p style="margin: 0px; padding: 0px; line-height: 1.5; font-family: 굴림; font-size: 12pt; text-size-adjust: 100%;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; text-transform: none; text-indent: 0px; letter-spacing: -0.36px; font-style: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 10pt;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><span style="color: rgb(255, 0, 0); font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">선행학습반 동영상 강의는 별도 유료 연장처리가 되지 않습니다.</span><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 동영상 공유 시 문제가 발생될 수 있으며, 공유적발 시 동영상 강의에 제제(차단) 및 어떤 상담업무도 진행 될 수 없습니다.&nbsp;</span></span></b></b></span><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">동시접속 2회 이상 발생 시 강의제제 조치. </span></span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">불법행위(캡쳐 및 기타) 적발 시 강의폐쇄 및 저작권법 관련 법무법인을 통한 조치. 불법행위[공유 혹은 캡쳐시도 등]로 인해 차단된 계정은 환불처리가 불가능합니다.</span></span></b></b></p><p style="margin: 0px; padding: 0px; line-height: 1.5; font-family: 굴림; font-size: 12pt; text-size-adjust: 100%;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; text-transform: none; text-indent: 0px; letter-spacing: -0.36px; font-style: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 10pt;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 동영상 관련 지원 서비스는 신청자<span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;</span></span></span><strong style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span class="&quot;mycart&quot;" style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">본인만 가능</span></span></strong><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">하며, 친구 및 가족 등 본인이 아닌 경우 기술지원 업무가 되지 않습니다. (</span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">공유 적발의 경우 강의기간 종료시까지 기술지원 불가</span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">)<br style="margin: 0px; padding: 0px; text-size-adjust: 100%;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※<span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; font-size: 10pt; font-family: Verdana;">&nbsp;</span></span></span><strong style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span class="&quot;mycart&quot;" style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">동영상 강의는 결제일 기준 7일 이내 수강시작일을 지정할 수 있습니다.</span></span></strong><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">&nbsp;다음과 같은 경우 [교재를 수령하였는데 보름 뒤, 또는 그 후부터 오픈을 원하는 경우]에는 미리 강의를 신청하지 마시고, 회원님이 수강을 시작하고자 하는 시기에 신청해 주시기 바랍니다.<br style="margin: 0px; padding: 0px; text-size-adjust: 100%;"></span><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 별도로 제공되는 <span style="color: rgb(255, 0, 0); font-family: Verdana; font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px;">문제풀이 강의교재에 대한 답안은 별도로 준비되어 있지 않으므로 반드시 강의를 통해서 확인</span>&nbsp;해야 합니다.<br style="margin: 0px; padding: 0px; text-size-adjust: 100%;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 모의고사가 첨부된 직렬의 경우 수강기간 동안 나의강의실 내 &#39;모의고사 다운로드&#39; 게시판에서 확인이 가능합니다. 수강기간동안 다운이 가능합니다. 홈페이지 나의강의실 내 &#39;학습게시판&#39;도 동영상 강의 수강기간 동안 이용이 가능합니다. [수강기간이 끝난 후에도 학습게시판을 계속 이용할 수 있다면 답변자는 한사람인데 질문자는 계속 누적이 되기 때문에 정상적인 처리가 불가능합니다.]<br style="margin: 0px; padding: 0px; text-size-adjust: 100%;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 무료로 제공되는 교재인 경우 별도 판매되지 않으니 분실되지 않도록 각별히 주의하시기 바랍니다.</span></span></b></b></span></p><p style="margin: 0px; padding: 0px; line-height: 1.5; font-family: 굴림; font-size: 12pt; text-size-adjust: 100%;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; text-transform: none; text-indent: 0px; letter-spacing: -0.36px; font-style: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><strong style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 학원직강 커리큘럼에 맞춰 동영상 촬영이 진행되는 기간에는&nbsp;학원강의가 있는 다음날 오전 11시 ~</strong></span></b></span><b style="color: rgb(0, 0, 255); font-family: Verdana; font-size: 10pt; margin: 0px; padding: 0px; text-align: justify; letter-spacing: -0.36px; background-color: rgb(255, 255, 255); text-size-adjust: 100%;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><strong style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;">낮&nbsp; 12시 사이 동영상 강의 업데이트가 됩니다. [단, 토요일 강의는 일요일이 아닌 월요일 오전에 업데이트가 진행 됩니다.]</strong></span></b></p><p style="margin: 0px; padding: 0px; line-height: 1.5; font-family: 굴림; font-size: 12pt; text-size-adjust: 100%;" 150%&quot;=""><span style="line-height: 1.5; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 255); font-size: 10pt; font-family: Verdana;"><b style="margin: 0px; padding: 0px; text-align: justify; text-transform: none; text-indent: 0px; letter-spacing: -0.36px; font-style: normal; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); text-size-adjust: 100%; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 10pt;"><b style="margin: 0px; padding: 0px; text-size-adjust: 100%; font-size: 10pt;"><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;" 9pt&quot;=""><span style="margin: 0px; padding: 0px; line-height: 1.5; text-size-adjust: 100%; font-size: 10pt; font-family: Verdana;">&nbsp;<br style="margin: 0px; padding: 0px; text-size-adjust: 100%;">※ 동영상과 관련된 상담전화는 월 ~ 금 / 9시 ~ 18시 (토요일은 오후 1시)까지만 가능합니다. 일요일은 휴무입니다.</span></span></b></b></span></p>', "fqCn");
                                    DEXT5.setBodyValue('<p style="line-height: 1.5; font-family: 굴림; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;"><span style="font-family: Verdana; color: rgb(0, 0, 255); font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"><strong><span style="font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px; font-family: Verdana;">교재는 결제일 기준으로 2~3일 이내에 수령 가능합니다.&nbsp;</span></strong></span><span style="color: rgb(0, 0, 255); font-family: 굴림; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"><strong style="font-family: Verdana; font-size: 12pt;"><span style="font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px; font-family: Verdana;">결제한 다음날 오전부터 송장조회가 가능합니다. [단, 토요일 결제건은 화요일 오전부터 조회가능]</span></strong></span></p><p style="line-height: 1.5; font-family: 굴림; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;"><span style="font-family: Verdana; color: rgb(0, 0, 255); font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"><strong><span style="font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px; font-family: Verdana;">교재 환불은 교재수령일 기준으로 7일 이내에만 가능합니다.&nbsp;</span></strong></span><span style="color: rgb(0, 0, 255); font-family: 굴림; font-size: 12pt; line-height: 24px; margin-top: 0px; margin-bottom: 0px;"><strong style="font-family: Verdana; font-size: 12pt;"><span style="font-size: 10pt; line-height: 20px; margin-top: 0px; margin-bottom: 0px; font-family: Verdana;">교재에 낙서나 접힌부분이 있는 경우 환불이 불가합니다. 포장지를 뜯은경우도 불가.<br>환불시 모든 배송비 부담은 구매자가 부담합니다.</span></strong></span></p><p style="line-height: 1.5; font-family: 굴림; font-size: 12pt; margin-top: 0px; margin-bottom: 0px;">&nbsp;</p>', "fqCn2");
                                }
                            </script><div id="dext_frame_holderfqCn2" style="width:100%; height:300px; " class="DEXT_frame_resizebar"><iframe frameborder="0" scrolling="no" id="dext_frame_fqCn2" title="에디터 전체영역" width="100%" height="100%" style="width: 100%; height: 100%;" src="http://221.139.104.100:8086/editor/dext5editor/pages/editor_release.html?ver=3.5.1267791.1000.01"></iframe><div id="dext_resizebar_fqCn2" class="DEXT_resizebar DEXT_resizebar_blue"><div class="DEXT_resizebar_btn" id="dext_resizebar_btn_fqCn2"><div class="DEXT_resizebar_horizon_line" id="DEXT_resizebar_horizon_line_fqCn2"></div><button type="button" id="DEXT_resizebar_button_fqCn2" title="에디터 높이 조절"></button></div></div></div>
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
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'authority')
<section class="rightCont">
    <div class="rightTitle">
        <h3>권한그룹 관리</h3>
        <div class="btnWrap">
            <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnActGroupView();">등록</button>
        </div>
    </div>
    <div class="realCont">
        <form name="frm" method="post" class="SearchForm">
            <fieldset>
                <input name="pageIndex" type="hidden" value="1" />
                <input name="groupId" type="hidden" />
                <table class="rowTable">
                    <colgroup>
                        <col style="width: 9%;" />
                        <col style="width: 350px;" />
                        <col style="width: 9%;" />
                        <col style="width: *;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>권한그룹명검색</th>
                            <td colspan="3">
                                <p>
                                    <input type="hidden" name="searchCnd" id="searchCnd" value="groupNm" />
                                    <input type="text" class="sch_text" name="searchKeyword" id="searchKeyword" value="" maxlength="35" onkeypress="press(event);" />
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btnsWrap">
                    <button type="button" class="" onclick="javascript:fnActGroupList('1'); return false;">검색</button>
                </div>
            </fieldset>
        </form>
        <!-- //sch_list -->

        <div class="total">총 <span>8</span>건</div>

        <!-- listType05 -->
        <table class="commonTable detailTable">
            <caption class="blind">
                권한그룹 목록
            </caption>
            <colgroup>
                <col width="60px" />
                <col width="150px" />
                <col width="160px" />
                <col width="*" />
                <col width="100px" />
                <col width="100px" />
                <col width="100px" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" class="first_line">번호</th>
                    <th scope="col" class="first_line">ID</th>
                    <th scope="col" class="first_line">그룹명</th>
                    <th scope="col" class="first_line">설명</th>
                    <th scope="col" class="first_line">레벨</th>
                    <th scope="col" class="first_line">생성일</th>
                    <th scope="col" class="first_line">권한관리</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000001');">
                            G000001
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000001');">
                            총괄관리자
                        </a>
                    </td>
                    <td>총괄관리자</td>
                    <td>총괄관리자</td>
                    <td>2017-10-25</td>
                    <td></td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000040');">
                            G000040
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000040');">
                            이과장 서브
                        </a>
                    </td>
                    <td></td>
                    <td>총괄관리자</td>
                    <td>2019-05-13</td>
                    <td></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000050');">
                            G000050
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000050');">
                            테스트확인용
                        </a>
                    </td>
                    <td>테스트확인용</td>
                    <td>일반관리자</td>
                    <td>2020-04-14</td>
                    <td>
                        <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActGroupAuth('G000050');"><span>권한관리</span></a>
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000002');">
                            G000002
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000002');">
                            신청관리자
                        </a>
                    </td>
                    <td>신청관리자</td>
                    <td>일반관리자</td>
                    <td>2017-10-25</td>
                    <td>
                        <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActGroupAuth('G000002');"><span>권한관리</span></a>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000013');">
                            G000013
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000013');">
                            게시판 관리자
                        </a>
                    </td>
                    <td>게시판 관리</td>
                    <td>일반관리자</td>
                    <td>2017-12-19</td>
                    <td>
                        <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActGroupAuth('G000013');"><span>권한관리</span></a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000021');">
                            G000021
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000021');">
                            테스트
                        </a>
                    </td>
                    <td></td>
                    <td>일반관리자</td>
                    <td>2019-03-13</td>
                    <td>
                        <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActGroupAuth('G000021');"><span>권한관리</span></a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000030');">
                            G000030
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000030');">
                            김태촌
                        </a>
                    </td>
                    <td>송전용</td>
                    <td>일반관리자</td>
                    <td>2019-05-07</td>
                    <td>
                        <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActGroupAuth('G000030');"><span>권한관리</span></a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000000');">
                            G000000
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" onclick="javascript:fnActGroupView('G000000');">
                            기본그룹
                        </a>
                    </td>
                    <td>기본그룹(일반사용자)</td>
                    <td></td>
                    <td>2017-10-25</td>
                    <td>
                        <a href="javascript:void(0);" class="button_v2" onclick="javascript:fnActGroupAuth('G000000');"><span>권한관리</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- //listType05 -->

        <!-- pagingType03 -->
        <div class="pageNation clear">
            <ul class="pagenation">
                <li class="pn_paging_set pn_paging on"><a href="javascript:void(0);" class="pn_page">1</a></li>
            </ul>
        </div>
        <!-- //pagingType03 -->
    </div>
</section>
@elseif(request()->segment(2) == 'site' && request()->segment(3) == 'otp')
<section class="rightCont">
    <div class="rightTitle">
        <h3>OTP신규등록</h3>
    </div>
    <div class="realCont">
      <div class="imgsection">
          <img src="/img/loginImg.jpg" alt="" id="otpImg">
        <iframe src="" id="otpQrcode" height="320" width="320" style="border:0;padding:10px;display:none;"></iframe>
        <p style="margin-bottom:10px;"><span id="otpKeycode" style="margin-bottom:7px;"></span></p>
      </div>
    </div>
    <div class="btnWrap">
        <button type="button" class="colorBtn rightbluebtn plusIcon act_ins" onclick="javascript:fnAjaxOtpCall();">OTP신규등록</button>
    </div>
</section>
@endif
<script type="text/javascript">
    var seg2 = '{{@request()->segment(2)}}'+'/';
    var seg3 = '{{@request()->segment(3)}}'+'/';

    function go_write_url(){
        location.href = "/boffice/"+seg2+seg3+'write';
    }

    function go_modify_url(){
        location.href = "/boffice/"+seg2+seg3+'modify';
    }
</script>
</section>