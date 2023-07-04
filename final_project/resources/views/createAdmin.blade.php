@extends('base')
@section('title', '新規管理者登録')
@section('main')

    <h2>新規管理者登録</h2>
    <form action="/createAdmin" method="post">
        @csrf
        <table border="1">
            <tr>
                <td>ID</td>
                <td>

                    <input type="text" required>

                </td>
            </tr>
            <tr>
                <td>PASS</td>
                <td>
                    <input type="text" required>
                </td>
            </tr>
            <tr>
                <td>氏名</td>
                <td>
                    <input type="text" required>
                </td>
            </tr>

        </table>
        <input type="submit" value="登録">
    </form>
@endsection
