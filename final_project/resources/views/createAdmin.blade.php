@extends('base')
@section('title', '新規管理者登録')
@section('main')

    <h2>新規管理者登録</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>
                <form action="">
                    <input type="text" required>
                </form>
            </td>
        </tr>
        <tr>
            <td>PASS</td>
            <td>
                <form action="">
                    <input type="text" required>
                </form>
            </td>
        </tr>
        <tr>
            <td>氏名</td>
            <td>
                <form action="">
                    <input type="text" required>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="">
                    <input type="submit" value="登録">
                </form>
            </td>
        </tr>
    </table>
@endsection
