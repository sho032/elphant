<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <a href="hotel/login">メンバーの追加</a>
</head>
<body>

    <form action="/hotel/login" method="post">
        @csrf
        <p>チェックイン: </th><td><input type="date" name="check" value="{{check}}"></p>
        <input type="submit" value="検索">
    </form>
    @if(isset($item))
    <table>
    <tr><th>予約可能</th></tr>
    <tr>
        <td>{{$item->getdate()}}</td>
    </tr>
    </table>
    @endif
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <a href="hotel/login">メンバーの追加</a>
</head>
<body>

    <form action="/hotel/login" method="post">
        @csrf
        <p>チェックイン: </th><td><input type="date" name="check" value="{{check}}"></p>
        <input type="submit" value="検索">
    </form>
    @if(isset($item)){
        <p>予約不可</p>   
    }@else{
        <table>
            <tr><th>予約可能</th></tr>
            <form action="/hotel/reserv" method="post">
                @csrf
                <tr><td>{{cheak}}</td></tr>
                <tr><th></th><td><input type="submit" value="予約"></td></tr>
            </form>
        </table>
    }
    @endif
</body>
</html> -->