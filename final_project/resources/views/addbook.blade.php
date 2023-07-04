@extends('base')
@section('title','書籍登録')
@section('main')
    <h2>書籍登録</h2>
    <table border="1">
        <tr>
            <td>ISBN</td>
            <td><form action="">
                <input type="text" required>
            </form>
        </td>
        </tr>
        <tr>
            <td>タイトル</td>
            <td><form action="">
                <input type="text" required>
            </form>
        </td>
        </tr>
        <tr>
            <td>著者名</td>
            <td><form action="">
                <input type="text" required>
            </form>
        </td>
        </tr>
        <tr>
            <td>概要</td>
            <td><form action="">
                <input type="text" required>
            </form>
        </td>
        </tr>
        <tr>
            <td>出版社</td>
            <td><form action="">
                <input type="text" required>
            </form>
        </td>
        </tr>
        <tr>
            <td>出版年</td>
            <td><form action="">
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