<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <link rel="stylesheet" href="/css/base.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>書籍新規登録</title>
</head>
<body>
<div id="new">
    <h1 class="title">書籍新規登録</h1>
    <p class="right"><a href="/new/login" class="btn btn--orange" >ログアウト</a></p>
    <form action="/new/store" method="post">
        @csrf
        <div class="text-center">
        <p>
        <input type="number" name="ISBN">
        <input type="submit" value="登録">
        </p>
    </form>
    <a href="/new/result">前の画面に戻る</a>
</div>
    
</body>
</html>