@extends('base')
@section('title', '本の概要ページ')
@section('main')

    <h1>
        書籍一覧検索結果ページ</h1>


    <table border="1">
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
            <td colspan="2">概要</td>
        </tr>
        <tr>
            <td colspan="2" rowspan="2">dadadadadadadw</td>
        </tr>

    </table>

@endsection
