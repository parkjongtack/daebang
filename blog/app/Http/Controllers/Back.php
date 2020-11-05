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

class Back extends Controller

{
    public function login(Request $request) {

        $return_list = array();

        if($request->segment(2) == 'login'){

            return view('/boffice/page/'.$request->segment(2), $return_list);

        }

        if($request->segment(2) == 'login_otp'){

            return view('/boffice/page/'.$request->segment(2), $return_list);

        }

    }


    public function list(Request $request) {

        $return_list = array();
        $view_sub = '/boffice/page';

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