@extends('base')
@section('title', '本の概要ページ')
@section('main')
    <h2>書籍検索</h2>
    <form action="" method="" class="form">
        @csrf
        {{-- 本の検索 --}}
        <input type="text" name="" required>
        <input type="submit" value="検索" class="searchbtn">
    </form>
@section('main')
@show
@endsection
