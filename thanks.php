<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html');
    }


    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once('function.php');
    require_once('db.php');

    $stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, message) VALUES (?, ?, ?)');
    $stmt->execute([$nickname, $email, $message]);//?を変数に置き換えてSQLを実行
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>★お問い合わせありがとうございました！★</h1>
    <p><?php echo "名前####".h($nickname); ?></p>
    <p><?php echo "アドレス####".h($email); ?></p>
    <p><?php echo "コメント####".h($message); ?></p>
    <!-- あえて日本語＋＃＃＃＃を入れてみた -->
</body>
</html>