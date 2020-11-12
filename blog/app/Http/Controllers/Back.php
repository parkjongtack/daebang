<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;
use App\Classes\PHPGangsta_GoogleAuthenticator;

class Back extends Controller
{

	public function logout() {
		session_destroy();
		echo "<script>alert('로그아웃 되었습니다.');location.href = '/boffice/login';</script>";
	}

	public function actionOtpCheck(Request $request) {

		//$hashed = base64_encode(hash('sha512', $request->password, true));
		$admin_member_check = DB::table('info_emplyr')->where('EMPLYR_ID', $request->id)->get()->first();
		$admin_member_count = DB::table('info_emplyr')->where('EMPLYR_ID', $request->id)->get()->count();
		
		/*
		if($admin_member_count <= 0) {
			echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');history.go(-1);</script>";
			exit;
		}
		*/

		$timeSlice = time() / 30000;

		$ga = new PHPGangsta_GoogleAuthenticator();
		$checkResult = $ga->verifyCode($admin_member_check->OTP_REGCD, $request->otpRegcd, null);

		$return_list = array();

		if($checkResult) {

			$_SESSION['admin_id'] = $request->id;

			$return_list["message"] = "Success";
		} else {
			$return_list["message"] = "NEQ";
		}

		return json_encode($return_list);
	}

	public function getBarcodeURL(Request $request) {

		$ga = new PHPGangsta_GoogleAuthenticator();
		$secret = $ga->createSecret();

		$return_list = array();
		$return_list["url"] = sprintf("http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=otpauth://totp/%s@%s%%3Fsecret%%3D%s&chld=H|0", "manager", "yulimgosi.com", $secret);
		$return_list["encodedKey"] = $secret;
		
		DB::table('info_emplyr')->where('EMPLYR_ID', $request->id)->update(
			[
				'OTP_REGCD' => $secret,
			]
		);

		return json_encode($return_list);
	}

    public function login(Request $request) {

        $return_list = array();

        if($request->segment(2) == 'login'){

            return view('/boffice/page/'.$request->segment(2), $return_list);

        }

        if($request->segment(2) == 'login_otp'){

			$hashed = base64_encode(hash('sha512', $request->password, true));
			$admin_member_count = DB::table('info_emplyr')->where('EMPLYR_ID', $request->id)->where('PASSWORD', $hashed)->get()->count();
			
			if($admin_member_count <= 0) {
				echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');history.go(-1);</script>";
				exit;
			}

			$otp_data = DB::table('info_emplyr as A')
							->select(DB::raw('ifnull(OTP_REGCD,"") as LV'))
							->where('A.EMPLYR_ID', $request->id)
							->whereRaw("ifnull(EMPLYR_STTUS_CODE,'P') = ?", ['P'])
							->get()
							->first();

			if(!$otp_data->LV) {
				$return_list["encodedKey"] = "NONE";
			} else {
				$return_list["encodedKey"] = "EXIT";
			}

            return view('/boffice/page/'.$request->segment(2), $return_list);

        }

    }


    public function list(Request $request) {

        $return_list = array();
        $view_sub = '/boffice/page';
		
		$searchOp2 = "";
		$searchOp6 = "";
		$searchOp7 = "";
		$searchSdt = "";
		$searchEdt = "";
		$searchWrd = "";
		$searchUserId = "";

		if($request->segment(3) == "video_qa" && $request->segment(4) == "list") {
			$bbsId = "BBS_0009";
		}

		$bbs_query = "SELECT AAA.*
				, (SELECT TOP 1 NTCR_NM FROM bbs_t  WHERE USE_AT = 'Y' AND REPLY_NO = AAA.NTT_ID) AS REPLY_ID 
				, DBO.GETCODENAME((SELECT CATE_CD FROM bbs_master WHERE BBS_ID=AAA.BBS_ID),AAA.NTT_CAT) NTT_CAT_NM
				, (CASE WHEN BBS_ID = 'BBS_0007' OR BBS_ID = 'BBS_0013' THEN (SELECT MV_SUBJECT FROM lecture_t WHERE MV_IDX = AAA.NTT_CAT) ELSE '' END) NTT_LEC_NM
				, (CASE WHEN BBS_ID = 'BBS_0001' OR BBS_ID = 'BBS_0018' THEN DBO.GETLECNAME(AAA.NTT_CAT) ELSE '' END) NTT_LEC_CD_NM
				, (CASE WHEN BBS_ID = 'BBS_0010' AND ISNULL(THUM_FILE_ID,'') <> '' THEN (SELECT BM_PIC FROM book_ma WHERE BM_IDX = THUM_FILE_ID) ELSE '' END) BM_PIC
				, (CASE WHEN BBS_ID = 'BBS_0010' AND ISNULL(THUM_FILE_ID,'') <> '' THEN (SELECT BM_SUBJECT FROM book_ma WHERE BM_IDX = THUM_FILE_ID) ELSE '' END) BM_SUBJECT
		FROM ( SELECT ROW_NUMBER() OVER(ORDER BY";

		if($searchOp2 != "main") {
			
			$bbs_query .= "DBO.FNDECODE(TB.NTT_TOP,'','N',TB.NTT_TOP) DESC,";
			
		}

		$bbs_query .= "NTT_SEQ, TB.SORT_ORDR DESC, TB.NTT_NO ASC) rn, TB.* FROM (
			SELECT
				DBO.FNDECODE(REPLY_NO,'0',a.NTT_ID,REPLY_NO) NTT_ID, 
				a.NTT_SJ, 
				(CASE a.BBS_ID WHEN 'BBS_0014' THEN a.NTT_CN ELSE '' END) NTT_CN, 
				a.REGID, 
				a.NTCR_NM,
				a.REGDT,
				a.MODDT,
				a.RDCNT, a.REPLY_NO, a.REPLY_AT, a.REPLY_LC, a.USE_AT, a.THUM_FILE_ID, a.ATCH_FILE_ID,
				a.BBS_ID,
				a.NTT_SEQ,
				a.NTT_LOCK,
				a.NTT_TOP,
				a.NTT_CAT,
				a.NTT_NO,
				a.NTT_ID NTT_ID_OR,
				a.NTT_MAIN,
				a.NTT_REGDT,
				a.NTT_HIDDEN,
				a.SORT_ORDR,
				a.REGIP
			FROM
				bbs_t a
			LEFT OUTER JOIN 
				v_user_master b
			ON a.REGID = b.USER_ID 
			WHERE
				a.BBS_ID = '".$bbsId."' AND a.USE_AT IN('Y','T')";

		if(($bbsId == "BBS_0007" || $bbsId == "BBS_0013") && $nttcat != null && $nttcat != "") {

			$bbs_query .= "AND A.NTT_CAT IN (SELECT MV_IDX FROM LECTURE_T WHERE MV_SUBJECT LIKE '%".$nttcat."%')";
			
		}

		if($searchOp6 != "") {
			$bbs_query .= "AND A.NTT_CAT = '".$searchOp6."'";
		}

		if($searchOp7 != "") {
			$bbs_query .= "AND ISNULL(A.NTT_HIDDEN,'N') = '".$searchOp7."'";
		}

		if($searchSdt != "") {
			$bbs_query .= "AND CONVERT(VARCHAR(10),A.REGDT,120) >= '".$searchSdt."'";
		}

		if($searchEdt != "") {
			$bbs_query .= "AND CONVERT(VARCHAR(10),A.REGDT,120) <= '".$searchEdt."'";
		}

		if($searchWrd != null && $searchWrd != "") {
			if($searchCnd == 1) {
				$bbs_query .= "AND a.NTT_SJ LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 2) {
				$bbs_query .= "AND a.NTT_CN LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 3) {
				$bbs_query .= "AND a.NTCR_NM LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 4) {
				$bbs_query .= "AND a.NTT_REGDT LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 0) {
				$bbs_query .= "AND (
										a.NTT_SJ LIKE '%".$searchWrd."%'
										OR a.NTT_CN LIKE '%".$searchWrd."%'
										OR a.NTCR_NM LIKE '%".$searchWrd."%'
										OR a.NTT_REGDT LIKE '%".$searchWrd."%'
										)";
			}
		}

		if($searchUserId != null && $searchUserId != "") {
			$bbs_query .= "AND ((a.NTCR_ID = '".$searchUserId."' AND REPLY_NO='0') OR REPLY_NO IN (SELECT NTT_ID FROM BBS_T WHERE NTCR_ID = '".$searchUserId."' AND USE_AT = 'Y'))";
		}

		//$bbs_query .= ") TB ) AAA WHERE rn BETWEEN #{firstIndex} + 1 AND #{firstIndex} + #{recordCountPerPage}";
		$bbs_query .= ") TB ) AAA WHERE rn BETWEEN 0 + 1 AND 0 + 10";

echo $bbs_query;
exit;
		$bbs_list = DB::select($bbs_query);
		
		$bbs_query = "SELECT COUNT(a.NTT_ID) as cnt";

		$bbs_query .= "	FROM
				bbs_t a
			LEFT OUTER JOIN 
				v_user_master b
			ON a.REGID = b.USER_ID 
			WHERE
				a.BBS_ID = '".$bbsId."' AND a.USE_AT IN('Y','T')";

		if(($bbsId == "BBS_0007" || $bbsId == "BBS_0013") && $nttcat != null && $nttcat != "") {

			$bbs_query .= "AND A.NTT_CAT IN (SELECT MV_IDX FROM LECTURE_T WHERE MV_SUBJECT LIKE '%".$nttcat."%')";
			
		}

		if($searchOp6 != "") {
			$bbs_query .= "AND A.NTT_CAT = '".$searchOp6."'";
		}

		if($searchOp7 != "") {
			$bbs_query .= "AND ISNULL(A.NTT_HIDDEN,'N') = '".$searchOp7."'";
		}

		if($searchSdt != "") {
			$bbs_query .= "AND CONVERT(VARCHAR(10),A.REGDT,120) >= '".$searchSdt."'";
		}

		if($searchEdt != "") {
			$bbs_query .= "AND CONVERT(VARCHAR(10),A.REGDT,120) <= '".$searchEdt."'";
		}

		if($searchWrd != null && $searchWrd != "") {
			if($searchCnd == 1) {
				$bbs_query .= "AND a.NTT_SJ LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 2) {
				$bbs_query .= "AND a.NTT_CN LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 3) {
				$bbs_query .= "AND a.NTCR_NM LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 4) {
				$bbs_query .= "AND a.NTT_REGDT LIKE '%".$searchWrd."%'";
			}
			if($searchCnd == 0) {
				$bbs_query .= "AND (
										a.NTT_SJ LIKE '%".$searchWrd."%'
										OR a.NTT_CN LIKE '%".$searchWrd."%'
										OR a.NTCR_NM LIKE '%".$searchWrd."%'
										OR a.NTT_REGDT LIKE '%".$searchWrd."%'
										)";
			}
		}

		if($searchUserId != null && $searchUserId != "") {
			$bbs_query .= "AND ((a.NTCR_ID = '".$searchUserId."' AND REPLY_NO='0') OR REPLY_NO IN (SELECT NTT_ID FROM BBS_T WHERE NTCR_ID = '".$searchUserId."' AND USE_AT = 'Y'))";
		}

		//$bbs_query .= ") TB ) AAA WHERE rn BETWEEN #{firstIndex} + 1 AND #{firstIndex} + #{recordCountPerPage}";
		//$bbs_query .= ") TB ) AAA WHERE rn BETWEEN 0 + 1 AND 0 + 10";

		$bbs_cnt = DB::select($bbs_query);

        //게시판
        if($request->segment(3) == 'cate' && $request->segment(4) == 'setting'){

            echo $view_sub;
            return view($view_sub.'/bbs/list', $return_list);

        }

        return view($view_sub.'/bbs/list', $return_list);

    }

    public function view(Request $request) {

        $return_list = array();
        $view_sub = '/boffice/page';

        //게시판
        if($request->segment(3) == 'cate' && $request->segment(4) == 'setting'){

            echo $view_sub;
            return view($view_sub.'/bbs/view', $return_list);

        }

        return view($view_sub.'/bbs/view', $return_list);

    }

    public function write(Request $request) {

        $return_list = array();
        $view_sub = '/boffice/page';

        //게시판
        if($request->segment(3) == 'cate' && $request->segment(4) == 'setting'){

            echo $view_sub;
            return view($view_sub.'/bbs/write', $return_list);

        }

        return view($view_sub.'/bbs/write', $return_list);

    }

    public function modify(Request $request) {

        $return_list = array();
        $view_sub = '/boffice/page';

        //게시판
        if($request->segment(3) == 'cate' && $request->segment(4) == 'setting'){

            echo $view_sub;
            return view($view_sub.'/bbs/modify', $return_list);

        }

        return view($view_sub.'/bbs/modify', $return_list);

    }

}
?>