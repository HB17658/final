<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <h1 class="title">書籍検索</h1>
    <h2 class="subTitle">ログインフォーム</h2>
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