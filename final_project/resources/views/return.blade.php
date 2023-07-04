@extends('base')
@section('title','書籍概要')
@section('main')

    <h2>評価</h2>
    <table border="1">
        <tr>
            <td>評価</td>
            <td>{{$}}</td>
        </tr>
        <tr>
            <td>レビュー</td>
            <td>{{$}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="">
                    <input type="submit" value="投稿">
                </form>
            </td>
        </tr>
    </table>
    @endsection