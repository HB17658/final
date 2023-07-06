<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

    $url = 'https://api.openbd.jp/v1/get?limit=5';
    
    // HTTP GETリクエストを送信
    $response = file_get_contents($url);
    
    // レスポンスデータをJSONから連想配列に変換
    $data = json_decode($response, true);
    
    // 書籍情報を表示
    foreach ($data as $book) {
        echo 'タイトル: ' . $book['summary']['title'] . '<br>';
        echo '著者: ' . $book['summary']['author'] . '<br>';
        echo '出版社: ' . $book['summary']['publisher'] . '<br>';
        echo '<hr>';
    }
    
    ?>
<body>
    
</body>
</html>