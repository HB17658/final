<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/base.css">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div id="new">
    
    <h2 class="title">書籍表示</h2>
    <nav>
        <ul>
            <li><a href="" class="menu">トップページ</a></li>
            <li><a href="" class="menu">詳細検索</a></li>
            <li><a href="" class="menu">履歴</a></li>
            <li><a href="" class="menu">マイページ</a></li>
            <li><a href="" class="menu">ログアウト</a></li>
            <li><a href="" class="menu">ヘルプ</a></li>
        </ul>
    </nav>
    
    <!-- 空白行 -->
    <p></p>

    <form action="" method=""  class="form">
        @csrf
        {{-- 本の検索 --}}
        <div class="text-center"><!--bootstrap-->
        <input type="text" name="" class="textbox"placeholder="検索したい書籍名を入力してください"  required>
        <input type="submit" value="検索" class="searchbtn">
        </div>
    </form>
    </div>
    @section('main')
    @show
    <footer>
        <div>
            <p><small>&copy;2023 ICTエンジニア科</small></p>
        </div>
    </footer>
</body>
</html>