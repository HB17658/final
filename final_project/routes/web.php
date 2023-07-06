<?php

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
Route::get('/',function(){
    return view('new/login');
});
//検索またはログイン
Route::post('new/result',[PrController::class,'search']);
//ログアウト
Route::get('new/login',[PrController::class,'logout']);
//ログインせずにresultへアクセスした場合はログイン画面へ戻す
Route::get('new/result',function(){
    return redirect()->back();
});


//ボツ
// Route::get('/', function () {
//     return view('login');
// });
// Route::get('sample',function(){
//     return view('sample');
//  });
// Route::get('/createUser',function(){
//     return view('createUser');
// });
// Route::post('/createUser',[DbController::class,'createUser']);
// Route::get('/login',function(){
//     return view('login');
// });
// Route::post('/top',[DbController::class,'login']);
// Route::get('/search',function(){
//     return view('search');
// });
// Route::get('/top',function(){
//     return view('top');
// });
// Route::get('/mypage',function(){
//     return view('mypage');
// });
// Route::post('/results',[DbController::class,'results']);
// Route::get('/addbook',function(){
//     return view('addbook');
// });
// Route::post('/addbook',[DbController::class,'addbook']);
// Route::get('/userResult',function(){
//     return view('userResult');
// });
// Route::post('/userResult',[DbController::class,'userDelete']);
// Route::get('/createAdmin',function(){
//     return view('createAdmin');
// });
// Route::get('results',function(){
//     return view('results');
// });
//Route::post('/new/result',[PrController::class,'searchBook']);
