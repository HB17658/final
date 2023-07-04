@extends('base')
@section('title', '本の概要ページ')
@section('main')
    <h1>
        書籍一覧検索結果ページ</h1>
    <form action="" method="">
        <input type="text" name="">
        <input type="submit" value="検索">
    </form>


    <table>
        <tr>
            <th colspan="3">タイトル</th>
        </tr>
        <tr>
            <th colspan="3">作者</th>
        </tr>
        <tr>
            <td rowspan="4"><img src="{{ asset('image/chukichi.jpg')}}" alt="50" height="200" width="150"></td>
        </tr>
        <tr>
            <td>レンタル日時</td>
            <td></td>
        </tr>
        <tr>
            <td>返却日時</td>
            <td></td>
        <tr>
            <td colspan="2">
                <form action="">
                    <input type="submit" value="返却">
                </form>
            </td>
        </tr>
    </table>

@endsection
