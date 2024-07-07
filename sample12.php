<?php
// セッションを開始
session_start();

// セッション変数をセット
$_SESSION['username'] = 'JohnDoe';
$_SESSION['user_id'] = 12345;
$_SESSION['is_logged_in'] = true;

// セッション変数の値を表示
echo "ユーザー名: " . $_SESSION['username'] . "<br>";
echo "ユーザーID: " . $_SESSION['user_id'] . "<br>";
echo "ログイン状態: " . ($_SESSION['is_logged_in'] ? 'ログイン中' : 'ログアウト') . "<br>";
?>