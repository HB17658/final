@extends('base')
@section('title', '書籍概要')
@section('main')

    <h2>評価</h2>
    <table border="1">
        <tr>
            <td>評価</td>
            <td>
                <form action="">
                    <input type="number" required>
                </form>
            </td>
        <tr>
            <td>レビュー</td>
            <td>
                <textarea name="" id="" cols="22" rows="5"></textarea>
                </form>
            </td>
    </table>
    <form action="">
        <input type="submit" value="投稿">
    </form>
@endsection
