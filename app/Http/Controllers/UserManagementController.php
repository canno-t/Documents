<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserManagementController extends Controller
{
    //
    function index(Request $request){
        if($request->session()->get('user')=='admin'){
            $va = Cache::get('users');
            return view('management', ['users'=>$va]);
        }
        else{
            header('location:'."http://".$_SERVER['HTTP_HOST']."/");
            exit;
        }
    }
}
