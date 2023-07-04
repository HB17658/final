<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー詳細</title>
</head>

<body>
    <h2>ユーザー情報</h2>
    <h3>名前</h3>
    <table border="1">
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
        <tr>
            <td colspan="2">
                <form action="">
                    <input type="submit" value="削除">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>