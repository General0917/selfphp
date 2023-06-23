<?php setcookie('email', $_POST['email'], time() + (60 * 60 * 24 * 90)); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クッキー情報2</title>
</head>
<body>
    <form method="post" action="cookie1.php">
        クッキーを保存しました。
        <input type="submit" value="戻る">
    </form>
</body>
</html>