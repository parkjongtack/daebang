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

class Front extends Controller

{
    public function main(Request $request) {

        $return_list = array();
		return view('index', $return_list);

    }

    public function login(Request $request) {

        $return_list = array();
		return view('/sub/login', $return_list);

    }

    public function site_info(Request $request) {

        $return_list = array();
        $view_sub = '/sub';

        //게시판
        if($request->segment(2) == 'my_page' && $request->segment(3) == 'bbs'){

            $view_sub .= '/board_'.$request->segment(4);
            echo $view_sub;
            return view($view_sub, $return_list);

        }

        if($request->segment(2) == 'my_classroom' && $request->segment(3) == 'bbs'){

            $view_sub .= '/board_'.$request->segment(4);
            echo $view_sub;
            return view($view_sub, $return_list);

        }

        if($request->segment(1) != '') $view_sub .= '/'.$request->segment(1);
        if($request->segment(2) != '') $view_sub .= '/'.$request->segment(2);
        if($request->segment(3) != '') $view_sub .= '/'.$request->segment(3);
        if($request->segment(4) != '') $view_sub .= '/'.$request->segment(4);
        if($request->segment(5) != '') $view_sub .= '/'.$request->segment(5);

        // if()
        echo $view_sub;

        $return_list = array();

		return view($view_sub, $return_list);

    }

    public function personal(Request $request) {

		return view('/sub/site_info/personal');

    }

    public function agree(Request $request) {

		return view('/site_info/agree');

    }

    // public function main(Request $request) {

	// 	return view('index');

    // }

    // public function main(Request $request) {

	// 	return view('index');

    // }
    
    // public function main(Request $request) {

	// 	return view('index');

    // }
    
    // public function main(Request $request) {

	// 	return view('index');

    // }

    // public function main(Request $request) {

	// 	return view('index');

    // }

    // public function main(Request $request) {

	// 	return view('index');

    // }

    // public function main(Request $request) {

	// 	return view('index');

    // }

    // public function main(Request $request) {

	// 	return view('index');

    // }

    // public function main(Request $request) {

	// 	return view('index');

    // }

}
?>