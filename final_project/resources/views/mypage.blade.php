@extends('base')
@section('title','詳細検索')
@section('main')
    <h2>マイページ</h2>

    <a href="">トップページ</a>
    <a href="">詳細検索</a>
    <a href="">履歴</a>
    <a href="">マイページ</a>
    <a href="">ログアウト</a>
    <a href="">ヘルプ</a><br>

    @if(record=>dept == '管理者')
    <table>
        <form action="bookRegister">
            <input type="submit" value="書籍の新規登録">
        </form>
        <form action="userDelete">
            <input type="submit" value="ユーザーの削除">
        </form>
        <form action="humanRegister">
            <input type="submit" value="社員ID登録">
        </form>
    </table>
    @endif <br>

    @foreach
    <table>
        <tr>
            <th colspan="3">{{タイトル}}</th>
        </tr>
        <tr>
            <th colspan="3">{{作者}}</th>
        </tr>
        <tr>
            <td rowspan="4"><img src="chukichi.jpg" alt="50"></td>
        </tr>
        <tr>
            <td>レンタル日時</td>
            <td>{{$}}</td>
        </tr>
        <tr>
            <td>返却日時</td>
            <td>{{$}}</td>
        <tr>
            <td colspan="2">
                <form action="">
                    <input type="submit" value="返却">
                </form>
            </td>
        </tr>
    </table>
    @endforeach

    @endsection