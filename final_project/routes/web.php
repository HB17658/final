<?php

use App\Http\Controllers\DbController;
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
Route::get('/login',function(){
    return view('login');
});


Route::post('/login',[DbController::class,'login']);

