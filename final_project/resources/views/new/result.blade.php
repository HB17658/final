<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/base.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div id="new">
    <h1 class="title">書籍検索</h1>
    <p class="right"><a href="/" class="btn btn--orange" >ログアウト</a></p>
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
    @if(isset($msg))
    <p>{{$msg}}</p>
    @endif
    @if(isset($results))
    
        <!-- タイトルヘッダー -->
        <header class="post-info">
            <h2 class="post-title">書籍の詳細</h2>
            <p class="post-data">書籍 <span>一覧</span></p>
        </header>
    
        <h2>書籍一覧</h2>
        @foreach($results as $result)
                <!-- ログインした直後に書籍一覧を表示するHTML欄 -->
                <table>
        <tr><th colspan="3">{{$result->title}}</th></tr>
        <tr><th colspan="3">{{$result->author_name}}</th></tr>
        <tr>
            <td rowspan="4"><img src="" alt="50" height="200" width="150"></td>
        </tr>
        <tr>
            <td>本の概要</td>
            <td></td>
        </tr>
        <tr>
            <td>返却日時</td>
            <td></td>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
    

        @endforeach
    @elseif(isset($searchData))
        <h2>検索結果一覧</h2>
            @foreach($searchData as $r)
                <!-- 検索フォームから入力された値から一致した書籍一覧を表示するHTML欄 -->
                <table>
                    <tr><th colspan="3">{{$result->title}}</th></tr>
                    <tr><th colspan="3">{{$result->author_name}}</th></tr>
                    <tr>
                        <td rowspan="4"><img src="" alt="50" height="200" width="150"></td>
                    </tr>
            @endforeach
    @endif


    @if(isset($id))
    <p>{{$id}}</p>
    <p>{{$password}}</p>
    @endif
    
        <!-- フッター -->
        <footer>
            <div>
                <p><small>&copy;2023 ICTエンジニア科</small></p>
            </div>
        </footer>
</body>
</html>