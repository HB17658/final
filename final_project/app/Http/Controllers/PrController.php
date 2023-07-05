<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrController extends Controller
{
    public function search(Request $r)
    {
        $id = $r->id;
        $password = $r->password;
        //requestオブジェクトからsearchwordを抽出
        $searchword = $r->searchword;
        //DBから社員データを抽出
        //$empData = 
        if(isset($id) && isset($password)){
            
            //database内にあるすべてのid&passが一致するかを検証
            // if($id == $empData->id && $password == $empData->password){
                    //社員情報が一致しなかった場合前の画面に戻す。
                    //redirect()-back();
           // }

            //セッションにidやpasswordを登録
            $r->session()->put('id',$id);
            $r->session()->put('password',$password);
            return view('/new/result');
        }
        $id = $r->session()->get('id');
        $password = $r->session()->get('password');


        //一覧表示するためにデータベースから書籍情報をすべて取得し1つずつレコードを連想配列に入れる
        //$data = [];
        //最終的にレコードをview(result.blade.php)に返す
        //return view('result',$data);
        

        
        if(!isset($searchword)){
            $msg = "検索文字が未入力";
            return view('new/result',compact('msg'));
        }
        //入力された文字列と一致する書籍情報をすべて取得し1つずつ取得し、連想配列に入れる。
        
        
        
        //データベースから書籍をすべて抽出

        //一致するキーワードを検索
        // for($db as $data){

        // }
        //一致したキーワードがある書籍情報を連想配列に格納
        //$searchData = [];
        //retrunでは$searchDataを返す
        return view('new/result',compact('id','password'));

    }

    public function logout(Request $r){
        $r->request->remove('id');
        $r->request->remove('password');
        return view('new/login');
    }
}
