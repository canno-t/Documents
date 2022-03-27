<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class TestController extends Controller
{
    public function index(){
        $user = new Users();
        $user->login = "admin";
        $user->passwd = hash('sha256', 'admin');
        $user->type = "admin";
        $user->save();
        //dd(Users::find(1)->AccountPrivileges);
    }
}
