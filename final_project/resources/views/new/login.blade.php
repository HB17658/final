<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>書籍検索</h1>
    <a href=""></a>
    <h2>ログインフォーム</h2>
        <form action="new/result" method="post">
        @csrf
            <p>ログインID</p>
            <input type="text" name="id" placeholder="ログインIDを入力して下さい" required>
            <p>パスワード</p>
            <input type="password" name="password" placeholder="パスワードを入力して下さい" required> 
            <input type="submit" value="ログイン">
        </form>

</body>
</html>