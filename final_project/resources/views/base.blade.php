<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h2>書籍表示</h2>
    <a href="" class="menu">トップページ</a>
    <a href="" class="menu">詳細検索</a>
    <a href="" class="menu">履歴</a>
    <a href="" class="menu">マイページ</a>
    <a href="" class="menu">ログアウト</a>
    <a href="" class="menu">ヘルプ</a>
    <form action="" method="" class="form">
        @csrf
        {{-- 本の検索 --}}
        <input type="text" name="" required>
        <input type="submit" value="検索" class="searchbtn">
    </form>
    @section('main')
    @show
</body>
</html>