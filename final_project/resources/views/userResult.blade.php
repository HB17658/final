@extends('base')
@section('title', 'ユーザーリスト')
@section('main')
    <h2>ユーザー</h2>
    @if(isset($data))
        <p>{{$data}}</p>
    @endif
    <!-- foreach -->
    <form action="userResult" method="post">
    @csrf
    <table border="1">
        <tr>
            <th colspan="3">ユーザー</th>
        </tr>
        <tr>
            <!-- 後々name=""を追加 -->
            <td><a href="" >名前</a></td>
            <td>
                <input type="submit" value="削除">
            </td>
        </tr>
    </table>
    </form>
    <!-- endforeach -->
@endsection
