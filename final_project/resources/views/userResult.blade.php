@extends('base')
@section('title', 'ユーザーリスト')
@section('main')
    <h2>ユーザー</h2>
    @foreach
    <table border="1">
        <tr>
            <th colspan="3">ユーザー</th>
        </tr>
        <tr>
            <td><a href="">名前</a></td>
            <td>
                <form action="">
                    <input type="submit" value="削除">
                </form>
            </td>
        </tr>
    </table>
    @endforeach
@endsection
