<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\FileMenegament;
use Illuminate\Support\Facades\Cache;

class FileController extends Controller
{
    //
    const url = 'C:\Users\janpe\ropozyt\public';
    function Upload(Request $request){
        $path = $this::url.'/AppDocuments'."/".$request->file('file')->getClientOriginalName();
        copy($request->file, $path);
        $file = new FileMenegament();
        $file->link = '/AppDocuments'."/".$request->file('file')->getClientOriginalName();
        $file->user = $request->session()->get('user');
        $file->save();
        foreach(FileMenegament::all() as $key=>$value){
          $files[$value->id] = [
              'link'=>$value->link,
              'user'=>$value->user
          ];
      }
      Cache::forever('files', $files);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
   }
   function Delete(Request $request){
        $file = FileMenegament::where('id', $request->id);
        unlink($this::url."\\".$file->first()->link);
        $file->delete();
        foreach(FileMenegament::all() as $key=>$value){
          $files[$value->id] = [
              'link'=>$value->link,
              'user'=>$value->user
          ];
      }
      Cache::forever('files', $files);
   }
}
