<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>書籍検索</h1>
    @if(isset($data))
        <h2>書籍一覧</h2>
        @foreach($data as $d)

        @endforeach
    @else(isset($result))
        <h2>検索結果一覧</h2>
            @foreach($result as $r)

            @endforeach
    @endif
</body>
</html>