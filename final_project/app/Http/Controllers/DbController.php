<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{

    //ログイン画面でのログイン処理
    public function login(Request $r){
    //login.blade.phpで入力されたID PASSを取得し
    //DB内のempテーブル内に存在しているかチェック
        //ifで一致してなければログイン画面に戻す
        //存在していてパスワードが一致していればtopページへ
        return view('/top');
    }

    //検索フォームから受け取った文字列から一致する書籍を検索し
    //連想配列に入れて返す
    public function results(Request $r)
    {

        //requestオブジェクトから入力されていた文字列を取り出して
        //一致するものを検索

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

        $data = "おごごごごご";
        
        return view('createUser',compact('data'));
    }
}
