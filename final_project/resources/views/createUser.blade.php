<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規ユーザー登録</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>

<body>
    <form action="/login" method="POST">
        @csrf
        <h2>新規ユーザー登録</h2>
        <p>ID <input type="text" title="●文字以上で設定してください"></p>
        <p>pass <input type="password" title="●文字以上で設定してください"></p>
        <p>pass 確認用(再入力) <input type="password" title="間違いがないか確認のためもう一度入力してください"></p>
        <input type="submit" value="登録">
    </form>
    <a href="./login">ログイン画面に戻る</a>
</body>
</html>
