<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrController extends Controller
{
    //
    public function search(Request $r)
    {
        
        //一覧表示するためにデータベースから書籍情報をすべて取得し1つずつレコードを連想配列に入れる
        //$data = [];
        //最終的にレコードをview(result.blade.php)に返す
        //return view('result',$data);

        
        //入力された文字列と一致する書籍情報をすべて取得し1つずつ取得し、連想配列に入れる。
        $searchData = [];
        //retrunでは$searchDataを返す
        return view('result',$searchData);

    }
}
