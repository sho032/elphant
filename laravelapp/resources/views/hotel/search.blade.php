<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>部屋検索</title>
    <!-- <a href="hotel/login">メンバーの追加</a> -->
</head>
<body>

    <form action="/hotel/find" method="post">
        @csrf
        <p>チェックイン日(年月日):<input type="date" name="check" value="{{$check}}">
        <input type="submit" value="検索"></p>
    </form>
    @if(isset($item))
        <table>
            <tr>
                <th>予約可能</th>
            </tr>
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        </table>
    
    @endif 
    
</body>
</html>



