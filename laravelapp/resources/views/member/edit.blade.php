<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>変更ページ</title>
</head>
<body>
<form action = "/member/edit" method = "post">
    <table>
        @csrf
            <!--  idは書き換えできないようhidden-->
        <input type ="hidden" name="ID" value ="{{$form->ID}}">
        

<!-- 入力部分 -->
        <tr><th>氏名</th><td><input type="text" name="name" value="{{ $form->name }}"></td></tr>
        <tr><th>生年月日</th><td><input type="text" name="birthday"  value="{{ $form->birthday }}"></td></tr>
        <tr><th>年齢</th><td><input type="text" name="age"  value="{{ $form->age }}"></td></tr>
        <tr><th>出身</th><td><input type="text" name="birthplace"  value="{{ $form->birthplace }}"></td></tr>
        <tr><th></th><td><input type="submit" value ="登録"></td></tr>
      </table>
  </form>


<td><a href="/member">メニュー</a></td>
</body>
</html>
 
