<?php
session_start();
?>
<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>課題</title>
</head>
<body>
<h1>新規登録情報の入力</h1>
<p>※登録されているメールアドレスは使用不可</p>
<form method="POST" action="list_of_posts.php">
<p>氏名</p>
<input type="text" name="signup_name">
<p>メールアドレス</p>
<input type="text" name="signup_mail">
<p>パスワード</p>
<input type="text" name="signup_pass"><br>
<input type="submit" value="新規登録">
</form><br>
<a href="top.php">トップページに戻る</a>
<a href="top.php">リンクの追加１</a>
<a href="top.php">リンクの追加２</a>
<a href="top.php">リンクの追加３</a>
</body>
</html>
