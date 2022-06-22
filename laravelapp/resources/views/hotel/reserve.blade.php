<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約画面</title>
    <!-- <a href="hotel/login">メンバーの追加</a> -->
</head>
<body>
<form action="/hotel/reserve" method="post">
    @if(Auth::check())
    {{$user->userid}}
    @endif
            <table>
                    @csrf
                    <tr><th>チェックイン日: </th><td><input type="date" name="check" value="{{$check}}" ></td></tr>
                    <tr><th>泊数: </th><td><input type="int" name="stay" value="{{$stay}}" ></td></tr>
                    <tr><td><input type="hidden" name="userid" value="{{$user}}"></td></tr>
                    <tr><td><input type="hidden" name="roomid" value="{{$roomid}}"></td></tr>
                    <tr><th></th><td><input type="submit" value="予約"></td></tr>         
            </table>
        </form>
        <a href="hotel/search">部屋検索に戻る</a>
</body>
</html>