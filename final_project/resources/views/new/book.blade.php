<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>本の詳細</title>
</head>

<body>
    <h2>書籍表示</h2>
    @foreach($result as $r)
    <table>
        <tr>
            <th colspan="3">{{$r->title}}</th>
        </tr>
        <tr>
            <th colspan="3">{{$r->author_name}}</th>
        </tr>
        <tr>
            <td rowspan="8"><img src="{{$result->image}}" alt="50"></td>
        </tr>
        <tr>
            <td>出版日</td>
            <td>{{$r->year}}</td>
        </tr>
        <tr>
            <td>出版社</td>
            <td>{{$r->company}}</td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td>{{$r->ISBN}}</td>
        </tr>
        <tr>
            <td>概要</td>
            <td>{{$r->info}}</td>
        </tr>
    </table>
    @endforeach
</body>

</html>