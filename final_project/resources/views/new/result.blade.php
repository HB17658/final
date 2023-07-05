<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>書籍検索</h1>
    <form action="/new/result" method="post" >
    @csrf
    <p>
        <input type="text" name="searchword" placeholder="検索キーワードを入力してください">
        <input type="submit" value="検索">
    </p>
    </form>
    @if(isset($data))
        <h2>書籍一覧</h2>
        @foreach($data as $d)
                <!-- ログインした直後に書籍一覧を表示するHTML欄 -->
        @endforeach
    @elseif(isset($searchData))
        <h2>検索結果一覧</h2>
            @foreach($searchData as $r)
                <!-- 検索フォームから入力された値から一致した書籍一覧を表示するHTML欄 -->
            @endforeach
    @endif
</body>
</html>