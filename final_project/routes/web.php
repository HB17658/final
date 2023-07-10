<?php

use Illuminate\Http\Request;
use App\Http\Controllers\DbController;
use App\Http\Controllers\PrController;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//トップページ
Route::get('/',function(Request $r){
    $r->session()->forget('id');
    $r->session()->forget('password');
    return view('new/login');
});
//検索またはログイン
Route::post('new/result',[PrController::class,'search']);
//ログアウト
Route::get('new/login',[PrController::class,'logout']);
//ログインせずにresultへアクセスした場合はログイン画面へ戻す
// Route::get('new/result',function(Request $r){
//     // $r->session()->forget('id');
//     // $r->session()->forget('password');
//     return view('new/result');
// });
Route::get('new/result',[PrController::class,'search']);
//概要ページ
Route::get('new/book',[PrController::class,'info']);

Route::get('new/store',function(){
    return view('new/store');
});
Route::post('new/store',[PrController::class,'store']);

Route::get('new/maintenance',function(){
    return view('new/maintenance');
});

Route::post('new/maintenance',[PrController::class,'maintenance']);

