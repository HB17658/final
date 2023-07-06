<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍新規登録</title>
</head>
<body>
    <h1>書籍新規登録</h1>
    <form action="/new/store" method="post">
        @csrf
        <input type="number" name="ISBN">
        <input type="submit" value="登録">
    </form>
    
</body>
</html>