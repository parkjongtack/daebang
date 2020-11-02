<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//----------------------------------------------------------------------
//사용자 페이지 시작
//----------------------------------------------------------------------

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('/sub/site_info/login');
});

Route::get('/join/join_step1', function () {
    return view('/sub/site_info/join1');
});

Route::get('/join/join_step2', function () {
    return view('/sub/site_info/join2');
});

Route::post('/join/join_step3', function () {
    return view('/sub/site_info/join3');
});

Route::get('/join/join_step4', function () {
    return view('/sub/site_info/join4');
});

Route::get('/site_info/use_info', function () {
    return view('/sub/site_info/use_info');
});

Route::get('/site_info/personal', function () {
    return view('/sub/site_info/personal');
});

Route::get('/site_info/agree', function () {
    return view('/sub/site_info/agree');
});

Route::get('/site_info/use_info', function () {
    return view('/sub/site_info/use_info');
});

Route::get('/site_info/my_page/order', function () {
    return view('/sub/site_info/order');
});

Route::get('/site_info/my_page/receipt', function () {
    return view('/sub/site_info/receipt');
});

Route::get('/site_info/my_page/receipt_open', function () {
    return view('/sub/site_info/receipt_open');
});

Route::get('/site_info/my_page/shopping', function () {
    return view('/sub/site_info/shopping');
});

Route::get('/site_info/my_page/video_qa', function () {
    return view('/sub/site_info/video_qa');
});

Route::get('/site_info/my_page/bookstore_qa', function () {
    return view('/sub/site_info/bookstore_qa');
});

Route::get('/site_info/my_page/inquiry', function () {
    return view('/sub/site_info/inquiry');
});

Route::get('/site_info/my_page/my_info', function () {
    return view('/sub/site_info/my_info');
});

Route::get('/site_info/my_page/member_out', function () {
    return view('/sub/site_info/member_out');
});

Route::get('/site_info/my_classroom/running', function () {
    return view('/sub/site_info/running');
});

Route::get('/site_info/my_classroom/running_end', function () {
    return view('/sub/site_info/running_end');
});

Route::get('/site_info/my_classroom/device', function () {
    return view('/sub/site_info/device');
});

Route::get('/site_info/my_classroom/practice', function () {
    return view('/sub/site_info/practice');
});

Route::get('/site_info/my_page/inquiry_write', function () {
    return view('/sub/site_info/my_write');
});

Route::get('/site_info/my_page/board_view', function () {
    return view('/sub/board_view');
});

Route::get('/bbs/board_view', function () {
    return view('/sub/board_view');
});

Route::get('/bbs/board_write', function () {
    return view('/sub/board_write');
});

Route::get('/bbs/board_list', function () {
    return view('/sub/board_list');
});

Route::get('community/bbs/board_view', function () {
    return view('/sub/board_view');
});

Route::get('community/bbs/board_write', function () {
    return view('/sub/board_write');
});

Route::get('community/bbs/board_list', function () {
    return view('/sub/board_list');
});

Route::get('/lecture', function () {
    return view('/sub/lecture/index');
});

Route::get('/lecture/professor', function () {
    return view('/sub/lecture/professor/list');
});

Route::get('/lecture/professor/detail', function () {
    return view('/sub/lecture/professor/detail');
});

Route::get('/video', function () {
    return view('/sub/video/index');
});

Route::get('/video/list', function () {
    return view('/sub/video/list');
});

Route::get('/video/view', function () {
    return view('/sub/video/view');
});

Route::get('/bookstore', function () {
    return view('/sub/bookstore/index');
});

Route::get('/bookstore/list', function () {
    return view('/sub/bookstore/list');
});

Route::get('/bookstore/view', function () {
    return view('/sub/bookstore/view');
});

Route::get('/guide/ban', function () {
    return view('/sub/site_guide/ban');
});

Route::get('/guide/install', function () {
    return view('/sub/site_guide/install');
});

Route::get('/guide/remote', function () {
    return view('/sub/site_guide/remote');
});

Route::get('/guide/site', function () {
    return view('/sub/site_guide/site_guide');
});

Route::get('/guide/obstacle', function () {
    return view('/sub/site_guide/video_guide');
});

Route::get('/arcademy/greeting', function () {
    return view('/sub/arcademy/greeting');
});

Route::get('/arcademy/history', function () {
    return view('/sub/arcademy/history');
});

Route::get('/arcademy/map', function () {
    return view('/sub/arcademy/map');
});

Route::get('/arcademy/pass', function () {
    return view('/sub/arcademy/pass');
});

Route::get('/arcademy/real_pass', function () {
    return view('/sub/arcademy/real_pass');
});

Route::get('/login/find_member', function () {
    return view('/sub/site_info/find_member');
});

//----------------------------------------------------------------------
//사용자 페이지 끝
//----------------------------------------------------------------------

//----------------------------------------------------------------------
//관리자 페이지 시작
//----------------------------------------------------------------------

//리스트 시작

Route::get('/boffice/login', function () {
    return view('/boffice/page/login');
});

Route::get('/boffice/login_otp', function () {
    return view('/boffice/page/login_otp');
});

Route::get('/boffice/lecture/cate/setting', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/lecture/video/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/lecture/class/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/lecture/bookstore/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/lecture/academy/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/order/video/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/order/extension/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/order/bookstore/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/order/free/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/order/estimate/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/member/all/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/member/class/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/member/professor/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/member/delete/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/member/students/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/statistics/video/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/statistics/extension/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/statistics/bookstore/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/statistics/professor/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/statistics/learning/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/cs_center/video_qa/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/cs_center/bookstore/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/cs_center/one/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/cs_center/free/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/cs_center/video_learning/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/cs_center/faq/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/news/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/notice/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/passing/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/origin/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/announcement/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/competition/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/examinee/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/learning/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/errata/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/bookstore/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/community/practice/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/mobile/default/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/mobile/status/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/mobile/download/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/mobile/download_delete/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/mobile/device/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/mobile/device_delete/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/main_banner/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/code/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/bbs/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/admin/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/basket/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/authority/list', function () {
    return view('/boffice/page/bbs/list');
});

Route::get('/boffice/site/otp/list', function () {
    return view('/boffice/page/bbs/list');
});

//리스트 끝

//글쓰기 시작

Route::get('/boffice/lecture/video/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/lecture/class/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/lecture/bookstore/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/lecture/academy/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/order/video/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/order/extension/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/order/bookstore/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/order/free/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/order/estimate/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/member/all/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/member/class/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/member/professor/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/member/delete/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/member/students/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/statistics/video/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/statistics/extension/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/statistics/bookstore/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/statistics/professor/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/statistics/learning/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/cs_center/video_qa/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/cs_center/bookstore/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/cs_center/one/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/cs_center/free/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/cs_center/video_learning/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/cs_center/faq/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/news/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/notice/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/passing/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/origin/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/announcement/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/competition/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/examinee/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/learning/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/errata/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/bookstore/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/community/practice/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/mobile/default/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/mobile/status/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/mobile/download/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/mobile/download_delete/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/mobile/device/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/mobile/device_delete/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/site/main_banner/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/site/code/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/site/bbs/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/site/admin/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/site/basket/write', function () {
    return view('/boffice/page/bbs/write');
});

Route::get('/boffice/site/authority/write', function () {
    return view('/boffice/page/bbs/write');
});

//글쓰기 끝

//글수정 시작

Route::get('/boffice/lecture/video/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/lecture/class/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/lecture/bookstore/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/lecture/academy/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/order/video/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/order/extension/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/order/bookstore/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/order/free/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/order/estimate/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/member/all/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/member/class/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/member/professor/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/member/delete/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/member/students/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/statistics/video/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/statistics/extension/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/statistics/bookstore/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/statistics/professor/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/statistics/learning/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/cs_center/video_qa/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/cs_center/bookstore/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/cs_center/one/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/cs_center/free/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/cs_center/video_learning/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/cs_center/faq/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/news/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/notice/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/passing/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/origin/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/announcement/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/competition/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/examinee/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/learning/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/errata/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/bookstore/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/community/practice/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/mobile/default/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/mobile/status/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/mobile/download/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/mobile/download_delete/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/mobile/device/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/mobile/device_delete/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/site/main_banner/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/site/code/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/site/bbs/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/site/admin/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/site/basket/modify', function () {
    return view('/boffice/page/bbs/modify');
});

Route::get('/boffice/site/authority/modify', function () {
    return view('/boffice/page/bbs/modify');
});

//글수정 끝
//----------------------------------------------------------------------
//관리자 페이지 끝
//----------------------------------------------------------------------