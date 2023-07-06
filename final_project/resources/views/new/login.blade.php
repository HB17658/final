<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="title">書籍検索</h1>
    <h2 class="subTitle">ログインフォーム</h2>
        <form class="form" action="new/result" method="post">
        @csrf
            <p class="item"><span><i class="fa fa-user"></i></span>ログインID</p>
            <input type="text" name="id" placeholder="ログインIDを入力して下さい" required>
            <p class="item"><span><i class="fa fa-lock"></i></span>パスワード</p>
            <input type="password" name="password" placeholder="パスワードを入力して下さい" required> 
            <input type="submit" class="loginBtn" value="ログイン">
        </form>

<!-- フッター -->
<footer>
        <div>
            <p><small>&copy;2023 ICTエンジニア科</small></p>
        </div>
    </footer>
</body>
</html>