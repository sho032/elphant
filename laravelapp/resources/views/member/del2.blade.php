<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除ページ</title>
</head>
<body>

<table>
<table>
     <tr>
        <th>id</th>
        <th>氏名</th>
        <th>生年月日</th>
        <th>年齢</th>
        <th>出身</th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->ID}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->birthday}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->birthplace}}</td>
            <td><a href="/member/show?ID={{$item->ID}}" class="btn btn-primary">詳細</a></td>
            <td><a href="/member/del?ID={{$item->ID}}" class="btn btn-primary">削除</a></td>
        </tr>
    @endforeach
    </table>

</table>
<a href="/member/">ホームに戻る</a>
    
</body>
</html>