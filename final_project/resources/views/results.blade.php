<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍一覧ページ検索結果</title>
</head>
<style>
    #table{
        margin: auto;
    }
</style>
<body>
<div style="text-align: center;">
    <h1>書籍一覧検索結果ページ</h1>
    <a href="">トップページに戻る</a>
    <a href="">マイページ</a>
    <a href="">詳細</a>
    <a href="">履歴</a>
    <a href="">ヘルプ</a>
    <a href="">ログアウト</a>
    <br>
    <br>
    <form action="" method="">
        <input type="text" name="">
        <input type="submit" value="検索">
    </form>
    </div>
    <br>
    <br>
        @foreach
        <table id="table" border="1">
            
            <tr>
                <th rowspan="5">
                    <a href=""><img src="../..///" alt=""></a>
                <td>タイトル</td>
                
                <td><a href="">あああああ</a></td>
                </th>
            </tr>
            <tr>
                <td>作者</td>
                <td>@foreach @endforeach</td>
            </tr>
            <tr>
                <td>カテゴリー</td>
                <td></td>
            </tr>
            <tr>
                <td>貸出可否</td>
                <td></td>
            </tr>
        </table>

</html>