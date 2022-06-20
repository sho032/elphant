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
            <table>
                    @csrf
                    <tr><th>氏名: </th><td><input type="text" name="name"></td></tr>
                    <tr><th>TEL: </th><td><input type="tel" name="tel"></td></tr>
                    <tr><th>パスワード: </th><td><input type="password" name="name"></td></tr>
                    <tr><th></th><td><input type="submit" value="作成"></td></tr>
                
            </table>
        </form>
</body>
</html>