<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ポストデータ2</title>
</head>
<body>
    <form method="post" action="post1.php">
        こんにちは、<?php print e($_POST['name']) ?>さん！！
        <input type="submit" value="送信">
        <!-- <button type="submit">送信</button> -->
    </form>
</body>
</html>