<?php

use App\Http\Controllers\DbController;
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

Route::get('/', function () {
    return view('login');
});
Route::get('/sample',function(){
    return view('sample');
});
Route::get('/createUser',function(){
    return view('createUser');
});
Route::post('/createUser',[DbController::class,'createUser']);
Route::get('/login',function(){
    return view('login');
});
Route::post('/top',[DbController::class,'login']);
Route::get('/search',function(){
    return view('search');
});
Route::get('/top',function(){
    return view('top');
});
Route::get('/mypage',function(){
    return view('mypage');
});
Route::post('/results',[DbController::class,'results']);
Route::get('/addbook',function(){
    return view('addbook');
});
Route::post('/addbook',[DbController::class,'addbook']);
Route::get('/userResult',function(){
    return view('userResult');
});
Route::post('/userResult',[DbController::class,'userDelete']);
Route::get('/createAdmin',function(){
    return view('createAdmin');
});
