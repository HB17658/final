<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/base.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div id="new">
    <h1 class="title">書籍検索</h1>
    <form action="/new/result" method="post" >
    @csrf
    <div class="text-center">
    <p>
        <input type="text" name="searchword" class="textbox" placeholder="検索キーワードを入力してください">
        <input type="submit" value="検索" class="searchbtn">
    </p>
    </div>
    </div>
    
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
    <!-- フッター -->
    <footer>
        <div>
            <p><small>&copy;2023 ICTエンジニア科</small></p>
        </div>
    </footer>
</body>
</html>