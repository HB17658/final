@extends('base')
@section('title','詳細検索')
@section('main')
    <h2>書籍表示</h2>

    <a href="">トップページ</a>
    <a href="">詳細検索</a>
    <a href="">履歴</a>
    <a href="">マイページ</a>
    <a href="">ログアウト</a>
    <a href="">ヘルプ</a>

    <form action="" method="">
        @csrf
        {{-- 本の検索 --}}
        <input type="text" name="" required>
        <input type="submit" value="検索">
    </form>


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