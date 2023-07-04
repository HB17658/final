<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h2>書籍検索の課題</h2>
    <a href="/top" class="menu">トップページ</a>
    <a href="/search" class="menu">詳細検索</a>
    <a href="/mypage" class="menu">マイページ</a>
    <a href="/login" class="menu">ログアウト</a>
    <a href="http://m-search.jp/ggrks/" class="menu">ヘルプ</a>
    <form action="/results" method="post" class="form">
        @csrf
        {{-- 本の検索 --}}
        <input type="text" name="" required>
        <input type="submit" value="検索" class="searchbtn">
    </form>
    @section('main')
    @show
</body>
</html>