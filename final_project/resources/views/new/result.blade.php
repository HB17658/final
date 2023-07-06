<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/base.css">
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
    <!-- ヘッダー検索 -->
<div id="new">
    <h1 class="title">書籍検索</h1>
    <p class="right"><a href="/new/login" class="btn btn--orange" >ログアウト</a></p>
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
        <h2>検索結果一覧</h2>
        <p>{{$msg}}</p>
    @elseif(isset($results))
    
        <!-- タイトルヘッダー -->
        <header class="post-info">
            <h2 class="post-title">書籍の詳細</h2>
            <p class="post-data">書籍 <span>一覧</span></p>
        </header>
        
        <div class = "content-wrapper">
            @foreach($results as $result)
            <!-- ログインした直後に書籍一覧を表示するHTML欄 -->
            
            <table>
                
                <tr><th colspan="3" class="booktitle">{{$result->title}}</a></th></tr>
                <tr><th colspan="3" class="bookauthor">{{$result->author_name}}</th></tr>
                <tr>
                    <td rowspan="4"><img src="{{ asset($result->image)}}" alt="50" height="200" width="150"></td>
                </tr>
                <tr>
                <td class="bookOverview">本の概要</td>
                </tr>
                <tr>
                    <td>{{$result->info}}</td>
                </tr>
                
                </table>
            
            
                <br>
            @endforeach
        </div>
    @elseif(isset($searchData))
        <!-- タイトルヘッダー -->
        <header class="post-info">
            <h2 class="post-title">検索の詳細</h2>
            <p class="post-data">検索 <span>一覧</span></p>
        </header>

        <!-- <h2>検索結果一覧</h2> -->
        <div class = "content-wrapper">
            @foreach($searchData as $r)
                    <!-- 検索フォームから入力された値から一致した書籍一覧を表示するHTML欄 -->
                <table>
                <tr><th colspan="3" class="booktitle">{{$r->title}}</th></tr>
                <tr><th colspan="3" class="bookauthor">{{$r->author_name}}</th></tr>
                <tr>
                    <td rowspan="4"><img src="{{ asset($r->image)}}" alt="50" height="200" width="150"></td>
                </tr>
                <tr>
                <td class="bookOverview">本の概要</td>
                </tr>
                <tr>
                    <td>{{$r->info}}</td>
                </tr>
                
                </table>
                <br>
            @endforeach
        </div>
    @endif


    
        <!-- フッター -->
        <footer>
            <div>
                <p><small>&copy;2023 ICTエンジニア科</small></p>
            </div>
        </footer>
</body>
</html>