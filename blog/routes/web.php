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

Route::get('/boffice/login', 'Back@login');

Route::get('/boffice/login_otp', 'Back@login');

Route::get('/boffice/lecture/cate/setting', 'Back@list');

Route::get('/boffice/lecture/video/list', 'Back@list');

Route::get('/boffice/lecture/class/list', 'Back@list');

Route::get('/boffice/lecture/bookstore/list', 'Back@list');

Route::get('/boffice/lecture/academy/list', 'Back@list');

Route::get('/boffice/order/video/list', 'Back@list');

Route::get('/boffice/order/extension/list', 'Back@list');

Route::get('/boffice/order/bookstore/list', 'Back@list');

Route::get('/boffice/order/free/list', 'Back@list');

Route::get('/boffice/order/estimate/list', 'Back@list');

Route::get('/boffice/member/all/list', 'Back@list');

Route::get('/boffice/member/class/list', 'Back@list');

Route::get('/boffice/member/professor/list', 'Back@list');

Route::get('/boffice/member/delete/list', 'Back@list');

Route::get('/boffice/member/students/list', 'Back@list');

Route::get('/boffice/statistics/video/list', 'Back@list');

Route::get('/boffice/statistics/extension/list', 'Back@list');

Route::get('/boffice/statistics/bookstore/list', 'Back@list');

Route::get('/boffice/statistics/professor/list', 'Back@list');

Route::get('/boffice/statistics/learning/list', 'Back@list');

Route::get('/boffice/cs_center/video_qa/list', 'Back@list');

Route::get('/boffice/cs_center/bookstore/list', 'Back@list');

Route::get('/boffice/cs_center/one/list', 'Back@list');

Route::get('/boffice/cs_center/free/list', 'Back@list');

Route::get('/boffice/cs_center/video_learning/list', 'Back@list');

Route::get('/boffice/cs_center/faq/list', 'Back@list');

Route::get('/boffice/community/news/list', 'Back@list');

Route::get('/boffice/community/notice/list', 'Back@list');

Route::get('/boffice/community/passing/list', 'Back@list');

Route::get('/boffice/community/origin/list', 'Back@list');

Route::get('/boffice/community/announcement/list', 'Back@list');

Route::get('/boffice/community/competition/list', 'Back@list');

Route::get('/boffice/community/examinee/list', 'Back@list');

Route::get('/boffice/community/learning/list', 'Back@list');

Route::get('/boffice/community/errata/list', 'Back@list');

Route::get('/boffice/community/bookstore/list', 'Back@list');

Route::get('/boffice/community/practice/list', 'Back@list');

Route::get('/boffice/mobile/default/list', 'Back@list');

Route::get('/boffice/mobile/status/list', 'Back@list');

Route::get('/boffice/mobile/download/list', 'Back@list');

Route::get('/boffice/mobile/download_delete/list', 'Back@list');

Route::get('/boffice/mobile/device/list', 'Back@list');

Route::get('/boffice/mobile/device_delete/list', 'Back@list');

Route::get('/boffice/site/main_banner/list', 'Back@list');

Route::get('/boffice/site/code/list', 'Back@list');

Route::get('/boffice/site/bbs/list', 'Back@list');

Route::get('/boffice/site/admin/list', 'Back@list');

Route::get('/boffice/site/basket/list', 'Back@list');

Route::get('/boffice/site/authority/list', 'Back@list');

Route::get('/boffice/site/otp/list', 'Back@list');

//리스트 끝

//글쓰기 시작

Route::get('/boffice/lecture/video/write', 'Back@write');

Route::get('/boffice/lecture/video_detail/write', 'Back@write');

Route::get('/boffice/lecture/class/write', 'Back@write');

Route::get('/boffice/lecture/bookstore/write', 'Back@write');

Route::get('/boffice/lecture/academy/write', 'Back@write');

Route::get('/boffice/order/video/write', 'Back@write');

Route::get('/boffice/order/extension/write', 'Back@write');

Route::get('/boffice/order/bookstore/write', 'Back@write');

Route::get('/boffice/order/free/write', 'Back@write');

Route::get('/boffice/order/estimate/write', 'Back@write');

Route::get('/boffice/member/all/write', 'Back@write');

Route::get('/boffice/member/class/write', 'Back@write');

Route::get('/boffice/member/professor/write', 'Back@write');

Route::get('/boffice/member/delete/write', 'Back@write');

Route::get('/boffice/member/students/write', 'Back@write');

Route::get('/boffice/statistics/video/write', 'Back@write');

Route::get('/boffice/statistics/extension/write', 'Back@write');

Route::get('/boffice/statistics/bookstore/write', 'Back@write');

Route::get('/boffice/statistics/professor/write', 'Back@write');

Route::get('/boffice/statistics/learning/write', 'Back@write');

Route::get('/boffice/cs_center/video_qa/write', 'Back@write');

Route::get('/boffice/cs_center/bookstore/write', 'Back@write');

Route::get('/boffice/cs_center/one/write', 'Back@write');

Route::get('/boffice/cs_center/free/write', 'Back@write');

Route::get('/boffice/cs_center/video_learning/write', 'Back@write');

Route::get('/boffice/cs_center/faq/write', 'Back@write');

Route::get('/boffice/community/news/write', 'Back@write');

Route::get('/boffice/community/notice/write', 'Back@write');

Route::get('/boffice/community/passing/write', 'Back@write');

Route::get('/boffice/community/origin/write', 'Back@write');

Route::get('/boffice/community/announcement/write', 'Back@write');

Route::get('/boffice/community/competition/write', 'Back@write');

Route::get('/boffice/community/examinee/write', 'Back@write');

Route::get('/boffice/community/learning/write', 'Back@write');

Route::get('/boffice/community/errata/write', 'Back@write');

Route::get('/boffice/community/bookstore/write', 'Back@write');

Route::get('/boffice/community/practice/write', 'Back@write');

Route::get('/boffice/mobile/default/write', 'Back@write');

Route::get('/boffice/mobile/status/write', 'Back@write');

Route::get('/boffice/mobile/download/write', 'Back@write');

Route::get('/boffice/mobile/download_delete/write', 'Back@write');

Route::get('/boffice/mobile/device/write', 'Back@write');

Route::get('/boffice/mobile/device_delete/write', 'Back@write');

Route::get('/boffice/site/main_banner/write', 'Back@write');

Route::get('/boffice/site/code/write', 'Back@write');

Route::get('/boffice/site/bbs/write', 'Back@write');

Route::get('/boffice/site/admin/write', 'Back@write');

Route::get('/boffice/site/basket/write', 'Back@write');

Route::get('/boffice/site/authority/write', 'Back@write');

Route::get('/boffice/site/authority_detail/write', 'Back@write');

//글쓰기 끝

//글수정 시작

Route::get('/boffice/lecture/video/modify', 'Back@modify');

Route::get('/boffice/lecture/video_detail/modify', 'Back@modify');

Route::get('/boffice/lecture/class/modify', 'Back@modify');

Route::get('/boffice/lecture/bookstore/modify', 'Back@modify');

Route::get('/boffice/lecture/academy/modify', 'Back@modify');

Route::get('/boffice/order/video/modify', 'Back@modify');

Route::get('/boffice/order/extension/modify', 'Back@modify');

Route::get('/boffice/order/bookstore/modify', 'Back@modify');

Route::get('/boffice/order/free/modify', 'Back@modify');

Route::get('/boffice/order/estimate/modify', 'Back@modify');

Route::get('/boffice/member/all/modify', 'Back@modify');

Route::get('/boffice/member/class/modify', 'Back@modify');

Route::get('/boffice/member/professor/modify', 'Back@modify');

Route::get('/boffice/member/delete/modify', 'Back@modify');

Route::get('/boffice/member/students/modify', 'Back@modify');

Route::get('/boffice/statistics/video/modify', 'Back@modify');

Route::get('/boffice/statistics/extension/modify', 'Back@modify');

Route::get('/boffice/statistics/bookstore/modify', 'Back@modify');

Route::get('/boffice/statistics/professor/modify', 'Back@modify');

Route::get('/boffice/statistics/learning/modify', 'Back@modify');

Route::get('/boffice/cs_center/video_qa/modify', 'Back@modify');

Route::get('/boffice/cs_center/bookstore/modify', 'Back@modify');

Route::get('/boffice/cs_center/one/modify', 'Back@modify');

Route::get('/boffice/cs_center/free/modify', 'Back@modify');

Route::get('/boffice/cs_center/video_learning/modify', 'Back@modify');

Route::get('/boffice/cs_center/faq/modify', 'Back@modify');

Route::get('/boffice/community/news/modify', 'Back@modify');

Route::get('/boffice/community/notice/modify', 'Back@modify');

Route::get('/boffice/community/passing/modify', 'Back@modify');

Route::get('/boffice/community/origin/modify', 'Back@modify');

Route::get('/boffice/community/announcement/modify', 'Back@modify');

Route::get('/boffice/community/competition/modify', 'Back@modify');

Route::get('/boffice/community/examinee/modify', 'Back@modify');

Route::get('/boffice/community/learning/modify', 'Back@modify');

Route::get('/boffice/community/errata/modify', 'Back@modify');

Route::get('/boffice/community/bookstore/modify', 'Back@modify');

Route::get('/boffice/community/practice/modify', 'Back@modify');

Route::get('/boffice/mobile/default/modify', 'Back@modify');

Route::get('/boffice/mobile/status/modify', 'Back@modify');

Route::get('/boffice/mobile/download/modify', 'Back@modify');

Route::get('/boffice/mobile/download_delete/modify', 'Back@modify');

Route::get('/boffice/mobile/device/modify', 'Back@modify');

Route::get('/boffice/mobile/device_delete/modify', 'Back@modify');

Route::get('/boffice/site/main_banner/modify', 'Back@modify');

Route::get('/boffice/site/code/modify', 'Back@modify');

Route::get('/boffice/site/bbs/modify', 'Back@modify');

Route::get('/boffice/site/admin/modify', 'Back@modify');

Route::get('/boffice/site/basket/modify', 'Back@modify');

Route::get('/boffice/site/authority/modify', 'Back@modify');

//글수정 끝

//글보기 시작

Route::get('/boffice/cs_center/video_qa/view', 'Back@view');

Route::get('/boffice/cs_center/bookstore/view', 'Back@view');

Route::get('/boffice/cs_center/one/view', 'Back@view');

Route::get('/boffice/cs_center/free/view', 'Back@view');

Route::get('/boffice/cs_center/video_learning/view', 'Back@view');

Route::get('/boffice/cs_center/faq/view', 'Back@view');

Route::get('/boffice/community/news/view', 'Back@view');

Route::get('/boffice/community/notice/view', 'Back@view');

Route::get('/boffice/community/passing/view', 'Back@view');

Route::get('/boffice/community/origin/view', 'Back@view');

Route::get('/boffice/community/announcement/view', 'Back@view');

Route::get('/boffice/community/competition/view', 'Back@view');

Route::get('/boffice/community/examinee/view', 'Back@view');

Route::get('/boffice/community/learning/view', 'Back@view');

Route::get('/boffice/community/errata/view', 'Back@view');

Route::get('/boffice/community/bookstore/view', 'Back@view');

Route::get('/boffice/community/practice/view', 'Back@view');

//글보기 끝
//----------------------------------------------------------------------
//관리자 페이지 끝
//----------------------------------------------------------------------