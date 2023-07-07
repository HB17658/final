<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/login.css">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<script>
    // ページ遷移の制御
    history.pushState(null, null, location.href);
    window.addEventListener('popstate', function(event) {
        history.pushState(null, null, location.href);
    });
</script>
<body>
    <h1 class="title">書籍検索</h1>
    <div class="loginForm">
    <h2 class="subTitle"><span><i class="fa fa-chevron-circle-right" style="color:#387ccc;"></i></span> ログインフォーム</h2>
        <form class="form" action="new/result" method="post">
        @csrf
            <p class="item"><span><i class="fa fa-user fa-bounce"></i></span> ログインID</p>
            <div class="inputMargin">
            <input type="text" name="id" placeholder="ログインIDを入力して下さい" required></div>
            <p class="item"><span><i class="fa fa-lock fa-bounce"></i></span> パスワード</p>
            <div class="inputMargin"><input type="password" name="password" placeholder="パスワードを入力して下さい" required></div>
            <input type="submit" class="loginBtn" value="ログイン">
        </form>
        </div>

<!-- フッター -->
<footer>
        <div>
            <p><small>&copy;2023 ICTエンジニア科</small></p>
        </div>
    </footer>
</body>
</html>