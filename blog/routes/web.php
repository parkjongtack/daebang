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

Route::get('/', 'Front@main');

Route::get('/site_info/login', 'Front@site_info');

Route::get('/site_info/join/join1', 'Front@site_info');

Route::get('/site_info/join/join2', 'Front@site_info');

Route::post('/site_info/join/join3', 'Front@site_info');

Route::post('/site_info/join/join4', 'Front@site_info');

Route::get('/site_info/use_info', 'Front@site_info');

Route::get('/site_info/personal', 'Front@site_info');

Route::get('/site_info/agree', 'Front@site_info');

Route::get('/site_info/my_page/order', 'Front@site_info');

Route::get('/site_info/my_page/receipt', 'Front@site_info');

Route::get('/site_info/my_page/receipt_open', 'Front@site_info');

Route::get('/site_info/my_page/shopping', 'Front@site_info');

Route::get('/site_info/my_page/bbs/list/bookstore_qa', 'Front@site_info');

Route::get('/site_info/my_page/bbs/view/bookstore_qa', 'Front@site_info');

Route::get('/site_info/my_page/bbs/write/bookstore_qa', 'Front@site_info');

Route::get('/site_info/my_page/bbs/list/video_qa', 'Front@site_info');

Route::get('/site_info/my_page/bbs/view/video_qa', 'Front@site_info');

Route::get('/site_info/my_page/bbs/write/video_qa', 'Front@site_info');

Route::get('/site_info/my_page/bbs/list/inquiry', 'Front@site_info');

Route::get('/site_info/my_page/bbs/view/inquiry', 'Front@site_info');

Route::get('/site_info/my_page/bbs/write/inquiry', 'Front@site_info');

Route::get('/site_info/my_page/my_info', 'Front@site_info');

Route::get('/site_info/my_page/member_out', 'Front@site_info');

Route::get('/site_info/my_page/board_view', 'Front@site_info');

Route::get('/site_info/my_classroom/running', 'Front@site_info');

Route::get('/site_info/my_classroom/running_end', 'Front@site_info');

Route::get('/site_info/my_classroom/device', 'Front@site_info');

Route::get('/site_info/my_classroom/bbs/list/practice', 'Front@site_info');

Route::get('/a_guide/news/bbs/view', 'Front@a_guide');

Route::get('/a_guide/news/bbs/write', 'Front@a_guide');

Route::get('/a_guide/news/bbs/list', 'Front@a_guide');

Route::get('/a_guide/notice/bbs/write', 'Front@a_guide');

Route::get('/a_guide/notice/bbs/view', 'Front@a_guide');

Route::get('/a_guide/notice/bbs/list', 'Front@a_guide');

Route::get('/a_guide/free/bbs/write', 'Front@a_guide');

Route::get('/a_guide/free/bbs/view', 'Front@a_guide');

Route::get('/a_guide/free/bbs/list', 'Front@a_guide');

Route::get('/a_guide/greeting', 'Front@a_guide');

Route::get('/a_guide/history', 'Front@a_guide');

Route::get('/a_guide/map', 'Front@a_guide');

Route::get('/a_guide/lecture', 'Front@a_guide');

Route::get('/a_guide/lecture/professor', 'Front@a_guide');

Route::get('/a_guide/lecture/professor/detail', 'Front@a_guide');

Route::get('/announcement/news/bbs/view', 'Front@announcement');

Route::get('/announcement/news/bbs/write', 'Front@announcement');

Route::get('/announcement/news/bbs/list', 'Front@announcement');

Route::get('/announcement/competition/bbs/write', 'Front@announcement');

Route::get('/announcement/competition/bbs/view', 'Front@announcement');

Route::get('/announcement/competition/bbs/list', 'Front@announcement');

Route::get('/lecture', 'Front@lecture');

Route::get('/video/', 'Front@video');

Route::get('/video/list', 'Front@video');

Route::get('/video/view', 'Front@video');

Route::get('/bookstore', 'Front@bookstore');

Route::get('/bookstore/list', 'Front@bookstore');

Route::get('/bookstore/view', 'Front@bookstore');

Route::get('/site_guide/ban', 'Front@site_guide');

Route::get('/site_guide/install', 'Front@site_guide');

Route::get('/site_guide/remote', 'Front@site_guide');

Route::get('/site_guide/site', 'Front@site_guide');

Route::get('/site_guide/obstacle', 'Front@site_guide');

Route::get('/laboratory/pass/bbs/list', 'Front@laboratory');
Route::get('/laboratory/pass/bbs/view', 'Front@laboratory');
Route::get('/laboratory/pass/bbs/write', 'Front@laboratory');
Route::get('/laboratory/exam/bbs/list', 'Front@laboratory');
Route::get('/laboratory/exam/bbs/view', 'Front@laboratory');
Route::get('/laboratory/exam/bbs/write', 'Front@laboratory');
Route::get('/laboratory/local/bbs/list', 'Front@laboratory');
Route::get('/laboratory/local/bbs/view', 'Front@laboratory');
Route::get('/laboratory/local/bbs/write', 'Front@laboratory');

Route::get('/login/find_member', 'Front@');

//----------------------------------------------------------------------
//사용자 페이지 끝
//----------------------------------------------------------------------

//----------------------------------------------------------------------
//관리자 페이지 시작
//----------------------------------------------------------------------

//리스트 시작

Route::get('/boffice/login', 'Back@');

Route::get('/boffice/login_otp', 'Back@');

Route::get('/boffice/lecture/cate/setting', 'Back@');

Route::get('/boffice/lecture/video/list', 'Back@');

Route::get('/boffice/lecture/class/list', 'Back@');

Route::get('/boffice/lecture/bookstore/list', 'Back@');

Route::get('/boffice/lecture/academy/list', 'Back@');

Route::get('/boffice/order/video/list', 'Back@');

Route::get('/boffice/order/extension/list', 'Back@');

Route::get('/boffice/order/bookstore/list', 'Back@');

Route::get('/boffice/order/free/list', 'Back@');

Route::get('/boffice/order/estimate/list', 'Back@');

Route::get('/boffice/member/all/list', 'Back@');

Route::get('/boffice/member/class/list', 'Back@');

Route::get('/boffice/member/professor/list', 'Back@');

Route::get('/boffice/member/delete/list', 'Back@');

Route::get('/boffice/member/students/list', 'Back@');

Route::get('/boffice/statistics/video/list', 'Back@');

Route::get('/boffice/statistics/extension/list', 'Back@');

Route::get('/boffice/statistics/bookstore/list', 'Back@');

Route::get('/boffice/statistics/professor/list', 'Back@');

Route::get('/boffice/statistics/learning/list', 'Back@');

Route::get('/boffice/cs_center/video_qa/list', 'Back@');

Route::get('/boffice/cs_center/bookstore/list', 'Back@');

Route::get('/boffice/cs_center/one/list', 'Back@');

Route::get('/boffice/cs_center/free/list', 'Back@');

Route::get('/boffice/cs_center/video_learning/list', 'Back@');

Route::get('/boffice/cs_center/faq/list', 'Back@');

Route::get('/boffice/community/news/list', 'Back@');

Route::get('/boffice/community/notice/list', 'Back@');

Route::get('/boffice/community/passing/list', 'Back@');

Route::get('/boffice/community/origin/list', 'Back@');

Route::get('/boffice/community/announcement/list', 'Back@');

Route::get('/boffice/community/competition/list', 'Back@');

Route::get('/boffice/community/examinee/list', 'Back@');

Route::get('/boffice/community/learning/list', 'Back@');

Route::get('/boffice/community/errata/list', 'Back@');

Route::get('/boffice/community/bookstore/list', 'Back@');

Route::get('/boffice/community/practice/list', 'Back@');

Route::get('/boffice/mobile/default/list', 'Back@');

Route::get('/boffice/mobile/status/list', 'Back@');

Route::get('/boffice/mobile/download/list', 'Back@');

Route::get('/boffice/mobile/download_delete/list', 'Back@');

Route::get('/boffice/mobile/device/list', 'Back@');

Route::get('/boffice/mobile/device_delete/list', 'Back@');

Route::get('/boffice/site/main_banner/list', 'Back@');

Route::get('/boffice/site/code/list', 'Back@');

Route::get('/boffice/site/bbs/list', 'Back@');

Route::get('/boffice/site/admin/list', 'Back@');

Route::get('/boffice/site/basket/list', 'Back@');

Route::get('/boffice/site/authority/list', 'Back@');

Route::get('/boffice/site/otp/list', 'Back@');

//리스트 끝

//글쓰기 시작

Route::get('/boffice/lecture/video/write', 'Back@');

Route::get('/boffice/lecture/video_detail/write', 'Back@');

Route::get('/boffice/lecture/class/write', 'Back@');

Route::get('/boffice/lecture/bookstore/write', 'Back@');

Route::get('/boffice/lecture/academy/write', 'Back@');

Route::get('/boffice/order/video/write', 'Back@');

Route::get('/boffice/order/extension/write', 'Back@');

Route::get('/boffice/order/bookstore/write', 'Back@');

Route::get('/boffice/order/free/write', 'Back@');

Route::get('/boffice/order/estimate/write', 'Back@');

Route::get('/boffice/member/all/write', 'Back@');

Route::get('/boffice/member/class/write', 'Back@');

Route::get('/boffice/member/professor/write', 'Back@');

Route::get('/boffice/member/delete/write', 'Back@');

Route::get('/boffice/member/students/write', 'Back@');

Route::get('/boffice/statistics/video/write', 'Back@');

Route::get('/boffice/statistics/extension/write', 'Back@');

Route::get('/boffice/statistics/bookstore/write', 'Back@');

Route::get('/boffice/statistics/professor/write', 'Back@');

Route::get('/boffice/statistics/learning/write', 'Back@');

Route::get('/boffice/cs_center/video_qa/write', 'Back@');

Route::get('/boffice/cs_center/bookstore/write', 'Back@');

Route::get('/boffice/cs_center/one/write', 'Back@');

Route::get('/boffice/cs_center/free/write', 'Back@');

Route::get('/boffice/cs_center/video_learning/write', 'Back@');

Route::get('/boffice/cs_center/faq/write', 'Back@');

Route::get('/boffice/community/news/write', 'Back@');

Route::get('/boffice/community/notice/write', 'Back@');

Route::get('/boffice/community/passing/write', 'Back@');

Route::get('/boffice/community/origin/write', 'Back@');

Route::get('/boffice/community/announcement/write', 'Back@');

Route::get('/boffice/community/competition/write', 'Back@');

Route::get('/boffice/community/examinee/write', 'Back@');

Route::get('/boffice/community/learning/write', 'Back@');

Route::get('/boffice/community/errata/write', 'Back@');

Route::get('/boffice/community/bookstore/write', 'Back@');

Route::get('/boffice/community/practice/write', 'Back@');

Route::get('/boffice/mobile/default/write', 'Back@');

Route::get('/boffice/mobile/status/write', 'Back@');

Route::get('/boffice/mobile/download/write', 'Back@');

Route::get('/boffice/mobile/download_delete/write', 'Back@');

Route::get('/boffice/mobile/device/write', 'Back@');

Route::get('/boffice/mobile/device_delete/write', 'Back@');

Route::get('/boffice/site/main_banner/write', 'Back@');

Route::get('/boffice/site/code/write', 'Back@');

Route::get('/boffice/site/bbs/write', 'Back@');

Route::get('/boffice/site/admin/write', 'Back@');

Route::get('/boffice/site/basket/write', 'Back@');

Route::get('/boffice/site/authority/write', 'Back@');

Route::get('/boffice/site/authority_detail/write', 'Back@');

//글쓰기 끝

//글수정 시작

Route::get('/boffice/lecture/video/modify', 'Back@');

Route::get('/boffice/lecture/video_detail/modify', 'Back@');

Route::get('/boffice/lecture/class/modify', 'Back@');

Route::get('/boffice/lecture/bookstore/modify', 'Back@');

Route::get('/boffice/lecture/academy/modify', 'Back@');

Route::get('/boffice/order/video/modify', 'Back@');

Route::get('/boffice/order/extension/modify', 'Back@');

Route::get('/boffice/order/bookstore/modify', 'Back@');

Route::get('/boffice/order/free/modify', 'Back@');

Route::get('/boffice/order/estimate/modify', 'Back@');

Route::get('/boffice/member/all/modify', 'Back@');

Route::get('/boffice/member/class/modify', 'Back@');

Route::get('/boffice/member/professor/modify', 'Back@');

Route::get('/boffice/member/delete/modify', 'Back@');

Route::get('/boffice/member/students/modify', 'Back@');

Route::get('/boffice/statistics/video/modify', 'Back@');

Route::get('/boffice/statistics/extension/modify', 'Back@');

Route::get('/boffice/statistics/bookstore/modify', 'Back@');

Route::get('/boffice/statistics/professor/modify', 'Back@');

Route::get('/boffice/statistics/learning/modify', 'Back@');

Route::get('/boffice/cs_center/video_qa/modify', 'Back@');

Route::get('/boffice/cs_center/bookstore/modify', 'Back@');

Route::get('/boffice/cs_center/one/modify', 'Back@');

Route::get('/boffice/cs_center/free/modify', 'Back@');

Route::get('/boffice/cs_center/video_learning/modify', 'Back@');

Route::get('/boffice/cs_center/faq/modify', 'Back@');

Route::get('/boffice/community/news/modify', 'Back@');

Route::get('/boffice/community/notice/modify', 'Back@');

Route::get('/boffice/community/passing/modify', 'Back@');

Route::get('/boffice/community/origin/modify', 'Back@');

Route::get('/boffice/community/announcement/modify', 'Back@');

Route::get('/boffice/community/competition/modify', 'Back@');

Route::get('/boffice/community/examinee/modify', 'Back@');

Route::get('/boffice/community/learning/modify', 'Back@');

Route::get('/boffice/community/errata/modify', 'Back@');

Route::get('/boffice/community/bookstore/modify', 'Back@');

Route::get('/boffice/community/practice/modify', 'Back@');

Route::get('/boffice/mobile/default/modify', 'Back@');

Route::get('/boffice/mobile/status/modify', 'Back@');

Route::get('/boffice/mobile/download/modify', 'Back@');

Route::get('/boffice/mobile/download_delete/modify', 'Back@');

Route::get('/boffice/mobile/device/modify', 'Back@');

Route::get('/boffice/mobile/device_delete/modify', 'Back@');

Route::get('/boffice/site/main_banner/modify', 'Back@');

Route::get('/boffice/site/code/modify', 'Back@');

Route::get('/boffice/site/bbs/modify', 'Back@');

Route::get('/boffice/site/admin/modify', 'Back@');

Route::get('/boffice/site/basket/modify', 'Back@');

Route::get('/boffice/site/authority/modify', 'Back@');

//글수정 끝

//글보기 시작

Route::get('/boffice/cs_center/video_qa/view', 'Back@');

Route::get('/boffice/cs_center/bookstore/view', 'Back@');

Route::get('/boffice/cs_center/one/view', 'Back@');

Route::get('/boffice/cs_center/free/view', 'Back@');

Route::get('/boffice/cs_center/video_learning/view', 'Back@');

Route::get('/boffice/cs_center/faq/view', 'Back@');

Route::get('/boffice/community/news/view', 'Back@');

Route::get('/boffice/community/notice/view', 'Back@');

Route::get('/boffice/community/passing/view', 'Back@');

Route::get('/boffice/community/origin/view', 'Back@');

Route::get('/boffice/community/announcement/view', 'Back@');

Route::get('/boffice/community/competition/view', 'Back@');

Route::get('/boffice/community/examinee/view', 'Back@');

Route::get('/boffice/community/learning/view', 'Back@');

Route::get('/boffice/community/errata/view', 'Back@');

Route::get('/boffice/community/bookstore/view', 'Back@');

Route::get('/boffice/community/practice/view', 'Back@');

//글보기 끝
//----------------------------------------------------------------------
//관리자 페이지 끝
//----------------------------------------------------------------------