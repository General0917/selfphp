<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クッキー情報1</title>
</head>
<body>
    <form method="post" action="cookie2.php">
        <label for="email">メールアドレス:</label>
        <input type="text" name="email" size="40" value="<?=e($_COOKIE['email'] ?? '') ?>" />
        <input type="submit" value="送信" />
    </form>
</body>
</html>