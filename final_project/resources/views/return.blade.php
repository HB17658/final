@extends('base')
@section('title', '書籍概要')
@section('main')

    <h2>評価</h2>
    <form action="/createAdmin" method="post">
        @csrf
        <table>
            <tr>
                <td>評価</td>
                <td>
                    <input type="number" required>
                </td>
            <tr>
                <td>レビュー</td>
                <td>
                    <textarea name="" id="" cols="22" rows="5"></textarea>
    </form>
    </td>
    </table>
    <input type="submit" value="投稿">
    </form>
@endsection
