<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="css/login.css">
=======
    <link rel="stylesheet" href="css/base.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
>>>>>>> 3b13c6e3dc5170755f891fbae9cf6378658e72a7
</head>
<body>

    <h1 class="title">書籍検索</h1>
<<<<<<< HEAD
    <h2 class="subTitle">ログインフォーム</h2>
        <form action="new/result" method="post">
=======
    <h2>ログインフォーム</h2>
        <form action="/new/result" method="post">
>>>>>>> 3b13c6e3dc5170755f891fbae9cf6378658e72a7
        @csrf
            <p>ログインID</p>
            <input type="text" name="id" placeholder="ログインIDを入力して下さい" required>
            <p>パスワード</p>
            <input type="password" name="password" placeholder="パスワードを入力して下さい" required> 
            <input type="submit" value="ログイン">
        </form>

</body>
</html>