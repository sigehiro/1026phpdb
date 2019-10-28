<?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html');
    }

    require_once('function.php');

    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されていません。';
    } else {
        $nickname_result = 'ようこそ、' . $nickname .'様';
    }

    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません。';
    } else {
        $email_result = 'メールアドレス：' . $email;
    }

    if ($message == '') {
        $message_result =  'お問い合わせ内容が入力されていません。';
    } else {
        $message_result = 'お問い合わせ内容：' . $message;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($message_result); ?></p>

    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($nickname != '' && $email != '' && $message != ''): ?>
        <button type="submit">OK</button>
        <?php endif; ?>
    </form>
</body>
</html>