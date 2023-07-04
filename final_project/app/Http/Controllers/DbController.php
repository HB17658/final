<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{

    public function login(Request $r){

        $data = [];

        return view('/top',$data);
    }
    public function results(Request $r)
    {



        $data = [

        ];


        return view('results',$data);
    }

    //userResult内にて各ユーザーの削除を行った際の処理
    public function userDelete(Request $r)
    {
        $data = null;
        //userの情報を取得して、DBから削除
        //削除が完了したら変数dataに「削除完了」メッセージを追加
        if(true){
            $data  = "削除完了";
        }
        return view('userResult',compact('data'));
    }

    //addbook内にて書籍の新規登録を実行する処理
    public function addbook(Request $r)
    {
        $data = null;
        //データベースから引っ張ってきた書籍のISBNと一致するか一致しないかを検証
        

        //新規登録が成功すれば変数dataに「登録完了」
        //失敗すれば「登録失敗」的なのを入れてviewに返す
        $data = "登録完了";
        return view('addbook',compact('data'));
    }
    public function createUser(Request $r)
    {

    }
}
