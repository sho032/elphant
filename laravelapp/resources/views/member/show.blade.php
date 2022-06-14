<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細ページ</title>
</head>
<body>

    <table>
        <tr>
            <th>ID</th>
            <td>{{$item->ID}}</td>
        </tr>
        <tr>
            <th>氏名</th>
            <td>{{$item->name}}</td>
        </tr>
        <tr>
            <th>生年月日</th>
            <td>{{$item->birthday}}</td>
        </tr>
        <tr>
            <th>年齢</th>
            <td>{{$item->age}}</td>
        </tr>
        <tr>       
            <th>出身</th>
            <td>{{$item->birthplace}}</td>
        </tr>
        
    </table>
    <a href="member">ホームに戻る</a>
    
</body>
</html>