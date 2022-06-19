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
                    <!-- くっりくした日にちを表示 -->
                    <tr><th>泊数: </th><td><input type="int" min="1" name="name"></td></tr>
                    <!-- 人数もPOSTで送信 -->
                    <tr><th></th><td><input type="submit" value="予約"></td></tr>
                
            </table>
        </form>
        <a href="hotel/search">部屋検索に戻る</a>
</body>
</html>