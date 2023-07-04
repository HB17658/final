<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/base.css">
    <title>@yield('title')</title>
</head>
<body>
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

    <form action="" method=""  class="form">
        @csrf
        {{-- 本の検索 --}}
        <input type="text" name="" required>
        <input type="submit" value="検索" class="searchbtn">
    </form>
    @section('main')
    @show
</body>
</html>