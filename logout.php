<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>課題</title>
</head>
<body>
<?php echo 'ログアウトしました' ?><br>
<?php echo 'メッセージの追加１' ?><br>
<a href="top.php">トップページへ戻る</a>
</body>
</html>
