<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\UsersController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Cache;
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

//Route::get('/', [TestController::class, 'index']);
Route::get('/', function(){

    return view('login');
});
Route::any('/main', [MainController::class, 'index']);

// Route::post('/main', function(){
//     return view('main');
// });
Route::post('/uploadfile', [FileController::class, 'Upload']);
Route::post('deletefile', [FileController::class, "Delete"]);
Route::get('/usersmanagement', [UserManagementController::class, 'index']);
Route::post('/usersmanagement', [UsersController::class, 'AddUser']);
Route::post('/deleteuser', [UsersController::class, 'DeleteUser']);