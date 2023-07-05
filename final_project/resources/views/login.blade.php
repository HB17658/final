<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>
<body>
    <!-- ログインフォーム -->
    <form action="/top" method="POST">
        @csrf
        <h2>ログイン</h2>
            <p>ID <input type="text"></p>
            <p>pass <input type="password"></p>
            <input type="submit">
    </form>
    <!-- 新規ユーザー登録 -->
    
        <h2>新規ユーザー登録</h2>
        <a href="./createUser">新規登録はこちら</a>
    
</body>
</html>