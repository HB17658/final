@extends('base')
@section('title','マイページ')
@section('main')

<h2>本のタイトル</h2>
@foreach
<table>
    <tr>
        <td>評価</td>
        <td>{{点数}}</td>
    </tr>
    <tr>
        <td>レビュー</td>
        <td>{{レビュー内容}}</td>
    </tr>
</table>
@endforeach