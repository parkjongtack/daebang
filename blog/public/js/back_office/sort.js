//순서변경 기능--------------------------------------------------------------------------
function fnTranSeqAuto(cd){
	$("form[name='frmEquip"+cd+"'] input[name=codeSq]").each(function(idx,elem){
		$(this).val(idx+1);
	});
}
function fnTranSeqSave(cd){
	if(confirm("순서변경을 적용하시겠습니까?")){
		var formData = $("#frmEquip"+cd).serialize();
		var url = "/boffice/actLecture/updateActLecCodeSeq.do";
		var param = formData;
		if(commonUtil.AjaxSynCall(url,param)=="success"){
			alert("수정되었습니다.");
			location.href="/boffice/actLecture/actLecCategory.do";
		}
	}
}

$(function() {
	$(".sortWrap, #sortWrap").sortable({
		axis: "y",
		containment: "parent",
		update: function (event, ui) {
			var order = $(this).sortable('toArray', {
				attribute: 'data-order'
			});
			console.log(order);
		}
	});
});