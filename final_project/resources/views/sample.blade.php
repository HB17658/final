<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/base.css">
    <title>@yield('title')</title>
    <!-- <style>
        @charset "UTF-8";
.title {
    position: relative;
    font-size: 26px;
    text-align: center;
    border-bottom: 5px solid #dddddd;
}

.title::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 70px;
    height: 5px;
    background-color: #387ccc;
}

nav ul{
display: table;
margin: 0 auto;
padding: 0 ;
width: 80%;
text-align: center;
}
nav li{
display: table-cell;
min-width: 50px;
}
nav a{
display: block;
width: 100%;
text-decoration: none;
color: #555;
padding-bottom: 5px;
}
nav li.current{
border-bottom: 3px solid #92D050;
}
nav li:hover{
color: #E7DA66;
border-bottom: 3px solid #F0E475;
}
/*検索ボタンのサイズ */
input.searchbtn {
    width: 100px;
    height: 50px;
}
/*テキストボックスのサイズ */
input.textbox{
    width: 500px;
    height: 30px;
    text-align: center;
}


    </style> -->
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
        <input type="text" name="" class="textbox"  placeholder="検索したい書籍名を入力してください"  required>
        <input type="submit" value="検索" class="searchbtn">
    </form>
    @section('main')
    @show
</body>
</html>