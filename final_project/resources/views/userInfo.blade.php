@extends('base')
@section('title','ユーザー情報')
@section('main')
<h2>ユーザー情報</h2>
<h3>名前</h3>
<table>
    <tr>
        <td>レンタル中</td>
        <td>{{$}}</td>
    </tr>
    <tr>
        <td>評価</td>
        <td>{{$}}</td>
    </tr>
    <tr>
        <td>超過回数</td>
        <td>{{$}}</td>
    </tr>
</table>
<form action="">
    @csrf
    <input type="submit" value="削除">
</form>
    @endsection