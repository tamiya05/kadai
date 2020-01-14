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
<h1>掲示板トップページ</h1>
<p>投稿の編集や削除はログインが必要かつ投稿者本人のアカウントでのみ可能</p>
<p>投稿の閲覧は会員登録不要</p>
<p>コメントの追加１</p>
<p>コメントの追加２</p>
<?php if (empty($_SESSION)): ?>
<a href="login.php">ログイン</a><br>
<a href="signup.php">新規会員登録</a><br>
<?php else: ?>
<?php echo $_SESSION['name'] . 'がログイン中'; ?><br>
<a href="logout.php">ログアウト</a><br>
<a href="new_post.php">新規投稿</a><br>
<?php endif; ?>
<a href="list_of_posts.php">投稿を見る</a><br>
</body>
</html>
