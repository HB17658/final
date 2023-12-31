@extends('base')
@section('title','マイページ')
@section('main')
    <h2>マイページ</h2>

    <!-- if(record=>dept == '管理者') -->
   
    <table>
        <form action="addbook">
            @csrf
            <input type="submit" value="書籍の新規登録">
        </form>
        <form action="userResult">
            @csrf
            <input type="submit" value="ユーザーの削除">
        </form>
        <form action="createAdmin">
            @csrf
            <input type="submit" value="社員ID登録">
        </form>
    </table>
    <!-- endif <br> -->

    <!-- foreach -->
    <table>
        <tr>
            <th colspan="3">タイトル</th>
        </tr>
        <tr>
            <th colspan="3">作者</th>
        </tr>
        <tr>
            <td rowspan="4"><img src="{{ asset('image/chukichi.jpg')}}" alt="50" height="200" width="150"></td>
        </tr>
        <tr>
            <td>レンタル日時</td>
            <td></td>
        </tr>
        <tr>
            <td>返却日時</td>
            <td></td>
        <tr>
            <td colspan="2">
                <form action="">
                    @csrf
                    <input type="submit" value="返却">
                </form>
            </td>
        </tr>
    </table>
    <!-- endforeach -->

@endsection