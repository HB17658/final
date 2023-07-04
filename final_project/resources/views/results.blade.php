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
            <th rowspan="5">
                <a href=""><img src="" alt=""></a>
            <td>タイトル</td>

            <td><a href="">タイトル</a></td>
            </th>
        </tr>
        <tr>
            <td>作者</td>
            <td>
            </td>
        </tr>
        <tr>
            <td>カテゴリー</td>
            <td></td>
        </tr>
        <tr>
            <td>貸出可否</td>
            <td></td>
        </tr>

    </table>

@endsection
