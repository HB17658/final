@extends('base')
@section('title', '本の概要ページ')
@section('main')
    <h2>書籍検索</h2>
    <a href="" class="menu">トップページ</a>
    <a href="" class="menu">履歴</a>
    <a href="" class="menu">マイページ</a>
    <a href="" class="menu">ログアウト</a>
    <a href="" class="menu">ヘルプ</a>
    <form action="" method="" class="form">
        @csrf
        {{-- 本の検索 --}}
        <input type="text" name="" required>
        <input type="submit" value="検索" class="searchbtn">
    </form>
@section('main')
@show
@endsection
