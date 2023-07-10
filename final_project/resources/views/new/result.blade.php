<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <title>Document</title>
    <script src="/js/base.js"></script>
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

    <!-- メニューバー -->
    <nav>
        <ul>
            <li><a href="/new/maintenance" class="menu">トップページ</a></li>
            <li><a href="/new/maintenance" class="menu">詳細検索</a></li>
            <li><a href="/new/maintenance" class="menu">履歴</a></li>
            <li><a href="/new/maintenance" class="menu">マイページ</a></li>
            <li><a href="/new/store" id="newRecord">新規登録</a></li>
            <li><a href="/new/maintenance" class="menu">ヘルプ</a></li>
        </ul>
    </nav>
    <!-- メニューバー終わり -->
    
    <hr>
    <!-- カレンダー -->
    </form>
    <div class="wrapper">
        <h2 class="rentalday">貸出期間は30日です</h2><br>
    <h1 id="header"></h1>
    <div id="next-prev-button">
        <button id="prev" onclick="prev()">‹</button>
        <button id="next" onclick="next()">›</button>
    </div>
    <div id="calendar"></div>
    

    <div class = "news-contents">
            <aside><!-- サブ部分 -->
                <h3 class="sub-title">カテゴリー</h3>
                <ul>
                    <li><a href="https://store.kinokuniya.co.jp/event/kinobest2023/">本の紹介</a></li>
                    <li><a href="https://amzn.asia/d/d49KpZK">おすすめ１</a></li>
                    <li><a href="https://amzn.asia/d/6lm1DY4">おすすめ２</a></li>
                    <li><a href="https://amzn.asia/d/iSeHrCz">おすすめ３</a></li>
                </ul>

                <h3 class="sub-title">書籍紹介動画</h3>
                <iframe width="480" height="315" src="https://www.youtube.com/embed/WGZ2Qm_NcEY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="480" height="315" src="https://www.youtube.com/embed/GMMtuR2jrm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </aside>
        </div>
        </div>

    @if(isset($msg))
        <h2>検索結果一覧</h2>
        <p>{{$msg}}</p>
    @elseif(isset($results))
    
        <!-- タイトルヘッダー -->
        <header class="post-info">
            <h2 class="post-title">書籍の詳細</h2>
            <p class="post-data">書籍 <span>一覧</span></p>
        </header>
        
        
        
        <!-- <div class ="news-contents wrapper"> -->
            @foreach($results as $result)
            <!-- メイン部分 -->
            
            <article>
            <!-- ログインした直後に書籍一覧を表示するHTML欄 -->
            <form action="/new/info" method="GET" >
                <table>
                
                    <tr><th colspan="3" class="booktitle">{{$result->title}}</a></th></tr>
                    <tr><th colspan="3" class="bookauthor">{{$result->author_name}}</th></tr>
                    <tr>
                        <td rowspan="3" style="width: 150px">
                         
                            <img src="{{ $result->image}}" alt="50" height="200" width="150">
                            
                        </td>
                    </tr>
                    <tr>
                    <td class="bookOverview">本の概要</td>
                    </tr>
                    <tr>
                        <td>{{$result->info}}</td>
                    </tr>
                
                </table>
            </form>
            </article>
            @endforeach
            <br>
            {{ $results->links() }}
            
        <!-- </div>元の位置 -->
    @elseif(isset($searchData))
        <!-- タイトルヘッダー -->
        <header class="post-info">
            <h2 class="post-title">検索の詳細</h2>
            <p class="post-data">検索 <span>一覧</span></p>
        </header>
        
        <!-- カレンダー -->
    
    <script src="/js/base.js"></script>
        <!-- <h2>検索結果一覧</h2> -->
        
            @foreach($searchData as $r)
                    <!-- 検索フォームから入力された値から一致した書籍一覧を表示するHTML欄 -->
                <article>
                <table>
                <tr><th colspan="3" class="booktitle">{{$r->title}}</th></tr>
                <tr><th colspan="3" class="bookauthor">{{$r->author_name}}</th></tr>
                <tr>
                    <td rowspan="3" style="width: 150px"><img src="{{ $r->image}}" alt="50" height="200" width="150"></td>
                </tr>
                <tr >
                <td class="bookOverview">本の概要</td>
                </tr>
                <tr>
                    <td>{{$r->info}}</td>
                </tr>
                
                </table>
                <br>
                </article>
            @endforeach
            <br>
            {{ $searchData->links() }}

    @endif


    
        <!-- フッター -->
        <footer class="content-wrapper">
            <div>
                <p><small>&copy;2023 ICTエンジニア科</small></p>
            </div>
        </footer>
</body>
</html>