@extends('base')
@section('title','本の概要ページ')
@section('main')
    <h2>検索結果</h2>
<form action="" method="">
        @csrf
        @if
        ユーザー名<input type="text" name="" required><br>
        パスワード<input type="text" name="" required>
        <input type="submit" value="ログイン">
    </form>
    </p> -->
    <table>
        <tr>
            <th colspan="3">{{タイトル}}</th>
        </tr>
        <tr>
            <th colspan="3">{{作者}}</th>
        </tr>
        <tr>
            <td rowspan="8"><img src="chukichi.jpg" alt="50"></td>
        </tr>
        <tr>
            <td>ジャンル</td>
            <td>{{$}}</td>
        </tr>
        <tr>
            <td>出版年</td>
            <td>{{$}}年</td>
        </tr>
        <tr>
            <td>出版社</td>
            <td>{{$}}</td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td>{{$}}</td>
        </tr>
        <tr>
            <td colspan="2">概要{{$}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="">
                    <input type="submit" value="レンタル">
                </form>
            </td>
        </tr>
    </table><br>
    <a href="">全ての評価を見る</a>
    <table>
        <tr>
            <th>評価</th>
            <td>{{☆☆☆☆☆}}</td>
        </tr>
        <tr>
            <th>レビュー</th>
            <td>{{$}}</td>
        </tr>
    </table><br>
@endsection