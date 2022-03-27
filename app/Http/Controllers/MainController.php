<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\FileMenegament;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class MainController extends Controller
{
    //
    public function index(Request $request){
        $correct = Users::where('login', $request->login)->first();
        if(!empty($request->session()->get('user'))){
            return view('main', ['files'=>Cache::get('files'), 'type'=>$request->session()->get('type'), 'name'=>$request->session()->get('user'), 'privileges'=>$request->session()->get('privileges')]);
        }
        else{
            if(!empty($correct)&&$correct->passwd == hash('sha256', $request->passwd) && $request->method()=="POST"){
                $request->session()->put('user', $correct->login);
                $request->session()->put('type', $correct->type);
                $files = [];
                foreach(FileMenegament::all() as $key=>$value){
                    $files[$value->id] = [
                        'link'=>$value->link,
                        'user'=>$value->user
                    ];
                }
                Cache::forever('files', $files);
                $request->session()->put('privileges', $correct->$correct->AccountPrivileges);
                return view('main', ['files'=>$files, 'type'=>$correct->type, 'name'=>$correct->login, 'privileges'=>$correct->AccountPrivileges]);
            }
            else{
                return view('login', ['login'=>$request->login]);
            }
        }
    }
}
