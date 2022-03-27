<?php

namespace App\Http\Controllers;


use App\Models\AccountTypes;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UsersController extends Controller
{
    //
    function AddUser(Request $request){
        $usr = Users::where('login', $request->login);
        if($usr->exists()){
            echo(json_encode(['status'=>'failed']));
        }
        else{
            $user = new Users();
            $user->login = $request->login;
            $user->passwd = hash('sha256', $request->passwd);
            $user->type = $request->type;
            $user->save();
            $data = [];
            foreach(Users::all() as $value){
                $data[$value->id] = $value->login;
            }
            Cache::flush();
            Cache::forever('users', $data);
            echo(json_encode(['status'=>"ok"]));
        }
    }
    function DeleteUser(Request $request){
        $usr = Users::where('id', $request->id);
        if($usr->exists()){
            $usr->delete();
            foreach(Users::all() as $value){
                $data[$value->id] = $value->login;
            }
            Cache::flush();
            Cache::forever('users', $data);
        }
        else{
            echo(json_encode(['status'=>$usr]));
        }
    }
}
