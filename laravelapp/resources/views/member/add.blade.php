<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>追加ページ</title>
    </head>
    <body>
        <form action="/member/add" method="post">
            <table>
                    @csrf
                    <tr><th>ID: </th><td><input type="text" name="ID"></td></tr>
                    <tr><th>氏名: </th><td><input type="text" name="name"></td></tr>
                    <tr><th>生年月日: </th><td><input type="text" name="birthday"></td></tr>
                    <tr><th>年齢: </th><td><input type="int" name="age"></td></tr>
                    <tr><th>出身: </th><td><input type="text" name="birthplace"></td></tr>

                    <tr><th></th><td><input type="submit" value="追加"></td></tr>
                
            </table>
        </form>
    </body>
</html>


