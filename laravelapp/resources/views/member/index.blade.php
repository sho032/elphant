<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
            <!-- <td></td>詳細ボタン設置予定 -->
        </tr>
    @endforeach
    </table>
    
</body>
</html>