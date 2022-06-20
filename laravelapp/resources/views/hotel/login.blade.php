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
                    <tr><th>email: </th><td><input type="email" name="email"></td></tr>
                    <tr><th>パスワード: </th><td><input type="password" name="password"></td></tr>
                    <tr><th></th><td><input type="submit" value="login"></td></tr>
                
            </table>
        </form>
        <a href="hotel/new">アカウントの作成はこちら</a>
</body>
</html>